<!-- CORRIGINDO TEMA PARA WORDPRESS -->

<!-- Correção do topo do CSS -->
<!-- A partir da aqui esse código deverá ser salvo com o nome style.css -->
<!-- ele deverá fica na raiz do template, é dessa forma que o CMS reconhece o template criado -->
	
/*
Theme Name: MRDezigner         // Coloque o neome que desejar
Theme URI:                     // Seia o endereço do tema, caso vc disponibile no Wordpress.org
Description: Este tema foi desenvolvido para o Wordpress
Version: 1.0                   // A versão atual do template
Author: Seu Nome               // O nome do autor, claro :)
Autor URL: email@email.com.br  // O email do autor ou do empresa
Tags:                          // Referencia ao estilo, é utilç na busca.
*/
<!-- Aqui termina o CSS, é só isso pessoal -->


<!-- CORRIGINDO LINKS PARA FOLHA DE ESTILO -->
<style type="text/css" media="screen">
	@import url( <?php bloginfo('stylesheet_url'); ?> );
</style>

<!-- PEGA HEADER E FOOTER -->
<?php get_header();?>
<?php get_footer();?>

<!-- CRIANDO HEADER E FOOTER PERSONALIZADOS -->
<?php get_header(`SLUG CRIADO`);?>
<?php get_footer(`SLUG CRIADO`);?>
<!-- É SÓ DUPLICAR O ARQUIVO HEADER.PHP OU FOOTER.PHP E ACRESCENTER O SLUG -->


<!-- PEGA SIDEBAR -->
<!-- A EXEMPLO DO HEADER E DO FOOTER A SIDEBAR TB ACEITA UM SLUG -->
<?php get_sidebar();?>

<!-- PEGA ARQUIVO EXTERNO -->
<?php include (TEMPLATEPATH . '/arquivo.php'); ?>
