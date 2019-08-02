<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-08-01 13:33:49
$dictionary["FDi_dipendenti"]["fields"]["fdi_dipendenti_frnt_fornitori_azienda"] = array (
  'name' => 'fdi_dipendenti_frnt_fornitori_azienda',
  'type' => 'link',
  'relationship' => 'fdi_dipendenti_frnt_fornitori_azienda',
  'source' => 'non-db',
  'module' => 'frnt_fornitori_azienda',
  'bean_name' => 'frnt_fornitori_azienda',
  'vname' => 'LBL_FDI_DIPENDENTI_FRNT_FORNITORI_AZIENDA_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
  'id_name' => 'fdi_dipendenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida',
);
$dictionary["FDi_dipendenti"]["fields"]["fdi_dipendenti_frnt_fornitori_azienda_name"] = array (
  'name' => 'fdi_dipendenti_frnt_fornitori_azienda_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FDI_DIPENDENTI_FRNT_FORNITORI_AZIENDA_FROM_FRNT_FORNITORI_AZIENDA_TITLE',
  'save' => true,
  'id_name' => 'fdi_dipendenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida',
  'link' => 'fdi_dipendenti_frnt_fornitori_azienda',
  'table' => 'frnt_fornitori_azienda',
  'module' => 'frnt_fornitori_azienda',
  'rname' => 'name',
);
$dictionary["FDi_dipendenti"]["fields"]["fdi_dipendenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida"] = array (
  'name' => 'fdi_dipendenti_frnt_fornitori_aziendafrnt_fornitori_azienda_ida',
  'type' => 'link',
  'relationship' => 'fdi_dipendenti_frnt_fornitori_azienda',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_FDI_DIPENDENTI_FRNT_FORNITORI_AZIENDA_FROM_FDI_DIPENDENTI_TITLE',
);


 // created: 2019-08-02 08:43:49
$dictionary['FDi_dipendenti']['fields']['ingresso_acs_c']['inline_edit']='1';
$dictionary['FDi_dipendenti']['fields']['ingresso_acs_c']['labelValue']='Autorizzato all\'ingresso';

 

 // created: 2019-08-02 08:44:55
$dictionary['FDi_dipendenti']['fields']['acs_url_c']['inline_edit']='1';
$dictionary['FDi_dipendenti']['fields']['acs_url_c']['labelValue']='ACS';

 
?>