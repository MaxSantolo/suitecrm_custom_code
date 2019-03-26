<?php
// created: 2018-10-31 13:06:37
$dictionary["AOS_Quotes"]["fields"]["dr_eventi_aos_quotes"] = array (
  'name' => 'dr_eventi_aos_quotes',
  'type' => 'link',
  'relationship' => 'dr_eventi_aos_quotes',
  'source' => 'non-db',
  'module' => 'DR_Eventi',
  'bean_name' => false,
  'vname' => 'LBL_DR_EVENTI_AOS_QUOTES_FROM_DR_EVENTI_TITLE',
  'id_name' => 'dr_eventi_aos_quotesdr_eventi_ida',
);
$dictionary["AOS_Quotes"]["fields"]["dr_eventi_aos_quotes_name"] = array (
  'name' => 'dr_eventi_aos_quotes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DR_EVENTI_AOS_QUOTES_FROM_DR_EVENTI_TITLE',
  'save' => true,
  'id_name' => 'dr_eventi_aos_quotesdr_eventi_ida',
  'link' => 'dr_eventi_aos_quotes',
  'table' => 'dr_eventi',
  'module' => 'DR_Eventi',
  'rname' => 'name',
);
$dictionary["AOS_Quotes"]["fields"]["dr_eventi_aos_quotesdr_eventi_ida"] = array (
  'name' => 'dr_eventi_aos_quotesdr_eventi_ida',
  'type' => 'link',
  'relationship' => 'dr_eventi_aos_quotes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DR_EVENTI_AOS_QUOTES_FROM_DR_EVENTI_TITLE',
);
