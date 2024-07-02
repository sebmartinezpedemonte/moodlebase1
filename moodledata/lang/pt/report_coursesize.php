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
 * Strings for component 'report_coursesize', language 'pt', version '4.1'.
 *
 * @package     report_coursesize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = 'Todas as disciplinas';
$string['backupsize'] = 'Tamanho da cópia de segurança';
$string['cachedef_topuserdata'] = 'Informações em cache sobre os utilizadores com a maior quantidade total de dados';
$string['calcmethod'] = 'Atualizar relatório principal';
$string['calcmethodcron'] = 'Tarefa agendada';
$string['calcmethodhelp'] = 'Se calculado por tarefa agendada, o relatório será atualizado no horário agendado e armazenará em cache os resultados para posterior visualização. É recomendado em vez de cálculos instantâneos porque pode ser uma consulta intensiva/lenta para ser executada.';
$string['calcmethodlive'] = 'Ao carregar página';
$string['catsystembackupuse'] = 'Ocupado por cópias de segurança do sistema e da categoria: {$a}.';
$string['catsystemuse'] = 'Ocupado pelo sistema e pela categoria da disciplina sem contabilizar os utilizadores e as disciplinas: {$a}.';
$string['coursebackupbytes'] = '{$a->bytes} bytes usados por cópias de segurança da disciplina \'{$a->shortname}\'';
$string['coursebytes'] = '{$a->bytes} bytes usados pela disciplina \'{$a->shortname}\'';
$string['coursereport'] = 'Resumo por tipos de módulos - AVISO: pode ser diferente da listagem principal da disciplina e provavelmente é mais preciso.';
$string['coursesize'] = 'Tamanho da disciplina';
$string['coursesize:view'] = 'Ver relatório do tamanho da disciplina';
$string['coursesize_desc'] = '<p>Este relatório fornece apenas valores aproximados. Se um ficheiro for usado várias vezes numa disciplina ou em várias disciplinas, o relatório indicará cada instância, embora o Moodle armazene apenas uma versão física em disco.</p>';
$string['coursesummary'] = '(ver estatísticas)';
$string['diskusage'] = 'Total';
$string['emptycourseshidden'] = 'As disciplinas que não usam armazenamento de ficheiros não estão listadas neste relatório.';
$string['exportcsv'] = 'Exportar CSV';
$string['filearea'] = 'Área de ficheiros';
$string['lastupdate'] = '(Última atualização: {$a})';
$string['lastupdatenever'] = '(A aguardar a tarefa agendada para gerar estatísticas)';
$string['nouserfiles'] = 'Nenhum ficheiro de utilizador listado.';
$string['numberofusers'] = 'Número de utilizadores';
$string['numberofusershelp'] = 'O relatório mostrará o top de utilizadores com este número de utilizadores .';
$string['pluginname'] = 'Tamanho da disciplina';
$string['privacy:metadata'] = 'O módulo Tamanho da disciplina não armazena quaisquer dados pessoais.';
$string['sharedusage'] = 'Uso partilhado';
$string['sharedusagecourse'] = 'Aproximadamente {$a} são partilhados com outras disciplinas.';
$string['sitefilesusage'] = 'Relatório do espaço ocupado por ficheiros';
$string['sizepermitted'] = '(Uso permitido {$a} MB)';
$string['totalsitedata'] = 'Total de dados do site: {$a}';
$string['userstopnum'] = 'Utilizadores (top {$a})';
