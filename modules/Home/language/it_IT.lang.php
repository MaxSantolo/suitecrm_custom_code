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
    'LBL_MODULE_NAME' => 'Pagina iniziale',
    'LBL_MODULES_TO_SEARCH' => 'Moduli di Ricerca',
    'LBL_NEW_FORM_TITLE' => 'Nuovo Contatto',
    'LBL_FIRST_NAME' => 'Nome:',
    'LBL_LAST_NAME' => 'Cognome:',
    'LBL_LIST_LAST_NAME' => 'Cognome',
    'LBL_PHONE' => 'Telefono:',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'La mia Pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'La mia Pipeline per fase di vendita',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'La mia Pipeline per fase di vendita',
    'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'Campagna ROI',
    'LNK_NEW_CONTACT' => 'Nuovo Contatto',
    'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
    'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
    'LNK_NEW_LEAD' => 'Nuovo Lead',
    'LNK_NEW_CASE' => 'Nuovo Reclamo',
    'LNK_NEW_NOTE' => 'Nuova Nota o Allegato',
    'LNK_NEW_CALL' => 'Schedula chiamata',
    'LNK_NEW_EMAIL' => 'Archivia Email',
    'LNK_COMPOSE_EMAIL' => 'Componi Email',
    'LNK_NEW_MEETING' => 'Schedula riunione',
    'LNK_NEW_TASK' => 'Nuovo Compito',
    'LNK_NEW_BUG' => 'Report Errori',
    'LBL_ADD_BUSINESSCARD' => 'Inserisci Biglietto da Visita',
    'LBL_OPEN_TASKS' => 'I miei compiti aperti',
    'LBL_SEARCH_RESULTS_IN' => 'in',
    'LNK_NEW_SEND_EMAIL' => 'Scrivi Email',
    'LBL_NO_ACCESS' => 'Non hai accesso a quest´area.  Contatta l´amministratore del sistema per ottenere il permesso',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Nessun Risultato --',
    'LBL_NO_RESULTS' => '<h2>Non ci sono risultati. Si prega di cercare ancora.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Suggerimenti di ricerca :</h3><ul><li>Assicuratevi di aver selezionato le categorie adeguate.</li><li>Estendere i vostri test di ricerca.</li><li>Se non avete  ancora trovato tutti i risultati provate la ricerca avanzate del modulo.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Aggiungi Dashlets di SuiteCRM',
    'LBL_ADD_PAGE' => 'Aggiungi Pagina',
    'LBL_DEL_PAGE' => 'Elimina Pagina',
    'LBL_WEBSITE_TITLE' => 'Sito Web',
    'LBL_RSS_TITLE' => 'Feed Notizie',
    'LBL_DELETE_PAGE' => 'Elimina Pagina',
    'LBL_CHANGE_LAYOUT' => 'Cambia Layout',
    'LBL_RENAME_PAGE' => 'Rinomina Pagina',
    'LBL_CLOSE_DASHLETS' => 'Chiudi',
    'LBL_OPTIONS' => 'Opzioni',
    // dashlet search fields
    'LBL_TODAY' => 'Oggi',
    'LBL_YESTERDAY' => 'Ieri',
    'LBL_TOMORROW' => 'Domani',
    'LBL_LAST_WEEK' => 'Ultima Settimana',
    'LBL_NEXT_WEEK' => 'Prossima Settimana',
    'LBL_LAST_7_DAYS' => 'Ultimi 7 Giorni',
    'LBL_NEXT_7_DAYS' => 'Prossimi 7 Giorni',
    'LBL_LAST_MONTH' => 'Ultimo Mese',
    'LBL_NEXT_MONTH' => 'Prossimo Mese',
    'LBL_LAST_QUARTER' => 'Ultimo Trimestre',
    'LBL_THIS_QUARTER' => 'Trimestre Corrente',
    'LBL_LAST_YEAR' => 'Anno Precedente',
    'LBL_NEXT_YEAR' => 'Anno Successivo',
    'LBL_LAST_30_DAYS' => 'Ultimi 30 Giorni',
    'LBL_NEXT_30_DAYS' => 'Prossimi 30 Giorni',
    'LBL_THIS_MONTH' => 'Mese Corrente',
    'LBL_THIS_YEAR' => 'Anno Corrente',

    'LBL_MODULES' => 'Moduli',
    'LBL_CHARTS' => 'Tabelle',
    'LBL_TOOLS' => 'Strumenti',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Risultati Ricerca',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Viste modulo',
        'Portal' => 'Portale',
        'Charts' => 'Tabelle',
        'Tools' => 'Strumenti',
        'Miscellaneous' => 'Varie'
    ),
    'LBL_ADDING_DASHLET' => 'Aggiunta della Dashlet di SuiteCRM in corso...',
    'LBL_ADDED_DASHLET' => 'Dashlet di SuiteCRM Aggiunta',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Sei sicuro di voler rimuovere la Dashlet di SuiteCRM?',
    'LBL_REMOVING_DASHLET' => 'Rimozione della Dashlet di SuiteCRM in corso...',
    'LBL_REMOVED_DASHLET' => 'Dashlet di SuiteCRM Rimossa',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Generale',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtri',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Solo i miei elementi',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titolo',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Vedi righe',

    'LBL_DASHLET_DELETE' => 'Rimuovi Dashlet',
    'LBL_DASHLET_REFRESH' => 'Riaggiorna la Dashlet di SuiteCRM',
    'LBL_DASHLET_EDIT' => 'Modifica Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Il mio CRM',
    'LBL_CLOSE_SITEMAP' => 'Chiudi',

    'LBL_SEARCH' => 'Ricerca',
    'LBL_CLEAR' => 'Azzera',

    'LBL_BASIC_CHARTS' => 'Tabelle di Base',

    'LBL_DASHLET_SEARCH' => 'Ricerca Dashlets di SuiteCRM',

//ABOUT page
    'LBL_VERSION' => 'Versione',
    'LBL_BUILD' => 'Versione',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - fornitori del framework CE',
    'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Un template engine per PHP creato da Barnabás Debreceni',
    'LBL_SOURCE_NUSOAP' => 'NuSOAP - Un set di classi PHP che consente agli sviluppatori di creare e utilizzare servizi web creato da NuSphere Corporation e Dietrich Ayala',
    'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - Un calendario per l\'immissione di date creato da Mihai Bazon',
    'LBL_SOURCE_PHPPDF' => 'PHP PDF - Una libreria per la creazione di documenti PDF creata da Wayne Munro',
    'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - Un\'implementazione di un server WebDAV in PHP.',
    'LBL_SOURCE_PCLZIP' => 'PclZip - Una libreria che offre funzioni di compressione ed estrazione per archivi in formato Zip di Vincent Blavet',
    'LBL_SOURCE_SMARTY' => 'Smarty - Un template engine per PHP.',
    'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - La libreria di utility UI che agevola l\'implementazione di funzionalità avanzate lato client.',
    'LBL_SOURCE_PHPMAILER' => 'PHPMailer - Una classe di trasferimento di posta elettronica con tutte le funzionalità necessarie per PHP',
    'LBL_SOURCE_JSHRINK' => 'JShrink - A Javascript minifier scritto in PHP',
    'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Consente la crittografia blowfish bidirezionale rapida senza richiedere l\'estensione PHP MCrypt.',
    'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - Un parser SAX per HTML e altri documenti XML non formattati correttamente',
    'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Libreria di estensioni UI Yahoo! - Estensioni alla libreria Yahoo! UI, da Jack Slocum',
    'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Script Javascript per determinare e incorporare Flash Player.',
    'LBL_SOURCE_TINYMCE' => 'TinyMCE - Un editor WYSIWYG per i browser web che consente all\'utente di modificare il contenuto HTML',
    'LBL_SOURCE_EXT' => 'Ext - Un framework JavaScript lato client per la creazione di applicazioni web.',
    'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - Un servizio gratuito di CAPTCHA che aiuta a digitalizzare libri, giornali e vecchi spettacoli radio.',
    'LBL_SOURCE_TCPDF' => 'TCPDF - Una classe PHP per la generazione di documenti PDF.',
    'LBL_SOURCE_CSSMIN' => 'CssMin - Un parser e minifier css.',
    'LBL_SOURCE_PHPSAML' => 'PHP-SAML - Un semplice toolkit SAML per PHP.',
    'LBL_SOURCE_ISCROLL' => 'iScroll - The overflow:scroll for mobile webkit. Native scrolling inside a fixed width/height element.',
    'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas è una libreria JavaScript che aggiunge il supporto per i Canvas HTML5 a Internet Explorer. Esegue il rendering di forme e immagini tramite API di disegno di Flash. Supporta quasi tutte le API Canvas e, in molti casi, le prestazioni sono migliori di altre librerie simili che utilizzano VML o Silverlight.',
    'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - il Toolkit JavaScript InfoVis fornisce strumenti per creare visualizzazioni interattive di dati interattive.',
    'LBL_SOURCE_ZEND' => 'Zend Framework - Un framework per PHP5 per applicazioni web open source e orientato agli oggetti.',
    'LBL_SOURCE_PARSECSV' => 'parseCSV - Analizzatore di dati CSV per PHP',
    'LBL_SOURCE_PHPJS' => 'php.js - Usa funzioni PHP in JavaScript',
    'LBL_SOURCE_PHPSQL' => 'Parser SQL in PHP',
    'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - Una libreria conforme agli standard per il filtraggio di HTML.',
    'LBL_SOURCE_XHPROF' => 'XHProf - un profiler a livello-funzione gerarchico per PHP.',
    'LBL_SOURCE_ELASTICA' => 'Elastica - Client PHP per il motore di ricerca distribuito elasticsearch ',
    'LBL_SOURCE_FACEBOOKSDK' => 'Facebook PHP SDK',
    'LBL_SOURCE_JQUERY' => 'jQuery - jQuery è una libreria JavaScript veloce, piccola e ricca di funzionalità.',
    'LBL_SOURCE_JQUERY_UI' => 'jQuery UI - jQuery UI è un set di interazioni dell\'interfaccia utente, effetti, widget e temi sviluppato per la libreria JavaScript jQuery.',
    'LBL_SOURCE_OVERLIB' => 'OverlibMWS - la libreria di overlibmws utilizza javascript per popup DHTML che servono come sussidi informativi e navigazione per siti Web.',

  'LBL_DASHLET_TITLE' => 'I miei siti',
  'LBL_DASHLET_OPT_TITLE' => 'Titolo',
  'LBL_DASHLET_INCORRECT_URL' => 'È stata specificata una posizione non corretta del sito web',
  'LBL_DASHLET_OPT_URL' => 'Indirizzo Sito Web',
  'LBL_DASHLET_OPT_HEIGHT' => 'Altezza Dashlet (in pixels)',
  'LBL_DASHLET_SUGAR_NEWS' => 'Novità SuiteCRM',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Scoprire SuiteCRM',
	'LBL_POWERED_BY_SUGAR' => 'Basato su SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'Più dettagli' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Filtro Rapido' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Ricerca Avanzata' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Icona Home Page',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Torna rapidamente alla dashboard della tua Home Page con un click.',
    'LBL_TOUR_MODULES' => 'Moduli',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Tutti i moduli più importanti sono visualizzati qui.',
    'LBL_TOUR_MORE' => 'Più Moduli',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Gli altri moduli sono visualizzati qui.',
    'LBL_TOUR_SEARCH' => 'Ricerca Full Text',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'La ricerca è migliorata ulteriormente.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifiche',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Le notifiche delle applicazioni di SuiteCRM saranno visualizzate qui.',
    'LBL_TOUR_PROFILE' => 'Profilo',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Accesso al profilo, impostazioni e logout.',
    'LBL_TOUR_QUICKCREATE' => 'Creazione Rapida',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Creazione rapida di nuovi records senza cambiare pagina.',
    'LBL_TOUR_FOOTER' => 'Piè di pagina comprimibile',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Espandi e comprimi facilmente il piè di pagina.',
    'LBL_TOUR_CUSTOM' => 'Apps Custom',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Le integrazioni Custom saranno visualizzate qui.',
    'LBL_TOUR_BRAND' => 'Il tuo Brand',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Il tuo logo è inserito qui. Cliccaci sopra per maggiori informazioni.',
    'LBL_TOUR_WELCOME' => 'Benvenuto in SuiteCRM',
    'LBL_TOUR_WATCH' => 'Guarda le Novità di SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Nuova barra di navigazione semplificata</li><li class="icon-ok">Nuovo piè di pagina comprimibile</li><li class="icon-ok">Motore di ricerca più potente</li><li class="icon-ok">Menu Azioni aggiornato</li></ul><p>e molto ancora!</p>',
    'LBL_TOUR_VISIT' => 'Per maggiori informazioni si prega di visitare la nostra applicazione',
    'LBL_TOUR_DONE' => 'Operazione Completata',
    'LBL_TOUR_REFERENCE_1' => 'Si può sempre fare riferimento al nostro',
    'LBL_TOUR_REFERENCE_2' => 'attraverso il link "Support" nella scheda profilo.',
    'LNK_TOUR_DOCUMENTATION' => 'documentazione',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Recuperare il nuovo URL del calendario condiviso.',
    'LBL_ABOUT' => 'Informazioni',
    'LBL_CONTRIBUTORS' => 'Collaboratori esterni',
    'LBL_ABOUT_SUITE' => 'A proposito di SuiteCRM',
    'LBL_PARTNERS' => 'Partner',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE e i moduli di Rischedulazione sono di SalesAgility.',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - CRM open source per il mondo',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite di Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps di Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO Fornito da Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contributo di ResponseTap al rilascio 7.3 di SuiteCRM',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Riguardo le traduzioni di SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Traduzione collaborativa da parte della comunità di SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Traduzione creata utilizzando Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM è pubblicata con licenza open source - GPL3',
    'LBL_ABOUT_SUITE_4' => 'Tutto il codice gestito e sviluppato per il progetto verrà rilasciato come open source - GPL3',
    'LBL_ABOUT_SUITE_5' => 'Il supporto di SuiteCRM è disponibile sia nell\'opzione gratuita che a pagamento',

    'LBL_SUITE_PARTNERS' => 'Abbiamo fedeli partner di SuiteCRM che sono appassionati di open source. Per vedere la lista completa, consulta il nostro sito web.',

);
