<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    $id = $_GET['account_id'];

    $account = BeanFactory::getBean("Accounts",$id);
    $azn_frnt = BeanFactory::newBean("frnt_fornitori_azienda");

    $azn_frnt->name                         = $account->name;
    $azn_frnt->email1                       = $account->email1;
    $azn_frnt->cfisc_c                      = $account->lead_cf_c;
    $azn_frnt->piva_c                       = $account->lead_piva_c;
    $azn_frnt->description                  = $account->description;
    $azn_frnt->billing_address_street       = $account->billing_address_street;
    $azn_frnt->billing_address_city         = $account->billing_address_city;
    $azn_frnt->billing_address_country      = $account->billing_address_country;
    $azn_frnt->billing_address_postalcode   = $account->billing_address_postalcode;
    $azn_frnt->billing_address_state        = $account->billing_address_state;
    $azn_frnt->phone_office                 = $account->phone_office;
    $azn_frnt->phone_alternate              = $account->phone_alternate;
    $azn_frnt->cdu_c                        = $account->cdu_c;
    $azn_frnt->pec_c                        = $account->pec_c;

    $azn_frnt->save();

    if ($account->account_type == "fornitore") {
        $account->account_type = "conv_fornitore";
        $account->save();
    }


SugarApplication::redirect("http://crm.pickcenter.com/index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3Dfrnt_fornitori_azienda%26offset%3D1%26stamp%3D1565086071053444100%26return_module%3Dfrnt_fornitori_azienda%26action%3DDetailView%26record%3D" . $azn_frnt->id);
//header('Location:http://crm.pickcenter.com/index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3Dfrnt_fornitori_azienda%26action%3DDetailView%26record%'. $azn_frnt->id);


