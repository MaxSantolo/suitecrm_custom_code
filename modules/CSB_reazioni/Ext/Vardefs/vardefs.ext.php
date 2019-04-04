<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-08-06 15:04:12
$dictionary["CSB_reazioni"]["fields"]["csb_reazioni_leads"] = array (
  'name' => 'csb_reazioni_leads',
  'type' => 'link',
  'relationship' => 'csb_reazioni_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_CSB_REAZIONI_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'csb_reazioni_leadsleads_ida',
);
$dictionary["CSB_reazioni"]["fields"]["csb_reazioni_leads_name"] = array (
  'name' => 'csb_reazioni_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CSB_REAZIONI_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'csb_reazioni_leadsleads_ida',
  'link' => 'csb_reazioni_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["CSB_reazioni"]["fields"]["csb_reazioni_leadsleads_ida"] = array (
  'name' => 'csb_reazioni_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'csb_reazioni_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CSB_REAZIONI_LEADS_FROM_CSB_REAZIONI_TITLE',
);


 // created: 2018-08-06 15:07:17
$dictionary['CSB_reazioni']['fields']['name']['required']=false;
$dictionary['CSB_reazioni']['fields']['name']['inline_edit']=true;
$dictionary['CSB_reazioni']['fields']['name']['duplicate_merge']='disabled';
$dictionary['CSB_reazioni']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['CSB_reazioni']['fields']['name']['merge_filter']='disabled';
$dictionary['CSB_reazioni']['fields']['name']['unified_search']=false;

 

 // created: 2018-08-08 10:15:06
$dictionary['CSB_reazioni']['fields']['url']['default_value']='<p>Test url</p>';
$dictionary['CSB_reazioni']['fields']['url']['default']='<p>Test url</p>';

 

 // created: 2018-08-08 10:19:10
$dictionary['CSB_reazioni']['fields']['url_sb_c']['inline_edit']='1';
$dictionary['CSB_reazioni']['fields']['url_sb_c']['labelValue']='Link campagna';

 
?>