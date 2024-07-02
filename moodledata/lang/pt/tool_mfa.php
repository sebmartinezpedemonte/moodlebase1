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
 * Strings for component 'tool_mfa', language 'pt', version '4.1'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Peso alcançado';
$string['alltime'] = 'Tempo todo';
$string['areyousure'] = 'Tem a certeza de que pretende revogar o fator?';
$string['combination'] = 'Combinação';
$string['connector'] = 'E';
$string['created'] = 'Criado';
$string['createdfromip'] = 'Criado a partir do IP';
$string['debugmode:currentweight'] = 'Peso atual: {$a}';
$string['debugmode:heading'] = 'Modo de depuração';
$string['devicename'] = 'Dispositivo';
$string['email:subject'] = 'Não foi possível autenticar-se em {$a}';
$string['enablefactor'] = 'Ativar fator';
$string['error:actionnotfound'] = 'Ação \'{$a}\' não suportada';
$string['error:directaccess'] = 'Esta página não pode ser acedida diretamente';
$string['error:factornotenabled'] = 'Fator MFA \'{$a}\' não ativado';
$string['error:factornotfound'] = 'Fator MFA \'{$a}\' não encontrado';
$string['error:home'] = 'Clique aqui para voltar para o início.';
$string['error:notenoughfactors'] = 'Falha na autenticação';
$string['error:reauth'] = 'Não foi possível confirmar suficientemente a sua identidade para atender à política de segurança de autenticação deste site.<br>Pode ser devido a: <br> 1) Etapas bloqueadas - aguarde alguns minutos e tente novamente.<br> 2) Etapas falhadas - verifique novamente os detalhes de cada etapa.<br> 3) Etapas ignoradas - atualize esta página ou tente autenticar-se novamente.';
$string['error:revoke'] = 'Não é possível revogar o fator';
$string['error:setupfactor'] = 'Não é possível configurar o fator';
$string['error:support'] = 'Se continua a não conseguir autenticar-se ou acha que está a ver esta mensagem por engano, envie um e-mail para o seguinte endereço para suporte:';
$string['error:wrongfactorid'] = 'O ID do fator \'{$a}\' está incorreto';
$string['event:failfactor'] = 'Ocorreu um erro na autenticação MFA devido a uma falha num fator.';
$string['event:faillockout'] = 'Ocorreu um erro na autenticação MFA devido a excesso de tentativas.';
$string['event:failnotenoughfactors'] = 'Ocorreu um erro na autenticação MFA devido a número insuficiente de fatores validados.';
$string['event:userdeletedfactor'] = 'Fator apagado';
$string['event:userfailedmfa'] = 'Erro na autenticação MFA do utilizador';
$string['event:userpassedmfa'] = 'Verificação bem-sucedida';
$string['event:userrevokedfactor'] = 'Revogação do fator';
$string['event:usersetupfactor'] = 'Configuração do fator';
$string['factor'] = 'Fator';
$string['factorlocked'] = 'O fator \'{$a}\' foi bloqueado devido a tentativas falhadas excedidas.';
$string['factorreport'] = 'Relatório de todos os fatores';
$string['factorreset'] = 'O fator MFA \'{$a->factor}\' foi reiniciado por um administrador do site. Talvez necessite de configurar esse fator novamente. {$a->url}';
$string['factorresetall'] = 'Todos os seus fatores MFA foram reiniciados por um administrador do site. Talvez necessite de configurar estes fatores novamente. {$a}';
$string['factorrevoked'] = 'O fator \'{$a}\' foi revogado com sucesso.';
$string['factorsetup'] = 'O fator \'{$a}\' foi configurado com sucesso.';
$string['fallback'] = 'Fator de reserva';
$string['fallback_info'] = 'Este fator é um substituto se nenhum outro fator estiver configurado. Este fator falhará sempre.';
$string['gotourl'] = 'Vá para o seu URL original:';
$string['guidance'] = 'Guia do utilizador da MFA';
$string['inputrequired'] = 'Entrada de utilizador';
$string['ipatcreation'] = 'Endereço IP quando o fator foi criado';
$string['lastverified'] = 'Última verificação';
$string['lockedusersforallfactors'] = 'Utilizadores bloqueados: Todos os fatores';
$string['lockedusersforfactor'] = 'Utilizadores bloqueados: {$a}';
$string['lockoutnotification'] = 'Ainda restam {$a} tentativas de verificação para este fator.';
$string['lookbackperiod'] = 'A mostrar informações da MFA desde {$a} em diante.';
$string['mfa'] = 'MFA - Autenticação Multifator';
$string['mfa:mfaaccess'] = 'Interagir com a MFA';
$string['mfareports'] = 'Relatórios da MFA';
$string['mfasettings'] = 'Gerir autenticação multifator (MFA)';
$string['na'] = 'n/d';
$string['needhelp'] = 'Precisa de ajuda?';
$string['nologinusers'] = 'Não autenticado';
$string['nonauthusers'] = 'MFA pendente';
$string['overall'] = 'Geral';
$string['pending'] = 'Pendente';
$string['performbulk'] = 'Ação em massa';
$string['pluginname'] = 'Autenticação multifator';
$string['preferences:activefactors'] = 'Fatores ativos';
$string['preferences:availablefactors'] = 'Fatores disponíveis';
$string['preferences:header'] = 'Preferências de autenticação multifator';
$string['preferenceslink'] = 'Clique aqui para aceder às preferências do utilizador.';
$string['privacy:metadata:tool_mfa'] = 'Dados com fatores da MFA configurados';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP a partir do qual o fator foi configurado';
$string['privacy:metadata:tool_mfa:factor'] = 'Tipo de Fator';
$string['privacy:metadata:tool_mfa:id'] = 'ID do registo';
$string['privacy:metadata:tool_mfa:label'] = 'etiqueta para a instância do fator, por exemplo, dispositivo ou e-mail';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Data/hora em que o utilizador foi verificado pela última vez com este fator';
$string['privacy:metadata:tool_mfa:secret'] = 'Quaisquer dados secretos para o fator';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Data/hora em que a instância do fator foi configurada';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Última modificação do fator';
$string['privacy:metadata:tool_mfa:userid'] = 'O ID do utilizador ao qual este fator pertence';
$string['privacy:metadata:tool_mfa_auth'] = 'Esta tabela da base de dados armazena a última vez que uma autenticação MFA bem-sucedida foi registrada para um ID de utilizador.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'A data/hora em que o utilizador foi autenticado pela última vez com';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'O utilizador ao qual este carimbo de data/hora está associado.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Esta tabela da base de dados armazena os códigos secretos temporários para autenticação do utilizador.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'O fator ao qual este código secreto está associado.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'O código de segurança secreto.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'O ID da sessão ao qual este código segredo está associado.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'O utilizador ao qual este código de segurança está associado.';
$string['redirecterrordetected'] = 'Detetado redirecionamento não suportado, execução do script terminada. Ocorreu um erro de redirecionamento entre a Autenticação multifator (MFA) e {$a}.';
$string['resetconfirm'] = 'Reiniciar fator do utilizador';
$string['resetfactor'] = 'Reiniciar fatores de autenticação';
$string['resetfactorconfirm'] = 'Tem a certeza de que pretende reiniciar este fator para {$a}?';
$string['resetfactorplaceholder'] = 'Nome de utilizador ou e-mail';
$string['resetsuccess'] = 'O fator \'{$a->factor}\' foi reiniciado com sucesso para o utilizador \'{$a->username}\'.';
$string['resetsuccessbulk'] = 'O fator \'{$a}\' foi reiniciado com sucesso para os utilizadores indicados.';
$string['resetuser'] = 'Utilizador:';
$string['revoke'] = 'Revogar';
$string['revokefactor'] = 'Revogar fator';
$string['selectfactor'] = 'Selecione o fator para reiniciar:';
$string['selectperiod'] = 'Selecione um período de retrospetiva para o relatório:';
$string['settings:combinations'] = 'Resumo das boas condições para autenticação';
$string['settings:debugmode'] = 'Ativar modo de depuração';
$string['settings:debugmode_help'] = 'O modo de depuração mostrará um pequeno banner de notificação nas páginas de administração da MFA, bem como na página de preferências do utilizador com informações sobre os fatores atualmente ativos.';
$string['settings:duration'] = 'Duração da validade do código de segurança';
$string['settings:duration_help'] = 'O período em que os código de segurança gerados são válidos.';
$string['settings:enabled'] = 'MFA ativada';
$string['settings:enabled_help'] = '&nbsp;';
$string['settings:enablefactor'] = 'Ativar fator';
$string['settings:enablefactor_help'] = 'Se ativar esta opção, será possível usar o fator para autenticação MFA.';
$string['settings:general'] = 'Configurações gerais da MFA';
$string['settings:guidancecheck'] = 'Usar página de orientações';
$string['settings:guidancecheck_help'] = 'Adicione uma hiperligação para a página de orientações nas páginas de autenticação MFA e na página de preferências da MFA.';
$string['settings:guidancefiles'] = 'Ficheiros da página de orientações';
$string['settings:guidancefiles_help'] = 'Adicione aqui quaisquer ficheiros para usar na página de orientações e incorpore-os na página usando {{filename}} (caminho completo) ou {{{filename}}} (hiperligação html) no editor.';
$string['settings:guidancepage'] = 'Conteúdo da página de orientações';
$string['settings:guidancepage_help'] = 'O HTML aqui será exibido na página de orientações. Insira os nomes dos ficheiros da área de ficheiros para incorporar o ficheiro com o caminho completo {{filename}} ou como uma hiperligação html usando {{{filename}}}.';
$string['settings:lockout'] = 'Fim do bloqueio';
$string['settings:lockout_help'] = 'Número de tentativas que um utilizador tem para responder às entradas dos fatores antes de deixar de ter permissão para autenticar-se.';
$string['settings:redir_exclusions'] = 'URL que não devem redirecionar a verificação da MFA';
$string['settings:weight'] = 'Peso do fator';
$string['settings:weight_help'] = 'O peso deste fator se validado. O utilizador precisa de pelo menos 100 pontos para autenticar-se.';
$string['setup'] = 'Configuração';
$string['setupfactor'] = 'Configurar fator';
$string['setuprequired'] = 'Configuração de utilizador';
$string['state:fail'] = 'Falha';
$string['state:locked'] = 'Bloqueado';
$string['state:neutral'] = 'Neutral';
$string['state:pass'] = 'Validado';
$string['state:unknown'] = 'Desconhecido';
$string['totalusers'] = 'Total de utilizadores';
$string['totalweight'] = 'Peso total';
$string['userempty'] = 'Utilizador não pode ficar em branco.';
$string['userlogs'] = 'Registos de utilizador';
$string['usernotfound'] = 'Não foi possível localizar o utilizador.';
$string['usersauthedinperiod'] = 'Autenticado em';
$string['verificationcode'] = 'Insira o código de verificação para confirmação';
$string['verificationcode_help'] = 'O código de verificação fornecido pelo fator de autenticação atual.';
$string['viewlockedusers'] = 'Ver utilizadores bloqueados';
$string['weight'] = 'Peso';
