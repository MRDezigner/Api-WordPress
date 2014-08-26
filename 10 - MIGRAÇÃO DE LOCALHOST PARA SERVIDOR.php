<?php

//EXECUTAR AS QUERIES NO BANCO DE DADOS
//ISSO FAZ COM QUE ATUALIZE OS ENDEREÇOS DE ANTIGOS, PARA OS ENDEREÇOS NOVOS

UPDATE wp_options SET option_value = replace(option_value, 'http://www.enderecoantigo.com', 'http://www.endereconovo.com') WHERE option_name = ‘home’ OR option_name = ‘siteurl’;


//Use para atualizar o conteúdo do post, como imagens e links:
UPDATE wp_posts SET post_content = replace(post_content, 'www.dominioantigo.com.br', 'http://www.dominionovo.com.br');
//Use para conferir os links do post, imagens e links:
SELECT * FROM `wp_posts` WHERE post_content LIKE "%http://desenv%";

//Use para atualizar os links:
UPDATE wp_posts SET guid = replace(guid, 'http://www.dominioantigo.com.br', 'http://www.dominionovo.com.br');

//Buscar https (endereços) no banco, para migrar
SELECT * FROM wp_options WHERE option_value LIKE "%http://%";





?>