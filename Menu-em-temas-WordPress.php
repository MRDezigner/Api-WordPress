/* 
* Nosso menu poderá ter quantos níveis o usuário quiser (apesar de não recomendado) 
* ele irá exibir todos os submenus categorizados na forma em que foram registrados na 
* área administrativa (wp-admin) do WordPress.
*/

functions.php
/* Só para lembrar, nosso menu já está registrado em nosso functions.php, veja:*/

// Configurações do tema
function tutsup_setup() {		
	// Ativa o feed
	add_theme_support( 'automatic-feed-links' );
	
	// Ativa imagens destacadas
	add_theme_support( 'post-thumbnails' );
	
	// Ativa posts-formats
	add_theme_support( 'post-formats', array( 'audio', 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	
	// Adiciona tamanhos de imagens customizados
	add_image_size( 'tutsup-small', 430, 286, true );
	add_image_size( 'tutsup-large', 1140, 1140, false );
	add_image_size( 'tutsup-thumbnails', 200, 133, true );
 
	// Registra um menu
	register_nav_menus( array(
		'header' => 'Header',
	) );
}
add_action( 'after_setup_theme', 'tutsup_setup' );
 
/* 
* Veja as linhas marcadas acima. Nosso menu se chamará “header“, 
* você pode modificar esse nome se quiser.
*/

/*
* Acredite se quiser, mas você não vai precisar digitar nada em HTML. 
* Simplesmente abra nosso arquivo header.php e adicione o seguinte ao final:
*/

<?php
$header_menu_args = array(
	'theme_location'  => 'header',
	'menu'            => '',
	'container'       => 'nav',
	'container_class' => 'main-menu clearfix',
	'container_id'    => '',
	'menu_class'      => '',
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
 
wp_nav_menu( $header_menu_args );
?>

/*
* Pronto, agora seu menu já deve estar aparecendo sem nenhum estilo. 
* O único serviço que teremos é em nosso CSS, então vamos para o arquivo css/main-style.css.
*
* Observação: É necessário que você configure o menu na área administrativa 
* do WordPress e selecione “header” como local.
*
*
* CSS do nosso menu
* Todo menu WordPress pode ter submenus de vários níveis diferentes, 
* o que indica que o usuário pode optar por adicionar submenu dentro de submenu.
*
* Para não privarmos o usuário de ter a possibilidade de criar o menu 
* da maneira que preferir, vamos exibir todos os submenus categorizados 
* nos mesmos níveis em que foram incluídos na wp-admin.
*
* Para isso, teremos que utilizar alguns truques de CSS, veja:
*/

/**
 * Menu principal
 */
 
/* Container do menu */
.main-menu {
	background: #1e88e5;
}
.main-menu a {
	color: #fff;
	text-transform: uppercase;
	font-weight: 700;
	font-size: 12px;
	letter-spacing: 0.02em;
}
.main-menu a:hover {
	background: #4f9ee3;
}
 
/* Container dos links do menu - Espaço de 30px para acompanhar o layout */
.main-menu > ul {
	margin: 0 30px;
}
 
/* Mantém os sub-menus nas posições corretas */
.main-menu li {
	position: relative;
}
 
.main-menu > ul > li {
	float: left;
}
.main-menu > ul > li > a {
	display: block;
	padding: 10px;
}
.main-menu > ul > .menu-item-has-children > a {
	padding: 10px 30px 10px 10px;
}
 
/* Adiciona uma seta para baixo nos itens que tem sub-menu */
.main-menu > ul > .menu-item-has-children > a:after{
	display: block;
	content: ' ';
	border: 5px solid transparent; 
	border-top-color: #fff;
	right: 10px;
	top: 50%;
	margin-top: -2px;
	height: 5px;
	width: 5px;
	position: absolute;
	z-index: 9998;
}
 
/* Mantém os sub-menus mais abaixo nas posições corretas */
.menu-item-has-children  {
	position: relative;
}
 
.menu-item-has-children .sub-menu {
	position: absolute;
	background: #ddd;
	min-width: 200px;
	display: none;
	z-index: 9999;
}
.menu-item-has-children .sub-menu  li {
	border-bottom: 2px solid #ccc;
}
.menu-item-has-children .sub-menu  a {
	display: block;
	padding: 10px;
	color: #555;
}
 
/* Sub-menus dentro de sub-menus sempre aparecem ao lado direito */
.sub-menu .sub-menu {
	position: absolute;
	min-width: 200px;
	left: 100%;
	top: -0;
}
 
/* Não precisamos de javascript para mostra os sub-menus */
.menu-item-has-children:hover >.sub-menu {
	display: block;
}
.menu-item-has-children:hover >.sub-menu a:hover {
	background: #eee;
}

/*
* A partir daqui, seu menu deverá estar mais ou menos assim:
*/

![Alt Text](https://www.todoespacoonline.com/w/wp-content/uploads/2014/09/Screenshot_7.png)

/*
* Caso queira baixar o tema que criamos no ponto que paramos nesse tutorial, segue o link:
*/

<a href="https://www.todoespacoonline.com/w/tuts/2014/09/tutsup-tema-basico-1-7.zip">tutsup-tema-basico-1-7.zip</a>

Fonte: <a href="https://www.todoespacoonline.com/w/2014/09/menu-em-temas-wordpress/">TEO</a>

:clap:
