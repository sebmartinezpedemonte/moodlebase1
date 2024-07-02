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
 * Strings for component 'local_purgequestioncategory', language 'he', version '4.1'.
 *
 * @package     local_purgequestioncategory
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmmessage'] = 'אתם עומדים למחוק את קטגורית השאלות ותתי הקטגוריות שבה, כולל שאלות שלא נעשה בהן שימוש בכל תתי הקטגוריות!
האם למחוק?';
$string['confirmpurge'] = 'אישור מחיקת קטגורית שאלות';
$string['iconfirm'] = 'אני מאשר שאני מבין מה אני עושה';
$string['infowithmove'] = 'הקטגוריה \'{$a->name}\' מכילה {$a->subcategories} תת־קטגוריות {$a->unusedquestions} שאלות שלא נעשה בהן שימוש וגם {$a->usedquestions} שאלות בשימוש, אשר לא ניתן למחוק (שאלות אשר נמצאות בשימוש של בחנים).
יש לבחור קטגוריה אליה יועברו השאלות המקושרות לבחנים, אשר לא ימחקו.';
$string['infowithoutmove'] = 'הקטגוריה \'{$a->name}\' מכילה {$a->subcategories} תת־קטגוריות וגם {$a->unusedquestions} שאלות בהן לא נעשה שימוש.';
$string['pluginname'] = 'מחיקת קטגוריות שאלות';
$string['purgecategories'] = 'מחיקת קטגוריות';
$string['purgethiscategory'] = 'מחיקת קטגוריה זו';
$string['validationcategory'] = 'יש לבחור קטגוריה';
$string['validationconfirm'] = 'יש לאשר את פעולת המחיקה';
