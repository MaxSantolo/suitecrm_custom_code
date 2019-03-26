<?php
// created: 2018-10-31 13:06:37
$dictionary["sr_servizi_richiesti"]["fields"]["dr_eventi_sr_servizi_richiesti"] = array (
  'name' => 'dr_eventi_sr_servizi_richiesti',
  'type' => 'link',
  'relationship' => 'dr_eventi_sr_servizi_richiesti',
  'source' => 'non-db',
  'module' => 'DR_Eventi',
  'bean_name' => false,
  'vname' => 'LBL_DR_EVENTI_SR_SERVIZI_RICHIESTI_FROM_DR_EVENTI_TITLE',
  'id_name' => 'dr_eventi_sr_servizi_richiestidr_eventi_ida',
);
$dictionary["sr_servizi_richiesti"]["fields"]["dr_eventi_sr_servizi_richiesti_name"] = array (
  'name' => 'dr_eventi_sr_servizi_richiesti_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_SR_SERVIZI_RICHIESTI_FROM_DR_EVENTI_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_sr_servizi_richiestidr_eventi_ida',
  'link' => 'dr_eventi_sr_servizi_richiesti',
  'table' => 'dr_eventi',
  'module' => 'DR_Eventi',
  'rname' => 'name',
);
$dictionary["sr_servizi_richiesti"]["fields"]["dr_eventi_sr_servizi_richiestidr_eventi_ida"] = array (
  'name' => 'dr_eventi_sr_servizi_richiestidr_eventi_ida',
  'type' => 'link',
  'relationship' => 'dr_eventi_sr_servizi_richiesti',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DR_EVENTI_SR_SERVIZI_RICHIESTI_FROM_DR_EVENTI_TITLE',
);
