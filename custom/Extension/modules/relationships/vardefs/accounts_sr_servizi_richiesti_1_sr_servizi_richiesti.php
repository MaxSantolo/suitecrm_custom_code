<?php
// created: 2018-05-18 08:33:33
$dictionary["sr_servizi_richiesti"]["fields"]["accounts_sr_servizi_richiesti_1"] = array (
  'name' => 'accounts_sr_servizi_richiesti_1',
  'type' => 'link',
  'relationship' => 'accounts_sr_servizi_richiesti_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_SR_SERVIZI_RICHIESTI_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_sr_servizi_richiesti_1accounts_ida',
);
$dictionary["sr_servizi_richiesti"]["fields"]["accounts_sr_servizi_richiesti_1_name"] = array (
  'name' => 'accounts_sr_servizi_richiesti_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SR_SERVIZI_RICHIESTI_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_sr_servizi_richiesti_1accounts_ida',
  'link' => 'accounts_sr_servizi_richiesti_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["sr_servizi_richiesti"]["fields"]["accounts_sr_servizi_richiesti_1accounts_ida"] = array (
  'name' => 'accounts_sr_servizi_richiesti_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_sr_servizi_richiesti_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_SR_SERVIZI_RICHIESTI_1_FROM_SR_SERVIZI_RICHIESTI_TITLE',
);
