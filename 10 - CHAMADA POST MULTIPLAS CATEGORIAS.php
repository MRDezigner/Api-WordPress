<?php query_posts('showposts=4&offset=0');?>
        <?php if (have_posts()): while (have_posts()) : the_post();?>
                <?php 
                    if ( in_category( 'obras-industriais' )) {
                        ?>
                        <div class="col-md-3">
                            <div class="service"> 
                                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                <p>Complexos Industriais, Indústria Têxteis, Estações de tratamento e efluentes industriais, Postos de combustíveis...</p>
                                <i class="fa fa-building-o"></i>
                            </div>
                            <div class="space40"></div>    
                        </div> 
                <?php 
                    } elseif ( in_category( 'obras-publicas' )) {
                       ?> 
                        <div class="col-md-3">
                            <div class="service">  
                                <h4>Obras Públicas</h4>
                                <p>Movimentação de terra e pavimentação, Sistema de abastecimento d'agua, Rede coletora e de tratamento de esgotos...</p>
                                <i class="fa fa-suitcase"></i>
                            </div>  
                            <div class="space40"></div>   
                        </div> 
                <?php
                    } elseif ( in_category( 'obras-comerciais-e-residenciais' )) {
                        ?>
                        <!-- // conteudo -->
                <?php
                    } elseif ( in_category( 'recuperacao-industrial' )) {
                       ?> 
                       <!-- //conteudo -->
                <?php
                    } else {
                        ?>
                       <!-- // etc.  -->

                <?php } ?>