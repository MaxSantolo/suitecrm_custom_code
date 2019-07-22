<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-10-31 14:44:09
$dictionary["db_eventi"]["fields"]["db_eventi_leads"] = array (
  'name' => 'db_eventi_leads',
  'type' => 'link',
  'relationship' => 'db_eventi_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_DB_EVENTI_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'db_eventi_leadsleads_ida',
);
$dictionary["db_eventi"]["fields"]["db_eventi_leads_name"] = array (
  'name' => 'db_eventi_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DB_EVENTI_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'db_eventi_leadsleads_ida',
  'link' => 'db_eventi_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["db_eventi"]["fields"]["db_eventi_leadsleads_ida"] = array (
  'name' => 'db_eventi_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'db_eventi_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DB_EVENTI_LEADS_FROM_DB_EVENTI_TITLE',
);


// created: 2018-10-31 14:44:09
$dictionary["db_eventi"]["fields"]["db_eventi_accounts"] = array (
  'name' => 'db_eventi_accounts',
  'type' => 'link',
  'relationship' => 'db_eventi_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_DB_EVENTI_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'db_eventi_accountsaccounts_ida',
);
$dictionary["db_eventi"]["fields"]["db_eventi_accounts_name"] = array (
  'name' => 'db_eventi_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DB_EVENTI_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'db_eventi_accountsaccounts_ida',
  'link' => 'db_eventi_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["db_eventi"]["fields"]["db_eventi_accountsaccounts_ida"] = array (
  'name' => 'db_eventi_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'db_eventi_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DB_EVENTI_ACCOUNTS_FROM_DB_EVENTI_TITLE',
);


// created: 2018-10-31 14:44:09
$dictionary["db_eventi"]["fields"]["db_eventi_documents"] = array (
  'name' => 'db_eventi_documents',
  'type' => 'link',
  'relationship' => 'db_eventi_documents',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_DB_EVENTI_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);


 // created: 2019-07-15 16:57:05
$dictionary['db_eventi']['fields']['parent_id_custom_c']['inline_edit']='1';
$dictionary['db_eventi']['fields']['parent_id_custom_c']['labelValue']='parent id custom';

 
?>