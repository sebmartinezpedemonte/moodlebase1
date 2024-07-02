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
 * Strings for component 'url', language 'he', version '4.1'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'בחר משתנה...';
$string['clicktoopen'] = 'הקליקו על הקישור {$a} לצפיה באתר האינטרנט';
$string['configdisplayoptions'] = 'בחר את כל האפשרויות הנדרשות. הגדרות קיימות לא ישונו. הקליקו עם העכבר על אפשרויות שונות ובמקביל על המקש CTRL לשם בחירת שדות מרובים.';
$string['configframesize'] = 'כאשר דף אינטרנט או קובץ שהועלה מוצגים בתוך מסגרת, הערך הצוצג הוא הגובה (בפיקסלים) של המסגרת העליונה (הכוללת את הניווט).';
$string['configrolesinparams'] = 'אפשרו, להוספת זמינות שמות תפקידים מקומיים ברשימת המשתנים הזמינים.';
$string['configsecretphrase'] = 'משתמשים בביטוי סודי זה לייצור קוד מוצפן שניתן לשולחו למספר שרתים כמשתנה. הקוד המוצפן נוצר על ידי ערך md5  של כתובת IP של המשתמש הנוכחי כשהיא משורשרת לביטוי הסודי שלך. כלומר  = קוד md5(IP.ביטוי_סודי). אנא שים לב כי זה איננו קוד אמין משום שכתובות ה-IP יכולה להשתנות ובנוסף היא משותפת למספר שרתים.';
$string['contentheader'] = 'תוכן';
$string['createurl'] = 'יצירת כתובת אינטרנט';
$string['displayoptions'] = 'אפשרויות הצגה זמינות';
$string['displayselect'] = 'אופן תצוגה';
$string['displayselect_help'] = 'הגדרה זאת, ביחד עם סוג הקובץ של כתובת האינטרנט ובתנאי שהדפדפן מרשה שיבוץ, קובעת כיצד תוצג כתובת האינטרנט. האפשרויות הן:

* אוטומטי - בחירת התצוגה הטובה ביותר לכתובת האינטרנט נבחרת אוטומטית.
* שיבוץ - כתובת האינטרנט מוצגת בתוך הדף מתחת לסרגל הניווט יחד עם תאור כתובת האינטרנט והמשבצות
* הורדה מאולצת - המשתמש מתבקש על ידי המערכת להוריד את קובץ כתובת האינטרנט
* פתוח - רק כתובת האינטרנט מוצגת בחלון החדש של הדפדפן
* קופצנית - כתובת האינטרנט מוצגת בחלון חדש של הדפדפן ללא תפריטים או סרגל כתובות
*במסגרת - כתובת האינטרנט מוצגת במסגרת מתחת חלון החדש של הדפדפן מתחת לסרגל הניווט ותאור כתובת האינטרנט
* חלון חדש - כתובת האינטרנט מוצגת בחלון חדש של הדפדפן עם תפריטים וסרגל כתובות';
$string['displayselectexplain'] = 'בחירת סוג תצוגה; שימו לב! לא כל הסוגים זמינים לכל כתובות האינטרנט.';
$string['externalurl'] = 'כתובת אינטרנט חיצונית';
$string['framesize'] = 'גובה המסגרת';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'לא ניתן ליצור משאב זה, כתובת האינטרנט שהוכנסה שגויה';
$string['invalidurl'] = 'הכתובת שהוכנסה שגויה';
$string['modulename'] = 'קישור לאתר אינטרנט';
$string['modulename_help'] = 'משאב מסוג "קישור" (URL) מאפשר למורה לספק קישור לאתר או שרות אינטרנט ולשמש למעשה כמשאב בקורס. כל דבר הזמין באופן חופשי ברשת, כגון מסמכים או תמונות, יכול להיות קשור לקורס בעזרת רכיב זה.

כתובת האתר (URL) אינה צריכה להיות דף הבית של אתר אינטרנט. ניתן להעתיק URL של דף אינטרנט מסוים ולהדביק במקום הרצוי, או שניתן גם להשתמש ב"בורר קבצים" ולבחור קישור ממאגר כגון פליקר, YouTube או ויקימדיה (תלוי באיזה מאגרים משתמש האתר).

שימו לב! קישורים לאתרי אינטרנט ניתן גם להוסיף לכל משאב אחר או סוג פעילות, באמצעות עורך התוכן המעוצב המובנה במערכת.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'כתובות אינטרנט';
$string['page-mod-url-x'] = 'עמוד רכיב כתובת אינטרנט (URL)';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'משתנים';
$string['parametersheader_help'] = 'יתכן כי משתנים מסויימים של מערכת Moodle יצורפו לכתובת זו. רשום את השם עבור המשתנה בכל תיבה ולאחר מכן בחר את המשתנה המתאים שנדרש.';
$string['pluginadministration'] = 'ניהול כתובת אינטרנט של הרכיב';
$string['pluginname'] = 'קישור לאתר אינטרנט';
$string['popupheight'] = 'גובה החלון הקופץ (בפיקסלים)';
$string['popupheightexplain'] = 'הגדרת בררת־מחדל של גובה החלונות הקופצים.';
$string['popupwidth'] = 'רוחב החלון הקופץ (בפיקסלים)';
$string['popupwidthexplain'] = 'הגדרת בררת־מחדל של רוחב החלונות הקופצים.';
$string['printintro'] = 'הצגת תיאור כתובת האינטרנט';
$string['printintroexplain'] = 'האם להציג את שם כתובת האינטרנט מתחת לתוכן? כמה סוגי מצגות עשויים  לא להציג את שם כתובת האינטרנט אפילו אם אופשרו ';
$string['rolesinparams'] = 'צרוף שמות תפקידים במשתנים';
$string['search:activity'] = 'קישור לאתר אינטרנט';
$string['serverurl'] = 'כתובת האינטרנט של השרת';
$string['url:addinstance'] = 'הוספת משאב כתובת אינטרנט (URL) חדשה';
$string['url:view'] = 'צפיה בכתובת האינטרנט (URL)';
