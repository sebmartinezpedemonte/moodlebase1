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
 * Strings for component 'condition', language 'he', version '4.1'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'הוספת {no} התניות פעילות לטופס';
$string['addgrades'] = 'הוספת {no} התניות ציונים לטופס';
$string['adduserfields'] = 'הוסף {no} תנאי שדות משתמש לטופס';
$string['availabilityconditions'] = 'הגבלת גישה';
$string['availablefrom'] = 'אפשר גישה מ-';
$string['availablefrom_help'] = 'Access from/to dates determine when students can access the activity via a link on the course page.

The difference between access from/to dates and availability settings for the activity is that outside the set dates, access from/to prevents access completely, while availability allows students to view the activity description.';
$string['availableuntil'] = 'אפשר גישה עד';
$string['badavailabledates'] = 'התאריכים אינם תקינים, אם תגדיר את התאריכים הגדרת תאריך \'אפשר גישה מ-\' צריכה להיות לפני הגדרת ה\'עד\' תאריך';
$string['badgradelimits'] = 'אם תבחר בגבול ציון עליון ותחתון, הגבול העליון חייב להיות גדול מהגבול התחתון.';
$string['completion_complete'] = 'חייב להיות מסומן כהושלם';
$string['completion_fail'] = 'חייב להשלים עם ציון נכשל';
$string['completion_incomplete'] = 'חייב לא להיות מסומן כ\'הושלם\'';
$string['completion_pass'] = 'חייב להשלים עם ציון עובר';
$string['completioncondition'] = 'תנאי גישה לפעילות';
$string['completioncondition_help'] = 'הגדרות אלו קובעות תנאי השלמת פעילות שחייבים להתקיים  בכדי לאפשר גישה ליחידת לימוד זו.יש לשים לב כי מעקב ההשלמה מוגדר קודם לכן לפני שמוגדרים תנאי השלמת הפעילות.
ניתן גם להגדיר תנאי השלמת פעילות  מרובים ועל תנאים אלו להתקיים בכדי לאפשר גישה זו.';
$string['completionconditionsection'] = 'תנאי השלמת הפעילות';
$string['completionconditionsection_help'] = 'הגדרות אלו קובעות תנאי השלמת פעילות שחייבים להתקיים  בכדי לאפשר גישה ליחידת לימוד זו.יש לשים לב כי מעקב ההשלמה מוגדר קודם לכן לפני שמוגדרים תנאי השלמת הפעילות.
ניתן גם להגדיר תנאי השלמת פעילות  מרובים ועל תנאים אלו להתקיים בכדי לאפשר גישה זו.';
$string['configenableavailability'] = 'כאשר מאופשר,ניתן להגדיר תנאי הגבלת גישה (מבוסס על תאריך , ציון או השלמה) שקובעים האם פעילות או משאב ניתנים לגישה.';
$string['contains'] = 'מכיל';
$string['doesnotcontain'] = 'לא מכיל';
$string['enableavailability'] = 'שימוש במנגנון "תנאי גישה"';
$string['endswith'] = 'נגמר ב-';
$string['fielddeclaredmultipletimes'] = 'אינך יכול להשתמש בתנאים על אותו שדה יותר מפעם אחת לפעילות.';
$string['grade_atleast'] = 'חייב להיות לפחות';
$string['grade_upto'] = 'ופחות מ-';
$string['gradecondition'] = 'תנאי ציון';
$string['gradecondition_help'] = 'ההגדרה קובעת תנאי ציון שחייב להיות תואם בכדי לגשת לכל פעילות.

תנאי ציון רבים יכולים להיות מוגדרים כאן כפי שתרצה. אם תגדיר כמה תנאים, הפעילות תאפשר גישה אך ורק אם כל תנאי הציון מותאמים.';
$string['gradeconditionsection'] = 'תנאי ציון';
$string['gradeconditionsection_help'] = 'הגדרות אלו קובעות תנאי ציון שחייבים להתקיים  בכדי לאפשר גישה ליחידת לימוד זו.
ניתן גם להגדיר תנאי ציון מרובים ועל תנאים אלו להתקיים בכדי לאפשר גישה זו.';
$string['gradeitembutnolimits'] = 'חובה להכניס גבול תחתון, גבול תחתון או שניהם.';
$string['gradelimitsbutnoitem'] = 'חובה לבחור פריט ציון';
$string['gradesmustbenumeric'] = 'הציון המירבי והמזערי חייבים להיות מספריים או ריקים.';
$string['groupingnoaccess'] = 'אינך שייך לאף קבוצה אשר לה גישה ליחידה זו.';
$string['isempty'] = 'הינו ריק';
$string['isequalto'] = 'שווה ל-';
$string['isnotempty'] = 'אינו ריק';
$string['none'] = '(אף אחד)';
$string['notavailableyet'] = 'לא זמין עדיין';
$string['requires_completion_0'] = 'לא זמין אלא אם כן הפעילות <strong>{$a}</strong> לא הושלמה';
$string['requires_completion_1'] = 'לא זמין עד שהפעילות <strong>{$a}</strong> תסומן כהושלמה';
$string['requires_completion_2'] = 'לא זמין עד שהפעילות  <strong>{$a}</strong> הושלמה ועברה';
$string['requires_completion_3'] = 'לא זמין עד שהפעילות  <strong>{$a}</strong> הושלמה ונכשלה';
$string['requires_date'] = 'זמין מ {$a}.';
$string['requires_date_before'] = 'זמין עד {$a}.';
$string['requires_date_both'] = 'זמין מ {$a->from} עד {$a->until}.';
$string['requires_date_both_single_day'] = 'זמין ב {$a}.';
$string['requires_grade_any'] = 'לא זמין עד אשר יש לך ציון ב-<strong>{$a}</strong>.';
$string['requires_grade_max'] = 'לא זמין אלא אם כן יש לך ציון מתאים ב <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'לא זמין עד לאחר שתשיג ציון שנדרש ב- <strong>{$a}</strong>.';
$string['requires_grade_range'] = 'לא זמין אלא אם כן תקבל ציון מיוחד ב-<strong>{$a}</strong>.';
$string['requires_user_field_contains'] = 'אינו זמין עד אשר <strong>{$a->field}</strong>  שלך מכיל <strong>{$a->value}</strong>.';
$string['requires_user_field_doesnotcontain'] = 'אינו זמין אם <strong>{$a->field}</strong> שלך מכיל <strong>{$a->value}</strong>.';
$string['requires_user_field_endswith'] = 'אינו זמין עד אשר <strong>{$a->field}</strong> מסתיים ב- <strong>{$a->value}</strong>.';
$string['requires_user_field_isempty'] = 'אינו זמין אלא אם <strong>{$a->field}</strong> שלך ריק.';
$string['requires_user_field_isequalto'] = 'אינו זמין אלא אם <strong>{$a->field}</strong> שלך שווה ל- <strong>{$a->value}</strong>.';
$string['requires_user_field_isnotempty'] = 'אינו זמין אם <strong>{$a->field}</strong> שלך ריק.';
$string['requires_user_field_startswith'] = 'אינו זמין אלא אם <strong>{$a->field}</strong> שלך מתחיל ב-<strong>{$a->value}</strong>.';
$string['showavailability'] = 'כל עוד הגישה אינה מותרת';
$string['showavailability_hide'] = 'הסתרת הפעילות לגמרי בקורס ובגיליון הציונים';
$string['showavailability_show'] = 'הצגת הפעילות באפור (לא זמינה), עם מידע על הגבלת גישה';
$string['showavailabilitysection'] = 'לפני שניתנת גישה ליחידה זו';
$string['showavailabilitysection_hide'] = 'הסתרת כל יחידת הלימוד';
$string['showavailabilitysection_show'] = 'הצגת יחידת-הלימוד באפור (לא זמינה) עם מידע על הגבלת גישה';
$string['startswith'] = 'מתחיל ב-';
$string['userfield'] = 'שדה משתמש';
$string['userfield_help'] = 'באפשרותך להגביל גישה על בסיס כל שדה מפרופיל המשתמש.';
$string['userrestriction_hidden'] = 'הוגבל (מוסתר לחלוטין, אין הודעות): {$a}';
$string['userrestriction_visible'] = 'הוגבל: {$a}';
