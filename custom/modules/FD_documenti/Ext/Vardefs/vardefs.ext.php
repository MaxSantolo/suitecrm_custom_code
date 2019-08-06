<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-08-01 13:26:09
$dictionary["FD_documenti"]["fields"]["fd_documenti_frnt_fornitori_azienda"] = array (
  'name' => 'fd_documenti_frnt_fornitori_azienda',
  'type' => 'link',
  'relationship' => 'fd_documenti_frnt_fornitori_azienda',
  'source' => 'non-db',
  'module' => 'frnt_fornitori_azienda',
  'bean_name' => 'frnt_fornitori_azienda',
  'vname' => 'LBL_FD_DOCUMENTI_FRNT_FORNITORI_AZIENDA_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
  'id_name' => 'fd_documenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida',
);
$dictionary["FD_documenti"]["fields"]["fd_documenti_frnt_fornitori_azienda_name"] = array (
  'name' => 'fd_documenti_frnt_fornitori_azienda_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FD_DOCUMENTI_FRNT_FORNITORI_AZIENDA_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
  'save' => true,
  'id_name' => 'fd_documenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida',
  'link' => 'fd_documenti_frnt_fornitori_azienda',
  'table' => 'frnt_fornitori_azienda',
  'module' => 'frnt_fornitori_azienda',
  'rname' => 'name',
);
$dictionary["FD_documenti"]["fields"]["fd_documenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida"] = array (
  'name' => 'fd_documenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida',
  'type' => 'link',
  'relationship' => 'fd_documenti_frnt_fornitori_azienda',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_FD_DOCUMENTI_FRNT_FORNITORI_AZIENDA_FROM_FD_DOCUMENTI_TITLE',
);


 // created: 2019-08-01 16:56:20
$dictionary['FD_documenti']['fields']['status_id']['default']='Active';
$dictionary['FD_documenti']['fields']['status_id']['inline_edit']=true;
$dictionary['FD_documenti']['fields']['status_id']['merge_filter']='disabled';
$dictionary['FD_documenti']['fields']['status_id']['reportable']=true;

 

// created: 2019-08-05 09:44:46
$dictionary["FD_documenti"]["fields"]["cases_fd_documenti_1"] = array (
  'name' => 'cases_fd_documenti_1',
  'type' => 'link',
  'relationship' => 'cases_fd_documenti_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_CASES_FD_DOCUMENTI_1_FROM_CASES_TITLE',
  'id_name' => 'cases_fd_documenti_1cases_ida',
);
$dictionary["FD_documenti"]["fields"]["cases_fd_documenti_1_name"] = array (
  'name' => 'cases_fd_documenti_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_FD_DOCUMENTI_1_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'cases_fd_documenti_1cases_ida',
  'link' => 'cases_fd_documenti_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["FD_documenti"]["fields"]["cases_fd_documenti_1cases_ida"] = array (
  'name' => 'cases_fd_documenti_1cases_ida',
  'type' => 'link',
  'relationship' => 'cases_fd_documenti_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CASES_FD_DOCUMENTI_1_FROM_FD_DOCUMENTI_TITLE',
);

?>