<?php
 // created: 2018-08-06 15:04:12
$layout_defs["Leads"]["subpanel_setup"]['csb_reazioni_leads'] = array (
  'order' => 100,
  'module' => 'CSB_reazioni',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CSB_REAZIONI_LEADS_FROM_CSB_REAZIONI_TITLE',
  'get_subpanel_data' => 'csb_reazioni_leads',
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
