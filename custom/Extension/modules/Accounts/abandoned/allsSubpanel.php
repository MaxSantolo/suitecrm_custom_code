<?php
/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 22/03/2019
 * Time: 12:46
 */

class buildAllSRs
{

    public function __construct()
    {}

    public function buildQuery($param)
    {
        global $app;
        $controller = $app->controller;
        $bean = $controller->bean;
        $query = "
            SELECT sr_servizi_richiesti.*
            FROM sr_servizi_richiesti
    
    INNER JOIN
                              (SELECT sr_servizi_richiesti_leadssr_servizi_richiesti_idb as srid from sr_servizi_richiesti_leads_c 
                                join leads on sr_servizi_richiesti_leadsleads_ida = leads.id
                                join leads_cstm on leads.id = leads_cstm.id_c
                                join accounts on accounts.id = leads_cstm.account_id_c
                               where leads.deleted = 0 and accounts.deleted = 0 and accounts.id = '{$bean->id}'
                              UNION ALL 
                               select accounts_sr_servizi_richiesti_1_c.accounts_sr_servizi_richiesti_1sr_servizi_richiesti_idb as srid from accounts_sr_servizi_richiesti_1_c
                                join accounts on accounts_sr_servizi_richiesti_1accounts_ida = accounts.id
                               where accounts.deleted = 0 and accounts.id = '{$bean->id}') bigjoin
                               on bigjoin.srid = sr_servizi_richiesti.id
                               
                               WHERE sr_servizi_richiesti.deleted = 0
            
            ";
        return $query;
    }

    /*function allSRs($params)
{
    $args = func_get_args();
    $accountId = $args[0]['account_id'];

    $return_array['select'] = " SELECT sr_servizi_richiesti.* ";
    $return_array['from'] = " FROM sr_servizi_richiesti ";
    $return_array['where'] = "WHERE sr_servizi_richiesti.deleted = 0";
    $return_array['join'] = " INNER JOIN
                              (SELECT sr_servizi_richiesti_leadssr_servizi_richiesti_idb as srid from sr_servizi_richiesti_leads_c
                                join leads on sr_servizi_richiesti_leadsleads_ida = leads.id
                                join leads_cstm on leads.id = leads_cstm.id_c
                                join accounts on accounts.id = leads_cstm.account_id_c
                               where leads.deleted = 0 and accounts.deleted = 0 and accounts.id = '{$accountId}'
                              UNION ALL
                               select accounts_sr_servizi_richiesti_1_c.accounts_sr_servizi_richiesti_1sr_servizi_richiesti_idb as srid from accounts_sr_servizi_richiesti_1_c
                                join accounts on accounts_sr_servizi_richiesti_1accounts_ida = accounts.id
                               where accounts.deleted = 0 and accounts.id = '{$accountId}') bigjoin
                               on bigjoin.srid = sr_servizi_richiesti.id";
    $return_array['join_tables'] = '';
    return $return_array;
}
    function allWiFis($params) {
        $args = func_get_args();
        $accountId = $args[0]['account_id'];

        $return_array['select'] = " select wifi_wifi_accounts.* ";
        $return_array['from'] = " from wifi_wifi_accounts ";
        $return_array['where'] = "where wifi_wifi_accounts.deleted = 0";
        $return_array['join'] = " inner join
                                ( SELECT wifi_wifi_accounts_accounts_c.wifi_wifi_accounts_accountswifi_wifi_accounts_idb as wifiid from wifi_wifi_accounts_accounts_c
                                join accounts on accounts.id = wifi_wifi_accounts_accountsaccounts_ida
                                where accounts.deleted = 0 and accounts.id = '{$accountId}'
                                UNION ALL
                                SELECT wifi_wifi_accounts_leadswifi_wifi_accounts_idb as wifiid from wifi_wifi_accounts_leads_c
                                join leads on leads.id = wifi_wifi_accounts_leadsleads_ida
                                join leads_cstm on leads.id = leads_cstm.id_c
                                join accounts on accounts.id = leads_cstm.account_id_c
                                where accounts.deleted = 0 and leads.deleted = 0 and accounts.id = '{$accountId}'
                                ) bigjoin
                                on bigjoin.wifiid = wifi_wifi_accounts.id";
        $return_array['join_tables'] = '';
        return $return_array;


}*/


}