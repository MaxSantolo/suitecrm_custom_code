<?php
// created: 2019-09-05 15:47:55
$dictionary["frnt_fornitori_documenti_frnt_fornitori_azienda"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'frnt_fornitori_documenti_frnt_fornitori_azienda' => 
    array (
      'lhs_module' => 'frnt_fornitori_azienda',
      'lhs_table' => 'frnt_fornitori_azienda',
      'lhs_key' => 'id',
      'rhs_module' => 'frnt_fornitori_documenti',
      'rhs_table' => 'frnt_fornitori_documenti',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'frnt_fornitori_documenti_frnt_fornitori_azienda_c',
      'join_key_lhs' => 'frnt_forni9c3dazienda_ida',
      'join_key_rhs' => 'frnt_fornie8cbcumenti_idb',
    ),
  ),
  'table' => 'frnt_fornitori_documenti_frnt_fornitori_azienda_c',
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
      'name' => 'frnt_forni9c3dazienda_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'frnt_fornie8cbcumenti_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'frnt_fornitori_documenti_frnt_fornitori_aziendaspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'frnt_fornitori_documenti_frnt_fornitori_azienda_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'frnt_forni9c3dazienda_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'frnt_fornitori_documenti_frnt_fornitori_azienda_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'frnt_fornie8cbcumenti_idb',
      ),
    ),
  ),
);