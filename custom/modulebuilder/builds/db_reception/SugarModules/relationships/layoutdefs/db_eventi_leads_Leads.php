<?php
 // created: 2018-10-31 14:44:09
$layout_defs["Leads"]["subpanel_setup"]['db_eventi_leads'] = array (
  'order' => 100,
  'module' => 'db_eventi',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DB_EVENTI_LEADS_FROM_DB_EVENTI_TITLE',
  'get_subpanel_data' => 'db_eventi_leads',
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
