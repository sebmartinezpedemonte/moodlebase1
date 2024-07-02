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
 * Strings for component 'auth_email', language 'he', version '4.1'.
 *
 * @package     auth_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '<p>אימות דואר אלקטרוני הוא שיטת האימות המשמשת כבררת־מחדל. כאשר המשתמש נרשם, ובוחר שם משתמש וסיסמה משלו, לכתובת הדואר האלקטרוני שלו נשלחת הודעת אישור. דואר אלקטרוני זה מכיל קישור מאובטח לעמוד בו המשתמש יכול לאשר את החשבון שלו. התחברויות עתידיות רק בודקות את שם המשתמש והסיסמה כנגד הערכים השמורים בבסיס הנתונים של Moodle.</p>
<p>
בנוסף לאימות זה,יש לבחור אותו מתוך רשימת תפריט של רישום עצמי בעמוד \'ניהול האימות\' .</p>';
$string['auth_emailnoemail'] = 'נכשל ניסיון לשלוח לך הודעת דואר אלקטרוני!';
$string['auth_emailrecaptcha'] = 'הוספת מנגנון אישור סרט/שמע לטופס הרישום של משתמשים אשר ביצעו שיוך עצמי בדוא"ל.
מנגנון זה, מגן על המערכת שלך מפני שליחת דוא"ל זבל.
מידע נוסף:  http://recaptcha.net/learnmore.html';
$string['auth_emailrecaptcha_key'] = 'אפשרו מנגנון reCAPTCHA';
$string['auth_emailsettings'] = 'הגדרות';
$string['pluginname'] = 'אימות מבוסס דואר־אלקטרוני';
$string['privacy:metadata'] = 'תוסף האימות העצמי על בסיס דואר אלקטרוני אינו אוגר כל מידע אישי על אודותיך';
