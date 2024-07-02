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
 * Strings for component 'feedback', language 'he', version '4.1'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'הוספת שאלה';
$string['add_pagebreak'] = 'הוספת הפרדת עמוד';
$string['adjustment'] = ' התאמה';
$string['after_submit'] = 'לאחר הגשה';
$string['allowfullanonymous'] = 'אפשר אנונימיות מלאה';
$string['analysis'] = 'ניתוח';
$string['anonymous'] = 'אנונימי';
$string['anonymous_edit'] = 'תעוד שמות משתמשים';
$string['anonymous_entries'] = 'משובים אנונימיים ({$a})';
$string['anonymous_user'] = 'משתמש אנונימי (לא מזוהה)';
$string['answerquestions'] = 'יש לענות על השאלות';
$string['append_new_items'] = 'הוספת שאלות חדשות';
$string['autonumbering'] = 'שאלות עם מספור אוטומטי';
$string['autonumbering_help'] = 'שימוש במיספור אוטומטי בכל שאלה, זמין/לא־זמין';
$string['average'] = 'ממוצע';
$string['bold'] = 'מודגש';
$string['calendarend'] = 'שאלונים מותנים  {$a} נסגרו';
$string['calendarstart'] = 'שאלונים מותנים  {$a} נפתחו';
$string['cannotaccess'] = 'ניתן לגשת לשאלון המותנה זה דרך הקורס';
$string['cannotsavetempl'] = 'שמירת תבניות, לא זמין.';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'לא הוגדר Captcha';
$string['check'] = 'רב ברירה - תשובות מרובות';
$string['check_values'] = 'תגובות אפשריות';
$string['checkbox'] = 'רב ברירה - תשובות מרובות (רשימת תיבות סימון)';
$string['choosefile'] = 'בחירת קובץ';
$string['chosen_feedback_response'] = 'המשוב אשר נבחר';
$string['complete_the_form'] = 'מענה על השאלות...';
$string['completed'] = 'הושלם';
$string['completed_feedbacks'] = 'תשובות אשר הוגשו';
$string['completedon'] = 'הושלם ב  {$a}';
$string['completiondetail:submit'] = 'מתן משוב';
$string['completionsubmit'] = 'יוצג כהושלם כאשר השאלון הוגש';
$string['configallowfullanonymous'] = 'כאשר אפשרות זו זמינה, השאלון־מותנה יכול להיות מושלם ללא חלון התחברות. הדבר משפיע רק על שאלונים־מותנים בעמוד הבית.';
$string['confirmdeleteentry'] = 'האם ברצונך למחוק תשובה זו?';
$string['confirmdeleteitem'] = 'האם ברצונך למחוק רכיב זה?';
$string['confirmdeletetemplate'] = 'האם ברצונך למחוק את תבנית זו?';
$string['confirmusetemplate'] = 'האם הינך בטח כי ברצונך להשתמש בתבנית זו?';
$string['continue_the_form'] = 'המשך השאלון';
$string['count_of_nums'] = 'ספירת מספרים';
$string['courseid'] = 'courseid';
$string['creating_templates'] = 'שמירת שאלות אלו כתבנית שאלון חדשה';
$string['delete_entry'] = 'מחיקת ערך';
$string['delete_item'] = 'מחיקת שאלה';
$string['delete_old_items'] = 'מחיקת שאלות ישנות';
$string['delete_template'] = 'מחיקת תבנית';
$string['delete_templates'] = 'מחיקת תבנית...';
$string['depending'] = 'שאלות "תלויות"';
$string['depending_help'] = 'שאלות תלויות מאפשרות לך להציג (לחסוף) שאלות התלויות במענה/בחירת המשתמש בערכים משאלות קודמות.

<br /> <strong> להלן דוגמה לשימוש זה:
</strong><br /> <ul> <li>ראשית, צור שאלה אשר לכל ערך זמינות שאלות אחרות התלויים בו.</li> <li>שנית, הוסף הפרדת עמוד.</li> <li>לאחר מכן הוסף את השאלות התלויות בערך השאלה שלפניהם.<br /> בטופס יצירת השאלה ,בחר את השאלה המופיעה ברשימה השאלות ה"תלויות".
והכנס את הערך הרצוי לתוך תיבת הטקסט ה"ערך התלוי"
</li> </ul> <strong>המבנה אמור להיות כך:</strong> <ol> <li>Item Q: do you have a car? A: yes/no</li> <li>Pagebreak</li> <li>Item Q: what color has your car?<br /> (this item depends on item 1 with value = yes)</li> <li>Item Q: why you have not a car?<br /> (this item depends on item 1 with value = no)</li> <li> ... other items</li> </ol> זה הכל - בהצלחה!';
$string['dependitem'] = 'שאלה זו תלויה במענה על שאלה:';
$string['dependvalue'] = 'הערך בו תלויה שאלה זו:';
$string['description'] = 'תיאור (הנחיה)';
$string['do_not_analyse_empty_submits'] = 'אין להכליל ניתוח הגשות ריקות';
$string['downloadresponseas'] = 'הורדת כל התגובות כ:';
$string['drop_feedback'] = 'הסרה מקורס זה';
$string['dropdown'] = 'רב ברירה - תשובה יחידה (מתפריט רשימת תשובות)';
$string['dropdown_values'] = 'תשובות';
$string['dropdownlist'] = 'רב ברירה - תשובה יחידה (מתפריט תשובות)';
$string['dropdownrated'] = 'תפריט תשובות  (מדורג)';
$string['edit_item'] = 'עריכת שאלה';
$string['edit_items'] = 'עריכת שאלות';
$string['email_notification'] = 'אפשור שליחת הודעות בדוא"ל עבור ההגשות';
$string['email_notification_help'] = 'אם מאופשר, מורים יקבלו הודעות בדוא"ל של שאלונים־מותנים אשר נשלחו.';
$string['emailteachermail'] = 'המשתמש {$a->username} השלים את פעילות שאלון \'{$a->feedback}\'
ניתן לצפות בו כאן:
{$a->url}';
$string['emailteachermailhtml'] = 'המשתמש {$a->username} השלים את פעילות שאלון :
<i>\'{$a->feedback}\'</i><br /><br />
ניתן לצפות בו <a href="{$a->url}">כאן</a>.';
$string['entries_saved'] = 'התשובה שלך נשמרה. תודה רבה.';
$string['eventresponsedeleted'] = 'מענה נמחק';
$string['eventresponsesubmitted'] = 'מענה הוגש';
$string['export_questions'] = 'יצוא שאלות';
$string['export_to_excel'] = 'יצוא ל-Excel';
$string['feedback:addinstance'] = 'הוספת שאלון־מותנה חדש';
$string['feedback:complete'] = 'השלמת שאלון־מותנה';
$string['feedback:createprivatetemplate'] = 'יצירת תבניות פרטיות';
$string['feedback:createpublictemplate'] = 'יצירת תבניות ציבוריות';
$string['feedback:deletesubmissions'] = 'מחיקת הגשות שהושלמו';
$string['feedback:deletetemplate'] = 'מחיקת תבנית';
$string['feedback:edititems'] = 'עריכת שאלות';
$string['feedback:mapcourse'] = 'שיוך קורסים לשאלון־מותנה מערכתי';
$string['feedback:receivemail'] = 'קבלת הודעות דוא"ל';
$string['feedback:view'] = 'צפיה בשאלון־מותנה';
$string['feedback:viewanalysepage'] = 'צפיה בעמוד ניתוח השאלון־מותנה לאחר ההגשה';
$string['feedback:viewreports'] = 'צפיה בדוחות';
$string['feedback_is_not_for_anonymous'] = 'משתמשים לא מזוהים (אורחים) אינם יכולים לענות על השאלון־המותנה';
$string['feedback_is_not_open'] = 'שאלון־מותנה זה איננו זמין כעת';
$string['feedbackclose'] = 'אפשר תשובות ל';
$string['feedbackcompleted'] = '{$a->username} השלים/מה {$a->feedbackname}';
$string['feedbackopen'] = 'אפשרת תשובות מ';
$string['file'] = 'קובץ';
$string['filter_by_course'] = 'סנון לפי קורס';
$string['handling_error'] = 'התרחשה שגיאה מערכת, בזמן הפעלת רכיב השאלון־המותנה';
$string['hide_no_select_option'] = 'הסתרת האפשרות "לא נבחר"';
$string['horizontal'] = 'אופקי';
$string['import_questions'] = 'יבוא שאלות';
$string['import_successfully'] = 'היבוא התבצע בהצלחה';
$string['importfromthisfile'] = 'יבוא מקובץ זה';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'מידע';
$string['infotype'] = 'סוג המידע';
$string['insufficient_responses'] = 'תשובות חסרות';
$string['insufficient_responses_for_this_group'] = 'ישנם תשובות חסרות עבור קבוצה זו';
$string['insufficient_responses_help'] = 'על מנת, להשאיר שאלון־מותנה זה אנונימי, יש להזין לפחות 2 תגובות.';
$string['item_label'] = 'תווית שאלה מותנת (באנגלית)';
$string['item_name'] = 'שאלה';
$string['label'] = 'תווית לשאלה מותנית (באנגלית)';
$string['labelcontents'] = 'תכנים';
$string['mapcourse'] = 'שיוך שאלון־מותנה לקורסים';
$string['mapcourse_help'] = 'כבררת־מחדל, שאלון־מותנה שנבנה בדף הבית של המערכת זמין בכל הקורסים במערכת ויופיעו בקורסים באמצעות משבצת שאלון־מותנה.

ניתן להכריח את השאלון־המותנה להופיע על-ידי הפיכתו למשבצת דביקה או על-ידי הגבלת הקורסים כך ששאלון־מותנה יופיע על-ידי שיוכם לקורס מסוים.';
$string['mapcourseinfo'] = 'זהו שאלון־מותנה אשר זמין בכל המערכת לכל הקורסים על-ידי שימוש במשבצת שאלון־מותנה.

ניתן להגביל את הקורסים ולקבוע עבור איזה קורס הו יהיה זמין, על-ידי שיוך השאלון־המותנה. יש לחפש  קורס ולשיוך אותו לשאלון־מותנה זה.';
$string['mapcoursenone'] = 'לא שויכו קורסים. השאלון־המותנה זמין לכל הקורסים';
$string['mapcourses'] = 'שיוך שאלון־מותנה עבור הקורסים';
$string['mappedcourses'] = 'קורסים אשר שויכו';
$string['mappingchanged'] = 'מיפוי הקורס שונה';
$string['maximal'] = 'מירבי';
$string['messageprovider:message'] = 'תזכורת להזנת משוב בפעילות "שאלון־מותנה"';
$string['messageprovider:submission'] = 'הודעות מפעילות "שאלון־מותנה"';
$string['minimal'] = 'מיזערי';
$string['mode'] = 'מצב';
$string['modulename'] = 'שאלון־מותנה';
$string['modulename_help'] = 'פעילות "שאלון־מותנה" (Feedback) מאפשרת למורה ליצור סקר/שאלון־מותנה מותאם אישית כדי לאיסוף משוב ממשתתפים, וזאת באמצעות מגוון של סוגי שאלות הכוללים בחירה מרובה, כן / לא, או הזנת טקסט.

תגובות משוב יכולות להיות אנונימיות אם רוצים, ותוצאות עשויות להיות מוצגות לכל המשתתפים או מוגבלות למורים בלבד.

פעילות משוב הזמינה מהדף הראשי של המערכת, יכולה להתבצע עבור משתמשים שלא נדרשו להזדהות במערכת או להיות רשומים בה.

דוגמאות לשימושים בפעילות משוב:

* לקבלת הערכות בקורס. עוזר לשפר את התוכן למשתתפים עתידיים בפעילות.

* כדי לאפשר למשתתפים להירשם לרכיבים ופעילויות בקורס. לאירועים וכו\'.

* עבור סקרי אורחים על אפשרויות בקורס, מדיניות ואקלים בית-הספר וכד\'.

* עבור סקרים נגד בריונות, שבו תלמידים יכולים לדווח, באופן אנונימי, על תקריות.';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'שאלון־מותנה';
$string['move_item'] = 'הזזת שאלה זו';
$string['multichoice'] = 'רב ברירה';
$string['multichoice_values'] = 'ערכי רב ברירה';
$string['multichoicerated'] = 'רב ברירה (מדורג)';
$string['multichoicetype'] = 'סוג רב ברירה';
$string['multiplesubmit'] = 'אפשור הגשות מרובות';
$string['multiplesubmit_help'] = 'כאשר מוגדר כשאלון־מותנה אנונימי, משתמשים יכולים להגיש את השאלון מספר פעמים, ללא הגבלה.';
$string['name'] = 'שם';
$string['name_required'] = 'נדרש שם';
$string['next_page'] = 'העמוד הבא';
$string['no_handler'] = 'לא הוגדר מנגנון פעולה עבור';
$string['no_itemlabel'] = 'אין תווית';
$string['no_itemname'] = 'אין שם פריט';
$string['no_items_available_yet'] = 'לא נקבעו עדיין שאלות';
$string['no_templates_available_yet'] = 'עדיין אין תבניות זמינות ';
$string['non_anonymous'] = 'שמות המשתמשים ישמרו ויוצגו יחד עם התשובות';
$string['non_anonymous_entries'] = 'לא ניתן לענות באופן אנונימי (לא מזוהה)';
$string['non_respondents_students'] = 'לא קיימות תגובות של סטודנטים';
$string['not_completed_yet'] = 'עדיין לא הושלם';
$string['not_selected'] = 'לא נבחר';
$string['not_started'] = 'לא התחיל';
$string['numberoutofrange'] = 'מספר מחוץ לטווח';
$string['numeric'] = 'תשובה מספרית';
$string['numeric_range_from'] = 'טווח החל מ';
$string['numeric_range_to'] = 'טווח ל';
$string['of'] = 'של (מן)';
$string['oldvaluespreserved'] = 'כל השאלות הישנות והערכים אשר הוקצו ישמרו';
$string['oldvalueswillbedeleted'] = 'השאלות הנוכחיות וכל תגובות המשתמש שלך ימחקו';
$string['only_one_captcha_allowed'] = 'רק captcha אחת מותרת בשאלון־מותנה זה';
$string['overview'] = 'סקירה';
$string['page'] = 'עמוד';
$string['page-mod-feedback-x'] = 'עמוד רכיב שאלון־מותנה כלשהו';
$string['page_after_submit'] = 'הודעת השלמה';
$string['pagebreak'] = 'הפרדת עמוד';
$string['pluginadministration'] = 'ניהול שאלון־מותנה';
$string['pluginname'] = 'שאלון מותנה';
$string['position'] = 'מיקום';
$string['previous_page'] = 'העמוד הקודם';
$string['public'] = 'ציבורי';
$string['question'] = 'שאלה';
$string['questionandsubmission'] = 'הגדרות שאלה והגשה';
$string['questions'] = 'שאלות';
$string['radio'] = 'רב ברירה - תשובה יחידה';
$string['radio_values'] = 'תגובות';
$string['ready_feedbacks'] = 'שאלונים־מותנים מוכנים';
$string['required'] = 'נדרש';
$string['resetting_data'] = 'איפוס תשובות שאלון־מותנה';
$string['resetting_feedbacks'] = 'מאפס';
$string['response_nr'] = 'מספר תגובה';
$string['responses'] = 'תגובות';
$string['responsetime'] = 'זמן תגובה';
$string['save_as_new_item'] = 'שמירה כשאלה חדשה';
$string['save_as_new_template'] = 'שמירת תבנית חדשה';
$string['save_entries'] = 'הגשת תשובותיך';
$string['save_item'] = 'שמירת שאלה';
$string['saving_failed'] = 'השמירה נכשלה';
$string['search:activity'] = 'שאלון-מותנה - מידע הפעילות';
$string['search_course'] = 'חיפוש קורס';
$string['searchcourses'] = 'חיפוש קורסים';
$string['searchcourses_help'] = 'חיפוש שם או קוד של הקורס(ים)  לשיוך לשאלון־מותנה הזה.';
$string['selected_dump'] = 'בחירת אינדקסים של משתני $SESSION
אשר מרוקנים למטה';
$string['send'] = 'שליחה';
$string['send_message'] = 'שליחת הודעה';
$string['show_all'] = 'הצגת הכל';
$string['show_analysepage_after_submit'] = 'הצגת עמוד ניתוח לאחר שליחה';
$string['show_entries'] = 'הצגת תגובות';
$string['show_entry'] = 'הצגת תגובה';
$string['show_nonrespondents'] = 'הצגת שאלות ללא התגובות';
$string['site_after_submit'] = 'כתובת־אינטרנט להצגה לאחר ההגשה';
$string['sort_by_course'] = 'סינון לפי קורס';
$string['started'] = 'התחיל';
$string['startedon'] = 'החל ב  {$a}';
$string['subject'] = 'נושא';
$string['switch_item_to_not_required'] = 'החלפה ל: תשובה איננה נדרשת';
$string['switch_item_to_required'] = 'החלפה ל: תשובה נדרשת';
$string['template'] = 'תבנית';
$string['template_deleted'] = 'תבנית נמחקה';
$string['template_saved'] = 'תבנית נשמרה';
$string['templates'] = 'תבניות';
$string['textarea'] = 'תשובת טקסט ארוכה';
$string['textarea_height'] = 'מספר שורות';
$string['textarea_width'] = 'רוחב';
$string['textfield'] = 'תשובת טקסט קצרה';
$string['textfield_maxlength'] = 'מספר מירבי של תווים המתקבלים';
$string['textfield_size'] = 'רוחב שדה הטקסט';
$string['there_are_no_settings_for_recaptcha'] = 'לא נמצאו הגדרות עבור
captcha';
$string['this_feedback_is_already_submitted'] = 'השלמתם פעילות זו, בעבר.';
$string['typemissing'] = 'חסר ערך "סוג"';
$string['update_item'] = 'שמירת שינויים עבור השאלה';
$string['url_for_continue'] = 'כתובת אינטרנט עבור  כפתור - ה"המשך"';
$string['url_for_continue_help'] = 'כבררת־מחדל, לאחר ששאלון־מותנה הוגש, יפנה  כפתור ה"המשך" לעמוד הקורס.

ניתן להגדיר כאן עוד אתר אינטרנט כיעד עבור כפתור ה"המשך" הזה.';
$string['use_one_line_for_each_value'] = '<br />
יש להשתמש בשורה אחת עבור כל תשובה';
$string['use_this_template'] = 'יש להשתמש בתבנית זו';
$string['using_templates'] = 'יש להשתמש בתבנית';
$string['vertical'] = 'אנכי';
