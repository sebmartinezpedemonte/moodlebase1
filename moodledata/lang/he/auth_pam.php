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
 * Strings for component 'auth_pam', language 'he', version '4.1'.
 *
 * @package     auth_pam
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_pamdescription'] = 'שיטה זה משתמשת ב-PAM כדי לגשת לשמות המשתמשים המקומיים על שרת זה. עליכם להתקין <a href="http://www.math.ohio-state.edu/~ccunning/pam_auth/" target="_blank">אימות PHP4 PAM </a> על מנת שתוכלו להשתמש ברכיב זה.';
$string['auth_passwordisexpired'] = 'תוקף הסיסמה שלך פג. האם ברצונך לשנות את סיסמתך כעת?';
$string['auth_passwordwillexpire'] = 'הסיסמה שלך תפוג בתוך {$a} ימים. האם ברצונך לשנות את סיסמתך כעת?';
$string['pluginname'] = 'PAM (Pluggable Authentication Modules)';
