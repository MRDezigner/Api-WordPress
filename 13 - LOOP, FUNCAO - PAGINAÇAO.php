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
            'type' => 'plain',
            'next_text' => 'Próxima',
            'prev_text' => 'Anterior'
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


/*
* Paginação Nativa do WordPress
*/

<!--?php $args = array( 	'big_number' =----> 999999999,
        'base'       =&gt; str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
        'format'     =&gt; '?paged=%#%',
        'current'    =&gt; max( 1, get_query_var( 'paged' ) ),
        'total'      =&gt; $wp_query-&gt;max_num_pages,
        'prev_next'  =&gt; true,
        'end_size'   =&gt; 1,
        'mid_size'   =&gt; 4,
        'type'       =&gt; 'list'
);?&gt;
<!--?php echo paginate_links( $args ); ?-->

/*
* ---- CSS PAGINAÇÃO WORDPRESS ---- */
*/
ul.page-numbers li{
	float:left;
	margin:0 2px;
}
ul.page-numbers a, 
ul.page-numbers span {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background-color:transparent;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:1px solid #dcdcdc;
	display:inline-block;
	color:#777777;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:2px 6px;
	text-decoration:none;
	text-shadow:1px 1px 0px #ffffff;
}

ul.page-numbers a:active, 
ul.page-numbers span:active {
	position:relative;
	top:1px;
}
ul.page-numbers a:hover, 
ul.page-numbers span.current{
	-moz-box-shadow:inset 0px 1px 0px 0px #d9d9d9;
	-webkit-box-shadow:inset 0px 1px 0px 0px #d9d9d9;
	box-shadow:inset 0px 1px 0px 0px #d9d9d9;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #d9d9d9), color-stop(1, #676767) );
	background:-moz-linear-gradient( center top, #d9d9d9 5%, #676767 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d9d9d9', endColorstr='#676767');
	background-color:#d9d9d9;
	border:1px solid #676767;
	display:inline-block;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	text-decoration:none;
	text-shadow:1px 1px 0px #676767;
}
ul.page-numbers {
	text-align:center; 
	padding: 20px 0;
	width: 100%
}
