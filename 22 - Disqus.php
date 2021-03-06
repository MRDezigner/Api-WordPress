/*
* INSTALAR O SISTEMA DE COMENTÁRIOS SEM UTILIZAR PLUGIN
*/

// O primeiro passo é localizar o ficheiro functions.php que estará dentro da pasta do seu template. 
// Depois de o localizar, edite-o inserindo o seguinte código:

function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}

// inserir o código <?php disqus_embed(‘meublog’); ?> 
// tanto no ficheiro single.php como no ficheiro page.php para introduzir os comentários.
// 'meublog' se referi ao id de cadastro no site da Disqus: www.disqus.com

/*
* Para exibir a contagem de comentários, mais uma função curta (na functions, claro).
* disqus_shortname = o nome de cadastro no Disqus
*/

function disqus_count($disqus_shortname) {	
wp_enqueue_script('disqus_count','http://'.$disqus_shortname.'.disqus.com/count.js');

echo '<a href="'. get_permalink() .'#disqus_thread"></a>';
}

/*
* E onde quiser exibir a contagem:
*/

<?php disqus_count('shortname-do-seu-blog'); ?>
