<?php
 // created: 2019-08-01 13:26:09
$layout_defs["frnt_fornitori_azienda"]["subpanel_setup"]['fd_documenti_frnt_fornitori_azienda'] = array (
  'order' => 100,
  'module' => 'FD_documenti',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FD_DOCUMENTI_FRNT_FORNITORI_AZIENDA_FROM_FD_DOCUMENTI_TITLE',
  'get_subpanel_data' => 'fd_documenti_frnt_fornitori_azienda',
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
