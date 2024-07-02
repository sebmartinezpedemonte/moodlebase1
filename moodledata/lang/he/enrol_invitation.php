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
 * Strings for component 'enrol_invitation', language 'he', version '4.1'.
 *
 * @package     enrol_invitation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_day'] = '1 יום';
$string['a_minute'] = '1 דקה';
$string['about_hour'] = 'כשעה 1';
$string['accepteddescription'] = 'משתמש {$a->userid} קיבל את ההזמנה לקורס \'{$a->courseid}\'.';
$string['action_extend_invite'] = 'הארכת תוקף ההזמנה';
$string['action_resend_invite'] = 'שליחה מחודשת של ההזמנה';
$string['action_revoke_invite'] = 'ביטול הזמנה';
$string['assignrole'] = 'הקצאת תפקיד';
$string['default_subject'] = 'הזמנה לקורס: {$a}';
$string['defaultinvitevalues'] = 'ערכי ברירת מחדל של ההזמנה';
$string['defaultsubjectformat'] = 'ערך ברירת מחדל של הנושא';
$string['deleteddescription'] = 'משתמש {$a->userid} מחק את ההזמנה לקרס \'{$a->courseid}\' ל \'{$a->email}\'.';
$string['editenrolment'] = 'עריכת שיטת הרישום';
$string['email_clarification'] = 'ניתן להוסיף מספר כתובות דוא"ל על ידי הפרדתן באמצעות נקודה-פסיק, פסיקים, רווחים או שורות חדשות';
$string['emailaddressnumber'] = 'כתובת דואר אלקטרוני';
$string['emailmessageuserenrolled'] = 'שלום,

{$a->userfullname} ({$a->useremail}) קיבל את הזמנתך ל {$a->coursefullname} בתפקיד "{$a->rolename}". ניתן לבדוק את סטטוס של הזמנה זו על ידי צפייה ב:

* רשימת המשתתפים: {$a->courseenrolledusersurl}
* הסטוריית ההזמנות: {$a->invitehistoryurl}

{$a->sitename}
-------------
{$a->supportemail}';
$string['emailmsghtml'] = 'תצוגה מקדימה';
$string['emailmsghtml_help'] = '<p>שלום,</p>
<p>אתם מוזמנים להצטרף לקורס הבא:</p>
<ul>
  <li>שם הקורס: <b>{$a->coursename}</b></li>
  <li>תאריך תחילת קורס: <b>{$a->start}</b></li>
  <li>מועד סיום קורס: <b>{$a->end}</b></li>
</ul>
{$a->message}
<p>התחבר כדי לאשר את ההרשמה שלך לקורס.</p>
<p>על ידי שימוש בקישור זה, אתה מאשר שאתה האדם שאליו נשלחה הודעת האימייל הזו ועבורו מיועדת ההזמנה.</p>
<p><a class="btn btn-primary" href="{$a->inviteurl}">{$a->acceptinvitation}</a></p>
<p>אם אינך רוצה להצטרף לקורס זה, אנא השתמש בקישור הבא במקום זאת:</p>
<p><a class="btn btn-danger" href="{$a->rejecturl}">{$a->rejectinvitation}</a></p>
<p>שים לב הקישורים האלה יפוגו בתאריך <b>{$a->expiration}</b></p>
<p>מצפים לראות אותך בקורס.</p>';
$string['emailmsgunsubscribe'] = '<span class="apple-link">אם אתה סבור שקיבלת הודעה זו בטעות, זקוק לסיוע או אינך מעוניין לקבל הזמנות נוספות לקורס זה, אנא צור קשר:</span> <a href="mailto:{$a->supportemail}">{$a->supportemail}</a>.';
$string['emailtitleuserenrolled'] = '{$a->userfullname} אישר את הזמנתך ל {$a->coursefullname}.';
$string['enrolconfimation'] = 'נדרש אישור של המשתמש על בקשת הרישום';
$string['event_invitation_accepted'] = 'קבלה';
$string['event_invitation_rejected'] = 'דחייה';
$string['event_invitation_sent'] = 'שלח';
$string['extend_invite_sucess'] = 'תוקף ההזמנה עודכן בהצלחה';
$string['header_email'] = 'למי תרצה לשלוח הזמנה?';
$string['header_role'] = 'איזה תפקיד יוקצה למשתמש המוזמן?';
$string['historydateexpiration'] = 'תוקף ההזמנה';
$string['historydatesent'] = 'תאריך שליחת ההזמנה';
$string['historyexpires_in'] = 'פג תוקף ב';
$string['historyinvitee'] = 'משתמש מוזמן';
$string['historyrole'] = 'תפקיד';
$string['historystatus'] = 'סטטוס ההזמנה';
$string['historyundefinedrole'] = 'לא ניתן למצא את התפקיד. יש לשלוח מחדש את ההזמנה או לבחור תפקיד אחר.';
$string['invitation:enrol'] = 'הזמנת משתמשים';
$string['invitation_acceptance_title'] = 'קבלת הזמנה';
$string['invitationacceptance'] = '<p>אתה מוזמן לקורס <strong>{$a->coursefullname}</strong> בתפקיד <strong>{$a->rolename}</strong> .יש לאשר את ההזמנה כדי להצטרף לקורס</p>';
$string['invitationacceptancebutton'] = 'אישור הזמנה';
$string['invitationrejectbutton'] = 'דחיית הזמנה';
$string['invitationrejected'] = 'הזמנה נדחתה';
$string['invitationsuccess'] = 'ההזמנה נשלחה בהצלחה';
$string['inviteexpiration'] = 'תוקף ההזמנה';
$string['invitehistory'] = 'הסטוריית ההזמנות';
$string['inviteusers'] = 'הזמנת משתמשים';
$string['invtitation_rejected_notice'] = '<p>הזמנה זו נדחתה.</p>';
$string['less_minute'] = 'פחות מדקה';
$string['less_than_x_seconds'] = 'פחות מ {$a} שניות';
$string['loggedinnot'] = '<p>עליך להתחבר לאתר לפני שתוכל לקבל הזמנה זו.</p>';
$string['message'] = 'תוכן ההודעה';
$string['noenddate'] = 'אין מועד סיום';
$string['status_invite_rejected'] = 'ההזמנה נדחתה';
$string['status_invite_resent'] = 'שליחה מחודשת של ההזמנה';
$string['status_invite_revoked'] = 'ההזמנה בוטלה';
$string['status_invite_used'] = 'ההזמנה התקבלה';
$string['subject'] = 'נושא';
$string['unenrol'] = 'הסרת רישום של המשתמש';
$string['unenroluser'] = 'Do you really want to unenroll "{$a->user}" from course "{$a->course}"?';
$string['updateddescription'] = 'משתמש {$a->userid} האריך את תוקף ההזמנה לקורס \'{$a->courseid} ל \'{$a->email}\'.';
$string['usedefaultvalues'] = 'השתמש בהזמנה עם ערכי ברירת מחדל';
$string['usernotmatch'] = '<p>ההזמנה מיועדת למשתמש אחר.</p>';
$string['vieweddescription'] = 'המשתמש {$a->userid} ראה את ההזמנה לקורס עם ID \'{$a->courseid}\'.';
