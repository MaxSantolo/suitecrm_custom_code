<?php
$module_name = 'wifi_wifi_accounts';
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
        'DEFAULT' => 
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
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'wifi_wifi_accounts_leads_name',
            'label' => 'LBL_WIFI_WIFI_ACCOUNTS_LEADS_FROM_LEADS_TITLE',
          ),
          1 => 
          array (
            'name' => 'wifi_wifi_accounts_accounts_name',
            'label' => 'LBL_WIFI_WIFI_ACCOUNTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'user_name',
            'label' => 'LBL_USER_NAME',
          ),
          1 => 
          array (
            'name' => 'password',
            'label' => 'LBL_PASSWORD',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'down_speed',
            'studio' => 'visible',
            'label' => 'LBL_DOWN_SPEED',
          ),
          1 => 
          array (
            'name' => 'up_speed',
            'studio' => 'visible',
            'label' => 'LBL_UP_SPEED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sim_uses',
            'label' => 'LBL_SIM_USES',
          ),
          1 => 
          array (
            'name' => 'expiration_date',
            'label' => 'LBL_EXPIRATION_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'center',
            'studio' => 'visible',
            'label' => 'LBL_CENTER',
          ),
          1 => 'description',
        ),
        5 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        2 => 
        array (
          0 => 'date_modified',
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
