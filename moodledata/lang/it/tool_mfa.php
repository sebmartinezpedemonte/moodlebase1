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
 * Strings for component 'tool_mfa', language 'it', version '4.1'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Peso raggiunto';
$string['alltime'] = 'Sempre';
$string['areyousure'] = 'Sei sicuro di revocare il fattore?';
$string['combination'] = 'Combinazione';
$string['connector'] = 'AND';
$string['created'] = 'Creato';
$string['createdfromip'] = 'Creato da IP';
$string['debugmode:heading'] = 'Modalità debug';
$string['devicename'] = 'Dispositivo';
$string['enablefactor'] = 'Abilita fattore';
$string['error:actionnotfound'] = 'L\'azione \'{$a}\' non è supportata';
$string['error:directaccess'] = 'Questa pagina non deve essere acceduta direttamente';
$string['error:notenoughfactors'] = 'Non è stato possibile autenticare';
$string['event:userpassedmfa'] = 'Verifica superata';
$string['event:userrevokedfactor'] = 'Revoca del fattore';
$string['event:usersetupfactor'] = 'Impostazione del fattore';
$string['factor'] = 'Fattore';
$string['factorreport'] = 'Report dei fattori';
$string['factorrevoked'] = 'Il fattore \'{$a}\' è stato revocato correttamente.';
$string['fallback'] = 'Fattore di fallback';
$string['fallback_info'] = 'Il fattore di fallback in assenza di altri fattori configurati. Il fattore non andrà mai a buon fine.';
$string['inputrequired'] = 'Input utente';
$string['ipatcreation'] = 'Indirizzo IP da dove è stato creato il fattore';
$string['lastverified'] = 'Verifica più recente';
$string['lockedusersforallfactors'] = 'Utenti bloccati: tutti i fattori';
$string['lockedusersforfactor'] = 'Utenti bloccati: {$a}';
$string['mfa:mfaaccess'] = 'Interagire con MFA';
$string['mfareports'] = 'Report MFA';
$string['na'] = 'n/d';
$string['needhelp'] = 'Hai bisogno di assistenza?';
$string['nologinusers'] = 'Non autenticato';
$string['nonauthusers'] = 'MFA in attesa';
$string['overall'] = 'Complessivamente';
$string['pending'] = 'In attesa';
$string['performbulk'] = 'Azione in massa';
$string['pluginname'] = 'Autenticazione a più fattori';
$string['preferences:activefactors'] = 'Fattori attivi';
$string['preferences:availablefactors'] = 'Fattori disponibili';
$string['preferences:header'] = 'Preferenze autenticazione a più fattori';
$string['preferenceslink'] = 'Fare click qui per le preferenze utente.';
$string['privacy:metadata:tool_mfa'] = 'Dati con fattori MFA configurati';
$string['privacy:metadata:tool_mfa:factor'] = 'Tipo di fattore';
$string['privacy:metadata:tool_mfa:id'] = 'ID del record';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Orario più recente nel quale l\'utente è stato verificato con il fattore';
$string['privacy:metadata:tool_mfa:secret'] = 'Eventuale dato secret del fattore';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Orario di modifica più recente del fattore';
$string['privacy:metadata:tool_mfa:userid'] = 'ID dell\'utente al quale appartiene il fattore';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Orario di ultima autenticazione dellì\'utente';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'Utente al quale è associato l\'orario';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Fattore al quale è associato il secret';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Codice di sicurezza del secret';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'Utente al quale è associato il secret';
$string['redirecterrordetected'] = 'Rilevato reindirizzamento non supportato, esecuzione dello script terminata. Si è verificato un errore di reindirizzamento tra MFA e {$a}.';
$string['resetconfirm'] = 'Reimposta il fattore dell\'utente';
$string['resetfactor'] = 'Reimpostazione fattori di autenticazione utente';
$string['resetfactorconfirm'] = 'Sei sicuro di reimpostare questo fattore per {$a}?';
$string['resetfactorplaceholder'] = 'Username o email';
$string['resetsuccess'] = 'Il fattore \'{$a->factor}\' dell\'utente \'{$a->username}\' è stato reimpostato correttamente.';
$string['resetsuccessbulk'] = 'Il fattore \'{$a->factor}\' degli utenti forniti è stato reimpostato correttamente.';
$string['resetuser'] = 'Utente:';
$string['revoke'] = 'Revoca';
$string['revokefactor'] = 'Revoca fattore';
$string['selectfactor'] = 'Selezionare il fattore da reimpostare:';
$string['selectperiod'] = 'Seleziona un periodo di ricerca per il report:';
$string['settings:combinations'] = 'Riepilogo delle condizioni da soddisfare per autenticarsi';
$string['settings:debugmode'] = 'Abilita modalità debug';
$string['settings:debugmode_help'] = 'La modalità debug visualizzerà un piccolo banner di notifica nelle pagine di amministrazione MFA, nonché nella pagina delle preferenze dell\'utente con informazioni sui fattori attualmente abilitati.';
$string['settings:duration'] = 'Durata della validità del secret';
$string['settings:duration_help'] = 'La durata durante la quale il secret rimarrà valido.';
$string['settings:enabled'] = 'Plugin MFA abilitato';
$string['settings:enablefactor'] = 'Abilita fattore';
$string['settings:enablefactor_help'] = 'È necessario abilitare il fattore affinché possa essere usato nella autenticazione MFA.';
$string['settings:general'] = 'Impostazioni generali MFA';
$string['settings:guidancecheck'] = 'Utilizza pagina guida';
$string['settings:guidancecheck_help'] = 'Aggiunge un collegamento ad una pagina guida nelle pagine di autenticazione MFA e nella pagina delle preferenze MFA.';
$string['settings:guidancefiles'] = 'File della pagina guida';
$string['settings:guidancefiles_help'] = 'Consente di aggiungere eventuali file da utilizzare nella pagina guida e incorporali nella pagina stessa utilizzando {{filename}} (percorso completo) o {{{filename}}} (link html) nell\'editor';
$string['settings:guidancepage'] = 'Contenuto della pagina guida';
$string['settings:guidancepage_help'] = 'HTML che verrà visualizzato nella pagina guida. Inserire i nomi dei file dall\'area file per incorporare il file con il percorso completo {{filename}} o come collegamento html utilizzando {{{filename}}}.';
$string['settings:lockout'] = 'Soglia di blocco';
$string['settings:weight'] = 'Peso del fattore';
$string['setup'] = 'Impostazione';
$string['setupfactor'] = 'Impostazione fattore';
$string['setuprequired'] = 'Impostazione utente';
$string['state:fail'] = 'Non superato';
$string['state:locked'] = 'Bloccato';
$string['state:neutral'] = 'Neutro';
$string['state:pass'] = 'Superato';
$string['state:unknown'] = 'Sconosciuto';
$string['totalusers'] = 'Utenti totali';
$string['totalweight'] = 'Peso totale';
$string['userempty'] = 'L\'utente non può essere vuoto.';
$string['userlogs'] = 'Log utente';
$string['usernotfound'] = 'Non è possible individuare l\'utente';
$string['usersauthedinperiod'] = 'Autenticato';
$string['verificationcode_help'] = 'Il codice di verifica richiesto dal fattore di autenticazione corrente.';
$string['weight'] = 'Peso';
