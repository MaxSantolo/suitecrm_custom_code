<?php
// created: 2018-06-06 15:33:40
$viewdefs['Cases']['EditView'] = array (
  'templateMeta' => 
  array (
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
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'include/javascript/bindWithDelay.js',
      ),
      1 => 
      array (
        'file' => 'modules/AOK_KnowledgeBase/AOK_KnowledgeBase_SuggestionBox.js',
      ),
      2 => 
      array (
        'file' => 'include/javascript/qtip/jquery.qtip.min.js',
      ),
    ),
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_CASE_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'form' => 
    array (
      'enctype' => 'multipart/form-data',
    ),
    'syncDetailEditViews' => true,
  ),
  'panels' => 
  array (
    'lbl_case_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'case_number',
          'type' => 'readonly',
        ),
        1 => 'priority',
      ),
      1 => 
      array (
        0 => 'account_name',
        1 => 
        array (
          'name' => 'fornitore_c',
          'studio' => 'visible',
          'label' => 'LBL_FORNITORE',
        ),
      ),
      2 => 
      array (
        0 => 'type',
        1 => 
        array (
          'name' => 'state',
          'comment' => 'The state of the case (i.e. open/closed)',
          'label' => 'LBL_STATE',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'suggestion_box',
          'label' => 'LBL_SUGGESTION_BOX',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'description',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'resolution',
          'nl2br' => true,
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'update_text',
          'studio' => 'visible',
          'label' => 'LBL_UPDATE_TEXT',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'internal',
          'studio' => 'visible',
          'label' => 'LBL_INTERNAL',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'case_update_form',
          'studio' => 'visible',
        ),
      ),
      9 => 
      array (
        0 => 
        array (
          'name' => 'durata_c',
          'label' => 'LBL_DURATA',
        ),
        1 => 
        array (
          'name' => 'fatturare_c',
          'label' => 'LBL_FATTURARE',
        ),
      ),
      10 => 
      array (
        0 => 'assigned_user_name',
      ),
    ),
  ),
);