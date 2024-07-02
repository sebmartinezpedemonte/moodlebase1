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
 * Strings for component 'portfolio_googledocs', language 'he', version '4.1'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID לקוח';
$string['noauthtoken'] = 'לא התקבל קוד אימות מגוגל. יש וודא שמערכת מוודל מאפשרת להתקשר לחשבון הגוגל שלך';
$string['nooauthcredentials'] = 'דרושים OAuth credentials.';
$string['nooauthcredentials_help'] = 'בכדי להשתמש במאגר Google Docs עליך להגדיר OAuth credentials ברכיב.';
$string['nosessiontoken'] = 'קוד אימות לא קיים, לא ניתן לבצע יצוא לגוגל';
$string['oauthinfo'] = '<p>בכדי להשתמש בתוסף זה, עליך לרשום את האתר שלך לGoogle , כמוסבר במסמך הבא <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>כחלק מתהליך הרישום, עליך להכניס את כתובת ה- URL ב- \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p>כרגע שהינך רשום תהיה מסופק עם   ID  של הלקוח ו secret בכדי להשתמש בזה עבור הגדרות כל תוספי Google Docs ו- Picasa </p>';
$string['pluginname'] = 'גוגל מסמכים (Drive)';
$string['secret'] = 'Secret';
$string['sendfailed'] = 'התרחשה שגיאה במהלך העברת הקובץ {$a} לגוגל';
