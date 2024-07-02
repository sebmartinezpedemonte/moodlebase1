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
 * Strings for component 'theme_degrade', language 'pt', version '4.1'.
 *
 * @package     theme_degrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acessar'] = 'Aceder ao Curso';
$string['background_color'] = 'Cor de Fundo';
$string['background_color_black'] = 'Tema Preto {$a}';
$string['background_color_blue'] = 'Tema Azul {$a}';
$string['background_color_default'] = 'Tema Padrão {$a}';
$string['background_color_desc'] = 'Cor de fundo do Topo e do Rodapé!';
$string['background_color_green'] = 'Tema Verde {$a}';
$string['background_color_random'] = 'Tema Aleatório {$a}';
$string['background_color_red'] = 'Tema Vermelho {$a}';
$string['choosereadme'] = 'Degrade é um tema desenvolvido com cuidado para trazer cores alegres ao Moodle.';
$string['contact_address'] = 'Endereço';
$string['contact_email'] = 'Email';
$string['contact_phone'] = 'Número de Telefone';
$string['content_pagefonts'] = 'Fontes Extras do Google';
$string['content_pagefonts_desc'] = 'Adicione aqui o link @import do Google para fontes extras.<br>Você pode colocar múltiplos imports.<br><a href="https://fonts.google.com/selection/embed" target="google">Código de Incorporação</a><br><img src="{$a}" style="max-width: 100%;width: 420px;">';
$string['content_type_default'] = 'Padrão do Moodle';
$string['content_type_empty'] = '(Sem conteúdo)';
$string['content_type_footer'] = 'Tipo de conteúdo para o rodapé';
$string['content_type_footer_desc'] = 'Selecione o tipo de conteúdo que deseja exibir no rodapé.';
$string['content_type_home'] = 'Tipo de conteúdo para a página inicial';
$string['content_type_home_desc'] = 'Selecione o tipo de conteúdo que deseja exibir na página inicial.';
$string['content_type_html'] = 'Página a ser criada com editor';
$string['continuar'] = 'Continuar estudando';
$string['countlesson'] = '{$a} lição';
$string['countlessons'] = '{$a} lições';
$string['customcss'] = 'CSS Personalizado';
$string['customcss_desc'] = 'Quaisquer regras CSS que adicionar a esta área de texto serão refletidas em todas as páginas, tornando fácil personalizar este tema.';
$string['custommenuitems'] = 'Itens de Menu Personalizados';
$string['custommenuitems_desc'] = 'Pode criar um menu personalizado ao lado dos menus principais. O menu raiz deve começar alinhado com a margem, e os submenus devem ser precedidos por um hífen (-). O número de hífens determina a profundidade do item. Assim, itens com um único hífen aparecem num submenu abaixo do item de nível superior anterior, e itens com dois hífens aparecem num submenu abaixo do submenu anterior.
O conteúdo de cada item de menu deve consistir em até três elementos (<strong>etiqueta</strong> | <strong>url</strong> | <strong>dica</strong> | <strong>idioma</strong>), cada um separado pelo caractere "|".
<ul>
<li><strong>etiqueta</strong>: Este é o texto que será exibido dentro do item de menu. Deve especificar uma etiqueta para cada item de menu.</li>
<li><strong>url</strong>: Este é o URL para o qual o utilizador será levado ao clicar no item de menu. Isto é opcional; se não fornecido, o item não será vinculado a nenhum lugar.<br>
Outros atributos como "target" podem ser adicionados ao final do URL.</li>
<li><strong>dica</strong>: Se fornecer um URL, também pode optar por fornecer uma dica para o link criado com o URL. Isto é opcional, e se não for definido, a etiqueta é usada como a dica para o item de menu.</li>
<li><strong>idioma</strong>: Pode adicionar um código de idioma (ou uma lista separada por vírgulas de códigos) como o quarto elemento da linha. A linha será exibida apenas se o utilizador tiver selecionado o(s) idioma(s) listado(s).</li>
</ul>
Aqui está um exemplo de como pode criar um menu personalizado:
<blockquote><pre>
Cursos
-Todos os cursos | /curso/
-Meus cursos
--Curso Exemplo
---Curso Exemplo 7 | /curso/ver.php?id=7
---Curso Exemplo 9 | /curso/ver.php?id=9
--Curso Teste
---Curso Teste 2 | /curso/ver.php?id=2
---Curso Teste 5 | /curso/ver.php?id=5
Google
-Google em qualquer idioma | https://google.com/" target="_blank
-Google no México | https://www.google.com.mx/" target="_blank|Etiqueta do Google|en
-Google em Português | https://google.com.br/" target="_blank|Etiqueta do Google|pt,pt_br,pt_br_kids
Página de Suporte | https://suporte.com/" target="_blank
</pre></blockquote>
Para o Moodle com suporte para vários idiomas, o valor de <strong>etiqueta</strong> deve ser formatado como <strong>"nomedacadeiadeidiomas,nomedocomponente"</strong>.
<blockquote><pre>
perfil,moodle | /utilizador/perfil.php
mensagens,mensagem | /mensagem/index.php
</pre></blockquote>
<a href="https://docs.moodle.org/404/en/Definições_avançadas_do_tema" target="_blank">Mais informações sobre menus</a>';
$string['editor_link_footer'] = 'Editar o bloco do rodapé para o idioma {$a}';
$string['editor_link_footer_all'] = 'Editar o bloco do rodapé para todos os idiomas';
$string['editor_link_home'] = 'Editar a página inicial para o idioma {$a}';
$string['editor_link_home_all'] = 'Editar a página inicial para todos os idiomas';
$string['favicon'] = 'Favicon';
$string['favicon_desc'] = 'O favicon é exibido ao lado do título da página na guia do navegador. Um favicon do Moodle é exibido se um favicon personalizado não for fornecido.';
$string['fontfamily'] = 'Fontes de Texto do Site';
$string['fontfamily_desc'] = 'Escolha qual fonte deseja utilizar para o texto no seu site Moodle.';
$string['fontfamily_menus'] = 'Fontes de Menu';
$string['fontfamily_menus_desc'] = 'Escolha qual fonte deseja utilizar para os menus no seu site Moodle.';
$string['fontfamily_sitename'] = 'Fonte para o nome do site';
$string['fontfamily_sitename_desc'] = 'A fonte que será aplicada ao nome do site se um logotipo não for fornecido.';
$string['fontfamily_title'] = 'Fontes de Texto de Título';
$string['fontfamily_title_desc'] = 'Escolha qual fonte deseja utilizar para os títulos no seu site Moodle.';
$string['fontpreview'] = 'Pré-visualização da Lista de Fontes';
$string['footer_contact_title'] = 'Título do Bloco de Contato';
$string['footer_contact_title_default'] = 'Contacte-nos';
$string['footer_contact_title_desc'] = 'Insira o título do bloco que aparecerá no rodapé com os detalhes de contato.';
$string['footer_description'] = 'Descrição';
$string['footer_description_desc'] = 'Descreva seu Moodle, o que você faz, e estas informações serão exibidas abaixo do logotipo no rodapé do Moodle';
$string['footer_frontpage_blockcourses_instructor'] = 'Mostrar nome do professor';
$string['footer_frontpage_blockcourses_instructor_desc'] = 'Se marcado, mostra os nomes dos professores na lista de cursos!';
$string['footer_frontpage_blockcourses_text'] = 'Texto curto explicando o bloco "{$a}"';
$string['footer_frontpage_blockcourses_text_desc'] = 'Adicione um texto falando sobre "{$a}"!';
$string['footer_links_title'] = 'Título do Bloco de Links';
$string['footer_links_title_default'] = 'Links Importantes';
$string['footer_show_copywriter'] = 'Mostrar Feito com ❤️';
$string['footer_show_copywriter_desc'] = 'Desmarque se quiser ocultar o "Feito com ❤️"';
$string['footer_social_title'] = 'Título do Bloco de Links Sociais';
$string['footer_social_title_default'] = 'Siga-nos nas redes sociais';
$string['footer_social_title_desc'] = 'Insira o título do bloco que aparecerá no rodapé com os dados das suas redes sociais.';
$string['footerblink'] = 'Links do Bloco do Rodapé';
$string['footerblink_desc'] = 'Você pode configurar Links do Bloco do Rodapé aqui para serem exibidos pelos temas.<br>Cada linha consiste em algum texto de menu ou chave de idioma ou texto, uma URL de link (opcional), separados por barras verticais. Por exemplo:<br><pre>Suporte do Moodle|https://moodle.org/support</pre>';
$string['footerblock_contact'] = 'Bloco de contato';
$string['footerblock_copywriter'] = 'Feito com ❤️';
$string['footerblock_description'] = 'Bloco de descrição';
$string['footerblock_links'] = 'Bloco de links';
$string['footerblock_social'] = 'Bloco social';
$string['free_name'] = 'Grátis';
$string['frontpage_about_description'] = 'Descreva o que você faz';
$string['frontpage_about_description_desc'] = 'Descreva em um máximo de 5 linhas o propósito do seu Moodle';
$string['frontpage_about_enable'] = 'Ativar Bloco Sobre';
$string['frontpage_about_enable_desc'] = 'Se marcado, o Bloco Sobre aparecerá abaixo do Banner!';
$string['frontpage_about_info'] = 'Caixa de dados {$a}';
$string['frontpage_about_logo'] = 'Logotipo diferente a ser mostrado aqui';
$string['frontpage_about_logo_desc'] = 'Se definido, este logotipo será usado aqui em vez do logotipo do Topo.<br>
Em branco usa o Logotipo do Topo!';
$string['frontpage_about_number'] = 'Quantidade de dados';
$string['frontpage_about_number_desc'] = 'Insira a quantidade de informações mencionadas acima';
$string['frontpage_about_text'] = 'Nome dos dados';
$string['frontpage_about_text_1_defalt'] = 'Disciplinas';
$string['frontpage_about_text_2_defalt'] = 'Professores';
$string['frontpage_about_text_3_defalt'] = 'Alunos';
$string['frontpage_about_text_4_defalt'] = 'Lições';
$string['frontpage_about_text_desc'] = 'Insira o nome dos dados a serem exibidos na página inicial';
$string['frontpage_about_title'] = 'Título do bloco Sobre';
$string['frontpage_about_title_default'] = 'Nossa Comunidade Global';
$string['grapsjs-assetmanager-addbutton'] = 'Adicionar imagem';
$string['grapsjs-assetmanager-modaltitle'] = 'Selecionar imagem';
$string['grapsjs-assetmanager-uploadtitle'] = 'Solte os ficheiros aqui ou clique para carregar';
$string['grapsjs-attachment'] = 'Anexo';
$string['grapsjs-clear'] = 'Limpar Tela';
$string['grapsjs-confirm_clear'] = 'Tem a certeza de que deseja limpar a tela?';
$string['grapsjs-decoration'] = 'Decorações';
$string['grapsjs-devicemanager-device'] = 'Dispositivo';
$string['grapsjs-devicemanager-devices-desktop'] = 'Desktop';
$string['grapsjs-devicemanager-devices-mobilelandscape'] = 'Móvel, Modo Paisagem';
$string['grapsjs-devicemanager-devices-mobileportrait'] = 'Móvel, Modo Retrato';
$string['grapsjs-devicemanager-devices-tablet'] = 'Tablet';
$string['grapsjs-dimensions'] = 'Dimensões';
$string['grapsjs-domcomponents-names-'] = 'Caixa';
$string['grapsjs-domcomponents-names-body'] = 'Corpo';
$string['grapsjs-domcomponents-names-cell'] = 'Célula da Tabela';
$string['grapsjs-domcomponents-names-comment'] = 'Comentário';
$string['grapsjs-domcomponents-names-image'] = 'Imagem';
$string['grapsjs-domcomponents-names-label'] = 'Etiqueta';
$string['grapsjs-domcomponents-names-link'] = 'Link';
$string['grapsjs-domcomponents-names-map'] = 'Mapa';
$string['grapsjs-domcomponents-names-row'] = 'Linha da Tabela';
$string['grapsjs-domcomponents-names-section'] = 'Seção';
$string['grapsjs-domcomponents-names-table'] = 'Tabela';
$string['grapsjs-domcomponents-names-tbody'] = 'Corpo da Tabela';
$string['grapsjs-domcomponents-names-text'] = 'Texto';
$string['grapsjs-domcomponents-names-tfoot'] = 'Rodapé da Tabela';
$string['grapsjs-domcomponents-names-thead'] = 'Cabeçalho da Tabela';
$string['grapsjs-domcomponents-names-video'] = 'Vídeo';
$string['grapsjs-domcomponents-names-wrapper'] = 'Corpo';
$string['grapsjs-edit_code'] = 'Editar código';
$string['grapsjs-edit_code_paste_here_html'] = 'Cole o seu HTML/CSS aqui e clique em Importar';
$string['grapsjs-fullscreen'] = 'Ecra Cheia';
$string['grapsjs-general'] = 'Geral';
$string['grapsjs-open_block'] = 'Blocos';
$string['grapsjs-open_layers'] = 'Camadas';
$string['grapsjs-open_sm'] = 'Gerenciador de Estilos';
$string['grapsjs-page_preview'] = 'Pré-visualizar';
$string['grapsjs-page_save'] = 'Guardar';
$string['grapsjs-panels-buttons-titles-export-template'] = 'Ver código';
$string['grapsjs-panels-buttons-titles-fullscreen'] = 'Ecra Cheia';
$string['grapsjs-panels-buttons-titles-open-blocks'] = 'Abrir blocos';
$string['grapsjs-panels-buttons-titles-open-layers'] = 'Abrir gestor de camadas';
$string['grapsjs-panels-buttons-titles-open-sm'] = 'Abrir gestor de estilos';
$string['grapsjs-panels-buttons-titles-open-tm'] = 'Configurações';
$string['grapsjs-panels-buttons-titles-preview'] = 'Pré-visualização';
$string['grapsjs-panels-buttons-titles-sw-visibility'] = 'Ver componentes';
$string['grapsjs-position'] = 'Posição';
$string['grapsjs-preview'] = 'Pré-visualização';
$string['grapsjs-redo'] = 'Refazer';
$string['grapsjs-repeat'] = 'Repetir';
$string['grapsjs-selectormanager-emptystate'] = '- Estado -';
$string['grapsjs-selectormanager-label'] = 'Classes';
$string['grapsjs-selectormanager-selected'] = 'Selecionado';
$string['grapsjs-selectormanager-states-active'] = 'Clique';
$string['grapsjs-selectormanager-states-hover'] = 'Hover';
$string['grapsjs-selectormanager-states-nth-of-type-2n'] = 'Par/Ímpar';
$string['grapsjs-settings'] = 'Configurações';
$string['grapsjs-show_border'] = 'Mostrar Bordas';
$string['grapsjs-size'] = 'Tamanho';
$string['grapsjs-stylemanager-empty'] = 'Selecione um elemento para usar o gestor de estilos';
$string['grapsjs-stylemanager-filebutton'] = 'Imagens';
$string['grapsjs-stylemanager-layer'] = 'Camada';
$string['grapsjs-stylemanager-properties-align-content'] = 'Alinhar Conteúdo';
$string['grapsjs-stylemanager-properties-align-items'] = 'Alinhar Itens';
$string['grapsjs-stylemanager-properties-align-self'] = 'Alinhar-se';
$string['grapsjs-stylemanager-properties-background'] = 'Fundo';
$string['grapsjs-stylemanager-properties-background-attachment'] = 'Anexo do Fundo';
$string['grapsjs-stylemanager-properties-background-color'] = 'Cor do Fundo';
$string['grapsjs-stylemanager-properties-background-image'] = 'Imagem de Fundo';
$string['grapsjs-stylemanager-properties-background-position'] = 'Posição do Fundo';
$string['grapsjs-stylemanager-properties-background-repeat'] = 'Repetição do Fundo';
$string['grapsjs-stylemanager-properties-background-size'] = 'Tamanho do Fundo';
$string['grapsjs-stylemanager-properties-border'] = 'Borda';
$string['grapsjs-stylemanager-properties-border-bottom-left'] = 'Borda Inferior Esquerda';
$string['grapsjs-stylemanager-properties-border-bottom-right'] = 'Borda Inferior Direita';
$string['grapsjs-stylemanager-properties-border-color'] = 'Cor da Borda';
$string['grapsjs-stylemanager-properties-border-radius'] = 'Raio da Borda';
$string['grapsjs-stylemanager-properties-border-radius-bottom-left'] = 'Raio da Borda Inferior Esquerda';
$string['grapsjs-stylemanager-properties-border-radius-bottom-right'] = 'Raio da Borda Inferior Direita';
$string['grapsjs-stylemanager-properties-border-radius-top-left'] = 'Raio da Borda Superior Esquerda';
$string['grapsjs-stylemanager-properties-border-radius-top-right'] = 'Raio da Borda Superior Direita';
$string['grapsjs-stylemanager-properties-border-style'] = 'Estilo da Borda';
$string['grapsjs-stylemanager-properties-border-top-left'] = 'Borda Superior Esquerda';
$string['grapsjs-stylemanager-properties-border-top-right'] = 'Borda Superior Direita';
$string['grapsjs-stylemanager-properties-border-width'] = 'Largura da Borda';
$string['grapsjs-stylemanager-properties-bottom'] = 'Inferior';
$string['grapsjs-stylemanager-properties-box-shadow'] = 'Sombra da Caixa';
$string['grapsjs-stylemanager-properties-box-shadow-blur'] = 'Desfoque da Sombra da Caixa';
$string['grapsjs-stylemanager-properties-box-shadow-color'] = 'Cor da Sombra da Caixa';
$string['grapsjs-stylemanager-properties-box-shadow-h'] = 'Sombra da Caixa: Horizontal';
$string['grapsjs-stylemanager-properties-box-shadow-spread'] = 'Espalhamento da Sombra da Caixa';
$string['grapsjs-stylemanager-properties-box-shadow-type'] = 'Tipo de Sombra da Caixa';
$string['grapsjs-stylemanager-properties-box-shadow-v'] = 'Sombra da Caixa: Vertical';
$string['grapsjs-stylemanager-properties-center'] = 'Centro';
$string['grapsjs-stylemanager-properties-color'] = 'Cor';
$string['grapsjs-stylemanager-properties-display'] = 'Exibição';
$string['grapsjs-stylemanager-properties-flex-basis'] = 'Base do Flex';
$string['grapsjs-stylemanager-properties-flex-direction'] = 'Direção do Flex';
$string['grapsjs-stylemanager-properties-flex-grow'] = 'Crescer do Flex';
$string['grapsjs-stylemanager-properties-flex-shrink'] = 'Encolher do Flex';
$string['grapsjs-stylemanager-properties-flex-wrap'] = 'Envolver o Flex';
$string['grapsjs-stylemanager-properties-float'] = 'Flutuar';
$string['grapsjs-stylemanager-properties-font-family'] = 'Família de Fontes';
$string['grapsjs-stylemanager-properties-font-size'] = 'Tamanho da Fonte';
$string['grapsjs-stylemanager-properties-font-weight'] = 'Peso da Fonte';
$string['grapsjs-stylemanager-properties-height'] = 'Altura';
$string['grapsjs-stylemanager-properties-justify'] = 'Justificar';
$string['grapsjs-stylemanager-properties-justify-content'] = 'Justificar Conteúdo';
$string['grapsjs-stylemanager-properties-left'] = 'Esquerda';
$string['grapsjs-stylemanager-properties-letter-spacing'] = 'Espaçamento entre Letras';
$string['grapsjs-stylemanager-properties-line-height'] = 'Altura da Linha';
$string['grapsjs-stylemanager-properties-line-through'] = 'Rasurado';
$string['grapsjs-stylemanager-properties-margin'] = 'Margem';
$string['grapsjs-stylemanager-properties-margin-bottom'] = 'Margem Inferior';
$string['grapsjs-stylemanager-properties-margin-left'] = 'Margem Esquerda';
$string['grapsjs-stylemanager-properties-margin-right'] = 'Margem Direita';
$string['grapsjs-stylemanager-properties-margin-top'] = 'Margem Superior';
$string['grapsjs-stylemanager-properties-max-height'] = 'Altura Máxima';
$string['grapsjs-stylemanager-properties-max-width'] = 'Largura Máxima';
$string['grapsjs-stylemanager-properties-none'] = 'Nenhum';
$string['grapsjs-stylemanager-properties-order'] = 'Ordem';
$string['grapsjs-stylemanager-properties-padding'] = 'Preenchimento';
$string['grapsjs-stylemanager-properties-padding-bottom'] = 'Preenchimento Inferior';
$string['grapsjs-stylemanager-properties-padding-left'] = 'Preenchimento Esquerdo';
$string['grapsjs-stylemanager-properties-padding-right'] = 'Preenchimento Direito';
$string['grapsjs-stylemanager-properties-padding-top'] = 'Preenchimento Superior';
$string['grapsjs-stylemanager-properties-perspective'] = 'Perspetiva';
$string['grapsjs-stylemanager-properties-position'] = 'Posição';
$string['grapsjs-stylemanager-properties-right'] = 'Direita';
$string['grapsjs-stylemanager-properties-text-align'] = 'Alinhamento do Texto';
$string['grapsjs-stylemanager-properties-text-shadow'] = 'Sombra do Texto';
$string['grapsjs-stylemanager-properties-text-shadow-blur'] = 'Desfoque da Sombra do Texto';
$string['grapsjs-stylemanager-properties-text-shadow-color'] = 'Cor da Sombra do Texto';
$string['grapsjs-stylemanager-properties-text-shadow-h'] = 'Sombra do Texto: Horizontal';
$string['grapsjs-stylemanager-properties-text-shadow-v'] = 'Sombra do Texto: Vertical';
$string['grapsjs-stylemanager-properties-top'] = 'Topo';
$string['grapsjs-stylemanager-properties-transform'] = 'Transformar';
$string['grapsjs-stylemanager-properties-transform-rotate-x'] = 'Rodar X';
$string['grapsjs-stylemanager-properties-transform-rotate-y'] = 'Rodar Y';
$string['grapsjs-stylemanager-properties-transform-rotate-z'] = 'Rodar Z';
$string['grapsjs-stylemanager-properties-transform-scale-x'] = 'Escalar X';
$string['grapsjs-stylemanager-properties-transform-scale-y'] = 'Escala Y';
$string['grapsjs-stylemanager-properties-transform-scale-z'] = 'Escala Z';
$string['grapsjs-stylemanager-properties-transition'] = 'Transição';
$string['grapsjs-stylemanager-properties-transition-duration'] = 'Duração da Transição';
$string['grapsjs-stylemanager-properties-transition-property'] = 'Propriedade da Transição';
$string['grapsjs-stylemanager-properties-transition-timing-function'] = 'Função de Tempo da Transição';
$string['grapsjs-stylemanager-properties-underline'] = 'Sublinhado';
$string['grapsjs-stylemanager-properties-width'] = 'Largura';
$string['grapsjs-stylemanager-sectors-decorations'] = 'Decorações';
$string['grapsjs-stylemanager-sectors-dimension'] = 'Dimensão';
$string['grapsjs-stylemanager-sectors-extra'] = 'Extra';
$string['grapsjs-stylemanager-sectors-flex'] = 'Flexível';
$string['grapsjs-stylemanager-sectors-general'] = 'Geral';
$string['grapsjs-stylemanager-sectors-layout'] = 'Layout';
$string['grapsjs-stylemanager-sectors-typography'] = 'Tipografia';
$string['grapsjs-tipografia'] = 'Tipografia';
$string['grapsjs-traitmanager-empty'] = 'Selecione um elemento para usar o gestor de características';
$string['grapsjs-traitmanager-label'] = 'Configurações do Componente';
$string['grapsjs-traitmanager-traits-options-target-_blank'] = 'Nova janela';
$string['grapsjs-traitmanager-traits-options-target-false'] = 'Esta janela';
$string['grapsjs-undo'] = 'Desfazer';
$string['grapsjs-width'] = 'Largura';
$string['heart'] = 'Se gostar deste tema, não se esqueça de clicar em ❤️ na página dos temas <a href="{$a}" target="_blank">clicando aqui</a>';
$string['instructor'] = 'Instrutor';
$string['login_backgroundcolor'] = 'Cor de Fundo';
$string['login_backgroundcolor_desc'] = 'Selecione a cor de fundo da página de recuperação de senha';
$string['login_backgroundfoto'] = 'Imagem de Fundo';
$string['login_backgroundfoto_desc'] = 'Selecione a imagem de fundo para Login/Recuperação de Senha/Criar Conta. A imagem padrão é: {$a}';
$string['login_forgot_description'] = 'Texto ao lado da Tela de Esqueceu a Senha';
$string['login_forgot_description_desc'] = 'Texto que aparecerá apenas na tela de Esqueceu a Senha';
$string['login_login_description'] = 'Texto ao lado da Tela de Login';
$string['login_login_description_desc'] = 'Texto que aparecerá apenas na tela de Login';
$string['login_signup_description'] = 'Texto ao lado da Tela de Criar uma Conta';
$string['login_signup_description_desc'] = 'Texto que aparecerá apenas na tela de Criar uma Conta';
$string['login_theme'] = 'Tema do Login';
$string['login_theme_block'] = 'Bloco central branco com fundo opcional';
$string['login_theme_desc'] = 'Escolha qual tema deseja na área de Login';
$string['login_theme_image_login'] = 'Imagem de fundo e login no lado';
$string['login_theme_imagetext_login'] = 'Imagem de fundo, texto sobre a imagem, e login no lado';
$string['login_theme_login'] = 'Apenas tela de login, sem imagem lateral';
$string['logo_color'] = 'Logotipo Colorido';
$string['logo_color_desc'] = 'Por favor, faça o upload do seu LOGOTIPO colorido se deseja incluí-lo no topo. Este logotipo será exibido à medida que a página é rolada, e o menu será exibido em um fundo branco.';
$string['logo_write'] = 'Logótipo do menu superior ao fazer scroll';
$string['logo_write_desc'] = 'Por favor, carregue o seu logótipo se desejar incluí-lo no topo. Este logótipo será exibido quando o scroll permanecer no topo e o menu será exibido num fundo colorido.';
$string['matricular'] = 'Matricular';
$string['pluginname'] = 'Degradê';
$string['privacy:metadata'] = 'O tema Degradê não armazena nenhum dado pessoal sobre qualquer usuário.';
$string['settings_about_heading'] = 'Sobre o seu Moodle';
$string['settings_css_heading'] = 'Fontes e CSS';
$string['settings_footer_heading'] = 'Bloco do Rodapé';
$string['settings_icons_block'] = 'Ícone {$a}';
$string['settings_icons_change_icons'] = 'Alterar o ícone padrão na lista de disciplinas';
$string['settings_icons_default_audio_file'] = 'Áudio';
$string['settings_icons_default_book'] = 'Livro';
$string['settings_icons_default_download'] = 'Download';
$string['settings_icons_default_game'] = 'Jogo';
$string['settings_icons_default_money'] = 'Financeiro';
$string['settings_icons_default_slide'] = 'Slides';
$string['settings_icons_default_support'] = 'Suporte';
$string['settings_icons_default_video_file'] = 'Vídeo';
$string['settings_icons_heading'] = 'Ícones';
$string['settings_icons_image'] = 'Imagem do Ícone';
$string['settings_icons_image_desc'] = 'Carregue a imagem SVG ou PNG do ícone desejado para substituir na disciplina.<br>Tamanho recomendado: 24px. Se PNG, lembre-se da transparência.';
$string['settings_icons_module_disable'] = 'A seleção de ícones personalizados está desativada. Ative em {$a}';
$string['settings_icons_name'] = 'Nome do Ícone';
$string['settings_icons_name_desc'] = 'Adicione o nome do ícone para seleção fácil no módulo';
$string['settings_icons_none'] = 'Sem ícones personalizados';
$string['settings_icons_num'] = 'Número de Ícones';
$string['settings_icons_num_desc'] = 'Quantidade de ícones personalizados que deseja adicionar';
$string['settings_icons_select_icon'] = 'Selecione o ícone personalizado. Edite em {$a}';
$string['settings_login_heading'] = 'Tela de Login';
$string['settings_slideshow_heading'] = 'Apresentação de Slides';
$string['settings_theme_heading'] = 'Tema';
$string['settings_top_heading'] = 'Menu Principal';
$string['sitefonts'] = 'Fontes Adicionais do Google';
$string['sitefonts_desc'] = 'Insira o código @import do Google Fonts conforme indicado na imagem abaixo. Após salvar, o campo "Fonte do Site" será atualizado, exibindo estas fontes. Você pode adicionar múltiplos @import conforme necessário.';
$string['slidecaption_desc'] = 'Insira o texto da legenda a ser usado no slide';
$string['slideshow_image'] = 'Imagem do Slide';
$string['slideshow_image_desc'] = 'A imagem deve ter 1250px X 400px.';
$string['slideshow_info'] = 'Slide {$a}';
$string['slideshow_numslides'] = 'Quantas imagens na Apresentação de Slides';
$string['slideshow_numslides_desc'] = 'Quantas imagens deseja na Apresentação de Slides?';
$string['slideshow_numslides_nenhum'] = 'Sem slides na Página Inicial';
$string['slideshow_text'] = 'Texto descritivo curto para o Slide';
$string['slideshow_text_desc'] = 'Insira um texto curto sobre o slide.';
$string['slideshow_url'] = 'Link dos botões dos slides';
$string['slideshow_url_desc'] = 'Insira o link de destino para o botão de imagem do slide';
$string['social_facebook'] = 'O seu Facebook';
$string['social_facebook_desc'] = 'URL do Facebook da sua organização.';
$string['social_instagram'] = 'O seu Instagram';
$string['social_instagram_desc'] = 'URL do Instagram da sua organização.';
$string['social_linkedin'] = 'O seu Linkedin';
$string['social_linkedin_desc'] = 'URL do Linkedin da sua organização.';
$string['social_twitter'] = 'O seu Twitter';
$string['social_twitter_desc'] = 'URL do Twitter da sua organização.';
$string['social_youtube'] = 'O seu Youtube';
$string['social_youtube_desc'] = 'URL do Youtube da sua organização.';
$string['theme_color'] = 'Seleção de Cor';
$string['theme_color-color_buttons'] = 'Cor dos Botões';
$string['theme_color-color_buttons_desc'] = 'A cor usada para botões, adicionando coesão visual e enfatizando ações interativas.';
$string['theme_color-color_names'] = 'Cor dos Nomes';
$string['theme_color-color_names_desc'] = 'Cor usada para destacar nomes ou identificadores, fornecendo clareza e ênfase em informações de texto específicas.';
$string['theme_color-color_primary'] = 'Cor Primária';
$string['theme_color-color_primary_desc'] = 'A cor primária principal do tema, geralmente usada para elementos em destaque e ênfase.';
$string['theme_color-color_secondary'] = 'Cor Secundária';
$string['theme_color-color_secondary_desc'] = 'Uma cor secundária que complementa a cor primária, usada para destacar elementos secundários ou para contrastar com a cor primária.';
$string['theme_color-color_titles'] = 'Cor dos Títulos';
$string['theme_color-color_titles_desc'] = 'A cor usada para os títulos, fornecendo destaque e estrutura visual ao conteúdo da página.';
$string['theme_color_blue'] = 'Azul';
$string['theme_color_desc'] = 'Selecione as cores dos textos e botões do Moodle ou clique na linha abaixo:';
$string['theme_color_green'] = 'Verde';
$string['theme_color_green_d'] = 'Verde Escuro';
$string['theme_color_heading'] = 'Seleção de Cor do Ambiente';
$string['theme_color_red_d'] = 'Vermelho';
$string['theme_color_violet'] = 'Roxo';
$string['theme_degrade_about_editbooton'] = 'Editar Bloco Sobre';
$string['theme_degrade_frontpage_bloco'] = 'Bloco "{$a}"';
$string['theme_degrade_frontpage_home'] = 'Blocos da Página Inicial';
$string['theme_degrade_slideshow_editbooton'] = 'Editar Apresentação de Slides';
$string['theme_login_branco'] = 'Apenas tela de login, sem imagem lateral, com o formulário em fundo branco';
$string['top_color_heading'] = 'Cor do Topo do Scroll';
$string['top_scroll_background_color'] = 'Cor de Fundo do Menu Superior no Scroll';
$string['top_scroll_background_color_desc'] = 'Defina a cor de fundo ao rolar a página.';
$string['top_scroll_text_color'] = 'Cor do Texto do Menu no Scroll';
$string['top_scroll_text_color_desc'] = 'Defina a cor do texto do menu ao rolar a página.';