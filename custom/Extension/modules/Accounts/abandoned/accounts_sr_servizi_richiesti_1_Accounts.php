<?php
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