<?php
$module_name = 'AOS_Quotes';
$_object_name = 'aos_quotes';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'number',
            'label' => 'LBL_QUOTE_NUMBER',
            'customCode' => '{$fields.number.value}',
          ),
          1 => 
          array (
            'name' => 'leads_aos_quotes_1_name',
            'label' => 'LBL_LEADS_AOS_QUOTES_1_FROM_LEADS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'quot_promo_c',
            'studio' => 'visible',
            'label' => 'LBL_QUOT_PROMO',
          ),
          1 => 
          array (
            'name' => 'quotes_promodesc_c',
            'studio' => 'visible',
            'label' => 'LBL_QUOTES_PROMODESC',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'quotes_sede_c',
            'studio' => 'visible',
            'label' => 'LBL_QUOTES_SEDE',
          ),
          1 => 
          array (
            'name' => 'promo_sconto_c',
            'label' => 'LBL_PROMO_SCONTO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
    ),
  ),
);
;
?>
