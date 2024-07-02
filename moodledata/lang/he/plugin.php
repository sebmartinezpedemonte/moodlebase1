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
 * Strings for component 'plugin', language 'he', version '4.1'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'פעולות';
$string['availability'] = 'זמינות';
$string['cancelinstallall'] = 'ביטול התקנות חדשות ({$a})';
$string['cancelinstallhead'] = 'מבטל התקנות של רכיבים';
$string['cancelinstallinfodir'] = 'התיקייה שתימחק: {$a}';
$string['cancelinstallone'] = 'ביטול התקנה זו';
$string['cancelupgradeall'] = 'ביטול שדרוגים  ({$a})';
$string['cancelupgradehead'] = 'משחזר גרסה קודמת של רכיבים';
$string['cancelupgradeone'] = 'ביטול שדרוג זה';
$string['checkforupdates'] = 'בדיקת עדכונים';
$string['checkforupdateslast'] = 'בדיקה אחרונה נעשתה ב: {$a}';
$string['dependencyavailable'] = 'זמין';
$string['dependencyfails'] = 'נכשל';
$string['dependencyinstall'] = 'התקנה';
$string['dependencyinstallhead'] = 'מתקין תוספים נדרשים';
$string['dependencyinstallmissing'] = 'יש להתקין תוספים נדרשים ({$a})';
$string['dependencymissing'] = 'חסר';
$string['dependencyunavailable'] = 'לא זמין';
$string['dependencyupload'] = 'העלאה';
$string['dependencyuploadmissing'] = 'העלאת קבצי ZIP';
$string['detectedmisplacedplugin'] = 'התוסף "{$a->component}" מותקן במיקום לא נכון "{$a->current}", המיקום הנכון אמור להיות "{$a->expected}"';
$string['displayname'] = 'שם התוסף';
$string['err_response_curl'] = 'לא ניתן לעדכן נתוני עדכונים - שגיאת cURL לא צפויה.
(נסו להגדיר proxy או בדקו הרשאות חומת-אש ברמת מערכת הפעלה)';
$string['err_response_format_version'] = 'גרסה לא תקינה של תסדיר נתוני העדכון. אנא נסו לבדוק שנית האם יש עדכונים זמינים.';
$string['err_response_http_code'] = 'לא ניתן לעדכן נתוני עדכונים זמינים - קוד מענה HTTP לא צפוי.';
$string['filterall'] = 'הצגת הכל';
$string['filtercontribonly'] = 'הצגת תוספי צד שלישי בלבד';
$string['filterupdatesonly'] = 'הצג רכיבים ברי עדכון בלבד';
$string['isenabled'] = 'האם מאופשר?';
$string['misdepinfoplugin'] = 'מידע על הרכיב';
$string['misdepinfoversion'] = 'מידע על הגרסה';
$string['misdepsavail'] = 'חבילות נדרשות זמינות';
$string['misdepsunavail'] = 'חבילות נדרשות שאינן זמינות';
$string['moodleversion'] = 'גרסת מוודל {$a}';
$string['noneinstalled'] = 'לא נמצאו תוספים מותקנים עבור סוג זה';
$string['notdownloadable'] = 'לא ניתן להוריד את חבילת התוסף';
$string['notdownloadable_help'] = 'קובץ עדכון (בתסדיר zip) לא ניתן להורדה באופן אוטומטי. אנא עיינו בעמוד התיעוד לעזרה נוספת.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'הערות';
$string['notwritable'] = 'קבצי התוסף לא ניתנים לכתיבה';
$string['notwritable_help'] = 'הפעלתם התקנת עדכונים אוטומטית וקיים עדכון זמין לתוסף זה. אולם קבצי התוסף לא ניתנים לכתיבה על ידי שרת הרשת ולכן לא ניתן להתקין את העדכון באופן אוטומטי.

עליכם לאפשר כתיבה לתיקיית התוספים וכל התוכן שלה על מנת שניתן יהיה להתקין עדכון אוטומטי.';
$string['otherplugin'] = '';
$string['otherpluginversion'] = '';
$string['overviewall'] = 'כל הרכיבים';
$string['overviewext'] = 'רכיבים נוספים';
$string['overviewupdatable'] = 'עדכונים זמינים';
$string['packagesdebug'] = 'מצב דיווח שגיאות פעיל';
$string['packagesdownloading'] = 'מוריד {$a}';
$string['packagesextracting'] = 'מחלץ {$a}';
$string['packagesvalidating'] = 'בודק תקינות של {$a}';
$string['packagesvalidatingfailed'] = 'ההתקנה בוטלה מאחר וחבילת התוסף לא תקינה';
$string['packagesvalidatingok'] = 'בדיקת תקינות חבילת התוסף הסתיימה בהצלחה, כעת ניתן להמשיך בתהליך ההתקנה';
$string['plugincheckall'] = 'כל הרכיבים';
$string['plugincheckattention'] = 'תוספים הדורשים התייחסות';
$string['pluginchecknone'] = 'לא נמצאו תוספים אשר דורשים התייחסות מיוחדת בשלב זה';
$string['pluginchecknotice'] = 'עמוד זה מציג את הרכיבים שעשויים להשב את תשומת ליבכם במהלך השדרוג, כמו רכיבים חדשים להתקנה, רכיבים שניתן לשדרג , רכיבבים חסרים וכד\'. רכיבים נוספים יוצגו אם ישנה גרסה חדשה זמינה להתקנה. כדאי לבדוק אם ישנם גרסאות זמינות חדשות יותר ולעדכן את קוד המקור שלהם לפני שממשיכים אם השדרוג ה-Moodle בעמוד זה.';
$string['plugindisable'] = 'כיבוי';
$string['plugindisabled'] = 'כבוי';
$string['pluginenable'] = 'אפשר';
$string['pluginenabled'] = 'מאופשר';
$string['release'] = 'שחרור';
$string['requiredby'] = 'נדרש על-ידי: {$a}';
$string['requires'] = 'נדרש';
$string['rootdir'] = 'ספרייה';
$string['settings'] = 'הגדרות';
$string['source'] = 'מקור';
$string['sourceext'] = 'תוסף';
$string['sourcestd'] = 'ליבה';
$string['status'] = 'מצב';
$string['status_delete'] = 'ימחק';
$string['status_downgrade'] = 'גרסה גבוהה יותר כבר מותקנת!';
$string['status_missing'] = 'חסר מהדיסק';
$string['status_new'] = 'יותקן';
$string['status_nodb'] = 'ללא מסד נתונים';
$string['status_upgrade'] = 'ישודרג';
$string['status_uptodate'] = 'מותקן';
$string['supportedconversions'] = 'ממירי מסמכים נתמכים';
$string['supportedmoodleversions'] = 'גרסאות מוודל נתמכות';
$string['systemname'] = 'מזהה';
$string['type_antivirus'] = 'תוסף אנטי־וירוס';
$string['type_antivirus_plural'] = 'תוספי אנטי־וירוס';
$string['type_auth'] = 'שיטת אימות';
$string['type_auth_plural'] = 'שיטות ניהול הזדהות למערכת';
$string['type_availability'] = 'הגבלה זמינה';
$string['type_availability_plural'] = 'הגבלות זמינות';
$string['type_block'] = 'משבצת';
$string['type_block_plural'] = 'משבצות (בלוקים)';
$string['type_cachelock'] = 'כלי ניהול נעילת מטמוני שרת';
$string['type_cachelock_plural'] = 'כלים לניהול נעילת מטמוני שרת';
$string['type_cachestore'] = 'מטמון שרת';
$string['type_cachestore_plural'] = 'מטמוני שרת';
$string['type_calendartype'] = 'סוג לוח-שנה';
$string['type_calendartype_plural'] = 'סוגי לוח-שנה';
$string['type_coursereport'] = 'דוח הקורס';
$string['type_coursereport_plural'] = 'דוח הקורס';
$string['type_customfield_plural'] = 'שדות מידע מותאמים';
$string['type_dataformat'] = 'תסדיר יצוא נתונים';
$string['type_dataformat_plural'] = 'תסדירי יצוא נתונים';
$string['type_editor'] = 'עורך';
$string['type_editor_plural'] = 'עורכים';
$string['type_enrol'] = 'שיטת רישום';
$string['type_enrol_plural'] = 'שיטות רישום';
$string['type_fileconverter'] = 'המרת מסמכים';
$string['type_fileconverter_plural'] = 'ממירי מסמכים';
$string['type_fileconvertermanage'] = 'ניהול המרת מסמכים';
$string['type_filter'] = 'מסנן';
$string['type_filter_plural'] = 'מסננים';
$string['type_format'] = 'תצורת תוכן הקורס';
$string['type_format_plural'] = 'תצורות תצוגת תוכן הקורס';
$string['type_gradeexport'] = 'שיטת יצוא ציון';
$string['type_gradeexport_plural'] = 'שיטות יצוא ציון';
$string['type_gradeimport'] = 'שיטת יבוא ציון';
$string['type_gradeimport_plural'] = 'שיטות יבוא ציון';
$string['type_gradereport'] = 'דוח גליון ציונים';
$string['type_gradereport_plural'] = 'דוחות גליון הציונים';
$string['type_gradingform'] = 'שיטת מתן ציון מתקדמת';
$string['type_gradingform_plural'] = 'שיטות מתן ציון מתקדמות בעזרת מחוונים';
$string['type_local'] = 'תוסף מקומי';
$string['type_local_plural'] = 'תוספים מקומיים';
$string['type_media'] = 'נגן מולטימדיה';
$string['type_media_plural'] = 'נגני מולטימדיה';
$string['type_message'] = 'פלט הודעות מערכת';
$string['type_message_plural'] = 'פלטי הודעות מערכת';
$string['type_mnetservice'] = 'MNet service';
$string['type_mnetservice_plural'] = 'MNet services';
$string['type_mod'] = 'רכיב פעילות';
$string['type_mod_plural'] = 'רכיבי פעיליות';
$string['type_plagiarism'] = 'תוסף מניעת גנבה סיפרותית';
$string['type_plagiarism_plural'] = 'תוספי מניעת גניבה ספרותית';
$string['type_portfolio'] = 'תיק עבודות';
$string['type_portfolio_plural'] = 'תיקי עבודות';
$string['type_profilefield'] = 'סוג שדה פרופיל';
$string['type_profilefield_plural'] = 'סוגי שדות פרופיל';
$string['type_qbehaviour'] = 'התנהגות שאלה';
$string['type_qbehaviour_plural'] = 'התנהגויות שאלה';
$string['type_qformat'] = 'תסדיר יצוא/יבוא של שאלה';
$string['type_qformat_plural'] = 'תסדירי יצוא/יבוא של שאלה';
$string['type_qtype'] = 'סוג השאלה';
$string['type_qtype_plural'] = 'שאלות';
$string['type_report'] = 'דוח האתר';
$string['type_report_plural'] = 'דוחות';
$string['type_repository'] = 'מאגר';
$string['type_repository_plural'] = 'מאגרים';
$string['type_search'] = 'מנוע חיפוש';
$string['type_search_plural'] = 'מנועי חיפוש';
$string['type_theme'] = 'ערכת נושא';
$string['type_theme_plural'] = 'ערכות נושא';
$string['type_tool'] = 'כלי לניהול';
$string['type_tool_plural'] = 'כלים לניהול';
$string['type_webservice'] = 'פרוטוקול של Webservice';
$string['type_webservice_plural'] = 'פרוטוקולים של Webservice';
$string['uninstall'] = 'הסרה';
$string['uninstallconfirm'] = 'אתם עומדים להסיר את התקנת התוסף <em>{$a->name}</em>. פעולה זו תמחק לחלוטין את כל המידע בבסיס הנתונים הקשור לתוסף זה, לרבות ההגדרות שלו, הרשומות שלו, קבצי משתמש המנוהלים על ידי התוסף וכדומה. אין דרך חזרה ו-Moodle עצמה אינה יוצרת גיבוי לשחזור. האם אתם בטוחים שברצונכם להמשיך?';
$string['uninstalldelete'] = 'כל המידע אשר משוייך לתוסף <em>{$a->name}</em> נמחק ממסד הנתונים. אך למערכת Moodle אין הרשאה למחוק את התיקיה של הרכיב ממערכת ההפעלה.  בכדי למנוע מהתוסף להתקין עצמו מחדש, יש למחוק את התיקיה <em>{$a->rootdir}</em> של התוסף ישירות מהשרת.';
$string['uninstalldeleteconfirm'] = 'כל המידע אשר משוייך לתוסף <em>{$a->name}</em> נמחק ממסד הנתונים.  בכדי למנוע מהתוסף להתקין עצמו מחדש, יש למחוק את התיקיה <em>{$a->rootdir}</em> של התוסף ישירות מהשרת.

האם להסיר את התיקיה של הרכיב מהשרת?';
$string['uninstallextraconfirmblock'] = 'יש {$a->instances} מופעים של משבצת זו.';
$string['uninstallextraconfirmenrol'] = 'יש {$a->enrolments} הרשמות משתמשים.';
$string['uninstallextraconfirmmod'] = 'יש {$a->instances} מופעים של פעילות זו במסגרת {$a->courses} קורסים.';
$string['uninstalling'] = 'הסרת {$a->name}';
$string['updateavailable'] = 'ישנה גרסה {$a}  זמינה חדשה!';
$string['updateavailable_moreinfo'] = 'מידע נוסף...';
$string['updateavailable_release'] = 'גרסה {$a}';
$string['updatepluginconfirm'] = 'אימות עדכון התוסף';
$string['updatepluginconfirminfo'] = 'אתם עומדים להתקין גרסה חדשה של התוסף <strong>{$a->name}</strong>. קובץ zip עם גרסה {$a->version} של התוסף יורד מהקישור <a href="{$a->url}">{$a->url}</a> וייפתח בהתקנת Moodle שלכם על מנת שניתן יהיה לשדרג את ההתקנה.';
$string['validationmsg_componentmatch'] = 'שם מלא של הרכיב';
$string['validationmsg_componentmismatchname'] = 'חוסר התאמה בשם התוסף';
$string['validationmsg_componentmismatchtype'] = 'חוסר התאמה בסוג התוסף';
$string['validationmsg_filesnumber'] = 'לא נמצאו כל הקבצים הנדרשים בחבילת התוסף';
$string['validationmsg_filestatus'] = 'לא ניתן לחלץ את כל הקבצים מחבילת התוסף';
$string['validationmsg_foundlangfile'] = 'קובץ שפה נמצא';
$string['validationmsg_maturity'] = 'רמת מוכנות של הרכיב';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missinglangenfile'] = 'לא נמצא קובץ שפה אנגלית';
$string['validationmsg_missingversion'] = 'התוסף אינו מגדיר את הגרסה שלו';
$string['validationmsg_pathwritable'] = 'בדיקת גישת כתיבה';
$string['validationmsg_pluginversion'] = 'גרסת תוסף';
$string['validationmsg_requiresmoodle'] = 'גרסת Moodle נדרשת';
$string['validationmsg_rootdir'] = 'שם התוסף שעומד להיות מותקן';
$string['validationmsg_unknowntype'] = 'סוג תוסף לא מוכר';
$string['validationmsglevel_debug'] = 'דיווח שגיאות';
$string['validationmsglevel_error'] = 'שגיאה';
$string['validationmsglevel_info'] = 'תקין';
$string['validationmsglevel_warning'] = 'אזהרה';
$string['version'] = 'גרסה';
$string['versiondb'] = 'הגרסה הנוכחית';
$string['versiondisk'] = 'גרסה חדשה';
