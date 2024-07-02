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
 * Strings for component 'grades', language 'he', version '4.1'.
 *
 * @package     grades
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = 'פעילויות';
$string['addcategory'] = 'הוספת קטגוריה';
$string['addcategoryerror'] = 'לא היה ניתן להוסיף קטגוריה.';
$string['addexceptionerror'] = 'חלה שגיאה במהלך הוספת יוצא מן הכלל ל-userid:gradeitem';
$string['addfeedback'] = 'הוספת משוב';
$string['addgradeletter'] = 'הוספת אות לציון';
$string['addidnumbers'] = 'הוספת מספרי זיהוי (ID)';
$string['additem'] = 'הוספת פריט ציון';
$string['additionalfeedback'] = 'משוב נוסף';
$string['addoutcome'] = 'הוספת מדד־הערכה';
$string['addoutcomeitem'] = 'הוספת פריט מדד־הערכה';
$string['addscale'] = 'הוספת מדרגת הערכה';
$string['adjustedweight'] = 'משקל מותאם';
$string['aggregateextracreditmean'] = 'ממוצע ציונים (+נקודות זכות)';
$string['aggregatemax'] = 'הציון הגבוה ביותר';
$string['aggregatemean'] = 'ממוצע הציונים';
$string['aggregatemedian'] = 'הציון האמצעי (חציון)';
$string['aggregatemin'] = 'הציון הנמוך ביותר';
$string['aggregatemode'] = 'הציון השכיח';
$string['aggregatenotonlygraded'] = 'ציונים שטרם הוזנו יחושבו כאפסים';
$string['aggregateonlygraded'] = 'לא יצברו ציונים חסרים<br> (כאשר לא מסומן, ציונים חסרים יצברו כאפסים)';
$string['aggregateonlygraded_help'] = 'ציונים חסרים נחשבים כאילו שאינם מופיעים בגליון הציונים.
יתכן כי הם אמורים להגיע ממטלה שלא הוגשה ולא ניתן לה ציון או מבוחן שלא ענו עליו.

הגדרה זו קובעת אם ציונים ריקים לא נכללים בצבירה או שנחשבים כבעלי הערך הנמוך בטווח הציונים (בדרך כלל 0 כאשר מתייחסים לטווח של 0 עד 100)';
$string['aggregateoutcomes'] = 'כולל מדדי־הערכה שבצבירה';
$string['aggregateoutcomes_help'] = 'כאשר פעיל, מדדי־הערכה יכללו בצבירה. שימו לב! יכול להוביל לחישובים לא רצויים בצבירת הניקוד של קטגוריות ציונים שונות ובציון הסופי בקורס.';
$string['aggregatesonly'] = 'רק צבירות';
$string['aggregatesubcatsupgradedgrades'] = 'שימו לב! מנגנון הצבירה "צבירת תת-קטגוריות" הוסר מהמערכת. כיוון שנעשה שימוש במנגנון זה בקורס, אנו ממליצים לכם לקבל מידע נוסף ממנהל/ת המערכת או רכז/ת התקשוב שלכם. כדי להבין את משמעות השינוי במנגנון חישוב הציונים.';
$string['aggregatesum'] = 'סיכום ציונים מתקדם (כולל משקל ו/או ממוצע)';
$string['aggregateweightedmean'] = 'ממוצע ציונים משוקלל';
$string['aggregateweightedmean2'] = 'ממוצע ציונים משוקלל פשוט';
$string['aggregation'] = 'צבירה';
$string['aggregation_help'] = 'שיטת הצבירה קובעת כיצד מחושבים הציונים בקטגוריה, וזמינה לבחירה כאחד מהמנגנונים הבאים:

* סכום ציונים מתקדם (בררת המחדל) - סכום (או ממוצע, כאשר מזינים משקלים) הערכים של כל הציונים. כולל אפשרות לשימוש במשקלים לשם חישוב ממוצע משוקלל + האפשרות להשתמש בפעילות או פריט ציון כ"נקודות זכות".

דוגמה לסיכום ציונים של פעילויות בעלות טווח ניקוד שאינו אחיד:
<p dir="ltr" align="left" align="left">
   A1 70/100, A2 20/80, A3 10/10:
   70 + 20 + 10 = 100/190
</p>
<a href="https://docs.moodle.org/29/en/Natural_weighting" target="_blank">
מידע נוסף אודות "סכום ציונים מתקדם"
</a>

* ממוצע ציונים: סכום כל הציונים חלקי מספר הציונים הכולל. דוגמה:
<p dir="ltr" align="left" align="left">
A1 70/100, A2 20/80, A3 10/10, category max 100:
   (0.7 + 0.25 + 1.0)/3 = 0.65 --> 65/100
</p>
* ממוצע ציונים משוקלל - לכל פריט ציון יכול להינתן משקל, הניקוד הסופי של הקטגוריה יהיה שווה לס"ה הציונים של כל פריטי הציונים. ניקוד זה יוכפל במשקלי פרטי הציונים ולבסוף יחולק ב סכום הכולל של המשקלים. דוגמה:
<p dir="ltr" align="left" align="left">
   A1 70/100 weight 10, A2 20/80 weight 5, A3 10/10 weight 3, category max 100:
   (0.7*10 + 0.25*5 + 1.0*3)/18 = 0.625 --> 62.5/100
</p>
* ממוצע ציונים משוקלל פשוט -  בין הקודם לפשוט הוא שכאן המשקל מחושב כציון מירבי וציון מיזערי לכל פריט ציון. 100 נקודות למטלה יהיה משקל 100 ו10 נקודות על מטלה משקלו יהיה 10 לדוגמה:
<p dir="ltr" align="left" align="left">
A1 70/100, A2 20/80, A3 10/10, category max 100:
   (0.7*100 + 0.25*80 + 1.0*10)/190 = 0.526 --> 52.6/100
</p>
* ממוצע ציונים (עם נקודות זכות נוספות)\'
* חציון הציונים - הציון האמצעי כאשר הציונים מסודרים לפי סדר ערכים עולה. דוגמה:
<p dir="ltr" align="left" align="left">
   A1 70/100, A2 20/80, A3 10/10, category max 100:
   0.7 + 0.25 + 1.0 --> 0.70 --> 70/100
</p>
* ציון הנמוך ביותר - דוגמה:
<p dir="rtl" align="left" align="left">
 A1 70/100, A2 20/80, A3 10/10, category max 100:
   min(0.7 + 0.25 + 1.0) = 0.25 --> 25/100
</p>
* הציון הגבוה ביותר - דוגמה:
<p dir="ltr" align="left" align="left">
 A1 70/100, A2 20/80, A3 10/10, category max 100:
   max(0.7 + 0.25 + 1.0) = 1.0 --> 100/100
</p>
* הציון השכיח - הציון שמופיע הכי הרבה פעמים.דוגמה:
<p dir="ltr" align="left" align="left">
A1 70/100, A2 35/50, A3 20/80, A4 10/10, A5 7/10 category max 100:
   mode(0.7; 0.7; 0.25; 1.0; 0.7) = 0.7 --> 70/100
</p>

<a href="https://docs.moodle.org/29/en/grade/aggregation" target="_blank">
לדוגמאות מפורטות ועזרה נוספת לחצו כאן
</a>';
$string['aggregation_link'] = 'grade/aggregation';
$string['aggregationcoef'] = 'מקדם הצבירה';
$string['aggregationcoefextra'] = 'נקודת זכות נוספת';
$string['aggregationcoefextra_help'] = '';
$string['aggregationcoefextra_link'] = 'grade/aggregation';
$string['aggregationcoefextrasum'] = 'נקודת זכות נוספת';
$string['aggregationcoefextrasum_help'] = '';
$string['aggregationcoefextrasum_link'] = 'grade/aggregation';
$string['aggregationcoefextrasumabbr'] = '+';
$string['aggregationcoefextraweight'] = 'משקל נקודת זכות נוספת';
$string['aggregationcoefextraweight_help'] = '';
$string['aggregationcoefextraweight_link'] = 'grade/aggregation';
$string['aggregationcoefweight'] = 'משקל פריט';
$string['aggregationcoefweight_help'] = '';
$string['aggregationcoefweight_link'] = 'grade/aggregation';
$string['aggregationhintdropped'] = '(הוסר)';
$string['aggregationhintexcluded'] = '(לא נכלל)';
$string['aggregationhintextra'] = '(נקודות זכות)';
$string['aggregationhintnovalue'] = '(חסר)';
$string['aggregationofa'] = 'צבירה של {$a}';
$string['aggregationposition'] = 'מיקום הצבירה';
$string['aggregationposition_help'] = 'מגדיר את מיקום עמודת סה"כ הצבירה בדוח הציונים.';
$string['aggregationsvisible'] = 'זמינות סוגי צבירה';
$string['aggregationsvisiblehelp'] = 'יש לבחור את סוגי הצבירה אשר יהיו זמינים. יש להקליק (באופן קבוע) על מקש ה CTRL במקלדת בכדי לבחור מספר פריטים.';
$string['allgrades'] = 'כל הציונים לפי קטגוריה';
$string['allstudents'] = 'כל הסטודנטים';
$string['allusers'] = 'כל המשתמשים';
$string['autosort'] = 'מיין אוטומטית';
$string['availableidnumbers'] = 'זמינות מספרי זיהוי';
$string['average'] = 'ממוצע (בקורס)';
$string['averagesdecimalpoints'] = 'ספרות אחרי הנקודה בעמודות הממוצעים';
$string['averagesdecimalpoints_help'] = '<p>מספר הספרות אחרי הנקודה להצגה עבור כל ממוצע (לקבוצה או לכול), למטה בעמודת הציונים. אפשר לשנות זאת לכל פריט מתן ציון (דירוג).</p>';
$string['averagesdisplaytype'] = 'סוג ההצגה של ממוצעי העמודות';
$string['averagesdisplaytype_help'] = '';
$string['backupwithoutgradebook'] = 'הגיבוי איננו מכיל את הגדרות גליון הציונים';
$string['badgrade'] = 'הציון שנמסר איננו נאות';
$string['badlyformattedscale'] = 'אנא הקש רשימת ערכים מופרדת בפסיק (נדרשים לפחות שני פריטים לבחירה)';
$string['baduser'] = 'המשתמש שצוין איננו נאות';
$string['bonuspoints'] = 'נקודות בונוס';
$string['bulkcheckboxes'] = 'תיבות סימון מרובות';
$string['calculatedgrade'] = 'ציון שחושב';
$string['calculation'] = 'חישוב';
$string['calculation_help'] = 'חישוב ציון הוא נוסחה אשר משתמשים בה לקביעת ציונים. על הנוסחה להתחיל בסימן (=) והיא יכולה להכיל פעולות מתמטיות נפוצות, כגון : max , min and sum.
אם תרצו, פרטי ציון אחרים יכולים להיכלל על-ידי הקשת מספרי זיהוי ID  בסוגריים מרובעים כפולים.';
$string['calculation_link'] = 'grade/calculation';
$string['calculationadd'] = 'הוספת חישוב';
$string['calculationedit'] = 'עריכת חישוב';
$string['calculationsaved'] = 'שמירת חישוב';
$string['calculationview'] = 'צפיה בחישוב';
$string['cannotaccessgroup'] = 'לא ניתן לגשת לציונים מהקבוצה הנבחרת, מצטערים.';
$string['categories'] = 'קטגוריות חישוב ציונים';
$string['category'] = 'קטגוריה';
$string['categoryedit'] = 'עריכת קטגוריה';
$string['categoryname'] = 'שם קטגוריה';
$string['categorytotal'] = 'סך הכל של הקטגוריה';
$string['categorytotalfull'] = 'סה"כ \'{$a->category}\'';
$string['categorytotalname'] = 'שם לסיכום הכולל של הקטגוריה';
$string['changedefaults'] = 'עדכון ברירות מחדל';
$string['changereportdefaults'] = 'עדכון ברירות־מחדל הדוח';
$string['chooseaction'] = 'בחירת פעולה...';
$string['choosecategory'] = 'בחירת קטגוריה';
$string['collapsecriterion'] = 'צמצום אמת־מידה';
$string['combo'] = 'לשוניות ותפריטים נפתחים';
$string['compact'] = 'כווץ';
$string['componentcontrolsvisibility'] = 'אם פריט ציון זה מוסתר הוא נשלט על-ידי הגדרות הפעילות';
$string['contract'] = 'כווץ קטגוריה';
$string['contributiontocoursetotal'] = 'ניקוד משוקלל, כתרומה לציון הסופי';
$string['controls'] = 'עדכון מאפייני ציון';
$string['courseavg'] = 'ממוצע הקורס';
$string['coursegradecategory'] = 'קטגוריית ציון הקורס';
$string['coursegradedisplaytype'] = 'סוג הצגת ציון הקורס';
$string['coursegradedisplayupdated'] = 'סוג הצגת ציון הקורס עודכן';
$string['coursegradesettings'] = 'הגדרות תצוגת דוחות ציונים';
$string['coursename'] = 'שם הקורס';
$string['coursescales'] = 'ניהול מדרגות הערכה';
$string['coursesettings'] = 'הגדרות ציונים בקורס';
$string['coursesettingsexplanation'] = 'הגדרות ציונים בקורס קובעות איך גליון הציונים מופיע לכל המשתתפים בקורס';
$string['coursesiamtaking'] = 'קורסים בהם אני לומד';
$string['coursesiamteaching'] = 'קורסים בהם אני מלמד';
$string['coursetotal'] = 'סך הכל של הקורס';
$string['createcategory'] = 'יצירת קטגוריה';
$string['createcategoryerror'] = 'לא ניתן ליצור קטגוריה';
$string['creatinggradebooksettings'] = 'יוצר הגדרות גיליון ציונים';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = 'צבירת הורה (אב) נוכחית';
$string['curveto'] = 'נרמל ל-';
$string['decimalpoints'] = 'מספר ספרות השבר־העשרוני';
$string['decimalpoints_help'] = '<p>מספר הספרות אחרי הנקודה להצגה עבור כל ממוצע, להגדרה זו אין כל השפעה על חישובי הציון, אשר מתבצעים עם דיוק של 5 ספרות אחרי הנקודה.</p>';
$string['default'] = 'בררת מחדל';
$string['defaultprev'] = 'בררת־מחדל ({$a})';
$string['deletecategory'] = 'מחק קטגוריה';
$string['disablegradehistory'] = 'היסטוריית ציונים איננה-זמינה';
$string['disablegradehistory_help'] = 'מנע את היסטורית מעקב אחר שינויים בציונים אשר מיוחסים לטבלאות. הדבר עשוי להאיץ את פעילות השרת  במעט ולשמר מקום במסד הנתונים.';
$string['displaylettergrade'] = 'הצגת ציוני אותיות';
$string['displaypercent'] = 'הצגת אחוזים';
$string['displaypoints'] = 'הצגת נקודות';
$string['displayweighted'] = 'הצגת ציונים משוקללים';
$string['dropdown'] = 'תפריט נפתח';
$string['droplow'] = 'הסרת X הציונים הנמוכים ביותר';
$string['droplow_help'] = '<p>אם מופעלת, אפשרות זאת תוותר על X הציונים הנמוכים ביותר, כאשר X הוא הערך שנבחר בעבור אפשרות שאת.</p>';
$string['droplowestvalue'] = 'הגדר השמטת ערך ציון נמוך';
$string['droplowestvalues'] = '\'{$a}\' הציונים הנמוכים ביותר לא יכללו בחישוב';
$string['dropped'] = 'הורדה';
$string['dropxlowest'] = 'הורדת X הנמוכים ביותר';
$string['dropxlowestwarning'] = 'שימו לב: כאשר משתמשים ב\'הורדת X הנמוכים ביותר\' תהליך הבדיקה ומתן הציון מניח שלכל הפריטים בקטגוריה יש את אותו הערך בנקודות. אם הערכים בנקודות הם שונים, התוצאות יהיו בלתי צפויות.';
$string['duplicatedgradeitem'] = '{$a} (שכפול)';
$string['duplicatescale'] = 'הכפל את מדרגת־הערכה';
$string['edit'] = 'עריכה';
$string['editcalculation'] = 'עריכת חישוב';
$string['editcalculationverbose'] = 'עריכת חישובים עבור {$a->category} {$a->itemmodule} {$a->itemname}';
$string['editfeedback'] = 'עריכת משוב';
$string['editgrade'] = 'עריכת ציון';
$string['editgradeletters'] = 'עריכת אותיות הציון';
$string['editoutcome'] = 'עריכת מדד־הערכה';
$string['editoutcomes'] = 'עריכת מדדי־הערכה';
$string['editscale'] = 'הוספת מדרגת־הערכה';
$string['edittree'] = 'חישוב ציונים';
$string['editverbose'] = 'עריכת {$a->category} {$a->itemmodule} {$a->itemname}';
$string['enableajax'] = 'עדכון ציונים ללא רענון העמוד כולו (ajax)';
$string['enableajax_help'] = 'מוסיף שכבת פונקצית AJAX עבור דוח הציונים. מפשט את הצורך בהגברת המהירות על פעולות שכיחות. תלוי זמינות ה-JavaScript המוחלף ברמת דפדפן המשתמש.';
$string['enableoutcomes'] = 'זמינות מדדי־הערכה';
$string['enableoutcomes_help'] = 'תמיכה ב"מדדי הערכה" (ידוע גם כ"יכולות", מטרות, תקנים או מדדים) כך שנוכל לתת ציון לדברים ע"י שימוש מדרגת־הערכה אחת או יותר אשר קשורה למשפטי (הצהרות) יכולות. איפשור ה"מדדי הערכה" מקנה מתן ציון מיוחד זה באתר כולו.';
$string['encoding'] = 'קידוד';
$string['encoding_help'] = 'יש לבחור את קידוד התווים שישמש לנתונים. (קידוד תקני הוא UTF-8). אם נבחר בטעות הקידוד הלא נכון, זה יופיע בתצוגה מקדימה של הנתונים לייבוא.';
$string['errorcalculationbroken'] = 'כנראה הפניה מעגלית או נוסחת חישוב שבורה';
$string['errorcalculationnoequal'] = 'הנוסחה חייבת להתחיל עם סימן השיוויון (=1+2)';
$string['errorcalculationunknown'] = 'נוסחה לא תקפה';
$string['errorgradevaluenonnumeric'] = 'התקבל ערך לא-מספרי כציון נמוך או גבוה עבור';
$string['errornocalculationallowed'] = 'חישובים לא מאופשרים עבור פריט זה';
$string['errornocategorisedid'] = 'לא ניתן לקבל זיהוי שלא שייך לקטגוריה';
$string['errornocourse'] = 'לה היה ניתן לקבל את המידע אודות הקורס';
$string['errorreprintheadersnonnumeric'] = 'התקבל ערך לא-מספרי עבור \'הדפס מחדש כותרות\'.';
$string['errorsavegrade'] = 'לא ניתן היה לשמור את הציון, מצטערים.';
$string['errorsettinggrade'] = 'שגיאה בשמירת פריט הציון "{$a->itemname}" עבור המשתמש {$a->userid}';
$string['errorupdatinggradecategoryaggregateonlygraded'] = 'חלה שגיאה בעדכון הגדרת מספר זיהוי קטגוריית ציון "צבירת ציונים שהוזנו (בלבד)"
{$a->id}';
$string['errorupdatinggradecategoryaggregateoutcomes'] = 'חלה שגיאה בעת עדכון הגדרת מספר זיהוי קטגוריית ציון ה"כלול מדדי־הערכה שבצבירה"
{$a->id}';
$string['errorupdatinggradecategoryaggregation'] = 'חלה שגיאה בעת עדכון סוג צבירת  מספר זיהוי קטגוריית ציון {$a->id}';
$string['errorupdatinggradeitemaggregationcoef'] = 'חלה שגיאה בעת עדכון מקדם צבירה (משוקלל או או נקודות זכות) של מספר זיהוי פריט הציון
{$a->id}';
$string['eventgradedeleted'] = 'הציון נמחק';
$string['eventgradeviewed'] = 'הציון נצפה בגליון הציונים';
$string['eventusergraded'] = 'ציון המשתמש עודכן בגליון הציונים';
$string['excluded'] = 'הוצא מן הכלל';
$string['excluded_help'] = '<p>אם - הוצא מן מקבלת הציון - מופעל, ציון זה לא יכלל בכל צבירה המבוצעת על ידי פריט ציון של ה"אב" או קטגורית "אב".</p>';
$string['expand'] = 'הרחבת קטגוריות';
$string['export'] = 'יצוא';
$string['exportalloutcomes'] = 'יצוא כל מדדי־הערכה';
$string['exportas'] = 'יצוא ל';
$string['exportfeedback'] = 'להכליל משוב ביצוא';
$string['exportformatoptions'] = 'אפשרויות תסדיר יצוא';
$string['exportonlyactive'] = 'הסרת משתמשים לא פעילים';
$string['exportonlyactive_help'] = 'היצוא כולל רק סטודנטים שהרישום שלהם פעיל (לא מושהה)';
$string['exportplugins'] = 'יצוא תוספים';
$string['exportsettings'] = 'הגדרות יצוא';
$string['exportto'] = 'יצוא ל';
$string['externalurl'] = 'קישור חיצוני';
$string['externalurl_desc'] = 'אם גליון ציונים חיצוני בשימוש, יש לציין את הקישור כאן.';
$string['extracreditvalue'] = 'ערך נקודות זכות עבור  {$a}';
$string['extracreditwarning'] = 'שים לב: אם תקבע את כל הפריטים בקטגוריה כמעניקים נקודות זכות נוספות, הלכה למעשה אתה תוציא את כל הפריטים הללו מחישוב הציון. זאת מכיוון שלא יהיה סכום נקודות שירכיב את השלם.';
$string['feedback'] = 'משוב';
$string['feedback_help'] = '<p>הודעות משוב נוספו לציון ע"י המורה. הן יכולות להיות הודעות נרחבות, הודעות אישיות או קוד פשוט אשר מתייחס למערכת פנימית של משוב.</p>';
$string['feedbackadd'] = 'הוספת משוב';
$string['feedbackedit'] = 'עריכת משוב';
$string['feedbackfiles'] = 'קבצי משוב';
$string['feedbackforgradeitems'] = 'משוב עבור {$a}';
$string['feedbackhistoryfiles'] = 'היסטורית קבצי משוב';
$string['feedbacks'] = 'משובים';
$string['feedbacksaved'] = 'שמירת משוב';
$string['feedbackview'] = 'צפיה במשוב';
$string['finalgrade'] = 'ציון סופי';
$string['finalgrade_help'] = '<p>הציון הסופי (שנשמר) לאחר שבוצעו כל החישובים.</p>';
$string['fixedstudents'] = 'עמודת סטודנטים סטטית';
$string['fixedstudents_help'] = 'מאפשר לגלול בצורה אופקית ציונים ללא איבוד תחום ראית עמודת הסטודנטים, ע"י הפיכה למצב סטאטי.';
$string['forceimport'] = 'יבוא מואלץ';
$string['forceoff'] = 'אלץ:כבוי';
$string['forceon'] = 'אלץ: פעיל';
$string['forelementtypes'] = 'בעבור {$a} הנבחרים';
$string['forstudents'] = 'לסטודנטים';
$string['full'] = 'מלא';
$string['fullmode'] = 'ניהול ציונים מתקדם';
$string['generalsettings'] = 'הגדרות כלליות';
$string['grade'] = 'ניקוד בפעילות';
$string['gradeadministration'] = 'ניהול ציון';
$string['gradeanalysis'] = 'ניתוח ציון';
$string['gradebook'] = 'גיליון ציונים';
$string['gradebookcalculationsfixbutton'] = 'קבלת שינויים בציונים ותיקון שגיאות חישוב';
$string['gradebookcalculationsuptodate'] = 'החישובים בגליון הציונים מעודכנים. ניתן לטעון מחדש את עמוד זה בכדי לראות את השינויים.';
$string['gradebookhiddenerror'] = 'כרגע, גיליון הציונים מוגדר להחביא את כל תכולתו מהסטודנטים.';
$string['gradebookhistories'] = 'היסטורית הציונים';
$string['gradebooksetup'] = 'הגדרות חישוב ציונים';
$string['gradeboundary'] = 'גבול האותיות בציון';
$string['gradeboundary_help'] = '<p>מעל גבול אחוז זה הציונים יוקצו לאותיות ציון (אם סוג הצגת הציון כאות בשימוש)</p>';
$string['gradecategories'] = 'קטגוריות ציון';
$string['gradecategory'] = 'קטגורית ציון';
$string['gradecategoryonmodform'] = 'שיוך פעילות זו לקטגוריית ציון';
$string['gradecategoryonmodform_help'] = 'הגדרה זו שולטת על הקטגוריה שבה ציוני פעילות זו ימוקמו בגליון הציונים.';
$string['gradecategorysettings'] = 'הגדרות קטגוריית ציון';
$string['gradedisplay'] = 'הצגת ציון';
$string['gradedisplaytype'] = 'סוג תצוגת הציון';
$string['gradedisplaytype_help'] = '<p>מציין כיצד להציג ציונים במתן הציונים ובדוח המשתמש. ציונים יכולים להיות מוצגים כציונים אמיתיים, אחוזים (ביחס לציונים מיזעריים ומירביים) או כאותיות.</p>';
$string['gradedon'] = 'ניתן ציון: &a';
$string['gradeexport'] = 'יצוא ציון';
$string['gradeexportcolumntype'] = '{$a->name} ({$a->extra})';
$string['gradeexportcustomprofilefields'] = 'שדות פרופיל מותאמות אישית ליצוא ציון';
$string['gradeexportcustomprofilefields_desc'] = 'כלול שדות פרופיל מותאמות אישית אלו ביצוא הציון,על-ידי הפרדה בסימן פסיק';
$string['gradeexportdecimalpoints'] = 'הצגת ציון בנקודות עשרוניות';
$string['gradeexportdecimalpoints_desc'] = 'מספר נקודות העשרוניות להצגה עבור היצוא. ניתן לעקוף זאת במהלך היצוא.';
$string['gradeexportdisplaytype'] = 'סוג הצגת יצוא הציון';
$string['gradeexportdisplaytype_desc'] = 'ציונים עשויים להיות מוצגים כציונים אמיתיים, אחוזים (בהתייחס לציונים מינימליים ומירביים) או כאותיות (A,B,C וכו\') במהלך היצוא. ניתן לעקוף הגדרות אלו במהלך היצוא.';
$string['gradeexportdisplaytypes'] = 'סוגי תצוגת יצוא הציון';
$string['gradeexportuserprofilefields'] = 'שדות פרופיל משתמש ליצוא ציון';
$string['gradeexportuserprofilefields_desc'] = 'כלול שדות פרופיל משתמש אלו ביצוא הציון,על-ידי הפרדה בסימן פסיק';
$string['gradeforstudent'] = '{$a->student}<br />{$a->item}{$a->feedback}';
$string['gradegrademinmax'] = 'הציונים המירבים והמזערים ההתחלתיים';
$string['gradehelp'] = 'עזרה - ציון';
$string['gradehistorylifetime'] = 'משך זמן היסטוריית הציון';
$string['gradehistorylifetime_help'] = 'הדבר מציין את אורך הזמן שתרצה לשמור את היסטוריית שינויי ציון המיוחסים לטבלאות. מומלץ לשמור זאת בזמן ארוך ככל שניתן. אם  תחוש בבעיות בביצועים או בעיות במקום במסד הנתונים, הגדר ערך קטן יותר.';
$string['gradeimport'] = 'יבוא ציון';
$string['gradeimportfailed'] = 'יבוא הציון נכשל במהלך הביצוע. פרטים:';
$string['gradeitem'] = 'פריט ציון';
$string['gradeitemaddusers'] = 'הוצא ממתן הציון';
$string['gradeitemadvanced'] = 'אפשרויות פריט ציון נרחבות';
$string['gradeitemadvanced_help'] = 'בחירת כל המרכיבים אשר יוצגו תחת הקישור "הרחבה" כאשר עורכים פריטי ציון';
$string['gradeitemislocked'] = 'פעילות זו חסומה בגליון הציונים. שינויים שנעשים לציונים בפעילות זו לא יועתקו לגליון הציונים עד אשר היא לא תיהיה נעולה.';
$string['gradeitemlocked'] = 'נעילה הציונים';
$string['gradeitemmembersselected'] = 'הוצא מקבלת הציון';
$string['gradeitemminmax'] = 'הציונים המירבים והמזערים כמו שמצויין בהגדרות פריט הציון';
$string['gradeitemnonmembers'] = 'נכלל בקבלת הציון';
$string['gradeitemremovemembers'] = 'כלול במתן הציון';
$string['gradeitems'] = 'פריטי הציון';
$string['gradeitemsettings'] = 'הגדרות פריט ציון';
$string['gradeitemsinc'] = 'יש לכלול את פרטי הציון';
$string['gradeletter'] = 'אות ציון';
$string['gradeletter_help'] = '<p>אות או סמל אחר אשר נשתמש בכדי לייצג טווחי ציונים.</p>';
$string['gradeletternote'] = 'כדי למחוק אות שמשמשת כציון, פשוט יש לרוקן כל אחד<br /> משלושת שדות הטקסט שמיועדים לאות זו והקליקו על \'השלם\'.';
$string['gradeletters'] = 'אותיות ציון';
$string['gradelocked'] = 'ציון נעול';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = 'הניקוד המשוקלל';
$string['grademax_help'] = '<p>הציון המירבי המותר לפריט ציון זה. ניתן להגדיר זאת בעמוד עדכון הפעילות.</p>';
$string['grademin'] = 'הציון המיזערי';
$string['grademin_help'] = '<p>הציון המיזערי המותר לפריט ציון זה.</p>';
$string['gradeoutcomeitem'] = 'פריט תוצאת הציון';
$string['gradeoutcomes'] = 'מדדי־הערכה';
$string['gradeoutcomescourses'] = 'מדדי־הערכה בקורס';
$string['gradepass'] = 'ציון "עובר"';
$string['gradepass_help'] = '<p>אם לפריט קיים ציון אשר משתמשים חייבים להשתוות אליו או לעלות מעליו בכדי לעבור את פריט זה, תוכל להגדיר זאת כאן.</p>';
$string['gradepassgreaterthangrade'] = 'ציון "עובר" אינו יכול להיות יותר גבוה מהציון מהניקוד בפעילות  {$a}';
$string['gradepointdefault'] = 'ציון בררת־מחדל';
$string['gradepointdefault_help'] = 'הגדרות בררת־מחדל של הציון בפעילות';
$string['gradepointdefault_validateerror'] = 'הגדרות בררת־מחדל של הציון המירבי בפעילות (מספר טבעי גדול מ 1)';
$string['gradepointmax'] = 'ציון מירבי';
$string['gradepointmax_help'] = 'הגדרה שקובעת את ערך בררת־מחדל של הציון המירבי בפעילות';
$string['gradepointmax_validateerror'] = 'ההגדרה צריכה להיות מספר שלם בין 1 ל 10000.';
$string['gradepreferences'] = 'העדפות הציונים';
$string['gradepreferenceshelp'] = 'עזרה - העדפות הציון';
$string['gradepublishing'] = 'אפשר פרסום';
$string['gradepublishing_help'] = 'איפשור פרסום ליצוא ויבוא: ניתן לגשת לציונים שעברו יצוא ע"י גישה ל URL , ללא צורך להתחבר לאתר. ציונים יכולים להיות מיובאים ע"י גישה ל-URL כזה (משמע כי אתר Moodle יכול לייבא ציונים אשר פורסמו מאתר אחר). בררת־מחדל מקנה רק למנהלי האתר להשתמש בתכונה זו, אנא עדכן את המשתמשים לפני מתן יכולות אלו למשתמשים בתפקידים השונים באתר (זהירות מסימניות משותפות ומאיצי הורדות, הגבלות IP ועוד...).';
$string['gradepublishinglink'] = 'הורדת: {$a}';
$string['gradereport'] = 'דוח ציונים';
$string['graderreport'] = 'דוח הציונים';
$string['grades'] = 'ציונים';
$string['gradesforuser'] = 'ציונים עבור {$a->user}';
$string['gradesmoduledeletionpendingwarning'] = 'אזהרה: פעילויות מסויימות נמצאות בתהליך מחיקה! ואיתן מספר פריטי ציון נמצאים בתהליך הסרה, אף הם.';
$string['gradesmoduledeletionprefix'] = '[בתהליך מחיקה]';
$string['gradesonly'] = 'עדכון לציונים בלבד';
$string['gradessettings'] = 'הגדרות ציון';
$string['gradetype'] = 'סוג הציון';
$string['gradetype_help'] = 'קיימים 4 סוגי ניקוד (ציונים) במערכת:
* ריק - לא ניתן לתת ציון
* ערך מספרי - בטווח ניקוד מיזערי...מירבי
* מדרגת־הערכה - לפי סולם ערכים (נמוך עד גובוה)
* מלל - משוב בלבד.

היחידים אשר ניתנים לצבירה הם: ערך מספרי ומדרגת־הערכה. הגדרת סוג הציון זמינה בעמוד הגדרות הפעילות או בהגדרות פריט הציון מתוך עמוד ניהול הציונים של הקורס.';
$string['gradevaluetoobig'] = 'אחד מערכי הציון גדול מהערך המירבי המותר מתוך {$a}';
$string['gradeview'] = 'צפיה בציון';
$string['gradeweighthelp'] = 'עזרה: משקל הציון';
$string['gradingmodulename'] = 'ניקוד ({$a})';
$string['groupavg'] = 'ממוצע הקבוצה';
$string['hidden'] = 'מוסתר';
$string['hidden_help'] = 'אם מסומן, הציונים יוסתרו בפני התלמידים. הסתרה עד לתאריך שיכול להיות מוגדר אם רוצים, בכדי לשחרר את הציונים לאחר שמתן הציונים מסתיים.';
$string['hiddenasdate'] = 'הצגת תאריך הגשה עבור ציונים מוסתרים';
$string['hiddenasdate_help'] = 'אם המשתמש לא יכול לראות ציונים מוסתרים, הצגת תאריך ההגשה במקום \'-\'.';
$string['hiddenuntil'] = 'מוסתר עד';
$string['hiddenuntildate'] = 'מוסתר עד: {$a}';
$string['hideadvanced'] = 'הסתרת תכונות מתקדמות';
$string['hideaverages'] = 'הסתרת ממוצעים (בקורס)';
$string['hidecalculations'] = 'הסתרת חישובים';
$string['hidecategory'] = 'מוסתר';
$string['hideeyecons'] = 'הסתרת צלמיות הצגה/הסתרה';
$string['hidefeedback'] = 'הסתרת משוב';
$string['hideforcedsettings'] = 'הסתרת הגדרות מאולצות';
$string['hideforcedsettings_help'] = 'לא להציג הגדרות מאולצות בממשק-משתמש של מתן הציונים';
$string['hidegroups'] = 'הסתרת קבוצות';
$string['hidelocks'] = 'הסתרת נעילות';
$string['hidenooutcomes'] = 'הצגת מדדי־הערכה';
$string['hidequickfeedback'] = 'הסתרת משוב מהיר';
$string['hideranges'] = 'הסתרת טווחים';
$string['hidetotalifhiddenitems'] = 'הסתרת סיכומים מעמודות בהן קיימות פעילויות מוסתרות';
$string['hidetotalifhiddenitems_help'] = 'הגדרה זו קובעת האם יוצגו סיכומים של עמודות המכילות ציונים מוסתרים של פעילויות (אשר הוסתרו ידנית על ידי המורה או באופן אוטומטי עד תאריך כלשהו או שהפעילות בקורס מוסתרת) או שבמקומם יוצג הסימן (-).  כאשר מוגדר "הצגת ציונים", החישוב של צבירת הציונים יכול לכלול או שלא לכלול ציונים מוסתרים, בהתאם להגדרה נוספת בעמוד זה.

כאשר ציונים מוסתרים לא נכללים בחישוב, הסיכום אשר רואה המורה ב"דוח הציונים של הסטודנטים בקורס" יהיה שונה מזה שרואים הסטודנטים בדוח "ציוני הסטודנט בקורס" כיוון שהמורה רואה תמיד את חישוב הציונים המלא, הכולל ציונים מוסתרים.  כאשר מוגדר, עבור הסטודנטים, שיקלול ציונים מוסתרים בחישוב המסכם, יוצגו להם סיכומים הזההים לאילו אשר מוצגים למורה.';
$string['hidetotalshowexhiddenitems'] = 'הצגת סיכומים אשר לא כוללים פרטי ציון מוסתרים';
$string['hidetotalshowinchiddenitems'] = 'הצגת סיכומים אשר כוללים פרטי ציון מוסתרים';
$string['hideverbose'] = 'הסתרת {$a->category} {$a->itemmodule} {$a->itemname}';
$string['highgradeascending'] = 'מיין לפי ציונים גבוהים בסדר עולה';
$string['highgradedescending'] = 'מיין לפי ציונים גבוהים בסדר יורד';
$string['highgradeletter'] = 'גבוה';
$string['identifier'] = 'זהה את המשתמש על ידי';
$string['idnumbers'] = 'מספרי זיהוי (ID)';
$string['ignore'] = 'התעלם';
$string['import'] = 'יבוא';
$string['importas'] = 'יבוא כ';
$string['importcsv'] = 'יבוא CSV';
$string['importcsv_link'] = 'grade/import/csv/index';
$string['importcustom'] = 'יבוא כמדדי־הערכה מותאמים אישית (רק לקורס זה)';
$string['importerror'] = 'שגיאת מערכת. (נעשה שימוש שגוי במשתנים אשר איתחלו את הפעולה הנוכחית)';
$string['importfailed'] = 'היבוא נכשל, לא יובאו נתונים';
$string['importfeedback'] = 'יבא משוב';
$string['importfile'] = 'יבא קובץ';
$string['importfilemissing'] = 'לא התקבל אף קובץ, חזור לטופס וודא כי הינך מעלה קובץ תקין.';
$string['importfrom'] = 'יבא מ';
$string['importoutcomenofile'] = 'הקובץ המועלה ריק או פגום. אנא בדוק אם הקובץ תקין. הבעיה אותרה בשורת קוד מספר {$a}.
לשורות הקוד חסרות מספר עמודות  כמו לשורה הראשונה (שורת ה- header) או אם חסרות לקובץ המיובא Header (כותרות) צפויות. הסתכל בקובץ המיוצא כדוגמא לקובץ עם כותרת  (header) תקינה.';
$string['importoutcomes'] = 'יבוא מדדי־הערכה';
$string['importoutcomes_help'] = 'ניתן ליבא מדדי־הערכה מקובץ CSV בעל תבנית הזהה לקובץ יצוא מדדי־הערכה CSV';
$string['importoutcomes_link'] = 'grade/outcome';
$string['importoutcomesuccess'] = 'תוצאה מיובאת "{$a->name}" עם זיהוי #{$a->id}';
$string['importplugins'] = 'יבא תוספים';
$string['importpreview'] = 'יבוא צפיה-מוקדמת';
$string['importsettings'] = 'יבא הגדרות';
$string['importskippednomanagescale'] = 'אין לך הרשאות להוסיף מדרגת־הערכה חדשה, מדד-הערכה "{$a}" דולג כיוון שדרש יצירה של מדרגת־הערכה חדשה.';
$string['importskippedoutcome'] = 'מדד־הערכה עם השם המקוצר "{$a}" כבר קיים בהקשר הזה, מדד־הערכה בקובץ המיובא דולג.';
$string['importstandard'] = 'יבא כמדדי־הערכה מערכתיים';
$string['importsuccess'] = 'יבוא הציון הצליח';
$string['importxml'] = 'יבא XML';
$string['includescalesinaggregation'] = 'חישוב מדרגות־הערכה בצבירה';
$string['includescalesinaggregation_help'] = 'ניתן לקבוע האם להתייחס ל"מדרגות הערכה" כמספרים בעת חישוב צבירת הניקוד לציון הסופי של הסטודנטים בכל קורס.

אזהרה: שינוי הגדרה זו יאלץ חישוב מחדש של כל ציוניי הסטודנטים בקורסים.';
$string['incorrectcourseid'] = 'מספר זיהוי הקורס היה שגוי';
$string['incorrectcustomscale'] = '(מדרגת־הערכה שגויה, יש לתקן)';
$string['incorrectminmax'] = 'המינימום חייב להיות קטן מהמקסימום';
$string['inherit'] = 'ירושה';
$string['intersectioninfo'] = 'מידע על סטודנט או ציון';
$string['item'] = 'פריט';
$string['iteminfo'] = 'מידע אודות פריט';
$string['iteminfo_help'] = '<p>מקום עבור הכנסת מידע אודות הפריט. הטקסט המוכנס לא יופיע במקום אחר.</p>';
$string['itemname'] = 'שם הפריט';
$string['itemnamehelp'] = 'שם הפריט שהוצב על יד הרכיב';
$string['items'] = 'פריטים';
$string['itemsedit'] = 'עריכת פריט ציון';
$string['keephigh'] = 'צבירת X הציונים הגבוהים ביותר';
$string['keephigh_help'] = 'אם תופעל, אפשרות שאת תשמושר רק את X הערכים הגבוהים ביותר, מקום ש-X הןא הערך שנבחר בעבור אפשרות זאת.';
$string['keephighestvalues'] = 'שמירת {$a} הערכים הגבוהים ביותר';
$string['keymanager'] = 'ניהול מפתחות אבטחה';
$string['lessthanmin'] = 'הציון שהוכנס מ- {$a->itemname} עבור {$a->username} הוא פחות מהמינימום המותר';
$string['letter'] = 'אות';
$string['lettergrade'] = 'ציון באותיות';
$string['lettergradenonnumber'] = 'הציון הנמוך ו,או הגבוה התקבלו כערכים לא-מספריים עבור';
$string['letterpercentage'] = 'אות (אחוזים)';
$string['letterreal'] = 'אות (מספרי)';
$string['letters'] = 'אותיות';
$string['linkedactivity'] = 'פעילות מקושרת';
$string['linkedactivity_help'] = 'מציין פעילות חלופית אליה פריט מדד־הערכה זה מקושר. הקישור ישמש למדידת ביצועי הסטודנט במדד אשר לא מחושב כחלק מציון הפעילות.';
$string['linktoactivity'] = 'קישור ל: {$a->name} פעילות {$a->title}';
$string['lock'] = 'נעילה';
$string['locked'] = 'נעול';
$string['locked_help'] = 'אם תסמן, ציונים לא יתעדכנו בצורה אוטומטית ע"י הפעילות הקשורה.';
$string['locktime'] = 'נעול עד';
$string['locktimedate'] = 'ננעל לאחר: {$a}';
$string['lockverbose'] = 'נעילת  {$a->category} {$a->itemmodule} {$a->itemname}';
$string['lowest'] = 'הנמוך ביותר';
$string['lowgradeletter'] = 'נמוך';
$string['manualitem'] = 'פריט ידני';
$string['mapfrom'] = 'מיפוי מ-';
$string['mappings'] = 'מיפוי פריטי ציון';
$string['mapto'] = 'מפה ל-';
$string['mapto_help'] = 'יש לבחור את אותם נתוני זיהוי שנבחרו ב\'מפה מ...\'';
$string['max'] = 'הגבוה ביותר';
$string['maxgrade'] = 'ציון מירבי';
$string['meanall'] = 'כל העמודות (כולל ציונים חסרים)';
$string['meangraded'] = 'עמודות ציונים שהוזנו (בלבד)';
$string['meanselection'] = 'בחירת עמודות לציון הממוצעים';
$string['meanselection_help'] = 'יש לבחור את סוגי הציונים אשר יכללו בעמודת הממוצעים. תאים שאין בהם ציון לא יחושבו או יספרו כ-0 (הגדרת בררת־מחדל).';
$string['median'] = 'חציון';
$string['min'] = 'נמוך ביותר';
$string['minimum_show'] = 'הצגת ציון מזערי';
$string['minmaxtouse'] = 'הציונים המירבים והמזערים הניצברים בחישוב';
$string['minmaxtouse_desc'] = 'הגדרה זו קובעת האם להשתמש בציונים המירביים והמזעריים ההתחלתיים מנקודת הזמן בו ניתן הניקוד בפעילות או הציונים המירבים והמזעריים כפי שהוזנו בהגדרות פריט הציון, בזמן מאוחר יותר של חישוב הציונים בגליון הציונים המסכם של הקורס.

כאשר מעדכנים הגדרה זו, מומלץ לבצע את המהלך בזמנים פחות עמוסים של המערכת מפני שהתהליך גורם לחישוב ציון מחדש לכל הציונים של הסטודנטים בכל הקורסים, ויוצר עומס חישובי גדול על המערכת.';
$string['minmaxtouse_help'] = 'הגדרה זו קובעת האם להשתמש בציונים המירביים והמזעריים ההתחלתיים מנקודת הזמן בו ניתן הניקוד בפעילות או הציונים המירבים והמזעריים כפי שהוזנו בהגדרות פריט הציון, בזמן מאוחר יותר של חישוב הציונים בגליון הציונים המסכם של הקורס.';
$string['minmaxtouse_link'] = 'Grades_min_max';
$string['minmaxupgradedgrades'] = 'שימו לב! בוצעו שינויים בציונים הסופיים אשר מופיעים בגליון הציונים של הקורס, כדי לתקן אי התאמה בחלק מטווח הערכים הנמוכים והגבוהים של הציונים בגליון הציונים של הקורס. אנא צפו בתיקונים אשר התבצעו ואשרו אותם.  (למידע נוסף אודות העדכון, יש לפנות למנהל/ת המערכת או רכז התקשוב שלכם)';
$string['minmaxupgradefixbutton'] = 'תיקון אי התאמות';
$string['minmaxupgradewarning'] = 'שימו לב! התגלתה אי התאמה בחלק מטווח הערכים הנמוכים והגבוהים של הציונים בגליון הציונים של הקורס. אנו ממליצים לתקן את אי ההתאמה על ידי הקלקה על כפתור הבא, אשר יבצע שינויים בציונים הסופיים אשר מופיעים בגליון הציונים של הקורס.  (למידע נוסף אודות העדכון, יש לפנות למנהל/ת המערכת או רכז התקשוב שלכם)';
$string['missingscale'] = 'יש לבחור מדרגת־הערכה';
$string['mode'] = 'מצב';
$string['modgrade'] = 'ציון';
$string['modgrade_help'] = 'יש לבחור את סוג הניקוד עבור פעילות זו.  בחירה ב"מדרגת־הערכה" דורשת בחירת מדרגת־הערכה מתוך משבצת בחירת מדרגות־ההערכה.  בחירה ב"ניקוד" דורשת הזנת ניקוד מירבי (למשל 100) בעבור פעילות זו.';
$string['modgradecantchangegradetype'] = 'לא ניתן לשנות את הסוג, הציונים כבר קיימים לפריט ציון זה.';
$string['modgradecantchangegradetypemsg'] = 'הוזנו ציונים למספר סטודנטים, ולכן לא ניתן לשנות את סוג הציון. אם יש צורך לשנות את הציון המירבי, נדרשת החלטה לגבי שיקלול וחישוב מחדש של הציונים אשר הוזנו.';
$string['modgradecantchangegradetyporscalemsg'] = 'הוזנו ציונים למספר סטודנטים, ולכן לא ניתן לשנות את סוג הציון או מדרגת־ההערכה.';
$string['modgradecantchangeratingmaxgrade'] = 'לא ניתן לשנות את הציון המירבי כאשר הציונים כבר קיימים עבור פעילות עם דירוגים.';
$string['modgradecantchangescale'] = 'לא ניתן לשנות את מדרגות־הערכה, הציונים כבר קיימים עבור פריט ציון זה.';
$string['modgradecategorycantchangegradetypemsg'] = 'בקטגוריה זו קיימים פריטי ציון אשר הוזן בהם ציון ידני אשר הוצג לסטודנטים כציון סופי, ולכן לא ניתן לשנות את סוג הציון.  אם יש צורך לשנות את הציון המירבי, נדרשת החלטה לגבי שיקלול וחישוב מחדש של הציונים אשר הוזנו.';
$string['modgradecategorycantchangegradetyporscalemsg'] = 'בקטגוריה זו קיימים פריטי ציון אשר הוזן בהם ציון ידני אשר הוצג לסטודנטים כציון סופי, ולכן לא ניתן לשנות את סוג הציון או מדרגת־ההערכה.';
$string['modgradedonotmodify'] = 'אל תשנה ציונים קיימים';
$string['modgradeerrorbadpoint'] = 'ערך ציון לא תקין. חייב להיות ערך בין 1 ל {$a}';
$string['modgrademaxgrade'] = 'ניקוד מירבי';
$string['modgraderescalegrades'] = 'חישוב ציונים מחדש';
$string['modgradetype'] = 'סוג';
$string['modgradetypenone'] = 'ללא';
$string['modgradetypepoint'] = 'ניקוד';
$string['modgradetypescale'] = 'מדרגת־הערכה';
$string['morethanmax'] = 'הציון מוכנס עבור {$a->itemname} עבור {$a->username} יותר מהמירבי המותר';
$string['moveselectedto'] = 'הסטת הרכיבים שנבחרו ל';
$string['movingelement'] = 'הסט {$a}';
$string['multfactor'] = 'מקדם';
$string['multfactor_help'] = 'ה"מקדם" הוא מספר עשרוני בו כל ערכי הניקוד המקורים שהוזנו בפעילות המקושרת לפריט ציון זה יוכפלו, עד לערך הניקוד המירבי של הפעילות.

שימו לב! הזנת ציון סופי באופן ידני בגליון הציונים המסכם של הקורס, מבטלת את חישוב המקדם.';
$string['multfactorvalue'] = 'ערך המקדם עבור {$a}';
$string['mustchooserescaleyesorno'] = 'עליך לבחור אם לשנות את הציונים הקיימים או לא.';
$string['mygrades'] = 'קישור לציונים שלי מהתפריט האישי';
$string['mypreferences'] = 'העדפות שלי';
$string['myreportpreferences'] = 'העדפות הדוח שלי';
$string['navmethod'] = 'שיטת ניווט';
$string['neverdeletehistory'] = 'לעולם אל תמחק היסטוריה';
$string['newcategory'] = 'קטגוריה חדשה';
$string['newitem'] = 'רכיב ציון חדש';
$string['newoutcomeitem'] = 'רכיב תוצאה חדש';
$string['no'] = 'לא';
$string['nocategories'] = 'לא היה ניתן למצוא או להוסיף קטגוריות ציון לקורס זה.';
$string['nocategoryname'] = 'לא נמסר שם הקטגוריה';
$string['nocategoryview'] = 'אין קטגוריה לראות על ידי';
$string['nocourses'] = 'לא קיימים עדיין קורסים';
$string['noforce'] = 'אל תכריח';
$string['nogradeletters'] = 'לא נקבעו אותיות ציון';
$string['nogradesreturned'] = 'לא הוחזרו ציונים';
$string['noidnumber'] = 'לא קיים מספר זיהוי';
$string['nolettergrade'] = 'אין ציון אות עבור';
$string['nomode'] = 'NA';
$string['nonnumericweight'] = 'התקבל ערך לא-מספרי עבור';
$string['nonunlockableverbose'] = 'ציון זה איננו יכול להיות נעול  עד אשר {$a->itemname}  זמין.';
$string['nonweightedpct'] = '% לא משוקלל';
$string['nooutcome'] = 'לא קיים מדד־הערכה';
$string['nooutcomes'] = 'רכיבי מדד־הערכה חייבים להיות מקושרים למדד־הערכת הקורס, אך אין מדדי־הערכה לקורס זה. האם תרצה להוסיף מדד־הערכה ?חדש';
$string['nopermissiontoresetweights'] = 'אין הרשאה לאיפוס המשקלים';
$string['nopublish'] = 'לא ניתן לפרסם';
$string['noreports'] = 'לא זמינים לתצוגה ציונים כלשהם כיוון שאינך רשום/מה כסטודנט/ית או מורה בקורסים המצויים במערכת זו.';
$string['norolesdefined'] = 'לא הוגדרו תפקידים תחת ניהול->ציונים->הגדרות כלליות->תפקידי מתן ציון';
$string['noscales'] = 'מדדי-הערכה מבוססים על מדרגות־הערכה ברמת קורס או מערכת, אך לא נמצאו מדרגות־הערכה באף אחת מהרמות. האם להוסיף מדרגת־הערכה חדשה?';
$string['noselectedcategories'] = 'לא נבחרו קטגוריות כלשהן';
$string['noselecteditems'] = 'לא נבחרו פריטים כלשהם.';
$string['notenrolled'] = 'אינכם רשומים לאף קורס במערכת זו';
$string['notteachererror'] = 'עליך להיות מורה כדי שתוכל להשתמש בתכונה זו.';
$string['nousersloaded'] = 'לא נטענו משתמשים';
$string['numberofgrades'] = 'מספר הציונים';
$string['onascaleof'] = 'בטווח בין {$a->grademin} ל- {$a->grademax}';
$string['operations'] = 'פעולות';
$string['options'] = 'אפשרויות';
$string['others'] = 'אחרים';
$string['outcome'] = 'תוצאה';
$string['outcome_help'] = 'התוצאה שפריט הציון מייצג';
$string['outcomeassigntocourse'] = 'הקצה מדד־הערכה נוסף לקורס זה';
$string['outcomecategory'] = 'יצירת מדדי־הערכה בקטגוריה';
$string['outcomecategorynew'] = 'קטגוריה חדשה';
$string['outcomeconfirmdelete'] = 'האם למחוק את מדד־הערכה "{$a}"?';
$string['outcomecreate'] = 'הוספת מדד־הערכה חדש';
$string['outcomedelete'] = 'מחק מדד־הערכה';
$string['outcomefullname'] = 'שם מלא';
$string['outcomeitem'] = 'פריט מדד־הערכה';
$string['outcomeitemsedit'] = 'עריכת פריט מדד־הערכה';
$string['outcomereport'] = 'דוח מדדי־הערכה';
$string['outcomes'] = 'מדדי־הערכה';
$string['outcomescourse'] = 'מדדי־הערכה פעילים';
$string['outcomescoursecustom'] = 'המדד המותאם שבשימוש (לא ניתן להסיר)';
$string['outcomescoursenotused'] = 'מדד־הערכה מערכתי שאיננו בשימוש';
$string['outcomescourseused'] = 'מדד־הערכה מערכתי שבשימוש (לא ניתן להסיר)';
$string['outcomescustom'] = 'התאמת מדדי־הערכה';
$string['outcomeshortname'] = 'שם מקוצר';
$string['outcomesstandard'] = 'מדדי־הערכה מערכתיים';
$string['outcomesstandardavailable'] = 'מדדי־הערכה מערכתיים זמינים';
$string['outcomestandard'] = 'מדד־הערכה מערכתי';
$string['outcomestandard_help'] = 'מדד־הערכה מערכתי זמין בכל הקורסים';
$string['overallaverage'] = 'ממוצע כללי';
$string['overridden'] = 'עקיפה';
$string['overridden_help'] = '<p>כאשר מופעל, דגל העקיפה, מונע כל נסיון עתידי להתאים את ערך הציון באופן אוטומטי. דגל זה בד"כ מוגדר תוך הגדרות גליון הציונים, אך ניתן להדליקו או לכבותו באופן ידני כאשד נשתמש ברכיב טופס זה.</p>';
$string['overriddennotice'] = 'הציון הסופי שלך מפעילות זו הותאם ידנית.';
$string['overridecat'] = 'הרשה עקיפת ציוני קטגוריות ידנית';
$string['overridesitedefaultgradedisplaytype'] = 'עקיפת ברירות המחדל של האתר';
$string['overridesitedefaultgradedisplaytype_help'] = '<p>הגדרה זו מאפשרת לעדכן את בררת־המחדל של המערכת עבור הצגת ציונים בגליון הציונים. וכך מתאפשר להגדיר באופן מותאם לקורס את אותיות הציון וגבולות הבחירה שלך.</p>';
$string['overrideweightofa'] = 'עקיפת המשקל של {$a}';
$string['parentcategory'] = 'קטגורית אב';
$string['pctoftotalgrade'] = '% מהציון הכולל';
$string['percent'] = 'אחוז';
$string['percentage'] = 'הניקוד כאחוז מהציון המירבי בפעילות';
$string['percentageletter'] = 'אחוז (אות)';
$string['percentagereal'] = 'אחוז (מספרי)';
$string['percentascending'] = 'מיין לפי אחוזים בסדר עולה';
$string['percentdescending'] = 'מיין לפי אחוזים בסדר יורד';
$string['percentshort'] = '%';
$string['plusfactor'] = 'הסט';
$string['plusfactor_help'] = '"הסט" הוא מספר הנקודות אשר מתוסף (בפעולת חיבור) לכל פריט ציון, לאחר הכפלת ערך ה"מקדם" בניקוד המקורי, אשר התקבל מגליון הניקוד של הפעילות עצמה.

שימו לב! הזנת ציון סופי באופן ידני בגליון הציונים המסכם של הקורס, מבטלת את חישוב ההסט.';
$string['plusfactorvalue'] = 'ערך ההסט עבור {$a}';
$string['points'] = 'נקודות';
$string['pointsascending'] = 'מיין לפי נקודות בסדר עולה';
$string['pointsdescending'] = 'מיין לפי נקודות בסדר יורד';
$string['positionfirst'] = 'ראשון';
$string['positionlast'] = 'אחרון';
$string['preferences'] = 'העדפות';
$string['prefgeneral'] = 'כללי';
$string['prefletters'] = 'אותיות ציון וגבולות';
$string['prefrows'] = 'שורות מיוחדות';
$string['prefshow'] = 'הצגה/הסתרה';
$string['previewrows'] = 'תצוגה מקדימה של שורות';
$string['privacy:metadata:grades:finalgrade'] = 'הציון';
$string['profilereport'] = 'דוח פרופיל משתמש';
$string['profilereport_help'] = 'דוח ציונים הניתן לשימוש בדף המאפיינים האישי של המשתמש';
$string['publishing'] = 'פרסום';
$string['publishingoptions'] = 'אפשרויות פרסום ציונים';
$string['quickfeedback'] = 'משוב מהיר';
$string['quickgrading'] = 'מתן ציון מהיר';
$string['quickgrading_help'] = '<p>מתן ציון מהיר מוסיף שדה תוכן לכל פריט ציון בדוח הציונים, אשר מאפשר לך לערוך מספר ציונים יחדיו. בסיום מתן הציונים, יש לבחור בכפתור "עדכון" לשמירת השינויים.</p>';
$string['range'] = 'טווח';
$string['rangedecimals'] = 'טווח הנקודה העשרונית';
$string['rangedecimals_help'] = 'מספר הנקודות העשרוניות שיופיעו לטווח זה';
$string['rangesdecimalpoints'] = 'מספר הספרות אחרי הנקודה בטווחים';
$string['rangesdecimalpoints_help'] = '<p>מציין את המספר הנקודות הדצימלי להצגה עבור כל טווח. ניתן לדרוס הגדרה זו בכל מתן פריט ציון.</p>';
$string['rangesdisplaytype'] = 'סוג תצוגת הטווח';
$string['rangesdisplaytype_help'] = '<p>מציין כיצד להציג טווחים. אם היורש נבחר, נשתמש בסוג התצוגה לכל עמודה.</p>';
$string['rank'] = 'דרוג יחסי';
$string['rawpct'] = '% גולמי';
$string['real'] = 'מספרי';
$string['realletter'] = 'מספרי (אות)';
$string['realpercentage'] = 'מספרי (אחוז)';
$string['recovergradesdefault'] = 'שיחזור בררת־מחדל של ציונים';
$string['recovergradesdefault_help'] = 'לשחזר ציונים ישנים, כבררת־מחדל, כאשר המשתמש נרשם מחדש לקורס.';
$string['refreshpreview'] = 'רענון תצוגה מקדימה';
$string['regradeanyway'] = 'מתן ציון מחדש בכל מקרה';
$string['removeallcoursegrades'] = 'מחק את כל הציונים';
$string['removeallcourseitems'] = 'מחק את כל הפריטים והקטגוריות';
$string['report'] = 'דוח';
$string['reportdefault'] = 'בררת־מחדל הדוח ({$a})';
$string['reportplugins'] = 'תוספי דוחות';
$string['reportsettings'] = 'הגדרות הדוח';
$string['reprintheaders'] = 'הדפס מחדש את הכותרות העליונות';
$string['resetweights'] = 'אתחול משקלים של {$a->itemname}';
$string['resetweightsshort'] = 'אתחול משקלים';
$string['respectingcurrentdata'] = 'השאר את התצורה הנוכחית ללא שינוי';
$string['rowpreviewnum'] = 'תצוגה מקדימה של שורות';
$string['savechanges'] = 'שמירת שינויים';
$string['savepreferences'] = 'שמירת העדפות';
$string['scaleconfirmdelete'] = 'האם לבצע מחיקת מדרגת־הערכה "{$a}"?';
$string['scaledpct'] = '% הוגדל';
$string['seeallcoursegrades'] = 'הצגת כל ציוני הקורס';
$string['select'] = 'בחירת {$a}';
$string['selectalloroneuser'] = 'יש לבחור משתמש אחד או את כולם';
$string['selectauser'] = 'בחירת משתמש/ת';
$string['selectdestination'] = 'יש לבחור את המטרה של {$a}';
$string['separator'] = 'מפריד שדות';
$string['sepcolon'] = 'נקודותיים';
$string['sepcomma'] = 'סימן פסיק';
$string['sepsemicolon'] = 'נקודה-פסיק';
$string['septab'] = 'סימן "tab"';
$string['setcategories'] = 'הגדר קטגוריות';
$string['setcategorieserror'] = 'תחילה יש להגדיר קטגוריות (ציונים) לקורס לפני שניתן יהיה לתת להם משקלים.';
$string['setgradeletters'] = 'הגדר אותיות ציון';
$string['setpreferences'] = 'עדכון העדפות';
$string['setting'] = 'הגדרה';
$string['settings'] = 'הגדרות';
$string['setup'] = 'הגדרות';
$string['setweights'] = 'עדכון משקלים';
$string['showactivityicons'] = 'הצגת צלמיות הפעילות';
$string['showactivityicons_help'] = '<p>האם להציג צלמיות פעילות לצד שמות פעילות.</p>';
$string['showallgrades'] = 'הצגת כל הציונים';
$string['showallhidden'] = 'הצגת מוסתרים';
$string['showallstudents'] = 'הצגת כל הסטודנטים';
$string['showanalysisicon'] = 'הצגת צלמית ניתוח הציון';
$string['showanalysisicon_desc'] = 'האם להציג צלמית ניתוח הציון כבררת־מחדל. במידה ורכיב הפעילות תומכת בכך, צלמית ניתוח הציון מקשרת לעמוד ובו פרטים מלאים נוספים של הציון וכיצד הוא מתקבל.';
$string['showanalysisicon_help'] = 'אם רכיב הפעילות תומך בזה, צלמית ניתוח הציון   יקושר לעמוד עם הסברים מפורטים נוספים של הציון וכיצד הוא התקבל.';
$string['showaverage'] = 'הצגת ממוצע (בקורס)';
$string['showaverage_help'] = 'הצגת עמודות הממוצע?
סטודנטים יוכלו להעריך את ציוני חבריהם אם הממוצע מחושב ממספר קטן של ציונים.
מסיבות ביצועי מערכת הממוצע מקורס אם הוא תלוי בפריטים נסתרים..';
$string['showaverages'] = 'הצגת ממוצע העמודות';
$string['showaverages_help'] = 'הצגת עמודת הממוצעים בדוח הציונים.';
$string['showcalculations'] = 'הצגת חישובים';
$string['showcalculations_help'] = 'כאשר פעיל (במצב עריכה) יציג צלמיות "מחשבון" ליד כל פריט ציון וקטגוריה. כולל חלון מרחף במעבר הסמן של העכבר על פריטים מחושבים ותצוגת מצביע עכבר מיוחד כאשר עמודה מחושבת.';
$string['showcontributiontocoursetotal'] = 'הצגת תרומת הפריט לציון הסופי';
$string['showcontributiontocoursetotal_help'] = 'האם להציג את עמודת "תרומת הפריט לציון הסופי" אשר מציג את הערך המספרי הסופי כאחוז (לאחר חישוב המשקל) של הפעילות (פריט הציון) כחלק מהציון הסופי/מסכם של הסטודנט בקורס.';
$string['showeyecons'] = 'הצגת צלמיות "הצגה/הסתרה"';
$string['showeyecons_help'] = 'האם להציג את צלמית הצגה/הסתרה פריט ציון ליד כל ציון במצב עריכה, כדי לקבוע את מצב הנראות של כל פריט ציון לסטודנט.';
$string['showfeedback'] = 'הצגת משוב';
$string['showfeedback_help'] = 'האם להציג את עמודת המשוב?';
$string['showgrade'] = 'הצגת ציונים';
$string['showgrade_help'] = 'האם להציג את עמודת הציון';
$string['showgroups'] = 'הצגת קבוצות';
$string['showhiddenitems'] = 'הצגת פריטים מוסתרים';
$string['showhiddenitems_help'] = 'מציין כיצד פרטי ציון מוסתרים יוצגו. אם "מוסתרים" נבחר, הם יהיו מוסתרים לגמרי. אם "מוצגים" נבחר, שורת פריט הציון תוצג באפור יחד עם הסתרת הציון לחלוטין. אם "מוסתר עד" נבחר, פרטי ציונים עם התאריך של הגדרת "מוסתר עד" יוצגו באפור יחד עם הציונים המוסתרים עד לתאריך המוגדר, לאחר שפריט הציון יוצג.';
$string['showhiddenuntilonly'] = 'הסתרה עד מועד';
$string['showingaggregatesonly'] = 'תצוגת צבירת ציונים בלבד';
$string['showingfullmode'] = 'מציג תצוגה מלאה';
$string['showinggradesonly'] = 'מציג ציונים בלבד';
$string['showlettergrade'] = 'הצגת ציונים כאותיות';
$string['showlettergrade_help'] = 'האם להציג את עמודת ציוני האות';
$string['showlocks'] = 'הצגת נעילות';
$string['showlocks_help'] = 'האם להראות צלמית נעילה/פתיחה ליד כל ציון.';
$string['shownohidden'] = 'לא להציג';
$string['shownooutcomes'] = 'הסתרת מדדי־הערכה';
$string['shownumberofgrades'] = 'הצגת מספר הציונים בממוצעים';
$string['shownumberofgrades_help'] = 'האם להראות את מספר הציונים, אשר נכללו בחישוב הממוצע, בסוגריים כאשר מחשבים את הממוצע, למשל 45 (34).';
$string['showonlyactiveenrol'] = 'הצגת סטודנטים בעלי רישום פעיל בלבד';
$string['showonlyactiveenrol_help'] = 'הגדרה זו קובעת אם רק משתמשים רשומים יוצגו בדוח גליון הציונים, אם מאופשר משתמשים שהושהו מהקורס והוסרו מהרישום לא יכללו בגליון הציונים.';
$string['showpercentage'] = 'הצגת אחוזים';
$string['showpercentage_help'] = 'האם להראות את ערך האחוז של כל פריט ציון?';
$string['showquickfeedback'] = 'הצגת משוב מהיר';
$string['showquickfeedback_help'] = 'מנגנון משוב-מהיר מוסיף שדה קלט מילולי בכל תא ציון בדוח הציונים המסכם של הקורס, וכך מתאפשר למורה להזין משוב מילולי למספר סטודנטים בו זמנית. בסיום, יש להקליק על כפתור "העדכון" לשמירת כל השינויים יחדיו.

שימו לב! עדכון המשוב יצבע את תא ציון הסטודנט בפעילות ויבטל את האפשרות להזין משוב חדש מהפעילות המקורית.';
$string['showrange'] = 'הצגת טווחים';
$string['showrange_help'] = 'האם להציג את עמודת הטווח הניקוד?';
$string['showranges'] = 'הצגת טווחים';
$string['showranges_help'] = 'הצגת שורה המראה את טווח האפשרות עבור כל פריט מתן ציון (דרוג) בדוח הציונים.';
$string['showrank'] = 'הצגת דירוג יחסי';
$string['showrank_help'] = 'האם להציג את הדירוג של המשתמש ביחס לשאר התלמידים בכיתה, עבור כל פריט ציון?';
$string['showuserimage'] = 'הצגת תמונת המשתמש';
$string['showuserimage_help'] = 'באם להציג את תמונת המשתמש מהפרופיל ליד השם בדוח הציונים.';
$string['showverbose'] = 'הצגת {$a->category} {$a->itemmodule} {$a->itemname}';
$string['showweight'] = 'הצגת משקלים';
$string['showweight_help'] = 'האם להציג את עמודת המשקל?';
$string['simpleview'] = 'ניהול ציונים פשוט';
$string['singleview'] = 'תצוגה בודדת עבור {$a}';
$string['sitewide'] = 'קיים בכל האתר';
$string['sort'] = 'מיין';
$string['sortasc'] = 'מיין בסדר עולה';
$string['sortbyfirstname'] = 'מיין לפי שם פרטי';
$string['sortbylastname'] = 'מיין לפי שם משפחה';
$string['sortdesc'] = 'מיין בסדר יורד';
$string['standarddeviation'] = 'סטיית תקן';
$string['stats'] = 'סטטיסטיקה';
$string['statslink'] = 'סטטיסטיקה';
$string['student'] = 'סטודנט';
$string['studentsperpage'] = 'מספר הסטודנטים שיוצגו בכל עמוד';
$string['studentsperpage_help'] = 'מספר הסטודנטים שיוצגו בדף בדוח הציונים.';
$string['subcategory'] = 'קטגוריה רגילה';
$string['submissions'] = 'הגשות';
$string['submittedon'] = 'הוגשו: {$a}';
$string['sumofgradesupgradedgrades'] = 'שימו לב! שיטת חישוב הציונים "סכום ציונים" שונתה וכעת נקראת "סיכום ציונים מתקדם". היות ובקורס זה נעשה שימוש בשיטת חישוב "סכום ציונים" וכעת הציונים מחושבים באופן חדש, אנו ממליצים לכם לקרוא ולהבין את ההסברים (<a href="https://docs.moodle.org/29/en/Natural_weighting">מידע נוסף</a>) אודות מנגנון חישוב הציונים החדש.  בנוסף, מומלץ לפנות למנהל/ת המערכת שלכם או רכז/ת התקשוב במוסד לקבלת מידע מורחב אודות השינוי בחישוב הציונים.';
$string['switchtofullview'] = 'ממשק ניהול ציונים מתקדם';
$string['switchtosimpleview'] = 'ממשק ניהול ציונים פשוט';
$string['tabs'] = 'לשוניות';
$string['topcategory'] = 'קטגורית על';
$string['total'] = 'כולל';
$string['totalweight100'] = 'הציון הכולל שווה ל-100';
$string['totalweightnot100'] = 'הציון הכולל לא שווה ל-100';
$string['turnfeedbackoff'] = 'בגור משוב';
$string['turnfeedbackon'] = 'הפעל משוב';
$string['typenone'] = 'ללא ציון';
$string['typescale'] = 'מדרגת־הערכה';
$string['typescale_help'] = 'הגדרה זו מתייחסת לבחירת מדרגת־הערכה בפריט ציון מבוסס מדרגת־הערכה. מדרגת־הערכה עבור רכיב מסוג "פעילות" מוגדרת בעמוד הגדרות הפעילות עצמה.';
$string['typetext'] = 'טקסט';
$string['typevalue'] = 'ערך';
$string['uncategorised'] = 'קורס';
$string['unchangedgrade'] = 'ציון ללא שינוי';
$string['unenrolledusersinimport'] = 'יבוא זה מכליל את הציונים הבאים עבור משתמשים אשר אינם רשומים לקורס כעת: {$a}';
$string['unlimitedgrades'] = 'ביטול הגבלת ציונים';
$string['unlimitedgrades_help'] = 'כבררת־מחדל הציונים מוגבלים ע"י ערך מרבי ומזערי של פריט הציון.  הפעלת הגדרה זו תסיר את הגבלה, ותאפשר להזין ציונים מעל 100% בגליון הציונים.

שימו לב! אם בחרתם להפעיל הגדרה זו, מומלץ לאפשר אותה בזמן שבו אין פעילות הזנת ציונים במערכת, מאחר שהפעלת הגדרה זו תגרום לביצוע שיקלול וחישוב ציונים מחדש.  בנוסף, המהלך יוצר עומס עיבוד גבוה על המערכת.';
$string['unlock'] = 'הסרת נעילה';
$string['unlockverbose'] = 'נעילת {$a->category} {$a->itemmodule} {$a->itemname}';
$string['unused'] = 'לא בשימוש';
$string['updatedgradesonly'] = 'יצוא ציונים מעודכנים או חדשים';
$string['upgradedgradeshidemessage'] = 'הסתרת הודעה';
$string['upgradedminmaxrevertmessage'] = 'ביטול שינויים (וחזרה למצב הקודם)';
$string['uploadgrades'] = 'העלאת ציונים';
$string['useadvanced'] = 'השתמש בתכונות מתקדמות';
$string['usedcourses'] = 'קורסים בשימוש';
$string['usedgradeitem'] = 'פריט ציון בשימוש';
$string['usenooutcome'] = 'אל תשתמש במדד־הערכה';
$string['usenoscale'] = 'ללא שימוש מדרגת־הערכה';
$string['usepercent'] = 'השתמש באחוז';
$string['user'] = 'משתמש';
$string['userenrolmentsuspended'] = 'רישום הסטודנט מושהה';
$string['userfields_show'] = 'הצגת שדות משתמש';
$string['usergrade'] = 'משתמש {$a->fullname} ({$a->useridnumber}) בפריט  {$a->gradeidnumber}';
$string['userid'] = 'מספר זיהוי משתמש';
$string['usermappingerrorcurrentgroup'] = 'המשתמש אינו חבר בקבוצה הנוכחית .';
$string['usermappingerrorusernotfound'] = 'שגיאה במיפוי המשתמש. לא ניתן היה למצוא את המשתמש';
$string['userpreferences'] = 'העדפות המשתמש';
$string['useweighted'] = 'השתמש במשוקלל';
$string['verbosescales'] = 'מדרגת־הערכה (מילוליות)';
$string['verbosescales_help'] = 'יבוא של תמליל מדרגת־הערכה ללא הערכים המספריים העומדים בבסיס מדרגת־הערכה. "כן" - יבוא של ערכים מספריים ומילוליים, "לא" יבוא של ערכים מספריים בלבד.';
$string['viewbygroup'] = 'קבוצה';
$string['viewgrades'] = 'תצוגת ציונים';
$string['weight'] = 'משקל';
$string['weight_help'] = 'ערך זה משמש לקביעת הערך היחסי של כל אחד מפריטי ציון כאשר מתבצע חישוב/צבירה של הציון בקטגוריה או בקורס';
$string['weightcourse'] = 'שימוש בציונים משוקללים בקורס';
$string['weightedascending'] = 'מיין לפי אחוז משוקלל בסדר עולה';
$string['weighteddescending'] = 'מיין לפי אחוז משוקלל בסדר יורד';
$string['weightedpct'] = '% משוקלל';
$string['weightedpctcontribution'] = '% תרומה משוקללת';
$string['weightofa'] = 'משקל של {$a}';
$string['weightorextracredit'] = 'משקל או נקודות-זכות';
$string['weightoverride'] = 'עדכון משקל';
$string['weightoverride_help'] = 'משקל מותאם, מחשב את ערכי פריט הציון בהתאם למשקל אשר הוזן. (בהגדרה "משקל")

ביטול שימוש במשקל מותאם, תאתחל את מנגנון החישוב של ערכי פריט הציון. כך שפריט הציון יקבל משקל אוטומטי ביחס לשאר פריטי הציונים הפעילים בקורס.';
$string['weights'] = 'משקלים';
$string['weightsadjusted'] = 'המשקלים עודכנו לסכום מירבי של 100.';
$string['weightsedit'] = 'עריכת משקלים ונקודות זכות נוספות';
$string['weightuc'] = 'משקל מחושב';
$string['writinggradebookinfo'] = 'הגדרות כתיבת גיליון הציונים';
$string['xml'] = 'XML';
$string['yes'] = 'כן';
$string['yourgrade'] = 'הציון שלך';
