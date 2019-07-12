<?php
/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 10/07/2019
 * Time: 11:38
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class CasesLH
{

    static $alreadyran = false;

    //invia l'appuntamento d'intervento alla dashboard reception, se la data d'intervento non cambia non viene mandato niente
    function Push2Reception($bean)
    {

        require_once 'custom/Extension/application/PickLog.php';

        if ($bean->intervento_c != '' && $bean->fetched_row['intervento_c'] != $bean->intervento_c) {

            $reception = BeanFactory::newBean('db_eventi');

            $parent = BeanFactory::getBean($bean->parent_type, $bean->parent_id);

            $reception->name = "Intervento tecnico di " . $parent->name;
            $reception->description = strip_tags(html_entity_decode($bean->description)); //. $bean->leads_cases_1leads_ida . $bean->account_id;
            $reception->event_date = $bean->intervento_c;
            $reception->date_entered = $bean->intervento_c;
            $reception->date_modified = (new DateTime(now))->format('Y-m-d');
            $reception->sede = $bean->sede_ticket_c;
            $reception->status = 'new';
            $reception->tipo = 'tech';

            $reception->db_eventi_leadsleads_ida = $bean->leads_cases_1leads_ida;
            $reception->db_eventi_accountsaccounts_ida = $bean->account_id;

            $reception->assigned_user_id = $bean->assigned_user_id;

            $reception->save();

            //pickLog
            global $current_user;
            $user = $current_user->first_name . " " . $current_user->last_name;
            $contdescr = "Intervento tecnico di " . $parent->name;
            $params = array(
                'app' => 'CRM',
                'action' => 'APPUNTAMENTO_TICKET',
                'content' => $contdescr,
                'user' => $user,
                'description' => $contdescr,
                'origin' => 'crm.cases',
                'destination' => 'crm.db_eventi',);
            sendLog($params);

        }

    }

    //notifica il ticket a seconda dei casi indicati
    function Notify($bean)
    {

        require_once 'include/SugarPHPMailer.php';
        require_once 'custom/Extension/application/PickLog.php';
        $mailBody = "";
        $mailSubj = "";

        global $current_user;
        (empty($bean->fetched_row)) ? $mailSubj = "Inserito un nuovo ticket da " . $current_user->name : $mailSubj = "Ticket {$bean->case_number} aggiornato da " . $current_user->name;

        $ticketURL = "http://crm.pickcenter.com/index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3DCases%26action%3DDetailView%26record%3D" . $bean->id;

        if (empty($bean->fetched_row) || //caso 1 il ticket è nuovo
            ($bean->fetched_row['assigned_user_id'] != $bean->assigned_user_id && $bean->assigned_user_id != "") || //caso 2 il ticket è stato assegnato a una persona diversa
            ($bean->fetched_row['sede_ticket_c'] != $bean->sede_ticket_c) || //caso 3 cambia la sede dell'intervento
            ($bean->fetched_row['intervento_c'] != $bean->intervento_c && $bean->intervento_c != "") || //caso 4 cambia la data d'intervento
            ($bean->fetched_row['status'] != $bean->status) //caso 5 cambia lo status

        ) {

            global $app_list_strings;
            $ticketType = $app_list_strings['case_type_dom'][$bean->type];
            $center = $app_list_strings['sede_list'][$bean->sede_ticket_c];

            $mailBody .= "
                
                <strong>Number: </strong>{$bean->case_number}<br>
                <strong>Centro: </strong>{$center}<br>
                <strong>Tipo: </strong>{$ticketType}<br>
                <strong>Richiedente: </strong>{$current_user->name}<br>
                <strong>Oggetto: </strong>{$bean->name}<br>
                <strong>Descrizione: </strong>{$bean->description}<br>
                <strong><a href='{$ticketURL}' target='_blank'>Vedi i dettagli </a></strong>
                
            ";


        } else return;

        $assignedUser = BeanFactory::getBean('Users', $bean->assigned_user_id);
        $primary_email = $assignedUser->email1;


        if ($mailBody != "" && $bean->status != "Closed_Closed") {
            $mail = new SugarPHPMailer();
            $mail->CharSet = "UTF-8";
            $mail->isSMTP();
            $mail->From = 'info@pickcenter.com';
            $mail->FromName = 'Pick Center Sistema Informativo';
            $mail->Subject = $mailSubj;
            $mail->Body_html = from_html($mailBody);
            $mail->Body = wordwrap($mailBody, 1000);
            $mail->isHTML(true);
            $mail->addAddress('direzione@pickcenter.com','RN');
            $mail->addAddress($current_user->email1);
            $mail->addAddress($primary_email);


            $mail->prepForOutbound();
            $mail->setMailerForSystem();

            if (!$mail->send()) {
                $content = "Errore invio mail aggiornamento ticket: " . $mail->ErrorInfo;
                $subject = $content;
                $this->sendErrorMail($content);
            } else {
                $content = $mailBody;
                $subject = "Inviata mail aggiornamento ticket";
            }



            $params = array(
                'app' => 'CRM',
                'action' => 'NUOVO_TICKET',
                'content' => $content,
                'user' => $current_user->name,
                'description' => $subject,
                'origin' => 'crm.cases',
                'destination' => "Email notifica a {$current_user->email1} e {$primary_email}",);
            sendLog($params);


        }
    }

    //wysiwyg
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

    //quando il ticket viene chiuso allora viene associato al fornitore
    function Archive2Supplier($bean) {

        if (self::$alreadyran == true) return;
        self::$alreadyran = true;

        //stabilisco se il fornitore a cui è legato è un'azienda o un contatto
        $parentType = $bean->parent_type;
        $parentID = $bean->parent_id;

        //se il fornitore non è segnato non creo la copia
        if ($bean->status == "Closed_Closed" && !empty($bean->fetched_row) && $bean->fetched_row != "Closed_Closed" && $parentID != '' ) {

        $objBean = BeanFactory::getBean('Cases', $bean->id);
        $objBean->id = create_guid();
        $objBean->new_with_id = true;

        //rimuovo le relazioni precedenti dalla copia e lo assegno al fornitore
        $objBean->leads_cases_1leads_ida = '';
        $objBean->account_id = '';

        if ($parentType == "Leads") {

           $objBean->load_relationship("leads_cases_1");
           $leadBean = BeanFactory::getBean('Leads',$parentID);
           $objBean->leads_cases_1->add($leadBean);
        }

        else {

            $objBean->load_relationship("account_cases");
            $accBean = BeanFactory::getBean("Accounts",$parentID);
            $objBean->account_cases->add($accBean);

        }

        $objBean->save();

        }

        require_once 'custom/Extension/application/PickLog.php';
        global $current_user;

        $supplierBean = BeanFactory::getBean($parentType,$parentID);

        $subject = "Associato un ticket a " . $supplierBean->name;
        $content = strip_tags(html_entity_decode($bean->description));

        $params = array(
            'app' => 'CRM',
            'action' => 'TICKET_FORNITORE',
            'content' => $content,
            'user' => $current_user->name,
            'description' => $subject,
            'origin' => 'crm.cases',
            'destination' => "crm.cases",);
        sendLog($params);

    }

    //genera il cedolino dal ticket
    function createReceipt($bean) {

        //todo: dipende dal programma di gestione contrattuale e fatturazione

    }


}