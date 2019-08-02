<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(1, 'associa azienda alla quotazione se il contatto ne ha una', 'custom/modules/AOS_Quotes/hooks/AOS_QuotesLH.php','AOS_QuotesLH', 'accountFromLead');



?>