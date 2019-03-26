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
  'LBL_ALL_MODULES'=>'Tutti',//rost fix
  'LBL_ASSIGNED_TO_ID' => 'Id utente assegnato',
  'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
  'LBL_ID' => 'ID',
  'LBL_DATE_ENTERED' => 'Data Creazione',
  'LBL_DATE_MODIFIED' => 'Ultima Modifica',
  'LBL_MODIFIED' => 'Modificato Da',
  'LBL_MODIFIED_NAME' => 'Modificato Da Name',
  'LBL_CREATED' => 'Creato Da',
  'LBL_DESCRIPTION' => 'Descrizione:',
  'LBL_DELETED' => 'Eliminato',
  'LBL_NONINHERITABLE' => 'Non ereditabile',
  'LBL_LIST_NONINHERITABLE' => 'Non ereditabile',
  'LBL_NAME' => 'Nome completo:',
  'LBL_CREATED_USER' => 'Utente Creato',
  'LBL_MODIFIED_USER' => 'Utente Modificato',
  'LBL_LIST_FORM_TITLE' => 'Gruppi di Sicurezza',
  'LBL_MODULE_NAME' => 'Gestione Gruppi di Sicurezza',
  'LBL_MODULE_TITLE' => 'Gestione Gruppi di Sicurezza',
  'LNK_NEW_RECORD' => 'Crea un Gruppo di Sicurezza',
  'LNK_LIST' => 'Vista Elenco',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Gestione Gruppi di Sicurezza',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
  'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Gestione Gruppi di Sicurezza',
  'LBL_USERS' => 'Utenti',
  'LBL_USERS_SUBPANEL_TITLE' => 'Utenti',
  'LBL_ROLES_SUBPANEL_TITLE' => 'Ruoli',
  'LBL_ROLES' => 'Ruoli',

  'LBL_CONFIGURE_SETTINGS' => 'Configura',
  'LBL_ADDITIVE' => 'Somma dei Diritti',
  'LBL_ADDITIVE_DESC' => "L'utente ottiene i piu` alti diritti assegnati all'utente o ai gruppi a cui appartiene.",
  'LBL_STRICT_RIGHTS' => 'Diritti Stretti',
  'LBL_STRICT_RIGHTS_DESC' => "Se un utente e` membro di piu` gruppi saranno usati solo i diritti del gruppo associato al record.",
  'LBL_USER_ROLE_PRECEDENCE' => 'Precedenza ai ruoli utente',
  'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Se un ruolo e` assegnato direttamente ad un utente questo ruolo ha la precedenza sui ruoli dei gruppi a cui lui appartiene.',
  'LBL_INHERIT_TITLE' => 'Ereditarieta` dei Gruppi',
  'LBL_INHERIT_CREATOR' => 'Eredita dall\'Utente Creatore',
  'LBL_INHERIT_CREATOR_DESC' => 'Il record ereditera` tutti i gruppi assegnati all\'utente che lo ha creato.',
  'LBL_INHERIT_PARENT' => 'Eredita dal Record Genitore',
  'LBL_INHERIT_PARENT_DESC' => 'Es. Se un caso e` creato per un contatto, il caso ereditera` i gruppi associati a quel contatto.',
  'LBL_USER_POPUP' => 'Popup per la selezione dei gruppi di un nuovo utente',
  'LBL_USER_POPUP_DESC' => 'Quando viene creato un nuovo utente si aprira` un Popup per la selezione dei relativi gruppi dei quali fara` parte.',
  'LBL_INHERIT_ASSIGNED' => 'Eredita dall\'Utente Assegnatario',
  'LBL_INHERIT_ASSIGNED_DESC' => 'Il record ereditera` tutti i gruppi dell\'utente assegnato al record. Gli altri gruppi assegnati al record NON saranno rimossi.',
  'LBL_POPUP_SELECT' => 'Seleziona il gruppo',
  'LBL_POPUP_SELECT_DESC' => 'Quando un record e` creato da un utente con piu` di un gruppo assegnato, sara` chiesto di selezionare un gruppo tramite una maschera. Altrimenti, se appartiene ad un singolo gruppo sara` ereditato quest\'ultimo.',
  'LBL_FILTER_USER_LIST' => 'Filtra la Lista Utenti',
  'LBL_FILTER_USER_LIST_DESC' => "Gli utenti non amministratori possono solo assegnare ad utenti dello stesso gruppo.",  
  
  'LBL_DEFAULT_GROUP_TITLE' => 'Gruppo di Default per i nuovi Record',
  'LBL_ADD_BUTTON_LABEL' => 'Aggiungi',
  'LBL_REMOVE_BUTTON_LABEL' => 'Cancella',
  'LBL_GROUP' => 'Gruppo:',
  'LBL_MODULE' => 'Modulo:',
  
  'LBL_MASS_ASSIGN' => 'Security Suite: Assegnazione Globale',
  'LBL_ASSIGN' => 'Assegna',
  'LBL_REMOVE' => 'Cancella',
  'LBL_ASSIGN_CONFIRM' => 'Sei sicuro di voler aggiungere questo gruppo a ',
  'LBL_REMOVE_CONFIRM' => 'Sei sicuro di voler rimuovere questo gruppo da ',
  'LBL_CONFIRM_END' =>' record(s) selezionati?',
  
  'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Gruppi di Sicurezza/Utente',
  'LBL_USER_NAME' => 'Nome Utente',
  'LBL_SECURITYGROUP_NAME' => 'Nome Gruppo di Sicurezza',
  'LBL_HOMEPAGE_TITLE' => 'Messaggi al Gruppo',
  'LBL_TITLE' => 'Titolo',
  'LBL_ROWS' => 'Righe',
  'LBL_POST' => 'Invia',
  'LBL_SELECT_GROUP_ERROR' => 'Seleziona un gruppo e riprova.',

  'LBL_GROUP_SELECT' => 'Seleziona quali gruppi devono avere accesso a questo record',
  'LBL_ERROR_DUPLICATE' => 'A causa di un possibile duplicato trovato da SuiteCRM dovrai aggiungere manualmente Gruppi di Sicurezza al record creato.',

  'LBL_INBOUND_EMAIL' => 'Email in Ingresso',
  'LBL_INBOUND_EMAIL_DESC' => 'Permetti l\'accesso all\'account email solo se l\'utente appartiene ad un gruppo associato a quell\'account.',
  'LBL_PRIMARY_GROUP' => 'Gruppo Primario',

);
?>