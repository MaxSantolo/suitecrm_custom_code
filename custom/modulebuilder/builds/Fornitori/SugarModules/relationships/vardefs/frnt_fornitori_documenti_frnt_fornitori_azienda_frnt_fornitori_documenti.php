<?php
// created: 2019-09-05 15:47:55
$dictionary["frnt_fornitori_documenti"]["fields"]["frnt_fornitori_documenti_frnt_fornitori_azienda"] = array (
  'name' => 'frnt_fornitori_documenti_frnt_fornitori_azienda',
  'type' => 'link',
  'relationship' => 'frnt_fornitori_documenti_frnt_fornitori_azienda',
  'source' => 'non-db',
  'module' => 'frnt_fornitori_azienda',
  'bean_name' => 'frnt_fornitori_azienda',
  'vname' => 'LBL_FRNT_FORNITORI_DOCUMENTI_FRNT_FORNITORI_AZIENDA_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
  'id_name' => 'frnt_forni9c3dazienda_ida',
);
$dictionary["frnt_fornitori_documenti"]["fields"]["frnt_fornitori_documenti_frnt_fornitori_azienda_name"] = array (
  'name' => 'frnt_fornitori_documenti_frnt_fornitori_azienda_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FRNT_FORNITORI_DOCUMENTI_FRNT_FORNITORI_AZIENDA_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
  'save' => true,
  'id_name' => 'frnt_forni9c3dazienda_ida',
  'link' => 'frnt_fornitori_documenti_frnt_fornitori_azienda',
  'table' => 'frnt_fornitori_azienda',
  'module' => 'frnt_fornitori_azienda',
  'rname' => 'name',
);
$dictionary["frnt_fornitori_documenti"]["fields"]["frnt_forni9c3dazienda_ida"] = array (
  'name' => 'frnt_forni9c3dazienda_ida',
  'type' => 'link',
  'relationship' => 'frnt_fornitori_documenti_frnt_fornitori_azienda',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_FRNT_FORNITORI_DOCUMENTI_FRNT_FORNITORI_AZIENDA_FROM_FRNT_FORNITORI_DOCUMENTI_TITLE',
);
