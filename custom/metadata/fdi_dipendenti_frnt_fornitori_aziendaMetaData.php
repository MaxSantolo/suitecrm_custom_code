<?php
// created: 2019-08-01 13:33:49
$dictionary["fdi_dipendenti_frnt_fornitori_azienda"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'fdi_dipendenti_frnt_fornitori_azienda' => 
    array (
      'lhs_module' => 'frnt_fornitori_azienda',
      'lhs_table' => 'frnt_fornitori_azienda',
      'lhs_key' => 'id',
      'rhs_module' => 'FDi_dipendenti',
      'rhs_table' => 'fdi_dipendenti',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'fdi_dipendenti_frnt_fornitori_azienda_c',
      'join_key_lhs' => 'fdi_dipendenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida',
      'join_key_rhs' => 'fdi_dipendenti_frnt_fornitori_aziendafdi_dipendenti_idb',
    ),
  ),
  'table' => 'fdi_dipendenti_frnt_fornitori_azienda_c',
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
      'name' => 'fdi_dipendenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'fdi_dipendenti_frnt_fornitori_aziendafdi_dipendenti_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'fdi_dipendenti_frnt_fornitori_aziendaspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'fdi_dipendenti_frnt_fornitori_azienda_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'fdi_dipendenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'fdi_dipendenti_frnt_fornitori_azienda_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'fdi_dipendenti_frnt_fornitori_aziendafdi_dipendenti_idb',
      ),
    ),
  ),
);