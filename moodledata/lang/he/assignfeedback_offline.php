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
 * Strings for component 'assignfeedback_offline', language 'he', version '4.1'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'אישור יבוא ציונים';
$string['default'] = 'מאופשר, כבררת־מחדל';
$string['default_help'] = 'אם מאופשר, ניתן יהיה לתת ציון במצב לא־מקוון כבררת־מחדל עבור כל המטלות החדשות.';
$string['downloadgrades'] = 'הורדת גיליון־הציונים האלקטרוני';
$string['enabled'] = 'גיליון־ציונים אלקטרוני במצב לא־מקוון';
$string['enabled_help'] = 'אם מאופשר, מורה יוכל להוריד גיליון אלקטרוני המכיל את שמות הסטודנטים, לבדוק הגשות ולהזין ציונים (באופן לא־מקוון) ואז להעלות את גליון הציונים בחזרה למערכת לשם עדכון הציונים במטלות.';
$string['feedbackupdate'] = 'הגדרת שדה "{$a->field}" עבור "{$a->student}" ל-"{$a->text}"';
$string['gradelockedingradebook'] = 'הציון ננעל בגליון־הציונים עבור {$a}';
$string['graderecentlymodified'] = 'הציון של {$a}, נמצא יותר עודכני במערכת Moodle מאשר הציון אשר הוזן בגליון־האלקטרוני';
$string['gradesfile'] = 'גליון־אלקטרוני של הציונים (תסדיר csv)';
$string['gradesfile_help'] = 'מתן ציונים מעודכנים בגליון־האלקטרוני. בעזרת קובץ בתסדיר CSV שהורד ממטלה זו ומכיל עמודות עבור ציון הסטודנט, וקוד זיהוי.

הקידוד של הקובץ חייב להיות  UTF-8 .';
$string['gradeupdate'] = 'הגדרת ציון עבור {$a->student} ל- {$a->grade}';
$string['ignoremodified'] = 'עדכון ציונים אשר הוזנו בגליון האלקטרוני למרות שקיימים ציונים יותר עדכניים במערכת ה-Moodle.';
$string['ignoremodified_help'] = 'כאשר מורידים את הציונים של הסטודנטים כקובץ גליון־האלקטרוני הם מכילים את תאריך העדכון האחרון של כל אחד מהציונים. אם כל ציון כזה מתעדכן באתר לאחר ההורדה של הגליון־האלקטרוני, כבררת־מחדל, לא יתאפשר לעדכן את הציונים במערכת כאשר מעלים (מייבאים) את קובץ הציונים.

בחירת באפשרות זו, תבטל את בדיקה תאריכי מתן הציונים ויתכן כי בודקי מטלות הפועלים במקביל יוכלו לעדכן את הציון הסופי אחד של השני, בשוגג.';
$string['importgrades'] = 'אישור השינויים במתן ציונים מהגיליון האלקטרוני';
$string['invalidgradeimport'] = 'Moodle לא יכל לקרוא את הגליון האלקטרוני שהועלה. יש לוודא כי הוא שמור בתסדיר CSV וקידוד UTF-8 ולנסות שנית.';
$string['nochanges'] = 'לא נמצאו ציונים שנערך בהם שינוי בגיליון האלקטרוני שהועלה';
$string['offlinegradingworksheet'] = 'ציונים';
$string['pluginname'] = 'הזנת ציונים בגיליון־אלקטרוני (לא־מקוון)';
$string['processgrades'] = 'יבוא ציונים';
$string['skiprecord'] = 'דילוג על הרשומה';
$string['updatedgrades'] = 'עודכנו <strong>{$a->gradeupdatescount}</strong> ציונים ו<strong>{$a->feedbackupdatescount}</strong> משובים';
$string['updaterecord'] = 'עדכן רשומה';
$string['uploadgrades'] = 'העלאת ציונים מגיליון אלקטרוני';
