<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_o365', language 'de', version '4.1'.
 *
 * @package     local_o365
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acp_coursesynccustom'] = 'Benutzerdefinierte Kurs-Synchronisation';
$string['acp_coursesynccustom_bulk'] = 'Massenbearbeitung';
$string['acp_coursesynccustom_bulk_disable'] = 'Kurs-Synchronisation für Kurse auf dieser Seite deaktivieren';
$string['acp_coursesynccustom_bulk_enable'] = 'Kurs-Synchronisation für Kurse auf dieser Seite aktivieren';
$string['acp_coursesynccustom_confirm_all_action'] = 'Sind Sie sicher, dass sie den Synchronisations-Status für alle Kurse ändern möchten? Diese Aktion kann nicht rückgängig gemacht werden.';
$string['acp_coursesynccustom_controlled_per_course'] = 'Kurs-Synchronisations-Einstellungen im Kurs erlauben';
$string['acp_coursesynccustom_controlled_per_course_desc'] = 'Wenn aktiviert können in Moodle Kurse eingeschriebene Nutzer/innen, die auch Team-Besitzer sind ([local/o365:teamowner] Capability) die Kurssynchronisation im Microsoft Block des Kurses steuern.';
$string['acp_coursesynccustom_disable_all'] = 'Kurs-Synchronisation für alle Kurse deaktivieren';
$string['acp_coursesynccustom_enable_all'] = 'Kurs Synchronisation für alle Kurse aktivieren';
$string['acp_coursesynccustom_enabled'] = 'Aktiviert';
$string['acp_coursesynccustom_new_course'] = 'Standardmäßig für neue Kurse aktiviert';
$string['acp_coursesynccustom_new_course_desc'] = 'Wenn aktiviert, werden alle neu erstellten Kurse standardmäßig synchronisiert.';
$string['acp_coursesynccustom_off'] = 'Deaktiviert<br />Teams Erstellung für alle Kurse deaktivieren.';
$string['acp_coursesynccustom_onall'] = 'Alle Features aktiviert<br />Teams Erstellung für alle Kurse aktivieren.';
$string['acp_coursesynccustom_oncustom'] = 'Benutzerdefiniert<br />Erlaubt autorisierten Nutzer/innen und Nutzern zu wählen, für welche Kurse auch Teams erstellt werden sollen.<br> <span id="adminsetting_coursesync" style="font-weight: bold"><a href="{$a}">Benutzerdefinierte Kurs Synchronisation</a></span>';
$string['acp_coursesynccustom_savemessage'] = 'Ihre Änderungen wurden gespeichert.';
$string['acp_coursesynccustom_settings_header'] = 'Synchronisations-Einstellungen';
$string['acp_maintenance'] = 'Wartungs-Tools';
$string['acp_maintenance_recreatedeletedgroups_course'] = 'Kurs';
$string['acp_maintenance_recreatedeletedgroups_group_type_course'] = 'Kurs';
$string['acp_maintenance_recreatedeletedgroups_status'] = 'Status';
$string['acp_maintenance_recreatedeletedgroups_status_sync_disabled'] = 'Kurs-Synchronisation ist deaktiviert';
$string['acp_maintenance_resyncgroupusers_no_course'] = 'Kein Kurs mit Microsoft 365 verbunden';
$string['acp_parentsite_name'] = 'Moodle';
$string['acp_teamconnection'] = 'Team Verbindung verwalten';
$string['acp_teamconnections'] = 'Team Verbindungen verwalten';
$string['acp_teamconnections_actions'] = 'Aktionen';
$string['acp_teamconnections_connected_team'] = 'Verbundenes Team';
$string['acp_teamconnections_connection_completed'] = 'Der Kurs wurde erfolgreich mit dem Team verbunden.';
$string['acp_teamconnections_course_connected'] = 'Der Kurs wurde erfolgreich mit dem Team verbunden.';
$string['acp_teamconnections_current_connection'] = 'AKTUELLE VERBINDUNG';
$string['acp_teamconnections_exception_course_not_exist'] = 'Der Kurs, der verbunden werden soll, exisitiert nicht.';
$string['acp_teamconnections_exception_invalid_team_id'] = 'Ungültige Team ID';
$string['acp_teamconnections_exception_not_configured'] = 'Microsoft 365 wurde nicht vollständig konfiguriert';
$string['acp_teamconnections_exception_team_already_connected'] = 'Das Team ist bereits mit einem anderen Kurs verbunden';
$string['acp_teamconnections_exception_team_creation'] = 'Beim Erstellen des Teams ist ein Fehler aufgetreten. Details:{$a}';
$string['acp_teamconnections_exception_team_no_owner'] = 'Es kann kein geeigneter Team-Besitzer gefunden werden.';
$string['acp_teamconnections_form_connect_course'] = 'Team Verbindung für Kurs {$a} verwalten.';
$string['acp_teamconnections_form_team'] = 'Team wählen';
$string['acp_teamconnections_invalid_connection'] = 'Ungültige Verbindung';
$string['acp_teamconnections_no_owner'] = 'Besitzer hinzufügen, um mit Teams zu verbinden.';
$string['acp_teamconnections_not_connected'] = 'Nicht verbunden';
$string['acp_teamconnections_sync_disabled'] = 'Die Kurs-Synchronisation muss aktiviert werden, bevor Teams-Verbindungen verwaltet werden können.';
$string['acp_teamconnections_table_connect'] = 'Verbinden';
$string['acp_teamconnections_table_connect_to_different_team'] = 'Mit einem anderen Team verbinden';
$string['acp_teamconnections_table_update'] = 'Aktualisieren';
$string['acp_teamconnections_team_already_connected'] = 'Der Kurs ist bereits mit einem Team verbunden.';
$string['acp_teamconnections_team_created'] = 'Das Team wurde erfolgreich für diesen Kurs erstellt.';
$string['acp_tenants_actions'] = 'Aktionen';
$string['acp_tenants_add'] = 'Neuen Tenant hinzufügen';
$string['acp_tenants_additional_tenants'] = 'Weitere Tenants';
$string['acp_tenants_delete'] = 'Löschen';
$string['acp_tenants_tenant'] = 'Tenant';
$string['acp_tenants_title'] = 'Multitenancy';
$string['acp_tenants_title_desc'] = 'Diese Seite unterstützt Sie bei der Einrichtung der Multitenancy von Microsoft 365 in Moodle.';
$string['acp_tenantsadd_linktext'] = 'Weiter zur Microsoft 365 Anmeldeseite';
$string['acp_userconnections_column_actions'] = 'Aktionen';
$string['acp_userconnections_column_muser'] = 'Moodle Nutzer/in';
$string['acp_userconnections_column_o365user'] = 'Microsoft 365 Nutzer/in';
$string['acp_userconnections_column_status'] = 'Verbindungsstatus';
$string['acp_userconnections_filtering_muserfullname'] = 'Moodle Nutzer/in vollständiger Name';
$string['acp_userconnections_filtering_musername'] = 'Moodle Benutzername';
$string['acp_userconnections_filtering_o365username'] = 'Microsoft 365 Benutzername';
$string['acp_userconnections_manualmatch_details'] = 'Auf dieser Seite können Sie eine/n einzelne/n Moodle Nutzer/in mit einem/einer Microsoft 365 Nutzer/in verbinden.';
$string['acp_userconnections_manualmatch_error_muserconnected'] = 'Der/die Moodle Nutzer/in ist bereits mit einem/einer Microsoft 365 Nutzer/in verbunden.';
$string['acp_userconnections_manualmatch_musername'] = 'Moodle Nutzer/in';
$string['acp_userconnections_manualmatch_o365username'] = 'Microsoft 365 Benutzername';
$string['acp_userconnections_manualmatch_uselogin'] = 'Mit Microsoft 365 anmelden';
$string['acp_userconnections_resync_notconnected'] = 'Diese/r Nutzer/in ist nicht mit Microsoft 365 verbunden.';
$string['acp_userconnections_table_connected'] = 'Verbunden';
$string['acp_userconnections_table_disconnect'] = 'Verbindung trennen';
$string['acp_userconnections_table_noconnection'] = 'Keine Verbindung';
$string['acp_usermatch_matchqueue_column_muser'] = 'Moodle Benutzername';
$string['acp_usermatch_matchqueue_column_o365user'] = 'Microsoft 365 Benutzername';
$string['acp_usermatch_matchqueue_column_openidconnect'] = 'OpenID Connect';
$string['acp_usermatch_matchqueue_column_status'] = 'Status';
$string['acp_usermatch_matchqueue_status_error'] = 'Fehler: {$a}';
$string['acp_usermatch_matchqueue_status_success'] = 'Erfolgreich';
$string['calendar_setting'] = 'Outlook-Kalendersynchronisierung aktivieren';
$string['calendar_user'] = 'Persönlicher Kalender (Nutzer/in)';
$string['cohortsync_addmapping'] = 'Verbindung hinzufügen';
$string['cohortsync_deletemapping'] = 'Verbindung löschen';
$string['cohortsync_emptymatchings'] = 'Keine Verbindungen gefunden';
$string['cohortsync_mappingadded'] = 'Neue Verbindung erfolgreich hinzugefügt';
$string['cohortsync_mappingdeleted'] = 'Verbindung erfolgreich gelöscht';
$string['cohortsync_tablehead_actions'] = 'Aktionen';
$string['course_selector_label'] = 'Bestehenden Kurs wählen';
$string['courserequest_emptyteams'] = 'Microsoft Teams nicht verfügbar';
$string['courserequest_graphapi_disabled'] = 'Microsoft Teams Verknüpfung ist nicht verfügbar. Bitte kontaktieren Sie Ihre/n Administrator/in.';
$string['courserequest_teams'] = 'Microsoft Team';
$string['courserequest_title'] = 'Kurs von Teams anfragen';
$string['erroro365apibadcall'] = 'Fehler beim Aufrufen der API.';
$string['erroro365apibadcall_message'] = 'Fehler beim Aufrufen der API {$a}';
$string['erroro365apicoursenotfound'] = 'Kurs nicht gefunden.';
$string['erroro365apiinvalidtoken'] = 'Ungültiger oder abgelaufener Token.';
$string['erroro365badphoto'] = 'Ungültiges Profilbild von Microsoft 365 erhalten.';
$string['erroro365nophoto'] = 'Diese/r Nutzer/in hat kein Foto in Microsoft 365.';
$string['eventapifail'] = 'API Fehler';
$string['eventcalendarsubscribed'] = 'Kalender von Nutzer/in abonniert';
$string['help_user_create'] = 'Konten erstellen - Hilfe';
$string['help_user_delete'] = 'Konten löschen - Hilfe';
$string['help_user_update'] = 'Alle Konten aktualisieren - Hilfe';
$string['notification_days_days'] = '{$a} Tage';
$string['notification_days_less_than_one_day'] = 'weniger als 1 Tag';
$string['notification_days_one_day'] = '1 Tag';
$string['o365:teammember'] = 'Team Mitglied';
$string['o365:teamowner'] = 'Team Besitzer';
$string['personal_calendar'] = 'Persönlich';
$string['pluginname'] = 'Microsoft 365 Integration';
$string['privacy:metadata:local_o365'] = 'Microsoft 365 Local Plugin';
$string['privacy:metadata:local_o365_appassign:muserid'] = 'Moodle Nutzer-ID';
$string['privacy:metadata:local_o365_appassign:photoid'] = 'Die ID des Nutzerfotos in Microsoft 365';
$string['privacy:metadata:local_o365_calidmap:outlookeventid'] = 'Die ID des Ereignisses in Outlook';
$string['privacy:metadata:local_o365_calsettings'] = 'Informationen zu Kalendersynchronisations-Einstellungen';
$string['privacy:metadata:local_o365_calsettings:o365calid'] = 'Die ID des Kalenders in Microsoft 365';
$string['privacy:metadata:local_o365_calsettings:user_id'] = 'Moodle Nutzer-ID';
$string['privacy:metadata:local_o365_calsub:caltype'] = 'Die Art des Moodle Kalenders (Seite, Kurs, Nutzer/in)';
$string['privacy:metadata:local_o365_calsub:o365calid'] = 'Die ID des Microsoft 365 Kalenders';
$string['privacy:metadata:local_o365_connections:muserid'] = 'Moodle Nutzer-ID';
$string['privacy:metadata:local_o365_matchqueue:musername'] = 'Der Benutzername des/der Moodle Nutzers/Nutzerin.';
$string['privacy:metadata:local_o365_matchqueue:o365username'] = 'Der Benutzername des/der Microsoft 365 Nutzers/Nutzerin.';
$string['privacy:metadata:local_o365_token:token'] = 'Der Token.';
$string['settings_coursesync'] = 'Kurs Synchronisation';
$string['settings_coursesync_sync_moodle_to_teams'] = 'Von Moodle nach Teams';
$string['settings_coursesync_sync_teams_to_moodle'] = 'Von Teams nach Moodle';
$string['settings_customtheme'] = 'Kurs Theme (Fortgeschritten)';
$string['settings_detectperms_update'] = 'Aktualisieren';
$string['settings_header_moodle_app'] = 'Teams Moodle App';
$string['settings_header_syncsettings'] = 'Synchronisations-Einstellungen';
$string['settings_header_teams'] = 'Teams Einstellungen';
$string['settings_main_name_option_full_name'] = 'Vollständiger Name';
$string['settings_main_name_option_id_number'] = 'ID Nummer';
$string['settings_main_name_option_short_name'] = 'Kurzname';
$string['settings_maintenance'] = 'Wartung';
$string['settings_moodle_app_id'] = 'Moodle App ID';
$string['settings_moodlesettingssetup'] = 'Moodle konifgurieren';
$string['settings_notice_o365servicealreadyenabled'] = 'O365 Webservices waren bereits aktiviert.';
$string['settings_notice_o365serviceenabled'] = 'O365 Webservices erfolgreich aktiviert.';
$string['settings_notice_oidcalreadyenabled'] = 'Open ID Connect wurde bereits aktiviert.';
$string['settings_notice_oidcenabled'] = 'Open ID Connect erfolgreich aktiviert.';
$string['settings_notice_oidcnotenabled'] = 'Open ID Connect konnte nicht aktiviert werden.';
$string['settings_o365china'] = 'Microsoft 365 für China';
$string['settings_o365china_details'] = 'Aktivieren Sie die Checkbox, wenn Sie Microsoft 365 für China verwenden.';
$string['settings_options_usersync'] = 'Nutzer-Synchronisation';
$string['settings_sds_coursecreation'] = 'Kurs Synchronisation';
$string['settings_sds_profilesync_disabled'] = 'Deaktiviert';
$string['settings_sds_school_disabled_action_disconnect'] = 'Verknüpfung zwischen Moodle Kurs und Team lösen.';
$string['settings_sds_school_disabled_action_keep_connected'] = 'Verknüpfung zwischen Moodle Kurs und Team beibehalten.';
$string['settings_secthead_advanced'] = 'Erweiterte Einsellungen';
$string['settings_secthead_course_request'] = 'Kurs-Anfrage';
$string['settings_secthead_coursesync'] = 'Kurs Synchronisation';
$string['settings_setup_step1'] = 'Schritt 1/2: Moodle mit Microsoft Entra ID registrieren';
$string['settings_setup_step3'] = 'Setup überprüfen';
$string['settings_team_name_sync'] = 'Teams Name beim Aktualisieren des Kurses aktualisieren';
$string['settings_teamconnections'] = 'Team Verknüpfungen';
$string['settings_teamconnections_linktext'] = 'Team Verknüpfungen verwalten';
$string['settings_tools_tenants'] = 'Tenants';
$string['settings_tools_tenants_linktext'] = 'Weitere Tenants konfigurieren';
$string['settings_userconnections'] = 'Nutzer-Verknüpfungen';
$string['settings_userconnections_details'] = 'Verknüpfungen zwischen Moodle und Microsoft 365 Nutzerinnen und Nutzern verwalten und überprüfen';
$string['settings_userconnections_linktext'] = 'Nutzer-Verknüpfungen verwalten';
$string['settings_verifysetup'] = 'Setup überprüfen';
$string['settings_verifysetup_unifiedheader'] = 'Microsoft Graph API';
$string['settings_verifysetup_update'] = 'Aktualisieren';
$string['sso_login'] = 'Bei Microsoft 365 anmelden';
$string['tab_moodle'] = 'Moodle';
$string['task_coursesync'] = 'Moodle Kurse mit Microsoft Teams synchronisieren';
$string['task_processmatchqueue_err_museralreadyo365'] = 'Moodle Nutzer/in ist bereits mit Microsoft 365 verknüpft.';
$string['task_processmatchqueue_err_nomuser'] = 'Es wurde kein/e Moodle Nutzer/in mit diesem Benutzernamen gefunden.';
$string['task_processmatchqueue_err_noo365user'] = 'Es wurde kein/e Microsoft 365 Nutzer/in mit diesem Benutzernamen gefunden.';
$string['task_processmatchqueue_err_o365useralreadyconnected'] = 'Microsoft 365 Nutzer/in ist bereits mit einem Moodle Nutzer / einer Moodle Nutzerin verknüpft.';
$string['teams_no_course'] = 'Sie haben keine Kurse zum Hinzufügen.';
$string['ucp_calsync_availcal'] = 'Verfügbare Moodle Kalender';
$string['ucp_connection_disconnected'] = 'Sie sind nicht mit Microsoft 365 verbunden.';
$string['ucp_connection_options'] = 'Verbindungsoptionen:';
$string['ucp_connection_start'] = 'Mit Microsoft 365 verbinden';
$string['ucp_connection_stop'] = 'Verbindung mit Microsoft 365 trennen';
$string['ucp_connectionstatus'] = 'Verbindungsstatus';
$string['ucp_features'] = 'Microsoft 365 Features';
$string['ucp_index_calendar_title'] = 'Outlook Kalender Sychnronisations-Einstellungen';
$string['ucp_index_connection_title'] = 'Microsoft 365 Verbindungseinstellungen';
$string['ucp_index_connectionstatus_disconnect'] = 'Verbindung trennen';
$string['ucp_index_connectionstatus_login'] = 'Klicken Sie hier, um sich anzumelden.';
$string['ucp_index_connectionstatus_manage'] = 'Verbindung verwalten';
$string['ucp_index_connectionstatus_notconnected'] = 'Sie sind derzeit nicht mit Microsoft 365 verbunden.';
$string['ucp_index_connectionstatus_reconnect'] = 'Verbindung aktualisieren';
$string['ucp_index_connectionstatus_title'] = 'Verbindungsstatus';
$string['ucp_index_connectionstatus_usinglinked'] = 'Sie sind mit einem Microsoft 365 Konto verbunden.';
$string['ucp_index_connectionstatus_usinglogin'] = 'Sie verwenden derzeit Microsoft 365, um sich bei Moodle anzumelden.';
$string['ucp_index_entraidlogin_title'] = 'Microsoft 365 Anmeldung';
$string['ucp_index_onenote_title'] = 'OneNote';
$string['ucp_options'] = 'Optionen';
$string['ucp_status_disabled'] = 'Nicht verbunden';
$string['ucp_status_enabled'] = 'Aktiv';
$string['ucp_syncdir_both'] = 'Outlook und Moodle aktualisieren';
$string['ucp_syncdir_in'] = 'Von Outlook nach Moodle';
$string['ucp_syncdir_out'] = 'Von Moodle nach Outlook';
$string['webservices_error_couldnotsavegrade'] = 'Bewertung konnte nicht gespeichert werden.';
$string['webservices_error_sectionnotfound'] = 'Der Kursabschnitt konnte nicht gefunden werden.';
