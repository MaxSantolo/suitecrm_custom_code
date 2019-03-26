<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Leads push feed', 'modules/Leads/SugarFeeds/LeadFeed.php','LeadFeed', 'pushFeed');
$hook_array['before_save'][] = Array(2, 'stripstelhonenumbers', 'custom/modules/Leads/hooks/LeadsLH.php','LeadsLH', 'StripTelephoneNumbers');
$hook_array['before_save'][] = Array(3, 'maiuscole', 'custom/modules/Leads/hooks/LeadsLH.php','LeadsLH', 'FirstLastNameUpperCase');
$hook_array['before_save'][] = Array(4, 'checkin', 'custom/modules/Leads/hooks/LeadsLH.php','LeadsLH', 'LeadCheckIn');
$hook_array['before_save'][] = Array(5, 'checkout', 'custom/modules/Leads/hooks/LeadsLH.php','LeadsLH', 'LeadCheckOut');
$hook_array['before_save'][] = Array(6, 'assegna CDU', 'custom/modules/Leads/hooks/LeadsLH.php','LeadsLH', 'CDU');
$hook_array['before_save'][] = Array(7, 'mail fatturazione elettronica', 'custom/modules/Leads/hooks/LeadsLH.php','LeadsLH', 'MailFE');
$hook_array['before_save'][] = Array(7, 'descrizione', 'custom/modules/Leads/hooks/LeadsLH.php','LeadsLH', 'removeAccountRel');
$hook_array['before_save'][] = Array(77, 'updateGeocodeInfo', 'modules/Leads/LeadsJjwg_MapsLogicHook.php','LeadsJjwg_MapsLogicHook', 'updateGeocodeInfo');

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(77, 'updateRelatedMeetingsGeocodeInfo', 'modules/Leads/LeadsJjwg_MapsLogicHook.php','LeadsJjwg_MapsLogicHook', 'updateRelatedMeetingsGeocodeInfo');

$hook_array['before_delete'] = Array();
$hook_array['before_delete'][] = Array(1, 'delete', 'custom/modules/Leads/hooks/LeadsLH.php','LeadsLH', 'LeadDelete');


?>