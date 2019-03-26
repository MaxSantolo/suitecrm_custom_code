<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-10-08 15:46:07
$dictionary["wifi_wifi_accounts"]["fields"]["wifi_wifi_accounts_leads"] = array (
  'name' => 'wifi_wifi_accounts_leads',
  'type' => 'link',
  'relationship' => 'wifi_wifi_accounts_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_WIFI_WIFI_ACCOUNTS_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'wifi_wifi_accounts_leadsleads_ida',
);
$dictionary["wifi_wifi_accounts"]["fields"]["wifi_wifi_accounts_leads_name"] = array (
  'name' => 'wifi_wifi_accounts_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_WIFI_WIFI_ACCOUNTS_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'wifi_wifi_accounts_leadsleads_ida',
  'link' => 'wifi_wifi_accounts_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["wifi_wifi_accounts"]["fields"]["wifi_wifi_accounts_leadsleads_ida"] = array (
  'name' => 'wifi_wifi_accounts_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'wifi_wifi_accounts_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_WIFI_WIFI_ACCOUNTS_LEADS_FROM_WIFI_WIFI_ACCOUNTS_TITLE',
);


// created: 2018-10-08 15:46:07
$dictionary["wifi_wifi_accounts"]["fields"]["wifi_wifi_accounts_accounts"] = array (
  'name' => 'wifi_wifi_accounts_accounts',
  'type' => 'link',
  'relationship' => 'wifi_wifi_accounts_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_WIFI_WIFI_ACCOUNTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'wifi_wifi_accounts_accountsaccounts_ida',
);
$dictionary["wifi_wifi_accounts"]["fields"]["wifi_wifi_accounts_accounts_name"] = array (
  'name' => 'wifi_wifi_accounts_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_WIFI_WIFI_ACCOUNTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'wifi_wifi_accounts_accountsaccounts_ida',
  'link' => 'wifi_wifi_accounts_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["wifi_wifi_accounts"]["fields"]["wifi_wifi_accounts_accountsaccounts_ida"] = array (
  'name' => 'wifi_wifi_accounts_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'wifi_wifi_accounts_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_WIFI_WIFI_ACCOUNTS_ACCOUNTS_FROM_WIFI_WIFI_ACCOUNTS_TITLE',
);


 // created: 2018-10-08 15:51:14
$dictionary['wifi_wifi_accounts']['fields']['name']['required']=false;
$dictionary['wifi_wifi_accounts']['fields']['name']['inline_edit']=true;
$dictionary['wifi_wifi_accounts']['fields']['name']['duplicate_merge']='disabled';
$dictionary['wifi_wifi_accounts']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['wifi_wifi_accounts']['fields']['name']['merge_filter']='disabled';
$dictionary['wifi_wifi_accounts']['fields']['name']['unified_search']=false;

 

 // created: 2018-10-08 15:59:32
$dictionary['wifi_wifi_accounts']['fields']['user_name']['audited']=true;

 

 // created: 2018-10-09 09:50:29

 

 // created: 2019-01-31 10:30:57
$dictionary['wifi_wifi_accounts']['fields']['up_speed']['default']='4194304';

 

 // created: 2019-01-31 10:31:02
$dictionary['wifi_wifi_accounts']['fields']['down_speed']['default']='4194304';

 

 // created: 2019-01-31 11:06:43
$dictionary['wifi_wifi_accounts']['fields']['password']['required']=false;

 
?>