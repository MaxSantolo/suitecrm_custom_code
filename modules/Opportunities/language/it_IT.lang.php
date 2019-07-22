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
    'LBL_MODULE_NAME' => 'Opportunità',
    'LBL_MODULE_TITLE' => 'Opportunità: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Opportunità',
    'LBL_VIEW_FORM_TITLE' => 'Vista Opportunità',
    'LBL_LIST_FORM_TITLE' => 'Elenco Opportunità',
    'LBL_OPPORTUNITY_NAME' => 'Nome Opportunità:',
    'LBL_OPPORTUNITY' => 'Opportunità:',
    'LBL_NAME' => 'Nome Opportunità',
    'LBL_INVITEE' => 'Contatti',
    'LBL_CURRENCIES' => 'Valute',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nome',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_LIST_AMOUNT' => 'Importo Opportunità',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Importo',
    'LBL_LIST_DATE_CLOSED' => 'Chiusa',
    'LBL_LIST_SALES_STAGE' => 'Fase di Vendita',
    'LBL_ACCOUNT_ID' => 'ID Azienda',
    'LBL_CURRENCY_ID' => 'ID Valuta',
    'LBL_CURRENCY_NAME' => 'Nome Valuta',
    'LBL_CURRENCY_SYMBOL' => 'Simbolo Valuta',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Aggiornamento Opportunità - Valuta',
    'LBL_ACCOUNT_NAME' => 'Nome Azienda:',
    'LBL_AMOUNT' => 'Importo Opportunità:',
    'LBL_AMOUNT_USDOLLAR' => 'Importo:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Data Chiusura Prevista:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_CAMPAIGN' => 'Campagna:',
    'LBL_NEXT_STEP' => 'Prossimo Passo:',
    'LBL_LEAD_SOURCE' => 'Fonte del Lead:',
    'LBL_SALES_STAGE' => 'Fase di Vendita:',
    'LBL_PROBABILITY' => 'Probabilità (%):',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_DUPLICATE' => 'Possibile Duplicato dell´Opportunità',
    'MSG_DUPLICATE' => 'L´opportunità che stai creando potrebbe generare un duplicato. L´opportunità ha un nome simile rispetto a quelle elencate qui sotto..<br>Clicca Salva per continuare con la creazione di questa nuova opportunità, o clicca Annulla per ritornare al modulo senza creare l´opportunità.',
    'LBL_NEW_FORM_TITLE' => 'Nuova Opportunità',
    'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
    'LNK_OPPORTUNITY_LIST' => 'Visualizza Opportunità',
    'ERR_DELETE_RECORD' => 'Per eliminare questa opportunità deve essere specificato un numero del record.',
    'LBL_TOP_OPPORTUNITIES' => 'Le mie 10 migliori Opportunità',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Sei sicuro di rimuovere questa opportunità dal progetto?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Opportunità',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Lead',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenti',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Progetti',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utente Assegnato',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Le mie Oppurtunità Chiuse',
    'LBL_TOTAL_OPPORTUNITIES' => 'Totale Oppurtunità',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oppurtunità Chiuse Vinte',
    'LBL_ASSIGNED_TO_ID' => 'Utente Assegnato:',
    'LBL_CREATED_ID' => 'Creato da ID',
    'LBL_MODIFIED_ID' => 'Modificato da ID',
    'LBL_MODIFIED_NAME' => 'Modificato da Nome Utente',
    'LBL_CREATED_USER' => 'Utente Creato',
    'LBL_MODIFIED_USER' => 'Utente Modificato',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campagne',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Progetti',
    'LABEL_PANEL_ASSIGNMENT' => 'Assegnazione',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importa Oppurtunità',
    'LBL_EDITLAYOUT' => 'Modifica Layout' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Contratti',
    'LBL_AOS_QUOTES' => 'Preventivi',
);

?>
