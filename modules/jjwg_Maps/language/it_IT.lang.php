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

$mod_strings['LBL_MAP'] = 'Mappa';
$mod_strings['LBL_MAPS'] = 'Mappe';
$mod_strings['LBL_MODULE_NAME'] = 'Mappe';
$mod_strings['LBL_MODULE_TITLE'] = 'Mappe: Home';
$mod_strings['LBL_MODULE_ID'] = 'Mappe';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Maps';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Marker personalizzato';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Area personalizzata';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Le mie Mappe';

$mod_strings['LBL_FLEX_RELATE'] = 'Riferito a (Center):';
$mod_strings['LBL_MODULE_TYPE'] = 'Modulo da Mostrare:';
$mod_strings['LBL_DISTANCE'] = 'Distanza (Raggio):';
$mod_strings['LBL_UNIT_TYPE'] = 'Unit&agrave; :';

$mod_strings['LBL_MAP_DISPLAY'] = 'Mostra Map';
$mod_strings['LBL_MAP_LEGEND'] = 'Legenda:';
$mod_strings['LBL_MAP_USERS'] = 'Utenti:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Gruppi:';
$mod_strings['LBL_MAP_GROUP'] = 'Gruppo';
$mod_strings['LBL_MAP_TYPE'] = 'Tipo';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Assegnato a:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Come Arrivarci';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Visualizza su Google Maps';

$mod_strings['LNK_NEW_MAP'] = 'Aggiungi Nuova Map';
$mod_strings['LNK_NEW_RECORD'] = 'Aggiungi Nuova Map';
$mod_strings['LNK_MAP_LIST'] = 'Elenco Maps';
$mod_strings['LNK_IMPORT_MAPS'] = 'Importa Maps';
$mod_strings['LBL_MAP_GEOCODE_ADDRESSES'] = 'Indirizzi Geocodificati';
$mod_strings['LBL_MAP_DONATE'] = 'Sostienici';
$mod_strings['LBL_MAP_DONATE_TO_THIS_PROJECT'] = 'Donate a supporto di questo Progetto';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Test Geocodifica';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Mappa rapida';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = '--Nessuno--';
$mod_strings['LBL_MAP_ADDRESS'] = 'Indirizzo';
$mod_strings['LBL_MAP_PROCESS'] = 'Esegui!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Ultimo Stato Geocode';
$mod_strings['LBL_MAP_GEOCODED_COUNTS'] = 'Contatore Geocoded';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Contatore Moduli Geocoded ';
$mod_strings['LBL_CRON_URL'] = 'CRON URL';
$mod_strings['LBL_MODULE_HEADING'] = 'Modulo';
$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Totale';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Resetta';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'La tabella sotto mostra il numero di moduli geocodificati, raggruppati per risposta geocoding. Ricorda che il limite di utilizzo standard di Google Maps è di 2500 richieste al giorno. Questo modulo mantiene in cache le informazioni di geocodifica degli indirizzi durante le elaborazione per ridurre il numero complessivo di richieste necessarie.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Per elaborare le richieste di geocoding si consiglia di impostare un Cron-Job notturno. È stato creato un punto di accesso personalizzato per questo scopo ed è possibile accedervi senza autenticazione. L\'URL di seguito è destinato a essere utilizzato con una operazione pianificata. Consultare la documentazione per maggiori informazioni.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Esporta URLs';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Utilizza il link di seguito per esportare indirizzi completi necessari alla geocodifica. Quindi utilizzare uno strumento on/offline per la geocodifica in modalità batch degli indirizzi. Al termine importare gli indirizzi nel modulo Cache Indirizzo per utilizzarlo con le mappe. Nota, il modulo Cache indirizzo è opzionale. Tutte le informazioni di geocodifica vengono memorizzate nel modulo principale.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Cache Indirizzi';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Aggiungi alla Lista Obiettivi';
$mod_strings['LBL_ADD_TO_TARGET_LIST_CONFIRM'] = 'Sei sicuro che desideri aggiungere gli elementi selezionati nell\'elenco?';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Elaborazione...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Configurazione';
$mod_strings['LBL_CONFIG_SAVED'] = 'Configurazione Salvata!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Indirizzo Fatturazione';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Indirizzo Spedizione';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Indirizzo Primario';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Indirizzo Alternativo';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Correlazione flessibile';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Indirizzo (Semplice, Utenti)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Personalizzato (Custom Controller Logic)';
$mod_strings['LBL_ENABLED'] = 'Abilitato';
$mod_strings['LBL_DISABLED'] = 'Disabilitato';
$mod_strings['LBL_DEFAULT'] = 'Predefinito:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Predefinito:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Moduli Geocode Validi:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Tabelle Geocode Valide:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Impostazioni Tipo Indirizzo: definisce i tipi di indirizzo dei moduli utilizzati quando effettua il geocoding. I valori accettabili sono: 'fatturazione'; 'spedizione'; 'primario'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Tipo Indirizzo per ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Tipo Indirizzo per Aziende:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Tipo Indirizzo per Contatti:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Tipo Indirizzo per Leads:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Tipo Indirizzo per Opportunit&agrave;:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(di Aziende Collegate)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Tipo Indirizzo per Reclami:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Tipo Indirizzo per Progetti:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(di Aziende/Opportunit&agrave; Collegate)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Tipo Indirizzo per Riunioni:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Tipo Indirizzo per Obiettivi:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Oggetti Collegati attraverso Flex Relate Field';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Impostazioni Campo del Gruppo Marker:  Questo definisce il 'campo' per essere utilizzato come parametro di gruppo durante la visualizzazione di marker su una mappa. Esempi: assigned_user_name, industry, status, sales_stage, priority";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Campo del Gruppo per ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Campo del Gruppo per Aziende:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Campo del Gruppo per Contatti:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Campo del Gruppo per Leads:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Campo del Gruppo per Opportunit&agrave;:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Campo del Gruppo per Reclami:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Campo del Gruppo per Progetti:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Campo del Gruppo per Riunioni:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Campo del Gruppo per Obiettivi:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Impostazioni Geocoding/Google:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'URL per le API di geolocalizzazione:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'L\'URL di Google Maps API Geocoding o Proxy';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Password del Proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'The Secret Phrase to be used with the Proxy MD5 comparison.';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_GET_A_KEY'] = 'Get a free Google Maps Geocoding API key (to geocode a generous quota of addresses per day for free).';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Geocoding Limit:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' imposta il limite di richieste nella selezione dei recors per il geocode.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Google Geocoding Limit:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' imposta il limite di richieste per effettuare il geocoding attraverso Google Maps API.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Export Addresses Limit:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' imposta il limite di richieste nella selezione dei records da esportare.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Allow 'APPROXIMATE' Location Types:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - allows location types of 'APPROXIMATE' to be considered 'OK' geocoding results.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Impostazioni Cache degli Indirizzi:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Abilita Cache degli Indirizzi (Get):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' permette al modulo Cache degli Indirizzi di recuparare i dati dalla tabella di cache.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Abilita Salvataggio Cache degli Indirizzi (Save):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' permette al modulo Cache degli Indirizzi di salvare i dati nelle tabelle di cache.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Impostazioni Logic Hooks:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Abilita tutti i Logic Hooks: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' abilita i logic hooks all'aggiornamento automatico basato sugli oggetti collegati. Si raccomanda di disabilitarlo durante l'aggiornamento del CRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Impostazioni Marker/Mapping:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Limite Map Markers:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' imposta il limite delle richieste quando vengono selezionati i record da mostrare nella mappa.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Latitudine Centro Mappa Default:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' imposta la posizione centrale della latitudine di default della mappa.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Longitudine Centro Mappa Default:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_longitude' imposta la posizione centrale della longitudine di default della mappa.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Tipo Unit&agrave; Mappa Default:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' imposta la tipologia di unit&agrave; di misurazione di default della mappa per il calcolo delle distanze. Valori: 'mi' (miles) or 'km' (kilometri).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Distanza Mappa Default:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' imposta la distanza usata di default nella mappa.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Allineamento Marker Duplicati:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' imposta un valore di offset da aggiungere alla longitudine e latitudine in caso di posizione del marker duplicata.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Markers della Mappa Dimensione Griglia Raggruppamenti:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' viene utilizzato per impostare la dimensione della mappa della griglia per il calcolo dei raggruppamenti.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Markers della Mappa Raggruppati Zoom Massimo:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' viene utilizzato per impostare il livello di zoom massimo al quale non si applica il raggruppamento.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Nota importante: tutte le impostazioni salvate possono essere trovate nella tabella 'config' nella categoria 'jjwg'. Nota, non deve più essere utilizzato un file controller.php personalizzato per escludere le impostazioni.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Aree';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Marcatori';
$mod_strings['LBL_PARENT_ID'] = 'ID Parent';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP Partners';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Get A Key';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Google Api Key';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Please set the Google Api Key in the Google Maps Administrative Panel.';
