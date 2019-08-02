<?php
// created: 2019-08-01 13:26:09
$dictionary["fd_documenti_frnt_fornitori_azienda"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'fd_documenti_frnt_fornitori_azienda' => 
    array (
      'lhs_module' => 'frnt_fornitori_azienda',
      'lhs_table' => 'frnt_fornitori_azienda',
      'lhs_key' => 'id',
      'rhs_module' => 'FD_documenti',
      'rhs_table' => 'fd_documenti',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'fd_documenti_frnt_fornitori_azienda_c',
      'join_key_lhs' => 'fd_documenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida',
      'join_key_rhs' => 'fd_documenti_frnt_fornitori_aziendafd_documenti_idb',
    ),
  ),
  'table' => 'fd_documenti_frnt_fornitori_azienda_c',
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
      'name' => 'fd_documenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'fd_documenti_frnt_fornitori_aziendafd_documenti_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'fd_documenti_frnt_fornitori_aziendaspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'fd_documenti_frnt_fornitori_azienda_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'fd_documenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'fd_documenti_frnt_fornitori_azienda_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'fd_documenti_frnt_fornitori_aziendafd_documenti_idb',
      ),
    ),
  ),
);