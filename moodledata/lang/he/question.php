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
 * Strings for component 'question', language 'he', version '4.1'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'פעולה';
$string['addanotherhint'] = 'הוספת רמז חדש';
$string['addcategory'] = 'הוספת קטגוריה';
$string['addmorechoiceblanks'] = 'מסיחים עבור {no} בחירות נוספות';
$string['adminreport'] = 'דווח על בעיות אפשריות במסד הנתונים של שאלותיך';
$string['advancedsearchoptions'] = 'אפשרויות חיפוש נוספות';
$string['alltries'] = 'כל הנסיונות';
$string['answer'] = 'תשובה';
$string['answers'] = 'תשובות';
$string['answersaved'] = 'תשובה נשמרה';
$string['answerx'] = 'תשובה {$a}';
$string['attemptfinished'] = 'נסיון הסתיים';
$string['attemptfinishedsubmitting'] = 'הסתיימה הגשת ניסיון המענה: {$a}';
$string['attemptoptions'] = 'אפשרויות הנסיון';
$string['availableq'] = 'האם זמין?';
$string['badbase'] = 'מסד גרוע לפני  **: {$a}**';
$string['behaviour'] = 'התנהגות';
$string['behaviourbeingused'] = 'התנהגות שבשיבוש :  {$a}';
$string['broken'] = 'זהו "קישור שבור" - הוא מצביע על קובץ שאיננו קיים';
$string['byandon'] = 'על ידי <em>{$a->user}</em> ב <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'לא ניתן להעתיק את קובץ הגיבוי';
$string['cannotcreate'] = 'לא ניתן ליצור ערך חדש בטבלת
question_attempts';
$string['cannotcreatepath'] = 'לא ניתן ליצור נתיב: {$a}';
$string['cannotdeletebehaviourinuse'] = 'לא ניתן למחוק את ההתנהגות \' {$a}\' מפני שיש בה שימוש על-ידי נסיונות מענה.';
$string['cannotdeletecate'] = 'לא ניתן למחוק קטגוריה זו, זוהי קטגורית בררת־מחדל של הקשר (context) זה.';
$string['cannotdeleteneededbehaviour'] = 'לא ניתן למחוק את השאלה \' {$a}\'. ישנן התנהגויות אחרות המותקנות שתלויות בה.';
$string['cannotdeleteqtypeinuse'] = 'לא ניתן למחוק את סוג השאלה \'{$a}\'.
ישנם שאלות מסוג זה במאגר השאלות.';
$string['cannotdeleteqtypeneeded'] = 'לא ניתן למחוק את סוג השאלה \'{$a}\'. ישנם סוגי שאלות אחרים מותקנים אשרמסתמכים על סוג זה של שאלה.';
$string['cannotdeletetopcat'] = 'לא ניתן למחוק קטגוריה ראשית';
$string['cannotedittopcat'] = 'לא ניתן לערוך קטגוריה ראשית';
$string['cannotenable'] = 'סוג שאלה {$a} לא ניתנת ליצירה ישירות';
$string['cannotenablebehaviour'] = 'התנהגות שאלה  {$a} לא ניתנת לשימוש ישירות. היא מיועדת עבור שימוש פנימי. בלבד.';
$string['cannotfindcate'] = 'לא ניתן למצוא את רשומת הקטגוריה';
$string['cannotfindquestionfile'] = 'לא ניתן למצוא את  קובץ מידע השאלה בארכיב ה-zip';
$string['cannotgetdsfordependent'] = 'לא ניתן לקבל את מערך הנתונים (dataset) המצויין עבור  dataset dependent שאלת!
(question: {$a->id}, datasetitem: {$a->item})';
$string['cannotgetdsforquestion'] = 'לא ניתן לקבל את מערך הנתונים  (dataset) המצויין עבור שאלת חישוב
(question: {$a})';
$string['cannothidequestion'] = 'לא היה ניתן להסתיר שאלה';
$string['cannotimportformat'] = 'סליחה, יבוא תסדיר זה לא מיושם עדיין!';
$string['cannotinsertquestion'] = 'לא ניתן להכניס שאלה חדשה!';
$string['cannotinsertquestioncatecontext'] = 'לא ניתן היה להכניס את השאלת הקטגוריה החדשה
{$a->cat} לא חוקי contextid {$a->ctx}';
$string['cannotloadquestion'] = 'לא ניתן היה להטעין שאלה';
$string['cannotmovequestion'] = 'לא ניתן להשתמש במנגנון זה כדי להעביר שאלות להן משוייכים קבצים מאזורים שונים.';
$string['cannotopenforwriting'] = 'לא ניתן לפתוח לכתיבה: {$a}';
$string['cannotpreview'] = 'לא ניתן לצפות בתצוגה מקדימה בשאלות אלו!';
$string['cannotread'] = 'לא ניתן לקרוא את הקובץ המיובא (או שהקובץ ריק)';
$string['cannotretrieveqcat'] = 'לא ניתן לקבל את קטגוריית השאלה';
$string['cannotunhidequestion'] = 'נכשל בנסיון להציג את השאלה';
$string['cannotunzip'] = 'לא ניתן היה לחלץ את קובץ הארכיב unzip';
$string['cannotwriteto'] = 'לא ניתן היה לכתוב שאלות אשר יוצאו ל {$a}';
$string['categories'] = 'קטגוריות';
$string['category'] = 'קטגוריה';
$string['categorycurrent'] = 'קטגוריה נוכחית';
$string['categorycurrentuse'] = 'השתמשו בקטגוריה זאת';
$string['categorydoesnotexist'] = 'קטגוריה זו לא קיימת';
$string['categoryinfo'] = 'תאור הקטגוריה';
$string['categorymove'] = 'הקטגוריה \'{$a->name}\' מכילה {$a->count} שאלות (חלק מהן עלולות להיות ישנות, אקראיות, מוסתרות, או שאלות שעדיין בשימוש בבחנים קיימים).<br />יש לבחור קטגוריה אחרת אליה יועברו השאלות.';
$string['categorymoveto'] = 'שמירה בקטגוריה';
$string['categorynamecantbeblank'] = 'שם הקטגוריה לא יכול להיות ריק';
$string['changeoptions'] = 'שינוי אפשרויות';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">לקטגוריה "{$a->name}"</a>בקורס "{$a->coursename}" יהיה מצב שיתופי שישונה מ<strong>{$a->changefrom} ל{$a->changeto} </strong>';
$string['check'] = 'הגשת תשובה';
$string['chooseqtypetoadd'] = 'בחירת סוג שאלה להוספה';
$string['clearwrongparts'] = 'ניקוי חלקי השאלה בעלי תשובות שגויות';
$string['clickflag'] = 'סימון שאלה';
$string['clicktoflag'] = 'סמן שאלה זו עבור התייחסות עתידית';
$string['clicktounflag'] = 'הקליקו להסרת ה"סימון" משאלה זו';
$string['clickunflag'] = 'הסרת סימון';
$string['closepreview'] = 'סגירת התצוגה המקדימה';
$string['combinedfeedback'] = 'משובים כלליים';
$string['comment'] = 'הערה';
$string['commented'] = 'ניתנה הערה: {$a}';
$string['commentormark'] = 'הזנת הערה או עדכון ניקוד (ציון)';
$string['comments'] = 'הערות';
$string['commentx'] = 'הערה: {$a}';
$string['complete'] = 'הושלם';
$string['contexterror'] = 'לא היית צריך להגיע לכאן אם אינך מעביר קטגוריה להקשר אחר.';
$string['copy'] = 'העתק מ {$a} ושנה את הקישורים';
$string['correct'] = 'תקין';
$string['correctfeedback'] = 'עבור כל תשובה נכונה';
$string['correctfeedbackdefault'] = 'תשובתך נכונה.';
$string['created'] = 'נוצר ב-';
$string['createdby'] = 'נוצר על-ידי';
$string['createdmodifiedheader'] = 'נוצר/עודכן';
$string['createnewquestion'] = 'יצירת שאלה חדשה...';
$string['cwrqpfs'] = 'בחירה של שאלות אקראיות מתת-סיווגים.';
$string['cwrqpfsinfo'] = '<p>
בעת העידכון למוודל 1.9 אנו נפריד את סיווגי השאלה להקשרים שונים. מספר סיווגים של שאלות ושאלות באתר שלכם יצטרכו לעבור שינוי במצב השיתוף שלהן. הדבר הכרחי במקרים הבודדים שאחת או יותר מהשאלות ה\'אקראיות\' בבוחן הוגדרו שהן נבחרות מתערובת של קטגוריות משותפות וסיווגים לא משותפות (שזה המצב באתר זה). זה מתרחש כאשר הוחלט לבחור שאלה \'אקראית\' מתת-סיווגים, ולאחת או יותר תת-הסיווגים יש מצב שיתוף שונה מסיווגי ה\'אב\' שבה נוצרה השאלה האקראית.
</p>
<p>
בסיווגי השאלה הבאים, שמהן נבחרו שאלות \'אקראיות\' מקטגוריות ה\'אבות\', יחול שיוני במצב לאותו מצב שיתוף כמו הסיווג של השאלה ה\'אקראית\' בעת העידכון למהדורה 1.9. לסיווגים הבאים ישתנה מצב השיתוף. השאלות שדבר זה יכול עליהן ימשיכו לעבוד בכל הבחנים הקיימים עד שתסירו אותם מבחנים אלו.';
$string['cwrqpfsnoprob'] = 'שום סיווגי שאלות באתר שלכם איננה מושפעת על ידי השאלות ה\'אקראיות\' הבוחדרות שאלות מתת-סיווגים.';
$string['decimalplacesingrades'] = 'מיקום הנקודה העשרונית בציון';
$string['defaultfor'] = 'בררת־מחדל של {$a}';
$string['defaultinfofor'] = 'קטגורית בררת־המחדל לשאלות משותפות בהקשר \'{$a}\'.';
$string['defaultmark'] = 'ניקוד (בררת־מחדל)';
$string['defaultmarkmustbepositive'] = 'ציון בררת־מחדל חייב להיות חיובי';
$string['deletecoursecategorywithquestions'] = 'קיימות שאלות במאגר השאלות המשוייכות לקטגוריית קורס זה. אם תמשיך, הן תימחקנה. תוכל להעבירם למקום אחר באמצעות שימוש במאגר השאלות';
$string['deletequestioncheck'] = 'האם הינך בטוח כי ברצונך למחוק את \'{$a}\'?';
$string['deletequestionscheck'] = 'האם הינך בטוח כי ברצונך למחוק את השאלות הבאות?
<br /><br />
  \'{$a}\'';
$string['deletingbehaviour'] = 'מוחק התנהגות שאלה \'{$a}\'';
$string['deletingqtype'] = 'מוחק את סוג השאלה \'{$a}\'';
$string['didnotmatchanyanswer'] = '[האם בחרת תשובה כלשהי]';
$string['disabled'] = 'כבוי (לא-פעיל)';
$string['displayoptions'] = 'אפשרויות התצוגה';
$string['disterror'] = 'תפוצת ה {$a} גרמה לבעיות';
$string['donothing'] = 'אל תעתיק או תזיז קבצים או שנה קישורים';
$string['editcategories'] = 'עריכת קטגוריות';
$string['editcategories_help'] = 'במקום להחזיר את כל השאלות ברשימה אחת ארוכה, השאלות יכולות להיות מסודרות בקטגוריות ותתי-קטגוריות.

לכל קטגוריה ישנו הקשר אשר קובע היכן ניתן להשתמש בשאלות מהקטגוריה:

* בהקשר של פעילות - שאלות תיהינה זמינות ברכיב הפעילות בלבד.

* הקשר הקורס - שאלות תיהינה זמינות בכל רכיב פעילות בקורס.

* הקשר קטגורית הקורס - שאלות תיהינה זמינות בכל רכיבי פעילות ובקורסים בקטגורית הקורס.

* הקשר המערכת - שאלות תיהינה זמינות בכל הקורסים והפעילויות באתר כולו.

ניתן להשתמש בקטגוריות  עבור שאלות אקראיות , כאשר שאלות נבחרות מקטגוריה מסויימת.';
$string['editcategories_link'] = 'question/category';
$string['editcategory'] = 'עריכת קטגוריה';
$string['editingcategory'] = 'עריכת קטגוריה';
$string['editingquestion'] = 'עריכת שאלה';
$string['editquestion'] = 'עריכת שאלה';
$string['editquestions'] = 'עריכת שאלות';
$string['editthiscategory'] = 'עדכון קטגוריה זו';
$string['emptyxml'] = 'שגיאה לא מוכרת - קובץ imsmanifest.xml ללא תוכן';
$string['enabled'] = 'מאופשר';
$string['erroraccessingcontext'] = 'לא מסוגל להתחבר להקשרים';
$string['errordeletingquestionsfromcategory'] = 'שגיאה במחיקת שאלות מקטגוריה {$a}.';
$string['errorduringpost'] = 'שגיאה התרחשה לאחר העיבוד!';
$string['errorduringpre'] = 'שגיאה התרחשה לפני העיבוד!';
$string['errorduringproc'] = 'שגיאה התרחשה בזמן העיבוד!';
$string['errorduringregrade'] = 'לא ניתן לתת ציון מחדש לשאלה {$a->qid}, מגיע למצב {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'שגיאה - לא ניתן להעתיק את קובץ {$a}';
$string['errorfilecannotbemoved'] = 'שגיאה - לא ניתן להזיז את קובץ {$a}';
$string['errorfileschanged'] = 'שגיאה: קבצים אשר קושרו משאלות שונו מאז שהטופס הוצג לאחרונה.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'שאלה ({$a}) מופיעה יותר מפעם אחת עם משקלות שונים במקומות שונים של המבחן. מצב זה לא נתמך בדו"ח הסטטיסטי ויכול לגרום לכך שהתשובות הסטטיסטיות לשאלה אינן אמינות.';
$string['errormanualgradeoutofrange'] = 'הציון {$a->grade}  לא בין 0 ו- {$a->maxgrade} עבור השאלה {$a->name}. הציון והמשום לא נשמרו.';
$string['errormovingquestions'] = 'שגיאה כאשר מעבירים שאלות עם מספרי זהוי הבאים {$a}.';
$string['errorpostprocess'] = 'שגיאה התרחשה לאחר העיבוד!';
$string['errorpreprocess'] = 'שגיאה התרחשה לפני העיבוד!';
$string['errorprocess'] = 'שגיאה התרחשה בזמן העיבוד!';
$string['errorprocessingresponses'] = 'שגיאה התרחשה כאשר נשלחו התגובות שלך ({$a}).
יש להקליק על "המשך" בכדי לחזור לדף הקודם ואז לנסות שנית.';
$string['errorsavingcomment'] = 'שגיאה מערכת! בעת עדכון התגובה לשאלה {$a->name}. התגובה לא נשמרה!';
$string['errorsavingflags'] = 'שגיאה בשמירת סימון מצב';
$string['errorupdatingattempt'] = 'שגיאה בעדכון נסיון {$a->id} במסד נתונים זה.';
$string['eventquestioncategorycreated'] = 'קטגוריית השאלה נוצרה';
$string['eventquestioncreated'] = 'שאלה נוצרה';
$string['eventquestiondeleted'] = 'שאלה נמחקה';
$string['eventquestionmoved'] = 'שאלה הועברה';
$string['eventquestionsexported'] = 'שאלה יוצאה';
$string['eventquestionsimported'] = 'שאלה יובאה';
$string['eventquestionupdated'] = 'שאלה עודכנה';
$string['eventquestionviewed'] = 'שאלה נצפתה';
$string['export'] = 'יצוא';
$string['exportasxml'] = 'יצוא בתסדיר Moodle XML';
$string['exportcategory'] = 'יצוא קטגוריה';
$string['exportcategory_help'] = '<p align="center"><b>יצוא קטגוריה</b></p>

<p><b>קטגוריית</b> התפריט הנפתח ניתנת לשימוש לבחירת הקטגוריה מהיכן שהשאלות המיוצאת ילקחו.</p>

<p>כמה תסדירים מיובאים (gifs ותסדיריXML) מרשים לקטגוריה להיכלל בקובץ הניתן לכתיבה, מאפשרים לקטגוריות (במידה וקיימות) להיווצר מחדש כאשר מייבאים. על מנת שמידע זה יכלל תיבת ה<b>"לקובץ" (to file)</b> חייבת להיות מסומנת </p>';
$string['exporterror'] = 'שגיאה התרחשה בזמן היצוא!';
$string['exportfilename'] = 'שאלות';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'הורדת שאלה זו בתסדיר Moodle XML';
$string['exportquestions'] = 'יצוא שאלות לקובץ';
$string['exportquestions_help'] = '<p align="center"><b>יצוא שאלות מקטגוריה</b></p>

<p>פונקציה זו מאפשרת לכם ליצא קטגורית שאלות שלמה (בנוסף לכל התת-קטגוריות שלה) לתוך קובץ טקסט.
 </p>

<p>אנא שימו לב שבתסדירים רבים של קבצים נאבד מידע כלשהוא בתהליך ייצוא השאלות.
הדבר קורה מפני שתסדירים רבים לא מכילים את כל התכונות שקיימות בשאלות מוודל. אל תצפו שתוכלו לייבא ולייצא שאלות ושהן יישארו זהות. בנוסף קיימת האפשרות שחלק מסוגי השאלות לא יהיה ניתן לייצא.
מומלץ שתבדקו נתונים מיוצאים לפני שתשתמשו בהם בסביבת ייצור.
</p>

<p>התסדירים שנתמכים נכון לעכשיו הם:</p>

<p><b>תסדיר GIFT</b></p>
<ul>
<p>GIFT הינו תסדיר קובץ הייבוא הכי מקיף שבאמצעותו ניתן לייבא שאלות לבחנים של מוודל מתוך קבצי טקסט. הוא תוכנן להיות שיטה פשוטה למורים שכותבים את שאלותיהם בתוך קבצי טקסט. GIFT תומך בשאלות נכון/לא-נכון, שאלות אמריקאיות, שאלות תשובה-קצרה, שאלות התאמה ושאלות בעלות תשובות מספריות, בנוסף לשאלות בתסדיר "המילה החסרה", בהם מחדירים ______ .  בקובץ טקסט יחיד ניתן לערבב מספר סוגים שונים של שאלות, ובנוסף לכך, התסדיר תומך בהערות, נתינת שמות לשאלות, משוב וציונים המבוססים על אחוזים והמשקל שניתן להם. הנה כמה דוגמאות:</p>
<pre>
מי קבור בקבר של גראנט?{~גראנט ~ג\'פרסון =אף אחד}

גראנט{~קבור =לקבור ~חי} בקבר של גראנט.

גראנט קבור בקבר של גראנט.{לא נכון}

מי קבור בקבר של גראנט?{=אף אחד =אף אחד לא}

מתי נולד יוליסס ס. גרנט (Ulysses S. Grant) ?{#
</pre>

<p align="right"><a href="help.php?file=formatgift.html&module=quiz">מידע נוסף על תסדיר ה-"GIFT" </a></p>
</ul>

<p><b>תסדיר Moodle XML</b></p>
<ul>
<p> תסדיר זה הספציפי למוודל מייצא שאלות של בחנים בתוך תסדיר XML פשוט. לאחר מכן ניתן לייבא אותן לתוך קטגוריית בחנים אחרת או להשתמש בהן בתהליכים אחים כמו טרנספורמציית XSLT. תסדיר ה-XML  ייצא תמונות המצורפות לשאלות (קידוד base64).
</p>
</ul>

<p><b>IMS QTI 2.0</b></p>
<ul>
<p>
מייצא בתסדיר IMS QTI (version 2.0) סטנדרטי. שימו לב שתהליך זה מחולל קבוצה של קבצים בתוך קובץ \'zip\' יחיד. </p>
<p align="right"><a href="http://www.imsglobal.org/question/" target="_qti">מידע נוסף באתר ה- IMS QTI </a>
 (אתר חיצוני בחלון חדש)</p>
</ul>

<p><b>XHTML</b></p>
<ul>
<p>מייצא את הקטגוריה כעמוד יחיד של XHTML \'קפדן\'. כל שאלה ממוקמת בבהירות בתוך תג <div>
משלה. אם אתם רוצים להשתמש בעמוד זה כמו שהוא, תצטרכו, לפחות, לערוך את תג ה-<צורה> שנמצא בתחילת קטע ה-<גוף> כדי לספק פעולה מתאימה (לדוגמא \'שלח ל\').
</p>
</ul>

<p>בעתיד יתווסו תסדירים נוספים, כולל WebCT וכל דבר אחר.

   משתמשי מוודל יכולים לתרום! </p>';
$string['exportquestions_link'] = 'question/export';
$string['feedback'] = 'משוב לבחירה בתשובה זו';
$string['filecantmovefrom'] = 'קבצי השאלות לא ניתנות להעברה מפני שאין לך הרשאות להעברת קבצים מהמקום שהינך מנסה להעביר את השאלות.';
$string['filecantmoveto'] = 'קבצי השאלות לא ניתנות להעברה או להעתקה מפני שאין לך הרשאות להוספת קבצים אל המקום שהינך מנסה להעביר את השאלות.';
$string['fileformat'] = 'תסדיר הקובץ';
$string['filesareacourse'] = 'אזור הקבצים של הקורס';
$string['filesareasite'] = 'אזור הקבצים של האתר';
$string['filestomove'] = 'העתק/הסט קבצים ל-{$a}?';
$string['fillincorrect'] = 'הצגת התשובה הנכונה';
$string['filterbytags'] = 'סינון לפי תגיות...';
$string['firsttry'] = 'נסיון ראשון';
$string['flagged'] = 'סומן';
$string['flagthisquestion'] = 'ניתן לסמן שאלה זו';
$string['formquestionnotinids'] = 'הטופס מכיל שאלות אשר אינם ב
questionids';
$string['fractionsnomax'] = 'על אחת מהתשובות להיות בעלת תוצאה של 100%, כך שזה יהיה אפשרי לקבל את מלוא הנקודות עבור שאלה זו.';
$string['generalfeedback'] = 'משוב כללי';
$string['generalfeedback_help'] = '"משוב כללי" מוצג למשתמשים לאחר שסיימו לענות על השאלה. שלא כמו \'משוב מסויים\', שמסתמך על סוג השאלה ועל התגובה (התשובה) של המשתמש. תוכן \'המשוב כללי\' מוצג לכל המשתמשים.

ניתן להשתמש ב \'משוב כללי\' כדי להציג בפני המשתמש את התשובה מלאה (הנכונה) וגם קישור למידע נוסף הנוגע לנושא שאלה זו, במידה ולא הבינו את השאלות או לשם הרחבת הדעת.';
$string['getcategoryfromfile'] = 'קבלת קטגוריה מהקובץ';
$string['getcontextfromfile'] = 'קבלת הקשר מהקובץ';
$string['hintn'] = 'רמז {no}';
$string['hintnoptions'] = 'אפשרויות {no} רמזים';
$string['hinttext'] = 'תוכן הרמז';
$string['howquestionsbehave'] = 'מנגנון המשוב בשאלות';
$string['howquestionsbehave_help'] = '* אינטרקטיבי - ניסיונות מענה מרובים לשאלה (עם משוב ללא רמזים).
* דחיית משוב השאלה - לאחר הגשת הבוחן כולו.
* דחיית משוב השאלה - לאחר הגשת הבוחן כולו עם CBM  (ניקוד) מבוסס "מידת ביטחון התלמיד בתשובה".
* מצב מסתגל - מספר ניסיונות מענה לשאלה + רמזים (ללא קנסות).
* מצב מסתגל - ניסיונות מענה מרובים לשאלה + רמזים.
* משוב מיידי - מענה חד פעמי על השאלה.
* משוב מיידי - מענה חד פעמי על השאלה עם CBM (ניקוד) מבוסס "מידת ביטחון התלמיד בתשובה".
* מתן ציון ידני - לאחר הגשת הבוחן כולו.

---

מצב בררת־מחדל של מנגנון המשוב לשאלות: "מצב מסתגל - ניסיונות מענה מרובים לשאלה + רמזים."

מצבים שכיחים של בחנים:
* התלמידים עונים על שאלות ומקבלים משוב רק לאחר שכל הבוחן הסתיים - בחרו ב: "דחיית משוב השאלה - לאחר הגשת הבוחן כולו."
* מצב תרגול, בו התלמידים עונים על שאלה מספר פעמים עד אשר מתקבלת התשובה הנכונה - בחרו ב: "אינטרקטיבי - ניסיונות מענה מרובים לשאלה (עם משוב ללא רמזים)"';
$string['howquestionsbehave_link'] = 'question/behaviour';
$string['idnumber_help'] = 'אם משתמשים בו, IDNUMBER חייב להיות ייחודי בכל קטגוריית שאלה. זה מספק דרך נוספת לזהות שאלה, אך בדרך כלל יכולה להישאר ריקה.';
$string['ignorebroken'] = 'התעלם מקישורים שבורים';
$string['import'] = 'יבוא';
$string['importcategory'] = 'יבוא קטגוריה';
$string['importcategory_help'] = '<p align="center"><b>יבוא קטגוריה</b></p>

<p>ה<b>קטגוריה:</b>תפריט נפתח משמשת על מנת שתבחרו מתוכה את הקטגוריה בה ימוקמו השאלות המיובאות.
</p>

<p>תסדירי יבוא מסויימים (תסדיר GIFT ו-XML) מאפשרים לפרט את הקטגוריה בתוך קובץ היבוא. כדי שזה יקרה, צריך לסמן את קופסאת <b>מקובץ</b>. אם היא לא מסומנת השאלות ישלחו לקטגוריה המסומנת ללא כל התחשבות בהוראות כלשהן שיופיעו בקובץ.
</p>

<p>כשמפרטים קטגוריות בתוך קובץ יבוא, במידה והן לא קיימות, הן יווצרו.
</p>';
$string['importerror'] = 'שגיאה התרחשה בעת תהליך היבוא';
$string['importerrorquestion'] = 'שגיאה ביבוא השאלה';
$string['importfromcoursefiles'] = '... או יש לבחור קובץ קורס ליבוא.';
$string['importfromupload'] = 'בחירת קובץ להעלאה...';
$string['importingquestions'] = 'יבוא {$a} שאלות מקובץ';
$string['importparseerror'] = 'שגיאה התרחשה בעת יבוא הקובץ. לא ניתן היה ליבוא שאלות. בכדי ליבא שאלות תקינות נסו שנית את ההגדרה \'עצור בשגיאה\' ל-\'לא\'';
$string['importquestions'] = 'יבוא שאלות מקובץ';
$string['importquestions_help'] = 'הפונקציה מאפשרת לייבא שאלות מסויגים שונים של תסדיטרים  דרך קובץ טקסט, שים לב כי עליך להגדירו תומך ב קידוד
UTF-8';
$string['importquestions_link'] = 'question/import';
$string['importwrongfiletype'] = 'סוג הקובץ שנבחר ({$a->actualtype}) אינו תואם לסוג שמצופה על-ידי תסדיר יבוא זה  ({$a->expectedtype}).';
$string['impossiblechar'] = 'התו {$a} הזה איננו אפשרי
והוא נמצא בסוגריים';
$string['includesubcategories'] = 'הצגת שאלות מתתי-קטגוריה';
$string['incorrect'] = 'שגוי';
$string['incorrectfeedback'] = 'עבור כל תשובה שגויה';
$string['incorrectfeedbackdefault'] = 'תשובתך אינה נכונה.';
$string['information'] = 'מידע';
$string['invalidanswer'] = 'תשובה שלא הושלמה';
$string['invalidarg'] = 'לא סופקו ערכים תקינים למשתנה או שהגדרות השרת אינן תקינות';
$string['invalidcategoryidforparent'] = 'מספר זיהוי ID של הקטגוריה עבור האב איננו תקין';
$string['invalidcategoryidtomove'] = 'מספר זיהוי ID של הקטגוריה לא תקין להעברה';
$string['invalidconfirm'] = 'מחרוזת האישור לא נכונה';
$string['invalidcontextinhasanyquestions'] = 'מועבר הקשר לא חוקי question_context_has_any_questions.';
$string['invalidgrade'] = 'הציונים  אינם מתאימים לאפשרויות הציון - השאלה דולגה.';
$string['invalidpenalty'] = 'קנס שגוי';
$string['invalidwizardpage'] = 'לא נכון או שלא צויין גף אשף';
$string['lastmodifiedby'] = 'עודכן לאחרונה על-ידי';
$string['lasttry'] = 'נסיון אחרון';
$string['linkedfiledoesntexist'] = 'הקובץ המקuשר {$a} לא קים';
$string['makechildof'] = 'יצירת תת־קטגוריה  {$a}';
$string['makecopy'] = 'יצירת העתק';
$string['maketoplevelitem'] = 'הסט לרמה עליונה';
$string['manualgradeinvalidformat'] = 'זהו מספר לא תקין.';
$string['manualgradeoutofrange'] = 'ציון זה מחוץ לתחום התקין';
$string['manuallygraded'] = 'ניקוד ידני {$a->mark} עם הערה: {$a->comment}';
$string['mark'] = 'ניקוד';
$string['markedoutof'] = 'ניקוד השאלה';
$string['markedoutofmax'] = 'ניקוד השאלה: {$a}';
$string['markoutofmax'] = '{$a->mark} נקודות מתוך {$a->max}';
$string['marks'] = 'נקודות';
$string['matchgrades'] = 'ציונים מתאימים';
$string['matchgrades_help'] = '<p align="center"><b>התאם ציונים</b></p>

<p><b>חובה </b> שהציונים המיובאים יתאימו לאחת מהרשימות הקבועות של הציונים התקפים, כדלקהמן....
</p>

<ul>
  <li>100%</li>
  <li>90%</li>
  <li>80%</li>
  <li>75%</li>
  <li>70%</li>
  <li>66.666%</li>
  <li>60%</li>
  <li>50%</li>
  <li>40%</li>
  <li>33.333</li>
  <li>30%</li>
  <li>25%</li>
  <li>20%</li>
  <li>16.666%</li>
  <li>14.2857</li>
  <li>12.5%</li>
  <li>11.111%</li>
  <li>10%</li>
  <li>5%</li>
  <li>0%</li>
</ul>

<p> גם ערכים שליליים מותרים עבור הרשימה לעיל.
</p>

<p>ישנן שתי הגדרות עבור מתג זה. הן משפיעות על האופן שבו נוהל היבוא מטפל בערכים שלא מתאימים
 <strong>לחלוטין</strong> לאחד הערכים ברשימה לעיל. </p>

<ul>
  <li><strong>שגיאה אם הציון לא רשום</strong><br />
אם השאלה מכילה ציונים כלשהם שלא נמצאים ברשימה מוצגת הודעת שגיאה והשאלה המסויימת ההיא לא תיובא.
</li>
  <li><strong>הציון הקרוב ביותר, במידה ולא רשום</strong><br />
אם נמצא ציון שלא תואם ערך כלשהו ברשימה, הציון ישונה לערך המתאים הקרוב ביותר ברשימה.
</li>
</ul>

<p><i>הערה: חלק מתסדירי הייבוא המותאימים אישית מייבאים ישירות לתוך בסיס הנתונים ובכך עלולים לעקוף את הבדיקה הזו.
</i></p>';
$string['matchgradeserror'] = 'שגיאה אם הציון לא ברשימה';
$string['matchgradesnearest'] = 'הציון הכי קרוב אם הוא לא ברשימה';
$string['missingcourseorcmid'] = 'יש צורך לספק  courseid או cmid עבור print_question.';
$string['missingcourseorcmidtolink'] = 'יש צורך לספק courseid או cmid עבור get_question_edit_link.';
$string['missingimportantcode'] = 'לסוג שאלה זה חסר קוד חשוב: {$a}.';
$string['missingoption'] = 'שאלה משובצת cloze
{$a} הגדרותיה חסרות לה';
$string['modified'] = 'נשמר לאחרונה';
$string['move'] = 'הסט מ-{$a} ושנה את הקישורים';
$string['movecategory'] = 'הסט קטגוריה';
$string['movedquestionsandcategories'] = 'שאלות וקטגוריית שאלות מועברים מ{$a->oldplace} to {$a->newplace}.';
$string['movelinksonly'] = 'שנה את ההצבעה של הקישורים, אלח תזיז או תעתיק את הקבצים';
$string['moveq'] = 'שאלות נוספות';
$string['moveqtoanothercontext'] = 'הסט השאלה להקשר';
$string['moveto'] = 'העברה ל';
$string['movingcategory'] = 'הסטת קטגוריה';
$string['movingcategoryandfiles'] = 'האם להעביר את הקטגוריה \'{$a->name}\' וכל תתי־הקטגוריות ל "{$a->contextto}"?<br/> הבחנו {$a->urlcount} בקבצים המקושרים משאלות ב{$a-fromareaname}, האם להעתיק או להעביר אותם ל{$a->toareaname?';
$string['movingcategorynofiles'] = 'האם אתה בטוח שאתה רוצה להזיז את סיווג "{$a->name}" וכל צאצאי הסיווגים להקשר עבור "{$a->contextto}?';
$string['movingquestions'] = 'הסטת שאלות וכל קובץ שהוא';
$string['movingquestionsandfiles'] = 'האם להעביר שאלות {$a->questions} ל <strong>"{$a->tocontext}"</strong>?<br /> הבחנו <strong>{$a->urlcount} בקבצים </strong> המקושרים משאלות אלו ב{$a->fromareaname}, האם להעתיק או להעביר אותם ל{$a->toareaname}?';
$string['movingquestionsnofiles'] = 'האם להעביר את השאלות {$a->questions} ל <strong>"{$a->tocontext}"</strong>?<br/> לא נמצאו <strong> כל קבצים</strong> המקושרים משאלות אלו ב{$a->fromareaname}';
$string['needtochoosecat'] = 'עליך לבחור קטגוריה להעביר אליה שאלה זו או לבחור ב \'ביטול\'';
$string['nocate'] = 'לא נמצאה קטגוריה זו {$a}';
$string['nopermissionadd'] = 'אין לך רשות להוסיף שאלות במקום זה';
$string['nopermissionedit'] = 'אין לך הרשאה לערוך שאלה זו';
$string['nopermissionmove'] = 'אין לך הרשאות להעביר שאלות מכאן. אתה מוכרח לשמור את השאלה בקטגוריה זו או לשמור אותה כשאלה חדשה.';
$string['noprobs'] = 'לא נמצאו בעיות כלשהן עם מסד הנתונים של שאלותיך';
$string['noquestions'] = 'לא נמצאו שאלות ליצוא. יש לוודא כי נבחרה הקטגוריה ובה תוכן השאלות לבחירה.';
$string['noquestionsinfile'] = 'אין שאלות בקובץ היבוא.';
$string['noresponse'] = '[אין תשובה]';
$string['notagfiltersapplied'] = 'בחירת תגיות לסינון השאלות';
$string['notanswered'] = 'לא נענה';
$string['notchanged'] = 'לא השתנה מאז הנסיון האחרון';
$string['notenoughanswers'] = 'סוג שאלה זה מצריך לפחות {$a} תשובות';
$string['notenoughdatatoeditaquestion'] = 'לא צויינו: מספר זיהוי השאלה, מספר זיהוי הקטגוריה וסוג השאלה.';
$string['notenoughdatatomovequestions'] = 'עליך לספק את מספרי הזיהוי של השאלות שאתה רוצה להזיז';
$string['notflagged'] = 'לא סומן';
$string['notgraded'] = 'לא ניתן ציון';
$string['notshown'] = 'לא מוצג';
$string['notyetanswered'] = 'שאלה זו טרם נענתה';
$string['notyourpreview'] = 'תצוגה מקדימה זו אינה שייכת לך';
$string['novirtualquestiontype'] = 'לא קיים סוג שאלה וירטואלי עבור סוג השאלה
{$a}';
$string['numqas'] = 'לא. נסיונות מענה';
$string['numquestions'] = 'מספר שאלות';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} מוסתר)';
$string['options'] = 'אפשרויות';
$string['page-question-category'] = 'עמוד קטגורית שאלה';
$string['page-question-edit'] = 'עמוד עריכת שאלה';
$string['page-question-export'] = 'עמוד יצוא שאלה';
$string['page-question-import'] = 'עמוד יבוא שאלה';
$string['page-question-x'] = 'עמוד שאלה כלשהו';
$string['parent'] = 'אב';
$string['parentcategory'] = 'קטגוריית אב';
$string['parentcategory_help'] = '<h2>אב</h2>

<p>הקטגוריה שבה זה יוצב. "למעלה" כלומר, זו סיווג זה לא מוכלת באף סיווג אחר.</p>

<p>בדר"כ תבחין בהקשרי סיווג אשר תראה באופן מודגש, שים לב כי כל הקשר מכיל את היררכיית הסיווג שלה. ראה למטה עוד פרטים על כך. אם אינך רואה כמה הקשרי קטגוריות, זאת מפני שאין לך הרשאה לגשת להקשרים אלו.</p>

<p>אם יש רק סיווג אחד בהקשר, לא תוכל להעביר את הסיווג כפי שחייב להיות לפחות סיווג אחד בהקשר זה.</p>

<p>ראה גם:</p>
<ul>
  <li><a href="help.php?module=question&file=categories.html">קטגוריות שאלה</a></li>
  <li><a href="help.php?module=question&file=categorycontexts.html">הקשרי סיווג</a></li>
  <li><a href="help.php?module=question&file=permissions.html">הרשאות שאלה</a></li>
</ul>';
$string['parentcategory_link'] = 'question/category';
$string['parenthesisinproperclose'] = 'סוגריים לפני ** לא נסגר בצורה תקינה ב-{$a}**';
$string['parenthesisinproperstart'] = 'סוגריים לפני ** לא נפתח בצורה תקינה ב-{$a}**';
$string['parsingquestions'] = 'ניתוח שאלות מתוך קובץ יבוא';
$string['partiallycorrect'] = 'נכון באופן חלקי';
$string['partiallycorrectfeedback'] = 'עבור תשובה הנכונה באופן חלקי';
$string['partiallycorrectfeedbackdefault'] = 'תשובתך נכונה חלקית.';
$string['penaltyfactor'] = 'גורם הקנס עבור תשובה שגויה';
$string['penaltyfactor_help'] = '<p align="center"><b>פקטור הקנס</b></p>

<p>בידיכם האפשרות לבחור איזה אחוז מהתוצאה שהושגה יש להוריד עבור כל תגובה שגויה. אפשרות זו רלוונטית רק במידה והבוחן שלכם מורץ במצב מסתגל בו מתאפשר לסטודנט לעשות ניסיונות חוזרים כדי לענות על השאלה. על פקטור הקנס להיות מספר אחד בין 0 ל-1. פקטור קנס של 1 משמעותו שהסטודנט חייב לענות על התשובה נכון בתגובה הראשונה שלו כדי לקבל נקודות כלשהן. פקטור קנס של 0 משמעותו שהסטודנט יכול לענות על כל שאלה כמה פעמים שהוא רק רוצה ועדיין לקבל עליה את מלוא הנקודות.
 </p>';
$string['penaltyforeachincorrecttry'] = 'קנס עבור כל נסיון שגוי';
$string['permissionedit'] = 'עריכת שאלה זו';
$string['permissionmove'] = 'הסטת שאלה זו';
$string['permissionsaveasnew'] = 'שמירת שאלה זו כחדשה';
$string['permissionto'] = 'יש לך הרשאות ל:';
$string['previewquestion'] = 'תצוגה מקדימה של שאלה:  {$a}';
$string['published'] = 'פורסם';
$string['qtypeveryshort'] = 'T';
$string['question_version'] = 'גרסת שאלה';
$string['questionaffected'] = '<a href="{$a->qurl}">שאלה "{$a->name}" ({$a->qtype})</a> בקטגורית שאלה זו אך היא גם נלקחת בשימוש ב<a href="{$a->qurl}"> בוחן "{$a->quizname}"</a> בקורס אחר "{$a->coursename}';
$string['questionbank'] = 'מאגר שאלות';
$string['questionbehaviouradminsetting'] = 'הגדרות התנהגות שאלה';
$string['questionbehavioursdisabled'] = 'כיבוי התנהגויות שאלה';
$string['questionbehavioursdisabledexplained'] = 'יש להזין רשימה של התנהגויות (מופרדות בפסיקים) שאינך רוצה שיופיעו בתפריט הרשימה הנפתח';
$string['questionbehavioursorder'] = 'סדר התנהגויות השאלה';
$string['questionbehavioursorderexplained'] = 'יש להזין רשימה של התנהגויות (מופרדות בפסיקים) בסדר שתרצה שהם יופיעו בתפריט הרשימה הנפתח';
$string['questioncategories'] = 'קטגוריות של שאלות';
$string['questioncategory'] = 'קטגוריית שאלה';
$string['questioncatsfor'] = 'קטגוריות־שאלות של \'{$a}\'';
$string['questiondoesnotexist'] = 'שאלה זו לא קיימת.';
$string['questionformtagheader'] = '{$a} תגיות';
$string['questionidmismatch'] = 'אי התאמה עם מזהה(ids) השאלה';
$string['questionname'] = 'שם השאלה';
$string['questionnamecopy'] = 'העתק {$a}';
$string['questionno'] = 'שאלה {$a}';
$string['questionpreviewdefaults'] = 'ברירות המחדל של תצוגת השאלה';
$string['questionpreviewdefaults_desc'] = 'ניתן להשתמש בברירות המחדל הללו כאשר משתמש צופה לראשונה בשאלה במאגר השאלות. כאשר המשתמש סיפק שאלה, המאפיינים האישיים שלהם מוחסנים במאפייני המשתמש.';
$string['questions'] = 'שאלות';
$string['questionsaveerror'] = 'שגיאות נמצאו בזמן שמירת השאלה - ({$a})';
$string['questionsinuse'] = 'השאלות אשר מסומנות ב-"*" (כוכבית) נמצאות בשימוש בכמה בחנים. שאלה זו לא תמחק מהבחנים אלא רק מסיווג (קטגוריה) השאלות במאגר.';
$string['questionsmovedto'] = 'שאלות שבשימוש הועברו ל"{$a}" בקטגוריית קורס האב.';
$string['questionsrescuedfrom'] = 'השאלות מ: \'{$a}\' נשמרו.';
$string['questionsrescuedfrominfo'] = 'השאלות המוצגות (חלקן כנראה הוסתר) נשמרו כאשר \'{$a}\' נמחק, <br /> מפני שהם עדיין בשימוש ע"י בחנים ופעילויות מסויימות.';
$string['questiontags'] = 'תגיות שאלה';
$string['questiontext'] = 'תוכן השאלה';
$string['questiontype'] = 'סוג השאלה';
$string['questionuse'] = 'השתמש בשאלה בפעילות זאת';
$string['questionvariant'] = 'גרסת השאלה';
$string['questionx'] = 'שאלה {$a}';
$string['requiresgrading'] = 'נדרש מתן ציון';
$string['responsehistory'] = 'היסטורית ניסיונות המענה';
$string['restart'] = 'ניסיון מענה חדש';
$string['restartwiththeseoptions'] = 'ניסיון מענה חדש עם אפשרויות הבאות';
$string['reviewresponse'] = 'צפיה בתשובה';
$string['rightanswer'] = 'התשובה הנכונה';
$string['rightanswer_help'] = 'יצירה אוטומטית של סיכום התגובה של התשובה הנכונה. פעולה יכולה להיות מוגבלת.כך שניתן לשקול להסביר את הפתרון של התשובה הנכונהבמשוב הכללי של השאלה ולכבות את הגדרה זו.';
$string['save'] = 'שמירה';
$string['savechangesandcontinueediting'] = 'שמירת שינויים והמשך עריכה';
$string['saved'] = '{$a} נשמר';
$string['saveflags'] = 'שמירת מצב הסמנים';
$string['selectacategory'] = 'בחירת קטגוריה:';
$string['selectaqtypefordescription'] = 'יש לבחור סוג שאלה לתצוגת התיאור שלה.';
$string['selectcategoryabove'] = 'בחירת קטגוריה מהרשימה לעיל';
$string['selectquestionsforbulk'] = 'בחירת שאלות עבור פעולות חתך';
$string['settingsformultipletries'] = 'קנסות ורמזים לנסיונות מענה מרובים';
$string['shareincontext'] = 'העבר לקטגוריה {$a}';
$string['showhidden'] = 'הצגת שאלות ישנות (אשר קיימות בבחנים אך נמחקו מהמאגר)';
$string['showmarkandmax'] = 'הצגת ניקוד וניקוד מירבי';
$string['showmaxmarkonly'] = 'הצגת ניקוד מירבי בלבד';
$string['shown'] = 'מוצג';
$string['shownumpartscorrect'] = 'הצגת מספר חלקי התשובה הנכונים';
$string['shownumpartscorrectwhenfinished'] = 'הצגת מספר התשובות הנכונות לאחר שהשאלה הסתיימה';
$string['showquestiontext'] = 'הצגת תוכן השאלה תחת שם השאלה';
$string['showquestiontext_full'] = 'תצוגה מלאה';
$string['showquestiontext_off'] = 'לא';
$string['showquestiontext_plain'] = 'מלל בלבד';
$string['specificfeedback'] = 'משוב עבור כל תשובה';
$string['specificfeedback_help'] = 'משוב שמסתמך על התשובה שענה הסטודנט.';
$string['started'] = 'התחיל';
$string['state'] = 'מצב';
$string['step'] = 'צעד';
$string['steps'] = 'שלבים';
$string['stoponerror'] = 'עצירה בשגיאה';
$string['stoponerror_help'] = 'הגדרה זו קובעת אם תהליך היבוא ייעצר במידה שתזוהה שגיאה, וכתוצאה מכך אף שאלה לא תיובא, או שהתהליך יימשך וייבא רק את השאלות התקינות תוך התעלמות משאלות המכילות שגיאות.';
$string['submissionoutofsequence'] = 'גישה מחוץ לרצף. אין להקליק על כפתור חזרה, כאשר נמצאים במהלך מענה על שאלות הבוחן.';
$string['submissionoutofsequencefriendlymessage'] = 'התבצעה הזנת נתונים מחוץ לרצף הרגיל, יכולה להתרחש כאשר משתמשים בכפתורי הניווט של הדפדפן ("אחורה" ו"קדימה"). יש להשתדל שלא להשתמש בהם בזמן בוחן.

יכול לקרות גם כאשר מקליקים על משהו בזמן שדף נטען. יש לבחור ב<strong>המשך</strong> כדי לטעון מחדש.';
$string['submit'] = 'הגשה';
$string['submitandfinish'] = 'הגשה וסיום';
$string['submitted'] = 'הגשת: {$a}';
$string['tagarea_question'] = 'שאלות';
$string['technicalinfo'] = 'מידע טכני';
$string['technicalinfo_help'] = 'המידע הטכני מיועד בדרך-כלל למפתחים שעובדים על סוגי שאלות חדשים. הדבר מועיל גם לפיענוח בעיות בשאלות.';
$string['technicalinfomaxfraction'] = 'ניקוד מירבי: {$a}';
$string['technicalinfominfraction'] = 'ניקוד מזערי: {$a}';
$string['technicalinfoquestionsummary'] = 'תקציר השאלה:  {$a}';
$string['technicalinforesponsesummary'] = 'תקציר המענה: {$a}';
$string['technicalinforightsummary'] = 'תקציר התשובה הנכונה: {$a}';
$string['technicalinfostate'] = 'מצב השאלה:  {$a}';
$string['technicalinfovariant'] = 'גרסת שאלה: {$a}';
$string['tofilecategory'] = 'כתוב את הקטגוריה לקובץ';
$string['tofilecontext'] = 'כתוב את ההקשר לקובץ';
$string['topfor'] = 'ראשי עבור {$a}';
$string['uninstallbehaviour'] = 'הסרת התקנת התנהגות-שאלה זו.';
$string['uninstallqtype'] = 'הסרת סוג שאלה זה';
$string['unknown'] = 'לא ידוע';
$string['unknownbehaviour'] = 'התנהגות שאלה לא ידועה:  {$a}';
$string['unknownorunhandledtype'] = 'סוג שאלה לא ידוע או לא מטופל שאלה: {$a}';
$string['unknownquestion'] = 'שאלה לא ידועה:  {$a}';
$string['unknownquestioncatregory'] = 'קטגורית שאלה לא ידועה:  {$a}';
$string['unknownquestiontype'] = 'סוג שאלה לא ידוע: {$a}.';
$string['unknowntolerance'] = 'סוג מרווח סבילות {$a} לא ידוע';
$string['unpublished'] = 'לא פורסם';
$string['unusedcategorydeleted'] = 'קטגוריה זו נמחקה מפני ששאלותיה יצאו מכלל שימוש לאחר שהקורס נמחק.';
$string['updatedisplayoptions'] = 'עדכון אפשרויות תצוגה';
$string['upgradeproblemcategoryloop'] = 'בעיה הובחנה כאשר עודכנה קטגוריית שאלות. קיימת לולאה בעץ הקטגוריה. מספרי זיהוי הקטגוריה המושפעים הם {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'לא ניתן היה לעדכן את קטגוריית השאלה {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'בעיה הובחנה כאשר עודכנה קטגוריית שאלות. קטגוריית  {$a->id} מתייחסת לאב {$a->parent} אשר איננו קיים. האב שונה לתקן את המצב הנ"ל.';
$string['version_selection'] = 'גרסה {$a->version}';
$string['whethercorrect'] = 'האם התשובה נכונה';
$string['whethercorrect_help'] = 'הדבר מכסה גם את התאור המילולי \'תשובה נכונה\' ,\'תשובה נכונה חלקית\' או \'תשובה שגויה\' וכל הדגשה צבעונית שמעבירה את אותו מידע.';
$string['whichtries'] = 'אלו נסיונות';
$string['withselected'] = 'על השאלות שנבחרו, ניתן לבצע את הפעולה הבאה';
$string['wrongprefix'] = 'nameprefix {$a} כתוב מבצורה שגויה';
$string['xoutofmax'] = '{$a->mark} מתוך {$a->max}';
$string['yougotnright'] = '{$a->num} תשובות נענו באופן נכון.';
$string['youmustselectaqtype'] = 'יש לבחור סוג שאלה.';
$string['yourfileshoulddownload'] = 'קובץ היצוא אמור להתחיל לרדת מייד. אם איננו יורד , אנא לחצו <a href="{$a}">כאן </a>.';
