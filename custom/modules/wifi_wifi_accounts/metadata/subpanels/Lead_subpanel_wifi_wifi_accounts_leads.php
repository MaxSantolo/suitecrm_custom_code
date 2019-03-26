<?php
// created: 2019-01-07 08:54:49
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'user_name' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_USER_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'up_speed' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_UP_SPEED',
    'width' => '10%',
    'default' => true,
  ),
  'down_speed' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_DOWN_SPEED',
    'width' => '10%',
    'default' => true,
  ),
  'expiration_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_EXPIRATION_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'sim_uses' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_SIM_USES',
    'width' => '10%',
  ),
  'center' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'vname' => 'LBL_CENTER',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'wifi_wifi_accounts',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'wifi_wifi_accounts',
    'width' => '5%',
    'default' => true,
  ),
);