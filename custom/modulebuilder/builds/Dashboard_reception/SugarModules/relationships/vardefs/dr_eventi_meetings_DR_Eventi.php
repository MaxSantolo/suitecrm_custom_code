<?php
// created: 2018-10-31 13:06:37
$dictionary["DR_Eventi"]["fields"]["dr_eventi_meetings"] = array (
  'name' => 'dr_eventi_meetings',
  'type' => 'link',
  'relationship' => 'dr_eventi_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_DR_EVENTI_MEETINGS_FROM_MEETINGS_TITLE',
  'id_name' => 'dr_eventi_meetingsmeetings_idb',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_meetings_name"] = array (
  'name' => 'dr_eventi_meetings_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_MEETINGS_FROM_MEETINGS_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_meetingsmeetings_idb',
  'link' => 'dr_eventi_meetings',
  'table' => 'meetings',
  'module' => 'Meetings',
  'rname' => 'name',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_meetingsmeetings_idb"] = array (
  'name' => 'dr_eventi_meetingsmeetings_idb',
  'type' => 'link',
  'relationship' => 'dr_eventi_meetings',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DR_EVENTI_MEETINGS_FROM_MEETINGS_TITLE',
);
