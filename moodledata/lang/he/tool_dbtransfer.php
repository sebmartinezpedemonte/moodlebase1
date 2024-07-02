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
 * Strings for component 'tool_dbtransfer', language 'he', version '4.1'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'זמינות התקני מסד נתונים עבור הגירה';
$string['cliheading'] = 'הגירת נתונים (מסד נתונים) - וודא כי לאף אחד אין הרשאה לגשת לשרת במהלך הגירת נתונים';
$string['climigrationnotice'] = 'מערכת ה Moodle נמצאת בתהליך שידרוג בסיס הנתונים הראשי שלה. אנא נסו שוב בעוד מספר דקות או המתינו להודעה בדבר זמינות המערכת מצוות הניהול.';
$string['convertinglogdisplay'] = 'ממיר פעולות מוצגות של יומן מעקב';
$string['dbexport'] = 'העברת מסד נתונים';
$string['dbtransfer'] = 'מיגור מסד נתונים';
$string['enablemaintenance'] = 'אפשור מצב תחזוקה';
$string['exportdata'] = 'יצוא נתונים';
$string['notargetconectexception'] = 'לא ניתן להתחבר למסד הנתונים המיועד';
$string['options'] = 'אפשרויות';
$string['pluginname'] = 'יצוא בסיס־נתונים';
$string['targetdatabase'] = 'יעד מסד הנתונים';
$string['targetdatabasenotempty'] = 'יעד מסד הנתונים אינו יכול להכיל טבלאות עם ה-prefix שניתן!';
$string['transferdata'] = 'העברת נתונים';
$string['transferdbintro'] = 'תסריט זה יעביר את התכנים המלאים של מסד הנתונים  זה לשרת מסד נתונים אחר. דבר זה שימושי עבור מיגור של מידע לסוג שונה של מסד נתונים.';
$string['transferdbtoserver'] = 'העבר את מסד נתונים של Moodle זה לשרת אחר';
$string['transferringdbto'] = 'העברת מסד נתונים זה  {$a->dbtypefrom}
ל-  {$a->dbtype}
 "{$a->dbname}"
ב-
 "{$a->dbhost}"';
