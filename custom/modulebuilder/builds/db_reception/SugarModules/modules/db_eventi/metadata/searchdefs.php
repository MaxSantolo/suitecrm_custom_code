<?php
$module_name = 'db_eventi';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'event_date' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_EVENT_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'event_date',
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
      'status' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
      'tipo' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TIPO',
        'width' => '10%',
        'default' => true,
        'name' => 'tipo',
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
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
      'tipo' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TIPO',
        'width' => '10%',
        'default' => true,
        'name' => 'tipo',
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
      'expdate' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_EXPDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'expdate',
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
