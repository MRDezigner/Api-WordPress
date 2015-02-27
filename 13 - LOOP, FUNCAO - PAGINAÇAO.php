<!-- PRIMEIRO UNSERIR ESSA FUNCAO NO FUNCTION PHP -->
<?php //NAO USAR A ABERTURA

function pagination_funtion() {  
global $wp_query;  
$total = $wp_query->max_num_pages;                      
if ( $total > 1 )  {  
    if ( !$current_page = get_query_var('paged') )  
        $current_page = 1;                               
        $big = 999;   
        $permalink_structure = get_option('permalink_structure');  
        $format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/';  
        echo paginate_links(array(  
            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),  
            'format' => $format,  
            'current' => $current_page,  
            'total' => $total,  
            'mid_size' => 2,  
            'type' => 'plain'  
        ));  
    }  
}


?> <!-- NAO USAR O FECHAMENTO -->



<!-- LOOP DA PAGINACAO -->

	<?php

	$wp_query = new WP_Query();
	query_posts( array( 'category_name' => 'oportunidades', 'showposts' => 9, 'paged'=>$paged ));
	if(have_posts()):
		while ($wp_query -> have_posts()) : $wp_query -> the_post();
	?>

	<a href="<?php the_Permalink()?>">
		<section class="col-md-4 no-pad item-oportunidade">
			<?php the_post_thumbnail(); ?>
			<figcaption>
				<h3><?php the_title()?></h3>
				<span><?php excerpt(50); ?></span>
			</figcaption>
		</section>
	</a>

	<?php endwhile; else:?>
    <?php endif?>

	<div class="clearfix"></div>
	<?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>