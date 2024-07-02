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
 * Strings for component 'rating', language 'he', version '4.1'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'ממוצע דרוגים';
$string['aggregatecount'] = 'ספירת הדרוגים';
$string['aggregatemax'] = 'דרוג מירבי';
$string['aggregatemin'] = 'דרוג מזערי';
$string['aggregatenone'] = 'ללא דירוג (או ניקוד)';
$string['aggregatesum'] = 'סיכום דרוגים';
$string['aggregatetype'] = 'סוג צבירה';
$string['aggregatetype_help'] = 'סוג הצבירה קובעת איך יחושבו הדרוגים ליצירה של הציון הסופי בגליון הציונים.

* ממוצע של דרוגים - ממוצע כל הדרוגים
* ספירת הדרוגים - מספר הפריטים שדורגו הופך להיות הציון הסופי. דעו כי סך-כל הדרוג אינו יכול לעבור את הציון המירבי עבור הפעילות.
* מירבי - הדרוג הגבוה ביותר הופך להיות הציון הסופי.
* מיזערי - הדרוג הנמוך ביותר הופך להיות הציון הסופי
* סכום - כל הדרוגים מסתכמים יחד, דעו כי סך-כל הדרוג אינו יכול לעבור את הציון המירבי של הפעילות.

אם נבחרה האפשרות "ללא דרוגים"  הפעילות לא תופיע בגליון הציונים.';
$string['allowratings'] = 'האם לדרג את כל הפריטים?';
$string['allratingsforitem'] = 'כל הדרוגים שהוגשו';
$string['capabilitychecknotavailable'] = 'בדיקת תאימות לא זמינה עד אשר הפעילות תשמר';
$string['couldnotdeleteratings'] = 'מצטערים, לא ניתן למחוק זאת מכוון ואנשים כבר דרגו זאת';
$string['norate'] = 'דרוג פריטים לא זמין!';
$string['noratings'] = 'לא בוצעו דרוגים';
$string['noviewanyrate'] = 'ניתן לצפות בדרוגים עבור פריטים אשר הוזנו על ידך בלבד.';
$string['noviewrate'] = 'אין לך הרשאה לצפיה בדרוגי פריטים';
$string['rate'] = 'דרוג';
$string['ratepermissiondenied'] = 'אין לך הרשאה לדרג פריט זה';
$string['rating'] = 'דרוג';
$string['ratinginvalid'] = 'דרוג לא חוקי';
$string['ratings'] = 'דרוגים';
$string['ratingtime'] = 'ניתן לדרג פריטים בטווח התאריכים הבא, בלבד:';
$string['rolewarning'] = 'תפקידים בעלי הרשאות לדרוג';
$string['rolewarning_help'] = 'לביצוע דרוגים, צריך לאפשר את הרשאת "moodle/rating:rate" וכל יכולת הרשאת רכיב מתאימה. משתמשים אשר מוקצה להם תפקיד זה יוכלו לדרג פריטים.
רשימת הגדרות התפקידים זמינה מהקישור "הרשאות" במשבצת הניהול.';
$string['scaleselectionrequired'] = 'כאשר בוחרים אחד מסוגי צבירת הדרוגים, יש לקבוע גם ניקוד מדרגת־הערכה או ניקוד';
