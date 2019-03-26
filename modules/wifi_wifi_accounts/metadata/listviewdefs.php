<?php
$module_name = 'wifi_wifi_accounts';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'UP_SPEED' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_UP_SPEED',
    'width' => '10%',
    'default' => true,
  ),
  'DOWN_SPEED' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DOWN_SPEED',
    'width' => '10%',
    'default' => true,
  ),
  'EXPIRATION_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EXPIRATION_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'SIM_USES' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_SIM_USES',
    'width' => '10%',
  ),
  'CENTER' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'label' => 'LBL_CENTER',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
