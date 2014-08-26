Api-WordPress
=============

Tudo que precisa para criar um template, loops, chamadas... terá aqui


> **Exemplo Loop Categorias**

```
<!-- CATEGORY NAME = category_name=Vídeo Aulas -->
<?php query_posts('showposts=1&cat=-1, -335');?>
<!-- ABRE O LOOP PARA POSTAGEM  -->
<?php if (have_posts()): while (have_posts()) : the_post();?>

<!-- FECHA O LOOP -->
<?php endwhile; else:?>
<?php endif?>
```

> **Exemplo style.css**

```
/*
Theme Name: Guia na Tela
Theme URI: 
Description: Este tema foi desenvolvido para o mecanismo de busca GNT
Version: 1.0
Author: Maicol / Ronner / Emerson
Autor URL: email@email.com.br
Tags:
*/

```
