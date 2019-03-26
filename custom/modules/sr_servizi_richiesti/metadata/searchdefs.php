<?php
$module_name = 'sr_servizi_richiesti';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'stato_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATO',
        'width' => '10%',
        'name' => 'stato_c',
      ),
    ),
    'advanced_search' => 
    array (
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'centro_scelto' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CENTRO_SCELTO',
        'width' => '10%',
        'default' => true,
        'name' => 'centro_scelto',
      ),
      'servizio_scelto' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_SERVIZIO_SCELTO',
        'width' => '10%',
        'default' => true,
        'name' => 'servizio_scelto',
      ),
      'num_uffici' => 
      array (
        'type' => 'int',
        'label' => 'LBL_NUM_UFFICI',
        'width' => '10%',
        'default' => true,
        'name' => 'num_uffici',
      ),
      'num_postazioni' => 
      array (
        'type' => 'int',
        'label' => 'LBL_NUM_POSTAZIONI',
        'width' => '10%',
        'default' => true,
        'name' => 'num_postazioni',
      ),
      'num_quot_uff_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_NUM_QUOT_UFF',
        'width' => '10%',
        'name' => 'num_quot_uff_c',
      ),
      'num_quot_postazioni_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_NUM_QUOT_POSTAZIONI',
        'width' => '10%',
        'name' => 'num_quot_postazioni_c',
      ),
      'centro_quotato_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CENTRO_QUOTATO',
        'width' => '10%',
        'name' => 'centro_quotato_c',
      ),
      'inviata_offerta_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_INVIATA_OFFERTA',
        'width' => '10%',
        'name' => 'inviata_offerta_c',
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
