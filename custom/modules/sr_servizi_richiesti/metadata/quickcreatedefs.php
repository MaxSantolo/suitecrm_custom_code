<?php
$module_name = 'sr_servizi_richiesti';
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
          0 => 
          array (
            'name' => 'sr_servizi_richiesti_leads_name',
            'label' => 'LBL_SR_SERVIZI_RICHIESTI_LEADS_FROM_LEADS_TITLE',
          ),
          1 => 
          array (
            'name' => 'accounts_sr_servizi_richiesti_1_name',
            'label' => 'LBL_ACCOUNTS_SR_SERVIZI_RICHIESTI_1_FROM_ACCOUNTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'centro_scelto',
            'studio' => 'visible',
            'label' => 'LBL_CENTRO_SCELTO',
          ),
          1 => 
          array (
            'name' => 'servizio_scelto',
            'studio' => 'visible',
            'label' => 'LBL_SERVIZIO_SCELTO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'num_uffici',
            'label' => 'LBL_NUM_UFFICI',
          ),
          1 => 
          array (
            'name' => 'num_postazioni',
            'label' => 'LBL_NUM_POSTAZIONI',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'inviata_offerta_c',
            'label' => 'LBL_INVIATA_OFFERTA',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'stato_c',
            'studio' => 'visible',
            'label' => 'LBL_STATO',
          ),
        ),
      ),
    ),
  ),
);
;
?>
