<?php
// created: 2018-10-31 13:06:37
$dictionary["DR_Eventi"]["fields"]["dr_eventi_sr_servizi_richiesti"] = array (
  'name' => 'dr_eventi_sr_servizi_richiesti',
  'type' => 'link',
  'relationship' => 'dr_eventi_sr_servizi_richiesti',
  'source' => 'non-db',
  'module' => 'sr_servizi_richiesti',
  'bean_name' => 'sr_servizi_richiesti',
  'vname' => 'LBL_DR_EVENTI_SR_SERVIZI_RICHIESTI_FROM_SR_SERVIZI_RICHIESTI_TITLE',
  'id_name' => 'dr_eventi_sr_servizi_richiestisr_servizi_richiesti_idb',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_sr_servizi_richiesti_name"] = array (
  'name' => 'dr_eventi_sr_servizi_richiesti_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_SR_SERVIZI_RICHIESTI_FROM_SR_SERVIZI_RICHIESTI_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_sr_servizi_richiestisr_servizi_richiesti_idb',
  'link' => 'dr_eventi_sr_servizi_richiesti',
  'table' => 'sr_servizi_richiesti',
  'module' => 'sr_servizi_richiesti',
  'rname' => 'name',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_sr_servizi_richiestisr_servizi_richiesti_idb"] = array (
  'name' => 'dr_eventi_sr_servizi_richiestisr_servizi_richiesti_idb',
  'type' => 'link',
  'relationship' => 'dr_eventi_sr_servizi_richiesti',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DR_EVENTI_SR_SERVIZI_RICHIESTI_FROM_SR_SERVIZI_RICHIESTI_TITLE',
);
