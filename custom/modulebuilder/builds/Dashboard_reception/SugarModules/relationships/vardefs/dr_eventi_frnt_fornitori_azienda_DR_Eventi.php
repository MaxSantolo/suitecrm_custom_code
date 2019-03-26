<?php
// created: 2018-10-31 13:06:37
$dictionary["DR_Eventi"]["fields"]["dr_eventi_frnt_fornitori_azienda"] = array (
  'name' => 'dr_eventi_frnt_fornitori_azienda',
  'type' => 'link',
  'relationship' => 'dr_eventi_frnt_fornitori_azienda',
  'source' => 'non-db',
  'module' => 'frnt_fornitori_azienda',
  'bean_name' => 'frnt_fornitori_azienda',
  'vname' => 'LBL_DR_EVENTI_FRNT_FORNITORI_AZIENDA_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
  'id_name' => 'dr_eventi_frnt_fornitori_aziendafrnt_fornitori_azienda_idb',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_frnt_fornitori_azienda_name"] = array (
  'name' => 'dr_eventi_frnt_fornitori_azienda_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_FRNT_FORNITORI_AZIENDA_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_frnt_fornitori_aziendafrnt_fornitori_azienda_idb',
  'link' => 'dr_eventi_frnt_fornitori_azienda',
  'table' => 'frnt_fornitori_azienda',
  'module' => 'frnt_fornitori_azienda',
  'rname' => 'name',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_frnt_fornitori_aziendafrnt_fornitori_azienda_idb"] = array (
  'name' => 'dr_eventi_frnt_fornitori_aziendafrnt_fornitori_azienda_idb',
  'type' => 'link',
  'relationship' => 'dr_eventi_frnt_fornitori_azienda',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DR_EVENTI_FRNT_FORNITORI_AZIENDA_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
);
