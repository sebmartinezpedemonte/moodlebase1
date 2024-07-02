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
 * Strings for component 'assign', language 'he', version '4.1'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitydate:submissionsdue'] = 'מסתיים:';
$string['activitydate:submissionsopened'] = 'נפתח:';
$string['activityeditor'] = 'הנחיות להגשת המטלה';
$string['activityeditor_help'] = 'המשימות שעל הלומדים לבצע במטלה זו. יוצג רק בדף ההגשה שבו הלומדים עורכים ומגישים את המטלה.';
$string['activityoverview'] = 'למטלות הדורשות התייחסותך';
$string['addattempt'] = 'אפשר נסיון נוסף';
$string['addnewattempt'] = 'הוספת נסיון חדש';
$string['addnewattempt_help'] = 'הפעולה תיצור הגשה ריקה חדשה, עליה ניתן יהיה לבסס את עבודך.';
$string['addnewattemptfromprevious'] = 'הוספת נסיון נוסף המבוסס על ההגשה האחרונה';
$string['addnewattemptfromprevious_help'] = 'הפעולה תעתיק את התכנים של ההגשה האחרונה שלך להגשה חדשה שתוכל לעבוד עליה.';
$string['addnewgroupoverride'] = 'הוספת התאמות מיוחדות לקבוצה';
$string['addnewuseroverride'] = 'הוספת התאמות מיוחדות למשתמש';
$string['addsubmission'] = 'הוספת הגשה';
$string['addsubmission_help'] = 'טרם הגשתם את המטלה';
$string['allocatedmarker'] = 'הקצאת בודק';
$string['allocatedmarker_help'] = 'בודק/ת הוקצה להגשה זו';
$string['allowsubmissions'] = 'אפשר למשתמש להמשיך להגיש עבור מטלה זו.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'פרטי טופס המטלה וההגשה יהיו זמינים מ-
<strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'אפשר הגשות מ';
$string['allowsubmissionsfromdate_help'] = 'כאשר פעיל, הסטודנטים לא יוכלו להגיש לפני התאריך הנקוב כאן. כאשר אינו-פעיל, הסטודנטים יוכלו להגיש מייד.';
$string['allowsubmissionsfromdatesummary'] = 'מטלה זו תאפשר הגשות החל מ- <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'אפשר שינוי בהגשות';
$string['alwaysshowdescription'] = 'הצגת התיאור באופן קבוע';
$string['alwaysshowdescription_help'] = 'כאשר אינו-פעיל, תיאור המטלה לעיל יוצג רק לסטודנטים בתאריך שסומן כ"אפשר הגשות מ".';
$string['applytoteam'] = 'החל ציונים ומשוב לכל הקבוצה';
$string['assign:addinstance'] = 'הוספת מטלה חדשה';
$string['assign:editothersubmission'] = 'עריכת הגשת סטודנט נוסף';
$string['assign:exportownsubmission'] = 'יצא את ההגשה שלך';
$string['assign:grade'] = 'בדיקה ומתן ציון למטלה';
$string['assign:grantextension'] = 'מתן הארכת זמן';
$string['assign:manageallocations'] = 'ניהול הקצאות בודקים להגשות';
$string['assign:managegrades'] = 'סקירה וזמינות הציונים';
$string['assign:manageoverrides'] = 'ניהול התאמות מיוחדות למטלה';
$string['assign:receivegradernotifications'] = 'קבלת הודעות בדבר הגשות עבור הבודק';
$string['assign:releasegrades'] = 'זמינות הציונים';
$string['assign:revealidentities'] = 'גלה זהויות סטודנטים';
$string['assign:reviewgrades'] = 'סקירת הציונים';
$string['assign:submit'] = 'הגש מטלה';
$string['assign:view'] = 'ראה מטלה';
$string['assign:viewblinddetails'] = 'צפיה בזהויות של סטודנטים כאשר "שמות נבחנים מוסתרים" מאופשר';
$string['assign:viewgrades'] = 'ראה ציונים';
$string['assignfeedback'] = 'תוסף משוב';
$string['assignfeedbackpluginname'] = 'תוסף משוב';
$string['assignmentisdue'] = 'יש להגיש את המטלה';
$string['assignmentmail'] = 'בודק המטלות {$a->grader} פרסם משוב על הגשת המטלה שלך
\'{$a->assignment}\'';
$string['assignmentmailhtml'] = 'הערות או משובים על הגשת המטלה  \'<i>{$a->assignment}</i>\' פורסמו על ידי {$a->grader} .
ניתן לראות אותן מוצגות או מצורפות בדף ההגשות שלך -  <a href="{$a->url}">ההגשה שלכם</a>.';
$string['assignmentmailsmall'] = 'הערות או משובים על הגשת המטלה \'<i>{$a->assignment}</i>\' פורסמו על ידי {$a->grader} . ניתן לראות אותן מצורפות בדף ההגשות שלך';
$string['assignmentname'] = 'שם המטלה <br>
(אשר יוצג לסטודנטים בעמוד הראשי של הקורס)';
$string['assignmentplugins'] = 'תוספי מטלה';
$string['assignmentsperpage'] = 'מטלות בכל עמוד';
$string['assignsubmission'] = 'תוסף הגשה';
$string['assignsubmissionpluginname'] = 'תוסף הגשה';
$string['attemptheading'] = 'נסיון מספר {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'נסיונות קודמים';
$string['attemptnumber'] = 'נסיון מספר';
$string['attemptreopenmethod'] = 'מנגנון הגשה חוזרת';
$string['attemptreopenmethod_help'] = 'קובע כמה נסיונות הגשה לסטודנטים. האפשרויות הזמינות הם:
<ul><li> לא פעיל - הגשת הסטודנט לא יכולה להיפתח מחדש. </li>
<li>ידני - הגשת הסטודנט יכולה להיפתח מחדש על-ידי המורה.</li>
<li>אוטומטית עד ציון "עובר" - הגשת הסטודנט נפתחת מחדש באופן אוטומטי עד שהסטודנט משיג את הציון העובר שנקבע בגיליון הציונים (קטגוריות ציון ויחידת פריטי ציון) של מטלה זו.
</li></ul>';
$string['attemptreopenmethod_manual'] = 'ידני (בניהול המורה)';
$string['attemptreopenmethod_none'] = 'לא פעיל';
$string['attemptreopenmethod_untilpass'] = 'אוטומטית עד ציון עובר';
$string['attemptsettings'] = 'הגדרות הנסיון';
$string['availability'] = 'זמינות';
$string['back'] = 'לעמוד מטלה';
$string['backtoassignment'] = 'בחזרה למטלה';
$string['batchoperationconfirmaddattempt'] = 'האם לאפשר נסיון נוסף עבור ההגשות שנבחרו?';
$string['batchoperationconfirmdownloadselected'] = 'האם להוריד את ההגשות שנבחרו?';
$string['batchoperationconfirmgrantextension'] = 'להעניק ארכה לכל ההגשות שנבחרו?';
$string['batchoperationconfirmlock'] = 'האם לנעול את כל ההגשות שנבחרו?';
$string['batchoperationconfirmremovesubmission'] = 'מחיקת ההגשות אשר נבחרו?';
$string['batchoperationconfirmreverttodraft'] = 'החזרת בחירת ההגשות למצב טיוטה';
$string['batchoperationconfirmsetmarkingallocation'] = 'הגדרת הקצאת בדיקה לכל ההגשות שנבחרו?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'הגדרת מצב מנגנון בדיקה מתקדם לכל ההגשות שנבחרו?';
$string['batchoperationconfirmunlock'] = 'האם לפתוח את כל ההגשות שנבחרו';
$string['batchoperationlock'] = 'נעילת הגשות';
$string['batchoperationreverttodraft'] = 'החזרת ההגשות למצב טיוטה';
$string['batchoperationsdescription'] = 'עם הנבחרים...';
$string['batchoperationunlock'] = 'פתיחת ההגשות';
$string['batchsetallocatedmarker'] = 'הגדר הקצאת בודק ל {$a} משתמשים שנבחרו';
$string['batchsetmarkingworkflowstateforusers'] = 'הגדרת מצב מנגנון בדיקה מתקדם למשתמש/ים {$a} שנבחרו?';
$string['beginassignment'] = 'התחלת ביצוע המטלה';
$string['blindmarking'] = 'שמות נבחנים מוסתרים (בזמן מתן ציון)';
$string['blindmarking_help'] = 'שמות סטודנטים מוסתרים (בזמן מתן ציון) מסתיר לבודקי המטלות את הזהות של הסטודנטים (את שמותיהם) כך שלא יוכלו לדעת למי הם בודקים את ההגשה (בזמן ההגשה). הגדרה זו תהיה נעולה אם הגשה או ציון כבר ניתן בהקשר של מטלה זו.';
$string['blindmarkingenabledwarning'] = 'שמות נבחנים מוסתרים מאופשרים לפעילות זו';
$string['calendardue'] = 'יש להגיש את \'{$a}\'';
$string['calendargradingdue'] = 'יש לתת ציון ל: {$a}';
$string['changefilters'] = 'שינוי מסננים';
$string['changeuser'] = 'חיפוש משתמש';
$string['choosegradingaction'] = 'כלים לבדיקת הגשות ומתן ציון';
$string['choosemarker'] = 'יש לבחור...';
$string['chooseoperation'] = 'בחירת פעולה';
$string['clickexpandreviewpanel'] = 'הקליקו לתצוגה מורחבת של חלון הסקירה';
$string['collapsegradepanel'] = 'סגירת חלון הסקירה של הציון';
$string['collapsereviewpanel'] = 'סגירת התצוגה המורחבת של חלון הסקירה';
$string['comment'] = 'הערה';
$string['completiondetail:submit'] = 'הגשת מטלה';
$string['completionsubmit'] = 'הסטודנט צריך להגיש פעילות זו בכדי להשלימה.';
$string['configshowrecentsubmissions'] = 'כולם יכולים לראות את הודעות ההגשות בדוחות הפעילות האחרונים.';
$string['confirmbatchgradingoperation'] = 'האם הינך בטוח כי ברצונך ל- {$a->operation} עבור {$a->count}  סטודנטים?';
$string['confirmsubmission'] = 'האם ברצונך להגיש את העבודה שלך עבור מתן ציון? לאחר ההגשה, לא ניתן יהיה לערוך שינויים נוספים.';
$string['confirmsubmissionheading'] = 'אישור הגשה';
$string['conversionexception'] = 'לא ניתן היה להמיר את המטלה. שגיאה:{$a}.';
$string['couldnotconvertgrade'] = 'לא ניתן היה להמיר ציון מטלה עבור משתמש {$a}.';
$string['couldnotconvertsubmission'] = 'לא ניתן היה להמיר הגשת מטלה עבור משתמש {$a}.';
$string['couldnotcreatecoursemodule'] = 'לא ניתן ליצור רכיב קורס.';
$string['couldnotcreatenewassignmentinstance'] = 'לא ניתן ליצור מופע מטלה חדש';
$string['couldnotfindassignmenttoupgrade'] = 'לא ניתן היה למצוא את מופע מטלה ישן עבור שדרוג.';
$string['currentassigngrade'] = 'הציון הנוכחי במטלה';
$string['currentattempt'] = 'זהו נסיון {$a}.';
$string['currentattemptof'] = 'זהו נסיון מספר {$a->attemptnumber} ( {$a->maxattempts}  מנסיונות שאופשרו.';
$string['currentgrade'] = 'הציון הנוכחי בגליון הציונים';
$string['cutoffdate'] = 'מועד הגשה סופי';
$string['cutoffdate_help'] = 'אם מוגדר כך, המטלה לא תקבל הגשות לאחר מועד זה ללא הארכה.';
$string['cutoffdatecolon'] = 'מועד סופי: {$a}';
$string['cutoffdatefromdatevalidation'] = 'מועד הגשה סופי חייב להיות מאוחר יותר ממועד תחילת ההגשה';
$string['cutoffdatevalidation'] = 'מועד הגשה סופי לא יכול להיות מוקדם יותר ממועד ההגשה הרגיל.';
$string['defaultlayout'] = 'חזרה למצב תצוגה מקורי';
$string['defaultsettings'] = 'הגדרות בררת־המחדל של מטלה';
$string['defaultsettings_help'] = 'הגדרות אלו מגדירות את ברירות המחדל עבור כל המטלות החדשות.';
$string['defaultteam'] = 'קבוצת בררת־המחדל';
$string['deleteallsubmissions'] = 'מחק את כל ההגשות';
$string['description'] = 'הנחיה למטלה';
$string['disabled'] = 'כבוי';
$string['downloadall'] = 'הורדת כל ההגשות (השתמש ב 7ZIP לפתיחה)';
$string['downloadasfolders'] = 'הורדת הגשות המאורגנות לתיקיות לפי סטודנט';
$string['downloadselectedsubmissions'] = 'הורדת ההגשות שנבחרו';
$string['duedate'] = 'עד לתאריך';
$string['duedate_help'] = 'זוהי תחילת הגשת המטלה, הגשות עדיין יתאפשרו לאחר מועד זה אך הן יסומנו בצע אדום  ויסומנו כהגשות שניתנו באיחור. בכדי למנוע הגשות לאחר תאריך מסויים - יש לסמן את מועד הסיום של הגשת המטלה';
$string['duedatecolon'] = 'עד לתאריך: {$a}';
$string['duedatereached'] = 'משך הזמן שהוגדר עבור מטלה זו חלף';
$string['duedatevalidation'] = 'תאריך היעד שהוגדר חייב להיות מאוחר יותר מהתאריך המצויין ב"אפשרו ההגשות מתאריך..."';
$string['editaction'] = 'פעולות...';
$string['editattemptfeedback'] = 'עריכת ציון והמשוב עבור נסיון מספר {$a}.';
$string['editingpreviousfeedbackwarning'] = 'הינך מעדכן את המשוב עבור הנסיון הקודם. נסיון זה הוא {$a->attemptnumber} מתוך {$a->totalattempts}.';
$string['editingstatus'] = 'מצב עריכה';
$string['editonline'] = 'עריכה מקוונת';
$string['editoverride'] = 'עריכת התאמות מיוחדות';
$string['editsubmission'] = 'עריכת ההגשה';
$string['editsubmission_help'] = 'ניתן עדיין לבצע עדכונים בהגשה שלך';
$string['editsubmissionother'] = 'עריכת ההגשה של {$a}';
$string['enabled'] = 'מופעל';
$string['errornosubmissions'] = 'לא נמצאו הגשות להורדה';
$string['errorquickgradingvsadvancedgrading'] = 'הציונים לא נשמרו מפני ש המטלה משתמשת בהגדרות מתקדמות';
$string['errorrecordmodified'] = 'הציונים לא נשמרו מפני שמישהו עידכן מספר נתונים הרבה לפני  שטענת את עמוד זה.';
$string['eventallsubmissionsdownloaded'] = 'כל ההגשות יורדות כעת.';
$string['eventassessablesubmitted'] = 'ההגשה הוגשה.';
$string['eventbatchsetmarkerallocationviewed'] = 'צפיות מערך הגדרות של הקצאת בודקים';
$string['eventbatchsetworkflowstateviewed'] = 'צפיות מערך ההגדרות של מנגנון בדיקה מתקדם.';
$string['eventextensiongranted'] = 'הארכה ניתנה.';
$string['eventfeedbackupdated'] = 'משוב עודכן';
$string['eventfeedbackviewed'] = 'משוב ניצפה';
$string['eventgradingformviewed'] = 'טופס מתן ציונים נצפה';
$string['eventgradingtableviewed'] = 'טבלת ציונים נצפתה';
$string['eventidentitiesrevealed'] = 'זהותם נחשפה.';
$string['eventmarkerupdated'] = 'הקצאת הבודק התעדכנה';
$string['eventoverridecreated'] = 'מטלה עם התאמות מיוחדות נוצרה';
$string['eventoverridedeleted'] = 'מטלה עם התאמות מיוחדות נמחקה';
$string['eventoverrideupdated'] = 'מטלה עם התאמות מיוחדות עודכנה';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'עמוד אישור חשיפת זהויות נצפו.';
$string['eventstatementaccepted'] = 'המשתמש קיבל את ההצהרת ההגשה.';
$string['eventsubmissionconfirmationformviewed'] = 'טופס אישור הגשה נצפה.';
$string['eventsubmissioncreated'] = 'הגשה נוצרה.';
$string['eventsubmissionduplicated'] = 'המשתמש שכפל את ההגשה שלו.';
$string['eventsubmissionformviewed'] = 'טופס הגשה נצפה.';
$string['eventsubmissiongraded'] = 'ניתן ציון להגשה.';
$string['eventsubmissionlocked'] = 'ההגשות ננעלו למשתמש.';
$string['eventsubmissionstatusupdated'] = 'המצב של ההגשה עודכן.';
$string['eventsubmissionstatusviewed'] = 'המצב של ההגשה נצפה.';
$string['eventsubmissionunlocked'] = 'ההגשה נפתחה מחדש למשתמש.';
$string['eventsubmissionupdated'] = 'ההגשה עודכנה.';
$string['eventsubmissionviewed'] = 'ההגשה נצפתה';
$string['eventworkflowstateupdated'] = 'מצב מנגנון הבדיקה המתקדם עודכן';
$string['expandreviewpanel'] = 'תצוגה מורחבת של חלון הסקירה';
$string['extensionduedate'] = 'הארכת מועד הגשה';
$string['extensionnotafterduedate'] = 'מועד הארכה חייב להיות לאחר מועד סיום הרגיל של המטלה.';
$string['extensionnotafterfromdate'] = 'מועד הארכה חייב להיות לאחר תחילת מועד ההגשה';
$string['feedback'] = 'משוב';
$string['feedbackavailableanonsmall'] = 'משוב חדש למטלה {$a->assignment}';
$string['feedbackavailablehtml'] = '{$a->username}  עדכן/נה משוב להגשה שלך במטלה \'<i>{$a->assignment}</i>\'<br /><br />

ניתן לראות את המשוב להגשה שלך בקישור:
 <a href="{$a->url}">צפייה במצב ההגשה שלי</a>';
$string['feedbackavailablesmall'] = 'המשתמש {$a->username}  הגיש משוב עבור המטלה {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username}  עדכן/נה משוב להגשה שלך במטלה \'{$a->assignment}\' .

ניתן לראות את המשוב להגשה שלך בקישור:
{$a->url}';
$string['feedbackplugin'] = 'תוסף משוב';
$string['feedbackpluginforgradebook'] = 'תוסף משוב אשר יוסיף הערות בגליון הציונים';
$string['feedbackpluginforgradebook_help'] = 'רק תוסף משוב מטלה אחד יוכל להוסיף את המשוב לגליון הציונים.';
$string['feedbackplugins'] = 'תוספי משוב';
$string['feedbacksettings'] = 'הגדרות משוב';
$string['feedbacktypes'] = 'סוגי משוב';
$string['filesubmissions'] = 'קבצי הגשות';
$string['filter'] = 'ברשימה יוצגו';
$string['filterdraft'] = 'טיוטה';
$string['filtergrantedextension'] = 'הארכה ניתנה';
$string['filternone'] = 'כל הסטודנטים';
$string['filternotsubmitted'] = 'סטודנטים שטרם הגישו';
$string['filterrequiregrading'] = 'סטודנטים להם נדרש מתן ציונים';
$string['filtersubmitted'] = 'סטודנטים שהגישו';
$string['fixrescalednullgradesdone'] = 'הציונים תוקנו.';
$string['gradeabovemaximum'] = 'על הציון להיות קטן או שווה ל- {$a}.';
$string['gradebelowzero'] = 'על הציון להיות גדול או שווה ל-0';
$string['gradecanbechanged'] = 'הציון ניתן לשינוי';
$string['gradechangessaveddetail'] = 'השינויים לציון והמשוב נשמרו';
$string['graded'] = 'נבדק';
$string['gradedby'] = 'נבדק על-ידי';
$string['gradedfollowupsubmit'] = 'ניתן ציון - התקבלה הגשה מעודכנת';
$string['gradedon'] = 'נבדק ב-';
$string['gradeitem:submissions'] = 'הגשות';
$string['gradelocked'] = 'הציון נעול או שעודכן בגליון הציונים';
$string['gradeoutof'] = 'ציון מתוך {$a}';
$string['gradeoutofhelp'] = 'ציון';
$string['gradeoutofhelp_help'] = 'הכנס ציון עבור הגשת הסטודנט כאן. ניתן לכלול מספר עשרוני.';
$string['gradersubmissionupdatedhtml'] = 'המשתמש {$a->username} עדכן את הגשת התרגיל עבור <i>\'{$a->assignment}\'</i><br /><br />
היא <a href="{$a->url}">זמינה באתר</a>.';
$string['gradersubmissionupdatedsmall'] = 'המשתמש {$a->username} עידכן את ההגשות שלו עבור המטלה
{$a->assignment}.';
$string['gradersubmissionupdatedtext'] = 'המשתמש {$a->username} עדכן את הגשת התרגיל
עבור \'{$a->assignment}\' ב: {$a->timeupdated}

קישור לצפייה בהגשה:
{$a->url}';
$string['gradestudent'] = 'ציון סטודנט:
(id={$a->id}, fullname={$a->fullname}).';
$string['gradeuser'] = 'ציון {$a}';
$string['grading'] = 'מתן ציון';
$string['gradingchangessaved'] = 'השינויים של הציון נשמרו';
$string['gradingduedate'] = 'תזכורת למתן הציון לפני התאריך הצפוי';
$string['gradingduedate_help'] = 'זכורת מתי יש לתת ציון לפי תאריך צפוי בו יסתיים מתן הציון. תאריך זה ישמש לתעדוף הודעות ב"דף העדכונים שלי" עבור המורים.';
$string['gradingmethodpreview'] = 'תנאים למתן ציון';
$string['gradingoptions'] = 'אפשרויות';
$string['gradingstatus'] = 'מצב מתן הציון';
$string['gradingstudent'] = 'מתן ציון לסטודנט';
$string['gradingsummary'] = 'סיכום בדיקת הציונים';
$string['grantextension'] = 'מתן הארכת זמן';
$string['grantextensionforusers'] = 'מתן הארכת זמן ל-{$a} סטודנטים';
$string['groupoverrides'] = 'התאמות מיוחדות לקבוצה';
$string['groupoverridesdeleted'] = 'התאמות מיוחדות לקבוצה נמחקו';
$string['groupsnone'] = 'אין קבוצות בקורס זה';
$string['groupsubmissionsettings'] = 'הגדרות הגשה בקבוצות';
$string['hiddenuser'] = 'משתתף:';
$string['hidegrader'] = 'הסתרת זהות הבודק/ת מהסטודנטים';
$string['hideshow'] = 'הסתרה/תצוגה';
$string['inactiveoverridehelp'] = '* הסטודנט לא שייך לקבוצה הנכונה או התפקיד הנכון בכדי להגיש את המטלה';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['instructionfiles'] = 'קבצי הוראה';
$string['introattachments'] = 'קבצים נוספים';
$string['introattachments_help'] = 'נעשה שימוש בקבצים מצורפים במסגרת פעילות המטלה, כדוגמת "תבניות תשובה" אותם יכול המרצה להוסיף. קישורים לקבצים המצורפים יופיעו תחת פסקת ההנחיה לסטודנטים של המטלה.';
$string['invalidfloatforgrade'] = 'העמוד המבוקש לא ניתן להבנה: {$a}';
$string['invalidgradeforscale'] = 'הניקוד שניתן לא תקף למדרגת-ההערכה שהוגדרה';
$string['lastmodifiedgrade'] = 'עדכון אחרון (ציון)';
$string['lastmodifiedsubmission'] = 'עדכון אחרון (הגשה)';
$string['latesubmissions'] = 'הגשות באיחור';
$string['latesubmissionsaccepted'] = 'סטודנטים שנתנה להם הרשאה להארכה יכולים עדיין להגיש עד {$a}';
$string['loading'] = 'טוען...';
$string['locksubmissionforstudent'] = 'מנע הגשות נוספות עבור סטודנט :(id={$a->id}, fullname={$a->fullname}) .';
$string['locksubmissions'] = 'נעילת הגשות';
$string['manageassignfeedbackplugins'] = 'ניהול תוספי משוב המטלה';
$string['manageassignsubmissionplugins'] = 'ניהול תוספי הגשת מטלה';
$string['marker'] = 'בודק';
$string['markerfilter'] = 'קיים בודק';
$string['markerfilternomarker'] = 'אין בודק';
$string['markingallocation'] = 'שימוש במנגנון הקצאת בדיקה';
$string['markingallocation_help'] = 'אם מאופשר יחד עם "שימוש במנגנון בדיקה מתקדם", הבודקים יכולים להיות מוקצים לסטודנטים מסויימים.';
$string['markingworkflow'] = 'שימוש במנגנון בדיקה מתקדם';
$string['markingworkflow_help'] = 'אם מאופשר, הניקוד יעבור סדרת שלבי בדיקות  לפני שהציון הסופי יהיה זמין לסטודנטים. הדבר מאפשר בקרת איכות לבדיקת ההגשות ושחרור הציונים באותו זמן נתון.';
$string['markingworkflowstate'] = 'מצב מנגנון בדיקה מתקדם';
$string['markingworkflowstate_help'] = 'היתרון בהגדרת מנגנון "תהליך בדיקה מתקדם" הוא בכך שהניקוד הסופי יהיה מוסתר מהסטודנט כל עוד הבודקים מסיימים את הבדיקה ועוברים לשלבי שחרור הציון הסופי.

טרם נבדק - (הבודק עדיין לא החל בבדיקה)
בתהליך בדיקה - בתהליך בדיקה (הבודק החלק לבדוק אך לא סיים)
בדיקה ראשונית הסתיימה - בדיקה ראשונית הסתיימה (הבודק סיים לבדוק אך ייתכן כי זקוק לערוך שינויים או תיקונים)
בבדיקת המרצה - בבדיקת המורה או הבודק הראשי (הבדיקה עברה למורה או הבודק הראשי ובתהליך של בדיקת איכות )
הניקוד ממתין להפצה - הניקוד ממתין להפצה לסטודנטים ( המורה או הבודק הראשי סיים לבדוק ומאשר כי ההפצה אפשרית לזמינות הסטודנטים)
הניקוד זמין לסטודנט - הניקוד זמין לסטודנטים (הסטודנט כעת יכול לגשת ולצפות בציון/משוב)';
$string['markingworkflowstateinmarking'] = 'בתהליך בדיקה';
$string['markingworkflowstateinreview'] = 'בבדיקת המרצה';
$string['markingworkflowstatenotmarked'] = 'טרם נבדק';
$string['markingworkflowstatereadyforrelease'] = 'הניקוד ממתין להפצה';
$string['markingworkflowstatereadyforreview'] = 'בדיקה ראשונית הסתיימה';
$string['markingworkflowstatereleased'] = 'הניקוד זמין לסטודנט';
$string['maxattempts'] = 'מספר נסיונות מירבי';
$string['maxattempts_help'] = 'המספר המירבי לנסיונות הגשה שסטודנט אחד יכול לבצע. לאחר מספר זה של נסיונות שנעשו, לא יהיה ניתן לפתוח מחדש את הגשת הסטודנט.';
$string['maxgrade'] = 'ציון מירבי';
$string['maxperpage'] = 'מספר מירבי של מטלות לעמוד';
$string['maxperpage_help'] = 'המספר המירבי של מטלות אותן הבודק יכול לצפות בעמוד מתן ציוני מטלות. הדבר מועיל למנוע איטיות בקורסים עמוסים עם מס רב של מששתתפים.';
$string['messageprovider:assign_notification'] = 'הודעות מפעילות מטלה';
$string['modulename'] = 'מטלה';
$string['modulename_help'] = 'פעילות "מטלה" (Assignment) מאפשרת למורה להציג משימות, לאסוף עבודות ולהעריך את עבודות הסטודנטים. כמו כן לתת ציון ומשובים בגליון הציונים.

הסטודנטים יכולים להגיש כל תוכן דיגיטלי (קבצים) כמו קבצי עיבוד תמלילים, גליונות אלקטרוניים, תמונות, קבצי שמע או וידאו. בנוסף הם יכולים להזין תוכן מעוצב ועשיר ישירות בעורך המובנה במערכת. מטלה יכולה להיות "ללא הגשה" לצורך תזכורת הגשה למשימה מציאותית (שאינה מקוונת) אשר ניתנה בכיתה, למשל עבודת אמנות שלא מצריכה הגשת קובץ דיגיטלי.

כאשר צופים בהגשות הסטודנטים, המורים יכולים להזין משובים, הערות או קבצים מסוגים שונים כמשוב. ניתן להעריך מטלות על-ידי מדרגת־הערכה מספרית, מילולית (מותאם מראש) או בשיטה מתקדמת של משובים כגון מחוונים (rubrics). הציון סופי נשמר בגליון הציונים של הקורס.';
$string['modulename_link'] = 'mod/assignment/view';
$string['modulenameplural'] = 'מטלות';
$string['moreusers'] = 'עוד {$a} ...';
$string['multipleteams'] = 'חבר ביותר מקבוצה אחת';
$string['multipleteams_desc'] = 'המטלה מחייבת הגשה בקבוצות. את/ה חבר/ה ביותר מקבוצה אחת. כדי להגיש
דרוש להיות חבר בקבוצה אחת בלבד. אנא פנה/י למרצה לשינוי חברותך בקבוצות.';
$string['multipleteamsgrader'] = 'חבר ביותר מקבוצה אחת , כך שלא ניתן להגיש.';
$string['newsubmissions'] = 'המטלות שהוגשו';
$string['noattempt'] = 'אין נסיונות';
$string['noclose'] = 'אין מועד סיום';
$string['nofiles'] = 'אין קבצים.';
$string['nofilters'] = 'ללא סינון';
$string['nograde'] = 'אין ציון';
$string['nogroupoverrides'] = 'לא קיימות התאמות להרשאות של קבוצות.';
$string['nomoresubmissionsaccepted'] = 'מורשה רק למשתתפים שניתנה להם האפשרות להגשה מאוחרת';
$string['none'] = 'ללא';
$string['noonlinesubmissions'] = 'מטלה זו לא דורשת ממך להגיש דבר באופן מקוון';
$string['noopen'] = 'אין מועד פתיחה';
$string['nooverridedata'] = 'יש צורך לעקוף לפחות אחד מהגדרות המטלה.';
$string['nosavebutnext'] = 'הבא';
$string['nosubmission'] = 'לא הוגש שום דבר עבור מטלה זו.';
$string['nosubmissionyet'] = 'אין עדיין הגשות לבדיקה';
$string['noteam'] = 'אינך חבר באף קבוצה, אנא פנה למורה.';
$string['noteam_desc'] = 'המטלה מחייבת הגשה בקבוצות. אינך חבר באף קבוצה, כך שלא ניתן להגיש במצב כזה. יש ליצור קשר עם המורה כדי להוסיפך לקבוצה.';
$string['noteamgrader'] = 'אינך חבר(ה) באף קבוצה , כך שלא ניתן להגיש';
$string['notgraded'] = 'לא ניתן ציון';
$string['notgradedyet'] = 'עדיין לא הוערך';
$string['notifications'] = 'הודעות';
$string['nouseroverrides'] = 'לא קיימות התאמות.';
$string['nousers'] = 'ללא משתמשיםי';
$string['nousersselected'] = 'לא נבחרו משתמשים';
$string['numberofdraftsubmissions'] = 'טיוטות';
$string['numberofparticipants'] = 'משתתפים';
$string['numberofsubmissionsneedgrading'] = 'דורש מתן ציון';
$string['numberofsubmittedassignments'] = 'הוגש';
$string['numberofteams'] = 'קבוצות';
$string['offline'] = 'לא נדרשות הגשות מקוונות';
$string['open'] = 'פתוח';
$string['outlinegrade'] = 'ציון: {$a}';
$string['outof'] = '{$a->current} מתוך ס"ה {$a->total}';
$string['overdue'] = '<font color="red">
המטלה באיחור של:
{$a}</font>';
$string['override'] = 'התאמה מיוחדת';
$string['overridegroup'] = 'התאמות מיוחדות לקבוצה';
$string['overrides'] = 'התאמות מיוחדות';
$string['overrideuser'] = 'התאמות מיוחדות למשתמש';
$string['page-mod-assign-view'] = 'עמוד ההגשה הראשי ורכיב המטלה';
$string['page-mod-assign-x'] = 'עמוד רכיב מטלה כלשהו';
$string['paramtimeremaining'] = 'נותר {$a}';
$string['participant'] = 'משתתף';
$string['pluginadministration'] = 'ניהול מטלה';
$string['pluginname'] = 'מטלה';
$string['preventsubmissionnotingroup'] = 'יש להיות חבר בקבוצה בכדי להגיש';
$string['preventsubmissionnotingroup_help'] = 'אם מאופשר, משתמשים שאינם חברים בקבוצה לא יוכלו להגיש.';
$string['preventsubmissions'] = 'מניעת האפשרות של המשתמש לבצע הגשות נוספות או לערוך שינויים בהגשה של מטלה זו.';
$string['preventsubmissionsshort'] = 'מניעת שינויים בהגשה';
$string['previous'] = 'קודם';
$string['privacy:gradepath'] = 'ציון';
$string['privacy:metadata:timestarted'] = 'מועד ההתחלה';
$string['privacy:studentpath'] = 'הגשות הסטודנט';
$string['privacy:submissionpath'] = 'הגשה';
$string['quickgrading'] = 'מתן ציון מהיר';
$string['quickgrading_help'] = 'מתן ציון מהיר מאפשר להגיש ציונים והערות ישירות בטבלת ההגשות באותו עמוד. מתן ציון מהיר לא תואם עם הגדרות מתקדמות של ציונים ואינו מומלץ כאשר ישנם מספר של בודקים.';
$string['quickgradingchangessaved'] = 'שינויי הציון נשמרו';
$string['quickgradingresult'] = 'מתן ציון מהיר';
$string['recordid'] = 'מזהה';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} לאחר תחילת הקורס';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} לפני תחילת הקורס';
$string['relativedatessubmissiontimeleft'] = 'מחושב לכל סטודנט';
$string['removeallgroupoverrides'] = 'מחיקת כל ההתאמות המיוחדות לקבוצה';
$string['removealluseroverrides'] = 'מחיקת כל ההתאמות המיוחדות למשתמש';
$string['removesubmission'] = 'מחיקת הגשה';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'נפתח מחדש עד אשר אפשרות ה"עובר" לא תואמת ל "שמות נבחנים מוסתרים", מפני שהציונים עדין לא שוחררו לגליון הציונים עד שזהות הסטודנט תחשף.';
$string['requireallteammemberssubmit'] = 'כל חברי הקבוצה נדרשים להגיש';
$string['requireallteammemberssubmit_help'] = 'כאשר מוגדרת הגשה־בקבוצות, כל חברי הקבוצה נדרשים להקליק על כפתור שליחה המשימה כדי שמטלה זו תיחשב שהוגשה.

כאשר הגשה־בקבוצות לא מוגדרת, מספיק אחד מחברי הקבוצה להקליק על כפתור שליחה המשימה כדי שמטלה זו תיחשב שהוגשה. (עבור שאר חברי הקבוצה)';
$string['requiresubmissionstatement'] = 'נדרשת הסכמה מצד הסטודנטים להצהרת ההגשה';
$string['requiresubmissionstatement_help'] = 'נדרשת הסכמה מצד הסטודנטים להצהרת ההגשה עבור כל ההגשות המטלה להתקנת האתר כולו. אם הגדרה זו לא פעילה, הצהרות ההגשות יכולות להיות פעילות או כבויות בהגדרות עבור כל מטלה.';
$string['revealidentities'] = 'גלה זהויות סטודנטים';
$string['revealidentitiesconfirm'] = 'האם הינך בטוח כי ברצונך לחשוף את זהות הסטודנטים עבור מטלה זו. לא ניתן לחזור בך לאחר אישור בפועלה זו. כאשר הסטודנט נחשף, הציונים יוצגו בגיליון הציונים.';
$string['reverttodefaults'] = 'חזרה לברירות המחדל של המטלה';
$string['reverttodraft'] = 'החזרת ההגשות למצב טיוטה';
$string['reverttodraftforstudent'] = 'החזר את ההגשה למצב טיוטה עבור הסטודנט :
(id={$a->id}, fullname={$a->fullname}).';
$string['reverttodraftshort'] = 'החזרת ההגשה למצב טיוטה';
$string['reviewed'] = 'נבדק';
$string['save'] = 'שמירה';
$string['saveallquickgradingchanges'] = 'שמירת כל השינויים של מתן ציון מהיר';
$string['saveandcontinue'] = 'שמירה והמשך';
$string['savechanges'] = 'שמירת שינויים';
$string['savegradingresult'] = 'ציון';
$string['savenext'] = 'שמירה והצגת הבא';
$string['saveoverrideandstay'] = 'שמירה והזנה של הגדרה-מותאמת חדשה';
$string['savingchanges'] = 'שמירת שינויים...';
$string['scale'] = 'קנה מידה';
$string['search:activity'] = 'מטלה - מידע הפעילות';
$string['selectedusers'] = 'משתמשים שנבחרו';
$string['selectlink'] = 'יש לבחור...';
$string['selectuser'] = 'יש לבחור {$a}';
$string['sendlatenotifications'] = 'שליחת הודעה כאשר ישנן הגשות באיחור';
$string['sendlatenotifications_help'] = 'אם מאופשר, נותני הציונים (בדרך-כלל מורים) יקבלו הודעה כאשר הסטודנט מגיש את המטלה באיחור. ניתן להגדיר את שיטת שליחת ההודעה.';
$string['sendnotifications'] = 'שליחת הודעה לבודקי המטלה/נותני הציונים בנוגע להגשות';
$string['sendnotifications_help'] = 'אם מאופשר, נותני הציונים (בדרך-כלל מורים) יקבלו הודעה כאשר סטודנט יגיש את המטלה מוקדם, בזמן או באיחור. ניתן להגדיר את שיטת שליחת ההודעה';
$string['sendstudentnotifications'] = 'הודעה לסטודנטים';
$string['sendstudentnotifications_help'] = 'אם מאופשר, הסטודנטים קבלו הודעה על עדכון הציון או המשוב.';
$string['sendstudentnotificationsdefault'] = 'הגדרות בררת מחדל של "עדכון סטודנטים על קבלת ציון"';
$string['sendstudentnotificationsdefault_help'] = 'הגדרת ערך בררת־המחדל עבור סימון הודעות לסטודנטים בטופס מתן ציונים.';
$string['sendsubmissionreceipts'] = 'שליחת אישור הגשה לסטודנטים';
$string['sendsubmissionreceipts_help'] = 'מתג זה יאפשר שליחת חיווי קבלת מטלה לסטודנטים. הסטודנטים יקבלו הודעה בכל פעם שהם יגישו את המטלה בהצלחה.';
$string['setmarkerallocationforlog'] = 'הגדרת קצאת בודקים:
 (id={$a->id}, fullname={$a->fullname}, marker={$a->marker}).';
$string['setmarkingallocation'] = 'הגדרת בודק מוקצה';
$string['setmarkingworkflowstate'] = 'הגדרת מצב מנגנון בדיקה מתקדם';
$string['setmarkingworkflowstateforlog'] = 'הגדרת מצב מנגנון בדיקה מתקדם: (id={$a->id}, fullname={$a->fullname}, state={$a->state}).';
$string['settings'] = 'הגדרות המטלה';
$string['showrecentsubmissions'] = 'הצגת הגשות אחרונות';
$string['status'] = 'מצב';
$string['studentnotificationworkflowstateerror'] = 'מצב מנגנון בדיקה מתקדם חייב להיות';
$string['submission'] = 'הגשה';
$string['submissionattachments'] = 'הצגת קבצים מצורפים במהלך ביצוע הגשה בלבד';
$string['submissioncopiedhtml'] = 'יצרת העתק של הגשת המטלה האחרונה שלך  \'<i>{$a->assignment}</i>\'<br /><br />.
ניתן לראות את המצב ההגשה שלך  <a href="{$a->url}">צפייה במצב ההגשה</a>.';
$string['submissioncopiedsmall'] = 'העתקת את הגשת המטלה האחרונה שלך עבור המטלה  {$a->assignment}';
$string['submissioncopiedtext'] = 'יצרת העתק של הגשת המטלה האחרונה שלך \'{$a->assignment}\' .
תוכל לראות את המצב של ההגשה שלך
    {$a->url}';
$string['submissiondrafts'] = 'מחייב את הסטודנטים להקליק על כפתור "שליחת הגשה למתן ציון"';
$string['submissiondrafts_help'] = 'אם מאופשר, הסטודנטים חייבים ללחוץ על הכפתור בכדי לשלוח את ההגשה סופית לבדיקה. הדבר מאפשר לסטודנטים לשמור עדיין את טיוטת ההגשה של המטלה במערכת. אם הגדרה זו משתנה מ"לא" ל"כן" לאחר שהסטודנטים כבר הגישו את ההגשות שלהם ניתן יהיה לתת להם ציון סופי.';
$string['submissioneditable'] = 'סטודנטים יכולים לערוך הגשה זו';
$string['submissionempty'] = 'לא הוגש דבר';
$string['submissionlog'] = 'סטודנט: {$a->fullname}, מצב: {$a->status}';
$string['submissionmodifiedgroup'] = 'ההגשה עודכנה על-ידי מישהו אחר. יש לצאת מעמוד זה ולנסות שוב.';
$string['submissionnotcopiedinvalidstatus'] = 'ההגשה לא הועתקה מפני שהיא עודכנה מאז שהיא נפתחה מחדש.';
$string['submissionnoteditable'] = 'סטודנטים אינם יכולים לערוך הגשה זו';
$string['submissionnotready'] = 'מטלה זו עדיין אינה מוכנה להגשה:';
$string['submissionplugins'] = 'תוספי הגשה';
$string['submissionreceipthtml'] = 'אישור הגשת המטלה: \'<i>{$a->assignment}</i>\' <br>
ניתן לצפות במצב ההגשה של המטלה בקישור :
<a href="{$a->url}">מצב ההגשה שלי</a>';
$string['submissionreceiptotherhtml'] = 'הגשת המטלה שלך עבור
<i>{$a->assignment}</i>\' הוגש בהצלחה.<br /><br />
תוכל לצפות במצב ההגשה שלך
<a href="{$a->url}">הגשת המטלה</a>.';
$string['submissionreceiptothersmall'] = 'הגשת המטלה שלך עבור {$a->assignment}  עברה בהצלחה';
$string['submissionreceiptothertext'] = 'הגשת המטלה שלך עבור
\'{$a->assignment}\'
עברה בהצלחה.
תוכל לצפות במצב ההגשה שלך
    {$a->url}';
$string['submissionreceipts'] = 'שליחה למקבלי ההגשה';
$string['submissionreceiptsmall'] = 'אישור הגשת המטלה \'{$a->assignment}\'';
$string['submissionreceipttext'] = 'אישור הגשת המטלה \'{$a->assignment}\'
ניתן להתעדכן במצב תהליך בדיקת המטלה שהוגשה:
{$a->url}';
$string['submissionsclosed'] = 'הגשות נסגרו';
$string['submissionsettings'] = 'הגדרות הגשה';
$string['submissionslocked'] = 'מטלה זו אינה מאפשרת הגשות';
$string['submissionslockedshort'] = 'לא ניתן לערוך שינויים בהגשות';
$string['submissionstatement'] = 'הצהרת ההגשה';
$string['submissionstatement_help'] = 'הצהרת אישור הגשת המטלה';
$string['submissionstatementacceptedlog'] = 'הצהרת ההגשה התקבלה על ידי המשתמש {$a}';
$string['submissionstatementdefault'] = 'את המטלה הזו אני כתבתי, חוץ ממקרים בהם ציינתי שהשתמשתי בתוכן מגורמים נוספים';
$string['submissionstatus'] = 'מצב ההגשה';
$string['submissionstatus_'] = 'טרם הוגש';
$string['submissionstatus_draft'] = 'מצב טיוטה ( לא הוגש)';
$string['submissionstatus_marked'] = 'נבדק';
$string['submissionstatus_new'] = 'טרם הוגש';
$string['submissionstatus_reopened'] = 'נפתח מחדש';
$string['submissionstatus_submitted'] = 'הוגש למתן ציון';
$string['submissionstatusheading'] = 'מצב ההגשה';
$string['submissionsummary'] = '{$a->status}. השתנה לאחרונה: {$a->timemodified}';
$string['submissionteam'] = 'קבוצה';
$string['submissiontypes'] = 'סוגי מענה (הגשות)';
$string['submitaction'] = 'הגש';
$string['submitassignment'] = 'הגשת מטלה';
$string['submitassignment_help'] = 'ברגע שהמטלה תוגש, לא ניתן יהיה לערוך שינויים נוספים';
$string['submitforgrading'] = 'הגשה למתן ציון';
$string['submitted'] = 'הוגש';
$string['submittedearly'] = 'המטלה הוגשה {$a} לפני תאריך ההגשה הסופי.';
$string['submittedlate'] = 'המטלה הוגשה באחור של {$a}';
$string['submittedlateshort'] = '{$a} מאוחר';
$string['subplugintype_assignfeedback'] = 'תוסף משוב';
$string['subplugintype_assignfeedback_plural'] = 'תוספי משוב';
$string['subplugintype_assignsubmission'] = 'תוסף הגשה';
$string['subplugintype_assignsubmission_plural'] = 'תוספי הגשה';
$string['teamname'] = 'מונח: {$a}';
$string['teamsubmission'] = 'סטודנטים יכולים להגיש בקבוצות';
$string['teamsubmission_help'] = 'כאשר מוגדרת "הגשה־בקבוצות", הסטודנטים יחולקו לקבוצות על בסיס הקבוצות המוגדרות בקורס. (או לקבוצה(ות) על בסיס אוסף־הקבוצות, אם הוגדר). הגשת המטלה תהיה זמינה באופן משותף בין הסטודנטים בקבוצה. כל חבר בקבוצה יוכל לראות את השינוים וההגשות של כל חבר אחר בקבוצה.';
$string['teamsubmissiongroupingid'] = 'זמין עבור קבוצות באוסף־קבוצות מסויים';
$string['teamsubmissiongroupingid_help'] = 'כאשר "אוסף־קבוצות" פעיל, רק הקבוצות באוסף־הקבוצות אשר נבחר יהיו זמינות עבור פעילות הקבוצות במטלה זו.

אם לא, יעשה שימוש בכל הקבוצות המוגדרות בקורס.';
$string['textinstructions'] = 'הוראות המטלה';
$string['timelimit'] = 'הגבלת זמן';
$string['timelimit_help'] = 'אם מופעל, הגבלת הזמן מוצגת בדף המטלה ושעון ספירה לאחור מוצג במהלך ביצוע המטלה.';
$string['timemodified'] = 'עדכון אחרון';
$string['timeremaining'] = 'הזמן שנותר';
$string['timeremainingcolon'] = 'הזמן שנותר: {$a}';
$string['togglezoom'] = 'להגדיל/להקטין אזור';
$string['ungroupedusers'] = 'ההגדרה "יש להיות חבר בקבוצה בכדי להגיש" פעילה אך כמה משתמשים לא מוקצים לקבוצות, הדבר ימנע מהם מלהגיש את המטלות.';
$string['unlimitedattempts'] = 'לא מוגבל';
$string['unlimitedattemptsallowed'] = 'מותרים ניסיונות לא מוגבלים.';
$string['unlimitedpages'] = 'ללא הגבלה';
$string['unlocksubmissionforstudent'] = 'מאפשר הגשות עבור סטודנט: (id={$a->id}, fullname={$a->fullname}).';
$string['unlocksubmissions'] = 'פתיחת ההגשות';
$string['unsavedchanges'] = 'שינויים שלא נשמרו';
$string['unsavedchangesquestion'] = 'ישנם שינויים שלא נשמרו עבור מתן הציון או המשוב. האם תרצו לשמור את השינויים ולהמשיך?';
$string['updategrade'] = 'עדכן את הציון';
$string['updatetable'] = 'שמירה ועדכון הטבלה';
$string['upgradenotimplemented'] = 'השדרוג לא הושם בתוסף ({$a->type} {$a->subtype})';
$string['userextensiondate'] = 'ניתנה הארכת זמן עד: {$a}';
$string['usergrade'] = 'ציון המשתמש';
$string['useridlistnotcached'] = 'ביטול השמירה. Moodle לא יכול לקבוע לאיזה משתמש לשמור את הציון.';
$string['useroverrides'] = 'התאמות מיוחדות למשתמש';
$string['useroverridesdeleted'] = 'התאמות מיוחדות למשתמש נמחקו';
$string['usersnone'] = 'לאף סטודנט אין גישה למטלה זו';
$string['userswhoneedtosubmit'] = 'משתמשים שצריכים להגיש: {$a}';
$string['validmarkingworkflowstates'] = 'מצבי מנגנון בדיקה מתקדם תקינים';
$string['viewadifferentattempt'] = 'צפיה בנסיון מענה אחר';
$string['viewbatchmarkingallocation'] = 'צפיה בעמוד מערך הגדרות הקצאת בודקים';
$string['viewbatchsetmarkingworkflowstate'] = 'עמוד צפיה במערך הגדרות של מנגנון בדיקה מתקדם';
$string['viewfeedback'] = 'צפיה במשוב';
$string['viewfeedbackforuser'] = 'צפיה במשוב עבור משתמש: {$a}';
$string['viewfull'] = 'צפיה בתצוגה מלאה';
$string['viewfullgradingpage'] = 'פתיחת מנגנון "מתן הציון ומשוב" בעמוד מלא';
$string['viewgradebook'] = 'הצגת גליון הציונים';
$string['viewgrading'] = 'הצגת / מתן ציונים להגשות';
$string['viewgradingformforstudent'] = 'הצגת עמוד מתן הציונים עבור סטודנט: (id={$a->id}, fullname={$a->fullname})';
$string['viewownsubmissionform'] = 'צפיה בעמוד מטלת ההגשה האישית.';
$string['viewownsubmissionstatus'] = 'צפיה בעמוד מצב ההגשה האישי.';
$string['viewrevealidentitiesconfirm'] = 'הצגת חשיפת דף אישור זהות הסטודנטים.';
$string['viewsubmission'] = 'צפיה בהגשה';
$string['viewsubmissionforuser'] = 'צפיה בהגשה עבור סטודנט: {$a}';
$string['viewsubmissiongradingtable'] = 'צפיה בטבלת מתן הציונים של ההגשות.';
$string['viewsummary'] = 'צפיה בתקציר';
$string['workflowfilter'] = 'מסנן מנגנון בדיקה מתקדם';
$string['xofy'] = '{$a->x} מתוך {$a->y}';
