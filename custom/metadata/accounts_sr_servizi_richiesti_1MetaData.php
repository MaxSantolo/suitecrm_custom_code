<?php
// created: 2018-05-18 08:33:33
$dictionary["accounts_sr_servizi_richiesti_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_sr_servizi_richiesti_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'sr_servizi_richiesti',
      'rhs_table' => 'sr_servizi_richiesti',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_sr_servizi_richiesti_1_c',
      'join_key_lhs' => 'accounts_sr_servizi_richiesti_1accounts_ida',
      'join_key_rhs' => 'accounts_sr_servizi_richiesti_1sr_servizi_richiesti_idb',
    ),
  ),
  'table' => 'accounts_sr_servizi_richiesti_1_c',
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
      'name' => 'accounts_sr_servizi_richiesti_1accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_sr_servizi_richiesti_1sr_servizi_richiesti_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_sr_servizi_richiesti_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_sr_servizi_richiesti_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_sr_servizi_richiesti_1accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_sr_servizi_richiesti_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_sr_servizi_richiesti_1sr_servizi_richiesti_idb',
      ),
    ),
  ),
);