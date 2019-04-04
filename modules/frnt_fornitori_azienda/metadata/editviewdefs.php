<?php
$module_name = 'frnt_fornitori_azienda';
$_object_name = 'frnt_fornitori_azienda';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'phone_office',
        ),
        1 => 
        array (
          0 => 'phone_fax',
          1 => 'phone_alternate',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'riferimento_c',
            'label' => 'LBL_RIFERIMENTO',
          ),
        ),
        3 => 
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
        4 => 
        array (
          0 => 'industry',
          1 => 'frnt_fornitori_azienda_type',
        ),
        5 => 
        array (
          0 => 'website',
          1 => 'email1',
        ),
        6 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
      ),
      'lbl_description_information' => 
      array (
        0 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
