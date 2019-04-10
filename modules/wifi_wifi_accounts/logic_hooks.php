<?php
/**
 * Created by PhpStorm.
 * User: msantolo
 * Date: 23/10/2018
 * Time: 09:08
 */

// Do not store anything in this file that is not part of the array or the hook version.  This file will
// be automatically rebuilt in the future.
 $hook_version = 1;
$hook_array = Array();
// position, file, function
$hook_array['before_save'] = Array();
/*
$hook_array['before_save'][] = Array(2, 'MailUserWiFiAccount', 'custom/modules/wifi_wifi_accounts/hooks/WiFiAccountsLH.php','WiFiAccountsLH', 'MailUserWiFiAccount');*/

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(2, 'CreateUpdateWiFiAccount', 'custom/modules/wifi_wifi_accounts/hooks/WiFiAccountsLH.php','WiFiAccountsLH', 'CreateUpdateWiFiAccount');
$hook_array['after_save'][] = Array(77, 'updateRelatedMeetingsGeocodeInfo', 'modules/Leads/LeadsJjwg_MapsLogicHook.php','LeadsJjwg_MapsLogicHook', 'updateRelatedMeetingsGeocodeInfo');


$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(1, 'CreatePassword', 'custom/modules/wifi_wifi_accounts/hooks/WiFiAccountsLH.php','WiFiAccountsLH', 'CreatePassword');
$hook_array['after_relationship_add'][] = Array(3, 'CreateUpdateWiFiAccount', 'custom/modules/wifi_wifi_accounts/hooks/WiFiAccountsLH.php','WiFiAccountsLH', 'CreateUpdateWiFiAccount');
$hook_array['after_relationship_add'][] = Array(2, 'aggiunge azienda', 'custom/modules/wifi_wifi_accounts/hooks/WiFiAccountsLH.php','WiFiAccountsLH', 'addAccount');
//$hook_array['after_relationship_add'][] = Array(4, 'MailUserWiFiAccount', 'custom/modules/wifi_wifi_accounts/hooks/WiFiAccountsLH.php','WiFiAccountsLH', 'MailUserWiFiAccount');

$hook_array['after_relationship_delete'] = Array();
$hook_array['after_relationship_delete'][] = Array(1, 'DeleteWiFiAccount', 'custom/modules/wifi_wifi_accounts/hooks/WiFiAccountsLH.php','WiFiAccountsLH', 'DeleteWiFiAccount');


?>