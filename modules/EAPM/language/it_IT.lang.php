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
  'LBL_ASSIGNED_TO_ID' => 'Id utente assegnato',
  'LBL_ASSIGNED_TO_NAME' => 'Utente SuiteCRM',
  'LBL_ID' => 'ID',
  'LBL_DATE_ENTERED' => 'Data Creazione',
  'LBL_DATE_MODIFIED' => 'Ultima Modifica',
  'LBL_MODIFIED' => 'Modificato Da',
  'LBL_MODIFIED_ID' => 'Modificato Da Id',
  'LBL_MODIFIED_NAME' => 'Modificato Da Name',
  'LBL_CREATED' => 'Creato Da',
  'LBL_CREATED_ID' => 'Creato Da Id',
  'LBL_DESCRIPTION' => 'Descrizione',
  'LBL_DELETED' => 'Eliminato',
  'LBL_NAME' => 'Nome Utente App',
  'LBL_CREATED_USER' => 'Creato dall´Utente',
  'LBL_MODIFIED_USER' => 'Modificato dall´Utente',
  'LBL_LIST_NAME' => 'Nome',
  'LBL_LIST_FORM_TITLE' => 'Elenco Account Esterni',
  'LBL_MODULE_NAME' => 'Account Esterno',
  'LBL_MODULE_TITLE' => 'Accounts Esterni',
  'LBL_HOMEPAGE_TITLE' => 'I miei Accounts Esterni',
  'LNK_NEW_RECORD' => 'Crea un Account Esterno',
  'LNK_LIST' => 'Visualizza Accounts Esterni',
  'LNK_IMPORT_SUGAR_EAPM' => 'Importa Accounts Esterni',
  'LBL_SEARCH_FORM_TITLE' => 'Ricerca sorgente esterna',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Visualizza Cronologia',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
  'LBL_SUGAR_EAPM_SUBPANEL_TITLE' => 'Accounts Esterni',
  'LBL_NEW_FORM_TITLE' => 'Nuovo Account Esterno',
  'LBL_PASSWORD' => 'Password App',
  'LBL_USER_NAME' => 'Nome Utente App',
  'LBL_URL' => 'URL',
  'LBL_APPLICATION' => 'Applicazione',
  'LBL_API_DATA' => 'Dati API',
  'LBL_API_CONSKEY' => 'Consumer key',
  'LBL_API_CONSSECRET' => 'Consumer secret',
  'LBL_API_OAUTHTOKEN' => 'Token OAuth',
  'LBL_AUTH_UNSUPPORTED' => "Questa modalità di autorizzazione non è supportata dall´pplicazione.",
  'LBL_AUTH_ERROR' => 'Tentativo di autenticazione dell´account esterno fallito.',
  'LBL_VALIDATED' => 'Accesso convalidato',
  'LBL_ACTIVE' => 'Attivo',
  'LBL_OAUTH_NAME' => '%s',
  'LBL_SUGAR_USER_NAME' => 'Utente SuiteCRM',
  'LBL_DISPLAY_PROPERTIES' => 'Visualizza Proprietà',
  'LBL_CONNECT_BUTTON_TITLE' => 'Connetti',
  'LBL_NOTE' => 'Si prega di prendere Nota',
  'LBL_CONNECTED' => 'Connesso',
  'LBL_DISCONNECTED' => 'Non connesso',

  'LBL_ERR_NO_AUTHINFO' => 'Non ci sono informazioni relative all´autenticazione per questo account.',
  'LBL_ERR_NO_TOKEN' => 'Non ci sono tokens di login validi per questo account.',

  'LBL_ERR_FAILED_QUICKCHECK' => 'Al momento non sei connesso al tuo {0} account. Clicca OK per rieffettuare il login al tuo account e attivare il record dell´account esterno.',

  'LBL_CLICK_TO_EDIT' => 'Fare clic per modificare',

  // Various strings used throughout the external account modules
  'LBL_REAUTHENTICATE_LABEL' => 'Riautenticazione',
  'LBL_APPLICATION_FOUND_NOTICE' => 'Per questa applicazione esiste già un account. Abbiamo ripristinato l´account esistente.',
  'LBL_OMIT_URL' => '(Ometti http:// o https://)',
  'LBL_OAUTH_SAVE_NOTICE' => 'Clicca Salva per creare il record dell´account esterno. Sarai indirizzato in una pagina in cui dovrai inserire le informazioni del tuo account per autorizzare l´accesso da SuiteCRM. Dopo aver inserito le informazioni sul tuo account, sarai rindirizzato in SuiteCRM.',
  'LBL_BASIC_SAVE_NOTICE' => 'Clicca Salva per creare il record dell´account esterno. In seguito SuiteCRM convaliderà le tue credenziali.',
  'LBL_ERR_NO_RESPONSE' => 'Si è verificato un errore nel salvataggio dell´account esterno.',
  'LBL_ERR_POPUPS_DISABLED' => 'Si prega di abilitare le finestre popup del browser o aggiungere un\'eccezione per il sito Web "{0}" all\'elenco delle eccezioni per potersi connettere.',

  'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
