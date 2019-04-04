<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-06-13 09:39:51
$dictionary['AOS_Invoices']['fields']['name']['required']=false;
$dictionary['AOS_Invoices']['fields']['name']['inline_edit']=true;
$dictionary['AOS_Invoices']['fields']['name']['duplicate_merge']='disabled';
$dictionary['AOS_Invoices']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Invoices']['fields']['name']['merge_filter']='disabled';
$dictionary['AOS_Invoices']['fields']['name']['unified_search']=false;

 

 // created: 2018-06-13 11:10:29
$dictionary['AOS_Invoices']['fields']['status']['inline_edit']=true;
$dictionary['AOS_Invoices']['fields']['status']['options']='status_cedolino';
$dictionary['AOS_Invoices']['fields']['status']['merge_filter']='disabled';

 

 // created: 2018-06-13 10:20:05
$dictionary['AOS_Invoices']['fields']['invia_ricevuta_c']['inline_edit']='1';
$dictionary['AOS_Invoices']['fields']['invia_ricevuta_c']['labelValue']='Invia Ricevuta';

 

 // created: 2018-06-13 10:44:36
$dictionary['AOS_Invoices']['fields']['pagato_con_c']['inline_edit']='1';
$dictionary['AOS_Invoices']['fields']['pagato_con_c']['labelValue']='Modalità di pagamento';

 

// created: 2018-06-13 10:54:26
$dictionary["AOS_Invoices"]["fields"]["leads_aos_invoices_1"] = array (
  'name' => 'leads_aos_invoices_1',
  'type' => 'link',
  'relationship' => 'leads_aos_invoices_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_AOS_INVOICES_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_aos_invoices_1leads_ida',
);
$dictionary["AOS_Invoices"]["fields"]["leads_aos_invoices_1_name"] = array (
  'name' => 'leads_aos_invoices_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_AOS_INVOICES_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_aos_invoices_1leads_ida',
  'link' => 'leads_aos_invoices_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["AOS_Invoices"]["fields"]["leads_aos_invoices_1leads_ida"] = array (
  'name' => 'leads_aos_invoices_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_aos_invoices_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_AOS_INVOICES_1_FROM_AOS_INVOICES_TITLE',
);

?>