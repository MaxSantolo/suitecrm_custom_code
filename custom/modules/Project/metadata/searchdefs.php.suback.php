<?php
// created: 2018-06-06 15:33:41
$searchdefs['Project'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
      ),
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
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
      ),
      1 => 
      array (
        'name' => 'estimated_start_date',
        'default' => true,
      ),
      2 => 
      array (
        'name' => 'estimated_end_date',
        'default' => true,
      ),
      3 => 
      array (
        'name' => 'status',
        'default' => true,
      ),
      4 => 
      array (
        'name' => 'priority',
        'default' => true,
      ),
    ),
  ),
);