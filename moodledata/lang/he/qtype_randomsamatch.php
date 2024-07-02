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
 * Strings for component 'qtype_randomsamatch', language 'he', version '4.1'.
 *
 * @package     qtype_randomsamatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = 'אפשרויות בחירה מספיקות זמינות לשאלה זו, ולכן היא אינה זמינה בבוחן זה. אנא הודע למורה שלך.';
$string['nosaincategory'] = 'בקטגוריה \'{$a->catname}\' אין שאלות מסוג  "תשובה קצרה". יש לבחור קטגוריה אחרת, בה מצויות מספר שאלות מסוג "תשובה קצרה".';
$string['notenoughsaincategory'] = 'ישנן רק {$a->nosaquestions} שאלות \'תשובה קצרה\' בקטגוריה \'{$a->catname}\'. יש לבחור בקטגוריה אחרת, יש ליצור מספר שאלות נוספות בקטגוריה זו כדי להקטין את מספר השאלות בהן בחרת.';
$string['pluginname'] = 'התאמה, מבוססת שאלות "תשובה קצרה" אקראיות';
$string['pluginname_help'] = 'מנקודת המבט של התלמיד, השאלה נראת כשאלת התאמה רגילה. ההבדל הוא שרשימת השמות או המשפטים (השאלות) בעבור ההתאמה נבחרים אקראית משאלות מסוג "תשובה קצרה" בקטגוריה הנוכחית. צריכות להיות מספיק תשובות קצרות שלא השתמשו בהן בקטגוריה, אחרת תוצג הודעת שגיאה.';
$string['pluginname_link'] = 'question/type/randomsamatch';
$string['pluginnameadding'] = 'הוספת שאלת התאמה, מבוססת שאלות "תשובה קצרה" אקראיות';
$string['pluginnameediting'] = 'עריכת שאלת התאמה, מבוססת שאלות "תשובה קצרה" אקראיות';
$string['pluginnamesummary'] = 'שאלת התאמה, מבוססת שאלות "תשובה קצרה" אקראיות (Random short-answer Match) דומה לשאלת "התאמה" אולם נוצרת בכל ניסיון בוחן חדש באופן אקראי משאלת "תשובה־קצרה" המצוייה בקטגוריה מסוימת.';
$string['randomsamatch'] = 'התאמה, מבוססת שאלות "תשובה קצרה" אקראיות';
$string['randomsamatchintro'] = 'לכל אחד מהשאלות הבאות, יש לבחור את התשובה התואמת מהתפריט';
$string['randomsamatchnumber'] = 'מספר השאלות לבחירה';
$string['subcats'] = 'כולל תת-קטגוריות';
$string['subcats_help'] = 'אם מסומן, שאלות יבחרו גם מ תתי-קטגוריות';
