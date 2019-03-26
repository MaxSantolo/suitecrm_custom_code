<?php
// created: 2018-06-06 15:33:40
$searchdefs['AOS_Quotes'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
    'maxColumnsBasic' => '3',
  ),
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_LEADS_AOS_QUOTES_1_FROM_LEADS_TITLE',
        'id' => 'LEADS_AOS_QUOTES_1LEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'leads_aos_quotes_1_name',
      ),
      2 => 
      array (
        'name' => 'billing_account',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'name' => 'total_amount',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
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
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
);