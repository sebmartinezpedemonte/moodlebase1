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
 * Strings for component 'webservice', language 'he', version '4.1'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'חריגת בקרת גישה';
$string['actwebserviceshhdr'] = 'פרוטוקולים של שרותים-מקוונים פעילים';
$string['addaservice'] = 'הוספת שרות';
$string['addcapabilitytousers'] = 'בדיקת יכולות המשתמשים';
$string['addcapabilitytousersdescription'] = 'על משתמשים להכיל 2 יכולות:
webservice:createtoken
ויכולת התואמת את שימוש הפרוטוקולים , למשל: webservice/rest:use, webservice/soap:use.
בכדי לבצע זאת עליך ליצור תפקיד בשם "שרותים-מקוונים" (למשל) בעל יכולות מתאימות ולהקצות משתמש ל"שרותים-מקוונים" כתפקיד מערכתי.';
$string['addfunction'] = 'הוספת פונקציה';
$string['addfunctionhelp'] = 'יש לבחור את הפונקציה אשר תתווסף לשירות';
$string['addfunctions'] = 'הוספת פונקציות';
$string['addfunctionsdescription'] = 'בחירת הפונקציות הנדרשות עבור שירות שנוצר זה עתה.';
$string['addrequiredcapability'] = 'הקצאת/הסרת יכולת נדרשת';
$string['addservice'] = 'הוספת שירות חדש : {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'הוספת פונקציות עבור השירות "{$a}"';
$string['allusers'] = 'כל המשתמשים';
$string['apiexplorer'] = 'API explorer';
$string['apiexplorernotavalaible'] = 'API explorer  לא זמין עדיין';
$string['arguments'] = 'משתנים';
$string['authmethod'] = 'שיטת אימות';
$string['cannotcreatetoken'] = 'אין הרשאות ליצירת קוד (token) שרותים-מקוונים עבור השרות {$a}.';
$string['cannotgetcoursecontents'] = 'לא ניתן לקבל תוכן הקורס';
$string['checkusercapability'] = 'בדיקת יכולות המשתמש';
$string['checkusercapabilitydescription'] = 'על המשתמש לקבל יכולות מתאימות עבור הפרוטוקולים בהם נעשה שימוש, למשל:
webservice/rest:use, webservice/soap:use.

לצורך כך יש ליצור תפקיד בשם "שרותים-מקוונים" (למשל) בעל יכולות גישה/שימוש בפרוטוקול(ים) הנדרש אשר יאפשר למשתמש גישה כתפקיד בהקשר (context) מערכתי.';
$string['configwebserviceplugins'] = 'מסיבות אבטחה, רק פרוטוקולים אשר בשימוש צריכים להיות מאופשרים.';
$string['context'] = 'הקשר (context)';
$string['createservicedescription'] = 'השירות מכיל פונקציות (שרותים) של שרותים-מקוונים.
כדי לאפשר למשתמש גישה לשירות חדש. יש ל\'אפשר\' ב
<strong>הוספת שירות</strong>
ובאפשרות \'משתמשים מורשים\' יש לבחור \'לא נדרשת יכולת\'.';
$string['createserviceforusersdescription'] = 'הגדרת חבילת "שרות" המכילה פונקציה(ות) מערכת שונות.
כדי לאפשר למשתמשים לגשת לשירות חדש, יש ל\'אפשר\' בדף <strong>הוספת שירות</strong> ולהסיר את הסימון באפשרות \'משתמשים מורשים\'. בנוסף, יש לבחר \'לא נדרשת יכולת\'.';
$string['createtoken'] = 'יצירת קוד (token)';
$string['createtokenforuser'] = 'יצירת קוד (token) עבור משתמש';
$string['createtokenforuserdescription'] = 'יצירת קוד (token) עבור משתמש של השרותים-המקוונים';
$string['createuser'] = 'יצירת משתמש ייעודי';
$string['createuserdescription'] = 'משתמש שרותים-מקוונים נדרש לייצג את המערכת המקבלת שרותים מערכת Moodle זו.';
$string['criteriaerror'] = 'חסרות הרשאות לחיפוש בסינון המבוקש.';
$string['default'] = 'בררת־מחדל עבור "{$a}"';
$string['deleteaservice'] = 'מחיקת שירות';
$string['deleteservice'] = 'מחיקת השירות: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'מחיקת השירות תמחק גם את קודים (tokens) הקשורים לשירות זה. האם ברצונך למחוק את שירות חיצוני "{$a}" ?';
$string['deletetokenconfirm'] = 'האם למחוק את קוד (token) השרותים-מקוונים עבור
<strong>{$a->user}</strong>
בשירות
<strong>{$a->service}</strong>?';
$string['disabledwarning'] = 'כל הפרוטוקולים של השרותים-מקוונים אינם זמינים. הגדרת "אפשור שרותים-מקוונים"
יכולה להימצא בהגדרות מאפיינים מתקדמים.';
$string['doc'] = 'תיעוד';
$string['docaccessrefused'] = 'אין לך הרשאה לצפות בתיעוד עבור קוד (token) זה';
$string['downloadfiles'] = 'מאפשר הוריד קבצים';
$string['downloadfiles_help'] = 'אם מאופשר, כל משתמש יוכל להוריד קבצים אם מפתחות אבטחה. כמובן שהם מוגבלים לקבצים שהם מורשים להוריד באתר.';
$string['editaservice'] = 'עריכת שירות';
$string['editservice'] = 'עריכת שרות: {$a->name} (id: {$a->id})';
$string['enabled'] = 'מאופשר';
$string['enabledocumentation'] = 'אפשר תיעוד פיתוח';
$string['enabledocumentationdescription'] = 'תיעוד web services מפורט, זמין לפרוטוקולים הפעילים';
$string['enableprotocols'] = 'אפשר פרוטוקולים';
$string['enableprotocolsdescription'] = 'לפחות פרוטוקול אחד צריך להיות זמין (מאופשר). מסיבות אבטחה, רק פרוטוקולים אשר נעשה בהם שימוש צריכים להיות זמינים.';
$string['enablews'] = 'איפשור שרותים-מקוונים';
$string['enablewsdescription'] = 'שרותים-מקוונים חייבים להיות זמינים בהגדרות המאפיינים המתקדמים';
$string['entertoken'] = 'הזנת קוד (token) אבטחה:';
$string['error'] = 'שגיאה: {$a}';
$string['errorcatcontextnotvalid'] = 'לא ניתן להפעיל את הפונקציות בהקשר (context) הקטגוריה (category id:{$a->catid}).
הודעת השגיאה היה:
{$a->message}';
$string['errorcodes'] = 'הודעת שגיאה';
$string['errorcoursecontextnotvalid'] = 'לא ניתן להפעיל פונקציות בהקשר (context) הקורס (course id:{$a->courseid}).
הודעת השגיאה היה:
{$a->message}';
$string['errorinvalidparam'] = 'משתנה "{$a}" לא חוקי';
$string['errornotemptydefaultparamarray'] = 'תאור שם המשתנה של ה-ws הזה - \'{$a}\' הוא במבנה בודד או מרובה. בררת־המחדל יכולה להיות מערך ריק. יש לבדוק את ה-ws שוב.';
$string['erroroptionalparamarray'] = 'תאור שם המשתנה של ה-ws הזה - \'{$a}\' הוא במבנה בודד או מרובה. לא ניתן להגדיר אותו כ- VALUE_OPTIONAL.
יש לבדוק את ה-ws שוב.';
$string['eventwebservicefunctioncalled'] = 'פונקציית שרות-מקוון נשלחה';
$string['eventwebserviceloginfailed'] = 'הזדהות לשרות-מקוון כשלה';
$string['eventwebserviceservicecreated'] = 'שרות-מקוון חדש נוצר';
$string['eventwebserviceservicedeleted'] = 'שרות-מקוון קיים נמחק';
$string['eventwebserviceserviceupdated'] = 'שרות-מקוון קיים עודכן';
$string['eventwebserviceserviceuseradded'] = 'משתמש נוסף לשרות-מקוון קיים';
$string['eventwebserviceserviceuserremoved'] = 'משתמש הוסר משרות-מקוון קיים';
$string['eventwebservicetokencreated'] = 'קוד (token) לשרות-מקוון נוצר';
$string['eventwebservicetokensent'] = 'קוד (token) לשרות-מקוון נשלח';
$string['execute'] = 'הפעלה';
$string['executewarnign'] = 'אזהרה: בחירה ב"הפעלה" תבצע שינויים במסד הנתונים שלך. החזרת המצב לקדמותו לא יוכל להתבצע בצורה אוטומטי!';
$string['externalservice'] = 'שירות חיצוני';
$string['externalservicefunctions'] = 'פונקציות שירות חיצוני';
$string['externalservices'] = 'שירות חיצוני';
$string['externalserviceusers'] = 'משתמשי השירות החיצוני';
$string['failedtolog'] = 'נכשל בנסיון לרשום דוח';
$string['filenameexist'] = 'הקובץ כבר קיים: {$a}';
$string['forbiddenwsuser'] = 'לא ניתן ליצור token למשתמשים מסוג: אורח, "לא-מאושר", מחוק או מושהה.';
$string['function'] = 'פונקציה';
$string['functions'] = 'פונקציות';
$string['generalstructure'] = 'מבנה כללי';
$string['information'] = 'מידע';
$string['installserviceshortnameerror'] = 'שגיאת קוד: השרות shortname "{$a}" יכול להכיל מספרים, אותיות וסימניי _-..  בלבד.';
$string['invalidextparam'] = 'משתנה API חיצוני לא חוקי: {$a}';
$string['invalidextresponse'] = 'תגובת API חיצונית לא חוקית: {$a}';
$string['invalidiptoken'] = 'קוד (token) לא חוקי - ה-IP שלך לא נתמך';
$string['invalidtimedtoken'] = 'קוד (token) לא חוקי - פג תוקף האסימון';
$string['invalidtoken'] = 'קוד (token) לא חוקי  - האסימון לא נמצא';
$string['iprestriction'] = 'הגבלת IP';
$string['iprestriction_help'] = 'המשתמש יכול לפנות לשרותים-מקוונים מכתובת IP המופיעה ברשימת ה-IP של המערכת. (מופרדת בסימני נקודה-פסיק)';
$string['key'] = 'מפתח';
$string['keyshelp'] = 'המפתחות משמשים גישה מאובטחת לנתונים אישיים מתוך החשבון המשתמש (שלך) ב-Moodle ליישומים חיצוניים';
$string['manageprotocols'] = 'ניהול פרוטוקולים';
$string['managetokens'] = 'ניהול גישה מאובטחת';
$string['missingcaps'] = 'יכולות חסרות';
$string['missingcaps_help'] = 'רשימה של יכולות הרשאה עבור השרות שאין למשתמש שנבחר. יכולות חסרות צריכות להתווסף לתפקיד המשתמש בכדי להשתמש בשרות.';
$string['missingpassword'] = 'חסרה סיסמה';
$string['missingrequiredcapability'] = 'היכולת {$a} נדרשת.';
$string['missingusername'] = 'חסר שם משתמש';
$string['missingversionfile'] = 'שגיאת קוד: קובץ  version.php חסר עבור הרכיב {$a}.';
$string['nameexists'] = 'שם זה כבר נמצא בשימוש על ידי שירות נוסף';
$string['nocapabilitytouseparameter'] = 'למשתמש אין את היכולת נדרשה להשתמש במשתנה {$a}';
$string['nofunctions'] = 'לשירות אין פונקציות';
$string['norequiredcapability'] = 'לא נדרשת יכולת';
$string['notoken'] = 'רשימת קודים (tokens) ריקה.';
$string['onesystemcontrolling'] = 'מתן אפשרות ליישום חיצוני לנהל את מערכת Moodle זו';
$string['onesystemcontrollingdescription'] = 'הצעדים הבאים יעזרו לך להגדיר את המנגון השרותים המקוונים (Web Services) של המערכת, בכדי לאפשר ליישום חיצוני לקבל שרותים שונים מערכת ה-Moodle שלך. התהליך כולל הגדרת שיטת אימות, יצירת קוד/מפתח מאובטח (security key), בחירת השרותים המבוקשים.';
$string['operation'] = 'פעולה';
$string['optional'] = 'אפשרי';
$string['passwordisexpired'] = 'פג תוקף הסיסמה';
$string['phpparam'] = 'XML-RPC (PHP structure)';
$string['phpresponse'] = 'XML-RPC (PHP structure)';
$string['postrestparam'] = 'PHP code for REST (POST request)';
$string['potusers'] = 'משתמשים שאינם מורשים';
$string['potusersmatching'] = 'תוצאות של משתמשים אשר אינם מורשים';
$string['print'] = 'יש להדפיס הכל';
$string['protocol'] = 'פרוטוקול';
$string['removefunction'] = 'הסרה';
$string['removefunctionconfirm'] = 'האם להסיר את הפונקציה "{$a->function}" מהשירות "{$a->service}"';
$string['requireauthentication'] = 'שיטה זו דורשת אימות בעל הרשאת xxx';
$string['required'] = 'נדרש';
$string['requiredcapability'] = 'יכולת נדרשת';
$string['requiredcapability_help'] = 'אם מאופשר, רק משתמשים עם יכולת נדרשת עשויים לגשת לשירות.';
$string['requiredcaps'] = 'יכולות נדרשות';
$string['resettokenconfirm'] = 'האם אכן ברצונך לאפס את מפתח web service  זה למשתמש
<strong>{$a->user}</strong>
בשירות <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'האם אכן ברצונך לאפס את המפתח הזה? כל קישור שנשמר המכיל מפתח ישן לא יעבוד מעתה והלאה.';
$string['response'] = 'תגובה';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'שחזור החשבון מצריך איפוס סיסמה לפני קבלת ה- token';
$string['restparam'] = 'REST (POST parameters)
';
$string['restrictedusers'] = 'רק משתמשים מורשים';
$string['restrictedusers_help'] = 'ההגדרה קובעת האם כל המשתמשים עם ההרשאה ליצור web services token יוכלו ליצור token עבור שרות זה דרך עמוד security keys או רק משתמשים בעלי הרשאה יוכלו לעשות זאת.';
$string['securitykey'] = 'מפתח אבטחה (token)';
$string['securitykeys'] = 'מפתחות אבטחה';
$string['selectauthorisedusers'] = 'בחירת משתמשים מורשים';
$string['selectedcapability'] = 'נבחרו';
$string['selectedcapabilitydoesntexit'] = 'האפשרות הנוחכית של היכולת הנדרשת - ({$a}) איננה קיימת.
יש לשנות אותה ושמור את השינויים.';
$string['selectservice'] = 'בחירת שירות';
$string['selectspecificuser'] = 'בחירת משתמש מסויים';
$string['selectspecificuserdescription'] = 'הוספת משתמש השרותים-המקוונים כמשתמש מורשה';
$string['service'] = 'שירות';
$string['servicehelpexplanation'] = 'שירות הוא מערך של פונקציות.
ניתן לגשת לשירות על-ידי כל המשתמשים או משתמשים אשר צויינו מראש.';
$string['servicename'] = 'שם השירות';
$string['servicenotavailable'] = 'שרות-מקוון לא זמין ( אינו קיים או לא מאופשר)';
$string['servicesbuiltin'] = 'שירותים מובנים מראש';
$string['servicescustom'] = 'שירותים מותאמים אישית';
$string['serviceusers'] = 'משתמשים מורשים';
$string['serviceusersettings'] = 'הגדרות משתמש';
$string['serviceusersmatching'] = 'תוצאות משתמשים מורשים';
$string['serviceuserssettings'] = 'עדכון הגדרות עבור משתמשים מורשים';
$string['shortnametaken'] = 'שם-מקוצר זה כבר ניתן לשרות קיים ({$a})';
$string['simpleauthlog'] = 'התחברות מאומתת פשוטה';
$string['step'] = 'צעד';
$string['supplyinfo'] = 'פרטים נוספים';
$string['testclient'] = 'יישום צד-לקוח לבדיקת שרות-מקוון';
$string['testwithtestclient'] = 'בדיקת השרות-המקוון';
$string['token'] = 'קוד (token)';
$string['tokenauthlog'] = 'אימות קוד (token)';
$string['tokencreatedbyadmin'] = 'ניתן לאפס רק על-ידי מנהל/ת (*)';
$string['tokencreator'] = 'יוצר/ת';
$string['unknownoptionkey'] = 'אפשרות מפתח ({$a}) לא ידוע';
$string['updateusersettings'] = 'עדכון';
$string['uploadfiles'] = 'יכול להעלות קבצים';
$string['userasclients'] = 'משתמשים כלקוחות עם קוד (token)';
$string['usermissingcaps'] = 'חסרות היכולות: {$a}';
$string['usernameorid'] = 'שם משתמש / מספר זיהוי משתמש (user id)';
$string['usernameorid_help'] = 'הזנת שם משתמש או מספר זיהוי משתמש (user id)';
$string['usernameoridnousererror'] = 'לא נמצאו משתמשים במתן שם משתמש או מספר זיהוי משתמש זה';
$string['usernameoridoccurenceerror'] = 'נמצאו יותר ממשתמש אחד עם אותו שם משתמש. אנא מסור את מספר זיהוי המשתמש ( user id)';
$string['usernotallowed'] = 'למשתמש אשר הוזן אין הרשאה מתאימה עבור שרות הנוכחי.
תחילה, יש לאפשר למשתמש הרשאת \'{$a}\' בעמוד הניהול המשתמשים המורשים.';
$string['usersettingssaved'] = 'הגדרות המשתמש נשמרו';
$string['validuntil'] = 'תקף עד';
$string['validuntil_help'] = 'אם מוגדר, השירות יפסיק לפעול עבור המשתמש  לאחר תאריך זה.';
$string['webservice'] = 'שרות-מקוון';
$string['webservices'] = 'שרותים-מקוונים';
$string['webservicesoverview'] = 'סקירה';
$string['webservicetokens'] = 'קודים של שרות-מקוון';
$string['wrongusernamepassword'] = 'שם משתמש או סיסמה שגויים';
$string['wsclientdoc'] = 'תיעוד יישום צד-לקוח של שרות-מקוון';
$string['wsdocapi'] = 'תיעוד API';
$string['wsdocumentation'] = 'תיעוד שרות-מקוון';
$string['wsdocumentationdisable'] = 'תיעוד שרות-מקוון לא מאופשר';
$string['wsdocumentationintro'] = 'בכדי ליצור יישום צד-לקוח, מומלץ לקרוא את זה המדריכים {$a->doclink}';
$string['wsdocumentationlogin'] = 'או להזין את שם משתמש וסיסמה של השרות-המקוון שלך:';
$string['wspassword'] = 'סיסמת שרות-מקוון';
$string['wsusername'] = 'שם משתמש של השרות-המקוון';
