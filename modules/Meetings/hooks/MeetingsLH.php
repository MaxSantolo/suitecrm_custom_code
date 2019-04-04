<?php
/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 24/10/2018
 * Time: 15:48
 */
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class MeetingsLH {

    function PushToDashReception($bean)
    {

        if (!isset($bean->fetched_row['id']) && $bean->status == 'Planned') {

            $DashEvent = BeanFactory::getBean('db_eventi'); //nuovo bean evento

            //campi assegnazione "diretta"
            $DashEvent->name = $bean->name;
            $DashEvent->date_entered = $bean->date_entered;
            $DashEvent->date_modified = $bean->date_modified;
            $DashEvent->event_date = $bean->date_start;
            $DashEvent->status = 'new';
            $DashEvent->tipo = 'app';
            $DashEvent->assigned_user_id = $bean->assigned_user_id;
            $DashEvent->description = $bean->relating_to_c;
            //stabilisco relazione e la imposto
            if ($bean->parent_type == 'Leads') {
                    $DashEvent->db_eventi_leadsleads_ida = $bean->parent_id;
                    //se lead ha un'azienda collegata la scrivo
                    $lead = BeanFactory::getBean('Leads',$bean->parent_id);
                    $DashEvent->db_eventi_accountsaccounts_ida = $lead->account_id_c;
            }
            if ($bean->parent_type == 'Accounts') { $DashEvent->db_eventi_accountsaccounts_ida = $bean->parent_id; }

            //decido il centro da assegnare a secondo del contenuto del campo "location"
            if (strpos(strtolower($bean->location), 'boe') !== false) { $DashEvent->sede = 'boe'; }
            if (strpos(strtolower($bean->location), 'reg') !== false) { $DashEvent->sede = 'reg'; }
            if (strpos(strtolower($bean->location), 'eur') !== false) { $DashEvent->sede = 'eur'; }

            $DashEvent->description = $bean->description;
            $DashEvent->save(); //salvo bean evento
        }
    }


}