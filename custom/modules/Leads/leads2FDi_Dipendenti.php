<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$id = $_GET['lead_id'];

$lead = BeanFactory::getBean("Leads",$id);
if ($lead->status == "FRNT") {
    $dip_frnt = BeanFactory::newBean("FDi_dipendenti");

    $dip_frnt->name         = $lead->first_name;
    $dip_frnt->cognome      = $lead->last_name;
    $dip_frnt->description  = $lead->description;
    $dip_frnt->email        = $lead->email1;
    $dip_frnt->tel_cel      = $lead->phone_mobile;
    $dip_frnt->tel_fisso_c  = $lead->phone_work;
    $dip_frnt->save();
    $lead->status = "conv_FRNT";
    $lead->save();

}


SugarApplication::redirect("http://crm.pickcenter.com/index.php?module=FDi_dipendenti&offset=1&stamp=1565092313032352300&return_module=FDi_dipendenti&action=EditView&record=" . $dip_frnt->id);



