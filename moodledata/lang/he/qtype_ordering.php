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
 * Strings for component 'qtype_ordering', language 'he', version '4.1'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'מיקום מוחלט';
$string['addmultipleanswers'] = 'הוספת {$a} פריטים נוספים';
$string['addsingleanswer'] = 'הוספת פריט אחד';
$string['allornothing'] = 'הכל או כלום';
$string['answer'] = 'שם הפריט';
$string['answerheader'] = 'פריט נגרר {no}';
$string['correctorder'] = 'סדר הפריטים הנכון הוא:';
$string['defaultanswerformat'] = 'ברירת המחדל של מבנה התשובה';
$string['defaultquestionname'] = 'יש לגרור את הפריטים ולהציג אותם בסדר הנכון';
$string['duplicatesnotallowed'] = 'שימוש בפריט פעם נוספת, אסור. הפריט "{$a->text}" כבר בשימוש ב: {$a->item}.';
$string['editingordering'] = 'עריכת שאלת סידור פריטים בגרירה';
$string['gradedetails'] = 'פרטי ניקוד';
$string['gradingtype'] = 'אפשרויות הניקוד';
$string['gradingtype_help'] = 'בחר את שיטת הניקוד המועדפת.

**הכל או כלום** : אם כל הפריטים נמצאים במיקום הנכון, יינתן ציון מלא. אחרת, הציון הוא אפס.

**מיקום מוחלט** : פריט נחשב לנכון אם הוא נמצא באותו מיקום כמו בתשובה הנכונה. פריט שלא במקומו, גורר אחריו לפחות פריט נוסף שלא במקומו. והניקוד יורד על שניהם.

**יחסי למיקום הנכון** : פריט נחשב לנכון אם הוא נמצא באותו מיקום כמו בתשובה הנכונה.
הניקוד יורד לפי המרחק בין המיקום בתשובה למיקום הנכון. ככל שהמיקום רחוק יותר כך הניקוד נמוך יותר.

**יחסי לפריט שנמצא אחריו (למעט הפריט האחרון)** : הבדיקה נעשית מול הפריט שנמצא אחריו בסדר התקין. אם הפריט אחריו שגוי, לא יתקבל ציון. הפריט האחרון לא נבדק כי אין אחריו פריט.

**יחסי לפריט שנמצא אחריו (כולל הפריט האחרון)** : הבדיקה נעשית מול הפריט שנמצא אחריו בסדר התקין. אם הפריט אחריו שגוי, לא יתקבל ציון.

**יחסי לפריטים שלפניו ואחרי** : הפריט נבדק מול פריט אחד לפניו ואחד אחריו, אם הם מתאימים, יקבל את מלוא הניקוד, אם רק אחד מהם נכון, יקבל ציון חלקי, אם הוא נמצא במנותק מהפריטים שצריכים להיות לפניו ואחריו לא יקבל ניקוד.

**יחסי לכל הפריטים שלפניו ואחריו** : פריט נחשב לנכון אם מקדימים אותו כל אותם פריטים כמו בתשובה הנכונה, ואחריו כל אותם פריטים כמו בתשובה הנכונה. סדר הפריטים לא משנה. אם לא כל הפריטים הנכונים נמצאים (לפניו או אחריו) ייתנן ניקוד חלקי (אין חשיבות לסדר).

**סדר הפריטים הנכון הארוך ביותר** : סדר הפריטים בניכוי הטעויות. מורידים את הטעויות ובודקים כמה פריטים עומדים בתנאי השאלה. לא חייב להיות רצף.

**רצף הפריטים הארוך ביותר** : הרצף הארוך ביותר (בניכוי הטעויות) מקבל ניקוד, לא משנה היכן מתחיל. פריטים שגויים באמצע יפסלו אך לא ישבשו את הרצף.';
$string['highlightresponse'] = 'הדגשת תגובה כנכונה או שגויה';
$string['horizontal'] = 'אופקי';
$string['itemplural'] = 'פריטים';
$string['itemsingular'] = 'פריט';
$string['layouttype'] = 'פריסת הפריטים';
$string['layouttype_help'] = 'בחר האם להציג את הפריטים במאונך או במאוזן';
$string['longestcontiguoussubset'] = 'רצף הפריטים הארוך ביותר';
$string['longestorderedsubset'] = 'סדר הפריטים הנכון הארוך ביותר';
$string['noscore'] = 'ללא ניקוד';
$string['notenoughanswers'] = 'שאלת סידור פריטים בגרירה דורשת לפחות  {$a} פריטים.';
$string['numberingstyle'] = 'מיספור';
$string['numberingstyle_help'] = 'בחרו את שיטת המיספור לשאלת סידור פריטים בגרירה';
$string['numberingstylenone'] = 'ללא מיספור';
$string['pluginname'] = 'סידור פריטים בגרירה';
$string['pluginname_help'] = 'מספר פריטים מוצגים בסדר מעורבל.
יש לגרור את הפריטים לסדר הנכון.';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'הוספת שאלת סידור פריטים בגרירה';
$string['pluginnameediting'] = 'עריכת שאלת סידור פריטים בגרירה';
$string['pluginnamesummary'] = 'תצוגת הפריטים בסדר הנכון';
$string['positionx'] = 'מיקום {$a}';
$string['regradeissuenumitemschanged'] = 'מספר הפריטים הנגררים השתנה';
$string['relativeallpreviousandnext'] = 'יחסי לכל הפריטים שלפניו ואחריו.';
$string['relativenextexcludelast'] = 'יחסי לפריט שנמצא אחריו (למעט הפריט האחרון)';
$string['relativenextincludelast'] = 'יחסי לפריט שנמצא אחריו (כולל הפריט האחרון)';
$string['relativeonepreviousandnext'] = 'יחסי לפריטים שנמצאים לפניו ואחריו';
$string['relativetocorrect'] = 'יחסי למיקום הנכון';
$string['removeeditor'] = 'הסרת עורך תוכן מעוצב';
$string['removeitem'] = 'הסר פריטים נגררים';
$string['scoredetails'] = 'להלן הניקוד עבור כל פריט בתשובה זו:';
$string['selectall'] = 'בחירת כל הפריטים';
$string['selectcontiguous'] = 'בחירת פריטים עוקבים';
$string['selectcount'] = 'מספר הפריטים שיוצגו';
$string['selectcount_help'] = 'מספר הפריטים שיוצגו בשאלה';
$string['selectrandom'] = 'בחירת פריטים אקראיים';
$string['selecttype'] = 'דרך בחירת הפריטים';
$string['selecttype_help'] = 'בחרו האם להציג את כל הפריטים או חלק מהם.';
$string['showgrading'] = 'הצגת הציון';
$string['showgrading_help'] = 'בחרו האם להציג בפני הסטודנט את פירוט חישוב הציון בשאלה.';
$string['vertical'] = 'אנכי';
$string['yougotnincorrect'] = 'ישנם {$a->numincorrect} {$a->numincorrectplural} שגויים.';
$string['yougotnpartial'] = 'ישנם {$a->numpartial} {$a->numpartialplural} נכונים באופן חלקי.';
$string['yougotnright'] = 'ישנם {$a->numright} {$a->numrightplural} נכונים.';
