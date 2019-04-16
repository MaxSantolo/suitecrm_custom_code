<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-05-04 10:59:24
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


 // created: 2018-05-04 11:11:35
$dictionary['sr_servizi_richiesti']['fields']['name']['required']=false;
$dictionary['sr_servizi_richiesti']['fields']['name']['inline_edit']=true;
$dictionary['sr_servizi_richiesti']['fields']['name']['duplicate_merge']='disabled';
$dictionary['sr_servizi_richiesti']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['sr_servizi_richiesti']['fields']['name']['merge_filter']='disabled';
$dictionary['sr_servizi_richiesti']['fields']['name']['unified_search']=false;

 

 // created: 2018-05-04 11:29:04
$dictionary['sr_servizi_richiesti']['fields']['num_quot_uff_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['num_quot_uff_c']['labelValue']='Numero Uffici/Sale Quotati';

 

 // created: 2018-05-04 11:29:47
$dictionary['sr_servizi_richiesti']['fields']['num_quot_postazioni_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['num_quot_postazioni_c']['labelValue']='Numero Postazioni Quotate';

 

 // created: 2018-06-06 16:31:28
$dictionary['sr_servizi_richiesti']['fields']['centro_quotato_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['centro_quotato_c']['labelValue']='Centro Quotato';

 

 // created: 2018-05-04 11:41:54
$dictionary['sr_servizi_richiesti']['fields']['inviata_offerta_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['inviata_offerta_c']['labelValue']='Offerta Inviata';

 

 // created: 2018-05-04 11:53:01
$dictionary['sr_servizi_richiesti']['fields']['crea_compito_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['crea_compito_c']['labelValue']='Crea Compito';

 

 // created: 2018-05-04 12:21:28
$dictionary['sr_servizi_richiesti']['fields']['oggetto_compito_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['oggetto_compito_c']['labelValue']='oggetto_compito';

 

 // created: 2018-05-04 12:39:40
$dictionary['sr_servizi_richiesti']['fields']['titolo_compito_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['titolo_compito_c']['labelValue']='titolo compito';

 

 // created: 2018-05-07 11:58:40
$dictionary['sr_servizi_richiesti']['fields']['centro_scelto']['options']='centro_scelto_altre_zone';

 

 // created: 2018-05-07 12:00:50

 

 // created: 2019-04-15 15:54:16
$dictionary['sr_servizi_richiesti']['fields']['stato_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['stato_c']['labelValue']='Stato';

 

 // created: 2018-06-15 16:09:57
$dictionary['sr_servizi_richiesti']['fields']['closedwhy_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['closedwhy_c']['labelValue']='Note di chiusura';

 

 // created: 2018-06-15 16:16:17
$dictionary['sr_servizi_richiesti']['fields']['data_ora_appuntamento_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['data_ora_appuntamento_c']['labelValue']='Data appuntamento/call';

 

 // created: 2018-06-15 16:20:06
$dictionary['sr_servizi_richiesti']['fields']['sede_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['sede_c']['labelValue']='sede';

 

 // created: 2018-06-15 16:35:12
$dictionary['sr_servizi_richiesti']['fields']['sendmail_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['sendmail_c']['labelValue']='Invia Email';

 

 // created: 2018-06-19 10:48:38
$dictionary['sr_servizi_richiesti']['fields']['telefono_contatto_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['telefono_contatto_c']['labelValue']='Telefono';

 

 // created: 2018-06-19 10:49:03
$dictionary['sr_servizi_richiesti']['fields']['cellulare_contatto_c']['inline_edit']='1';
$dictionary['sr_servizi_richiesti']['fields']['cellulare_contatto_c']['labelValue']='Cellulare';

 

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



?>