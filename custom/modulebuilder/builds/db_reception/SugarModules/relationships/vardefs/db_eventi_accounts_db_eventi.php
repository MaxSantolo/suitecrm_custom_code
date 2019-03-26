<?php
// created: 2018-10-31 14:44:09
$dictionary["db_eventi"]["fields"]["db_eventi_accounts"] = array (
  'name' => 'db_eventi_accounts',
  'type' => 'link',
  'relationship' => 'db_eventi_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_DB_EVENTI_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'db_eventi_accountsaccounts_ida',
);
$dictionary["db_eventi"]["fields"]["db_eventi_accounts_name"] = array (
  'name' => 'db_eventi_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DB_EVENTI_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'db_eventi_accountsaccounts_ida',
  'link' => 'db_eventi_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["db_eventi"]["fields"]["db_eventi_accountsaccounts_ida"] = array (
  'name' => 'db_eventi_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'db_eventi_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DB_EVENTI_ACCOUNTS_FROM_DB_EVENTI_TITLE',
);
