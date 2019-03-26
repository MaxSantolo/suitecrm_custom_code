<?php
// created: 2018-10-31 13:06:37
$dictionary["dr_eventi_sr_servizi_richiesti"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'dr_eventi_sr_servizi_richiesti' => 
    array (
      'lhs_module' => 'DR_Eventi',
      'lhs_table' => 'dr_eventi',
      'lhs_key' => 'id',
      'rhs_module' => 'sr_servizi_richiesti',
      'rhs_table' => 'sr_servizi_richiesti',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'dr_eventi_sr_servizi_richiesti_c',
      'join_key_lhs' => 'dr_eventi_sr_servizi_richiestidr_eventi_ida',
      'join_key_rhs' => 'dr_eventi_sr_servizi_richiestisr_servizi_richiesti_idb',
    ),
  ),
  'table' => 'dr_eventi_sr_servizi_richiesti_c',
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
      'name' => 'dr_eventi_sr_servizi_richiestidr_eventi_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'dr_eventi_sr_servizi_richiestisr_servizi_richiesti_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'dr_eventi_sr_servizi_richiestispk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'dr_eventi_sr_servizi_richiesti_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dr_eventi_sr_servizi_richiestidr_eventi_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'dr_eventi_sr_servizi_richiesti_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dr_eventi_sr_servizi_richiestisr_servizi_richiesti_idb',
      ),
    ),
  ),
);