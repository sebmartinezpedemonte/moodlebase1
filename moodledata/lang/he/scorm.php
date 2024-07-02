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
 * Strings for component 'scorm', language 'he', version '4.1'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'הפעלה';
$string['activityloading'] = 'תועבר חזרה אוטומטית לפעילות';
$string['activityoverview'] = 'ישנן לומדות (scorm) הדורשת התייחסותך';
$string['activitypleasewait'] = 'הפעילות נטענת, אנא המתן...';
$string['adminsettings'] = 'הגדרות ניהוליות';
$string['advanced'] = 'משתנים';
$string['allowapidebug'] = 'הפעל את ניפוי ומעקב ה-API (הגדרת apidebugmask)';
$string['allowtypeaicchacp'] = 'אפשר AICC HACP חיצוני';
$string['allowtypeexternal'] = 'אפשר סוג חבילה חיצונית';
$string['allowtypeexternalaicc'] = 'אפשר קישור AICC ישיר';
$string['allowtypelocalsync'] = 'אפשרות הורדת סוגי חבילות (לומדות)';
$string['apidebugmask'] = 'מסכת הלכידה של ניפוי API - השתמש בביטיים סדורים (regex) כל <שם_המשתמש>: <שם_הפעילות>  למשל admin:.* יאפשר ניפוי רק למשתמש המוגדר כמנהל   ';
$string['areacontent'] = 'קבצי תוכן';
$string['areapackage'] = 'קובץ חבילה';
$string['asset'] = 'נכס';
$string['assetlaunched'] = 'משאב - נצפה';
$string['attempt'] = 'ניסיון';
$string['attempt1'] = 'ניסיון 1';
$string['attempts'] = 'ניסיונות';
$string['attemptsmanagement'] = 'ניהול ניסיונות';
$string['attemptstatusall'] = 'עמוד "עדכונים בקורסים שלי" ועמוד ההתחלה';
$string['attemptstatusentry'] = 'עמוד ההתחלה בלבד';
$string['attemptstatusmy'] = 'עמוד "עדכונים בקורסים שלי" בלבד';
$string['attemptsx'] = '{$a} נסיונות';
$string['attr_error'] = 'ערך שגוי עבור התכונה ({$a->attr}) בתג {$a->tag}.';
$string['autocommit'] = 'שמירת מידע אוטומטית';
$string['autocontinue'] = 'המשך אוטומטי בין תתי לומדות';
$string['autocontinue_help'] = '<p><b>המשך באופן אוטומטי</b></p>

<p>אם "המשך באופן אוטומטי" מוגדר כ-"כן", אז כאשר אובייקט למידה כלשהו קורא לשיטת &quot;תקשורת קרובה&quot;, אז אובייקט הלמידה הזמין הבא מופעל אוטומטית.
</p>

<p>אם זה מוגדר כ-"לא", אז על המשתמשים ללחוץ על כפתור ה-"המשך" כדי להמשיך הלאה.
</p>';
$string['autocontinuedesc'] = 'כאשר פעיל, חבילות לומדה נוספות יופעלו באופן אוטומטי. כאשר לא פעיל, יוצג כפתור "המשך" עליו יצטרך המשתמש להקליק לשם המשך לחבילת הלומדה הבאה.';
$string['averageattempt'] = 'ממוצע ניסיונות';
$string['badarchive'] = 'עליכם לספק קובץ zip תקין';
$string['badmanifest'] = 'כמה שגיאות גלויות: קרא את יומני המעקב אחר השגיאות';
$string['browse'] = 'תצוגה מקדימה';
$string['browsed'] = 'נצפה';
$string['browsemode'] = 'מצב תצוגה מקדימה';
$string['browserepository'] = 'חיפוש במאגר';
$string['calculatedweight'] = 'משקל מחושב';
$string['calendarend'] = 'תאריך סגירה: {$a}';
$string['calendarstart'] = 'תאריך פתיחה: {$a}';
$string['cannotfindsco'] = 'SCO לא נמצא';
$string['chooseapacket'] = 'בחירה או עדכון חבילת לומדה';
$string['collapsetocwinsize'] = 'צמצם תוכן עניינים כאשר גודל החלון קטן מ';
$string['compatibilitysettings'] = 'הגדרות תאימות';
$string['completed'] = 'הושלם';
$string['completiondetail:allscos'] = 'ביצוע כל החלקים של הפעילות';
$string['completiondetail:completionscore'] = 'קבלת ציון {$a} ויותר';
$string['completiondetail:completionstatuscompleted'] = 'השלמת הפעילות';
$string['completiondetail:completionstatuscompletedorpassed'] = 'השלמה וקבלת ציון עובר בפעילות';
$string['completiondetail:completionstatuspassed'] = 'קבלת ציון עובר בפעילות';
$string['completionscorerequired'] = 'נדרש ניקוד מינימלי';
$string['completionscorerequired_help'] = 'הוספת תנאי זה, תדרוש מהמשתמש לקבל לפחות את הניקוד המיזערי שהוזן כדי להשלים את פעילות לומדה זו, וכן כל תנאי אחר בדרישות השלמת הפעילות.';
$string['completionstatus_completed'] = 'הושלם';
$string['completionstatus_passed'] = 'עבר';
$string['completionstatusrequired'] = 'מצב נדרש';
$string['completionstatusrequired_help'] = 'בחירת תנאי אחד או יותר תדרוש מהמשתמש להשיג לפחות אחד מאלו המסומנים על מנת להשלים את פעילות לומדה זו, וכן כל תנאי אחר בדרישות השלמת הפעילות.';
$string['confirmloosetracks'] = 'אזהרה: נראה שהחבילה עברה שינויים או התאמות כלשהן. אם שונה מבנה החבילה, יכול להיות שחלק מדוחות המעקב של המשתמשים יאבדו במהלך תהליך העדכון.';
$string['contents'] = 'תוכן';
$string['coursepacket'] = 'חבילת לומדה';
$string['coursestruct'] = 'מבנה הלומדה';
$string['currentwindow'] = 'חלון נוכחי';
$string['datadir'] = 'שגיאה במערכת הקבצים: לא ניתן ליצור ספריה שתכיל את נתוני לומדה.';
$string['defaultdisplaysettings'] = 'הגדרות בררת־מחדל';
$string['defaultgradesettings'] = 'בררת־מחדל של הגדרות ניקוד';
$string['defaultothersettings'] = 'הגדרות בררת־מחדל אחרות';
$string['deleteallattempts'] = 'מחיקת כל נסיונות הפעילות בלומדה';
$string['deleteattemptcheck'] = 'האם אתם בטוחים לחלוטין שאתם מעוניינים למחוק את הנסיונות האלו לחלוטין?';
$string['deleteselected'] = 'מחיקת נסיונות המענה שנבחרו';
$string['deleteuserattemptcheck'] = 'האם אתם בטוחים לחלוטין שאתם מעוניינים למחוק את הנסיונות שלכם לחלוטין?';
$string['details'] = 'דוח המעקב מפורט';
$string['directories'] = 'הצגת קישורי הנושאים';
$string['disabled'] = 'לא זמין';
$string['display'] = 'הצגת הלומדה';
$string['displayactivityname'] = 'הצגת שם הפעילות';
$string['displayactivityname_help'] = 'האם להציג את שם פעילות הלומדה מעל חלון נגן SCORM.';
$string['displayattemptstatus'] = 'הצגת מצב הנסיונות';
$string['displayattemptstatus_help'] = 'כאשר מאופשר, תוצאות וציונים לנסיונות מוצגים בעמוד המתאר של SCORM';
$string['displayattemptstatusdesc'] = 'מאפיין זה קובע את ערך ברירת המחדל עבור הגדרת הסטטוס של נסיונות ההצגה במשבצת בעמוד הבית שלי או בעמוד הכניסה ל- SCORM.';
$string['displaycoursestructure'] = 'הצגת מבנה תוכן הלומדה בעמוד הכניסה';
$string['displaycoursestructure_help'] = 'כאשר זמין, תוכן הענינים של הלומדה יוצג בעמוד המבוא של הפעילות.';
$string['displaycoursestructuredesc'] = 'מאפיין זה קובע את ערך בררית המחדל עבור ההצגת מבנה הקורס על עמוד הכניסה';
$string['displaydesc'] = 'האם להציג את הלומדה בחלון חדש';
$string['displaysettings'] = 'הגדרות תצוגה';
$string['dnduploadscorm'] = 'הוספת חבילת לומדה מסוג SCORM';
$string['domxml'] = 'סיפריית DOMXML חיצונית';
$string['element'] = 'רכיב';
$string['enter'] = 'הפעלת הלומדה';
$string['entercourse'] = 'הפעלת הלומדה';
$string['errorlogs'] = 'יומן מעקב אחר שגיאות';
$string['eventattemptdeleted'] = 'הניסיון נמחק';
$string['eventinteractionsviewed'] = 'האינטרקציות נצפו';
$string['eventreportviewed'] = 'דוח נצפה';
$string['eventscolaunched'] = 'לומדה הופעלה';
$string['eventuserreportviewed'] = 'נצפה דוח משתמש';
$string['everyday'] = 'כל יום';
$string['everytime'] = 'בכל פעם שנעשה בו שימוש';
$string['exceededmaxattempts'] = 'הגעת למספר המירבי המותר של נסיונות.';
$string['exit'] = 'יציאה מהלומדה';
$string['exitactivity'] = 'יציאה מהפעילות';
$string['expired'] = 'פעילות זו הסתיימה ב- {$a} ואינה זמינה כעת.';
$string['external'] = 'זמני עדכן חבילות חיצוניות';
$string['failed'] = 'נכשל';
$string['finishscorm'] = 'אם סיימת לצפות במשאב זה, {$a}';
$string['finishscormlinkname'] = 'הקליקו כאן לחזרה לעמוד הקורס';
$string['firstaccess'] = 'גישה ראשונה';
$string['firstattempt'] = 'ניסיון מענה ראשון';
$string['floating'] = 'צף';
$string['forceattemptalways'] = 'תמיד';
$string['forcecompleted'] = 'כל ניסיון מענה יסמן את הפעילות כ"הושלמה"';
$string['forcecompleted_help'] = 'אם מאופשר, מצב נסיון הנוכחי יחשב כ"הושלם". הגדרה זאת קבילה רק לחבילות לומדה בגרסת SCORM 1.2.

מאפיין זה שימושי כאשר חבילת ה-SCORM לא מטפלת נכונה בניסיון מענה מחודש של פעילות בלומדה, בסקירה או בדפדוף, או מתריעה בצורה שגויה על מצב ההשלמה.';
$string['forcecompleteddesc'] = 'מאפיין זה קובע את ערך בררת־המחדל של הגדרות השלמת פעילות (עבור כל ניסיון מענה)';
$string['forcejavascript'] = 'אלץ משתמשים לאפשר  JavaScript';
$string['forcejavascript_desc'] = 'כאשר מופעל (מומלץ), נמנעת גישה לרכיבי SCORM של הלומדה כאשר JavaScript אינו נתמך או מופעל בדפדפן של המשתמש. אם אינו-זמין, המשתמש יכול לצפות בלומדה אך תקשורת API תיכשל ולא יישמר אף מידע על הציון.';
$string['forcejavascriptmessage'] = 'נדרש JavaScript לצפייה באובייקט זה,
אנא אפשר JavaScript בדפדפן שלך ונסה שנית';
$string['forcenewattempts'] = 'אלצו נסיון חדש';
$string['found'] = 'נמצא קובץ ה manifest של הלומדה';
$string['frameheight'] = 'גובה חלון או מסגרת שיבוץ הלומדה.';
$string['framewidth'] = 'רוחב חלון או מסגרת שיבוץ הלומדה.';
$string['fromleft'] = 'משמאל';
$string['fromtop'] = 'מלמעלה';
$string['fullscreen'] = 'מלא את כל המסך';
$string['general'] = 'נתונים כללים';
$string['gradeaverage'] = 'ממוצע הניקוד בניסיונות המענה';
$string['gradeforattempt'] = 'הניקוד לנסיון';
$string['gradehighest'] = 'הניקוד הגבוה ביותר';
$string['grademethod'] = 'שיטת מתן ניקוד';
$string['grademethod_help'] = 'שיטות מתן הניקוד מגדירות כיצד נקבע הניקוד לניסיון בודד של הפעילות.

קיימות ארבע שיטות:

* רכיבי למידה - מספר רכיבי הלמידה שהושלמו/צלחו
* הניקוד הגבוה - התוצאה הגבוהה ביותר שהתקבלה לכל עצמי הלמידה שצלחו
* ניקוד ממוצע -  הממצוע של התוצאות
* סיכום הניקוד - הסיכום של כל הציונים';
$string['grademethoddesc'] = 'הגדרות שיטת הציונים עבור פעילות';
$string['gradereported'] = 'הניקוד הסופי';
$string['gradescoes'] = 'רכיבי למידה';
$string['gradesettings'] = 'הגדרות ניקוד';
$string['gradesum'] = 'סיכום הניקוד בניסיונות המענה';
$string['height'] = 'גובה';
$string['hidden'] = 'חבוי (אך זמין)';
$string['hidebrowse'] = 'ביטול מצב התצוגה המקדימה';
$string['hidebrowse_help'] = 'צפיה־מוקדמת מאפשרת לתלמיד לצפות בפעילות לפני שהוא מנסה אותה. באם מאפיין הצפיה־המוקדמת אינו־זמין, כפתור הצפיה־המוקדמת איננו מוצג.';
$string['hidebrowsedesc'] = 'הגדרת האפשרות או מניעת "תצוגה מקדימה"';
$string['hideexit'] = 'הסתרת קישור היציאה';
$string['hidereview'] = 'הסתרת הכפתור: \'עיין בתשובות\'';
$string['hidetoc'] = 'תצוגת מבנה תוכן החבילה';
$string['hidetoc_help'] = 'הגדרות אלו קובעות כיצד תוכן הנושאים יוצג על ידי SCORM.';
$string['hidetocdesc'] = 'מאפיין זה מגדיר את בררת־המחדל להצגה או הסתרת מבנה הלומדה (TOC)';
$string['highestattempt'] = 'ניסיון המענה בעל הניקוד הגבוה ביותר';
$string['identifier'] = 'מזהה שאלה';
$string['incomplete'] = 'התחיל וטרם הסתיים';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'מידע';
$string['interactions'] = 'רשימת תתי־פעילויות';
$string['invalidactivity'] = 'פעילות SCORM שגויה';
$string['invalidhacpsession'] = 'שגיאת HACP Session';
$string['invalidmanifestname'] = 'ניתן לבחור רק קבצי imsmanifest.xml או .zip';
$string['invalidmanifestresource'] = 'אזהרה: נעשה שימוש במשאבים הבאים בקובץ ה manifest שלך אך לא ניתן למצוא אותם בחבילת הלומדה.';
$string['invalidstatus'] = 'מצב לא תקין';
$string['invalidurl'] = 'הוגדר קישור לא תקין';
$string['invalidurlhttpcheck'] = 'הוגדר קישור לא תקין. הודעת ניפוי שגיאות:<pre>{$a->cmsg}</pre>';
$string['last'] = 'גישה אחרונה';
$string['lastaccess'] = 'כניסה אחרונה';
$string['lastattempt'] = 'ניסיון מענה אחרון שהושלם';
$string['lastattemptlock'] = 'נעילה לאחר ניסיון אחרון';
$string['lastattemptlock_help'] = 'אם מאופשר, המנע מהתלמיד להפעיל את נגן ה-SCORM לאחר שהוא מיצה את כל הנסיונות שהוקצו לו';
$string['lastattemptlockdesc'] = 'מאפיין זה קובע את ערך ברירית המחדל הגדרת הנעילה לאחר הנסיון האחרון';
$string['location'] = 'הצגת סרגל הניווט';
$string['max'] = 'תוצאה מירבית';
$string['maximumattempts'] = 'מספר ניסיונות המענה';
$string['maximumattempts_help'] = '<p>הגדרה זו קובעת את מספר הנסיונות שהורשו למשתמשים. <br/>הדבר פועל רק עם SCORM1.2 וחבילות AICC. ל-SCORM2004 קיים מספר מירבי של הגדרת נסיונות.</p>';
$string['maximumattemptsdesc'] = 'מאפיין זה מגדיר את בררת־המחדל עבור המספר המירבי של נסיונות מענה על לומדה בפעילות';
$string['maximumgradedesc'] = 'מאפיין זה מגדיר את בררת־המחדל של הציון המירבי בפעילות';
$string['menubar'] = 'הצגת סרגל התפריט';
$string['min'] = 'תוצאה מינימלית';
$string['missing_attribute'] = 'בתג {$a->tag} חסרה התכונה {$a->attr}';
$string['missing_tag'] = 'תג {$a->tag} חסר';
$string['missingparam'] = 'משתנה דרוש חסר או שגוי';
$string['mode'] = 'מצב';
$string['modulename'] = 'חבילת לומדה - SCORM';
$string['modulename_help'] = 'פעילות SCORM ו-AICC הם רכיבי פעילות אשר נוצרו בעזרת יישומי יצירת תוכן לימודי חיצוניים,  המאפשרים נגישות ושימוש חוזר של תכני למידה מבוססי איטרנט. רכיב נגן ה-SCORM/AICC מאפשר לשבץ חבילות לומדה מסוג SCORM/AICC בקורס.

חבילת הלומדה מכילה תוכן המוצג הפרוס על פני מספר עמודים או שלבים. הלומדה כוללת תוכן עניינים ומנגנון ניווט בין העמודים.

ישנן אפשרויות שונות להצגת התוכן בחלון הקופץ, עם תוכן עניינים, עם כפתורי ניווט וכו.

לומדה מסוג SCORM בדרך כלל כוללים שאלות, עם ציונים אשר מוזנים לגליון הציונים של הקורס במהלך ובסיום הפעילות.

פעילויות SCORM ניתן לשימוש עבור:
* הצגת תוכן מולטימדיה אנימציות
* ככלי הערכה
* מבחנים מקוונים
* ספרי לימוד מקוונים';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'חבילות לומדה - SCORM';
$string['myattempts'] = 'ניסיונות המענה שלי';
$string['nav'] = 'הצגת ניווט';
$string['navdesc'] = 'הגדרה זו קובעת אם להציג או להסתיר כפתורי ניווט ואת מיקומם.';
$string['navigation'] = 'ניווט';
$string['newattempt'] = 'התחלת ניסיון מענה חדש';
$string['next'] = 'המשך';
$string['no_attributes'] = 'לתג {$a->tag} חייבות להיות תכונות';
$string['no_children'] = 'לתג {$a->tag} חייבים להיות ילדים';
$string['noactivity'] = 'נתונים בדוח זה יהיו זמינים לאחר התחלת פעילות בלומדה זו.';
$string['noattemptsallowed'] = 'מספר הנסיונות המותר';
$string['noattemptsmade'] = 'מספר הנסיונות שביצעת';
$string['nolimit'] = 'אין הגבלה על מספר ניסיונות המענה';
$string['nomanifest'] = 'קובץ ה Manifest לא נמצא';
$string['noprerequisites'] = 'לא הושלמו התנאים המקדימים המאפשרים לך גישה ללומדה זו.';
$string['noreports'] = 'אין דוח להציג';
$string['normal'] = 'רגיל';
$string['noscriptnoscorm'] = 'הדפדפן שלך לא תומך ב-JavaScript, או שתמיכה זו לא זמינה. לכן, לא ירשמו דיווחי מעקב למידה.';
$string['not_corr_type'] = '"אי תאימות סוג תג" עבור תג {$a->tag}';
$string['notattempted'] = 'טרם החל';
$string['notopenyet'] = 'פעילות זאת איננה זמינה עד {$a}';
$string['objectives'] = 'מטרות';
$string['openafterclose'] = 'יש להזין תאריך פתיחה לפי תאריך הסיום';
$string['optallstudents'] = 'כל המשתמשים';
$string['optattemptsonly'] = 'רק משתמשים עם נסיונות';
$string['options'] = 'אפשרויות (לא זמינות במספר דפדפנים)';
$string['optionsadv'] = 'אפשרויות (מתקדם)';
$string['optionsadv_desc'] = 'אם מסומן, אפשרויות גובה ורוחב החלון יוגדרו כאפשרויות מתקדמות בטופס.';
$string['optnoattemptsonly'] = 'רק משתמשים ללא נסיונות';
$string['organization'] = 'רצף־למידה';
$string['organizations'] = 'רצפי־למידה';
$string['othersettings'] = 'הגדרות נוספות';
$string['package'] = 'קובץ דחוס';
$string['package_help'] = 'החבילה היא קובץ ZIP דחוס (או pif) המכילה קבצי הגדרת לומדה מסוג SCORM/AICC';
$string['packagedir'] = 'שגיאה במערכת הקבצים: לא ניתן ליצור ספריית חבילה';
$string['packagefile'] = 'לא צוין קובץ חבילת לומדה';
$string['packagehdr'] = 'חבילת לומדה';
$string['packageurl'] = 'כתובת איטרנט';
$string['packageurl_help'] = 'ניתן לציין כתובת אינטרנט עבור חבילת SCORM, או לבחור קובץ בחלונית בחירת הקבצים.';
$string['page-mod-scorm-x'] = 'עמוד פעילות SCORM כלשהו';
$string['pagesize'] = 'גודל העמוד';
$string['passed'] = 'עבר';
$string['php5'] = 'PHP 5 (סיפרייה מקומית של DOMXML)';
$string['pluginadministration'] = 'ניהול חבילת לומדה';
$string['pluginname'] = 'חבילת SCORM';
$string['popup'] = 'חלון חדש';
$string['popuplaunched'] = 'חבילת SCORM זו נפתחה בחלון קופץ. אם סיימת לצפות במשאב זה, הקליקו כאן כדי לחזור לעמוד הקורס';
$string['popupmenu'] = 'בתפריט הנפתח לרשימה';
$string['popupopen'] = 'תצוגת לומדה בחלון חדש';
$string['popupsblocked'] = 'כנראה שמנגנון חלונות קופצים לא זמין, לפיכך נמנע מ-SCORM לפעול. בדוק את הגדרות הנדפדפן שלך לפני שאתה מנסה שנית.';
$string['position_error'] = 'התג {$a->tag} לא יכול להיות ילדו של {$a->parent} tag';
$string['preferencespage'] = 'העדפות עבור עמוד זה';
$string['preferencesuser'] = 'מאפיני הדוח';
$string['prev'] = 'קודם';
$string['raw'] = 'תוצאה גולמית';
$string['regular'] = 'מניפסט רגיל';
$string['report'] = 'דוח';
$string['reportcountallattempts'] = '{$a->nbattempts} נסיונות מענה של {$a->nbusers} תלמידים, מתוך {$a->nbresults} נסיונות';
$string['reportcountattempts'] = ' {$a->nbresults} תוצאות ({$a->nbusers} משתמשים)';
$string['reports'] = 'דוחות';
$string['response'] = 'מענה';
$string['result'] = 'תוצאה';
$string['results'] = 'תוצאות';
$string['review'] = 'עיון בתשובות';
$string['reviewmode'] = 'מצב עיון בתשובות';
$string['rightanswer'] = 'תשובה נכונה';
$string['scoes'] = 'רכיבי למידה';
$string['score'] = 'תוצאה';
$string['scorm:addinstance'] = 'הוספת חבילת לומדה - SCORM חדשה';
$string['scorm:deleteownresponses'] = 'מחיקת נסיונות המענה שלך';
$string['scorm:deleteresponses'] = 'מחיקת נסיונות SCORM';
$string['scorm:savetrack'] = 'שמירת דוח מעקב';
$string['scorm:skipview'] = 'הסתרת עמוד המבוא של הלומדה';
$string['scorm:viewreport'] = 'צפיה בדוחות';
$string['scorm:viewscores'] = 'צפיה בתוצאות';
$string['scormclose'] = 'זמין עד';
$string['scormcourse'] = 'חבילת למידה';
$string['scormloggingoff'] = 'ניטור API כבוי';
$string['scormloggingon'] = 'ניטור API פעיל';
$string['scormopen'] = 'זמין מ';
$string['scormresponsedeleted'] = 'מחיקת נסיונות משתמש';
$string['scormtype'] = 'סוג';
$string['scormtype_help'] = 'הגדרות אלו קובעות איך תכלל החבילה הקורס. יש 4 אפשרויות:

* חבילה מקומית (מתעדכנת) - מאפשר לחבילת SCORM להבחר באמצעות חיפוש בקבצים.
*  קישור לחבילה חיצונית - מאפשר להגדיר כתובת אינטרנט לחבילה או לקובץ הגדרות: imsmanifest.xml. הערה: אם לכתובת האינטרנט יש שם מתחם השונה מהאתר שלך, אזי "חבילה מקומית" היא בחירה טובה יותר כיוון שאחרת הציונים לא ישמרו.
*  קישור לקובץ imsmanifest.xml חיצוני - מאפשרת לציין כתובת אינטרנט של חבילה. החבילה תועתק מהשרת החיצוני למערכת מוודל זו ותשמר מקומית בקורס. החבילה המקומית תעודכן כאשר חבילת SCORM החיצונית תעודכן.
*  קישור לחבילת AICC חיצונית - מאפשר לחבילה להבחר מתוך מאגר IMS חיצוני.';
$string['scrollbars'] = 'אפשר לגלול את החלון';
$string['selectall'] = 'בחירה כוללת';
$string['selectnone'] = 'ביטול בחירה כוללת';
$string['show'] = 'הצגה';
$string['sided'] = 'לצד התוכן';
$string['skipview'] = 'התלמידים פוסחים על עמוד מבנה התוכן';
$string['skipview_help'] = 'מאפיין זה קובע באם ניתן, אי-פעם, לדלג על עמוד מבנה התוכן (כך שהוא לא יוצג). אם החבילה כוללת רק עצם למידה אחד, ניתן תציד לדלג על עמוד מבנה התוכן .';
$string['skipviewdesc'] = 'מאפיין זה מגדיר את בררת־המחדל האם לדלג על תצוגת מבנה תוכן העמוד';
$string['slashargs'] = 'WARNING: slash arguments is disabled on this site and objects may not function as expected!';
$string['stagesize'] = 'גודל הבמה';
$string['stagesize_help'] = '<p>שתי הגדרות אלו מגדירים את גובה ורוחב חלוןמסגרת אובייקטי הלמידה.</p>';
$string['started'] = 'התחיל ב-';
$string['status'] = 'מצב';
$string['statusbar'] = 'הצגת סרגל המצב';
$string['student_response'] = 'תגובה';
$string['subplugintype_scormreport'] = 'דוח';
$string['subplugintype_scormreport_plural'] = 'דוחות';
$string['suspended'] = 'מושהה';
$string['syntax'] = 'טעות תחבירית';
$string['tag_error'] = 'תג לא ידוע ({$a->tag}) בעל התוכן: {$a->value}';
$string['time'] = 'זמן';
$string['title'] = 'כותרת';
$string['toc'] = 'תוכן ענינים';
$string['too_many_attributes'] = 'לתג {$a->tag} יש יותר מתי תכונות';
$string['too_many_children'] = 'לתג {$a->tag} יש יותר מדי ילדים';
$string['toolbar'] = 'הצגת סרגל הכלים';
$string['totaltime'] = 'זמן';
$string['trackcorrectcount'] = 'ספירה נכונה';
$string['trackcorrectcount_help'] = 'מספר תוצאות נכונות עבור השאלה';
$string['trackid'] = 'מספר זיהוי';
$string['trackingloose'] = 'אזהרה: נתוני דוח המעקב של החבילה הזו יאבדו!';
$string['tracklatency_help'] = 'הזמן שחלף מאז שהאינטראקציה <br />הוצגה ללומד <br />והזמן עד לתגובתו הראשונה';
$string['trackpattern'] = 'דפוס';
$string['trackresponse'] = 'מענה';
$string['trackresponse_help'] = 'זוהי התשובה שלומד זה נתן לשאלה זו';
$string['trackresult'] = 'תוצאה';
$string['trackresult_help'] = 'התוצאה מסתמכת על תגובת הסטודנט ובנוסף <br /> תוצאה נכונה';
$string['trackscoremax'] = 'ניסיון המענה בעל הניקוד מירבי';
$string['trackscoremax_help'] = 'ערך מירבי בטווח עבור ניקוד השורה';
$string['trackscoremin'] = 'ניסיון המענה בעל הניקוד מיזערי';
$string['trackscoremin_help'] = 'ערך מזערי בטווח עבורניקוד השורה';
$string['trackscoreraw'] = 'ציון גולמי';
$string['trackscoreraw_help'] = 'מספר המשפיע על הביצועים של הבודק <br /> יחסי לטוח המוגדר על-ידי ערכי המקסימום והמינימום.';
$string['tracksuspenddata'] = 'השהה נתונים';
$string['tracksuspenddata_help'] = 'מאפשר מרווח־זמן לשמור ולעדכן המידע בין רצפיי־למידה של משתמשים';
$string['tracktime'] = 'זמן';
$string['tracktime_help'] = 'הזמן שנסיון המענה אותחל';
$string['tracktype'] = 'סוג';
$string['tracktype_help'] = 'סוג השאלה, למשל "בחירה" או "תשובה קצרה".';
$string['trackweight'] = 'משקל';
$string['trackweight_help'] = 'המשקל שהוקנה לשאלה כאשר מחושב הניקוד';
$string['type'] = 'סוג';
$string['typeaiccurl'] = 'קישור לחבילת AICC חיצונית';
$string['typeexternal'] = 'קישור לקובץ IMSMANIFEST.XML חיצוני';
$string['typelocal'] = 'חבילה מקומית';
$string['typelocalsync'] = 'חבילה מקומית (מתעדכנת)';
$string['undercontent'] = 'תחת התוכן';
$string['unziperror'] = 'חלה טעות בעת פריסת הקובץ הדחוס';
$string['updatefreq'] = 'תדירות העידכון האוטומטי';
$string['updatefreq_help'] = 'הגדרה זו מאפשרת לחבילת הלומדה החיצונית לרדת בצורה אוטומטית ולהיות מעודכנת';
$string['updatefreqdesc'] = 'מאפיין זה מגדיר את בררת־המחדל של תכיפות העדכון אוטומטי של הלומדה בפעילות';
$string['validateascorm'] = 'בדיקת תקינות חבילת הלומדה';
$string['validation'] = 'תוצאת בדיקת קינות חבילת הלומדה';
$string['validationtype'] = 'קישור זה מגדיר את ספרית ה-DOMXML המשמשת לאימות קובץ ה Manifest המצוי בתוך חבילת ה-SCORM. אם אינך יודע על כך, השאר את המצב הקיים.';
$string['value'] = 'ערך';
$string['versionwarning'] = 'גירסת ה- Manifest ישנה יותר מגרסה 1.3, אזהרה בתג {$a->tag}';
$string['viewallreports'] = 'תצוגת דוחות עבור {$a} ניסיונות מענה';
$string['viewalluserreports'] = 'תצוגת דוחות עבור {$a} משתמשים';
$string['whatgrade'] = 'חישוב ניקוד ניסיונות המענה';
$string['whatgrade_help'] = 'כאשר מאפשרים ניסיונות מרבוים בלומדה, הגדרה זו קובעת איזה ציון ייחשב בגיליון הציונים - הגבוה ביותר, הממוצע, הראשון או האחרון.
בחירת האפשרות של הניסיון האחרון אינה כוללת ניסיונות בסטטוס \'נכשל\'.

הטיפול בניסיונות מרובים

* האפשרות לגשת לניסיון נוסף נקבעת על ידי תיבת הסימון מעל כפתור התחל של עמוד מבנה התכון, אז וודאו שאתם מאפשרים יותר מניסיון אחד.
* קיימות חבילות SCORM שבודקות באופן מושכל ניסיונות חדשים, אך יש גם כאלו שלא. פירושו של דבר הוא שאם הלומד נכנס שוב לניסיון קיים, עם חבילת ה- SCORM לא כוללת לוגיקה למנוע דריסה של ניסיונות קודמים, זה עלול להתרחש, אפילו אם ניסיון קודם הושלם בהצלחה.
* ההגדרות "הכרח השלמה", "הכרח ניסיון חדש" ו"נעל לאחר ניסיון אחרון" מספקות אפשרויות ניהול נוספות לניסיונות מרובים.';
$string['whatgradedesc'] = 'מאפיין זה מגדיר את חישוב הניקוד של ניסיונות המענה בלומדה, כאשר זמינים מספר ניסיונות מענה.';
$string['width'] = 'רוחב';
$string['window'] = 'חלון';
