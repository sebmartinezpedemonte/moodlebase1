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
 * Strings for component 'auth', language 'he', version '4.1'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'תוספי אימות פעילים';
$string['allowaccountssameemail'] = 'אפשרו חשבונות בעלי דוא"ל זהה';
$string['alternatelogin'] = 'אם תכניסו כאן כתובת URL, היא תשמש כעמוד ההתחברות לאתר שלכם. על עמוד זה להכיל טופס בו תכונת הבעלות מכוונת ל <strong>\'{$a}\'</strong> ושדות חזרה <strong>שם משתמש</strong> ו<strong>סיסמה</strong>.<br />
היזהרו שלא להקליד כתובת URL שגויה, מכיוון שאתם עלולים לנעול את עצמכם מחוץ לאתר. <br />
כדי להשתמש בדף ההתחברות שמשמש כבררת־מחדל, השאירו את הגדרה זו ריקה.';
$string['alternateloginurl'] = 'כתובת URL חלופית המשמשת להתחברות';
$string['auth_changepasswordhelp'] = 'עזרה - שינוי סיסמה';
$string['auth_changepasswordhelp_expl'] = 'עזרת \'הצג סיסמה אובדת\' למשתמשים שאיבדו את ה {$a} סיסמה שלהם. אפשרות זו תוצג או בנוסף ל- או במקום
<strong>כתובת ה-URL: שנה סיסמה</strong> או  שינוי סיסמה למערכת מוודל פנימית (Internal Moodle password change).';
$string['auth_changepasswordurl'] = 'כתובת URL לשינוי סיסמה';
$string['auth_changepasswordurl_expl'] = 'ציינו את כתובת ה-URL אליה יישלחו משתמשים שאיבדו את ה {$a} סיסמה שלהם. הגדירו את <strong>שימוש בעמוד שינוי הסיסמה</strong> ל<strong>לא</strong>.';
$string['auth_changingemailaddress'] = 'ביקשת לשנות את כתובת הדוא"ל מ-{$a->oldemail} ל-{$a->newemail}. מסיבות אבטחה נשלח לך הודעת דוא"ל לכתובת החדשה בכדי שתאשר אותה. כתובת הדוא"ל החדשה תעודכן כאשר תבחרו בקישור המצוי בהודעה שנשלחה אליך.';
$string['auth_common_settings'] = 'הגדרות שכיחות';
$string['auth_data_mapping'] = 'מיפוי מידע';
$string['auth_fieldlock'] = 'נעילת ערך';
$string['auth_fieldlock_expl'] = '<p><b>נעילת ערך:</b>אם אפשרות זו מופעלת, היא מונעת ממשתמשי מוודל וממנהלים לערוך את השדה הזה באופן ישיר. הישתמשו באפשרות זו במידה ואתם מתחזקים את הנתונים הללו במערכת auth חיצונית.
 . Use this option if you are maintaining this data in the external  system. </p>';
$string['auth_fieldlockfield'] = 'נעילת ערך ({$a})';
$string['auth_fieldlocks'] = 'נעילת שדות משתמשים';
$string['auth_fieldlocks_help'] = '<p>בידיכם האפשרות לנעול שדות המכילים נתונים של משתמשים. אפשרות זו שימושית באתרים בהם נתוני המשתמשים מתוזקים על ידי המנהלים באופן ידני על ידי עריכת רשומות המשתמשים או העלאה באמצעות האמצעי \'העלה משתמש\'. אם אתם נועלים שדות הנדרשים על ידי מוודל, וודאו שאתם מספקים את הנתונים הללו בזמן יצירת חשבונות משתמשים, או שלא יהיה ניתן להשתמש בחשבונות הללו.</p>

<p>קחו בחשבון שניתן להגדיר את מצב הנעילה ל\'לא נעול כשריק\' כדי להימנע מבעיה זו. </p>';
$string['auth_fieldmapping'] = 'מיפוי שדות מידע ({$a})';
$string['auth_invalidnewemailkey'] = 'שגיאה: אם אתה מנסה לאשר שינוי בכתובת הדוא"ל, חלה טעות בהעתקת הקישור ה-URL ששלחנו לך בדוא"ל. אנא העתק שוב את הכתובת ונסה שוב.';
$string['auth_multiplehosts'] = 'ניתן לפרט שמות-מתחם מרובים (לדוגמא host1.com;host2.com;host3.com) או (לדוגמה xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'שיטת אימות {$a} לא מגדרת באופן תקין.';
$string['auth_outofnewemailupdateattempts'] = 'תמו מספרי הנסיונות בהם היית רשאי לעדכן את כתובת הדוא"ל שלך. בקשת עדכון כתובת הדוא"ל שלך בוטלה.';
$string['auth_passwordisexpired'] = 'תוקף הסיסמה שלך פג. האם ברצונך לשנות את סיסמתך כעת?';
$string['auth_passwordwillexpire'] = 'הסיסמה שלך תפוג בתוך {$a} ימים. האם ברצונך לשנות את סיסמתך כעת?';
$string['auth_remove_delete'] = 'מחיקה פנימית מלאה';
$string['auth_remove_keep'] = 'שמירה פנימית';
$string['auth_remove_suspend'] = 'השהייה פנימית';
$string['auth_remove_user'] = 'פרט מה יש לעשות עם חשבונות משתמש פנימיים בזמן תאום המוני כאשר המשתמש הוצא ממקור חיצוני. רק משתמשים מושהים מוחזרים לשימוש באופן אוטומטי במידה והם מופיעים מחדש במקור החיצוני.';
$string['auth_remove_user_key'] = 'משתמש חיצוני שהוסר';
$string['auth_sync_script'] = 'מנגנון סינכרון חשבונות משתמשים';
$string['auth_updatelocal'] = 'עדכן מקומי';
$string['auth_updatelocal_expl'] = '<p><b>עדכן מקומית:</b>אם אפשרות זו מופעלת, השדה יתעדכן (מתוך מקור אימות חיצוני) בכל פעם שהמשתמש מתחבר למערכת או כשמתרחש סינכרון משתמשים.
את השדות שמוגדרים לעדכון מקומי צריך לנעול.
</p>';
$string['auth_updatelocalfield'] = 'עדכון מקומי ({$a})';
$string['auth_updateremote'] = 'עדכן חיצוני';
$string['auth_updateremote_expl'] = '<p><b>עדכן חיצונית:</b>אם אפשרות זו מופעלת, מקור האימות החיצוני יתעדכן בכל פעם שמתבצע עדכון רשומת המשתמש. אין לנעול את השדות כדי לאפשר את עריכתם. </p>';
$string['auth_updateremote_ldap'] = '<p><b>הערה:</b> עדכון נתוני LDAP חיצוניים דורשת שתגדיר את binddn ו-bindpw למשתמש-קשור עם הרשאות עריכה לכל רשומות המשתמשים. נכון לעכשיו הוא אינו משמר תכונות בעלות ערכים מרובים, ולכן תסיר ערכים נוספים במהלך העדכון. </p>';
$string['auth_updateremotefield'] = 'עדכון חיצוני ({$a})';
$string['auth_user_create'] = 'אפשרות ליצירת משתמשים';
$string['auth_user_creation'] = 'משתמשים חדשים (אנונימיים) יכולים ליצור חשבונות משתמש על מקור האימות החיצוני שיאושרו בעזרת דואר אלקטרוני. כאשר מפעילים אפשרות זו, יש להפעיל הגדרה זו גם בכל רכיב המאפשר יצירת משתמשים.';
$string['auth_usernameexists'] = 'שם־משתמש שנבחר כבר קיים. יש לבחור שם־משתמש חדש.';
$string['auth_usernotexist'] = 'לא ניתן לעדכן משתמש שאינו קיים: {$a}';
$string['authenticationoptions'] = 'אפשרויות אימות';
$string['authinstructions'] = 'כאן אתה יכול לספק למשתמשים שלך הוראות, כדי שהם ידעו באיזה שם משתמש וסיסמה הם צריכים להשתמש.  הטקסט שתכניס כאן יופיע בעמוד ההתחברות. אם תשאיר ריק, לא יופיעו כל הוראות.';
$string['authloginviaemail'] = 'אפשרות להתחברות דרך דוא"ל';
$string['authloginviaemail_desc'] = 'אפשר למשתמשים להשתמש גם בשם משתמש וגם ב כתובת דוא"ל (אם היא ייחודית)';
$string['auto_add_remote_users'] = 'הוספה אוטומטית של משתמשים מרוחקים';
$string['changepassword'] = 'כתובת URL לשינוי סיסמה';
$string['changepasswordhelp'] = 'כאן אתה מפרט מקום בו המשתמשים שלך יכולים להשתמש כדי למצוא או לשנות את שם המשתמש או הסיסמה שלהם אם הם שכחו אותם. זה יסופק למשתמשים ככפתור בעמוד ההתחברות ובעמוד המשתמש שלהם. אם תשאיר ריק, כפתור זה לא יופיע.';
$string['chooseauthmethod'] = 'מנגנון אימות';
$string['chooseauthmethod_help'] = '<p align="center"><b>שינוי שיטת האימות</b></p>

<p> תפריט זה מאפשר לכם לשנות את שיטת האימות של משתמש מסויים.
</p>

<p>שימו לב שזה מאוד תלוי בשיטות האימות הקיימות באתר, ובאילו הגדרות הן משתמשות.
</p>

<p>שינוי לא נכון כאן יכול למנוע מהמשתמש את היכולת להתחבר לאתר ואף יכול למחוק את החשבון שלו לחלוטין. אז אנא תשתמשו באפשרות הזו רק אם אתם בטוחים לחלוטין במה שאתם עושים.
</p>';
$string['createpassword'] = 'יצירת סיסמה ושליחת הודעה למשתמש';
$string['createpasswordifneeded'] = 'יצירת סיסמה, אם נדרשת, ושליחת הודעה למשתמש';
$string['emailchangecancel'] = 'ביטול שינוי הדוא"ל';
$string['emailchangepending'] = 'השינוי עומד להתרחש. יש לפתוח את הקישור שנשלח אליך ב-{$a->preference_newemail}';
$string['emailnowexists'] = 'כתובת הדוא"ל שניסיתי להקצות לפרופיל שלך מוקצה למשתמש אחר, לכן לא ניתן לבצע את בקשתך לשינוי כתובת הדוא"ל. תוכל לנסות שוב ע"י כתובת דוא"ל אחרת מזאת שניסית.';
$string['emailupdate'] = 'עדכון כתובת דוא"ל';
$string['emailupdatemessage'] = '{$a->fullname} היקר,
לאחר בקשתך לשינוי כתובת דוא"ל עבור חשבון המשתמש שלך באתר {$a->site}, אנא פתח את הקישור הבא בדפדפן שלך לצורך אישור שינוי זה.
{$a->url}

{$a->supportemail}';
$string['emailupdatesuccess'] = 'כתובת דוא"ל של משתמש  <em>{$a->fullname}</em>
עודכנה בהצלחה ל-<em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'אישור עבור עדכון הדוא"ל ב-{$a->site}';
$string['errormaxconsecutiveidentchars'] = 'סיסמאות חייבות להכיל לכל היותר {$a} תווים זהים רצופים';
$string['errorminpassworddigits'] = 'סיסמאות מחייבות לפחות {$a} ספרות.';
$string['errorminpasswordlength'] = 'סיסמאות מחייבות אורך של לפחות {$a} תווים.';
$string['errorminpasswordlower'] = 'סיסמאות מחייבות לפחות {$a} אותיות קטנות.';
$string['errorminpasswordnonalphanum'] = 'סיסמאות מחייבות לפחות {$a} תווים שאינם אותיות (באנגלית) או מספרים.';
$string['errorminpasswordupper'] = 'סיסמאות מחייבות לפחות {$a} אותיות גדולות.';
$string['errorpasswordreused'] = 'סיסמה זו הייתה בשימוש בעבר, ואינה מותרת לשימוש חוזר';
$string['errorpasswordupdate'] = 'חלה שגיאה במהלך עדכון הסיסמה, הסיסמה לא שונתה.';
$string['eventuserloggedin'] = 'משתמש התחבר';
$string['eventuserloggedinas'] = 'משתמש התחבר כמשתמש אחר';
$string['eventuserloginfailed'] = 'התחברות המשתמש כשלה';
$string['forcechangepassword'] = 'אילוץ שינוי סיסמה';
$string['forcechangepassword_help'] = 'אילוץ משתמשים לשנות את הסיסמה שלהם בנסיון ההתחברות הבא ל-Moodle.';
$string['forcechangepasswordfirst_help'] = 'אילוץ משתמשים לשנות את הסיסמה שלהם בנסיון ההתחברות הראשון ל-Moodle.';
$string['forgottenpassword'] = 'הזנת כתובת URL בהגדרה זו, יפעיל מנגנון שחזור סיסמה אבודה עבור אתר זה. הגדרה זו שימושית למערכות בהם הסיסמאות מנוהלות מחוץ למערכת ה-Moodle. כאשר ריק, יוצג מנגנון בררת המחדל לשחזור הסיסמה של המערכת Moodle.';
$string['forgottenpasswordurl'] = 'ה-URL של הסיסמה שנשכחה';
$string['guestloginbutton'] = 'כפתור התחברות לאורחים';
$string['incorrectpleasetryagain'] = 'התרחשה שגיאה. יש לנסות שוב.';
$string['infilefield'] = 'שדה נדרש בקובץ';
$string['informminpassworddigits'] = 'לפחות {$a} ספרות';
$string['informminpasswordlength'] = 'לפחות {$a} תווים';
$string['informminpasswordlower'] = 'לפחות {$a} אותיות קטנות';
$string['informminpasswordnonalphanum'] = 'לפחות {$a} סימנים שאינם אותיות (באנגלית) או מספרים';
$string['informminpasswordreuselimit'] = 'לא ניתן להשתמש ב {$a} הסיסמאות האחרונות שלך';
$string['informminpasswordupper'] = 'לפחות {$a} אותיות רשיות';
$string['informpasswordpolicy'] = 'בסיסמה צריכים להיות {$a}';
$string['instructions'] = 'הוראות';
$string['internal'] = 'פנימי';
$string['limitconcurrentlogins'] = 'הגבלת התחברויות למערכת בו זמנית';
$string['locked'] = 'נעול';
$string['md5'] = 'הצפנת MD5';
$string['nopasswordchange'] = 'לא ניתן היה לשנות את הסיסמה';
$string['nopasswordchangeforced'] = 'אינך יכול להמשיך ללא שינוי הסיסמה שלך. אך נכון לעכשיו אין דף זמין בו ניתן לשנותה. אנא צור קשר עם מנהל המוודל שלך.';
$string['noprofileedit'] = 'לא ניתן לערוך את הפרופיל';
$string['ntlmsso_attempting'] = 'נסיון Single Sign On דרך NTLM...';
$string['ntlmsso_failed'] = 'התחברות אוטומטית נכשלה, נסה את עמוד ההתחברות הרגיל...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO אינו-זמין.';
$string['passwordhandling'] = 'טיפול בשדה סיסמה';
$string['plaintext'] = 'טקסט פשוט';
$string['pluginnotenabled'] = 'התוסף המשמש לאימות \'{$a}\' איננו מופעל';
$string['pluginnotinstalled'] = 'התוסף המשמש לאימות \'{$a}\' איננו מותקן';
$string['potentialidps'] = 'התחברות (הזדהות) מבוססת החשבון שלך ב:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = '<p>CAPTCHA היא תוכנית היכולה לדעת אם המשתמש שלו הוא אדם או מחשב. CAPTCHAs נמצאים בשימוש על ידי אתרי אינטרנט רבים כדי למנוע ניצול לרעה מ"הרובוטים", או תוכנות אוטומטיות בדרך כלל נכתבות בכדי ליצור ספאם. אף תוכנית מחשב לא יכול לקרוא את הטקסט המעוות כמו גם בני האדם , כדי שהרובוטים לא יוכלו לנווט באתרים מוגנים על ידי CAPTCHAs.</p>

<h2>הוראות</h2>
<p>אנא הזן את המילים שאתה רואה בתיבה בסדר, והפרד באמצעות רווח. הדבר נועד בכדי למנוע תוכנות אוטומטיות מלפגוע בשירות זה.
</p>

<p> אם אתה לא בטוח מה הן המילים, הזן את הניחוש הטוב ביותר שלך או בחר בקישור "הצגת עוד CAPTCHA".
</p>

<p>  משתמשים לקויי ראייה יכולים לעקוב אחר קישור "הצגת CAPTCHA שמע"  לשמוע סט של ספרות ולהזינם זאת  במקום האתגר החזותי.
</p>';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'שאלת אבטחה';
$string['selfregistration'] = 'הרשמה עצמית';
$string['sha1'] = 'SHA-1 hash';
$string['showguestlogin'] = 'ניתן להסתיר או להציג את כפתור ההתחברות לאורחים בעמוד ההתחברות.';
$string['stdchangepassword'] = 'השתמש בדף שינוי סיסמה תקני';
$string['stdchangepassword_expl'] = 'אם מערכת האימות החיצונית מאפשרת שינויי סיסמה דרך מוודל, שנה ערך זה ל-כן. הגדרה זו עוקפת את \'כתובת URL לשינוי סיסמה\'.';
$string['stdchangepassword_explldap'] = 'הערה: במידה ושרת ה-LDAP הוא חיצוני מומלץ להשתמש ב-LDAP במקום צינור SSL מוצפן (ldaps://).';
$string['suspended'] = 'חשבון מושהה';
$string['suspended_help'] = 'חשבונות משתמש מושהים אינם יכולים להתחבר למערכת או להתשמש ב-web services כמו כן לא ניתן לשלוח הודעות.';
$string['testsettings'] = 'בדיקת הגדרות';
$string['testsettingsheading'] = 'בדיקות הגדרות אימות - {$a}';
$string['unlocked'] = 'לא נעול';
$string['unlockedifempty'] = 'לא נעול אם ריק';
$string['update_never'] = 'לעולם לא';
$string['update_oncreate'] = 'בזמן יצירה';
$string['update_onlogin'] = 'בזמן כל התחברות';
$string['update_onupdate'] = 'בזמן עדכון';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate()
לא תומך בסוגי משתמש שנבחרו:
{$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable()
לא תומך עדיין בסוגי משתמש שנבחרו';
$string['username'] = 'שם־משתמש';
