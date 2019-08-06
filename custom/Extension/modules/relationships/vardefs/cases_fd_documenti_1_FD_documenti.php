<?php
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
