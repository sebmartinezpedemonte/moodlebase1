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
 * Strings for component 'block_pageone', language 'he', version '4.1'.
 *
 * @package     block_pageone
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['config_mobile_find_help'] = 'הגדרה זו מתייחסת למנגנון המשמש לזיהוי מספרי טלפון נייד בנתונים של משתמש Moodle. האפשרויות הן:<br /><ul><li><b>שדה משתמש \'טלפון נייד\' של Moodle:</b> האפשרות המומלצת אם מסד הנתונים של המשתמשים שלך עקבי ומספר הטלפון הנייד לעולם אינו ממוקם בשדה השני . (שים לב שזה נקרא \'טלפון 2\' בחלק מהגרסאות הישנות יותר של Moodle).</li><li><b>פרמטר משתמש \'טלפון\' של Moodle:</b> משתמש במספר בשדה המשתמש \'טלפון\' שדה. (שים לב שזה נקרא \'טלפון 1\' בחלק מהגרסאות הישנות יותר של Moodle)</li><li><b>מספר טלפון תקף ראשון:</b> פעולה זו תבדוק גם את \'טלפון\' וגם \'טלפון נייד\' שדות. אם \'טלפון\' מכיל מספר חוקי, זה ישמש. אם לא, התוכן של \'טלפון נייד\' ישמש.</li><li><b>מספר טלפון חוקי שני:</b> פעולה זו תבדוק את השדות \'טלפון נייד\' ו\'טלפון\'. אם \'טלפון נייד\' מכיל מספר חוקי, זה ישמש. אם לא, התוכן של \'טלפון\' ישמש.</li><li><b>זהה אוטומטית את מספר הטלפון הנייד בבריטניה:</b> שיטה זו בודקת את כל מספרי הטלפון המאוחסנים בפרופיל המשתמש כדי לראות אם הם מתחילים עם הקידומת הרגילה של מספר הטלפון הנייד בבריטניה, 07.</li><li><b>מספר טלפון נייד עם קידומת האות m:</b> השתמש באפשרות זו אם מספר הטלפון הנייד מאוחסן עם קידומת m (למשל m07123 456789) בכל אחד משדות מספרי הטלפון </li></ul>';
$string['error_code_502'] = 'מספר לא תקין';
