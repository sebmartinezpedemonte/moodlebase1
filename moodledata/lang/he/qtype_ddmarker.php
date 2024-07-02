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
 * Strings for component 'qtype_ddmarker', language 'he', version '4.1'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'שדות ריקים עבור {no} סמנים נוספים';
$string['alttext'] = 'טקסט חלופי';
$string['answer'] = 'תשובה';
$string['bgimage'] = 'תמונת רקע';
$string['clearwrongparts'] = 'הזזת סמנים שמוקמו לא נכון חזרה למיקום ברירת המחדל מתחת לתמונה';
$string['coords'] = 'קאורדינטות';
$string['correctansweris'] = 'התשובה הנכונה היא: {$a}';
$string['draggableimage'] = 'תמונה הניתנת לגרירה';
$string['draggableitem'] = 'פריט הניתן לגרירה';
$string['draggableitemheader'] = 'פריט גרירה {$a}';
$string['draggableitemtype'] = 'סוג';
$string['draggableword'] = 'טקסט הניתן לגרירה';
$string['dropbackground'] = 'תמונת רקע אליה יגררו הסמנים';
$string['dropzone'] = 'אזור גרירה {$a}';
$string['dropzoneheader'] = 'אזורי גרירה';
$string['dropzones'] = 'אזורי גרירה';
$string['dropzones_help'] = 'אזורי השחרור (מיקום) מוגדרים על ידי הקלדת נקודות ציון (קואורדינטות). בעת ההקלדה, התצוגה המקדימה מעל מתעדכנת באופן מיידי, כך שניתן למקם את הפריטים בדרך של ניסוי וטעייה.

* מעגל: centre_x, centre_y; רדיוס
<br>
למשל: \'80,100;50`
<br>
* מצולע: x1, y1; x2, y2; ...; xn, yn
<br>
למשל: \'20,60;100,60;20,100`
<br>
* מלבן: שמאל, למעלה, רוחב, גובה
<br>
למשל: \'20, 60; 80, 40`
<br>';
$string['followingarewrong'] = 'הסמנים הבאים הוצבו באזור הלא נכון: {$a}.';
$string['followingarewrongandhighlighted'] = 'הסמנים הבאים הונחו בצורה לא נכונה: {$a}.  סמן (ים) מודגשים, מוצגים כעת במיקום הנכון.  <br /> הקישו על הסמן כדי להדגיש את השטח המותר.';
$string['formerror_nobgimage'] = 'יש לבחור תמונה לשימוש תמונת הרקע עבור אזורי הגרירה והשחרור.';
$string['formerror_noitemselected'] = 'ציינת אזור שחרור אך לא בחרת סמן שיגרר לאזור זה.';
$string['formerror_nosemicolons'] = 'חסר סימן נקודה-פסיק ";" במחרוזת מערכת הצירים שלכם. מערכת הצירים שלכם עבור {$a->shape} צריכה להיות מצוינת כ: {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'רק תגיות "{$a}"מאופשרות בתווית עבור הסמן';
$string['formerror_onlyusewholepositivenumbers'] = 'יש להשתמש רק במספרים חיוביים שלמים כדי לציין מיקום במערכת צירים x,y ו / או רוחב וגובה של צורות. מערכת הצירים עבור {$a->shape} צריכה להיות מצוינת כ: {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'עבור צורת מצולע יש לציין לפחות 3 נקודות. מערכת הצירים עבור  {$a->shape} צריכה להיות מצוינת כ: {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'הצורה שהגדרת יוצאת מגבולות תמונת הרקע.';
$string['formerror_toomanysemicolons'] = 'יש יותר מדי סימני פסיק-נקודה המפרידים חלקים עבור הקואורדינטות שהגדרתם. הקואורדינטות עבור צורה {$a->shape} צריכות להיות מתוארת כך - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'מידות הרוחב והגובה שציינתם אינן מזוהות על ידי המערכת. מערכת הצירים עבור {$a->shape} צריכות להכתב כך {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'מערכת הצירים x,y שציינתם אינה מזוהה על ידי המערכת. מערכת הצירים עבור {$ a-> צורה} צריכות להכתב כ: {$ a-> מחרוזת}.';
$string['infinite'] = 'אינסוף';
$string['marker'] = 'סמן';
$string['marker_n'] = 'סמן {no}';
$string['markers'] = 'סמנים';
$string['nolabel'] = 'אין מלל לתווית';
$string['noofdrags'] = 'מספר';
$string['pleasedragatleastonemarker'] = 'תשובתך לא הושלמה; עליך למקם סמן אחד לפחות בתמונה.';
$string['pluginname'] = 'מיקום נקודות־ציון על תמונה';
$string['pluginname_help'] = 'סמני גרירה ושליחה מחייבים את המשיב לגרור תוויות טקסט ולשחרר אותן לאזורי יעד מוגדרים בתמונת רקע.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'הוספת שאלת "מיקום נקודות־ציון על תמונה"';
$string['pluginnameediting'] = 'עריכת שאלת "מיקום נקודות־ציון על תמונה"';
$string['pluginnamesummary'] = 'סמנים נגררים ומושלכים על גבי תמונת רקע.';
$string['previewareaheader'] = 'תצוגה מקדימה';
$string['previewareamessage'] = 'ראשית בחרו קובץ מסוג תמונת רקע, ולאחר מכן הזינו תוויות כיתוב עבור הסמנים. בהמשך, הגדירו את אזוריי השחרור שעל גבי התמונת רקע, שאליהם  אמורים להיגרר הסמנים שנבחרו.';
$string['refresh'] = 'רענון תצוגה מקדימה';
$string['shape'] = 'צורה';
$string['shape_circle'] = 'עיגול';
$string['shape_circle_coords'] = 'x, y)  r , x, y הם מערכת הצירים של מרכז המעגל,  וr הוא הרדיוס)';
$string['shape_circle_lowercase'] = 'עיגול';
$string['shape_polygon'] = 'מצולע';
$string['shape_polygon_coords'] = 'X1, Y1, X2, Y2, x3, y3, X4, y4 .... (כאשר x1, y1 הם מערכת צירים x, y  של קודקוד הראשון, X2, Y2 הם מערכת צירים x, y  של השני, וכו. אין צורך לחזור על נקודות הציון של הקודקוד הראשון כדי  לסגור את המצולע)';
$string['shape_polygon_lowercase'] = 'מצולע';
$string['shape_rectangle'] = 'מלבן';
$string['shape_rectangle_coords'] = 'x, y ; w, h (כאשר x, y הם  המיקום של הפינה השמאלית העליונה של המלבן במערכת צירים xy , והמשתנים w ו-h הם הרוחב והגובה של מלבן)';
$string['shape_rectangle_lowercase'] = 'מלבן';
$string['showmisplaced'] = 'הדגשת אזורי השחרור שהסמן הנכון לא הונח עליהם';
$string['shuffleimages'] = 'ערבוב פריטי גרירה בכל פעם שנשאלת שאלה';
$string['stateincorrectlyplaced'] = 'ציינו כאשר סמנים הונחו בצורה לא נכונה';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'אזור שחרור {$a}';
$string['ytop'] = 'למעלה';
