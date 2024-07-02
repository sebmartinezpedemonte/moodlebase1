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
 * Strings for component 'portfolio', language 'he', version '4.1'.
 *
 * @package     portfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'פתירת יצוא פעיל';
$string['activeportfolios'] = 'תיקי־עבודות זמינים';
$string['addalltoportfolio'] = 'יצוא הכל לתיק־עבודות';
$string['addnewportfolio'] = 'הוספת תיק־עבודות חדש';
$string['addtoportfolio'] = 'יצוא לתיק־עבודות';
$string['alreadyalt'] = 'תהליך היצוא פועל כעת - אנא הקליקו כאן לפתירת העברה זו';
$string['alreadyexporting'] = 'כבר קיים לך יצוא תיק עבודות פעיל במושב זה. לפי שתמשיך , עליך להשלים יצוא זה או לבטל אותו. האם תרצה להמשיך? (לא, פרושו לבטל זאת)';
$string['availableformats'] = 'תסדירי יצוא זמינים';
$string['callbackclassinvalid'] = 'מחלקת ה-Callback לא תקפה או שאיננה חלק מאיררכיית portfolio_caller';
$string['callercouldnotpackage'] = 'נכשל בנסיון לארוז את המידע שלך עבור יצוא: הודעה מקורית הייתה {$a}';
$string['cannotsetvisible'] = 'לא ניתן להגדיר זאת לגלוי- התוסף כלל לא מאופשר באתר ';
$string['commonportfoliosettings'] = 'הגדרות של תיק־עבודות';
$string['configexport'] = 'הגדרת מידע ליצוא';
$string['configplugin'] = 'הגדרת תוסף תיק־עבודות';
$string['configure'] = 'מאפיינים';
$string['confirmcancel'] = 'האם לבטל את היצוא?';
$string['confirmexport'] = 'אנא אשר את יצוא זה';
$string['confirmsummary'] = 'סיכום היצוא שלך';
$string['continuetoportfolio'] = 'תצוגת תיק־עבודות שלך';
$string['deleteportfolio'] = 'מחיקת מופע תיק־עבודות';
$string['destination'] = 'יעד';
$string['disabled'] = 'לצערנו יצוא תיקי עבודות לא מאופשר באתר זה';
$string['disabledinstance'] = 'אל תאפשר';
$string['displayarea'] = 'יצוא אזור';
$string['displayexpiry'] = 'זמן פקיעת העברה';
$string['displayinfo'] = 'יצוא מידע';
$string['dontwait'] = 'אל תחכה';
$string['enabled'] = 'הפעלת מנגנון תיק־עבודות';
$string['enableddesc'] = 'אם מאופשר, משתמשים יכולים לייצא תוכן, כמו פרסומי פורום, הגשות המטלות ותיקי עבודות חיצוניים או דפי HTML.';
$string['err_uniquename'] = 'שם תיק־העבודות חייב להיות ייחודי (לכל תוסף)';
$string['exportalreadyfinished'] = 'יצוא תיק־העבודות הושלם!';
$string['exportalreadyfinisheddesc'] = 'יצוא תיק־העבודות הושלם!';
$string['exportcomplete'] = 'יצוא תיק־העבודות הושלם!';
$string['exportedpreviously'] = 'יצואים קודמים';
$string['exportexceptionnoexporter'] = 'portfolio_export_exception נזרק עם מושב פעיל אך ללא
exporter object';
$string['exportexpired'] = 'פג־תוקף תיק־עבודות אשר יוצא';
$string['exportexpireddesc'] = 'ניסית לחזור על פעולת היצוא של מידע מסויים, או להתחיל יצוא ריק. בכדי לבצע זאת בצורה נכונה תצטרך חזור אחורה למיקום המקורי  ולהתחיל מחדש.
הדבר קורה אם לחצת על קישור ה"חזרה" לאחר שהיצוא הושלם, או על-ידי מתן קישור זה כמועדף וכניסה אליו.';
$string['exporting'] = 'יצוא לתיק־עבודות';
$string['exportingcontentfrom'] = 'יצוא תוכן מ {$a}';
$string['exportingcontentto'] = 'יצוא תוכן ל {$a}';
$string['exportqueued'] = 'בקשת יצוא תיק־עבודות נכנס לתור הביצוע, בהצלחה';
$string['exportqueuedforced'] = 'בקשת יצוא תיק־עבודות נכנס לתור הביצוע, בהצלחה (מערכת תיק־עבודות חיצונית מאלצת שימוש במנגנון ביצוע פעולות מבוסס תור)';
$string['failedtopackage'] = 'לא ניתן היה למצוא קבצים לארוז';
$string['failedtosendpackage'] = 'נכשל בנסיון לשליחת המידע למערכת תיק־העבודות שנבחרה: שגיאה מקורית הייתה {$a}';
$string['filedenied'] = 'הגישה נדחתה לקובץ זה';
$string['filenotfound'] = 'הקובץ לא נמצא';
$string['fileoutputnotsupported'] = 'פלט הקובץ שנכתב מחדש  לא נתמך בתסדיר זה';
$string['format_document'] = 'קובץ מסוג Document';
$string['format_file'] = 'קובץ';
$string['format_image'] = 'תמונה';
$string['format_leap2a'] = 'תיק־העבודות בתסדיר Leap2A';
$string['format_mbkp'] = 'תסדיר גיבוי Moodle';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'מצגת';
$string['format_richhtml'] = 'HTML עם צירוף קבצים';
$string['format_spreadsheet'] = 'גליון אלקטרוני';
$string['format_text'] = 'קובץ טקסט פשוט (CSV)';
$string['format_video'] = 'סרט';
$string['highdbsizethreshold'] = 'תעבורה גבוה של dbsize';
$string['highdbsizethresholddesc'] = 'מספר רשומות ה-db אשר מעליו יחשבו לקחת כמות גבוהה של זמן תעבודה';
$string['highfilesizethreshold'] = 'גודל קובץ תעבורה גבוה';
$string['highfilesizethresholddesc'] = 'גודל קובץ מעל המוגדר כאן יחשב בכמות גבוהה של זמן תעבורה';
$string['insanesubject'] = 'מספר רכיבי תיק־עבודות עברו למצב "לא זמין" באופן  אוטומטי';
$string['instancedeleted'] = 'תיק־העבודות נמחק בהצלחה';
$string['instanceismisconfigured'] = 'רכיב תיק־העבודות לא הוגדר כהלכה, ולכן לא נעשה בו שימוש. השגיאה הייתה : {$a}';
$string['instancenotdelete'] = 'תקלת מערכת. לא ניתן למחוק את תיק־העבודות';
$string['instancenotsaved'] = 'תקלת מערכת. לא ניתן לשמור את תיק־העבודות';
$string['instancesaved'] = 'תיק־העבודות נשמר בהצלחה';
$string['invalidaddformat'] = 'הועבר תסדיר לא תקין ל-
portfolio_add_button
({$a}) חייב להיות אחד מ-
PORTFOLIO_ADD_XXX';
$string['invalidbuttonproperty'] = 'לא ניתן היה למצוא את מאפיין
({$a})
של
portfolio_button';
$string['invalidconfigproperty'] = 'לא ניתן למצוא את מאפיין ההגדרה ({$a->property} מ- {$a->class})
';
$string['invalidexportproperty'] = 'לא ניתן למצוא את מאפיין הגדרת היצוא
({$a->property} מ- {$a->class})
';
$string['invalidfileareaargs'] = 'ערך משתנה של הקובץ לא תקין הועבר ל
set_file_and_format_data
חובה להכיל contextid
component, filearea ו- itemid';
$string['invalidformat'] = 'מישהו מייצא תסדיר שאינו תקף , {$a}';
$string['invalidinstance'] = 'לא ניתן למצוא את רכיב תיק־עבודות זה';
$string['invalidpreparepackagefile'] = 'קריאה שגויה ל- prepare_package_file-
קובץ או קבצים רבים מוכרחים להיות מוגדרים';
$string['invalidproperty'] = 'לא ניתן היה למצוא זאת בהלכה
({$a->property} of {$a->class})';
$string['invalidsha1file'] = 'שגיאה בקריאה ל- get_sha1_file -
קובץ או קבצים רבים מוכרחים להיות מוגדרים';
$string['invalidtempid'] = 'id היצוא לא תקף. יתכן כי פג תוקפו';
$string['invaliduserproperty'] = 'לא ניתן למצוא מאפיין הגדרת המשתמש
({$a->property} מ- {$a->class})';
$string['leap2a_emptyselection'] = 'ערכים הנדרשים כאן לא נבחרו';
$string['leap2a_entryalreadyexists'] = 'ניסית להוסיף ערך Leap2A
עם ID ({$a}) אשר קיים כבר בהזנה זו.';
$string['leap2a_feedtitle'] = 'יצוא Leap2A  מ-Moodle עבור
{$a}';
$string['leap2a_filecontent'] = 'מנסה להגדיר את התוכן של ערך ה-Leap2A  לקובץ,
מאשר להשתמש ב-subclass של הקובץ.';
$string['leap2a_invalidentryfield'] = 'ניסית להגדיר שדה מערך אשר לא קיים ({$a}) או שאינו ניתן להגדרה ישירות.';
$string['leap2a_invalidentryid'] = 'ניסית לגשת לערך על-ידי id אשר לא היה קיים
({$a})
';
$string['leap2a_missingfield'] = 'נדרש שדה ערך Leap2A
חסר {$a}';
$string['leap2a_nonexistantlink'] = 'ערך Leap2A
({$a->from}) מנסה לקשר ערך אשר לא קיים
({$a->to}) with rel {$a->rel}';
$string['leap2a_overwritingselection'] = 'כתיבה מחדש של סוג המקור של ערך ({$a}) לבחירה ב
make_selection
';
$string['leap2a_selflink'] = 'ערך Leap2A ({$a->id})
ניסה לקשר לעצמו עם
rel {$a->rel}';
$string['logs'] = 'דוח מעקב-תעבורה';
$string['logsummary'] = 'תעבורות מוצלחות קודמות';
$string['manageportfolios'] = 'ניהול תיקי־עבודות';
$string['manageyourportfolios'] = 'ניהול תיקי־העבודות שלך';
$string['mimecheckfail'] = 'תוסף תיק־העבודות {$a->plugin}
לא תומך ב mimetype {$a->mimetype}
הזה';
$string['missingcallbackarg'] = 'חסר
callback argument
{$a->arg} עבור מחלקה {$a->class}';
$string['moderatedbsizethreshold'] = 'צמצום תעבורת dbsize';
$string['moderatedbsizethresholddesc'] = 'מספר רשומות מסד הנתונים אשר מעליו עדיף לצמצם את כמות זמן התעבורה
time to transfer';
$string['moderatefilesizethreshold'] = 'צמצום גודל הקובץ לתעבורה
filesize';
$string['moderatefilesizethresholddesc'] = 'גודל הקובץ הגדול מ-threshold  זה יחושב לצמצם את כמות תעבורת הזמן';
$string['multipleinstancesdisallowed'] = 'מנסה ליצור מופע נוסף של תוסף אשר לא איפשר מופעים מרובים
({$a})';
$string['mustsetcallbackoptions'] = 'עליך להגדיר את אפשרויות callback  אפילו ב
portfolio_add_button
בבנייה או שימוש במתודה
set_callback_options ';
$string['noavailableplugins'] = 'לא נמצאו עבורך תיקי־עבודות ליצוא';
$string['nocallbackclass'] = 'לא ניתן היה למצוא את  מחלקת callback
עבור שימוש ב-({$a})';
$string['nocallbackcomponent'] = 'לא ניתן היה למצוא את רכיב מסויים זה {$a}.';
$string['nocallbackfile'] = 'משהו השתבש בתוסף שהינך מנסה לייצא - לא ניתן למצוא את הקובץ המבוקש ({$a})';
$string['noclassbeforeformats'] = 'עליך להגדיר מחלקת  callback
לפני הקריאה ל- set_formats
ב- portfolio_button';
$string['nocommonformats'] = 'תסדירים לא נפוצים בין כל תוסף של תיק־עבודות זמין ומיקום הקריאה {$a->location} (caller supported {$a->formats})';
$string['noinstanceyet'] = 'לא נבחר עדיין';
$string['nologs'] = 'אין דוחות מעקב להצגה!';
$string['nomultipleexports'] = 'שגיאת מערכת, יעד התיק־העבודות ({$a->plugin})  לא תומך ביצוא מרובה באותו זמן, אנא <a href="{$a->link}">יש לסיים את היצוא הראשון קודם לכן</a> ואז לנסות שנית';
$string['nonprimative'] = 'הוכנס ערך לא פשוט כ callback  למשתנה portfolio_add_button.
לא ניתן להמשיך. המפתח היה {$a->key} והערך הוא {$a->value}';
$string['nopermissions'] = 'לצערנו, אין לך הרשאות מתאימות לייצא את הקבצים מאזור זה';
$string['notexportable'] = 'לצערנו, סוג הקבצים אשר אותו אתה מנסה לייצא לא ניתן ליצוא.';
$string['notimplemented'] = 'הינך מנסה לייצא תוכן בתסדיר שאיננו ידוע או לא מיושם עדיין ({$a})';
$string['notyetselected'] = 'לא נבחר עדיין';
$string['notyours'] = 'הינך מנסה להמשיך תהליך של יצוא תיק־עבודות אשר אינו שייך לך!';
$string['nouploaddirectory'] = 'לא ניתן ליצור ספריה זמנית בכדי ליצור חבילה לנתונים שלך לתוך';
$string['off'] = 'זמין אך מוסתר';
$string['on'] = 'זמין ופעיל';
$string['plugin'] = 'תוסף תיק־עבודות';
$string['plugincouldnotpackage'] = 'נכשל בנסיון ליצור חבילה לנתונים שלך עבור יצוא: שגיאה מקורית  כאן: {$a}';
$string['pluginismisconfigured'] = 'תוסף תיק־העבודות לא מוגדר כהלכה. ממשיך הלאה. (שגיאה ב-{$a})';
$string['portfolio'] = 'תיק־עבודות';
$string['portfolios'] = 'תיקי־עבודות';
$string['queuesummary'] = 'העברות שנמצאות בתור כרגע';
$string['returntowhereyouwere'] = 'חזרה לעמוד הקודם';
$string['save'] = 'שמירה';
$string['selectedformat'] = 'תסדיר יצוא נבחר';
$string['selectedwait'] = 'נבחרו להמתנה?';
$string['selectplugin'] = 'בחירת יעד';
$string['showhide'] = 'הסתר / הצג';
$string['singleinstancenomultiallowed'] = 'רק רכיב אחד של תוסף תיק־עבודות זמין. הרכיב איננו תומך ביצוא מרובה, יכול להיות רק יצוא פעיל אחד עבור משתמש בתוסף זה!';
$string['somepluginsdisabled'] = 'מספר תוספים של תיקי־עבודות לא אופשרו מפני שהם לא מוגדרים בצורה תקינה או שהם תלויים ברכיבים אחרים כמו:';
$string['sure'] = 'האם אהינך בטוח כי ברצונך למחוק את \'{$a}\'? לא ניתן לחזור אחורה לאחר מכן.';
$string['transfertime'] = 'זמן תעבורה';
$string['unknownplugin'] = 'לא ידוע ( כנראה שהוסר על-ידי מנהל המערכת)';
$string['wait'] = 'המתן';
$string['wanttowait_high'] = 'לא מומלץ לחכות להעברה זו מלהתבצע. אך אתה יכול אם הינך יודע מה אתה עושה.';
$string['wanttowait_moderate'] = 'האם ברצונך לחכות  להעברה זו? הדבר עלול לקחת זמן מה.';
