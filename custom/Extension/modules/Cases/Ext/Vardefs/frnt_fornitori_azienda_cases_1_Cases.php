<?php
// created: 2019-08-01 13:20:13
$dictionary["Case"]["fields"]["frnt_fornitori_azienda_cases_1"] = array (
  'name' => 'frnt_fornitori_azienda_cases_1',
  'type' => 'link',
  'relationship' => 'frnt_fornitori_azienda_cases_1',
  'source' => 'non-db',
  'module' => 'frnt_fornitori_azienda',
  'bean_name' => 'frnt_fornitori_azienda',
  'vname' => 'LBL_FRNT_FORNITORI_AZIENDA_CASES_1_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
  'id_name' => 'frnt_fornitori_azienda_cases_1frnt_fornitori_azienda_ida',
);
$dictionary["Case"]["fields"]["frnt_fornitori_azienda_cases_1_name"] = array (
  'name' => 'frnt_fornitori_azienda_cases_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FRNT_FORNITORI_AZIENDA_CASES_1_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
  'save' => true,
  'id_name' => 'frnt_fornitori_azienda_cases_1frnt_fornitori_azienda_ida',
  'link' => 'frnt_fornitori_azienda_cases_1',
  'table' => 'frnt_fornitori_azienda',
  'module' => 'frnt_fornitori_azienda',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["frnt_fornitori_azienda_cases_1frnt_fornitori_azienda_ida"] = array (
  'name' => 'frnt_fornitori_azienda_cases_1frnt_fornitori_azienda_ida',
  'type' => 'link',
  'relationship' => 'frnt_fornitori_azienda_cases_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_FRNT_FORNITORI_AZIENDA_CASES_1_FROM_CASES_TITLE',
);
