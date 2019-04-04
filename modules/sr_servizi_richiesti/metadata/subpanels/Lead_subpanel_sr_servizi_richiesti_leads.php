<?php
// created: 2018-09-18 12:39:51
$subpanel_layout['list_fields'] = array (
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'DATA',
    'width' => '5%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
  ),
  'centro_scelto' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'CENTRO RIC.',
    'width' => '10%',
    'default' => true,
  ),
  'servizio_scelto' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'SERVIZIO',
    'width' => '5%',
    'default' => true,
  ),
  'num_uffici' => 
  array (
    'type' => 'int',
    'vname' => 'NUM. UFF.',
    'width' => '5%',
    'default' => true,
  ),
  'num_postazioni' => 
  array (
    'type' => 'int',
    'vname' => 'POST.',
    'width' => '5%',
    'default' => true,
  ),
  'centro_quotato_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'CENTRO QUOT',
    'width' => '10%',
  ),
  'inviata_offerta_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'OFF.',
    'width' => '5%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '46%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'width' => '4%',
    'vname' => 'LBL_EDIT_BUTTON',
    'default' => true,
    'widget_class' => 'SubPanelEditButton',
  ),
  'remove_button' => 
  array (
    'width' => '5%',
    'vname' => 'LBL_REMOVE',
    'default' => true,
    'widget_class' => 'SubPanelRemoveButton',
  ),
);