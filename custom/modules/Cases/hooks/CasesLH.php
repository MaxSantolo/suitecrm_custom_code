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
    static $alreadyranUpdate = false;

    //invia l'appuntamento d'intervento alla dashboard reception, se la data d'intervento non cambia non viene mandato niente
    function Push2Reception($bean)
    {

        require_once 'custom/Extension/application/PickLog.php';

        $dbID2Modify = (BeanFactory::getBean("db_eventi"))->retrieve_by_string_fields(array('parent_id_custom_c' => $bean->id,))->id;

        if (
            (
                ($bean->intervento_c != ''
                &&
                $bean->fetched_row['intervento_c'] != $bean->intervento_c)
                ||
                ($bean->dr_notify_c == 1
                &&
                $bean->fetched_row['dr_notify_c'] != $bean->dr_notify_c)
            )

            &&
            is_null($dbID2Modify)

        )

        {

            $reception = BeanFactory::newBean('db_eventi');

            //genero il nome del ticket a seconda degli stati e del fornitore associato


            //carico il bean relativo utilizzando il campo relazione (vd. database)
            //todo: provare con il metodo query (hotexamples.com)
            $frnt = BeanFactory::getBean("frnt_fornitori_azienda",$bean->frnt_fornitori_azienda_cases_1frnt_fornitori_azienda_ida);

            if (!empty($frnt->id)) {

                $name = "Intervento tecnico di {$frnt->name}";
            }
            else {

                global $app_list_strings;
                $name = $app_list_strings['case_type_dom'][$bean->type] . " - " . $bean->name;

            }



            //$parent = BeanFactory::getBean($bean->parent_type, $bean->parent_id);

            $reception->name = $name;
            $reception->description = strip_tags(html_entity_decode($bean->descrizione_c)); //. $bean->leads_cases_1leads_ida . $bean->account_id;
            $reception->event_date = $bean->intervento_c;
            $reception->date_entered = $bean->intervento_c;
            $reception->date_modified = (new DateTime(now))->format('Y-m-d');
            $reception->sede = $bean->sede_ticket_c;
            $reception->status = 'new';
            $reception->tipo = 'tech';
            $reception->parent_id_custom_c = $bean->id;
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
    function NotifyUpdate($bean) {

        require_once 'include/SugarPHPMailer.php';
        require_once 'custom/Extension/application/PickLog.php';

        if (self::$alreadyranUpdate == true) return;
        self::$alreadyranUpdate = true;

        $mailBody = "";
        $mailSubj = "";
        $action = "NUOVO_TICKET";

        global $current_user;
        (empty($bean->fetched_row)) ? $mailSubj = "Inserito un nuovo ticket da " . $current_user->name : $mailSubj = "Ticket {$bean->case_number} aggiornato da " . $current_user->name;

        $ticketURL = "http://crm.pickcenter.com/index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3DCases%26action%3DDetailView%26record%3D" . $bean->id;

        if (empty($bean->fetched_row) || //caso 1 il ticket è nuovo
            ($bean->fetched_row['assigned_user_id'] != $bean->assigned_user_id && $bean->assigned_user_id != "") || //caso 2 il ticket è stato assegnato a una persona diversa
            ($bean->fetched_row['sede_ticket_c'] != $bean->sede_ticket_c) || //caso 3 cambia la sede dell'intervento
            ($bean->fetched_row['intervento_c'] != $bean->intervento_c && $bean->intervento_c != "") || //caso 4 cambia la data d'intervento
            ($bean->fetched_row['status'] != $bean->status) || //caso 5 cambia lo status
            ($bean->fetched_row['resolution'] != $bean->resolution && $bean->resolution != "")//caso 6 cambia il campo soluzione

        ) {


            //se trovo un db_eventi collegato al ticket (attraverso il campo parent_id_custom_c) allora aggiorno anche il record della dashboard_eventi
            $dbID2Modify = (BeanFactory::getBean("db_eventi"))->retrieve_by_string_fields(
                array(
                    'parent_id_custom_c' => $bean->id,
                    'deleted' => 0,
                )
            )->id;

            if ($dbID2Modify != "") {

                $action = "AGGIORNAMENTO_APPUNTAMENTO_TICKET";
                $dbevent = BeanFactory::getBean("db_eventi",$dbID2Modify);
                $dbevent->assigned_user_id = $bean->assigned_user_id;
                $dbevent->sede = $bean->sede_ticket_c;
                $dbevent->event_date = $bean->intervento_c;
                $dbevent->status = 'new';
                $dbevent->save();

            }

            global $app_list_strings;
            $ticketType = $app_list_strings['case_type_dom'][$bean->type];
            $center = $app_list_strings['sede_list'][$bean->sede_ticket_c];
            $mailBody .= "
                
                <strong>Number: </strong>{$bean->case_number}<br>
                <strong>Centro: </strong>{$center}<br>
                <strong>Tipo: </strong>{$ticketType}<br>
                <strong>Richiedente: </strong>{$current_user->name}<br>
                <strong>Oggetto: </strong>{$bean->name}<br>
                <strong>Descrizione: </strong>{$bean->descrizione_c}<br>
                <strong>Soluzione: </strong>{$bean->resolution}<br>
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
            //$mail->addAddress("max@swhub.io"); //for testing

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
                'action' => $action,
                'content' => $content,
                'user' => $current_user->name,
                'description' => $subject,
                'origin' => 'crm.cases',
                'destination' => "Email notifica a {$current_user->email1} e {$primary_email}",);
            sendLog($params);

        }
    }

    //wysiwyg
    function sendErrorMail($content,$subject="Errore nell'invio di notifica ticket") {

        require_once 'include/SugarPHPMailer.php';

        $mail = new SugarPHphpPMailer();
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
        //$mail->addAddress('max@swhub.io','MS'); //for testing

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
        $originalID = $bean->id;

        //se il fornitore non è segnato non creo la copia
        if ($bean->status == "Closed_Closed" && !empty($bean->fetched_row) && $bean->fetched_row['status'] != "Closed_Closed" && $parentID != '' ) {

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
        $objBean->ticket_linked_id_c = $originalID;
        $objBean->save();

        }

        require_once 'custom/Extension/application/PickLog.php';
        global $current_user;

        $supplierBean = BeanFactory::getBean($parentType,$parentID);

        $subject = "Associato un ticket a " . $supplierBean->name;
        $content = strip_tags(html_entity_decode($bean->descrizione_c));

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

    //notifica di chiusura a inseritore, assegnatario e direzione
    function NotifyClosure($bean) {

        require_once 'include/SugarPHPMailer.php';
        require_once 'custom/Extension/application/PickLog.php';

        //se il ticket è chiuso, ha dei precedenti (quindi non è la copia fornitore) e il campo soluzione non è vuoto...
        if ($bean->status == "Closed_Closed" &&
            !empty($bean->fetched_row) &&
            $bean->fetched_row['status'] != "Closed_Closed" &&
            $bean->resolution != "" &&
            $bean->ticket_linked_id_c == "") {

            $creator = (BeanFactory::getBean("Users",$bean->created_by))->email1; //recupero la mail e il nome del creatore del ticket
            $crMail = $creator->email1;
            $crName = $creator->name;

            $lastEditor = (BeanFactory::getBean("Users",$bean->modified_user_id))->email1; //recupero la mail e il nome di chi ha modificato ultima volta
            $leMail = $lastEditor->email1;
            $leName = $lastEditor->name;

            $assignedTo = (BeanFactory::getBean("Users",$bean->assigned_user_id))->email1; //recupero la mail e il nome dell'ultimo assegnatario
            $atMail = $assignedTo->email1;
            $atName = $assignedTo->name;

            $subject = "Ticket n. {$bean->case_number} - chiuso";
            $ticketURL = "http://crm.pickcenter.com/index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3DCases%26action%3DDetailView%26record%3D" . $bean->id;

            global $app_list_strings;
            $ticketType = $app_list_strings['case_type_dom'][$bean->type];
            $center = $app_list_strings['sede_list'][$bean->sede_ticket_c];

            $mailBody = "
                
                <strong>Number: </strong>{$bean->case_number}<br>
                <strong>Centro: </strong>{$center}<br>
                <strong>Tipo: </strong>{$ticketType}<br>
                <strong>Richiedente: </strong>{$crName}<br>
                <strong>Ultima modifica di: </strong>{$leName}<br>
                <strong>Oggetto: </strong>{$bean->name}<br>
                <strong>Descrizione: </strong>{$bean->descrizione_c}<br>
                <strong>Soluzione: </strong>{$bean->resolution}<br>
                <strong><a href='{$ticketURL}' target='_blank'>Vedi i dettagli </a></strong>
                
            ";

            $mail = new SugarPHPMailer();
            $mail->CharSet="UTF-8";
            $mail->isSMTP();
            $mail->From = 'info@pickcenter.com';
            $mail->FromName = 'Pick Center CRM';
            $mail->Subject = $subject;

            $mail->Body_html = from_html($mailBody);
            $mail->Body = wordwrap($mailBody,1000);
            $mail->isHTML(true);
            //$mail->addAddress('max@swhub.io'); //for testing
            $mail->addAddress('direzione@pickcenter.com','LC');
            $mail->addAddress($crMail,$crName);
            $mail->addAddress($leMail,$leName);
            $mail->addAddress($atMail,$atName);
            $mail->prepForOutbound();
            $mail->setMailerForSystem();

            $mail->send();



            global $current_user;
            $params = array(
                'app' => 'CRM',
                'action' => 'TICKET_COMPLETO',
                'content' => $mailBody,
                'user' => $current_user->name,
                'description' => $subject,
                'origin' => 'crm.cases',
                'destination' => "crm.cases",);
            sendLog($params);



        }


    }

    //se un ticket viene riaperto allora viene cancellato dall'associazione con il fornitore (verrà riassociato alla nuova chiusura)
    function ReopenDelete($bean){

        require_once 'custom/Extension/application/PickLog.php';

        if (!empty($bean->fetched_row) && $bean->fetched_row['status'] == "Closed_Closed") {

            //prendo il ticket collegato
            $ticketID2Del = (BeanFactory::getBean("Cases"))->retrieve_by_string_fields(
                array(
                    'ticket_linked_id_c' => $bean->id,
                    'deleted' => 0,
                )
            )->id;

            $ticket2Del = BeanFactory::getBean("Cases",$ticketID2Del);
            $ticket2Del->deleted = 1;
            $ticket2Del->save();

            global $current_user;
            $content = $subject = "Ticket fornitore rimosso perchè ticket originario riaperto";
            $params = array(
                'app' => 'CRM',
                'action' => 'CANCELLO_TICKET_FORNITORE',
                'content' => $content,
                'user' => $current_user->name,
                'description' => $subject,
                'origin' => 'crm.cases',
                'destination' => "crm.cases",);
            sendLog($params);

        }

    }

    //chiude l'evento DB Reception se chiudo il ticket
    function CloseDb_eventi($bean) {

        require_once 'custom/Extension/application/PickLog.php';

        //vado a cercare l'evento dashboard collegato
        $dbID2Modify = (BeanFactory::getBean("db_eventi"))->retrieve_by_string_fields(
            array(
                'parent_id_custom_c' => $bean->id,
                'deleted' => 0,
            )
        )->id;

        if ($dbID2Modify != "" && !empty($bean->fetched_row) && $bean->fetched_row['status'] != "Closed_Closed" && $bean->status == "Closed_Closed") {

            $db2modify = BeanFactory::getBean("db_eventi",$dbID2Modify);
            $db2modify->status = "closed";
            $db2modify->save();

            //logs
            global $current_user;
            $content = $subject = "Appuntamenti Reception eliminati per chiusura ticket";
            $params = array(
                'app' => 'CRM',
                'action' => 'CHIUSO_APPUNTAMENTO_FORNITORE',
                'content' => $content,
                'user' => $current_user->name,
                'description' => $subject,
                'origin' => 'crm.db_eventi',
                'destination' => "crm.db_eventi",);
            sendLog($params);

        }

    }


}