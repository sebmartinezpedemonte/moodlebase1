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
 * Strings for component 'attendance', language 'he', version '4.1'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'ח';
$string['Afull'] = 'חסר';
$string['Eacronym'] = 'מ';
$string['Efull'] = 'מאושר';
$string['Lacronym'] = 'א';
$string['Lfull'] = 'איחור';
$string['Pacronym'] = 'נ';
$string['Pfull'] = 'נוכח';
$string['absenteereport'] = 'דוח חיסורים';
$string['acronym'] = 'קיצור';
$string['add'] = 'הוספה';
$string['addedrecip'] = 'נוסף נמען חדש אחד';
$string['addedrecips'] = 'נוספו {$a} נמענים חדשים';
$string['addmultiplesessions'] = 'הוספת מפגשים חוזרים';
$string['addsession'] = 'הוספת מפגש';
$string['adduser'] = 'הוספת משתמש';
$string['addwarning'] = 'הוספת אזהרה';
$string['all'] = 'כל המפגשים';
$string['allcourses'] = 'כל מרחבי־הלימוד';
$string['allpast'] = 'מפגשים שהסתיימו';
$string['allsessions'] = 'כל המפגשים';
$string['allsessionstotals'] = 'סך הכל עבור המפגשים שנבחרו';
$string['attendance:addinstance'] = 'הוספת פעילות "נוכחות" חדשה';
$string['attendance:canbelisted'] = 'יופיע ברשימת התלמידים';
$string['attendance:changeattendances'] = 'שינוי מצב נוכחות';
$string['attendance:changepreferences'] = 'שינוי הגדרות';
$string['attendance:export'] = 'יצוא דוחות';
$string['attendance:manageattendances'] = 'ניהול נוכחות';
$string['attendance:managetemporaryusers'] = 'ניהול משתמשים זמניים';
$string['attendance:takeattendances'] = 'בדיקת נוכחות';
$string['attendance:view'] = 'צפיה בנוכחות';
$string['attendance:viewreports'] = 'צפיה בדוחות נוכחות';
$string['attendance:viewsummaryreports'] = 'הצגת דוחות מסכמים של הקורס';
$string['attendance_already_submitted'] = 'נוכחותך כבר נרשמה';
$string['attendance_no_status'] = 'לא נמצא מצב נוכחות מתאים - יתכן שאחרת מידי ברישום הנוכחות';
$string['attendancedata'] = 'Attendance data';
$string['attendancefile'] = 'קובץ נוכחות (בפורמט CSV)';
$string['attendancefile_help'] = 'ניתן להעלות קובץ CSV בלבד, שהשורה הראשונה שלו מכילה את השדות שמגדירים את המשתמש והזמן שהו הנוכחות נרשמה. למשל (דוא"ל, זמן סריקה) או (משתמש, זמן)';
$string['attendancegrade'] = 'ציון נוכחות';
$string['attendancenotset'] = 'יש לקבוע מצב נוכחות';
$string['attendancenotstarted'] = 'רכיב מעקב נוכחות עדיין לא הופעל בקורס זה';
$string['attendancepercent'] = 'אחוז נוכחות';
$string['attendancereport'] = 'דוח נוכחות';
$string['attendanceslogged'] = 'מעקב נוכחות';
$string['attendancestaken'] = 'נוכחות שנרשמה';
$string['attendancesuccess'] = 'מעקב נוכחות נרשם בהצלחה';
$string['attendanceupdated'] = 'מעקב נוכחות עודכן בהצלחה';
$string['attrecords'] = 'רשומות משתתפים';
$string['autoassignstatus'] = 'רישום עצמי אוטומטי למצב הנוכחות הגבוה ביותר';
$string['autoassignstatus_help'] = 'אפשרות זו קובעת את מצב הנוכחות הגבוה ביותר עבור כל סטודנט שנרשם באופן עצמאי, ולא מציעה לו לבחור את מצב הנוכחות המתאים לו. <br>אפשרות זו תמיד מופעלת כאשר מפעילים קוד QR מתחלף';
$string['automark'] = 'מילוי אוטומטי';
$string['automark_help'] = 'מאפשר למלא נתונים חסרים ברשימת הנוכחות באופן אוטומטי עם סיום המפגש.
<ul>
<li><strong>לכולם</strong>: נוכחות הסטודנטים תרשם לפי המועד הראשון בו נכנסו לאתר הקורס בזמן המפגש. מי שלא יכנס עד תום המפגש ירשם במצב שנבחר כ"ברירת מחדל להיעדרות"</li>
<li><strong>עבור חסרים</strong>: כל הסטודנטים שלא נרשמה עבורם נוכחות עד תום המפגש ירשמו באופן אוטומטי במצב שסומן כ"ברירת מחדל להיעדרות" ברשימת מצבי הנוכחות.</li>
<li><strong>בעת השלמת פעילות</strong>: מצב הנוכחות יעודכן בהתאם להשלמת הפעלות שתבחר (יפתח תפריט נוסף לבחירת הפעילות להשלמה).</li>
</ul>
<br>בכל האפשרויות, עדכון הרישום האוטומטי מתבצע מספר דקות לאחר סיום המפגש, ולא בזמן אמת.
<br>ניתן להפעיל במקביל אפשרות לרישום עצמי של הסטודנטים. במקרה כזה היכן שקיים רישום העצמי הוא יעקוף את הרישום האוטומטי.';
$string['automarkall'] = 'לכולם';
$string['automarkclose'] = 'עבור חסרים';
$string['automarktask'] = 'בדיקת מפגשים שדורשים רישום אוטומטי';
$string['automarkuseempty'] = 'טיפול ברישום אוטומטי של מצב נוכחות';
$string['automarkuseempty_desc'] = '';
$string['autorecorded'] = 'נרשם אוטומטית ע"י המערכת';
$string['averageattendance'] = 'ממוצע נוכחות';
$string['averageattendancegraded'] = 'ממוצע נוכחות';
$string['backtoparticipants'] = 'חזרה לרשימת המשתתפים';
$string['below'] = 'נמוך מ % {$a}';
$string['calclose'] = 'סגור';
$string['calendarevent'] = 'יצירת אירוע ביומן הקורס עבור מפגש זה';
$string['calendarevent_help'] = 'אם יופעל, יווצר אירוע ביומן הקורס עבור המפגש הזה.
אם כבוי, כל אירוע קיים ביומן עבור מפגש זה ימחק.';
$string['caleventcreated'] = 'אירוע ביומן עבור המפגש נוצר בהצלחה';
$string['caleventdeleted'] = 'האירוע ביומן עבור המפגש נמחק בהצלחה';
$string['calmonths'] = 'ינואר,פברואר,מרץ,אפריל,מאי,יוני,יולי,אוגוסט,ספטמבר,אוקטובר,נובמבר,דצמבר';
$string['calshow'] = 'בחירת תאריך';
$string['calweekdays'] = 'Su,Mo,Tu,We,Th,Fr,Sa';
$string['cannottakeforgroup'] = 'לא ניתן לבדוק נוכחות עבור הקבוצה "{$a}"';
$string['cantaddstatus'] = 'חובה לקבוע קיצור ותיאור כדי להוסיף מצב נוכחות חדש';
$string['changeattendance'] = 'Change attendance';
$string['changeduration'] = 'עדכון משך המפגש';
$string['changesession'] = 'שינוי מפגש';
$string['checkweekdays'] = 'בחירת ימי השבוע שחלים בטווח התאריכים שנבחר למפגש';
$string['closed'] = 'לא ניתן להרשם עצמאית למפגש זה';
$string['column'] = 'עמודה';
$string['columnmap'] = 'מיפוי עמודות';
$string['columnmap_help'] = 'יש לבחור לכל אחד מהשדות המוצגים את העמודה המתאימה בקובץ ה-CSV';
$string['columns'] = 'עמודות';
$string['commonsession'] = 'כל הסטודנטים';
$string['commonsessions'] = 'כל הסטודנטים';
$string['confirm'] = 'אישור';
$string['confirmcolumnmappings'] = 'אשר מיפוי עמודות';
$string['confirmdeletehiddensessions'] = 'האם את/ה בטוח/ה שברצונך למחוק  {$a->count} מפגשים שנקבעו לפני תאריך תחילת הקורס ({$a->date})?';
$string['confirmdeleteuser'] = 'האם את/ה בטוח/ה שברצונך למחוק את המשתמש \'{$a->fullname}\' ({$a->email})?
<br/>כל רישומי הנוכחות שלו/ה ימחקו לצמיתות.';
$string['copyfrom'] = 'העתקת נתוני נוכחות מ...';
$string['countofselected'] = 'מספר הנבחרים';
$string['course'] = 'קורס';
$string['coursemessage'] = 'ניהול משתמשי הקורס';
$string['courseshortname'] = 'שם מקוצר לקורס';
$string['coursesummary'] = 'דוח מסכם לקורס';
$string['createmultiplesessions'] = 'יצירת מספר מפגשים';
$string['createmultiplesessions_help'] = 'אפשרת זו יוצרת מספר מפגשים בבת אחת בתדירות ידועה מראש. המפגשים מתחילים בתאריך של המפגש הראשון (שהוגדר לעיל) וממשיכים עם אותן ההגדרות על לתאריך שמצוין ב"חזרה עד".
<ul>
<li><strong>חזרה בימים</strong>: בחר את ימות השבוע שבהם המפגש מתקיים (לדוג\' ראשון ורביעי).</li>
<li><strong>חזרה בכל</strong>: מאפשר לקבוע מה תדירות מפגשים, אחת לשבוע או יותר. למשל, אם המפגש מתקיים אחת לשבועיים יש לבחור 2.</li>
<li><strong>חזרה עד</strong>: מציין את יום האחרון שבו יתקיים מפגש (היום האחרון בו תרשם נוכחות).</li>
</ul>';
$string['createonesession'] = 'יצירת מפגש בודד במרחב הלימוד';
$string['csvdelimiter'] = 'מפריד שדות';
$string['currentlyselectedusers'] = 'משתמשים שנבחרו';
$string['date'] = 'תאריך';
$string['days'] = 'ימים';
$string['defaultdisplaymode'] = 'מצב תצוגה (בררת מחדל)';
$string['defaults'] = 'בררת מחדל';
$string['defaultsessionsettings'] = 'ברירת המחדל של המפגש';
$string['defaultsessionsettings_help'] = 'הגדרות אלו קובעות את ברירת המחדל עבור כל המפגשים החדשים';
$string['defaultsettings'] = 'ברירת המחדל למפגש';
$string['defaultsettings_help'] = 'הגדרות אלו קובעות את ברירת המחדל עבור כל המשתתפים החדשים';
$string['defaultstatus'] = 'אוסף מצבי נוכחות ברירת המחדל';
$string['defaultsubnet'] = 'ברירת המחדל לכתובת רשת';
$string['defaultsubnet_help'] = 'ניתן להגביל את רישום הנוכחות לכתובות רשת מסוימות בלבד. יש להכניס את הכתובות מופרדות בפסיקים. ניתן להשתמש בכתובות IP מלאות או חלקיות. שדה זה יגדיר מהי ברירת המחדל לכתובות הרשת בעת יצירת פעילות חדשה.';
$string['defaultview'] = 'תצועת ברירת המחדל בכניסה';
$string['defaultview_desc'] = 'זו ברירת המחדל המוצגת למורים בכניסה ראשונה';
$string['delete'] = 'מחיקה';
$string['deletecheckfull'] = 'האם את/ה בטוח/ה שברצונך למחוק לחלוטין את ה{$a}, כולל כל המידע האישי של המשתמשים?';
$string['deletedgroup'] = 'הקבוצה שמפגש זה שייך אליה נמחקה';
$string['deletehiddensessions'] = 'מחיקת מפגשים מוסתרים';
$string['deletelogs'] = 'מחיקת רישומיי נוכחות';
$string['deleteselected'] = 'מחיקת הנבחרים';
$string['deletesession'] = 'מחיקת מפגש';
$string['deletesessions'] = 'מחיקת כל המפגשים';
$string['deleteuser'] = 'מחיקת משתמש';
$string['deletingsession'] = 'מחיקת מפגש מהקורס';
$string['deletingstatus'] = 'מצב המחיקה עבור הקורס';
$string['description'] = 'תאור';
$string['display'] = 'תצוגה';
$string['displaymode'] = 'מצב תצוגה';
$string['donotusepaging'] = 'ביטול השימוש בחלוקת תצוגה לעמודים';
$string['downloadexcel'] = 'הורדה למחשב האישי בתצורת EXCEL';
$string['downloadooo'] = 'העתקה למחשב האישי בתצורת OpefOffice';
$string['downloadtext'] = 'יצוא למחשב האישי בתצורת קובץ מלל פשוט';
$string['duration'] = 'משך';
$string['editsession'] = 'עריכת המפגש';
$string['edituser'] = 'עריכת משתמש';
$string['emailcontent'] = 'תוכן ההודעה בדוא"ל';
$string['emptyacronym'] = 'לא ניתן להשאיר את הקיצור ריק. הרישום לא נקלט.';
$string['emptydescription'] = 'לא ניתן להשאיר את התיאור ריק. הרישום לא נקלט.';
$string['enablecalendar'] = 'יצירת אירועים ביומן';
$string['encoding'] = 'קידוד';
$string['endofperiod'] = 'סוף תקופה';
$string['endtime'] = 'זמן סיום מפגש';
$string['enrolmentend'] = 'תאריך סיום הרישום בקורס {$a}';
$string['enrolmentstart'] = 'המשתמש נרשם ב: {$a}';
$string['enrolmentsuspended'] = 'הרישום מושהה';
$string['enterpassword'] = 'הזנת סיסמה';
$string['error:coursehasnoattendance'] = 'אין פעילויות נוכחות בקורס {$a}';
$string['error:coursenotfound'] = 'לא נמצא קורס בשם {$a}';
$string['error:qrcode'] = 'חובה לאפשר לסטודנטים רישום עצמי בשביל להשתמש בקוד QR.';
$string['error:userduplicate'] = 'משתמש {$a} נכלל פעמיים בקובץ היבוא. יש לכלול רשומה אחת בלבד לכל משתמש.';
$string['errorgroupsnotselected'] = 'יש לבחור קבוצה אחת או יותר';
$string['errorinaddingsession'] = 'תקלה בעת הוספת מפגש';
$string['erroringeneratingsessions'] = 'תקלה בעת יצירת מפגשים';
$string['eventdurationupdated'] = 'זמן משך המפגש עודכן';
$string['eventreportviewed'] = 'צפייה בדוח נוכחות';
$string['eventscreated'] = 'נוצרו אירועים ביומן';
$string['eventsdeleted'] = 'אירועי היומן נמחקו';
$string['eventsessionadded'] = 'המפגש נוסף';
$string['eventsessiondeleted'] = 'המפגש נמחק';
$string['eventsessionipshared'] = 'בעיה במספר IP ברישום נוכחות עצמי';
$string['eventsessionsimported'] = 'המפגש יובא';
$string['eventsessionupdated'] = 'המפגש עודכן';
$string['eventstatusadded'] = 'הדיווח נוסף';
$string['eventstatusupdated'] = 'הדיווח עודכן';
$string['eventstudentattendancesessionsupdated'] = 'עודכן דוח המפגש';
$string['eventstudentattendancesessionsviewed'] = 'דוח המפגש עודכן';
$string['eventtaken'] = 'נוכחות נרשמה';
$string['eventtakenbystudent'] = 'נוכחות נרשמה על-ידי התלמיד';
$string['export'] = 'יצוא';
$string['extrarestrictions'] = 'הגבלות נוספות';
$string['formattexttype'] = 'עיצוב';
$string['from'] = 'מ:';
$string['gradebookexplanation'] = 'תאור הציון';
$string['gradebookexplanation_help'] = 'The Attendance module displays your current attendance grade based on the number of points you have earned to date and the number of points that could have been earned to date; it does not include class periods in the future. In the gradebook, your attendance grade is based on your current attendance percentage and the number of points that can be earned over the entire duration of the course, including future class periods. As such, your attendance grades displayed in the Attendance module and in the gradebook may not be the same number of points but they are the same percentage.

For example, if you have earned 8 of 10 points to date (80% attendance) and attendance for the entire course is worth 50 points, the Attendance module will display 8/10 and the gradebook will display 40/50. You have not yet earned 40 points but 40 is the equivalent point value to your current attendance percentage of 80%. The point value you have earned in the Attendance module can never decrease, as it is based only on attendance to date; however, the attendance point value shown in the gradebook may increase or decrease depending on your future attendance, as it is based on attendance for the entire course.';
$string['gridcolumns'] = 'Grid columns';
$string['group'] = 'קבוצה';
$string['groups'] = 'קבוצות';
$string['groupsession'] = 'קבוצת סטודנטים';
$string['groupsessionsby'] = 'קבץ מפגשים לפי';
$string['hiddensessions'] = 'מפגשים מוסתרים';
$string['hiddensessions_help'] = 'המפגשים מוסתרים אם הם מתוזמנים למועד שקודם לתאריך תחילת הקורס, כפי שהוא מוגדר בדף ההגדרות הקורס.
ניתן להשתמש באפשרות זו כדי להסתיר מפגשים במקום למחוק אותם. רק מפגשים שמוצגים יופיעו בגליון הציונים.';
$string['hiddensessionsdeleted'] = 'כל המפגשים המוסתרים נמחקו';
$string['hidensessiondetails'] = 'הסתרת פרטי מפגש';
$string['identifyby'] = 'זיהוי תלמיד על ידי';
$string['import'] = 'ייבוא';
$string['importfile'] = 'ייבוא קובץ';
$string['importfile_help'] = 'ייבוא קובץ';
$string['importsessions'] = 'ייבוא מפגשים';
$string['importstatus'] = 'מצב נוכחות';
$string['importstatus_help'] = 'ניתן לציין בקובץ את מצב הנוכחת עבור כל סטודנט ע"י הקיצור או התיאור המתאים מרשימת מצבי הנוכחות (למשל "נ" או "ח", "נוכח" או "חיסור").';
$string['includeall'] = 'בחירת כל המפגשים';
$string['includedescription'] = 'כולל את תיאור המפגש';
$string['includenottaken'] = 'כולל מפגשים בהם לא נרשמה נוכחות';
$string['includeqrcode'] = 'הצגת קוד QR';
$string['includeremarks'] = 'כולל הערות';
$string['incorrectpassword'] = 'הסיסמה לא נכונה. רישום הנוכחות לא נקלט. נא למלא את הסיסמה הנכונה.';
$string['incorrectpasswordshort'] = 'הסיסמה לא נכונה. רישום הנוכחות לא נקלט.';
$string['indetail'] = 'פירוט...';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidaction'] = 'יש לבחור פעולה';
$string['invalidemails'] = 'יש לציין כתובת של משתמש קיים. {$a} לא נמצא.';
$string['invalidimportfile'] = 'הקובץ בתסדיר לא תקין.';
$string['invalidsessionenddate'] = 'תאריך זה חייב להית מאוחר יותר מתאריך המפגש הראשון';
$string['invalidsessionendtime'] = 'שעת הסיום צריכה להיות מאוחרת יותר משעת ההתחלה';
$string['invalidstatus'] = 'נבחר מצב נוכחות לא תקין. נא לבחור שוב.';
$string['iptimemissing'] = 'לא צוין זמן לשחרור כתובת IP';
$string['jumpto'] = 'מעבר אל';
$string['keepsearching'] = 'חיפוש סטודנטים נוספים';
$string['marksessionimportcsvhelp'] = 'בדף זה ניתן להעלות קובץ CSV הכולל מזהה משתמש ומצב הנוכחות שלו - מצב הנוכחות יכול להיות הקיצור שהוגדר במצבי הנוכחות, או הזמן שבו הנוכחות נרשמה. אם מופיע בקובץ הזמן, אז ירשם מצב הנוכחות הגבוה ביותר הניתן עבור הזמן שנרשם (לפי המצוין בשדה "זמין לסטודנטים למשך" שברשימת מצבי הנוכחות)';
$string['maxpossible'] = 'ניקוד מירבי אפשרי';
$string['maxpossible_help'] = 'מציג את הניקוד המירבי האפשרי עבור הסטודנט בכל המפגשים, אם יצבור את הניקוד הגבוה היותר עבור כל המפגשים שעוד לא התקיימו:
<ul>
<li><strong>נקודות</strong>: הניקוד המירבי שהסטודנט יכול לצבור עבור כל המפגשים (בהתחשב בניקוד שאיבד עד כה).</li>
<li><strong>אחוזים</strong>: הניקוד המירבי שהסטודנט יכול לצבור עבור כל המפגשים (בהתחשב בניקוד שאיבד עד כה) באחוזים מתוך הניקוד המירבי האפשרי.</li>
</ul>';
$string['maxpossiblepercentage'] = 'אחוז מירבי אפשרי';
$string['maxpossiblepoints'] = 'ניקוד מירבי אפשרי';
$string['mergeuser'] = 'איחוד משתמש';
$string['modulename'] = 'נוכחות תלמידים';
$string['modulename_help'] = 'הפעילות "נוכחות תלמידים" מאפשרת למורה לרשום נוכחות במהלך מפגשי הלימוד ולסטודנטים לראות את מצב הנוכחות שלהם. ניתן גם לאפשר לתלמידים לרשום נוכחות באופן עצמאי.

המורה יכול ליצור מספר מפגשים חוזרים בבת אחת, ולהשתמש במצבי הנוכחות הקיימים "נוכח", "חסר", "איחור" או "מאושר", או ליצור לעצמו רשימת מצבי נוכחות שתתאים לצרכיו.

ניתן להפיק דוחות על מצב הנוכחות של הכיתה כולה וכן של סטודנטים בודדים.';
$string['modulenameplural'] = 'נוכחות תלמידים';
$string['months'] = 'חודשים';
$string['moreattendance'] = 'רישום הנוכחות עבור התלמידים בעמוד הושלם בהצלחה';
$string['moveleft'] = 'הזזה ימינה';
$string['moveright'] = 'הזזה שמאלה';
$string['mustselectusers'] = 'יש לבחור משתמשים ליצוא';
$string['newdate'] = 'תאריך חדש';
$string['newduration'] = 'משך זמן חדש';
$string['newstatusset'] = 'אוסף מצבי נוכחות חדש';
$string['noabsentstatusset'] = 'ברשימת מצבי הנוכחות לא סומן מצב ברירת מחדל להיעדרות';
$string['noattendanceusers'] = 'לא ניתן ליצא שום דבר מאחר ואף סטודנט אינו רשום לקורס';
$string['noattforuser'] = 'לא קיימות רשומות נוכחות עבור משתמש זה';
$string['noautomark'] = 'לא פעיל';
$string['nocapabilitytotakethisattendance'] = 'נדרשות הרשאות מתאימות לבצע עדכון רישום הנוכחות עבור רכיב נוכחות בעל קוד זיהוי {$a}';
$string['nodescription'] = 'שעור';
$string['noeventstoreset'] = 'אין אירועים ביומן שנדרש לעדכן';
$string['nogroups'] = 'לא ניתן להגדיר פעילות בקבוצות כיוון שאין קבוצות בקורס';
$string['noguest'] = 'אורחים אינם מורשים לראות גליון נוכחות';
$string['noofdaysabsent'] = 'מספר ימי חיסורים';
$string['noofdaysexcused'] = 'מספר ימי חיסור-מאושר';
$string['noofdayslate'] = 'מספר ימי איחורים';
$string['noofdayspresent'] = 'מספר ימי נוכחות מלאה';
$string['nosessiondayselected'] = 'לא נבחר יום עם מפגשים';
$string['nosessionexists'] = 'לא קיימים מפגשי נוכחות בקורס זה';
$string['nosessionsselected'] = 'לא נבחרו מפגשים';
$string['notfound'] = 'לא נמצאה פעילות "נוכחות תלמידים" בקורס זה!';
$string['notmember'] = 'לא־חבר';
$string['notset'] = 'לא נקבע';
$string['numsessions'] = 'מספר המפגשים';
$string['olddate'] = 'תאריך ישן';
$string['onactivitycompletion'] = 'בעת השלמת פעילות';
$string['onlyselectedusers'] = 'יצוא משתמשים מסוימים';
$string['overallsessions'] = 'עבור כל המפגשים';
$string['overallsessions_help'] = 'נתונים סטטיסטיים אודות כל המפגשים (בעבר ובעתיד):
<ul>
<li><strong>מפגשים</strong>: מספר המפגשים הכולל.</li>
<li><strong>נקודות</strong>: נקודות שנצברו בכל המפגשים עד כה.</li>
<li><strong>אחוזים</strong>: הניקוד באחוזים מתוך המקסימום האפשרי עבור כל המפגשים.</li>
</ul>';
$string['oversessionstaken'] = 'עבור מפגשים עם רישום נוכחות';
$string['oversessionstaken_help'] = 'נתונים סטטיסטיים אודות מפגשים שבהם עודכן מצב הנוכחות (לסטודנט הספציפי):
<ul>
<li><strong>מפגשים</strong>: מספר המפגשים בהם נרשמה נוכחות. לכל סטודנט החישוב מבוצע רק עבור מפגשים שבהם מופיע עבורו נתון כלשהו ברישום הנוכחות. לכן, מספר המפגשים יכול להשתנות מסטודנט לסטודנט.</li>
<li><strong>נקודות</strong>: נקודות שנצברו על סמך מפגשים שנרשמה בהם נוכחות.</li>
<li><strong>אחוזים</strong>: הניקוד באחוזים מתוך המקסימום האפשרי עבור המפגשים שנרשמה בהם< נוכחות.</li>
</ul>';
$string['pageof'] = 'עמוד {$a->page} מתוך {$a->numpages}';
$string['participant'] = 'משתתף';
$string['password'] = 'סיסמה';
$string['passwordgrp'] = 'סיסמה לסטודנט';
$string['passwordgrp_help'] = 'הסטודנט ידרש להזין סיסמה זו על מנת שיוכל לעדכן את מצב הנוכחות שלו באופן עצמאי. אם הושאר ריק לא תידרש כל סיסמה.';
$string['passwordrequired'] = 'עליך להזין סיסמה בשביל להרשם במפגש זה';
$string['percentage'] = 'אחוז';
$string['percentageallsessions'] = 'אחוז בכל המפגשים';
$string['percentagesessionscompleted'] = 'אחוז במפגשים בהם נרשמת נוכחות';
$string['pluginadministration'] = 'ניהול נוכחות תלמידים';
$string['pluginname'] = 'נוכחות תלמידים';
$string['points'] = 'נקודות';
$string['pointsallsessions'] = 'נקודות מכל המפגשים';
$string['pointssessionscompleted'] = 'נקודת במפגשים בהם נרשמה נוכחות';
$string['preferences_desc'] = 'שינוי של פרטים ברשימת מצבי הנוכחות ישפיע על המפגשים הקיימים ועשוי להשפיע גם על הציונים.';
$string['preventsharederror'] = 'רישום נוכחות עצמי במפגש זה נחסם ממכשיר זה כיוון שכבר נרשמה ממנו נוכחות של משתמש אחר באותו מפגש.';
$string['preventsharedip'] = 'מניעה מסטודנטים להרשם מאותה כתובת רשת';
$string['preventsharedip_help'] = 'מניעה ממספר סטודנטים להשתמש באותו מכשיר (אותה כתובת IP) כדי לרשום נוכחות עצמאית.';
$string['preventsharediptime'] = 'משך הזמן בדקות עד לשחרור חסימת מכשיר (כתובת IP) לרישום נוכחות';
$string['preventsharediptime_help'] = 'לאחר משך זמן זה, אפשר שימוש חוזר באותה כתובת IP לרישום נוכחות עצמאי';
$string['preview'] = 'תצוגה מקדימה לקובץ';
$string['previewhtml'] = 'תצוגה מקדימה בפורמט HTML';
$string['priorto'] = 'תאריך המפגש קודם לתאריך תחילת הקורס ({$a}). מפגשים חדשים שיקבעו לפני תאריך זה יהיו מוסתרים (בלתי נגישים). ניתן לשנות את תאריך תחילת הקורס בכל עת (בהגדרות הקורס) על מנת להציג ולקבל גישה למפגשים קודמים.<br> יש לשנות את תאריך המפגש כדי שהוא יוצג או ללחוץ שוב "הוספה" בשביל ליצור מפגש מוסתר.';
$string['privacy:metadata:attendancelog'] = '';
$string['processingfile'] = 'מעבד את הקובץ';
$string['qr_cookie_error'] = 'פג תוקף קוד QR';
$string['qr_pass_wrong'] = 'סיסמת הקוד QR שגויה או שפג התוקף שלה';
$string['qrcode'] = 'קוד QR';
$string['randompassword'] = 'סיסמה אקראית';
$string['remark'] = 'הערות עבור: {$a}';
$string['remarks'] = 'הערות';
$string['repeatasfollows'] = 'מפגש חוזר (עם אותם נתונים) בתאריכים הבאים';
$string['repeatevery'] = 'חזרה כל';
$string['repeaton'] = 'חזרה בימים';
$string['repeatuntil'] = 'חזרה עד';
$string['report'] = 'דוח';
$string['required'] = 'נדרש*';
$string['requiredentries'] = 'רשומות משתמשים זמניים מחליפות את נתוני רשומות המשתתפים';
$string['requiresubnet'] = 'כתובות רשת נדרשות לרישום עצמי';
$string['requiresubnet_help'] = 'ניתן להגביל את רישום הנוכחות לכתובות רשת מסוימות בלבד. יש להכניס את הכתובות מופרדות בפסיקים. ניתן להשתמש בכתובות IP מלאות או חלקיות.';
$string['resetcalendar'] = 'אתחול היומן';
$string['resetdescription'] = 'שים לב שמחיקת פעילות הנוכחות תמחק את כל המידע הקשור אליה מבסיס הנתונים. באפשרותך להסתיר מפגשים ישנים ע"י שינוי תאריך התחלת הקורס!';
$string['resetstatuses'] = 'אתחול מצבי הנוכחות לברירת המחדל';
$string['restoredefaults'] = 'שחזור ערכים לבררת מחדל';
$string['resultsperpage'] = 'רשומות בעמוד';
$string['resultsperpage_desc'] = 'מספר התלמידים אשר יוצגו בעמוד';
$string['rotateqrcode'] = 'קוד QR מתחלף';
$string['save'] = 'שמירת נתוני נוכחות';
$string['scantime'] = 'זמן הרישום';
$string['scantime_help'] = 'ניתן להעלות חתימות זמן כחלק מהקובץ אשר ישמשו לקביעת מצב הנוכחות המתאים לפי הזמנים הקצובים ברשימת מצבי הנוכחות תחת "זמין לסטודנטים למשך".
יש להשתמש בפורמט HH:MM:SS (שעות 24 שעות) לכתיבת זמן הרישום';
$string['search:activity'] = 'נוכחות תלמידים - מידע על הפעילות';
$string['selectactivity'] = 'הפעילות שיש להשלים';
$string['session'] = 'מפגש';
$string['session_help'] = 'Session';
$string['sessionadded'] = 'מפגש נוסף בהצלחה';
$string['sessionalreadyexists'] = 'קיים מפגש קודם בתאריך זה';
$string['sessiondate'] = 'תאריך המפגש';
$string['sessiondays'] = 'ימי המפגש';
$string['sessiondeleted'] = 'מפגש נמחק בהצלחה';
$string['sessionduplicate'] = 'כבר קיים מפגש זהה עבור קורס: {$a->course} בפעילות נוכחות: {$a->activity}, {$a->date}';
$string['sessionexist'] = 'המפגש לא נוסף (הוא כבר קיים)!';
$string['sessiongenerated'] = 'מפגש אחד נוצר בהצלחה';
$string['sessions'] = 'מפגשים';
$string['sessionsallcourses'] = 'כל הקורסים';
$string['sessionsbyactivity'] = 'פעילות נוכחות תלמידים';
$string['sessionsbycourse'] = 'קורס';
$string['sessionsbydate'] = 'שבוע';
$string['sessionscompleted'] = 'מפגשים בהם נרשמה נוכחות';
$string['sessionscurrentcourses'] = 'קורסים נוכחיים';
$string['sessionsgenerated'] = '{$a} מפגשים נוצרו בהצלחה';
$string['sessionsids'] = 'מזהי המפגשים:';
$string['sessionsnotfound'] = 'אין מפגשים בטווח הזמן שנבחר';
$string['sessionstartdate'] = 'תאריך תחילת מפגש';
$string['sessionstotal'] = 'מספר מפגשים כולל';
$string['sessionsupdated'] = 'המפגשים עודכנו';
$string['sessiontype'] = 'סוג המפגש';
$string['sessiontype_help'] = 'ניתן ליצור מפגשים לכל הסטודנטים או לקבוצות נבחרות בלבד. האפשרות לקבוע סוגים שונים של מפגשים תלויה בהגדרות "מצב הקבוצה" של הפעילות.
<ul>
<li>במצב קבוצה "אין קבוצות" ניתן לקבוע מפגשים לכל הסטודנטים בלבד.</li>
<li>במצב קבוצה "קבוצות נפרדות" ניתן לקבוע רק מפגשים לקבוצות נבחרות.</li>
<li>במצב קבוצה "קבוצות נראות" ניתן לקבוע מפגשים לכל הסטודנטים או לקבוצות נבחרות.</li>
</ul>';
$string['sessiontypeshort'] = 'סוג מפגש';
$string['sessionupdated'] = 'המפגש עודכן בהצלחה';
$string['set_by_student'] = 'נוכחות עצמית';
$string['setallstatuses'] = 'קביעת מרוכזת של מצב נוכחות';
$string['setallstatusesto'] = 'עדכון מצב «{$a}» לכל המשתמשים';
$string['setperiod'] = 'מספר דקות עד לשחרור IP';
$string['settings'] = 'מאפיינים';
$string['setunmarked'] = 'ברירת מחדל להיעדרות';
$string['setunmarked_help'] = 'אם הופעל במפגש, מצב זה ירשם אוטומטית לכל סטודנט שלא נרשם בעצמו.';
$string['showdefaults'] = 'הצגת ערכי בררת מחדל';
$string['showduration'] = 'תצוגת משך־זמן';
$string['showextrauserdetails'] = 'הצגת נתוני משתמש מפורטים';
$string['showqrcode'] = 'הצגת קוד QR';
$string['showsessiondescriptiononreport'] = 'הצגת תיאור המפגש בדוח';
$string['showsessiondescriptiononreport_desc'] = 'הצגת תיאור המפגש ברשימת דוחות הנוכחות';
$string['showsessiondetails'] = 'הצגת פרטי מפגש';
$string['somedisabledstatus'] = '(אפשרויות מסוימות הוסרו כיוון שהמפגש כבר החל)';
$string['sortedgrid'] = 'טבלה ממויינת';
$string['sortedlist'] = 'רשימה ממויינת';
$string['startofperiod'] = 'תחילת תקופה';
$string['starttime'] = 'תחילת המפגש';
$string['status'] = 'מצב נוכחות';
$string['statusall'] = 'לכולם';
$string['statusdeleted'] = 'מצב הנוכחות נמחק';
$string['statuses'] = 'מצבי נוכחות';
$string['statusset'] = 'אוסף מצבי נוכחות {$a}';
$string['statussetsettings'] = 'מצבי נוכחות';
$string['statusunselected'] = 'לחסרי רישום';
$string['strftimedm'] = '%d.%m';
$string['strftimedmy'] = '%d.%m.%Y';
$string['strftimedmyhm'] = '%d.%m.%Y %H.%M';
$string['strftimedmyw'] = '%d.%m.%y (%a)';
$string['strftimehm'] = '%H:%M';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = 'מזהה תלמיד';
$string['studentmarked'] = 'רישום הנוכחות שלך נקלט בהצלחה';
$string['studentmarking'] = 'רישום סטודנטים';
$string['studentpassword'] = 'סיסמה לסטודנטים';
$string['studentscanmark'] = 'רישום עצמי של סטודנטים';
$string['studentscanmark_desc'] = 'אם מסומן, סטודנטים יוכלו לרשום נוכחות באופן עצמאי';
$string['studentscanmark_help'] = 'אם מסומן, סטודנטים יוכלו לשנות את רישום הנוכחות שלהם עבור המפגש.';
$string['studentscanmarksessiontime'] = 'רישום רק בזמן המפגש';
$string['studentscanmarksessiontime_desc'] = 'אם מסומן, סטודנטים יכולים לרשום את מצב הנוכחות שלהם רק בזמן המפגש';
$string['studentscanmarksessiontimeend'] = 'סוף המפגש (דקות)';
$string['submit'] = 'שמירה';
$string['submitattendance'] = 'עדכון נוכחות';
$string['submitpassword'] = 'שמירת סיסמה';
$string['subnet'] = 'כתובת רשת';
$string['subnetactivitylevel'] = 'מתן אפשרות לקביעת כתובות רשת ברמת הפעילות';
$string['subnetwrong'] = 'רישום הנוכחות אפשרי רק ממיקומים מסוימים, ומיקומו של מחשב זה אינו מופיע ברשימת המיקומים המותרים';
$string['summary'] = 'דוח מסכם';
$string['tactions'] = 'פעולות';
$string['takeattendance'] = 'רישום נוכחות';
$string['takensessions'] = 'מפגשים בהם נרשמה נוכחות';
$string['tcreated'] = 'נוצר';
$string['tempaddform'] = 'הוספת משתמש זמני';
$string['tempexists'] = 'כתובת הדוא"ל כבר משוייכת למשתמש זמני אחר';
$string['temptable'] = 'רשימת משתמשים זמניים';
$string['tempuser'] = 'משתמש זמני';
$string['tempusermerge'] = 'איחוד משתמש זמני';
$string['tempusers'] = 'משתמשים זמניים';
$string['tempusersedit'] = 'עריכת משתמש זמני';
$string['tempuserslist'] = 'משתמשים זמניים';
$string['thirdpartyemails'] = 'עדכן משתמשים אחרים';
$string['thirdpartyemailtextfooter'] = 'הודעה זו נשלחה אליך משום שהמורה של קורס זה הוסיף את הדוא"ל שלך לרשימת הנמענים';
$string['thiscourse'] = 'מרחב־לימוד זה';
$string['time'] = 'זמן';
$string['timeahead'] = 'לא ניתן ליצור מפגשים חוזרים על פני יותר משנה. יש לתקן את תאריכי ההתחלה והסיום.';
$string['timemodified'] = 'מועד השינוי';
$string['to'] = 'עד:';
$string['todate'] = 'עד לתאריך';
$string['tuseremail'] = 'דוא"ל';
$string['tusername'] = 'שם מלא';
$string['unknowngroup'] = 'לא בקבוצה';
$string['unknownstatus'] = 'מצב נוכחות לא מוכר: {$a}';
$string['update'] = 'עדכון';
$string['uploadattendance'] = 'העלאת נתוני נוכחות בקובץ CSV';
$string['usedefaultsubnet'] = 'שימוש בברירת המחדל';
$string['usemessageform'] = 'או שימוש בתיבה להלן לשליחת מסר לסטודנטים';
$string['userexists'] = 'כתובת הדוא"ל שייכת למשתמש קבוע';
$string['userid'] = 'מזהה משתמש';
$string['userimportfield'] = 'שדה מזהה המשתמש';
$string['userimportfield_help'] = 'שדה מקובץ CSV שלפיו יש לזהות את המשתמשים';
$string['userimportto'] = 'סוג מזהה משתמש במוודל';
$string['userimportto_help'] = 'השדה במוודל שלפיו יש לאתר את המשתמשים';
$string['users'] = 'משתמשים ליצוא';
$string['usestatusset'] = 'אוסף מצבי נוכחות';
$string['variable'] = 'משתנה';
$string['variablesupdated'] = 'המאפיינים עודכנו בהצלחה';
$string['versionforprinting'] = 'גירסה להדפסה';
$string['viewmode'] = 'מצב תצוגה';
$string['warnafter'] = 'מספר המפגשים שארעו טרם האזהרה';
$string['warnafter_help'] = 'אזהרות יופעלו רק כאשר נרשמה נוכחות עבור המשתמש במספר מפגשים זה או יותר';
$string['warningdeleted'] = 'אזהרה נמחקה';
$string['week'] = 'שבוע(ות)';
$string['weeks'] = 'שבועות';
$string['youcantdo'] = 'אינכם יכולים לעשות דבר';
