<?php
 // created: 2018-10-31 13:06:37
$layout_defs["Accounts"]["subpanel_setup"]['dr_eventi_accounts'] = array (
  'order' => 100,
  'module' => 'DR_Eventi',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DR_EVENTI_ACCOUNTS_FROM_DR_EVENTI_TITLE',
  'get_subpanel_data' => 'dr_eventi_accounts',
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
