<!-- CHAMANDO CAMPOS POR META KEY -->

<!-- REFERENCIA DA PESQUISA // http://www.escolawp.com/2008/07/como-utilizar-os-campos-personalizados-no-wordpress-custom-fields/-->

<?php $imagem = get_post_meta($post->ID, 'imagem', true); ?>
<img src="<?php echo $imagem; ?>"

<!-- IMAGEM DESTACADA -->
<img class="img-responsive" src="<?php echo get_settings('home'); ?>/<?php $key="img"; echo get_post_meta(get_the_ID(),'img',true); ?>" alt="<?php the_title(); ?>" border="0" />
