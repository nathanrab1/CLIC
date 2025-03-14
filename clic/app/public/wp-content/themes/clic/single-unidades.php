<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CLIC
 */

get_header();
?>


    <section class="fx fx-row destaque">
        <!-- Vídeo Geral --------------------------------------------->
        <iframe class="col-d-50" src="https://www.youtube.com/embed/<?php echo get_field('codigo_youtube_video_curto'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
        <div class="wrapper col-d-50">
            <!-- Título------->
            <?php if(get_field('titulo')):?>
                <h1 class="t-1"><?php echo get_field('titulo'); ?></h1>
            <?php endif;?>
        
            <!-- Parágrafo Curto------------------------------------------->
            <?php if(get_field('paragrafo_curto')):?>
                <p class="t-5"><?php echo get_field('paragrafo_curto'); ?></p>
            <?php endif;?>

            <!-- Disciplina----------------------------------------------------->
            <p class="t-6"><?php echo get_field('disciplina'); ?></p>

            <!-- Anos----------------------------------------------------->
            <p class="t-6"><?php echo get_field('anos'); ?></p>
        
            <!-- Duração----------------------------------------------------->
            <p class="t-6"><?php echo get_field('duracao'); ?></p>
        </div>
    </section>





    <!-- Compreensões Centrais----------------------------------->
    <div class="">
        <h1 class="t-3">Compreensões Centrais</h1>
        <section class="t-4"><?php echo get_field('ideias_centrais'); ?></section>
    </div>

    <!-- Habilidades BNCC----------------------------------->
    <div class="">
        <h1 class="t-3">Habilidades BNCC</h1>
        <section class="t-4"><?php echo get_field('habilidades_bncc'); ?></section>
    </div> 

    <!-- Evidências de Aprendizagem----------------------------------->
    <div class="">
        <h1 class="t-3">Evidências de Aprendizagem</h1>
        <section class="t-4"><?php echo get_field('evidencias_de_aprendizagem'); ?></section>
    </div>
   
  
  

    <!-- Encontros ------------------------------->
    <?php if ( have_rows( 'encontros' ) ) :
        $count = 1; 
    ?>
        <ul class="lista-encontros">
        <?php while ( have_rows( 'encontros' ) ) : the_row(); ?>
            <li class="encontro-container">

                <div class="encontro-title">
                    <h3>Encontro <?php echo $count; $count++;?></h3>
                    <h3>Clique para expandir</h3>
                </div>

                <div class="unidade-encontro-content">
                    
                    <h2 class="unidade-titulo-div t-3"><?php echo get_sub_field( 'titulo' ); ?></h2>  
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_sub_field( 'codigo_youtube' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
                    
                    
                    <div class="wrapper-unidades-conteudo">
                        <h2 class="unidades-conteudo-titulo">Objetivos de Aprendizagem</h2>
                        <h3 class="unidades-conteudo-texto"><?php echo get_sub_field( 'objetivos' ); ?></h3>
                    </div>
                                           

                    <div class="encontro-etapa"><?php echo get_sub_field( 'principais_etapas' ); ?></div>
                    <div class="encontro-materiais"><?php echo get_sub_field( 'materiais_e_ferramentas' ); ?></div>

                </div>
            </li>
        <?php endwhile; ?>
        </ul>
    <?php else : ?>
	    <?php // No rows found ?>
    <?php endif; ?>





    

<div style="height: 20px;"></div>
<?php

get_footer();