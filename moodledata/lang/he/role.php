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
 * Strings for component 'role', language 'he', version '4.1'.
 *
 * @package     role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'הוספת תפקיד חדש';
$string['addrole'] = 'הוספת  תפקיד חדש';
$string['advancedoverride'] = 'עקיפת תפקיד מתקדם';
$string['allow'] = 'אפשר';
$string['allowassign'] = 'ניהול הקצאת תפקידים';
$string['allowed'] = 'מותר';
$string['allowoverride'] = 'ניהול עקיפת תפקיד';
$string['allowroletoassign'] = 'אפשר למשתמשים עם תפקיד {$a->fromrole}
להקצות לתפקיד
{$a->targetrole}';
$string['allowroletooverride'] = 'אפשר למשתמשים עם תפקיד
{$a->fromrole}
לעקוף את התפקיד
{$a->targetrole}';
$string['allowroletoswitch'] = 'אפשר למשתמשים עם תפקיד
{$a->fromrole} להחליף  תפקידים לתפקיד
{$a->targetrole}';
$string['allowswitch'] = 'ניהול החלפת תפקידים';
$string['allsiteusers'] = 'כל משתמשי האתר';
$string['archetype'] = 'התפקיד מבוסס על התבנית';
$string['archetype_help'] = '"תפקיד העל" (archetype) של תפקיד קובע את ההרשאות כאשר התפקיד מאותחל לבררת־מחדל.

ובנוסף, קובע כל הרשאות החדשות עבור התפקיד כאשר המערכת מבצעת תהליך שדרוג.';
$string['archetypecoursecreator'] = 'תבנית לתפקיד: יוצר קורסים';
$string['archetypeeditingteacher'] = 'תבנית לתפקיד: מורה (עורך)';
$string['archetypefrontpage'] = 'תבנית לתפקיד: משתמש מאומת בהדף הראשי';
$string['archetypeguest'] = 'תבנית לתפקיד: אורח';
$string['archetypemanager'] = 'תבנית לתפקיד: מנהל';
$string['archetypestudent'] = 'תבנית לתפקיד: תלמיד';
$string['archetypeteacher'] = 'תבנית לתפקיד: מורה (לא עורך)';
$string['archetypeuser'] = 'תבנית לתפקיד: משתמש מאומת';
$string['assignanotherrole'] = 'הקצאת תפקיד נוסף';
$string['assignedroles'] = 'תפקידים מוקצים';
$string['assignerror'] = 'שגיאה בעת הקצאה לתפקיד {$a->role}
עבור המשתמש
{$a->user}';
$string['assignglobalroles'] = 'הקצאת תפקידים מערכתיים';
$string['assignmentcontext'] = 'הקשר ההקצאה';
$string['assignmentoptions'] = 'אפשרויות ההקצאה';
$string['assignrole'] = 'הקצה תפקיד';
$string['assignrolenameincontext'] = 'הקצה תפקיד \'{$a->role}\' ב- {$a->context}';
$string['assignroles'] = 'תפקידים והרשאות';
$string['assignroles_help'] = '<p align="center"><b>מינוי אנשים לתפקידים</b></p>

<p>
כשאתם ממנים משתמש לתפקיד בתוך הקשר מסויים, אתם מעניקים לו את ההרשאות לגשת למשאבים שמגיעים עם התפקיד בהקשר הנוכחי, ובכל ההקשרים ה"נמוכים יותר".
</p>

<p>
הקשרים:
<ol>
<li>אתרמערכת</li>
<li>קטגוריות של קורסים</li>
<li>קורסים</li>
<li>בלוקים ופעילויות</li>
</ol>
</p>

<p>
למשל, אם תעניקו למשתמש כלשהו תפקיד סטודנט בקורס מסויים, התפקיד יחול עליו בתוך הקורס, וגם בכל הפעילויות והבלוקים שמתקיימים באותו הקורס, אבל יכול להיות, שהרשאות הגישה שלו יהיו תלויות בתפקידים וסמכויות אחרות שכבר הוגדרו מראש.
</p>

<p>
ראו גם:
<a href="help.php?file=roles.html">תפקידים</a>,
<a href="help.php?file=contexts.html">הקשרים</a>,
<a href="help.php?file=permissions.html">הרשאות גישה</a> and
<a href="help.php?file=overrides.html">סמכויות עוקפות</a>.
</p>';
$string['assignroles_link'] = 'admin/roles/assign';
$string['assignrolesin'] = 'הקצאת תפקידים ב {$a}';
$string['assignrolesrelativetothisuser'] = 'הקצאת תפקידים למשתמש';
$string['backtoallroles'] = 'חזרה לרשימת התפקידים';
$string['backup:anonymise'] = 'נתוני משתמש אנונימי על הגיבוי';
$string['backup:backupactivity'] = 'פעיליות גיבוי';
$string['backup:backupcourse'] = 'גבה קורסים';
$string['backup:backupsection'] = 'יחידות גיבוי';
$string['backup:backuptargetimport'] = 'גבה בעבור יצוא ';
$string['backup:configure'] = 'הגדר אפשרויות הגיבוי';
$string['backup:downloadfile'] = 'הורדת קבצים מאזור הגיבוי';
$string['backup:userinfo'] = 'גיבוי נתוני המשתמשים בפעילות';
$string['badges:awardbadge'] = 'הענקת תג למשתמש';
$string['badges:configurecriteria'] = 'הגדרת/עריכת תנאי הזכייה בהישג';
$string['badges:configuredetails'] = 'הגדרת/עריכת פרטי ההישג';
$string['badges:configuremessages'] = 'הגדרת הודעות ההישג';
$string['badges:createbadge'] = 'יצירה או שכפול הישג';
$string['badges:deletebadge'] = 'מחיקת תגים';
$string['badges:earnbadge'] = 'זכייה בהישג';
$string['badges:manageglobalsettings'] = 'ניהול הגדרות מערכתיות של ההישגים';
$string['badges:manageownbadges'] = 'צפיה וניהול ההישגים האישיים שזכית';
$string['badges:viewawarded'] = 'צפיה במשתמשים שזכו בהישג מסויים מבלי היכולת להרוויח או לזכות בהישגים.';
$string['badges:viewbadges'] = 'צפיה בהישגים זמינים ללא אפשרות זכייה בהם';
$string['badges:viewotherbadges'] = 'צפיה בהישגים ציבוריים בפרופיל משתמש של משתמשים אחרים';
$string['block:edit'] = 'עריכת הגדרות המשבצת';
$string['block:view'] = 'צפיה במשבצת־ניהול';
$string['blog:create'] = 'יצירת רשומות חדשות בבלוג';
$string['blog:manageentries'] = 'עריכה וניהול הרשומות';
$string['blog:manageexternal'] = 'עריכה וניהול בלוגים חיצוניים';
$string['blog:search'] = 'חיפוש ידיעות בלוג';
$string['blog:view'] = 'צפיה ברשומות בלוג';
$string['blog:viewdrafts'] = 'צפייה בטיוטות של ידיעות הבלוג';
$string['calendar:manageentries'] = 'נהל כל רשומות בלוח-השנה';
$string['calendar:managegroupentries'] = 'נהל רשומות קבוצה בלוח-השנה';
$string['calendar:manageownentries'] = 'נהל את רשומותי בלוח-שנה';
$string['capabilities'] = 'יכולות';
$string['capability'] = 'יכולת:';
$string['category:create'] = 'יצירת קטגוריות';
$string['category:delete'] = 'מחק קטגוריות';
$string['category:manage'] = 'ניהול קטגוריות';
$string['category:update'] = 'עדכן קטגוריות';
$string['category:viewhiddencategories'] = 'הצגת קטגוריות נסתרות';
$string['category:visibility'] = 'ראה קטגוריות מוסתרות';
$string['checkglobalpermissions'] = 'בדיקת הרשאות המערכת';
$string['checkpermissions'] = 'בדיקת הרשאות';
$string['checkpermissionsin'] = 'בדיקת הרשאות ב {$a}';
$string['checksystempermissionsfor'] = 'בדיקת הרשאות מערכת ב {$a}';
$string['checkuserspermissionshere'] = 'בדיקת הרשאות עבור {$a->fullname}
כשהוא ב- {$a->contextlevel}';
$string['chooseroletoassign'] = 'אנא בחרו תפקיד להקצאה';
$string['cohort:assign'] = 'הוספת/הסרת חברים בקבוצה מערכתית';
$string['cohort:manage'] = 'יצירה, מחיקה והזזת קבוצות מערכתיות';
$string['cohort:view'] = 'צפיה בקבוצות מערכתיות המתפרסות על כל האתר';
$string['comment:delete'] = 'מחק הערות';
$string['comment:post'] = 'שלח הערות';
$string['comment:view'] = 'קריאת הערות';
$string['competency:competencymanage'] = 'ניהול מאגר מיומנויות';
$string['competency:competencyview'] = 'צפיה במאגר מיומנויות';
$string['competency:plancomment'] = 'הודעה על הערה שנוספה ל\'תכנית הלימוד\'';
$string['confirmaddadmin'] = 'האם ברצונך להוסיף את המשתמש
<strong>{$a}</strong>
לרשימת מנהלי־המערכת?';
$string['confirmdeladmin'] = 'האם ברצונך להסיר את המשתמש
<strong>{$a}</strong>  מרשימת מנהלי
המערכת';
$string['confirmroleprevent'] = 'האם הינך בטוח כי ברצונך להסיר
<strong>{$a->role}</strong>
מרשימת התפקידים המאושרים ליכולת {$a->cap} בהקשר
{$a->context}?';
$string['confirmroleunprohibit'] = 'האם הינך בטוח כי ברצונך להסיר
<strong>{$a->role}</strong>
מרשימת התפקידים החסומים ליכולת {$a->cap} בהקשר
{$a->context}?';
$string['confirmunassign'] = 'האם הינך בטוח כי ברצונך להסיר תפקיד זה ממשתמש זה?';
$string['confirmunassignno'] = 'ביטול';
$string['confirmunassigntitle'] = 'אישור שינוי תפקיד';
$string['confirmunassignyes'] = 'הסר';
$string['context'] = 'הקשר';
$string['course:activityvisibility'] = 'הסתרה או הצגת פעילויות';
$string['course:bulkmessaging'] = 'שליחת הודעה לאנשים רבים';
$string['course:changecategory'] = 'שנה קטגוריית קורס';
$string['course:changefullname'] = 'שנה את השם המלא של הקורס';
$string['course:changeidnumber'] = 'שנה את מספר הזיהוי של הקורס';
$string['course:changeshortname'] = 'שנה את השם המקוצר של הקורס';
$string['course:changesummary'] = 'שנה תקציר קורס';
$string['course:create'] = 'יצירת קורסים';
$string['course:delete'] = 'מחק קורסים';
$string['course:enrolconfig'] = 'הגדרת מופעי רישום בקורסים';
$string['course:enrolreview'] = 'סקירת הרשמות הקורס';
$string['course:ignorefilesizelimits'] = 'משתמש בקבצים גדולים מכל הגבלות גודל הקבצים';
$string['course:isincompletionreports'] = 'יוצג בדוחות השלמה';
$string['course:manageactivities'] = 'ניהול פעילויות';
$string['course:managefiles'] = 'ניהול קבצים';
$string['course:managegrades'] = 'ניהול ציונים';
$string['course:managegroups'] = 'ניהול קבוצות';
$string['course:managescales'] = 'ניהול מדרגות־הערכה';
$string['course:markcomplete'] = 'סמן משתמשים כ"הושלם" בהשלמת הקורס';
$string['course:movesections'] = 'להעביר קטעים';
$string['course:request'] = 'בקש קורסים חדשים';
$string['course:reset'] = 'אפס קורס';
$string['course:reviewotherusers'] = 'צפיה נוספת במשתמשים אחרים';
$string['course:sectionvisibility'] = 'ראות של קטע בקרה';
$string['course:setcurrentsection'] = 'קבע את הקטע הנוכחי';
$string['course:update'] = 'עדכן הגדרות קורס';
$string['course:useremail'] = 'הפעל או מנע כתובות דוא"ל';
$string['course:view'] = 'צפיה בקורסים ללא השתתפותך';
$string['course:viewcoursegrades'] = 'ראה ציוני קורסים';
$string['course:viewhiddenactivities'] = 'צפיה בפעילויות מוסתרות';
$string['course:viewhiddencourses'] = 'צפיה בקורסים מוסתרים';
$string['course:viewhiddensections'] = 'צפיה ביחידות הוראה מוסתרות';
$string['course:viewhiddenuserfields'] = 'צפיה בשדות משתמשים מוסתרים';
$string['course:viewparticipants'] = 'ראה משתתפים';
$string['course:viewscales'] = 'הצגת מדרגות־הערכה';
$string['course:viewsuspendedusers'] = 'צפיה במשתמשים מושהים';
$string['course:visibility'] = 'הסתרה או הצגת קורסים';
$string['createrolebycopying'] = 'יצירת תפקיד חדש על-ידי העתקת {$a}';
$string['createthisrole'] = 'יצירת התפקיד הזה';
$string['currentcontext'] = 'הקשר נוכחי';
$string['currentrole'] = 'תפקיד נוכחי';
$string['customroledescription'] = 'תיאור התפקיד';
$string['customroledescription_help'] = 'תיאורים של תפקידי ליבה מוצגים בגרסתם המתורגמת כאשר התיאור ריק.';
$string['customrolename'] = 'שם התפקיד';
$string['customrolename_help'] = 'שם תפקיד של תפקידי ליבה מוצגים בגרסתם המתורגמת כאשר השם ריק.

יש להזין שם תפקיד עבור תפקידים אשר נוצרו באופן ידני.';
$string['defaultrole'] = 'תפקיד בררת־מחדל';
$string['defaultx'] = 'בררת־מחדל: {$a}';
$string['defineroles'] = 'הגדרת תפקידים';
$string['deletecourseoverrides'] = 'מחק את כל הקצאות התפקידים המקומיות בקורס';
$string['deletelocalroles'] = 'מחק את כל הקצאות התפקידים המקומיות';
$string['deleterolesure'] = 'האם למחוק את התפקיד "{$a->name} ({$a->shortname})"?</p><p>) נכון לרגע זה, {$a->count} משתמשים ממונים לתפקיד זה.';
$string['deletexrole'] = 'מחק תפקיד {$a}';
$string['duplicaterole'] = 'תפקיד כפול';
$string['duplicaterolesure'] = 'האם לשכפל את התפקיד "{$a->name} ({$a->shortname})"?</p>';
$string['editingrolex'] = 'עריכת תפקיד \'{$a}\'';
$string['editrole'] = 'עריכת תפקיד';
$string['editxrole'] = 'עריכת תפקיד {$a}';
$string['errorbadrolename'] = 'שם תפקיד שגוי';
$string['errorbadroleshortname'] = 'שם תפקיד שגוי';
$string['errorexistsrolename'] = 'שם התפקיד כבר קיים';
$string['errorexistsroleshortname'] = 'שם התפקיד כבר קיים';
$string['eventroleallowassignupdated'] = 'התר הקצאת תפקידים';
$string['eventroleallowoverrideupdated'] = 'התר עקיפת תפקידים';
$string['eventroleallowswitchupdated'] = 'התר החלפת תפקידים';
$string['eventroleassigned'] = 'התפקיד הוקצה';
$string['eventrolecapabilitiesupdated'] = 'הרשאות התפקיד עודכנו';
$string['eventroledeleted'] = 'התפקיד נמחק';
$string['eventroleunassigned'] = 'הוסרה הקצאת התפקיד';
$string['existingadmins'] = 'מנהלי־המערכת הנוכחיים';
$string['existingusers'] = '{$a} משתמשים קיימים';
$string['explanation'] = 'הסבר';
$string['export'] = 'יצוא';
$string['extusers'] = 'משתמשים קיימים';
$string['extusersmatching'] = 'משתמשים קיימים שנמצאו \'{$a}\'';
$string['filter:manage'] = 'ניהול הגדרות מסנן מקומיות';
$string['frontpageuser'] = 'משתמש מאומת בעמוד הבית';
$string['frontpageuserdescription'] = 'כל המשתמשים המחוברים בעמוד הבית של הקורס';
$string['globalrole'] = 'תפקיד מערכתי';
$string['globalroleswarning'] = 'אזהרה! כל התפקידים שתחלק מעמוד זה יהיו תקפים לגבי המשתמשים בכל רחבי האתר, כולל בעמוד הראשי וכל הקורסים.';
$string['gotoassignroles'] = 'צפיה בהקצאת תפקידים עבור {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'צפיה בהקצאת תפקידי מערכת';
$string['grade:edit'] = 'עריכת ציונים';
$string['grade:export'] = 'יצא ציונים';
$string['grade:hide'] = 'הסתר/גלה ציונים או פריטים';
$string['grade:import'] = 'יבא ציונים';
$string['grade:lock'] = 'נעילת ציונים או פריטים';
$string['grade:manage'] = 'ניהול פריטי ציון';
$string['grade:managegradingforms'] = 'ניהול שיטות מתן ציון מתקדמות בעזרת מחוונים';
$string['grade:manageletters'] = 'ניהול ציוני אותיות';
$string['grade:manageoutcomes'] = 'ניהול תוצאות ציונים';
$string['grade:managesharedforms'] = 'ניהול תבניות טפסים מתקדות של מתן ציון';
$string['grade:override'] = 'עקיפת ציונים';
$string['grade:sharegradingforms'] = 'שיתוף טופס מתן ציון מתקדם כתבנית';
$string['grade:unlock'] = 'הסרת נעילת ציונים או פריטים';
$string['grade:view'] = 'צפיה בציונים שלך';
$string['grade:viewall'] = 'צפיה בציונים של משתמשים אחרים';
$string['grade:viewhidden'] = 'צפיה בציונים מוסתרים של';
$string['highlightedcellsshowdefault'] = 'ההרשאות המסומנות בטבלה למטה הן בררות־המחדל המסתמכות על סוג התפקיד הנבחר למעלה.';
$string['highlightedcellsshowinherit'] = 'התאים המסומנים בטבלה למטה מציגים את ההרשאות (אם ישנן) אשר ינתנו בירושה. מעבר ליכולות של אלו הרשאות תרצו לשנות, יש צורך להשאיר הכל בהגדרת ירושה.';
$string['inactiveformorethan'] = 'לא היה פעיל יותר מ {$a->timeperiod}';
$string['ingroup'] = 'בקבוצה "{$a->group}"';
$string['inherit'] = 'לרשת';
$string['invalidpresetfile'] = 'קובץ הגדרת התפקיד לא חוקי';
$string['legacy:admin'] = 'תפקיד מורש: מנהל/ת מערכת';
$string['legacy:coursecreator'] = 'תפקיד מורש: יוצר קורס';
$string['legacy:editingteacher'] = 'תפקיד מורש: מורה (עורך)';
$string['legacy:guest'] = 'תפקיד מורש: אורח';
$string['legacy:student'] = 'תפקיד מורש: סטודנט';
$string['legacy:teacher'] = 'תפקיד מורש: מורה (לא עורך)';
$string['legacy:user'] = 'תפקיד מורש: משתמש מאומת';
$string['legacytype'] = 'סוג תפקיד מורש';
$string['listallroles'] = 'רשימת כל התפקידים';
$string['localroles'] = 'הקצאת תפקידים';
$string['mainadmin'] = 'מנהל/ת מערכת ראשי/ת';
$string['mainadminset'] = 'הגדרת מנהל/ת מערכת ראשי/ת';
$string['manageadmins'] = 'ניהול מנהלי־המערכת';
$string['manager'] = 'מנהל/ת';
$string['managerdescription'] = 'מנהלים יכולים לגשת לקורס ולשנות אותו , בדרך-כלל הם אינם משתתפים בקורס.';
$string['manageroles'] = 'ניהול תפקידים';
$string['maybeassignedin'] = 'ניתן להקצות תפקיד זה ברמות הבאות';
$string['morethan'] = 'יותר מ{$a}';
$string['multipleroles'] = 'תפקידים מרובים';
$string['my:configsyspages'] = 'הגדרת תבניות מערכת עבור דפי "עדכונים בקורסים שלי"';
$string['my:manageblocks'] = 'ניהול המשבצות בעמוד "עדכונים בקורסים שלי"';
$string['neededroles'] = 'תפקידים בעלי הרשאות';
$string['nocapabilitiesincontext'] = 'אין יכולות זמינות בהקשר זה.';
$string['noneinthisx'] = 'אין משתמשים ב{$a}';
$string['noneinthisxmatching'] = 'לא נמצאו תוצאות  משתמשים
\'{$a->search}\'
ב-
{$a->contexttype}';
$string['norole'] = 'אין תפקיד';
$string['noroleassignments'] = 'למשתמש זה אין אף הקצאת תפקיד באתר כולו.';
$string['noroles'] = 'אין תפקידים';
$string['notabletoassignroleshere'] = 'אין באפשרותך להקצות תפקידים';
$string['notabletooverrideroleshere'] = 'אין באפשרותך לערוף הרשאות באף תפקיד כאן';
$string['notes:manage'] = 'ניהול מסרים';
$string['notes:view'] = 'צפיה במסרים';
$string['notset'] = 'לא מוגדר';
$string['overrideanotherrole'] = 'עקיפת תפקיד נוסף';
$string['overridecontext'] = 'עקיפת הקשר';
$string['overridepermissions'] = 'עקוף הרשאות';
$string['overridepermissions_help'] = '<p align="center"><b>עקיפות</b></p>

<p>עקיפות הן למעשה הרשאות מסוימות שמתוכננות לעקוף תפקיד כלשהוא בהקשר מסוים ובכך מאפשרות לכם להתאים ולכוון את ההרשאות שלך.
</p>

<p>לדוגמא: נניח שמשתמשים בעלי תפקיד של סטודנט בקורס שלכם יכולים, בדרך כלל, לפתוח בדיונים חדשים בפורומים וישנו פורום אחד בו הייתם רוצים להגביל את היכולת הזו. במצב כזה אתם יכולים להגדיר \'עקיפה\' שלוקחת מהסטודנטים את היכולת "לפתוח בדיונים חדשים".</p>

<p>ניתן להשתמש בעקיפות גם כדי \'לפתוח\' אזורים באתר ובקורסים שלכם במטרה לתת למשתמשים היתרים נוספים. לדוגמא, יכול להיות שתירצו להתנסות ולתת לסטודנטים את היכולת לבדוק, להעריך ולתת ציון למטלות מסוימות.
</p>

<p>ממשק זה דומה לממשק המשמש להגדרת התפקידים מלבד העובדה שלפעמים מוצגות בו רק יכולות רלוונטיות. בנוסף כמה מהיכולות יופיעו כאשר הן מודגשות וזאת כדי להראות לכם מה תהיה ההרשאה של התפקיד המדובר ללא עקיפה פעילה (כלומר, כאשר העקיפה מכוונת ל"לרשת").
</p>

<p>
ראו גם
<a href="help.php?file=roles.html">תפקידים</a>,
<a href="help.php?file=contexts.html">הקשרים</a>,
<a href="help.php?file=assignroles.html">חלק תפקידים</a> and
<a href="help.php?file=permissions.html">היתרים</a>.
</p>';
$string['overridepermissions_link'] = 'admin/roles/override';
$string['overridepermissionsforrole'] = 'עקיפת הרשאות עבור תפקיד
\'{$a->role}\' ב- {$a->context}';
$string['overridepermissionsin'] = 'עקוף הרשאות ב{$a}';
$string['overrideroles'] = 'עקיפת התפקידים';
$string['overriderolesin'] = 'עקיפת תפקידים ב{$a}';
$string['overrides'] = 'עקיפות';
$string['overridesbycontext'] = 'עוקף (על-ידי הקשר)';
$string['permission'] = 'הרשאה';
$string['permission_help'] = '<p align="center"><b>הרשאות</b></p>

<p> הרשאות הן ההגדרות שאתם מעניקים ליכולות מסוימות.
</p>

<p>לדוגמה, יכולת אחת היא "פתח בדיונים חדשים" (בפורומים).
</p>

<p>בכל תפקיד אתם יכולים להחליט להגדיר את ההרשאה (ליכולת) כערך אחד מתוך ארבעת הערכים הבאים:

<dl>
<dt>לרשת</dt>
<dd> לרוב זוהי ההגדרה שמשמשת כבררת־מחדל. זוהי הגדרה ניטרלית שמשמעותה "השתמש בכל הגדרה שכבר יש למשתמש". אם משתמש כלשהוא ממונה לתפקיד (למשל בקורס) בעל הרשאה זו ליכולת כלשהיא, אז ההרשאה הממשית שלו פשוט תהיה זהה להרשאה שכבר יש לו ברמות הגבוהות יותר (למשל קטגוריות או רמת האתר). בסופו של דבר, אם בשום רמה לא ניתנת למשתמש הרשאה אז לא תהיה לו שום הרשאה ליכולת ההיא.
    </dd>

<dt>אפשר</dt>
<dd>כשאתם בוחרים בזה, אתם למעשה נותנים לאנשים שממונים לתפקיד זה הרשאה ליכולת זו.
הרשאה זו תקפה להקשר שתפקיד זה מקבל בנוסף לכל ההקשרים ה"נמוכים יותר".
לדוגמא, אם תפקיד זה הוא תפקיד של תלמיד המוקצה לקורס, אז תלמידים יוכלו "להתחיל דיונים חדשים" בכל הפרומים בקורס המדובר, אלא אם כן פורומים מסוימים מכילים עקיפות סמכות או מטלות חדשות עם ערך \'מנע\' או \'אסור\' בנוגע ליכולת זו.
</dd>

<dt>מנע</dt>
<dd>אם אתם בוחרים בזה, אתם מסירים את כל ההרשאות ליכולת זו גם במידה ולמשתמשים שנמצאים בתפקיד זה הורשתה הרשאה זו בהקשר גבוה יותר.
</dd>

<dt>לאסור</dt>
<dd>ערך זה נדרש לעתים רחוקות אבל יכול להיות שלעתים תרצו למנוע לחלוטין הרשאות לתפקיד בדרך שלא יהיה ניתן לעקוף אותה בכל הקשר נמוך יותר. דוגמה טובה לאפשרות שבה תזדקקו לזה היא כאשר מנהל רוצה לאסור על אדם אחד להתחיל בדיונים חדשים בכל פורום בכל האתר. במקרה זה הוא יכול ליצור תפקיד בו יכולות זו (לפתוח בדיונים חדשים) מוגדרת כ-\'אסור\' ואז למנות את המשתמש לתפקיד זה בתוך ההקשר של האתר.
  </dd>

</dl>
</p>

<p align="center"><b>פתרון קונפליקטים בין הרשאות</b></p>

<p> הרשאות בהקשרים "נמוכים" יותר לרוב יעקפו כל דבר בהקשר "גבוה" יותר (הדבר תקף לעקיפות ומינויי תפקידים). היוצא מן הכלל הוא \'לאסור\', אותו אי אפשר לעקוף ברמות נמוכות יותר.
</p>

<p> אם לאותו אדם ממונים שני תפקידים באותו ההקשר, אחד אם \'אפשר\' ואחד עם \'מנע\', איזה מהם מנצח? במקרה זה מוודל יערוך חיפוש בעץ ההקשרים אחר "מחליט".
 </p>

<p>לדוגמה, לתלמיד יש שני תפקידים בקורס, אחד שמאפשר לו לפתוח בדיונים חדשים ואחד שמונע זאת ממנו.
במקרה זה נבדוק את הקשרי הקטגוריות והאתר, כאשר אנו מחפשים אחר הרשאה מוגדרת אחרת שתעזור לנו להחליט.
אם לא נמצא אחת, אז לפי ברירת המחדל ההרשאה תהיה \'מנע\' (וזאת מפני ששתי ההגדרות ביטלו אחת את השניה ונשארנו ללא הרשאה.
</p>

<p align="center"><b>יוצאים מן הכלל</b></p>

<p> שימו לב שלרוב חשבון משתמש אורח לא יוכל לפרסם תוכן (לדוגמה פורומים, רשומות בלוח השנה, בלוגים) אפילו אם ניתנת לו היכולת לעשות זאת.
</p>

<p>
ראה גם:
<a href="help.php?file=roles.html">תפקידים</a>,
<a href="help.php?file=contexts.html">הקשרים</a>,
<a href="help.php?file=assignroles.html">מנה לתפקידים</a> and
<a href="help.php?file=overrides.html">עקיפות</a>.
</p>';
$string['permissions'] = 'הרשאות';
$string['permissionsforuser'] = 'הרשאות עבור משתמש
{$a}';
$string['permissionsincontext'] = 'הרשאות ב {$a}';
$string['portfolio:export'] = 'יצוא לתיקי עבודות';
$string['potentialusers'] = '{$a} משתמשים זמינים';
$string['potusers'] = 'משתמשים זמינים';
$string['potusersmatching'] = 'משתמשים זמינים המכילים את  \'{$a}\'';
$string['prevent'] = 'מנע';
$string['prohibit'] = 'אסור';
$string['prohibitedroles'] = 'אסור';
$string['question:add'] = 'הוספת שאלות חדשות';
$string['question:config'] = 'יצירת סוגי שאלה';
$string['question:editall'] = 'עריכת כל השאלות';
$string['question:editmine'] = 'עריכת השאלות שלך';
$string['question:flag'] = 'ניתן לסמן את השאלות בעת הנסיון לפותרן';
$string['question:managecategory'] = 'ניהול קטגוריות של שאלות';
$string['question:moveall'] = 'הסט את כל השאלות';
$string['question:movemine'] = 'הסט את השאלות שלך';
$string['question:useall'] = 'השתמש בכל השאלות';
$string['question:usemine'] = 'השתמש בשאלות שלך';
$string['question:viewall'] = 'הצגת כל השאלות';
$string['question:viewmine'] = 'הצגת השאלות שלך';
$string['rating:rate'] = 'הוספת דירוגים עבור פריטים';
$string['rating:view'] = 'צפיה בסך-כל הדירוגים שנתנו על-ידי משתמשים';
$string['rating:viewall'] = 'צפיה בשורת הדירוגים שנתנה על-ידי משתמשים';
$string['rating:viewany'] = 'צפיה בסך-כל הדירוגים שכל אחד קיבל';
$string['reportbuilder:edit'] = 'ערכו את הדוחות המותאמים שלכם.ן';
$string['reportbuilder:editall'] = 'ערכו את כל הדוחות המותאמים';
$string['reportbuilder:view'] = 'תצוגת דוחות מותאמים';
$string['resetrole'] = 'אתחל מחדש לברירות המחדל';
$string['resettingrole'] = 'מאתחל תפקיד \'{$a}\'';
$string['restore:configure'] = 'הגדרת אפשרויות שחזור';
$string['restore:createuser'] = 'יצירת משתמשים בשחזור';
$string['restore:restoreactivity'] = 'שחזר פעילויות';
$string['restore:restorecourse'] = 'שחזר קורסים';
$string['restore:restoresection'] = 'שחזר יחידות';
$string['restore:restoretargetimport'] = 'שחזר מקבצים אשר מיועדים ליבוא';
$string['restore:rolldates'] = 'מאפשר לגלול תאריכי הגדרת פעילות בשחזור';
$string['restore:uploadfile'] = 'העלאת קבצים לאזור הגיבויים';
$string['restore:userinfo'] = 'שחזר מידע משתמש';
$string['restore:viewautomatedfilearea'] = 'שחזר קורסים מהגיבויים האוטומטיים';
$string['risks'] = 'סיכונים';
$string['role:assign'] = 'הקצאת תפקידים למשתמשים';
$string['role:manage'] = 'יצירה וניהול תפקידים';
$string['role:override'] = 'עקוף את הרשאות המשתמשים';
$string['role:review'] = 'סקירת הרשאות עבור אחרים';
$string['role:safeoverride'] = 'עקוף הרשאות מוגנות עבור אחרים';
$string['role:switchroles'] = 'החלף לתפקידים אחרים';
$string['roleallowheader'] = 'אפשר תפקיד:';
$string['roleallowinfo'] = 'בחרו בתפקיד אשר יתווסף לרשימת התפקידים אשר <b>יכולים</b> לבצע "{$a->cap}" ב "{$a->context}":';
$string['roleassignments'] = 'הקצאות התפקידים';
$string['roledefinitions'] = 'הגדרות תפקיד';
$string['rolefullname'] = 'שם';
$string['roleincontext'] = '{$a->role} ב- {$a->context}';
$string['roleprohibitheader'] = 'אסור תפקיד';
$string['roleprohibitinfo'] = 'בחרו בתפקיד אשר יתווסף לרשימת התפקידים אשר <b>לא יכולים</b> לבצע "{$a->cap}" ב "{$a->context}":';
$string['rolerepreset'] = 'שימוש בתפקיד מוגדר מראש';
$string['roleresetdefaults'] = 'ברירות מחדל';
$string['roleresetrole'] = 'שימוש בתפקיד או תבנית-תפקיד';
$string['rolerisks'] = 'סיכוני התפקיד';
$string['roles'] = 'תפקידים';
$string['roles_help'] = '<p align="center"><b>תפקידים</b></p>

<p> תפקיד הוא אוסף של הרשאות שמוגדרות עבור האתר בכללותו, אותן אתם יכולים להעניק למשתמשים מסויימים בהקשרים מסויימים.
</p>

<p>לדוגמא, יכול להיות לכם תפקיד שנקרא "מורה" שמוגדר כדי לאפשר למורים לעשות דברים מסויימים (ולא לאחרים). ברגע שתפקיד זה קיים, אתם יכולים להעניק אותו למישהו בקורס ובכך להפוך אותו ל"מורה" עבור אותו הקורס. בנוסף, אתם יכולים למנות לתפקיד הזה משתמש שנמצא בקטגוריית הקורס, ובכך להפוך אותו למורה עבור כל הקורסים שנמצאים באותה קטגוריה. או, למנות לתפקיד משתמש בתוך פורום יחידי, ובכך להעניק למשתמש הנ"ל את היכולות הללו רק במסגרת אותו הפורום.
<p>

<p>חובה שיהיה לתפקיד <strong>שם</strong>. אם אתם צריכים לתת לתפקיד שם עבור מספר שפות שונות, אם אתם רוצים בכך אתם יכולים להשתמש בתחביר רב-שפות (multilang), לדוגמא: <pre>
  &lt;span lang="en">Teacher&lt;/span>
  &lt;span lang="es_es">Profesor&lt;/span>
  </pre>אם אתם בוחרים לעשות זאת, וודאו שההגדרה "לסנן מחרוזות" מופעלת עבור ההתקנה שלכם.
</p>

<p>
 <strong>השם הקצר</strong> הוא הכרחי עבור התקני תקע אחרים במוודל, שיכול להיות ויצטרכו להתייחס לתפקידים שלכם (למשל: בזמן העלאת משתמשים מתוך קובץ או הגדרת הרשמות דרך התקן תקע שמשמש להרשמה).
<p>

<p>
<strong>התיאור</strong> משמעותו פשוט לתאר את התפקיד במילים שלכם, כך שלכולם תהיה הבנה משותפת של אותו התפקיד.
<p>

<p>
ראו גם:
<a href="help.php?file=contexts.html">הקשרים</a>,
<a href="help.php?file=permissions.html">הרשאות</a>,
<a href="help.php?file=assignroles.html">מנה לתפקידים</a> and
<a href="help.php?file=overrides.html">עקיפות</a>.
</p>';
$string['roles_link'] = 'roles';
$string['roleselect'] = 'בחירת תפקיד';
$string['rolesforuser'] = 'תפקידי המשתמש {$a}';
$string['roleshortname'] = 'שם מקוצר (באנגלית!)';
$string['roletoassign'] = 'תפקיד שיש למנות אליו';
$string['roletooverride'] = 'תפקיד שיש לעקוף אותו';
$string['safeoverridenotice'] = 'הערה: יכולות עם סיכונים גבוהים נעולים מיכוון שאתה רשאי לעקוף רק יכולות מוגנות.';
$string['selectanotheruser'] = 'בחירת משתמש אחר';
$string['selectauser'] = 'בחירת משתמש';
$string['selectrole'] = 'בחירת תפקיד';
$string['showallroles'] = 'תצוגת כל התפקידים';
$string['showthisuserspermissions'] = 'הצגת הרשאות משתמש זה';
$string['site:accessallgroups'] = 'גישה לכל הקבוצות';
$string['site:approvecourse'] = 'אשר יצירת קורס';
$string['site:backup'] = 'גבה את הקורס';
$string['site:config'] = 'שנה את הגדרות התצורה של האתר';
$string['site:deleteanymessage'] = 'מחיקת כל המסרים של האתר';
$string['site:deleteownmessage'] = 'מחיקת מסרים שנשלחו מ ואל המשתמש';
$string['site:doanything'] = 'מורשה לעשות הכל';
$string['site:doclinks'] = 'הצגת קישורים למסמכים הנמצאים מחוץ לאתר';
$string['site:forcelanguage'] = 'עקיפת שפת ממשק הקורס';
$string['site:import'] = 'יבוא לתוך קורס קורסים אחרים';
$string['site:manageblocks'] = 'ניהול המשבצות ברמת המערכת';
$string['site:mnetloginfromremote'] = 'התחבר למערכת מ-Moodle מרוחק';
$string['site:mnetlogintoremote'] = 'שוטט ל-Moodle מרוחק';
$string['site:readallmessages'] = 'קריאת כל הודעות המערכת';
$string['site:restore'] = 'שחזר קורסים';
$string['site:sendmessage'] = 'שליחת הודעות לכל משתמש';
$string['site:trustcontent'] = 'בטח בתוכן שהוגש';
$string['site:uploadusers'] = 'העלה מקובץ משתמשים חדשים';
$string['site:viewfullnames'] = 'תמיד יוצג שמם המלא של המשתמשים';
$string['site:viewparticipants'] = 'ראה משתתפים';
$string['site:viewreports'] = 'ראה דוחות';
$string['site:viewuseridentity'] = 'הצגת זיהוי משתמש מלא ברשימות';
$string['siteadministrators'] = 'מנהלי־המערכת';
$string['tag:edit'] = 'עריכת תגיות קיימות';
$string['tag:editblocks'] = 'עריכת משבצות־ניהול בדפי תוויות';
$string['tag:flag'] = 'סמן בדגל כלא ראוי';
$string['tag:manage'] = 'ניהול כל התוויות';
$string['thisnewrole'] = 'תפקיד חדש זה';
$string['thisusersroles'] = 'הקצאת תפקידים במערכת';
$string['unassignarole'] = 'הסרת הקצאת פקיד {$a}';
$string['unassignconfirm'] = 'האם הינך בטוח כי ברצונך להסיר את הקצאת תפקיד  "{$a->role}" מהמשתמש
"{$a->user}"?';
$string['unassignerror'] = 'התרחשה שגיאת מערכת בעת הסרת הקצאת התפקיד \'{$a->role}\' מהמשתמש \'{$a->user}\'.';
$string['user:changeownpassword'] = 'שנה את הסיסמה שלך';
$string['user:create'] = 'יצירת משתמשים';
$string['user:delete'] = 'מחיקת משתמשים';
$string['user:editmessageprofile'] = 'עריכת פרופיל הודעות משתמש';
$string['user:editownmessageprofile'] = 'עריכת פרופיל הודעות של המשתמש שלך';
$string['user:editownprofile'] = 'עריכת הפרופיל שלך';
$string['user:editprofile'] = 'עריכת פרופיל משתמש';
$string['user:ignoreuserquota'] = 'להתעלם מהגבלת ההקצאה למשתמש';
$string['user:loginas'] = 'התחבר כמשתמשים אחרים';
$string['user:manageblocks'] = 'ניהול משבצות בפרופיל המשתמש של משתמשים אחרים';
$string['user:manageownblocks'] = 'ניהול משבצות  בפרופיל המשתמש הציבורי שלך';
$string['user:manageownfiles'] = 'ניהול קבצים באזורי הקובצים הפרטי שלך';
$string['user:managesyspages'] = 'הגדרת תצורת העמוד כבררת־מחדל עבור פרופילים של משתמשים ציבוריים';
$string['user:readuserblogs'] = 'ראה את כל הבלוגים של כל המשתמשים';
$string['user:readuserposts'] = 'ראה את כל הפירסומים של כל המשתמשים';
$string['user:update'] = 'עדכן את פרופילי משתמשים';
$string['user:viewalldetails'] = 'צפייה במידע המלא של המשתמש';
$string['user:viewdetails'] = 'ראה את פרופילי משתמשים';
$string['user:viewhiddendetails'] = 'צפיה בפרטי משתמשים מוסתרים';
$string['user:viewlastip'] = 'ראה את כתובת ה ip האחרון של המשתמשים';
$string['user:viewuseractivitiesreport'] = 'ראה את דוחות פעילות המשתמשים';
$string['user:viewusergrades'] = 'ראה את ציוני המשתמשים';
$string['usersfrom'] = 'משתמשים מ {$a}';
$string['usersfrommatching'] = 'משתמשים מ {$a->contextname} המתאימים
\'{$a->search}\'';
$string['usersinthisx'] = 'משתמשים ב {$a} זה';
$string['usersinthisxmatching'] = 'משתמשים ב {$a->contexttype}  זה המתאימים ל
\'{$a->search}\'';
$string['userswithrole'] = 'כל המשתמשים עם תפקיד';
$string['userswiththisrole'] = 'משתמשים בעלי תפקידים';
$string['useshowadvancedtochange'] = 'השתמש ב"הצגת הגדרות מתקדמות" לשינוי';
$string['viewingdefinitionofrolex'] = 'צפיה בהגדרת תפקיד
\'{$a}\'';
$string['viewrole'] = 'ראה את פרטי התפקיד';
$string['webservice:createmobiletoken'] = 'יצירת אסימון web service עבור גישת ניידים';
$string['webservice:createtoken'] = ' יצירת קוד שימוש web service';
$string['whydoesuserhavecap'] = 'מדוע ל {$a->fullname}
יש יכולת {$a->capability} בהקשר
{$a->context}?';
$string['whydoesusernothavecap'] = 'מדוע ל {$a->fullname} אין יכולת
{$a->capability} בהקשר {$a->context}?';
$string['xroleassignments'] = 'הקצאות תפקיד של
{$a}';
$string['xuserswiththerole'] = 'משתמשים שממונים לתפקיד "{$a->role}": {$a->number}';
