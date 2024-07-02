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
 * Strings for component 'profilefield_conditional', language 'ru', version '4.1'.
 *
 * @package     profilefield_conditional
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apply'] = 'Ок';
$string['conditionalhelp_help'] = 'Создайте меню, вводя по одному пункту с новой строки. После этого вы сможете настроить, какие дополнительные поля должны отображаться при выборе того или иного пункта меню.';
$string['configurecondition'] = 'Выбор полей';
$string['hidden'] = 'Скрытое';
$string['hiddeninitially'] = 'Скрывать скрытые?';
$string['hiddeninitially_help'] = '* Да - все скрытые поля не видны. Список полей обновляется только после выбора пункта меню.
* Нет - изначально отображаются все поля. После выбора пункта меню «лишние» поля будут скрыты.';
$string['notice'] = 'При настройке нескольких зависимых полей не допускайте ситуаций, когда одно и тоже поле в одном меню будет отмечено скрытым, а в другом - обязательным. Это может привести к ошибке при отправке формы.';
$string['optionconditionmismatch'] = 'Вы внесли правки в параметры меню. Пожалуйста, проверьте корректность изменений.';
$string['pluginname'] = 'Зависимые поля';
$string['required'] = 'Обязательное';
$string['requiredbycondition1'] = 'Это поле не может быть пустым, если значение {$a->field1} равно {$a->value1}';
$string['requiredbycondition2'] = 'Пожалуйста, заполните поле {$a->field2}. Его нельзя оставить пустым, потому что оно зависимо от выбранного ранее значения.';
