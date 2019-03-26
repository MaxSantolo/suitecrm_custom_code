<?php
// created: 2018-10-31 13:06:36
$dictionary["dr_eventi_meetings"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'dr_eventi_meetings' => 
    array (
      'lhs_module' => 'DR_Eventi',
      'lhs_table' => 'dr_eventi',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'dr_eventi_meetings_c',
      'join_key_lhs' => 'dr_eventi_meetingsdr_eventi_ida',
      'join_key_rhs' => 'dr_eventi_meetingsmeetings_idb',
    ),
  ),
  'table' => 'dr_eventi_meetings_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'dr_eventi_meetingsdr_eventi_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'dr_eventi_meetingsmeetings_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'dr_eventi_meetingsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'dr_eventi_meetings_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dr_eventi_meetingsdr_eventi_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'dr_eventi_meetings_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dr_eventi_meetingsmeetings_idb',
      ),
    ),
  ),
);