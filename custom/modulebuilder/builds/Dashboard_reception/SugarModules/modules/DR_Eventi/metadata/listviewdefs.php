<?php
$module_name = 'DR_Eventi';
$listViewDefs [$module_name] = 
array (
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TIPO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPO',
    'width' => '10%',
  ),
  'SEDE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SEDE',
    'width' => '10%',
  ),
  'DR_EVENTI_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_DR_EVENTI_LEADS_FROM_LEADS_TITLE',
    'id' => 'DR_EVENTI_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DR_EVENTI_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_DR_EVENTI_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'DR_EVENTI_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ESITO_C' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_ESITO_C',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'SCADENZA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_SCADENZA',
    'width' => '10%',
    'default' => true,
  ),
  'PARENT_NAME' => 
  array (
    'type' => 'parent',
    'studio' => 'visible',
    'label' => 'LBL_FLEX_RELATE',
    'link' => true,
    'sortable' => false,
    'ACLTag' => 'PARENT',
    'dynamic_module' => 'PARENT_TYPE',
    'id' => 'PARENT_ID',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
