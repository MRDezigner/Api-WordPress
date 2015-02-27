Meta_Box
=============

Como usar Meta Box


> **Functions.php**

```
include('template/global.php');
```

> **Exemplo Meta_Box**

```
<?php

// Post Type - Resultado
register_post_type('resultado', array(
    'labels' => array(
        'name' => 'resultado',
        'singular_name' => 'Resultado',
        'add_new' => _x( 'Novo Resultado', 'resultado' ),
    ),
    //'description' => '',
    'public' => true,
    'menu_icon' => 'dashicons-format-chat',
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'resultado'),
    'query_var' => true,
    'supports' => array(
        'title',
        'editor',
        'excerpt',
        'trackbacks',
        'custom-fields',
        'comments',
        'revisions',
        'thumbnail',
        'tags',
        'category',
        'author',
        'page-attributes'
        )
));


function pb_resultado_metaboxes($meta_boxes) {
    $prefix = 'pb_resultado_';
    $meta_boxes[] = array(
      'id' => 'resultado_metabox',
      'title' => 'Informações do Resultado',
        'pages' => array('resultado'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
        'fields' => array(
          array(
            'name' => 'Link do Resultado',
            'type' => 'text',
            'id' => $prefix . 'link'
            ),
          array(
            'name' => 'Thumbnail do Resultado',
            'type' => 'file',
            'id' => $prefix . 'thumbnail'
            )
          ),
    );
    return $meta_boxes;
}

add_filter('cmb_meta_boxes', 'pb_resultado_metaboxes');


?>

```

> **Links Úteis**

https://github.com/WebDevStudios/Custom-Metaboxes-and-Fields-for-WordPress
