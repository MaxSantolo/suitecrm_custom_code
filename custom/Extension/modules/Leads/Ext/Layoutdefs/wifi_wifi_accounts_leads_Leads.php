<?php
 // created: 2018-10-08 15:46:07
$layout_defs["Leads"]["subpanel_setup"]['wifi_wifi_accounts_leads'] = array (
  'order' => 100,
  'module' => 'wifi_wifi_accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_WIFI_WIFI_ACCOUNTS_LEADS_FROM_WIFI_WIFI_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'wifi_wifi_accounts_leads',
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
