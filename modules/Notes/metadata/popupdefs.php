<?php
$popupMeta = array (
    'moduleMain' => 'Notes',
    'varName' => 'Note',
    'orderBy' => 'notes.name',
    'whereClauses' => array (
  'name' => 'notes.name',
  'note_lead_c' => 'notes.note_lead_c',
  'filename' => 'notes.filename',
  'date_entered' => 'notes.date_entered',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'note_lead_c',
  5 => 'filename',
  6 => 'date_entered',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'note_lead_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NOTE_LEAD',
    'id' => 'LEAD_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'note_lead_c',
  ),
  'filename' => 
  array (
    'type' => 'name',
    'name' => 'filename',
    'width' => '10%',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
),
);
