Api-WordPress
=============

Tudo que precisa para criar um template, loops, chamadas... terá aqui


Exemplos

`` `<!-- CATEGORY NAME = category_name=Vídeo Aulas -->
<?php query_posts('showposts=1&cat=-1, -335');?>
<!-- ABRE O LOOP PARA POSTAGEM  -->
<?php if (have_posts()): while (have_posts()) : the_post();?>

<!-- FECHA O LOOP -->
<?php endwhile; else:?>
<?php endif?>`` `
