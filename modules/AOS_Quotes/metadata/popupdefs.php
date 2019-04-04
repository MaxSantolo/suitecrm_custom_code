<?php
$popupMeta = array (
    'moduleMain' => 'AOS_Quotes',
    'varName' => 'AOS_Quotes',
    'orderBy' => 'aos_quotes.name',
    'whereClauses' => array (
  'name' => 'aos_quotes.name',
  'number' => 'aos_quotes.number',
  'date_entered' => 'aos_quotes.date_entered',
  'leads_aos_quotes_1_name' => 'aos_quotes.leads_aos_quotes_1_name',
  'billing_account' => 'aos_quotes.billing_account',
  'total_amount' => 'aos_quotes.total_amount',
  'created_by_name' => 'aos_quotes.created_by_name',
  'assigned_user_id' => 'aos_quotes.assigned_user_id',
),
    'searchInputs' => array (
  0 => 'name',
  4 => 'number',
  5 => 'date_entered',
  6 => 'leads_aos_quotes_1_name',
  7 => 'billing_account',
  8 => 'total_amount',
  9 => 'created_by_name',
  10 => 'assigned_user_id',
),
    'searchdefs' => array (
  'number' => 
  array (
    'name' => 'number',
    'width' => '10%',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'leads_aos_quotes_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_LEADS_AOS_QUOTES_1_FROM_LEADS_TITLE',
    'id' => 'LEADS_AOS_QUOTES_1LEADS_IDA',
    'width' => '10%',
    'name' => 'leads_aos_quotes_1_name',
  ),
  'billing_account' => 
  array (
    'name' => 'billing_account',
    'width' => '10%',
  ),
  'total_amount' => 
  array (
    'name' => 'total_amount',
    'width' => '10%',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'name' => 'created_by_name',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
);
