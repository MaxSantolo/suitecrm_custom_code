<?php
// created: 2018-10-31 13:06:37
$dictionary["DR_Eventi"]["fields"]["dr_eventi_calls"] = array (
  'name' => 'dr_eventi_calls',
  'type' => 'link',
  'relationship' => 'dr_eventi_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_DR_EVENTI_CALLS_FROM_CALLS_TITLE',
  'id_name' => 'dr_eventi_callscalls_idb',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_calls_name"] = array (
  'name' => 'dr_eventi_calls_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_CALLS_FROM_CALLS_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_callscalls_idb',
  'link' => 'dr_eventi_calls',
  'table' => 'calls',
  'module' => 'Calls',
  'rname' => 'name',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_callscalls_idb"] = array (
  'name' => 'dr_eventi_callscalls_idb',
  'type' => 'link',
  'relationship' => 'dr_eventi_calls',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DR_EVENTI_CALLS_FROM_CALLS_TITLE',
);
