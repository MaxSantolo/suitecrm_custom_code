<?php
$dashletData['CSB_reazioniDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'MASSIMILIANO SANTOLO',
  ),
);
$dashletData['CSB_reazioniDashlet']['columns'] = array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'width' => '40%',
    'label' => 'LBL_NAME',
    'default' => true,
  ),
  'campaign_react_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_CAMPAIGN_REACT_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'campaign_react_date',
  ),
  'title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'title',
  ),
  'csb_reazioni_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CSB_REAZIONI_LEADS_FROM_LEADS_TITLE',
    'id' => 'CSB_REAZIONI_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'csb_reazioni_leads_name',
  ),
  'reazione' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REAZIONE',
    'width' => '10%',
    'default' => true,
    'name' => 'reazione',
  ),
  'columns' => 
  array (
    'name' => 
    array (
      'width' => '40',
      'label' => 'LBL_LIST_NAME',
      'link' => true,
      'default' => true,
    ),
    'date_entered' => 
    array (
      'width' => '15',
      'label' => 'LBL_DATE_ENTERED',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'width' => '15',
      'label' => 'LBL_DATE_MODIFIED',
    ),
    'created_by' => 
    array (
      'width' => '8',
      'label' => 'LBL_CREATED',
    ),
    'assigned_user_name' => 
    array (
      'width' => '8',
      'label' => 'LBL_LIST_ASSIGNED_USER',
    ),
    'width' => '10%',
    'default' => false,
  ),
  'url' => 
  array (
    'type' => 'html',
    'studio' => 'visible',
    'label' => 'LBL_URL',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'url',
  ),
  'html_content' => 
  array (
    'type' => 'html',
    'studio' => 'visible',
    'label' => 'LBL_HTML_CONTENT',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'html_content',
  ),
);
