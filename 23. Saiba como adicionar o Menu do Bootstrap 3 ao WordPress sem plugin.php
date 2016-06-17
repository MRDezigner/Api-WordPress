<article>
<header>
<div>
<h1><a href="http://www.tutorialwebdesign.com.br/menu-bootstrap-para-wordpress-sem-plugin/">Menu Bootstrap para WordPress sem Plugin</a></h1>
<div class="post-info">
<span class="icon-calendar2"><p>05/jun/2014</p></span>
<span class="icon-user"><a href="#">Gabriel Costa</a></span>
<!-- <span class="icon-eye"><p>4517</p></span> Recebe o numero de views do post -->			
</div>
</div>
</header>

<section class="texto-post">

<div class="imagem-post">
<figure class="hidden-xs">
<img src="http://www.tutorialwebdesign.com.br/wp-content/uploads/2014/06/menu-wordpress-bootstrao.png" alt="Menu Bootstrap para WordPress sem Plugin" itemprop="image">
</figure>
</div>	
<h2>Saiba como adicionar o Menu do Bootstrap 3 ao WordPress sem plugin.</h2>
<blockquote><p>Olá pessoal,<br>
Neste tutorial irei ensinar como fazemos para adicionar o menu padrão do Bootstrap 3 ao WordPress sem a necessidade de plugin.<br>
Espero que gostem.<br>
Vamos lá!</p></blockquote>
<p><strong>Conheça outros artigos relevantes</strong></p>
<ul>
<li><a href="http://www.tutorialwebdesign.com.br/como-criar-temas-para-wordpress-parte1/" target="_blank">Como criar temas para wordpress – parte1</a></li>
<li><a href="http://www.tutorialwebdesign.com.br/como-instalar-o-wordpress/" target="_blank">WordPress – Como Instalar</a></li>
<li><a href="http://www.tutorialwebdesign.com.br/o-que-e-bootstrap/" target="_blank">O que é Bootstrap?</a></li>
<li><a href="http://www.tutorialwebdesign.com.br/bootstrap-grid-system/" target="_blank">Bootstrap Grid System</a></li>
</ul>
<p>Há algum tempo estava desenvolvendo um portal em WordPress com Bootstrap e me deparei com o problema: “Como adicionar um menu que se adapte ao WordPress utilizando Bootstrap 3?”</p>
<p>A minha intenção não era somente adicionar um menu que funcionasse no responsivo ou que apresentasse a aparência do framework, mas sim que eu pudesse <strong>adicionar e remover itens de menu pelo painel administrativo do WordPres</strong>.</p>
<p>Foi então, que após várias horas de pesquisa, encontrei um componente muito bom, desenvolvido pelo <a href="https://github.com/twittem/wp-bootstrap-navwalker" target="_blank">Edward McIntyre</a>.</p>
<p>Esse componente <strong>não tem a necessidade de instalar plugin</strong>, mas necessita de algumas configurações.</p>
<h3>O componente</h3>
<p>Primeiramente, precisamos baixar os arquivos do componente <strong>wp_bootstrap_navwalker</strong>.</p>
<p>Vá em: <a title="" href="https://github.com/twittem/wp-bootstrap-navwalker" target="_blank">https://github.com/twittem/wp-bootstrap-navwalker</a> e baixe o pacote de arquivos.</p>
<h3>Instalação</h3>
<p>Abra seu arquivo <strong>functions.php</strong> <code>/wp-content/themes/seu-tema/functions.php</code> e adicione o código abaixo:</p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->
<div id="crayon-57634df31d305944354005" class="crayon-syntax crayon-theme-arduino-ide crayon-font-verdana crayon-os-mac print-yes notranslate" data-settings=" minimize scroll-mouseover" style="margin-top: 30px; margin-bottom: 30px; font-size: 13px !important; line-height: 18px !important; height: auto;">
<div class="crayon-toolbar" data-settings=" mouseover overlay hide delay" style="font-size: 13px !important; height: 19.5px !important; line-height: 19.5px !important; margin-top: -20px; display: none; position: absolute; z-index: 2;"><span class="crayon-title"></span>
<div class="crayon-tools" style="font-size: 13px !important;height: 19.5px !important; line-height: 19.5px !important;"><div class="crayon-button crayon-nums-button crayon-pressed" title="Alternar números de linha"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-plain-button" title="Exibir código simples"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-wrap-button" title="Alternar quebras de linha"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-expand-button" title="Expand Code" style="display: none;"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-copy-button" title="Copy"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-popup-button" title="Abrir código em nova janela"><div class="crayon-button-icon"></div></div><span class="crayon-language">PHP</span></div></div>
<div class="crayon-info" style="min-height: 18.2px !important; line-height: 18.2px !important;"></div>
<div class="crayon-plain-wrap"><textarea wrap="soft" class="crayon-plain print-no" data-settings="dblclick" readonly="" style="tab-size: 4; font-size: 13px !important; line-height: 18px !important; z-index: 0; opacity: 0; overflow: hidden;">require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
'primary' =&amp;gt; __( 'Main Menu', 'THEMENAME' ),
) );</textarea></div>
<div class="crayon-main" style="position: relative; z-index: 1; overflow: hidden;">
<table class="crayon-table">
<tbody><tr class="crayon-row">
<td class="crayon-nums " data-settings="show">
<div class="crayon-nums-content" style="font-size: 13px !important; line-height: 18px !important;"><div class="crayon-num" data-line="crayon-57634df31d305944354005-1">1</div><div class="crayon-num" data-line="crayon-57634df31d305944354005-2">2</div><div class="crayon-num" data-line="crayon-57634df31d305944354005-3">3</div><div class="crayon-num" data-line="crayon-57634df31d305944354005-4">4</div></div>
</td>
<td class="crayon-code"><div class="crayon-pre" style="font-size: 13px !important; line-height: 18px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-57634df31d305944354005-1"><span class="crayon-k ">require_once</span><span class="crayon-sy">(</span><span class="crayon-s">'wp_bootstrap_navwalker.php'</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-57634df31d305944354005-2"><span class="crayon-e">register_nav_menus</span><span class="crayon-sy">(</span><span class="crayon-h"> </span><span class="crayon-t">array</span><span class="crayon-sy">(</span></div><div class="crayon-line" id="crayon-57634df31d305944354005-3"><span class="crayon-h">	</span><span class="crayon-s">'primary'</span><span class="crayon-h"> </span><span class="crayon-o">=&amp;</span><span class="crayon-i">gt</span><span class="crayon-sy">;</span><span class="crayon-h"> </span><span class="crayon-e">__</span><span class="crayon-sy">(</span><span class="crayon-h"> </span><span class="crayon-s">'Main Menu'</span><span class="crayon-sy">,</span><span class="crayon-h"> </span><span class="crayon-s">'THEMENAME'</span><span class="crayon-h"> </span><span class="crayon-sy">)</span><span class="crayon-sy">,</span></div><div class="crayon-line" id="crayon-57634df31d305944354005-4"><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div></div></td>
</tr>
</tbody></table>
</div>
</div>
<!-- [Format Time: 0.0032 seconds] -->
<p></p>
<p>Copie o arquivo <strong>wp_bootstrap_navwalker.php</strong> e cole dentro da pasta raiz de seu tema <code>/wp-content/themes/seu-tema/</code>.</p>
<h3>Código do menu</h3>
<p>Após criar a função e adicionar o arquivo do componente à seu tema, copie o código abaixo e cole dentro do arquivo <strong>header.php</strong> <code>/wp-content/themes/seu-tema/header.php</code> ou qualquer outro arquivo que esteja armazenado o código do seu menu.</p>
<p></p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->
<div id="crayon-57634df31d321710066703" class="crayon-syntax crayon-theme-arduino-ide crayon-font-verdana crayon-os-mac print-yes notranslate" data-settings=" minimize scroll-mouseover" style="margin-top: 30px; margin-bottom: 30px; font-size: 13px !important; line-height: 18px !important; height: auto;">
<div class="crayon-toolbar" data-settings=" mouseover overlay hide delay" style="font-size: 13px !important; height: 19.5px !important; line-height: 19.5px !important; margin-top: -20px; display: none; position: absolute; z-index: 2;"><span class="crayon-title"></span>
<div class="crayon-tools" style="font-size: 13px !important;height: 19.5px !important; line-height: 19.5px !important;"><span class="crayon-mixed-highlight" title="Contem Várias Linguagens"></span><div class="crayon-button crayon-nums-button crayon-pressed" title="Alternar números de linha"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-plain-button" title="Exibir código simples"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-wrap-button" title="Alternar quebras de linha"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-expand-button" title="Expand Code"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-copy-button" title="Copy"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-popup-button" title="Abrir código em nova janela"><div class="crayon-button-icon"></div></div><span class="crayon-language">XHTML</span></div></div>
<div class="crayon-info" style="min-height: 18.2px !important; line-height: 18.2px !important;"></div>
<div class="crayon-plain-wrap"><textarea wrap="soft" class="crayon-plain print-no" data-settings="dblclick" readonly="" style="tab-size: 4; font-size: 13px !important; line-height: 18px !important; z-index: 0; opacity: 0; overflow: hidden;">&lt;nav class="navbar navbar-default" role="navigation"&gt;
&lt;div class="container"&gt;
&lt;div class="row"&gt;
&lt;div class="col-md-12"&gt;
&lt;div class="navbar-header"&gt;
&lt;button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"&gt;
&lt;span class="sr-only"&gt;Toggle navigation&lt;/span&gt;
&lt;span class="icon-bar"&gt;&lt;/span&gt;
&lt;span class="icon-bar"&gt;&lt;/span&gt;
&lt;span class="icon-bar"&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;?php
wp_nav_menu( array(
'menu'              =&gt; 'primary',
'theme_location'    =&gt; 'primary',
'depth'             =&gt; 2,
'container'         =&gt; 'div',
'container_class'   =&gt; 'collapse navbar-collapse',
'container_id'      =&gt; 'bs-example-navbar-collapse-1',
'menu_class'        =&gt; 'nav navbar-nav',
'fallback_cb'       =&gt; 'wp_bootstrap_navwalker::fallback',
'walker'            =&gt; new wp_bootstrap_navwalker())
);
?&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;&lt;!-- /.container-fluid --&gt;
&lt;/nav&gt;</textarea></div>
<div class="crayon-main" style="position: relative; z-index: 1; overflow: hidden;">
<table class="crayon-table">
<tbody><tr class="crayon-row">
<td class="crayon-nums " data-settings="show">
<div class="crayon-nums-content" style="font-size: 13px !important; line-height: 18px !important;"><div class="crayon-num" data-line="crayon-57634df31d321710066703-1">1</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-2">2</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-3">3</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-4">4</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-5">5</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-6">6</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-7">7</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-8">8</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-9">9</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-10">10</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-11">11</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-12">12</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-13">13</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-14">14</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-15">15</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-16">16</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-17">17</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-18">18</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-19">19</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-20">20</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-21">21</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-22">22</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-23">23</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-24">24</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-25">25</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-26">26</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-27">27</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-28">28</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-29">29</div><div class="crayon-num" data-line="crayon-57634df31d321710066703-30">30</div></div>
</td>
<td class="crayon-code"><div class="crayon-pre" style="font-size: 13px !important; line-height: 18px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-57634df31d321710066703-1"><span class="crayon-r ">&lt;nav </span><span class="crayon-e ">class</span><span class="crayon-o">=</span><span class="crayon-s ">"navbar navbar-default"</span><span class="crayon-h"> </span><span class="crayon-e ">role</span><span class="crayon-o">=</span><span class="crayon-s ">"navigation"</span><span class="crayon-r ">&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-2"><span class="crayon-i ">	</span><span class="crayon-r ">&lt;div </span><span class="crayon-e ">class</span><span class="crayon-o">=</span><span class="crayon-s ">"container"</span><span class="crayon-r ">&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-3"><span class="crayon-i ">		</span><span class="crayon-r ">&lt;div </span><span class="crayon-e ">class</span><span class="crayon-o">=</span><span class="crayon-s ">"row"</span><span class="crayon-r ">&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-4"><span class="crayon-i ">			</span><span class="crayon-r ">&lt;div </span><span class="crayon-e ">class</span><span class="crayon-o">=</span><span class="crayon-s ">"col-md-12"</span><span class="crayon-r ">&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-5"><span class="crayon-i ">				</span><span class="crayon-r ">&lt;div </span><span class="crayon-e ">class</span><span class="crayon-o">=</span><span class="crayon-s ">"navbar-header"</span><span class="crayon-r ">&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-6"><span class="crayon-i ">					</span><span class="crayon-r ">&lt;button </span><span class="crayon-e ">type</span><span class="crayon-o">=</span><span class="crayon-s ">"button"</span><span class="crayon-h"> </span><span class="crayon-e ">class</span><span class="crayon-o">=</span><span class="crayon-s ">"navbar-toggle"</span><span class="crayon-h"> </span><span class="crayon-e ">data-toggle</span><span class="crayon-o">=</span><span class="crayon-s ">"collapse"</span><span class="crayon-h"> </span><span class="crayon-e ">data-target</span><span class="crayon-o">=</span><span class="crayon-s ">"#bs-example-navbar-collapse-1"</span><span class="crayon-r ">&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-7"><span class="crayon-i ">						</span><span class="crayon-r ">&lt;span </span><span class="crayon-e ">class</span><span class="crayon-o">=</span><span class="crayon-s ">"sr-only"</span><span class="crayon-r ">&gt;</span><span class="crayon-i ">Toggle navigation</span><span class="crayon-r ">&lt;/span&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-8"><span class="crayon-i ">						</span><span class="crayon-r ">&lt;span </span><span class="crayon-e ">class</span><span class="crayon-o">=</span><span class="crayon-s ">"icon-bar"</span><span class="crayon-r ">&gt;</span><span class="crayon-r ">&lt;/span&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-9"><span class="crayon-i ">						</span><span class="crayon-r ">&lt;span </span><span class="crayon-e ">class</span><span class="crayon-o">=</span><span class="crayon-s ">"icon-bar"</span><span class="crayon-r ">&gt;</span><span class="crayon-r ">&lt;/span&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-10"><span class="crayon-i ">						</span><span class="crayon-r ">&lt;span </span><span class="crayon-e ">class</span><span class="crayon-o">=</span><span class="crayon-s ">"icon-bar"</span><span class="crayon-r ">&gt;</span><span class="crayon-r ">&lt;/span&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-11"><span class="crayon-i ">					</span><span class="crayon-r ">&lt;/button&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-12"><span class="crayon-i ">				</span><span class="crayon-r ">&lt;/div&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-13">&nbsp;</div><div class="crayon-line" id="crayon-57634df31d321710066703-14"><span class="crayon-i ">				<span class="crayon-ta">&lt;?php</span></span></div><div class="crayon-line" id="crayon-57634df31d321710066703-15"><span class="crayon-h">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-e">wp_nav_menu</span><span class="crayon-sy">(</span><span class="crayon-h"> </span><span class="crayon-t">array</span><span class="crayon-sy">(</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-16"><span class="crayon-h">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-s">'menu'</span><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">=</span><span class="crayon-o">&gt;</span><span class="crayon-h"> </span><span class="crayon-s">'primary'</span><span class="crayon-sy">,</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-17"><span class="crayon-h">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-s">'theme_location'</span><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">=</span><span class="crayon-o">&gt;</span><span class="crayon-h"> </span><span class="crayon-s">'primary'</span><span class="crayon-sy">,</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-18"><span class="crayon-h">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-s">'depth'</span><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="crayon-o">=</span><span class="crayon-o">&gt;</span><span class="crayon-h"> </span><span class="crayon-cn">2</span><span class="crayon-sy">,</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-19"><span class="crayon-h">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-s">'container'</span><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="crayon-o">=</span><span class="crayon-o">&gt;</span><span class="crayon-h"> </span><span class="crayon-s">'div'</span><span class="crayon-sy">,</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-20"><span class="crayon-h">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-s">'container_class'</span><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-o">=</span><span class="crayon-o">&gt;</span><span class="crayon-h"> </span><span class="crayon-s">'collapse navbar-collapse'</span><span class="crayon-sy">,</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-21"><span class="crayon-h">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 			</span><span class="crayon-s">'container_id'</span><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">=</span><span class="crayon-o">&gt;</span><span class="crayon-h"> </span><span class="crayon-s">'bs-example-navbar-collapse-1'</span><span class="crayon-sy">,</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-22"><span class="crayon-h">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-s">'menu_class'</span><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">=</span><span class="crayon-o">&gt;</span><span class="crayon-h"> </span><span class="crayon-s">'nav navbar-nav'</span><span class="crayon-sy">,</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-23"><span class="crayon-h">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-s">'fallback_cb'</span><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="crayon-o">=</span><span class="crayon-o">&gt;</span><span class="crayon-h"> </span><span class="crayon-s">'wp_bootstrap_navwalker::fallback'</span><span class="crayon-sy">,</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-24"><span class="crayon-h">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-s">'walker'</span><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">=</span><span class="crayon-o">&gt;</span><span class="crayon-h"> </span><span class="crayon-r">new</span><span class="crayon-h"> </span><span class="crayon-e">wp_bootstrap_navwalker</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">)</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-25"><span class="crayon-h">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-26"><span class="crayon-h">		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-ta">?&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-27"><span class="crayon-i ">			</span><span class="crayon-r ">&lt;/div&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-28"><span class="crayon-i ">		</span><span class="crayon-r ">&lt;/div&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-29"><span class="crayon-i ">	</span><span class="crayon-r ">&lt;/div&gt;</span><span class="crayon-c">&lt;!-- /.container-fluid --&gt;</span></div><div class="crayon-line" id="crayon-57634df31d321710066703-30"><span class="crayon-r ">&lt;/nav&gt;</span></div></div></td>
</tr>
</tbody></table>
</div>
</div>
<!-- [Format Time: 0.0114 seconds] -->

<blockquote><p>
Lembro que este código só irá funcionar perfeitamente se você adicionar na parte onde o menu irá ficar e você estiver utilizando o framework Bootstrap.
</p></blockquote>
<h3>Criando o Menu no WordPress</h3>
<p>Agora precisamos ir ao administrador do wordpress e criar um novo menu.</p>
<p>No painel administrativo do wordpress:</p>
<ol>
<li>Acesse: “Aparência” &gt;&gt; “Menus”;</li>
<li>Informe o nome do menu “Main Menu”;</li>
<li>Clique em “Criar Menu”;</li>
<li>Clique na aba “Gerenciar Posições”;</li>
<li>No campo de seleção, selecione o “Main Menu”;</li>
<li>Clique em “Salvar”;</li>
</ol>
<p>Pronto, agora seu menu já está criado e funcionando.</p>
<p>Agora vamos a mais alguns detalhes</p>
<h3>Adicionais*</h3>
<h4>divisores</h4>
<p>Para adicionar divisores, você deve adicionar um link ao menu com a informação <strong>URL</strong> com <code>#</code> e o <strong>Texto do Link</strong> com o nome <code>divider</code>.</p>
<p><a href="http://www.tutorialwebdesign.com.br/wp-content/uploads/2014/06/divider-menu-bootstrap-wordpress.png"><img src="http://www.tutorialwebdesign.com.br/wp-content/uploads/2014/06/divider-menu-bootstrap-wordpress.png" alt="divider-menu-bootstrap-wordpress" class="aligncenter size-full wp-image-581" srcset="http://www.tutorialwebdesign.com.br/wp-content/uploads/2014/06/divider-menu-bootstrap-wordpress.png 288w, http://www.tutorialwebdesign.com.br/wp-content/uploads/2014/06/divider-menu-bootstrap-wordpress-270x300.png 270w" sizes="(max-width: 288px) 100vw, 288px"></a></p>
<h4>Icones</h4>
<p>Para adicionar icones, no atributo <strong>Atributo do Título</strong> você deve adicionar o nome da classe do ícone que você deseja, conforme a lista de glyphicons do bootstrap:</p>
<p><a href="http://www.tutorialwebdesign.com.br/wp-content/uploads/2014/06/icone-menu-bootstrap-wordpress.png"><img src="http://www.tutorialwebdesign.com.br/wp-content/uploads/2014/06/icone-menu-bootstrap-wordpress.png" alt="icone-menu-bootstrap-wordpress" class="aligncenter size-full wp-image-579" srcset="http://www.tutorialwebdesign.com.br/wp-content/uploads/2014/06/icone-menu-bootstrap-wordpress.png 419w, http://www.tutorialwebdesign.com.br/wp-content/uploads/2014/06/icone-menu-bootstrap-wordpress-300x168.png 300w" sizes="(max-width: 419px) 100vw, 419px"></a></p>
<h4>Títulos de Menu</h4>
<p>Da mesma forma, adicione um novo item de menu com os atributos: <strong>URL</strong> com <code>#</code> e <strong>Atributo do Título</strong> com a classe do bootstrap <code>dropdown-header</code>:</p>
<h4>Menu Desativado</h4>
<p>Da mesma forma, adicione um novo item de menu com os atributos: <strong>URL</strong> com <code>#</code> e <strong>Atributo do Título</strong> com <code>disabled</code>:</p>
<p><img class="aligncenter" alt="disabled" src="http://www.tutorialwebdesign.com.br/wp-content/uploads/2014/06/disabled-menu-bootstrap-wordpress.png"></p>
<h3>Finalizando</h3>
<p>Esse tutorial foi desenvolvido com base no WordPress 3.9 e utilizando o Bootstrap 3.<br>
Caso tenha ficado alguma dúvida não deixe de perguntar.<br>
Se gostou do artigo <strong>não deixe de comentar</strong>, ok?<br>
Muito Obrigado e até a próxima.</p>

<!-- PLUGIN DOS BOTES DE REDE SOCIAL -->
<!-- DIVIDE O TEXTO NO MEIO PARA ADICIONAR OS BOTOES DE REDE SOCIAL -->



<!-- AUTOR -->
<section class="autor">
<div class="row">
<div class="col-md-12">
<h5 style="text-transform: uppercase"><strong>AUTOR:</strong> Gabriel Costa</h5>
<ul class="social-autor pull-right">
<li><a target="_blank" href="https://www.facebook.com/tutwd?ref=hl"><span class="icon-facebook facebook"></span></a></li>
<li><a rel="author" target="_blank" href="https://plus.google.com/u/1/+TutorialwebdesignBr1"><span class="icon-googleplus googleplus"></span></a></li>
<li><a target="_blank" href="https://www.youtube.com/channel/UC1eXY7t0ixiNTPWoAAs4leQ"><span class="icon-youtube youtube"></span></a></li>
</ul>
</div>
<div class="col-xs-4 col-sm-2 col-md-2">
<figure>
<img src="http://www.tutorialwebdesign.com.br/wp-content/uploads/2014/04/gabriel-150x150.jpg" width="32" height="32" alt="Gabriel Costa" class="avatar avatar-32 wp-user-avatar wp-user-avatar-32 alignnone photo">										</figure>										
</div>
<div class="col-xs-8 col-sm-10 col-md-10 info-autor">
<p>Trabalho com desenvolvimento web a mais de 5 anos e atualmente desenvolvo projetos para órgãos do governo federal na área de interface digital, programação e design. Tenho parceria na empresa AidWeb - Desenvolvimento web e trabalho desenvolvendo websites e protótipos de sistemas acessíveis e responsíveis.</p>
</div>
</div>
</section>
</section> <!-- FIM DO TEXTO -->
</article>
