<?php
// created: 2018-10-31 13:06:37
$dictionary["User"]["fields"]["dr_eventi_users"] = array (
  'name' => 'dr_eventi_users',
  'type' => 'link',
  'relationship' => 'dr_eventi_users',
  'source' => 'non-db',
  'module' => 'DR_Eventi',
  'bean_name' => false,
  'vname' => 'LBL_DR_EVENTI_USERS_FROM_DR_EVENTI_TITLE',
  'id_name' => 'dr_eventi_usersdr_eventi_ida',
);
$dictionary["User"]["fields"]["dr_eventi_users_name"] = array (
  'name' => 'dr_eventi_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_USERS_FROM_DR_EVENTI_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_usersdr_eventi_ida',
  'link' => 'dr_eventi_users',
  'table' => 'dr_eventi',
  'module' => 'DR_Eventi',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["dr_eventi_usersdr_eventi_ida"] = array (
  'name' => 'dr_eventi_usersdr_eventi_ida',
  'type' => 'link',
  'relationship' => 'dr_eventi_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DR_EVENTI_USERS_FROM_DR_EVENTI_TITLE',
);
