<?php
$popupMeta = array (
    'moduleMain' => 'DR_Eventi',
    'varName' => 'DR_Eventi',
    'orderBy' => 'dr_eventi.name',
    'whereClauses' => array (
  'name' => 'dr_eventi.name',
),
    'searchInputs' => array (
  0 => 'dr_eventi_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'TIPO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPO',
    'width' => '10%',
    'name' => 'tipo',
  ),
  'SEDE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SEDE',
    'width' => '10%',
    'name' => 'sede',
  ),
  'DR_EVENTI_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_DR_EVENTI_LEADS_FROM_LEADS_TITLE',
    'id' => 'DR_EVENTI_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'dr_eventi_leads_name',
  ),
  'DR_EVENTI_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_DR_EVENTI_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'DR_EVENTI_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'dr_eventi_accounts_name',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'ESITO_C' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_ESITO_C',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'esito_c',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'SCADENZA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_SCADENZA',
    'width' => '10%',
    'default' => true,
    'name' => 'scadenza',
  ),
),
);
