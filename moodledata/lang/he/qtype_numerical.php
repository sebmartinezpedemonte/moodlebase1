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
 * Strings for component 'qtype_numerical', language 'he', version '4.1'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'מרווח שגיאה אפשרי';
$string['addmoreanswerblanks'] = 'הוספת {no} תשובות נוספות';
$string['addmoreunitblanks'] = 'הוספת {no} יחידות־מידה נוספות';
$string['answercolon'] = 'תשובה:';
$string['answererror'] = 'שגיאה';
$string['answermustbenumberorstar'] = 'ניתן להזין תשובה מספרית בלבד, לדוגמה 1.234- או 3e8, או \'*\'.';
$string['answerno'] = 'תשובה מספר {$a}';
$string['decfractionofquestiongrade'] = 'מציון השאלה (יחושב כשבר עשרוני)';
$string['decfractionofresponsegrade'] = 'מציון המענה (יחושב כשבר עשרוני)';
$string['decimalformat'] = 'ספרות עשרוניות';
$string['editableunittext'] = 'משבצת הזנת תוכן';
$string['errornomultiplier'] = 'עלייך להזין מכפיל עבור יחידה זו.';
$string['errorrepeatedunit'] = 'לא ניתן להשתמש בשתי יחידות־מידה בעלות אותו השם.';
$string['geometric'] = 'גאומטרי';
$string['invalidnumber'] = 'יש להזין מספר תקין';
$string['invalidnumbernounit'] = 'יש להזין מספר תקין. אין לכלול יחידה־מידה במענה שלך';
$string['invalidnumericanswer'] = 'אחת מתשובותיך כללה מספר לא תקין.';
$string['invalidnumerictolerance'] = 'אחד מ"מרווחי הסבילות" (Tolerance) שהוזנו לא היה מספר תקין';
$string['leftexample'] = 'לצד שמאל ( לדוגמה: $1.00 או £1.00 )';
$string['manynumerical'] = 'שימוש ביחידות־מידה, נתון לבחירת התלמיד ( יחידות־מידה יומרו ליחידה 1 בחישוב הציון)';
$string['multiplier'] = 'מכפיל';
$string['nominal'] = 'נומינלי';
$string['noneditableunittext'] = 'יחידת־מידה שאינה ברת עריכה השייכת ליחידה מספר 1';
$string['nonvalidcharactersinnumber'] = 'אין להזין תווים אשר אינם ספרות, במספר';
$string['notenoughanswers'] = 'יש להזין תשובה אחת לפחות';
$string['nounitdisplay'] = 'ללא מתן ציון ליחידות־מידה';
$string['numericalmultiplier'] = 'אמת-מידה';
$string['numericalmultiplier_help'] = 'המכפיל הוא מקדם שבו תוכפל התשובה המספרית הנכונה.

ליחידה הראשונה (יחידה 1) יש מכפיל שערך בררת־מחדל שלו היא 1. לכן אם התשובה המספרית הנכונה היא 5500 ותגדיר את W כיחידה 1 שיש לה מכפיל שבררת המחדל שלו היא 1, התשובה תהיה 5500W.

אם תוסיף לזאת יחידה kW עם מכפיל 0.001, זה יוסיף תשובה נכונה של 5.5kW. כלומר התשובות 5500W ו-5.5kW תהינה נכונות.

יש לשים לב כי גם השגיאה המקובלת עדיין מוכפלת, כך ששגיאה מותרת של 100W תהיה שגיאה של 0.1kW.';
$string['oneunitshown'] = 'ציון ינתן לערך המספרי של התשובה בלבד, אליו תצורף תצוגה של יחידת־מידה 1';
$string['onlynumerical'] = 'אין שימוש ביחידות. רק הערך המספרי משמש לחישוב הציון';
$string['pleaseenterananswer'] = 'יש להזין תשובה.';
$string['pleaseenteranswerwithoutthousandssep'] = 'אנא הכנס תשובה ללא שימוש במפריד האלף ({$a}).';
$string['pluginname'] = 'מספרי';
$string['pluginname_help'] = 'מנקודת המבט של הסטודנט, שאלה מספרית נראית בדיוק כמו שאלה מסוג תשובה-קצרה. ההבדל נעוץ בכך שלתשובות המספריות מותרת שגיאה בגודל מוסכם. דבר זה מאפשר לתחום של שאלות להיות מוערכות כאילו היו שאלה אחת. למשל: אם התשובה היא 10 והשגיאה המוסכמת היא 2, אזי כל ערך בין 8 ו-12 יתקבל כנכון.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'הוספת שאלה מספרית';
$string['pluginnameediting'] = 'עריכת שאלה מספרית';
$string['pluginnamesummary'] = 'שאלה "מספרית" (Numerical) מחייבת את התלמיד להזין תשובה מספרית. ניתן לדרוש הזנה של יחידות־מידה לערכים המספריים של התשובה.
תשובת התלמיד מדורגת על ידי השוואה למבנים שונים של תשובות, המתבססים על מרווחיי־סבילות (סטייה מהערך המדוייק) שונים.';
$string['relative'] = 'יחסי';
$string['rightexample'] = 'לצד ימין ( לדוגמה: 1.00cm או 1.00km )';
$string['selectunit'] = 'בחירת יחידת־מידה אחת';
$string['selectunits'] = 'בחירת יחידות־מידה';
$string['studentunitanswer'] = 'הזנת יחידות־מידה לתשובה בעזרת:';
$string['tolerancetype'] = 'סוג מרווח סבילות';
$string['unit'] = 'יחידת־מידה';
$string['unitappliedpenalty'] = 'הציונים כוללים קנס בשיעור של {$a} לכל יחידת־מידה שגויה.';
$string['unitchoice'] = 'בחירה מרשימת רב־ברירה';
$string['unitedit'] = 'עריכת יחידת־מידה';
$string['unitgraded'] = 'יש לציין יחידת־מידה מתאימה (עבור ערך התשובה) אשר תשוכלל בחישוב הציון';
$string['unithandling'] = 'הגדרות יחידות־מידה';
$string['unitincorrect'] = 'לא צויינה יחידת־המידה הנכונה.';
$string['unitmandatory'] = 'הכרחי';
$string['unitmandatory_help'] = '* ינתן ציון לתגובה על-ידי שימוש בכתיבת יחידת־המידה
* קנס על יחידת־מידה יכלל בציון כאשר שדה יחידת־המידה ריק';
$string['unitnotselected'] = 'לא נבחרה אף יחידת־מידה';
$string['unitonerequired'] = 'יש לבחור לפחות יחידת־מידה אחת';
$string['unitoptional'] = 'יחידת־מידה זמינה';
$string['unitoptional_help'] = '* כאשר נבחרה יחידת־מידה, הציון ינתן בהתאם לאותה יחידת־מידה.
* כאשר יחידת־המידה כתובה בצורה לא תקינה או שאינה ידועה, התגובה תחשב כשגויה (לא ינתן ציון)';
$string['unitpenalty'] = 'הקנס לשגיאה ביחידת־מידה';
$string['unitpenalty_help'] = 'הקנס מיושם כאשר

* נבחר או מוזן שם יחידת־מידה שגוי בתשובה של יחידת־המידה
*כאשר שם יחידת־המידה מוזן לשדה התשובה המספרי (בו יש לציין ערך מספרי בלבד)';
$string['unitposition'] = 'מיקום יחידת־המידה';
$string['units'] = 'יחידות';
$string['unitselect'] = 'תפריט אפשרויות';
$string['unitx'] = 'יחידה {no}';
$string['xmustbenumeric'] = '{$a} חייב להיות מספר.';
$string['xmustnotbenumeric'] = '{$a} אינו יכול להיות מספר.';
$string['youmustenteramultiplierhere'] = 'יש להזין מכפיל';
