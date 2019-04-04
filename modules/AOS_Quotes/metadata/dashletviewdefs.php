<?php
$dashletData['AOS_QuotesDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'billing_account' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Administrator',
  ),
);
$dashletData['AOS_QuotesDashlet']['columns'] = array (
  'number' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_NUM',
    'default' => true,
    'name' => 'number',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => true,
  ),
  'leads_aos_quotes_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_LEADS_AOS_QUOTES_1_FROM_LEADS_TITLE',
    'id' => 'LEADS_AOS_QUOTES_1LEADS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'leads_aos_quotes_1_name',
  ),
  'billing_account' => 
  array (
    'width' => '20%',
    'label' => 'LBL_BILLING_ACCOUNT',
    'name' => 'billing_account',
    'default' => true,
  ),
  'total_amount' => 
  array (
    'width' => '15%',
    'label' => 'LBL_GRAND_TOTAL',
    'currency_format' => true,
    'default' => true,
    'name' => 'total_amount',
  ),
  'billing_contact' => 
  array (
    'width' => '15%',
    'label' => 'LBL_BILLING_CONTACT',
    'name' => 'billing_contact',
    'default' => false,
  ),
  'opportunity' => 
  array (
    'width' => '25%',
    'label' => 'LBL_OPPORTUNITY',
    'name' => 'opportunity',
    'default' => false,
  ),
  'stage' => 
  array (
    'width' => '15%',
    'label' => 'LBL_STAGE',
    'default' => false,
    'name' => 'stage',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'expiration' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EXPIRATION',
    'default' => false,
    'name' => 'expiration',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'name' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
);
