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
 * Strings for component 'gradingform_guide', language 'he', version '4.1'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'הוספת הערה שכיחה חדשה';
$string['addcriterion'] = 'הוספת מדד';
$string['alwaysshowdefinition'] = 'הצגת הגדרת מחוון פשוט לסטודנטים';
$string['backtoediting'] = 'בחזרה לעריכה';
$string['clicktocopy'] = 'הקליקו להעתקת מלל זה למשוב המדד';
$string['clicktoedit'] = 'הקליקו לעריכה';
$string['clicktoeditname'] = 'הקליקו לעריכת שם המדד';
$string['comment'] = 'הערה';
$string['comments'] = 'הערות שימוש שכיחות';
$string['commentsdelete'] = 'מחיקת הערה';
$string['commentsempty'] = 'הקליקו לעריכת הערה';
$string['commentsmovedown'] = 'העברה למטה';
$string['commentsmoveup'] = 'העברה למעלה';
$string['confirmdeletecriterion'] = 'האם בטוח כי ברצונך למחוק פריט זה?';
$string['confirmdeletelevel'] = 'האם בטוח כי ברצונך למחוק שלב זה?';
$string['criterion'] = 'מדד';
$string['criteriondelete'] = 'מחיקת מדד';
$string['criterionempty'] = 'הקליקו לעריכת המדד';
$string['criterionmovedown'] = 'העבר למטה';
$string['criterionmoveup'] = 'העבר למעלה';
$string['criterionname'] = 'שם המדד';
$string['criterionremark'] = 'הערה למדד {$a}';
$string['definemarkingguide'] = 'קביעת מחוון פשוט';
$string['description'] = 'תאור (הנחיה)';
$string['descriptionmarkers'] = 'הנחיה לבודקים';
$string['descriptionstudents'] = 'הנחיה לסטודנטים';
$string['err_maxscorenotnumeric'] = 'ניקוד מדד מירבי חייב להיות מספרי';
$string['err_nocomment'] = 'הערה איננה יכולה להיות ריקה';
$string['err_nodescription'] = 'הנחיית הסטודנט אינו יכול להישאר ריק';
$string['err_nodescriptionmarkers'] = 'הנחיית הבודקים איננה יכולה להיות אריקה';
$string['err_nomaxscore'] = 'הניקוד המירבי של המדד איננו יכול להיות ריק';
$string['err_noshortname'] = 'שם המדד אינו יכול להיות ריק';
$string['err_scoreinvalid'] = 'הציון שניתן ל- {$a->criterianame} איננו תקף, הציון המירבי הוא :{$a->maxscore}';
$string['gradingof'] = 'מתן ציון {$a}';
$string['guide'] = 'מחוון לציון';
$string['guidemappingexplained'] = 'אזהרה : המחוון הפשוט שלך בעל ציון מירבי מתוך ניקוד של <b>{$a->maxscore} אך הציון המירבי שנקבע בפעילות שלך הוא {$a->modulegrade}.
התוצאה המירבית שנקבעה במחוון הפשוט שלך תשקלל בציון המירבי של הרכיב.
<br />
תוצאות ביניים יומרו בהתאמה ויעוגלו לציון הקרוב והזמין ביותר.';
$string['guidenotcompleted'] = 'יש לציין ניקוד תקף עבור כל מדד';
$string['guideoptions'] = 'אפשרויות מחוון פשוט';
$string['guidestatus'] = 'מצב "מחוון פשוט" נוכחי';
$string['hidemarkerdesc'] = 'הסתרת הנחיות המדד מהבודק';
$string['hidestudentdesc'] = 'הסתרת הנחיות המדד מהסטודנט';
$string['insertcomment'] = 'הזנת הערות שכיחות';
$string['maxscore'] = 'ניקוד מירבי';
$string['name'] = 'שם';
$string['needregrademessage'] = 'קביעת המחוון הפשוט השתנתה לאחר שלסטודנט זה ניתן ציון. הסטודנט לא יכול לראות את המחוון הפשוט עד שהמחון יעודכן ויבדק על-ידיך.';
$string['pluginname'] = 'מחוון פשוט';
$string['previewmarkingguide'] = 'תצוגת מחוון פשוט';
$string['regrademessage1'] = 'הינכם עומדים לשמור את שינויי המחוון הפשוט שכבר נעשה בו שימוש במתן ניקוד לסטודנטים. אנא ציינו אם יש לבצע בדיקה חוזרת של הניקוד אשר ניתן לסטודנטים. אם תבוצע הגדרה זו, המחוון הפשוט יוסתר מסטודנטים עד שינתן ניקוד מחדש להגשה שלהם.';
$string['regrademessage5'] = 'הינך עומד לשמור שינויים משמעותיים למחוון הפשוט שכבר נעשה בו שימוש עבור מתן ציון. הערך בגליון הציונים לא ישתנה, אך המחוון הפשוט יוסתר לסטודנטים עד שינתן ציון לפריט הציון שלהם';
$string['regradeoption0'] = 'אל תסמן לציון מחדש';
$string['regradeoption1'] = 'סימון לציון מחדש';
$string['restoredfromdraft'] = 'שימו לב: נסיון האחרון לתת ציון למשתמש זה לא נשמר כראוי, לכן ציוני טיוטה נשמרו. אם תרצו לבטל שינויים אלו יש להשתמש בכפתור ה"ביטול" למטה.';
$string['save'] = 'שמירה';
$string['saveguide'] = 'שמירת מחוון פשוט והפיכתו למוכן';
$string['saveguidedraft'] = 'שמירה כטיוטה';
$string['score'] = 'ציון';
$string['showmarkerdesc'] = 'הצגת הנחיות המדד מהבודק';
$string['showmarkspercriterionstudents'] = 'הצגת ניקוד כל מדד לסטודנט';
$string['showstudentdesc'] = 'הצגת תאורי (הנחיות) מדדי-הערכה לסטודנט';
