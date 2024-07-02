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
 * Strings for component 'enrol_manual', language 'he', version '4.1'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alterstatus'] = 'שינוי מצב';
$string['altertimeend'] = 'שינוי זמן הסיום';
$string['altertimestart'] = 'שינוי זמן ההתחלה';
$string['assignrole'] = 'הקצאת תפקיד';
$string['browsecohorts'] = 'עיון בקבוצות מערכתיות';
$string['browseusers'] = 'עיון במשתמשים';
$string['confirmbulkdeleteenrolment'] = 'האם למחוק את שיוך המשתמשים הללו?';
$string['defaultperiod'] = 'בררת־מחדל לתקופת רישום';
$string['defaultperiod_desc'] = 'בררת־מחדל של הגדרת משך תקופת השיוך לתפקיד בקורס (בשניות). אם מוגדר ערך 0 (אפס), משך זמן התקופה יהיה בלתי מוגבל כבררת־מחדל.';
$string['defaultperiod_help'] = 'בררת־מחדל של תוקף הגדרת אורך תקופת הרישום, מתחיל ברגע שהמשתמש משויך. אם ההגדרה כבויה, משך הזמן של השיוך לתפקיד בקורס יהיה בלתי מוגבל כבררת־מחדל.';
$string['defaultstart'] = 'בררת־מחדל לתחילת שיוך לתפקיד';
$string['deleteselectedusers'] = 'מחיקת השיוך לתפקיד בקורס של המשתמשים שנבחרו';
$string['editselectedusers'] = 'עריכת שיוך המשתמשים שנבחרו';
$string['enrolledincourserole'] = 'נרשם לקורס "{$a->course}" בתפקיד "{$a->role}"';
$string['enrolusers'] = 'שיוך משתמשים לתפקיד בקורס';
$string['enroluserscohorts'] = 'שיוך לתפקיד בקורס';
$string['expiredaction'] = 'פעולת ביטול שיוך לתפקיד בקורס';
$string['expiredaction_help'] = 'בחרו פעולה שיש לבצע כאשר פג תוקף שיוך המשתמש. שימו לב שמידע מסוים על המשתמש וההגדרות נמחק מהקורס בעת ביטול השיוך.';
$string['expirymessageenrolledbody'] = '{$a->user} יקר/ה,

הודעה זו נועדה ליידע אותך שהרישום שלך לקורס \'{$a->course}\' עומד לפוג במועד {$a->timeend}.

אם אתם זקוקים לעזרה, אנא צרו קשר עם {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'הודעת ביטול רישום מהקורס';
$string['expirymessageenrollerbody'] = 'הרישום לקורס \'{$a->course}\' יפוג בתוך {$a->threshold} עבור המשתמשים הבאים:

{$a->users}

על מנת להאריך את משך הרישום, הקליקו על {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'הודעת ביטול רישום מהקורס';
$string['manual:config'] = 'הגדרת מנגנוני שיוך ידני';
$string['manual:enrol'] = 'שיוך משתמשים לתפקיד בקורס';
$string['manual:manage'] = 'ניהול הרשמות משתמש';
$string['manual:unenrol'] = 'הסרת שיוך משתמשים מתפקיד בקורס';
$string['manual:unenrolself'] = 'הסרה עצמית מהקורס';
$string['messageprovider:expiry_notification'] = 'הודעות ביטול שיוך ידני מקורס';
$string['now'] = 'כעת';
$string['pluginname'] = 'שיוך ידני לתפקיד בקורס';
$string['pluginname_desc'] = 'רכיב "שיוך ידני" לקורס מאפשר לשייך באופן ידני משתמשים לקורס כלשהו באמצעות קישור להגדרות הניהול של הקורס, אשר הופעל על ידי משתמש בעל הרשאות מתאימות כמו מורה.
כבררת מחדל, התוסף זמין ופעיל כיוון שרכיבי "שיוך לקורס" אחרים כמו "שיוך עצמי" דורשים זאת.';
$string['selectcohorts'] = 'בחירת קבוצות מערכתיות';
$string['selectusers'] = 'בחירת משתמשים';
$string['status'] = 'אפשר רישומים ידניים';
$string['status_desc'] = 'אפשר גישת קורס של משתמשים רשומים פנימיים.';
$string['status_help'] = 'הגדרה זו קובעת האם משתמשים יכולים להירשום באופן ידני, דרך קישור בהגדרות הניהול של הקורס, על-ידי משתמש עם הרשאות מתאימות כמו מורה.';
$string['statusdisabled'] = 'לא תאפשר';
$string['statusenabled'] = 'מאופשר';
$string['unenrol'] = 'הסרת הרשמה למשתמש';
$string['unenrolselectedusers'] = 'הסרת הרשמה למשתמשים שנבחרו';
$string['unenrolselfconfirm'] = 'האם לבטל את ההרשמה שלך מהקורס "{$a}"?';
$string['unenroluser'] = 'האם להסיר את הרישום של "{$a->user}" מקורס "{$a->course}"?';
$string['unenrolusers'] = 'הסרת רישום משתמשים';
$string['wscannotenrol'] = 'תוסף הרישום לא יכול לרשום משתמש לקורס בעל ID = {$a->courseid}';
$string['wsnoinstance'] = 'תוסף הרישום ידני לא קיים או שאינו מאופשר וכבוי בקורס (id = {$a->courseid})';
$string['wsusercannotassign'] = 'אין לך הרשאות להקצאת תפקיד ({$a->roleid}) למשתמש ({$a->userid}) בקורס ({$a->courseid}).';
