<?php
// created: 2018-10-31 14:44:09
$dictionary["db_eventi"]["fields"]["db_eventi_leads"] = array (
  'name' => 'db_eventi_leads',
  'type' => 'link',
  'relationship' => 'db_eventi_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_DB_EVENTI_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'db_eventi_leadsleads_ida',
);
$dictionary["db_eventi"]["fields"]["db_eventi_leads_name"] = array (
  'name' => 'db_eventi_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DB_EVENTI_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'db_eventi_leadsleads_ida',
  'link' => 'db_eventi_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["db_eventi"]["fields"]["db_eventi_leadsleads_ida"] = array (
  'name' => 'db_eventi_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'db_eventi_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DB_EVENTI_LEADS_FROM_DB_EVENTI_TITLE',
);
