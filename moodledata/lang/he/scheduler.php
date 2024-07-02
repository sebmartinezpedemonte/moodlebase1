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
 * Strings for component 'scheduler', language 'he', version '4.1'.
 *
 * @package     scheduler
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'פעילות';
$string['actions'] = 'פעילויות';
$string['addappointment'] = 'הוספת תלמיד חדש';
$string['addcommands'] = 'הוספת מפגשים';
$string['addondays'] = 'הוספת פגישה ב';
$string['addsession'] = 'הוספת מפגשים חוזרים';
$string['addsingleslot'] = 'הוספת חלון מפגש אחד';
$string['addslot'] = 'ניתן להוסיף חלונות מפגש חדשים בכל שלב.';
$string['addstudenttogroup'] = 'הוספת סטודנט זה לקבוצת נוכחות';
$string['allappointments'] = 'כל המפגשים';
$string['allononepage'] = 'כל המפגשים בדף אחד';
$string['allowgroup'] = 'מפגש בלעדי - לחצו כדי לשנות';
$string['alreadyappointed'] = 'Cannot make the appointment. The slot is already fully booked.';
$string['appointagroup_help'] = 'Choose whether you want to make the appointment only for yourself, or for an entire group.';
$string['appointforgroup'] = 'יצירת פגישה עבור {$a}';
$string['appointingstudent'] = 'פגישה לחלון';
$string['appointingstudentinnew'] = 'פגישה לחלון חדש';
$string['appointment'] = 'פגישה';
$string['appointmentmode'] = 'Setting the appointment mode';
$string['appointmentmode_help'] = '<p>You may choose here some variants in the way appointments can be taken. </p>
<p><ul>
<li><b>"One single appointment" mode:</b> The student can only have a single appointment in this module. Once it has been seen by the teacher, he will not be allowed to apply for any further meeting. The only way to reset ability of a student to apply is to delete the old "seen" records.</li>
<li><b>"One at a time" mode:</b> The student can apply only to one (future) date. Once the meeting is over and concluded, he can appoint back. this mode is usefull to arbitrate project appointments on long run projects, specially when multiple phases of appointements are to be offered.
</li>
</ul>
</p>';
$string['appointmentno'] = 'מפגש {$a}';
$string['appointmentnote'] = 'הערות מהמפגש (יוצג לסטודנט)';
$string['appointments'] = 'מפגשים';
$string['appointmentsgrouped'] = 'מפגשים מחולקים לפי שיבוץ';
$string['appointmentsummary'] = 'מפגש ב {$a->startdate} מ {$a->starttime} עד {$a->endtime} עם {$a->teacher}';
$string['appointsolo'] = 'אני בלבד';
$string['appointsomeone'] = 'הוספת פגישה חדשה';
$string['areaappointmentnote'] = 'קבצים בהערות מהפגישה';
$string['areaslotnote'] = 'קבצים בהערות מהמפגש';
$string['areateachernote'] = 'קבצי הערות סודיות';
$string['attendable'] = 'יכולים להיות נוכחים בפגישה';
$string['attendablelbl'] = 'סהכ מועמדים להיות נוכחים בפגישה';
$string['attended'] = 'נכחו בפגישה';
$string['attendedlbl'] = 'כמות סטודנטים שנכחו';
$string['attendedslots'] = 'חלונות מפגש נוכחות';
$string['availableslots'] = 'חלונות מפגש זמינים';
$string['availableslotsall'] = 'כל חלונות המפגשים';
$string['availableslotsnotowned'] = 'לא משויך';
$string['availableslotsowned'] = 'משויך';
$string['bookslot'] = 'הזמנה למפגש';
$string['bookwithteacher'] = 'נוכח';
$string['bookwithteacher_help'] = 'יש לבחור מורה למפגש';
$string['break'] = 'הפסקה בין המפגשים';
$string['breaknotnegative'] = 'זמן ההפסקה חייב להיות שלילי';
$string['canbook1appointment'] = 'ניתן להיות מנוי ליותר ממפגש אחד בלוח זה';
$string['canbooknappointments'] = 'ניתן להיות מנוי לעוד {$a} מפגשים בלוח זה';
$string['canbooknofurtherappointments'] = 'לא ניתן להיות מנוי למפגש נוסף';
$string['canbooksingleappointment'] = 'ניתן להיות מנוי לעוד פגישה אחת בלוח זה';
$string['canbookunlimitedappointments'] = 'ניתן להיות מנוי למספר מפגשים בלתי מוגבל בלוח זה';
$string['cancelbooking'] = 'ביטול מנוי';
$string['chooseexisting'] = 'בחרו מפגש מהרשימה';
$string['choosingslotstart'] = 'בחירת זמן התחלת מפגש';
$string['choosingslotstart_help'] = 'שינוי (או בחירת) זמן תחילת הפגישה,אם הפגישה מתנגשת עם שיבוץ אחר, תתבקש ,
להחליף את כל הפגישות שמתנגשות
הערה:
 הפגישה החדשה שנקבעה תעקוף את כל ההגדרות הקודמות שנעשו';
$string['comments'] = 'הערות';
$string['complete'] = 'רשום';
$string['confirmdelete-all'] = 'פעולה זו תמחק את <b>כל</b> הפגישות בטווח זה, אין אפשרות לבטל פעולה זו, להמשיך בכל זאת?';
$string['confirmdelete-mine'] = 'פעולה זו תמחק את כל המפגשים שלך בתווך זה , אין אפשרות לבטל את המחיקה, להמשיך בכל זאת?';
$string['confirmdelete-myunused'] = 'פעולה זו תמחק את כל המפגשים שלך בתווך זה , אין אפשרות לבטל את המחיקה, להמשיך בכל זאת?';
$string['confirmdelete-one'] = 'למחוק מפגש?';
$string['confirmdelete-selected'] = 'פעולה זו תמחק את המפגשים שנבחרו, פעולה זו אינה ניתנת לביטול, האם למחוק בכל זאת?';
$string['confirmdelete-unused'] = 'פעולה זו תמחק את כל המפגשים שבתווך זה , אין אפשרות לבטל את המחיקה, להמשיך בכל זאת?';
$string['conflictingslots'] = 'מפגש זה {$a} לא יכול להיווצר עקב שיבוץ סותר';
$string['conflictlocal'] = 'בתזמון זה ({$a->duration} דקות) {$a->datetime}';
$string['conflictremote'] = '{$a->schedulername} לוח, {$a->courseshortname} בקורס({$a->duration} דקות) {$a->datetime}';
$string['contentformat'] = 'תצורה';
$string['contentformat_help'] = '';
$string['copytomyself'] = 'ישלח אלי עותק';
$string['course'] = 'מרחב לימוד';
$string['createexport'] = 'יצירת קובץ ליצוא';
$string['csvfieldseparator'] = 'מפריד שדות עבור csv';
$string['cumulatedduration'] = 'סיכום משך המפגשים';
$string['datatoinclude'] = 'תוכן שיכלל';
$string['datatoinclude_help'] = 'בחירת השדות שיופיע בקובץ, כל שדה יופיע בעמודה נפרדת';
$string['date'] = 'תאריך';
$string['datelist'] = 'מבוא';
$string['defaultslotduration'] = 'זמן מפגש בסיסי';
$string['defaultslotduration_help'] = 'משך בררת־המחדל (בדקות) בשיבוץ מפגשים שהגדרת';
$string['deleteallslots'] = 'מחיקת כל חלונות המפגש';
$string['deleteallunusedslots'] = 'מחיקת כל חלונות המפגש הפנויים';
$string['deletecommands'] = 'מחיקת מפגשים';
$string['deletemyslots'] = 'מחיקת חלונות המפגש שלי';
$string['deleteselection'] = 'מחיקת חלונות מפגש מסומנים';
$string['deletetheseslots'] = 'מחיקת חלונות אלו';
$string['deleteunusedslots'] = 'מחיקת חלונות מפגש לא פנויים שלי';
$string['department'] = 'מהיכן?';
$string['disengage'] = 'ביטול פגישות שלי';
$string['displayfrom'] = 'הצגת מפגש זה לסטודנטים מתאריך';
$string['distributetoslot'] = 'שיתוף עם הקבוצה כולה';
$string['divide'] = 'חלוקה לחלונות מפגש?';
$string['duration'] = 'משך זמן';
$string['durationrange'] = 'המפגש חייב להיות בן לפחות {$a->min} עד {$a->max} דקות';
$string['email_applied_html'] = ', <br/> {$a->time} ב  {$a->date} הוגשה בקשה <p>
לקורס: <a href="{$a->attendee_url}">{$a->attendee}</a> על ידי התלמיד

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>באמצעות לוח שכותרתו "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" באתר: <a href="{$a->site_url}">{$a->site}</a>.</p>';
$string['email_applied_plain'] = ',{$a->time} ב {$a->date} המפגשים מיושמים עבור
:לקורס {$a->attendee} על ידי התלמיד

{$a->course_short}: {$a->course}

.{$a->site} :באתר "{$a->module}" באמצעות לוח שכותרתו';
$string['email_applied_subject'] = '{$a->course_short}: מפגש חדש';
$string['email_cancelled_html'] = '<strong>{$a->date}</strong> ב <strong>{$a->time}</strong>,<br/> הפגישה שלך על <p>
 עם התלמיד <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong>לקורס :</p>

<p><strong>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>באמצעות לוח שכותרתו "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" באתר : <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">בוטל או עבר</span></strong>.</p>';
$string['email_cancelled_plain'] = 'הפגישה שלך בתאריך {$a->date} בשעה {$a->time},
עם הסטודנט {$a->attendee} בקורס:

{$a->course_short} : {$a->course}

בפעילות תזמון מפגשים "{$a->module}" במערכת : {$a->site}
בוטלה או הועברה.';
$string['email_cancelled_subject'] = '{$a->course_short}: המפגש נדחה או עודכן על ידי התלמיד';
$string['email_invite_html'] = '<p>בבקשה תבחר זמן לשיבוץ המפגש ב::</p> <p>{$a->scheduler_url}</p>';
$string['email_invite_subject'] = 'הזמנה: {$a->module}';
$string['email_invitereminder_html'] = '<P> זוהי רק תזכורת לכך שעדיין לא הגדרת את המפגש שלך. בחר משבצת זמן בהקדם האפשרי בכתובת: </ p> <p> {$ a-> scheduler_url} </ p>';
$string['email_invitereminder_subject'] = 'תזכורת: {$a->module}';
$string['email_reminder_html'] = '<p>יש לך פגישה קרובה על <strong>{$a->date}</strong>
מ <strong>{$a->time}</strong> ל <strong>{$a->endtime}</strong><br/>
עם <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong>.</p>

<p>במיקום: <strong>{$a->location}</strong></p>';
$string['email_reminder_plain'] = 'יש לך פגישה קרובה
על {$a->date} מ {$a->time} עד {$a->endtime}
עם {$a->attendant}.

במיקום: {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: תזכורת מפגש';
$string['email_teachercancelled_html'] = '<p>מינוייך על <strong>{$a->date}</strong> at <strong>{$a->time} </strong>,<br/>
עם ה {$a->staffrole} <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong>לקורס:</p>

<p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>בתזמון "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" באתר: <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">בוטל</span></strong>. בבקשה תבחר מפגש חדש.</p>';
$string['email_teachercancelled_plain'] = 'בפגישה שלך בתאריך {$a->date} ושעה {$a->time},
עם {$a->staffrole} {$a->attendant} בקורס:

{$a->course_short}: {$a->course}

בפעילות תזמון מפגשים "{$a->module}" במערכת: {$a->site}
התבטלה, אנא פנו לקביעת מועד חדש.';
$string['email_teachercancelled_subject'] = '{$a->course_short}: המפגש בוטל על ידי המורה';
$string['emailreminder'] = 'דואר תזכורת';
$string['emailreminderondate'] = 'דואר אלקטרוני לשליחת תזכורת';
$string['end'] = 'סיום';
$string['enddate'] = 'חזרה על זמני מפגשים עד';
$string['event_appointmentlistviewed'] = 'רשימת תזמון מפגשים';
$string['event_bookingadded'] = 'הוספת הזמנה לתזמון';
$string['event_bookingformviewed'] = 'צפייה בטופס הזמנה מתוזמן';
$string['event_bookingremoved'] = 'התזמון הוסר';
$string['event_slotadded'] = 'הוספת הזמנה לתזמון';
$string['event_slotdeleted'] = 'תזמון המפגש הוסר';
$string['everyone'] = 'כולם';
$string['excelformat'] = 'קובץ בתסדיר Excel';
$string['exclusive'] = 'בלעדי';
$string['exclusivity'] = 'בלעדית';
$string['exclusivity_help'] = '';
$string['exclusivityoverload'] = '';
$string['exclusivitypositive'] = 'מספר הסטודנטים לכל מפגש צריך להיות אחד או יותר';
$string['explaingeneralconfig'] = 'אפשרויות אלה יכולות להיקבע רק ע"י הרשאה מערכתית והם ייושמו לכל מנהלי המפגשים במערכת זו.';
$string['export'] = 'יצוא';
$string['field-attended'] = 'נוכח';
$string['field-date'] = 'תאריך';
$string['field-endtime'] = 'זמן סיום';
$string['field-grade'] = 'ציון';
$string['field-location'] = 'מיקום';
$string['field-maxstudents'] = 'מספר סטודנטים מירבי';
$string['field-slotnotes'] = 'הערות מהפגישה';
$string['field-starttime'] = 'זמן התחלה';
$string['field-studentemail'] = 'דואר אלקטרטני של הסטודנט';
$string['field-studentfirstname'] = 'שם פרטי של הסטודנט';
$string['field-studentfullname'] = 'שם מלא של הסטודנט';
$string['field-studentidnumber'] = 'מזהה סטודנט';
$string['field-studentlastname'] = 'שם משפחה של הסטודנט';
$string['field-studentusername'] = 'שם משתמש של הסטודנט';
$string['field-teachernote'] = 'הערה סודית (למורה בלבד)';
$string['fileformat'] = 'סוג הקובץ';
$string['finalgrade'] = 'ציון סופי';
$string['firstslotavailable'] = 'חלון המפגשים הראשון יהיה זמין מ: {$a}';
$string['forbidgroup'] = 'חלון קבוצה - לחצו לשינוי';
$string['forcewhenoverlap'] = 'אלץ כאשר יש חפיפה';
$string['forcewhenoverlap_help'] = '';
$string['forcewhenoverlap_link'] = 'mod/scheduler/conflict';
$string['forcourses'] = 'בחרו תלמידים בקורסים';
$string['friday'] = 'שישי';
$string['generalconfig'] = 'תצורה כללית';
$string['grade'] = 'ניקוד';
$string['gradeingradebook'] = 'ציון בגליון הציונים';
$string['gradingstrategy'] = 'אופן חישוב ציונים';
$string['gradingstrategy_help'] = '';
$string['group'] = 'קבוצה';
$string['groupbookings'] = 'מפגשים בקבוצה';
$string['groupbreakdown'] = 'על פי גודל הקבוצה';
$string['groupscheduling'] = 'הפעלת תזמון לפי קבוצות';
$string['groupscheduling_desc'] = '';
$string['groupsession'] = 'מפגש קבוצתי';
$string['groupsize'] = 'גודל הקבוצה';
$string['guardtime'] = 'זמן מניעת ביטול';
$string['guestscantdoanything'] = 'לאורחים אין כאן הרשאה לבצע שום שינוי';
$string['howtoaddstudents'] = '';
$string['ignoreconflicts'] = 'התעלמות ממפגשים מקבילים (מתנגשים)';
$string['ignoreconflicts_help'] = '';
$string['ignoreconflicts_link'] = 'mod/scheduler/conflict';
$string['includeemptyslots'] = 'כולל מפגשים ריקים';
$string['includeslotsfor'] = 'כולל מפגשים עבור';
$string['incourse'] = 'בתוך הקורס';
$string['introduction'] = 'הנחיה';
$string['isnonexclusive'] = 'אינו בלעדי';
$string['lengthbreakdown'] = 'על פי משך זמן המפגש';
$string['limited'] = 'מוגבל ({$a} נותר)';
$string['location'] = 'מיקום';
$string['location_help'] = 'יש לבחור מיקום (פיזי) למפגש';
$string['markasseennow'] = 'סומן כ"ניצפה"';
$string['markseen'] = 'לאחר המפגשים עם תלמיד, אנא סמנו אותם כמפגשים שהתקיימו על ידי בחירת התלמידים ואישור קיום המפגש.';
$string['maxgrade'] = 'הציון הגובה ביותר';
$string['maxstudentlistsize'] = 'אורך מירבי של רשימת התלמידים';
$string['maxstudentlistsize_desc'] = '';
$string['maxstudentsperslot'] = 'מספר התלמידים המירבי במפגש';
$string['maxstudentsperslot_desc'] = '';
$string['meangrade'] = 'השתמשו בציון הממוצע';
$string['meetingwith'] = 'מפגש עם';
$string['meetingwithplural'] = 'מפגש עם';
$string['messagebody'] = 'גוף ההודעה';
$string['messageprovider:bookingnotification'] = 'שליחת הודעה כאשר מתבצעת או מבוטלת הזמנה';
$string['messageprovider:invitation'] = 'הזמנה למנוי על מפגש';
$string['messageprovider:reminder'] = 'תזכורת על פגישה במועד קרוב';
$string['messagesubject'] = 'נושא';
$string['minutes'] = 'דקות';
$string['minutesperslot'] = 'דקות במפגש';
$string['missingstudents'] = '{$a} תלמידים שעדיין צריכים לקבוע מפגש';
$string['missingstudentsmany'] = '';
$string['mode'] = 'מצב';
$string['modeappointments'] = 'מפגש(ים)';
$string['modeintro'] = 'תלמיד/ה יכול/ה להירשם';
$string['modeoneatatime'] = 'כל פעם';
$string['modeoneonly'] = 'בלוח מפגשים זה';
$string['modulename'] = 'לוח־מפגשים';
$string['modulename_help'] = 'The scheduler activity helps you in scheduling appointments with your students.

Teachers specify time slots for meetings, students then choose one of them on Moodle.
Teachers in turn can record the outcome of the meeting - and optionally a grade - within the scheduler.

Group scheduling is supported; that is, each time slot can accomodate several students, and optionally it is possible to schedule appointments for entire groups at the same time.';
$string['modulename_link'] = 'mod/scheduler/view';
$string['modulenameplural'] = 'לוחות־מפגשים';
$string['monday'] = 'שני';
$string['myappointments'] = 'הפגישות שלי';
$string['myself'] = 'אני';
$string['name'] = 'שם לוח־המפגשים';
$string['needteachers'] = '';
$string['negativerange'] = 'לא ניתן להשתמש בטווח שלילי!';
$string['never'] = 'מעולם לא';
$string['noappointments'] = 'אין פגישות';
$string['noexistingstudents'] = 'אין תלמידים קיימים';
$string['nogroups'] = 'אין קבוצה זמינה לקביעת מפגש';
$string['noresults'] = 'אין תוצאות.';
$string['noschedulers'] = 'לא קיימים לוחות מפגש';
$string['noslots'] = 'אין מקום פנוי בפגישה. אנא צרו קשר עם המורה שלכם דרך המייל כדי לקבוע פגישה.';
$string['noslotsavailable'] = 'אין פגישות זמינות להרשמה';
$string['noslotsopennow'] = 'אין מפגשים פתוחים בשלב זה.';
$string['nostudents'] = 'לא נבחרו תלמידים';
$string['nostudenttobook'] = 'אין תלמידים לרישום';
$string['note'] = 'ציון';
$string['noteacherforslot'] = 'אין מורים זמינים עבור המפגשים';
$string['noteachershere'] = 'אין מורים זמינים';
$string['notifications'] = 'תזכורות';
$string['notifications_help'] = '';
$string['notseen'] = 'טרם נצפה';
$string['now'] = 'עכשיו';
$string['occurrences'] = 'חזרות';
$string['on'] = 'פעיל';
$string['onedaybefore'] = 'יום אחד לפני המפגש';
$string['onelineperappointment'] = 'שורה אחת עבור כל פגישה';
$string['onelineperslot'] = 'שורה אחת עבור כל מפגש';
$string['oneslotadded'] = 'מפגש אחד נוסף';
$string['oneslotdeleted'] = 'מפגש אחד נמחק';
$string['oneweekbefore'] = 'שבוע אחד לפני המפגש';
$string['onthemorningofappointment'] = 'בבוקר המפגש';
$string['options'] = 'אפשרויות';
$string['otherstudents'] = 'משתתפים אחרים';
$string['overall'] = 'בכללי';
$string['overlappings'] = 'מספר מפגשים מתנגשים';
$string['pluginadministration'] = 'ניהול לוח־מפגשים';
$string['pluginname'] = 'לוח־מפגשים';
$string['registeredlbl'] = 'תלמיד/ה שנקבעה לו/ה פגישה';
$string['reminder'] = 'תזכורת';
$string['resetappointments'] = 'מחיקת המפגש והציונים';
$string['resetslots'] = 'מחיקת חלונות זמן למפגש';
$string['return'] = 'בחזרה לקורס';
$string['revoke'] = 'ביטול הפגישה';
$string['saturday'] = 'שבת';
$string['save'] = 'שמירה';
$string['savechoice'] = 'שמור את בחירתי';
$string['saveseen'] = 'אישור מפגשים שהתקיימו';
$string['schedule'] = 'מפגש';
$string['scheduleappointment'] = 'קביעת פגישה עבור {$a}';
$string['schedulecancelled'] = '{$a} : המפגש נדחה או הועבר';
$string['schedulegroups'] = 'קביעת פגישה לפי קבוצה';
$string['scheduleinnew'] = 'קביעה בחלון זמן חדש';
$string['scheduleinslot'] = 'קביעה בחלון זמן';
$string['scheduler'] = 'מנהל מפגשים';
$string['scheduler:addinstance'] = 'הוספת לוח־מפגשים';
$string['scheduler:appoint'] = 'פגישה';
$string['scheduler:attend'] = '';
$string['scheduler:canscheduletootherteachers'] = '';
$string['scheduler:canseeotherteachersbooking'] = '';
$string['scheduler:disengage'] = '';
$string['scheduler:manage'] = '';
$string['scheduler:manageallappointments'] = '';
$string['scheduler:seeotherstudentsbooking'] = '';
$string['scheduler:seeotherstudentsresults'] = '';
$string['schedulestudents'] = 'קביעת מפגשים על פי שמות סטודנטים';
$string['scopemenu'] = 'להציג מפגש ב: {$a}';
$string['scopemenuself'] = 'הצגת המפגשים שלי ב: {$a}';
$string['search:activity'] = 'מידע אודות פעילות תזמון מפגשים';
$string['seen'] = 'התקיים';
$string['selectedtoomany'] = 'בחרת יותר מידי מפגשים.  ניתן לבחור רק {$a}.';
$string['sendinvitation'] = 'שליחת הזמנה';
$string['sendmessage'] = 'שליחת הודעה';
$string['sendreminder'] = 'שליחת תזכורת';
$string['sendreminders'] = 'שליחת דוא"ל תזכורת למפגשים הקרובים';
$string['sepcolon'] = 'נקודותיים';
$string['sepcomma'] = 'פסיק';
$string['sepsemicolon'] = 'נקודה ופסיק';
$string['septab'] = 'טאב';
$string['showemailplain'] = 'הצגת כתובות הדוא"ל בטקסט רגיל';
$string['showemailplain_desc'] = '';
$string['showparticipants'] = 'משתתף';
$string['slot'] = 'חלונות מפגשים';
$string['slot_is_just_in_use'] = 'מצערים, מפגשים אילו נבחרו על ידי תלמיד אחר! אנא נסו שוב.';
$string['slotdatetime'] = '{$a->shortdatetime} ל {$a->duration} דקות';
$string['slotdescription'] = '{$a->status} על {$a->startdate} מ {$a->starttime} ל {$a->endtime} ב {$a->location} עם {$a->facilitator}.';
$string['slots'] = 'חלונות מפגשים';
$string['slotsadded'] = '{$a} חלונות מפגשים נוספו';
$string['slotsdeleted'] = '{$a} חלונות מפגשים הוסרו';
$string['slottype'] = 'סוג חלון מפגש';
$string['slotupdated'] = 'חלון מפגש אחד עודכן';
$string['slotwarning'] = '';
$string['staffbreakdown'] = 'ע"י {$a}';
$string['staffrolename'] = 'תפקיד אחראי המפגש';
$string['staffrolename_help'] = 'תאור התפקיד שנפגש עם תלמידים. (איננו בהכרח "מורה")';
$string['start'] = 'התחלה';
$string['startpast'] = 'לא ניתן להתחיל משבצת פגישה ריקה מהעבר';
$string['statistics'] = 'סטטיסטיקה';
$string['student'] = 'תלמיד/ה';
$string['studentbreakdown'] = 'על פי תלמידים';
$string['studentcomments'] = 'הערות התלמידים';
$string['studentdetails'] = 'פרטי תלמיד/ה';
$string['studentmultiselect'] = 'כל תלמיד יכול להיבחר פעם אחת בלבד במפגש זה';
$string['students'] = 'תלמידים';
$string['sunday'] = 'ראשון';
$string['tab-otherappointments'] = 'כל המפגשים של התלמיד/ה';
$string['tab-otherstudents'] = 'תלמידים במפגש זה';
$string['tab-thisappointment'] = 'מפגש זה';
$string['teacher'] = 'מורה';
$string['teachernote'] = 'הערות סודיות (גלוי למורה בלבד)';
$string['teachersmenu'] = 'מראה מפגש ל: {$a}';
$string['thiscourse'] = 'הקורס הזה';
$string['thisscheduler'] = 'המורה הזה';
$string['thissite'] = 'המערכת כולה';
$string['thursday'] = 'חמישי';
$string['timefrom'] = 'מ:';
$string['timerange'] = 'טווח הזמן';
$string['timeto'] = 'ל:';
$string['totalgrade'] = 'ציון כולל';
$string['tuesday'] = 'שלישי';
$string['unattended'] = 'לא נכחו בפגישה';
$string['unlimited'] = 'ללא הגבלה';
$string['unregisteredlbl'] = 'תלמידים שלא נקבעה להם פגישה';
$string['upcomingslots'] = 'מפגשים עתידיים';
$string['updategrades'] = 'עדכון ציונים';
$string['updatesingleslot'] = '';
$string['usebookingform_link'] = 'mod/scheduler/bookingform';
$string['usenotes'] = 'הערות משתמש למינויים';
$string['usenotesboth'] = 'שני סוגים של הערות';
$string['usenotesnone'] = 'אף אחד';
$string['usenotesstudent'] = 'הערת המפגש, גלויה למורה ותלמיד';
$string['usenotesteacher'] = 'הערה סודית, גלוי למורים בלבד';
$string['wednesday'] = 'רביעי';
$string['welcomebackstudent'] = 'ניתן להזמין מפגש נוסף על ידי לחיצה על הכפתור "הזמן מפגש" למטה.';
$string['welcomenewstudent'] = 'הטבלה שלמטה מראה את כל חלונות הזמן הפנויים לפגישה. סמנו ע"י לחצן הבחירה את מבוקשכם, ולאחר מכן לחצו על מקש "שמור את בחירתי". אם תצטרכו לבצע שינוי בהמשך, תוכלו לחזור לדף זה.';
$string['welcomenewteacher'] = 'אנא בחרו באחד מהכפתורים ליצירת מפגש עם סטודנטים.';
$string['what'] = 'מה?';
$string['whathappened'] = 'מה סוכם?';
$string['whatresulted'] = 'כיצד הסתיים?';
$string['when'] = 'מתי?';
$string['where'] = 'היכן?';
$string['who'] = 'עם מי?';
$string['whosthere'] = 'מי שם?';
$string['xdaysbefore'] = 'ימים לפני מפגש';
$string['xweeksbefore'] = 'שבועות לפני מפגש';
$string['yesallgroups'] = 'כן, לכל הקבוצות';
$string['yesingrouping'] = 'כן, בקבוצת {$a}';
$string['yourappointmentnote'] = 'הערות לעניך בלבד';
$string['yourslotnotes'] = 'הערות על המפגש';
$string['yourtotalgrade'] = 'הציון הכולל שלך בפעילות זו הוא <strong>{$a}</ strong>.';
