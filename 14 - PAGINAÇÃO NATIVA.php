/*
* ESTA PARTE DO CÓDIGO É O LOOP E FICARÁ NO CATEGORY.PHP OU SINGLE.PHP
*/

<?php if (have_posts()) : 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts("category_name=blog&showposts=5&paged=$paged"); 
while (have_posts()) : the_post(); ?>

    <!-- Conteudo do post Inicio-->
    <h1 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
    <img class="img-responsive" src="<?php echo get_settings('home'); ?>/<?php $key="img"; echo get_post_meta(get_the_ID(),'img',true); ?>" alt="<?php the_title(); ?>" border="0" />

    <p class="text"><?php the_excerpt();?></p>

    <a href="<?php the_permalink(); ?>">
        <button type="button" class="btn btn-info btn-lg">Saiba mais...</button>
    </a>

    <hr class="hr" />

<?php endwhile; ?>
<?php endif; ?>

<!-- PAGINAÇÃO -->
<div id="pagination">
   <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
</div>


/*
* ESTA PARTE DO CÓDIGO DEVERÁ SER POSTO NO FUCTIONS.PHP
*/

/** Paginação nativa do WordPress */
function pagination_funtion() {
// Obtém o número total de páginas
global $wp_query;
$total = $wp_query->max_num_pages;
// Apenas a paginação se tivermos mais de uma página                   
if ( $total > 1 )  {
    // Obter a página atual
    if ( !$current_page = get_query_var('paged') )
        $current_page = 1;
                           
        $big = 999999999;
        // Estrutura do "formato" depende se estamos usando permalinks amigáveis
        $permalink_structure = get_option('permalink_structure');
        $format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/';
        echo paginate_links(array(
            'base'     => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            'format'   => $format,
            'current'  => $current_page,
            'total'    => $total,
            'mid_size' => 2,
            'type'     => 'list'
        ));
    }
}
/** END Pagination */


/*
* USAR NO SEU .CSS PADRÃO
*/

/** =Paginate links Styles ******************************************* **/ 
.page-numbers { 
    float: left; 
    margin-top: 10px; 
} 
.page-numbers li { 
    display: inline-block; 
    margin-left: 3px; 
} 
.page-numbers a, 
.page-numbers .dots, 
.page-numbers .next, 
.page-numbers .prev { 
    padding: 3px 5px; 
    background: #eee; 
    text-decoration: none; 
} 
.page-numbers a:hover, 
.page-numbers .next:hover, 
.page-numbers .prev:hover { 
    background: #666; 
} 
.page-numbers .current { 
    padding: 3px 5px; 
    background: #666; 
    color: #27B3CF; 
}
