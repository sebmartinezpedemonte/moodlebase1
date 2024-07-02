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
 * Strings for component 'quiz_grading', language 'he', version '4.1'.
 *
 * @package     quiz_grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alldoneredirecting'] = 'על כל נסיונות המענה  ניתן ציון. בחזרה לרשימת השאלות.';
$string['alreadygraded'] = 'ניתן כבר ציון';
$string['alsoshowautomaticallygraded'] = 'תצוגת שאלות אשר ניתן להם ציון באופן אוטומטי';
$string['attemptstograde'] = 'נסיונות מענה עבור ציון';
$string['automaticallygraded'] = 'ניתן ציון באופן אוטומטי';
$string['backtothelistofquestions'] = 'בחזרה לרשימת השאלות';
$string['bydate'] = 'לפי תאריך';
$string['bystudentfirstname'] = 'לפי שם פרטי של הסטודנט';
$string['bystudentidnumber'] = 'לפי מספר זיהוי של הסטודנט';
$string['bystudentlastname'] = 'לפי שם משפחה של הסטודנט';
$string['cannotgradethisattempt'] = 'לא ניתן לתת ציון לנסיון מענה זה.';
$string['cannotloadquestioninfo'] = 'לא ניתן לטעון מידע מסוים לסוג שאלה זה';
$string['changeoptions'] = 'שינוי אפשרויות';
$string['essayonly'] = 'לשאלות הבאות צריך לתת ציון באופן ידני.';
$string['grade'] = 'ממתין לציון';
$string['gradeall'] = 'מתן ציונים לכולם';
$string['gradeattemptsall'] = 'הכל({$a})';
$string['gradeattemptsautograded'] = 'אלו שניתן להם ציון אוטומטית  ({$a})';
$string['gradeattemptsmanuallygraded'] = 'אלו שניתן להם ציון לאחרונה בצורה ידנית  ({$a})';
$string['gradeattemptsneedsgrading'] = 'אלו שיש לתת להם ציון  ({$a})';
$string['graded'] = 'ניתן ציון (נבדק)';
$string['gradenextungraded'] = 'תן ציון ל-{$a} נסיונות המענה הבאים';
$string['gradeungraded'] = 'תן ציון ל-{$a} נסיונות המענה שלא נבדקו';
$string['grading'] = 'מתן ציון לשאלות פתוחות';
$string['grading:viewidnumber'] = 'צפיה במספרי זיהוי (idnumbers) של הסטודנטים במהלך מתן הציון';
$string['grading:viewstudentnames'] = 'צפיה בשמות הסטודנטים במהלך מתן הציון';
$string['gradingall'] = 'כל {$a} נסיונות המענה בשאלה זו.';
$string['gradingattempt'] = 'נסיון מענה מס\' {$a->attempt} עבור {$a->fullname}.';
$string['gradingattemptsxtoyofz'] = 'מתן ציונים לנסיונות המענה מ-  {$a->from} ל- {$a->to} מתוך {$a->of}';
$string['gradingattemptwithcustomfields'] = 'נסיון מענה מס\' {$a->attempt} עבור {$a->fullname} ({$a->customfields})';
$string['gradingattemptwithidnumber'] = 'מספר הנסיון {$a->attempt} עבור {$a->fullname} ({$a->idnumber})';
$string['gradingnextungraded'] = 'נסיון מענה מס\' {$a} הבא שלא נבדק';
$string['gradingnotallowed'] = 'אין לך הרשאה לתת ציון לתגובות או תשובות באופן ידני';
$string['gradingquestionx'] = 'מתן ציון לשאלה {$a->number}: {$a->questionname}';
$string['gradingreport'] = 'דוח ציונים ידני';
$string['gradingungraded'] = 'נסיון מענה {$a} שלא נבדק';
$string['gradinguser'] = 'נסיונות מענה עבור {$a}';
$string['hideautomaticallygraded'] = 'הסתרת שאלות שניתנה להם ציון אוטומטית';
$string['inprogress'] = 'בתהליך';
$string['invalidattemptid'] = 'לא קיים זיהוי זה';
$string['invalidquestionid'] = 'לא נמצאה שאלה ברת ציון בעלת מזהה {$a}';
$string['noquestionsfound'] = 'לא נמצאו שאלות שניתן עליהן ציון באופן ידני';
$string['nothingfound'] = 'אין מה להציג';
$string['options'] = 'אפשרויות';
$string['orderattempts'] = 'סידור לפי נסיונות';
$string['orderattemptsby'] = 'סידור ניסיונות מענה לפי';
$string['pluginname'] = 'מתן ציון ידני';
$string['qno'] = 'Q #';
$string['questionname'] = 'שם שאלה';
$string['questionsperpage'] = 'מספר שאלות בעמוד';
$string['questionsthatneedgrading'] = 'שאלות שיש לתת להן ציון';
$string['questiontitle'] = 'שאלה {$a->number} : "{$a->name}" ({$a->openspan}{$a->gradedattempts}{$a->closespan} / {$a->totalattempts}
נסיונות
{$a->openspan}ניתן ציון{$a->closespan}).';
$string['random'] = 'אקראי';
$string['randomly'] = 'אקראי';
$string['saveandnext'] = 'שמירה ומעבר לעמוד הבא';
$string['showstudentnames'] = 'הצגת שמות הסטודנטים';
$string['tograde'] = 'יש לתת ציון';
$string['total'] = 'סך-הכל';
$string['unknownquestion'] = 'שאלה לא ידועה';
$string['updategrade'] = 'עדכון ציונים';
