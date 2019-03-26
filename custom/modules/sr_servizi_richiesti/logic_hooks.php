<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_relationship_add'] = Array();
/*$hook_array['after_relationship_add'][] = Array(3, 'SRservizirichiesti2Meetings', 'custom/modules/sr_servizi_richiesti/hooks/SRServiziRichiestiLH.php','SRServiziRichiestiLH', 'PushSRMeeting');
$hook_array['after_relationship_add'][] = Array(4, 'SRservizirichiesti2Calls', 'custom/modules/sr_servizi_richiesti/hooks/SRServiziRichiestiLH.php','SRServiziRichiestiLH', 'PushSRCall');*/
$hook_array['after_relationship_add'][] = Array(5, 'Aggiunge account al servizio richiesto', 'custom/modules/sr_servizi_richiesti/hooks/SRServiziRichiestiLH.php','SRServiziRichiestiLH', 'addAccount');

$hook_array['after_retrieve'] = Array();
$hook_array['after_retrieve'][] = Array(1, 'Setup1st', 'custom/modules/sr_servizi_richiesti/hooks/SRServiziRichiestiLH.php','SRServiziRichiestiLH', 'SetupFirstSave');



$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(3, 'SRservizirichiesti2Meetings', 'custom/modules/sr_servizi_richiesti/hooks/SRServiziRichiestiLH.php','SRServiziRichiestiLH', 'PushSRMeeting');
$hook_array['after_save'][] = Array(4, 'SRservizirichiesti2Calls', 'custom/modules/sr_servizi_richiesti/hooks/SRServiziRichiestiLH.php','SRServiziRichiestiLH', 'PushSRCall');


?>