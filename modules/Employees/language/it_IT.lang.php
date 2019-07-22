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
  'LBL_MODULE_NAME' => 'Dipendenti',
  'LBL_MODULE_TITLE' => 'Dipendenti: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Dipendente',
  'LBL_LIST_FORM_TITLE' => 'Dipendenti',
  'LBL_NEW_FORM_TITLE' => 'Nuovo Dipendente',
  'LBL_EMPLOYEE' => 'Dipendenti:',
  'LBL_LOGIN' => 'Login',
  'LBL_RESET_PREFERENCES' => 'Ripristina Preferenze Predefinite',
  'LBL_TIME_FORMAT' => 'Formato Ora:',
  'LBL_DATE_FORMAT' => 'Formato Data:',
  'LBL_TIMEZONE' => 'Fuso Orario:',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_LIST_NAME' => 'Nome',
  'LBL_LIST_LAST_NAME' => 'Cognome',
  'LBL_LIST_EMPLOYEE_NAME' => 'Nome Dipendente',
  'LBL_LIST_DEPARTMENT' => 'Dipartimento',
  'LBL_LIST_REPORTS_TO_NAME' => 'Dipende Da',
  'LBL_LIST_EMAIL' => 'Emails',
  'LBL_LIST_PRIMARY_PHONE' => 'Telefono',
  'LBL_LIST_USER_NAME' => 'Nome Utente',
  'LBL_LIST_ADMIN' => 'Amministrazione',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Nuovo Dipendente',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Nuovo Dipendente',
  'LBL_ERROR' => 'Errore:',
  'LBL_PASSWORD' => 'Password:',
  'LBL_EMPLOYEE_NAME' => 'Nome Dipendente:',
  'LBL_USER_NAME' => 'Nome Utente:',
  'LBL_USER_TYPE' => 'Tipo Utente',
  'LBL_FIRST_NAME' => 'Nome:',
  'LBL_LAST_NAME' => 'Cognome:',
  'LBL_THEME' => 'Tema:',
  'LBL_LANGUAGE' => 'Lingua:',
  'LBL_ADMIN' => 'Amministratore:',
  'LBL_EMPLOYEE_INFORMATION' => 'Informazioni Dipendente',
  'LBL_OFFICE_PHONE' => 'Telefono Ufficio:',
  'LBL_REPORTS_TO' => 'Dipende da Id:',
  'LBL_REPORTS_TO_NAME' => 'Dipende da',
  'LBL_OTHER_PHONE' => 'Altro:',
  'LBL_OTHER_EMAIL' => 'Altra Email:',
  'LBL_NOTES' => 'Note:',
  'LBL_DEPARTMENT' => 'Divisione:',
  'LBL_TITLE' => 'Funzione:',
  'LBL_ANY_ADDRESS' => 'Altro indirizzo:',
  'LBL_ANY_PHONE' => 'Altro Telefono:',
  'LBL_ANY_EMAIL' => 'Altra Email:',
  'LBL_ADDRESS' => 'Indirizzo:',
  'LBL_CITY' => 'Comune:',
  'LBL_STATE' => 'Provincia:', //For address fields
  'LBL_POSTAL_CODE' => 'CAP:',
  'LBL_COUNTRY' => 'Nazione:',
  'LBL_NAME' => 'Nome:',
  'LBL_MOBILE_PHONE' => 'Telefono Cellulare:',
  'LBL_OTHER' => 'Altro:',
  'LBL_FAX' => 'Fax:',
  'LBL_EMAIL' => 'Email:',
  'LBL_EMAIL_LINK_TYPE'				=> 'Client Email',
  'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Client di posta di SuiteCRM:</b> Invia email utilizzando il client di posta dell´applicazione SuiteCRM.<br><b>Client di posta esterno:</b> Invia email utilizzando un client di posta esterno all´applicazione SuiteCRM, come Microsoft Outlook.',
  'LBL_HOME_PHONE' => 'Telefono Casa:',
  'LBL_WORK_PHONE' => 'Telefono Lavoro:',
  'LBL_EMPLOYEE_STATUS' => 'Stato Dipendente:',
  'LBL_PRIMARY_ADDRESS' => 'Indirizzo principale:',
  'LBL_SAVED_SEARCH' => 'Opzioni Layout',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Nuovo Utente',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Nuovo Utente',
  'LBL_MESSENGER_ID' => 'Nome IM:',
  'LBL_MESSENGER_TYPE' => 'Tipo IM:',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'Nome Dipendente',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'esiste già. Non sono ammessi dipendenti con lo stesso nome. Modifica il nome afffinchè sia unico.',
  'ERR_LAST_ADMIN_1' => 'Il dipendente "',
  'ERR_LAST_ADMIN_2' => 'è l´ultimo dipendente con accesso amministrativo. Deve esserci almeno un dipendente amministratore.',
  'LNK_NEW_EMPLOYEE' => 'Nuovo Dipendente',
  'LNK_EMPLOYEE_LIST' => 'Visualizza Dipendenti',
  'ERR_DELETE_RECORD' => 'Per eliminare l´azienda deve essere specificato il numero del record.',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Stato Dipendente',

  'LBL_SUGAR_LOGIN' => 'È utente',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Notifica di Assegnazione',
  'LBL_IS_ADMIN' => 'è Amministratore',
  'LBL_GROUP' => 'Gruppo Utenti',
  'LBL_PORTAL_ONLY'	=> 'Portale Solo Utenti',
  'LBL_PHOTO'	=> 'Foto',
  'LBL_DELETE_USER_CONFIRM' => 'Questo dipendente è anche un utente. Eliminando il record del dipendente verrà eliminato anche il record dell´utente, e l´utente non sarà più in grado di accedere all´applicativo. Vuoi procedere ugualmente con l´eliminazione di questo record?',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Sei sicuro di voler eliminare questo dipendente?',
  'LBL_ONLY_ACTIVE' => 'Dipendenti attivi',
	'LBL_SELECT' => 'Seleziona' /*for 508 compliance fix*/,
  'LBL_AUTHENTICATE_ID' => 'ID Autenticazione',
  'LBL_EXT_AUTHENTICATE' => 'Autenticazione Esterna',
  'LBL_GROUP_USER' => 'Gruppo Utenti',
  'LBL_LIST_ACCEPT_STATUS' => 'Accetta Stato',
  'LBL_MODIFIED_BY' =>'Modificato Da',
  'LBL_MODIFIED_BY_ID' =>'Modificato Da Id',
  'LBL_CREATED_BY_NAME' => 'Creato Da', //bug48978
  'LBL_PORTAL_ONLY_USER' => 'Utente del portale API',
  'LBL_PSW_MODIFIED' => 'Ultima Password Cambiata',
  'LBL_SHOW_ON_EMPLOYEES' => 'Mostra Record Dipendenti',
  'LBL_USER_HASH' => 'Password',
  'LBL_SYSTEM_GENERATED_PASSWORD' =>'Password Generate dal Sistema',
  'LBL_DESCRIPTION'	=> 'Descrizione',
  'LBL_FAX_PHONE'						=> 'Fax',
  'LBL_STATUS'						=> 'Stato',
  'LBL_ADDRESS_CITY'					=> 'Indirizzo, Comune',
  'LBL_ADDRESS_COUNTRY'				=> 'Indirizzo, Nazione',
  'LBL_ADDRESS_INFORMATION'			=> 'Indirizzo',
  'LBL_ADDRESS_POSTALCODE'			=> 'Indirizzo, CAP',
  'LBL_ADDRESS_STATE'					=> 'Indirizzo, Provincia',
  'LBL_ADDRESS_STREET'				=> 'Indirizzo, Via',
  
  'LBL_DATE_MODIFIED' => 'Ultima Modifica',
  'LBL_DATE_ENTERED' => 'Data Creazione',
  'LBL_DELETED' => 'Eliminato',

  'LBL_CONTACTS_SYNC' => 'Sincronizzazione contatti',
  'LBL_OAUTH_TOKENS' => 'Token OAuth',
  'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
  'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
  'LBL_ROLES' => 'Ruoli',
  'LBL_SECURITYGROUPS' => 'Gruppi di Sicurezza',
  'LBL_PROSPECT_LIST' => 'Elenco Prospect',

	'LBL_PROJECT_TEMPLATES' => 'Modelli di Progetto',
	'LBL_BUTTON_SELECT' => 'Seleziona',
  'LBL_BUTTON_CLEAR' => 'Azzera',
);


?>
