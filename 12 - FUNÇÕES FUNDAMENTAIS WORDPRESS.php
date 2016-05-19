<?php


///////////////////////////////////////////////////////////////////////////////
// Remove WordPress Tags
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');


///////////////////////////////////////////////////////////////////////////////
// Como remover Width e Height padrão das img dentro do post do wordpress
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
  $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
  return $html;
}


///////////////////////////////////////////////////////////////////////////////
// TIRAR BARRA ADMIN
function my_function_admin_bar(){
  return false;
}
add_filter( "show_admin_bar" , "my_function_admin_bar");


///////////////////////////////////////////////////////////////////////////////
// REMOVER META GENERATOR
function remove_generator_filter() { return ''; }
 
if (function_exists('add_filter')) {
$types = array('html', 'xhtml', 'atom', 'rss2', /*'rdf',*/ 'comment', 'export');
 
foreach ($types as $type)
add_filter('get_the_generator_'.$type, 'remove_generator_filter');
}


///////////////////////////////////////////////////////////////////////////////
//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );

//Register area for custom menu
function register_my_menu() {
  register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}


///////////////////////////////////////////////////////////////////////////////
//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );


///////////////////////////////////////////////////////////////////////////////
// Enable post thumbnails
add_theme_support('post-thumbnails');


///////////////////////////////////////////////////////////////////////////////
// Função que limita quantidade de caracteres de uma discrição excerpt
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


///////////////////////////////////////////////////////////////////////////////
// Função que limita quantidade de caracteres de um título
function title($len = 80, $post_id=null){
  $title = get_the_title($post_id);
  if(strlen($title) > $len){
    $title = substr($title, 0, $len).'...';
  }
  echo $title;
}

///////////////////////////////////////////////////////////////////////////////
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


///////////////////////////////////////////////////////////////////////////////
// FUNÇÃO QUE CHAMA O TITULO DE BUSCA DO SEARCH E A QUANTIDADE DE RESULTADOS ENCONTRADOS 
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


///////////////////////////////////////////////////////////////////////////////
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


///////////////////////////////////////////////////////////////////////////////
// DESABILITAR MENSAGENS DE UPDATE DE PLUGINS
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );

/*
* Com o código abaixo, basta agora criar os modelos da seguinte forma:
* single-nomedacategoria.php
* Caso não exista um modelo personalizado, o WordPress utilizará
* normalmente o arquivo single.php.
* 
*/
add_filter('single_template', 'check_for_category_single_template');
 
function check_for_category_single_template( $t )
 
{
 
  foreach( (array) get_the_category() as $cat )
 
  {
 
    if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";
 
    if($cat->parent)
 
    {
 
      $cat = get_the_category_by_ID( $cat->parent );
 
      if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";
 
    }
 
  }
 
  return $t;
 
}

/**
 * Acrescenta class ao <a href=""> do MENU.
 *
*/
function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="mbr-buttons__link btn text-white"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

/**
 * Coloque o código abaixo no arquivo functions.php do seu tema. O número 80 é a quantidade de caracteres a exibir.
 * 
*/
function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 80);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
}

/**
 * Dentro do seu loop insira o código abaixo onde deseja exibir o resumo
*/
<?php echo get_excerpt(); ?>



/*
* Ativar compactação GZIP em um blog WordPress
*/
if(extension_loaded("zlib") && (ini_get("output_handler") != "ob_gzhandler")) 
add_action('wp', create_function('', '@ob_end_clean();@ini_set("zlib.output_compression", 1);'));

// FIM UPDATE PLUGINS
