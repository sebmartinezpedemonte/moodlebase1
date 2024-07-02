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
 * Strings for component 'quizaccess_proctoring', language 'pt', version '4.1'.
 *
 * @package     quizaccess_proctoring
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['additionalsettingspagetitle'] = 'Todos os registos do supervisor';
$string['buttonlabel:deletebutton'] = 'Apagar imagens';
$string['camhtml'] = '<div class="camera"> <video width="100" id="video">Emissão de vídeo não disponível.</video></div> <canvas id="canvas" style="display:none;"> </canvas> <img style="display:none;" id="photo" alt="A captura de ecrã aparecerá nesta caixa."/>';
$string['coursenameheader'] = 'Nome da disciplina';
$string['dateverified'] = 'Data e hora';
$string['eprotroringreports'] = 'Relatório do Supervisor:&nbsp;';
$string['eprotroringreportsdesc'] = 'Neste relatório são mostradas todas as imagens dos alunos tiradas durante o teste. Pode validar a identidade comparando a respetiva foto de perfil com as fotos da webcam.';
$string['event:screenshotcreated'] = 'Uma nova captura de ecrã foi criada';
$string['event:screenshotupdated'] = 'Uma nova captura de ecrã foi atualizada';
$string['event:takescreenshot'] = 'Tirou uma captura de ecrã';
$string['execute_facematch_task'] = 'Executar a tarefa de reconhecimento de rosto';
$string['initiate_facematch_task'] = 'Iniciar a tarefa de reconhecimento de rosto';
$string['mainsettingspagebtn'] = 'Configurações do supervisor';
$string['modal:disabled'] = 'Deasativado';
$string['modal:displaysurface'] = 'Mostrar superfície:';
$string['modal:facevalidation'] = 'Rosto validado:';
$string['modal:pending'] = 'Pendente';
$string['modal:sharescreenbtn'] = 'partilhar ecrã';
$string['modal:sharescreenstate'] = 'Estado da partilha de ecrã:';
$string['modal:validateface'] = 'Validar o reconhecimento facial';
$string['name'] = 'Nome do aluno';
$string['notpermissionreport'] = 'Os relatórios do Supervisor estão desativados para si.';
$string['notrequired'] = 'não é obrigatório';
$string['openwebcam'] = 'Permitir webcam e partilha de ecrã para continuar';
$string['picturesreport'] = 'Ver o relatório da supervisão';
$string['picturesusedreport'] = 'Fotos tiradas durante o teste';
$string['pluginname'] = 'Supervisor';
$string['privacy:quizaccess_proctoring_logs'] = 'Registos do supervisor de acesso ao teste';
$string['proctoring:getcamshots'] = 'O supervisor obtém fotos da webcam';
$string['proctoring:sendcamshot'] = 'O supervisor envia fotos da webcam';
$string['proctoring:viewreport'] = 'O supervisor visualiza o relatório';
$string['proctoringheader'] = '<strong>Para continuar a tentativa, tem de ativar a sua webcam que tirará aleatoriamente algumas fotos suas durante a tentativa de resposta ao teste.</strong>';
$string['proctoringlabel'] = 'Concordo com o processo de validação.';
$string['proctoringrequired'] = 'Validação da identidade pela webcam';
$string['proctoringrequired_help'] = 'Se selecionar \'dar conhecimento antes de iniciar a tentativa\', os alunos só poderão iniciar uma tentativa se marcarem a caixa de seleção a confirmar que estão cientes da política da webcam.';
$string['proctoringrequiredoption'] = 'dar conhecimento antes de iniciar a tentativa';
$string['proctoringstatement'] = 'Este teste requer um processo de validação pela webcam e a partilha de ecrã.<br /> (Permita que o seu navegador aceda à sua webcam e a partilha de ecrã).';
$string['quizaccess_proctoring'] = 'Supervisor do acesso ao teste';
$string['quiznameheader'] = 'Nome do teste';
$string['reportidheader'] = 'ID do registo';
$string['screenhtml'] = '<span><video style="display: none" width="100" id="video-screen" autoplay></video></span><canvas id="canvas-screen" style="display:none;"></canvas><img id="photo-screen" alt="A imagem aparecerá nesta caixa." style="display:none;"/><span class="output-screen" style="display:none;"></span><span id="log-screen" style="display:none;"></span>';
$string['screensharemsg'] = '';
$string['screenshots'] = 'Capturas de ecrã';
$string['setting:aws_key'] = 'Chave AWS';
$string['setting:aws_keydesc'] = 'Chave AWS do serviço de reconhecimento facial.';
$string['setting:aws_secret'] = 'Senha AWS';
$string['setting:aws_secretdesc'] = 'Senha AWS do serviço de reconhecimento facial.';
$string['setting:bs_api'] = 'API do serviço BS';
$string['setting:bs_apidesc'] = 'Endpoint da API do serviço BS.';
$string['setting:bs_apitoken'] = 'Token BS';
$string['setting:bs_apitokendesc'] = 'Token de API para o serviço de reconhecimento BS.';
$string['setting:camshotdelay'] = 'Intervalo de tempo entre disparos (segundos)';
$string['setting:camshotdelay_desc'] = 'O valor inserido será o intervalo de tempo entre disparos (em segundos)';
$string['setting:camshotwidth'] = 'A largura da imagem obtida (píxeis)';
$string['setting:camshotwidth_desc'] = 'O valor inserido será a largura da imagem obtida. A altura imagem será dimensionada para este tamanho';
$string['setting:externalpage'] = 'Pagina externa';
$string['setting:facematch'] = 'Número de reconhecimentos de rosto por teste';
$string['setting:facematchdesc'] = 'Número de reconhecimentos de rosto por teste (-1 para verificar tudo).';
$string['setting:fc_method'] = 'Método de correspondência facial (BS/AWS)';
$string['setting:fc_methoddesc'] = 'Serviço de correspondência facial (BS/AWS)';
$string['setting:fcthreshold'] = 'Percentagem do limite de correspondência de rosto.';
$string['setting:fcthresholddesc'] = 'Percentagem do limite de correspondência de rosto.';
$string['setting:proctoringreconfigureproctoring'] = 'Configuração automática do supervisor';
$string['setting:proctoringreconfigureproctoring_desc'] = 'Se ativar esta opção, são tiradas fotos pela webcam aos utilizadores que acedem ao teste';
$string['settings:deleteallconfirm'] = 'Pretende realmente APAGAR TODAS AS IMAGENS DE TODOS OS TESTES?';
$string['settings:deleteallformlabel'] = 'Ao clicar no botão, serão apagadas todas as imagens de todos os testes.';
$string['settings:deleteallsuccess'] = 'Todas as imagens foram apagadas com sucesso.';
$string['settings:enablescreenshot'] = 'Ativar a captura de ecrã nos testes';
$string['settings:enablescreenshot_desc'] = 'Ativar a captura de ecrã nos testes.';
$string['settings:fcheckquizstart'] = 'Identificação facial validada no início do teste';
$string['settings:fcheckquizstart_desc'] = 'Identificação facial validada no início do teste [Se "sim", o utilizador deve validar a identificação do rosto para iniciar o teste].';
$string['settings:screenshareenable'] = 'Ativar partilha de ecrã';
$string['settings:screenshareenable_desc'] = 'Ativar partilha de ecrã [Se "sim" a captura de ecrã do utilizador será enviada com a imagem da webcam].';
$string['settings:updatesuccess'] = 'As configurações do supervisor foram atualizadas com sucesso.';
$string['settingscontroll:deleteall'] = 'Eliminar todos os dados do supervisor';
$string['settingscontroll:save'] = 'Guardar configurações';
$string['settingserror:formcancelled'] = 'Cancelou o formulário.';
$string['settingserror:imagedelay'] = 'O intervalo de tempo entre disparos tem de ser um número inteiro';
$string['settingserror:imagewidth'] = 'A largura da imagem tem de ser um número inteiro';
$string['status'] = 'Estado da validação';
$string['summarypagedesc'] = 'Este relatório mostra o resumo do relatório do supervisor da disciplina e dos testes. Pode apagar todos os dados relacionados com o teste e com a disciplina. Será apagado o ficheiro da imagem, assim como os registos.';
$string['timemodified'] = 'Última modificação';
$string['warning:cameraallowwarning'] = 'Permitir acesso à webcam';
$string['warninglabel'] = 'Avisos';
$string['webcampicture'] = 'Imagens captadas';
$string['youmustagree'] = 'Tem de concordar com a validação da sua identidade antes de continuar.';
