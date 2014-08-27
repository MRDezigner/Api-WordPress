<!-- CORRIGINDO TEMA PARA WORDPRESS -->

<!-- Correção do topo do CSS -->

/*
Theme Name: Guia na Tela
Theme URI: 
Description: Este tema foi desenvolvido para o mecanismo de busca GNT
Version: 1.0
Author: Seu Nome
Autor URL: email@email.com.br
Tags:
*/

<!-- CORRIGINDO LINKS PARA FOLHA DE ESTILO -->
<style type="text/css" media="screen">
	@import url( <?php bloginfo('stylesheet_url'); ?> );
</style>

<!-- PEGA HEADER E FOOTER -->
<?php get_header();?>
<?php get_footer();?>

<!-- PEGA SIDEBAR -->
<?php get_sidebar();?>

<!-- PEGA ARQUIVO EXTERNO -->
<?php include (TEMPLATEPATH . '/arquivo.php'); ?>