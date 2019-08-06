<?php
/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 10/01/2019
 * Time: 11:34
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class FornitoriLH {

    function enableACS($bean) {

        //require_once 'custom/Extension/application/PickLog.php';

        if ($bean->ingresso_acs_c == '1' &&
            ($bean->acs_url_c == "http://" || $bean->acs_url_c == "https://")
        ) {

            $bean->acs_url_c = $this->send2ACS($bean->id,$bean->name,$bean->description,$bean->phone_office,$bean->email1);

        } else if ($bean->ingresso_acs_c == '0') {

            $this->checkOut($bean->id);
            $bean->acs_url_c = "";

        } else $bean->acs_url_c = $this->send2ACS($bean->id,$bean->name,$bean->description,$bean->phone_office,$bean->email1);

    }


    function send2ACS($id,$nome,$note,$telefono,$email) {

        include 'custom/Extension/application/amanda_connect.php';
        require_once 'custom/Extension/application/PickLog.php';

        //push to FOP / ACS
        $company = str_replace("'","''",$nome);
        $tel1 = $telefono;
        $note = str_replace("'","''",$note);
        $status = "FRNT";

        //todo: servizi acquistati con contratto!!!!

        $is_present = $conn2->query("SELECT id FROM visual_phonebook WHERE crm_id = '".$id."'");

        if ($is_present->num_rows == 0) {
            $update_sql = "INSERT INTO visual_phonebook (firstname, lastname, company, phone1, phone2, phone3, email, note, note2, note3, crm_id, tcm, tipo)
                          VALUES ('', '', '".$company."', '".$tel1."', '', '', '".$email."', '".$note."', '', '', '".$id."','', '".$status."')";
        } else { $update_sql = "UPDATE visual_phonebook SET firstname = '', lastname = '', company = '".$company."', phone1 = '".$tel1."', phone2 = '', phone3 = '',
                                    email = '".$email."', note = '".$note."', note2 = '', note3 = '', tcm = '', tipo = '".$status."' WHERE crm_id = '".$id."' ";
        }

        $conn2->query($update_sql);

        //preparo link ACS
        $id_acs_array = $conn2->query("SELECT id,pin FROM visual_phonebook WHERE crm_id = '".$id."'")->fetch_assoc();
        $id_acs = $id_acs_array['id'];
        $id_pin = $id_acs_array['pin'];
        return $acs_url = "http://acs.pickcenter.com/pinutils/vbdetail.php?vbid=".$id_acs."&vbpin=".$id_pin;

        //pick log
        global $current_user;
        $user = $current_user->first_name . " " . $current_user->last_name;
        $content = "Effettuato check-in ACS per cliente: " . $bean->first_name . " " . $bean->last_name . PHP_EOL .
            "SQL=--" . $update_sql . "--" .PHP_EOL .
            "ACS=--" . $bean->acs_url_c . "--" .
            "RIGHE=--" . $conn2->affected_rows . "--";

        //per il .log del CRM
        $params = array(
            'app' => 'CRM',
            'action' => 'CHECKIN_ACS_FORNITORE',
            'content' => $content,
            'user' => $user,
            'description' => 'Aggiunto/aggiornato un utente fornitore ACS',
            'origin' => 'crm.leads',
            'destination' => 'PBX Visual Phonebook => ACS',);
        sendLog($params);
    }


    function sendErrorMail($content,$subject="Errore nell'invio di PEC e CDU") {

        require_once 'include/SugarPHPMailer.php';

        $mail = new SugarPHPMailer();
        $mail->CharSet="UTF-8";
        $mail->isSMTP();
        $mail->From = 'info@pickcenter.com';
        $mail->FromName = 'Pick Center CRM';
        $mail->Subject = $subject;

        $mail->Body_html = from_html($content);
        $mail->Body = wordwrap($content,1000);
        $mail->isHTML(true);
        $mail->addAddress('cea@pickcenter.com','LC');
        $mail->addAddress('bucci@pickcenter.com','MB');
        $mail->addAddress('roberta@pickcenter.com','RG');
        $mail->addAddress('max@swhub.io','MS'); //for testing

        $mail->prepForOutbound();
        $mail->setMailerForSystem();

        $mail->send();

    }

    function getPhoneBookId($id) {
        include 'custom/Extension/application/amanda_connect.php';
        $aresult= $conn2->query("SELECT id FROM visual_phonebook WHERE crm_id='{$id}'");
        $results = $aresult->fetch_assoc();
        return $result = $results['id'];
    }

    function checkOut($id) {

        include 'custom/Extension/application/amanda_connect.php';
        require_once 'custom/Extension/application/PickLog.php';

            $vbid = $this->getPhoneBookId($id);

            $sqldelvb = "DELETE FROM visual_phonebook WHERE crm_id = '".$id."'";
            $sqldelacs = "delete from acs_phoneb_doors where phoneb_id = '{$vbid}'";

            $conn2->query($sqldelvb);
            $conn->query($sqldelacs);



            //pick log
            global $current_user;
            $user = $current_user->first_name . " " . $current_user->last_name;
            $righe = $conn->affected_rows + $conn2->affected_rows;
            $content = "Effettuato check-out ACS per cliente: " . $bean->first_name . " " . $bean->last_name . PHP_EOL .
                "SQL1=--" . $sqldelvb . "--" . PHP_EOL .
                "SQL2=--" . $sqldelacs . "--" . PHP_EOL .
                "RIGHE=--" . $righe . "--";

            //per il .log del CRM
            $params = array(
                'app' => 'CRM',
                'action' => 'CHECKOUT_ACS_FORNITORE',
                'content' => $content,
                'user' => $user,
                'description' => 'Eliminato utente ACS e relative WiFi',
                'origin' => 'crm.leads',
                'destination' => 'PBX Visual Phonebook => ACS',);
            sendLog($params);

        }





}