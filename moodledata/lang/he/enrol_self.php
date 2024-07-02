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
 * Strings for component 'enrol_self', language 'he', version '4.1'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'הרישום אינו זמין או שאינו זמין';
$string['canntenrolearly'] = 'לא ניתן להירשם כעת. הרישום מתחיל מ: {$a}';
$string['canntenrollate'] = 'לא ניתן יותר להירשם. הרישום הסתיים ב: {$a}';
$string['cohortnonmemberinfo'] = 'רק חברי הקבוצה המערכתית \'{$a}\' רשאים לבצע הרשמה עצמית.';
$string['cohortonly'] = 'רק חברי קבוצה מערכתית';
$string['cohortonly_help'] = 'ניתן להגביל "שיוך עצמי" לחברי קבוצה-מערכתית מסוימת בלבד. שימו לב! שינוי הגדרה זו אינו משפיע על שיוכים קיימים';
$string['confirmbulkdeleteenrolment'] = 'האם להסיר את השיוך המשתמשים הללו מהתפקיד?';
$string['customwelcomemessage'] = 'הודעת "ברוכים הבאים" מותאמת מראש';
$string['customwelcomemessage_help'] = 'ניתן להוסיף הודעת ברוכים הבאים מותאמת לקורס, הכוללת תגיות HTML ותגיות ריבוי שפות.

ניתן לכלול את המשתנים הבאים בהודעה:

* שם הקורס {$a->coursename}
* קישור לעמוד פרופיל המשתמש {$a->profileurl}
* דואל המשתמש {$a->email}
* שם המשתמש המלא {$a->fullname}';
$string['defaultrole'] = 'בררת־מחדל של הקצאת התפקיד';
$string['defaultrole_desc'] = 'בחירת תפקיד בקורס אליו ישויכו משתמשים חדשים, בעת בחירה ב "שיוך עצמי".';
$string['deleteselectedusers'] = 'הסרת השיוך של המשתמשים שנבחרו';
$string['editselectedusers'] = 'עריכת השיוך של המשתמשים שנבחרו';
$string['enrolenddate'] = 'תאריך סיום';
$string['enrolenddate_help'] = 'אם מופעל, משתמשים יכולים להירשם מתאריך זה ואילך בלבד.';
$string['enrolenddaterror'] = 'תאריך סיום ההרשמה לא יכול להיות מוקדם יותר מתאריך ההתחלה';
$string['enrolme'] = 'רשום אותי';
$string['enrolperiod'] = 'תקופת רישום';
$string['enrolperiod_desc'] = 'אורך תקופת הרישום כבררת־מחדל (בשניות). כאשר מוגדר "אפס", תקופת הרישום תהיה בלתי מוגבלת כבררת־מחדל.';
$string['enrolperiod_help'] = 'אורך תקופת זמן הרישום תקפה, מתחיל ברגע שהמשתמש רשום . אם כבוי, משך תקופת הרישום יהיה בלתי מוגבל.';
$string['enrolstartdate'] = 'תאריך התחלה';
$string['enrolstartdate_help'] = 'אם מופעל, משתמשים יכולים להירשם מתאריך זה ואילך בלבד.';
$string['expiredaction'] = 'פעולת ביטול רישום מהקורס';
$string['expiredaction_help'] = 'בחרו פעולה שיש לבצע כאשר תקופת הרישום של המשתמש פגה. שימו לב שנתוני והגדרות משתמש מסוימות עשויות להימחק עם הסרת הרישום';
$string['expirymessageenrolledbody'] = '{$a->user} יקר/ה,

זוהי הודעה שנועדה ליידע אותך שהרישום שלך לקורס \'{$a->course}\' עומד לפוג במועד {$a->timeend}.

אם אתם זקוקים לעזרה, אנא פנו אל {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'הודעת ביטול שיוך עצמי מהקורס';
$string['expirymessageenrollerbody'] = 'תוקף הרישום העצמי לקורס \'{$a->course}\' יפוג תוך {$a->threshold} עבור המשתמשים הבאים:

{$a->users}

על מנת להאריך את תקופת הרישום שלהם, לחצו על {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'הודעת ביטול שיוך עצמי';
$string['expirynotifyall'] = 'מורה ומשתמש שנרשם';
$string['expirynotifyenroller'] = 'מורה בלבד';
$string['groupkey'] = 'שימוש במפתחות הרשמה של הקבוצה';
$string['groupkey_desc'] = 'שימוש במפתחות הרשמה של הקבוצה כבררת־מחדל';
$string['groupkey_help'] = 'בנוסף לחסימת הגישה לקורס רק עבור אלו היודעים מהו מפתח ההרשמה, ניתן להוסיף גם מפתח הרשמה של קבוצה שעם הקלדתו המשתמשים יירשמו אוטומטית לקבוצה מסויימת בקורס.

בכדי להשתמש במפתח הרשמה של קבוצה, חובה להגדיר מפתח הרשמה לקורס וכן חובה להגדיר את המפתח גם בדף ההגדרות של הקבוצה.';
$string['keyholder'] = 'יש לקבל את מפתח הרשמה זה מ:';
$string['longtimenosee'] = 'הסרת משתמשים שאינם פעילים מהרישום לאחר';
$string['longtimenosee_help'] = 'אם המשתמשים לא נגשו לקורס במשך זמן רב, הם יוסרו מהרישום של הקורס באופן אוטומטי. משתנה זה מציין את תקופת הזמן הזו.';
$string['maxenrolled'] = 'מספר מירבי של משתמשים רשומים.';
$string['maxenrolled_help'] = 'ציין את המספר המירבי של משתמשים אשר מורשים להירשם באופן עצמאי. משמעות הערך 0 היא ללא גבול.';
$string['maxenrolledreached'] = 'המספר מירבי של משתמשים אשר מורשים להירשם באופן עצמאי  הגיע לסוף מכסתו.';
$string['messageprovider:expiry_notification'] = 'הודעות ביטול שיוך עצמי';
$string['newenrols'] = 'האם לאפשר רישום למשתמשים חדשים';
$string['newenrols_desc'] = 'לאפשר למשתמשים להירשם בעצמם לקורס חדש כבררת־מחדל.';
$string['newenrols_help'] = 'הגדרה זו קובעת אם משתמש יכול להירשם לקורס זה.';
$string['nopassword'] = 'קורס זה זמין להרשמה ללא צורך בהזנת קוד רישום.';
$string['password'] = 'מפתח הרשמה';
$string['password_help'] = 'מפתח הרשמה מאפשר לגשת לקורס רק לאלו היודעים אותו. אם השדה כאן ריק, כל משתמש יוכל להרשם לקורס.

אם מפתח מוזן כאן, כל משתמש אשר ינסה להיכנס לקורס יצטרך לספק את מפתח זה בכדי להירשם ולהיכנס לקורס. שים לב כי משתמש יצטרך לספק באופן חד פעמי את המפתח, לאחר מכן יוכל להיכנס לקורס ללא מפתח , כמו כן הוא כבר יהיה רשום אליו..';
$string['passwordinvalid'] = 'מפתח ההרשמה שהזנת שגוי, אנא נסה שוב.';
$string['passwordinvalidhint'] = 'מפתח ההרשמה ההוא היה שגוי, אנא נסה שנית<br /> (הנה רמז - הוא מתחיל ב\'{$a}\')';
$string['pluginname'] = 'שיוך עצמי';
$string['pluginname_desc'] = 'תוסף הרישום העצמי מאפשר למשתמשים לבחור אילו קורסים יוכלו להיות מוגנים על-ידי מפתח הרשמה. הרישום נעשה מבפנים דרך התוסף הרישום הידני אשר מוכרח להיות מאופשר באותו קורס.';
$string['requirepassword'] = 'נדרש מפתח הרשמה';
$string['requirepassword_desc'] = 'נדרש מפתח הרשמה לקורסים חדשים ולמנוע הסרת מפתח הרשמה מקורסים קיימים.';
$string['role'] = 'הקצאת תפקיד בררת־מחדל';
$string['self:config'] = 'הגדרת מנגנון שיוך עצמי';
$string['self:enrolself'] = 'שיוך ורישום עצמי לקורס';
$string['self:manage'] = 'ניהול משתמשים רשומים';
$string['self:unenrol'] = 'הסרת שיוך משתמשים מתפקיד בקורס';
$string['self:unenrolself'] = 'הסרת שיוך עצמי מהקורס';
$string['sendcoursewelcomemessage'] = 'שליחת הודעה "ברוכים הבאים לקורס"';
$string['sendcoursewelcomemessage_help'] = 'כאשר פעיל, תשלח למשתמש הודעת "ברוכים הבאים" באמצעות הדוא"ל, כאשר מתבצע רישום לקורס באופן עצמאי';
$string['showhint'] = 'הצגת רמז';
$string['showhint_desc'] = 'הצגת אות ראשונה של מפתח גישת האורח';
$string['status'] = 'מנגנון רישום עצמי פעיל?';
$string['status_desc'] = 'אפשר למשתמשים להירשם לקורס באופן עצמאי כבררת־מחדל.';
$string['status_help'] = 'הגדרה זו קובעת אם משתמש יכול לרשום עצמם לקורס ( וגם להסיר מהרישום אם יש להם הרשאות מתאימות).';
$string['syncenrolmentstask'] = 'מנגנון סינכרון שיוך ורישום עצמי לקורס';
$string['unenrol'] = 'הסרת רישום משתמש';
$string['unenrolselfconfirm'] = 'האם הינך בטוח כי ברצונך להסיר עצמך מהרישום לקורס  "{$a}"?';
$string['unenroluser'] = 'האם הינך בתוך כי תרצה להסיר עצמך מקורס "{$a->user}" מהקורס "{$a->course}"?';
$string['unenrolusers'] = 'משתמשים זמינים';
$string['usepasswordpolicy'] = 'מדיניות סיסמת משתמש';
$string['usepasswordpolicy_desc'] = 'מדיניות סיסמת משתמש רגילה עבור מפתחות הרשמה.';
$string['welcometocourse'] = 'ברוכים הבאים לקורס {$a}';
$string['welcometocoursetext'] = 'ברוכים הבאים לקורס {$a->coursename}!

אם טרם עשית זאת, עליך לערוך את עמוד הפרופיל שלך בקורס כך שנוכל להכירך טוב יותר:

{$a->profileurl}';
