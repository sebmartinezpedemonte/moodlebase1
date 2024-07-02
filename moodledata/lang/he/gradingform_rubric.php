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
 * Strings for component 'gradingform_rubric', language 'he', version '4.1'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'הוספת מדד';
$string['alwaysshowdefinition'] = 'אפשרו לתלמידים צפיה מקדימה במחוון לפני ההגשה (אחרת, המחוון יוצג לאחר מתן הציון)';
$string['backtoediting'] = 'בחזרה לעריכה';
$string['confirmdeletecriterion'] = 'האם הינך בטוח כי ברצונך למחוק את מדד זה?';
$string['confirmdeletelevel'] = 'האם הינך בטוח כי ברצונך למחוק את אמת־מידה זו?';
$string['criterion'] = 'מדד {$a}';
$string['criterionaddlevel'] = 'הוספת אמת־מידה';
$string['criteriondelete'] = 'מחיקת מדד';
$string['criterionduplicate'] = 'מדד משוכפל';
$string['criterionempty'] = 'הקליקו על עריכת מדד';
$string['criterionmovedown'] = 'הזזה למטה';
$string['criterionmoveup'] = 'הזזה למעלה';
$string['criterionremark'] = 'הערות למדד {$a->description}: {$a->remark}';
$string['definerubric'] = 'מחוון (Rubric) טבלת מדדים';
$string['description'] = 'תיאור';
$string['enableremarks'] = 'אפשרו לנותן הציונים "הזנת משוב מילולי" לכל מדד';
$string['err_mintwolevels'] = 'על כל מדד להכיל לפחות שתי אמות־מידה';
$string['err_nocriteria'] = 'מחוונים חייבים להכיל לפחות מדד אחד';
$string['err_nodefinition'] = 'קביעת אמת־מידה אינה יכולה להיות ריקה';
$string['err_nodescription'] = 'תיאור מדד אינו יכול להיות ריק';
$string['err_scoreformat'] = 'מספר הנקודות עבור כל אמת־מידה חייב להיות מספר חיובי תקין';
$string['err_totalscore'] = 'מספר מירבי של נקודות אפשרי כאשר הציון הניתן על־ידי המחוון יהיה גדול מהערך אפס (0)';
$string['gradingof'] = 'מתן ציון {$a}';
$string['level'] = 'אמת־מידה {$a->definition}, {$a->score} נקודות';
$string['leveldefinition'] = 'הגדרת אמת־מידה {$a}';
$string['leveldelete'] = 'מחיקת אמת־מידה {$a}';
$string['levelempty'] = 'הקליקו לעריכת אמת־המידה';
$string['levelsgroup'] = 'קבוצת אמת-מידה';
$string['lockzeropoints'] = 'חישוב הציון מבוסס על מחוון בעל ציון מזערי של 0';
$string['name'] = 'שם';
$string['needregrademessage'] = 'הגדרות המחוון שונו לאחר מתן הציון הסטודנט. הסטודנט לא יכול לראות את תוצאות המחוון עד שהמחוון החדש יבדק שוב והציון יעודכן';
$string['pluginname'] = 'מחוון - טבלת מדדים';
$string['previewrubric'] = 'צפיה מוקדמת במחוון';
$string['regrademessage1'] = 'אתה עומד לשמור את השינויים של המחוון שכבר נעשה בו שימוש עבור מתן ציון. אנא וודא אם יש לעבור מחדש על ציונים קיימים. אם מגדירים זאת, מחוון יוסתר בפני הסטודנטים עד שינתן ציון לפריט הציון שלהם.';
$string['regrademessage5'] = 'אתה עומד לשמור שינויים משמעותיים במחוון שכבר נעשה בו שימוש למתן ציון. ערך הציון בגליון הציונים לא ישתנה, אך המחוון יהיה מוסתר מהסטודנטים עד שינתן ציון חדש לפריט הציון שלהם.';
$string['regradeoption0'] = 'לא לסמן למתן ציון מחדש';
$string['regradeoption1'] = 'סמנו למתן ציון מחדש';
$string['restoredfromdraft'] = 'שימו לב: הנסיון האחרון לתת ציון לאדם זה לא נשמר כראוי כך שציוני טיוטה שוחזרו. אם ברצונך לבטל שינויים אלו השתמש בכפתור "ביטול" למטה.';
$string['rubric'] = 'מדדים (Rubric)';
$string['rubricmapping'] = 'עקרונות מיפוי "ניקוד" מדדיי המחוון ל"ציון" מסכם';
$string['rubricmappingexplained'] = 'הניקוד הנמוך ביותר האפשרי עבור מחוון זה הוא <b>{$a->minscore} נקודות</b> והוא יומר לציון הנמוך ביותר הזמין ברכיב מטלה זה (שהוא "אפס" אם לא נעשה שימוש במדרגת־הערכה).

הניקוד הגבוה ביותר האפשרי עבור מחוון זה הוא <b>{$a->maxscore} נקודות</b> והוא יומר לציון הגבוה ביותר הזמין ברכיב מטלה זה. <br/>

ניקוד ביניים יומר ויעוגל באופן מותאם לציון הזמין הקרוב ביותר.<br/>

כאשר משתמשים במדרגת־הערכה במקום ציון, הניקוד יומר באופן רציף לפי ערכי מדרגת־הערכה';
$string['rubricnotcompleted'] = 'יש לבחור משהו עבור כל מדד';
$string['rubricoptions'] = 'אפשרויות המחוון';
$string['rubricstatus'] = 'מצב המחוון הנוכחי';
$string['save'] = 'שמירה';
$string['saverubric'] = 'שמירת המחוון והפיכתו לפעיל';
$string['saverubricdraft'] = 'שמירה כטיוטה';
$string['scorepostfix'] = '{$a} נקודות';
$string['showdescriptionstudent'] = 'הצגת תיאור המחוון לאלו שניתן עליהם ציון';
$string['showdescriptionteacher'] = 'הצגת התיאור של המחוון בזמן ההערכה';
$string['showremarksstudent'] = 'הצגת הערות לאלו שניתן עליהם ציון';
$string['showscorestudent'] = 'הצגת נקודות עבור כל אמת־מידה לתלמידים';
$string['showscoreteacher'] = 'הצגת נקודות עבור כל אמת־מידה בזמן ההערכה';
$string['sortlevelsasc'] = 'הגדרות מיון לאמות־המידה:';
$string['sortlevelsasc0'] = 'מיון יורד לפי ערך הנקודות';
$string['sortlevelsasc1'] = 'מיון עולה לפי ערך הנקודות';
