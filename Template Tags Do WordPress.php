/* 
* As Template Tags são usadas para “N” coisas no seu tema, mostrar informações como nome dos autores, 
* exibir categorias dos posts, comentários, excluir uma categoria da home page, etc… 
* Atualmente, na versão 4.7, o WordPress traz inúmeras tags assim, e sabendo usá-las com “imaginação” 
* da pra fazer maravilhas com o este “simples” sistema de blogs!
* A partir do Codex do WordPress vou explicar como colocar algumas tags em prática.
* Trate este artigo como um “resumão” em português do codex sobre as Template Tags, para que assim você possa tirar total proveito do sistema! Vamos lá?!
* Antes de tudo…
* 
* THE LOOP
* Basicamente o loop puxa informações dos posts que você cria. 
* A maioria das Template Tags só funcionam DENTRO do loop, por isso a importância dele.
*
* 
* Ele começa assim:
*/

  <?php while (have_posts()) : the_post(); ?>

/* 
* E termina com este código:
*/

  <?php endwhile; ?>

/* 
* Veja um exemplo de uma estrutura simples que exibe 
* o título e o conteúdo do post usando o loop:
*/

  <?php while (have_posts()) : the_post(); ?>

    <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>

    <?php the_content(); ?>

  <?php endwhile; ?>

/* 
* Você também deve saber algumas tags principais e básicas que “puxam” 
* informações como a url do post, exibem o conteúdo, título dos posts, etc. São elas:
*/

  <?php the_permalink(); ?>

/* 
* Exibe a url do post
*/

  <?php the_title(); ?>

/* 
* Exibe o título do post
*/

  <?php the_content(); ?>

/* 
* Exibe o conteúdo(texto) do post completo
*/

  <?php the_excerpt(); ?> // Exibe o conteúdo do post resumidamente, limitando-se a 55 caracteres. 

/* 
*  Veja como personalizar esta tag.
*
* Ótimo. Agora vamos as demais tags!
*/

/* 
* TAGS PARA OS AUTORES – THE_AUTHOR
* A tag The_Author tem a funcão de exibir, obviamente, o nome do autor do post. 
* Ela deve ser usada dento do loop.
*/

  <?php the_author(); ?>

/* 
* Exemplo: Este post foi enviado por <?php the_author(); ?>
*
* Irá ser exibido assim: Este post foi enviado por Carlos Henrique.
*
* Além dessa, existem outras praticamente iguais só que com funções especificas. Veja:
*/
  <?php the_author_email(); ?> // Exibe o endereço de e-mail do autor.

  <?php the_author_firstname(); ?> // Exibe o primeiro nome do autor.

  <?php the_author_lastname(); ?> // Exibe o segundo nome do autor.

  <?php the_author_nickname(); ?> // Exibe o apelido do autor.

  <?php the_author_url(); ?> // Exibe o endereço do site/blog do autor.

/* 
* A partir dessas tags acima, dá pra fazer várias coisas como:
*
* Este post foi enviado por
*/
  <a href="mailto:<?php the_author_email (); ?>"><?php the_author(); ?></a>

// Será exibido o nome do autor apontando para o link do e-mail dele, assim: Este post foi enviado por Carlos Henrique.

/* TAGS PARA OS COMENTÁRIOS – COMMENTS_NUMBER()
* Use para exibir o número de comentários que um determinado post tem. Exemplo:
*/

  Há <?php comments_number('Nenhum comentário','1 comentário','% comentários'); ?> para este post.

// Será exibido como: Há 5 comentários para este post.

/* COMMENTS_LINK()
* Exibe o link para os comentários do post. Exemplo:
*/

  <a href="<?php comments_link(); ?>"> Clique aqui para fazer um comentário</a>

// Será exibido como: Clique aqui para fazer um comentário

/* PARA O COMMENTS.PHP
* Há outros códigos que convém serem citados, 
* pois devem ser usados dentro do arquivo comments.php do seu tema. Veja:
*/

  <?php comment_author(); ?> // Exibe o autor do comentário

  <?php comment_author_link(); ?> // Exibe o nome do autor do comentário, apontando para o link do site ou blog dele.

  <?php comment_text(); ?> // Exibe o conteúdo do comentário, o texto dele.

  <?php comment_time('H:i'); ?> // Exibe a hora que o comentário foi enviado

  <?php comment_date('j-n-Y'); ?> // Exibe a data que o post foi enviado

// A partir daí um exemplo: obs: dentro do comments.php!

  <ul>
    <li><?php comment_author_link(); ?><br />
    <?php comment_text(); ?></li>
    
    <?php comment_date('j-n-Y'); ?> às <?php comment_time('H:i:s'); ?>
  </ul>

// Irá ser exibido assim nos comentários do post: João – Olá! Tudo bem? Gostei do seu post! – 20/02/2008 às 18:35

/* TAGS BLOGINFO
* As tags bloginfo() são usadas para exibir informações sobre seu blog, tais como nome, url, rss, o css, enfim! Várias coisas! Abaixo as principais:
*/
  <?php bloginfo('name'); ?> // Exibe o nome do seu blog

  <?php bloginfo('description'); ?> // Exibe a descrição do seu blog

  <?php bloginfo('url'); ?> // Exibe o endereço (url) do seu blog

  <?php bloginfo('rss2_url');?> // Exibe o endereço do seu feed RSS

  <?php bloginfo('atom_url');?> // Exibe a url do seu feed Atom

  <?php bloginfo('admin_email');?> // Exibe o endereço de e-mail do administrador do blog.

  <?php bloginfo('template_url');?> // Exibe a url completa para o tema do seu blog(ex: http://seublog.com/w…themes/SEUTEMA)

  <?php bloginfo('stylesheet_url');?> // Exibe o endereço do arquivo CSS do seu tema.

// Um bom exemplo de uso destes códigos é na tag title do HTML, gerando o título do blog automaticamente com a template tag bloginfo(‘name’). Veja:

  <html>
    <head>
      <title><?php bloginfo('name'); ?></title>
    </head>

//Diferentes das demais acima, elas não precisam estar dentro do loop para funcionar.

/*GET_POSTS
* As get_posts são usadas para criar vários loops, com elas você puxa informações sobre os
* posts do seu blog, assim como o tradicional loop do WordPress(citado acima).
* Como ela já é um loop, não faz sentido colocá-las dentro do “loop padrão” do WordPress, portanto, você pode colocar as get_posts basicamente em qualquer lugar.
* Um loop com as get_posts começam com:
*/
  
  <?php
  global $post;
  $myposts = get_posts('');
  foreach($myposts as $post) :
  setup_postdata($post);
  ?>
  
/* e termina com: */

  <?php endforeach; ?>
  
/* 
* Na terceira linha, onde esta o get_posts("), você insere paremetros sobre como o 
* posts que estão dentro do loop funcionarão. Exemplo de um loop:
*/
    
  <ul>
    <?php
    global $post;
    $myposts = get_posts('numberposts=5&category=1&offset=1&order=asc');
    foreach($myposts as $post) :
    setup_postdata($post);
    ?>

    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

    <?php endforeach; ?>
  </ul>
  
/* Note na terceira linha, onde esta o “numberposts=5”, com isso ele irá gerar uma 
* lista (headlines) dos últimos 5 posts. Veja outros:

* category=-1 – Exibe todos os posts, menos os da categoria cuja sua ID seja 1
* category=1 – Exibe apenas os posts da categoria cuja sua ID seja 1.
* offset=1 – Não exibe o último post enviado.
* order=asc/desc – Exibe posts ordenando por ordem decrecente ou ascendente.
* orderby=rand() = Exibe os posts em forma aleatória
* Para usar vários parâmetros de uma só vez, apenas adicione um “&” entre os códigos, assim:
*/

  $myposts = get_posts('numberposts=10&category=3&offset=1&order=asc&orderby=rand()'); 

/* Assim ele irá exibir os últimos 10 posts (numberposts) da categoria ID 3 (category=3), 
* eliminando último enviado (offset=1) em ordem ascendente e randomicamente (orderby=rand()).
*
* TAGS PARA AS CATEGORIAS – THE_CATEGORY()
* Esta tag é usada para exibir o link da categoria que post foi postado, por exemplo:
*
*/ 
  
  Este post foi arquivado em: <?php the_category(' ,'); ?>

/* Será exibido como: Este post foi arquivado em cinema, pipoca, tv.
*
* Ela deve ser usada dentro do loop
*
* Abaixo algumas tags que podem ser usadas no arquivo category.php do seu tema, fora do loop.
*/

  <?php single_cat_title(''); ?>  // Exibe o nome da categoria, sem links.

  <?php echo category_description(); ?> // Exibe a descrição da categoria.

/* WP_LIST_CATEGORIES
* Responsável por exibir em forma de lista as categorias do blog. 
* Tradicionalmente ela é usada dentro da sidebar (sidebar.php), 
* veja um exemplo clássico que gera a lista de todas as categorias do blog:
*/
  
  <ul>
    <?php wp_list_categories('show_count=1&title_li=<h2>Categorias</h2>'); ?>
  </ul>

/* Resultando nisso:
*
* Cinema(5)
* Livros(85)
* Desenhos(16)
* Animês(12)
* Cinema Br(3)
*
* Note que o que esta dentro das aspas no entre parentes ,wp_list_categories(‘…’), 
* são os parâmetros que dizem a função como ela deve exibir as categorias. Veja algumas:
*
*  
* ‘title_li=’ => Exibe o título da lista de categorias, note o exemplo acima.
* ‘show_count=1’ => Exibe a quantidade de posts que uma categoria tem, deixe o valor 1 para true, ou 0 para false.
* ‘exclude=10’ => Exclui uma categoria da lista. Substitua 10 pela a ID da categoria que você não quer seja exibida na lista.
* ‘include=5,6,10’ => Exibe a lista somente com as categorias IDs 5, 6 e 10.
* ‘child_of=20’ => Exibe APENAS as sub-categorias da categoria ID 20.
* Exemplo:
*/

  <?php wp_list_categories('show_count=0&title_li=<h2>Categorias</h2>&exclude=3' ); ?>

/*  O que ele faz:
*
* Exibe uma lista das categorias do blog, sem contagem de posts (show_count=0) e excluindo a categoria ID 3 da lista.
*/
  
/* QUERY_POSTS
* As query_posts são usadas para determinar vários fatores no loop, 
* tais como: quantos posts serão exibidos, excluir categorias de um loop, etc. 
* Para usá-las basta inseri-las acima da primeira linha do loop, assim:

<?php query_posts($query_string . "posts_per_page=2&cat=5"); ?>
<?php while (have_posts()) : the_post(); //início do loop =D ?>

/*
*  O que ela irá fazer? Determina que seja exibido apenas os últimos 2 posts postados (posts_per_page) e somente da categoria ID 5(cat=5). Veja outros parâmetros:
*
* year=2008 => Exibe os posts que foram publicados somente do ano de 2008
* author=2 => Exibe os posts que foram publicados somente pelo autor cuja ID seja 3
* offset=1 => Não exibe o último post postado
* cat=-2 => Determina que os posts da categoria ID 2 não serão exibidos
* cat=2,6,17,38 => Exibe somente os posts das categorias com a ID 2, 6, 17 e 38
* Para usar vários parâmetros, basta separá-los com um “&”.
*
* Por exemplo:
*/ 

  <?php query_posts($query_string . "posts_per_page=12&cat=-20"); ?>

// Ele irá exibir os últimos 12 posts, menos os da categoria ID 20

/* WP TAG CLOUD – NUVEM DE TAGS
* As últimas versões do WordPress trouxeram um novo recurso que é a nuvem de tags. 
* Segue abaixo alguns códigos importantes para que você possa usá-las:
*/

  <?php wp_tag_cloud('smallest=8&largest=22&number=20'); ?>

/* Gera uma núvem com as 20 tags mais populares (number), 
*  determinando que a menor fonte será 8(smallest) e a maior será 22 (largest).
*
* Outra tag importante é a the_tags. Com ela você exibe dentro do post quais tags ele pertence.
*
* Para usá-la insira este código dentro do loop do seu tema:
*/ 

  <?php the_tags('Tags: ',' > '); ?>

// Ufa! Por fim, acho que acabou! Espero que tenha gostado e entendido.

/*
* André Buzzo
* Sou desenvolvedor web especializado na criação de sites gerenciáveis com WordPress; colunista da Abraweb – Associação Brasileira de Webdesigners – e tutor na instituição MX Cursos.
* http://www.andrebuzzo.com.br
*/
