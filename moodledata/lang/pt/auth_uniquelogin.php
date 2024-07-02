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
 * Strings for component 'auth_uniquelogin', language 'pt', version '4.1'.
 *
 * @package     auth_uniquelogin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aplly_to_admin'] = 'Aplicar aos Administradores';
$string['aplly_to_teacher'] = 'Aplicar aos Professores';
$string['auth_uniquelogerror'] = 'Já existe uma sessão ativa. Não é possível iniciar outra!';
$string['auth_uniquelogindescription'] = 'Este módulo garante que cada utilizador só tem uma sessão ativa.<br /><br />Cada vez que um utilizador inicia sessão com sucesso, todas as outras sessões pertencentes a este utilizador serão terminadas.<br><br /><div style="font-weight: bold;">Nota: Para que este módulo funcione, todas as sessões têm de ser armazenadas na base de dados. Esta configuração é definida em <a href="settings.php?section=sessionhandling">Sessões</a>.</div><br />';
$string['auth_uniquelogintitle'] = 'Sessão Única';
$string['configaplly_to_admin'] = 'Aplicar a restrição de Sessão Única quando o utilizador tem o papel de Administrador do sistema.';
$string['configaplly_to_teacher'] = 'Aplicar a restrição de Sessão Única quando o utilizador tem o papel de Professor numa disciplina Moodle.';
$string['pluginname'] = 'Sessão Única';
