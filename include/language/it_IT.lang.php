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



$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Italian (Italy) - it_IT',
    'moduleList' => array(
        'Home' => 'Pagina iniziale',
        'ResourceCalendar' => 'Calendario delle risorse',
        'Contacts' => 'Contatti',
        'Accounts' => 'Aziende',
        'Alerts' => 'Avvisi',
        'Opportunities' => 'Opportunità',
        'Cases' => 'Reclami',
        'Notes' => 'Note',
        'Calls' => 'Chiamate',
        'TemplateSectionLine' => 'Linea di separazione sezione',
        'Calls_Reschedule' => 'Ripianifica Chiamate',
        'Emails' => 'Email',
        'EAPM' => 'EAPM',
        'Meetings' => 'Riunioni',
        'Tasks' => 'Compiti',
        'Calendar' => 'Calendario',
        'Leads' => 'Lead',
        'Currencies' => 'Valute',
        'Activities' => 'Attività',
        'Bugs' => 'Errori',
        'Feeds' => 'RSS',
        'iFrames' => 'I miei siti',
        'TimePeriods' => 'Archi Temporali',
        'ContractTypes' => 'Tipi Contratto',
        'Schedulers' => 'Schedulatori',
        'Project' => 'Progetti',
        'ProjectTask' => 'Compiti di progetto',
        'Campaigns' => 'Campagne',
        'CampaignLog' => 'Log Campagne',
        'Documents' => 'Documenti',
        'DocumentRevisions' => 'Revisioni Documento',
        'Connectors' => 'Connettori',
        'Roles' => 'Ruoli',
        'Notifications' => 'Notifiche',
        'Sync' => 'Sincr',
        'Users' => 'Utenti',
        'Employees' => 'Dipendenti',
        'Administration' => 'Amministrazione',
        'ACLRoles' => 'Ruoli',
        'InboundEmail' => 'Email in arrivo',
        'Releases' => 'Release',
        'Prospects' => 'Obiettivi',
        'Queues' => 'Code',
        'EmailMarketing' => 'Email Marketing',
        'EmailTemplates' => 'Modelli Email',
        'ProspectLists' => 'Obiettivi - Liste',
        'SavedSearch' => 'Ricerche salvate',
        'UpgradeWizard' => 'Aggiornamento guidato',
        'Trackers' => 'Tracker',
        'TrackerSessions' => 'Sessioni Tracker',
        'TrackerQueries' => 'Query di tracking',
        'FAQ' => 'Domande frequenti',
        'Newsletters' => 'Newsletter',
        'SugarFeed' => 'Feed di SuiteCRM',
        'SugarFavorites' => 'Preferiti',

        'OAuthKeys' => 'Chiavi Consumer OAuth',
        'OAuthTokens' => 'Token OAuth',
    ),

    'moduleListSingular' => array(
        'Home' => 'Pagina iniziale',
        'Dashboard' => 'Pannello di Controllo',
        'Contacts' => 'Contatto',
        'Accounts' => 'Aziende',
        'Opportunities' => 'Opportunità',
        'Cases' => 'Reclami',
        'Notes' => 'Nota',
        'Calls' => 'Chiamate',
        'Emails' => 'Emails',
        'EmailTemplates' => 'Modelli Email',
        'Meetings' => 'Riunioni',
        'Tasks' => 'Compiti',
        'Calendar' => 'Calendario',
        'Leads' => 'Leads',
        'Activities' => 'Attività',
        'Bugs' => 'Errore',
        'KBDocuments' => 'Knowledge Base',
        'Feeds' => 'RSS',
        'iFrames' => 'Il mio portale',
        'TimePeriods' => 'Periodi',
        'Project' => 'Progetti',
        'ProjectTask' => 'Compiti di Progetto',
        'Prospects' => 'Obiettivo',
        'Campaigns' => 'Campagne',
        'Documents' => 'Documenti',
        'Sync' => 'Sincr',
        'Users' => 'Utenti',
        'SugarFavorites' => 'Preferiti di SuiteCRM',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Sì',
        '2' => 'No',
    ),

    //e.g. en francais 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analista',
        'Competitor' => 'Concorrenza',
        'Customer' => 'Cliente',
        'Integrator' => 'Integratore',
        'Investor' => 'Investitore',
        'Partner' => 'Partner',
        'Press' => 'Stampa',
        'Prospect' => 'Prospetto',
        'Reseller' => 'Rivenditore',
        'Other' => 'Altro',
    ),
    //e.g. en espanol 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Tessile',
        'Banking' => 'Banca',
        'Biotechnology' => 'Biotecnologie',
        'Chemicals' => 'Industria Chimica',
        'Communications' => 'Comunicazioni',
        'Construction' => 'Costruzioni',
        'Consulting' => 'Consulenza',
        'Education' => 'Istruzione',
        'Electronics' => 'Informatica - Elettronica',
        'Energy' => 'Energia',
        'Engineering' => 'Ingegneria',
        'Entertainment' => 'Cultura-Stampa',
        'Environmental' => 'Ambiente',
        'Finance' => 'Finanza',
        'Government' => 'Pubblica Amministratione',
        'Healthcare' => 'Sanità',
        'Hospitality' => 'Alberghiero',
        'Insurance' => 'Assicurazione',
        'Machinery' => 'Industria Compon.',
        'Manufacturing' => 'Industria Manifatturiera',
        'Media' => 'Media',
        'Not For Profit' => 'No Profit',
        'Recreation' => 'Ricreazione',
        'Retail' => 'Commercio Retail',
        'Shipping' => 'Trasporti e Logistica',
        'Technology' => 'Tecnologico',
        'Telecommunications' => 'Telecomunicazioni',
        'Transportation' => 'Viaggi e turismo',
        'Utilities' => 'Servizi e utility',
        'Other' => 'Altro',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Chiamata a Freddo',
        'Existing Customer' => 'Cliente Esistente',
        'Self Generated' => 'Autogenerato',
        'Employee' => 'Dipendente',
        'Partner' => 'Partner',
        'Public Relations' => 'Pubbliche Relazioni',
        'Direct Mail' => 'Direct Mailing',
        'Conference' => 'Conferenza',
        'Trade Show' => 'Fiera',
        'Web Site' => 'Sito web',
        'Word of mouth' => 'Passaparola',
        'Email' => 'Emails',
        'Campaign' => 'Campagna',
        'Other' => 'Altro',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Business esistente',
        'New Business' => 'Nuovo affare',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Ritorno',
        'Investment' => 'Investimento',
        'Expected_Revenue' => 'Ritorno atteso',
        'Budget' => 'Budget',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Decisore primario',
        'Business Decision Maker' => 'Decision Maker - business',
        'Business Evaluator' => 'Valutatore - Business',
        'Technical Decision Maker' => 'Decision Maker - Tecnico',
        'Technical Evaluator' => 'Valutatore - Tecnico',
        'Executive Sponsor' => 'Sponsor',
        'Influencer' => 'Esercita Influenza',
        'Other' => 'Altro',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Contatto Primario',
        'Alternate Contact' => 'Contato Alternativo',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => '15 gg',
        'Net 30' => '30 gg',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Qualificazione',
        'Needs Analysis' => 'Analisi Bisogni',
        'Value Proposition' => 'Propos. Valore',
        'Id. Decision Makers' => 'Identificazione dei decisori',
        'Perception Analysis' => 'Analisi Percezione',
        'Proposal/Price Quote' => 'Proposta Economica',
        'Negotiation/Review' => 'Negoziazione/Review',
        'Closed Won' => 'Chiuso Vinto',
        'Closed Lost' => 'Chiuso Perso',
    ),
    'in_total_group_stages' => array(
        'Draft' => 'Bozza',
        'Negotiation' => 'Negoziazione',
        'Delivered' => 'Consegnato',
        'On Hold' => 'In Attesa',
        'Confirmed' => 'Confermato',
        'Closed Accepted' => 'Chiuso Accettato',
        'Closed Lost' => 'Chiuso Perso',
        'Closed Dead' => 'Chiuso Morto',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'Chiamate',
        'Meeting' => 'Riunioni',
        'Task' => 'Compito',
        'Email' => 'Emails',
        'Note' => 'Nota',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Sig.',
        'Ms.' => 'Sig.na',
        'Mrs.' => 'Sig.ra',
        'Dr.' => 'Dott.',
        'Prof.' => 'Prof.',
    ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 minuto prima',
        300 => '5 minuti prima',
        600 => '10 minuti prima',
        900 => '15 minuti prima',
        1800 => '30 minuti prima',
        3600 => '1 ora prima',
        7200 => '2 ore prima',
        10800 => '3 ore prima',
        18000 => '5 ore prima',
        86400 => '1 giorno prima',
    ),

    'task_priority_default' => 'Media',
    'task_priority_dom' => array(
        'High' => 'Alta',
        'Medium' => 'Media',
        'Low' => 'Bassa',
    ),
    'task_status_default' => 'Non Iniziato',
    'task_status_dom' => array(
        'Not Started' => 'Non Iniziato',
        'In Progress' => 'In Corso',
        'Completed' => 'Completato',
        'Pending Input' => 'In attesa di azione',
        'Deferred' => 'Rimandato',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Pianificata',
        'Held' => 'Effettuata',
        'Not Held' => 'Non Effettuata',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Altro',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Pianificata',
        'Held' => 'Effettuata',
        'Not Held' => 'Non Effettuata',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'In entrata',
        'Outbound' => 'In uscita',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Nuovo',
        'Assigned' => 'Assegnato',
        'In Process' => 'In Esecuzione',
        'Converted' => 'Convertito',
        'Recycled' => 'Riciclato',
        'Dead' => 'Perso',
    ),
    'gender_list' => array(
        'male' => 'Maschio',
        'female' => 'Femmina',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Alto',
        'P2' => 'Medio',
        'P3' => 'Basso',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Utente Regolare',
        'Administrator' => 'Amministratore',
    ),
    'user_status_dom' => array(
        'Active' => 'Attivo',
        'Inactive' => 'Non Attivo',
    ),
    'employee_status_dom' => array(
        'Active' => 'Attivo',
        'Terminated' => 'Licenziato',
        'Leave of Absence' => 'In Ferie/Malattia/Licenza',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Alto',
        'Medium' => 'Medio',
        'Low' => 'Basso',
    ),
    'project_task_priority_default' => 'Media',

    'project_task_status_options' => array(
        'Not Started' => 'Non Iniziato',
        'In Progress' => 'In Corso',
        'Completed' => 'Completato',
        'Pending Input' => 'In attesa di azione',
        'Deferred' => 'Rimandato',
    ),
    'project_task_utilization_options' => array(
        '0' => 'Nessuno',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Bozza',
        'In Review' => 'In Revisione',
        'Underway' => 'In corso',
        'On_Hold' => 'In Attesa',
        'Completed' => 'Completato',
    ),
    'project_status_default' => 'Bozza',

    'project_duration_units_dom' => array(
        'Days' => 'Giorni',
        'Hours' => 'Ore',
    ),

    'activity_status_type_dom' => array(
        '' => '--Nessuno--',
        'active' => 'Attiva account di posta elettronica',
        'inactive' => 'Non Attivo',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Aziende',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Azienda',
        'Opportunities' => 'Opportunità',
        'Cases' => 'Reclami',
        'Leads' => 'Leads',
        'Contacts' => 'Contatti', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Errore',
        'Project' => 'Progetti',

        'Prospects' => 'Obiettivo',
        'ProjectTask' => 'Compiti di Progetto',

        'Tasks' => 'Compiti',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Aziende',
        'Contacts' => 'Contatti',
        'Opportunities' => 'Opportunità',
        'Tasks' => 'Compito',
        'Emails' => 'Emails',

        'Bugs' => 'Errore',
        'Project' => 'Progetto',
        'ProjectTask' => 'Compito Progetto',
        'Prospects' => 'Obiettivo',
        'Cases' => 'Reclami',
        'Leads' => 'Leads',

        'Meetings' => 'Riunioni',
        'Calls' => 'Chiamate',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Aziende',
        'Contacts' => 'Contatti',
        'Tasks' => 'Compiti',
        'Opportunities' => 'Opportunità',

        'Bugs' => 'Errore',
        'Cases' => 'Reclami',
        'Leads' => 'Leads',

        'Project' => 'Progetto',
        'ProjectTask' => 'Compito Progetto',

        'Prospects' => 'Obiettivo',

    ),

    'issue_priority_default_key' => 'Media',
    'issue_priority_dom' => array(
        'Urgent' => 'Urgente',
        'High' => 'Alto',
        'Medium' => 'Medio',
        'Low' => 'Basso',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accettato',
        'Duplicate' => 'Duplica',
        'Closed' => 'Chiuso',
        'Out of Date' => 'Scaduto',
        'Invalid' => 'Non valido',
    ),

    'issue_status_default_key' => 'Nuovo',
    'issue_status_dom' => array(
        'New' => 'Nuovo',
        'Assigned' => 'Assegnato',
        'Closed' => 'Chiuso',
        'Pending' => 'In attesa',
        'Rejected' => 'Respinto',
    ),

    'bug_priority_default_key' => 'Media',
    'bug_priority_dom' => array(
        'Urgent' => 'Urgente',
        'High' => 'Alto',
        'Medium' => 'Medio',
        'Low' => 'Basso',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accettato',
        'Duplicate' => 'Duplica',
        'Fixed' => 'Corretto',
        'Out of Date' => 'Scaduto',
        'Invalid' => 'Non valido',
        'Later' => 'Posticipato',
    ),
    'bug_status_default_key' => 'Nuovo',
    'bug_status_dom' => array(
        'New' => 'Nuovo',
        'Assigned' => 'Assegnato',
        'Closed' => 'Chiuso',
        'Pending' => 'In attesa',
        'Rejected' => 'Respinto',
    ),
    'bug_type_default_key' => 'Errore',
    'bug_type_dom' => array(
        'Defect' => 'Difetto',
        'Feature' => 'Funzionalità',
    ),
    'case_type_dom' => array(
        'Administration' => 'Amministrazione',
        'Product' => 'Prodotto',
        'User' => 'Utente',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Interno',
        'Forum' => 'Forum',
        'Web' => 'Web',
        'InboundEmail' => 'Email in arrivo',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Aziende',
        'Activities' => 'Attività',
        'Bugs' => 'Errori',
        'Calendar' => 'Calendario',
        'Calls' => 'Chiamate',
        'Campaigns' => 'Campagne',
        'Cases' => 'Reclami',
        'Contacts' => 'Contatti',
        'Currencies' => 'Valute',
        'Dashboard' => 'Grafici',
        'Documents' => 'Documenti',
        'Emails' => 'Email',
        'Feeds' => 'RSS',
        'Forecasts' => 'Previsioni',
        'Help' => 'Aiuto',
        'Home' => 'Pagina iniziale',
        'Leads' => 'Lead',
        'Meetings' => 'Riunioni',
        'Notes' => 'Note',
        'Opportunities' => 'Opportunità',
        'Outlook Plugin' => 'Plugin Outlook',
        'Projects' => 'Progetti',
        'Quotes' => 'Preventivi',
        'Releases' => 'Release',
        'RSS' => 'RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Aggiornamento',
        'Users' => 'Utenti',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Pianificazione',
        'Active' => 'Attivo',
        'Inactive' => 'Inattivo',
        'Complete' => 'Completa',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Televendite',
        'Mail' => 'Posta',
        'Email' => 'Emails',
        'Print' => 'Stampa',
        'Web' => 'Web',
        'Radio' => 'Radio',
        'Television' => 'Televisione',
        'NewsLetter' => 'Newsletter',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Settimanale',
        'Monthly' => 'Mensile',
        'Quarterly' => 'Trimestrale',
        'Annually' => 'Annuale',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Gennaio',
        '2' => 'Febbraio',
        '3' => 'Marzo',
        '4' => 'Aprile',
        '5' => 'Maggio',
        '6' => 'Giugno',
        '7' => 'Luglio',
        '8' => 'Agosto',
        '9' => 'Settembre',
        '10' => 'Ottobre',
        '11' => 'Novembre',
        '12' => 'Dicembre',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Gen',
        '2' => 'Feb',
        '3' => 'Mar',
        '4' => 'Apr',
        '5' => 'Mag',
        '6' => 'Giu',
        '7' => 'Lug',
        '8' => 'Ago',
        '9' => 'Set',
        '10' => 'Ott',
        '11' => 'Nov',
        '12' => 'Dic',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Domenica',
        '2' => 'Lunedì',
        '3' => 'Martedì',
        '4' => 'Mercoledì',
        '5' => 'Giovedì',
        '6' => 'Venerdì',
        '7' => 'Sabato',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Dom',
        '2' => 'Lun',
        '3' => 'Mar',
        '4' => 'Mer',
        '5' => 'Gio',
        '6' => 'Ven',
        '7' => 'Sab',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'AM',
        'PM' => 'PM',
    ),

    'dom_report_types' => array(
        'tabular' => 'Righe Colonne',
        'summary' => 'Sommario',
        'detailed_summary' => 'Sommario con dettagli',
        'Matrix' => 'Matrice',
    ),

    'dom_email_types' => array(
        'out' => 'Inviato',
        'archived' => 'Archiviato',
        'draft' => 'Bozza',
        'inbound' => 'In entrata',
        'campaign' => 'Campagna',
    ),
    'dom_email_status' => array(
        'archived' => 'Archiviato',
        'closed' => 'Chiuso',
        'draft' => 'Bozza',
        'read' => 'Letto',
        'replied' => 'Risposto',
        'sent' => 'Inviato',
        'send_error' => 'Invio Errore',
        'unread' => 'Non letto',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Archiviato',
    ),

    'dom_email_server_type' => array(
        '' => '--Nessuno--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Nessuno--',
        'createcase' => 'Crea Reclamo',
        'bounce' => 'Gestione Bounce',
    ),
    'dom_email_distribution' => array(
        '' => '--Nessuno--',
        'direct' => 'Assegnazione Diretta',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'Meno Occupato',
    ),
    'dom_email_errors' => array(
        1 => 'Scegli un solo utente con Assegnazione Diretta',
        2 => 'Devi assegnare solo gli oggetti selezionati durante Assegnazione Diretta.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Sì',
        'bool_false' => 'No',
    ),
    'dom_int_bool' => array(
        1 => 'Sì',
        0 => 'No',
    ),
    'dom_switch_bool' => array(
        'on' => 'Sì',
        'off' => 'No',
        '' => '--Nessuno--',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'Cliente di Posta di SuiteCRM',
        'mailto' => 'Mail Client Esterno',
    ),

    'dom_editor_type' => array(
        'none' => 'Sorgente HTML',
        'tinymce' => 'Tiny MCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => '--Nessuno--',
        'html' => 'E-mail HTML',
        'plain' => 'Email di Testo',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Run Time Passato, Non Eseguito',
        'ready' => 'Pronto',
        'in progress' => 'In Corso',
        'failed' => 'Fallito',
        'completed' => 'Completato',
        'no curl' => 'Non Eseguito: cURL non disponibile',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Attivo',
        'Inactive' => 'Non Attivo',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minuti',
        'hour' => 'Ore',
    ),
    'forecast_schedule_status_dom' => array(
        'Active' => 'Attivo',
        'Inactive' => 'Non attivo',
    ),
    'forecast_type_dom' => array(
        'Direct' => 'Diretta',
        'Rollup' => 'Ricalcola',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketing',
        'Knowledege Base' => 'Documentazione di base',
        'Sales' => 'Vendite',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Archiviato',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Materiale di Marketing',
        'Product Brochures' => 'Brochure Prodotto',
        'FAQ' => 'Domande frequenti',
    ),

    'document_status_dom' => array(
        'Active' => 'Attivo',
        'Draft' => 'Bozza',
        'FAQ' => 'Domande frequenti',
        'Expired' => 'Scaduto',
        'Under Review' => 'In Revisione',
        'Pending' => 'In Attesa',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Stampa Unione',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'Contratto di Licenza',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Accetta',
        'decline' => 'Rifiutato',
        'tentative' => 'Accettato con riserva',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Accettato',
        'decline' => 'Rifiutato',
        'tentative' => 'Accettato con riserva',
        'none' => 'Nessuno',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Nessuno',
        'Daily' => 'Giornaliero',
        'Weekly' => 'Settimanale',
        'Monthly' => 'Mensile',
        'Yearly' => 'Annuale',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'giorno(i)',
        'Weekly' => 'settimana(e)',
        'Monthly' => 'mese(i)',
        'Yearly' => 'anno(i)',
    ),

    'duration_dom' => array(
        '' => 'Nessuno',
        '900' => '15 minuti',
        '1800' => '30 minuti',
        '2700' => '45 minuti',
        '3600' => '1 ora',
        '5400' => '1.5 ora',
        '7200' => '2 ore',
        '10800' => '3 ore',
        '21600' => '6 ore',
        '86400' => '1 giorno',
        '172800' => '2 giorni',
        '259200' => '3 giorni',
        '604800' => '1 settimana',
    ),

// deferred
    /*// QUEUES MODULE DOMs
    'queue_type_dom' => array(
        'Users' => 'Users',
        'Mailbox' => 'Mailbox',
    ),
    */
//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Predefinita',
        'seed' => 'Seed',
        'exempt_domain' => 'Lista Soppressi - Per Dominio',
        'exempt_address' => 'Lista Soppressi - Per Indirizzo Email',
        'exempt' => 'Lista Soppressi - Per Id',
        'test' => 'Test',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Attiva',
        'inactive' => 'Inattiva',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Messaggio Inviato/Tentato',
        'send error' => 'Messaggi non consegnati, Altro',
        'invalid email' => 'Messaggi non consegnati, Indirizzo non valido',
        'link' => 'Click sui Link',
        'viewed' => 'Messaggio Letto',
        'removed' => 'Disiscritto',
        'lead' => 'Leads Creati',
        'contact' => 'Contatti Creati',
        'blocked' => 'Bloccata dal dominio',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Contatti',
        'Users' => 'Utenti',
        'Prospects' => 'Obiettivi',
        'Leads' => 'Lead',
        'Accounts' => 'Aziende',
    ),
    'merge_operators_dom' => array(
        'like' => 'Contiene',
        'exact' => 'Esatto',
        'start' => 'Inizia con',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Si',
        'false' => 'No',
        'required' => 'Richiesto',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Disabilitato',
        1 => 'Abilitato',
    ),

    'navigation_paradigms' => array(
        'm' => 'Moduli',
        'gm' => 'Grouppi Moduli',
    ),

    'projects_priority_options' => array(
        'high' => 'Alto',
        'medium' => 'Medio',
        'low' => 'Basso',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Non Iniziato',
        'inprogress' => 'In corso',
        'completed' => 'Completato',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Espandi Legenda',
        'collapselegend' => 'Comprimi Legenda',
        'clickfordrilldown' => 'Click per Drilldown',
        'detailview' => 'Più dettagli...',
        'piechart' => 'Diagramma a torta',
        'groupchart' => 'Diagramma a gruppo',
        'stackedchart' => 'Grafico a Barre Impilate',
        'barchart' => 'Grafico a Barre',
        'horizontalbarchart' => 'Grafico a Barre Orizzontali',
        'linechart' => 'Grafico a Linee',
        'noData' => 'Nessun dato disponibile',
        'print' => 'Stampa',
        'pieWedgeName' => 'Schede',
    ),
    'release_status_dom' => array(
        'Active' => 'Attivo',
        'Inactive' => 'Inattivo',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Virgoletta Singola (&#39;)',
        '"' => 'Doppie Virgolette (&#34;)',
        '' => 'Nessuno',
        'other' => 'Altro:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Altro:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Nuova Finestra (_blank)',
        '_self' => 'Stessa Finestra (_self)',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Manualmente',
        '30' => 'Ogni 30 secondi',
        '60' => 'Ogni minuto',
        '180' => 'Ogni 3 minuti',
        '300' => 'Ogni 5 minuti',
        '600' => 'Ogni 10 minuti',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Mai',
        '30' => 'Ogni 30 secondi',
        '60' => 'Ogni minuto',
        '180' => 'Ogni 3 minuti',
        '300' => 'Ogni 5 minuti',
        '600' => 'Ogni 10 minuti',
    ),
    'date_range_search_dom' => array(
        '=' => 'Uguali',
        'not_equal' => 'Non è uguale a',
        'greater_than' => 'Dopo',
        'less_than' => 'Meno di',
        'last_7_days' => 'Ultimi 7 giorni',
        'next_7_days' => 'Prossimi 7 Giorni',
        'last_30_days' => 'Ultimi 30 Giorni',
        'next_30_days' => 'Prossimi 30 Giorni',
        'last_month' => 'Mese scorso',
        'this_month' => 'Mese Corrente',
        'next_month' => 'Prossimo Mese',
        'last_year' => 'Anno scorso',
        'this_year' => 'Quest´anno',
        'next_year' => 'Anno Successivo',
        'between' => 'E´ tra',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Uguali',
        'not_equal' => 'Non è uguale a',
        'greater_than' => 'Maggiore di',
        'greater_than_equals' => 'Maggire di o Uguale a',
        'less_than' => 'Meno di',
        'less_than_equals' => 'Minore di o Uguale a',
        'between' => 'E´ tra',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Copia',
        'move' => 'Sposta',
        'donothing' => 'Nessuna Operazione',
    ),
);

$app_strings = array(
    'LBL_TEST_SETTINGS'     => 'Impostazioni Test', //PR 3333
    'LBL_TOUR_NEXT' => 'Avanti',
    'LBL_TOUR_SKIP' => 'Salta',
    'LBL_TOUR_BACK' => 'Indietro',
    'LBL_TOUR_CLOSE' => 'Chiudi',
    'LBL_TOUR_TAKE_TOUR' => 'Vai alla presentazione',
    'LBL_MOREDETAIL' => 'Più dettagli' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Modifica' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Visualizza' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Cerca' /*for 508 compliance fix*/,
    'LBL_PROJECT_MINUS' => 'Cancella' /*for 508 compliance fix*/,
    'LBL_PROJECT_PLUS' => 'Aggiungi' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Aggiungi' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Add Email Address' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Nascondi/Mostra' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Elimina' /*for 508 compliance fix*/,
    'LBL_PLUS_INLINE' => 'Aggiungi' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Azzera' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Cancella' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Remove Email Address' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Cancellazione',
    'LBL_ID_FF_INVALID' => 'Reso non valido',
    'LBL_ADD' => 'Aggiungi' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo Azienda' /*for 508 compliance fix*/,
    'LBL_JS_CALENDAR' => 'Calendario' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Connettori Popups',
    'LBL_CLOSEINLINE' => 'Chiudi',
    'LBL_EDITINLINE' => 'Modifica',
    'LBL_VIEWINLINE' => 'Visualizza',
    'LBL_INFOINLINE' => 'Info',
    'LBL_POWERED_BY_SUGARCRM' => 'Basato su SugarCRM',
    'LBL_PRINT' => 'Stampa',
    'LBL_HELP' => 'Aiuto',
    'LBL_ID_FF_SELECT' => 'Seleziona',
    'DEFAULT' => 'Base', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SORT' => 'Tipo',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER' => 'Aggiungi Server...',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Attiva SMTP con SSL o TLS?',
    'LBL_NO_ACTION' => 'Non c\'è nessuna azione con il nome: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Nessuna azione disponibile.',
    'LBL_NO_DATA' => 'Nessun Dato',

    'LBL_ERROR_UNDEFINED_BEHAVIOR' => 'An unexpected error has occurred.', //PR 3669
    'LBL_ERROR_UNHANDLED_VALUE' => 'A value has not been handled correctly which is preventing a process from continuing.', //PR 3669
    'LBL_ERROR_UNUSABLE_VALUE' => 'An unusable value was found which is preventing a process from continuing.', //PR 3669
    'LBL_ERROR_INVALID_TYPE' => 'The type of a value is different than what was expected.', //PR 3669

    'LBL_ROUTING_FLAGGED' => 'set di flag',
    'LBL_NOTIFICATIONS' => 'Notifiche',

    'LBL_ROUTING_TO' => 'a',
    'LBL_ROUTING_TO_ADDRESS' => 'a indirizzo',
    'LBL_ROUTING_WITH_TEMPLATE' => 'con modello',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Attualmente, nel form, hai dei valori nei campi del telefono e indirizzo. Per sovrascrivere questi valori con il telefono/indirizzo dell´azienda che hai selezionata, clicca "OK". Per mantenere i valori attuali, clicca "Annulla".',
    'LBL_DROP_HERE' => '[Trascina Qui]',
    'LBL_EMAIL_ACCOUNTS_EDIT' => 'Modifica',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Imposta valori di default di Gmail',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Nome',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Server della posta in uscita',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE' => 'Mail Transfer Agent (MTA)',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ' => 'Usare autenticazione SMTP?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Password SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Porta SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Server SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL' => 'Usa SSL alla connessione',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Nome Utente SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Predefinito',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Attenzione: mancano nome utente e password dell´account di posta in uscita.',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD' => 'Nome utente SMTP obbligatorio',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD' => 'Password SMTP obbligatoria',
    'LBL_EMAIL_ACCOUNTS_TITLE' => 'Gestione Account Email',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE' => 'Mail Server Protocol di tipo POP3 non sarà supportato nella prossima release. Sarà supportato solo IMAP.',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Imposta gli account di posta per visualizzare le emails in entrata nei tuoi account di posta.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Fornisci informazioni sul server di posta SMTP da utilizzare per le email in uscita negli accounts di posta.',
    'LBL_EMAIL_ADD' => 'Aggiungi indirizzo',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Fatto',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Azzera',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'A:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Ccn:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'To/Cc/Ccn',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST' => 'Nuova Mailing List',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Indirizzo Email',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT' => 'Per ora si può solo modificare il contatto.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Cerca',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME' => 'Nome',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME' => 'Cognome',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS' => 'I miei contatti',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS' => 'La mia Mailing List',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nome',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Nessun indirizzo trovato',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Salva & Aggiungi alla rubrica',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH' => 'Cerca',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Seleziona voci di rubrica',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Rubrica',
    'LBL_EMAIL_REPORTS_TITLE' => 'Report',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON' => SugarThemeRegistry::current()->getImage('icon_email_addressbook', '', null,            null, '.gif', 'Address Book') . ' Indirizzi email',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_addressbook',    'align=absmiddle border=0', 14, 14, '.gif', ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Attenzione! L´account di posta in uscita che stai cercando di eliminare è associato ad un account di posta in entrata già esistente. Sei sicuro di voler continuare?',
    'LBL_EMAIL_ADDRESSES' => 'Indirizzi email',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Indirizzi email',
    'LBL_EMAIL_ADDRESSES_TITLE' => 'Indirizzi email',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Importa in SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Assegnazione',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Allega',
    'LBL_EMAIL_ATTACHMENT' => 'Allega',
    'LBL_EMAIL_ATTACHMENTS' => 'Da Sistema Locale',
    'LBL_EMAIL_ATTACHMENTS2' => 'Dai Documenti SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Modelli di Allegati',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'File',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Documento',
    'LBL_EMAIL_BCC' => 'CCN',
    'LBL_EMAIL_CANCEL' => 'Annulla',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Set di Caratteri',
    'LBL_EMAIL_CHECK' => 'Controlla posta',
    'LBL_EMAIL_CHECKING_NEW' => 'Controllo nuova posta',
    'LBL_EMAIL_CHECKING_DESC' => 'Controllo nuova posta. <br><br>Se è il primo controllo per questo mail account, può impiegare un pò di tempo.',
    'LBL_EMAIL_CLOSE' => 'Chiudi',
    'LBL_EMAIL_COFFEE_BREAK' => 'Controllo nuova posta. <br><br> Un account di posta considerevole potrebbe richiedere molto tempo',
    'LBL_EMAIL_COMMON' => 'Comune',

    'LBL_EMAIL_COMPOSE' => 'Componi Email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Inserisci destinatari per questa email.',
    'LBL_EMAIL_COMPOSE_LINK_TO' => 'Associa con',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'La mail è vuota. Inviare lo stesso?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'La mail non ha oggetto. Inviare lo stesso?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(nessun oggetto)',
    'LBL_EMAIL_COMPOSE_READ' => 'Leggi &amp;amp;amp;amp;amp; Componi Email',
    'LBL_EMAIL_COMPOSE_SEND_FROM' => 'Invia da Account Email',
    'LBL_EMAIL_COMPOSE_OPTIONS' => 'Opzioni',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Inserisci un indirizzo valido per i campi To, CC and BCC',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Abbandonare questa email?',
    'LBL_EMAIL_CONFIRM_DELETE' => 'Rimuovi questi elementi dalla tua rubrica?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Sei sicuro di voler eliminare questa firma?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Mail Inviata',

    'LBL_EMAIL_CREATE_NEW' => '--Crea al Salvataggio--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Multiplo',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Vuoto',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Data Spedizione dal Mittente',
    'LBL_EMAIL_DATE_RECEIVED' => 'Data di Ricezione',
    'LBL_EMAIL_ASSIGNED_TO_USER' => 'Assegnata all´utente',
    'LBL_EMAIL_DATE_TODAY' => 'Oggi',
    'LBL_EMAIL_DATE_YESTERDAY' => 'Ieri',
    'LBL_EMAIL_DD_TEXT' => 'email(s) selezionate.',
    'LBL_EMAIL_DEFAULTS' => 'Predefiniti',
    'LBL_EMAIL_DELETE' => 'Elimina',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Elimina i messaggi selezionati?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Email cancellate con successo.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Sto eliminando i messaggi',
    'LBL_EMAIL_DETAILS' => 'Dettagli',
    'LBL_EMAIL_DISPLAY_MSG' => 'Sto mostrando le email {0} - {1} di {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG' => 'Sto mostrando gli indirizzi email {0} - {1} di {2}',

    'LBL_EMAIL_EDIT_CONTACT' => 'Modifica Contatto',
    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Con i contatti vengono usati solamente gli indirizzi primari.',
    'LBL_EMAIL_EDIT_MAILING_LIST' => 'Modifica Mailing List',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Sto svuotando il cestino',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Eliminazione server in uscita',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Eliminazione file di cache',
    'LBL_EMAIL_EMPTY_MSG' => 'Nessuna email da mostrare.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Nessun indirizzo email da mostrare.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Il nome della cartella deve essere univoco e non vuoto. Si prega di riprovare.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Impossibile cancellare la cartella. O la cartella o un suo figlio hanno una casella di posta elettronica associata ad essa.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Impossibile determinare la cartella predisposta dal contesto. Provare ancora.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Si prega di controllare le impostazioni.',
    'LBL_EMAIL_ERROR_CONTACT_NAME' => 'Si prega di assicurarsi di inserire il cognome.',
    'LBL_EMAIL_ERROR_DESC' => 'Errori individuati:',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Non hai accesso a questa zona. Contatta l´amministratore del sito per ottenere l´accesso.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'I nomi delle cartelle di SuiteCRM devono essere univoci.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Si prega di inserire alcuni criteri di ricerca.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Si è verificato un errore',
    'LBL_EMAIL_ERROR_LIST_NAME' => 'Un elenco email con quel nome esiste già',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Messaggio rimosso dal Server',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'O messagio rimosso dal Server o spostato in una differente cartella',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Connessione col mail server fallita. Si prega di contattare l´amministratore',
    'LBL_EMAIL_ERROR_MOVE' => 'Spostamentro email tra server e/o account di posta elettronica non è supportato in questo momento.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Errore Spostamento',
    'LBL_EMAIL_ERROR_NAME' => 'Un nome è richiesto.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Da Indirizzo è richiesto.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Si prega di fornire un file.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'Rinomina cartella IMAP folder non è supportata in questo momento.',
    'LBL_EMAIL_ERROR_SERVER' => 'Un indirizzo mail server è richiesto.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Account di posta elettronica potrebbe non essere stato salvato.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Si è verificato un errore durante la comunicazione con il server di posta.',
    'LBL_EMAIL_ERROR_USER' => 'Un nome login è richiesto.',
    'LBL_EMAIL_ERROR_PASSWORD' => 'Una password è richiesta.',
    'LBL_EMAIL_ERROR_PORT' => 'Una porta al server di posta è richiesto.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Un protocollo server è richiesto.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'E´ richiesta una cartella controllabile.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'E´ richiesto il cestino.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Questa informazione non è disponibile',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Nessun server di posta in uscita specificato.',
    'LBL_EMAIL_ERROR_SENDING' => 'Errore in invio mail. Per favore contattare l\'amminisitratore del sistema per assistenza.',
    'LBL_EMAIL_ERROR_SAVING' => 'Errore in salvataggio mail. Per favore contattare l\'amminisitratore del sistema per assistenza.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0',        null, null, '.gif', '') . 'Cartelle',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder',        'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ACTIONS' => 'Sposta in',
    'LBL_EMAIL_FOLDERS_ADD' => 'Aggiungi',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Aggiungi Cartella',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Rinomina Cartella',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Salva',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Aggiungi Cartella in',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Questa cartella non è modificabile',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Sei sicuro di eliminare la cartella?\nNon è possibile annullare.\nTutte le sottocartelle saranno eliminate.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Nuova Cartella',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Seleziona cartella prima di fare questa azione.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Gestione delle cartelle di SuiteCRM',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER' => 'Utilizza Group',

    'LBL_EMAIL_FORWARD' => 'Inoltra',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Scaricate [[count]] di [[total]] email',
    'LBL_EMAIL_FOUND' => 'Trovata',
    'LBL_EMAIL_FROM' => 'Da',
    'LBL_EMAIL_GROUP' => 'gruppo',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Gruppo',
    'LBL_EMAIL_HOME_FOLDER' => 'Pagina iniziale',
    'LBL_EMAIL_HTML_RTF' => 'Invia HTML',
    'LBL_EMAIL_IE_DELETE' => 'Sto cancellando l´account email',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Eliminazione firma',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Sei sicuro di eliminare l´account email?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Eliminazione avvenuta con sucesso.',
    'LBL_EMAIL_IE_SAVE' => 'Salvataggio informazioni Account di posta elettronica',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importazione Email',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Importa in SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Importa Impostazioni',
    'LBL_EMAIL_INVALID' => 'Non valido',
    'LBL_EMAIL_LOADING' => 'Caricamento...',
    'LBL_EMAIL_MARK' => 'Segna',
    'LBL_EMAIL_MARK_FLAGGED' => 'Come selezionata',
    'LBL_EMAIL_MARK_READ' => 'Come letta',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Come non selezionata',
    'LBL_EMAIL_MARK_UNREAD' => 'Come non letta',
    'LBL_EMAIL_ASSIGN_TO' => 'Assegna A',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Crea Cartella',
    'LBL_EMAIL_MENU_COMPOSE' => 'Componi a',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Elimina Cartella',
    'LBL_EMAIL_MENU_EDIT' => 'Modifica',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Svuota Cestino',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sincronizza',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Elimina i file di cache',
    'LBL_EMAIL_MENU_REMOVE' => 'Cancella',
    'LBL_EMAIL_MENU_RENAME' => 'Rinomina',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Rinomina Cartella',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Sto rinominando la Cartella',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Si prega di effettuare una selezione prima di provare l´operazione.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Crea una Cartella (remota o in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE' => 'Archivia messaggio(i) in SuiteCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST' => 'Email verso le Mailing Lists selezionate',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE' => 'Email a questo contatto',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE' => 'Rimuovi Contatto',
    'LBL_EMAIL_MENU_HELP_DELETE' => 'Elimina queste email',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Elimina una Cartella (remota o in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT' => 'Modifica Contatto',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST' => 'Modifica Mailing List',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Svuota tutti i cestini per il tuo account email',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED' => 'Segna queste email come selezionate',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Segna queste email come lette',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Segna queste email come non selezionate',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD' => 'Segna queste email come non lette',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST' => 'Rimuovi le Mailing Lists',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Rinomina una Cartella (remota o in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_REPLY' => 'Rispondi a queste email',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL' => 'Rispondi a tutti per queste email',

    'LBL_EMAIL_MESSAGES' => 'messaggi',

    'LBL_EMAIL_ML_NAME' => 'Elenco Nomi',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Elenco Indirizzi selezionati.',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Elenco Indirizzi disponibili',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> per effettuare una selezione multipla <br />(Per utenti Mac <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'No',
    'LBL_EMAIL_NOT_SENT' => 'Il sistema non è in grado di gestire la tua richiesta. Si prega di contattare l´amministratore del sistema.',

    'LBL_EMAIL_OK' => 'OK',
    'LBL_EMAIL_ONE_MOMENT' => 'Un momento prego...',
    'LBL_EMAIL_OPEN_ALL' => 'Apri messaggi multipli',
    'LBL_EMAIL_OPTIONS' => 'Opzioni',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Scrivi veloce',
    'LBL_EMAIL_OPT_OUT' => 'Disiscritto',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Opted out e non valido',
    'LBL_EMAIL_PAGE_AFTER' => 'di {0}',
    'LBL_EMAIL_PAGE_BEFORE' => 'Pagina',
    'LBL_EMAIL_PERFORMING_TASK' => 'In esecuzione',
    'LBL_EMAIL_PRIMARY' => 'Primario',
    'LBL_EMAIL_PRINT' => 'Stampa',

    'LBL_EMAIL_QC_BUGS' => 'Errore',
    'LBL_EMAIL_QC_CASES' => 'Reclamo',
    'LBL_EMAIL_QC_LEADS' => 'Leads',
    'LBL_EMAIL_QC_CONTACTS' => 'Contatto',
    'LBL_EMAIL_QC_TASKS' => 'Compito',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Opportunità',
    'LBL_EMAIL_QUICK_CREATE' => 'Creazione Rapida',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Ricostruzione Cartelle',
    'LBL_EMAIL_RELATE_TO' => 'Collega',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Visualizza relazioni',
    'LBL_EMAIL_RECORD' => 'Record di posta elettronica',
    'LBL_EMAIL_REMOVE' => 'Cancella',
    'LBL_EMAIL_REPLY' => 'Rispondi',
    'LBL_EMAIL_REPLY_ALL' => 'Rispondi a tutti',
    'LBL_EMAIL_REPLY_TO' => 'Rispondi a',
    'LBL_EMAIL_RETRIEVING_LIST' => 'Recupero Email List',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Recupero Messaggio',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Recupero Email Record',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Si prega di selezionare un unico email record',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Ritorna al modulo precedente?',
    'LBL_EMAIL_REVERT' => 'Ripristina',
    'LBL_EMAIL_RELATE_EMAIL' => 'Collegare Email',

    'LBL_EMAIL_RULES_TITLE' => 'Gestione regole',

    'LBL_EMAIL_SAVE' => 'Salva',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Salva &amp; Rispondi',
    'LBL_EMAIL_SAVE_DRAFT' => 'Salva Bozza',
    'LBL_EMAIL_DRAFT_SAVED' => 'La Bozza è stata salvata',
    'LBL_EMAIL_DRAFT_CONFIRM_DISCARD' => 'Per favore seleziona OK per confermare che vuoi eliminare la mail.',

    'LBL_EMAIL_SEARCHING' => 'Ricerca in corso',
    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null,    '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null,        null, '.gif', ''),
    'LBL_EMAIL_SEARCH_ADVANCED' => 'Ricerca avanzata',
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Dalla data',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Alla data',
    'LBL_EMAIL_SEARCH_FULL_TEXT' => 'Corpo del testo',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Nessun risultato soddisfa i criteri.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Risultato Ricerca',
    'LBL_EMAIL_SEARCH_TITLE' => 'Ricerca Semplice',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS' => 'Ricerca account email',

    'LBL_EMAIL_SELECT' => 'Seleziona',

    'LBL_EMAIL_SEND' => 'Invia',
    'LBL_EMAIL_SENDING_EMAIL' => 'Sto inviando la mail',

    'LBL_EMAIL_SETTINGS' => 'Impostazioni',
    'LBL_EMAIL_SETTINGS_2_ROWS' => '2 Righe',
    'LBL_EMAIL_SETTINGS_3_COLS' => '3 Colonne',
    'LBL_EMAIL_SETTINGS_LAYOUT' => 'Stile Layout',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Account Email',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Cancella Contenuto della Scheda',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT' => 'Importa Email automatico',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Controlla nuove E-mail',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP' => 'Usa finestra Popup',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM' => 'Numero emails per pagina',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT' => 'Modifica Mail Account',
    'LBL_EMAIL_SETTINGS_FOLDERS' => 'Cartelle',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Indirizzo mittente',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Indirizzo Email per notifiche di Test:',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR' => 'All´indirizzo Email',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Nome mittente',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Rispondi all´indirizzo',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN' => 'Schermo intero',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Sincronizza tutte gli Account Email',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'E´ stata inviata una email all´indirizzo specificato utilizzando le impostazioni fornite di posta in uscita. Controlla di aver ricevuto la mail e verifica se le impostazioni sono corrette.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC' => 'Eseguendo questa azione si sincronizzerà account di posta elettronica e i loro contenuti.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Eseguire l´intera sincronizzazione ?\nLarge di account di posta elettronica potrebbe richiedere pochi minuti.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Cliccare il tasto Shift o il tasto Ctrl per selezionare più cartelle.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Generale',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS' => 'Cartelle di Gruppi disponibili',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Creare Cartella di Gruppo',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Salvataggio Cartella di Gruppo',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP' => 'Recuperare Cartella di Gruppo',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Modifica Cartella di Gruppo',

    'LBL_EMAIL_SETTINGS_NAME' => 'Nome',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Queste modifiche, affinchè vengano attivate richiedono un aggiornamento della pagina.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Recupero Account di posta elettronica',
    'LBL_EMAIL_SETTINGS_RULES' => 'Regole',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Le impostazione sono state salvate.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Invia Email come Puro Testo',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS' => 'Attiva',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Numero di email per pagina',
    'LBL_EMAIL_SETTINGS_TAB_POS' => 'Posiziona le Schede in fondo',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Visualizza Impostazioni',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Preferenze',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV' => 'Mostra Avanzati',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Cartelle disponibili per utente',
    'LBL_EMAIL_ERROR_PREPEND' => 'Errore email:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Il server di posta in uscita selezionato per l´account di posta che stai utilizzando non è valido. Controlla le impostazioni o seleziona un altro server di posta per l´account di posta.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Non è stato configurato un server di posta in uscita per l´account di posta che stai utilizzando. Seleziona o aggiungi un server di posta in uscita per l´account di posta.',
    'LBL_EMAIL_SHOW_READ' => 'Mostra tutti',
    'LBL_EMAIL_SHOW_UNREAD_ONLY' => 'Mostra solo non letti',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Default Signature',
    'LBL_EMAIL_SIGNATURES' => 'Firme',
    'LBL_EMAIL_SIGNATURE_CREATE' => 'Crea Firma',
    'LBL_EMAIL_SIGNATURE_NAME' => 'Nome Firma',
    'LBL_EMAIL_SIGNATURE_TEXT' => 'Corpo Firma',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Altro',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Cartelle Remote ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ Cartelle SuiteCRM ]',
    'LBL_EMAIL_SUBJECT' => 'Oggetto',
    'LBL_EMAIL_SUCCESS' => 'Successo',
    'LBL_EMAIL_SUGAR_FOLDER' => 'Cartella SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Il corpo del modello Email è vuoto',
    'LBL_EMAIL_TEMPLATES' => 'Modelli',
    'LBL_EMAIL_TEXT_FIRST' => 'Prima Pagina',
    'LBL_EMAIL_TEXT_PREV' => 'Pagina Precedente',
    'LBL_EMAIL_TEXT_NEXT' => 'Pagina Successiva',
    'LBL_EMAIL_TEXT_LAST' => 'Ultima Pagina',
    'LBL_EMAIL_TEXT_REFRESH' => 'Aggiorna',
    'LBL_EMAIL_TO' => 'A',
    'LBL_EMAIL_VIEW' => 'Vista',
    'LBL_EMAIL_VIEWS' => 'Viste',
    'LBL_EMAIL_VIEW_HEADERS' => 'Mostra intestazioni',
    'LBL_EMAIL_VIEW_PRINTABLE' => 'Versione stampabile',
    'LBL_EMAIL_VIEW_RAW' => 'Visualizza sorgente Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Funzionalità non supportata da POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Test di default del link.',
    'LBL_EMAIL_YES' => 'Si',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Invia Email di Test',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Email di Test inviata',
    'LBL_EMAIL_MESSAGE_NO' => 'Messaggio n.', // Counter. Message number xx
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Importazione Eseguita',
    'LBL_EMAIL_IMPORT_FAIL' => 'Importazione Fallita perchè il messaggio è già stato importato o eliminato dal server',

    'LBL_LINK_NONE' => 'Nessuno',
    'LBL_LINK_ALL' => 'Tutto',
    'LBL_LINK_RECORDS' => 'Record',
    'LBL_LINK_SELECT' => 'Seleziona',
    'LBL_LINK_ACTIONS' => 'Azioni', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Conferma',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Vuoi chiudere questo record?',
    'LBL_CLOSE_ACTIVITY_REMEMBER' => 'Non visualizzare questo messaggio nel futuro:',
    'LBL_INVALID_FILE_EXTENSION' => 'Estensione File non valida',

    'ERR_AJAX_LOAD' => 'Si è verificato un errore:',
    'ERR_AJAX_LOAD_FAILURE' => 'C´è stato un errore durante l´elaborazione della richiesta, si prega di riprovare in un secondo momento.',
    'ERR_AJAX_LOAD_FOOTER' => 'Se l´errore persiste, chiedi al tuo amministratore di disabilitare l´Ajax per questo modulo',
    'ERR_CREATING_FIELDS' => 'Errore nell´inserimento di dati aggiuntivi nei campi:',
    'ERR_CREATING_TABLE' => 'Errore nella creazione della tabella:',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Il separatore decimale non usa lo stesso carattere come i separatori millesimali.\n\n  Prego cambia il valore.',
    'ERR_DELETE_RECORD' => 'Per eliminare il contatto deve essere specificato il numero del record.',
    'ERR_EXPORT_DISABLED' => 'Esportazione non abilitata.',
    'ERR_EXPORT_TYPE' => 'Errore di esportazione',
    'ERR_INVALID_AMOUNT' => 'Inserire valore valido.',
    'ERR_INVALID_DATE_FORMAT' => 'Il formato dati deve essere:',
    'ERR_INVALID_DATE' => 'Inserisci una data valida, grazie.',
    'ERR_INVALID_DAY' => 'Inserisci un giorno valido, grazie..',
    'ERR_INVALID_EMAIL_ADDRESS' => 'Indirizzo email non valido',
    'ERR_INVALID_FILE_REFERENCE' => 'Riferimento al file non valido',
    'ERR_INVALID_HOUR' => 'Inserisci un ora valida, grazie',
    'ERR_INVALID_MONTH' => 'Inserisci un mese valido, grazie.',
    'ERR_INVALID_TIME' => 'Inserisci un orario valido, grazie.',
    'ERR_INVALID_YEAR' => 'Inserisci un anno a 4 cifre valido, grazie.',
    'ERR_NEED_ACTIVE_SESSION' => 'Una sessione attiva è richiesta per esportare il contenuto.',
    'ERR_NO_HEADER_ID' => 'Funzione non disponibile in questo tema.',
    'ERR_NOT_ADMIN' => 'Accesso non consentito alla parte di amministrazione.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Mancano i campi richiesti:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Campo obbligatorio non valido:',
    'ERR_INVALID_VALUE' => 'Valore non valido:',
    'ERR_NO_SUCH_FILE' => 'Il file non esiste nel sistema',
    'ERR_NO_SINGLE_QUOTE' => 'Non puoi usare il singolo apice per',
    'ERR_NOTHING_SELECTED' => 'Si prega di scegliere prima di proseguire.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'Opportunità con lo stesso nome %s esiste già. Inserisci un altro nome.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'Il nome dell´opportunità non è stato inserito. Si prega di inserire un nome per l´opportunità prima.',
    'ERR_POTENTIAL_SEGFAULT' => 'Un potenziale segmento fallito di Apache è stato individuato. Si prega di informare l´amministratore del sistema per confermare il problema .',
    'ERR_SELF_REPORTING' => 'Utente non può dipendere da sè stesso..',
    'ERR_SINGLE_QUOTE' => 'L\'uso dell\'apice singolo non è supportato in questo campo. Per favore modificatene il valore.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Nessun riscontro per il campo:',
    'ERR_SQS_NO_MATCH' => 'Nessun riscontro',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Si prega di specificare la \'chiave\' indice nell\'attributo displayParams per la definizione di Meta-dati',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Errore: Il nome del Portale è già stato assegnato ad un altro contatto.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Il valore del campo non è compatibile con il valore preciso.',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Si è verificato un errore nel salvataggio dell´account esterno.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Si è verificato un errore durante il caricamento. Assicurati che il file che stai caricando non sia vuoto.',
    'ERR_NO_DB' => 'Non è stato possibile connettersi al database. Per  dettagli si prega di fare riferimento al registro errori di SuiteCRM.',
    'ERR_DB_FAIL' => 'Errore nel Database. Per dettagli si prega di fare riferimento al registro errori di SuiteCRM.',
    'ERR_EXTERNAL_API_403' => 'Permesso negato. Tipo di file non supportato.',
    'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'Il codice di accesso OAuth non è presente.',
    'ERR_DB_VERSION' => 'I file SuiteCRM {0} possono essere utilizzati solo con un database SuiteCRM {1}.',

    'LBL_ACCOUNT' => 'Azienda',
    'LBL_ACCOUNTS' => 'Aziende',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Vedi sommario',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Vedi sommario',
    'LBL_ADD_BUTTON_TITLE' => 'Aggiungi',
    'LBL_ADD_BUTTON' => 'Aggiungi',
    'LBL_ADD_DOCUMENT' => 'Aggiungi documento',
    'LBL_REPLACE_BUTTON' => 'Sostituisci',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Aggiungi alla Lista Obiettivi',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Aggiungi alla Lista Obiettivi',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Aggiungi Contatti alla Lista Obiettivi',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Premi per chiudere',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Chiudi',
    'LBL_ADDITIONAL_DETAILS' => 'Ulteriori Dettagli',
    'LBL_ADMIN' => 'Amministrazione',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archivio',
    'LBL_ASSIGNED_TO_USER' => 'Assegnato a:',
    'LBL_ASSIGNED_TO' => 'Assegnato a:',
    'LBL_BACK' => 'Indietro',
    'LBL_BILL_TO_ACCOUNT' => 'Fattura all azienda',
    'LBL_BILL_TO_CONTACT' => 'Fattura al Contatto',
    'LBL_BILLING_ADDRESS' => 'Indirizzo di Fatturazione',
    'LBL_QUICK_CREATE_TITLE' => 'Creazione Rapida',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - CRM Open Source',
    'LBL_BUGS' => 'Errori',
    'LBL_BY' => 'da',
    'LBL_CALLS' => 'Chiamate',
    'LBL_CALL' => 'Chiamata',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Invia le email della Campagna che sono in coda',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Conferma',
    'LBL_CASE' => 'Reclami',
    'LBL_CASES' => 'Reclami',
    'LBL_CHANGE_PASSWORD' => 'Cambia Password',
    'LBL_CHANGE_BUTTON_LABEL' => 'Cambia',
    'LBL_CHANGE_BUTTON_TITLE' => 'Cambia',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Seleziona Tutti',
    'LBL_CITY' => 'Città',
    'LBL_CLEAR_BUTTON_LABEL' => 'Azzera',
    'LBL_CLEAR_BUTTON_TITLE' => 'Azzera',
    'LBL_CLEARALL' => 'Azzera tutto',
    'LBL_CLOSE_BUTTON_TITLE' => 'chiudi', // As in closing a task
    'LBL_CLOSE_WINDOW' => 'Chiudi finestra',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Chiudi tutto',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Chiudi tutto',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Chiudi e crea nuovo', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Chiudi e crea nuovo', // As in closing a task
    'LBL_OPEN_ITEMS' => 'Record in lavorazione:',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Componi Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Scrivi Email',
    'LBL_SEARCH_DROPDOWN_YES' => 'Si',
    'LBL_SEARCH_DROPDOWN_NO' => 'No',
    'LBL_CONTACT_LIST' => 'Elenco contatti',
    'LBL_CONTACT' => 'Contatto',
    'LBL_CONTACTS' => 'Contatti',
    'LBL_CONTRACT' => 'Contratto',
    'LBL_CONTRACTS' => 'Contratti',
    'LBL_COUNTRY' => 'Provincia:',
    'LBL_CREATE_BUTTON_LABEL' => 'Nuovo', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CREATED_BY_USER' => 'Creato da utente',
    'LBL_CREATED_USER' => 'Creato da utente',
    'LBL_CREATED_ID' => 'Creato da Id',
    'LBL_CREATED' => 'Creato da',
    'LBL_CURRENT_USER_FILTER' => 'Solo i miei elementi:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DOCUMENTS' => 'Documenti',
    'LBL_DATE_ENTERED' => 'Data Creazione:',
    'LBL_DATE_MODIFIED' => 'Ultima Modifica:',
    'LBL_EDIT_BUTTON' => 'Modifica',
    'LBL_DUPLICATE_BUTTON' => 'Duplica',
    'LBL_DELETE_BUTTON' => 'Elimina',
    'LBL_DELETE' => 'Elimina',
    'LBL_DELETED' => 'Eliminato',
    'LBL_DIRECT_REPORTS' => 'Riporta a',
    'LBL_DONE_BUTTON_LABEL' => 'Fatto',
    'LBL_DONE_BUTTON_TITLE' => 'Fatto',
    'LBL_DST_NEEDS_FIXIN' => 'Applicazione necessita di un aggiornamento del Fuso Orario. Utilizza il link <a href="index.php?module=Administration&action=DstFix">Ripara</a> nel pannello amministrativo e applica aggiornamento.',
    'LBL_FAVORITES' => 'Preferiti',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Si prega di selezionare un file vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'Il formato vCard non fornisce tutti i campi richiesti da questo modulo. Per dettagli si prega di fare riferimento al registro errori di SuiteCRM.',
    'LBL_VCARD_ERROR_FILESIZE' => 'La dimensione del file inviato supera il limite di dimensioni di 30mila caratteri specificato nel modulo HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Si è verificato un errore inviando il file vCard. Per dettagli si prega di fare riferimento al registro errori di SuiteCRM.',
    'LBL_IMPORT_VCARD' => 'Importa vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importa vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importa vCard',
    'LBL_VIEW_BUTTON_LABEL' => 'Vedi',
    'LBL_VIEW_BUTTON_TITLE' => 'Vedi',
    'LBL_VIEW_BUTTON' => 'Vedi',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Invia Email come PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Invia Email come PDF',
    'LBL_EMAILS' => 'Email',
    'LBL_EMPLOYEES' => 'Dipendenti',
    'LBL_ENTER_DATE' => 'Inserisci Data',
    'LBL_EXPORT_ALL' => 'Esporta tutti',
    'LBL_EXPORT' => 'Esporta',
    'LBL_FAVORITES_FILTER' => 'I miei Preferiti',
    'LBL_GO_BUTTON_LABEL' => 'Vai',
    'LBL_GS_HELP' => 'I campi di questo modulo utilizzati in questa ricerca appaiono sopra. Il testo evidenziato corrisponde ai criteri di ricerca.',
    'LBL_HIDE' => 'Nascosto',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importa',
    'LBL_IMPORT_STARTED' => 'Importa Iniziato:',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Devi specificare un delimitatore.',
    'LBL_LAST_VIEWED' => 'Ultima vista',
    'LBL_TODAYS_ACTIVITIES' => 'Le attività di oggi',
    'LBL_LEADS' => 'Lead',
    'LBL_LESS' => 'meno',
    'LBL_CAMPAIGN' => 'Campagna:',
    'LBL_CAMPAIGNS' => 'Campagne',
    'LBL_CAMPAIGNLOG' => 'Log Campagna',
    'LBL_CAMPAIGN_CONTACT' => 'Campagne',
    'LBL_CAMPAIGN_ID' => 'campagna_id',
    'LBL_CAMPAIGN_NONE' => '--Nessuno--',
    'LBL_SITEMAP' => 'Mappa del sito',
    'LBL_THEME' => 'Tema:',
    'LBL_THEME_PICKER' => 'Stile Pagina',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Avviso: Internet Explorer 6 non supporta il tema selezionato. Clicca OK per selezionarlo ugualmente o Annulla per selezionare un tema diverso.',
    'LBL_FOUND_IN_RELEASE' => 'Trovato nella Release',
    'LBL_FIXED_IN_RELEASE' => 'Fisso nella Release',
    'LBL_LIST_ACCOUNT_NAME' => 'Azienda',
    'LBL_LIST_ASSIGNED_USER' => 'Utente',
    'LBL_LIST_CONTACT_NAME' => 'Nome contatto',
    'LBL_LIST_CONTACT_ROLE' => 'Ruolo del Contatto',
    'LBL_LIST_DATE_ENTERED' => 'Data Creazione',
    'LBL_LIST_EMAIL' => 'Emails',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_OF' => 'di',
    'LBL_LIST_PHONE' => 'telefono',
    'LBL_LIST_RELATED_TO' => 'Relativo a',
    'LBL_LIST_USER_NAME' => 'Nome utente',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Sei sicuro di voler aggiornare l´elenco intero?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Si prega di selezionare almeno 1 record per continuare.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Si prega di selezionare almeno 2 record per continuare.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Si prega di selezionare meno di 10 record per continuare.',
    'LBL_LISTVIEW_ALL' => 'Tutto',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Record selezionati',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Selezionato:',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'John',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Doe',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Mr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Straordinario',
    'LBL_LOGIN_TO_ACCESS' => 'Si prega di eseguire il login per accedere a questa area.',
    'LBL_LOGOUT' => 'Esci',
    'LBL_PROFILE' => 'Profilo',
    'LBL_MAILMERGE' => 'Stampa Unione',
    'LBL_MASS_UPDATE' => 'Aggiornamento Globale',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Non ci sono campi disponibili per l´operazione di Aggiornamento di Massa',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Escludi Indirizzo Primario',
    'LBL_MEETINGS' => 'Riunioni',
    'LBL_MEETING' => 'Riunione',
    'LBL_MEETING_GO_BACK' => 'Torna indietro alla riunione',
    'LBL_MEMBERS' => 'Membri',
    'LBL_MEMBER_OF' => 'Membro di',
    'LBL_MODIFIED_BY_USER' => 'Modificato dall´utente',
    'LBL_MODIFIED_USER' => 'Modificato dall´utente',
    'LBL_MODIFIED' => 'Modificato da',
    'LBL_MODIFIED_NAME' => 'Modificato Da Name',
    'LBL_MODIFIED_ID' => 'Modificato da Id',
    'LBL_MORE' => 'Altro',
    'LBL_MY_ACCOUNT' => 'Il mio profilo',
    'LBL_NAME' => 'Nome',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Nuovo',
    'LBL_NEW_BUTTON_TITLE' => 'Nuovo',
    'LBL_NEXT_BUTTON_LABEL' => 'Avanti',
    'LBL_NONE' => '--Nessuno--',
    'LBL_NOTES' => 'Note',
    'LBL_OPENALL_BUTTON_LABEL' => 'Apri tutti',
    'LBL_OPENALL_BUTTON_TITLE' => 'Apri tutti',
    'LBL_OPENTO_BUTTON_LABEL' => 'Apri da:',
    'LBL_OPENTO_BUTTON_TITLE' => 'Apri da:',
    'LBL_OPPORTUNITIES' => 'Opportunità',
    'LBL_OPPORTUNITY_NAME' => 'Nome Opportunità',
    'LBL_OPPORTUNITY' => 'Opportunità',
    'LBL_OR' => 'o',
    'LBL_LOWER_OR' => 'o',
    'LBL_PANEL_OVERVIEW' => 'Informazioni', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ASSIGNMENT' => 'Altro', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ADVANCED' => 'Maggiori Informazioni', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PARENT_TYPE' => 'Tipo Relazione',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Fase',
    'LBL_POSTAL_CODE' => 'Codice Postale:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Indirizzo Primario, Comune:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Indirizzo Primario, Nazione:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Indirizzo Primario, CAP:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Indirizzo Primario, Provincia:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Indirizzo Primario, Via [2]:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Indirizzo Primario, Via [3]:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Indirizzo Primario, Via',
    'LBL_PRIMARY_ADDRESS' => 'Indirizzo principale:',

    'LBL_BILLING_STREET' => 'Via:',
    'LBL_SHIPPING_STREET' => 'Via:',

    'LBL_PROSPECTS' => 'Prospect',
    'LBL_PRODUCT_BUNDLES' => 'Assieme al prodotto',
    'LBL_PRODUCTS' => 'Prodotti',
    'LBL_PROJECT_TASKS' => 'Compiti di progetto',
    'LBL_PROJECTS' => 'Progetti',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Crea Opportunità dall´Offerta',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Crea Opportunità dall´Offerta',
    'LBL_QUOTES_SHIP_TO' => 'Invia Offerte a',
    'LBL_QUOTES' => 'Preventivi',

    'LBL_RELATED' => 'Relativi',
    'LBL_RELATED_RECORDS' => 'Records relativi',
    'LBL_REMOVE' => 'Cancella',
    'LBL_REPORTS_TO' => 'Relativo a:',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indica un campo obbligatorio',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Fatto',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Salva come',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Salva come',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Modulo Completo',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Modulo Completo',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Salva e crea nuovo',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Salva e crea nuovo',
    'LBL_SAVE_OBJECT' => 'Salva {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'C',
    'LBL_SEARCH_BUTTON_LABEL' => 'Cerca',
    'LBL_SEARCH_BUTTON_TITLE' => 'Cerca',
    'LBL_SEARCH' => 'Cerca',
    'LBL_FILTER' => 'Cerva',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'altro',
    'LBL_SEE_ALL' => 'Vedi Tutto',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Formato file non valido, si possono caricare solo file di immagini.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Seleziona',
    'LBL_SELECT_BUTTON_TITLE' => 'Selezionare',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Sfoglia Documenti',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Sfoglia Documenti',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Seleziona contatto',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Seleziona Contatto',
    'LBL_GRID_SELECTED_FILE' => 'File selezionati',
    'LBL_GRID_SELECTED_FILES' => 'File selezionati',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Seleziona da un Report',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Seleziona Report',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Seleziona utente',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Seleziona utente',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Seleziona utente',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Seleziona utente',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Elimina Utente',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Elimina Utente',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Risorse utilizzate per costruire questa pagina (query, files)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'secondi.',
    'LBL_SERVER_RESPONSE_TIME' => 'Tempo di risposta del server:',
    'LBL_SERVER_MEMORY_BYTES' => 'byte',
    'LBL_SERVER_MEMORY_USAGE' => 'Utilizzo Memoria Server: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Utilizzo: - Module: {0} - Azione: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Utilizzo Memoria Server Peak: {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT' => 'Spedisci all´azienda',
    'LBL_SHIP_TO_CONTACT' => 'Spedisci al contatto',
    'LBL_SHIPPING_ADDRESS' => 'Indirizzo di spedizione',
    'LBL_SHORTCUTS' => 'Scorciatoie',
    'LBL_SHOW' => 'Vedi',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Stato:', //Used for Case State, situation, condition
    'LBL_STATUS_UPDATED' => 'Il tuo stato per questo evento è stato aggiornato!',
    'LBL_STATUS' => 'Stato:',
    'LBL_STREET' => 'Via',
    'LBL_SUBJECT' => 'Oggetto',

    'LBL_INBOUNDEMAIL_ID' => 'ID Email in arrivo',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2013 SugarCRM Inc. Il programma è fornito così com\'è, senza garanzia.  Concesso in licenza sotto <a href="LICENSE.txt" target="_blank" class="copyRightLink"> AGPLv3</a>. <br /> SugarCRM è un marchio di SugarCRM, Inc. Tutti gli altri nomi di società e prodotti potrebbero essere marchi commerciali delle rispettive società a cui sono associati.',

    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2013 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink"> SugarCRM Inc.</a> Tutti i diritti riservati. <br /> SugarCRM è un marchio di SugarCRM, Inc. Tutti gli altri nomi di società e prodotti potrebbero essere marchi commerciali delle rispettive società a cui sono associati.',

    'LBL_SCENARIO_SALES' => 'Vendite',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Finanza',
    'LBL_SCENARIO_SERVICE' => 'Servizio',
    'LBL_SCENARIO_PROJECT' => 'Gestione Progetto',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Questo scenario supporta la gestione di articoli di vendita',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Questo scenario supporta la gestione di elementi di marketing',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Questo scenario supporta la gestione degli elementi correlati alle finanze',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Questo scenario supporta la gestione di elementi riferiti a servizi',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Questo scenario supporta la gestione di elementi relativi a progetti',

    'LBL_SYNC' => 'Sincronizza',
    'LBL_TABGROUP_ALL' => 'Tutto',
    'LBL_TABGROUP_ACTIVITIES' => 'Attività',
    'LBL_TABGROUP_COLLABORATION' => 'Collaborazione',
    'LBL_TABGROUP_HOME' => 'Home',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_MY_PORTALS' => 'Portale',
    'LBL_TABGROUP_OTHER' => 'Altro',
    'LBL_TABGROUP_REPORTS' => 'Report',
    'LBL_TABGROUP_SALES' => 'Vendite',
    'LBL_TABGROUP_SUPPORT' => 'Assistenza',
    'LBL_TABGROUP_TOOLS' => 'Servizi',
    'LBL_TASKS' => 'Compiti',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivia Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivia Email',
    'LBL_UNAUTH_ADMIN' => 'Accesso non autorizzato alla parte amministrazione',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Recupera',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Recupera',
    'LBL_UNDELETE_BUTTON' => 'Recupera',
    'LBL_UNDELETE' => 'Recupera',
    'LBL_UNSYNC' => 'Desinc.',
    'LBL_UPDATE' => 'Aggiorna',
    'LBL_USER_LIST' => 'Elenco Utenti',
    'LBL_USERS_SYNC' => 'Sinc. Utenti',
    'LBL_USERS' => 'Utenti',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Controllo delle email esistenti in entrata...',
    'LBL_VERIFY_PORTAL_NAME' => 'Controllo dei portali esistenti...',
    'LBL_VIEW_IMAGE' => 'Visualizza',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Stampa come PDF',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Stampa come PDF',

    'LNK_ABOUT' => 'Informazioni',
    'LNK_ADVANCED_FILTER' => 'Ricerca avanzata',
    'LNK_BASIC_FILTER' => 'Ricerca rapida',
    'LBL_ADVANCED_SEARCH' => 'Ricerca avanzata',
    'LBL_QUICK_FILTER' => 'Ricerca rapida',
    'LNK_SEARCH_FTS_VIEW_ALL' => 'Visualizza tutti i risultati',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Mostra tutti',
    'LNK_CLOSE' => 'Chiudi',
    'LBL_MODIFY_CURRENT_SEARCH' => 'Modifica la ricerca corrente',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modifica la ricerca corrente',
    'LNK_SAVED_VIEWS' => 'Viste Personalizzate',
    'LNK_DELETE_ALL' => 'Cancella tutto',
    'LNK_DELETE' => 'Elimina',
    'LNK_EDIT' => 'Modifica',
    'LNK_GET_LATEST' => 'Ottieni ultimo',
    'LNK_GET_LATEST_TOOLTIP' => 'Sostituisci con ultima versione',
    'LNK_HELP' => 'Aiuto',
    'LNK_CREATE' => 'Nuovo',
    'LNK_LIST_END' => 'Fine',
    'LNK_LIST_NEXT' => 'Avanti',
    'LNK_LIST_PREVIOUS' => 'Indietro',
    'LNK_LIST_RETURN' => 'Ritorna all´intero elenco',
    'LNK_LIST_START' => 'Inizia',
    'LNK_LOAD_SIGNED' => 'Firma',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Sostituisci con un documento firmato',
    'LNK_PRINT' => 'Stampa',
    'LNK_BACKTOTOP' => 'Torna all´inizio',
    'LNK_REMOVE' => 'Cancella',
    'LNK_RESUME' => 'Riassumi',
    'LNK_VIEW_CHANGE_LOG' => 'Vedi log cambiamenti',

    'NTC_CLICK_BACK' => 'Utilizza il pulsante indietro del browser e correggi il problema, grazie',
    'NTC_DATE_FORMAT' => '(aaaa-mm-gg)',
    'NTC_DATE_TIME_FORMAT' => '(aaaa-mm-gg 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Sei sicuro di voler eliminare i dati selezionati?',
    'NTC_TEMPLATE_IS_USED' => 'Il template è usato in almeno un´email marketing. Sei sicuro di volerlo cancellare?',
    'NTC_TEMPLATES_IS_USED' => 'I seguenti templates sono usati in email marketing. Sei sicuro di volerli cancellare?',
    'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Sei sicuro di voler eliminare',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Sei sicuro di voler aggiornare',
    'NTC_DELETE_SELECTED_RECORDS' => ' record(s) selezionati?',
    'NTC_LOGIN_MESSAGE' => 'Inserire i dati per l´identificazione, grazie',
    'NTC_NO_ITEMS_DISPLAY' => 'Nessuno',
    'NTC_REMOVE_CONFIRMATION' => 'Sicuro di voler rimuovere questa relazione?',
    'NTC_REQUIRED' => 'Indica un campo obbligatorio',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Benvenuto',
    'NTC_YEAR_FORMAT' => '(aaaa)',
    'LOGIN_LOGO_ERROR' => 'Si prega di sostituire il logo di SuiteCRM.',
    'WARN_ONLY_ADMINS' => 'Solo l´amministratore può accedere.',
    'WARN_UNSAVED_CHANGES' => 'Stai per uscire da questo record senza salvare le modifiche che potresti aver fatto al record. Sei sicuro di voler uscire da questo record?',
    'ERROR_NO_RECORD' => 'Errore ricerca record.  Questo record potrebbe essere stato cancellato o non sei autorizzato a vederlo.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Attenzione:</b> Il vostro browser è di una versione non supportata, oppure state usando un browser non supportato.<p></p>Si raccomandano le seguenti versioni per i vari browser:<p></p><ul><li>Internet Explorer 10 (la modalità Compatibilità non è supportata)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Attenzione:</b> Il vostro Internet Explorer è in modalità Compatibilità, che non è supportata.',
    'ERROR_TYPE_NOT_VALID' => 'Errore. Questo tipo non è valido.',
    'ERROR_NO_BEAN' => 'Impossibile ottenere bean.',
    'LBL_DUP_MERGE' => 'Trova Duplicati',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Gestisci Sottoscrizioni',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Gestisci sottoscrizioni per',
    'LBL_SUBSCRIBE' => 'Sottoscritto',
    'LBL_UNSUBSCRIBE' => 'Non Sottoscritto',
    // Ajax status strings
    'LBL_LOADING' => 'Caricamento ...',
    'LBL_SEARCHING' => 'Ricerca in corso...',
    'LBL_SAVING_LAYOUT' => 'Salvataggio Layout ...',
    'LBL_SAVED_LAYOUT' => 'Layout è stato salvato.',
    'LBL_SAVED' => 'Salvato',
    'LBL_SAVING' => 'Salvataggio',
    'LBL_FAILED' => 'Fallito!',
    'LBL_DISPLAY_COLUMNS' => 'Visualizza colonne',
    'LBL_HIDE_COLUMNS' => 'Nascondi colonne',
    'LBL_SEARCH_CRITERIA' => 'Criteri di Ricerca',
    'LBL_SAVED_VIEWS' => 'Viste salvate',
    'LBL_PROCESSING_REQUEST' => 'In corso..',
    'LBL_REQUEST_PROCESSED' => 'Fatto',
    'LBL_AJAX_FAILURE' => 'Errore Ajax',
    'LBL_MERGE_DUPLICATES' => 'Unisci duplicati',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Mie ricerche',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Miei ricerche',
    'LBL_SEARCH_POPULATE_ONLY' => 'Effettuare una ricerca usando lo spazio qui sopra',
    'LBL_DETAILVIEW' => 'Maschera Dettaglio',
    'LBL_LISTVIEW' => 'Vista Elenco',
    'LBL_EDITVIEW' => 'Maschera Modifica',
    'LBL_SEARCHFORM' => 'Form di Ricerca',
    'LBL_SAVED_SEARCH_ERROR' => 'Si prega di fornire un nome per questo modulo.',
    'LBL_DISPLAY_LOG' => 'Visualizza Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistema',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Sessione Scaduta',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'La tua sessione sta per finire pergo salvare il lavoro.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'la tua sessione è scaduta.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "Agenda:",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Riunione',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Chiamata',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Ora:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Luogo:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Descrizione:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Stato:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Collegato a:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "Clicca OK per visualizzare questa chiamata o Annulla per respingere questo messaggio.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "Clicca OK per visualizzare questa riunione o Annulla per respingere questo messaggio.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Evento',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Evento non impostato.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Luogo non impostato.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Data inizio non impostata.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Nessun risultato trovato.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Nessun risultato trovato... Modificare i criteri di ricerca e riprovare?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Nessun risultato trovato per',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Crea come nuovo',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'o modifica i criteri di ricerca',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Al momento non hai nessun record salvato.',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Per avere più informazioni utilizza il menù a tendina che consente di accedere alla guida. Si trova nella barra di navigazione principale.',

    'LBL_CLICK_HERE' => 'Clicca qui',
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Aggiungi ai Preferiti.',
    'LBL_MARK_AS_FAVORITES' => 'Segna come Preferito',
    'LBL_CREATE_CONTACT' => 'Crea Contatto',
    'LBL_CREATE_CASE' => 'Crea Reclamo',
    'LBL_CREATE_NOTE' => 'Crea Nota',
    'LBL_CREATE_OPPORTUNITY' => 'Nuova Opportunità',
    'LBL_SCHEDULE_CALL' => 'Schedula chiamata',
    'LBL_SCHEDULE_MEETING' => 'Schedula riunione',
    'LBL_CREATE_TASK' => 'Nuovo Compito',
    'LBL_REMOVE_FROM_FAVORITES' => 'Rimuovi dai Preferiti.',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Genera Form',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Salva Modulo Web',
    'LBL_AVAILABLE_FIELDS' => 'Campi Disponibili',
    'LBL_FIRST_FORM_COLUMN' => 'Prima Colonna del Modulo',
    'LBL_SECOND_FORM_COLUMN' => 'Seconda Colonna del Modulo',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Campo obbligatorio mancante: Assegnato a',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Campo obbligatorio mancante: Campagna collegata',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Modulo Web da creare ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Inviando questo modulo verrà creato ',

    'LBL_PLEASE_SELECT' => 'Si prega di selezionare',
    'LBL_REDIRECT_URL' => 'Ridireziona URL',
    'LBL_RELATED_CAMPAIGN' => 'Campagna relativa',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Aggiungi tutti i campi',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Azzera tutti i campi',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Rimuovi tutti i campi',
    'LBL_NEXT_BTN' => 'Avanti',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Solo le immagini possono essere incollate',
    'LBL_TRAINING' => 'Forum di supporto',
    'ERR_DATABASE_CONN_DROPPED' => 'Errore durante l´esecuzione della query. Probabilmente, il database ha fatto cadere la connessione. Prego aggiorna la pagina, potresti aver bisogno di riavviare il web server.',
    'ERR_MSSQL_DB_CONTEXT' => 'Cambia il contesto del database a',
    'ERR_MSSQL_WARNING' => 'Avviso:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Errore: il file [[file]] è mancante. Impossibile creare poichè il file HTML non è stato trovato.',
    'ERR_CANNOT_FIND_MODULE' => 'Errore: Modulo [module] non esiste.',
    'LBL_ALT_ADDRESS' => 'Altro indirizzo:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Errore: C´è un numero diverso di argomenti per ´chiave´ e ´copia´ elementi nella lista dei paramentri visualizzati.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Generale',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Ricerche',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Solo i miei elementi',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titolo',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Mostra righe',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Creazione nuova pagina in corso...',
    'LBL_NEW_PAGE_FEEDBACK' => 'Hai creato una nuova pagina. Puoi aggiungere contenuti con l´opzione Aggiungi Dashlet.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Sei sicuro di voler eliminare la pagina?',
    'LBL_SAVING_PAGE_TITLE' => 'Salvataggio titolo di pagina in corso...',
    'LBL_RETRIEVING_PAGE' => 'Recupero Pagina ...',
    'LBL_MAX_DASHLETS_REACHED' => 'Avete raggiunto il numero massimo delle Dashlets di SuiteCRM impostato dal vostro amministratore. Si prega di rimuovere un Dashlet prima di aggiungerne di nuovi.',
    'LBL_ADDING_DASHLET' => 'Aggiunta della Dashlet di SuiteCRM in corso...',
    'LBL_ADDED_DASHLET' => 'Dashlet di SuiteCRM Aggiunta',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Sei sicuro di voler eliminare la Dashlet di SuiteCRM?',
    'LBL_REMOVING_DASHLET' => 'Eliminazione Dashlet di SuiteCRM in corso...',
    'LBL_REMOVED_DASHLET' => 'Dashlet di SuiteCRM eliminata',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Aggiungi Pagina',
    'LBL_DELETE_PAGE' => 'Elimina Pagina',
    'LBL_CHANGE_LAYOUT' => 'Cambia Layout',
    'LBL_RENAME_PAGE' => 'Rinomina Pagina',

    'LBL_LOADING_PAGE' => 'Caricamento Pagina, attendere...',

    'LBL_RELOAD_PAGE' => 'Si prega di <a href="javascript: window.location.reload()">ricaricare la finestra</a> per usare questa Dashlet.',
    'LBL_ADD_DASHLETS' => 'Aggiungi Dashlet di SuiteCRM',
    'LBL_CLOSE_DASHLETS' => 'Chiudi',
    'LBL_OPTIONS' => 'Opzioni',
    'LBL_NUMBER_OF_COLUMNS' => 'Numero di Colonne:',
    'LBL_1_COLUMN' => '1 Colonna',
    'LBL_2_COLUMN' => '2 Colonne',
    'LBL_3_COLUMN' => '3 Colonne',
    'LBL_PAGE_NAME' => 'Titolo Pagina',

    'LBL_SEARCH_RESULTS' => 'Risultato ricerche',
    'LBL_SEARCH_MODULES' => 'Moduli',
    'LBL_SEARCH_CHARTS' => 'Grafici',
    'LBL_SEARCH_TOOLS' => 'Strumenti',
    'LBL_SEARCH_HELP_TITLE' => 'Lavorando con Multiselects e Ricerche salvate',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Nessuna immagine',

    'LBL_MODULE' => 'Modulo',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Copia indirizzo da sinistra:',
    'LBL_SAVE_AND_CONTINUE' => 'Salva e Continua',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Click on the values to select an attribute.</li><li>Ctrl-click & select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,&amp;amp;amp;amp;amp;nbsp; click first value & and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search &amp;amp;amp;amp;amp; Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Errore: Raggiunto il limite di Query di $limit record per modulo $module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Esclusione Notifica Errore.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Errore: non è possibile creare un monitor in quanto il file dei metadati è vuoto o non esiste.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Errore: non c´è nessun monitor configurato per il nome richiesto',
    'ERR_UNDEFINED_METRIC' => 'Errore: impossibile impostare il valore per il parametro indefinito',
    'ERR_STORE_FILE_MISSING' => 'Errore: impossibile trovare il file con le configurazioni salvate',

    'LBL_MONITOR_ID' => 'Id Monitor',
    'LBL_USER_ID' => 'Id Utente',
    'LBL_MODULE_NAME' => 'Nome Modulo',
    'LBL_ITEM_ID' => 'Id Elemento',
    'LBL_ITEM_SUMMARY' => 'Sommario Elementi',
    'LBL_ACTION' => 'Azione',
    'LBL_SESSION_ID' => 'Id Sessione',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack è stato creato per ID utente {0}',
    'LBL_VISIBLE' => 'Record Visibili',
    'LBL_DATE_LAST_ACTION' => 'Data dell´ultima azione',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'non è prima',
    'MSG_IS_MORE_THAN' => 'è più di',
    'MSG_IS_LESS_THAN' => 'è meno di',
    'MSG_SHOULD_BE' => 'dovrebbe essere',
    'MSG_OR_GREATER' => 'o maggiore',

    'LBL_PORTAL_WELCOME_TITLE' => 'Benvenuto nel Portale di SuiteCRM Portal',
    'LBL_PORTAL_WELCOME_INFO' => 'Il Portale di SuiteCRM è un sistema che permette ai clienti di vedere in tempo reale lo stato dei reclami, bugs &  newsletters ecc. Si tratta di un´interfaccia esterna di SuiteCRM che può essere implementata all´interno di ogni sito web. Per ulteriori miglioramenti del portale Self Service, come l´introduzione della gestione dei progetti e dei forum, attendete la prossima release.',
    'LBL_LIST' => 'Elenco',
    'LBL_CREATE_BUG' => 'Crea Bug',
    'LBL_NO_RECORDS_FOUND' => '- 0 Record Trovati -',

    'DATA_TYPE_DUE' => 'Scadenza:',
    'DATA_TYPE_START' => 'Inizio:',
    'DATA_TYPE_SENT' => 'Inviato:',
    'DATA_TYPE_MODIFIED' => 'Modificato:',

    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Conteggio',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'immagine oggetto',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Seleziona Data',

    'LBL_VALIDATE_RANGE' => 'non è all´interno di un valido intervallo',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Si prega di selezionare un intervallo di inizio e uno di fine.',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Si prega di selezionare un valore di inizio e uno di fine per l\'intervallo.',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Tutto',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Il numero di elementi dell\'array passati non corrispondono al numero di elementi dell\'array del risultato.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Errore: Manca la voce di mapping per il modulo.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Errore: Impossibile archiviare dati per il connettore.',
    'LBL_MERGE_CONNECTORS' => 'Visualizza Dati',
    'LBL_REMOVE_MODULE_ENTRY' => 'Sei sicuro di voler disabilitare l´integrazione del connettore per questo modulo?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Per una prestazione ottimale dell´utilizzo di IIS/FastCGI sapi, imposta fastcgi.logging a 0 nel file php.ini.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Nome',
    'LBL_COLLECTION_PRIMARY' => 'Primario',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a',
    'LBL_DESCRIPTION' => 'Descrizione',

    'LBL_YESTERDAY' => 'Ieri',
    'LBL_TODAY' => 'Oggi',
    'LBL_TOMORROW' => 'Domani',
    'LBL_NEXT_WEEK' => 'Settimana prossima',
    'LBL_NEXT_MONDAY' => 'Lunedì prossimo',
    'LBL_NEXT_FRIDAY' => 'Venerdì prossimo',
    'LBL_TWO_WEEKS' => 'Due settimane',
    'LBL_NEXT_MONTH' => 'Mese prossimo',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'Il primo giorno del mese prossimo',
    'LBL_THREE_MONTHS' => 'Tre mesi',
    'LBL_SIXMONTHS' => 'Sei mesi',
    'LBL_NEXT_YEAR' => 'Anno prossimo',
    'LBL_FILTERED' => 'Filtrato',

    //Datetimecombo fields
    'LBL_HOURS' => 'Ore',
    'LBL_MINUTES' => 'Minuti',
    'LBL_MERIDIEM' => 'Meridiano',
    'LBL_DATE' => 'Data',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Aggiornamento automatico',

    'LBL_DURATION_DAY' => 'giorno',
    'LBL_DURATION_HOUR' => 'ora',
    'LBL_DURATION_MINUTE' => 'minuto',
    'LBL_DURATION_DAYS' => 'giorni',
    'LBL_DURATION_HOURS' => 'Ore Durata',
    'LBL_DURATION_MINUTES' => 'Minuti Durata',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Scegli il Mese',
    'LBL_ENTER_YEAR' => 'Inserisci Anno',
    'LBL_ENTER_VALID_YEAR' => 'Si prega di inserire un anno valido',

    //SugarFieldPhone labels
    'LBL_INVALID_USA_PHONE_FORMAT' => 'Si prega di inserire un numero di telefono degli Stati Uniti numerico, comprensivo di prefisso.',

    //File write error label
    'ERR_FILE_WRITE' => 'Errore: impossibile scrivere il file {0}. Si prega di controllare i permessi di sistema e del web server.',
    'ERR_FILE_NOT_FOUND' => 'Errore: impossibile caricare il file {0}. Si prega di controllare i permessi di sistema e del web server.',

    'LBL_AND' => 'E',
    'LBL_BEFORE' => 'Prima',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'File on External Source',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Security',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"This is a sample import file which provides an example of the expected contents of a file that is ready for import."<br />"The file is a comma-delimited .csv file, using double-quotes as the field qualifier."<br /><br />"The header row is the top-most row in the file and contains the field labels as you would see them in the application."<br />"These labels are used for mapping the data in the file to the fields in the application."<br /><br />"Notes: The database names could also be used in the header row. This is useful when you are using phpMyAdmin or another database tool to provide an exported list of data to import."<br />"The column order is not critical as the import process matches the data to the appropriate fields based on the header row."<br /><br /><br />"To use this file as a template, do the following:"<br />"1. Remove the sample rows of data"<br />"2. Remove the help text that you are reading right now"<br />"3. Input your own data into the appropriate rows and columns"<br />"4. Save the file to a known location on your system"<br />"5. Click on the Import option from the Actions menu in the application and choose the file to upload"',
    //define labels to be used for overriding local values during import/export
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assegnato A:',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Utente Assegnato',

    'LBL_PENDING_NOTIFICATIONS' => 'Notifiche',
    'LBL_NOTIFICATIONS_NONE' => 'Nessuna Notifica Recente',
    'LBL_ALT_SORT_DESC' => 'In ordine decrescente',
    'LBL_ALT_SORT_ASC' => 'In ordine crescente',
    'LBL_ALT_SORT' => 'Tipo',
    'LBL_ALT_SHOW_OPTIONS' => 'Mostra Opzioni',
    'LBL_ALT_HIDE_OPTIONS' => 'Nascondi Opzioni',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Sposta le voci selezionate nell´elenco di sinistra',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Sposta le voci selezionate nell´elenco di destra',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Sposta le voci selezionate nell´ordine di visualizzazione verso l´alto',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Sposta le voci selezionate nell´ordine di visualizzazione verso il basso',
    'LBL_ALT_INFO' => 'Informazioni',
    'MSG_DUPLICATE' => 'Il {0} record che stai per creare potrebbe essere un duplicato di un {0} record che già esiste. {1} record che contengono nomi simili sono elencati di seguito..<br>Clicca Crea {1} per continuare con la creazione di questo nuovo record {0}, oppure seleziona un record esistente {0} tra quelli elencati qui sotto.',
    'MSG_SHOW_DUPLICATES' => 'Il {0} record che stai per creare potrebbe essere un duplicato di un {0} record che già esiste. {1} record che contengono nomi simili sono elencati di seguito. Clicca Salva per continuare con la creazione di questo nuovo record {0},oppure clicca Annulla per ritornare al modulo senza averlo creato {0}.',
    'LBL_EMAIL_TITLE' => 'Indirizzo Email',
    'LBL_EMAIL_OPT_TITLE' => 'Indirizzi email opted out',
    'LBL_EMAIL_INV_TITLE' => 'Indirizzo email non valido',
    'LBL_EMAIL_PRIM_TITLE' => 'Imposta indirizzo come predefenito',
    'LBL_SELECT_ALL_TITLE' => 'Seleziona tutto',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Seleziona questa riga',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ERRORE: si è verificato un errore durante il caricamento. Codice Errore: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERRORE: si è verificato un errore durante il caricamento. Codice Errore: {0} - {1}. La dimensione massima di upload è {2}',
    'UPLOAD_ERROR_HOME_TEXT' => 'ERRORE: si è verificato un errore durante il caricamento, si prega di contattare l´amministratore del sistema per un aiuto.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Dimensione Upload ({0} bytes) ha superato la massima consentita: {1} bytes',
    'UPLOAD_REQUEST_ERROR' => 'Si è verificato un errore. Si prega di ricaricare la pagina e riprovare.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Modifica',
    'LBL_EDIT_BUTTON_TITLE' => 'Modifica',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplica',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplica',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Elimina',
    'LBL_DELETE_BUTTON_TITLE' => 'Elimina',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Azioni Multiple', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Azione', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Salva',
    'LBL_SAVE_BUTTON_TITLE' => 'Salva',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Annulla',
    'LBL_CANCEL_BUTTON_TITLE' => 'Annulla',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'il connettore array in {0} è stato definito non correttamente o è vuoto e non può essere usato.',
    'ERR_SUHOSIN' => 'Il flusso di upload viene bloccato da Suhosin, si prega di aggiungere &quot;upload&quot; a suhosin.executor.include.whitelist (per maggiori informazioni vedi suitecrm.log)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Risposta imprevista da parte del server.',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Preventivo',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Prezzo di Vendita',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manualmente',
        '5' => 'Ogni 5 minuti',
        '15' => 'Ogni 15 minuti',
        '30' => 'Ogni 30 minuti',
        '60' => 'Ogni ora',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Un promemoria è vuoto o non corretto.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Non è stato impostato almeno un promemoria via Popup o Email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Non sono stati specificati gli invitati per il promemoria.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Promemoria non comprende tutti gli invitati, si desidera rimuovere il promemoria?',
    'LBL_DELETE_REMINDER' => 'Eliminare il promemoria',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Scegli le colonne',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Salva i cambiamenti',
    'LBL_DISPLAYED' => 'Visualizzati',
    'LBL_HIDDEN' => 'Nascosto',
    'ERR_EMPTY_COLUMNS_LIST' => 'È richiesto almeno un elemento',

    'LBL_FILTER_HEADER_TITLE' => 'Ricerca',

    'LBL_CATEGORY' => 'Categoria',
    'LBL_LIST_CATEGORY' => 'Categoria',
    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Disregard draft', // PR 4042
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'This operation will delete this email, do you want to continue?', // PR 4042
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Applicare un modello Email', // PR 4042
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Questa operazione sovrascriverà il corpo dell\'email, vuoi continuare?', // PR 4042
);

$app_list_strings['moduleList']['Library'] = 'Biblioteca';
$app_list_strings['library_type'] = array(
    'Books' => 'Libri',
    'Music' => 'Musica',
    'DVD' => 'DVD',
    'Magazines' => 'Riviste'
);
$app_list_strings['moduleList']['EmailAddresses'] = 'Indirizzo Email';
$app_list_strings['project_priority_default'] = 'Media';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Alto',
    'Medium' => 'Medio',
    'Low' => 'Basso',
);

$app_list_strings['kbadmin_actions_dom'] =
    array(
        '' => '--Azioni Amministratore-',
        'Create New Tag' => 'Crea Nuovo Tag',
        'Delete Tag' => 'Elimina Tag',
        'Rename Tag' => 'Rinomina Tag',
        'Move Selected Articles' => 'Muovi gli Articoli selezionati',
        'Apply Tags On Articles' => 'Applica i Tags agli Articoli',
        'Delete Selected Articles' => 'Elimina gli Articoli selezionati',
    );

$app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        '' => '',
        'some' => 'Ha allegati',
        'none' => 'Non ha nulla',
        'mime' => 'Specifica il Mime Type',
        'name' => 'Specifica il Nome',
    );

$app_list_strings['moduleList']['KBDocuments'] = 'Documentazione di base';
$app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Crea Articolo';
$app_list_strings['kbdocument_viewing_frequency_dom'] =
    array(
        '' => '',
        'Top_5' => 'Primi 5',
        'Top_10' => 'Primi 10',
        'Top_20' => 'Primi 20',
        'Bot_5' => 'Ultimi 5',
        'Bot_10' => 'Ultimi 10',
        'Bot_20' => 'Ultimi 20',
    );

$app_list_strings['kbdocument_canned_search'] =
    array(
        'all' => 'Tutti',
        'added' => 'Aggiunti negli ultimi 30 giorni',
        'pending' => 'In attesa della mia approvazione',
        'updated' => 'Aggiornati negli ultimi 30 giorni',
        'faqs' => 'FAQ',
    );
$app_list_strings['kbdocument_date_filter_options'] =
    array(
        '' => '',
        'on' => 'Su',
        'before' => 'Prima',
        'after' => 'Dopo',
        'between_dates' => 'E´ tra',
        'last_7_days' => 'Ultimi 7 giorni',
        'next_7_days' => 'Prossimi 7 Giorni',
        'last_month' => 'Mese scorso',
        'this_month' => 'Questo Mese',
        'next_month' => 'Prossimo Mese',
        'last_30_days' => 'Ultimi 30 giorni',
        'next_30_days' => 'Prossimi 30 Giorni',
        'last_year' => 'Anno scorso',
        'this_year' => 'Quest´anno',
        'next_year' => 'L´anno prossimo',
        'isnull' => 'E´ nullo',
    );

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIA',
    'ALGERIA' => 'ALGERIA',
    'AMERICAN SAMOA' => 'SAMOA AMERICANE',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARTIDE',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTINA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'AUSTRIA',
    'AZERBAIJAN' => 'AZERBAIGIAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHREIN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BIELORUSSIA',
    'BELGIUM' => 'BELGIO',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNIA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET',
    'BRAZIL' => 'BRASILE',
    'BRITISH ANTARCTICA TERRITORY' => 'TERRITORIO BRITANNICO DELL\'ANTARTIDE',
    'BRITISH INDIAN OCEAN TERRITORY' => 'TERRITORIO BRITANNICO DELL\'OCEANO INDIANO',
    'BRITISH VIRGIN ISLANDS' => 'ISOLE VERGINI BRITANNICHE',
    'BRITISH WEST INDIES' => 'INDIE OCCIDENTALI BRITANNICHE',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBOGIA',
    'CAMEROON' => 'CAMERUN',
    'CANADA' => 'Canada',
    'CANAL ZONE' => 'ZONA DEL CANALE',
    'CANARY ISLAND' => 'ISOLE CANARIE',
    'CAPE VERDI ISLANDS' => 'CAPO VERDE',
    'CAYMAN ISLANDS' => 'ISOLE CAYMAN',
    'CHAD' => 'CIAD',
    'CHANNEL ISLAND UK' => 'ISOLE DELLA MANICA',
    'CHILE' => 'Cile',
    'CHINA' => 'CINA',
    'CHRISTMAS ISLAND' => 'ISOLA DEL NATALE',
    'COCOS (KEELING) ISLAND' => 'ISOLE COCOS (KEELING)',
    'COLOMBIA' => 'Colombia',
    'COMORO ISLANDS' => 'ISOLE COMORE',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO KINSHASA',
    'COOK ISLANDS' => 'ISOLE COOK',
    'COSTA RICA' => 'Costa Rica',
    'CROATIA' => 'Croazia',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CIPRO',
    'CZECH REPUBLIC' => 'Repubblica Ceca',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'Danimarca',
    'DJIBOUTI' => 'GIBUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'Repubblica Dominicana',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'Ecuador',
    'EGYPT' => 'Egitto',
    'EL SALVADOR' => 'El Salvador',
    'EQUATORIAL GUINEA' => 'GUINEA EQUATORIALE',
    'ESTONIA' => 'Estonia',
    'ETHIOPIA' => 'ETIOPIA',
    'FAEROE ISLANDS' => 'ISOLE FAEROE',
    'FALKLAND ISLANDS' => 'ISOLE FALKLAND',
    'FIJI' => 'FIJI',
    'FINLAND' => 'Finlandia',
    'FRANCE' => 'FRANCIA',
    'FRENCH GUIANA' => 'GUIANA FRANCESE',
    'FRENCH POLYNESIA' => 'POLINESIA FRANCESE',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIA',
    'GERMANY' => 'GERMANIA',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBILTERRA',
    'GREECE' => 'GRECIA',
    'GREENLAND' => 'GROENLANDIA',
    'GUADELOUPE' => 'GUADALUPA',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'UNGHERIA',
    'ICELAND' => 'ISLANDA',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIA',
    'INDONESIA' => 'INDONESIA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAQ',
    'IRELAND' => 'IRLANDA',
    'ISRAEL' => 'ISRAELE',
    'ITALY' => 'ITALIA',
    'IVORY COAST' => 'COSTA D\'AVORIO',
    'JAMAICA' => 'GIAMAICA',
    'JAPAN' => 'GIAPPONE',
    'JORDAN' => 'GIORDANIA',
    'KAZAKHSTAN' => 'KAZAKISTAN',
    'KENYA' => 'KENIA',
    'KOREA' => 'COREA',
    'KOREA, SOUTH' => 'COREA DEL SUD',
    'KUWAIT' => 'HUWAIT',
    'KYRGYZSTAN' => 'KIRGHIZISTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LETTONIA',
    'LEBANON' => 'LIBANO',
    'LEEWARD ISLANDS' => 'ISOLE SOPRAVENTO SETTENTRIONALI',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBIA',
    'LIECHTENSTEIN' => 'Liechtenstein',
    'LITHUANIA' => 'Lituania',
    'LUXEMBOURG' => 'Lussemburgo',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACEDONIA',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'Malaysia',
    'MALDIVES' => 'MALDIVE',
    'MALI' => 'MALI',
    'MALTA' => 'Malta',
    'MARTINIQUE' => 'MARTINICA',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANESIA',
    'MEXICO' => 'Messico',
    'MOLDOVIA' => 'MOLDOVIA',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'Mongolia',
    'MOROCCO' => 'Marocco',
    'MOZAMBIQUE' => 'MOZAMBICO',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'Nepal',
    'NETHERLANDS' => 'Paesi Bassi',
    'NETHERLANDS ANTILLES' => 'ANTILLE OLANDESI',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'PAESI BASSI ANTILLE ZONA NEUTRALE',
    'NEW CALADONIA' => 'NUOVO CALADONIA',
    'NEW HEBRIDES' => 'NUOVE EBRIDI',
    'NEW ZEALAND' => 'Nuova Zelanda',
    'NICARAGUA' => 'Nicaragua',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'ISOLA NORFOLK',
    'NORWAY' => 'Norvegia',
    'OMAN' => 'Oman',
    'OTHER' => 'ALTRO',
    'PACIFIC ISLAND' => 'ISOLE DEL PACIFICO',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'Panama',
    'PAPUA NEW GUINEA' => 'PAPUA NUOVA GUINEA',
    'PARAGUAY' => 'Paraguay',
    'PERU' => 'Perù',
    'PHILIPPINES' => 'FILIPPINE',
    'POLAND' => 'Polonia',
    'PORTUGAL' => 'Portogallo',
    'PORTUGUESE TIMOR' => 'TIMOR EST',
    'PUERTO RICO' => 'Portorico',
    'QATAR' => 'Qatar',
    'REPUBLIC OF BELARUS' => 'REPUBBLICA DI BELARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'REPUBBLICA DEL SUD AFRICA',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'Romania',
    'RUSSIA' => 'Russia',
    'RWANDA' => 'RUANDA',
    'RYUKYU ISLANDS' => 'ISOLE RYUKYU',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'Arabia Saudita',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'Serbia',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'Singapore',
    'SLOVAKIA' => 'Slovacchia',
    'SLOVENIA' => 'Slovenia',
    'SOMALILIAND' => 'SOMALIA',
    'SOUTH AFRICA' => 'Sud Africa',
    'SOUTH YEMEN' => 'YEMEN DEL SUD',
    'SPAIN' => 'Spagna',
    'SPANISH SAHARA' => 'SAHARA SPAGNOLO',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'SAN KITTS E NEVIS',
    'ST. LUCIA' => 'SANTA LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'SW AFRICA',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'Svezia',
    'SWITZERLAND' => 'Svizzera',
    'SYRIA' => 'Siria',
    'TAIWAN' => 'Taiwan',
    'TAJIKISTAN' => 'TAGIKISTAN',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'Thailandia',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'Tunisia',
    'TURKEY' => 'Turchia',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'Ucraina',
    'UNITED ARAB EMIRATES' => 'EMIRATI ARABI UNITI',
    'UNITED KINGDOM' => 'Regno Unito',
    'URUGUAY' => 'Uruguay',
    'US PACIFIC ISLAND' => 'ISOLA DEL PACIFICO DEGLI STATI UNITI',
    'US VIRGIN ISLANDS' => 'ISOLE VERGINI AMERICANE',
    'USA' => 'STATI UNITI D\'AMERICA',
    'UZBEKISTAN' => 'Uzbekistan',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'CITTÀ DEL VATICANO',
    'VENEZUELA' => 'Venezuela',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'ISOLA DI WAKE',
    'WEST INDIES' => 'INDIE OCCIDENTALI',
    'WESTERN SAHARA' => 'SAHARA OCCIDENTALE',
    'YEMEN' => 'Yemen',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'Zimbabwe',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan e Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (cirillico MS)',
    'CP1252' => 'CP1252 (MS Western European &amp;amp;amp;amp;amp; US)',
    'EUC-CN' => 'EUC-CN (GB2312 cinese semplificato)',
    'EUC-JP' => 'EUC-JP (Unix giapponese)',
    'EUC-KR' => 'EUC-KR (coreano)',
    'EUC-TW' => 'EUC-TW (Taiwan)',
    'ISO-2022-JP' => 'ISO-2022-JP (giapponese)',
    'ISO-2022-KR' => 'ISO-2022-KR (coreano)',
    'ISO-8859-1' => 'ISO-8859-1 (Europa occidentale e Stati Uniti)',
    'ISO-8859-2' => 'ISO-8859-2 (Europa centrale e orientale)',
    'ISO-8859-3' => 'ISO-8859-3 (Latino 3)',
    'ISO-8859-4' => 'ISO-8859-3 (Latino 4)',
    'ISO-8859-5' => 'ISO-8859-5 (cirillico)',
    'ISO-8859-6' => 'ISO-8859-6 (arabo)',
    'ISO-8859-7' => 'ISO-8859-7 (Greco)',
    'ISO-8859-8' => 'ISO-8859-8 (ebraico)',
    'ISO-8859-9' => 'ISO-8859-9 (Latino 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latino 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latino 9)',
    'KOI8-R' => 'KOI8-R (cirillico russo)',
    'KOI8-U' => 'KOI8-U (cirillico ucraino)',
    'SJIS' => 'SJIS (MS giapponese)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Africa/Algiers',
    'Africa/Luanda' => 'Africa/Luanda',
    'Africa/Porto-Novo' => 'Africa/Porto-Novo',
    'Africa/Gaborone' => 'Africa/Gaborone',
    'Africa/Ouagadougou' => 'Africa/Ouagadougou',
    'Africa/Bujumbura' => 'Africa/Bujumbura',
    'Africa/Douala' => 'Africa/Douala',
    'Atlantic/Cape_Verde' => 'Atlantic/Capo Verde',
    'Africa/Bangui' => 'Africa/Bangui',
    'Africa/Ndjamena' => 'Africa/Ndjamena',
    'Indian/Comoro' => 'Oceano Indiano/ Comoro',
    'Africa/Kinshasa' => 'Africa/Kinshasa',
    'Africa/Lubumbashi' => 'Africa/Lubumbashi',
    'Africa/Brazzaville' => 'Africa/Brazzaville',
    'Africa/Abidjan' => 'Africa/Abidjan',
    'Africa/Djibouti' => 'Africa/Gibuti',
    'Africa/Cairo' => 'Africa/Cairo',
    'Africa/Malabo' => 'Africa/Malabo',
    'Africa/Asmera' => 'Africa/Asmera',
    'Africa/Addis_Ababa' => 'Africa/Addis Abeba',
    'Africa/Libreville' => 'Africa/Libreville',
    'Africa/Banjul' => 'Africa/Banjul',
    'Africa/Accra' => 'Africa/Accra',
    'Africa/Conakry' => 'Africa/Conakry',
    'Africa/Bissau' => 'Africa/Bissau',
    'Africa/Nairobi' => 'Africa/Nairobi',
    'Africa/Maseru' => 'Africa/Maseru',
    'Africa/Monrovia' => 'Africa/Monrovia',
    'Africa/Tripoli' => 'Africa/Tripoli',
    'Indian/Antananarivo' => 'Oceano Indiano/Antananarivo',
    'Africa/Blantyre' => 'Africa/Blantyre',
    'Africa/Bamako' => 'Africa/Bamako',
    'Africa/Nouakchott' => 'Africa/Nouakchott',
    'Indian/Mauritius' => 'Indian/Mauritius',
    'Indian/Mayotte' => 'Indian/Mayotte',
    'Africa/Casablanca' => 'Africa/Casablanca',
    'Africa/El_Aaiun' => 'Africa/El Aaiun',
    'Africa/Maputo' => 'Africa/Maputo',
    'Africa/Windhoek' => 'Africa/Windhoek',
    'Africa/Niamey' => 'Africa/Niamey',
    'Africa/Lagos' => 'Africa/Lagos',
    'Indian/Reunion' => 'Indian/Reunion',
    'Africa/Kigali' => 'Africa/Kigali',
    'Atlantic/St_Helena' => 'Atlantic/St. Helena',
    'Africa/Sao_Tome' => 'Africa/Sao Tome',
    'Africa/Dakar' => 'Africa/Dakar',
    'Indian/Mahe' => 'Indiano/Mahé',
    'Africa/Freetown' => 'Africa/Freetown',
    'Africa/Mogadishu' => 'Africa/Mogadishu',
    'Africa/Johannesburg' => 'Africa/Johannesburg',
    'Africa/Khartoum' => 'Africa/Khartoum',
    'Africa/Mbabane' => 'Africa/Mbabane',
    'Africa/Dar_es_Salaam' => 'Africa/Dar es Salaam',
    'Africa/Lome' => 'Africa/Lome',
    'Africa/Tunis' => 'Africa/Tunisi',
    'Africa/Kampala' => 'Africa/Kampala',
    'Africa/Lusaka' => 'Africa/Lusaka',
    'Africa/Harare' => 'Africa/Harare',
    'Antarctica/Casey' => 'Antarctica/Casey',
    'Antarctica/Davis' => 'Antarctica/Davis',
    'Antarctica/Mawson' => 'Antarctica/Mawson',
    'Indian/Kerguelen' => 'Indiano/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
    'Antarctica/Syowa' => 'Antarctica/Syowa',
    'Antarctica/Vostok' => 'Antarctica/Vostok',
    'Antarctica/Rothera' => 'Antarctica/Rothera',
    'Antarctica/Palmer' => 'Antarctica/Palmer',
    'Antarctica/McMurdo' => 'Antarctica/McMurdo',
    'Asia/Kabul' => 'Asia/Kabul',
    'Asia/Yerevan' => 'Asia/Yerevan',
    'Asia/Baku' => 'Asia/Baku',
    'Asia/Bahrain' => 'Asia/Bahrain',
    'Asia/Dhaka' => 'Asia/Dhaka',
    'Asia/Thimphu' => 'Asia/Thimphu',
    'Indian/Chagos' => 'Indiano/Chagos',
    'Asia/Brunei' => 'Asia/Brunei',
    'Asia/Rangoon' => 'Asia/Rangoon',
    'Asia/Phnom_Penh' => 'Asia/Phnom Penh',
    'Asia/Beijing' => 'Asia/Pechino',
    'Asia/Harbin' => 'Asia/Harbin',
    'Asia/Shanghai' => 'Asia/Shanghai',
    'Asia/Chongqing' => 'Asia/Chongqing',
    'Asia/Urumqi' => 'Asia/Urumqi',
    'Asia/Kashgar' => 'Asia/Kashgar',
    'Asia/Hong_Kong' => 'Asia/Hong Kong',
    'Asia/Taipei' => 'Asia/Taipei',
    'Asia/Macau' => 'Asia/Macao',
    'Asia/Nicosia' => 'Asia/Nicosia',
    'Asia/Tbilisi' => 'Asia/Tbilisi',
    'Asia/Dili' => 'Asia/Dili',
    'Asia/Calcutta' => 'Asia/Calcutta',
    'Asia/Jakarta' => 'Asia/Jakarta',
    'Asia/Pontianak' => 'Asia/Pontianak',
    'Asia/Makassar' => 'Asia/Makassar',
    'Asia/Jayapura' => 'Asia/Jayapura',
    'Asia/Tehran' => 'Asia/Tehran',
    'Asia/Baghdad' => 'Asia/Baghdad',
    'Asia/Jerusalem' => 'Asia/Jerusalem',
    'Asia/Tokyo' => 'Asia/Tokyo',
    'Asia/Amman' => 'Asia/Amman',
    'Asia/Almaty' => 'Asia/Almaty',
    'Asia/Qyzylorda' => 'Asia/Qyzylorda',
    'Asia/Aqtobe' => 'Asia/Aqtobe',
    'Asia/Aqtau' => 'Asia/Aqtau',
    'Asia/Oral' => 'Asia/oral',
    'Asia/Bishkek' => 'Asia/Bishkek',
    'Asia/Seoul' => 'Asia/Seoul',
    'Asia/Pyongyang' => 'Asia/Pyongyang',
    'Asia/Kuwait' => 'Asia/Kuwait',
    'Asia/Vientiane' => 'Asia/Vientiane',
    'Asia/Beirut' => 'Asia/Beirut',
    'Asia/Kuala_Lumpur' => 'Asia/Kuala Lumpur',
    'Asia/Kuching' => 'Asia/Kuching',
    'Indian/Maldives' => 'Indian/Maldive',
    'Asia/Hovd' => 'Asia/Hovd',
    'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asia/Choibalsan',
    'Asia/Katmandu' => 'Asia/Katmandu',
    'Asia/Muscat' => 'Asia/Muscat',
    'Asia/Karachi' => 'Asia/Karachi',
    'Asia/Gaza' => 'Asia/Gaza',
    'Asia/Manila' => 'Asia/Manila',
    'Asia/Qatar' => 'Asia/Qatar',
    'Asia/Riyadh' => 'Asia/Riyadh',
    'Asia/Singapore' => 'Asia/Singapore',
    'Asia/Colombo' => 'Asia/Colombo',
    'Asia/Damascus' => 'Asia/Damasco',
    'Asia/Dushanbe' => 'Asia/Dushanbe',
    'Asia/Bangkok' => 'Asia/Bangkok',
    'Asia/Ashgabat' => 'Asia/Ashgabat',
    'Asia/Dubai' => 'Asia/Dubai',
    'Asia/Samarkand' => 'Asia/Samarcanda',
    'Asia/Tashkent' => 'Asia/Tashkent',
    'Asia/Saigon' => 'Asia/Saigon',
    'Asia/Aden' => 'Asia/Aden',
    'Australia/Darwin' => 'Australia/Darwin',
    'Australia/Perth' => 'Australia/Perth',
    'Australia/Brisbane' => 'Australia/Brisbane',
    'Australia/Lindeman' => 'Australia/Lindeman',
    'Australia/Adelaide' => 'Australia/Adelaide',
    'Australia/Hobart' => 'Australia/Hobart',
    'Australia/Currie' => 'Australia/Currie',
    'Australia/Melbourne' => 'Australia/Melbourne',
    'Australia/Sydney' => 'Australia/Sydney',
    'Australia/Broken_Hill' => 'Australia/Broken Hill',
    'Indian/Christmas' => 'Indiano/natale',
    'Pacific/Rarotonga' => 'Pacific/Rarotonga',
    'Indian/Cocos' => 'Indian/Cocos',
    'Pacific/Fiji' => 'Pacific/Fiji',
    'Pacific/Gambier' => 'Pacific/Gambier',
    'Pacific/Marquesas' => 'Pacific/Marchesi',
    'Pacific/Tahiti' => 'Pacific/Tahiti',
    'Pacific/Guam' => 'Pacific/Guam',
    'Pacific/Tarawa' => 'Pacific/Tarawa',
    'Pacific/Enderbury' => 'Pacifico/Enderbury',
    'Pacific/Kiritimati' => 'Pacifico/Kiritimati',
    'Pacific/Saipan' => 'Pacifico/Saipan',
    'Pacific/Majuro' => 'Pacifico/Majuro',
    'Pacific/Kwajalein' => 'Pacifico/Kwajalein',
    'Pacific/Truk' => 'Pacifico/Truk',
    'Pacific/Pohnpei' => 'Pacifico/Pohnpei',
    'Pacific/Kosrae' => 'Pacifico/Kosrae',
    'Pacific/Nauru' => 'Pacifico/Nauru',
    'Pacific/Noumea' => 'Pacifico/Noumea',
    'Pacific/Auckland' => 'Pacifico/Auckland',
    'Pacific/Chatham' => 'Pacifico/Chatham',
    'Pacific/Niue' => 'Pacifico/Niue',
    'Pacific/Norfolk' => 'Pacifico/Norfolk',
    'Pacific/Palau' => 'Pacifico/Palau',
    'Pacific/Port_Moresby' => 'Pacifico/Port Moresby',
    'Pacific/Pitcairn' => 'Pacifico/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacifico/Pago Pago',
    'Pacific/Apia' => 'Pacifico/Apia',
    'Pacific/Guadalcanal' => 'Pacifico/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacifico/Fakaofo',
    'Pacific/Tongatapu' => 'Pacifico/Tongatapu',
    'Pacific/Funafuti' => 'Pacifico/Funafuti',
    'Pacific/Johnston' => 'Pacifico/Johnston',
    'Pacific/Midway' => 'Pacifico/Midway',
    'Pacific/Wake' => 'Pacifico/Wake',
    'Pacific/Efate' => 'Pacifico/Efate',
    'Pacific/Wallis' => 'Pacifico/Wallis',
    'Europe/London' => 'Europa/Londra',
    'Europe/Dublin' => 'Europa/Dublino',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europa/Tirane',
    'Europe/Andorra' => 'Europa/Andorra',
    'Europe/Vienna' => 'Europa/Vienna',
    'Europe/Minsk' => 'Europa/Minsk',
    'Europe/Brussels' => 'Europa/Bruxelles',
    'Europe/Sofia' => 'Europa/Sofia',
    'Europe/Prague' => 'Europa/Praga',
    'Europe/Copenhagen' => 'Europa/Copenhagen',
    'Atlantic/Faeroe' => 'Oceano Atlantico/Faeroe',
    'America/Danmarkshavn' => 'America/Danmarkshavn',
    'America/Scoresbysund' => 'America/Scoresbysund',
    'America/Godthab' => 'America/Godthab',
    'America/Thule' => 'America/Thule',
    'Europe/Tallinn' => 'Europa/Tallinn',
    'Europe/Helsinki' => 'Europa/Helsinki',
    'Europe/Paris' => 'Europa/Parigi',
    'Europe/Berlin' => 'Europa/Berlin',
    'Europe/Gibraltar' => 'Europa/Gibilterra',
    'Europe/Athens' => 'Europa/Atene',
    'Europe/Budapest' => 'Europa/Budapest',
    'Atlantic/Reykjavik' => 'Oceano Atlantico/Reykjavik',
    'Europe/Rome' => 'Europa/Roma',
    'Europe/Riga' => 'Europa/Riga',
    'Europe/Vaduz' => 'Europa/Vaduz',
    'Europe/Vilnius' => 'Europa/Vilnius',
    'Europe/Luxembourg' => 'Europa/Lussemburgo',
    'Europe/Malta' => 'Europa/Malta',
    'Europe/Chisinau' => 'Europa/Chisinau',
    'Europe/Monaco' => 'Europa/Monaco',
    'Europe/Amsterdam' => 'Europa/Amsterdam',
    'Europe/Oslo' => 'Europa/Oslo',
    'Europe/Warsaw' => 'Europa/Varsavia',
    'Europe/Lisbon' => 'Europa/Lisbona',
    'Atlantic/Azores' => 'Oceano Atlantico/Azzorre',
    'Atlantic/Madeira' => 'Oceano Atlantico/Madeira',
    'Europe/Bucharest' => 'Europa/Bucarest',
    'Europe/Kaliningrad' => 'Europa/Kaliningrad',
    'Europe/Moscow' => 'Europa/Mosca',
    'Europe/Samara' => 'Europa/Samara',
    'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
    'Asia/Omsk' => 'Asia/Omsk',
    'Asia/Novosibirsk' => 'Asia/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asia/Irkutsk',
    'Asia/Yakutsk' => 'Asia/Yakutsk',
    'Asia/Vladivostok' => 'Asia/Vladivostok',
    'Asia/Sakhalin' => 'Asia/Sakhalin',
    'Asia/Magadan' => 'Asia/Magadan',
    'Asia/Kamchatka' => 'Asia/Kamchatka',
    'Asia/Anadyr' => 'Asia/Anadyr',
    'Europe/Belgrade' => 'Europa/Belgrado',
    'Europe/Madrid' => 'Europe/Madrid',
    'Africa/Ceuta' => 'Africa/Ceuta',
    'Atlantic/Canary' => 'Atlantico/Canarie',
    'Europe/Stockholm' => 'Europa/Stockholm',
    'Europe/Zurich' => 'Europa/Zurigo',
    'Europe/Istanbul' => 'Europa/Istanbul',
    'Europe/Kiev' => 'Europa/Kiev',
    'Europe/Uzhgorod' => 'Europa/Uzhgorod',
    'Europe/Zaporozhye' => 'Europa/Zaporozhye',
    'Europe/Simferopol' => 'Europa/Simferopol',
    'America/New_York' => 'America / New York',
    'America/Chicago' => 'America/Chicago',
    'America/North_Dakota/Center' => 'America/Dakota del nord/centro',
    'America/Denver' => 'America/Denver',
    'America/Los_Angeles' => 'America / Los Angeles',
    'America/Juneau' => 'America/Juneau',
    'America/Yakutat' => 'America/Yakutat',
    'America/Anchorage' => 'America/Anchorage',
    'America/Nome' => 'America/Nome',
    'America/Adak' => 'America/Adak',
    'Pacific/Honolulu' => 'Pacific/Honolulu',
    'America/Phoenix' => 'America/Phoenix',
    'America/Boise' => 'America/Boise',
    'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'America/Indiana/Marengo',
    'America/Indiana/Knox' => 'America/Indiana/Knox',
    'America/Indiana/Vevay' => 'America/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'America/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'America/Kentucky/Monticello',
    'America/Detroit' => 'America/Detroit',
    'America/Menominee' => 'America/Menominee',
    'America/St_Johns' => 'America/St. Johns',
    'America/Goose_Bay' => 'America/Goose_Bay',
    'America/Halifax' => 'America/Halifax',
    'America/Glace_Bay' => 'America/Glace Bay',
    'America/Montreal' => 'America/Montreal',
    'America/Toronto' => 'America/Toronto',
    'America/Thunder_Bay' => 'America/Thunder Bay',
    'America/Nipigon' => 'America/Nipigon',
    'America/Rainy_River' => 'America/Rainy River',
    'America/Winnipeg' => 'America/Winnipeg',
    'America/Regina' => 'America/Regina',
    'America/Swift_Current' => 'America/Swift Current',
    'America/Edmonton' => 'America/Edmonton',
    'America/Vancouver' => 'America/Vancouver',
    'America/Dawson_Creek' => 'America/Dawson Creek',
    'America/Pangnirtung' => 'America/Pangnirtung',
    'America/Iqaluit' => 'America/Iqaluit',
    'America/Coral_Harbour' => 'America/Coral Harbour',
    'America/Rankin_Inlet' => 'America/Rankin Inlet',
    'America/Cambridge_Bay' => 'America/Cambridge Bay',
    'America/Yellowknife' => 'America/Yellowknife',
    'America/Inuvik' => 'America/Inuvik',
    'America/Whitehorse' => 'America/Whitehorse',
    'America/Dawson' => 'America/Dawson',
    'America/Cancun' => 'America/Cancun',
    'America/Merida' => 'America/Merida',
    'America/Monterrey' => 'America/Monterrey',
    'America/Mexico_City' => 'America/Messico City',
    'America/Chihuahua' => 'America/Chihuahua',
    'America/Hermosillo' => 'America/Hermosillo',
    'America/Mazatlan' => 'America/Mazatlan',
    'America/Tijuana' => 'America/Tijuana',
    'America/Anguilla' => 'America/Anguilla',
    'America/Antigua' => 'America/Antigua',
    'America/Nassau' => 'America/Nassau',
    'America/Barbados' => 'America/Barbados',
    'America/Belize' => 'America/Belize',
    'Atlantic/Bermuda' => 'Atlantico/Bermuda',
    'America/Cayman' => 'America/Cayman',
    'America/Costa_Rica' => 'America/Costa Rica',
    'America/Havana' => 'America/Havana',
    'America/Dominica' => 'America/Dominica',
    'America/Santo_Domingo' => 'America/Santo Domingo',
    'America/El_Salvador' => 'America/El Salvador',
    'America/Grenada' => 'America/Grenada',
    'America/Guadeloupe' => 'America/Guadeloupe',
    'America/Guatemala' => 'America/Guatemala',
    'America/Port-au-Prince' => 'America/Port-au-Prince',
    'America/Tegucigalpa' => 'America/Tegucigalpa',
    'America/Jamaica' => 'America/Giamaica',
    'America/Martinique' => 'America/Martinica',
    'America/Montserrat' => 'America/Montserrat',
    'America/Managua' => 'America/Managua',
    'America/Panama' => 'America/Panama',
    'America/Puerto_Rico' => 'America/Puerto_Rico',
    'America/St_Kitts' => 'America/St_Kitts',
    'America/St_Lucia' => 'America/St_Lucia',
    'America/Miquelon' => 'America/Miquelon',
    'America/St_Vincent' => 'America/St. Vincent',
    'America/Grand_Turk' => 'America/Grand Turk',
    'America/Tortola' => 'America/Tortola',
    'America/St_Thomas' => 'America/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos Aires',
    'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
    'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
    'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
    'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
    'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
    'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
    'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia',
    'America/Aruba' => 'America/Aruba',
    'America/La_Paz' => 'America/La Paz',
    'America/Noronha' => 'America/Noronha',
    'America/Belem' => 'America/Belem',
    'America/Fortaleza' => 'America/Fortaleza',
    'America/Recife' => 'America/Recife',
    'America/Araguaina' => 'America/Araguaina',
    'America/Maceio' => 'America/Maceio',
    'America/Bahia' => 'America/Bahia',
    'America/Sao_Paulo' => 'America/Sao Paulo',
    'America/Campo_Grande' => 'America/Campo Grande',
    'America/Cuiaba' => 'America/Cuiaba',
    'America/Porto_Velho' => 'America/Porto_Velho',
    'America/Boa_Vista' => 'America/Boa Vista',
    'America/Manaus' => 'America/Manaus',
    'America/Eirunepe' => 'America/Eirunepe',
    'America/Rio_Branco' => 'America/Rio Branco',
    'America/Santiago' => 'America/Santiago',
    'Pacific/Easter' => 'Pacific/Pasqua',
    'America/Bogota' => 'America/Bogota',
    'America/Curacao' => 'America/Curacao',
    'America/Guayaquil' => 'America/Guayaquil',
    'Pacific/Galapagos' => 'Pacific/Galapagos',
    'Atlantic/Stanley' => 'Atlantic/Stanley',
    'America/Cayenne' => 'America/Cayenne',
    'America/Guyana' => 'America/Guyana',
    'America/Asuncion' => 'America/Asuncion',
    'America/Lima' => 'America/Lima',
    'Atlantic/South_Georgia' => 'Atlantico/South Georgia',
    'America/Paramaribo' => 'America/Paramaribo',
    'America/Port_of_Spain' => 'America/Port-of-Spain',
    'America/Montevideo' => 'America/Montevideo',
    'America/Caracas' => 'America/Caracas',
);

$app_list_strings['moduleList']['Sugar_Favorites'] = 'Preferiti';
$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google Docs',
    'Box' => 'Box.Net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Contatti Google',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Richiesta',
    2 => 'Accesso',
    3 => 'Non valido',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Campagna',
    'email' => 'Emails',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Campagna',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Campagna',
    'email' => 'Emails',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Documentazione di base'; // Shows in the ALL menu entries
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categorie'; // Shows in the ALL menu entries
$app_list_strings['aok_status_list']['Draft'] = 'Bozza';
$app_list_strings['aok_status_list']['Expired'] = 'Scaduto';
$app_list_strings['aok_status_list']['In_Review'] = 'In Revisione';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privato';
$app_list_strings['aok_status_list']['published_public'] = 'Pubblico';

$app_list_strings['moduleList']['FP_events'] = 'Eventi';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Posizioni';
$app_list_strings['invite_template_list'][''] = '';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invitato';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Non Invitato';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Partecipato';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Non Partecipato';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Accetta';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Rifiutato';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Nessuna Risposta';

$app_strings['LBL_STATUS_EVENT'] = 'Stato Invito';
$app_strings['LBL_ACCEPT_STATUS'] = 'Stato Accettato';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Pagina corrente';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Elenco intero';
$app_strings['LBL_LISTVIEW_NONE'] = 'Nessuno';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Indice Evento';
$app_list_strings['moduleList']['AOD_Index'] = 'Indici';

$app_list_strings['moduleList']['AOP_AOP_Case_Events'] = 'Eventi Reclami';
$app_list_strings['moduleList']['AOP_AOP_Case_Updates'] = 'Aggiornamenti Reclamo';
$app_list_strings['moduleList']['AOP_Case_Events'] = 'Eventi Reclami';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Aggiornamenti Reclamo';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Rispondere sotto questa linea ==========';



//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Aperto',
        'Closed' => 'Chiuso',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Nuovo',
        'Open_Assigned' => 'Assegnato',
        'Closed_Closed' => 'Chiuso',
        'Open_Pending Input' => 'In attesa di input',
        'Closed_Rejected' => 'Rifiutato',
        'Closed_Duplicate' => 'Duplicato',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Utente Singolo',
        'Account' => 'Azienda',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Usa Default AOP',
    'singleUser' => 'Utente Singolo',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Meno Occupato',
    'random' => 'Casuale',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Reports';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Report Condizioni';
$app_list_strings['moduleList']['AOR_Charts'] = 'Report Tabelle';
$app_list_strings['moduleList']['AOR_Fields'] = 'Report Campi';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Reports Schedulati';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Uguale A';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Diverso Da';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Maggiore di';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Meno di';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Maggiore O Uguale A';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Minore O Uguale A';
$app_list_strings['aor_operator_list']['Contains'] = 'Contiene';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Inizia con';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Termina Con';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y'] = 'A';
$app_list_strings['aor_condition_operator_list']['And'] = 'E';
$app_list_strings['aor_condition_operator_list']['OR'] = 'o';
$app_list_strings['aor_condition_type_list']['Value'] = 'Valore';
$app_list_strings['aor_condition_type_list']['Field'] = 'Campo';
$app_list_strings['aor_condition_type_list']['Date'] = 'Data';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Uno Di';
$app_list_strings['aor_condition_type_list']['Period'] = 'Arco Temporale';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Utente Attuale';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minuti';
$app_list_strings['aor_date_type_list']['hour'] = 'Ore';
$app_list_strings['aor_date_type_list']['day'] = 'Giorni';
$app_list_strings['aor_date_type_list']['week'] = 'Settimane';
$app_list_strings['aor_date_type_list']['month'] = 'Mesi';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Ore Lavorative';
$app_list_strings['aor_date_options']['now'] = 'Ora';
$app_list_strings['aor_date_options']['field'] = 'Questo Campo';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Ascendente';
$app_list_strings['aor_sort_operator']['DESC'] = 'Discendente';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Conta';
$app_list_strings['aor_function_list']['MIN'] = 'Minimo';
$app_list_strings['aor_function_list']['MAX'] = 'Massimo';
$app_list_strings['aor_function_list']['SUM'] = 'Somma';
$app_list_strings['aor_function_list']['AVG'] = 'Media';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Conta';
$app_list_strings['aor_total_options']['SUM'] = 'Somma';
$app_list_strings['aor_total_options']['AVG'] = 'Media';
$app_list_strings['aor_chart_types']['bar'] = 'Grafico a Barre';
$app_list_strings['aor_chart_types']['line'] = 'Grafico a Linee';
$app_list_strings['aor_chart_types']['pie'] = 'Grafico a Torta';
$app_list_strings['aor_chart_types']['radar'] = 'Grafico Radar';
$app_list_strings['aor_chart_types']['polar'] = 'Grafico Polare';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Grafico a Barre Impilate';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grafico a Barre Raggruppate';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Mensile';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Settimanale';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Giornaliero';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Attiva account di posta elettronica';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Non Attivo';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Emails';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Assegnato a';
$app_list_strings['aor_email_type_list']['Users'] = 'Utenti';
$app_list_strings['aor_assign_options']['all'] = 'Tutti gli Utenti';
$app_list_strings['aor_assign_options']['role'] = 'Tutti gli Utenti nel Ruolo';
$app_list_strings['aor_assign_options']['security_group'] = 'Tutti gli Utenti nel Gruppo di Sicurezza';
$app_list_strings['date_time_period_list']['today'] = 'Oggi';
$app_list_strings['date_time_period_list']['yesterday'] = 'Ieri';
$app_list_strings['date_time_period_list']['this_week'] = 'Settimana Corrente';
$app_list_strings['date_time_period_list']['last_week'] = 'Settimana Precedente';
$app_list_strings['date_time_period_list']['last_month'] = 'Mese Precedente';
$app_list_strings['date_time_period_list']['this_month'] = 'Questo Mese';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Trimestre Corrente';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Trimestre Precedente';
$app_list_strings['date_time_period_list']['this_year'] = 'Anno Corrente';
$app_list_strings['date_time_period_list']['last_year'] = 'Anno Precedente';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'il';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'il';
$app_strings['LBL_CRON_AT'] = 'alle';
$app_strings['LBL_CRON_RAW'] = 'Avanzate';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Ore';
$app_strings['LBL_CRON_DAY'] = 'Giorno';
$app_strings['LBL_CRON_MONTH'] = 'Mese';
$app_strings['LBL_CRON_DOW'] = 'Giorno della Settimana';
$app_strings['LBL_CRON_DAILY'] = 'Giornaliero';
$app_strings['LBL_CRON_WEEKLY'] = 'Settimanale';
$app_strings['LBL_CRON_MONTHLY'] = 'Mensile';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Contratti';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Fatture';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Modelli';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Prodotti - Categorie';
$app_list_strings['moduleList']['AOS_Products'] = 'Prodotti';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Listini';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Gruppi di Prodotti';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Preventivi';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analista';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Concorrente';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Cliente';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integratore';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investitore';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Stampa';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospetto';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Rivneditore';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Altro';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Bozza';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'In trattitiva';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Consegnato';
$app_list_strings['quote_stage_dom']['On Hold'] = 'In Attesa';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Confermato';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Chiuso - Accettato';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Chiuso - Perso';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Chiuso - Estinto';
$app_list_strings['quote_term_dom']['Net 15'] = 'Net 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Net 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Approvato';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Non Approvato';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Percentuale';
$app_list_strings['discount_list']['Amount'] = 'Importo';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analista';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Concorrente';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Cliente';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integratore';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investitore';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Stampa';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospetto';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Rivneditore';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Altro';
$app_list_strings['invoice_status_dom']['Paid'] = 'Pagato';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Non pagato';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Cancellato';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Non Fatturato';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Fatturato';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Portatili';
$app_list_strings['product_category_dom']['Desktops'] = 'Desktop';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Prodotto';
$app_list_strings['product_type_dom']['Service'] = 'Servizio';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Preventivi';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Fatture';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Contratti';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Preventivi';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Fatture';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Contratti';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Aziende';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Contatti';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Lead';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Non Iniziato';
$app_list_strings['contract_status_list']['In Progress'] = 'In corso';
$app_list_strings['contract_status_list']['Signed'] = 'Approvato';
$app_list_strings['contract_type_list']['Type'] = 'Tipo';
$app_strings['LBL_PRINT_AS_PDF'] = 'Stampa come PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Seleziona un modello';
$app_strings['LBL_NO_TEMPLATE'] = 'ERRORE\nNessun modello trovato.\nCrea un nuovo modello attraverso il modulo Modelli PDF';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Flusso di lavoro';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Condizioni flusso di lavoro';
$app_list_strings['moduleList']['AOW_Processed'] = 'Processo di Revisione';
$app_list_strings['moduleList']['AOW_Actions'] = 'Azioni del flusso di lavoro';
$app_list_strings['aow_status_list']['Active'] = 'Attiva account di posta elettronica';
$app_list_strings['aow_status_list']['Inactive'] = 'Non Attivo';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Uguale A';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Diverso Da';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Maggiore di';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Meno di';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Maggiore O Uguale Di';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Minore O Uguale Di';
$app_list_strings['aow_operator_list']['Contains'] = 'Contiene';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Inizia con';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Termina Con';
$app_list_strings['aow_operator_list']['is_null'] = 'E´ nullo';
$app_list_strings['aow_sql_operator_list']['Equal_To'] = '=';
$app_list_strings['aow_sql_operator_list']['Not_Equal_To'] = '!=';
$app_list_strings['aow_sql_operator_list']['Greater_Than'] = '>';
$app_list_strings['aow_sql_operator_list']['Less_Than'] = '<';
$app_list_strings['aow_sql_operator_list']['Greater_Than_or_Equal_To'] = '>=';
$app_list_strings['aow_sql_operator_list']['Less_Than_or_Equal_To'] = '<=';
$app_list_strings['aow_sql_operator_list']['Contains'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Starts_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Ends_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['is_null'] = 'IS NULL';
$app_list_strings['aow_process_status_list']['Complete'] = 'Completo';
$app_list_strings['aow_process_status_list']['Running'] = 'In Esecuzione';
$app_list_strings['aow_process_status_list']['Pending'] = 'In Attesa';
$app_list_strings['aow_process_status_list']['Failed'] = 'Fallito';
$app_list_strings['aow_condition_operator_list']['And'] = 'E';
$app_list_strings['aow_condition_operator_list']['OR'] = 'o';
$app_list_strings['aow_condition_type_list']['Value'] = 'Valore';
$app_list_strings['aow_condition_type_list']['Field'] = 'Campo';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Ogni Modifica';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Data';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Uno Di';
$app_list_strings['aow_action_type_list']['Value'] = 'Valore';
$app_list_strings['aow_action_type_list']['Field'] = 'Campo';
$app_list_strings['aow_action_type_list']['Date'] = 'Data';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Meno Occupato';
$app_list_strings['aow_action_type_list']['Random'] = 'Casuale';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Valore';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Campo';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minuti';
$app_list_strings['aow_date_type_list']['hour'] = 'Ore';
$app_list_strings['aow_date_type_list']['day'] = 'Giorni';
$app_list_strings['aow_date_type_list']['week'] = 'Settimane';
$app_list_strings['aow_date_type_list']['month'] = 'Mesi';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Ore Lavorative';
$app_list_strings['aow_date_options']['now'] = 'Ora';
$app_list_strings['aow_date_options']['today'] = 'Oggi';
$app_list_strings['aow_date_options']['field'] = 'Questo Campo';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Tutti Gli Utenti';
$app_list_strings['aow_assign_options']['role'] = 'Tutti Gli Utenti del Ruolo';
$app_list_strings['aow_assign_options']['security_group'] = 'Tutti Gli Utenti nel Gruppo di Sicurezza';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Emails';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Registrare Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Campo Collegato';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Assegnato a';
$app_list_strings['aow_email_type_list']['Users'] = 'Utenti';
$app_list_strings['aow_email_type_list']['Record Field'] = 'Campo';
$app_list_strings['aow_email_to_list']['to'] = 'A';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Ccn';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Tutti i Records';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nuovo Records';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Records Modificati';
$app_list_strings['aow_run_when_list']['Always'] = 'Sempre';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Solo Al Salvataggio';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Solo nello Schedulatore';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Progetti - modelli';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Templates Attività di Progetto';
$app_list_strings['relationship_type_list']['FS'] = 'Finire per partire';
$app_list_strings['relationship_type_list']['SS'] = 'Avvia per partire';
$app_list_strings['moduleList']['AM_ProjectHolidays'] = 'Vacanze Progetto';
$app_list_strings['holiday_resource_dom']['Contacts'] = 'Contatti';
$app_list_strings['holiday_resource_dom']['Users'] = 'Utenti';
$app_list_strings['duration_unit_dom']['Days'] = 'Giorni';
$app_list_strings['duration_unit_dom']['Hours'] = 'Ore';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Visualizza Gantt';
$app_strings['LBL_GANTT_BUTTON_TITLE'] = 'Visualizza Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Mostra Dettagli';
$app_strings['LBL_DETAIL_BUTTON_TITLE'] = 'Mostra Dettagli';
$app_strings['LBL_CREATE_PROJECT'] = 'Nuovo Progetto';

//gmaps
$app_strings['LBL_MAP'] = 'Mappa';
$app_strings['LBL_MAPS'] = 'Mappe';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitudine';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitudine';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode Stato';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Indirizzi';
$app_strings['LBL_BUG_FIX'] = 'Correzione Errore';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Mappe';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Mappe - markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Mappe - aree';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Mappe - indirizzo Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'Miglia';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometri';

$app_list_strings['map_module_type_list']['Accounts'] = 'Aziende';
$app_list_strings['map_module_type_list']['Contacts'] = 'Contatti';
$app_list_strings['map_module_type_list']['Cases'] = 'Reclami';
$app_list_strings['map_module_type_list']['Leads'] = 'Lead';
$app_list_strings['map_module_type_list']['Meetings'] = 'Visualizza Riunioni';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Opportunità';
$app_list_strings['map_module_type_list']['Project'] = 'Progetti';
$app_list_strings['map_module_type_list']['Prospects'] = 'Obiettivi';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Azienda';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Contatto';
$app_list_strings['map_relate_type_list']['Cases'] = 'Reclamo';
$app_list_strings['map_relate_type_list']['Leads'] = 'Leads';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Riunione';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Nome Opportunit&agrave';
$app_list_strings['map_relate_type_list']['Project'] = 'Progetto';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Obiettivo';

$app_list_strings['marker_image_list']['accident'] = 'Incidente';
$app_list_strings['marker_image_list']['administration'] = 'Amministrazione';
$app_list_strings['marker_image_list']['agriculture'] = 'Agricoltura';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Piccolo Aeroveicolo';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Turismo Aereo';
$app_list_strings['marker_image_list']['airport'] = 'Aeroporto';
$app_list_strings['marker_image_list']['amphitheater'] = 'Anfiteatro';
$app_list_strings['marker_image_list']['apartment'] = 'Appartamento';
$app_list_strings['marker_image_list']['aquarium'] = 'Acquario';
$app_list_strings['marker_image_list']['arch'] = 'Arco';
$app_list_strings['marker_image_list']['atm'] = 'Atm.';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Banca';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banca Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banca Sterlina';
$app_list_strings['marker_image_list']['bar'] = 'Barra';
$app_list_strings['marker_image_list']['beach'] = 'Spiaggia';
$app_list_strings['marker_image_list']['beautiful'] = 'Bello';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Parcheggio Bici';
$app_list_strings['marker_image_list']['big_city'] = 'Grande Città';
$app_list_strings['marker_image_list']['bridge'] = 'Ponte';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Ponte Moderno';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Funivia';
$app_list_strings['marker_image_list']['car'] = 'Auto';
$app_list_strings['marker_image_list']['car_rental'] = 'Autonoleggio';
$app_list_strings['marker_image_list']['carrepair'] = 'Autofficina';
$app_list_strings['marker_image_list']['castle'] = 'Castello';
$app_list_strings['marker_image_list']['cathedral'] = 'Cattedrale';
$app_list_strings['marker_image_list']['chapel'] = 'Cappella';
$app_list_strings['marker_image_list']['church'] = 'Chiesa';
$app_list_strings['marker_image_list']['city_square'] = 'Piazza Cittadina';
$app_list_strings['marker_image_list']['cluster'] = 'Gruppo';
$app_list_strings['marker_image_list']['cluster_2'] = 'Gruppo 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Gruppo 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Gruppo 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Gruppo 5';
$app_list_strings['marker_image_list']['coffee'] = 'Caffè';
$app_list_strings['marker_image_list']['community_centre'] = 'Centro Comunitario';
$app_list_strings['marker_image_list']['company'] = 'Azienda';
$app_list_strings['marker_image_list']['conference'] = 'Conferenza';
$app_list_strings['marker_image_list']['construction'] = 'Costruzioni';
$app_list_strings['marker_image_list']['convenience'] = 'Servizi';
$app_list_strings['marker_image_list']['court'] = 'Tribunale';
$app_list_strings['marker_image_list']['cruise'] = 'Crociera';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Cambiavalute';
$app_list_strings['marker_image_list']['customs'] = 'Dogana';
$app_list_strings['marker_image_list']['cycling'] = 'Ciclismo';
$app_list_strings['marker_image_list']['dam'] = 'Diga';
$app_list_strings['marker_image_list']['days_dim'] = 'Giorni Dim';
$app_list_strings['marker_image_list']['days_dom'] = 'Giorni Dom';
$app_list_strings['marker_image_list']['days_jeu'] = 'Giorni Jeu';
$app_list_strings['marker_image_list']['days_jue'] = 'Giorni Jue';
$app_list_strings['marker_image_list']['days_lun'] = 'Giorni Lun';
$app_list_strings['marker_image_list']['days_mar'] = 'Giorni Mar';
$app_list_strings['marker_image_list']['days_mer'] = 'Giorni Mer';
$app_list_strings['marker_image_list']['days_mie'] = 'Giorni Mie';
$app_list_strings['marker_image_list']['days_qua'] = 'Giorni Qua';
$app_list_strings['marker_image_list']['days_qui'] = 'Giorni Qui';
$app_list_strings['marker_image_list']['days_sab'] = 'Giorni Sab';
$app_list_strings['marker_image_list']['days_sam'] = 'Giorni Sam';
$app_list_strings['marker_image_list']['days_seg'] = 'Giorni Seg';
$app_list_strings['marker_image_list']['days_sex'] = 'Giorni Sex';
$app_list_strings['marker_image_list']['days_ter'] = 'Giorni Ter';
$app_list_strings['marker_image_list']['days_ven'] = 'Giorni Ven';
$app_list_strings['marker_image_list']['days_vie'] = 'Giorni Vie';
$app_list_strings['marker_image_list']['dentist'] = 'Dentista';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Grandi Magazzini';
$app_list_strings['marker_image_list']['disability'] = 'Disabilità';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Parcheggio disabili';
$app_list_strings['marker_image_list']['doctor'] = 'Medico';
$app_list_strings['marker_image_list']['dog_leash'] = 'Cani al guinzaglio';
$app_list_strings['marker_image_list']['down'] = 'Avanti';
$app_list_strings['marker_image_list']['down_left'] = 'Avanti a Sinistra';
$app_list_strings['marker_image_list']['down_right'] = 'Avanti a Destra';
$app_list_strings['marker_image_list']['down_then_left'] = 'Avanti, poi a Sinistra';
$app_list_strings['marker_image_list']['down_then_right'] = 'Avanti, poi a Destra';
$app_list_strings['marker_image_list']['drugs'] = 'Drogheria';
$app_list_strings['marker_image_list']['elevator'] = 'Ascensore';
$app_list_strings['marker_image_list']['embassy'] = 'Ambasciata';
$app_list_strings['marker_image_list']['expert'] = 'Esperto';
$app_list_strings['marker_image_list']['factory'] = 'Fabbrica';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Caduta Massi';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast Food';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fiordo';
$app_list_strings['marker_image_list']['forest'] = 'Foresta';
$app_list_strings['marker_image_list']['fountain'] = 'Fontana';
$app_list_strings['marker_image_list']['friday'] = 'Venerdì';
$app_list_strings['marker_image_list']['garden'] = 'Giardino';
$app_list_strings['marker_image_list']['gas_station'] = 'Stazione di Rifornimento';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Oggetti da Regalo';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Frutta e Verdura';
$app_list_strings['marker_image_list']['hairsalon'] = 'Parrucchiere';
$app_list_strings['marker_image_list']['helicopter'] = 'Elicottero';
$app_list_strings['marker_image_list']['highway'] = 'Autostrada';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Quartiere Storico';
$app_list_strings['marker_image_list']['home'] = 'Pagina iniziale';
$app_list_strings['marker_image_list']['hospital'] = 'Ospedale';
$app_list_strings['marker_image_list']['hostel'] = 'Ostello';
$app_list_strings['marker_image_list']['hotel'] = 'Albergo';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Albergo 1 stella';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Albergo 2 stelle';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Albergo 3 stelle';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Albergo 4 stelle';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Albergo 5 stelle';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Palazzo di Giustizia';
$app_list_strings['marker_image_list']['lake'] = 'Lago';
$app_list_strings['marker_image_list']['laundromat'] = 'Lavanderia Automatica';
$app_list_strings['marker_image_list']['left'] = 'Sinistra';
$app_list_strings['marker_image_list']['left_then_down'] = 'Sinistra, poi Avanti';
$app_list_strings['marker_image_list']['left_then_up'] = 'Sinistra, poi Su';
$app_list_strings['marker_image_list']['library'] = 'Biblioteca';
$app_list_strings['marker_image_list']['lighthouse'] = 'Faro';
$app_list_strings['marker_image_list']['liquor'] = 'Vini e Liquori';
$app_list_strings['marker_image_list']['lock'] = 'Chiusa';
$app_list_strings['marker_image_list']['main_road'] = 'Strada Principale';
$app_list_strings['marker_image_list']['massage'] = 'Massaggi';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Torre Fonia Mobile';
$app_list_strings['marker_image_list']['modern_tower'] = 'Torre moderna';
$app_list_strings['marker_image_list']['monastery'] = 'Monastero';
$app_list_strings['marker_image_list']['monday'] = 'Lunedì';
$app_list_strings['marker_image_list']['monument'] = 'Monumento';
$app_list_strings['marker_image_list']['mosque'] = 'Moschea';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motoveicolo';
$app_list_strings['marker_image_list']['museum'] = 'Museo';
$app_list_strings['marker_image_list']['music_live'] = 'Musica dal vivo';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Pompa petrolifera a cavalletto';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palazzo';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramica';
$app_list_strings['marker_image_list']['park'] = 'Parco';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parcheggio Scambiatore';
$app_list_strings['marker_image_list']['parking'] = 'Parcheggio';
$app_list_strings['marker_image_list']['photo'] = 'Foto';
$app_list_strings['marker_image_list']['picnic'] = 'Pic-nic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Luoghi non visitati';
$app_list_strings['marker_image_list']['places_visited'] = 'Luoghi visitati';
$app_list_strings['marker_image_list']['playground'] = 'Parco Giochi';
$app_list_strings['marker_image_list']['police'] = 'Polizia';
$app_list_strings['marker_image_list']['port'] = 'Porto';
$app_list_strings['marker_image_list']['postal'] = 'Postale';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Traliccio elettrico';
$app_list_strings['marker_image_list']['power_plant'] = 'Centrale Elettrica';
$app_list_strings['marker_image_list']['power_substation'] = 'Cabina di Trasformazione';
$app_list_strings['marker_image_list']['public_art'] = 'Arte Pubblica';
$app_list_strings['marker_image_list']['rain'] = 'Pioggia';
$app_list_strings['marker_image_list']['real_estate'] = 'Immobiliare';
$app_list_strings['marker_image_list']['regroup'] = 'Raggruppa';
$app_list_strings['marker_image_list']['resort'] = 'Resort';
$app_list_strings['marker_image_list']['restaurant'] = 'Ristorante';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Ristorante Africano';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Ristorante Barbecue';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Ristorante Buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Ristorante Cinese';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Ristorante di Pesce';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Ristorante Fish&Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Ristorante per Buongustai';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Ristorante Greco';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Ristorante Indiano';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Ristorante Italiano';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Ristorante Giapponese';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Ristorante Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Ristorante Coreano';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Ristorante Mediterraneo';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Ristorante Messicano';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Ristorante Romantico';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Ristorante Thailandese';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Ristorante Turco';
$app_list_strings['marker_image_list']['right'] = 'Destra';
$app_list_strings['marker_image_list']['right_then_down'] = 'Destra, poi Avanti';
$app_list_strings['marker_image_list']['right_then_up'] = 'Destra, poi Su';
$app_list_strings['marker_image_list']['saturday'] = 'Sabato';
$app_list_strings['marker_image_list']['school'] = 'Scuola';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Centro Commerciale';
$app_list_strings['marker_image_list']['shore'] = 'Riva';
$app_list_strings['marker_image_list']['sight'] = 'Vista';
$app_list_strings['marker_image_list']['small_city'] = 'Piccola Città';
$app_list_strings['marker_image_list']['snow'] = 'Neve';
$app_list_strings['marker_image_list']['spaceport'] = 'Spazioporto';
$app_list_strings['marker_image_list']['speed_100'] = 'Velocità 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Velocità 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Velocità 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Velocità 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Velocità 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Velocità 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Velocità 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Velocità 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Velocità 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Velocità 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Velocità 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Velocità 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Dosso Artificiale';
$app_list_strings['marker_image_list']['stadium'] = 'Stadio';
$app_list_strings['marker_image_list']['statue'] = 'Statua';
$app_list_strings['marker_image_list']['steam_train'] = 'Treno a Vapore';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Semaforo';
$app_list_strings['marker_image_list']['subway'] = 'Metropolitana';
$app_list_strings['marker_image_list']['sun'] = 'Dom';
$app_list_strings['marker_image_list']['sunday'] = 'Domenica';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermercato';
$app_list_strings['marker_image_list']['synagogue'] = 'Sinagoga';
$app_list_strings['marker_image_list']['tapas'] = 'Aperitivi';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Corsia Taxi';
$app_list_strings['marker_image_list']['teahouse'] = 'Casa da Tè';
$app_list_strings['marker_image_list']['telephone'] = 'Telefono';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Tempio Indù';
$app_list_strings['marker_image_list']['terrace'] = 'Terrazza';
$app_list_strings['marker_image_list']['text'] = 'Testo';
$app_list_strings['marker_image_list']['theater'] = 'Teatro';
$app_list_strings['marker_image_list']['theme_park'] = 'Parco a Tema';
$app_list_strings['marker_image_list']['thursday'] = 'Giovedì';
$app_list_strings['marker_image_list']['toilets'] = 'Servizi Igienici';
$app_list_strings['marker_image_list']['toll_station'] = 'Pedaggio';
$app_list_strings['marker_image_list']['tower'] = 'Torre';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Telecamera Autovelox';
$app_list_strings['marker_image_list']['train'] = 'Treno';
$app_list_strings['marker_image_list']['tram'] = 'Tram';
$app_list_strings['marker_image_list']['truck'] = 'Camion';
$app_list_strings['marker_image_list']['tuesday'] = 'Martedì';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Girare a Sinistra';
$app_list_strings['marker_image_list']['turn_right'] = 'Girare a Destra';
$app_list_strings['marker_image_list']['university'] = 'Università';
$app_list_strings['marker_image_list']['up'] = 'Su';
$app_list_strings['marker_image_list']['up_left'] = 'Su a Sinistra';
$app_list_strings['marker_image_list']['up_right'] = 'Su a Destra';
$app_list_strings['marker_image_list']['up_then_left'] = 'Su, poi a Sinistra';
$app_list_strings['marker_image_list']['up_then_right'] = 'Su, poi a Destra';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Acqua';
$app_list_strings['marker_image_list']['waterfall'] = 'Cascata';
$app_list_strings['marker_image_list']['watermill'] = 'Mulino ad Acqua';
$app_list_strings['marker_image_list']['waterpark'] = 'Acquapark';
$app_list_strings['marker_image_list']['watertower'] = 'Serbatoio idrico a Torre';
$app_list_strings['marker_image_list']['wednesday'] = 'Mercoledì';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Pala Eolica';
$app_list_strings['marker_image_list']['windmill'] = 'Mulino a Vento';
$app_list_strings['marker_image_list']['winery'] = 'Enoteca';
$app_list_strings['marker_image_list']['work_office'] = 'Ufficio';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Luogo patrimonio mondiale';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Fuori Ufficio';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'In Riunione';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Rischedula';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Inserire le informazioni per la rischedulazione. Grazie';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Data:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Motivo:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Seleziona una data valida';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Seleziona un motivo';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Rischedula';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Storico Tentativi di Chiamata';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Tentativi di Chiamata';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Gestione Gruppi di Sicurezza';
$app_strings['LBL_LOGIN_AS'] = 'Inizio attività come ';
$app_strings['LBL_LOGOUT_AS'] = 'Termine attività come ';
$app_strings['LBL_SECURITYGROUP'] = 'Gruppi di Sicurezza';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Accounts Email in uscita';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_FACEBOOK_USER_C'] = 'Utente Facebook';
$app_strings['LBL_TWITTER_USER_C'] = 'Utente Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Dettagli Social Feed';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Ricerca';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Nuova Azienda';
$app_strings['LBL_QUICK_CONTACT'] = 'Nuovo Contatto';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Nuova Opportunità';
$app_strings['LBL_QUICK_LEAD'] = 'Nuovo Lead';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Nuovo Documento';
$app_strings['LBL_QUICK_CALL'] = 'Schedula chiamata';
$app_strings['LBL_QUICK_TASK'] = 'Nuovo Compito';
$app_strings['LBL_COLLECTION_TYPE'] = 'Tipo';

$app_strings['LBL_ADD_TAB'] = 'Aggiungi Tab';
$app_strings['LBL_EDIT_TAB'] = 'Modifica Schede';
$app_strings['LBL_SUITE_DASHBOARD'] = 'Dashboard di SuiteCRM'; //Can be translated in all caps. This string will be used by SuiteP template menu actions
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Nome Dashboard:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Numero di Colonne:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Conferma cancellazione di ';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'cruscotto?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Aggiungi Pagina Dashboard';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Cancella Pagina Dashboard Corrente';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Rinomina Pagina Dashboard';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'Azioni'; //Can be translated in all caps. This string will be used by SuiteP template menu actions

$app_strings['LBL_DISCOVER_SUITECRM'] = 'Scoprire SuiteCRM';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Visualizza Compiti',
    'Meetings' => 'Visualizza Riunioni',
    'Calls' => 'Visualizza Chiamate',
    'Notes' => 'Descrizione:',
    'Emails' => 'Email'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Editor dei modelli';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Avete cliccato fuori dal campo che si stava modificando senza salvarlo. Fare clic su ok se vuoi perdere le modifiche o su Annulla se si desidera continuare a modificare";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "C'era un errore durante il caricamento del campo. La sessione potrebbe essere in timeout. Effettua il login nuovamente per risolvere il problema";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Vendite',
    'getAccountsSpotsData' => 'Aziende',
    'getLeadsSpotsData' => 'Lead',
    'getServiceSpotsData' => 'Servizio',
    'getMarketingSpotsData' => 'Marketing',
    'getMarketingActivitySpotsData' => 'Attività di marketing',
    'getActivitiesSpotsData' => 'Attività',
    'getQuotesSpotsData' => 'Preventivi'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Ore Lavorative';
$app_list_strings['business_hours_list']['0'] = '12 am';
$app_list_strings['business_hours_list']['1'] = '01:00';
$app_list_strings['business_hours_list']['2'] = '02:00';
$app_list_strings['business_hours_list']['3'] = '03:00';
$app_list_strings['business_hours_list']['4'] = '04:00';
$app_list_strings['business_hours_list']['5'] = '05:00';
$app_list_strings['business_hours_list']['6'] = '06:00';
$app_list_strings['business_hours_list']['7'] = '07:00';
$app_list_strings['business_hours_list']['8'] = '08:00';
$app_list_strings['business_hours_list']['9'] = '09:00';
$app_list_strings['business_hours_list']['10'] = '10:00';
$app_list_strings['business_hours_list']['11'] = '11:00';
$app_list_strings['business_hours_list']['12'] = '12:00';
$app_list_strings['business_hours_list']['13'] = '13:00';
$app_list_strings['business_hours_list']['14'] = '14:00';
$app_list_strings['business_hours_list']['15'] = '15:00';
$app_list_strings['business_hours_list']['16'] = '16:00';
$app_list_strings['business_hours_list']['17'] = '17:00';
$app_list_strings['business_hours_list']['18'] = '18:00';
$app_list_strings['business_hours_list']['19'] = '19:00';
$app_list_strings['business_hours_list']['20'] = '20:00';
$app_list_strings['business_hours_list']['21'] = '21:00';
$app_list_strings['business_hours_list']['22'] = '22:00';
$app_list_strings['business_hours_list']['23'] = '23:00';
$app_list_strings['day_list']['Monday'] = 'Lunedì';
$app_list_strings['day_list']['Tuesday'] = 'Martedì';
$app_list_strings['day_list']['Wednesday'] = 'Mercoledì';
$app_list_strings['day_list']['Thursday'] = 'Giovedì';
$app_list_strings['day_list']['Friday'] = 'Venerdì';
$app_list_strings['day_list']['Saturday'] = 'Sabato';
$app_list_strings['day_list']['Sunday'] = 'Domenica';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Ritratto';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Panorama';
$app_list_strings['LBL_REPORTS_RESTRICTED'] = 'Il report selezionato punta ad un modulo del quale non si ha accesso. Selezionare un report che punta ad un modulo del quale si ha accesso.';
