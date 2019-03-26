<?php
 // created: 2018-06-13 10:54:26
$layout_defs["Leads"]["subpanel_setup"]['leads_aos_invoices_1'] = array (
  'order' => 100,
  'module' => 'AOS_Invoices',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_AOS_INVOICES_1_FROM_AOS_INVOICES_TITLE',
  'get_subpanel_data' => 'leads_aos_invoices_1',
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
