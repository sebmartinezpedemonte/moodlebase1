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
 * Strings for component 'qtype_vplquestion', language 'de', version '4.1'.
 *
 * @package     qtype_vplquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allornothing'] = 'Alles oder nichts';
$string['answertemplate'] = 'Antwortvorlage';
$string['answertemplate_help'] = 'Schreiben Sie hier Code, der im Antwortformular der Teilnehmer/innen vorausgefüllt werden soll.';
$string['cannotimportquestionvplnotfound'] = 'Wichtige Warnung: die VPL Modul-ID, die in der VPL-Frage "{$a}" angegeben wurde, ist ungültig.';
$string['cannotimportquestionvplunreachable'] = 'Wichtige Warnung: Das VPL, das in der VPL-Frage "{$a}" verwendet wird, befindet sich nicht in diesem Kurs.';
$string['cfg:deletevplsubmissions'] = 'VPL Abgaben löschen';
$string['cfg:deletevplsubmissions_help'] = 'Ob Abgaben von VPL Fragen, die im VPL abgegeben wurden, bei der Auswertung der Frage verworfen werden sollen.';
$string['cfg:evaluationtries'] = 'Anzahl der internen Versuche zur Auswertung';
$string['cfg:evaluationtries_help'] = 'Bei Einstellung größer als 1, versucht der Server öfters, die Frage auszuwerten, wenn die Auswertung fehlschlägt.';
$string['cfg:generalsettings'] = 'Allgemeine Einstellungen';
$string['choose'] = 'Wählen...';
$string['compilation'] = 'Kompilierung:';
$string['correction'] = 'Verbesserung';
$string['evaluation'] = 'Auswertung:';
$string['evaluationdetails'] = 'Details zur Auswertung:';
$string['evaluationerror'] = 'Fehler bei der Auswertung:';
$string['execerror'] = 'Fehler beim Ausführen:';
$string['execfiles'] = 'Ausführbare Dateien';
$string['execfiles_help'] = 'Sie können hier ausführbare Dateien festlegen. Diese werden nur be der Auswertung (und der Vorab-Prüfung, wenn es die gleichen Dateien sind) gesendet . Sie werden nicht beim Ausführen gesendet, außer sie wurden mit "beim Ausführen behalten" im VPL markiert.<br>
Um Dateien hinzuzufügen, fügen Sie diese dem VPL als ausführbare Dateien hinzu.<br>
Wenn Sie eine Datei nicht verwenden möchten, schreiben Sie "UNUSED" in die erste Zeile und die Datei wird ausgelassen.';
$string['execfilesevalsettings'] = 'Ausführbare Dateien und Einstellungen zur Auswertung';
$string['execution'] = 'Fehler beim Ausführen:';
$string['flagifproblem'] = 'Wenn Sie ein Problem mit der Frage vermuten, markieren Sie diese und melden Sie dies Ihrem Trainer.';
$string['gradetypeerror'] = 'Die Auswertung hat einen nicht-numberischen Wert zurückgegeben.';
$string['gradingmethod'] = 'Bewertung';
$string['gradingmethod_help'] = 'Bewertungsmethode für diese Frage festlegen.
<ul><li>Wenn "Alles oder nichts" gewählt ist, erhalten die Teilnehmer/innen entweder 100% oder 0% auf die Auswertung dieser Frage, abhängig davon, ob alle Teilbereiche richtig beantwortet wurden oder nicht.</li>
<li>Wenn "Skalierung" gewählt ist, sakliert die Bewertung für die Frage mit der Bewertung im VPL.</li></ul>';
$string['informationtext'] = 'VPL Frage';
$string['nogradeerror'] = 'Bei der Bewertung ist ein Fehler aufgetreten (keine Bewertung erhalten).
{$a}';
$string['nogradenoerror'] = 'Kein Fehler aufgetreten - erhaltene Bewertung: "{$a}".';
$string['noprecheck'] = 'Keine Vorab-Prüfung';
$string['overwrite'] = 'Überschreiben';
$string['pleaseanswer'] = 'Bitte geben Sie eine Antwort ein.';
$string['pluginname'] = 'VPL Frage';
$string['pluginname_help'] = 'VPL Fragen ermöglichen das Erstellen von einfachen Programmierübungen.<br>
Sie basieren auf einem VPL, aber das Design ist in der Teilnehmer/innen-Ansicht einfacher gestaltet.';
$string['pluginnameadding'] = 'VPL Frage hinzufügen';
$string['pluginnameediting'] = 'VPL Frage bearbeiten';
$string['pluginnamesummary'] = 'VPL Fragen ermöglichen das Erstellen von einfachen Programmierübungen.<br>
Sie basieren auf einem VPL, aber das Design ist in der Teilnehmer/innen-Ansicht einfacher gestaltet.';
$string['possiblesolution'] = 'Lösungsvorschlag:';
$string['precheck'] = 'Vorab-Prüfung';
$string['precheckexecfiles'] = 'ausführbare Dateien Vorab-Prüfung';
$string['precheckexecfiles_help'] = 'Sie können hier ausführbare Dateien für die Vorab-Prüfung festlegen. Für weitere Informationen öffen Sie bitte die Dokumentation zu "Ausführbaren Dateien".';
$string['precheckhasownfiles'] = 'Vorab-Prüfung verwendet eigene ausführbare Dateien';
$string['precheckhassamefiles'] = 'Vorab-Prüfung verwendet die gleichen ausführbaren Dateien wie Prüfung';
$string['precheckpreference'] = 'Einstellungen Vorab-Prüfung';
$string['qvplbase'] = 'VPL Frage-Vorlage';
$string['run'] = 'Ausführen';
$string['scaling'] = 'Skalierung';
$string['templatecontext'] = 'Vorlage bearbeiten';
$string['templatevpl'] = 'VPL Vorlage';
$string['validateonsave'] = 'Überprüfen';
