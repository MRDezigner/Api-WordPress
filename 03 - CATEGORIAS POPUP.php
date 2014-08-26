<!-- PEGA TODAS AS SUBCATEGORIAS DE UM CATEGORIA ORGANIZANDO PELO TITULO -->
<?php 
$id_da_categoria = get_cat_id('nome da categoria'); 
wp_list_categories('sort_column=name&child_of='."$id_da_categoria".'&title_li='); ?>

<!-- ARRAY EM CATEGORIAS -->
<?php $category = get_the_category(); echo $category[ARRAY]->cat_name;?>

<!-- PEGAR PRIMEIRA CATEGORIA APARTIR DE UM POST -->
<?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?>

<!-- PEGAR LISTA DE CATEGORIAS APARTIR DE UM POST -->
<?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if($categories){
	foreach($categories as $category) {
		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
	}
echo trim($output, $separator);
}
?>