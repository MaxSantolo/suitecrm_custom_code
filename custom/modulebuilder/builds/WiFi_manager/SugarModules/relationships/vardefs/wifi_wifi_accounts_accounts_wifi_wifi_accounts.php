<?php
// created: 2018-10-08 15:46:07
$dictionary["wifi_wifi_accounts"]["fields"]["wifi_wifi_accounts_accounts"] = array (
  'name' => 'wifi_wifi_accounts_accounts',
  'type' => 'link',
  'relationship' => 'wifi_wifi_accounts_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_WIFI_WIFI_ACCOUNTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'wifi_wifi_accounts_accountsaccounts_ida',
);
$dictionary["wifi_wifi_accounts"]["fields"]["wifi_wifi_accounts_accounts_name"] = array (
  'name' => 'wifi_wifi_accounts_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_WIFI_WIFI_ACCOUNTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'wifi_wifi_accounts_accountsaccounts_ida',
  'link' => 'wifi_wifi_accounts_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["wifi_wifi_accounts"]["fields"]["wifi_wifi_accounts_accountsaccounts_ida"] = array (
  'name' => 'wifi_wifi_accounts_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'wifi_wifi_accounts_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_WIFI_WIFI_ACCOUNTS_ACCOUNTS_FROM_WIFI_WIFI_ACCOUNTS_TITLE',
);
