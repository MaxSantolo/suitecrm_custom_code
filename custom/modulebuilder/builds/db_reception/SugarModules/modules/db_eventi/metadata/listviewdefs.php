<?php
$module_name = 'db_eventi';
$listViewDefs [$module_name] = 
array (
  'EVENT_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_EVENT_DATE',
    'width' => '5%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '5%',
    'default' => true,
  ),
  'TIPO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPO',
    'width' => '5%',
    'default' => true,
  ),
  'SEDE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SEDE',
    'width' => '5%',
    'default' => true,
  ),
  'DB_EVENTI_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_DB_EVENTI_LEADS_FROM_LEADS_TITLE',
    'id' => 'DB_EVENTI_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DB_EVENTI_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_DB_EVENTI_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'DB_EVENTI_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '30%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'ANSWER' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_ANSWER',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
