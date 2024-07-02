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
 * Strings for component 'book', language 'he', version '4.1'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'הוספת פרק';
$string['book:addinstance'] = 'הוספת ספר חדש';
$string['book:edit'] = 'עריכת פרקי הספר';
$string['book:read'] = 'צפיה בספר';
$string['book:viewhiddenchapters'] = ' צפייה בפרקים נסתרים בספר';
$string['chapterandsubchaptersdeleted'] = 'פרק  "{$a->title}" ותתי הפרקים שלו {$a->subchapters} נמחקו';
$string['chapterdeleted'] = 'פרק "{$a->title}" נמחק';
$string['chapters'] = 'פרקים';
$string['chaptertitle'] = 'כותרת הפרק';
$string['confchapterdelete'] = 'האם הינך בטוח כי ברצונך למחוק את הפרק הזה?';
$string['confchapterdeleteall'] = 'האם הינך בטוח כי ברצונך למחוק את הפרק הזה ואת כל תת הפרקים בו';
$string['content'] = 'תוכן';
$string['customtitles'] = 'כותרות מותאמות אישית';
$string['customtitles_help'] = 'בדרך-כלל כותרות הפרקים יוצגו באופן אוטומטי רק בתוכן העיניינים TOC ומעל התכנים.

אם הכותרות המותאמות אישית מסומנות . כותרת הפרק לא תוצג מעל התוכן.
כותרת שונה ( יתכן כי ארוכה מהכותרת  של הפרק)  כנראה הוכנסה כחלק מהתוכן.';
$string['deletechapter'] = 'מחיקת פרק "{$a}"';
$string['editchapter'] = 'עריכת פרק "{$a}"';
$string['editingchapter'] = 'עריכת פרק';
$string['errorchapter'] = 'שגיאה בעת קריאת הפרק';
$string['eventchaptercreated'] = 'הפרק נוצר';
$string['eventchapterdeleted'] = 'הפרק נמחק';
$string['eventchapterupdated'] = 'הפרק עודכן';
$string['eventchapterviewed'] = 'הפרק נצפה';
$string['hidechapter'] = 'הסתרת פרק "{$a}"';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['modulename'] = 'ספר';
$string['modulename_help'] = 'משאב מסוג "ספר" (Book) מאפשר למורה ליצור חומר לימוד המורכב ממספר רב של דפים מעוצבים המכילים רכיבי מולטימדיה שונים, המהווים מעין ספר עם פרקים ותתי-פרקים. הספרים יכולים להכיל תוכן מקוון ומדיה אינטרקטיבית, ואף יכולים להופיע בחלקים המוצגים בפסקאות, קטעים ויחידות שונות.

משאב מסוג ספר יכול לשמש גם ל:
* הצגת חומר קריאה עבור יחידות למידה.
* ספר הדרכה לצוות המחלקה.
* הצגת תיק עבודות ראווה של תוצרי התלמידים.
* מאגר ידע
* מדריך שימוש לכלים מקוונים';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'ספרים';
$string['movechapterdown'] = 'העברת פרק מטה "{$a}"';
$string['movechapterup'] = 'העברת פרק מעלה "{$a}"';
$string['navexit'] = 'יציאה מהספר';
$string['navimages'] = 'תמונות';
$string['navnext'] = 'הבא';
$string['navnexttitle'] = 'הבא: {$a}';
$string['navoptions'] = 'אפשרויות זמינות לקישורי ניווט';
$string['navoptions_desc'] = 'אפשרויות לתצוגת ניווט בעמודי הספר';
$string['navprev'] = 'הקודם';
$string['navprevtitle'] = 'הקודם: {$a}';
$string['navstyle'] = 'סגנון הניווט';
$string['navstyle_help'] = '*תמונות - אייקונים עבור הניווט
* טקסט - כותרות פרקים עבור הניווט';
$string['navtext'] = 'טקסט';
$string['navtoc'] = 'תוכן עניינים בלבד';
$string['nocontent'] = 'טרם נוסף תוכן לספר זה.';
$string['numbering'] = 'תסדיר הפרק';
$string['numbering0'] = 'ללא';
$string['numbering1'] = 'מספרים';
$string['numbering2'] = 'תבליטים';
$string['numbering3'] = 'הזחה';
$string['numbering_help'] = '* ללא - פרקים ותתי פרקים מופיעים ללא מספור
* ממוספרים - פרקים ותתי פרקים ממוספרים לפי הסדר 1, 1.1, 1.2, 2, ...
* תבליטים - תתי פרקים הם מוזחים ומוצגים עם תבליטים בתוכן העניינים
* הזחה - תתי פרקים מוזחים בתוכן העניינים';
$string['numberingoptions'] = 'אפשרויות זמינות לעיצוב פרקים';
$string['numberingoptions_desc'] = 'בחירת אפשרויות מספור אשר יהיו זמינים בעת יצירת ספרים חדשים';
$string['page-mod-book-x'] = 'כל עמוד של רכיב ספר';
$string['pluginadministration'] = 'ניהול הספר';
$string['pluginname'] = 'ספר';
$string['removeallbooktags'] = 'מחיקת כל תגיות הספר';
$string['search:activity'] = 'ספר - מידע המשאבים';
$string['search:chapter'] = 'ספר - פרקים';
$string['showchapter'] = 'הצגת פרק  "{$a}"';
$string['subchapter'] = 'תת-פרק';
$string['subchapternotice'] = '(זמין רק כאשר הפרק הראשון כבר נוצר)';
$string['subplugintype_booktool'] = 'כלי הספר';
$string['subplugintype_booktool_plural'] = 'כלי הספר';
$string['tagarea_book_chapters'] = 'פרקי הספר';
$string['tagsdeleted'] = 'תגיות הספר נמחקו';
$string['toc'] = 'תוכן עניינים';
$string['top'] = 'מעלה';
