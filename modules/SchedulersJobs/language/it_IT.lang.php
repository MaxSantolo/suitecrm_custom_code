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
'LBL_NAME' => 'Funzione',
'LBL_EXECUTE_TIME'			=> 'Tempo Esecuzione',
'LBL_SCHEDULER_ID' 	=> 'Schedulatore',
'LBL_STATUS' 	=> 'Stato',
'LBL_RESOLUTION' 	=> 'Risultato',
'LBL_MESSAGE' 	=> 'Messaggi',
'LBL_DATA' 	=> 'Data Job',
'LBL_REQUEUE' 	=> 'Riprova in caso di errore',
'LBL_RETRY_COUNT' 	=> 'Numero massimo di tentativi',
'LBL_FAIL_COUNT' 	=> 'Errori',
'LBL_INTERVAL' 	=> 'Intervallo minimo tra tentativi',
'LBL_CLIENT' 	=> 'Cliente proprietario',
'LBL_PERCENT'	=> 'Percentuale completata',
// Errors
'ERR_CALL' 	=> "Impossibile eseguire la funzione: %s",
'ERR_CURL' => "Nessun CURL - impossibile  eseguire URL jobs",
'ERR_FAILED' => "Interruzione imprevista, si pregs di controllare i log PHP e suitecrm.log",
'ERR_PHP' => "%s [%d]: %s in %s sulla linea %d",
'ERR_NOUSER' => "Nessun ID utente specificato per il job",
'ERR_NOSUCHUSER' => "Impossibile trovare User ID %",
'ERR_JOBTYPE' 	=> "Tipo job non specificato: %",
'ERR_TIMEOUT' => "Fallimento forzato su timeout",
'ERR_JOB_FAILED_VERBOSE' => 'L\'attività %1$s (%2$s) è fallita nell\'esecuzione da CRON',
);
