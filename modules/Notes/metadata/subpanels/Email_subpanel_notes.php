<?php
// created: 2018-04-13 16:32:55
$subpanel_layout['list_fields'] = array (
  'object_image' => 
  array (
    'vname' => 'LBL_OBJECT_IMAGE',
    'widget_class' => 'SubPanelIcon',
    'width' => '2%',
    'image2' => 'attachment',
    'image2_url_field' => 
    array (
      'id_field' => 'id',
      'filename_field' => 'filename',
    ),
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_LIST_SUBJECT',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '50%',
    'default' => true,
  ),
  'contact_name' => 
  array (
    'module' => 'Contacts',
    'vname' => 'LBL_LIST_CONTACT_NAME',
    'width' => '20%',
    'target_record_key' => 'contact_id',
    'target_module' => 'Contacts',
    'widget_class' => 'SubPanelDetailViewLink',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_LIST_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'file_url' => 
  array (
    'usage' => 'query_only',
  ),
  'filename' => 
  array (
    'usage' => 'query_only',
  ),
);