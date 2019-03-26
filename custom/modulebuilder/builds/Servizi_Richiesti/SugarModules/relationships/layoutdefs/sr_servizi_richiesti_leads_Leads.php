<?php
 // created: 2018-10-31 11:25:22
$layout_defs["Leads"]["subpanel_setup"]['sr_servizi_richiesti_leads'] = array (
  'order' => 100,
  'module' => 'sr_servizi_richiesti',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SR_SERVIZI_RICHIESTI_LEADS_FROM_SR_SERVIZI_RICHIESTI_TITLE',
  'get_subpanel_data' => 'sr_servizi_richiesti_leads',
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
