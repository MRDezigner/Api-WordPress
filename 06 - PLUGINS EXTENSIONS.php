



<!-- ENQUETE COM WP-POLLS -->
<?php if (function_exists('vote_poll') && !in_pollarchive()): ?>
	<ul>
    	<li><?php get_poll();?></li>
    </ul>
<?php endif; ?>


<!-- AUTOR TAGS -->
<?php the_author();?>
<!-- AVATAR -->
<?php echo get_avatar($author,80);?>
<!-- NOME -->
<?php $user_info = get_userdata($author);
echo($user_info->first_name . ", " . $user_info->last_name . "\n");
?>
<!-- DISCRIÇÃO -->
<?php the_author_description();?>
<!-- META PARA BLOG INTERNO -->
<?php the_author_posts_link();?>
OU
<a href="<?php bloginfo('url');?>/?author=<?php echo $author;?>">Ver perfil</a>
<!-- SITE DO AUTOR -->
<?php the_author_url();?>
<!-- EMAIL DO AUTOR -->
<?php the_author_email();?>
<!-- AUTOR NA PG BLOG FORA DE LOOP -->
<?php wp_title('',true);?>
<!-- OS MAIS COMENTADORES PLUGIN = top-commentators-widget -->
<ul>
<?php ns_show_top_commentators();?>
</ul>

<!-- NOSSO PLUGIN DE USUARIOS -->
<li>
<?php $author = 'N_ID_DO_USUARIO';?>
<?php echo get_avatar($author,80);?>
<?php $user_info = get_userdata($author);
echo($user_info->first_name . ", " . $user_info->last_name . "\n");?>
</li>

<!-- DINAMIC SIDEBAR -->
<?php dynamic_sidebar();?>