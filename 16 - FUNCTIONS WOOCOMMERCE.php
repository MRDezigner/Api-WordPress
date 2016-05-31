/*
* MOSTRA TODOS OS PRODUTOS DO WOOCOMMERCE
*/
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );

/*
* Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
*/
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
 
function woocommerce_header_add_to_cart_fragment( $fragments ) {
  global $woocommerce;
  
  ob_start();
  
  ?>
  <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
  <?php
  
  $fragments['a.cart-contents'] = ob_get_clean();
  
  return $fragments;
  
}

/*
* Enable support for WooCommerce on Pages.
* See http://codex.wordpress.org/Excerpt
*/
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );

/*
* Trabalhando com CSS da forma correta no WooCommerce
* Copie todos os arquivos da pasta woocommerce/assets/css/ para o seu tema, 
* por exemplo em uma pasta chamada /woocommerce/css.
*/
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

function my_theme_woocommerce_enqueue_styles( $styles ) {
	$base_url = str_replace( array( 'http:', 'https:' ), '', get_stylesheet_directory_uri() ) . '/woocommerce/css/';
	$styles['woocommerce-layout']['src']      = $base_url . 'woocommerce-layout.css';
	$styles['woocommerce-smallscreen']['src'] = $base_url . 'woocommerce-smallscreen.css';
	$styles['woocommerce-general']['src']     = $base_url . 'woocommerce.css';
	return $styles;
}
add_filter( 'woocommerce_enqueue_styles', 'my_theme_woocommerce_enqueue_styles' );

/*
* E pronto, agora o WooCommerce já sabe que deve carregar os arquivos que estão no seu tema 
* e isso irá sobreviver a qualquer atualização.
*/
