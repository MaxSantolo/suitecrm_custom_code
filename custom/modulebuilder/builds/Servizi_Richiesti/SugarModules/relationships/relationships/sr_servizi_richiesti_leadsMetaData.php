<?php
// created: 2018-10-31 11:25:22
$dictionary["sr_servizi_richiesti_leads"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sr_servizi_richiesti_leads' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'sr_servizi_richiesti',
      'rhs_table' => 'sr_servizi_richiesti',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sr_servizi_richiesti_leads_c',
      'join_key_lhs' => 'sr_servizi_richiesti_leadsleads_ida',
      'join_key_rhs' => 'sr_servizi_richiesti_leadssr_servizi_richiesti_idb',
    ),
  ),
  'table' => 'sr_servizi_richiesti_leads_c',
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
      'name' => 'sr_servizi_richiesti_leadsleads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sr_servizi_richiesti_leadssr_servizi_richiesti_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sr_servizi_richiesti_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sr_servizi_richiesti_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sr_servizi_richiesti_leadsleads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sr_servizi_richiesti_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sr_servizi_richiesti_leadssr_servizi_richiesti_idb',
      ),
    ),
  ),
);