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

<!-- MENU -->

<?php

	$defaults = array(
		'theme_location'  => '',
		'menu'            => '',
		'container'       => 'nav',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);

	wp_nav_menu( $defaults );

?>

<DOCUMENTAÇÃO>
http://codex.wordpress.org/Conditional_Tags
http://codex.wordpress.org/Template_Tags
