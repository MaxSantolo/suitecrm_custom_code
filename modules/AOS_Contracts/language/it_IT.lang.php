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
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato A',
    'LBL_CONTRACT_ACCOUNT' => 'Azienda',
    'LBL_OPPORTUNITY' => 'Opportunit&agrave',
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
    'LBL_NAME' => 'Titolo Contratto',
    'LBL_CREATED_USER' => 'Creato da Utente',
    'LBL_MODIFIED_USER' => 'Modificato da Utente',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_FORM_TITLE' => 'Elenco Contratti',
    'LBL_MODULE_NAME' => 'Contratti',
    'LBL_MODULE_TITLE' => 'Contratti',
    'LBL_HOMEPAGE_TITLE' => 'I miei Contratti',
    'LNK_NEW_RECORD' => 'Nuovo Contratto',
    'LNK_LIST' => 'Elenco Contratti',
    'LNK_IMPORT_AOS_CONTRACTS' => 'Importa Contratti',
    'LBL_SEARCH_FORM_TITLE' => 'Ricerca Contratti',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vedi log cambiamenti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_AOS_CONTRACTS_SUBPANEL_TITLE' => 'Contratti',
    'LBL_NEW_FORM_TITLE' => 'Nuovi Contratti',
    'LBL_CONTRACT_NAME' => 'Nome Contratto',
    'LBL_REFERENCE_CODE ' => 'Codice di Riferimento ',
    'LBL_START_DATE' => 'Data Inizio',
    'LBL_END_DATE' => 'Data Fine',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Importo Contratto',
    'LBL_STATUS' => 'Stato',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Data di approvazione Cliente',
    'LBL_COMPANY_SIGNED_DATE' => 'Data di approvazione',
    'LBL_RENEWAL_REMINDER_DATE' => 'Data di avviso per il rinnovo',
    'LBL_CONTRACT_TYPE' => 'Tipologia contratto',
    'LBL_CONTACT' => 'Contatto',
    'LBL_ADD_GROUP' => 'Aggiungi Gruppo',
    'LBL_DELETE_GROUP' => 'Cancella Gruppo',
    'LBL_GROUP_NAME' => 'Nome Gruppo',
    'LBL_GROUP_TOTAL' => 'Totale Gruppo',
    'LBL_PRODUCT_QUANITY' => 'Quantità',
    'LBL_PRODUCT_NAME' => 'Prodotto',
    'LBL_PART_NUMBER' => 'Codice',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'LBL_PRODUCT_DESCRIPTION' => 'Descrizione',
    'LBL_LIST_PRICE' => 'Elenco',
    'LBL_DISCOUNT_TYPE' => 'Tipo',
    'LBL_DISCOUNT_AMT' => 'Sconto',
    'LBL_UNIT_PRICE' => 'Prezzo di Vendita',
    'LBL_TOTAL_PRICE' => 'Totale',
    'LBL_VAT' => 'Tassa',
    'LBL_VAT_AMT' => 'Importo Tassa',
    'LBL_SERVICE_NAME' => 'Servizio',
    'LBL_SERVICE_LIST_PRICE' => 'Elenco',
    'LBL_SERVICE_PRICE' => 'Prezzo di Vendita',
    'LBL_SERVICE_DISCOUNT' => 'Sconto',
    'LBL_LINE_ITEMS' => 'Voci',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotale',
    'LBL_DISCOUNT_AMOUNT' => 'Sconto',
    'LBL_TAX_AMOUNT' => 'Tassa',
    'LBL_SHIPPING_AMOUNT' => 'Spedizione',
    'LBL_TOTAL_AMT' => 'Totale',
    'LBL_GRAND_TOTAL' => 'Totale',
    'LBL_SHIPPING_TAX' => 'Tassa Spedizione',
    'LBL_SHIPPING_TAX_AMT' => 'Tassa Spedizione',
    'LBL_ADD_PRODUCT_LINE' => 'Aggiungi Linea Prodotto ',
    'LBL_ADD_SERVICE_LINE' => 'Aggiungi Linea Servizio ',
    'LBL_PRINT_AS_PDF' => 'Stampa PDF',
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_PDF_NAME' => 'Contratto',
    'LBL_EMAIL_NAME' => 'Contratto per',
    'LBL_NO_TEMPLATE' => 'ERROR\nNessun templates trovato. Se non ci sono template PDF per i Contratti, crearne uno dal modulo PDF templates',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Valore Contratto (valuta predefinita)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotale (valuta predefinita)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Sconto (valuta predefinita)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tassa (valuta predefinita)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Spedizione (valuta predefinita)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Totale (valuta predefinita)',
    'LBL_SHIPPING_TAX_USDOLLAR' => 'Tassa Spedizione (valuta predefinita)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Tassa Spedizione (valuta predefinita)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Totale (valuta predefinita)',

    'LBL_CALL_ID' => 'ID chiamata',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Gruppi per linea Prodotto',
    'LBL_AOS_PRODUCT_QUOTES' => 'Offerte Prodotto',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Offerte: Contratti',
    'LBL_AOS_CONTRACTS' => 'Contratti',
);
?>
