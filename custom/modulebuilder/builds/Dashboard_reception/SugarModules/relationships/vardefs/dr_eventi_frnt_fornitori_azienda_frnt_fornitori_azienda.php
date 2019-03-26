<?php
// created: 2018-10-31 13:06:37
$dictionary["frnt_fornitori_azienda"]["fields"]["dr_eventi_frnt_fornitori_azienda"] = array (
  'name' => 'dr_eventi_frnt_fornitori_azienda',
  'type' => 'link',
  'relationship' => 'dr_eventi_frnt_fornitori_azienda',
  'source' => 'non-db',
  'module' => 'DR_Eventi',
  'bean_name' => false,
  'vname' => 'LBL_DR_EVENTI_FRNT_FORNITORI_AZIENDA_FROM_DR_EVENTI_TITLE',
  'id_name' => 'dr_eventi_frnt_fornitori_aziendadr_eventi_ida',
);
$dictionary["frnt_fornitori_azienda"]["fields"]["dr_eventi_frnt_fornitori_azienda_name"] = array (
  'name' => 'dr_eventi_frnt_fornitori_azienda_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_FRNT_FORNITORI_AZIENDA_FROM_DR_EVENTI_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_frnt_fornitori_aziendadr_eventi_ida',
  'link' => 'dr_eventi_frnt_fornitori_azienda',
  'table' => 'dr_eventi',
  'module' => 'DR_Eventi',
  'rname' => 'name',
);
$dictionary["frnt_fornitori_azienda"]["fields"]["dr_eventi_frnt_fornitori_aziendadr_eventi_ida"] = array (
  'name' => 'dr_eventi_frnt_fornitori_aziendadr_eventi_ida',
  'type' => 'link',
  'relationship' => 'dr_eventi_frnt_fornitori_azienda',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DR_EVENTI_FRNT_FORNITORI_AZIENDA_FROM_DR_EVENTI_TITLE',
);
