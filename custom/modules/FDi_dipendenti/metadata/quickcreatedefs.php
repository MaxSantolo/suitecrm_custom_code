<?php
$module_name = 'FDi_dipendenti';
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
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fdi_dipendenti_frnt_fornitori_azienda_name',
            'label' => 'LBL_FDI_DIPENDENTI_FRNT_FORNITORI_AZIENDA_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'cognome',
            'label' => 'LBL_COGNOME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ruolo',
            'studio' => 'visible',
            'label' => 'LBL_RUOLO',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'email',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'tel_cel',
            'label' => 'LBL_TEL_CEL',
          ),
        ),
      ),
    ),
  ),
);
;
?>
