<?php
// created: 2018-06-13 12:53:53
$subpanel_layout['list_fields'] = array (

  'number' =>
  array (
    'width' => '5%',
    'vname' => 'LBL_LIST_NUM',
    'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
        ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),

  'billing_account' => 
  array (
    'width' => '20%',
    'vname' => 'LBL_BILLING_ACCOUNT',
    'default' => true,
  ),
  'leads_aos_invoices_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_LEADS_AOS_INVOICES_1_FROM_LEADS_TITLE',
    'id' => 'LEADS_AOS_INVOICES_1LEADS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Leads',
    'target_record_key' => 'leads_aos_invoices_1leads_ida',
  ),
  'total_amount' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_GRAND_TOTAL',
    'currency_format' => true,
    'width' => '15%',
    'default' => true,
  ),
  'status' => 
  array (
    'width' => '15%',
    'vname' => 'LBL_STATUS',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'AOS_Invoices',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'AOS_Invoices',
    'width' => '5%',
    'default' => true,
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);