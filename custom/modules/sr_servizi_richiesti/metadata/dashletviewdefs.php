<?php
$dashletData['sr_servizi_richiestiDashlet']['searchFields'] = array (
  'stato_c' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'inviata_offerta_c' => 
  array (
    'default' => '',
  ),
);
$dashletData['sr_servizi_richiestiDashlet']['columns'] = array (
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'sr_servizi_richiesti_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SR_SERVIZI_RICHIESTI_LEADS_FROM_LEADS_TITLE',
    'id' => 'SR_SERVIZI_RICHIESTI_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'sr_servizi_richiesti_leads_name',
  ),
  'servizio_scelto' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SERVIZIO_SCELTO',
    'width' => '10%',
    'default' => true,
    'name' => 'servizio_scelto',
  ),
  'centro_scelto' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CENTRO_SCELTO',
    'width' => '10%',
    'default' => true,
    'name' => 'centro_scelto',
  ),
  'stato_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATO',
    'width' => '10%',
    'name' => 'stato_c',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'accounts_sr_servizi_richiesti_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_SR_SERVIZI_RICHIESTI_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_SR_SERVIZI_RICHIESTI_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
