<?php
// created: 2018-06-06 15:33:41
$searchdefs['Notes'] = array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_NOTE_LEAD',
        'id' => 'LEAD_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'note_lead_c',
      ),
      2 => 
      array (
        'link' => true,
        'type' => 'relate',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'id' => 'ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'type' => 'name',
        'link' => 'contact',
        'label' => 'LBL_CONTACT_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'contact_name',
      ),
      2 => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_NOTE_LEAD',
        'id' => 'LEAD_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'note_lead_c',
      ),
      3 => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      4 => 
      array (
        'type' => 'name',
        'name' => 'filename',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);