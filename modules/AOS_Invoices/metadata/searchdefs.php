<?php
$module_name = 'AOS_Invoices';
$_module_name = 'aos_invoices';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
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
      ),
      'billing_contact' => 
      array (
        'name' => 'billing_contact',
        'default' => true,
      ),
      'billing_account' => 
      array (
        'name' => 'billing_account',
        'default' => true,
      ),
      'number' => 
      array (
        'name' => 'number',
        'default' => true,
      ),
      'total_amount' => 
      array (
        'name' => 'total_amount',
        'default' => true,
      ),
      'due_date' => 
      array (
        'name' => 'due_date',
        'default' => true,
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
