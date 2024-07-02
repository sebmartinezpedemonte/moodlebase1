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
 * Strings for component 'completion', language 'he', version '4.1'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'קבלת ציון';
$string['achievingpassinggrade'] = 'ארכוב ציון עובר';
$string['activities'] = 'פעילויות';
$string['activitiescompleted'] = 'השלמת הפעילויות הבאות:';
$string['activitiescompletednote'] = 'הערה: יש להגדיר מעקב־השלמה בכל פעילות אותה אתם מעוניינים לראות ברשימה לעיל.';
$string['activitieslabel'] = 'פעילויות / משאבים';
$string['activityaggregation'] = 'תנאי השלמה';
$string['activityaggregation_all'] = 'יש להשלים את כל הפעילויות המסומנות';
$string['activityaggregation_any'] = 'יש להשלים אחת מהפעילויות המסומנות';
$string['activitycompletion'] = 'תנאים להשלמת פעילות';
$string['activitycompletionupdated'] = 'השינויים נשמרו';
$string['activitygradenotrequired'] = 'לא נדרש ציון';
$string['aggregationmethod'] = 'יש להשלים';
$string['all'] = 'הכל';
$string['any'] = 'לפחות אחד';
$string['approval'] = 'אישור';
$string['areyousureoverridecompletion'] = 'האם לעדכן את מצב השלמת הפעילות עבור משתמש זה ל"{$a}"?';
$string['badautocompletion'] = 'בעת בחירה בהשלמה אוטומטית, יש צורך לאפשר לפחות דרישה אחת (למטה)';
$string['bulkactivitycompletion'] = 'ניהול השלמת פעילות כולל';
$string['bulkactivitydetail'] = 'בחירת הפעילויות שברצונכם לערוך.';
$string['bulkcompletiontracking'] = 'מעקב השלמה';
$string['bulkcompletiontracking_help'] = '<strong>ללא:</strong> ללא הצגת השלמת פעילות

<strong>ידני:</strong> לומדים יכולים לסמן השלמת פעילות ידנית

<strong>בעת השלמת תנאי(ם):</strong> הצגת פעילות כהושלמה כאשר תנאים מתקיימים';
$string['checkactivity'] = 'תיבת סימון לפעילות / משאב:  {$a}';
$string['checkall'] = 'סימון או ביטול סימון עבור כל המשאבים והפעילויות';
$string['checkallsection'] = 'סימון או ביטול סימון עבור כל המשאבים והפעילויות ביחידה הבאה: {$a}';
$string['completeactivity'] = 'השלמת הפעילות';
$string['completed'] = 'הושלם';
$string['completedunlocked'] = 'הגדרות השלמת-קורס לא נעולות';
$string['completedunlockedtext'] = 'בעת שמירת שינויים, מצב השלמת קורס לסטודנטים ימחק.  אם אינכם מעונינים לבצע פעולה זו, הקליקו על ביטול.';
$string['completedwarning'] = 'אפשרויות ההשלמה ננעלו';
$string['completedwarningtext'] = 'קיימים {$a} תלמידים שפעילות זו מסומנת עבורם כ"הושלמה". שינוי אפשרויות ההשלמה ימחק את מצב ההשלמה שלהם ועלול לגרום לבלבול. לכן האפשרויות ננעלו ואינן זמינות כעת. ניתן לבטל את הנעילה במידה ואתם מודעים להשלכות איבוד המידע שנצבר עד כה.';
$string['completion'] = 'מעקב השלמה';
$string['completion-alt-auto-enabled'] = 'המערכת סימנה את פריט זה כאילו שהושלם לפי התנאים: {$a}';
$string['completion-alt-auto-fail'] = 'הושלם: {$a} (לא השיג ציון עובר)';
$string['completion-alt-auto-n'] = 'לא הושלם: {$a}';
$string['completion-alt-auto-n-override'] = 'טרם הושלם: {$a->modname} (נקבע על ידי {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'הושלם: {$a} (השיג ציון עובר)';
$string['completion-alt-auto-y'] = 'הושלם: {$a}';
$string['completion-alt-auto-y-override'] = 'הושלם: {$a->modname} (נקבע על ידי {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'סטודנטים יכולים לסמן פריט \'{$a}\' באופן עצמאי ככזה שהושלם';
$string['completion-alt-manual-n'] = '{$a} לא הושלם.   הקליקו לסימון כ"הושלם"';
$string['completion-alt-manual-n-override'] = 'טרם הושלם: {$a->modname} (נקבע על ידי {$a->overrideuser}). הקליקו לסימון כהושלם.';
$string['completion-alt-manual-y'] = '{$a} הושלם.   הקליקו לסימון כ"לא הושלם"';
$string['completion-alt-manual-y-override'] = 'הושלם: {$a->modname} (נקבע על ידי {$a->overrideuser}). הקליקו לסימון כלא הושלם.';
$string['completion-fail'] = 'הושלם (לא השיג ציון עובר)';
$string['completion-n'] = 'לא הושלם';
$string['completion-n-override'] = 'לא הושלם (על ידי {$a})';
$string['completion-pass'] = 'הושלם (השיג ציון עובר)';
$string['completion-y'] = 'הושלם';
$string['completion-y-override'] = 'הושלם (על ידי {$a})';
$string['completion_automatic'] = 'הצגת פעילות כ"הושלם" כאשר התנאים מתמלאים';
$string['completion_help'] = 'אם מאופשר, השלמת הפעילות תהיה במעקב, ידנית או אוטומטית בהתחשב במספר תנאים. תנאים מסויימים יוגדרו אם תרצה בכך. אם כן, הפעילות תחשב שהושלמה כאשר כל התנאים מתמלאים.

סימן במשבצת לצד שם הפעילות בדף הקורס מציין מתי הפעילות הושלמה.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'סטודנטים יכולים לסמן ידנית "השלמת פעילות"';
$string['completion_none'] = 'אל תציין השלמת פעילות';
$string['completionactivitydefault'] = 'השתמשו בבררות־המחדל של הפעילות';
$string['completiondefault'] = 'בררת־מחדל מעקב השלמה';
$string['completiondisabled'] = 'לא פעיל';
$string['completionduration'] = 'רישום לקורס';
$string['completionenabled'] = 'פעיל, דורש הגדרות נוספות ב"תנאי השלמת קורס"';
$string['completionexpected'] = 'מועד השלמה';
$string['completionexpected_help'] = 'הגדרה זו מציינת את התאריך שבו יש להשלים את הפעילות. התאריך לא יוצג לסטודנטים ורק מוצג בדוח השלמת הפעילות.';
$string['completionexpecteddesc'] = 'ההשלמה צפויה ב {$a}';
$string['completionexpectedfor'] = 'נדרשת השלמה של {$a->instancename}';
$string['completionicons'] = 'תיבות סימון ההשלמה';
$string['completionicons_help'] = 'כאשר מנגנון השלמת־פעילות (או משאב) פעיל, תוצג לצד הפעילות (או המשאב) תיבת סימון המאפשרת הצגת הסימן "הושלם".

כאשר תיבת הסימון היא בעלת מסגרת מקווקוות, סימן "הושלם", המציין השלמת הפעילות, יופיע לאחר העמידה בתנאי השלמת הפעילות אשר הציב המורה לתלמידים.

כאשר התיבת הסימון בעלת מסגרת אחידה, ציון השלמת הפעילות הוא ידני ויעשה על ידי התלמיד. קליק נוסף על תיבת הסימון יסיר את הסימון. במצב זה, הסימון מתבצע לצורך תעוד ומעקב אישי של התלמיד על תהליך הלמידה שלו עצמו בקורס.';
$string['completionmenuitem'] = 'השלמה';
$string['completionnotenabled'] = 'מנגנון "השלמת קורס" אינו פעיל';
$string['completionnotenabledforcourse'] = 'מנגנון "השלמת קורס" אינו פעיל בקורס זה';
$string['completionnotenabledforsite'] = 'מנגנון "השלמת קורס" אינו פעיל במערכת זו';
$string['completionondate'] = 'תאריך';
$string['completionondatevalue'] = 'התאריך בו הקורס יחשב כהושלם';
$string['completionpassgrade'] = 'נדרש ציון "עובר"';
$string['completionpassgrade_desc'] = 'סטודנט נדרש לקבל ציון "עובר" להשלמת פעילות זו';
$string['completionsettingslocked'] = 'הגדרות השלמה נעולות';
$string['completionupdated'] = 'עדכון מידע אודות השלמת פעילות <b>{$a}</b>';
$string['completionusegrade'] = 'ציון נדרש';
$string['completionusegrade_desc'] = 'סטודנטים חייבים לקבל ציון כדי להשלים את הפעילות';
$string['completionusegrade_help'] = 'אם מאופשר, הפעילות נחשבת כהושלמה כאשר הסטודנט מקבל ציון.  צלמיות "עובר" ו"נכשל" יוצגו אם ציון "עובר" עבור הפעילות הוגדר.';
$string['completionview'] = 'צפייה נדרשת';
$string['completionview_desc'] = 'סטודנטים חייבים לצפות בפעילות זו כדי להשלים אותה';
$string['configcompletiondefault'] = 'הגדרות בררת־מחדל של מעקב־השלמה כאשר יוצרים פעילויות חדשות.';
$string['configenablecompletion'] = 'כאשר פעיל, מתאפשרת הפעלת מנגנון מעקב־ההשלמה ברמת הקורס.';
$string['confirmselfcompletion'] = 'הנכם עומדים לאשר באופן עצמאי את השלמת קורס זה. האם אתם בטוחים?';
$string['courseaggregation'] = 'התנאי דורש';
$string['courseaggregation_all'] = 'כל הקורסים שנבחרו יושלמו';
$string['courseaggregation_any'] = 'נדרשת השלמת אחד מהקורסים המסומנים';
$string['coursealreadycompleted'] = 'כבר השלמת את קורס זה';
$string['coursecomplete'] = 'הקורס הושלם';
$string['coursecompleted'] = 'קורס הושלם';
$string['coursecompletedmessage'] = '<p>ברכותינו!</p><p>על השלמת הקורס <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'תנאי השלמת קורס';
$string['coursecompletioncondition'] = 'תנאי: {$a}';
$string['coursegrade'] = 'ציון מסכם';
$string['coursesavailable'] = 'קורסים זמינים';
$string['coursesavailableexplaination'] = 'שימו לב:<i>"תנאים להשלמת קורס" חייבים להיות מוגדרים בכל קורס אותו אתם מעונינים להציג ברשימה זו</i>';
$string['criteria'] = 'תנאי';
$string['criteriagroup'] = 'קבוצת תנאים';
$string['criteriarequiredall'] = 'כל התנאים המצויינים מטה נדרשים';
$string['criteriarequiredany'] = 'לפחות אחד מהתנאים המצויינים מטה נדרשים';
$string['csvdownload'] = 'הורדה בתסדיר גליון אלקטרוני CSV UTF-8';
$string['datepassed'] = 'תאריך עבר';
$string['days'] = 'ימים';
$string['daysoftotal'] = '{$a->days} ימים מסך-כל {$a->total}';
$string['defaultcompletion'] = 'בררות־מחדל להשלמת פעילות';
$string['defaultcompletionupdated'] = 'שינויים עודכנו';
$string['deletecompletiondata'] = 'מחיקת נתוני ההשלמה';
$string['dependencies'] = 'דרישות קדם להשלמה';
$string['dependenciescompleted'] = 'השלמת קורסים אחרים';
$string['detail_desc:receivegrade'] = 'קבלת ציון';
$string['detail_desc:receivepassgrade'] = 'קבלת ציון "עובר"';
$string['detail_desc:view'] = 'צפייה';
$string['done'] = 'הושלם';
$string['editcoursecompletionsettings'] = 'עריכת הגדרות השלמת הקורס';
$string['enablecompletion'] = 'מעקב השלמה זמין?';
$string['enablecompletion_help'] = 'אם מאופשר, הגדרות מעקב השלמה מוצגות בעמוד מעקב ההשלמה, ובעמוד הגדרות הפעילות.';
$string['enrolmentduration'] = 'משך זמן רישום לקורס';
$string['enrolmentdurationlength'] = 'על המשתמש להיות רשום בקורס לפחות';
$string['err_noactivities'] = 'מידע השלמת הקורס לא מאופשר לאף פעילות, לכן לא ניתן להציג דבר. תוכל לאפשר את מידע השלמת הקורס על-ידי עריכת הגדרות הפעילות.';
$string['err_nocourses'] = 'השלמת-הקורס לא זמינה בקורסים אחרים, לכן לא ניתן להציג קורסים עליהם ניתן לבסס השלמת-קורס זה.

ניתן לאפשר השלמת-קורס בקורסים אחרים על ידי עדכון הגדרות הקורס הרצוי.
ורק אז, הם יופיעו בעמוד זה.';
$string['err_nograde'] = 'ציון "עובר" לקורס לא הוגדר עבור קורס זה. לשם הגדרת תנאי זה עליך ליצור ציון "עובר" לקורס זה תחילה.';
$string['err_noroles'] = 'לא נמצאו תפקידים עם יכולת \'moodle/course:markcomplete\' בקורס.';
$string['err_nousers'] = 'לא נמצאו סטודנטים או קבוצה בקורס זה אשר להם מידע השלמת הקורס מוצג. (כבררת־מחדל, מידע השלמת הקורס מוצג רק לסטודנטים, אם אין סטודנטים, תתקל בשגיאה זו, מנהלי המערכת יכולים לשנות אפשרות זו במערכת הניהול שלהם).';
$string['err_settingslocked'] = 'סטודנט אחד או יותר עמדו בתנאי השלמת הקורס ובהתאם לכך עודכנו וננעלו נתוני ההשלמה שלהם.
<br/>
פתיחת הגדרות תנאי ההשלמה לשינויים, תמחק את נתוני ההשלמה הידניים אשר עלול להוביל לבלבול בקרב הסטודנטים. שימו לב!';
$string['err_system'] = 'התרחשה שגיאה פנימית במערכת ההשלמה. (מנהלי המערכת יכולים לאתר את הפרטים לבעיה על-ידי אפשור ניפויי שגיאה במערכת)';
$string['eventcoursecompleted'] = 'הקורס הושלם';
$string['eventcoursecompletionupdated'] = 'מעקב השלמת קורס עודכן';
$string['eventcoursemodulecompletionupdated'] = 'מעקב השלמת פעילות עודכנה';
$string['eventdefaultcompletionupdated'] = 'ברירת מחדל של השלמת פעילות עודכנה';
$string['excelcsvdownload'] = 'הורדה בתסדיר גליון אלקטרוני "אקסל" CSV';
$string['failed'] = 'נכשל';
$string['fraction'] = 'שבר';
$string['graderequired'] = 'ציון נדרש בקורס';
$string['gradexrequired'] = '{$a} נדרש';
$string['inprogress'] = 'בתהליך';
$string['manual'] = 'ידני';
$string['manualcompletionby'] = 'נדרש אישור של בעל תפקיד להשלמת־קורס:';
$string['manualcompletionbynote'] = 'שימו לב: היכולת moodle/course:markcomplete חייבת להיות מותרת על מנת שתפקיד יופיע ברשימה זו.';
$string['manualselfcompletion'] = 'השלמה עצמאית ידנית';
$string['manualselfcompletionnote'] = 'שימו לב: יש להוסיף את בלוק ההשלמה העצמית לקורס אם מאופשרת השלמה עצמית ידנית.';
$string['markcomplete'] = 'סימון כ"הושלם"';
$string['markedcompleteby'] = 'סומן כהושלם ע"י {$a}';
$string['markingyourselfcomplete'] = 'סמנו בעצמכם כ"הושלם"';
$string['moredetails'] = 'פרטים נוספים';
$string['nocriteriaset'] = 'לא הוגדרו תנאים להשלמת קורס זה';
$string['notcompleted'] = 'לא הושלם';
$string['notenroled'] = 'אינך רשום לקורס זה';
$string['nottracked'] = 'מנגנון מעקב השלמת פעילות לא פעיל עבורך (יש להירשם לקורס)';
$string['notyetstarted'] = 'עדיין לא התחיל';
$string['overallaggregation'] = 'דרישות השלמת קורס';
$string['overallaggregation_all'] = 'הקורס מוגדר כ"הושלם" כאשר כל התנאים מתקיימים';
$string['overallaggregation_any'] = 'הקורס מוגדר כ"הושלם" כאשר לפחות אחד מהתנאים מתקיים';
$string['pending'] = 'בתהליך למידה';
$string['periodpostenrolment'] = 'התקופה לאחר ההרשמה';
$string['progress'] = 'מעקב התקדמות למידה';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'התקדמות: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'הכרה בלמידה קודמת';
$string['remainingenroledfortime'] = 'נשאר רשום למשך תקופת זמן מוגדרת';
$string['remainingenroleduntildate'] = 'נשאר רשום עד תאריך מוגדר';
$string['reportpage'] = 'הצגת משתמשים {$a->from} ל- {$a->to} מסך-הכל: {$a->total}.';
$string['requiredcriteria'] = 'תנאי נדרש';
$string['resetactivities'] = 'הסרת השלמה מכל הפעילויות והמשאבים';
$string['restoringcompletiondata'] = 'כתיבת נתוני השלמת הקורס';
$string['roleaggregation'] = 'תנאים נדרשים';
$string['roleaggregation_all'] = 'כל בעלי התפקידים המסומנים נדרשים לאשר';
$string['roleaggregation_any'] = 'אחד מבעלי התפקידים המסומנים נדרש לאשר';
$string['roleidnotfound'] = 'קוד זיהוי תפקיד {$a} לא נמצא';
$string['saved'] = 'נשמר';
$string['seedetails'] = 'צפיה בפרטים';
$string['select'] = 'בחירה';
$string['self'] = 'עצמי';
$string['selfcompletion'] = 'השלמה עצמית';
$string['showcompletionconditions'] = 'תצוגת תנאים להשלמת פעילות';
$string['showinguser'] = 'הצגת משתמש';
$string['timecompleted'] = 'מועד ההשלמה';
$string['todo'] = 'ממתין לביצוע';
$string['unenrolingfromcourse'] = 'הסרת רישום מהקורס';
$string['unenrolment'] = 'ביטול הרישום לקורס';
$string['unit'] = 'יחידה';
$string['unlockcompletion'] = 'ביטול נעילת הגדרות השלמת־קורס';
$string['unlockcompletiondelete'] = 'ביטול נעילת "הגדרות השלמת־פעילות" ומחיקת מעקב־השלמה ידני אשר הוזן על ידי המשתמש';
$string['updateactivities'] = 'עדכון מצב השלמה של הפעילויות אשר נבחרו';
$string['usealternateselector'] = 'השתמש בבורר הקורס החלופי';
$string['usernotenroled'] = 'המשתמש לא רשום לקורס זה';
$string['viewcoursereport'] = 'צפיה בדוח הקורס';
$string['viewingactivity'] = 'צפיה ב{$a}';
$string['withconditions'] = 'עם תנאים';
$string['writingcompletiondata'] = 'כתיבת נתוני השלמת הקורס';
$string['xdays'] = '{$a} ימים';
$string['yourprogress'] = 'מעקב הלמידה שלך';
