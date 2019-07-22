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
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a Utente',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data Creazione',
    'LBL_DATE_MODIFIED' => 'Ultima Modifica',
    'LBL_MODIFIED' => 'Modificato Da',
    'LBL_MODIFIED_ID' => 'Modificato Da Id',
    'LBL_MODIFIED_NAME' => 'Modificato Da Name',
    'LBL_CREATED' => 'Inserito da ',
    'LBL_CREATED_ID' => 'Inserito da Id',
    'LBL_DESCRIPTION' => 'Descrizione',
    'LBL_DELETED' => 'Cancellato',
    'LBL_NAME' => 'Titolo',
    'LBL_CREATED_USER' => 'Inserito da Utente',
    'LBL_MODIFIED_USER' => 'Modificato da Utente',
    'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Rimuovere questa azienda dal progetto?',
    'ERR_DELETE_RECORD' => 'Deve essere specificato un numero di record per cancellare l\'azienda.',
    'LBL_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_ACCOUNT' => 'Azienda:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_ADDRESS_INFORMATION' => 'Informazioni sull´indirizzo',
    'LBL_ANNUAL_REVENUE' => 'Ricavo annuo:',
    'LBL_ANY_ADDRESS' => 'Qualsiasi Indirizzo:',
    'LBL_ANY_EMAIL' => 'Qualsiasi Email:',
    'LBL_ANY_PHONE' => 'Qualsiasi numero di telefono:',
    'LBL_RATING' => 'Valutazione',
    'LBL_ASSIGNED_USER' => 'Utente',
    'LBL_BILLING_ADDRESS_CITY' => 'Fatturazione, Ciatt&agrave:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fatturazione, Paese:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fatturazione, C.A.P.:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fatturazione, Provincia:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Fatturazione, Indirizzo 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Fatturazione, Indirizzo 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Fatturazione, Indirizzo 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Fatturazione, Indirizzo:',
    'LBL_BILLING_ADDRESS' => 'Indirizzo Fatturazione:',
    'LBL_ACCOUNT_INFORMATION' => 'Informazioni Nota',
    'LBL_CITY' => 'Città:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_COUNTRY' => 'Paese:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Aziende',
    'LBL_DESCRIPTION_INFORMATION' => 'Descrizione',
    'LBL_DUPLICATE' => 'Possibile Azienda Duplicata',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Addetti:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industria:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_LIST_CITY' => 'Citt&agrave',
    'LBL_LIST_EMAIL_ADDRESS' => 'Indirizzo Email',
    'LBL_LIST_PHONE' => 'Telefono',
    'LBL_LIST_STATE' => 'Stato/Provincia',
    'LBL_LIST_WEBSITE' => 'Sito internet',
    'LBL_MEMBER_OF' => 'Membro di:',
    'LBL_MEMBER_ORG_FORM_TITLE' => 'Membro Organizzazione',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Membri Organizzazioni',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Altro indirizzo Email:',
    'LBL_OTHER_PHONE' => 'Altro Telefono:',
    'LBL_OWNERSHIP' => 'Proprietà:',
    'LBL_PARENT_ACCOUNT_ID' => 'Azienda Padre ID',
    'LBL_PHONE_ALT' => 'Telefono Alternativo:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Telefono Ufficio:',
    'LBL_PHONE' => 'Telefono:',
    'LBL_POSTAL_CODE' => 'CAP:',
    'LBL_PUSH_BILLING' => 'Spingi Fatturazione',
    'LBL_PUSH_SHIPPING' => 'Spingi Spedizione',
    'LBL_SAVE_ACCOUNT' => 'Salva Azienda',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Spedizione, Citt&agrave:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Spedizione, Paese:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Spedizione, C.A.P.:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Spedizione, Stato/Provincia:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Spedizione, Indirizzo 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Spedizione, Indirizzo 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Spedizione, Indirizzo 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Spedizione, Indirizzo:',
    'LBL_SHIPPING_ADDRESS' => 'Indirizzo di Spedizione:',
    'LBL_STATE' => 'Provincia:', //For address fields
    'LBL_TEAMS_LINK' => 'Gruppi',
    'LBL_TICKER_SYMBOL' => 'Simbolo Ticker:',
    'LBL_TYPE' => 'Tipologia:',
    'LBL_USERS_ASSIGNED_LINK' => 'Assegnato a Utente',
    'LBL_USERS_CREATED_LINK' => 'Creato da Utente',
    'LBL_USERS_MODIFIED_LINK' => 'Modificato da Utente',
    'LBL_VIEW_FORM_TITLE' => 'Azienda',
    'LBL_WEBSITE' => 'Sito internet:',
    'LNK_ACCOUNT_LIST' => 'Aziende',
    'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
    'MSG_DUPLICATE' => 'Creando questa azienda si potrebbe generate un duplicate. Seleziona una azienda dall\'elenco oppure clicca su salva per continuare a creare una nuova azienda con le informazioni inserite.',
    'MSG_SHOW_DUPLICATES' => 'Creando questa azienda si potrebbe generate un duplicate. Clicca su salva per continuare a creare una nuova azienda con le informazioni inserite oppure su clicca su Annulla.',
    'NTC_COPY_BILLING_ADDRESS' => 'Copia indirizzo fatturazione in indirizzo spedizione',
    'NTC_COPY_BILLING_ADDRESS2' => 'Copia su indirizzo spedizione',
    'NTC_COPY_SHIPPING_ADDRESS' => 'Copia indirizzo spedizione in indirizzo fatturazione',
    'NTC_COPY_SHIPPING_ADDRESS2' => 'Copia su indirizzo fatturazione',
    'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler cancellare questa registrazione?',
    'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Cancellare questa Azienda?',
    'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Sei sicuro di voler rimuovere questo record come membro di organizzazione?',
    'LBL_LIST_FORM_TITLE' => 'Elenco fatture',
    'LBL_MODULE_NAME' => 'Fatture',
    'LBL_MODULE_TITLE' => 'Fatture',
    'LBL_HOMEPAGE_TITLE' => 'Le mie Fatture',
    'LNK_NEW_RECORD' => 'Nuova Fattura',
    'LNK_LIST' => 'Fatture',
    'LBL_SEARCH_FORM_TITLE' => 'Ricerca Fatture',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vedi log cambiamenti',
    'LBL_AOS_INVOICES_SUBPANEL_TITLE' => 'Fatture',
    'LBL_NEW_FORM_TITLE' => 'Nuova Fattura',
    'LBL_TERMS_C' => 'Condizioni',
    'LBL_APPROVAL_ISSUE' => 'Approvazione, note',
    'LBL_APPROVAL_STATUS' => 'Stato Approvazione',
    'LBL_BILLING_ACCOUNT' => 'Azienda',
    'LBL_BILLING_CONTACT' => 'Contatto',
    'LBL_EXPIRATION' => 'Valido fino al',
    'LBL_INVOICE_NUMBER' => 'Fattura Numero',
    'LBL_OPPORTUNITY' => 'Nome Opportunit&agrave',
    'LBL_SHIPPING_ACCOUNT' => 'Trasportatore',
    'LBL_TEMPLATE_DDOWN_C' => 'Modello Fattura',
    'LBL_SHIPPING_CONTACT' => 'Trasportatore, Contatto',
    'LBL_STAGE' => 'Fase di preventivo',
    'LBL_TERM' => 'Condizioni di pagamento',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotale',
    'LBL_DISCOUNT_AMOUNT' => 'Sconto',
    'LBL_TAX_AMOUNT' => 'Imposte',
    'LBL_SHIPPING_AMOUNT' => 'Spese di Trasporto',
    'LBL_TOTAL_AMT' => 'Totale',
    'VALUE' => 'Titolo',
    'LBL_EMAIL_ADDRESSES' => 'Indirizzi Email',
    'LBL_LINE_ITEMS' => 'Righe',
    'LBL_GRAND_TOTAL' => 'Totale',
    'LBL_QUOTE_NUMBER' => 'Preventivo Numero',
    'LBL_QUOTE_DATE' => 'Data Preventivo',
    'LBL_INVOICE_DATE' => 'Data fattura',
    'LBL_DUE_DATE' => 'Data Prevista',
    'LBL_STATUS' => 'Stato',
    'LBL_INVOICE_STATUS' => 'Stato fattura',
    'LBL_PRODUCT_QUANITY' => 'Quantit&agrave',
    'LBL_PRODUCT_NAME' => 'Prodotto',
    'LBL_PART_NUMBER' => 'Codice',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'LBL_PRODUCT_DESCRIPTION' => 'Descrizione',
    'LBL_LIST_PRICE' => 'Prezzo di vendita',
    'LBL_DISCOUNT_TYPE' => 'Tipologia',
    'LBL_DISCOUNT_AMT' => 'Sconto',
    'LBL_UNIT_PRICE' => 'Unità',
    'LBL_TOTAL_PRICE' => 'Totale',
    'LBL_VAT' => 'IVA', //VAT
    'LBL_VAT_AMT' => 'Totale Imposte', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Aggiungi riga prodotto',
    'LBL_SERVICE_NAME' => 'Servizio',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Prezzo',
    'LBL_SERVICE_DISCOUNT' => 'Sconto',
    'LBL_ADD_SERVICE_LINE' => 'Aggiungi riga servizi ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Cancella',
    'LBL_PRINT_AS_PDF' => 'Stampa in PDF',
    'LBL_EMAIL_INVOICE' => 'Invia fattura per email',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Fattura',
    'LBL_EMAIL_NAME' => 'Fattura per',
    'LBL_NO_TEMPLATE' => 'ERROR\nSeleziona un modelllo modificando la Fattura e selezionando un modello di Fattura\nSe non hai anchor create un model, via al modulo Modelli PDF e crea un nuovo modello',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Imponibile + IVA',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Aggiungi Gruppo',
    'LBL_DELETE_GROUP' => 'Cancella Gruppo',
    'LBL_GROUP_NAME' => 'Nome Gruppo',
    'LBL_GROUP_TOTAL' => 'Totale Gruppo',
    'LBL_SHIPPING_TAX' => 'IVA Spedizione',
    'LBL_SHIPPING_TAX_AMT' => 'Tassa Spedizione',
    'LBL_IMPORT_LINE_ITEMS' => 'Importa riga Prodotto',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotale (valuta predefinita)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Sconto (valuta predefinita)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tassa (valuta predefinita)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Spedizione (valuta predefinita)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Totale (valuta predefinita)',
    'LBL_SHIPPING_TAX_USDOLLAR' => 'Tassa Spedizione (valuta predefinita)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Tassa Spedizione (valuta predefinita)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Totale (valuta predefinita)',
    'LBL_INVOICE_TO' => 'Fattura a',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Gruppi per linea Prodotto',
    'LBL_AOS_PRODUCT_QUOTES' => 'Offerte Prodotto',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Offerte: Fatture',
);
?>
