<?php
// created: 2018-10-31 11:25:22
$dictionary["sr_servizi_richiesti"]["fields"]["sr_servizi_richiesti_leads"] = array (
  'name' => 'sr_servizi_richiesti_leads',
  'type' => 'link',
  'relationship' => 'sr_servizi_richiesti_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_SR_SERVIZI_RICHIESTI_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'sr_servizi_richiesti_leadsleads_ida',
);
$dictionary["sr_servizi_richiesti"]["fields"]["sr_servizi_richiesti_leads_name"] = array (
  'name' => 'sr_servizi_richiesti_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SR_SERVIZI_RICHIESTI_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'sr_servizi_richiesti_leadsleads_ida',
  'link' => 'sr_servizi_richiesti_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["sr_servizi_richiesti"]["fields"]["sr_servizi_richiesti_leadsleads_ida"] = array (
  'name' => 'sr_servizi_richiesti_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'sr_servizi_richiesti_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SR_SERVIZI_RICHIESTI_LEADS_FROM_SR_SERVIZI_RICHIESTI_TITLE',
);
