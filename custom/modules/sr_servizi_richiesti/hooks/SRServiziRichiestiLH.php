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
        //riconosce appuntamento -> modulo Meetings
        $status_array = array('appuntamento');
        $now = (new DateTime())->format('Y-m-d H:i:s');

        //prima controllo che ci sia stata una modifica della data e ora dell'appuntamento
        if (!empty($bean->fetched_row) && ($bean->fetched_row['data_ora_appuntamento_c'] != $bean->data_ora_appuntamento_c) ) {

            //...poi controllo che sia nello stato corretto e che la data sia nel futuro e che non sia assegnato in una sede vuota
            if ((in_array($bean->stato_c, $status_array)) && (strtotime($bean->data_ora_appuntamento_c) >= strtotime($now)) && ($bean->sede_c != '')) {
                global $app_list_strings;
                $servizio = $app_list_strings['servizio_scelto_list'][$bean->servizio_scelto];
                $name = 'Appuntamento per: ' . $servizio . ' (Centro: ' . $bean->centro_scelto  . ')'; //. ' - Uffici/Sale: ' . $bean->num_uffici . ' - Postazioni: ' . $bean->num_postazioni
                //stabilisco la sede
                $sede_c = $this->SetCenter($bean->sede_c);
                //stabilisco il tipo e l'id di parentela
                $parent_meet = $this->Parent($bean);
                //creo la riunione
                $meeting = BeanFactory::newBean('Meetings');
                $meeting->name = $name;
                $meeting->location = $sede_c;
                $meeting->date_start = $bean->data_ora_appuntamento_c;
                $meeting->duration_hours = 1;
                $meeting->duretion_minutes = 0;
                $meeting->parent_type = $parent_meet['type'];
                $meeting->parent_id = $parent_meet['id'];
                $meeting->assigned_user_id = $this->Assign2Id($bean);
                $meeting->description = $bean->description;
                $meeting->save();
            } else return;
        }
    }

    function PushSRCall($bean) {
        //riconosce appuntamento -> modulo Calls
        $status_array = array('call') /*,'callback','attdec','Pending Input')*/;
        if (in_array($bean->stato_c,$status_array) && strtotime($bean->data_ora_appuntamento_c) >= strtotime($this->Now()) ) {
            global $app_list_strings;
            $servizio = $app_list_strings['servizio_scelto_list'][$bean->servizio_scelto];
            $name = 'Call per: '.$servizio. ' (Centro: '. $bean->centro_scelto. ' - Uffici/Sale: '.$bean->num_uffici.  ' - Postazioni: '.$bean->num_postazioni.')';
            //stabilisco il tipo e l'id di parentela
            $parent = $this->Parent($bean);
            //creo la call
            $call = BeanFactory::newBean('Calls');
            $call->name = $name;
            $call->date_start = $bean->data_ora_appuntamento_c;
            $call->duration_minutes = 15;
            $call->parent_type = $parent['type'];
            $call->parent_id = $parent['id'];
            $call->telcont_c = $parent['phone1'];
            $call->celcont_c = $parent['phone2'];
            $call->assigned_user_id = $this->Assign2Id($bean);
            $call->save();
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


}
