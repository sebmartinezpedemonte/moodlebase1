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
 * Strings for component 'qtype_combined', language 'he', version '4.1'.
 *
 * @package     qtype_combined
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['controlnamegapselect'] = 'רשימת חד-ברירה';
$string['controlnamegapselectplural'] = 'רשימת רב-ברירה';
$string['controlnamemultichoice'] = 'בחירה אחת';
$string['controlnameshowworking'] = 'תשובה קצרה';
$string['err_weightingsdonotaddup'] = 'המשקלים של תתי השאלות נדרשים להסתכם ל 1';
$string['err_you_must_provide_third_param'] = 'יש להזין משתנה שלישי לשאלה מסוג {$a}';
$string['incorrectfeedback'] = 'משוב לתשובה לא נכונה';
$string['pluginname'] = 'משולבת Combined';
$string['pluginname_link'] = 'question/type/combined';
$string['pluginnameadding'] = 'הוספת שאלה משולבת';
$string['pluginnameediting'] = 'עריכת שאלה משולבת';
$string['shuffle'] = 'ערבוב';
$string['subqheader'] = '\'{$a->qtype}\' סעיף \'{$a->qid}\'';
$string['subqheader_not_in_question_text'] = '\'{$a->qtype}\' סעיף \'{$a->qid}\' (לא משובץ בתוכן השאלה).';
$string['subquestiontypes'] = 'תת סוגי שאלות זמינות';
$string['updateform'] = 'בדיקת תחביר השאלה ועדכון הטופס';
$string['validationerror'] = 'נמצאה שגיאה בתשובה: {$a}';
$string['validationerror_part'] = 'סעיף {$a->identifier} - {$a->error}';
$string['validationerrors'] = 'נמצאו שגיאות בתשובות: {$a}';
$string['vertical_or_horizontal_embed_code'] = '[[{$a->qid}:{$a->qtype}:v]] או [[{$a->qid}:{$a->qtype}:h]] לתצוגה אופקית או אנכית.';
$string['weighting'] = 'משקל';
$string['yougot1right'] = 'אחת מהתשובות שלך לא נכונה';
$string['yougotnright'] = '{$a->num} מהתשובות שלך נכונות';
