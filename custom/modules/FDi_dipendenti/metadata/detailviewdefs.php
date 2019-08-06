<?php
$module_name = 'FDi_dipendenti';
$viewdefs [$module_name] = 
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
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
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tel_cel',
            'label' => 'LBL_TEL_CEL',
          ),
          1 => 
          array (
            'name' => 'tel_fisso_c',
            'label' => 'LBL_TEL_FISSO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'email',
            'label' => 'LBL_EMAIL',
          ),
        ),
        5 => 
        array (
          0 => 'description',
          1 => 'assigned_user_name',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 'date_entered',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 'date_modified',
        ),
      ),
    ),
  ),
);
;
?>
