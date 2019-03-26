<?php
// created: 2018-10-08 15:46:07
$dictionary["wifi_wifi_accounts"]["fields"]["wifi_wifi_accounts_leads"] = array (
  'name' => 'wifi_wifi_accounts_leads',
  'type' => 'link',
  'relationship' => 'wifi_wifi_accounts_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_WIFI_WIFI_ACCOUNTS_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'wifi_wifi_accounts_leadsleads_ida',
);
$dictionary["wifi_wifi_accounts"]["fields"]["wifi_wifi_accounts_leads_name"] = array (
  'name' => 'wifi_wifi_accounts_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_WIFI_WIFI_ACCOUNTS_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'wifi_wifi_accounts_leadsleads_ida',
  'link' => 'wifi_wifi_accounts_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["wifi_wifi_accounts"]["fields"]["wifi_wifi_accounts_leadsleads_ida"] = array (
  'name' => 'wifi_wifi_accounts_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'wifi_wifi_accounts_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_WIFI_WIFI_ACCOUNTS_LEADS_FROM_WIFI_WIFI_ACCOUNTS_TITLE',
);
