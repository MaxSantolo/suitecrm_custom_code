<?php
/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 10/01/2019
 * Time: 11:34
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class AOS_QuotesLH
{

    function accountFromLead($bean) {

        $leadBean = BeanFactory::getBean("Leads",$bean->leads_aos_quotes_1leads_ida); //caricato il bean lead correlato
        $accountBean = BeanFactory::getBean("Accounts",$leadBean->account_id);
        /*$bean->load_relationship("account_aos_quotes");
        $bean->account_aos_quotes->add($accountBean);*/


        //$bean->description = $leadBean->id . " " . $accountBean->id;
        if (!empty($accountBean->id)) {

            $bean->billing_account_id = $accountBean->id;


        } else return;


    }


    }