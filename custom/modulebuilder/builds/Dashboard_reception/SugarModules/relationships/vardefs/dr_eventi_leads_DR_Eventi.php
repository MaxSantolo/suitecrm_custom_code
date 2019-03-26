<?php
// created: 2018-10-31 13:06:37
$dictionary["DR_Eventi"]["fields"]["dr_eventi_leads"] = array (
  'name' => 'dr_eventi_leads',
  'type' => 'link',
  'relationship' => 'dr_eventi_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_DR_EVENTI_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'dr_eventi_leadsleads_ida',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_leads_name"] = array (
  'name' => 'dr_eventi_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_leadsleads_ida',
  'link' => 'dr_eventi_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_leadsleads_ida"] = array (
  'name' => 'dr_eventi_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'dr_eventi_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DR_EVENTI_LEADS_FROM_DR_EVENTI_TITLE',
);
