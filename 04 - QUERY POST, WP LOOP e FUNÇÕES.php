<!-- QUERY POST -->
<!-- Excluir cat &cat= - ID -->
<!-- Apenas de uma cat &cat= ID -->
<!-- INICIO DO POST LIMIT showposts = 1 = -->
<!-- LIMIT offset= 1 -->

<!-- ===================================================
PRIMEIRO TIPO DE LOOP DE POSTAGENS.
APARTIR DE PARAMETROS OU SE O PARAMETRO FOI DEFINIDO
APARTIR DE UM CLIQUE POR CERTA CATEGORIA.
=====================================================-->
<!-- CATEGORY NAME = category_name=Vídeo Aulas -->
<?php query_posts('showposts=1&cat=-1, -335');?>
<!-- ABRE O LOOP PARA POSTAGEM  -->
<?php if (have_posts()): while (have_posts()) : the_post();?>

<!-- FECHA O LOOP -->
<?php endwhile; else:?>
<?php endif?>

<!-- ===================================================
SEGUNDO TIPO DE LOOP DE POSTAGENS.
ESSE MODO É PARA FAZER LOOPS ADICIONAIS, CASO NO SEU 
ARQUIVO JA HAJA UM LOOP, NESTE ELE IRA FAZER UMA REQUISIÇÃO
DE UMA CERTA CATEGORIA PARA FAZER A CHAMADA DAS POSTAGENS
PARAMETROS USADOS :

//$args = array('numberposts'=>3, 'category'=>-6,-9, 'order'=>'ASC');

-NUMEROS DE POSTAGENS A SER EXIBIDAS
-QUAIS AS CATEGORIAS A SEREM EXIBIDAS OU EXCLUIDAS DO LOOP
-ORDEM POR MAIS RECENTES
=====================================================-->
<?php global $post; // required
$args = array('category' => -9); // "-" exclude category 9
$custom_posts = get_posts($args);
foreach($custom_posts as $post) : setup_postdata($post);
"..."
endforeach;
?>

<!-- PEGA O LINK DO POST -->
<?php the_Permalink()?>

<!-- PEGA O TITULO DO POST-->
<?php the_title()?>

<!-- PEGA IMG DESTAQUE -->
<?php the_post_thumbnail(); ?>

<!-- OS VALORES DETERMINAM O TAMANHO -->
<?php the_post_thumbnail(array(160,160)); ?>

<!-- PEGA IMG DESTAQUE e ADD UMA CLASSE(S) -->
<?php the_post_thumbnail('post-thumbnail', array( 'class'	=> "zoomer-class attachment-post-thumbnail")); ?>

<!-- PEGA A DATA -->
<?php the_time('d M Y');?>

<!-- INFORMA OS COMENTÁRIOS -->
<?php comments_popup_link('0 comentário','1 comentário','% Comentários');?>

<!-- Comment form -->
<?php comments_template(); ?>

<!-- CONSIÇÃO COM PLUGIN (wp views)-->
<?php if(function_exists('the_views')){the_views();}?>

<!-- CRIA UM CAMPO PERSONALIZADO -->
<?php $key="VARIAVEL";echo get_post_meta($post->ID,$key,true);?>

<!-- LIMITA PALAVRAS (Baixe o plugin The Excerpt re-reloaded) -->
<?php the_excerpt_rereloaded(NUMERO DE LETRAS);?>

<!-- DESCRIÇÂO RESUMO 
Excerpt re-reloaded
-->
<?php the_excerpt_rereloaded(35);?>

<!-- OU -->
<?php the_excerpt();?>

<!-- condição para quando não haver resumos: -->
<?php  if (has_excerpt() ) { ?>
<?php the_excerpt(); ?>
<?php } ?>

<!-- TAGS com condição -->
<?php if (function_exists('the_tags'))the_tags();?>
