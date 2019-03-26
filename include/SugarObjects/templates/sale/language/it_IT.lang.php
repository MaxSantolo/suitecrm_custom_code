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
    'LBL_MODULE_NAME' => 'Vendita',
    'LBL_MODULE_TITLE' => 'Vendite: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Vendita',
    'LBL_VIEW_FORM_TITLE' => 'Visualizza Vendita',
    'LBL_LIST_FORM_TITLE' => 'Elenco Vendite',
    'LBL_SALE_NAME' => 'Nome Vendita:',
    'LBL_SALE' => 'Vendita:',
    'LBL_NAME' => 'Nome Vendita',
    'LBL_LIST_SALE_NAME' => 'Nome',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_LIST_AMOUNT' => 'Importo',
    'LBL_LIST_DATE_CLOSED' => 'Chiudi',
    'LBL_LIST_SALE_STAGE' => 'Fase di Vendita',
    'LBL_ACCOUNT_ID' => 'ID Azienda',
    'LBL_CURRENCY_ID' => 'ID Valuta',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
    //END DON'T CONVERT
    'LBL_ACCOUNT_NAME' => 'Nome Azienda:',
    'LBL_AMOUNT' => 'Importo:',
    'LBL_AMOUNT_USDOLLAR' => 'Importo in USD:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Data Chiusura Prevista:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_CAMPAIGN' => 'Campagna:',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Lead',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Progetti',
    'LBL_NEXT_STEP' => 'Prossimo Passo:',
    'LBL_LEAD_SOURCE' => 'Fonte del Lead:',
    'LBL_SALES_STAGE' => 'Fase di Vendita:',
    'LBL_PROBABILITY' => 'Probabilità (%):',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_DUPLICATE' => 'Possibile Vendita Duplicata',
    'MSG_DUPLICATE' => 'La vendita che stai creando potrebbe generare un duplicato di una vendita già esistente. I record delle vendite che contengono nomi simili sono elencate qui sotto.<br>Cliccare Salva per continuare con la creazione di questa nuova Vendita oppure clicca Annulla per tornare al modulo senza creare la vendita.',
    'LBL_NEW_FORM_TITLE' => 'Nuova Vendita',
    'LNK_NEW_SALE' => 'Nuova Vendita',
    'LNK_SALE_LIST' => 'Vendita',
    'ERR_DELETE_RECORD' => 'Per eliminare la vendita deve essere specificato il numero del record. ',
    'LBL_TOP_SALES' => 'Le mie migliori vendite aperte',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Sei sicuro di voler eliminare questo contatto dalla vendita?',
    'SALE_REMOVE_PROJECT_CONFIRM' => 'Sei sicuro di voler eliminare questa vendita dal progetto?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Vendita',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
    'LBL_RAW_AMOUNT' => 'Importo Approssimativo',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_ASSIGNED_TO_NAME' => 'Utente',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utente Assegnato',
    'LBL_MY_CLOSED_SALES' => 'Le mie vendite chiuse',
    'LBL_TOTAL_SALES' => 'Vendite Totali',
    'LBL_CLOSED_WON_SALES' => 'Vendite Chiuse Vinte',
    'LBL_ASSIGNED_TO_ID' => 'Assegnato a ID',
    'LBL_CREATED_ID' => 'Creato da ID',
    'LBL_MODIFIED_ID' => 'Modificato da ID',
    'LBL_MODIFIED_NAME' => 'Modificato da Nome Utente',
    'LBL_SALE_INFORMATION' => 'Informazioni Vendita',
    'LBL_CURRENCY_NAME' => 'Nome Valuta',
    'LBL_CURRENCY_SYMBOL' => 'Simbolo Valuta',
    'LBL_EDIT_BUTTON' => 'Modifica',
    'LBL_REMOVE' => 'Cancella',

);
