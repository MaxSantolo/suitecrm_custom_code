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
  'LBL_MODULE_NAME' => 'Attività',
  'LBL_MODULE_TITLE' => 'Attività: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Attività',
  'LBL_LIST_FORM_TITLE' => 'Elenco Attività',
  'LBL_LIST_SUBJECT' => 'Oggetto',
    'LBL_OVERVIEW' => 'Informazioni',
    'LBL_MEETINGS' => 'Riunioni',
    'LBL_CALLS' => 'Chiamate',
    'LBL_EMAILS' => 'Email',
    'LBL_NOTES' => 'Note',
    'LBL_PRINT' => 'Stampa',
    'LBL_MEETING_TYPE' => 'Riunioni',
    'LBL_CALL_TYPE' => 'Chiamate',
    'LBL_EMAIL_TYPE' => 'Emails',
    'LBL_NOTE_TYPE' => 'Nota',
    'LBL_DATA_TYPE_START' => 'Inizio:',
    'LBL_DATA_TYPE_SENT' => 'Inviato:',
    'LBL_DATA_TYPE_MODIFIED' => 'Modificato:',
  'LBL_LIST_CONTACT' => 'Contatto',
  'LBL_LIST_RELATED_TO' => 'Relativo a',
  'LBL_LIST_DATE' => 'Data',
  'LBL_LIST_TIME' => 'Ora Inizio',
  'LBL_LIST_CLOSE' => 'Chiudi',
  'LBL_SUBJECT' => 'Oggetto:',
  'LBL_STATUS' => 'Stato:',
  'LBL_LOCATION' => 'Luogo:',
  'LBL_DATE_TIME' => 'Data e Ora di Inizio:',
  'LBL_DATE' => 'Data Inizio:',
  'LBL_TIME' => 'Ora Inizio:',
  'LBL_DURATION' => 'Durata:',
  'LBL_HOURS_MINS' => '(ore/minuti)',
  'LBL_CONTACT_NAME' => 'Nome Contatto:',
  'LBL_MEETING' => 'Riunione:',
  'LBL_DESCRIPTION_INFORMATION' => 'Descrizione',
  'LBL_DESCRIPTION' => 'Descrizione:',
  'LBL_COLON' => ':',
  'LNK_NEW_CALL' => 'Schedula chiamata',
  'LNK_NEW_MEETING' => 'Schedula riunione',
  'LNK_NEW_TASK' => 'Nuovo Compito',
  'LNK_NEW_NOTE' => 'Nuova Nota o Aggiungi Allegato',
  'LNK_NEW_EMAIL' => 'Crea Email Archiviata',
  'LNK_CALL_LIST' => 'Visualizza Chiamate',
  'LNK_MEETING_LIST' => 'Visualizza Riunioni',
  'LNK_TASK_LIST' => 'Visualizza Compiti',
  'LNK_NOTE_LIST' => 'Visualizza Note',
  'LNK_EMAIL_LIST' => 'Visualizza Email',
  'LBL_DELETE_ACTIVITY' => 'Cancellare questa Attività?',
  'ERR_DELETE_RECORD' => 'Per eliminare l´azienda deve essere specificato un numero del record.',
  'NTC_REMOVE_INVITEE' => 'Sei sicuro di voler eliminare questo invitato dalla riunione?',
  'LBL_INVITEE' => 'Invitati',
  'LBL_LIST_DIRECTION' => 'Ordine',
  'LBL_DIRECTION' => 'Ordine',
  'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
  'LNK_VIEW_CALENDAR' => 'Visualizza Caledario',
  'LBL_OPEN_ACTIVITIES' => 'Attività Aperte',
  'LBL_HISTORY' => 'Cronologia',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Nuovo Compito',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Nuovo Compito',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Nuova Riunione',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Nuova Riunione',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Nuova Chiamata',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Schedula chiamata',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Nuova Nota o Allegato',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Nuova Nota o Allegato',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivia Email',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivia Email',
  'LBL_LIST_STATUS' => 'Stato',
  'LBL_LIST_DUE_DATE' => 'Data Prevista',
  'LBL_LIST_LAST_MODIFIED' => 'Ultima Modifica',
  'appointment_filter_dom' => array(
  	 'today' => 'oggi'
  	,'tomorrow' => 'domani'
  	,'this Saturday' => 'questa settimana'
  	,'next Saturday' => 'la prossima settimana'
  	,'last this_month' => 'questo mese'
  	,'last next_month' => 'il prossimo mese'
),
  'LNK_IMPORT_CALLS'=>'Importa Chiamate',
  'LNK_IMPORT_MEETINGS'=>'Importa Riunioni',
  'LNK_IMPORT_TASKS'=>'Importa Compiti',
  'LNK_IMPORT_NOTES'=>'Importa Note',
  'NTC_NONE'=>'Nessuno',
  'LBL_ACCEPT_THIS'=>'Accetti?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Attività Aperte',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Utente Assegnato',

	'LBL_ACCEPT' => 'Accetta' /*for 508 compliance fix*/,
);


?>