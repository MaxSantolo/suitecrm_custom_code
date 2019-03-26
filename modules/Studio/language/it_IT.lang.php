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
    'LBL_EDIT_LAYOUT' => 'Modifica Layout',
    'LBL_EDIT_FIELDS' => 'Modifica campi utente',
    'LBL_SELECT_FILE' => 'Seleziona File',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Area Strumenti',
    'LBL_SUGAR_FIELDS_STAGE' => 'Campi SuiteCRM (selezionare gli elementi da aggiungere in Area Organizzazione)',
    'LBL_VIEW_SUGAR_FIELDS' => 'Visualizza Campi SuiteCRM',
    'LBL_FAILED_TO_SAVE' => 'Salvataggio fallito',
    'LBL_CONFIRM_UNSAVE' => 'Tutte le modifiche saranno perse. Vuoi continuare?',
    'LBL_PUBLISHING' => 'In pubblicazione ...',
    'LBL_PUBLISHED' => 'In pubblicazione',
    'LBL_FAILED_PUBLISHED' => 'Non Pubblicato',
    'LBL_DROP_HERE' => '[Trascina Qui]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Nome',
    'LBL_LABEL' => 'Etichetta',
    'LBL_MASS_UPDATE' => 'Aggiornamento di massa',
    'LBL_AUDITED' => 'Audit',
    'LBL_CUSTOM_MODULE' => 'Modulo',
    'LBL_DEFAULT_VALUE' => 'Valore predefinito',
    'LBL_REQUIRED' => 'Richiesto',
    'LBL_DATA_TYPE' => 'Tipo',


    'LBL_HISTORY' => 'Cronologia',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Benvenuto a Studio!</h2><br> Cosa vorresti fare oggi?<br><b> Seleziona tra le opzioni qui sotto.</b>',
    'LBL_SW_EDIT_MODULE' => 'Modifica il Modulo',
    'LBL_SW_EDIT_DROPDOWNS' => 'Modifica DropDown',
    'LBL_SW_EDIT_TABS' => 'Configura Schede',
    'LBL_SW_RENAME_TABS' => 'Rinomina Schede',
    'LBL_SW_EDIT_GROUPTABS' => 'Configura Gruppo Schede',
    'LBL_SW_EDIT_PORTAL' => 'Modifica Portale',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Ripara Campi personalizzati',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Esporta Campi personalizzati',

//Manager Backups History
    'LBL_MB_DELETE' => 'Elimina',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Crea un Drop Down',
    'LBL_DROPDOWN_NAME' => 'Nome Dropdown:',
    'LBL_DROPDOWN_LANGUAGE' => 'Lingua Dropdown:',
    'LBL_TABGROUP_LANGUAGE' => 'Lingua Gruppo Schede:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Mostra Valore',
    'LBL_DD_DATABASEVALUE' => 'Valore a Database',
    'LBL_DD_ALL' => 'Tutto',

//BUTTONS
    'LBL_BTN_SAVE' => 'Salva',
    'LBL_BTN_CANCEL' => 'Annulla',
    'LBL_BTN_SAVEPUBLISH' => 'Salva e Pubblica',
    'LBL_BTN_HISTORY' => 'Cronologia',
    'LBL_BTN_NEXT' => 'Avanti',
    'LBL_BTN_BACK' => 'Indietro',
    'LBL_BTN_ADDCOLS' => 'Aggiungi Colonne',
    'LBL_BTN_ADDROWS' => 'Aggiungi Righe',
    'LBL_BTN_UNDO' => 'Annulla',
    'LBL_BTN_REDO' => 'Ripeti',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Aggiungi Campo Utente',
    'LBL_BTN_TABINDEX' => 'Modifica Ordine di Tabulazione',

//TABS
    'LBL_TAB_SUBTABS' => 'Sotto Pannelli',
    'LBL_MODULES' => 'Moduli',
//nsingh: begin bug#15095 fix
    'LBL_MODULE_NAME' => 'Amministrazione',
    'LBL_CONFIGURE_GROUP_TABS' => 'Configura Gruppo Schede',
    //end bug #15095 fix
    'LBL_GROUP_TAB_WELCOME' => 'Il modello di Gruppo Schede seguente verrà usato quando l&amp;#39;utente sceglie la visualizzazione per Gruppi al posto di quella tradizionale per Moduli, all´interno dell´area Il mio Profilo->Opzioni Layout.',
    'LBL_RENAME_TAB_WELCOME' => 'Per rinominare le schede, cliccare sui valori che compaiono nella colonna Mostra Valore.',
    'LBL_DELETE_MODULE' => '&amp;nbsp;Cancella&amp;nbsp;Modulo',
    'LBL_DISPLAY_OTHER_TAB_HELP' => 'Selezionare per visualizzare la scheda "Altro" nella barra di navigazione.  Di default, la scheda "Altro" mostra tutti i moduli che non sono già inclusi in altri gruppi.',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Per tradurre le etichette del gruppo schede in altre ligue, selezionare una lingua, modificare le etichette e clicca Salva &amp; Distribuisci.',
    'LBL_ADD_GROUP' => 'Aggiungi Gruppo',
    'LBL_NEW_GROUP' => 'Nuovo Gruppo',
    'LBL_RENAME_TABS' => 'Rinomina Schede',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Errore: Valore Chiave Non Valido: [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Salva' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Annulla' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Ripeti' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'In coda' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Elimina' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Aggiugi Campo' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Massimizza' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimizza' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Pubblica' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Aggiungi Righe' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Aggiungi Campo' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Modifica' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Seleziona la lingua da modificare.',
    'LBL_SINGULAR' => 'Etichetta singola',
    'LBL_PLURAL' => 'Etichetta plurale',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Clicca <b>Salva</b> per applicare le modifiche.'

);
?>
