<?php
// created: 2018-10-31 14:44:09
$dictionary["db_eventi_documents"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'db_eventi_documents' => 
    array (
      'lhs_module' => 'db_eventi',
      'lhs_table' => 'db_eventi',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'db_eventi_documents_c',
      'join_key_lhs' => 'db_eventi_documentsdb_eventi_ida',
      'join_key_rhs' => 'db_eventi_documentsdocuments_idb',
    ),
  ),
  'table' => 'db_eventi_documents_c',
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
      'name' => 'db_eventi_documentsdb_eventi_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'db_eventi_documentsdocuments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'document_revision_id',
      'type' => 'varchar',
      'len' => '36',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'db_eventi_documentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'db_eventi_documents_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'db_eventi_documentsdb_eventi_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'db_eventi_documents_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'db_eventi_documentsdocuments_idb',
      ),
    ),
  ),
);