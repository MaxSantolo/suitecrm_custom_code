<?php
$viewdefs ['EmailTemplates'] = 
array (
  'QuickCreate' => 
  array (
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => '',
        ),
        1 => 
        array (
          0 => 'type',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'displayParams' => 
            array (
              'rows' => '1',
              'cols' => '90',
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tracker_url',
            'fields' => 
            array (
              0 => 'tracker_url',
              1 => 'url_text',
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'subject',
            'displayParams' => 
            array (
              'rows' => '1',
              'cols' => '90',
            ),
          ),
        ),
        5 => 
        array (
          0 => 'text_only',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'body_html',
            'displayParams' => 
            array (
              'rows' => '20',
              'cols' => '100',
            ),
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'ATTACHMENTS_JAVASCRIPT',
            'customCode' => '{$fields.attachments_javascript.value} {$fields.attachments.value}',
            'description' => 'This field was auto generated',
          ),
        ),
      ),
    ),
  ),
);
;
?>
