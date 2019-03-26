<?php
// created: 2018-10-08 15:46:07
$dictionary["wifi_wifi_accounts_leads"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'wifi_wifi_accounts_leads' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'wifi_wifi_accounts',
      'rhs_table' => 'wifi_wifi_accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'wifi_wifi_accounts_leads_c',
      'join_key_lhs' => 'wifi_wifi_accounts_leadsleads_ida',
      'join_key_rhs' => 'wifi_wifi_accounts_leadswifi_wifi_accounts_idb',
    ),
  ),
  'table' => 'wifi_wifi_accounts_leads_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'wifi_wifi_accounts_leadsleads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'wifi_wifi_accounts_leadswifi_wifi_accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'wifi_wifi_accounts_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'wifi_wifi_accounts_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'wifi_wifi_accounts_leadsleads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'wifi_wifi_accounts_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'wifi_wifi_accounts_leadswifi_wifi_accounts_idb',
      ),
    ),
  ),
);