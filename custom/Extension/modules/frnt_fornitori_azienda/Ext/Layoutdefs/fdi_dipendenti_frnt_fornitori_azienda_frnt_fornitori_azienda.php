<?php
 // created: 2019-08-01 13:33:49
$layout_defs["frnt_fornitori_azienda"]["subpanel_setup"]['fdi_dipendenti_frnt_fornitori_azienda'] = array (
  'order' => 100,
  'module' => 'FDi_dipendenti',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FDI_DIPENDENTI_FRNT_FORNITORI_AZIENDA_FROM_FDI_DIPENDENTI_TITLE',
  'get_subpanel_data' => 'fdi_dipendenti_frnt_fornitori_azienda',
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
