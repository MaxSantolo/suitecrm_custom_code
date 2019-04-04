<?php
// created: 2018-06-06 15:33:40
$viewdefs['AOS_Quotes']['EditView'] = array (
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
      'LBL_LINE_ITEMS' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'syncDetailEditViews' => false,
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
          'name' => 'number',
          'label' => 'LBL_QUOTE_NUMBER',
          'customCode' => '{$fields.number.value}',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'leads_aos_quotes_1_name',
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
          'name' => 'quotes_promodesc_c',
          'studio' => 'visible',
          'label' => 'LBL_QUOTES_PROMODESC',
        ),
        1 => 
        array (
          'name' => 'pickpack_select_lingua_c',
          'studio' => 'visible',
          'label' => 'LBL_PICKPACK_SELECT_LINGUA',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
        ),
      ),
    ),
    'lbl_line_items' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'line_items',
          'label' => 'LBL_LINE_ITEMS',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'total_amt',
          'label' => 'LBL_TOTAL_AMT',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'discount_amount',
          'label' => 'LBL_DISCOUNT_AMOUNT',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'subtotal_amount',
          'label' => 'LBL_SUBTOTAL_AMOUNT',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'tax_amount',
          'label' => 'LBL_TAX_AMOUNT',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'total_amount',
          'label' => 'LBL_GRAND_TOTAL',
        ),
      ),
    ),
  ),
);