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
 * Strings for component 'enrol_database', language 'he', version '4.1'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:unenrol'] = 'ביטול שיוך משתמשים־מושהים לתפקיד בקורס';
$string['dbencoding'] = 'קידוד מסד הנתונים';
$string['dbhost'] = 'שם או כתובת IP של השרת';
$string['dbhost_desc'] = '';
$string['dbname'] = 'שם בסיס הנתונים';
$string['dbpass'] = 'סיסמת השרת';
$string['dbsetupsql'] = 'פקודת הגדרת מסד הנתונים';
$string['dbsybasequoting'] = 'שימוש בציטוטי sybase';
$string['dbtype'] = 'סוג בסיס הנתונים';
$string['dbtype_desc'] = 'שם התקן ADOdb של מסד הנתונים, סוג מנוע מסד הנתונים החיצוני.';
$string['dbuser'] = 'משתמש השרת';
$string['debugdb'] = 'ניפוי שגיאות ADOdb';
$string['debugdb_desc'] = 'ניפוי שגיאות של חיבור ADOdb למסד נתונים חיצוני - שימושי כאשר מקבלים דף ריק בהתחברות. לא מתאים לאתרם אופרטיביים';
$string['defaultcategory'] = 'קטגורית קורס חדשה כבררת־מחדל';
$string['defaultcategory_desc'] = 'בררת־מחדל של קטגוריה ליצירת קורסים אוטומטית. שימושי כאשר לא צוין כל ID של קטגוריה חדשה או לא נמצא כזה מזהה.';
$string['defaultrole'] = 'תפקיד בררת־מחדל';
$string['defaultrole_desc'] = 'התפקיד שיוקצה כבררת־מחדל אם לא צויין כל תפקיד בטבלה חיצונית';
$string['ignorehiddencourses'] = 'התעלמו מקורסים נסתרים';
$string['ignorehiddencourses_desc'] = 'אם מאופשר, משתמשים לא ירשמו לקורסים אשר מוגדרים להיות נסתרים לסטודנטים';
$string['localcategoryfield'] = 'שם השדה בטבלת ה"קטגוריות", מולו נתאים רשומות מבסיס הנתונים החיצוני';
$string['localcoursefield'] = 'שם השדה בטבלת ה"קורסים", מולו נתאים רשומות מבסיס הנתונים החיצוני';
$string['localrolefield'] = 'שם השדה בטבלת ה"תפקידים", מולו נתאים רשומות מבסיס הנתונים החיצוני';
$string['localuserfield'] = 'שם השדה בטבלת ה"משתמשים", מולו נתאים רשומות מבסיס הנתונים החיצוני';
$string['newcoursecategory'] = 'שדה קטגוריית קורס חדש';
$string['newcoursefullname'] = 'שדה שם מלא של קורס חדש';
$string['newcourseidnumber'] = 'שדה מספר זיהוי ID של קורס חדש';
$string['newcourseshortname'] = 'שדה שם קצר לקורס חדש';
$string['newcoursetable'] = 'טבלת קורסים חדשים מרוחקים';
$string['newcoursetable_desc'] = 'יש להזין את שם הטבלה המכילה רשימת קורסים אשר אמורים להיווצר באופן אוטומטי. במצב ריק, לא יווצרו קורסים.';
$string['pluginname'] = 'בסיס־נתונים חיצוני';
$string['pluginname_desc'] = 'ניתן להשתמש בבסיס־נתונים חיצוני ( כמעט כל סוג ) לשם שיוך משתמשים לתפקיד בקורס. יש לוודא כי בסיס־הנתונים החיצוני שלך מכיל לפחות את השדות : id  של קורס, id של משתמש.
אשר מתואמים מול שדות מקבילים בטבלאות קורסים ומשתמשים של מערכת מוודל.';
$string['remotecoursefield'] = 'שם השדה בטבלה החיצונית בו אנו משתמשים כדי להתאים רשומות בטבלת הקורס';
$string['remotecoursefield_desc'] = 'שם השדה בטבלה המרוחקת שאנו משתמשים להתאמת ערכים בטבלת הקורס.';
$string['remoteenroltable'] = 'טבלת רישום משתמש מרוחק';
$string['remoteenroltable_desc'] = 'יש להזין את שם הטבלה שמכילה רשימת משתמשים רשומים. ריק, משמע כי אין סנכרון משתמשים רשומים';
$string['remoterolefield'] = 'שם השדה בטבלה החיצונית בו אנו משתמשים כדי להתאים רשומות בטבלת התפקידים';
$string['remoterolefield_desc'] = 'שם השדה בטבלה המרוחקת שאנו משתמשים להתאימה לערכים בטבלת ההרשאות';
$string['remoteuserfield'] = 'שם השדה בטבלה החיצונית בו אנו משתמשים כדי להתאים רשומות בטבלת המשתמשים';
$string['remoteuserfield_desc'] = 'שם השדה בטבלה המרוחקת שאנו משתמשים להתאימה לערכים בטבלת המשתמשים';
$string['settingsheaderdb'] = 'חיבור מסד נתונים חיצוני';
$string['settingsheaderlocal'] = 'מיפוי שדה מקומי';
$string['settingsheadernewcourses'] = 'יצירת קורסים חדשים';
$string['settingsheaderremote'] = 'סנכרון רישום מרוחק';
$string['templatecourse'] = 'תבנית קורס חדשה';
$string['templatecourse_desc'] = 'ניתן לבחירה: יצירה אוטומטית של קורסים שיכולים להעתיק את ההגדרות שלהם לקורס תבנית. ציין כאן את השם המוצר (shortname ) של קורס התבנית';
