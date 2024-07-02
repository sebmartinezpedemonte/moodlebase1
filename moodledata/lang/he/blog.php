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
 * Strings for component 'blog', language 'he', version '4.1'.
 *
 * @package     blog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'הוספת ידיעה חדשה';
$string['addnewexternalblog'] = 'רישום לבלוג חיצוני';
$string['assocdescription'] = 'הרשמה לבלוג חיצוני';
$string['associated'] = 'משוייך ל-{$a}';
$string['associatewithcourse'] = 'פרסום ידיעת בלוג המשוייכת לקורס זה {$a->coursename}';
$string['associatewithmodule'] = 'פרסום בלוג אודות {$a->modtype}: {$a->modname}';
$string['association'] = 'ייחוס';
$string['associations'] = 'קורסים מקושרים';
$string['associationunviewable'] = 'ידיעה זו אינה ניתנת לצפייה על-ידי אחרים עד שהקורס יהיה מיוחס לו או ששדה ה-\'פרסם ל\' ישונה';
$string['autotags'] = 'הוספת תגיות אלו';
$string['autotags_help'] = 'הכנס תג אחד או יותר (מופרדים בפסיק) שתרצה להוסיף בצורה אוטומטית לכל ידיעה מועתק בבלוג מבלוג חיצוני לתוך הבלוג המקומי שלך.';
$string['backupblogshelp'] = 'אם מאופשר, בלוגים יכללו בגיבויים האוטומטים של האתר';
$string['blockexternalstitle'] = 'בלוגים חיצוניים';
$string['blog'] = 'בלוג אישי';
$string['blogaboutthis'] = 'הזנת פרסום בלוג אודות {$a->type} זה';
$string['blogaboutthiscourse'] = 'הוספת ידיעה המשוייכת לקורס זה';
$string['blogaboutthismodule'] = 'הוספת פרסום {$a} המשויך לקורס זה';
$string['blogadministration'] = 'ניהול הבלוג';
$string['blogdeleteconfirm'] = 'למחוק רשומת בלוג זו?';
$string['blogdisable'] = 'בלוג לא מאופשר ';
$string['blogentries'] = 'פרסומיי הבלוג';
$string['blogentriesabout'] = 'פרסומיי הבלוג השייכים ל {$a}';
$string['blogentriesbygroupaboutcourse'] = 'פרסומיי הבלוג של חברי הקבוצה: {$a->group} בקורס: {$a->course}';
$string['blogentriesbygroupaboutmodule'] = 'פרסומיי הבלוג של חברי הקבוצה: {$a->group} בפעילות: {$a->mod}';
$string['blogentriesbyuseraboutcourse'] = 'פרסומיי הבלוג של: {$a->user} בקורס: {$a->course}';
$string['blogentriesbyuseraboutmodule'] = 'פרסומיי הבלוג של: {$a->user} בפעילות: {$a->mod}';
$string['blogentrybyuser'] = 'פרסום בלוג מאת {$a}';
$string['blogpreferences'] = 'עדכון העדפות הבלוג';
$string['blogs'] = 'בלוגים אישיים';
$string['blogscourse'] = 'בלוגי קורס';
$string['blogssite'] = 'בלוגים ציבוריים';
$string['blogtags'] = 'תגי בלוגים';
$string['cannotviewcourseblog'] = 'אין לך מספיק הרשאות לצפות בבלוגים בקורס זה';
$string['cannotviewcourseorgroupblog'] = 'אין לך מספיק הרשאות לצפות בבלוגים בקורס/קבוצה זה';
$string['cannotviewsiteblog'] = 'אין לך מספיק הרשאות לצפות בבלוגים בכל האתר';
$string['cannotviewuserblog'] = 'אין לך מספיק הרשאות לקרוא בלוגים של משתמשים';
$string['configexternalblogcrontime'] = 'באיזו תדירות Moodle בודק את הבלוגים החיצוניים עבור ידיעות חדשות.';
$string['configmaxexternalblogsperuser'] = 'מספר הבלוגים החיצוניים שכל משתמש מורשה לשים קישור בבלוג שלהם באתר.';
$string['configuseblogassociations'] = 'מאפשר ייחוס (קישור) בין פרסום בבלוג האישי לרכיב או קורס אליו המשתמש רשום';
$string['configuseexternalblogs'] = 'מאפשר למשתמשים לציין הזנות בלוג חיצוניות. Moodle בודק הזנות אלו ומעתיק ידיעות חדשות לבלוג המקומי של משתמש זה.';
$string['courseblog'] = 'בלוג הקורס: {$a}';
$string['courseblogdisable'] = 'בלוגים של קורס לא מאופשרים';
$string['courseblogs'] = 'משתמשים יכולים לראות את הבלוגים של חבריהם לקורס בלבד';
$string['deleteblogassociations'] = 'מחיקת קישורים לבלוג';
$string['deleteblogassociations_help'] = 'אם מסומן, ידיעות הבלוג לא תיוחסנה עם קורס זה או כל פעילות או משאב של קורס. ידיעות הבלוג עצמן לא תמחקנה.';
$string['deleteentry'] = 'מחיקת רשומה';
$string['deleteexternalblog'] = 'ביטול רישום בלוג חיצוני זה';
$string['deleteotagswarn'] = 'האם להסיר תג זה (תגים אלו) מכל ההודעות שפורסמו בפורום ולהסיר אותו מהמערכת?';
$string['description'] = 'תיאור';
$string['description_help'] = 'הכנס משפט או שניים המסכם את תכני הבלוג החיצוני שלך. (אם לא יסופק תיאור, התיאור שנשמר בבלוג החיצוני שלך יועתק כאן)';
$string['donothaveblog'] = 'בלוג אישי איננו זמין';
$string['editentry'] = 'עריכת ידיעת הבלוג';
$string['editexternalblog'] = 'עריכת בלוג חיצוני';
$string['emptybody'] = 'אסור שגוף רשומת הבלוג יהיה ריק';
$string['emptyrssfeed'] = 'כתובת ה-URL שהכנסת לא מצביעה להזנת RSS תקינה';
$string['emptytitle'] = 'אסור שכותרת רשומת הבלוג תהיה ריקה';
$string['emptyurl'] = 'נדרשת כתובת אינטרנט (URL) להזנת RSS תקינה';
$string['entrybody'] = 'גוף רשומת הבלוג';
$string['entrybodyonlydesc'] = 'תיאור הידיעה';
$string['entryerrornotyours'] = 'ידיעה זו איננה שלך';
$string['entrysaved'] = 'הידיעה שלך נשמרה';
$string['entrytitle'] = 'כותרת הידיעה';
$string['eventblogassociationadded'] = 'הקשר לבלוג חיצוני נוצר';
$string['eventblogentriesviewed'] = 'פרסומיי הבלוג נצפו';
$string['eventblogexternaladded'] = 'בלוג חיצוני רשום';
$string['eventblogexternalremoved'] = 'בלוג חיצוני לא רשום';
$string['eventblogexternalupdated'] = 'הבלוג החיצוני עודכן';
$string['evententryadded'] = 'רשומת הבלוג נוספה';
$string['evententrydeleted'] = 'רשומת הבלוג נמחקה';
$string['evententryupdated'] = 'רשומת הבלוג עודכנה';
$string['eventexternalblogsviewed'] = 'בלוגים חיצוניים רשומים שנצפו';
$string['externalblogcrontime'] = 'תדירות עדכון הבלוג החיצוני';
$string['externalblogdeleteconfirm'] = 'ביטול הרישום של בלוג חיצוני זה?';
$string['externalblogdeleted'] = 'בוטל הרישום של הבלוג החיצוני';
$string['externalblogs'] = 'בלוגים חיצוניים';
$string['feedisinvalid'] = 'הזנה זו אינה תקינה';
$string['feedisvalid'] = 'הזנה זו תקינה';
$string['filterblogsby'] = 'סינון פירסומים לפי...';
$string['filtertags'] = 'תגי מסנן';
$string['filtertags_help'] = 'יש אפשרות להשתמש במנגנון זה לסנן את הידיעות אשר יוצגו. הזנת תגים כאן (מופרדים בפסיק) תיבא ותציג רק ידיעות המכילות תגים אלו, והן יועתקו מהבלוג החיצוני.';
$string['groupblog'] = 'בלוג קבוצתי: {$a}';
$string['groupblogdisable'] = 'בלוג קבוצתי לא מאופשר';
$string['groupblogentries'] = 'פרסומיי בלוג המקושרים ל {$a->coursename} על-ידי הקבוצה {$a->groupname}';
$string['groupblogs'] = 'משתמשים יכולים לראות בלוגים של האנשים הנמצאים באותה קבוצה כמותם בלבד.';
$string['incorrectblogfilter'] = 'סוג מסנן הבלוג שנבחר שגוי';
$string['intro'] = 'הזנת RSS זו נתחוללה אוטומטית על ידי בלוג אחד או יותר.';
$string['invalidgroupid'] = 'מספר זיהוי קבוצה שגוי';
$string['invalidurl'] = 'כתובת URL זו לא ניתנת להשגה';
$string['linktooriginalentry'] = 'קישור לידיעת בלוג מקורי';
$string['maxexternalblogsperuser'] = 'מספר מרבי של בלוגים חיצוניים עבור משתמש';
$string['myprofileuserblogs'] = 'צפיה בכל פרסומי הבלוג';
$string['name'] = 'שם';
$string['name_help'] = 'הכנס שם תיאור עבור הבלוג החיצוני שלך (אם לא ניתן אף שם , הכותרת של הבלוג החיצוני שלך תופיע כאן).';
$string['noentriesyet'] = 'אין כאן ידיעות גלויות';
$string['noguestpost'] = 'אורחים לא יכולים לפרסם בלוגים!';
$string['nopermissionstodeleteentry'] = 'אין לך מספיק הרשאות למחיקת ידיעה בלוג זו';
$string['norighttodeletetag'] = 'אין לך אף זכות למחוק את התג הזה - {$a}';
$string['nosuchentry'] = 'אין ידיעת בלוג כזו';
$string['notallowedtoedit'] = 'ידיעה זו איננה מורשה לעריכה על ידך';
$string['numberofentries'] = 'ידיעות: {$a}';
$string['numberoftags'] = 'מספר התגים להצגה';
$string['page-blog-edit'] = 'עמודי עריכת בלוג';
$string['page-blog-index'] = 'עמודיי פרסומיי הבלוג';
$string['page-blog-x'] = 'כל עמודי הבלוג';
$string['pagesize'] = 'מספר ידיעות הבלוגים שיופיעו בכל עמוד';
$string['permalink'] = 'קישור קבע';
$string['personalblogs'] = 'משתמשים יכולים לראות את הבלוג האישי שלהם בלבד';
$string['preferences'] = 'העדפות בלוג';
$string['publishto'] = 'הרשאות צפיה';
$string['publishto_help'] = '<p align="center"><b>פרסם ל</b></p>

<p>יש כאן שלוש הגדרות אפשריות
</p>

<p><b>עצמכם (טיוטא)</b> - רק אתם וההנהלה יכולים לראות את הידיעה הזו.
</p>

<p><b>כל אחד שרשום לאתר הזה</b> - כל מי שרשום לאתר הזה יכול לקרוא את הידיעה הזו.
</p>

<p><b>כל אחד בעולם</b> - כולם, כולל אורחים, יכולים לקרוא את הידיעה הזו.
</p>';
$string['publishtocourse'] = 'פרסום זה זמין ל"משתתפי הקורס"';
$string['publishtocourseassoc'] = 'חברים בקורס המקושר';
$string['publishtocourseassocparam'] = 'משתמשים של {$a}';
$string['publishtogroup'] = 'פרסום זה זמין ל"חברי הקבוצה"';
$string['publishtogroupassoc'] = 'חברי הקבוצה שלך בקורס המקושר';
$string['publishtogroupassocparam'] = 'חברי הקבוצה שלך ב {$a}';
$string['publishtonoone'] = 'פרסום זה זמין ל"עצמך בלבד"';
$string['publishtosite'] = 'פרסום זה זמין ל"כל משתמש מזוהה"';
$string['publishtoworld'] = 'פרסום זה זמין ל"אורחים"';
$string['readfirst'] = 'ראשית, יש לקרוא זאת';
$string['relatedblogentries'] = 'ידיעות בלוג קשורות';
$string['retrievedfrom'] = 'חזר מ';
$string['rssfeed'] = 'הזנות RSS של הבלוג';
$string['searchterm'] = 'חיפוש: {$a}';
$string['settingsupdatederror'] = 'חלה שגיאה, לא ניתן היה לעדכן את הגדרת קביעת ההעדפה של הבלוג.';
$string['siteblogdisable'] = 'מנגנון בלוג־ציבורי לא זמין';
$string['siteblogheading'] = 'בלוג אישי (מערכתי)';
$string['siteblogs'] = 'כל משתמשי המערכת יכולים לראות את כל פרסומי הבלוג';
$string['tagdatelastused'] = 'התאריך האחרון שבו נעשה שימוש בתג';
$string['tagparam'] = 'תגים: {$a}';
$string['tags'] = 'תגים';
$string['tagsort'] = 'מיין את תצוגת התגים לפי';
$string['tagtext'] = 'טקסט (תמליל) התג';
$string['timefetched'] = 'זמן סנכרון אחרון';
$string['timewithin'] = 'הצגת התגים שנעשה בהם שימוש בטווח זה של ימים';
$string['updateentrywithid'] = 'מעדכן את הידיעה';
$string['url'] = 'קישור של הזנת RSS';
$string['url_help'] = 'הכנס כתובת הזנת RSS עבור הבלוג החיצוני שלך';
$string['useblogassociations'] = 'אפשר קישוריי בלוג חיצוניים';
$string['useexternalblogs'] = 'אפשר בלוגים חיצוניים';
$string['userblog'] = 'בלוג משתמש: {$a}';
$string['userblogentries'] = 'פרסומיי בלוג של {$a}';
$string['valid'] = 'תָקֵף';
$string['viewallblogentries'] = 'כל הפרסומים של {$a}';
$string['viewallmodentries'] = 'צפיה בכל הידיעות על {$a->type} זה';
$string['viewallmyentries'] = 'תצוגת כל הידיעות';
$string['viewblogentries'] = 'פרסומיי בלוג מסוג {$a->type}';
$string['viewblogsfor'] = 'צפיה בכל פרסומיי הבלוג ל...';
$string['viewcourseblogs'] = 'תצוגת פרסומיי בלוגים המשויכים לקורס זה';
$string['viewentriesbyuseraboutcourse'] = 'צפיה בפרסומי בלוג אודות הקורס מאת {$a}';
$string['viewgroupblogs'] = 'צפיה בפרסומיי בלוג עבור קבוצה...';
$string['viewgroupentries'] = 'ידיעות בלוג הקבוצה';
$string['viewmodblogs'] = 'צפיה בפרסומיי בלוג עבור פעילויות...';
$string['viewmodentries'] = 'ידיעות בלוג הרכיבים';
$string['viewmyentries'] = 'ראה את הידיעות שלי';
$string['viewmyentriesaboutcourse'] = 'ידיעות הבלוג שלי המשויכות לקורס זה';
$string['viewmyentriesaboutmodule'] = 'צפיה בידיעות בלוג עבור {$a} זה';
$string['viewsiteentries'] = 'תצוגת כל הפרסומים';
$string['viewuserentries'] = 'צפיה בכל ידיעות הבלוג השייכות ל {$a}';
$string['worldblogs'] = 'משתמשים אשר אינם רשומים ומזוהים במערכת זו יוכלו לקרוא את הפרסומים שהוגדרו כ\'נגישים לעולם\'.';
$string['wrongexternalid'] = 'מזהה בלוג חיצוני שגוי';
$string['wrongpostid'] = 'מספר זהות הפרסום של הבלוג שגוי';
