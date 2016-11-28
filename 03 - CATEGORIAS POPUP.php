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

/* A função <?php the_category(); ?> exibe as categorias cadastradas no post. 
* Para exibir o nome de uma categoria específica você pode usar o seguinte:
*/

<?php
	$category = get_the_category('1');
	echo $category[0]->cat_name;
?>
/* 
* Lembrando que você deve alterar o valor 1 para o ID da categoria desejada.
*/


/* Para pegar o título da categoria dentro do Loop use: */
<?php
$categoria = get_the_category();
$nomeCategoria = $categoria[0]->cat_name;
echo $nomeCategoria;
?>

Para pegar o título da categoria fora do Loop use:

<?php
global $post;
$categoria = get_the_category($post->id);
$nomeCategoria = $categoria[0]->cat_name;
echo $nomeCategoria;
?>

/* Para pegar as subcategorias (categoria filho) mudeo o zero para um: */

<?php $subcategoria = get_the_category(); $nomesubCategoria = $categoria[1]->cat_name; ?>

/* Se estiver usando um Custom Post (Post personalizado) que possua Custom Taxonomy
 * (Categorias do psot personalizado) use o comando abaixo para exibir o nome da taxonomy:
*/

<?php global $post;
$terms = get_the_terms($post->id, 'AQUI VOCÊ COLOCA O NOME DA TAXONOMIA');
$nome_taxonomy = $terms[0]->name;
echo $nome_taxonomy;
?>

/* */

// Referência:

http://codex.wordpress.org/Template_Tags/get_the_category

?>
