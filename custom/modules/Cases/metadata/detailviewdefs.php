<?php
$viewdefs ['Cases'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        'LBL_CASE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_case_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'case_number',
            'label' => 'LBL_CASE_NUMBER',
          ),
          1 => 'priority',
        ),
        2 => 
        array (
          0 => 'type',
          1 => 
          array (
            'name' => 'cliente_c',
            'label' => 'LBL_CLIENTE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'frnt_fornitori_azienda_cases_1_name',
            'label' => 'LBL_FRNT_FORNITORI_AZIENDA_CASES_1_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
          ),
          1 => 
          array (
            'name' => 'importo_c',
            'label' => 'LBL_IMPORTO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'sede_ticket_c',
            'studio' => 'visible',
            'label' => 'LBL_SEDE_TICKET',
          ),
          1 => 
          array (
            'name' => 'intervento_c',
            'label' => 'LBL_INTERVENTO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_SUBJECT',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'descrizione_c',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIZIONE',
          ),
          1 => 'status',
        ),
        7 => 
        array (
          0 => 'resolution',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'account_name',
          1 => 
          array (
            'name' => 'leads_cases_1_name',
            'label' => 'LBL_LEADS_CASES_1_FROM_LEADS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'durata_c',
            'label' => 'LBL_DURATA',
          ),
          1 => 
          array (
            'name' => 'debt_value_c',
            'label' => 'LBL_DEBT_VALUE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fatturare_c',
            'label' => 'LBL_FATTURARE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
