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
 * Strings for component 'debate', language 'he', version '4.1'.
 *
 * @package     debate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'פעולות';
$string['active'] = 'פעיל';
$string['attemptsdeleted'] = 'תגובות הדיונים נמחקו';
$string['cancel'] = 'ביטול';
$string['cancel_team_form'] = 'ביטול';
$string['confirm_delete'] = 'האם למחוק את התגובה?';
$string['cons'] = 'נגד';
$string['cons_response_count'] = 'ספירת תגובות נגד';
$string['cons_user_count'] = 'ספירת משתמשי נגד';
$string['createnew'] = 'יצירת צוות חדש';
$string['debate:addinstance'] = 'יצירת פעילות דיון בעד/נגד חדשה';
$string['debate:deleteanyresponse'] = 'מחיקת כל התגובות של הדיון';
$string['debate:deleteownresponse'] = 'מחיקת תגובות שלי מהדיון';
$string['debate:manageteams'] = 'ניהול צוותי דיונים';
$string['debate:updateownresponse'] = 'עדכון תגובות שלי';
$string['debate:view'] = 'הצגת תוכן הדיון';
$string['debate_team_active'] = 'צוות דיון: {$a->name} הופעל.';
$string['debate_team_active_error'] = 'הפעלת צוות דיון: {$a->name} לא צלחה.';
$string['debate_team_deactive'] = 'הפעלת צוות דיון: {$a->name} הופסקה.';
$string['debate_team_deactive_error'] = 'הפסקת פעילות צוות דיון: {$a->name} לא צלחה.';
$string['debate_team_delete_failed'] = 'לא ניתן למחוק את צוות הדיון: {$a->name}.';
$string['debate_team_deleted'] = 'צוות דיון: {$a->name} נמחק בהצלחה.';
$string['debate_team_saved'] = 'צוות הדיון נשמר.';
$string['debate_teams'] = 'צוותי דיונים';
$string['debate_topic'] = 'נושאי דיון';
$string['debatename'] = 'שם';
$string['debateresponsecom'] = 'סטודנטים נדרשים לפרסם תגובות';
$string['debateresponsecomgroup'] = 'תגובה נדרשת';
$string['delete'] = 'מחיקה';
$string['delete_debate_team'] = 'מחיקת צוות דיונים';
$string['delete_debate_team_confirmation'] = 'האם למחוק את צוות הדיון: {$a->name}?';
$string['edit'] = 'עריכה';
$string['edit_mode_active'] = 'מצב עריכה מופעל או לא ניתן להוסיף תגובות יותר בשלב זה.';
$string['edit_negative_team'] = 'עריכת צוות נגד';
$string['edit_positive_team'] = 'עריכת צוות בעד';
$string['empty_response'] = 'לא ניתן לשמור תגובה ריקה';
$string['error_add'] = 'שגיאה בעדכון התגובה, אנא בדקו את התגובה שהוקלדה, ניתן להזין טקסט בלבד';
$string['error_delete'] = 'שגיאה במחיקת התגובה, אנא בדקו את בסיס הנתונים למידע נוסף';
$string['event_response_added'] = 'תגובה נוספה';
$string['event_response_added_desc'] = 'משתמש בעל מזהה "{$a->userid}" הוסיף תגובה בעלת מזהה "{$a->objectid}" בדיון בעל מזהה "{$a->debateid}".';
$string['event_response_deleted'] = 'תגובה נמחקה';
$string['event_response_deleted_desc'] = 'משתמש בעל מזהה "{$a->userid}" מחק תגובה בעלת מזהה "{$a->objectid}" בדיון בעל מזהה "{$a->debateid}".';
$string['event_response_error'] = 'שגיאה בתגובה של דיון';
$string['event_response_error_desc'] = 'התרחשה שגיאה בעת ניסיון המשתמש בעל המזהה {$a->userid} לעדכן תגובה בדיון';
$string['event_response_updated'] = 'תגובה בדיון עודכנה';
$string['event_response_updated_desc'] = 'משתמש בעל מזהה "{$a->userid}" עידכן תגובה בעלת מזהה "{$a->objectid}" בדיבייט בעל מזהה "{$a->debateid}".';
$string['goback'] = 'חזרה';
$string['grade_debater'] = 'מתן ציונים';
$string['groupselection'] = 'בחירת קבוצות';
$string['id'] = 'מזהה';
$string['inactive'] = 'לא פעיל';
$string['join_debate'] = 'הצטרפות/צפייה בדיון';
$string['manage_negative_team'] = 'ניהול צוותי נגד';
$string['manage_positive_team'] = 'ניהול צוותי בעד';
$string['manage_teams'] = 'ניהול צוותים';
$string['maximum_character_2'] = 'יש מגבלה של 2 ספרות לכל היותר עבור מספר התגובות';
$string['maximum_character_255'] = 'ניתן להזין עד 255 תווים.';
$string['missingidandcmid'] = 'חסר מזהה רכיב קורס';
$string['missingresponsetype'] = 'חסר סוג תגובה';
$string['modulename'] = 'דיון בעד/נגד Debate';
$string['modulenameplural'] = 'דיונים בעד/נגד Debates';
$string['name'] = 'שם';
$string['no_more_response'] = 'לא ניתן להוסיף תגובות נוספות בצד זה של הדיון מהצוות שלך.';
$string['no_possible_match'] = 'לא נמצאו תגובות תואמות';
$string['no_team'] = 'צוות זה לא יכול להזין תגובות לצד זה של הדיון.';
$string['one_response'] = 'אפשרית תגובה אחת בכל צד של הדיון';
$string['one_response_any_side'] = 'אפשרית תגובה אחת בלבד בכל צד של הדיון, אין אפשרות להוסיף תגובות נוספות.';
$string['one_response_each_side'] = 'אפשרית תגובה אחת בלבד בכל צד של הדיון, אין אפשרות להוסיף תגובות נוספות בצד זה, היות וכבר קיימת תגובה.';
$string['pluginadministration'] = 'מנהל/ת הדיון';
$string['pluginname'] = 'דיון בעד/נגד Debate';
$string['possible_match'] = 'תגובות תואמות אפשריות';
$string['privacy:metadata:debate_response'] = 'מידע על תגובת נושא הדיון עבור קורס עמדות ודיונים Debate';
$string['privacy:metadata:debate_response:courseid'] = 'מזהה של קורס הדיון';
$string['privacy:metadata:debate_response:debateid'] = 'מזהה מופע הדיונים';
$string['privacy:metadata:debate_response:response'] = 'תגובת המשתמש לפעילות הדיון בעד/נגד';
$string['privacy:metadata:debate_response:responsetype'] = 'סוג התגובה לפעילות הדיון מהמשתמש';
$string['privacy:metadata:debate_response:timecreated'] = 'חותמת הזמן המציינת מתי נרשמה הפעילות הראשונה של המשתמש בקורס הדיון';
$string['privacy:metadata:debate_response:timemodified'] = 'חותמת הזמן המציינת מתי נרשמה הפעילות האחרונה של המשתמש בקורס הדיון';
$string['pros'] = 'בעד';
$string['pros_response_count'] = 'ספירת תגובות הבעד';
$string['pros_user_count'] = 'ספירת משתמשי הבעד';
$string['reset_debate_attempts'] = 'מחיקת תגובות הדיון';
$string['reset_debate_teams'] = 'מחיקת צוותי הדיון';
$string['responseallowed'] = 'תגובות מאופשרות';
$string['save'] = 'שמירה';
$string['showinmodule'] = 'הצגת תיאור בעמוד היחידה';
$string['showinmodule_help'] = 'הצגת התיאור בעמוד היחידה לאחר נושא הדיון';
$string['status'] = 'מצב';
$string['success_delete'] = 'התגובה נמחקה בהצלחה';
$string['teamsdeleted'] = 'צוותי הדיון נמחקו';
$string['timemodified'] = 'מועד השינוי';
$string['topicheader'] = 'נושא';
$string['two_response'] = 'מספר התגובות לכל צד מוגבל לאחת';
$string['unlimited_response'] = 'מספר התגובות לכל צד איננו מוגבל';
$string['update'] = 'עידכון';
$string['use_teams'] = 'הפעלת אפשרות הקבוצות';
$string['user_response'] = 'סוג תגובת המשתמש';
