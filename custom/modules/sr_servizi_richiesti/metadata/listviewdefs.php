<?php
$module_name = 'sr_servizi_richiesti';
$listViewDefs [$module_name] = 
array (
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'STATO_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATO',
    'width' => '10%',
  ),
  'SERVIZIO_SCELTO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SERVIZIO_SCELTO',
    'width' => '10%',
    'default' => true,
  ),
  'NUM_UFFICI' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUM_UFFICI',
    'width' => '5%',
    'default' => true,
  ),
  'NUM_POSTAZIONI' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUM_POSTAZIONI',
    'width' => '5%',
    'default' => true,
  ),
  'INVIATA_OFFERTA_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_INVIATA_OFFERTA',
    'width' => '5%',
  ),
  'SR_SERVIZI_RICHIESTI_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SR_SERVIZI_RICHIESTI_LEADS_FROM_LEADS_TITLE',
    'id' => 'SR_SERVIZI_RICHIESTI_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNTS_SR_SERVIZI_RICHIESTI_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_SR_SERVIZI_RICHIESTI_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_SR_SERVIZI_RICHIESTI_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '45%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
  'NUM_QUOT_UFF_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_NUM_QUOT_UFF',
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
);
;
?>
