<?php
// created: 2018-10-31 14:44:09
$dictionary["db_eventi_leads"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'db_eventi_leads' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'db_eventi',
      'rhs_table' => 'db_eventi',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'db_eventi_leads_c',
      'join_key_lhs' => 'db_eventi_leadsleads_ida',
      'join_key_rhs' => 'db_eventi_leadsdb_eventi_idb',
    ),
  ),
  'table' => 'db_eventi_leads_c',
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
      'name' => 'db_eventi_leadsleads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'db_eventi_leadsdb_eventi_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'db_eventi_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'db_eventi_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'db_eventi_leadsleads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'db_eventi_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'db_eventi_leadsdb_eventi_idb',
      ),
    ),
  ),
);