<?php
// created: 2018-06-15 12:38:15
$subpanel_layout['list_fields'] = array (
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'centro_scelto' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_CENTRO_SCELTO',
    'width' => '10%',
    'default' => true,
  ),
  'servizio_scelto' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_SERVIZIO_SCELTO',
    'width' => '10%',
    'default' => true,
  ),
  'num_uffici' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_NUM_UFFICI',
    'width' => '10%',
    'default' => true,
  ),
  'num_postazioni' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_NUM_POSTAZIONI',
    'width' => '10%',
    'default' => true,
  ),
  'centro_quotato_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CENTRO_QUOTATO',
    'width' => '10%',
  ),
  'inviata_offerta_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_INVIATA_OFFERTA',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'sr_servizi_richiesti',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'sr_servizi_richiesti',
    'width' => '5%',
    'default' => true,
  ),
);