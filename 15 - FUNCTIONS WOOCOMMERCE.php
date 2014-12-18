<?php


//RESET CSS WOOCOMMERCE
define('WOOCOMMERCE_USE_CSS', false);


remove_action('wp_head', 'wp_generator');

// MOSTRA TODOS OS PRODUTOS DO WOOCOMMERCE
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );


// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
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


// Como remover Width e Height padrão das img dentro do post do wordpress

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
  $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
  return $html;
}

// TIRAR BARRA ADMIN

function my_function_admin_bar(){
  return false;
}
add_filter( "show_admin_bar" , "my_function_admin_bar");




// Registrar áreas de widgets
function theme_widgets_init() {
 // Área 1
  register_sidebar( array (
    'name' => 'Sidebar Esquerda',
    'id' => 'sidebar-esquerda',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
    ) );

 // Área 2
  register_sidebar( array (
    'name' => 'Sidebar Esquerda2',
    'id' => 'sidebar-esquerda2',
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
    ) );
} // end theme_widgets_init

add_action( 'init', 'theme_widgets_init' );

$preset_widgets = array (
  'sidebar-esquerda'  => array( 'search', 'pages', 'categories', 'archives' ),
  'sidebar-esquerda2'  => array( 'links', 'meta' )
  );
if ( isset( $_GET['activated'] ) ) {
  update_option( 'sidebars_widgets', $preset_widgets );
}
// update_option( 'sidebars_widgets', NULL );

// Verificar widgets nas áreas de widgets
function is_sidebar_active( $index ){
  global $wp_registered_sidebars;

  $widgetcolums = wp_get_sidebars_widgets();

  if ($widgetcolums[$index]) return true;

  return false;
} // end is_sidebar_active


// CAMPO PERSONALIZADO PARA SLIDE HOME

function twpb_slide_metaboxes($meta_boxes) {

    // Como chamar o vídeo no post
    #echo apply_filters('the_content', get_post_meta(get_the_ID(), $prefix . 'id_video', true));

    $prefix = 'twpb_slide_'; // Prefix for all fields
    $meta_boxes[] = array(
      'id' => 'slide_metabox',
      'title' => 'Informações do Vídeo',
        'pages' => array('post'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
          array(
            'name' => 'Título Home',
            'type' => 'text',
            'id' => $prefix . 'titulo_home'
            ),
          array(
            'name' => 'Cor de Fundo',
                //'desc' => 'Inserir o link ou apenas o ID do vídeo do YouTube',
            'type' => 'colorpicker',
            'default' => '#51557A',
            'repeatable' => false,
            'id' => $prefix . 'color'
            ),
          array(
            'name' => 'Imagem de Capa',
                //'desc' => 'Inserir o link ou apenas o ID do vídeo do YouTube',
            'type' => 'file',
                'allow' => array('url', 'attachment'), // limit to just attachments with array( 'attachment' )
                'id' => $prefix . 'image'
                ),
          array(
            'name' => 'Canal',
                //'desc' => 'Description Goes Here',
                'taxonomy' => 'videos', //Enter Taxonomy Slug
                'type' => 'taxonomy_multicheck',
                'id' => $prefix . 'canal'
                ),
          array(
            'name' => 'Destacar no Home',
            'desc' => 'Destaca o vídeo na Home page',
            'type' => 'checkbox',
            'id' => $prefix . 'destaque_home'
            ),
          array(
            'name' => 'Promover Post',
            'desc' => 'Colocar o post como Destaque da sua Sessão',
            'type' => 'checkbox',
            'id' => $prefix . 'destaque'
            )
          ),
);

return $meta_boxes;
}

add_filter('cmb_meta_boxes', 'twpb_slide_metaboxes');

// CAMPO PERSONALIZADO PARA SLIDE HOME FIM




//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );

//Register area for custom menu
function register_my_menu() {
  register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}


//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Enable post thumbnails
add_theme_support('post-thumbnails');


/**
 * Função que limita quantidade de caracteres de uma discrição excerpt
 */

function content($car = 800, $post_id=null){
  $disc = get_the_content($post_id);
  if(strlen($disc) > $car){
    $disc = substr($disc, 0, $car).'...';
  }
  echo $disc;
}

function excerpt($car = 80, $post_id=null){
  $disc = get_the_excerpt($post_id);
  if(strlen($disc) > $car){
    $disc = substr($disc, 0, $car).'...';
  }
  echo $disc;
}


/**
 * Função que limita quantidade de caracteres de um título
 */

function title($len = 80, $post_id=null){
  $title = get_the_title($post_id);
  if(strlen($title) > $len){
    $title = substr($title, 0, $len).'...';
  }
  echo $title;
}


/** Paginacao */
function pagination_funtion() {
// Get total number of pages
  global $wp_query;
  $total = $wp_query->max_num_pages;
// Only paginate if we have more than one page                   
  if ( $total > 1 )  {
    // Get the current page
    if ( !$current_page = get_query_var('paged') )
      $current_page = 1;

    $big = 999999999;
        // Structure of "format" depends on whether we’re using pretty permalinks
    $permalink_structure = get_option('permalink_structure');
    $format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/';
    echo paginate_links(array(
      'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
      'format' => $format,
      'current' => $current_page,
      'total' => $total,
      'mid_size' => 2,
      'type' => 'list'
      ));
  }
}
  /*
  CHAMADA NO POST  -->  <?php pagination_funtion(); ?>
  */
  /** Fim Paginacao */

// Inicio agregar comentarios do facebook ao wordpress


  function full_comment_count() {
    global $post;
    $url = get_permalink($post->ID);  

    $filecontent = file_get_contents('https://graph.facebook.com/?ids=' . $url);
    $json = json_decode($filecontent);
    $count = $json->$url->comments;
    $wpCount = get_comments_number();
    $realCount = $count + $wpCount;
    if ($realCount == 0 || !isset($realCount)) {
      $realCount = 0;
    }
    return $realCount;
  }



/**
*   FUNÇÃO QUE CHAMA O TITULO DE BUSCA DO SEARCH E A QUANTIDADE DE RESULTADOS ENCONTRADOS 
*/
function search_results_title() {
  if( is_search() ) {

    global $wp_query;

    if( $wp_query->post_count == 1 ) {
      $result_title .= '1 Resultado achado';
    } else {
      $result_title .= $wp_query->found_posts . ' Resultados achados';
    }

    $result_title .= " para: “" . wp_specialchars($wp_query->query_vars['s'], 1) . "”";

    echo $result_title;

  }
}



/* ADICIONAR IMAGEM DESTAQUE AUTOMATICAMENTE EM POSTAGENS */

/*
 * COMO USAR: 
 *  1) Select all posts
 *  2) Get first attached images of the posts using get_children() function
 *  3) Use the set_post_thumbnail() function to set the featured image for the posts.
 */

function set_featured_image_for_posts()
{
  // Get all posts so set higher number, 
 // you can increase to any number if you have big amount of posts
  $args = array( 'numberposts' => 5000);

  // all posts
  $all_posts = get_posts( $args );  

  foreach($all_posts as $k=>$v)
  {
    $args = array(
      'numberposts' => 1,
      'order'=> 'ASC',
      'post_mime_type' => 'image',
      'post_parent' => $v->ID,
      'post_type' => 'attachment'
      );  

    // Get attachments
    $attachments = get_children( $args );
    $i=0;
    foreach($attachments as $attach)
    {
      // Get only first image
      if($i==0)
        $attachmentsid = $attach->ID;
      $i++;
    }

    // Set Featured image
    set_post_thumbnail($v->ID,$attachmentsid);
  }

}

/********************************* OU **********************************/

function autoset_featured() {
  global $post;
  $already_has_thumb = has_post_thumbnail($post->ID);
  if (!$already_has_thumb)  {
    $attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
    if ($attached_image) {
      foreach ($attached_image as $attachment_id => $attachment) {
        set_post_thumbnail($post->ID, $attachment_id);
      }
    }
  }
}
add_action('the_post', 'autoset_featured');
add_action('save_post', 'autoset_featured');
add_action('draft_to_publish', 'autoset_featured');
add_action('new_to_publish', 'autoset_featured');
add_action('pending_to_publish', 'autoset_featured');
add_action('future_to_publish', 'autoset_featured');

// FIM ADICIONAR IMAGEM DESTAQUES


// DESABILITAR MENSAGENS DE UPDATE DE PLUGINS


remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );

// FIM UPDATE PLUGINS






?>