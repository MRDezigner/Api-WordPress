<h1>Api-WordPress</h1>
=================
<h5>Tudo que precisa para criar um template, loops, chamadas... terá aqui</h5>
<h4>** Exemplo Loop Categorias **</h4>

<code>
// <!-- CATEGORY NAME = category_name=nome-da-categoria -->

<?php query_posts('showposts=1&cat=-1, -335');?>
</code>

<code>
// <!-- ABRE O LOOP PARA POSTAGEM  -->

<?php if (have_posts()): while (have_posts()) : the_post();?>
</code>

<code>
// <!-- FECHA O LOOP -->

<?php endwhile; else:?>

<?php endif?>
</code>

<h4>** Exemplo style.css **</h4>

<pre>
/*
Theme Name: WordPress // Nome que vc criou para o seu tema
Theme URI: http://dominio.com.br/meutheme // Local de exposição do seu tema
Description: Os recursos incluem um modelo de primeira página com os seus próprios widgets, uma fonte de exibição opcional, styling para formatos de post sobre tanto o índice e vistas únicas, e um modelo de página sem barra lateral opcional. Faça o seu menu personalizado.
Version: 1.0
Author: Maicol / Ronner / Emerson / MRDezigner
Autor URL: email@email.com.br
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags:
*/
</pre>
