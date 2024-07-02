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
 * Strings for component 'chat', language 'he', version '4.1'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'יש לכם רב-שיח מתקרב';
$string['ajax'] = 'מהדורה המשתמשת ב AJAX';
$string['autoscroll'] = 'גלילה אוטומטית';
$string['beep'] = 'ציפצוף';
$string['bubble'] = 'בועות שיחה';
$string['cantlogin'] = 'הכניסה לחדר השיחה נכשלה!!';
$string['chat:addinstance'] = 'הוספת רב-שיח חדש';
$string['chat:chat'] = 'השתתפות ברב-שיח';
$string['chat:deletelog'] = 'מחיקת יומני המעקב של הרב-שיח';
$string['chat:exportparticipatedsession'] = 'יצוא מפגש הרב-שיח בו השתתפתה';
$string['chat:exportsession'] = 'יצוא כל מפגש הרב-שיח';
$string['chat:readlog'] = 'צפיה ביומני המעקב של הרב-שיח';
$string['chat:talk'] = 'השתתפות ברב-שיח';
$string['chat:view'] = 'צפיה בפעילות רב-שיח';
$string['chatintro'] = 'תיאור';
$string['chatname'] = 'שמו של חדר רב-שיח זה';
$string['chatreport'] = 'מפגש רב-שיח מקוון';
$string['chattime'] = 'זמן רב-השיח הבא';
$string['compact'] = 'תצוגה מצומצמת';
$string['composemessage'] = 'כתיבת הודעה';
$string['configmethod'] = 'רב־שיח העושה שימוש בטכנולוגית AJAX מאפשר ממשק תקשורת קצר ומיידי (בזמן אמת) בין השרת למשתתפים ברב־שיח. בשיטה הרגילה לדיונים רבי־שיח (הזמינה לשם תמיכה בדפדפנים ישנים), הלקוחות נדרשים ליצור קשר קבוע עם השרת כדי לקבל עדכונים. שיטה זו לא דורשת הגדרות מיוחדות והיא עובדת בכל מקום, אבל היא עלולה לגרום עומס רב על השרת ברגע שיש מספר גדול של משתתפים.
השימוש בטכנולוגיית AJAX מתבססת על הגדרות שרות מיוחד (Daemon) בצד השרת הדורש מעורבות של איש IT מעבר להגדרות שמנהל/ת המערכת של מוודל מבצע/ת, אך התוצאה היא סביבת רב־השיח מהירה אשר מסוגלת לשרת כמות משתמשים מאוד גדולה!';
$string['confignormalupdatemode'] = 'לרוב, עידכונים לחדר הרב-שיח מוגשים ביעילות על ידי תכונת ה<em> (שמור בחיים)Keep-Alive</em> של HTTP 1.1, אבל הדבר עדיין גורם לעומס כבד על השרת. שיטה יותר מתקדמת היא להשתמש באזטרטגיית ה-<em>Stream</em> כדי להזין עדכונים מהמשתמשים. באמצעות <em>Stream</em> ניתן להתאים את הגודל באופו טוב יותר (בדומה לשיטת ה-chatd), אבל ישנה האפשרות שהשרת שלכם לא יתמוך בה.';
$string['configoldping'] = 'אחרי כמה זמן שלא שומעים ממשתמש צריך להחשיבו כמנותק (בשניות)? זהו רק גבול עליון, מפני שלרוב מבחינים בניתוקים מהר מאוד. ערכים נמוכים יהיו תובעניים יותר כלפי השרת שלכם. אם אתם משתמשים בשיטה הרגילה, <strong>לעולם</strong> אל תקבעו את הערך הזה מתחת ל-2 * chat_refresh_room.';
$string['configrefreshroom'] = 'כל כמה זמן חדר הרב-שיח עצמו צריך להתחדש? (בשניות). קביעת זמן קצר תגרום לחדר הרב-שיח להראות מהיר יותר, אך היא עלולה גם לגרום לעומס על שרת האינטרנט שלך אם אנשים רבים מדי ישתתפו ברב-שיח.';
$string['configrefreshuserlist'] = 'כל כמה זמן צריכה רשימת המשתמשים להתחדש? (בשניות)';
$string['configserverhost'] = 'שם המחשב המאחר בו נימצאת תוכנת "daemon".';
$string['configserverip'] = 'כתובת IP מספרית שתואמת לשם המחשב המארח לעיל.';
$string['configservermax'] = 'המספר המירבי המותר של לקוחות';
$string['configserverport'] = 'מספר ה־port בו "מאזינה" תוכנת הרב־שיח לבקשות התחברות חדשות';
$string['coursetheme'] = 'ערכת עיצוב של הקורס';
$string['currentchats'] = 'מפגשי רב-שיח פעילים';
$string['currentusers'] = 'משתמשים נוכחיים';
$string['deletesession'] = 'מחיקת מפגש זה';
$string['deletesessionsure'] = 'האם למחוק מפגש מקוון זה?';
$string['donotusechattime'] = 'אין לפרסם זמני רב-שיח כלשהם';
$string['enterchat'] = 'הקליקו כאן כדי להיכנס לרב-שיח הנוכחי';
$string['entermessage'] = 'הזנת ההודעה שלך';
$string['errornousers'] = 'לא נמצאו משתמשים!';
$string['eventmessagesent'] = 'ההודעה נשלחה';
$string['eventsessionsviewed'] = 'שיחות שנצפו';
$string['explaingeneralconfig'] = 'הגדרות אלה <strong>תמיד</strong> משפיעות';
$string['explainmethoddaemon'] = 'הגדרות אלה משפיעות <strong>רק </strong> אם בחרתם ב-"תוכנת "daemon" השוהה בשרת רב-שיח" ב-chat_method.';
$string['explainmethodnormal'] = 'הגדרות אלה משפיעות <strong>רק</strong> במידה ובחרתם ב"רב-שיח רגיל" ב-chat_method.';
$string['generalconfig'] = 'תצורה כללית';
$string['idle'] = 'ביטול';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'אזור הקלט';
$string['invalidid'] = 'חדר הרב-שיח לא נמצא!';
$string['list_all_sessions'] = 'רשימות כל המפגשים המקוונים';
$string['list_complete_sessions'] = 'רשימת המפגשים המקוונים שזה עתה הושלמו';
$string['listing_all_sessions'] = 'הרשמת כל המפגשים המקוונים';
$string['messagebeepseveryone'] = '{$a} ציפצף לכולם!';
$string['messagebeepsyou'] = '{$a} ציפצף לך הרגע!';
$string['messageenter'] = '{$a} נכנס/ה לרב-שיח זה';
$string['messageexit'] = '{$a} עזב/ה רב-שיח זה';
$string['messages'] = 'הודעות';
$string['messageyoubeep'] = 'צפצפת ל {$a}';
$string['method'] = 'שיטת הרב-שיח';
$string['methodajax'] = 'שיטת AJAX';
$string['methoddaemon'] = 'שרת רב־שיח עצמאי';
$string['methodnormal'] = 'שיטה רגילה';
$string['modulename'] = 'רב־שיח';
$string['modulename_help'] = 'פעילות "רב־שיח" (צ\'ט / Chat) מאפשרת למשתתפים לקיים דיון מקוון סינכרוני בזמן־אמת באמצעות הרשת.

הרב־שיח עשוי להיות פעילות חד פעמית או פעילות שניתן לחזור אליה בשעה מוגדרת אך בימים שונים (בכל יום או בכל שבוע). מפגשי הדו־שיח נשמרים, והצפייה בהם יכולה להיות זמינה לכולם או מוגבלת למשתמשים בעלי יכולת צפיה ביומני הרב־שיח.

הרב־שיח שימושי במיוחד עבור קבוצת משתמשים שאינה יכולה להיפגש פנים מול פנים. דוגמאות לכך:

* קיום פגישות מקוונות קבועות, עם תלמידים אחרים באותו המסלול, אשר לא נמצאים בקרבת מקום.
* תלמיד אשר באופן זמני נבצר ממנו להגיע, יכול לשוחח עם המורה באמצעות פעילות זו, על מנת להשלים את חומר הלימוד שהחסיר.
* תלמידים היוצאים לפעילות חוץ, ומעוניינים לדון בחוויותיהם אחד עם השני ועם המורה שלהם.
* ילדים קטנים אשר משתמשים ברב־שיח בשעות הערב, לשם הכרת העולם של רשתות חברתיות.
* אפשרות לשיחה קולית באמצעות רמקול.
* מסייע לתלמידים להתכונן למבחנים. המורה או תלמידים אחרים, עשויים להעלות שאלות לדוגמה, בתוך פעילות הרב־שיח.
* ראיונות מקוונים של קבוצת תלמידים עם אישיות מיוחדת הזמינה לשיחה אתם באופן מרוחק, מקוון.';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'רבי־שיח';
$string['neverdeletemessages'] = 'לא למחוק תוכן';
$string['nextsession'] = 'המפגש המקוון המתוכן הבא';
$string['no_complete_sessions_found'] = 'לא נמצא אף מפגש מקוון שהושלם.';
$string['nochat'] = 'לא נמצא רב-שיח';
$string['noguests'] = 'רב-שיח זה לא פתוח לאורחים';
$string['nomessages'] = 'אין הודעות עדיין';
$string['nopermissiontoseethechatlog'] = 'אין לך ההרשאה לראות את יומן הרב-שיח';
$string['normalkeepalive'] = 'KeepAlive (שמירת רב־שיח פעיל)';
$string['normalstream'] = 'זרם';
$string['noscheduledsession'] = 'אין מפגשים מקוונים מתוכננים';
$string['notallowenter'] = 'אינך רשאי להיכנס לחדר הרב-שיח';
$string['notlogged'] = 'יש להתחבר לשימוש ברב־שיח!';
$string['oldping'] = 'מרווח הזמן לפני ניתוק';
$string['page-mod-chat-x'] = 'כל עמוד רכיב רב-שיח';
$string['pastchats'] = 'מפגשי הרב-שיח שעברו';
$string['pluginadministration'] = 'ניהול הרב-שיח';
$string['pluginname'] = 'רב־שיח';
$string['refreshroom'] = 'ריענון חדר';
$string['refreshuserlist'] = 'ריענון רשימת משתתפים';
$string['removemessages'] = 'הסרת כל ההודעות';
$string['repeatdaily'] = 'באותו זמן בכל יום';
$string['repeatnone'] = 'ללא חזרות - פרסום הזמן המפורט בלבד';
$string['repeattimes'] = 'חזרה (או פרסום) על המפגשים המקוונים';
$string['repeatweekly'] = 'באותו הזמן בכל שבוע';
$string['saidto'] = 'אמר ל-';
$string['savemessages'] = 'שמירת תוכן מפגשים מקוונים';
$string['search:activity'] = 'דו-שיח - מידע הפעילות';
$string['seesession'] = 'הצגת מפגש זה';
$string['send'] = 'שליחה';
$string['sending'] = 'שולחים';
$string['serverhost'] = 'שם השרת';
$string['serverip'] = 'ip השרת';
$string['servermax'] = 'מספר משתתפים מירבי';
$string['serverport'] = 'Port התוכנה בשרת';
$string['sessions'] = 'מפגשי רב-שיח';
$string['sessionstart'] = 'מפגש הרב-שיח הבא יתחיל ב: {$a->date}, ({$a->fromnow} מעכשיו)';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'כולם יכולים לראות מפגשים מקוונים ישנים';
$string['studentseereports_help'] = 'אם מוגדר כ"לא", אזי רק משתמשים שיש להם יכולות לקרוא את הרב-שיח (mod/chat:readlog( יכולים לראות את היומן';
$string['talk'] = 'דברו';
$string['updatemethod'] = 'עדכן שיטה';
$string['updaterate'] = 'קצב העידכון:';
$string['userlist'] = 'רשימת המשתתפים';
$string['usingchat'] = 'משתמשים ברב-שיח';
$string['usingchat_help'] = '<p align="center"><b>השימוש ברב-שיח</b></p>

<p>פרק הרב-שיח כולל בחובו מספר מאפיינים כדי שהשימוש בו יהיה מעט נחמד יותר.</p>

<dl>
<dt><b>סמיילים</b></dt>
<dd>כל פרצוף סמיילי (פרצופונים) שאתם יכולים להקליד בכל מקום אחר במוודל, אתם יכולים להקליד גם כאן והוא יוצג בצורה הנכונה, ללא שיבושים. לדוגמא (-:= <img alt="smiley" src="pix/s/smiley.gif" />  </dd>

<dt><b>קישורים</b></dt>
<dd>כתובות אינטרנט יהפכו לקישורים באופן אוטומטי.
</dd>

<dt><b>הבעת רגשות</b></dt>
<dd>אתם יכולים להתחיל שורה ברב-שיח עם המילה "אני/" או ":" כדי להביע רגשות. לדוגמא, נניח שהשם שלכם הוא קים, ואתם מקלידים ":צוחקת!" או "אני/ צוחקת!" אז כולם ייראו "קים צוחקת!".
</dd>

<dt><b>צפצופים</b></dt>
<dd>אתם יכולים לשלוח צלילים לאנשים אחרים על ידי לחיצה על קישור ה"צפצוף" שנמצא ליד השם שלהם. קיצור מועיל אם אתם רוצים לצפצף לכל האנשים שנמצאים ברב-שיח הוא להקליד : "צפצף לכולם".
</dd>

<dt><b>HTML</b></dt>
<dd>אם אתם יודעים אפילו מעט קוד של HTML, אתם יכולים להשתמש בו בטקסט שלכם כדי לעשות דברים כמו להוסיף  תמונות, להשמיע צלילים או ליצור טקסט בצבעים וגדלים שונים.
</dd>

</dl>';
$string['viewreport'] = 'הצגת מפגשי רב-שיח ישנים';
