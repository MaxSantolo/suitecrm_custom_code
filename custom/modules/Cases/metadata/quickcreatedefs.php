<?php
$viewdefs ['Cases'] = 
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
          1 => 'priority',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'frnt_fornitori_azienda_cases_1_name',
            'label' => 'LBL_FRNT_FORNITORI_AZIENDA_CASES_1_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'sede_ticket_c',
            'studio' => 'visible',
            'label' => 'LBL_SEDE_TICKET',
          ),
        ),
        3 => 
        array (
          0 => 'account_name',
          1 => 
          array (
            'name' => 'leads_cases_1_name',
            'label' => 'LBL_LEADS_CASES_1_FROM_LEADS_TITLE',
          ),
        ),
        4 => 
        array (
          0 => 'assigned_user_name',
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
