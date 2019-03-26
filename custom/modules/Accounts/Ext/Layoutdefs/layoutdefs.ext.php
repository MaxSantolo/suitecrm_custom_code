<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-10-31 14:44:09
$layout_defs["Accounts"]["subpanel_setup"]['db_eventi_accounts'] = array (
  'order' => 100,
  'module' => 'db_eventi',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DB_EVENTI_ACCOUNTS_FROM_DB_EVENTI_TITLE',
  'get_subpanel_data' => 'db_eventi_accounts',
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



 // created: 2018-05-18 08:33:33

//tradizionale
  $layout_defs["Accounts"]["subpanel_setup"]['accounts_sr_servizi_richiesti_1'] = array (
  'order' => 100,
  'module' => 'sr_servizi_richiesti',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_SR_SERVIZI_RICHIESTI_1_FROM_SR_SERVIZI_RICHIESTI_TITLE',
  'get_subpanel_data' => 'accounts_sr_servizi_richiesti_1',
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

//accorpato ma non ordina e non crea nuovi
/* $layout_defs['Accounts']['subpanel_setup']['accounts_sr_servizi_richiesti_1'] =
    array(
        'order' => 100,
        'module' => 'sr_servizi_richiesti',
        'subpanel_name' => 'default',
        'sort_order' => 'desc',
        'sort_by' => 'id',
        'title_key' => 'LBL_ACCOUNTS_SR_SERVIZI_RICHIESTI_1_FROM_SR_SERVIZI_RICHIESTI_TITLE',
        'get_subpanel_data' => 'function:allSRs',
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
        'generate_select' => true,
        'function_parameters' => array(
            'import_function_file' => 'custom/Extension/modules/Accounts/allsSubpanel.php',
            'account_id' => $this->_focus->id,
            'return_as_array' => 'true'
        ),

    );
*/

/* $layout_defs["Accounts"]["subpanel_setup"]['leads'] = array(
    'order' => 80,
    'module' => 'Leads',
    'sort_order' => 'asc',
    'sort_by' => 'first_name, last_name',
    'subpanel_name' => 'default',
    'get_subpanel_data' => 'function:getRelatedLeadsQueryData',
    'function_parameters' => array(
        'import_function_file' => 'custom/modules/Accounts/GetLeadsSubpanelData.php',
        'link' => 'leads'
    ),
    'add_subpanel_data' => 'lead_id',
    'title_key' => 'LBL_LEADS_SUBPANEL_TITLE',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateLeadNameButton'),
        array('widget_class' => 'SubPanelTopSelectButton',
            'popup_module' => 'Opportunities',
            'mode' => 'MultiSelect',
        ),
    ),
); */

/*$layout_defs['Accounts']['subpanel_setup']['accounts_sr_servizi_richiesti_1'] =
    array(
        'order' => 100,
        'module' => 'sr_servizi_richiesti',
        'subpanel_name' => 'default',
        'sort_order' => 'desc',
        'sort_by' => 'id',
        'title_key' => 'LBL_ACCOUNTS_SR_SERVIZI_RICHIESTI_1_FROM_SR_SERVIZI_RICHIESTI_TITLE',
        'get_subpanel_data' => 'function:getAllSRs',
        'function_parameters' => array(
            'import_function_file' => 'custom/Extension/modules/Accounts/allsSubpanelData.php',
            'link' => 'accounts_sr_servizi_richiesti_1'

        ),
        'add_subpanel_data' => 'accounts_sr_servizi_richiesti_1_id',
        'top_buttons' => array(
            array ('widget_class' => 'SubPanelTopButtonQuickCreate'),
            array ('widget_class' => 'SubPanelTopSelectButton',
                    'mode' => 'MultiSelect',
                ),
        ),



    );*/

//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['accounts_sr_servizi_richiesti_1']['override_subpanel_name'] = 'Account_subpanel_accounts_sr_servizi_richiesti_1';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['leads']['override_subpanel_name'] = 'Account_subpanel_leads';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['wifi_wifi_accounts_accounts']['override_subpanel_name'] = 'Account_subpanel_wifi_wifi_accounts_accounts';

?>