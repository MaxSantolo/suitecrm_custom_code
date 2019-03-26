<?php
/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 26/03/2019
 * Time: 11:13
 */


require_once 'custom/Extension/modules/Accounts/allsSubpanel.php';

function getAllSRs($param){
    $service = new buildAllSRs();
    return $service->buildQuery($param);
}