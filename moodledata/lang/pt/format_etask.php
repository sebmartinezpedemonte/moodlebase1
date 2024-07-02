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
 * Strings for component 'format_etask', language 'pt', version '4.1'.
 *
 * @package     format_etask
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsections'] = 'Adicionar tópico';
$string['choose'] = 'Escolha';
$string['currentsection'] = 'Este tópico';
$string['deletesection'] = 'Apagar tópico';
$string['editsection'] = 'Editar tópico';
$string['editsectionname'] = 'Editar nome do tópico';
$string['failedlabel'] = 'Rótulo de Reprovado';
$string['failedlabel_help'] = 'Esta configuração substitui o texto predefinido do rótulo Reprovado.';
$string['gradeitemcompleted'] = 'Concluída';
$string['gradeitemfailed'] = 'Reprovado';
$string['gradeitempassed'] = 'Aprovado';
$string['gradeitemprogressbars'] = 'Barras de progresso dos itens de avaliação';
$string['gradeitemprogressbars_help'] = 'Esta configuração determina se o aluno deve ver, ou não, as barras de progresso dos itens de avaliação na pauta.';
$string['gradeitemprogressbars_no'] = 'Ocultar na pauta as barras de progresso dos itens de avaliação do aluno';
$string['gradeitemprogressbars_yes'] = 'Mostrar na pauta as barras de progresso dos itens de avaliação do aluno';
$string['gradeitemssorting'] = 'Ordem dos itens de avaliação';
$string['gradeitemssorting_help'] = 'Esta configuração determina se os itens de nota na pauta são classificados pelo mais recente, mais antigo ou conforme estão na disciplina.';
$string['gradeitemssorting_inherit'] = 'Tal como estão ordenados na disciplina';
$string['gradeitemssorting_latest'] = 'Os mais recentes em primeiro';
$string['gradeitemssorting_oldest'] = 'Os mais antigos em primeiro';
$string['gradepasschanged'] = 'A nota de aprovação do item de avaliação \'<strong>{$a->itemname}</strong>\' foi alterada com sucesso para <strong>{$a->gradepass}</strong>.';
$string['gradepasserrdatabase'] = 'Não foi possível alterar a nota de aprovação do item de avaliação \'<strong>{$a}</strong>\'. Por favor, tente novamente mais tarde ou entre em contacto com o programador do módulo.';
$string['gradepasserrgrademax'] = 'A nota de aprovação do item de avaliação \'<strong>{$a->itemname}</strong>\' não pode ser alterada para <strong>{$a->gradepass}</strong>. O valor é maior do que a nota máxima.';
$string['gradepasserrgrademin'] = 'A nota de aprovação do item de avaliação \'<strong>{$a->itemname}</strong>\' não pode ser alterada para <strong>{$a->gradepass}</strong>. O valor é menor do que a nota mínima.';
$string['gradepasserrnumeric'] = 'A nota de aprovação do item de avaliação \'<strong>{$a->itemname}</strong>\' não pode ser alterada para <strong>{$a->gradepass}</strong>. Tem de indicar um valor numérico.';
$string['gradepassremoved'] = 'A nota de aprovação do item de avaliação \'<strong>{$a->itemname}</strong>\' foi apagada com sucesso.';
$string['helpabout'] = 'O formato Tópicos eTask estende o formato Tópicos e proporciona um caminho mais curto para gerir atividades e facilita a sua fácil avaliação. Além da sua clareza, o formato cria um ambiente motivador e competitivo que apoia uma experiência educacional positiva.';
$string['helpimprovebody'] = 'Ajude-nos a melhorar este módulo! Dê feedback, reporte problemas ou preencha os questionários disponíveis na <a href="https://moodle.org/plugins/format_etask" target="_blank">página do módulo</a>.';
$string['helpimprovehead'] = 'Melhoramentos do módulo';
$string['hidefromothers'] = 'Ocultar tópico';
$string['max'] = 'máx.';
$string['newsectionname'] = 'Novo nome para o tópico {$a}';
$string['nogradeitemsfound'] = 'Não foi encontrado qualquer item de avaliação.';
$string['nostudentsfound'] = 'Nenhum aluno para avaliar.';
$string['page-course-view-topics'] = 'Qualquer página principal da disciplina no formato Tópicos eTask';
$string['page-course-view-topics-x'] = 'Qualquer página da disciplina no formato Tópicos eTask';
$string['passedlabel'] = 'Rótulo de Aprovado';
$string['passedlabel_help'] = 'Esta configuração substitui o texto predefinido do rótulo Aprovado.';
$string['placement'] = 'Posição';
$string['placement_above'] = 'Pauta acima dos tópicos da disciplina';
$string['placement_below'] = 'Pauta abaixo dos tópicos da disciplina';
$string['placement_help'] = 'Esta configuração determina o posicionamento da pauta: acima ou abaixo dos tópicos da disciplina.';
$string['pluginname'] = 'Formato Tópicos eTask';
$string['privacy:metadata'] = 'O módulo Formato Tópicos eTask não armazena quaisquer dados pessoais.';
$string['progresspercentage'] = '{$a} % <span class="text-black-50">dos alunos</span>';
$string['registeredduedatemodules'] = 'Registo da data de fim dos módulos';
$string['registeredduedatemodules_help'] = 'Especifica em qual campo da base de dados dos módulo utilizados é armazenado o valor da data de fecho.';
$string['section0name'] = 'Geral';
$string['sectionname'] = 'Tópico';
$string['showfromothers'] = 'Mostrar tópico';
$string['showmore'] = 'Mostrar mais...';
$string['studentprivacy'] = 'Privacidade do aluno';
$string['studentprivacy_help'] = 'Esta configuração determina se o aluno pode ver, ou não, as notas de outros participantes na pauta.';
$string['studentprivacy_no'] = 'O aluno pode ver as notas dos outros na pauta';
$string['studentprivacy_yes'] = 'O aluno apenas pode ver as suas notas na pauta';
$string['studentsperpage'] = 'Alunos por página';
$string['studentsperpage_help'] = 'Esta configuração determina o número de alunos por página da pauta.';
$string['timemodified'] = 'Última modificação: {$a}';
