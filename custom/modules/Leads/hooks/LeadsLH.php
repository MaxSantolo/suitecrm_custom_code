<?php
/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 19/10/2018
 * Time: 15:22
 */
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class LeadsLH {

    function inStates($value) {
        $statia = array('Converted','autorizzato','ammin','MNTN','FRTN','DRZN','SWH','DPND');
        if (in_array($value,$statia)) return true; else return false;
    }

    function FirstLastNameUpperCase($bean) {
        $bean->first_name = $bar = ucwords(strtolower($bean->first_name));
        $bean->last_name = $bar = ucwords(strtolower($bean->last_name));


    }

    function StripTelephoneNumbers($bean) {

        $bean->phone_home = preg_replace('/[^0-9]/', '', $bean->phone_home);
        $bean->phone_mobile = preg_replace('/[^0-9]/', '', $bean->phone_mobile);
        $bean->phone_work = preg_replace('/[^0-9]/', '', $bean->phone_work);
        $bean->phone_other = preg_replace('/[^0-9]/', '', $bean->phone_other);
        $bean->phone_fax = preg_replace('/[^0-9]/', '', $bean->phone_fax);
        $bean->cellulare_notifiche_c = preg_replace('/[^0-9]/', '', $bean->cellulare_notifiche_c);
    }

    function LeadCheckIn($bean) {

        include 'custom/Extension/application/amanda_connect.php';
        if ($this->inStates($bean->status)) {

        //push to FOP / ACS
        $firstname = str_replace("'","''",$bean->first_name); //trasformare in funzione
        $lastname = str_replace("'","''",$bean->last_name);
        $company = str_replace("'","''",$bean->account_name) . ' | ' . str_replace("'","''",$bean->last_name);
        $email = $bean->email1;
        if ($bean->tccode_c == '') {
        $tel1 = $bean->phone_mobile;
        } else $tel1 = '*'.$bean->tccode_c.'*770'.$bean->phone_mobile;
        $tel2 = $bean->phone_work;
        $tel3 = $bean->selpass_c;
        $note = str_replace("'","''",$bean->foptext_c);
        $note2 = str_replace("'","''",$bean->fopanswer_c);
        $note3 = str_replace("'","''",$bean->instructions_c);
        $tcm = $bean->tcmcodes_c;
        $status = $bean->status;

        //to do servizi acquistati con contratto!!!!
        $is_present = $conn2->query("SELECT id FROM visual_phonebook WHERE crm_id = '".$bean->id."'");
        if ($is_present->num_rows == 0) {
            $update_sql = "INSERT INTO visual_phonebook (firstname, lastname, company, phone1, phone2, phone3, email, note, note2, note3, crm_id, tcm, tipo)
                          VALUES ('".$firstname."', '".$lastname."', '".$company."', '".$tel1."', '".$tel2."', '".$tel3."', '".$email."', '".$note."', '".$note2."', '".$note3."', '".$bean->id."','".$tcm."', '".$status."')";
            } else { $update_sql = "UPDATE visual_phonebook SET firstname = '".$firstname."', lastname = '".$lastname."', company = '".$company."', phone1 = '".$tel1."', phone2 = '".$tel2."', phone3 = '".$tel3."',
                                    email = '".$email."', note = '".$note."', note2 = '".$note2."', note3 = '".$note3."', tcm = '".$tcm."', tipo = '".$status."' WHERE crm_id = '".$bean->id."' ";
        }
        $conn2->query($update_sql);
        }
        $id_acs_array = $conn2->query("SELECT id,pin FROM visual_phonebook WHERE crm_id = '".$bean->id."'")->fetch_assoc();
        $id_acs = $id_acs_array['id'];
        $id_pin = $id_acs_array['pin'];
        $bean->acs_url_c = "http://acs.pickcenter.com/pinutils/vbdetail.php?vbid=".$id_acs."&vbpin=".$id_pin;
    }

    function getPhoneBookId($id) {
        include 'custom/Extension/application/amanda_connect.php';
        $aresult= $conn2->query("SELECT id FROM visual_phonebook WHERE crm_id='{$id}'");
        $results = $aresult->fetch_assoc();
        return $result = $results['id'];
    }

    function LeadCheckOut($bean) {

        include 'custom/Extension/application/amanda_connect.php';
        if (!$this->inStates($bean->status)) {
            $vbid = $this->getPhoneBookId($bean->id);
            $conn2->query("DELETE FROM visual_phonebook WHERE crm_id = '".$bean->id."'");
            $conn->query("delete from acs_phoneb_doors where phoneb_id = '{$vbid}'");
            $bean->acs_url_c = '';
            $bean->load_relationship('wifi_wifi_accounts_leads');

            //elimina wifi quando diventa ex-cliente
            $wifis = $bean->wifi_wifi_accounts_leads->getBeans();
                foreach ( $wifis as $wifi ) {
                    $wifi->mark_deleted($wifi->id);
                    $wifi->Save();
                }
        }

    }

    function LeadDelete($bean) {
        include 'custom/Extension/application/amanda_connect.php';
        $vbid = $this->getPhoneBookId($bean->id);
        $conn2->query("DELETE FROM visual_phonebook WHERE crm_id = '".$bean->id."'");
        $conn->query("delete from acs_phoneb_doors where phoneb_id = '{$vbid}'");

    }

    function MailFE($bean) {
        require_once 'include/SugarPHPMailer.php';
        $mailbody = "";
        if (!empty($bean->fetched_row) && ($bean->fetched_row['pec_c'] != $bean->pec_c || $bean->fetched_row['cdu_c'] != $bean->cdu_c) && $bean->status == 'converted') {
            $mailbody .= "
                <strong>Cliente: </strong>{$bean->first_name} {$bean->last_name}<br>
                <strong>Codice Fiscale: </strong>{$bean->lead_cf_c}<br>
                <strong>Partita IVA: </strong>{$bean->lead_piva_c}<br>
                <strong>PEC: </strong>{$bean->pec_c}<br>
                <strong>CDU: </strong>{$bean->cdu_c}<br>
            ";

        } else return true;

        if ($mailbody != "") {
            $mail = new SugarPHPMailer();
            $mail->CharSet="UTF-8";
            $mail->isSMTP();
            $mail->From = 'info@pickcenter.com';
            $mail->FromName = 'Pick Center Sistema Informativo';
            $mail->Subject = 'Comunicazione PEC / CDU per fatturazione elettronica';
            $mail->Body_html = from_html($mailbody);
            $mail->Body = wordwrap($mailbody,1000);
            $mail->isHTML(true);
            $mail->addAddress('raffaella@pickcenter.com','RN');
            $mail->addAddress('ilaria@pickcenter.com','IQ');
            //$mail->addAddress('max@swhub.io','MS');
            $mail->prepForOutbound();
            $mail->setMailerForSystem();
            $mail->send();
        }

    }

    //mette a 0 il CDU nei casi opportuni
    function CDU($bean) {

        if (($bean->azienda_tipo_c == 'persona' || $bean->lead_piva_c == '') && $bean->cdu_c == '' ) {
            $bean->cdu_c = '0000000';
            SugarApplication::appendSuccessMessage('Ho settato automaticamente il CDU a 0000000');
       }
    }

    //rimuove i collegamenti all'azienda quando la si cancella
    function removeAccountRel($bean) {

        if ($bean->account_id_c == '') {

            $bean->account_name = '';
            $bean->account_id = '';
            $bean->azienda_tipo_c = 'persona';

        }
    }

}