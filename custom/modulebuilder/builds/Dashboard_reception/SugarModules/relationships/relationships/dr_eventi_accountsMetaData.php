<?php
// created: 2018-10-31 13:06:37
$dictionary["dr_eventi_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'dr_eventi_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'DR_Eventi',
      'rhs_table' => 'dr_eventi',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'dr_eventi_accounts_c',
      'join_key_lhs' => 'dr_eventi_accountsaccounts_ida',
      'join_key_rhs' => 'dr_eventi_accountsdr_eventi_idb',
    ),
  ),
  'table' => 'dr_eventi_accounts_c',
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
      'name' => 'dr_eventi_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'dr_eventi_accountsdr_eventi_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'dr_eventi_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'dr_eventi_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dr_eventi_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'dr_eventi_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'dr_eventi_accountsdr_eventi_idb',
      ),
    ),
  ),
);