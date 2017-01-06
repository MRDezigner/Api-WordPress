<!-- SINGLE TAGS -->

<!-- LOOP inicio -->
<?php if (have_posts()): while (have_posts()) : the_post();?>

<!-- LOOP fim -->
<?php endwhile; else:?>
<?php endif;?>

<!-- TITULO -->
<?php the_title();?>

<!-- POST -->
<?php the_content();?>

<!-- MORE -->
<?php the_excerpt();?>

<!-- TAGS com condição -->
<?php if (function_exists('the_tags'))the_tags();?>

<!-- Comment form -->
<?php comments_template(); ?>

<!-- PEGA DATA -->
<?php the_time('j M Y');?>

<!-- INFORMA OS COMENTÁRIOS -->
<?php comments_popup_link('0 Comentários','1 Comentário','% Comentários');?>

<!-- CONSIÇÃO COM PLUGIN (wp views) -->
<?php if(function_exists('the_views')){the_views();} ?>

<!-- AUTOR TAGS IN LOOP (DEVEM ESTAR DENTRO DO LOOP DO POST -->
<?php the_author();?>

<!-- AVATAR -->
<?php echo get_avatar(get_the_author_id(),80); ?>

<!-- NOME -->
<?php the_author_firstname();?>

<!-- SOBRENOME -->
<?php the_author_lastname();?>

<!-- DISCRIÇÃO -->
<?php the_author_description();?>

<!-- META PARA BLOG INTERNO -->
<?php the_author_posts_link();?>
