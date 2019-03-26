<?php
// created: 2018-10-31 13:06:37
$dictionary["DR_Eventi"]["fields"]["dr_eventi_aos_quotes"] = array (
  'name' => 'dr_eventi_aos_quotes',
  'type' => 'link',
  'relationship' => 'dr_eventi_aos_quotes',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_DR_EVENTI_AOS_QUOTES_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'dr_eventi_aos_quotesaos_quotes_idb',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_aos_quotes_name"] = array (
  'name' => 'dr_eventi_aos_quotes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_AOS_QUOTES_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_aos_quotesaos_quotes_idb',
  'link' => 'dr_eventi_aos_quotes',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["DR_Eventi"]["fields"]["dr_eventi_aos_quotesaos_quotes_idb"] = array (
  'name' => 'dr_eventi_aos_quotesaos_quotes_idb',
  'type' => 'link',
  'relationship' => 'dr_eventi_aos_quotes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DR_EVENTI_AOS_QUOTES_FROM_AOS_QUOTES_TITLE',
);
