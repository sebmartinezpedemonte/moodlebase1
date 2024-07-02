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
 * Strings for component 'tool_usersuspension', language 'he', version '4.1'.
 *
 * @package     tool_usersuspension
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['button:backtocourse'] = 'חזרה לקורס';
$string['button:continue'] = 'המשך';
$string['config:cleanlogs:disabled'] = 'ניקוי אוטומטי של ארכיון ניטור אינו פעיל ברמת המערכת';
$string['csv:upload:continue'] = 'המשך';
$string['email:user:delete:body'] = '<p>שלום רב {$a->name}</p>
<p>חשבונך הושעה והוסר לאחר אי שימוש במשך {$a->timesuspended}</p>
<p>בברכה<br/>{$a->signature}</p>';
$string['email:user:delete:subject'] = 'חשבונך הוסר';
$string['email:user:suspend:auto:body'] = '<p>שלום רב {$a->name}</p>
<p>חשבונך הושעה והוסר לאחר אי שימוש במשך {$a->timeinactive}</p>
<p>אם לדעתך חלה טעות או שברצונך לבטל את ההסרה וההשהייה של חשבונך, יש לפנות ל {$a->contact}</p>
<p>בברכרה<br/>{$a->signature}</p>';
$string['email:user:suspend:manual:body'] = '<p>שלום רב {$a->name}</p>
<p>חשבונך הושעה.</p>
<p>אם לדעתך חלה טעות או שברצונך לבטל את הסרת והשהיית חשבונך, יש לפנות ל {$a->contact}</p>
<p>בברכה<br/>{$a->signature}</p>';
$string['email:user:suspend:subject'] = 'חשבונך הושעה';
$string['email:user:unsuspend:body'] = '<p>שלום רב {$a->name}</p>
<p>חשבונך הופעל מחדש.</p>
<p>אם לדעתך חלה טעות או שברצונך לבטל את הסרת והשהיית חשבונך, יש לפנות ל {$a->contact}</p>
<p>בברכה<br/>{$a->signature}</p>';
$string['email:user:unsuspend:subject'] = 'חשבונך הופעל מחדש';
$string['err:statustable:set_sql'] = 'set_sql () איינו פעיל. טבלה זו מגדירה את עצמה ולא ניתנת להתאמה אישית';
$string['excludeuser'] = 'לא לכלול משתמש שבתהליך';
$string['form:static:uploadfile:desc'] = 'העלאת קובץ ההשעיה של המשתמש שלך כאן<br/>
ניתן להגדיר את קובץ ה- CSV שהועלה באופן הבא:<br/>
<ol>
<li>\'פשוט\' מכיל רק כתובות דוא"ל, אחת בכל שורה</li>
<li>\'מתקדם\' קובץ המכיל 2 עמודות, מציין את הסוג והערך.<br/>
הערכים האפשריים עבור סוג העמודה הם
<ul><li>email: ערך המציין את כתובת הדוא"ל של חשבון המשתמש</li>
<li>idnumber: ערך העמודה מציין את מספר חשבון המשתמש</li>
<li>username: ערך מציין את שם המשתמש של חשבון המשתמש</li>
</ul></ol>';
$string['label:users:excluded'] = 'משתמשים שלא נכללו';
$string['label:users:potential'] = 'משתמשים זמינים';
$string['link:currentstatus:overview'] = 'הצגת שינויים במצב הנוכחי';
$string['link:exclude:overview'] = 'סקירה כללית של החרגות';
$string['link:log:overview'] = 'הצגת יומני שינוי מצב';
$string['link:upload'] = 'העלאת קובץ החרגה';
$string['link:viewstatus'] = 'הצגת רשימת מצב';
$string['msg:exclusion:cohort:none-selected'] = 'לא נבחרו קבוצות־מערכתיות להחרגה';
$string['msg:exclusion:record:cohort:inserted'] = 'הגדרות \'החרגה\' עבור קבוצות־מערכתיות \'{$ a-> name}\' נוסף בהצלחה';
$string['msg:exclusion:record:exists'] = 'הגדרת ההחרגה כבר קיימת (לא נוספה הגדרה חדשה)';
$string['msg:exclusion:record:inserted'] = 'הגדרת החרגה נוספה בהצלחה';
$string['msg:exclusion:record:user:deleted'] = 'הגדרת \'החרגה\' עבור המשתמש \'{$ a-> fullname}\' הוסרה בהצלחה';
$string['msg:exclusion:record:user:inserted'] = 'הגדרת \'החרגה\' עבור המשתמש \'{$ a-> fullname}\' נוספה בהצלחה';
$string['msg:exclusion:records:cohort:deleted'] = 'הגדרות החרגות עבור קבוצות־מערכתיות נמחקו בהצלחה';
$string['msg:exclusion:records:deleted'] = 'הגדרות החרגות נמחקו בהצלחה';
$string['msg:exclusion:records:user:deleted'] = 'הגדרות החרגות עבור המשתמשים נמחקו בהצלחה';
$string['setting:smartdetect_suspendafter'] = 'תקופת אי פעילות';
$string['setting:uploadfilename'] = 'העלאת קובץ';
$string['setting:uploadfolder'] = 'העלאת תיקייה';
$string['status:deleted'] = 'נמחק';
$string['status:suspended'] = 'מוּשׁהֶה';
$string['thead:timemodified'] = 'מועד השינוי';
