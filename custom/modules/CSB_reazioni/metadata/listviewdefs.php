<?php
$module_name = 'CSB_reazioni';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CSB_REAZIONI_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CSB_REAZIONI_LEADS_FROM_LEADS_TITLE',
    'id' => 'CSB_REAZIONI_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CAMPAIGN_REACT_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_CAMPAIGN_REACT_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'REAZIONE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REAZIONE',
    'width' => '10%',
    'default' => true,
  ),
  'URL_SB_C' => 
  array (
    'type' => 'url',
    'default' => true,
    'label' => 'LBL_URL_SB',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TITLE',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
