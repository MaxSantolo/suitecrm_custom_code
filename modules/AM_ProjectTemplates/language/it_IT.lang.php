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
    'LBL_ASSIGNED_TO_ID' => 'Id utente assegnato',
    'LBL_ASSIGNED_TO_NAME' => 'Gestione Progetto',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data Creazione',
    'LBL_DATE_MODIFIED' => 'Ultima Modifica',
    'LBL_MODIFIED' => 'Modificato Da',
    'LBL_MODIFIED_ID' => 'Modificato Da Id',
    'LBL_MODIFIED_NAME' => 'Modificato Da Name',
    'LBL_CREATED' => 'Creato Da',
    'LBL_CREATED_ID' => 'Creato Da Id',
    'LBL_DELETED' => 'Eliminato',
    'LBL_NAME' => 'Nome Template',
    'LBL_CREATED_USER' => 'Creato Da',
    'LBL_MODIFIED_USER' => 'Modificato Da',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_EDIT_BUTTON' => 'Modifica',
    'LBL_REMOVE' => 'Cancella',
    'LBL_LIST_FORM_TITLE' => 'Elenco Templates Progetti',
    'LBL_MODULE_NAME' => 'Templates Progetti',
    'LBL_MODULE_TITLE' => 'Templates Progetti',
    'LBL_HOMEPAGE_TITLE' => 'Miei Templates Progetti',
    'LNK_NEW_RECORD' => 'Nuovo Templates Progetti',
    'LNK_LIST' => 'Vista Templates Progetti',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importa Templates Progetti',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Templates Progetti',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_AM_PROJECTTEMPLATES_SUBPANEL_TITLE' => 'Templates Progetti',
    'LBL_NEW_FORM_TITLE' => 'Nuovo Templates Progetti',
    'LBL_STATUS' => 'Stato',
    'LBL_PRIORITY' => 'Priorità',
    'LBL_PROJECT_NAME' => 'Nome Progetto',
    'LBL_START_DATE' => 'Data Inizio',
    'LBL_CREATE_PROJECT_TITLE' => 'Creare un nuovo progetto da questo template?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Modelli di attività',
	'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Utenti',
	'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Contatti',
	'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Seleziona Risorse',
	'LBL_NEW_PROJECT_CREATED' => 'Nuovo progetto creato',
	'LBL_NEW_PROJECT' => 'Nuovo Progetto',
	'LBL_CANCEL_PROJECT' => 'Annulla',

	'LBL_SUBTASK' => 'Compito',
	'LBL_MILESTONE_FLAG' => 'Compito Fondamentale',
	'LBL_RELATIONSHIP_TYPE' => 'Tipo Relazione',
    'LBL_LAG' => 'Ritardo',
    'LBL_DAYS' => 'Giorni',
    'LBL_HOURS' => 'Ore',
    'LBL_MONTHS' => 'Mesi',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Compiti di Progetto',
    'LBL_VIEW_GANTT_TITLE' => 'Visualizza Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Durata',
    'LBL_TASK_TITLE' => 'Modifica Compito',
    'LBL_PREDECESSOR_TITLE' => 'Modifica Predecessore',
    'LBL_DURATION_TITLE' => 'Modifica Durata',
    'LBL_DESCRIPTION' => 'Descrizione',
    'LBL_ASSIGNED_USER_ID' => 'Assegnato a:',

    'LBL_LIST_ASSIGNED_USER' => 'Gestione Progetto',
    'LBL_UNASSIGNED' => 'Non Assegnato',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Risorse',
    'LBL_DELETE_TASK' => 'Rimuovi Compito',
	'LBL_VIEW_DETAIL' => 'Mostra Dettagli',
	'LBL_ADD_NEW_TASK' => 'Aggiungi Compito',
	'LBL_ASSIGNED_USER_NAME' => 'Assegnato A:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nome Compito',
    'LBL_DURATION' => 'Durata',
    'LBL_ACTUAL_DURATION' => 'Durata Effettiva',
    'LBL_START' => 'Inizia',
    'LBL_FINISH' => 'Termina',
    'LBL_PREDECESSORS' => 'Predecessori',
    'LBL_PERCENT_COMPLETE' => 'Progresso (%)',
	'LBL_EDIT_TASK_PROPERTIES' => 'Modifica le Proprietà del Compito.',

	'LBL_OVERRIDE_BUSINESS_HOURS' => 'Considerare i giorni lavorativi',
	'LBL_COPY_ALL_TASKS' => 'Copiare tutte le attività con risorse',
	'LBL_COPY_SEL_TASKS' => 'Copia le attività con risorse selezionate',
	'LBL_TOOLTIP_TITLE' => 'Suggerimento',
	'LBL_TOOLTIP_TEXT' => 'Copia tutte le attività con gli utenti assegnati',

	'LBL_EMAIL' => 'Emails',
	'LBL_PHONE' => 'Telefono Ufficio:',
	'LBL_ADD_BUTTON'=> 'Aggiungi',
	'LBL_ADD_INVITEE' => 'Aggiungi Risorsa',
	'LBL_FIRST_NAME' => 'Nome',
	'LBL_LAST_NAME' => 'Nome',
	'LBL_SEARCH_BUTTON'=> 'Ricerca',
	'LBL_EMPTY_SEARCH_RESULT' => 'Nessun risultato trovato. Si prega di creare un invitato.',
	'LBL_CREATE_INVITEE' => 'Crea Risorsa',
	'LBL_CREATE_CONTACT' => 'Come Contatto',
	'LBL_CREATE_AND_ADD' => 'Crea & Aggiungi',
	'LBL_CANCEL_CREATE_INVITEE' => 'Annulla',
	'LBL_NO_ACCESS' => 'Non hai i permessi di creare $module',
	'LBL_SCHEDULING_FORM_TITLE' => 'Elenco Risorse',
	'LBL_NONE' => '--Nessuno--',

	'LBL_AOS_PRODUCTS_AM_PROJECTTEMPLATES_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Prodotto: Modelli di progetto dal titolo del Modello di progetto',
	'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Modello di progetto: progetto dal titolo del progetto',


);
