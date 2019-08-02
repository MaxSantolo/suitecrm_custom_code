<?php
$module_name = 'frnt_fornitori_azienda';
$_object_name = 'frnt_fornitori_azienda';
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
        'LBL_ACCOUNT_INFORMATION' => 
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
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'tipo_fornitore_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_FORNITORE',
          ),
        ),
        1 => 
        array (
          0 => 'phone_office',
          1 => 'phone_alternate',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'piva_c',
            'label' => 'LBL_PIVA',
          ),
          1 => 
          array (
            'name' => 'cfisc_c',
            'label' => 'LBL_CFISC',
          ),
        ),
        3 => 
        array (
          0 => 'billing_address_street',
          1 => 'shipping_address_street',
        ),
        4 => 
        array (
          0 => 'email1',
          1 => 'website',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'pec_c',
            'label' => 'LBL_PEC',
          ),
          1 => 
          array (
            'name' => 'cdu_c',
            'label' => 'LBL_CDU',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'ingresso_acs_c',
            'label' => 'LBL_INGRESSO_ACS',
          ),
          1 => 
          array (
            'name' => 'acs_url_c',
            'label' => 'LBL_ACS_URL',
          ),
        ),
        7 => 
        array (
          0 => 'description',
        ),
        8 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
      ),
    ),
  ),
);
;
?>
