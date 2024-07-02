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
 * Strings for component 'tool_uploadcourse', language 'he', version '4.1'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'לאפשר מחיקות';
$string['allowdeletes_help'] = 'האם השדה המחוק יתקבל או לא.';
$string['allowrenames'] = 'לאפשר שינוי שמות';
$string['allowrenames_help'] = 'האם השדה ששמו נכתב מחדש יתקבל או לא.';
$string['allowresets'] = 'לאפשר איפוס';
$string['allowresets_help'] = 'האם השדה המאופס יתקבל או לא';
$string['cannotdeletecoursenotexist'] = 'לא ניתן למחוק קורס שלא קיים';
$string['cannotgenerateshortnameupdatemode'] = 'לא ניתן לייצר שם מקוצר כאשר העדכונים מאופשרים';
$string['cannotreadbackupfile'] = 'לא ניתן לקרוא את קובץ הגיבוי';
$string['cannotrenamecoursenotexist'] = 'לא ניתן לשנות שם של קורס שלא קיים';
$string['cannotrenameidnumberconflict'] = 'לא ניתן לשנות את שם הקורס, מספר ה ID שלו מתנגש עם קורס קיים.';
$string['cannotrenameshortnamealreadyinuse'] = 'לא ניתן לשנות את שם הקורס, השם המקוצר שלו כבר בשימוש.';
$string['cannotupdatefrontpage'] = 'אין הרשאה לשינוי העמוד הראשי';
$string['canonlyrenameinupdatemode'] = 'ניתן לשנות את שם הקורס כאשר העדכון מאופשר.';
$string['canonlyresetcourseinupdatemode'] = 'ניתן לאפס קורס במצב עדכון בלבד.';
$string['coursecreated'] = 'הקורס נוצר';
$string['coursedeleted'] = 'הקורס נמחק';
$string['coursedeletionnotallowed'] = 'מחיקה קורס אינה מותרת';
$string['courseexistsanduploadnotallowed'] = 'הקורס קיים ועדכון לא מאופשר.';
$string['coursefile'] = 'קובץ';
$string['coursefile_help'] = 'קובץ זה חייב להיות קובץ CSV.';
$string['courseprocess'] = 'הקורס בתהליך';
$string['courserenamed'] = 'שינוי שם בקורס';
$string['courserenamingnotallowed'] = 'שינוי שם הקורס לא מורשה';
$string['coursereset'] = 'איפוס קורס';
$string['courseresetnotallowed'] = 'איפוס קורס מותר כעת';
$string['courserestored'] = 'הקורס שוחזר';
$string['coursescreated'] = 'קורסים שנוצרו: : {$a}';
$string['coursesdeleted'] = 'קורסים שנמחקו: {$a}';
$string['courseserrors'] = 'שגיאות בקורסים: {$a}';
$string['coursestotal'] = 'סך כל קורסים: {$a}';
$string['coursesupdated'] = 'קורסים שעודכנו: {$a}';
$string['coursetemplatename'] = 'שחזור מקורס לאחר העלאה';
$string['courseupdated'] = 'קורס עודכן';
$string['createnew'] = 'יצירת קורסים חדשים בלבד, לדלג על קיימים';
$string['createorupdate'] = 'ליצור קורסים חדשים, או לעדכן את הקיימים';
$string['csvdelimiter'] = 'תו מפריד CSV';
$string['csvfileerror'] = 'אירתה תקלה עם תבנית קובץ ה CSV. יש לבדוק אם מספר הכותרות תואם למספר העמודות, כמו כן יש לבדוק שהמפריד (delimiter) והקידוד של הקובץ נכונים: {$a}';
$string['csvline'] = 'שורה';
$string['defaultvalues'] = 'ערכי בררת־מחדל של קורס';
$string['encoding'] = 'קידוד';
$string['encoding_help'] = 'קידוד של קובץ ה- CSV.';
$string['errorwhiledeletingcourse'] = 'שגיאה בעת מחיקת הקורס';
$string['errorwhilerestoringcourse'] = 'שגיאה בעת שחזור הקורס';
$string['importoptions'] = 'אפשרויות יבוא';
$string['invalidbackupfile'] = 'קובץ גיבוי לא תקין';
$string['invalidcourseformat'] = 'תצורת תוכן קורס לא תקינה';
$string['invalidencoding'] = 'קידוד לא תקין';
$string['invalidroles'] = 'שמות תפקידים לא תקינים: {$a}';
$string['invalidshortname'] = 'שם קצר לא תקין';
$string['missingmandatoryfields'] = 'ערכים חסרים עבור שדות חובה: {$a}';
$string['nochanges'] = 'ללא שינויים';
$string['pluginname'] = 'העלאת קורס';
$string['preview'] = 'תצוגה מקדימה';
$string['reset'] = 'אתחל קורס לאחר ההעלאה';
$string['restoreafterimport'] = 'אתחול לאחר היבוא';
$string['result'] = 'תוצאה';
$string['rowpreviewnum'] = 'הצגת השורות';
$string['updatemode'] = 'אפשרות עדכון';
$string['updateonly'] = 'עדכון קורסים קיימים בלבד';
$string['uploadcourses'] = 'העלאת קורסים';
$string['uploadcoursespreview'] = 'תצוגת העלאת הקורסים';
$string['uploadcoursesresult'] = 'תוצאות העלאת הקורסים';
