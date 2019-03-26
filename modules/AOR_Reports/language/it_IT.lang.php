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
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data Creazione',
    'LBL_DATE_MODIFIED' => 'Ultima Modifica',
    'LBL_MODIFIED' => 'Modificato Da',
    'LBL_MODIFIED_ID' => 'Modificato Da Id',
    'LBL_MODIFIED_NAME' => 'Modificato Da Name',
    'LBL_CREATED' => 'Creato da',
    'LBL_CREATED_ID' => 'Creato Da Id',
    'LBL_DESCRIPTION' => 'Descrizione',
    'LBL_DELETED' => 'Eliminato',
    'LBL_NAME' => 'Nome',
    'LBL_CREATED_USER' => 'Creato Da Utente',
    'LBL_MODIFIED_USER' => 'Modificato da Utente',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_EDIT_BUTTON' => 'Modifica',
    'LBL_REMOVE' => 'Cancella',
    'LBL_LIST_FORM_TITLE' => 'Elenco Reports',
    'LBL_MODULE_NAME' => 'Reports',
    'LBL_MODULE_TITLE' => 'Reports',
    'LBL_HOMEPAGE_TITLE' => 'I Miei Reports',
    'LNK_NEW_RECORD' => 'Crea Report',
    'LNK_LIST' => 'Reports',
    'LNK_IMPORT_AOR_REPORTS' => 'Importa Reports',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Reports',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vedi log Cambiamenti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_AOR_REPORTS_SUBPANEL_TITLE' => 'Reports',
    'LBL_NEW_FORM_TITLE' => 'Nuovo Report',
    'LBL_REPORT_MODULE' => 'Modulo Report',
    'LBL_GRAPHS_PER_ROW' => 'Grafici per riga',
    'LBL_FIELD_LINES' => 'Mostra Campi',
    'LBL_ADD_FIELD' => 'Aggiungi Campo',
    'LBL_CONDITION_LINES' => 'Condizioni',
    'LBL_ADD_CONDITION' => 'Aggiungi Condizione',
    'LBL_EXPORT' => 'Esporta',
    'LBL_DOWNLOAD_PDF' => 'Scarica PDF',
    'LBL_ADD_TO_PROSPECT_LIST' => 'Aggiungi alla Lista Obiettivi',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'Albero Moduli',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'Campi',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'Condizioni',
    'LBL_TOTAL' => 'Totale',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'Grafici',
    'LBL_ADD_CHART' => 'Aggiungi Grafico',
    'LBL_ADD_PARENTHESIS' => 'Rimuovi parentesi',
    'LBL_CHART_TITLE' => 'Titolo',
    'LBL_CHART_TYPE' => 'Tipo',
    'LBL_CHART_X_FIELD' => 'Asse X ',
    'LBL_CHART_Y_FIELD' => 'Asse Y',
    'LBL_AOR_REPORTS_DASHLET' => 'Reports',
    'LBL_DASHLET_TITLE' => 'Titolo',
    'LBL_DASHLET_REPORT' => 'Report',
    'LBL_DASHLET_CHOOSE_REPORT' => 'Scegli un report',
    'LBL_DASHLET_SAVE' => 'Salva',
    'LBL_DASHLET_CHARTS' => 'Grafici',
    'LBL_DASHLET_ONLY_CHARTS' => 'Mostra solo grafici',
    'LBL_AOR_SCHEDULED_REPORTS_AOR_REPORTS_FROM_AOR_SCHEDULED_REPORTS_TITLE' => 'Reports Programmati',
    'LBL_UPDATE_PARAMETERS' => 'Aggiorna',
    'LBL_PARAMETERS' => 'Parametri',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'Drag and drop elementi per Campo o Condizioni',
    'LBL_MAIN_GROUPS' => 'Gruppo Principale:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'Grafico senza nome',
    'LBL_REPORT' => 'Report',
);
