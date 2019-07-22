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
    'LBL_MODULE_NAME' => 'Obiettivi',
    'LBL_MODULE_ID' => 'Obiettivi',
    'LBL_INVITEE' => 'Dipende da',
    'LBL_MODULE_TITLE' => 'Obiettivi: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Obiettivo',
    'LBL_LIST_FORM_TITLE' => 'Elenco Obiettivi',
    'LBL_NEW_FORM_TITLE' => 'Crea Obiettivo',
    'LBL_PROSPECT' => 'Obiettivo:',
    'LBL_BUSINESSCARD' => 'Biglietto da Visita',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_LAST_NAME' => 'Cognome',
    'LBL_LIST_PROSPECT_NAME' => 'Nome Obiettivo',
    'LBL_LIST_TITLE' => 'Funzione',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emails',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Altra Email',
    'LBL_LIST_PHONE' => 'Telefono',
    'LBL_LIST_PROSPECT_ROLE' => 'Ruolo',
    'LBL_LIST_FIRST_NAME' => 'Nome',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
    'LBL_ASSIGNED_TO_ID' => 'Assegnato a:',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_first_name' => 'LBL_LIST_FIRST_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_title' => 'LBL_LIST_TITLE', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS', //DON'T CONVERT THESE THEY ARE MAPPINGS
//END DON'T CONVERT
    'LBL_CAMPAIGN_ID' => 'ID Campagna',
    'LBL_EXISTING_ACCOUNT' => 'Usata un´azienda esistente',
    'LBL_CREATED_ACCOUNT' => 'Creata una nuova azienda',
    'LBL_CREATED_CALL' => 'Creata una nuova chiamata',
    'LBL_CREATED_MEETING' => 'Creata una nuova riunione',
    'LBL_ADDMORE_BUSINESSCARD' => 'Aggiungi un altro biglietto da visita',
    'LBL_ADD_BUSINESSCARD' => 'Inserisci Biglietto da Visita',
    'LBL_NAME' => 'Nome completo:',
    'LBL_FULL_NAME' => 'Nome',
    'LBL_PROSPECT_NAME' => 'Nome Obiettivo:',
    'LBL_PROSPECT_INFORMATION' => 'Informazioni', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_MORE_INFORMATION' => 'Ulteriori informazioni',
    'LBL_FIRST_NAME' => 'Nome:',
    'LBL_OFFICE_PHONE' => 'Telefono Ufficio:',
    'LBL_ANY_PHONE' => 'Altro Telefono:',
    'LBL_PHONE' => 'Telefono:',
    'LBL_LAST_NAME' => 'Cognome:',
    'LBL_MOBILE_PHONE' => 'Telefono Cellulare:',
    'LBL_HOME_PHONE' => 'Pagina iniziale:',
    'LBL_OTHER_PHONE' => 'Altro Telefono:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Indirizzo Primario, Via:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Indirizzo Primario, Comune:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Indirizzo Primario, Nazione:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Indirizzo Primario, Provincia:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Indirizzo Primario, CAP:',
    'LBL_ALT_ADDRESS_STREET' => 'Indirizzo Alternativo, Via:',
    'LBL_ALT_ADDRESS_CITY' => 'Indirizzo Alternativo, Comune:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Indirizzo Alternativo, Nazione:',
    'LBL_ALT_ADDRESS_STATE' => 'Indirizzo Alternativo, Provincia:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Indirizzo Alternativo, CAP:',
    'LBL_TITLE' => 'Funzione:',
    'LBL_DEPARTMENT' => 'Divisione:',
    'LBL_BIRTHDATE' => 'Data di nascita:',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Altra Email:',
    'LBL_ANY_EMAIL' => 'Email alternativa:',
    'LBL_ASSISTANT' => 'Assistente:',
    'LBL_ASSISTANT_PHONE' => 'Telefono Assistente:',
    'LBL_DO_NOT_CALL' => 'Non chiamare:',
    'LBL_EMAIL_OPT_OUT' => 'Non vuole ricevere email:',
    'LBL_PRIMARY_ADDRESS' => 'Indirizzo principale:',
    'LBL_ALTERNATE_ADDRESS' => 'Altro Indirizzo:',
    'LBL_ANY_ADDRESS' => 'Altro Indirizzo:',
    'LBL_CITY' => 'Comune :',
    'LBL_STATE' => 'Provincia:', //For address fields
    'LBL_POSTAL_CODE' => 'CAP:',
    'LBL_COUNTRY' => 'Nazione:',
    'LBL_DESCRIPTION_INFORMATION' => 'Descrizione',
    'LBL_ADDRESS_INFORMATION' => 'Indirizzo',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_OPP_NAME' => 'Nome Opportunità:',
    'LBL_IMPORT_VCARD' => 'Importa vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Crea automaticamente un nuovo contatto importando una vCard dal tuo computer.',
    'LBL_DUPLICATE' => 'Possibile Obiettivo Duplicato',
    'MSG_SHOW_DUPLICATES' => 'L´obiettivo che stai per creare potrebbe generare un duplicato. L´obiettivo contiene un nome simile e/o indirizzi email elencati qui sotto. Clicca Salva per continuazione con la creazione di questo nuovo obiettivo oppure clicca Annulla per tornare al modulo senza creare l´obiettivo.',
    'MSG_DUPLICATE' => 'L´obiettivo che stai per creare potrebbe generare un duplicato. L´obiettivo contiene un nome simile e/o indirizzi email elencati qui sotto.<br>Clicca Salva per continuazione con la creazione di questo nuovo obiettivo oppure clicca Annulla per tornare al modulo senza creare l´obiettivo.',
    'LNK_IMPORT_VCARD' => 'Crea da vCard',
    'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
    'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
    'LNK_NEW_CASE' => 'Nuovo Reclamo',
    'LNK_NEW_NOTE' => 'Nuova Nota o Allegato',
    'LNK_NEW_CALL' => 'Schedula chiamata',
    'LNK_NEW_EMAIL' => 'Archivia Email',
    'LNK_NEW_MEETING' => 'Schedula riunione',
    'LNK_NEW_TASK' => 'Nuovo Compito',
    'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
    'LNK_IMPORT_PROSPECTS' => 'Importa Obiettivi',
    'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record?',
    'NTC_REMOVE_CONFIRMATION' => 'Sei sicuro di voler eliminare il contatto da questo reclamo?',
    'ERR_DELETE_RECORD' => 'Per eliminare il contatto deve essere specificato il numero del record.',
    'LBL_SALUTATION' => 'Titolo',
    'LBL_SAVE_PROSPECT' => 'Salva Obiettivo',
    'LBL_CREATED_OPPORTUNITY' => 'Creata una nuova opportunità',
    'LNK_SELECT_ACCOUNT' => "Seleziona Azienda",
    'LNK_NEW_PROSPECT' => 'Nuovo Obiettivo',
    'LNK_PROSPECT_LIST' => 'Visualizza Obiettivi',
    'LNK_NEW_CAMPAIGN' => 'Nuova Campagna',
    'LNK_CAMPAIGN_LIST' => 'Campagne',
    'LNK_NEW_PROSPECT_LIST' => 'Nuova Lista Obiettivi',
    'LNK_PROSPECT_LIST_LIST' => 'Liste Obiettivi',
    'LNK_IMPORT_PROSPECT' => 'Importa Obiettivi',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Scegli Obiettivi Selezionati',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Scegli Obiettivi Selezionati',
    'LBL_INVALID_EMAIL' => 'Email non valida:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Obiettivi',
    'LBL_PROSPECT_LIST' => 'Elenco Prospect',
    'LBL_CONVERT_BUTTON_TITLE' => 'Converti Obiettivo',
    'LBL_CONVERT_BUTTON_LABEL' => 'Converti Obiettivo',
    'LNK_NEW_CONTACT' => 'Nuovo Contatto',
    'LBL_CREATED_CONTACT' => "Creato un nuovo contatto",
    'LBL_CAMPAIGNS' => 'Campagne',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Log Campagna',
    'LBL_TRACKER_KEY' => 'Chiave Tracker',
    'LBL_LEAD_ID' => 'ID Lead',
    'LBL_CONVERTED_LEAD' => 'Lead Convertito',
    'LBL_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_EDIT_ACCOUNT_NAME' => 'Nome Azienda:',
    'LBL_CREATED_USER' => 'Utente Creato',
    'LBL_MODIFIED_USER' => 'Utente Modificato',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Eventi',
);
?>
