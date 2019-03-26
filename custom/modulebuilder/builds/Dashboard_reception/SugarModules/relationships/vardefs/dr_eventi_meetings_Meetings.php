<?php
// created: 2018-10-31 13:06:37
$dictionary["Meeting"]["fields"]["dr_eventi_meetings"] = array (
  'name' => 'dr_eventi_meetings',
  'type' => 'link',
  'relationship' => 'dr_eventi_meetings',
  'source' => 'non-db',
  'module' => 'DR_Eventi',
  'bean_name' => false,
  'vname' => 'LBL_DR_EVENTI_MEETINGS_FROM_DR_EVENTI_TITLE',
  'id_name' => 'dr_eventi_meetingsdr_eventi_ida',
);
$dictionary["Meeting"]["fields"]["dr_eventi_meetings_name"] = array (
  'name' => 'dr_eventi_meetings_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_MEETINGS_FROM_DR_EVENTI_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_meetingsdr_eventi_ida',
  'link' => 'dr_eventi_meetings',
  'table' => 'dr_eventi',
  'module' => 'DR_Eventi',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["dr_eventi_meetingsdr_eventi_ida"] = array (
  'name' => 'dr_eventi_meetingsdr_eventi_ida',
  'type' => 'link',
  'relationship' => 'dr_eventi_meetings',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DR_EVENTI_MEETINGS_FROM_DR_EVENTI_TITLE',
);
