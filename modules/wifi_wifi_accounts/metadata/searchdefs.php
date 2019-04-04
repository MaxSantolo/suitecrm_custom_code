<?php
$module_name = 'wifi_wifi_accounts';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'up_speed' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_UP_SPEED',
        'width' => '10%',
        'default' => true,
        'name' => 'up_speed',
      ),
      'down_speed' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_DOWN_SPEED',
        'width' => '10%',
        'default' => true,
        'name' => 'down_speed',
      ),
      'center' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'default' => true,
        'label' => 'LBL_CENTER',
        'width' => '10%',
        'name' => 'center',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'center' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'default' => true,
        'label' => 'LBL_CENTER',
        'width' => '10%',
        'name' => 'center',
      ),
      'up_speed' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_UP_SPEED',
        'width' => '10%',
        'default' => true,
        'name' => 'up_speed',
      ),
      'down_speed' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_DOWN_SPEED',
        'width' => '10%',
        'default' => true,
        'name' => 'down_speed',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
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
);
;
?>
