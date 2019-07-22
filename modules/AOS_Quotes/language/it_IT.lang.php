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
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data Creazione',
    'LBL_DATE_MODIFIED' => 'Ultima Modifica',
    'LBL_MODIFIED' => 'Modificato Da',
    'LBL_MODIFIED_ID' => 'Modificato Da Id',
    'LBL_MODIFIED_NAME' => 'Modificato Da Name',
    'LBL_CREATED' => 'Creato Da',
    'LBL_CREATED_ID' => 'Creato Da Id',
    'LBL_DESCRIPTION' => 'Descrizione',
    'LBL_DELETED' => 'Cancellato',
    'LBL_NAME' => 'Titolo',
    'LBL_CREATED_USER' => 'Creato da Utente',
    'LBL_MODIFIED_USER' => 'Modificato da Utente',
    'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Sei securo di voler rimuovere questa azienda dal progetto?',
    'ERR_DELETE_RECORD' => 'Deve essere specificato un numero di record per cancellare questa azienda.',
    'LBL_ACCOUNT_NAME' => 'Titolo',
    'LBL_ACCOUNT' => 'Azienda:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_ADDRESS_INFORMATION' => 'Informazioni sull´indirizzo',
    'LBL_ANNUAL_REVENUE' => 'Reddito annuale:',
    'LBL_ANY_ADDRESS' => 'Qualsiasi Indirizzo:',
    'LBL_ANY_EMAIL' => 'Qualsiasi Email:',
    'LBL_ANY_PHONE' => 'Qualsiasi Telefono:',
    'LBL_RATING' => 'Valutazione',
    'LBL_ASSIGNED_USER' => 'Utente',
    'LBL_BILLING_ADDRESS_CITY' => 'Fatturazione, Citt&agrave:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fatturazione, Stato:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fatturazione, C.A.P.:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fatturazione, Provincia/Stato:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Fatturazione, Indirizzo 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Fatturazione, Indirizzo 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Fatturazione, Indirizzo 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Fatturazione, Indirizzo:',
    'LBL_BILLING_ADDRESS' => 'Fatturazione Indirizzo:',
    'LBL_ACCOUNT_INFORMATION' => 'Informazioni Nota',
    'LBL_CITY' => 'Citt&agrave:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_COUNTRY' => 'Stato:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Aziende',
    'LBL_DESCRIPTION_INFORMATION' => 'Descrizione',
    'LBL_DUPLICATE' => 'Possibile Azienda duplicata',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Impiegati:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industria:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_LIST_CITY' => 'Citt&agrave',
    'LBL_LIST_EMAIL_ADDRESS' => 'Indirizzo Email',
    'LBL_LIST_PHONE' => 'Telefono',
    'LBL_LIST_STATE' => 'Provincia',
    'LBL_LIST_WEBSITE' => 'Sito internet',
    'LBL_MEMBER_OF' => 'Membro di:',
    'LBL_MEMBER_ORG_FORM_TITLE' => 'Membri Organizzazioni',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Membri Organizzazioni',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Altro indirizzo Email:',
    'LBL_OTHER_PHONE' => 'Altro Telefono:',
    'LBL_OWNERSHIP' => 'Proprietario:',
    'LBL_PARENT_ACCOUNT_ID' => 'In relazione ad Azienda ID',
    'LBL_PHONE_ALT' => 'Altertativo Telefono:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Telefono Ufficio:',
    'LBL_PDF_NAME' => 'Quotazione',
    'LBL_PHONE' => 'Telefono:',
    'LBL_POSTAL_CODE' => 'C.A.P.:',
    'LBL_PUSH_BILLING' => 'Push Fatturazione',
    'LBL_PUSH_SHIPPING' => 'Push Spedizione',
    'LBL_SAVE_ACCOUNT' => 'Salva Azienda',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Spedizione, Citt&agrave:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Spedizione, Stato:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Spedizione, C.A.P.:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Spedizione, Provincia:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Spedizione, Indirizzo 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Spedizione, Indirizzo 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Spedizione, Indirizzo 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Spedizione, Indirizzo:',
    'LBL_SHIPPING_ADDRESS' => 'Spedizione Indirizzo:',
    'LBL_STATE' => 'Provincia:', //For address fields
    'LBL_TEAMS_LINK' => 'Gruppi',
    'LBL_TICKER_SYMBOL' => 'Ticker:',
    'LBL_TYPE' => 'Tipologia:',
    'LBL_USERS_ASSIGNED_LINK' => 'Assegnato a Utente',
    'LBL_USERS_CREATED_LINK' => 'Creato Da Utente',
    'LBL_USERS_MODIFIED_LINK' => 'Modificato Da Utente',
    'LBL_VIEW_FORM_TITLE' => 'Azienda',
    'LBL_WEBSITE' => 'Sito interntet:',
    'LNK_ACCOUNT_LIST' => 'Aziende',
    'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
    'MSG_DUPLICATE' => 'L\'inserimento di questa Azienda potrebbe generate un duplicato. Puoi selezionare un\'Azienda dall\'elenco o cliccare su Salva per confermare l\'inserimento della nuova Azienda con i dati inseriti.',
    'MSG_SHOW_DUPLICATES' => 'L\'inserimento di questa Azienda potrebbe generate un duplicato. Clicca su Salva per continuare inserendo questa Azienda oppure clicca su Cancella per annullare.',
    'NTC_COPY_BILLING_ADDRESS' => 'Copia indirizzo fatturazione in indirizzo spedizione',
    'NTC_COPY_BILLING_ADDRESS2' => 'Copia in indirizzo spedizione',
    'NTC_COPY_SHIPPING_ADDRESS' => 'Copia indirizzo spedizione in indirizzo fatturazione',
    'NTC_COPY_SHIPPING_ADDRESS2' => 'Copia in indirizzo fatturazione',
    'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler cancellare questa registrazione?',
    'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Sei sicuro di voler rimuovere questa registrazione?',
    'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Sei sicuro di voler cancellare questo recors come membro dell´organizzazione?',
    'LBL_LIST_FORM_TITLE' => 'Elenco Quotazioni',
    'LBL_MODULE_NAME' => 'Quotazioni',
    'LBL_MODULE_TITLE' => 'Quotes: Home',
    'LBL_HOMEPAGE_TITLE' => 'Le mie Quotazioni',
    'LNK_NEW_RECORD' => 'Nuova Offerta',
    'LNK_LIST' => 'Quotazioni',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Quotazioni',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vedi log cambiamenti',
    'LBL_AOS_QUOTES_SUBPANEL_TITLE' => 'Quotazioni',
    'LBL_NEW_FORM_TITLE' => 'Nuovo quotazione',
    'LBL_TERMS_C' => 'Condizioni',
    'LBL_APPROVAL_ISSUE' => 'Approvazione, note',
    'LBL_APPROVAL_STATUS' => 'Stato approvazione',
    'LBL_BILLING_ACCOUNT' => 'Azienda',
    'LBL_BILLING_CONTACT' => 'Contatto',
    'LBL_EXPIRATION' => 'Validit&agrave offerta',
    'LBL_QUOTE_NUMBER' => 'quotazione Numero',
    'LBL_OPPORTUNITY' => 'Nome Opportunit&agrave',
    'LBL_SHIPPING_ACCOUNT' => 'Trasportatore',
    'LBL_TEMPLATE_DDOWN_C' => 'Modello quotazione',
    'LBL_SHIPPING_CONTACT' => 'Contatto Trasportatore',
    'LBL_STAGE' => 'Fase di quotazione',
    'LBL_TERM' => 'Condizioni di Pagamento',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotale',
    'LBL_DISCOUNT_AMOUNT' => 'Sconto',
    'LBL_TAX_AMOUNT' => 'Tasse',
    'LBL_SHIPPING_AMOUNT' => 'Costi di Spedizione',
    'LBL_TOTAL_AMT' => 'Totale',
    'VALUE' => 'Titolo',
    'LBL_EMAIL_ADDRESSES' => 'Indirizzi Email',
    'LBL_LINE_ITEMS' => 'Righe',
    'LBL_GRAND_TOTAL' => 'Totale',
    'LBL_INVOICE_STATUS' => 'Sato Fattura',
    'LBL_PRODUCT_QUANITY' => 'Quantit&agrave',
    'LBL_PRODUCT_NAME' => 'Prodotto',
    'LBL_PRODUCT_NUMBER' => 'Numero', // PR 3296
    'LBL_PART_NUMBER' => 'Codice',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'LBL_PRODUCT_DESCRIPTION' => 'Descrizione',
    'LBL_LIST_PRICE' => 'Prezzo di listino',
    'LBL_DISCOUNT_AMT' => 'Sconto',
    'LBL_DISCOUNT_TYPE' => 'Tipologia',
    'LBL_UNIT_PRICE' => 'Prezzo scontato',
    'LBL_TOTAL_PRICE' => 'Totale netto',
    'LBL_VAT' => 'IVA', //VAT
    'LBL_VAT_AMT' => 'Importo IVA', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Aggiungi servizio',
    'LBL_SERVICE_NAME' => 'Servizio',
    'LBL_SERVICE_NUMBER' => 'Numero', // PR 3296
    'LBL_SERVICE_LIST_PRICE' => 'Prezzo di listino',
    'LBL_SERVICE_PRICE' => 'Prezzo',
    'LBL_SERVICE_DISCOUNT' => 'Sconto',
    'LBL_ADD_SERVICE_LINE' => 'Aggiungi riga servizio',
    'LBL_REMOVE_PRODUCT_LINE' => 'Cancella',
    'LBL_CONVERT_TO_INVOICE' => 'Trasforma in Fattura',
    'LBL_PRINT_AS_PDF' => 'Converti in PDF',
    'LBL_EMAIL_QUOTE' => 'Spedisci quotazione per Email',
    'LBL_CREATE_CONTRACT' => 'Nuovo Contratto',
    'LBL_LIST_NUM' => 'Num',
    'LBL_EMAIL_NAME' => 'Quotazione per ',
    'LBL_QUOTE_DATE' => 'Data Quotazione',
    'LBL_NO_TEMPLATE' => 'ERROR\nSeleziona un modello modificando il quotazione.\nSe non hai ancora create un modello di quotazione, vai al modulo modelli PDF e crea un nuovo modello.',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Imponibile + IVA',//pre shipping
    'LBL_EMAIL_PDF' => 'Invia Pdf via e-mail',
    'LBL_ADD_GROUP' => 'Aggiungi Blocco Servizi',
    'LBL_DELETE_GROUP' => 'Cancella Blocco Servizi',
    'LBL_GROUP_NAME' => 'Nome Gruppo',
    'LBL_GROUP_DESCRIPTION' => 'Group Description', // PR 3296
    'LBL_GROUP_TOTAL' => 'Totale Gruppo',
    'LBL_SHIPPING_TAX' => 'IVA Spedizione',
    'LBL_SHIPPING_TAX_AMT' => 'Tassa Spedizione',
    'LBL_IMPORT_LINE_ITEMS' => 'Importa riga Prodotto',
    'LBL_CREATE_OPPORTUNITY' => 'Nuova Opportunità',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotale (valuta predefinita)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Sconto (valuta predefinita)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tassa (valuta predefinita)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Spedizione (valuta predefinita)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Totale (valuta predefinita)',
    'LBL_SHIPPING_TAX_USDOLLAR' => 'IVA Spedizione (Valuta Standard)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'IVA Spedizione (Valuta Standard)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Totale (valuta predefinita)',
    'LBL_QUOTE_TO' => 'Quotazione Per',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Subtotale + Tassa (valuta predefinita)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Offerte: Contratti',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Offerte: Fatture',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Gruppi per linea Prodotto',
    'LBL_AOS_PRODUCT_QUOTES' => 'Offerte Prodotto',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
);
?>
