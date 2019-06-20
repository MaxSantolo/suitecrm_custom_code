<?php
/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 25/10/2018
 * Time: 08:58
 */
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class SRServiziRichiestiLH {

    static $alreadyran = false;

    function SetCenter($center) {

        switch ($center) {
            case 'EUR': $sede = 'P.zza Marconi, 15'; break;
            case 'REG': $sede = 'Via A. Regolo, 19'; break;
            case 'BOE': $sede = 'Via Boezio, 6'; break;
        }

        return $sede;

    }

    public static function Now() {

        return $now = (new DateTime('Europe/Rome'))->format('Y-m-d H:i:s');

    }

    function Assign2Id($bean) {

        if ($bean->assigned_user_id == '' OR is_null($bean->assigned_user_id)) { return $assign = 'e7a23c6a-a5d1-f3d9-d60e-5a537499e12c'; }
        else return $bean->assigned_user_id;

    }

    function Parent($bean) {


           if ($bean->accounts_sr_servizi_richiesti_1accounts_ida != '') {
            $parent_type = 'Accounts';
            $parent = BeanFactory::getBean('Accounts',$bean->accounts_sr_servizi_richiesti_1accounts_ida);
            $parent_id = $parent->id;
            $parent_phone1 = $parent->phone_office;
            $parent_phone2 = $parent->phone_alternate;
            $parent_name = $parent->name;

        }

        if ($bean->sr_servizi_richiesti_leadsleads_ida != '') {
            $parent_type = 'Leads';
            $parent = BeanFactory::getBean('Leads',$bean->sr_servizi_richiesti_leadsleads_ida);
            $parent_id = $parent->id;
            $parent_phone1 = $parent->phone_work;
            $parent_phone2 = $parent->phone_mobile;
            $parent_name = $parent->first_name. ' '. $parent->last_name;
        }

        return array('type' => $parent_type, 'id' => $parent_id, 'phone1' => $parent_phone1, 'phone2' => $parent_phone2, 'name' => $parent_name);
    }

    function PushSRMeeting($bean) {


        require_once 'custom/Extension/application/PickLog.php';
        //riconosce appuntamento -> modulo Meetings
        $status_array = array('appuntamento');
        $now = (new DateTime())->format('Y-m-d H:i:s');

        //prima controllo che ci sia stata una modifica della data e ora dell'appuntamento
        if (!empty($bean->fetched_row) && (strtotime($bean->fetched_row['data_ora_appuntamento_c']) != strtotime($bean->data_ora_appuntamento_c))) {

            //...poi controllo che sia nello stato corretto e che la data sia nel futuro e che non sia assegnato in una sede vuota
            if ((in_array($bean->stato_c, $status_array)) && (strtotime($bean->data_ora_appuntamento_c) >= strtotime($now)) && ($bean->sede_c != '')) {

                global $app_list_strings;
                $servizio = $app_list_strings['servizio_scelto_list'][$bean->servizio_scelto];
                $name = 'Appuntamento per: ' . $servizio . ' (Centro: ' . $bean->centro_scelto  . ')'; //. ' - Uffici/Sale: ' . $bean->num_uffici . ' - Postazioni: ' . $bean->num_postazioni
                //stabilisco la sede
                $sede_c = $this->SetCenter($bean->sede_c);

                //stabilisco il tipo e l'id di parentela
                $bean->load_relationship('sr_servizi_richiesti_leads');
                $related_leads = $bean->sr_servizi_richiesti_leads->get();
                foreach ($related_leads as $rellead) {$leadid = $rellead;}

                $bean->load_relationship('accounts_sr_servizi_richiesti_1');
                $related_accounts = $bean->accounts_sr_servizi_richiesti_1->get();
                foreach ($related_accounts as $relacc) {$accountid = $relacc;}

                if ($bean->load_relationship('sr_servizi_richiesti_leads')) {
                    $parent_type = 'Leads';
                    $parent_id = $leadid;
                } else if ($bean->load_relationship('accounts_sr_servizi_richiesti_1')) {
                    $parent_type = 'Accounts';
                    $parent_id = $accountid;
                } else return;


                //creo la riunione
                $meeting = BeanFactory::newBean('Meetings');
                $meeting->name = $name;
                $meeting->location = $sede_c;
                $meeting->date_start = $bean->data_ora_appuntamento_c;
                $meeting->duration_hours = 1;
                $meeting->duretion_minutes = 0;
                $meeting->parent_type = $parent_type;
                $meeting->parent_id = $parent_id;
                $meeting->assigned_user_id = $this->Assign2Id($bean);
                $meeting->description = $bean->description;
                $meeting->save();

                //.logs -> creazione riunione

                global $current_user;
                $user = $current_user->first_name . " " . $current_user->last_name;
                $content = $name . " | " . $sede_c . " | " . $bean->data_ora_appuntamento_c;
                $params = array(
                    'app' => 'CRM',
                    'action' => 'INSERIMENTO_APPUNTAMENTO',
                    'content' => $content,
                    'user' => $user,
                    'description' => 'Inserito appuntamento automatico',
                    'origin' => 'crm.sr_servizi_richiesti',
                    'destination' => 'crm.meetings',);
                sendLog($params);

            } else return true;
        } else return true;
    }

    function PushSRCall($bean) {

        require_once 'custom/Extension/application/PickLog.php';

        //riconosce appuntamento -> modulo Calls
        $status_array = array('call') /*,'callback','attdec','Pending Input')*/;
        if (in_array($bean->stato_c,$status_array) && strtotime($bean->data_ora_appuntamento_c) >= strtotime($this->Now()) ) {
            global $app_list_strings;
            $servizio = $app_list_strings['servizio_scelto_list'][$bean->servizio_scelto];
            $name = 'Call per: '.$servizio. ' (Centro: '. $bean->centro_scelto. ')';//' - Uffici/Sale: '.$bean->num_uffici.  ' - Postazioni: '.$bean->num_postazioni.')';

            //stabilisco il tipo e l'id di parentela
            $bean->load_relationship('sr_servizi_richiesti_leads');
            $related_leads = $bean->sr_servizi_richiesti_leads->get();
            foreach ($related_leads as $rellead) {$leadid = $rellead;}

            $bean->load_relationship('accounts_sr_servizi_richiesti_1');
            $related_accounts = $bean->accounts_sr_servizi_richiesti_1->get();
            foreach ($related_accounts as $relacc) {$accountid = $relacc;}

            if ($bean->load_relationship('sr_servizi_richiesti_leads')) {
                $parent_type = 'Leads';
                $parent_id = $leadid;
            } else if ($bean->load_relationship('accounts_sr_servizi_richiesti_1')) {
                $parent_type = 'Accounts';
                $parent_id = $accountid;
            } else return;

            //creo la call
            $call = BeanFactory::newBean('Calls');
            $call->name = $name;
            $call->date_start = $bean->data_ora_appuntamento_c;
            $call->duration_minutes = 15;
            $call->parent_type = $parent_type;
            $call->parent_id = $parent_id;
            $call->telcont_c = $bean->telefono_contatto_c;
            $call->celcont_c = $bean->cellulare_contatto_c;
            $call->assigned_user_id = $this->Assign2Id($bean);
            $call->save();

            //.logs -> creazione riunione

            global $current_user;
            $user = $current_user->first_name . " " . $current_user->last_name;
            $contact = BeanFactory::getBean($parent_type,$parent_id);
            $content = $name . " | " . $bean->data_ora_appuntamento_c . PHP_EOL . "per " . $contact->name;
            $params = array(
                'app' => 'CRM',
                'action' => 'INSERIMENTO_CALL',
                'content' => $content,
                'user' => $user,
                'description' => 'Inserita chiamata automatica',
                'origin' => 'crm.sr_servizi_richiesti',
                'destination' => 'crm.calls',);
            sendLog($params);

        } else return;
    }

    //funzioni preliminari al salvataggio
    function SetupFirstSave($bean) {

            $parentmain = $this->Parent($bean);
            $bean->telefono_contatto_c = $parentmain['phone1'];
            $bean->cellulare_contatto_c = $parentmain['phone2'];
            $bean->name = $parentmain['name']. '-' . $bean->centro_scelto . '.' . $bean->servizio_scelto;

    }

    //associa l'azienda al servizio richiesto di un contatto se ne ha una
    function addAccount($bean) {

        $parentLead = BeanFactory::getBean('Leads',$bean->sr_servizi_richiesti_leadsleads_ida);
        $parentAccount = BeanFactory::getBean('Accounts',$parentLead->account_id_c);
        $bean->load_relationship('accounts_sr_servizi_richiesti_1');
        $bean->accounts_sr_servizi_richiesti_1->add($parentAccount);

    }

    //invia la mail di nuova richiesta
    function sendNewMail($bean) {

        require_once 'include/SugarPHPMailer.php';
        require_once 'custom/Extension/application/PickLog.php';

        if (self::$alreadyran == true) return;
        self::$alreadyran = true;

            //todo: migliorare le condizioni di invio email con il controllo dello stato precedente
        if ($bean->stato_c == 'Not Started' || $bean->stato_c == 'visited') {

            $this->alreadyran = true;

            $leaddata = BeanFactory::getBean("Leads",$bean->sr_servizi_richiesti_leadsleads_ida);
            $accdata = BeanFactory::getBean("Accounts",$bean->accounts_sr_servizi_richiesti_1accounts_ida);

            if ($leaddata->id != '') {
                $leadname = $leaddata->first_name . " " . $leaddata->last_name;
                $email = $leaddata->email1;
            } else  if ($accdata->id == ''){
                $accdata->load_relationship('account_leads');
                $related_leads = $accdata->account_leads->get();
                foreach ($related_leads as $rellead) {$leadid = $rellead;}
                $rellead = BeanFactory::getBean('Leads',$leadid);
                $leadname = $rellead->first_name . " " . $rellead->last_name;
                $email = $rellead->email1;
            }

            if ($accdata->id != '') {
                $accname = $accdata->name;
                if ($accdata->email1 != '') $email .= ', '. $accdata->email1;
            }

            $username = BeanFactory::getBean('Users',$bean->created_by)->name;
            $phones = $bean->telefono_contatto_c . ' - ' . $bean->cellulare_contatto_c;
            $date_f = (new DateTime($bean->date_entered))->format('d-m-Y H:i:s');
            global $app_list_strings;
            $servizio = $app_list_strings['servizio_scelto_list'][$bean->servizio_scelto];

            $emailbody = "
            <p><b>Data di inserimento: </b>{$date_f}<br>
            <b>Centro richiesto: </b>{$bean->centro_scelto}<br>
            <b>Servizio richiesto: </b>{$servizio}<br>
            <b>Descrizione: </b>{$bean->description}<br>
            <b>Numero di uffici: </b>{$bean->num_uffici}<br>
            <b>Numero di postazioni: </b>{$bean->num_postazioni}</p>
            <hr>
            <p><b>Contatto: </b>{$leadname}<br>
            <b>Azienda: </b>{$accname}<br>
            <b>Recapiti: </b>{$phones}<br>
            <b>Email: </b>{$email}</p>
            <hr>
            <p><b>Inserito da: </b>{$username}<br>
            <a href='http://crm.pickcenter.com/index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3Dsr_servizi_richiesti%26action%3DDetailView%26record%3D{$bean->id}' target='_blank'>Vedilo sul CRM (dalla rete Pick o su VPN)</a></p>
            ";

            $logbody = "Data di inserimento: ". $date_f . PHP_EOL .
                       "Centro: " . $bean->centro_scelto . PHP_EOL .
                       "Servizio: " .  $servizio . PHP_EOL .
                       "Contatto: " . $leadname . PHP_EOL .
                       "Azienda: " . $accname . PHP_EOL .
                       "Recapiti: " . $phones . " - " . $email ;

            $mail = new SugarPHPMailer();
            $mail->CharSet="UTF-8";
            $mail->isSMTP();
            $mail->From = 'info@pickcenter.com';
            $mail->FromName = 'Pick Center Sistema Informativo';
            $mail->Subject = 'CRM - Nuovo servizio richiesto';
            $mail->Body_html = from_html($emailbody);
            $mail->Body = wordwrap($emailbody,1000);
            $mail->isHTML(true);
            $mail->addAddress('cea@pickcenter.com','LC');
            $mail->addAddress('bucci@pickcenter.com','MB');
            $mail->addAddress('roberta@pickcenter.com','RG');
            //$mail->addAddress('max@swhub.io','MS'); //for testing

            $mail->prepForOutbound();
            $mail->setMailerForSystem();

            if(!$mail->send()) {

                //se l'invio non va a buon fine mando mail per avvertire
                $content =  "Email non inviata" . PHP_EOL . $logbody . PHP_EOL .  "Errore riscontrato: " . $mail->ErrorInfo;
                $this->sendErrorMail($content);

            } else {
                $content = $logbody;
            }

            //$mail->send();
            //.logs -> mail nuovo servizio

            global $current_user;
            $user = $current_user->first_name . " " . $current_user->last_name;

            $params = array(
                'app' => 'CRM',
                'action' => 'NUOVA_RICHIESTA_SERVIZIO',
                'content' => $content,
                'user' => $user,
                'description' => 'Comunicazione inserimento servizio richiesto da cliente',
                'origin' => 'crm.sr_servizi_richiesti',
                'destination' => 'Email',);
            sendLog($params);

        }

    }

    function sendErrorMail($content) {

        require_once 'include/SugarPHPMailer.php';

        if (self::$alreadyran == true) return;
        self::$alreadyran = true;

        $mail = new SugarPHPMailer();
        $mail->CharSet="UTF-8";
        $mail->isSMTP();
        $mail->From = 'info@pickcenter.com';
        $mail->FromName = 'Pick Center CRM';
        $mail->Subject = 'Errore nella mail di creazione WiFi';

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

}
