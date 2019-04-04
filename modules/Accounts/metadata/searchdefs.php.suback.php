<?php
$searchdefs ['Accounts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'lead_cf_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_LEAD_CF_C',
        'width' => '10%',
        'name' => 'lead_cf_c',
      ),
      'lead_piva_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_LEAD_PIVA_C',
        'width' => '10%',
        'name' => 'lead_piva_c',
      ),
      'lead_azn_startup_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_LEAD_AZN_STARTUP_C',
        'width' => '10%',
        'name' => 'lead_azn_startup_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
