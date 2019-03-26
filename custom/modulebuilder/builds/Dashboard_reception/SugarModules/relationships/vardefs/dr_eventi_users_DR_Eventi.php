<?php
// created: 2018-10-31 13:06:37
$dictionary["DR_Eventi"]["fields"]["dr_eventi_users"] = array (
  'name' => 'dr_eventi_users',
  'type' => 'link',
  'relationship' => 'dr_eventi_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_DR_EVENTI_USERS_FROM_USERS_TITLE',
  'id_name' => 'dr_eventi_usersusers_idb',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_users_name"] = array (
  'name' => 'dr_eventi_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_usersusers_idb',
  'link' => 'dr_eventi_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_usersusers_idb"] = array (
  'name' => 'dr_eventi_usersusers_idb',
  'type' => 'link',
  'relationship' => 'dr_eventi_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DR_EVENTI_USERS_FROM_USERS_TITLE',
);
