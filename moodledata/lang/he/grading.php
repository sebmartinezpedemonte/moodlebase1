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
 * Strings for component 'grading', language 'he', version '4.1'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' מסומן כשיטת מתן ציון פעילה עבור אזור \'{$a->area}\'';
$string['activemethodinfonone'] = 'לא נבחר שיטת מתן ציון מתקדמת עבור אזור \'{$a->area}\'. ציון מספרי פשוט יבחר.';
$string['changeactivemethod'] = 'שינוי שיטת מתן ציון פעילה ל';
$string['clicktoclose'] = 'הקליקו לסגירה';
$string['exc_gradingformelement'] = 'לא ניתן היה לשכפל ציון מפריט ציון זה.';
$string['formnotavailable'] = 'שימוש בשיטת מתן ציון מתקדמת נבחרה, אך טופס מתן הציון עדיין לא זמין. יש להגדיר אותו קודם לכן דרך הקישור במשבצת הניהול.';
$string['gradingformunavailable'] = 'הערה: טופס מתן הציון המתקדם לא מוכן כרגע. שיטת מתן ציון פשוטה זמינה כרגע עד שהטופס המתקדם יכנס לתוקף.';
$string['gradingmanagement'] = 'מתן ציון מתקדם';
$string['gradingmanagementtitle'] = 'מתן ציון מתקדם: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'שיטת מתן ציון';
$string['gradingmethod_help'] = 'יש לבחור את שיטת מתן הציון אשר בה תשתמש עבור חישוב ציונים בהקשר המיוחס.

בכדי לבטל את אפשרות מתן ציון מתקדם ולחזור למנגנון מתן ציון פשוט, יש לבחור \'ציון מספרי או מדרגת־הערכה\'.';
$string['gradingmethodnone'] = 'ציון מספרי או מדרגת־הערכה';
$string['gradingmethods'] = 'שיטות מתן ציון';
$string['manageactionclone'] = 'יצירת טופס מתן ציון על-ידי שימוש במחוון קיים';
$string['manageactiondelete'] = 'מחיקת מחוון נוכחי';
$string['manageactiondeletedone'] = 'הטופס נמחק בהצלחה';
$string['manageactionedit'] = 'עריכת מחוון נוכחי';
$string['manageactionnew'] = 'יצירת טופס מתן ציון על-ידי מחוון חדש';
$string['manageactionshare'] = 'שיתוף המחוון ברמה מערכתית';
$string['manageactionshareconfirm'] = 'הינך עומד לשמור העתק טופס מתן הציון \'{$a}\' כתבנית ציבורית חדשה. משתמשים אחרים באתר שלך יוכלו ליצור טופסי מתן ציון חדשים בפעילויותיהם מתבנית זו.';
$string['manageactionsharedone'] = 'הטופס נשמר בהצלחה כתבנית';
$string['noitemid'] = 'מתן ציון אינו אפשרי. פריט הציון איננו קיים.';
$string['nosharedformfound'] = 'לא נמצאה תבנית';
$string['searchownforms'] = 'כולל המחוונים האישיים שלי';
$string['searchtemplate'] = 'חיפוש טופסי מתן ציון';
$string['statusdraft'] = 'טיוטה';
$string['statusready'] = 'מוכן לשימוש';
$string['templatedelete'] = 'מחיקה';
$string['templatedeleteconfirm'] = 'הינך עומד למחוק את התבנית המשותפת \'{$a}\'.
מחיקת תבנית לא משפיעה על טפסים קיימים אשר נוצרו ממנה.';
$string['templateedit'] = 'עריכה';
$string['templatepick'] = 'שימוש בתבנית זו';
$string['templatepickconfirm'] = 'האם ברצונך להשתמש בטופס מתן ציון \'{$a->formname}\'  כתבנית עבור טופס מתן ציון ב
\'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'השתמש בטופס זה כתבנית';
$string['templatesource'] = 'מיקום: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'הטופס שלי';
$string['templatetypeshared'] = 'תבנית משותפת';
