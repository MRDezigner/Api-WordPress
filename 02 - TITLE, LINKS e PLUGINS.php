<!-- CORRIGINDO TITULO WP -->
<title>
<?php if (is_home()){
	bloginfo('name');
}elseif (is_category()){
	single_cat_title(); echo ' -  ' ; bloginfo('name');
}elseif (is_single()){
	single_post_title();
}elseif (is_page()){
	bloginfo('name'); echo ': ' ; single_post_title();
}else {
	wp_title('',true);
} ?>
</title>

<!-- CORREÇÃO PARA INCLUIR SCRIPTS DOS PLUGINS -->
<!-- coloque logo acima do fechamento do head -->
<?php wp_head(); ?>
</head>

<!-- coloque logo acima do fechamento do body -->
<?php wp_footer(); ?>

<!-- CORREÇÃO DO LINK PARA TEMPLATE -->
<?php bloginfo('template_directory'); ?>/

<!-- LINK -->
<?php the_permalink(); ?>

<!-- CORREÇÃO DO LINK PARA HOME -->
<?php echo get_settings('home'); ?>

<DOCUMENTAÇÃO>
http://codex.wordpress.org/Conditional_Tags
http://codex.wordpress.org/Template_Tags