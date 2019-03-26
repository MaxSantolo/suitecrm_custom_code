<?php
// created: 2018-08-06 15:04:12
$dictionary["csb_reazioni_leads"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'csb_reazioni_leads' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'CSB_reazioni',
      'rhs_table' => 'csb_reazioni',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'csb_reazioni_leads_c',
      'join_key_lhs' => 'csb_reazioni_leadsleads_ida',
      'join_key_rhs' => 'csb_reazioni_leadscsb_reazioni_idb',
    ),
  ),
  'table' => 'csb_reazioni_leads_c',
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
      'name' => 'csb_reazioni_leadsleads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'csb_reazioni_leadscsb_reazioni_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'csb_reazioni_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'csb_reazioni_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'csb_reazioni_leadsleads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'csb_reazioni_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'csb_reazioni_leadscsb_reazioni_idb',
      ),
    ),
  ),
);