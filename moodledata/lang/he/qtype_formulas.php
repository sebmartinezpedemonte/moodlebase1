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
 * Strings for component 'qtype_formulas', language 'he', version '4.1'.
 *
 * @package     qtype_formulas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'שגיאה מוחלטת';
$string['addmorepartsblanks'] = '{no} רכיבי תשובה נוספים';
$string['algebraic_formula'] = 'נוסחאות אלגבריות (כולל: פעולות חשבון, פונקציות, ומשתנים)';
$string['answer'] = 'תשובה*';
$string['answercombinedunitmulti'] = 'תשובה ויחידת־מידה לרכיב תשובה {$a->part}';
$string['answercombinedunitsingle'] = 'תשובה ויחידת־מידה';
$string['answercoordinatemulti'] = 'תשובה מספר {$a->numanswer} לסעיף {$a->part}';
$string['answercoordinatesingle'] = 'תשובה מספר {$a->numanswer}';
$string['answermark'] = 'ניקוד רכיב תשובה*';
$string['answermulti'] = 'תשובה לרכיב תשובה {$a->part}';
$string['answerno'] = 'רכיב תשובה {$a}';
$string['answernotunique'] = 'קיימות מספר תשובות נכונות.';
$string['answersingle'] = 'תשובה';
$string['answertype'] = 'סוג תשובה';
$string['answertype_link'] = 'https://moodleformulas.org/';
$string['answerunitmulti'] = 'יחידות־מידה עבור רכיב תשובה {$a->part}';
$string['answerunitsingle'] = 'יחידת־מידה';
$string['checkvarshdr'] = 'בדיקת מחולל משתנים';
$string['choiceno'] = 'לא';
$string['choiceyes'] = 'כן';
$string['commonsiunit'] = 'יחידת SI (תקן בינלאומי)';
$string['correctansweris'] = 'תשובה נכונה אפשרית היא: {$a}';
$string['correctfeedback'] = 'עבור כל תשובה נכונה';
$string['correctness'] = 'אמת־מידה לניקוד*';
$string['correctness_link'] = 'https://moodleformulas.org/';
$string['correctnessexpert'] = 'מומחה';
$string['correctnesssimple'] = 'פשוט';
$string['defaultanswermark'] = 'בררת־מחדל לניקוד רכיב התשובה';
$string['defaultanswermark_desc'] = 'בררת־מחדל לניקוד רכיב התשובה של שאלות חדשות';
$string['defaultanswertype'] = 'בררת־המחדל לסוג תשובה';
$string['defaultanswertype_desc'] = 'סוג תשובה ברירת מחדל עבור חלקים חדשים בשאלה';
$string['defaultcorrectness'] = 'מדדים לדירוג ברירת מחדל';
$string['defaultcorrectness_desc'] = 'מדדי דירוג ברירת מחדל עבור חלקים חדשים בשאלה';
$string['defaultunitpenalty'] = 'קנס ברירת מחדל לשגיאה ביחידת־מידה';
$string['defaultunitpenalty_desc'] = 'קנס ברירת מחדל עבור יחידת־מידה שגויה';
$string['error_algebraic_var'] = 'שגיאת תחביר בהגדרת המשתנה האלגברי.';
$string['error_answer_missing'] = 'טרם הוגדרה תשובה.';
$string['error_answerbox_duplicate'] = 'ניתן להשתמש רק פעם אחת בממלא־מקום השמור לשדה מרכיב התשובות.';
$string['error_answertype_mistmatch'] = 'התגלתה טעות הזנה בסוג התשובה: סוג תשובה מספרי דורש ערך מספרי וסוג תשובה אלגברי דורש נוסחה';
$string['error_criterion'] = 'אמת־המידה של הניקוד נדרשת להיות מיוצגת כמספר, לאחר החישוב.';
$string['error_eval_numerical'] = 'ביטוים מסוימים אינם יכולים להיות מחושבים באופן מספרי.';
$string['error_fixed_range'] = 'שגיאת תחביר של טווח קבוע.';
$string['error_forbid_char'] = 'הנוסחה או ביטוי מכילים תווים או מפעילים אסורים.';
$string['error_forloop'] = 'שגיאת תחביר של לולאת FOR';
$string['error_forloop_expression'] = 'ביטוי לולאת FOR נדרש להיות רשימה';
$string['error_forloop_var'] = 'משתנה לולאה for מכיל כמה שגיאות.';
$string['error_func_param'] = 'מספר שגוי או סוג שגוי של משתנים לפונקציה {$a}()';
$string['error_mark'] = 'על ניקוד התגובה לקחת ערך הגדול מ -0.';
$string['error_no_answer'] = 'נדרשת תשובה אחת לפחות.';
$string['error_placeholder_format'] = 'פורמט שומר מקום שגוי או תווים אסורים.';
$string['error_placeholder_main_duplicate'] = '.יש שומר מקום משוכפל בטקסט השאלה העיקרי';
$string['error_placeholder_missing'] = '.שומר מקום הזה חסר בטקסט השאלה העיקרי';
$string['error_placeholder_sub_duplicate'] = 'שומר מקום זה כבר הוגדר רכיב אחר.';
$string['error_placeholder_too_long'] = 'אורך שומר מקום מוגבל ל 40 תווים.';
$string['error_randvars_set_size'] = 'מספר האלמנטים הניתנים לייצור במעקבוצה חייב להיות גדול מ- 1.';
$string['error_randvars_type'] = 'על כל האלמנטים קבוצה להיות באותו סוג וגודל בדיוק.';
$string['error_ruleid'] = 'לא קיים כלל כזה בקובץ עם המזהה / שם.';
$string['error_subexpression_empty'] = 'ביטוי-המשנה חסר.';
$string['error_syntax'] = 'שגיאת תחביר.';
$string['error_unit'] = 'התרחשה תקלה בעת ניסיון לזיהוי יחידות המידה';
$string['error_unitpenalty'] = 'העונש צריך להיות מספר בין 0 ל -1.';
$string['error_validation_eval'] = 'שגיאה במהלך מבחן ההערכה!';
$string['error_vars_array_index_nonnumeric'] = 'לא ניתן להשתמש בערך לא מספרי כאינדקס רשימה.';
$string['error_vars_array_index_out_of_range'] = 'אינדקס הרשימה הוא מחוץ לטווח !!!';
$string['error_vars_array_size'] = 'גודל הרשימה חייב להיות בין 1 ל 1000.';
$string['error_vars_array_type'] = 'על האלמנטים של אותה רשימה להיות מאותו סוג, מספר או מחרוזת.';
$string['error_vars_bracket_mismatch'] = 'אי התאמה בין סוגריים.';
$string['error_vars_end_separator'] = 'מפריד הקצאה חסר בסוף.';
$string['error_vars_name'] = 'התחביר של שם המשתנה שגוי.';
$string['error_vars_reserved'] = 'שמורה ולא ניתן להשתמש בה כמשתנה {$a}() הפונקציה';
$string['error_vars_undefined'] = 'המשתנה \'{$a}\' לא הוגדר.';
$string['feedback'] = 'משוב כללי על סעיף';
$string['functiontakesatleasttwo'] = 'חייבת לכלול לפחות שני ארגומנטים {$a} הפונקציה';
$string['functiontakesnoargs'] = 'הפונקציה {$a} אינה דורשת אף משתנה';
$string['functiontakesonearg'] = 'הפונקציה {$a} חייבת לקבל משתנה אחד בלבד.';
$string['functiontakesoneortwoargs'] = 'חייבת לכלול טיעון אחד או שניים {$a} הפונקציה';
$string['functiontakestwoargs'] = 'הפונקציה {$a} חייבת לקבל שני משתנים.';
$string['globalvarshdr'] = 'משתנים';
$string['illegalformulasyntax'] = 'תחביר נוסחה לא חוקי מתחיל  ב {$a}';
$string['incorrectfeedback'] = 'לכל תגובה שגויה';
$string['instantiate'] = 'שכפול';
$string['mainq'] = 'שאלה ראשית';
$string['modelanswer'] = 'דגם התשובה';
$string['none'] = 'ללא';
$string['number'] = 'מספר';
$string['number_unit'] = 'מספר ויחידת־מידה';
$string['numdataset'] = 'מספר מערכי נתונים';
$string['numeric'] = 'מספרי (כולל: פעולות חשבון)';
$string['numeric_unit'] = 'מספרי ויחידת־מידה (כולל: פעולות חשבון)';
$string['numerical_formula'] = 'נוסחה מספרית (כולל: פעולות חשבון, פונקציות)';
$string['numerical_formula_unit'] = 'נוסחה מספרית ויחידות־מידה (כולל: פעולות חשבון, פונקציות)';
$string['otherrule'] = 'חוקים אחרים';
$string['placeholder'] = 'שם ממלא־מקום';
$string['pleaseputananswer'] = 'יש להזין תשובה בכל משבצת.';
$string['pluginname'] = 'נוסחאות מתמטיות (כולל: מספרים, פעולות חשבון, פונקציות, משתנים)';
$string['pluginname_link'] = 'question/type/formulas';
$string['pluginnameadding'] = 'הוספת שאלת נוסחאות מתמטיות';
$string['pluginnameediting'] = 'עריכת שאלת נוסחאות מתמטיות';
$string['postunit'] = 'יחידת־מידה';
$string['qtextpreview'] = 'תצוגה מקדימה מבוססת תבנית נתונים';
$string['questiontext'] = 'תוכן השאלה';
$string['relerror'] = 'שגיאה יחסית';
$string['renew'] = 'עדכון';
$string['ruleid'] = 'חוקי המרה בסיסיים';
$string['settingusepopup'] = 'שימוש בעצות';
$string['settingusepopup_desc'] = 'תצוגת התשובה הנכונה והמשוב בחלונית עצה';
$string['subqoptions'] = 'אפשרויות יחידות מידה נוספות';
$string['subqtext'] = 'תוכן מרכיב התשובה';
$string['uniquecorrectansweris'] = 'התשובה הנכונה היא: {$a}';
$string['unit'] = 'יחידת־מידה';
$string['unitpenalty'] = 'החסרת ניקוד ליחידת־מידה שגויה (0-1)*';
$string['unsupportedformulafunction'] = 'לא קיימת תמיכה בפונקציה מסוג {$a}';
$string['vars1'] = 'משתנים מקומיים';
$string['vars2'] = 'משתני ניקוד';
$string['vars2_link'] = 'https://moodleformulas.org/';
$string['varsdata'] = 'שיכפול תבנית נתונים';
$string['varsglobal'] = 'משתנים כללים';
$string['varsglobal_link'] = 'https://moodleformulas.org/';
$string['varsrandom'] = 'משתנים בעלי ערכים אקראיים';
$string['varsrandom_link'] = 'https://moodleformulas.org/';
$string['varsstatistics'] = 'סטטיסטיקה';
$string['yougotnright'] = 'בשאלה זו, עניתם על {$a->num} סעיפים באופן נכון';
