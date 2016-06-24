<h1 class="topicosSite">Template Tags Do WordPress</h1>
<p>As Template Tags são usadas para “N” coisas no seu tema, mostrar informações como nome dos autores, exibir categorias dos posts, comentários, excluir uma categoria da home page, etc… Atualmente, na versão 2.3.3, o WordPress traz inúmeras tags assim, e sabendo usá-las com “imaginação” da pra fazer maravilhas com o este “simples” sistema de blogs!</p>
<p>A partir do Codex do WordPress vou explicar como colocar algumas tags em prática.<br>
Trate este artigo como um “resumão” em português do codex sobre as Template Tags, para que assim você possa tirar total proveito do sistema! Vamos lá?!</p>
<p>Antes de tudo…</p>
<h2>The Loop</h2>
<p>Basicamente o loop puxa informações dos posts que você cria. A maioria das Template Tags só funcionam DENTRO do loop, por isso a importância dele.</p>
<p>Ele começa assim:</p>
<pre>&lt;?php while (have_posts()) : the_post(); //início do loop =D ?&gt;</pre>
<p>E termina com este código:</p>
<pre>&lt;?php endwhile; //fim do loop ?&gt;</pre>
<p>Veja um exemplo de uma estrutura simples que exibe o título e o conteúdo do post usando o loop:</p>
<pre>&lt;?php while (have_posts()) : the_post(); //início do loop =D &gt;

&lt;h1&gt;&lt;a href="&lt;?php the_permalink();?&gt;"&gt;&lt;?php the_title();?&gt;&lt;/a&gt;&lt;/h1&gt;

&lt;?php the_content('Leia o resto...');?&gt;

&lt;?php endwhile; //fim do loop ?&gt;
</pre>
<p>Você também deve saber algumas tags principais e básicas que “puxam” informações como a url do post, exibem o conteúdo, título dos posts, etc. São elas:</p>
<pre>&lt;?php the_permalink();?&gt;</pre>
<p> – Exibe a url do post</p>
<pre>&lt;?php the_title();?&gt;</pre>
<p> – Exibe o título do post</p>
<pre>&lt;?php the_content('...');?&gt;</pre>
<p> – Exibe o conteúdo(texto) do post completo</p>
<pre>&lt;?php the_excerpt();?&gt;</pre>
<p> – Exibe o conteúdo do post resumidamente, limitando-se a 55 caracteres. Veja como personalizar esta tag.</p>
<p>Ótimo. Agora vamos as demais tags!</p>
<h2>Tags para os Autores – The_Author</h2>
<p>A tag The_Author tem a funcão de exibir, obviamente, o nome do autor do post. Ela deve ser usada dento do loop.</p>
<pre>&lt;?php the_author(); ?&gt;</pre>
<p>Exemplo: Este post foi enviado por
</p><pre>&lt;?php the_author(); ?&gt;</pre>
<p><strong>Irá ser exibido assim: Este post foi enviado por Carlos Henrique.</strong></p>
<p>Além dessa, existem outras praticamente iguais só que com funções especificas. Veja:</p>
<pre>&lt;?php the_author_email(); ?&gt;</pre>
<p>– Exibe o endereço de e-mail do autor.</p>
<pre>&lt;?php the_author_firstname(); ?&gt;</pre>
<p> – Exibe o primeiro nome do autor.</p>
<pre>&lt;?php the_author_lastname(); ?&gt;</pre>
<p> – Exibe o segundo nome do autor.</p>
<pre>&lt;?php the_author_nickname(); ?&gt;</pre>
<p> – Exibe o apelido do autor.</p>
<pre>&lt;?php the_author_url(); ?&gt;</pre>
<p> – Exibe o endereço do site/blog do autor.</p>
<p>A partir dessas tags acima, dá pra fazer várias coisas como:</p>
<p>Este post foi enviado por
</p><pre>&lt;a href="mailto:&lt;?php the_author_email (); ?&gt;"&gt;&lt;?php the_author(); ?&gt;&lt;/a&gt;</pre>
<p>.</p>
<p><strong>Será exibido o nome do autor apontando para o link do e-mail dele, assim: Este post foi enviado por Carlos Henrique.</strong></p>
<h2>Tags para os comentários – comments_number()</h2>
<p>Use para exibir o número de comentários que um determinado post tem. Exemplo:</p>
<p>Há
</p><pre>&lt;?php comments_number('Nenhum comentário','1 comentário','% comentários'); ?&gt;</pre>
<p> para este post.</p>
<p><strong>Será exibido como: Há 5 comentários para este post.</strong></p>
<h2>comments_link()</h2>
<p>Exibe o link para os comentários do post. Exemplo:</p>
<pre>&lt;a href="&lt;?php comments_link(); ?&gt;"&gt; Clique aqui para fazer um comentário&lt;/a&gt;</pre>
<p><strong>Será exibido como: Clique aqui para fazer um comentário</strong></p>
<h2>Para o comments.php</h2>
<p>Há outros códigos que convém serem citados, pois devem ser usados dentro do arquivo comments.php do seu tema. Veja:</p>
<pre>&lt;?php comment_author(); ?&gt;</pre>
<p>– Exibe o autor do comentário</p>
<pre>&lt;?php comment_author_link(); ?&gt;</pre>
<p> – Exibe o nome do autor do comentário, apontando para o link do site ou blog dele.</p>
<pre>&lt;?php comment_text(); ?&gt;</pre>
<p> – Exibe o conteúdo do comentário, o texto dele.</p>
<pre>&lt;?php comment_time('H:i'); ?&gt;</pre>
<p> – Exibe a hora que o comentário foi enviado</p>
<pre>&lt;?php comment_date('j-n-Y'); ?&gt;</pre>
<p> – Exibe a data que o post foi enviado</p>
<p>A partir daí um exemplo: <strong>obs: dentro do comments.php!</strong></p>
<pre>&lt;ul&gt;
&lt;li&gt;&lt;?php comment_author_link(); ?&gt;&lt;br /&gt;
&lt;?php comment_text(); ?&gt;&lt;/li&gt;
&lt;?php comment_date('j-n-Y'); ?&gt; às &lt;?php comment_time('H:i:s'); ?&gt;
&lt;/ul&gt;
</pre>
<p><strong>Irá ser exibido assim nos comentários do post: João – Olá! Tudo bem? Gostei do seu post! – 20/02/2008 às 18:35</strong></p>
<h2>Tags Bloginfo</h2>
<p>As tags bloginfo() são usadas para exibir informações sobre seu blog, tais como nome, url, rss, o css, enfim! Várias coisas! Abaixo as principais:</p>
<pre>&lt;?php bloginfo('name'); ?&gt;</pre>
<p> – Exibe o nome do seu blog</p>
<pre>&lt;?php bloginfo('description'); ?&gt;</pre>
<p>– Exibe a descrição do seu blog</p>
<pre>&lt;?php bloginfo('url'); ?&gt;</pre>
<p> – Exibe o endereço (url) do seu blog</p>
<pre>&lt;?php bloginfo('rss2_url');?&gt;</pre>
<p> – Exibe o endereço do seu feed RSS</p>
<pre>&lt;?php bloginfo('atom_url');?&gt;</pre>
<p> – Exibe a url do seu feed Atom</p>
<pre>&lt;?php bloginfo('admin_email');?&gt;</pre>
<p> – Exibe o endereço de e-mail do administrador do blog.</p>
<pre>&lt;?php bloginfo('template_url');?&gt;</pre>
<p> – Exibe a url completa para o tema do seu blog(ex: http://seublog.com/w…themes/SEUTEMA) </p>
<pre>&lt;?php bloginfo('stylesheet_url');?&gt;</pre>
<p> – Exibe o endereço do arquivo CSS do seu tema.</p>
<p>Um bom exemplo de uso destes códigos é na tag title do HTML, gerando o título do blog automaticamente com a template tag bloginfo(‘name’). Veja:</p>
<pre>&lt;html&gt;
&lt;head&gt;
&lt;title&gt;&lt;?php bloginfo('name'); ?&gt;&lt;/title&gt;
&lt;/head&gt;
</pre>
<p>Diferentes das demais acima, elas não precisam estar dentro do loop para funcionar.</p>
<h2>Get_Posts</h2>
<p>As get_posts são usadas para criar vários loops, com elas você puxa informações sobre os posts do seu blog, assim como o tradicional loop do WordPress(citado acima).</p>
<p>Como ela já é um loop, não faz sentido colocá-las dentro do “loop padrão” do WordPress, portanto, você pode colocar as get_posts basicamente em qualquer lugar.</p>
<p>Um loop com as get_posts começam com:</p>
<pre>&lt;?php
global $post;
$myposts = get_posts('');
foreach($myposts as $post) :
setup_postdata($post);
?&gt;</pre>
<p>e termina com:</p>
<pre>&lt;?php endforeach; ?&gt;</pre>
<p>Na terceira linha, onde esta o <strong>get_posts(“)</strong>, você insere paremetros sobre como o posts que estão dentro o loop funcionarão. Exemplo de um loop:</p>
<pre>&lt;ul&gt;
&lt;?php
global $post;
$myposts = get_posts('numberposts=5');
foreach($myposts as $post) :
setup_postdata($post);
?&gt;

&lt;li&gt;&lt;a href="&lt;?php the_permalink(); ?&gt;"&gt;&lt;?php the_title(); ?&gt;&lt;/a&gt;&lt;/li&gt;

&lt;?php endforeach; ?&gt;
&lt;/ul&gt;</pre>
<p>Note na terceira linha, onde esta o “numberposts=5”, com isso ele irá gerar uma lista (headlines) dos últimos 5 posts. Veja outros:</p>
<ul>
<li>category=-1 – Exibe todos os posts, menos os da categoria cuja sua ID seja 1</li>
<li>category=1 – Exibe apenas os posts da categoria cuja sua ID seja 1.</li>
<li>offset=1 – Não exibe o último post enviado.</li>
<li>order=asc/desc – Exibe posts ordenando por ordem decrecente ou ascendente.</li>
<li>orderby=rand() = Exibe os posts em forma aleatória</li>
</ul>
<p>Para usar vários parâmetros de uma só vez, apenas adicione um “&amp;” entre os códigos, assim:</p>
<pre>$myposts = get_posts('numberposts=10&amp;category=3&amp;offset=1&amp;order=asc&amp;orderby=rand()'); </pre>
<p>Assim ele irá exibir os últimos 10 posts (numberposts) da categoria ID 3 (category=3), eliminando último enviado (offset=1) em ordem ascendente e randomicamente (orderby=rand()).</p>
<h2>Tags para as categorias – the_category()</h2>
<p>Esta tag é usada para exibir o link da categoria que post foi postado, por exemplo:</p>
<p>Este por foi arquivado em
</p><pre>&lt;?php the_category(' ,'); ?&gt;</pre>
<p><strong>Será exibido como: Este post foi arquivado em cinema, pipoca, tv.</strong></p>
<p>Ela deve ser usada dentro do loop</p>
<p>Abaixo algumas tags que podem ser usadas no arquivo category.php do seu tema, fora do loop.</p>
<pre>&lt;?php single_cat_title(''); ?&gt;</pre>
<p> – Exibe o nome da categoria, sem links.</p>
<pre>&lt;?php echo category_description(); ?&gt;</pre>
<p> – Exibe a descrição da categoria.</p>
<h2>wp_list_categories</h2>
<p>Responsável por exibir em forma de lista as categorias do blog. Tradicionalmente ela é usada dentro da sidebar (sidebar.php), veja um exemplo clássico que gera a lista de todas as categorias do blog:</p>
<pre>&lt;ul&gt;
&lt;?php wp_list_categories('show_count=1&amp;title_li=&lt;h2&gt;Categorias&lt;/h2&gt;'); ?&gt;
&lt;/ul&gt;</pre>
<p>Resultando nisso:</p>
<ul>
<li>Cinema(5)</li>
<li>Livros(85)</li>
<li>Desenhos(16)</li>
<li>Animês(12)</li>
<li>Cinema Br(3)</li>
</ul>
<p>Note que o que esta dentro das aspas no entre parentes ,wp_list_categories(‘…’), são os parâmetros que dizem a função como ela deve exibir as categorias. Veja algumas:</p>
<ul>
<li>‘title_li=’ =&gt; Exibe o título da lista de categorias, note o exemplo acima.</li>
<li>‘show_count=1’ =&gt; Exibe a quantidade de posts que uma categoria tem, deixe o valor 1 para true, ou 0 para false.</li>
<li>‘exclude=10’ =&gt; Exclui uma categoria da lista. Substitua 10 pela a ID da categoria que você não quer seja exibida na lista.</li>
<li>‘include=5,6,10’ =&gt; Exibe a lista somente com as categorias IDs 5, 6 e 10.</li>
<li>‘child_of=20’ =&gt; Exibe APENAS as sub-categorias da categoria ID 20.</li>
</ul>
<p>Exemplo:</p>
<pre>&lt;?php wp_list_categories('show_count=0&amp;title_li=&lt;h2&gt;Categorias&lt;/h2&gt;&amp;exclude=3' ); ?&gt;</pre>
<p>O que ele faz:</p>
<p>Exibe uma lista das categorias do blog, sem contagem de posts (show_count=0) e excluindo a categoria ID 3 da lista.</p>
<h2>Query_posts</h2>
<p>As query_posts são usadas para determinar vários fatores no loop, tais como: quantos posts serão exibidos, excluir categorias de um loop, etc. Para usá-las basta inseri-las acima da primeira linha do loop, assim:</p>
<pre>&lt;?php query_posts($query_string . "posts_per_page=2&amp;cat=5"); ?&gt;</pre>
<pre>&lt;?php while (have_posts()) : the_post(); //início do loop =D ?&gt;</pre>
<p>O que ela irá fazer? Determina que seja exibido apenas os últimos 2 posts postados (posts_per_page) e somente da categoria ID 5(cat=5). Veja outros parâmetros:</p>
<ul>
<li>year=2008 =&gt; Exibe os posts que foram publicados somente do ano de 2008</li>
<li>author=2 =&gt; Exibe os posts que foram publicados somente pelo autor cuja ID seja 3</li>
<li>offset=1 =&gt; Não exibe o último post postado</li>
<li>cat=-2 =&gt; Determina que os posts da categoria ID 2 não serão exibidos</li>
<li>cat=2,6,17,38 =&gt; Exibe somente os posts das categorias com a ID 2, 6, 17 e 38</li>
<ul>
<p>*Para usar vários parâmetros, basta separá-los com um “&amp;”.</p>
<p>Por exemplo:
</p><pre>&lt;?php query_posts($query_string . "posts_per_page=12&amp;cat=-20"); ?&gt;</pre>
<p>Ele irá exibir os últimos 12 posts, menos os da categoria ID 20</p>
<h2>WP tag Cloud – Nuvem de tags</h2>
<p>As últimas versões do WordPress trouxeram um novo recurso que é a nuvem de tags. Segue abaixo alguns códigos importantes para que você possa usá-las:</p>
<pre>&lt;?php wp_tag_cloud('smallest=8&amp;largest=22&amp;number=20'); ?&gt;</pre>
<p> – Gera uma núvem com as 20 tags mais populares (number), determinando que a menor fonte será 8(smallest) e a maior será 22(largest).</p>
<p>Outra tag importante é a the_tags. Com ela você exibe dentro do post quais tags ele pertence.</p>
<p>Para usá-la insira este código dentro do loop do seu tema:</p>
<pre>&lt;?php the_tags('Tags: ',' &gt; '); ?&gt;</pre>
<p>Ufa! Por fim, acho que acabou! Espero que tenha gostado e entendido.
