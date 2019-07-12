<?php
$dashletData['db_eventiDashlet']['searchFields'] = array (
  'event_date' => 
  array (
    'default' => '',
  ),
  'tipo' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
  'sede' => 
  array (
    'default' => '',
  ),
);
$dashletData['db_eventiDashlet']['columns'] = array (
  'set_complete' => 
  array (
    'width' => '1%',
    'label' => 'LBL_LIST_CLOSE',
    'default' => true,
    'sortable' => false,
    'name' => 'set_complete',
  ),
  'event_date' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_EVENT_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'event_date',
  ),
  'name' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'db_eventi_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_DB_EVENTI_LEADS_FROM_LEADS_TITLE',
    'id' => 'DB_EVENTI_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'db_eventi_leads_name',
  ),
  'db_eventi_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_DB_EVENTI_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'DB_EVENTI_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'db_eventi_accounts_name',
  ),
  'sede' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SEDE',
    'width' => '10%',
    'default' => true,
    'name' => 'sede',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '40%',
    'default' => true,
    'name' => 'description',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => false,
    'name' => 'status',
  ),
  'tipo' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPO',
    'width' => '10%',
    'default' => false,
    'name' => 'tipo',
  ),
);
