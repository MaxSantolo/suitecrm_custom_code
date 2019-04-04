<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-11-09 09:35:09
$dictionary['AOS_Products']['fields']['contact']['inline_edit']=true;
$dictionary['AOS_Products']['fields']['contact']['merge_filter']='disabled';

 

 // created: 2017-11-10 10:40:57
$dictionary['AOS_Products']['fields']['price']['inline_edit']=true;
$dictionary['AOS_Products']['fields']['price']['merge_filter']='disabled';

 

 // created: 2017-11-10 10:41:03
$dictionary['AOS_Products']['fields']['price_usdollar']['inline_edit']=true;
$dictionary['AOS_Products']['fields']['price_usdollar']['duplicate_merge']='disabled';
$dictionary['AOS_Products']['fields']['price_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['AOS_Products']['fields']['price_usdollar']['merge_filter']='disabled';
$dictionary['AOS_Products']['fields']['price_usdollar']['enable_range_search']=false;

 

 // created: 2017-11-09 08:56:03
$dictionary['AOS_Products']['fields']['prod_giorni_disdetta_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['prod_giorni_disdetta_c']['labelValue']='Giorni per disdetta';

 

 // created: 2017-11-09 08:54:17
$dictionary['AOS_Products']['fields']['prod_rinnovabile_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['prod_rinnovabile_c']['labelValue']='Rinnovabile';

 

 // created: 2017-11-07 09:00:28
$dictionary['AOS_Products']['fields']['prod_unita_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['prod_unita_c']['labelValue']='Unità';

 

 // created: 2017-09-28 12:44:10
$dictionary['AOS_Products']['fields']['txt_prodotti_esolver_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['txt_prodotti_esolver_c']['labelValue']='Codice esolver';

 

// created: 2018-06-13 09:23:59
$dictionary["AOS_Products"]["fields"]["ced01_ced_addebiti_aos_products_1"] = array (
  'name' => 'ced01_ced_addebiti_aos_products_1',
  'type' => 'link',
  'relationship' => 'ced01_ced_addebiti_aos_products_1',
  'source' => 'non-db',
  'module' => 'ced01_CED_addebiti',
  'bean_name' => 'ced01_CED_addebiti',
  'vname' => 'LBL_CED01_CED_ADDEBITI_AOS_PRODUCTS_1_FROM_CED01_CED_ADDEBITI_TITLE',
  'id_name' => 'ced01_ced_addebiti_aos_products_1ced01_ced_addebiti_ida',
);
$dictionary["AOS_Products"]["fields"]["ced01_ced_addebiti_aos_products_1_name"] = array (
  'name' => 'ced01_ced_addebiti_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CED01_CED_ADDEBITI_AOS_PRODUCTS_1_FROM_CED01_CED_ADDEBITI_TITLE',
  'save' => true,
  'id_name' => 'ced01_ced_addebiti_aos_products_1ced01_ced_addebiti_ida',
  'link' => 'ced01_ced_addebiti_aos_products_1',
  'table' => 'ced01_ced_addebiti',
  'module' => 'ced01_CED_addebiti',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["ced01_ced_addebiti_aos_products_1ced01_ced_addebiti_ida"] = array (
  'name' => 'ced01_ced_addebiti_aos_products_1ced01_ced_addebiti_ida',
  'type' => 'link',
  'relationship' => 'ced01_ced_addebiti_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CED01_CED_ADDEBITI_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);

?>