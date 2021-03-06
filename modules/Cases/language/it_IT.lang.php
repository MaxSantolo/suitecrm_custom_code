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

$mod_strings = array(
    'ERR_DELETE_RECORD' => 'Per eliminare l´azienda deve essere specificato il numero del record.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'KnowledgeBase Suggerimenti',
    'LBL_TOOL_TIP_TITLE' => 'Titolo:',
    'LBL_TOOL_TIP_BODY' => 'Corpo: ',
    'LBL_TOOL_TIP_INFO' => 'Informazioni aggiuntive: ',
    'LBL_TOOL_TIP_USE' => 'Usa come: ',
    'LBL_SUGGESTION_BOX' => 'Suggerimenti',
    'LBL_NO_SUGGESTIONS' => 'Nessun suggerimento',
    'LBL_RESOLUTION_BUTTON' => 'Soluzione',
    'LBL_SUGGESTION_BOX_STATUS' => 'Stato',
    'LBL_SUGGESTION_BOX_TITLE' => 'Titolo',
    'LBL_SUGGESTION_BOX_REL' => 'Rilevanza',

    'LBL_ACCOUNT_ID' => 'ID Azienda',
    'LBL_ACCOUNT_NAME' => 'Nome azienda:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Aziende',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_ATTACH_NOTE' => 'Allega nota',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Errori',
    'LBL_CASE_NUMBER' => 'Numero Reclamo:',
    'LBL_CASE' => 'Reclamo:',
    'LBL_CONTACT_CASE_TITLE' => 'Contatto - Reclamo:',
    'LBL_CONTACT_NAME' => 'Nome Contatto:',
    'LBL_CONTACT_ROLE' => 'Ruolo:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Reclami',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_FILENANE_ATTACHMENT' => 'File Allegato',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
    'LBL_INVITEE' => 'Contatti',
    'LBL_MEMBER_OF' => 'Azienda',
    'LBL_MODULE_NAME' => 'Reclami',
    'LBL_MODULE_TITLE' => 'Reclami: Home',
    'LBL_NEW_FORM_TITLE' => 'Nuovo Reclamo',
    'LBL_NUMBER' => 'Numero:',
    'LBL_PRIORITY' => 'Priorità:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Progetti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenti',
    'LBL_RESOLUTION' => 'Soluzione:',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Reclamo',
    'LBL_STATUS' => 'Stato:',
    'LBL_SUBJECT' => 'Oggetto:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utente Assegnato:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_LIST_ASSIGNED' => 'Assegnato A',
    'LBL_LIST_CLOSE' => 'Chiuso',
    'LBL_LIST_FORM_TITLE' => 'Elenco Reclami',
    'LBL_LIST_LAST_MODIFIED' => 'Ultima Modifica',
    'LBL_LIST_MY_CASES' => 'I miei Reclami Aperti',
    'LBL_LIST_NUMBER' => 'Numero.',
    'LBL_LIST_PRIORITY' => 'Priorità',
    'LBL_LIST_STATUS' => 'Stato',
    'LBL_LIST_SUBJECT' => 'Oggetto',

    'LNK_CASE_LIST' => 'Visualizza Reclami',
    'LNK_NEW_CASE' => 'Nuovo Reclamo',
    'NTC_REMOVE_FROM_BUG_CONFIRMATION' => 'Sei sicuro di voler rimuovere il reclamo dal bug?',
    'NTC_REMOVE_INVITEE' => 'Sei sicuro di voler rimuovere questo contatto dal reclamo?',
    'LBL_LIST_DATE_CREATED' => 'Data Creazione',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a',
    'LBL_TYPE' => 'Tipo',
    'LBL_WORK_LOG' => 'Registro Operazioni',
    'LNK_IMPORT_CASES' => 'Importa Reclami',

    'LBL_CREATED_USER' => 'Utente Creato',
    'LBL_MODIFIED_USER' => 'Utente Modificato',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Progetti',
    'LBL_CASE_INFORMATION' => 'Informazioni Reclamo',  //Can be translated in all caps. This string will be used by SuiteP template menu actions

    //For export labels
    'LBL_MODIFIED_USER_NAME' => 'Nome Utente Modificato',

    // SNIP
    'LBL_UPDATE_TEXT' => 'Aggiorna Testo', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Aggiornamento Interno',
    'LBL_AOP_CASE_UPDATES' => 'Aggiornamenti Reclamo',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Aggiornamento Reclami Threaded',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Comprimi Tutto',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Espandi Tutto',
    'LBL_NO_CASE_UPDATES' => "Non ci sono aggiornamenti per questo reclamo",
    'LBL_AOP_CASE_ATTACHMENTS' => 'Allegati: ',

    'LBL_AOP_CASE_EVENTS' => 'Eventi Reclami',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Allegati Reclami:',
    'LBL_ADD_CASE_FILE' => 'Aggiungi file',
    'LBL_REMOVE_CASE_FILE' => 'Rimuovi file',
    'LBL_SELECT_CASE_DOCUMENT' => 'Seleziona documento',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Pulisci documento',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Documento interno al CRM',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'File esterno',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Creato dal contatto',
    'LBL_CONTACT_CREATED_BY' => 'Creato da:',
    'LBL_CASE_UPDATE_FORM' => 'Scheda di aggiornamento dell\'allegato', //Form for attachements on case updates
    'LBL_AOP_INTERNAL' => 'Interno',
);

?>
