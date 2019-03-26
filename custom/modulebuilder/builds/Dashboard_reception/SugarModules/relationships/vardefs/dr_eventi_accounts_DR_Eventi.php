<?php
// created: 2018-10-31 13:06:37
$dictionary["DR_Eventi"]["fields"]["dr_eventi_accounts"] = array (
  'name' => 'dr_eventi_accounts',
  'type' => 'link',
  'relationship' => 'dr_eventi_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_DR_EVENTI_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'dr_eventi_accountsaccounts_ida',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_accounts_name"] = array (
  'name' => 'dr_eventi_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_accountsaccounts_ida',
  'link' => 'dr_eventi_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_accountsaccounts_ida"] = array (
  'name' => 'dr_eventi_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'dr_eventi_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DR_EVENTI_ACCOUNTS_FROM_DR_EVENTI_TITLE',
);
