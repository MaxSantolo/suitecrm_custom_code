<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1;
$hook_array = Array();

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'Push2DashReception', 'custom/modules/Meetings/hooks/MeetingsLH.php','MeetingsLH', 'PushToDashReception');

// position, file, function 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(77, 'updateMeetingGeocodeInfo', 'modules/Meetings/MeetingsJjwg_MapsLogicHook.php','MeetingsJjwg_MapsLogicHook', 'updateMeetingGeocodeInfo'); 



?>