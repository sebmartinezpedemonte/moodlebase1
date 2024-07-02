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
 * Strings for component 'availability_quizquestion', language 'he', version '4.1'.
 *
 * @package     availability_quizquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['description'] = 'התניית צפיה על בסיס הצלחה במענה על שאלה מתוך בבוחן מסוים';
$string['error_selectquestion'] = 'יש לבחור שאלה';
$string['error_selectquiz'] = 'יש לבחור בוחן';
$string['error_selectstate'] = 'יש לבחור מצב';
$string['label_question'] = 'איזו שאלה מהבוחן שנבחר';
$string['label_state'] = 'מצב נדרש';
$string['pluginname'] = 'הגבלת גישה לפי מענה על שאלה';
$string['requires_quizquestion'] = 'השאלה <b>{$a->questiontext}</b> ב <b><a href="{$a->quizurl}">{$a->quizname}</a></b> היא <b>{$a->requiredstate}</b>';
$string['requires_quizquestionnot'] = 'השאלה <b>{$a->questiontext}</b> ב <b><a href="{$a->quizurl}">{$a->quizname}</a></b> היא לא <b>{$a->requiredstate}</b>';
$string['title'] = 'שאלה מבוחן';
