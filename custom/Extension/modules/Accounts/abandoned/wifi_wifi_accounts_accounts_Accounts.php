<?php
 // created: 2018-10-08 15:46:07
$layout_defs["Accounts"]["subpanel_setup"]['wifi_wifi_accounts_accounts'] = array (
  'order' => 100,
  'module' => 'wifi_wifi_accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_WIFI_WIFI_ACCOUNTS_ACCOUNTS_FROM_WIFI_WIFI_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'wifi_wifi_accounts_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

/*$layout_defs['Accounts']['subpanel_setup']['wifi_wifi_accounts_accounts'] =
    array('order' => 100,
        'module' => 'wifi_wifi_accounts',
        'subpanel_name' => 'default',
        'sort_order' => 'asc',
        'get_subpanel_data' => 'function:allWiFis',
        'generate_select' => true,
        'title_key' => 'LBL_WIFI_WIFI_ACCOUNTS_ACCOUNTS_FROM_WIFI_WIFI_ACCOUNTS_TITLE',
        'top_buttons' => array(
            0 =>
                array (
                    'widget_class' => 'SubPanelTopButtonQuickCreate',
                ),
            1 =>
                array (
                    'widget_class' => 'SubPanelTopSelectButton',
                    'mode' => 'MultiSelect',
                ),
        ),

        'function_parameters' => array(
            'import_function_file' => 'custom/Extension/modules/Accounts/allsSubpanel.php',
            'account_id' => $this->_focus->id,
            'return_as_array' => 'true'
        ),
    );*/

