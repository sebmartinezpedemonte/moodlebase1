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
 * Strings for component 'qtype_sc', language 'de', version '4.1'.
 *
 * @package     qtype_sc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answernumbering'] = 'Nummerierung der Optionen';
$string['checked'] = 'ausgewählt';
$string['clearchoice'] = 'Meine Auswahl löschen';
$string['configintro'] = 'Administrationseinstellungen für den Fragentyp Single Choice (ETH).';
$string['correct'] = 'Richtig';
$string['correctvaluereset'] = 'Der Wert für die korrekte Wahlantwort wurde zurückgesetzt. Wahlantwort 1 wurde provisorisch als korrekte Antwort markiert.';
$string['deletedchoice'] = 'Diese Antwort wurde gelöscht, nachdem der Test gestartet worden ist.';
$string['deleterawswarning'] = 'Wenn Sie auf eine kleinere Anzahl Wahlantworten wechseln, werden die letzten {$a} Wahlantwort(en) gelöscht. Möchten Sie fortfahren?';
$string['enteroptionhere'] = '';
$string['enterstemhere'] = 'Stamm in Form einer Frage oder einer Aussage eingeben.';
$string['feedbackforoption'] = 'Feedback';
$string['generalfeedback'] = 'Allgemeines Feedback.';
$string['generalfeedback_help'] = 'Allgemeines Feedback wird unabhängig von den gegebenen Antworten angezeigt. Allgemeines Feedback kann eingesetzt werden, um richtige Antworten zu erläutern oder Links zu weiteren Informationen zu geben.';
$string['incorrect'] = 'Nicht richtig';
$string['iscrossedout'] = 'ist durchgestrichen';
$string['markascorrect'] = 'Durch Klicken als korrekte Wahlantwort auswählen.';
$string['markasdistractor'] = 'Durch Klicken als falsche Wahlantwort kennzeichnen.';
$string['markedascorrect'] = 'Diese Wahlantwort wurde ausgewählt.';
$string['markedasdistractor'] = 'Diese Wahlantwort wurde als definitiv falsch markiert';
$string['maxpoints'] = 'Max. Punkte';
$string['mustchoosecorrectoption'] = 'Sie müssen eine der Wahlantworten als richtig markieren!';
$string['mustdeleteextrarows'] = 'Der Fragetyp SC erlaubt maximal 5 Wahlantworten. {$a} Wahlantwort(en) werden gelöscht. Falls Sie abbrechen ohne zu speichern, bleiben die überzähligen Wahlantworten erhalten.';
$string['mustsupplyname'] = 'Sie müssen einen Aufgabentitel eingeben.';
$string['mustsupplyvalidvalue'] = 'Sie müssen einen Wert im Wertebereich zwischen 2 und 5 angeben.';
$string['mustsupplyvalue'] = 'Sie müssen einen Text für diese Wahlantwort eingeben.';
$string['numberofrows'] = 'Anzahl Wahlantworten';
$string['numberofrows_help'] = 'Wählen Sie die Anzahl der Wahlantworten. Wenn Sie auf eine kleinere Anzahl von Wahlantworten wechseln, werden überzählige Wahlantworten gelöscht, sobald die Frage gespeichert wird.';
$string['oneradiobutton'] = 'Sie müssen eine der Wahlantworten als richtig markieren!';
$string['option'] = 'Wahlantwort';
$string['optionno'] = 'Wahlantwort {$a}';
$string['optionsandfeedback'] = 'Wahlantworten und Feedback';
$string['pluginname'] = 'Single Choice (ETH)';
$string['pluginname_help'] = 'In Einfachwahlaufgaben ("Typ A") muss eine von mehreren Wahlantworten als die einzig richtige oder die beste ausgewählt werden. Teilnehmer/innen können Wahlantworten markieren, die sie als falsch erachten, und erhalten je nach Bewertungsmethode Teilpunkte.';
$string['pluginname_link'] = 'question/type/sc';
$string['pluginnameadding'] = 'Einfachwahlaufgabe ("Typ A") hinzufügen';
$string['pluginnameadding_help'] = 'Zur Beantwortung einer Fragestellung muss eine von mehreren Wahlantworten als die einzig richtige oder die beste ausgewählt werden.';
$string['pluginnameediting'] = 'Einfachwahlaufgabe ("Typ A") bearbeiten';
$string['pluginnameediting_help'] = 'Zur Beantwortung einer Fragestellung muss eine von mehreren Wahlantworten als die einzig richtige oder die beste ausgewählt werden.';
$string['pluginnamesummary'] = 'In Einfachwahlaufgaben ("Typ A") muss eine von mehreren Wahlantworten als die einzig richtige oder die beste ausgewählt werden. Teilnehmer/innen können Wahlantworten, die sie als falsch erachten, als Distraktoren markieren und erhalten je nach Bewertungsmethode Teilpunkte.';
$string['preview'] = 'Vorschau';
$string['privacy:metadata'] = 'Das Plugin für den Fragetyp "SC" speichert keine persönlichen Daten.';
$string['scoringaprime'] = 'Aprim';
$string['scoringaprime_help'] = 'Die volle Punktzahl wird vergeben, wenn die richtige Wahlantwort ausgewählt wurde oder wenn alle Distraktoren korrekt gewählt sind. Die Hälfte der Punktzahl wird vergeben, wenn alle korrekten Distraktoren bis auf einem richtig angewählt sind, sonst null Punkte';
$string['scoringmethod'] = 'Bewertungsmethode';
$string['scoringmethod_help'] = 'Es gibt es drei alternative Bewertungsmethoden:
<br/><strong>SC1/0</strong> (empfohlen): Bei der Auswahl "SC1/0" erhalten Kandidat/innen die volle Punktzahl, wenn die richtige Wahlantwort ausgewählt wurde, sonst null Punkte.
<br/><strong>Aprim</strong>: Bei der Auswahl "Aprim" erhalten Kandidat/innen die volle Punktzahl, wenn die richtige Wahlantwort ausgewählt wurde oder wenn alle Distraktoren korrekt gewählt sind. Die Hälfte der Punktzahl wird vergeben, wenn alle korrekten Distraktoren bis auf einem richtig angewählt sind, sonst null Punkte.
<br/><strong>Teilpunkte</strong>: Bei der Auswahl "Teilpunkte" erhalten Kandidat/innen die volle Punktzahl, wenn die richtige Wahlantwort ausgewählt wurde oder wenn alle Distraktoren korrekt gewählt sind. Die Hälfte der Punktzahl wird vergeben, wenn alle korrekten Distraktoren bis auf einem richtig angewählt sind, sonst Teilpunkte';
$string['scoringsconezero'] = 'SC1/0';
$string['scoringsconezero_help'] = 'Die volle Punktzahl wird vergeben, wenn die richtige Wahlantwort ausgewählt wurde, sonst null Punkte.';
$string['scoringsubpoints'] = 'Teilpunkte';
$string['scoringsubpoints_help'] = 'Die volle Punktzahl wird vergeben, wenn die richtige Wahlantwort ausgewählt wurde oder wenn alle Distraktoren korrekt gewählt sind. Die Hälfte der Punktzahl wird vergeben, wenn alle korrekten Distraktoren bis auf einem richtig angewählt sind, sonst Teilpunkte';
$string['selectone'] = 'Wählen Sie eine Wahlantwort aus:';
$string['showscoringmethod'] = 'Bewertungsmethode anzeigen';
$string['showscoringmethod_help'] = 'Wenn diese Option aktiviert ist, wird Teilnehmer/innen die Bewertungsmethode in Tests angezeigt.';
$string['shuffleanswers'] = 'Wahlantworten mischen';
$string['shuffleanswers_help'] = 'Wenn aktiviert, ist die Reihenfolge der Wahlantworten bei jedem Versuch zufällig, sofern die Option "In Fragen zufällig mischen" aktiviert ist.';
$string['stem'] = 'Stamm';
$string['tasktitle'] = 'Aufgabentitel';
$string['unchecked'] = 'nicht ausgewählt';
$string['warningreduceoptions'] = 'Wenn Sie auf eine kleinere Anzahl Wahlantworten wechseln, werden überzählige Wahlantworten gelöscht. Möchten Sie fortfahren?';
