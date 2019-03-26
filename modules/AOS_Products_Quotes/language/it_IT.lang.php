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
    'LBL_NAME' => 'Nome',
    'LBL_NUMBER' => 'Numero', //PR 3296
    'LBL_CREATED_USER' => 'Creato da utente',
    'LBL_MODIFIED_USER' => 'Modificato da Utente',
    'LBL_LIST_FORM_TITLE' => 'Elenco Listini',
    'LBL_MODULE_NAME' => 'Listino',
    'LBL_MODULE_TITLE' => 'Listino',
    'LBL_HOMEPAGE_TITLE' => 'I Miei Listini',
    'LNK_NEW_RECORD' => 'Nuovo Listino',
    'LNK_LIST' => 'Listino',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca riga prodotto',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vedi log cambiamenti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_AOS_PRODUCTS_SUBPANEL_TITLE' => 'Listino',
    'LBL_NEW_FORM_TITLE' => 'Nuovo servizio',
    'LBL_PRODUCT_NAME' => 'Nome',
    'LBL_PRODUCT_NUMBER' => 'Numero', //PR 3296
    'LBL_PRODUCT_QTY' => 'Quantità',
    'LBL_PRODUCT_COST_PRICE' => 'Prezzo di Costo',
    'LBL_PRODUCT_LIST_PRICE' => 'Prezzo di Listino',
    'LBL_PRODUCT_UNIT_PRICE' => 'Prezzo Unitario',
    'LBL_PRODUCT_DISCOUNT' => 'Sconto',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'Importo sconto',
    'LBL_PART_NUMBER' => 'Codice',
    'LBL_PRODUCT_DESCRIPTION' => 'Descrizione',
    'LBL_DISCOUNT' => 'Tipologia sconto',
    'LBL_VAT_AMT' => 'Importo IVA',
    'LBL_VAT' => 'IVA',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Prezzo Totale',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'Quote' => '',
    'LBL_AOS_PRODUCTS_QUOTES_SUBPANEL_TITLE' => 'Listino',
    'LBL_FLEX_RELATE' => 'In relazione a',
    'LBL_PRODUCT' => 'Prodotto',

    'LBL_SERVICE_MODULE_NAME' => 'Servizi',
    'LBL_SERVICE_NUMBER' => 'Numero', //PR 3296
    'LBL_LIST_NUM' => 'Num',
    'LBL_PARENT_ID' => 'ID Padre',
    'LBL_GROUP_NAME' => 'Gruppo',
	'LBL_GROUP_DESCRIPTION' => 'Descrizione', //PR 3296
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Prezzo di Costo (Valuta Standard)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Prezzo di Listino (Valuta Standard)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Prezzo Unitario (Valuta Standard)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Prezzo Totale (Valuta Standard)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'Sconto (Valuta Standard)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Importo Sconto (Valuta Standard)',
    'LBL_VAT_AMT_USDOLLAR' => 'Importo IVA (Valuta Standard)',
    'LBL_PRODUCTS_SERVICES' => 'Prodotto / Servizio',
    'LBL_CONTRACT_ACCOUNT' => 'Contratti',
    'LBL_PRODUCT_ID' => 'ID Prodotto:',

    'LBL_AOS_CONTRACTS' => 'Contratti',
    'LBL_AOS_INVOICES' => 'Fatture',
    'LBL_AOS_PRODUCTS' => 'Prodotti',
    'LBL_AOS_QUOTES' => 'Preventivi',
);
?>
