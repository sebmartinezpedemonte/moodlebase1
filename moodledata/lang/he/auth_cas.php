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
 * Strings for component 'auth_cas', language 'he', version '4.1'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'בחירת אימות';
$string['auth_cas_auth_user_create'] = 'יצירת משתמשים באופן חיצוני';
$string['auth_cas_baseuri'] = 'URI של השרת (אל תמלא כלום אם לא baseUri).
 <br />לדוגמא, אם שרת ה-CAS מגיב ל: host.domaine.fr/CAS/ אז: <br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'בסיס ה- URI';
$string['auth_cas_broken_password'] = 'אין באפשרותך להמשיך ללא שינוי הסיסמה שלך, אך נכון לעכשיו אין עמוד בו ניתן לשנות אותה. אנא צור קשר עם מנהל המוודל שלך.';
$string['auth_cas_cantconnect'] = 'חלק ה-LDAP של רכיב ה-CAS לא יכול להתחבר לשרת: {$a}';
$string['auth_cas_casversion'] = 'גירסת CAS protocol';
$string['auth_cas_certificate_check'] = 'הפעל הגדרה זו אם ברצונך לבצע בדיקת תוקף תעודת-זיהוי (certificate) של השרת';
$string['auth_cas_certificate_check_key'] = 'תוקף השרת';
$string['auth_cas_certificate_path'] = 'נתיב עבור euc. CA chain
(PEM Format)
עבור תקיפות תעודת-זיהוי השרת
(certificate)';
$string['auth_cas_certificate_path_empty'] = 'הפעלת הגדרת תקפות השרת, דורשת הזנת נתיב למיקום תעודת-זיהוי שרת (certificate) במערכת ההפעלה';
$string['auth_cas_certificate_path_key'] = 'נתיב תעודת-זיהוי
(Certificate)';
$string['auth_cas_changepasswordurl'] = 'כתובת URL לשינוי הסיסמה';
$string['auth_cas_create_user'] = 'השתמשו בזה אם אתם מעוניינים להכניס משתמשים שעברו אימות באמצעות CAS (שירות אימות מרכזי) לתוך בסיס הנתונים שלכם במוודל. אם לא, רק משתמשים שכבר קיימים בבסיס הנתונים של מוודל יוכלו להתחבר.';
$string['auth_cas_create_user_key'] = 'יצירת משתמש';
$string['auth_cas_enabled'] = 'הפעילו את אפשרות זו אם ברצונכם להשתמש באימות באמצעות CAS (שירות אימות מרכזי).';
$string['auth_cas_hostname'] = 'שם המחשב המארח את השרת שלCAS <br (שירות אימות מרכזי)/>כלומר: host.domain.fr';
$string['auth_cas_hostname_key'] = 'שם המחשב המארח';
$string['auth_cas_invalidcaslogin'] = 'אנו מצטערים אבל ההתחברות שלך נכשלה - לא ניתן היה לאשר אותך.';
$string['auth_cas_language'] = 'בחירת שפה עבור עמודי אימות';
$string['auth_cas_language_key'] = 'שפה';
$string['auth_cas_logincas'] = 'גישה לחיבור מאובטח';
$string['auth_cas_logoutcas'] = 'יש לבחור \'כן\' אם ברצונך להתנתק מ-CAS כשאתם מתנתקים מהמערכת';
$string['auth_cas_logoutcas_key'] = 'אפשרות התנתקות מ-CAS';
$string['auth_cas_multiauth'] = 'יש לבחור \'כן\' אם בידך צורות אימות מרובות (CAS + צורות אימות אחרות)';
$string['auth_cas_multiauth_key'] = 'צורות אימות מרובות';
$string['auth_cas_port'] = 'יציאה של שרת ה-CAS';
$string['auth_cas_port_key'] = 'יציאה';
$string['auth_cas_proxycas'] = 'שנה זאת ל-\'כן\' אם אתה משתמש ב-CAS באופן פעולה proxy';
$string['auth_cas_proxycas_key'] = 'אופן פעולה proxy';
$string['auth_cas_server_settings'] = 'הגדרת התצורה של שרת ה-CAS (שירות אימות מרכזי)';
$string['auth_cas_text'] = 'חיבור מאובטח';
$string['auth_cas_use_cas'] = 'השתמש ב-CAS';
$string['auth_cas_version'] = 'שימוש בגרסה של CAS (שירות אימות מרכזי)';
$string['auth_casdescription'] = 'שיטה זו עושה שימוש בשרת CAS (שירות אימות מרכזי - Central Authentication Service) על מנת לאמת משתמשים בסביבת התחברות יחידה (Single Sign On - SSO). אתם יכולים להשתמש גם באימות LDAP פשוט.
אם שם המשתמש והסיסמה הנתונים תקפים לפי CAS, מוודל יוצר כניסת משתמש חדשה בבסיס הנתונים, כאשר הוא לוקח תכונות משתמש מ-LDAP, אם הדבר נדרש. בהתחברויות עתידיות נבדקים רק שם המשתמש והסיסמה.';
$string['auth_casnotinstalled'] = 'לא ניתן להשתמש באימות CAS. רכיב ה-PHP LDAP אינו מותקן';
$string['noldapserver'] = 'לא נמצא שרת LDAP שמוגדר עבור CAS!
סנכרון מכובה.';
$string['pluginname'] = 'תקן CAS (שרת אימות מרכזי) לשם SSO';
