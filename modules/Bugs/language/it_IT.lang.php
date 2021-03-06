<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Errori',
  'LBL_MODULE_TITLE' => 'Traccia Errori: Pagina Principale',
  'LBL_MODULE_ID' => 'Errori',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Errore',
  'LBL_LIST_FORM_TITLE' => 'Elenco Errori',
  'LBL_NEW_FORM_TITLE' => 'Nuovo Errore',
  'LBL_CONTACT_BUG_TITLE' => 'Contatto-Errore:',
  'LBL_SUBJECT' => 'Oggetto:',
  'LBL_BUG' => 'Errore:',
  'LBL_BUG_NUMBER' => 'Numero Errore:',
  'LBL_NUMBER' => 'Numero:',
  'LBL_STATUS' => 'Stato:',
  'LBL_PRIORITY' => 'Priorità:',
  'LBL_DESCRIPTION' => 'Descrizione:',
  'LBL_CONTACT_NAME' => 'Nome Contatto:',
  'LBL_BUG_SUBJECT' => 'Oggetto Errore:',
  'LBL_CONTACT_ROLE' => 'Ruolo:',
  'LBL_LIST_NUMBER' => 'Numero.',
  'LBL_LIST_SUBJECT' => 'Oggetto',
  'LBL_LIST_STATUS' => 'Stato',
  'LBL_LIST_PRIORITY' => 'Priorità',
  'LBL_LIST_RELEASE' => 'Release',
  'LBL_LIST_RESOLUTION' => 'Soluzione',
  'LBL_LIST_LAST_MODIFIED' => 'Ultima modifica',
  'LBL_INVITEE' => 'Contatti',
  'LBL_TYPE' => 'Tipo:',
  'LBL_LIST_TYPE' => 'Tipo',
  'LBL_RESOLUTION' => 'Soluzione:',
  'LBL_RELEASE' => 'Release:',
  'LNK_NEW_BUG' => 'Report sui Errori',
  'LNK_BUG_LIST' => 'Visualizza Errori',
  'NTC_REMOVE_INVITEE' => 'Sei sicuro di voler rimuovere questo contatto dal Bug ?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Sei sicuro di voler rimuovere questo Bug dall´azienda ?',
  'ERR_DELETE_RECORD' => 'Per eliminare il bug deve essere specificato il numero del record.',
  'LBL_LIST_MY_BUGS' => 'I miei Bug',
  'LNK_IMPORT_BUGS' => 'Importa Errori',
  'LBL_FOUND_IN_RELEASE' => 'Trovato nella Release:',
  'LBL_FIXED_IN_RELEASE' => 'Risolto nella Release:',
  'LBL_LIST_FIXED_IN_RELEASE' => 'Risolto nella Release',
  'LBL_WORK_LOG' => 'Registro Operazioni:',
  'LBL_SOURCE' => 'Fonte:',
  'LBL_PRODUCT_CATEGORY' => 'Categoria:',

  'LBL_CREATED_BY' => 'Creato da:',
  'LBL_DATE_CREATED' => 'Data creazione:',
  'LBL_MODIFIED_BY' => 'Ultima modifica fatta da:',
  'LBL_DATE_LAST_MODIFIED' => 'Ultima Modifica:',

  'LBL_LIST_EMAIL_ADDRESS' => 'Indirizzo Email',
  'LBL_LIST_CONTACT_NAME' => 'Nome contatto',
  'LBL_LIST_ACCOUNT_NAME' => 'Azienda',
  'LBL_LIST_PHONE' => 'Telefono',
  'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler rimuovere questo contatto da questo Bug ?',

  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Traccia Errore',
  'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Attività',
  'LBL_HISTORY_SUBPANEL_TITLE'=>'Cronologia',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Aziende',
  'LBL_CASES_SUBPANEL_TITLE' => 'Reclami',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Progetti',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenti',
  'LBL_SYSTEM_ID' => 'ID Sistema',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assegnato a:',
	'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',

	'LBL_BUG_INFORMATION' => 'Informazioni Bug', //Can be translated in all caps. This string will be used by SuiteP template menu actions

  );
?>
