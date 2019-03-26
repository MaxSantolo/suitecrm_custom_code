<?php
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
