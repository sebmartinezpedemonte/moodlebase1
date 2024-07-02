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
 * Strings for component 'local_mass_enroll', language 'he', version '4.1'.
 *
 * @package     local_mass_enroll
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['creategroupings'] = 'יצירת אוספי־קבוצות במידת הצורך';
$string['creategroups'] = 'יצירת קבוצות במידת הצורך';
$string['email_sent'] = 'שליחת דוא"ל אל {$a}';
$string['enablemassenrol'] = 'לאפשר הרשמה כוללת מתפריט ניהול הקורס';
$string['enablemassunenrol'] = 'לאפשר ביטול הרשמה כוללת מתפריט ניהול הקורס';
$string['enroll'] = 'ביצוע הרשמה של משתמשים לקורס שלי';
$string['firstcolumn'] = 'עמודה ראשונה מכילה';
$string['idnumber'] = 'מספר מזהה';
$string['im:already_in'] = '{$a} כבר רשום';
$string['im:already_in_g'] = 'כבר משויך לקבוצה {$a}';
$string['im:and_added_g'] = 'והתווסף לקבוצה {$a}';
$string['im:enrolled_ok'] = '{$a} נרשם';
$string['im:err_opening_file'] = 'שגיאה בפתיחת קובץ {$a}';
$string['im:error_add_g_grp'] = 'שגיאה בהוספת קבוצה {$a->groupe} לאוסף קבוצות {$a->groupe}';
$string['im:error_add_grp'] = 'שגיאה בהוספת אוסף קבוצות {$a->groupe} לקורס {$a->courseid}';
$string['im:error_addg'] = 'שגיאה בהוספת קבוצה {$a->groupe}  לקורס {$a->courseid}';
$string['im:error_adding_u_g'] = 'שגיאה בהוספה לקבוצה {$a}';
$string['im:error_g_unknown'] = 'שגיאה, קבוצה לא ידועה {$a}';
$string['im:error_in'] = 'שגיאה בהרשמת {$a}';
$string['im:error_out'] = 'שגיאה בבטיול הרשמת {$a}';
$string['im:not_in'] = '{$a} איננו רשום';
$string['im:opening_file'] = 'פותח קובץ : {$a}';
$string['im:stats_g'] = '{$a->nb} קבוצות נוצרו : {$a->what}';
$string['im:stats_grp'] = '{$a->nb} אוספי קבוצות נוצרו : {$a->what}';
$string['im:stats_i'] = '{$a} נרשם';
$string['im:stats_ui'] = 'בוטלה ההרשמה של {$a}';
$string['im:unenrolled_ok'] = 'בוטלה ההרשמה של {$a}';
$string['im:user_unknown'] = '{$a} לא מוכר - מדלג שורה';
$string['im:using_role'] = 'רושם את המשתתפים בתפקיד: {$a}.';
$string['localmassenrolldefaults'] = 'הגדרות ברירת מחדל של הרשמה כוללת';
$string['localmassenrollextensions'] = 'הגדרות תוסף תפריט';
$string['mail_enrolment'] = 'שלום,

בוצעה הרשמה כוללת של משתמשים לקורס \'{$a->course}\'.
להלן דוח הפעולה:

{$a->report}

בברכה.';
$string['mail_enrolment_subject'] = 'הרשמה כוללת ב{$a}';
$string['mail_unenrolment'] = 'שלום,

בוצעה הרשמה כוללת של משתמשים לקורס \'{$a->course}\'.
להלן דוח הפעולה:

{$a->report}

בברכה.';
$string['mail_unenrolment_subject'] = 'ביטול הרשמה כוללת ב{$a}';
$string['mailreport'] = 'שליחת דוח בדוא"ל';
$string['mailreportdefault'] = 'ברירת מחדש של שליחת דוחות';
$string['mailreportdefault_help'] = 'ביצוע הגדרות ברירת מחדל עבור שליחת דוחות של טפסי הרשמה כוללת וביטול הרשמה כוללת';
$string['mass_enroll'] = 'הרשמה כוללת';
$string['mass_enroll:enrol'] = 'הרשמת משתמשים לקורס באמצעות קובץ CSV';
$string['mass_enroll:unenrol'] = 'ביטול הרשמה של משתתפים מקורס באמצעות קובץ CSV';
$string['mass_enroll_help'] = '<h1>הרשמה כוללת</h1>

<p>
מנגנון זה מאפשר הרשמה כוללת של משתמשים מתוך קובץ, חשבון אחד בכל שורה.
</p>
<p>
המערכת תדלג על <b>השורה הראשונה</b>, שורות ריקות ושורות המכילות משתמשים לא מוכרים.
<b> </p>

<p>
הקובץ יכול להכיל עמודה אחת או שתיים, מופרדות באמצעות פסיקים, פסיק-נקודה או טאבים.
מומלץ להכין את הקובץ באמצעות הגיליון האלקטרוני המכיל את רשימת הסטודנטים הרשמית, ובמידת הצורך להוסיף עמודה עם הקבוצות אליהם מעוניינים להוסיף את המשתמשים. לבסוף יש לייצא את הקובץ בפורמט CSV (*)</p>

<p>
<b>העמודה הראשונה חייבת להכין מזהה חשבון</b>: מספר מזהה (ברירת המחדל) או כתובת דוא"ל של המשתמש(**). </p>

<p>
העמודה השניה,<b> אם קיימת,</b>  צריכה להכין את שם הקבוצה אליה יש לשייך משתמש זה. </p>

<p>
במידה וקבוצה בשם זה איננה קיימת, המערכת תיצור קבוצה בשם זה, יחד עם אוסף קבוצות בשם זה ותשייך את הקבוצה לאוסף הקבוצות.
.<br/>
זאת מכיוון שבמערכת המודל, ניתן להגביל פעילויות לאוספי קבוצות (קבוצות של קבוצות), ולא לקבוצות, כך שזה בעצם מיועד להקל על העבודה במערכת בהמשך. לצורך כך נדרש שמצב אוספי הקבוצות במערכת יהיה מאופשר על ידי מנהל המערכת.
<p>
ניתן להשתמש באותן קבוצות, קבוצות שונות או לא להשתמש בקבוצות כלל לחשבונות שונים.
</p>

<p>
ניתן לבטל את האפשרות של יצירת קבוצות ואוספי קבוצות במידה ואלה כבר קיימים בקורס.
</p>

<p>
במצב ברירת מחדל המשתמשים יתווספו בתפקיד סטודנט, אך ניתן לבחור להוסיפם בתפקיד אחר (מורה, מורה לא עורך וכו\'), בהתאם לרמת ההרשאות שלך.
</p>

<p>
ניתן לחזור על הפעולה מספר פעמים לפי הצורך.
</p>


<h2> קבצים לדוגמא </h2>

מספר מזהה ושם הקבוצה שיש ליצור במידת הצורך בקורס (*)
<pre>
"idnumber";"group"
" 2513110";" 4GEN"
" 2512334";" 4GEN"
" 2314149";" 4GEN"
" 2514854";" 4GEN"
" 2734431";" 4GEN"
" 2514934";" 4GEN"
" 2631955";" 4GEN"
" 2512459";" 4GEN"
" 2510841";" 4GEN"
</pre>

מספרים מזהים בלבד (**)
<pre>
idnumber
2513110
2512334
2314149
2514854
2734431
2514934
2631955
</pre>

כתובות דוא"ל בלבד(**)
<pre>
email
toto@insa-lyon.fr
titi@]insa-lyon.fr
tutu@insa-lyon.fr
</pre>

שמות משתמשים וקבוצות, הפרדה באמצעות טאבים:

<pre>
username	 group
ppollet      groupe_de_test              will be in that group
codet        groupe_de_test              also him
astorck      autre_groupe                will be in another group
yjayet                                   no group for this one
                                         empty line skipped
unknown                                  unknown account skipped
</pre>

<p>
<span <font color=\'red\'>(*) </font></span>: גרשיים כפולים ורווחים, אשר מתווספים בחלק מתוכנות גיליון אלקטרוני, ימחקו.</p>

<p>
<span <font color=\'red\'>(**) </font></span>: חשבונות המשתמשים להוספה חייבים להיות מוגדרים במערכת המודל. לרוב כאשר המודל מסונכרן עם ניהול משתמשים חיצוני (כגון LDAP...)</p>';
$string['mass_enroll_info'] = '<p>
מנגנון זה מאפשר הרשמה כוללת של משתמשים מתוך קובץ, חשבון אחד בכל שורה.
</p>
<p>
המערכת תדלג על <b>השורה הראשונה</b>, שורות ריקות ושורות המכילות משתמשים לא מוכרים.
<b> </p>

<p>
הקובץ יכול להכיל מספר עמודות, מופרדות באמצעות פסיקים, פסיק-נקודה או טאבים.
</p>
<p>
<b>העמודה הראשונה חייבת להכין מזהה ייחודי</b>: מספר מזהה (ברירת המחדל) או כתובת דוא"ל של המשתמש(**). </p>
<p>העמודה השניה,<b> אם קיימת,</b>  צריכה להכין את שם הקבוצה אליה יש לשייך משתמש זה. </p>
<p>
ניתן לחזור על הפעולה מספר פעמים לפי הצורך, למשל במידה ושכחת להוסיף קבוצה לחלק מהמשתמשים.
</p>';
$string['mass_unenroll'] = 'ביטול הרשמה כוללת';
$string['mass_unenroll_help'] = '<h1>ביטול הרשמה כוללת</h1>

<p>
מנגנון זה מאפשר ביטול הרשמה כוללת של משתמשים מתוך קובץ, חשבון אחד בכל שורה.
</p>
<p>
המערכת תדלג על <b>השורה הראשונה</b>, שורות ריקות ושורות המכילות משתמשים לא מוכרים.
<b> </p>

<p>
הקובץ יכול להכיל מספר עמודות, מופרדות באמצעות פסיקים, פסיק-נקודה או טאבים.
מומלץ להכין את הקובץ באמצעות הגיליון האלקטרוני המכיל את רשימת הסטודנטים הרשמית, ובמידת הצורך להוסיף עמודה עם הקבוצות אליהם מעוניינים להוסיף את המשתמשים. לבסוף יש לייצא את הקובץ בפורמט CSV (*). ליחלופין ניתן להישתמש באותו הקובץ ששימש אתכם להוספה כוללת של משתמשים.</p>

<p>
<b>העמודה הראשונה חייבת להכין מזהה חשבון ייחודי</b>: מספר מזהה (ברירת המחדל) או כתובת דוא"ל של המשתמש(**). </p>

<p>
המערכת תתעלם מכל העמודות האחרות. </p>

<p>
ניתן לחזור על הפעולה מספר פעמים לפי הצורך.
</p>
<p>
<span <font color=\'red\'>(*) </font></span>: גרשיים כפולים ורווחים, אשר מתווספים בחלק מתוכנות גיליון אלקטרוני, ימחקו.</p>

<p>
<span <font color=\'red\'>(**) </font></span>: חשבונות המשתמשים חייבים להיות מוגדרים במערכת המודל ורשומים לקורס זה.</p>';
$string['mass_unenroll_info'] = '<p>
מנגנון זה מאפשר ביטול הרשמה כוללת של משתמשים מתוך קובץ, חשבון אחד בכל שורה.
</p>
<p>
המערכת תדלג על <b>השורה הראשונה</b>, שורות ריקות ושורות המכילות משתמשים לא מוכרים.
<b> </p>

<p>
הקובץ יכול להכיל מספר עמודות, מופרדות באמצעות פסיקים, פסיק-נקודה או טאבים.
<p>
<b>העמודה הראשונה חייבת להכין מזהה חשבון ייחודי</b>: מספר מזהה (ברירת המחדל) או כתובת דוא"ל של המשתמש(**). </p>

<p>
המערכת תתעלם מכל העמודות האחרות. ניתן להשתמש באותו הקובץ ששימש אתכם להרשמה כוללת של משתמשים לקורס זה.</p>

<p>
ניתן לחזור על הפעולה מספר פעמים לפי הצורך, למשל במידה ושכחתם לבטל רישום של חלק מהמשתמשים.
</p>';
$string['massenrollsettings'] = 'הגדרות הרשמה כוללת';
$string['pluginname'] = 'הרשמה כוללת (שיוך לתפקיד בקורס)';
$string['roleassign'] = 'התפקיד שיש להקצות';
$string['unenroll'] = 'ביטול הרשמה של משתמשים לקורס שלי';
$string['username'] = 'הזדהות';
