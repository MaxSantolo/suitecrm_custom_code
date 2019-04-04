<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-01-31 16:36:14
$dictionary["AOS_Quotes"]["fields"]["leads_aos_quotes_1"] = array (
  'name' => 'leads_aos_quotes_1',
  'type' => 'link',
  'relationship' => 'leads_aos_quotes_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_AOS_QUOTES_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_aos_quotes_1leads_ida',
);
$dictionary["AOS_Quotes"]["fields"]["leads_aos_quotes_1_name"] = array (
  'name' => 'leads_aos_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_AOS_QUOTES_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_aos_quotes_1leads_ida',
  'link' => 'leads_aos_quotes_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["AOS_Quotes"]["fields"]["leads_aos_quotes_1leads_ida"] = array (
  'name' => 'leads_aos_quotes_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_aos_quotes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
);


 // created: 2018-02-01 15:44:43
$dictionary['AOS_Quotes']['fields']['description']['default']='​L’opzione Pick Pack include ​​nel prezzo un pacchetto esclusivo di agevolazioni e servizi, ideato con l’obiettivo di trasformare l​a tua presenza in Pick Center in un’occasione di promozione e sviluppo del tuo business​. 
Per conoscere tutti i vantaggi visita www.pickcenter.it/pickpack';
$dictionary['AOS_Quotes']['fields']['description']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['description']['comments']='Full text of the note';
$dictionary['AOS_Quotes']['fields']['description']['merge_filter']='disabled';

 

 // created: 2018-02-01 14:58:21
$dictionary['AOS_Quotes']['fields']['expiration']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['expiration']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['expiration']['required']=false;
$dictionary['AOS_Quotes']['fields']['expiration']['display_default']='';

 

 // created: 2018-02-07 10:01:36
$dictionary['AOS_Quotes']['fields']['pickpack_text_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['pickpack_text_c']['labelValue']='pickpack_text';

 

 // created: 2018-04-03 15:08:19
$dictionary['AOS_Quotes']['fields']['pickpack_yn_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['pickpack_yn_c']['labelValue']='selettore pick pack';

 

 // created: 2017-12-18 11:44:08
$dictionary['AOS_Quotes']['fields']['pr001_promo_base_id_c']['inline_edit']=1;

 

 // created: 2017-12-18 15:01:00
$dictionary['AOS_Quotes']['fields']['promo_sconto_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['promo_sconto_c']['labelValue']='Sconto %';

 

 // created: 2017-12-21 16:58:20
$dictionary['AOS_Quotes']['fields']['quotes_promodesc_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['quotes_promodesc_c']['labelValue']='Descrizione Promo';

 

 // created: 2018-02-20 13:24:45
$dictionary['AOS_Quotes']['fields']['quotes_sede_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['quotes_sede_c']['labelValue']='Sede';

 

 // created: 2017-12-18 11:44:09
$dictionary['AOS_Quotes']['fields']['quot_promo_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['quot_promo_c']['labelValue']='Promozione';

 

 // created: 2018-04-24 12:21:08
$dictionary['AOS_Quotes']['fields']['stage']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['stage']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['stage']['required']=false;

 

 // created: 2017-11-10 10:39:00
$dictionary['AOS_Quotes']['fields']['tax_amount']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['tax_amount']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['tax_amount']['enable_range_search']=false;

 

 // created: 2017-11-16 16:00:55
$dictionary['AOS_Quotes']['fields']['template_ddown_c']['default']='^^';
$dictionary['AOS_Quotes']['fields']['template_ddown_c']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['template_ddown_c']['merge_filter']='disabled';
$dictionary['AOS_Quotes']['fields']['template_ddown_c']['reportable']=true;

 

 // created: 2018-04-26 10:56:15
$dictionary['AOS_Quotes']['fields']['data_offerta_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['data_offerta_c']['labelValue']='data_offerta';

 

 // created: 2018-04-03 15:06:14
$dictionary['AOS_Quotes']['fields']['pickpack_select_lingua_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['pickpack_select_lingua_c']['labelValue']='Testo Pick Pack';

 
?>