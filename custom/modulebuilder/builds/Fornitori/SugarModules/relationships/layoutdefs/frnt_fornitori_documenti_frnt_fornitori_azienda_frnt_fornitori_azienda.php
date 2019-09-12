<?php
 // created: 2019-09-05 15:47:55
$layout_defs["frnt_fornitori_azienda"]["subpanel_setup"]['frnt_fornitori_documenti_frnt_fornitori_azienda'] = array (
  'order' => 100,
  'module' => 'frnt_fornitori_documenti',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FRNT_FORNITORI_DOCUMENTI_FRNT_FORNITORI_AZIENDA_FROM_FRNT_FORNITORI_DOCUMENTI_TITLE',
  'get_subpanel_data' => 'frnt_fornitori_documenti_frnt_fornitori_azienda',
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
