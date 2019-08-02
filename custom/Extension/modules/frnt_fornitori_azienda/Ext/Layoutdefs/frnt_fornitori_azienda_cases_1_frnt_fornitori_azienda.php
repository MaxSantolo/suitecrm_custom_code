<?php
 // created: 2019-08-01 13:20:13
$layout_defs["frnt_fornitori_azienda"]["subpanel_setup"]['frnt_fornitori_azienda_cases_1'] = array (
  'order' => 100,
  'module' => 'Cases',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FRNT_FORNITORI_AZIENDA_CASES_1_FROM_CASES_TITLE',
  'get_subpanel_data' => 'frnt_fornitori_azienda_cases_1',
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
