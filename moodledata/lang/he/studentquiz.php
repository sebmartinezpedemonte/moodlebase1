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
 * Strings for component 'studentquiz', language 'he', version '4.1'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abort_button'] = 'ביטול';
$string['add_comment'] = 'הוספת הערה';
$string['add_reply'] = 'הוספת תשובה';
$string['after_answering_end_date'] = 'הבוחן נסגר למענה על שאלות מ: {$a}.';
$string['after_submission_end_date'] = 'הבוחן סגור להוספת שאלות מ:  {$a}.';
$string['anonymous_user_name'] = 'משתמשים אנונימיים #{$a}';
$string['answeringndbeforestart'] = 'לא ניתן לציין מועד אחרון למענה לפני מועד פתיחת הבוחן';
$string['api_state_change_success_content'] = 'מצב השאלה/הנראות השתנו בהצלחה';
$string['api_state_change_success_title'] = 'הצלחה';
$string['approve'] = 'מאושר';
$string['approve_toggle'] = 'לא/מאושר';
$string['approved_column_name'] = 'אושר';
$string['approved_veryshort'] = 'מאושר';
$string['approveselectedscheck'] = 'האם אתם בטוחים שאתם רוצים לבטל את השאלות הבאות?<br /><br />{$a}';
$string['average_column_name'] = 'ממוצע';
$string['before_answering_end_date'] = 'הבוחן יסגר למענה מ: {$a}';
$string['before_answering_start_date'] = 'פתוח למענה מ: {$a}.';
$string['before_submission_end_date'] = 'הבוחן יסגר להוספת שאלות מ: {$a}';
$string['before_submission_start_date'] = 'פתוח לשליחת שאלות מ: {$a}.';
$string['cannotcapturecommenthistory'] = 'לא ניתן לאתר את היסטוריית ההערות';
$string['collapseall'] = 'כיווץ כל ההערות';
$string['collapsecomment'] = 'כיווץ הערות';
$string['comment_author'] = 'מחבר';
$string['comment_cannot_update'] = 'לא ניתן לעדכן את ההערה';
$string['comment_column_name'] = 'הערה';
$string['comment_error'] = 'בבקשה הגב';
$string['comment_error_unsaved'] = 'האם אתם מעוניינים קודם לשמור את ההערה הזאת?';
$string['comment_help'] = 'כתבו הערה';
$string['comment_help_help'] = 'כתבו הערה לשאלה';
$string['comment_veryshort'] = 'הערות';
$string['commenthistory'] = 'היסטוריית הערות';
$string['confirmdeletecomment'] = 'האם אתם בטוחים שאתם מעוניינים למחוק את ההערה לשאלה?';
$string['createnewquestion'] = 'צרו שאלה חדשה';
$string['createnewquestionfirst'] = 'צרו שאלה ראשונה';
$string['creator_anonym_fullname'] = 'סטודנטים אנונימיים';
$string['current_of_total'] = 'הערה {$a->current} מתוך {$a->total}';
$string['delete'] = 'מחיקה';
$string['deletecomment'] = 'מחקו הערה';
$string['deletedbyauthor'] = 'הפרסום הזה נמחק ב: {$a}.';
$string['deletedbyuser'] = 'הפרסום נמחק על ידי {$a->user} בתאריך: {$a->date}.';
$string['deletedcomment'] = 'פרסום נמחק';
$string['describe_already_deleted'] = 'ההערה כבר נמחקה';
$string['describe_not_creator'] = 'זו לא ההערה שלכם';
$string['describe_out_of_time_delete'] = 'זמן מחיקת ההערה הסתיים';
$string['describe_out_of_time_edit'] = 'זמן עריכת ההערה הסתיים';
$string['difficulty_all_column_name'] = 'קושי כללי';
$string['difficulty_level_column_name'] = 'קושי';
$string['difficulty_title'] = 'מדד הקושי';
$string['editcomment'] = 'עריכת הערות';
$string['editedcomment_last_edit'] = 'עודכן לאחרונה:';
$string['editedcommenthistory'] = 'נערך על ידי ה: {$a->lastesteditedcommentauthorname} ב {$a->lastededitedcommenttime}';
$string['editedcommenthistorylinktext'] = 'היסטוריה';
$string['editorplaceholder'] = 'הקלידו את ההערתכם, כאן...';
$string['emailautomationnote'] = 'זו הודעה אוטמטית, כתובת הדוא"ל אינה בשימוש.';
$string['emailcommentaddedbody'] = '{$a->recepientname}, לשאלה שלך \'{$a->questionname}\' בפעילות סטודנטים יוצרים בוחן \'{$a->modulename}\' בקורס \'{$a->coursename}\' נוספה הערה על ידי: \'{$a->actorname}\' ב \'{$a->timestamp}\'. ההערה היא: \'{$a->commenttext}\' ניתן לצפות בשאלה ב: {$a->questionurl}.';
$string['emailcommentaddedsmall'] = 'לשאלתך \'{$a->questionname}\' הוספה הערה על ידי: {$a->actorname}.';
$string['emailcommentaddedsubject'] = 'נוספה הערה לשאלה: {$a->questionname}';
$string['emailcommentdeletedbody'] = '{$a->recepientname}, ההערה ב: \'{$a->commenttime}\' לשאלתך \'{$a->questionname}\' בפעילות סטודנטים יוצרים בוחן \'{$a->modulename}\' בקורס \'{$a->coursename}\' נמחקה על ידי: \'{$a->actorname}\' ב: \'{$a->timestamp}\'. ההערה היא: \'{$a->commenttext}\' ניתן לצפות בשאלה ב: {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = 'ההערה לשאלתך \'{$a->questionname}\' נמחקה על ידי: {$a->actorname}.';
$string['emailcommentdeletedsubject'] = 'הערה נמחקה לשאלה: {$a->questionname}';
$string['emaildigestbody'] = 'זהו {$a->digesttype} ריכוז הודעות ל: <b>{$a->modulename}</b> לפעילות סטודנטים יוצרים בוחן:';
$string['emaildigestbody_section_content'] = 'שאלתך <b>{$a->questionname}</b> הייתה <b>{$a->actiontype}</b> על ידי<b>{$a->actorname}</b>';
$string['emaildigestbody_section_title'] = 'התראות {$a->seq}, {$a->timestamp}';
$string['emaildigestsubject'] = 'ריכוז הודעות בפעילות סטודנטים יוצרים בוחן';
$string['emailminecommentdeletedbody'] = '{$a->recepientname}, הערתך ב: \'{$a->commenttime}\' לשאלה \'{$a->questionname}\' בפעילות סטודנטים יוצרים בוחן \'{$a->modulename}\' בקורס \'{$a->coursename}\' נמחקה על ידי \'{$a->actorname}\' ב\'{$a->timestamp}\'. ההערה הייתה: \'{$a->commenttext}\' ניתן לצפות בשאלה ב: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'ההערתך לשאלה \'{$a->questionname}\' נמחקה על ידי: {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'נמחקה הערה לשאלה: {$a->questionname}';
$string['emailsalutation'] = '{$a},';
$string['emailsinglebody'] = 'שאלתך <b>{$a->questionname}</b> בסטודנטים יוצרים בוחן <b>{$a->modulename}</b> בקורס <b>{$a->coursename}</b> has been {$a->eventname} על ידי <b>{$a->actorname}</b> ב <b>{$a->timestamp}</b>.';
$string['emailsinglebody_reviewlink'] = 'ניתן לצפות בשאלה ב:';
$string['error_sendalert'] = 'אירעה שגיאה בשליחת הדוח שלך ל: {$a}. הדיווח לא יכול להישלח.';
$string['expandall'] = 'הרחבת הערות';
$string['expandcomment'] = 'הרחבת הערה';
$string['filter'] = 'מסנן';
$string['filter_advanced_element'] = '{$a} (רכיבים מתקדמים)';
$string['filter_comment_label_date'] = 'תאריך';
$string['filter_comment_label_forename'] = 'שם פרטי';
$string['filter_comment_label_sort_by'] = 'מיון לפי';
$string['filter_comment_label_sort_toggle'] = 'מיון על ידי {$a->field} {$a->type}';
$string['filter_comment_label_surname'] = 'שם משפחה';
$string['filter_ishigher'] = 'גבוה';
$string['filter_islower'] = 'נמוך';
$string['filter_label_approved'] = 'שאלה שאושרה';
$string['filter_label_comment'] = 'הערה';
$string['filter_label_createdate'] = 'יצירה';
$string['filter_label_difficulty_level'] = 'קושי';
$string['filter_label_fast_filters'] = 'מסנן מהיר לשאלות';
$string['filter_label_myattempts'] = 'הניסיונות שלי';
$string['filter_label_mydifficulty'] = 'הקשיים שלי';
$string['filter_label_mylastattempt'] = 'ניסיון המענה האחרון שלי';
$string['filter_label_myrate'] = 'הדירוג שלי';
$string['filter_label_onlyapproved'] = 'מאושר';
$string['filter_label_onlyapproved_help'] = 'השאלה אושרה על ידי המרצה';
$string['filter_label_onlydifficult'] = 'קשה לכולם';
$string['filter_label_onlydifficult_help'] = 'שאלה עם קושי ממוצע של יותר מ: {$a}%';
$string['filter_label_onlydifficultforme'] = 'קשה עבורי';
$string['filter_label_onlydifficultforme_help'] = 'שאלה בה מדד הקושי שלי יותר מ: {$a}%';
$string['filter_label_onlygood'] = 'טוב';
$string['filter_label_onlygood_help'] = 'שאלה עם דירוג ממוצע של לפחות {$a} כוכבים';
$string['filter_label_onlymine'] = 'שלי';
$string['filter_label_onlymine_help'] = 'שאלות שאתם יצרתם';
$string['filter_label_onlynew'] = 'לא נענו';
$string['filter_label_onlynew_help'] = 'שאלות שלא עניתם עליהן בעבר';
$string['filter_label_question'] = 'כותרת השאלה';
$string['filter_label_questiontext'] = 'תוכן השאלה';
$string['filter_label_rates'] = 'דירוג';
$string['filter_label_show_mine'] = 'השאלות שלי';
$string['filter_label_tags'] = 'טאג';
$string['finish_button'] = 'סיום';
$string['invalidcomment'] = 'תגובה לא חוקית';
$string['lastattempt_right_label'] = 'ניסיון אחרון תקין';
$string['lastattempt_wrong_label'] = 'ניסיון אחרון לא תקין';
$string['latest_column_name'] = 'האחרון';
$string['manager_anonym_fullname'] = 'ניהול אנונימי';
$string['message'] = 'הודעה';
$string['messageprovider:commentadded'] = 'הודעה על הוספת הערה';
$string['messageprovider:commentdeleted'] = 'הודעה על ההערה שנמחקה';
$string['messageprovider:minecommentdeleted'] = 'הודעה על ההערה שלי שנמחקה';
$string['migrate_already_done'] = 'דבר לא נעשה מכיוון ששאלה זו כבר הועברה!';
$string['migrated_successful'] = 'פעילות זו הועברה בהצלחה!';
$string['mine_column_name'] = 'שלי';
$string['moderator'] = 'מרצה';
$string['modulename'] = 'סטודנטים יוצרים שאלות לבוחן';
$string['modulename_help'] = 'פעילות מסוג: סטודנטים יוצרים בוחן, מאפשרת לסטודנטים להוסיף שאלות, לדרג שאלות של עמיתים לקורס, ולענות על השאלות שהוסיפו עמיתים לקורס.
המרצה יכול לאשר את השאלות לפני עליתן או לאפשר העלאה אוטומטית.
יצירת שאלות מאפשרת רמת חשיבה גבוהה והיכרות מעמיקה של החומר שנלמד.';
$string['modulename_link'] = 'mod/studentquiz/view';
$string['modulenameplural'] = 'סטודנטים יוצרים שאלות לבוחן';
$string['more'] = 'עוד';
$string['myattempts_column_name'] = 'הניסיונות שלי';
$string['mydifficulty_column_name'] = 'הקשיים שלי';
$string['mylastattempt_column_name'] = 'הניסיון האחרון שלי';
$string['myrate_column_name'] = 'הדירוג שלי';
$string['nav_export'] = 'יצוא';
$string['nav_import'] = 'יבוא';
$string['needtoallowatleastoneqtype'] = 'עליכם לאפשר לפחות סוג אחד של שאלות';
$string['next_button'] = 'הבא';
$string['no_comment'] = 'אין';
$string['no_comments'] = 'אין הערות';
$string['no_difficulty_level'] = 'אין';
$string['no_myattempts'] = 'אין';
$string['no_mylastattempt'] = 'אין';
$string['no_mylastattempt_label'] = 'השאלה לא נענתה';
$string['no_questions_add'] = 'אין שאלות בפעילות זו, הרגישו חופשי להוסיף שאלות';
$string['no_questions_filter'] = 'אף אחת מהשאלות אינה תואמת את הסינון שלך. אפס את הסינון כדי לראות הכל.';
$string['no_questions_selected_message'] = 'בבקשה בחרו לפחות שאלה אחת כדי להתחיל את הבוחן.';
$string['no_rates'] = 'אין';
$string['no_tags'] = 'אין';
$string['nocommenthistoryexist'] = 'אין עדיין היסטוריית הערות';
$string['num_questions'] = '{$a} שאלות';
$string['number_column_name'] = 'מספר';
$string['onlyrootcommentcanreply'] = 'ניתן להגיב רק לההערה הראשונה';
$string['pagesize'] = 'גודל הדף';
$string['pluginadministration'] = 'ניהול';
$string['pluginname'] = 'סטודנטים יוצרים בוחן';
$string['previous_button'] = 'הקודם';
$string['privacy:metadata:mod_studentquiz_comment_sort'] = 'העדפות משתמש לסינון';
$string['privacy:metadata:studentquiz_attempt'] = 'הצג את ניסיון המענה לשאלות';
$string['privacy:metadata:studentquiz_attempt:categoryid'] = 'מזהה של הקטגוריה';
$string['privacy:metadata:studentquiz_attempt:questionusageid'] = 'מזהה השימוש בשאלה';
$string['privacy:metadata:studentquiz_attempt:studentquizid'] = 'מזהה של סטודנטים יוצרים בוחן';
$string['privacy:metadata:studentquiz_attempt:userid'] = 'מזהה של המשתמש';
$string['privacy:metadata:studentquiz_comment'] = 'שמירת הערות לשאלות.';
$string['privacy:metadata:studentquiz_comment:comment'] = 'הערה לשאלה.';
$string['privacy:metadata:studentquiz_comment:created'] = 'זמן יצירה זמן הערה';
$string['privacy:metadata:studentquiz_comment:deleted'] = 'זמן מחיקה זמן הערה';
$string['privacy:metadata:studentquiz_comment:deleteuserid'] = 'מזהה של הערת משתמש שנמחקה.';
$string['privacy:metadata:studentquiz_comment:status'] = 'סטטוס ההערה';
$string['privacy:metadata:studentquiz_comment:timemodified'] = 'זמן שינוי הערה';
$string['privacy:metadata:studentquiz_comment_history'] = 'שמירת היסטוריית ההערות';
$string['privacy:metadata:studentquiz_comment_history:action'] = 'סוג ההיסטוריה:
0 - יצירה
1 - עריכה
2 - מחיקה';
$string['privacy:metadata:studentquiz_comment_history:content'] = 'היסטוריית הערות';
$string['privacy:metadata:studentquiz_comment_history:timemodified'] = 'שינוי זמן ההערה';
$string['privacy:metadata:studentquiz_progress'] = 'שמירת מידע על התקדמות סטודנט בשאלה זו.';
$string['privacy:metadata:studentquiz_progress:attempts'] = 'מספר ניסיונות המענה לשאלה';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'מספר תשובות נכונות';
$string['privacy:metadata:studentquiz_progress:lastanswercorrect'] = 'תשובה אחרונה:
0: תשובה שגויה
1: תשובה נכונה';
$string['privacy:metadata:studentquiz_rate'] = 'שמרו את דירוג השאלה';
$string['privacy:metadata:studentquiz_rate:rate'] = 'דרגו את השאלה';
$string['progress_bar_caption'] = 'התקדמותך בפעילות זו של סטודנטים יוצרים בוחן';
$string['questionsinuse'] = '(* שאלות המסומנות בכוכבית נמצאות בשימוש.)';
$string['ranking_block_title'] = 'דירוג';
$string['ranking_block_title_anonymised'] = 'דירוג
(אנונימי)';
$string['rate_all_column_name'] = 'דירוג קבוצתי';
$string['rate_column_name'] = 'דירוג';
$string['rate_error'] = 'בבקשה דרגו';
$string['rate_help'] = 'דרגו את השאלה';
$string['rate_help_help'] = 'דרג את השאלה. כוכב 1 - רע מאוד, 5 כוכבים - טוב מאוד.';
$string['rate_multi_stars_desc'] = '{$a} כוכבים נבחרו';
$string['rate_one_star_desc'] = 'נבחר כוכב 1';
$string['rate_points'] = 'נקודות';
$string['rate_title'] = 'דירוג';
$string['ratingbar_title'] = 'בר דירוג';
$string['remove_comment'] = 'הסרה';
$string['remove_comment_label'] = 'הסרת הערה';
$string['replies'] = 'תגובות';
$string['reply'] = 'תגובה';
$string['replycomment'] = 'תגובה';
$string['report_comment_condition1'] = 'פוגעני';
$string['report_comment_condition2'] = 'פוגעני';
$string['report_comment_condition3'] = 'מכיל תוכן פוגעני';
$string['report_comment_condition4'] = 'מכיל תוכן פוגעני';
$string['report_comment_condition5'] = 'התוכן מפר זכויות יוצרים';
$string['report_comment_condition6'] = 'מנוגד לחוקים';
$string['report_comment_condition_more'] = 'מידע נוסף';
$string['report_comment_emailappendix'] = 'הדוא"ל נשלח כתוצאה מהערות פוגעניות';
$string['report_comment_emailpreface'] = 'ההערה דווחה על ידי: {$a->fullname} ({$a->username}, {$a->email}).';
$string['report_comment_emailsubject'] = 'דיווח על הערה {$a->commentid}: {$a->coursename} {$a->studentquizname}';
$string['report_comment_feedback'] = 'הדיווח נשלח בהצלחה. יטופל בהמשך.';
$string['report_comment_invalid_checkbox'] = 'עליכם לסמן לפחות אחת מהתיבות.';
$string['report_comment_link_text'] = 'תצוגה מקדימה כאן';
$string['report_comment_not_available'] = 'אפשרות דיווח ההערות  אינה זמינה';
$string['report_comment_submit'] = 'שלח דיווח';
$string['reportcomment'] = 'דיווח';
$string['reportcomment_title'] = 'דווחו על ההערה כפוגענית';
$string['reportquiz_admin_title'] = 'סטטיסטיקה לסטודנט';
$string['reportquiz_stats_all_last_attempt_correct'] = 'ממוצע קבוצתי של השאלה הנכונה האחרונה';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'ממוצע קבוצתי של השאלה הלא נכונה האחרונה';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'אחוז קבוצתי של השאלות הנכונות';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'סכום של השאלות הנכונות / סכום של כל השאלות';
$string['reportquiz_stats_all_progress'] = 'ממוצע התקדמות קבוצתי';
$string['reportquiz_stats_all_progress_help'] = 'ממוצע התקדמות קבוצתי מבוסס על מספר המשתתפים';
$string['reportquiz_stats_all_question_attempts_correct'] = 'ממוצע קבוצתי של התשובות הנכונות';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'ממוצע קבוצתי של התשובות שאינן נכונות';
$string['reportquiz_stats_all_questions_answered'] = 'ממוצע קבוצתי של כל התשובות';
$string['reportquiz_stats_all_questions_answered_help'] = 'מספר התשובות הממוצע שניתן על ידי כל חברי הקבוצה.';
$string['reportquiz_stats_all_questions_approved'] = 'מספר שאלות שאושרו';
$string['reportquiz_stats_all_questions_approved_help'] = 'המרצה יכול לאשר שאלות.
זהו המספר של כל השאלות שאושרו בבוחן זה.';
$string['reportquiz_stats_all_questions_created'] = 'מספר השאלות בבוחן הסטודנטים';
$string['reportquiz_stats_all_questions_created_help'] = 'מספר השאלות שנוצרו על ידי הקבוצה';
$string['reportquiz_stats_all_rates_average'] = 'דירוג ממוצע כל השאלות';
$string['reportquiz_stats_all_rates_average_help'] = 'דירוג כל שאלה הוא ממוצע הכוכבים הקבוצתי.
לדוגמה: נוצרו 4 שאלות, אם שאלה A דורגה עם 3 כוכבים. שאלה B דורגה עם 4 כוכבים, C עם 2 כוכבים ו D עם 5 כוכבים,  הדירוג הממוצע של כל השאלות יהיה 3.5';
$string['reportquiz_stats_own_last_attempt_correct'] = 'מספר התשובות הנכונות בניסיון האחרון';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'מספר התשובות שאינן נכונות בניסיון האחרון';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'אחוז השאלות הנכונות שלך';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'אחוז מכלל התשובות הנכונות שלך מתוך כלל התשובות שענית בסטודנטים יוצרים בוחן. תשובות חלקיות יחשבו כתשובות שגויות.';
$string['reportquiz_stats_own_progress'] = 'התקדמות אישית';
$string['reportquiz_stats_own_progress_help'] = 'אחוז התשובות הנכונות שלך מכלל התשובות בסטודנטים יוצרים בוחן.  תשובות חלקיות יחשבו כשגויות.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'סך התשובות הנכונות שלך.';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'סך התשובות השגויות שלך.';
$string['reportquiz_stats_own_questions_answered'] = 'סך כל התשובות שלך';
$string['reportquiz_stats_own_questions_answered_help'] = 'סך כל התשובות שלך בבפעילות זו של סטודנטים יוצרים בוחן.';
$string['reportquiz_stats_own_questions_approved'] = 'מספר השאלות שלך שאושרו';
$string['reportquiz_stats_own_questions_approved_help'] = 'המרצה יכול לאשר שאלה לאחר שוידא שהיא נכונה.
זה מספר השאלות שלך שאושרו בפעילות זו של סטודנטים יוצרים בוחן.';
$string['reportquiz_stats_own_questions_created'] = 'מספר השאלות שתרמתם';
$string['reportquiz_stats_own_questions_created_help'] = 'מספר השאלות שתרמתם לבוחן הסטודנטים הזה';
$string['reportquiz_stats_own_rates_average'] = 'ממוצע הדירוגים שלך.';
$string['reportquiz_stats_own_rates_average_help'] = 'דירוג כל שאלה הוא ממוצע הכוכבים הקבוצתי.
לדוגמה: נוצרו 4 שאלות, אם שאלה A דורגה עם 3 כוכבים. שאלה B דורגה עם 4 כוכבים, C עם 2 כוכבים ו D עם 5 כוכבים,  הדירוג הממוצע של כל השאלות יהיה 3.5';
$string['reportquiz_stats_title'] = 'סטטיסטיקה';
$string['reportquiz_total_attempt'] = 'זמן המענה לבוחן';
$string['reportquiz_total_obtained_marks'] = 'ניקוד סופי';
$string['reportquiz_total_questions_answered'] = 'סך כל התשובות';
$string['reportquiz_total_questions_right'] = 'סך כל התשובות הנכונות';
$string['reportquiz_total_questions_wrong'] = 'תשובות שגויות';
$string['reportquiz_total_users'] = 'מספר משתתפים';
$string['reportrank_table_column_approvedquestions'] = 'ניקוד לשאלה שאושרה';
$string['reportrank_table_column_communitystatus'] = 'סטטיסטקה כללית';
$string['reportrank_table_column_correctanswers'] = 'תשובות נכונות';
$string['reportrank_table_column_countquestions'] = 'ניקוד לשאלה שנוצרה';
$string['reportrank_table_column_description'] = 'תיאור';
$string['reportrank_table_column_factor'] = 'פקטור';
$string['reportrank_table_column_fullname'] = 'שם מלא';
$string['reportrank_table_column_incorrectanswers'] = 'תשובות שגויות';
$string['reportrank_table_column_lastcorrectanswers'] = 'ניקוד לניסיון המענה האחרון';
$string['reportrank_table_column_lastincorrectanswers'] = 'ניקוד לניסיון המענה השגוי האחרון';
$string['reportrank_table_column_points'] = 'נקודות';
$string['reportrank_table_column_progress'] = 'התקדמות אישית';
$string['reportrank_table_column_quantifier_name'] = 'שם';
$string['reportrank_table_column_rank'] = 'דירוג';
$string['reportrank_table_column_summeanrates'] = 'ניקוד לכוכבים שהתקבלו';
$string['reportrank_table_column_total_points'] = 'ניקוד כולל';
$string['reportrank_table_column_value'] = 'ערך';
$string['reportrank_table_column_yourstatus'] = 'סטטיסטיקה אישית';
$string['reportrank_table_quantifier_caption'] = 'איך חושבו הנקודות';
$string['reportrank_table_title'] = 'דירוג הסטודנטים ה 10 העליונים';
$string['reportrank_table_title_for_manager'] = 'דירוג סטודנטים';
$string['reportrank_title'] = 'דירוג';
$string['review_button'] = 'סקירה';
$string['savechanges'] = 'שמירת שינויים';
$string['scheduled_task_send_digest_notification'] = 'שלח תמצית התראה';
$string['setting_question_publishing'] = 'פירסום שאלה';
$string['setting_question_publishing_automatic'] = 'פרסם אוטומטית שאלות חדשות';
$string['setting_question_publishing_help'] = 'שאלות שפורסמו מופיעות במאגר שאלות וסטודנטים אחרים יכולים להשתמש בהן. ניתן  לאפשר פירסום אוטומטי של השאלות או שהמרצה יאשר את השאלות לפני פירסומן.';
$string['setting_question_publishing_require_approval'] = 'נדרש אישור לפני פירסום';
$string['settings_allowallqtypes'] = 'אשרו כל כל סוגי השאלות';
$string['settings_allowedqtypes'] = 'אשרו סוגי שאלות';
$string['settings_allowedqtypes_help'] = 'הגבל את סוגי השאלות לסוגים שנבחרו';
$string['settings_anonymous'] = 'סטודנט אנונימי';
$string['settings_anonymous_help'] = 'סטודנטים לא יכולים לראות את שמות עמיתכם';
$string['settings_anonymous_label'] = 'צור סטודנטים אנונימיים';
$string['settings_approvedquantifier'] = 'ניקוד לשאלה שאושרה';
$string['settings_approvedquantifier_help'] = 'ניקוד עבור כל שאלה שאושרה';
$string['settings_approvedquantifier_label'] = 'ניקוד עבור כל  שאלה שאושרה';
$string['settings_availability_close_answering_from'] = 'מענה עד:';
$string['settings_availability_close_submission_from'] = 'הוספת שאלות עד:';
$string['settings_availability_open_answering_from'] = 'אפשר מענה מ:';
$string['settings_availability_open_submission_from'] = 'אפשר הוספת שאלות מ:';
$string['settings_commentdeletionperiod'] = 'משך עריכת/מחיקת הערות (בדקות)';
$string['settings_commentdeletionperiod_help'] = 'קבעו את משך הזמן (בדקות) שכפתור עריכה/מחיקה יהיה זמין לסטודנטים לעריכת/מחיקת ההערות שלהם (או בתגובה להערות) לאחר השליחה.  הערך המותר הוא בין 0-60 דקות.
אם הערך נקבע ל 0, הסטודנטים לא יוכלו לערוך הערות. המרצה והמנהל יוכלו לצפות בהערות גם אם נמחקו.';
$string['settings_email_digest_first_day'] = 'היום הראשון בשבוע?';
$string['settings_email_digest_first_day_help'] = 'אם הגדרת שליחת אידוא"ל שבועי. אפשרות זו מאפשרת לך לקבוע את היום בו ישלח הדוא"ל בשעה 00:00 בטווח של 7 ימים.';
$string['settings_email_digest_type'] = 'תזמון שליחת ריכוז אידוא"לים';
$string['settings_email_digest_type_daily_digest'] = 'ריכוז אידוא"לים יומי';
$string['settings_email_digest_type_help'] = 'לפעילות סטודנטים יוצרים בוחן יש מספר אפשרויות התראה שניתן לאפשר, כדוגמת:
יידוע הסטודנטים שיצרו שאלות על שינויים, אישור שאלות שלהם.
ניתן לקבוע את תדירות ההתראות.
ההתראות ישלחו בדוא"ל רק אם יש לפחות התראה אחת.';
$string['settings_email_digest_type_no_digest'] = 'ללא ריכוז אידוא"לים (אידוא"ל אחד לפעולה)';
$string['settings_email_digest_type_weekly_digest'] = 'ריכוז אידוא"לים שבועי';
$string['settings_excluderoles'] = 'החרגת תפקידים בדירוג';
$string['settings_excluderoles_help'] = 'תפקידים נבחרים מוסתרים בדירוג. משתמשים בתפקידים שונים יכולים להשתתף בפעילות זו.';
$string['settings_excluderoles_label'] = 'רשימת התפקידים להחרגה בדירוג';
$string['settings_forcecommenting'] = 'הכרח הערות';
$string['settings_forcecommenting_help'] = 'הרכח הערות בניסיון המענה';
$string['settings_forcerating'] = 'הכרח דירוג';
$string['settings_forcerating_help'] = 'הרכח דירוג בניסיון המענה';
$string['settings_lastcorrectanswerquantifier'] = 'ניקוד לתשובה נכונה בניסיון האחרון';
$string['settings_lastcorrectanswerquantifier_help'] = 'ניקוד לכל תשובה נכונה';
$string['settings_lastcorrectanswerquantifier_label'] = 'ניקוד לתשובה האחרונה הנכונה';
$string['settings_lastincorrectanswerquantifier'] = 'ניקוד לתשובה שגויה';
$string['settings_lastincorrectanswerquantifier_help'] = 'ניקוד לשאלה שגויה או שגויה חלקית';
$string['settings_lastincorrectanswerquantifier_label'] = 'ניקוד לתשובה השגויה המאוחרת';
$string['settings_notification'] = 'הגדרת התראות';
$string['settings_questionquantifier'] = 'ניקוד ליצירת שאלה';
$string['settings_questionquantifier_help'] = 'ניקוד עבור כל שאלה שנוצרה';
$string['settings_questionquantifier_label'] = 'ניקוד עבור כל שאלה שנוצרה';
$string['settings_ratequantifier'] = 'ניקוד לכל כוכב שהתקבל';
$string['settings_ratequantifier_help'] = 'ניקוד לכל כוכב שהתקבל';
$string['settings_ratequantifier_label'] = 'מכפיל עבור ממוצע הכוכבים שהשאלה קיבלה';
$string['settings_reportingemail'] = 'דוא"ל לדיווח על הערות פוגעניות';
$string['settings_reportingemail_help'] = 'לכתובת דוא"ל זו יגיעו דיווח סטודנטים על הערות פוגעניות.';
$string['settings_section_description_default'] = 'ערכים אלה מגדירים את ערכי ברירת המחדל בפעילות סטודנטים יוצרים בוחן.';
$string['settings_section_header_comment_rating'] = 'הגדרת הערות ודירוגים';
$string['settings_section_header_question'] = 'הגדרת שאלות';
$string['settings_section_header_ranking'] = 'הגדרות ניקוד';
$string['show_less'] = 'הראה פחות';
$string['show_more'] = 'הראה יותר';
$string['slot_of_slot'] = 'שאלה {$a->slot} של {$a->slots} במקטע זה';
$string['start_quiz_button'] = 'התחל בוחן';
$string['state_approved'] = 'אושר';
$string['state_change_tooltip_approved'] = 'השאלה אושרה, לחצו כאן לשנות את מצב השאלה';
$string['state_change_tooltip_changed'] = 'השאלה שונתה, לחצו כאן לשנות את מצב השאלה';
$string['state_change_tooltip_disapproved'] = 'השאלה לא אושרה, לחצו כאן לשנות את מצב השאלה';
$string['state_change_tooltip_new'] = 'שאלה חדשה, לחצו כאן לשנות את מצב השאלה';
$string['state_changed'] = 'שונה';
$string['state_column_name'] = 'מצב';
$string['state_column_name_veryshort'] = 'מצב';
$string['state_disapproved'] = 'לא מאושר';
$string['state_new'] = 'חדש';
$string['state_toggle'] = 'שינוי מצב';
$string['statistic_block_approvals'] = 'שאלות שאושרו';
$string['statistic_block_created'] = 'השאלות נוצרו';
$string['statistic_block_disapprovals'] = 'שאלות שלא אושרו';
$string['statistic_block_new_changed'] = 'שאלות חדשות/שעברו שינוי';
$string['statistic_block_progress_available'] = 'שאלות זמינות';
$string['statistic_block_progress_last_attempt_correct'] = 'נסיון אחרון נכון';
$string['statistic_block_progress_last_attempt_incorrect'] = 'ניסיון אחרון שגוי';
$string['statistic_block_progress_never'] = 'שאלות שמעולם לא נענו';
$string['statistic_block_title'] = 'ההתקדמות שלי';
$string['studentquiz'] = 'סטודנטים יוצרים שאלות';
$string['studentquiz:addinstance'] = 'הוספת מופע חדש לסטודנטים יוצרים בוחן';
$string['studentquiz:emailnotifyapproved'] = 'הודעה על שאלה שאושרה';
$string['studentquiz:emailnotifychanged'] = 'הודעה על שאלה ששונתה';
$string['studentquiz:emailnotifycommentadded'] = 'הודעה על ההערה שהוספה';
$string['studentquiz:emailnotifycommentdeleted'] = 'הודעה על ההערה שנמחקה';
$string['studentquiz:manage'] = 'שאלות בינוניות בסטודנטים יוצרים בוחן';
$string['studentquiz:previewothers'] = 'תצוגה מקדימה לשאלות שיצרו סטודנטים אחרים';
$string['studentquiz:submit'] = 'שלח שאלה בפעילות סטודנטים יוצרים בוחן';
$string['studentquiz:unhideanonymous'] = 'אפשרות לצפות בשמות למרות הפעלת אנונימיות';
$string['studentquiz:view'] = 'ראה שאלות בפעילות סטודנטים יוצרים בוחן';
$string['studentquizname'] = 'שם';
$string['studentquizname_help'] = 'שם הפעילות, כפי שיוצג בעמוד הראשי של הקורס';
$string['submissionendbeforestart'] = 'לא ניתן לציין מועד אחרון להגשה שהוא מוקדם ממועד תחילת ההגשה.';
$string['tags'] = 'תגים';
$string['unapprove'] = 'לא מאושר';
