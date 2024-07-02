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
 * Strings for component 'qtype_calculated', language 'he', version '4.1'.
 *
 * @package     qtype_calculated
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'הוספת פריט';
$string['addmoreanswerblanks'] = 'הוספת תשובה ריקה חדשה';
$string['addsets'] = 'הוספת מערך הגדרות';
$string['answerdisplay'] = 'תצוגת התשובה';
$string['answerformula'] = 'נוסחה {$a} תשובת';
$string['answerhdr'] = 'תשובה';
$string['answerstoleranceparam'] = 'משתני טווח־סבילות התשובות';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'כל ערך';
$string['atleastoneanswer'] = 'יש לספק לפחות תשובה אחת';
$string['atleastonerealdataset'] = 'חייב להיות לפחות מקבץ־ערכים (Dataset) אחד בתוכן השאלה';
$string['atleastonewildcard'] = 'יש להזין משתנה (כגון: {param} ) אחד, לפחות, בנוסחת התשובה או בתוכן השאלה';
$string['calcdistribution'] = 'התפלגות';
$string['calclength'] = 'מקומות עשרוניים';
$string['calcmax'] = 'מירבי';
$string['calcmin'] = 'מיזערי';
$string['choosedatasetproperties'] = 'הגדרות מאפייני מקבץ־ערכים (Dataset) של ה"משתנים" (בשאלה)';
$string['choosedatasetproperties_help'] = 'מקבץ־ערכים הוא אוסף של ערכים מספריים המחליפים את תוכן ה"משתנים" (לדוגמה: {param} ) המצויים בתוכן השאלה.

ניתן לייצור מקבץ־ערכים פרטי עבור שאלות מסוימות, או מקבץ־ערכים משותף שניתן להשתמש בו במספר שאלות חישוביות בתוך הקטגוריה.

למשל, מספר שאלות אשר ישתמשו במשתנה "רדיוס" ( למשל: {radius} ) במספר שאלות שונות, באותה קטגוריה.';
$string['correctanswerformula'] = 'נוסחת התשובה הנכונה';
$string['correctanswershows'] = 'התשובה הנכונה מראה';
$string['correctanswershowsformat'] = 'תסדיר';
$string['correctfeedback'] = 'לכל תגובה נכונה';
$string['dataitemdefined'] = 'זמין עם {$a} ערכים מספריים שכבר הוגדרו ';
$string['datasetrole'] = '"משתנים" <strong>{x..}</strong> יוחלפו בערכים מספריים ממקבץ־ערכים שלהם';
$string['decimals'] = 'עם {$a}';
$string['deleteitem'] = 'מחיקת פריט';
$string['deletelastitem'] = 'מחיקת פריט אחרון';
$string['distributionoption'] = 'בחירת מנגנון הפצה';
$string['editdatasets'] = 'עריכת מקבץ־ערכים של ה"משתנים"';
$string['editdatasets_help'] = 'ניתן לייצור ערכי "משתנים" על ידי הזנת מספר בשדה "משתנה" ובחירה בכפתור "הוספה". בכדי ליצור בדרך אוטומטית 10 או יותר ערכים, בחר את מספר הערכים הדרושים לפני ההקשה על לחצן ההוספה. פרושה של התפלגות אחידה היא שכל מספר בין הגבולות במוגדרים יכול להופיע  במידה שווה; התפלגות אחידה־לוגריתמית היא התפלגות שבה לערכים המצויים בקרבת הגבול התחתון יש יכולת להופיע יותר פעמים בסידרת הערכים אשר תחולל.';
$string['editdatasets_link'] = 'question/type/calculated';
$string['existingcategory1'] = 'ישתמש במקבץ־ערכים משותף קיים';
$string['existingcategory2'] = 'קובץ ממקבץ קיים של קבצים אשר נעשה בו שימוש בשאלות אחרות מקטגוריה זאת';
$string['existingcategory3'] = 'קישור למקבץ קיים של קישורים אשר נעשה בו שימוש בשאלות אחרות מקטגוריה זאת';
$string['forceregeneration'] = 'התחדשות אוטומטית';
$string['forceregenerationall'] = 'התחדשות אוטומטית על כל "משתנה"';
$string['forceregenerationshared'] = 'התחדשות אוטומטית רק כאשר ה"משתנים" אינם משותפים';
$string['functiontakesatleasttwo'] = 'הפונקציה {$a} חייבת להכיל לפחות 2 משתנים';
$string['functiontakesnoargs'] = 'הפונקציה {$a} אינה מקבלת אף משתנה';
$string['functiontakesonearg'] = 'על הפונקציה {$a} להכיל לפחות משתנה אחד';
$string['functiontakesoneortwoargs'] = 'על הפונקציה {$a} להכיל משתנה אחד או שניים';
$string['functiontakestwoargs'] = 'על הפונקציה {$a} להכיל בדיוק שניי משתנים';
$string['generatevalue'] = 'מחולל ערך חדש בין';
$string['getnextnow'] = 'עדכון סוג "פריט להוספה" חדש';
$string['hexanotallowed'] = 'מקבץ־ערכים <strong>{$a->name}</strong> בתסדיר הקסדצימלי הערך $a->value איננו תקף';
$string['illegalformulasyntax'] = 'תחביר הנוסחה לא חוקי, מתחיל ב \'{$a}\'';
$string['incorrectfeedback'] = 'לכל תגובה לא נכונה';
$string['itemno'] = 'פריט {$a}';
$string['itemscount'] = 'מספר<br />פריטים';
$string['itemtoadd'] = 'פריט להוספה';
$string['keptcategory1'] = 'ישתמש באותו מקבץ־ערכים משותף, כמקודם לכן';
$string['keptcategory2'] = 'קובץ מאותה קטגוריה של מקבץ־קבצים ברי שימוש חוזר, כמקודם לכן';
$string['keptcategory3'] = 'קישור מאותה קטגוריה של מקבץ־קישורים ברי שימוש חוזר, כמקודם לכן';
$string['keptlocal1'] = 'ישתמש באותו מקבץ־הערכים הפרטי, כמקודם לכן';
$string['keptlocal2'] = 'קובץ מאותו מקבץ קבצי השאלה פרטי, כמקודם לכן';
$string['keptlocal3'] = 'קישור מאותו מקבץ קישורי השאלה פרטי, כמקודם לכן';
$string['lengthoption'] = 'בחירת יחידת אורך';
$string['loguniform'] = 'התפלגות לוגריתמית אחידה';
$string['loguniformbit'] = 'digits, from a loguniform distribution';
$string['makecopynextpage'] = 'עמוד הבא (שאלה חדשה)';
$string['mandatoryhdr'] = '"משתני" חובה, הכלולים בתשובות';
$string['max'] = 'Max';
$string['min'] = 'Min';
$string['minmax'] = 'טווח ערכים';
$string['missingformula'] = 'נוסחה חסרה';
$string['missingname'] = 'שם השאלה חסר';
$string['missingquestiontext'] = 'תוכן השאלה חסר';
$string['mustenteraformulaorstar'] = 'יש להזין נוסחה או \'*\'.';
$string['newcategory1'] = 'ישתמש מקבץ־ערכים משותף חדש';
$string['newcategory2'] = 'קובץ מקבוצה חדשה של קבצים ברי שימוש חוזר בשאלות אחרות בקטגוריה זאת';
$string['newcategory3'] = 'קישור מקבוצה חדשה של קישורים ברי שימוש חוזר בשאלות אחרות בקטגוריה זאת';
$string['newlocal1'] = 'ישתמש במקבץ־ערכים פרטי חדש';
$string['newlocal2'] = 'קובץ מקבוצה חדשה של קבצים שניתן להשתמש בהם רק בשאלה זאת
';
$string['newlocal3'] = 'קישור מקבוצה חדשה של קישורים שניתן להשתמש בהם רק בשאלה זאת
';
$string['newsetwildcardvalues'] = 'מקבצי־ערכים חדשים של "משתנים"';
$string['nextitemtoadd'] = '\'הפריט להוספה\' הבא';
$string['nextpage'] = 'העמוד הבא';
$string['nocoherencequestionsdatyasetcategory'] = 'עבור קוד השאלה {$a->qid}, קוד הקטגוריה {$a->qcat} איננו זהה ל"משתנה" המשותף {$a->name} בקוד קטגוריה {$a->sharedcat}. ערוך את השאלה';
$string['nocommaallowed'] = 'לא ניתן להשתמש בפסיק. יש להשתמש בנקודה, כגון 0.013  או  1.3e-2';
$string['nodataset'] = '"כלום" - איננו יכול להיות "משתנה"';
$string['nosharedwildcard'] = 'בקטגוריה זו אין "משתנים" משותפים';
$string['notvalidnumber'] = 'ערך ה"משתנה"  לא תקין';
$string['oneanswertrueansweroutsidelimits'] = 'נחוצה לפחות תשובה אחת נכונה, לגבולות של הערכים התקפים.<br />
יש לעדכן את ערכי מרווח סבילות התשובות כמשתנים מתקדמים';
$string['param'] = 'משתנה <strong>{$a}</strong>';
$string['partiallycorrectfeedback'] = 'בעבור כל תשובה חלקית נכונה';
$string['pluginname'] = 'חישוב';
$string['pluginname_help'] = 'שאלה חישוב מאפשרת יצירת שאלות מתמטיות מסוגים שונים תוך כדי שימוש ב"משתנים" בסוגרים מסולסלים המוחלפים בערכים מספריים בעת ביצוע הבוחן.

למשל,לשאלה "מהו שטח של מלבן שאורכו {l} ורוחבו {w} ?" תהיה תשובה נכונה הנוסחה:"{l}*{w}" (התו * מסמל כפל).

ניתן להשתמש במאגר ערכים משותף במספר שאלות. כאשר נתון מסויים יכול לחזור על עצמו בשאלות שונות תחת אותה קטגוריה. לדוגמה "רדיוס" מסויים יכול להופיע בשאלות שונות.';
$string['pluginname_link'] = 'question/type/calculated';
$string['pluginnameadding'] = 'הוספת שאלת חישוב';
$string['pluginnameediting'] = 'עריכת שאלת חישוב';
$string['pluginnamesummary'] = 'שאלת "חישוב" (Calculated) מבוססת על שאלה מספרית. אך מרחיבה את יכולות השאלה בעזרת מנגנון תצוגה של ערכים מספריים אקראיים במקום "משתנים" המשובצים (כממלאי מקום בלבד) בגוף השאלה.

ה"משתנים" יוחלפו בערכים מתוך מקבצי־ערכים אשר חוללו מבעוד מועד על ידי יוצר השאלה.

ניתן להזין נוסחאות המיצגות את פתרון השאלה הנכון.

שמות משתנים יכתבו בשפה האנגלית, יתחילו ויסתימו בסורגיים מסולסלים. לדוגמה: {רדיוס}';
$string['possiblehdr'] = '"משתנים" הנמצאים בתוכן השאלה';
$string['questiondatasets'] = 'מקבצי־ערכים של השאלות';
$string['questiondatasets_help'] = 'מקבצי־ערכים של "משתנים" אשר יעשה בהם שימוש בכל שאלה';
$string['questionstoredname'] = 'השם השמור של השאלה';
$string['replacewithrandom'] = 'חולל ערך אקראי';
$string['reuseifpossible'] = 'שימוש בערך הקודם, כאשר זמין';
$string['setno'] = 'מקבץ {$a}';
$string['setwildcardvalues'] = 'מקבץ ערכי "משתנים"';
$string['sharedwildcard'] = '"משתנה" משותף <strong>{$a}</strong>';
$string['sharedwildcardname'] = '"משתנה" משותף';
$string['sharedwildcards'] = '"משתנים" משותפים';
$string['showitems'] = 'תצוגת';
$string['significantfigures'] = 'עם {$a}';
$string['significantfiguresformat'] = 'ספרות משמעותיות';
$string['synchronize'] = 'סנכרון ערכי מקבצי־ערכים המשותפים עם שאלות אחרות בבוחן (בקטגוריה!)';
$string['synchronizeno'] = 'ללא סנכרון';
$string['synchronizeyes'] = 'סנכרון';
$string['synchronizeyesdisplay'] = 'סנכרון והצגת שם מקבצי־הערכים כקידומת של שם השאלה';
$string['tolerance'] = 'מרווח סבילות &plusmn;';
$string['tolerancetype'] = 'סוג';
$string['trueanswerinsidelimits'] = 'תשובה נכונה: {$a->correct} בטווח ערכים נכון: {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error"> שגיאה בתשובה הנכונה: {$a->correct} המציגה תשובה מחוץ לגבולות הערכים הנכונים {$a->true}</span>';
$string['uniform'] = 'התפלגות אחידה';
$string['uniformbit'] = 'decimals, from a uniform distribution';
$string['unsupportedformulafunction'] = 'הפונקציה {$a} איננה זמינה';
$string['updatecategory'] = 'עדכון הקטגוריה';
$string['updatedatasetparam'] = 'רענון תצוגת הערכים של פריט מקבץ־ערכים חדש';
$string['updatetolerancesparam'] = 'עדכון ערכי מרווח־הסבילות של התשובות';
$string['updatewildcardvalues'] = 'עדכון ערכי "משתנים"';
$string['useadvance'] = 'יש להקליק על הכפתור "הגדרות נוספות" לצפיה בשגיאות';
$string['usedinquestion'] = 'קיים בשאלה';
$string['wildcard'] = '"משתנה"  <strong>{$a}</strong>';
$string['wildcardparam'] = 'מאפיינים של "משתנה" שהשתמשו בהם ליצירת הערכים';
$string['wildcardrole'] = '"משתנים" <strong>{x..}</strong> יוחלפו על ידי ערכים מספריים מתוך מאגר הערכים שנוצרו';
$string['wildcards'] = '"משתנים" {a}...{z}';
$string['wildcardvalues'] = 'ערכי "משתנים"';
$string['wildcardvaluesgenerated'] = 'נוצרו ערכי "משתנים"';
$string['youmustaddatleastoneitem'] = 'יש להוסיף לפחות פריט אחד למקבץ־ערכים לפני שניתן יהיה לשמור שאלה זו.';
$string['youmustaddatleastonevalue'] = 'יש להוסיף לפחות מערך אחד של ערכי "משתנים" לפני שניתן יהיה לשמור שאלה זו.';
$string['zerosignificantfiguresnotallowed'] = 'התשובה הנכונה לא יכולה להכיל אפס ספרות משמעותיות!';
