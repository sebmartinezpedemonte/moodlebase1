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
 * Strings for component 'block_workflow', language 'he', version '4.1'.
 *
 * @package     block_workflow
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activetasktitle'] = 'משימה פעילה';
$string['addemail'] = 'הוספת תבנית דוא"ל';
$string['addroletostep'] = 'הוספת תפקיד לשלב';
$string['addstep'] = 'הוספת שלב נוסף לתהליך זה';
$string['addstepafter'] = 'הוספת שלב לאחר נקודה זו';
$string['addtask'] = 'הוספת משימה';
$string['any'] = 'כלשהו';
$string['appliesto'] = 'תקף עבור';
$string['atendfinishworkflow'] = 'סיים את התהליך';
$string['atendgobacktostep'] = 'בסוף שלב {$a}';
$string['atendgobacktostepinfo'] = 'לאחר שלב {$a->stepcount}, יש לחזור לשלב מספר {$a->atendgobacktostep}.';
$string['atendgobacktostepno'] = 'יש לחזור לשלב {$a->stepno} ({$a->name})';
$string['atendstop'] = 'לאחר שלב {$a->stepcount}, תהליך זה יסתיים.';
$string['automaticallyfinish'] = 'סיום באופן אוטומטי';
$string['cannotdeleteworkflowinuseby'] = 'לא ניתן למחוק, תהליך זה משמש ב-{$a}  מקומות.';
$string['cannotremoveemailinuse'] = 'לא ניתן להסיר תבנית דוא"ל -- תבנית זו נמצאת בשימוש';
$string['cannotremoveonlystep'] = 'לא ניתן להסיר שלב. זהו התהליך היחיד בשלב';
$string['clone'] = 'שכפול';
$string['cloneworkflow'] = 'שכפול תהליך';
$string['cloneworkflowinstructions'] = 'שכפול הנחיות תהליך';
$string['cloneworkflowname'] = 'שכפול תהליך \'{$a}';
$string['commentlabel'] = 'עדכון הערת תהליך';
$string['comments'] = 'הערות';
$string['confirm'] = 'אישור';
$string['confirmemaildeletetitle'] = 'מחיקת תבנית דוא"ל \'{$a}\'?';
$string['confirmfinishstep'] = 'האם אתם בטוחים שברצונכם לסמן שלב זה ({$a}) כהושלם?';
$string['confirmstepdeletetitle'] = 'מחיקת שלב \'{$a}\'?';
$string['confirmworkflowdeletetitle'] = 'מחיקת תהליך \'{$a}\'?';
$string['coursestartdate'] = 'תאריך ההתחלה של הקורס';
$string['coursestudentclose'] = 'הקורס סגור ללומדים';
$string['coursestudentopen'] = 'הקורס סגור ללומדים';
$string['coursetutorclose'] = 'הקורס סגור למדריכים';
$string['coursetutoropen'] = 'הקורס סגור למדריכים';
$string['create'] = 'יצירה';
$string['createemail'] = 'יצירת תבנית דוא"ל חדשה';
$string['createstep'] = 'יצירת שלב';
$string['createstepinstructions'] = 'מספר הנחיות כיצד ליצור שלב';
$string['createstepname'] = 'יצירת שלב חדש בתהליך \'{$a}';
$string['createtask'] = 'יצירת משימה חדשה בשלב {$a}';
$string['createtemplate'] = 'יצירת תבנית';
$string['createworkflow'] = 'יצירת תהליך חדש';
$string['dayafter'] = '{$a} ימים לאחר';
$string['dayas'] = 'באותו יום כמו';
$string['daybefore'] = '{$a} ימים לפני';
$string['days'] = 'ימים';
$string['daysafter'] = '{$a} ימים אחרי';
$string['daysbefore'] = '{$a} ימים לפני';
$string['defaultstepinstructions'] = 'יש לבצע א, ואז ב, ואז ג.';
$string['defaultstepname'] = 'שלב ראשון';
$string['defaultworkflowdescription'] = 'תיאור תהליך זה';
$string['delete'] = 'מחיקה';
$string['deleteemail'] = 'מחיקת דוא"ל';
$string['deletestep'] = 'מחיקת שלב';
$string['deletetask'] = 'מחיקת משימה';
$string['deletetemplate'] = 'מחיקת תבנית';
$string['deleteworkflow'] = 'מחיקת תהליך';
$string['description'] = 'תיאור';
$string['disabled'] = 'כבוי';
$string['disableworkflow'] = 'כיבוי תהליך';
$string['doerstitle'] = 'תפקידים';
$string['doertitle'] = 'תפקידים אחראים לשלב זה';
$string['donotautomaticallyfinish'] = 'לא לסיים אוטומטית';
$string['edit'] = 'עריכה';
$string['editcomments'] = 'עריכת הערות';
$string['editstep'] = 'עריכת שלב';
$string['editstepname'] = 'עריכת שלב \'{$a}';
$string['editsteps'] = 'עריכת שלבים בתהליך \'{$a}';
$string['edittask'] = 'עריכת משימה';
$string['edittemplate'] = 'עריכת תבנית';
$string['editworkflow'] = 'עריכת תהליך \'{$a}';
$string['emailmessage'] = 'הודעה';
$string['emailsubject'] = 'נושא';
$string['enabled'] = 'פעיל';
$string['enabledworkflow'] = 'פעיל';
$string['enableworkflow'] = 'הפעלת תהליך';
$string['export'] = 'ייצוא';
$string['exportworkflow'] = 'ייצוא תהליך';
$string['finish'] = 'סיום';
$string['finishstep'] = 'סיום שלב';
$string['hidetask'] = 'כיבוי משימה';
$string['importfile'] = 'קובץ';
$string['importworkflow'] = 'ייבוא תהליך';
$string['instructions'] = 'הנחיות';
$string['stepactivation_link'] = 'block/workflow';
$string['stepcompletion_link'] = 'block/workflow';
$string['stepextranotify_link'] = 'block/workflow';
