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


    'LBL_RE' => 'RE:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Nome Utente o Password Non Corretti',
    'ERR_INI_ZLIB' => 'Non è possibile bloccare temporaneamente la compressione Zlib. Le "Impostazioni Test" potrebbero essere incomplete.',
    'ERR_MAILBOX_FAIL' => 'Impossibile trovare le caselle di posta elettronica.',
    'ERR_NO_IMAP' => 'Nessuna libreria IMAP trovata. Si prega di risolvere questo problema prima di continuare con le email in ingresso',
    'ERR_NO_OPTS_SAVED' => 'Nessuna impostazione ottimale è stata salvata con la vostra casella di posta in ingresso. Si prega di rivedere le impostazioni.',
    'ERR_TEST_MAILBOX' => 'Si prega di controllare le impostazioni e di riprovare.',

    'LBL_ASSIGN_TO_USER' => 'Assegnato a:',
    'LBL_AUTOREPLY' => 'Modello di Risposta Automatica',
    'LBL_AUTOREPLY_HELP' => 'Seleziona una risposta automatica per notificare i mittenti dell´email che il loro messaggio è stato ricevuto.',
    'LBL_BASIC' => 'Configurazione Base',
    'LBL_CASE_MACRO' => 'Macro Reclamo',
    'LBL_CASE_MACRO_DESC' => 'Regolare la macro che sarà analizzata ed usata per collegare la email importata ad un Reclamo.',
    'LBL_CASE_MACRO_DESC2' => 'Imposta questo con qualsiasi valore, ma mantieni il <b>"%1"</b>',
    'LBL_CERT_DESC' => 'Forza la validazione del certificato utilizzato dal server - non utilizzare questa opzione con certificati autogenerati.',
    'LBL_CERT' => 'Verifica Certificato',
    'LBL_CLOSE_POPUP' => 'Chiudi Finestra',
    'LBL_CREATE_NEW_GROUP' => '--Crea Casella del Gruppo nel Salvataggio--',
    'LBL_CREATE_TEMPLATE' => 'Nuovo',
    'LBL_DELETE_SEEN' => 'Cancella le email lette dopo l´importazione',
    'LBL_EDIT_TEMPLATE' => 'Modifica',
    'LBL_EMAIL_OPTIONS' => 'Opzioni di gestione della posta elettronica',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opzioni di gestione Bounce-mail',
    'LBL_FILTER_DOMAIN_DESC' => 'Non inviare risposte automatiche a questo dominio.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Assegnando un account email ad una cartella di gruppo si disabilita l´importazione automatica delle email.',
    'LBL_POSSIBLE_ACTION_DESC' => 'Per l´opzione Creare Reclamo, deve essere selezionata una cartella di gruppo',
    'LBL_FILTER_DOMAIN' => 'Nessuna risposta automatica a questo dominio',
    'LBL_FIND_SSL_WARN' => '<br>Testare SSL può richiedere molto tempo. Si prega di essere pazienti.<br>',
    'LBL_FOUND_MAILBOXES' => 'Trovate le seguenti cartelle. <br>Cliccare sulla cartella per sceglierla:',
    'LBL_FROM_ADDR' => '"Da" Indirizzo',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC' => "L´indirizzo email fornito potrebbe non comparire nella sezione \"Da\" dell´email inviata a causa di restrizioni imposte dal provider del servizio posta. In questi casi verrà utilizzato l´indirizzo email impostato nel server di posta in uscita.", // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME_ADDR' => 'Da Nome/Email:',
    'LBL_FROM_NAME' => '"Da" Nome',
    'LBL_GROUP_QUEUE' => 'Assegna al Gruppo',
    'LBL_HOME' => 'Pagina iniziale',
    'LBL_LIST_MAILBOX_TYPE' => 'Utilizzo Casella di posta elettronica',
    'LBL_LIST_NAME' => 'Nome:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Gruppo/Personale',
    'LBL_LIST_SERVER_URL' => 'Server Mail:',
    'LBL_LIST_STATUS' => 'Stato:',
    'LBL_LOGIN' => 'Nome utente',
    'LBL_MAILBOX_DEFAULT' => 'POSTA IN ARRIVO',
    'LBL_MAILBOX_SSL' => 'Utilizza SSL',
    'LBL_MAILBOX_TYPE' => 'Azioni Possibili',
    'LBL_DISTRIBUTION_METHOD' => 'Metodo di distribuzione',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Creare un modello di risposta al reclamo',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Seleziona una risposta automatica per notificare i mittenti dell´email che è stato creato un reclamo. L´oggetto dell´email contiene il numero del reclamo così come impostato nel campo Macro. Questa risposta viene inviata solamente quando il destinatario ha ricevuto la prima email.',
    'LBL_MAILBOX' => 'Cartella controllata',
    'LBL_TRASH_FOLDER' => 'Cestino',
    'LBL_GET_TRASH_FOLDER' => 'Ottieni Cestino',
    'LBL_SENT_FOLDER' => 'Cartelle Inviate',
    'LBL_GET_SENT_FOLDER' => 'Ottieni Cartelle Inviate',
    'LBL_SELECT' => 'Selezionare',
    'LBL_MARK_READ_NO' => 'Messaggi contrassegnati come cancellati dopo l´importazione',
    'LBL_MARK_READ_YES' => 'Messaggi lasciati sul server dopo l´importazione',
    'LBL_MARK_READ' => 'Lascia Messaggi sul Server',
    'LBL_MAX_AUTO_REPLIES' => 'Numero di Risposte Automatiche',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Selezionare il numero massimo di risposte automatiche da inviare ad un unico indirizzo mail in 24 ore.',
    'LBL_PERSONAL_MODULE_NAME' => 'Account Mail Personale',
    'LBL_CREATE_CASE' => 'Crea Reclamo da Email',
    'LBL_CREATE_CASE_HELP' => 'Seleziona di creare automaticamente in SuiteCRM records del reclamo da emails in entrata.',
    'LBL_MODULE_NAME' => 'Configurazione Posta in Entrata',
    'LBL_BOUNCE_MODULE_NAME' => 'Casella per la gestione delle bounced emails',
    'LBL_MODULE_TITLE' => 'Posta in Entrata',
    'LBL_NAME' => 'Nome',
    'LBL_NONE' => 'Nessuno',
    'LBL_ONLY_SINCE_NO' => 'No. Controlla tutti le email sul server.',
    'LBL_ONLY_SINCE_YES' => 'Sì.',
    'LBL_ONLY_SINCE' => 'Importa Solo da Ultimo Controllo:',
    'LBL_OUTBOUND_SERVER' => 'Server Mail in uscita',
    'LBL_PASSWORD' => 'Password',
    'LBL_POP3_SUCCESS' => 'La verifica della connession POP3 ha dato esito positivo.',
    'LBL_POPUP_TITLE' => 'Prova Impostazioni',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Selezionare le cartelle sottoscritte',
    'LBL_SELECT_TRASH_FOLDERS' => 'Selezionare il cestino',
    'LBL_SELECT_SENT_FOLDERS' => 'Selezionare Cartelle inviate',
    'LBL_DELETED_FOLDERS_LIST' => 'Le seguenti cartelle %s o non esistono o sono state cancellate dal server',
    'LBL_PORT' => 'Porta Server di Posta',
    'LBL_QUEUE' => 'Coda Messaggi',
    'LBL_REPLY_NAME_ADDR' => 'Rispondi Nome/Email',
    'LBL_REPLY_TO_NAME' => '"Rispondi a" Nome',
    'LBL_REPLY_TO_ADDR' => '"Rispondi a" Indirizzo',
    'LBL_SAME_AS_ABOVE' => 'Utilizzo Da Nome/Indirizzo',
    'LBL_SERVER_OPTIONS' => 'Opzioni Mail Server',
    'LBL_SERVER_TYPE' => 'Protocollo Mail Server',
    'LBL_SERVER_URL' => 'Server Posta in Arrivo',
    'LBL_SSL_DESC' => 'Se il tuo server di posta supporta le connessioni sicure, abilitando questa opzione forzerai l´uso delle connessioni SSL durante l´importazione delle email.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Il gruppo selezionato ha accesso all´account email. Se la cartella di gruppo è selezionata, il gruppo assegnato alla cartella di gruppo annullerà il gruppo selezionato.',
    'LBL_SSL' => 'Utilizza SSL',
    'LBL_STATUS' => 'Stato',
    'LBL_SYSTEM_DEFAULT' => 'Predefinito di sistema',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Prova Impostazioni',
    'LBL_TEST_SUCCESSFUL' => 'Connessione completata correttamente.',
    'LBL_TEST_WAIT_MESSAGE' => 'Un momento prego...',
    'LBL_WARN_IMAP_TITLE' => 'Avviso IMAP',
    'LBL_WARN_IMAP' => 'Avvisi:',
    'LBL_WARN_NO_IMAP' => 'Il PHP di questo sistema non ha le librerie IMAP (--with-imap=/path/to/imap_c-client_library). Contatta l´amministratore del server per risolvere il problema.',

    'LNK_LIST_CREATE_NEW_GROUP' => 'Nuovo mail account del Gruppo',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nuovo account di gestione bounced email',
    'LNK_LIST_MAILBOXES' => 'Tutte le caselle',
    'LNK_LIST_SCHEDULER' => 'Schedulazioni',
    'LNK_SEED_QUEUES' => 'Seed Queues From Teams',
    'LBL_GROUPFOLDER_ID' => 'Id Cartella di Gruppo',
    'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Assegna alla Cartella di Gruppo',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Permettere agli utenti di inviare email usando il Nome e l´Indirizzo "Da"',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Quando questa opzione viene selezionata, il nome e l´indirizzo email del mittente associati a questo account email di gruppo appariranno come opzione del campo Da nelle email degli utenti che hanno accesso all´account email di gruppo.',
    'LBL_STATUS_ACTIVE' => 'Attivo',
    'LBL_STATUS_INACTIVE' => 'Inattivo',
    'LBL_IS_PERSONAL' => 'Personale',
    'LBL_IS_GROUP' => 'gruppo',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importa emails automaticamente',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Attenzione: stai modificando l´impostazione dell´import automatico che potrebbe comportare perdita di dati.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Attenzione: l´import automatico deve essere attivato quando si creano automaticamente i reclami.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Bozze',
    'LBL_LIST_TITLE_MY_INBOX' => 'Posta in arrivo',
    'LBL_LIST_TITLE_MY_SENT' => 'Email Inviata',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Email Archiviate',
    'LNK_CHECK_MY_INBOX' => 'Controlla la Mia Posta',
    'LNK_DATE_SENT' => 'Data Invio',
    'LNK_GROUP_INBOX' => 'Posta in Arrivo del Gruppo',
    'LNK_MY_DRAFTS' => 'Bozze',
    'LNK_MY_INBOX' => 'Emails',
    'LNK_VIEW_MY_INBOX' => 'Vedi Email',
    'LNK_QUICK_REPLY' => 'Rispondi',
    'LNK_MY_ARCHIVED_LIST' => 'I miei Archivi',
    'LNK_SENT_EMAIL_LIST' => 'Email Inviate',
	'LBL_EDIT_LAYOUT' => 'Modifica Layout' /*for 508 compliance fix*/,

	'LBL_MODIFIED_BY' => 'Modificato da:',
	'LBL_SERVICE' => 'Servizio',
	'LBL_STORED_OPTIONS' => 'Stored Options',
	'LBL_GROUP_ID' => 'Group ID',
);
?>
