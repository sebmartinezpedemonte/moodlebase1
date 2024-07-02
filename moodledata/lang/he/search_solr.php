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
 * Strings for component 'search_solr', language 'he', version '4.1'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'שרת ה-Solr שהוגדר אינו זמין או שהמִפתוּחַ לא קיים.';
$string['connectionsettings'] = 'הגדרות חיבור';
$string['errorcreatingschema'] = 'התרחשה שגיאה ביצירת schema של מנגנון החיפוש Solr , מסוג: {$a}';
$string['errorvalidatingschema'] = 'שגיאה באימות schema של Solr: שדה  {$a->fieldname} לא קיים. אנא בחרו ב <a href="{$a->setupurl}">קישור זה</a> כדי להגדיר את השדות הנדרשים.';
$string['extensionerror'] = 'תוסף ה-Solr ל-PHP אינו מותקן - אנא פנו ל<a href="https://docs.moodle.org/31/en/Global_search">הוראות התקנה</a>';
$string['fileindexing'] = 'אפשרו מִפתוּחַ קבצים';
$string['fileindexing_help'] = 'אם התקנת ה-Solr שלכם תומכת בכך, הגדרה זו מאפשרת למערכת לשלוח קבצים למִפתוּחַ.';
$string['fileindexsettings'] = 'הגדרות מִפתוּחַ של קבצים';
$string['maxindexfilekb'] = 'גודל מירבי של קובץ למִפתוּחַ';
$string['maxindexfilekb_help'] = 'קבצים הגדולים ממספר KB שהוגדר לא ימופתחו ולא יהיו זמינים לחיפוש, אם יוגדר כ-0 לא תהיה הגבלת גודל למִפתוּחַ.';
$string['minimumsolr4'] = 'נדרשת גרסה 4.0 ומעלה של מנגנון המיפתוח Solr.';
$string['missingconfig'] = 'טרם הוגדר שרת מִפתוּחַ מסוג Solr במערכת.';
$string['multivaluedfield'] = 'שדה "{$a}" מחזיר מערך במקום מספר. אנא מחקו את המִפתוּחַ הקיים, צרו חדש והריצו את setup_schema.php לפני מִפתוּחַ הנתונים ב-Solr.';
$string['nodatafromserver'] = 'לא נתקבלו נתונים מהשרת';
$string['pluginname'] = 'מנגנון חיפוש מבוסס Solr';
$string['searchinfo'] = 'שאילתות חיפוש';
$string['setupok'] = 'ה schema מוכנה לשימוש.';
$string['solrauthpassword'] = 'סיסמת אימות';
$string['solrauthuser'] = 'שם משתמש';
$string['solrhttpconnectionport'] = '';
$string['solrhttpconnectiontimeout'] = '';
$string['solrhttpconnectiontimeout_desc'] = 'משך זמן ניסיון קבלת נתונים בחיבור ה-HTTP הינו הזמן המירבי בשניות המותר לפעולת ההעברת הנתונים ב-HTTP. שאחריה, תבוטל הפעולה.';
$string['solrindexname'] = 'שם המפתח';
$string['solrinfo'] = 'מנגנון חיפוש מבוסס Solr';
$string['solrnotselected'] = 'מנגנון החיפוש של Solr אינו מנגנון החיפוש שהוגדר במערכת.';
$string['solrsecuremode'] = 'מצב מאובטח';
$string['solrserverhostname'] = 'שם השרת';
$string['solrserverhostname_desc'] = 'שם המתחם של שרת ה-Solr';
$string['solrsetting'] = 'הגדרות Solr';
$string['solrsslcainfo'] = 'שם הרשות המספקת את תעודת ה-SSL';
$string['solrsslcainfo_desc'] = 'שם הקובץ המכיל רשות אחת או יותר של ספקי SSL לבדיקה';
$string['solrsslcapath'] = 'נתיב לתעודה של רשות המספקת תעודות SSL';
$string['solrsslcapath_desc'] = 'נתיב של ריבוי ספקי תעודות לבדיקה';
$string['solrsslcert'] = 'תעודת SSL';
$string['solrsslcert_desc'] = 'קובץ של תעודה פרטית מסוג PEM';
$string['solrsslkey'] = 'מפתח SSL';
$string['solrsslkey_desc'] = 'קובץ של מפתח פרטי מסוג PEM';
$string['solrsslkeypassword'] = 'סיסמת מפתח SSL';
$string['solrsslkeypassword_desc'] = 'סיסמה למפתח SSL מסוג PEM';
