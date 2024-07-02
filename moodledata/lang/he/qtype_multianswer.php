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
 * Strings for component 'qtype_multianswer', language 'he', version '4.1'.
 *
 * @package     qtype_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'אני מאשר כי ברצוני שהשאלה תשמר כפי שנערכה';
$string['confirmsave'] = 'אישור ושמירת {$a}';
$string['correctanswer'] = 'תשובה נכונה';
$string['correctanswerandfeedback'] = 'תשובה נכונה ומשוב';
$string['decodeverifyquestiontext'] = 'בדיקת תקינות תחביר תתי־השאלות בגוף השאלה';
$string['layout'] = 'תצוגת תצוגה';
$string['layouthorizontal'] = 'שורה אופקית של כפתורי בחירה';
$string['layoutmultiple_horizontal'] = 'שורה אופקית של תיבות סימון';
$string['layoutmultiple_vertical'] = 'עמודה אנכית של תיבות סימון';
$string['layoutselectinline'] = 'תפריט נפתח בשורת הטקסט';
$string['layoutundefined'] = 'תצוגת תצוגה לא מוגדרת';
$string['layoutvertical'] = 'עמודה אנכית של כפתורי בחירה';
$string['nooptionsforsubquestion'] = 'לא ניתן להשיג אפשרויות לשאלה
part # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'שאלת ה-Cloze (תשובה מרובה)
"<strong>{$a}</strong>"
לא מכילה אף שאלה.';
$string['pleaseananswerallparts'] = 'יש לענות על כל חלקי השאלה.';
$string['pluginname'] = 'תשובות משובצות (Cloze)';
$string['pluginname_help'] = 'תשובות משובצות (Cloze) מורכבות מקטע של טקסט עם שאלות כגון מרובות-בחירה ןשאלות קצרות מוכללות בהן.';
$string['pluginname_link'] = 'question/type/multianswer';
$string['pluginnameadding'] = 'הוספת שאלת תשובות משובצות (Cloze)';
$string['pluginnameediting'] = 'עריכת שאלת תשובות משובצות  (Cloze)';
$string['pluginnamesummary'] = 'שאלת "תשובות משובצות" (Multi Answer או Cloze) מורכבת מתתי־שאלות מסוגים שונים: רב־ברירה אופקית או אנכית, תשובה־קצרה ומספריות.
לשאלות תחביר מיוחד. יש להעזר בסמל "?" (עזרה) לשם קבלת מידע נוסף הנוגע לתחביר השאלות.

את השאלות אפשר לשבץ בטבלה או כל דרך חזותית נדרש. לכל תת־שאלה ניקוד אישי.';
$string['qtypenotrecognized'] = 'סוג שאלה (questiontype) {$a} לא מזוהה';
$string['questiondefinition'] = 'הגדרת שאלה';
$string['questiondeleted'] = 'השאלה הוסרה
';
$string['questioninquiz'] = '<ul>
<li> הוספת או מחיקת שאלות </li>
<li> שינוי סדר תתי־השאלות בגוף השאלה </li>
<li> שינוי סוגי תתי־השאלה (מספרי, תשובה-קצרה, מרובת-בחירה...) </li>
</ul>';
$string['questionnotfound'] = 'לא ניתן למצוא שאלה מחלק השאלה #{$a}';
$string['questionsadded'] = '"השאלה התווספה"';
$string['questionsaveasedited'] = 'השאלה תשמר כפי שנערכה';
$string['questionsless'] = ' {$a} פחות שאלות מאשר שאלות מרובות תשובות  נשמרו במסד הנתונים';
$string['questionsmissing'] = 'טקסט השאלה חייב להכיל לפחות תשובה משובצת אחת לפחות.';
$string['questionsmore'] = '{$a} יותר שאלות מאשר שאלות מרובות תשובות  נשמרו במסד הנתונים';
$string['questiontypechanged'] = 'סוג השאלה השתנה
';
$string['questiontypechangedcomment'] = 'לפחות סוג שאלה אחד השתנה.
<br>
האם הוספת, מחקת או הזזת שאלה?
<br>
אנא חפש';
$string['questionusedinquiz'] = 'שאלה זו נמצאת בשימוש של {$a->nb_of_quiz} בחנים, מספר הנסיונות המענה על השאלה הוא: {$a->nb_of_attempts}';
$string['storedqtype'] = 'סוג שאלה מאוחסן {$a}';
$string['subqresponse'] = 'חלק {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'סוג שאלה לא ידוע: {$a->type}
של שאלה מחלק  # {$a->sub}';
$string['warningquestionmodified'] = '<b>אזהרה</b>';
$string['youshouldnot'] = '<b>לא ניתן לבצע:</b>';
