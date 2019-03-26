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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_first_name' => 'LBL_LIST_FIRST_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_title' => 'LBL_LIST_TITLE', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS', //DON'T CONVERT THESE THEY ARE MAPPINGS

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'Per eliminare il lead deve essere specificato il numero del record.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Descrizione Azienda',
    'LBL_ACCOUNT_ID' => 'ID Azienda',
    'LBL_ACCOUNT_NAME' => 'Nome azienda:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_ADD_BUSINESSCARD' => 'Aggiungi Business Card',
    'LBL_ADDRESS_INFORMATION' => 'Indirizzo',
    'LBL_ALT_ADDRESS_CITY' => 'Alt Indirizzo, Comune',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alt Indirizzo, Nazione',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alt Indirizzo, CAP',
    'LBL_ALT_ADDRESS_STATE' => 'Alt Indirizzo, Provincia',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alt Indirizzo, Via (2)',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alt Indirizzo, Via (3)',
    'LBL_ALT_ADDRESS_STREET' => 'Alt Indirizzo, Via',
    'LBL_ALTERNATE_ADDRESS' => 'Altro Indirizzo:',
    'LBL_ALT_ADDRESS' => 'Altro Indirizzo:',
    'LBL_ANY_ADDRESS' => 'Altro Indirizzo:',
    'LBL_ANY_EMAIL' => 'Email alternativa:',
    'LBL_ANY_PHONE' => 'Telefono alternativo:',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
    'LBL_ASSIGNED_TO_ID' => 'Utente Assegnato:',
    'LBL_BUSINESSCARD' => 'Converti Lead',
    'LBL_CITY' => 'Comune:',
    'LBL_CONTACT_ID' => 'ID Contatto',
    'LBL_CONTACT_INFORMATION' => 'Informazioni Lead', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CONTACT_NAME' => 'Nome Lead:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Opportunità-Lead:',
    'LBL_CONTACT_ROLE' => 'Ruolo:',
    'LBL_CONTACT' => 'Lead:',
    'LBL_CONVERTED_ACCOUNT' => 'Azienda Convertita:',
    'LBL_CONVERTED_CONTACT' => 'Contatto Convertito:',
    'LBL_CONVERTED_OPP' => 'Opportunità Convertita:',
    'LBL_CONVERTED' => 'Convertito',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Converti Lead',
    'LBL_CONVERTLEAD' => 'Converti Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Attenzione: Lo stato del Lead che si sta per convertire è "Convertito". Il Contatto e/o l´Azienda potrebbe essere già stata creata da un Lead. Se desideri continuare con la conversione del Lead, clicca Salva. Per tornare indietro al Lead senza convertirlo, clicca Annulla.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Possibile Contatto:',
    'LBL_COUNTRY' => 'Nazione:',
    'LBL_CREATED_NEW' => 'Creato un nuovo',
    'LBL_CREATED_ACCOUNT' => 'Creata una nuova azienda',
    'LBL_CREATED_CALL' => 'Creata una nuova chiamata',
    'LBL_CREATED_CONTACT' => 'Creato un nuovo contatto',
    'LBL_CREATED_MEETING' => 'Creata una nuova riunione',
    'LBL_CREATED_OPPORTUNITY' => 'Creata una nuova opportunità',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Lead',
    'LBL_DEPARTMENT' => 'Divisione:',
    'LBL_DESCRIPTION_INFORMATION' => 'Descrizione',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_DO_NOT_CALL' => 'Non chiamare:',
    'LBL_DUPLICATE' => 'Lead Simili',
    'LBL_EMAIL_ADDRESS' => 'Indirizzo Email:',
    'LBL_EMAIL_OPT_OUT' => 'Non vuole ricevere email:',
    'LBL_EXISTING_ACCOUNT' => 'Usata un´azienda esistente',
    'LBL_EXISTING_CONTACT' => 'Usato un contatto esistente',
    'LBL_EXISTING_OPPORTUNITY' => 'Usata un´opportunità esistente',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Nome:',
    'LBL_FULL_NAME' => 'Nome Completo:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
    'LBL_HOME_PHONE' => 'Telefono Casa:',
    'LBL_IMPORT_VCARD' => 'Importa vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Crea automaticamente un nuovo lead importando una vCard dal tuo computer.',
    'LBL_INVALID_EMAIL' => 'Email non valida:',
    'LBL_INVITEE' => 'Riporta a',
    'LBL_LAST_NAME' => 'Cognome:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descrizione Fonte del Lead:',
    'LBL_LEAD_SOURCE' => 'Fonte del lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accetta Stato',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_LIST_CONTACT_NAME' => 'Nome Lead',
    'LBL_LIST_CONTACT_ROLE' => 'Ruolo',
    'LBL_LIST_DATE_ENTERED' => 'Data Creazione',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emails',
    'LBL_LIST_FIRST_NAME' => 'Nome',
    'LBL_VIEW_FORM_TITLE' => 'Visualizza Lead',
    'LBL_LIST_FORM_TITLE' => 'Elenco Lead',
    'LBL_LIST_LAST_NAME' => 'Cognome',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descrizione Fonte del Lead',
    'LBL_LIST_LEAD_SOURCE' => 'Fonte del Lead',
    'LBL_LIST_MY_LEADS' => 'I miei Lead',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_PHONE' => 'Telefono',
    'LBL_LIST_REFERED_BY' => 'Riferito Da',
    'LBL_LIST_STATUS' => 'Stato',
    'LBL_LIST_TITLE' => 'Funzione',
    'LBL_MOBILE_PHONE' => 'Telefono Cellulare:',
    'LBL_MODULE_NAME' => 'Lead',
    'LBL_MODULE_TITLE' => 'Lead: Home',
    'LBL_NAME' => 'Nome completo:',
    'LBL_NEW_FORM_TITLE' => 'Nuovo Lead',
    'LBL_NEW_PORTAL_PASSWORD' => 'Nuova Password del Portale:',
    'LBL_OFFICE_PHONE' => 'Telefono Ufficio:',
    'LBL_OPP_NAME' => 'Nome Opportunità:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Valore Opportunità:',
    'LBL_OPPORTUNITY_ID' => 'ID Opportunità',
    'LBL_OPPORTUNITY_NAME' => 'Nome Opportunità:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Altra Email:',
    'LBL_OTHER_PHONE' => 'Altro Telefono:',
    'LBL_PHONE' => 'Telefono:',
    'LBL_PORTAL_APP' => 'Applicazione Portale',
    'LBL_PORTAL_INFORMATION' => 'Informazioni Portale',
    'LBL_PORTAL_NAME' => 'Nome Portale:',
    'LBL_POSTAL_CODE' => 'CAP:',
    'LBL_STREET' => 'Indirizzo',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Indirizzo Primario, Comune',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Indirizzo Primario, Nazione',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Indirizzo Primario, CAP',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Indirizzo Primario, Provincia',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Indirizzo Primario, Via (2)',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Indirizzo Primario, Via (3)',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Indirizzo Primario, Via',
    'LBL_PRIMARY_ADDRESS' => 'Indirizzo principale:',
    'LBL_REFERED_BY' => 'Riferito Da:',
    'LBL_REPORTS_TO_ID' => 'Dipende da ID',
    'LBL_REPORTS_TO' => 'Dipende da:',
    'LBL_REPORTS_FROM' => 'Report Da:',
    'LBL_SALUTATION' => 'Titolo',
    'LBL_MODIFIED' => 'Modificato Da',
    'LBL_MODIFIED_ID' => 'Modificato Da Id',
    'LBL_CREATED' => 'Creato Da',
    'LBL_CREATED_ID' => 'Creato Da Id',
    'LBL_SEARCH_FORM_TITLE' => 'Ricerca Lead',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Scegli i Lead selezionati',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Scegli i Lead selezionati',
    'LBL_STATE' => 'Provincia:', //For address fields
    'LBL_STATUS_DESCRIPTION' => 'Descrizione Stato:',
    'LBL_STATUS' => 'Stato:',
    'LBL_TITLE' => 'Funzione:',
    'LNK_IMPORT_VCARD' => 'Crea Lead da vCard',
    'LNK_LEAD_LIST' => 'Visualizza Lead',
    'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
    'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
    'LNK_NEW_CONTACT' => 'Nuovo Contatto',
    'LNK_NEW_LEAD' => 'Nuovo Lead',
    'LNK_NEW_NOTE' => 'Nuova Nota',
    'LNK_NEW_TASK' => 'Nuovo Compito',
    'LNK_NEW_CASE' => 'Nuovo Reclamo',
    'LNK_NEW_CALL' => 'Schedula chiamata',
    'LNK_NEW_MEETING' => 'Schedula riunione',
    'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
    'LNK_SELECT_ACCOUNTS' => '<b>O</b> Seleziona Azienda',
    'LNK_SELECT_CONTACTS' => '<b>O</b> Selezionare Contatto',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Copia indirizzo alternativo in quello primario',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Copia indirizzo primario in quello alternativo',
    'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record ?',
    'NTC_REMOVE_CONFIRMATION' => 'Sei sicuro di voler rimuovere questo lead dal reclamo?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record come rapporto diretto?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagne',
    'LBL_TARGET_OF_CAMPAIGNS' => 'Campagne di Successo',
    'LBL_CAMPAIGN' => 'Campagna:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utene Assegnato',
    'LBL_PROSPECT_LIST' => 'Elenco Prospect',
    'LBL_CAMPAIGN_LEAD' => 'Campagne',
    'LBL_BIRTHDATE' => 'Data di nascita:',
    'LBL_ASSISTANT_PHONE' => 'Telefono Assistente',
    'LBL_ASSISTANT' => 'Assistente',
    'LBL_REGISTRATION' => 'Registrazione',
    'LBL_CREATED_USER' => 'Utente Creato',
    'LBL_MODIFIED_USER' => 'Utente Modificato',
    'LBL_CAMPAIGNS' => 'Campagne',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campagne',
    'LBL_CONVERT_MODULE_NAME' => 'Modulo',
    'LBL_CONVERT_REQUIRED' => 'Richiesto',
    'LBL_CONVERT_SELECT' => 'Permetti Selezione',
    'LBL_CONVERT_COPY' => 'Copia Dati',
    'LBL_CONVERT_EDIT' => 'Modifica',
    'LBL_CONVERT_DELETE' => 'Cancella',
    'LBL_CONVERT_ADD_MODULE' => 'Aggiungi Modulo',
    'LBL_CREATE' => 'Nuovo',
    'LBL_SELECT' => '<b>O</b> Seleziona',
    'LBL_WEBSITE' => 'Sito Web',
    'LNK_IMPORT_LEADS' => 'Importa Lead',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Il modulo per creare un nuovo record in.',
    'LBL_REQUIRED_TIP' => 'I moduli richiesti devono essere creati o selezionati prima che il lead possa essere convertito.',
    'LBL_COPY_TIP' => 'Se selezionati, i campi dal lead saranno copiati in campi con lo stesso nome in record creati recentemente.',
    'LBL_SELECTION_TIP' => 'I moduli che hanno un campo collegato al modulo dei contatti possono essere selezionati piuttosto che creati durante il processo di conversione del lead.',
    'LBL_EDIT_TIP' => 'Modifica il converti layout per questo modulo.',
    'LBL_DELETE_TIP' => 'Rimuovi questo modulo dal converti layout.',

    'LBL_ACTIVITIES_MOVE' => 'Sposta Attività in',
    'LBL_ACTIVITIES_COPY' => 'Copia Attività in',
    'LBL_ACTIVITIES_MOVE_HELP' => "Seleziona il record al quale associare le attività del Lead. Compiti, Chiamate, Riunioni, Note e Email verranno associate ai record selezionati.",
    'LBL_ACTIVITIES_COPY_HELP' => "Seleziona il record per il quale creare delle copie delle attività del Lead. Nuovi compiti, chiamate, riunioni, note verranno create per ciascuno dei record selezionati. Le email saranno collegate ai record selezionati.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID Campagna',
    'LBL_EDITLAYOUT' => 'Modifica Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Inserisci Data' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Caricamento' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Modifica' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Eventi',
    'LBL_WWW' => 'WWW',
);
?>
