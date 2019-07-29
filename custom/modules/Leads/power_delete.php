<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 05/10/2018
 * Time: 11:52
 */
$id = $_GET['lead_id'];


/*$lead = BeanFactory::getBean("Leads",$id);
$lead->load_relationship("sr_servizi_richiesti_leads");
$lead->deleted = 1;
$servizi = $lead->sr_servizi_richiesti_leads->get();

foreach ($servizi as $sr)
{
    $sr->deleted = 1;
}*/


$update_delete_query = "UPDATE sr_servizi_richiesti
                        LEFT JOIN sr_servizi_richiesti_leads_c ON sr_servizi_richiesti.id = sr_servizi_richiesti_leadssr_servizi_richiesti_idb
                        LEFT JOIN leads ON leads.id = '".$id."'
                        SET sr_servizi_richiesti.deleted = '1',
                        leads.deleted = '1'
                        WHERE sr_servizi_richiesti_leadsleads_ida = '".$id."'";

$GLOBALS['db']->query($update_delete_query);

//$conn->query($update_delete_query,true);


header('Location:http://crm.pickcenter.com/index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3DLeads%26action%3Dindex');