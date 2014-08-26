
<!-- PAGE LINK / NOME / LI -->
<?php wp_list_pages('title_li=');?>



<!-- CATEGORIA LINK / NOME / LI -->
<?php $id_da_categoria = get_cat_id('NOME DA CATEGORIA'); $link_da_categoria = get_category_link($id_da_categoria); ?>