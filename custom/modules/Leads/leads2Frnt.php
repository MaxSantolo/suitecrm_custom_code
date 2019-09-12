<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$id = $_GET['lead_id'];

$lead = BeanFactory::getBean("Leads",$id);
if ($lead->status == "FRNT") {
        $azn_frnt = BeanFactory::newBean("frnt_fornitori_azienda");

    $azn_frnt->name                         = $lead->name;
    $azn_frnt->email1                       = $lead->email1;
    $azn_frnt->cfisc_c                      = $lead->lead_cf_c;
    $azn_frnt->piva_c                       = $lead->lead_piva_c;
    $azn_frnt->description                  = $lead->description;
    $azn_frnt->billing_address_street       = $lead->primary_address_street;
    $azn_frnt->billing_address_city         = $lead->primary_address_city;
    $azn_frnt->billing_address_country      = $lead->primary_address_country;
    $azn_frnt->billing_address_postalcode   = $lead->primary_address_postalcode;
    $azn_frnt->billing_address_state        = $lead->primary_address_state;
    $azn_frnt->phone_office                 = $lead->phone_mobile;
    $azn_frnt->phone_alternate              = $lead->phone_work;
    $azn_frnt->cdu_c                        = $lead->cdu_c;
    $azn_frnt->pec_c                        = $lead->pec_c;



    $azn_frnt->save();
    $lead->status = "conv_FRNT";
    $lead->save();

}


SugarApplication::redirect("http://crm.pickcenter.com/index.php?module=frnt_fornitori_azienda&offset=1&stamp=1565092313032352300&return_module=frnt_fornitori_azienda&action=DetailView&record=" . $azn_frnt->id);




