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
 * Strings for component 'tool_uploaduser', language 'he', version '4.1'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'הרשה מחיקות';
$string['allowrenames'] = 'הרשה שינוי שם';
$string['allowsuspends'] = 'אפשור השהייה והפעלת חשבונות משתמש';
$string['csvdelimiter'] = 'תוחם CSV';
$string['defaultvalues'] = 'ערכי בררת־מחדל';
$string['deleteerrors'] = 'מחק שגיאות';
$string['encoding'] = 'קידוד';
$string['errormnetadd'] = 'לא ניתן להוסיף משתמשים מרוחקים';
$string['errors'] = 'שגיאות';
$string['nochanges'] = 'ללא שינויים';
$string['pluginname'] = 'העלאת משתמש';
$string['renameerrors'] = 'שגיאות בשינוי שמות';
$string['requiredtemplate'] = 'נדרש. תוכל להשתמש בתבנית תחביר כאן (%l = lastname, %f = firstname, %u = username).
לפרטים נוספים בדוק בקבצי העזרה ובדוגמאות.';
$string['rowpreviewnum'] = 'תצוגה מקדימה של שורות';
$string['uploadpicture_baduserfield'] = 'שיוך המשתמש הנקוב לא תקף. אנא נסה שנית.';
$string['uploadpicture_cannotmovezip'] = 'לא ניתן להסיט את קובץ ה-zip לספרייה הזמנית.';
$string['uploadpicture_cannotprocessdir'] = 'לא ניתן לבצע הליך פריסת zip לקבצים.';
$string['uploadpicture_cannotsave'] = 'לא ניתן לשמור תמונה עבור משתמש {$a}. אנא בדוק את התמונה המקורית.';
$string['uploadpicture_cannotunzip'] = 'לא ניתן לבצע הליך פריסת zip לקובץ התמונות.';
$string['uploadpicture_invalidfilename'] = 'קובץ התמונה {$a} מכיל תווים לא רצויים בשמו. ממשיך הלאה.';
$string['uploadpicture_overwrite'] = 'האם לדרוס תמונות משתמש קיימות?';
$string['uploadpicture_userfield'] = 'שיוך משתמש לשימוש בתמונות תואמות.';
$string['uploadpicture_usernotfound'] = 'משתמש בעל מאפיין \'{$a->userfield}\' המכיל ערך \'{$a->uservalue}\' לא קיים. ממשיך הלאה.';
$string['uploadpicture_userskipped'] = 'מדלג על משתמש {$a} (קיימת כבר תמונה).';
$string['uploadpicture_userupdated'] = 'התמונה עודכנה עבור המשתמש {$a}.';
$string['uploadpictures'] = 'העלאת תמונות משתמשים';
$string['uploadpictures_help'] = '<p>ניתן להעלות תמונות משתמשים כתמונה בקובץ מכווץ (zip). שמות קבצי התמונה יקראו כך : <i>chosen-user-attribute.extension</i>. לדוגמה, אם מאפיין המשתמש הנבחר לייצג את התמונה הוא שם המשתמש ושם המשתמש הוא user1234 , שם קובץ התמונה צריך להיות user1234.jpg . </p>
<p>סוגי סיומות תמונה שנתמכות: gif, jpg, and png.</p>
<p>שמות קבצי התמונה אינם תלוי רישיות (case sentitive)</p>';
$string['uploaduser:uploaduserpictures'] = 'העלאת תמונות משתמשים';
$string['uploadusers'] = 'העלאת משתמשים';
$string['uploadusers_help'] = '<p align="center"><b>העלאת משתמשים</b></p>

<p>קודם כל, שימו לב ש<strong>לרוב זה כלל לא הכרחי להעלות משתמשים בכמויות גדולות</strong>. כדי למזער את עבודת התחזוקה האישית שלכם, עליכם, קודם כל, לחקור צורות אימות שלא דורשות תחזוקה ידנית, כמו התחברות לבסיסי נתונים קיימים חיצוניים או לאפשר למשתמשים ליצור את החשבונות שלהם בעצמם. ראו את קטע האימות (אימות) בתפריטי המנהלים.</p>
<p>אם אתם בטוחים שאתם רוצים לייבא חשבונות משתמשים מרובים מתוך קובץ טקסט, אז אתם צריכים לעצב את קובץ הטקסט שלכם כדלקהמן:
</p>

<ul>
  <li>כל שורה בקובץ מכילה רשומה אחת.</li>
  <li>כל רשומה היא סידרה של נתונים שמופרדים באמצעות פסיקים.</li>
  <li>הרשומה הראשונה בקובץ היא מיוחדת, ומכילה בחובה רשימה של שמות של שדות. היא מגדירה את התסדיר של שאר הקובץ.    <blockquote>
      <p><strong>שמות דרושים של שדות:</strong> חובה לכלול את השמות של השדות שללו בתוך הרשומה הראשונה, ולהגדירם עבור כל משתמש.</p>
      <p></p>
      <font color="#990000" face="Courier New, Courier, mono">
</font>username, password, firstname, lastname, email, course1, group1, cohort1</p>
</p>
      <p><strong>שמות שדות שמשמשים כברירת מחדל:</strong> אלו נתונים לבחירתכם, אם הם לא כלולים אז הערכים נלקחים מהמנהל הראשי.</p>
      <p><font color="#990000" face="Courier New, Courier, mono">
</font> </p>institution, department, city, country, lang, auth, ajax, timezone, idnumber, icq, phone1, phone2, address, url, description, mailformat, maildisplay, htmleditor, autosubscribe
      <p><strong>שמות שדות הנתונים לבחירתכם: </strong>כל אלה לחלוטין נתונים לבחירתכם. שמות הקורסים הם ה"שמות הקצרים" של הקורסים - אם הם נמצאים אז הסטודנטים יירשמו לתוך אותם קורסים.
חובה ששמות הקבוצות יהיו שייכות לקורסים המתאימים, כלומר קבוצה 1 לקורס 1 וכו\'.
</p>
      <p> <font color="#990000" face="Courier New, Courier, mono">
course1, type1, role1, group1, enrolperiod1, course2, type2, role2, group2, enrolperiod2
	  </font></p>
    </blockquote>
    </li>
  <li>פסיקים בתוך הנתונים צריך לקודד כך: ,. קובץ האצווה יתרגם אותם באופן אוטומטי חזרה לפסיקים. </li>
  <li>עבור שדות בוליאניים השתמשו ב-0 עבור לא נכון ו-1 עבור נכון.  </li>
  <li>סוגים משמשים על מנת להודיע למוודל האם המשתמש הוא סטודנט או מורה במידה והקורס התואם קיים (כלומר, סוג2 תואם לקורס2). 1 = סטודנט, 2 = מורה עורך, 3 = מורה לא-עורך. אם הסוג נשאר ריק, או אם לא מפורט קורס תואם, המשתמש הופך לברירת המחדל שהיא: סטודנט.
 </li>
  <li>עבור קורסים, השתמשו בשם הקצר. עבור קבוצות, השתמשו בשם הקבוצה. עבור תפקידים, השתמשו במספר הזיהוי. </li>
  <li>הערה: אם המשתמש כבר רשום בבסיס הנתונים של מוודל, קובץ האצווה יחזיר את מספר הזיהוי עבור אותו המשתמש (אינדקס בסיס הנתונים), וירשום את המשתמש כסטודנט בכל אחד מהקורסים המפורטים ללא עידכון הנתונים המפורטים האחרים.
</li>
</ul>


<p>הנה דוגמא לקובץ יבוא תקף:</p>
<p><font size="-1" face="Courier New, Courier, mono">
username, password, firstname, lastname, email, course1, group1, cohort1
jonest, verysecret, Tom, Jones, jonest@someplace.edu, math102, Section 1, year 3
reznort, somesecret, Trent, Reznor, reznort@someplace.edu, math102, Section 3, year 4

</font></p>

<p align="center"><b>עדכון חשבונות קיימים</b></p>

<p>לפי ברירת מחדל, מוודל מניח שאתם תיצרו חשבונות משתמשים חדשים ולכן מדלג על רשומות בהם שם המשתמש מתאים לחשבון קיים. אך אם תגדירו את "עדכן חשבונות קיימים" ל<b>כן</b>, חשבון המשתמש הקיים יעודכן.  </p>

<p>כשאתם מעדכנים חשבונות קיימים אתם יכולים אף לשנות את שם המשתמש. עליכם לקבוע את "אפשר לשנות את השמות" ל<b>כן</b> ולכלול בתוך הקובץ שלכם שדה שנקרא <font color="#990000" face="Courier New, Courier, mono">שם משתמש ישן</font>.</p>

<p><b>אזהרה:</b> שגיאות כלשהן במהלך עדכון החשבונות הקיימים יכולות להשפיע על המשתמשים שלכם לרעה. נהגו בתשומת לב כאשר אתם משתמשים באפשרויות העדכון.
<br>
<b>
ניתן לקרוא בהרחבה בקישור של  -מדריכי עזרה עבור עמוד זה- בתחתית העמוד
</b>
</p>';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'העלאת תצוגה מקדימה של משתמשים';
$string['uploadusersresult'] = 'דוח העלאת משתמשים';
$string['useraccountupdated'] = 'משתמש עודכן';
$string['useraccountuptodate'] = 'משתמש מעודכן';
$string['userdeleted'] = 'משתמש נמחק';
$string['userrenamed'] = 'שם המשתמש הוחלף';
$string['userscreated'] = 'משתמשים נוצרו';
$string['usersdeleted'] = 'משתמשים נמחקו';
$string['usersrenamed'] = 'שם המשתמש הוחלף';
$string['usersskipped'] = 'משתמשים אשר דולגו';
$string['usersupdated'] = 'משתמשים עודכנו';
$string['usersweakpassword'] = 'משתמשים בעלי סיסמה פשוטה מידי';
$string['uubulk'] = 'בחירת המשתמשים אשר יעברו לעמוד "ניהול חתך משתמשים" בגמר ההעלאת המשתמשים.';
$string['uubulkall'] = 'כל המשתמשים';
$string['uubulknew'] = 'משתמשים חדשים';
$string['uubulkupdated'] = 'משתמשים מעודכנים';
$string['uucsvline'] = 'שורת ה-CSV';
$string['uulegacy1role'] = '(Original Student) typeN=1';
$string['uulegacy2role'] = '(Original Teacher) typeN=2';
$string['uulegacy3role'] = '(Original Non-editing teacher) typeN=3';
$string['uunoemailduplicates'] = 'מנע כפילויות בכתובות הדוא"ל';
$string['uuoptype'] = 'סוג העלאה';
$string['uuoptype_addinc'] = 'הוספת כל המשתמשים + הוספת מספר מונה לשמות משתמש, אם צריך';
$string['uuoptype_addnew'] = 'הוספת משתמש חדש בלבד + דילוג על משתמשים קיימים';
$string['uuoptype_addupdate'] = 'הוספת משתמשים חדשים ועדכון משתמשים קיימים';
$string['uuoptype_update'] = 'עדכן משתמשים קיימים בלבד';
$string['uupasswordcron'] = 'מחולל דרך ה-CRON';
$string['uupasswordnew'] = 'סיסמת משתמש חדשה';
$string['uupasswordold'] = 'סיסמת משתמש קיימת';
$string['uustandardusernames'] = 'שמות משתמש תקניים';
$string['uuupdateall'] = 'עדכון מתוך נתוני הקובץ וברירות מחדל';
$string['uuupdatefromfile'] = 'עדכון מתוך נתוני הקובץ';
$string['uuupdatemissing'] = 'מילוי החסר עם קובץ וברירות מחדל';
$string['uuupdatetype'] = 'פרטי משתמש קיימים';
$string['uuusernametemplate'] = 'תבנית שם משתמש';
