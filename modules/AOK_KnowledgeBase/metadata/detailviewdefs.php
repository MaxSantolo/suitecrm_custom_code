<?php
// created: 2018-06-07 14:54:37
$viewdefs['AOK_KnowledgeBase']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'EDIT',
        1 => 'DUPLICATE',
        2 => 'DELETE',
        3 => 'FIND_DUPLICATES',
      ),
    ),
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'useTabs' => false,
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'syncDetailEditViews' => true,
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 'name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'revision',
          'label' => 'LBL_REVISION',
        ),
        1 => 
        array (
          'name' => 'status',
          'studio' => 'visible',
          'label' => 'LBL_STATUS',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
          'customCode' => '{$fields.description.value}',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'additional_info',
          'comment' => 'Full text of the note',
          'studio' => 'visible',
          'label' => 'LBL_ADDITIONAL_INFO',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'author',
          'studio' => 'visible',
          'label' => 'LBL_AUTHOR',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'approver',
          'studio' => 'visible',
          'label' => 'LBL_APPROVER',
        ),
      ),
    ),
  ),
);