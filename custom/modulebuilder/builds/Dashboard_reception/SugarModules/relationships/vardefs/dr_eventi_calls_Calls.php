<?php
// created: 2018-10-31 13:06:37
$dictionary["Call"]["fields"]["dr_eventi_calls"] = array (
  'name' => 'dr_eventi_calls',
  'type' => 'link',
  'relationship' => 'dr_eventi_calls',
  'source' => 'non-db',
  'module' => 'DR_Eventi',
  'bean_name' => false,
  'vname' => 'LBL_DR_EVENTI_CALLS_FROM_DR_EVENTI_TITLE',
  'id_name' => 'dr_eventi_callsdr_eventi_ida',
);
$dictionary["Call"]["fields"]["dr_eventi_calls_name"] = array (
  'name' => 'dr_eventi_calls_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_CALLS_FROM_DR_EVENTI_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_callsdr_eventi_ida',
  'link' => 'dr_eventi_calls',
  'table' => 'dr_eventi',
  'module' => 'DR_Eventi',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["dr_eventi_callsdr_eventi_ida"] = array (
  'name' => 'dr_eventi_callsdr_eventi_ida',
  'type' => 'link',
  'relationship' => 'dr_eventi_calls',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DR_EVENTI_CALLS_FROM_DR_EVENTI_TITLE',
);
