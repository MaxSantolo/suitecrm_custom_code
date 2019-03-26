<?php
$module_name = 'PR001_promo_base';
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'promo_centro',
            'studio' => 'visible',
            'label' => 'LBL_PROMO_CENTRO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'promo_categoria',
            'studio' => 'visible',
            'label' => 'LBL_PROMO_CATEGORIA',
          ),
          1 => 
          array (
            'name' => 'promo_scadenza',
            'label' => 'LBL_PROMO_SCADENZA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'promo_sconto',
            'label' => 'LBL_PROMO_SCONTO',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
$viewdefs['PR001_promo_base']['DetailView']['templateMeta'] = array (
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
);
?>
