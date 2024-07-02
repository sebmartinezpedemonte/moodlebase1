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
 * Strings for component 'workshopallocation_random', language 'he', version '4.1'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'הוספת ההערכות עצמיות';
$string['allocationaddeddetail'] = 'יש לבצע הערכה מחודשת:<strong>{$a->reviewername}</strong> הוא המעריך של <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'לא ניתן לבטל הקצאה שכבר קבלה ציון: המעריך <strong>{$a->reviewername}</strong>,הגשהauthor: <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'השתמש שוב בהערכות:
<strong>{$a->reviewername}</strong> נשמר כנצפה של <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'הגדרות ההקצאה';
$string['assessmentdeleteddetail'] = 'ביטול הקצאה ההערכה: <strong>{$a->reviewername}</strong> לא משמש יותר כמעריך של <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'תלמידים יכולים להעריך גם כאשר לא הגישו בעצמם';
$string['confignumofreviews'] = 'מספר בררת־מחדל של הגשות שיוקצו אקראית';
$string['excludesamegroup'] = 'מניעת הערכות על-ידי עמיתי מאותה קבוצה';
$string['noallocationtoadd'] = 'אין הקצאות להוספה';
$string['nogroupusers'] = '<p>
אזהרה: אם \'הערכת העמיתיים\' במצב קבצות שבו הן גלויות או \'קבוצות נפרדות\' , על הסטודנטים להיות חלק מלפחותקבוצה אחת בכדי לקבל יכולת להעריך עמית המוקצת להם על-ידי אמצעי זה. משתמשים שאינם שייכים לקבוצה יכולים לקבל הערכת עמיתים עצמאית שלהם קיימים הערכות שהוסרו
</p> <p>משתמשים אלו כרגע אינם חברים בקבוצה: {$a}</p>';
$string['numofdeallocatedassessment'] = 'ביטול {$a} הקצאה(ות)';
$string['numofrandomlyallocatedsubmissions'] = 'הקצאה אקראית של {$a} הגשות';
$string['numofreviews'] = 'מספר המעריכים';
$string['numofselfallocatedsubmissions'] = 'הקצאה עצמית של  {$a} הגשה(ות)';
$string['numperauthor'] = 'לכל הגשה';
$string['numperreviewer'] = 'לכל מעריך';
$string['pluginname'] = 'הקצאה אקראית';
$string['randomallocationdone'] = 'הקצאה אקראית בוצעה';
$string['removecurrentallocations'] = 'הסרת ההקצאות הקיימות';
$string['resultnomorepeers'] = 'לא נמצאו עוד עמיתים';
$string['resultnomorepeersingroup'] = 'לא נמצאו עוד עמיתים בקבוצה מופרדת זו';
$string['resultnotenoughpeers'] = 'אין מספיק עמיתים זמינים';
$string['resultnumperauthor'] = 'מנסה להקצות {$a} סקירות עבור כל מחבר';
$string['resultnumperreviewer'] = 'מנסה להקצות {$a} סקירות עבור כל מבקר';
$string['stats'] = 'סטטיסטיקה של הקצאות נוכחיות';
