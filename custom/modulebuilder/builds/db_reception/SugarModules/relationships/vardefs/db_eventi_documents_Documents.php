<?php
// created: 2018-10-31 14:44:09
$dictionary["Document"]["fields"]["db_eventi_documents"] = array (
  'name' => 'db_eventi_documents',
  'type' => 'link',
  'relationship' => 'db_eventi_documents',
  'source' => 'non-db',
  'module' => 'db_eventi',
  'bean_name' => false,
  'vname' => 'LBL_DB_EVENTI_DOCUMENTS_FROM_DB_EVENTI_TITLE',
  'id_name' => 'db_eventi_documentsdb_eventi_ida',
);
$dictionary["Document"]["fields"]["db_eventi_documents_name"] = array (
  'name' => 'db_eventi_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DB_EVENTI_DOCUMENTS_FROM_DB_EVENTI_TITLE',
  'save' => true,
  'id_name' => 'db_eventi_documentsdb_eventi_ida',
  'link' => 'db_eventi_documents',
  'table' => 'db_eventi',
  'module' => 'db_eventi',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["db_eventi_documentsdb_eventi_ida"] = array (
  'name' => 'db_eventi_documentsdb_eventi_ida',
  'type' => 'link',
  'relationship' => 'db_eventi_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DB_EVENTI_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
