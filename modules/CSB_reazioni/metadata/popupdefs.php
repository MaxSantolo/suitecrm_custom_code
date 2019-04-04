<?php
$popupMeta = array (
    'moduleMain' => 'CSB_reazioni',
    'varName' => 'CSB_reazioni',
    'orderBy' => 'csb_reazioni.name',
    'whereClauses' => array (
  'name' => 'csb_reazioni.name',
),
    'searchInputs' => array (
  0 => 'csb_reazioni_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'CSB_REAZIONI_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CSB_REAZIONI_LEADS_FROM_LEADS_TITLE',
    'id' => 'CSB_REAZIONI_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'csb_reazioni_leads_name',
  ),
  'CAMPAIGN_REACT_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_CAMPAIGN_REACT_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'campaign_react_date',
  ),
  'TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'title',
  ),
  'HTML_CONTENT' => 
  array (
    'type' => 'html',
    'studio' => 'visible',
    'label' => 'LBL_HTML_CONTENT',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'html_content',
  ),
  'URL' => 
  array (
    'type' => 'html',
    'studio' => 'visible',
    'label' => 'LBL_URL',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'url',
  ),
  'REAZIONE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REAZIONE',
    'width' => '10%',
    'default' => true,
    'name' => 'reazione',
  ),
),
);
