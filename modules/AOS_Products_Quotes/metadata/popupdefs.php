<?php
$popupMeta = array (
    'moduleMain' => 'AOS_Products_Quotes',
    'varName' => 'AOS_Products_Quotes',
    'orderBy' => 'aos_products_quotes.name',
    'whereClauses' => array (
  'name' => 'aos_products_quotes.name',
),
    'searchInputs' => array (
  0 => 'aos_products_quotes_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'PRODUCT_LIST_PRICE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PRODUCT_LIST_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
