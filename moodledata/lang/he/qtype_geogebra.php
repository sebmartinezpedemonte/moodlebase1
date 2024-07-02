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
 * Strings for component 'qtype_geogebra', language 'he', version '4.1'.
 *
 * @package     qtype_geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconstraints'] = 'הוספת אילוצים (תנאים) למשתנים.';
$string['addmorevarblanks'] = 'מקומות פנויים לעוד {no} משתנה/ים';
$string['answerinvalid'] = 'מחרוזת התשובה בתגובה אינה חוקית. זה לא צריך לקרות.';
$string['answermissing'] = 'התשובה בתגובה חסרה. כנאה JavaScript לא מופעל בדפדפן או שקרתה שגיאה לא ידועה.';
$string['answervar'] = 'משתנים לציון אוטומטי';
$string['answervar_help'] = 'לציון אוטומטי: יש להשתמש ב boolean object בתוך גאוגברה שערכו true כאשר התלמיד פתר את השאלה (גם באופן חלקי). השיקלול סוכם את כל הציונים לכל המשתנים הבוליאנים. השאלה נחשבת "נכונה" אם יש צבירה של ציונים אשר עוברת את ה-100%, אך יש לוודא שיש צבירת ציונים אשר מגיעה ל-100% בדיוק.
ניתן גם להשאיר שדה זה ריק לשימוש בציון ידני.';
$string['applet_advanced_settings'] = 'הגדרות מתקדמות...';
$string['constraints'] = 'אילוצים (תנאים)‏';
$string['constraints_help'] = 'האם יש אילוצים כלשהם על המשתנים כגון ‏a < b‏, אשר לא יכלו להיות מוגדרים בעזרת אפשרויות סרגל הגרירה? רשימה מופרדת בפסיקים. יחסים נתמכים: <, <=, >, >=. אם יש לך צורך בשוויון עליך להשתמש באותם משתנים בעת יצירת גליון הגאוגברה. טווחים דינמיים, כלומר שימוש במשתנים לקביעת מינימום ומקסימום של סרגל הגרירה, לא נתמכים.';
$string['constraintswrongortoohard'] = '‏‎{$a->inequalities}‎‏ שגויים או קשים מדי להשגה. ניסינו {$a->tries} פעמים ב-{$a->time} שניות. אולי נשתמש בשיטות טובות יותר בעתיד...';
$string['dragndrop'] = 'ניתן לגרור קובץ גאוגברה לכל מקום באזור יישמון גאוגברה';
$string['enable_label_drags'] = 'אפשרות לגרירת תוויות';
$string['enable_right_click'] = 'אפשרות לשימוש בכפתור עכבר ימני ועריכה בעזרת המקלדת';
$string['enable_shift_drag_zoom'] = 'אפשרות לגרירה עם shift וזום';
$string['feedback'] = 'משוב כשהערך הוא true‏';
$string['feedback_help'] = 'המשוב נלקח באופן אוטומטי מההערה במשתנה בקובץ הגאוגברה.';
$string['geogebraapplet'] = 'יישומון גאוגברה';
$string['getvars'] = 'קבלת ערכים של משתנים, אשר יכולים להיות אקראים, מהיישומון';
$string['ggbfilemissing'] = 'מחרוזת base64‏ חסרה בתגובה. כנראה JavaScript לא פעיל או קרתה שגיאת דפדפן כלשהי.';
$string['ggbturl'] = 'כתובת אינטרנט URL או מספר זהוי ID לגליון GeoGebra‏';
$string['ggbturl_help'] = 'את יכולה להשתמש בכפתור השיתוף ב-GeoGebra ולהעתיק ולהדביק את הקישור, או להשתמש במאגר GeoGebra‏. היישומון והפרמטרים באוכסנים בבסיס הנתונים. היישומון לא יועלה שוב מ-GeoGebra אלא אם יתבקש. ניתן גם רק לספק את ה-ID או מפתח השיתוף של היישומון.';
$string['ggbxmlmissing'] = 'חסרה מחרוזת ה-XML בתגובה. כנראה JavaScript מכובה או שאראה שגיאה כלשהי.';
$string['invalidinequality'] = '‏{$a} אינו חוקי';
$string['isexercise'] = 'השתמשי ב GeoGebra-Exercise לבדיקת שאלות';
$string['isexercise_help'] = 'היישומון מכיל כלים להגדרת המשתמש לבדיקה אוטומטית של התרגיל.\\n
שימי לב: כל התשובות למטה אינן מתאימות במקרה זה!';
$string['israndomized'] = 'האם יש משתנים שיש להגריל את ערכם?';
$string['loadapplet'] = 'טעינה (מחדש) להציגת היישומון';
$string['loadapplet_help'] = 'טעינה (מחדש) של היישומון מ-GeoGebra ואחסן את הגרסה החדשה מ-GeoGebra בבסיס הנתונים.';
$string['mineqmax'] = 'תכונות Min ו-Max להגרלה אינן מצוינות כהלכה למשתנה {$a}‏, או שלא ציינת את המינימום והמקסימום של סרגל הגרירה, או שהעצם כלל אינו סרגל גרירה. כנראה שעליך לתקן זאת בקובץ הגאוגברה שלך.';
$string['minplusstepgtmax'] = 'הערך המיזערי בתוספת ערך הגדילה חורג מהערך המירבי עבור משתנה {$a}‏. כנראה שעליך לתקן את קובץ הגאוגברה שלך.';
$string['noappletloaded'] = 'אף יישומון לא נטען! יש לבדוק האם כתובת האינטרנט של היישומון נכונה, ואם מוצג היישומון לאחר בחירת קישור או העלאה מחדש של היישומון.';
$string['nofractionsumeq1'] = 'לפחות צרוף אחד של הציונים צריך להסכם ל-100%‎‏';
$string['pluginname'] = 'GeoGebra';
$string['pluginname_help'] = 'שאלות כאשר התלמיד יכול לפתור את השאלות בעזרת גאוגברה';
$string['pluginname_link'] = 'question/type/geogebra';
$string['pluginnameadding'] = 'הוספת שאלת גאוגברה';
$string['pluginnameediting'] = 'עריכת שאלת גאוגברה';
$string['pluginnamesummary'] = 'גירסה של שאלות מחושבות המשתמשת בגאוגברה להראות את השאלה ולאמת את התשובה כאשר התלמיד עובד על החידון.';
$string['randomizedbutnovars'] = 'בחרת כי השאלה תהיה מוגרלת, אך לא ציינת אף משתנה חוקי להגרלה.';
$string['randomizedvar'] = 'משתנים שערכם יוגרל.';
$string['randomizedvar_help'] = 'משתנים שערכם יוגרל (מופרדים בפסיקים). השתמשי באפשרויות סרגל הגרירה בגאוגברה לקביעת מינימום, מקסימום וצעד. משתנים אלו יכולים לשמש גם בטקסט השאלה בתוך סוגריים מסולסלים, לדוגמה: {a}‏';
$string['show_algebra_input'] = 'הצגת סרגל קלט';
$string['show_menu_bar'] = 'הצגת תפריט';
$string['show_reset_icon'] = 'הצגת צלמית לאיתחול בניה';
$string['show_tool_bar'] = 'הצגת סרגל כלים';
$string['stepzero'] = 'הצעד הוא 0 למשתנה {$a}‏; או שלא ציינת את הצעד בסרגל הגרירה, או שהעצם כלל אינו סרגל גרירה. כנראה שעליך לתקן זאת בקובץ הגאוגברה.';
$string['useafile'] = '... או השתמשו בקובץ ggb';
$string['valuecheckedfor'] = 'עצם בוליאני בגאוגברה המשמש לבדיקת נכונות.';
$string['variablenamewrong'] = 'משתנה בשם זה לא נמצא בקובץ הגאוגברה.';
$string['variableno'] = 'משתנה {$a}‏';
$string['variables'] = 'משתנים';
$string['willbereadfromfile'] = 'יקרא מתוך גאוגברה... (ראי כפתור עזרה)‏';
