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

 
?>