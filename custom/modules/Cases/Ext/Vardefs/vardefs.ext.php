<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-07-28 13:23:52
$dictionary['Case']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2017-07-28 13:23:52
$dictionary['Case']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2017-07-28 13:23:51
$dictionary['Case']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2017-07-28 13:23:51
$dictionary['Case']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2018-05-08 08:36:27
$dictionary['Case']['fields']['durata_c']['inline_edit']='1';
$dictionary['Case']['fields']['durata_c']['options']='numeric_range_search_dom';
$dictionary['Case']['fields']['durata_c']['labelValue']='Durata';
$dictionary['Case']['fields']['durata_c']['enable_range_search']='1';

 

 // created: 2018-05-08 08:36:44
$dictionary['Case']['fields']['fatturare_c']['inline_edit']='1';
$dictionary['Case']['fields']['fatturare_c']['labelValue']='Da fatturare:';

 

// created: 2019-06-17 14:52:03
$dictionary["Case"]["fields"]["leads_cases_1"] = array (
  'name' => 'leads_cases_1',
  'type' => 'link',
  'relationship' => 'leads_cases_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_CASES_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_cases_1leads_ida',
);
$dictionary["Case"]["fields"]["leads_cases_1_name"] = array (
  'name' => 'leads_cases_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_CASES_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_cases_1leads_ida',
  'link' => 'leads_cases_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Case"]["fields"]["leads_cases_1leads_ida"] = array (
  'name' => 'leads_cases_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_cases_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_CASES_1_FROM_CASES_TITLE',
);


 // created: 2019-06-17 15:27:39
$dictionary['Case']['fields']['case_update_form']['inline_edit']=true;
$dictionary['Case']['fields']['case_update_form']['merge_filter']='disabled';
$dictionary['Case']['fields']['case_update_form']['reportable']=true;

 

$dictionary['Case']['fields']['account_id']['required'] = false;



 // created: 2019-07-03 12:03:32
$dictionary['Case']['fields']['sede_ticket_c']['inline_edit']='1';
$dictionary['Case']['fields']['sede_ticket_c']['labelValue']='Sede';

 

 // created: 2019-07-05 13:09:42
$dictionary['Case']['fields']['importo_c']['inline_edit']='1';
$dictionary['Case']['fields']['importo_c']['labelValue']='Importo';

 

 // created: 2019-07-05 13:09:42
$dictionary['Case']['fields']['currency_id']['inline_edit']=1;

 

 // created: 2019-07-09 09:10:47
$dictionary['Case']['fields']['cliente_c']['inline_edit']='1';
$dictionary['Case']['fields']['cliente_c']['labelValue']='Per conto cliente';

 

 // created: 2019-07-09 09:19:05
$dictionary['Case']['fields']['status']['inline_edit']=true;
$dictionary['Case']['fields']['status']['comments']='The status of the case';
$dictionary['Case']['fields']['status']['merge_filter']='disabled';

 

 // created: 2019-07-10 10:12:28
$dictionary['Case']['fields']['parent_name']['inline_edit']='1';
$dictionary['Case']['fields']['parent_name']['labelValue']='Fornitore';

 

 // created: 2019-07-10 10:12:29
$dictionary['Case']['fields']['parent_type']['inline_edit']=1;

 

 // created: 2019-07-10 10:12:29
$dictionary['Case']['fields']['parent_id']['inline_edit']=1;

 

 // created: 2019-07-10 11:15:43
$dictionary['Case']['fields']['debt_value_c']['inline_edit']='1';
$dictionary['Case']['fields']['debt_value_c']['labelValue']='Importo addebito';

 

 // created: 2019-07-10 12:57:39
$dictionary['Case']['fields']['intervento_c']['inline_edit']='1';
$dictionary['Case']['fields']['intervento_c']['labelValue']='Data di intervento:';

 
?>