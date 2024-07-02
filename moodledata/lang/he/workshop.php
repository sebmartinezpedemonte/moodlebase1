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
 * Strings for component 'workshop', language 'he', version '4.1'.
 *
 * @package     workshop
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitydate:submissionsopened'] = 'נפתח:';
$string['aggregategrades'] = 'חישוב ציונים מחדש';
$string['aggregation'] = 'צבירת ציונים';
$string['allocate'] = 'הקצאת הגשות';
$string['allocatedetails'] = 'מתוכנן:{$a->expected}<br />
הוגש: {$a->submitted}<br />
זמין להקצאה: {$a->allocate}';
$string['allocation'] = 'הגשות מוקצות';
$string['allocationconfigured'] = 'הקצאה הוגדרה';
$string['allocationdone'] = 'ההקצאה התבצעה';
$string['allocationerror'] = 'שגיאה בהקצאה';
$string['allowedfiletypesforoverallfeedback'] = 'סוגי קבצים המותרים לצירוף במשוב';
$string['allowedfiletypesforoverallfeedback_link'] = 'admin/tool/filetypes/index';
$string['allowedfiletypesforsubmission'] = 'סוגי קבצים המאופשרים לצירוף בהגשה';
$string['allowedfiletypesforsubmission_link'] = 'admin/tool/filetypes/index';
$string['allsubmissions'] = 'כל ההגשות ({$a})';
$string['alreadygraded'] = 'כבר ניתן ציון';
$string['areaconclusion'] = 'תוכן הסיכום';
$string['areainstructauthors'] = 'הוראות להגשות';
$string['areainstructreviewers'] = 'הוראות להערכה';
$string['areaoverallfeedbackattachment'] = 'קבצי משוב מצורפים לסיכום';
$string['areaoverallfeedbackcontent'] = 'תוכן המשובים לסיכום';
$string['areasubmissionattachment'] = 'קבצים מצורפים להגשה';
$string['areasubmissioncontent'] = 'התכנים שהוגשו';
$string['assess'] = 'ביצוע הערכה';
$string['assessedexample'] = 'דוגמת הגשה שהוערכה';
$string['assessedsubmission'] = 'הערכת הגשה';
$string['assessingexample'] = 'הערכת דוגמת הגשה';
$string['assessingsubmission'] = 'הערכת הגשה';
$string['assessment'] = 'הערכה';
$string['assessmentby'] = 'על־ידי: <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'הוערך על־ידי: {$a}';
$string['assessmentbyyourself'] = 'הערכתך';
$string['assessmentdeleted'] = 'בוטלה ההערכת';
$string['assessmentend'] = 'מועד אחרון להערכה';
$string['assessmentendbeforestart'] = 'לא ניתן לציין תאריך סופי להערכה לפני תאריך פתיחת ההערכה.';
$string['assessmentenddatetime'] = 'מועד אחרון להערכה: {$a->distanceday}) {$a->daydatetime})';
$string['assessmentendevent'] = 'מועד אחרון להערכה {$a}';
$string['assessmentform'] = 'טופס הערכה';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">הערכות שלי</a> מתוך כלל ההערכות של ההגשה <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'הערכת הסימוכין';
$string['assessmentreferenceconflict'] = 'לא ניתן להעריך הגשת דוגמה שאליה יחסת הערכה.';
$string['assessmentreferenceneeded'] = 'עליך להעריך הגשת דוגמה זאת בכדי לספק הערכת התייחסות. לחצו "המשך" בכדי להעריך את ההגשה.';
$string['assessments'] = 'הערכות';
$string['assessmentsettings'] = 'הגדרות ההערכה';
$string['assessmentstart'] = 'תחילת ההערכות מ-';
$string['assessmentstartdatetime'] = 'ניתן להערכה מ-{$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} פתוח להערכה';
$string['assessmentweight'] = 'משקל ההערכה';
$string['assignedassessments'] = 'הגשות להן נדרשת הערכה ומתן ציון';
$string['assignedassessmentsnone'] = 'טרם הוקצאו הגשות להערכה';
$string['backtoeditform'] = 'בחזרה לעריכה מ-';
$string['byfullname'] = 'על־ידי: <a href="{$a->url}">{$a->name}</a>';
$string['byfullnamewithoutlink'] = 'על ידי {$a}';
$string['calculategradinggrades'] = 'חישוב ציוני הערכות';
$string['calculategradinggradesdetails'] = 'צפוי: {$a->expected}<br />מחושב: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'חישוב ציוני ההגשות';
$string['calculatesubmissiongradesdetails'] = 'צפוי: {$a->expected}<br />מחושב: {$a->calculated}';
$string['chooseuser'] = 'בחירת משתמש...';
$string['clearaggregatedgrades'] = 'איפוס כל הציונים המצטברים';
$string['clearaggregatedgrades_help'] = 'הציונים שהצטברו להגשה והציונים להערכה יאופסו. ניתן לחשב מחדש ציונים אלו מהתחלה בשלב הערכת הציונים.';
$string['clearaggregatedgradesconfirm'] = 'האם לנקות את הציונים שחושבו עבור ההגשות וההערכות?';
$string['clearassessments'] = 'איפוס ההערכות';
$string['clearassessments_help'] = 'הציונים שהצטברו להגשה והציונים להערכה יאופסו. המידע כיצד מולאו טפסי ההערכה עדין קיים, אולם יהיה על המבקרים לפתוח מחדש את טופס ההערכה ולשמור אותו מחדש בכדי שהציונים יחושבו שנית.';
$string['clearassessmentsconfirm'] = 'האם לאפס את כל ציוני ההערכה? לא ניתן לשחזר את המידע מחדש, והבודקים יהיו חייבים להעריך מחדש את ההגשות שהוקצו.';
$string['conclusion'] = 'סיכום';
$string['conclusion_help'] = 'תוכן הסיכום מוצג למשתתפים בסוף הפעילות.';
$string['configexamplesmode'] = 'בררת־מחדל של הערכת דוגמאות בפעילות הערכת־עמיתים';
$string['configgrade'] = 'הציון המירבי להגשות בפעילות הערכות עמיתים';
$string['configgradedecimals'] = 'בררת־מחדל של מספר הספרות שיוצגו לאחר הנקודה העשרונית כאשר מציגים ציונים.';
$string['configgradinggrade'] = 'הציון המירבי להערכות בפעילות הערכות עמיתים';
$string['configmaxbytes'] = 'בררת־מחדל של נפח הקובץ המרבי שמגישים בפעילויות הערכת־עמיתים (תלוי גם בהגבלות הקורס והגדרות מקומיות נוספות)';
$string['configstrategy'] = 'חישוב בררת־המחדל של מתן ציונים בפעילות הערכת־עמיתים';
$string['createsubmission'] = 'התחלת ההגשה שלך';
$string['daysago'] = 'לפני {$a} ימים';
$string['daysleft'] = 'נשארו {$a} ימים';
$string['daystoday'] = 'היום';
$string['daystomorrow'] = 'מחר';
$string['daysyesterday'] = 'אתמול';
$string['deadlinesignored'] = 'מגבלות הזמן לא חלים עליך';
$string['deletesubmission'] = 'מחיקת הגשה';
$string['editassessmentform'] = 'עריכת מחוון';
$string['editassessmentformstrategy'] = 'עריכת מחוון ({$a})';
$string['editingassessmentform'] = 'עריכת הגשה מ-';
$string['editingsubmission'] = 'עריכת הגשה';
$string['editsubmission'] = 'עריכת הגשה';
$string['err_multiplesubmissions'] = 'תוך כדי עריכת טופס זה, נשמרה מהדורה אחרת של ההגשה.
אסורות הגשות מרובות על ידי תלמידים.';
$string['err_removegrademappings'] = 'לא ניתן להסיר מיפוי של ציונים שלא השתשמו בו';
$string['evaluategradeswait'] = 'יש להמתין עד שההערכות יבחנו והציונים יחושבו';
$string['evaluation'] = 'הערכת ציונים';
$string['evaluationmethod'] = 'שיטת הערכת ציונים';
$string['evaluationmethod_help'] = 'שיטת ההערכה של הציונים קובעת איך הציון להערכות מחושב. כרגע יש רק אפשרות אחת - השוואה עם ההערכה הטובה ביותר.';
$string['evaluationsettings'] = 'הגדרות הערכת הציון';
$string['eventassessableuploaded'] = 'ההגשה הועלתה.';
$string['eventassessmentevaluated'] = 'ההערכה הוערכה';
$string['eventassessmentevaluationsreset'] = 'אתחול שלב הערכה';
$string['eventassessmentreevaluated'] = 'ההערכה נבחנה מחדש';
$string['eventphaseswitched'] = 'השלב עבר';
$string['eventsubmissionassessed'] = 'הגשה הוערכה';
$string['eventsubmissionassessmentsreset'] = 'הערכות ההגשה נמחקו';
$string['eventsubmissioncreated'] = 'הגשה נוצרה';
$string['eventsubmissiondeleted'] = 'הגשה נמחקה';
$string['eventsubmissionreassessed'] = 'ההגשה הוערכה מחדש';
$string['eventsubmissionupdated'] = 'ההגשה עודכנה';
$string['eventsubmissionviewed'] = 'ההגשה נצפתה';
$string['example'] = 'דוגמת הגשה';
$string['exampleadd'] = 'הוספת דוגמת הגשה';
$string['exampleassess'] = 'הערכת דוגמאות הגשה';
$string['exampleassessments'] = 'הערכה של דוגמאות הגשה ';
$string['exampleassesstask'] = 'הערך דוגמאות';
$string['exampleassesstaskdetails'] = 'צפוי:{$a->expected}<br />מוערך:{$a->assessed}';
$string['examplecomparing'] = 'השוואת הערכות של דוגמאות הגשה';
$string['exampledelete'] = 'מחיקת דוגמה';
$string['exampledeleteconfirm'] = 'האם למחוק את ההגשה לדוגמה? יש לבחור "המשך" בכדי למחוק את ההגשה.';
$string['exampleedit'] = 'עריכת הדוגמה';
$string['exampleediting'] = 'דוגמה לעריכה';
$string['exampleneedassessed'] = 'ראשית כל יש להעריך את כל דוגמאות ההגשה';
$string['exampleneedsubmission'] = 'ראשית, עליך להגיש את עבודתך ולהעריך את כל דוגמאות ההגשה';
$string['examplesbeforeassessment'] = 'חובת הערכה של "דוגמאות הגשה" זמינות לאחר ההגשה שלך ולפני שלב הערכת עמיתים';
$string['examplesbeforesubmission'] = 'יש להעריך דוגמאות לפני שמגישים את העבודות שלך';
$string['examplesmode'] = 'סיגנון של הערכת דוגמאות';
$string['examplesubmissions'] = 'הגשות לדוגמא';
$string['examplesvoluntary'] = 'לא נדרש ביצוע הערכה ל"הגשת הדוגמה"';
$string['exportsubmission'] = 'יצוא עמוד זה';
$string['feedbackauthor'] = 'משוב למחבר';
$string['feedbackauthorattachment'] = 'נספח';
$string['feedbackby'] = 'משוב על־ידי: {$a}';
$string['feedbackreviewer'] = 'משוב למעריך';
$string['feedbacksettings'] = 'משוב';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'מוערכים והציונים שניתנו';
$string['grade_grading_name'] = 'הערכה';
$string['grade_submission_name'] = 'הגשה';
$string['gradecalculated'] = 'ציון מחושב להגשה';
$string['gradedecimals'] = 'מספר המקומות העשרוניים בציון';
$string['gradegivento'] = '→';
$string['gradeinfo'] = 'ציון: {$a->received} מ: {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (הערכה)';
$string['gradeitemsubmission'] = '{$a->workshopname} (הגשה)';
$string['gradeover'] = 'ציון עוקף להגשה';
$string['gradereceivedfrom'] = '←';
$string['gradesreport'] = 'דוח ציוני פעילות הערכת עמיתים';
$string['gradetopassgrading'] = 'ציון "עובר" להערכה';
$string['gradetopasssubmission'] = 'ציון "עובר" להגשה';
$string['gradinggrade'] = 'ציון ההערכה';
$string['gradinggrade_help'] = 'ההגדרה מציינת את הציון המירבי שניתן לקבלו על ידי הערכת ההגשה.';
$string['gradinggradecalculated'] = 'ציון מחושב להערכה';
$string['gradinggradeof'] = 'ציון להערכה ({$a})';
$string['gradinggradeover'] = 'ציון עוקף להערכה';
$string['gradingsettings'] = 'הגדרות ציונים';
$string['groupnoallowed'] = 'אין גישה לקבוצות בפעילות הערכת־עמיתים זו';
$string['iamsure'] = 'כן, אני בטוח בכך';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'מידע';
$string['instructauthors'] = 'הוראות להגשה';
$string['instructreviewers'] = 'הוראות להערכה';
$string['introduction'] = 'הנחיות לסטודנטים';
$string['latesubmissions'] = 'הגשות מאוחרות';
$string['latesubmissions_desc'] = 'הרשה הגשות לאחר המועד הסופי';
$string['latesubmissions_help'] = 'אם מופעל אזי מחברים יכולים להגיש את עבודתם לאחר המועד הסופי או משך שלב ההערכה. אם זאת לא ניתן לערוך הגשות מאוחרות.';
$string['latesubmissionsallowed'] = 'מותרות הגשות מאוחרות ';
$string['maxbytes'] = 'גודל מירבי של הקבצים';
$string['modulename'] = 'הערכת־עמיתים';
$string['modulename_help'] = 'פעילות "הערכת־עמיתים" (סדנה / Workshop) מאפשרת למורה להציג משימה או מטלה הדורשת איסוף, ביקורת והערכת עמיתים של עבודת התלמידים.

תלמידים נדרשים להגיש תוכן דיגיטלי (קבצים), כגון מסמכי עיבוד תמלילים או גיליונות אלקטרוניים ואף להזין תוכן באופן מקוון ישירות ל"סדנה" באמצעות עורך התוכן המעוצב של המערכת.

ההגשות יוערכו באמצעות טופס הערכה, מרובה אמות מידה (מחוונים) אשר הוגדר על ידי המורה.

התהליך של הערכת עמיתים והבנת טופס ההערכה, יכול להיות מתורגל מראש על ידי הגשות דוגמה, הניתנות על ידי המורה, יחד עם התייחסות והערכה. תלמידים מקבלים הזדמנות להעריך אחד או יותר מהגשות עמיתיהם. הגשות ומשובים יכולים להיות אנונימיים, אם נדרשו לכך.

תלמידים מקבלים שני ציונים בפעילות סדנה (1) ציון על הגשת המטלה (2) ציון על סמך הערכות
עמיתיהם. שני הציונים נרשמים בגליון הציונים של הקורס.';
$string['modulename_link'] = 'mod/workshop/view';
$string['modulenameplural'] = 'הערכות־עמיתים';
$string['myassessments'] = 'ההערכות שלי';
$string['mysubmission'] = 'ההגשה שלי';
$string['nattachments'] = 'המספר המירבי של פריטים מצורפים להגשה';
$string['noexamples'] = 'אין עדיין דוגמאות בהערכת־עמיתים';
$string['noexamplesformready'] = 'יש להגדיר את טופס ההערכה לפני מתן דוגמאות של הגשות';
$string['nogradeyet'] = 'טרם ניתן ציון';
$string['nosubmissionfound'] = 'לא נמצאו הגשות של משתמש זה';
$string['nosubmissions'] = 'אין עדיין הגשות בהערכת־עמיתים זאת';
$string['notassessed'] = 'טרם הוערך';
$string['nothingfound'] = 'לא קיים דבר להצגה';
$string['nothingtoreview'] = 'לא קיים דבר למתן הערכה';
$string['notoverridden'] = 'לא עודכן';
$string['noworkshops'] = 'בקורס זה אין פעילות הערכת־עמיתים';
$string['noyoursubmission'] = 'עדיין לא הגשת את עבודתך';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'משוב כללי';
$string['overallfeedbackfiles'] = 'מספר מירבי של קבצי משוב כללי מצורפים';
$string['overallfeedbackmaxbytes'] = 'גודל מירבי של קבצי משוב כללי מצורפים';
$string['overallfeedbackmode'] = 'מצב משוב כללי';
$string['overallfeedbackmode_0'] = 'לא־פעיל';
$string['overallfeedbackmode_1'] = 'פעיל וזמין';
$string['overallfeedbackmode_2'] = 'פעיל ונדרש';
$string['page-mod-workshop-x'] = 'עמוד רכיב הערכת־עמיתים כלשהו';
$string['participant'] = 'תלמיד/ה';
$string['participantrevierof'] = 'התלמיד מעריך את';
$string['participantreviewedby'] = 'התלמיד מוערך על־ידי';
$string['phaseassessment'] = 'שלב ההערכות';
$string['phaseclosed'] = 'סגור';
$string['phaseevaluation'] = 'שלב חישוב הציונים';
$string['phasesetup'] = 'שלב ההכנה';
$string['phasesoverlap'] = 'שלב ההגשה ושלב ההערכה לא יכולים להתבצע במקביל';
$string['phasesubmission'] = 'שלב ההגשה';
$string['pluginadministration'] = 'ניהול הערכת־עמיתים';
$string['pluginname'] = 'הערכת־עמיתים';
$string['prepareexamples'] = 'הכנת דוגמאות הגשה';
$string['previewassessmentform'] = 'תצוגה מוקדמת';
$string['publishedsubmissions'] = 'הגשות שפורסמו';
$string['publishsubmission'] = 'פרסום ההגשה';
$string['publishsubmission_help'] = 'הגשות שפורסמו זמינות לאחרים כאשר פעילות הערכת עמיתים מסתיימת.';
$string['reassess'] = 'הערכה מחדש';
$string['receivedgrades'] = 'מעריכים וציונים שהתקבלו';
$string['recentassessments'] = 'הערכות פעילות הערכת עמיתים';
$string['recentsubmissions'] = 'הגשות פעילות הערכת עמיתים:';
$string['resetassessments'] = 'מחיקת כל ההערכות';
$string['resetphase'] = 'הקליקו, למעבר לשלב ההכנה';
$string['resetphase_help'] = 'אם מאופשר, כל הערכות העמיתים יועברו לשלב איתחול';
$string['resetsubmissions'] = 'מחיקת כל ההגשות';
$string['resetsubmissions_help'] = 'כל ההגשות וההערכות ימחקו. הדבר אינו משפיע על הגשות דוגמא.';
$string['saveandclose'] = 'שמירה וסגירה';
$string['saveandcontinue'] = 'שמירה והמשך עריכה';
$string['saveandpreview'] = 'שמירה וצפיה';
$string['saveandshownext'] = 'שמירה והצגת הבא';
$string['search:activity'] = 'הערכת-עמיתים - מידע הפעילות';
$string['selfassessmentdisabled'] = 'הערכה העצמית אינה זמינה';
$string['showingperpage'] = 'תצוגת {$a} פריטים בכל עמוד';
$string['showingperpagechange'] = 'שינוי ...';
$string['someuserswosubmission'] = 'יש סטודנט אחד לפחות שעדיין לא הגיש את עבודתו';
$string['sortasc'] = 'מיון בסדר עולה';
$string['sortdesc'] = 'מיון בסדר יורד';
$string['strategy'] = 'שיטת צבירת ציונים';
$string['strategy_help'] = 'שיטת צבירת הציונים קובעת סוג טופס ההערכה שישתמשו בו ואת שיטת הערכת ההגשות. קיימות 4 אפשרויות:

* צבירת ניקוד - מתן ציון (ניקוד או מדרגות הערכה) והערות לפי אמות־המידה שהוגדרו.
* הערות - הערות בלבד, הניתנות לפי אמות־המידה שהוגדרו אך ללא מתן ציון.
* מספר השגיאות - הערות וציון המבוסס על מדרגות הערכה נכון/שגוי הניתנים לפי אמות־מידה שהוגדרו. (ניקוד של 100% ינתן להגשה ללא שגיאות)
* מחוון - מבוסס מדרגות־הערכה המורכבות מאמות־מידה שהוגדרו.';
$string['strategyhaschanged'] = 'שיטת צבירת ציונים של פעילות הערכת עמיתים השתנתה מאז שהטופס נפתח לשם עריכה.';
$string['submission'] = 'הגשה';
$string['submissionattachment'] = 'נספח';
$string['submissionby'] = 'הוגש על־ידי: {$a}';
$string['submissioncontent'] = 'תוכן ההגשה';
$string['submissiondeleteconfirm'] = 'האם בטוח כי ברצונך למחוק את ההגשה הבאה?';
$string['submissiondeleteconfirmassess'] = 'האם בטוח כי ברצונך למחוק את ההגשה הבאה? הפעולה תמחק גם את ההערכות  {$a->count} הקשורות להגשה, דבר שיכול להשפיע על תוצאות הציונים.';
$string['submissionend'] = 'מועד אחרון להגשות';
$string['submissionendbeforestart'] = 'מועד אחרון של ההגשות לא יכול להיות לפני מועד פתיחת ההגשות';
$string['submissionenddatetime'] = 'מועד אחרון להגשות: {$a->distanceday} {$a->daydatetime})';
$string['submissionendevent'] = '{$a} (מועד אחרון להגשות)';
$string['submissionendswitch'] = 'עבור לשלב הבא לאחר מועד סיום ההגשות';
$string['submissiongrade'] = 'ציון ההגשה';
$string['submissiongrade_help'] = 'ההגדרה קובעת את הציון המירבי שניתן להשיג לעבודה שהוגשה.';
$string['submissiongradeof'] = 'ציון ההגשה (מתוך {$a})';
$string['submissionlastmodified'] = 'עודכן לאחרונה';
$string['submissionrequiredcontent'] = 'נדרשת הוספת מלל כלשהו או קובץ.';
$string['submissionsallocation'] = 'הקצאת הגשות';
$string['submissionsettings'] = 'הגדרות הגשה';
$string['submissionsreport'] = 'דוח הגשות';
$string['submissionstart'] = 'תחילת מועד ההגשות';
$string['submissionstartdatetime'] = 'הגשות אפשריות מ-{$a->distanceday} {$a->daydatetime})';
$string['submissionstartevent'] = '{$a} (פתוח להגשות)';
$string['submissiontitle'] = 'כותרת';
$string['submissiontypefileavailable'] = 'קבצי הגשה<span class="accesshide"> מאופשר</span>';
$string['submissiontypefilerequired'] = '<span class="accesshide">קבצי הגשה </span>נדרש';
$string['submissiontypes'] = 'סוגי הגשות';
$string['submissiontypetextavailable'] = 'תוכן מקוון<span class="accesshide"> מאופשר</span>';
$string['submissiontypetextrequired'] = '<span class="accesshide">תוכן מקוון </span>נדרש';
$string['submittednotsubmitted'] = 'הוגשו ({$a->submitted}) / טרם הוגשו ({$a->notsubmitted})';
$string['subplugintype_workshopallocation'] = 'שיטת הקצאת הגשות';
$string['subplugintype_workshopallocation_plural'] = 'שיטות הקצאת הגשות';
$string['subplugintype_workshopeval'] = 'שיטת הערכת ציונים';
$string['subplugintype_workshopeval_plural'] = 'שיטות הערכת ציון';
$string['subplugintype_workshopform'] = 'שיטת צבירת ציונים';
$string['subplugintype_workshopform_plural'] = 'שיטות צבירת ציונים';
$string['switchingphase'] = 'שלב מתחלף';
$string['switchphase'] = 'החלפת שלב';
$string['switchphase10'] = 'הקליקו, למעבר לשלב ההכנה';
$string['switchphase10info'] = 'פעילות הערכת־העמיתים עומדת לעבור ל<strong>שלב ההגדרות</strong>. בשלב זה אין המשתמשים יכולים לשנות את ההגשות שלהם או את ההערכות שלהם. מורים יכולים להשתמש בשלב זה לשנות את הגדרת פעילות הערכת עמיתים, לשנות את שיטת צבירת הציונים או לשנות את טפסי ההערכה.';
$string['switchphase20'] = 'הקליקו, למעבר לשלב ההגשה';
$string['switchphase20info'] = 'פעילות הערכת־העמיתים עומדת לעבור ל<strong>שלב הההגשה</strong>. הסטודנטים יכולים להגיש את העבודה במשך שלב זה (במסגרת בקרת התאריכים  - באם הוגדרה). מורים יכולים להקצות הגשות לסטודנטים (עמיתים) אשר ידרשו לבצע הערכה, בשלב הבא.';
$string['switchphase30'] = 'הקליקו, למעבר לשלב הערכות';
$string['switchphase30auto'] = 'פעילות הערכת־עמיתים תועבר אוטומטית לשלב ההערכה לאחר {$a->daydatetime} ({$a->distanceday})';
$string['switchphase30info'] = 'פעילות הערכת־העמיתים עומדת לעבור ל<strong>שלב הערכה</strong>. בשלב זה הסטודנטים (העמיתים) יכולים להעריך את ההגשות שהוקצו להם לבדיקה (במסגרת בקרת התאריכים - באם הוגדרה).';
$string['switchphase40'] = 'הקליקו, למעבר לשלב חישוב הציונים';
$string['switchphase40info'] = 'פעילות הערכת־העמיתים עומדת לעבור ל<strong>שלב חישוב הציונים</strong>. בשלב זה המשתמשים יכולים לשנות את ההגשות שלהם ואת ההערכות שלהם. המורים יכולים להשתמש בכלי ההערכה לחשב את הציונים הסופיים ולתת משוב למעריכים.';
$string['switchphase50'] = 'סגירת הערכת העמיתים';
$string['switchphase50info'] = 'פעילות הערכת־העמיתים עומדת להיסגר. פעולה זאת תגרום לכך שהציונים המחושבים יוכנסו לגליון הציונים המסכם של הקורס. הסטודנטים יכולו לצפות בהגשות שלהם וההערכות של ההגשות.';
$string['switchphaseauto'] = 'המעבר האוטומטי תוזמן';
$string['switchphasenext'] = 'הקליקו, למעבר לשלב הבא';
$string['taskassesspeers'] = 'הערכת עמיתים';
$string['taskassesspeersdetails'] = 'סך הכל:{$a->total}<br /> עדיין חסר: {$a->todo}';
$string['taskassessself'] = 'הערך את עצמך';
$string['taskconclusion'] = 'מתן סיכום לפעילות';
$string['taskdone'] = 'המשימה הושלמה';
$string['taskfail'] = 'המשימה נכשלה';
$string['taskinfo'] = 'מידע על המשימה';
$string['taskinstructauthors'] = 'הגדרת הוראות להגשת המטלות';
$string['taskinstructreviewers'] = 'יש להזין הוראות להערכה';
$string['taskintro'] = 'הגדרת הנחיות לפעילות';
$string['tasksubmit'] = 'הגשת עבודתך';
$string['tasktodo'] = 'משימות לעשות';
$string['toolbox'] = 'פעולות ניהול מתקדמות';
$string['undersetup'] = 'פעילות הערכת העמיתים נמצאת בתהליך בניה. אנא חכה עד שהיא תסתעף לדף הבא.';
$string['useexamples'] = 'השתמשו בדוגמאות';
$string['useexamples_desc'] = 'הגשות לדוגמא מצורפות עבור תרגול ההערכה';
$string['useexamples_help'] = 'באם מופעל, המשתמשים יכולים לנסות דוגמה אחת או יותר של השגות ולהשוות את ההערכה שלהם עם הערכת סימוכין. הציון לא נכלל בציון הניתן להערכות.';
$string['usepeerassessment'] = 'השתמשו בהערכת עמיתים';
$string['usepeerassessment_desc'] = 'סטודנטים רשאיים להעריך עבודות עמיתים';
$string['usepeerassessment_help'] = 'באם מופעל, ניתן להקצות למשתמש הגשות ממשתמשים אחרים לשם הערכה. המשתמש יקבל ציון להערכה שיתוסף לציון שהוא יקבל להגשה שלו.';
$string['userdatecreated'] = 'הוגש ב-<span>{$a}</span>';
$string['userdatemodified'] = 'עודכן ב-<span>{$a}</span>';
$string['userplan'] = 'טבלת תכנון הערכת עמיתים';
$string['userplan_help'] = 'טבלת תכנון פעילות הערכת עמיתים מציגה את כל השלבים של הפעילות ומונה את כל המשימות לכל שלב.   כדי להתקדם בין השלבים יש להקליק על שם השלב.   השלב הנוכחי יודגש והשלמת כל משימה תסומן על ידי V (ירוק).   שימו לב! ניתן לחזור לשלב קודם.';
$string['userplanaccessibilityskip'] = 'דלג משימות הנוכחיות';
$string['userplanaccessibilitytitle'] = 'ציר זמן הערכת העמיתים עם שלב phases';
$string['userplancurrentphase'] = 'שלב נוכחי';
$string['useselfassessment'] = 'השתמשו בהערכה עצמית';
$string['useselfassessment_desc'] = 'הסטודנטים רשאים להעריך את עבודתם שלהם';
$string['useselfassessment_help'] = 'באם מופעל, ניתן להקצות למשתמש את ההגשות שלו עצמו להערכה והוא יקבל ציון להערכה שיתוסף לציון שהוא יקבל להגשה שלו.';
$string['viewworkshopsummary'] = 'צפיה בסיכום הערכת העמיתים';
$string['weightinfo'] = 'משקל: {$a}';
$string['withoutsubmission'] = 'מעריך ללא הגשה משלו';
$string['workshop:addinstance'] = 'הוספת פעילות הערכת־עמיתים חדשה';
$string['workshop:allocate'] = 'הקצאת הגשות להערכה';
$string['workshop:deletesubmissions'] = 'מחיקת הגשות';
$string['workshop:editdimensions'] = 'עריכת טפסי ההערכה (מחוונים)';
$string['workshop:exportsubmissions'] = 'יצוא הגשות';
$string['workshop:ignoredeadlines'] = 'התעלם מהגבלת זמן';
$string['workshop:manageexamples'] = 'ניהול דוגמאות ההגשה';
$string['workshop:overridegrades'] = 'עדכון ציונים מחושבים';
$string['workshop:peerassess'] = 'הערכת עמיתים';
$string['workshop:publishsubmissions'] = 'פרסום ההגשות';
$string['workshop:submit'] = 'הגשה';
$string['workshop:switchphase'] = 'הקליקו, למעבר שלב';
$string['workshop:view'] = 'צפיה בהערכת עמיתים';
$string['workshop:viewallassessments'] = 'צפיה בכל הערכות';
$string['workshop:viewallsubmissions'] = 'צפיה בכל ההגשות';
$string['workshop:viewauthornames'] = 'צפיה בשמות המגישים';
$string['workshop:viewauthorpublished'] = 'צפיה בשמות המשתמשים שפירסמו הגשות';
$string['workshop:viewpublishedsubmissions'] = 'צפיה בהגשות שפורסמו';
$string['workshop:viewreviewernames'] = 'צפיה בשמות המעריכים';
$string['workshopname'] = 'שם לפעילות הערכת־עמיתים';
$string['yourassessmentfor'] = 'ההערכה שלך עבור phases';
$string['yourgrades'] = 'הציונים שלך';
$string['yoursubmission'] = 'ההגשה שלך';
$string['yoursubmissionwithassessments'] = 'הערכות להגשה שלך';
