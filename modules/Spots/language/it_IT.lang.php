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
    'LBL_ASSIGNED_TO_ID' => 'Id utente assegnato',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a',
    'LBL_SECURITYGROUPS' => 'Gruppi di Sicurezza',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Gruppi di Sicurezza',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data Creazione',
    'LBL_DATE_MODIFIED' => 'Ultima Modifica',
    'LBL_MODIFIED' => 'Modificato da',
    'LBL_MODIFIED_ID' => 'Modificato Da',
    'LBL_MODIFIED_NAME' => 'Modificato Da Name',
    'LBL_CREATED' => 'Creata Da',
    'LBL_CREATED_ID' => 'Creato Da',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_DELETED' => 'Eliminato',
    'LBL_NAME' => 'Nome completo:',
    'LBL_CREATED_USER' => 'Creato dal Utente',
    'LBL_MODIFIED_USER' => 'Utente Modificato',
    'LBL_LIST_NAME' => 'Nome completo:',
    'LBL_EDIT_BUTTON' => 'Modifica',
    'LBL_REMOVE' => 'Cancella',
    'LBL_LIST_FORM_TITLE' => 'Lista Pivot',
    'LBL_MODULE_NAME' => 'Pivot',
    'LBL_MODULE_TITLE' => 'Pivot',
    'LBL_HOMEPAGE_TITLE' => 'Il mio Pivot',
    'LNK_NEW_RECORD' => 'Crea Pivot',
    'LNK_LIST' => 'Vedi Pivot',
    'LNK_IMPORT_PIVOT' => 'Importa Pivot',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Pivot',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vedi log cambiamenti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_PIVOT_SUBPANEL_TITLE' => 'Pivot',
    'LBL_NEW_FORM_TITLE' => 'Nuovo Pivot',
    'LBL_CONFIG' => 'Configura',
    'LBL_TYPE' => 'Area per l\'analisi',
    'LNK_SPOT_LIST' => 'Visualizza Spots',
    'LNK_SPOT_CREATE' => 'Crea Spot',

    //Analytics
    'LBL_AN_AREA_FOR_ANALYSIS' => 'Area per l\'analisi',
    'LBL_AN_CONFIGURATION' => 'Preferenze',
    'LBL_AN_SALES' => 'Vendite',
    'LBL_AN_ACCOUNTS' => 'Aziende',
    'LBL_AN_LEADS' => 'Lead',
    'LBL_AN_SERVICE' => 'Servizio',
    'LBL_AN_MARKETING' => 'Marketing',
    'LBL_AN_MARKETING_ACTIVITY' => 'Attività di marketing',
    'LBL_AN_ACTIVITIES' => 'Attività',
    'LBL_AN_QUOTES' => 'Preventivi',

    'LBL_AN_UNSUPPORTED_DB' => 'Spiacenti, le Suite Spots sono attualmente configurate solo per MySQL e MS SQL',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Nome completo:',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Tipo Azienda',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Settore',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Paese di fatturazione',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Utente Assegnato:',
    'LBL_AN_LEADS_STATUS' => 'Stato',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Fonte del Lead',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Nome Campagna',
    'LBL_AN_LEADS_YEAR' => 'Anno',
    'LBL_AN_LEADS_QUARTER' => 'Trimestre',
    'LBL_AN_LEADS_MONTH' => 'Mese',
    'LBL_AN_LEADS_WEEK' => 'Settimana',
    'LBL_AN_LEADS_DAY' => 'Giorno',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Nome Opportunit&agrave',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Utente Assegnato:',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'Tipo di Opportunità',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Fonte del Lead',
    'LBL_AN_SALES_AMOUNT' => 'Importo',
    'LBL_AN_SALES_STAGE' => 'Fase di Vendita',
    'LBL_AN_SALES_PROBABILITY' => 'Probabilità',
    'LBL_AN_SALES_DATE' => 'Data di vendita',
    'LBL_AN_SALES_QUARTER' => 'Vendite del trimestre',
    'LBL_AN_SALES_MONTH' => 'Vendite del mese',
    'LBL_AN_SALES_WEEK' => 'Vendite della settimana',
    'LBL_AN_SALES_DAY' => 'Vendite giornaliere',
    'LBL_AN_SALES_YEAR' => 'Vendite annuali',
    'LBL_AN_SALES_CAMPAIGN' => 'Campagne',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_AN_SERVICE_STATE' => 'Stato',
    'LBL_AN_SERVICE_STATUS' => 'Stato',
    'LBL_AN_SERVICE_PRIORITY' => 'Priorità',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Giorno creazione',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Settimana creazione',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Mese creazione',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Trimestre creazione',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Anno creazione',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Nome Contatto',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Utente Assegnato:',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Tipo',
    'LBL_AN_ACTIVITIES_NAME' => 'Nome completo:',
    'LBL_AN_ACTIVITIES_STATUS' => 'Stato',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Utente Assegnato:',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Stato',
    'LBL_AN_MARKETING_TYPE' => 'Tipo',
    'LBL_AN_MARKETING_BUDGET' => 'Budget',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Costo previsto',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Entrate Previste',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Nome Opportunit&agrave',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Importo Opportunità',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Fase di opportunità di vendita',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Opportunità assegnata a',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Nome Azienda',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Nome Campagna',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Data Attività',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Tipo Attività',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Tipo Relazione',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'ID correlato',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Nome Opportunit&agrave',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Tipo Opportunità',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Fonte principale di Opportunità',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Fase di opportunità di vendita',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Nome Contatto',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Valore',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Tipo elemento',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Categoria elemento',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Quantità',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Prezzo listino',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Prezzo vendita',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Costo',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Prezzo scontato',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Importo sconto',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Subtotale',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Totale',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Utente Assegnato:',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Data Creazione',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Giorno creazione',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Settimana creazione',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Mese creazione',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Trimestre creazione',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Anno creazione',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Errore nell\'identificazione dell\'etichetta per la sottozona pivot',

    //Added to allow for the UI of the pivot to be language agnostic
    'LBL_RENDERERS_TABLE' =>'Tabella',
    'LBL_RENDERERS_TABLE_BARCHART' =>'Tabella Diagramma a Barre',
    'LBL_RENDERERS_HEATMAP' =>'Mappa a calore',
    'LBL_RENDERERS_ROW_HEATMAP' =>'Riga mappa a calore',
    'LBL_RENDERERS_COL_HEATMAP' =>'Colonna mappa a calore',
    'LBL_RENDERERS_LINE_CHART' =>'Grafico a Linee',
    'LBL_RENDERERS_BAR_CHART' =>'Grafico a Barre',
    'LBL_RENDERERS_STACKED_BAR_CHART' =>'Barre in pila',
    'LBL_RENDERERS_AREA_CHART' =>'Grafico ad area',
    'LBL_RENDERERS_SCATTER_CHART' =>'Grafico a dispersione',

    'LBL_AGGREGATORS_COUNT' => 'Conteggio',
    'LBL_AGGREGATORS_COUNT_UNIQUE_VALUES' => 'Conteggio valori unici',
    'LBL_AGGREGATORS_LIST_UNIQUE_VALUES' => 'Elenco valori univoci',
    'LBL_AGGREGATORS_SUM' => 'Somma',
    'LBL_AGGREGATORS_INTEGER_SUM' => 'Somma di interi',
    'LBL_AGGREGATORS_AVERAGE' => 'Media',
    'LBL_AGGREGATORS_MINIMUM' => 'Minimo',
    'LBL_AGGREGATORS_MAXIMUM' => 'Massimo',
    'LBL_AGGREGATORS_SUM_OVER_SUM' => 'Somma della somma',
    'LBL_AGGREGATORS_80%_UPPER_BOUND' => 'Limite superiore 80%',
    'LBL_AGGREGATORS_80%_LOWER_BOUND' => 'Limite inferiore 80%',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_TOTAL' => 'Somma come frazione del totale',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_ROWS' => 'Somma come frazione di righe',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_COLUMNS' => 'Somma come frazione di colonne',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_TOTAL' => 'Conteggio come frazione del totale',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_ROWS' => 'Conteggio come frazione di righe',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_COLUMNS' => 'Conteggio come frazione di colonne',

    'LBL_LOCALE_STRINGS_RENDER_ERROR' => 'Errore durante il rendering dei risultati della tabella pivot.',
    'LBL_LOCALE_STRINGS_COMPUTING_ERROR' => 'Errore durante il calcolo dei risultati della tabella pivot.',
    'LBL_LOCALE_STRINGS_UI_RENDER_ERROR' => 'Errore durante il rendering dell\'interfaccia utente della Tabella Pivot.',
    'LBL_LOCALE_STRINGS_SELECT_ALL' => 'Seleziona Tutto',
    'LBL_LOCALE_STRINGS_SELECT_NONE' => 'Deseleziona tutto',
    'LBL_LOCALE_STRINGS_TOO_MANY' => '(troppi da elencare)',
    'LBL_LOCALE_STRINGS_FILTER_RESULTS' => 'Filtra risultati',
    'LBL_LOCALE_STRINGS_TOTALS' => 'Totali',
    'LBL_LOCALE_STRINGS_VS' => 'vs',
    'LBL_LOCALE_STRINGS_BY' => 'da',
    'LBL_LOCALE_STRINGS_OK' => 'OK',

    'LBL_ACTIVITIES_CALL'=>'Chiamata',
    'LBL_ACTIVITIES_MEETING'=>'Riunione',
    'LBL_ACTIVITIES_TASK'=>'Compito',
);
