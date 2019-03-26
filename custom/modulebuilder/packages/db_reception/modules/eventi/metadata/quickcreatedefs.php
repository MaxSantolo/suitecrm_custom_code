<?php
$module_name = 'db_eventi';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'event_date',
            'label' => 'LBL_EVENT_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'db_eventi_leads_name',
            'label' => 'LBL_DB_EVENTI_LEADS_FROM_LEADS_TITLE',
          ),
          1 => 
          array (
            'name' => 'db_eventi_accounts_name',
            'label' => 'LBL_DB_EVENTI_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tipo',
            'studio' => 'visible',
            'label' => 'LBL_TIPO',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'sede',
            'studio' => 'visible',
            'label' => 'LBL_SEDE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'expdate',
            'label' => 'LBL_EXPDATE',
          ),
          1 => 
          array (
            'name' => 'memo',
            'label' => 'LBL_MEMO',
          ),
        ),
      ),
    ),
  ),
);
;
?>
