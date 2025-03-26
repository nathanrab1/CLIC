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


    <section class="fx fx-col destaque g-30 pb-25">
        <!-- Vídeo Geral --------------------------------------------->
        <iframe class="" src="https://www.youtube.com/embed/<?php echo get_field('codigo_youtube_video_curto'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
        <div class="wrapper fx fx-col g-30">
            <!-- Título------->
            <?php if(get_field('titulo')):?>
                <h1 class="t-1"><?php echo get_field('titulo'); ?></h1>
            <?php endif;?>
        
            <div class="fx fx-col g-20">
                <!-- Parágrafo Curto------------------------------------------->
                <?php if(get_field('paragrafo_curto')):?>
                    <p class="t-5"><?php echo get_field('paragrafo_curto'); ?></p>
                <?php endif;?>
                
                <ul class="fx fx-row g-10">
                    <!-- Disciplina----------------------------------------------------->
                    <li class="t-6 t-branco tag bg-azul"><?php echo get_field('disciplina'); ?></li>

                    <!-- Anos----------------------------------------------------->
                    <li class="t-6 t-branco tag bg-verde"><?php echo get_field('anos'); ?></li>
            
                    <!-- Duração----------------------------------------------------->
                    <li class="t-6 t-branco tag bg-vermelho"><?php echo get_field('duracao'); ?></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="fx fx-col g-25 p-25 wrapper">
    <!-- Compreensões Centrais----------------------------------->
            <h1 class="t-3">Compreensões Centrais</h1>
            <div class="t-4 t-wys"><?php echo get_field('ideias_centrais'); ?></div>
    </section>
    
    <section class="fx fx-col g-25 p-25 wrapper">
    <!-- Habilidades BNCC----------------------------------->
        <h1 class="t-3">Habilidades BNCC</h1>
        <div class="t-4 t-wys"><?php echo get_field('habilidades_bncc'); ?></div>
    </section>

    <section class="fx fx-col g-25 p-25 wrapper">
    <!-- Evidências de Aprendizagem----------------------------------->
        <h1 class="t-3">Evidências de Aprendizagem</h1>
        <div class="t-4 t-wys"><?php echo get_field('evidencias_de_aprendizagem'); ?></div>   
    </section>
  




    
    <!-- Encontros ------------------------------->
    <?php if ( have_rows( 'encontros' ) ) :
        $count = 1; 
    ?>
        <section class="fx fx-col g-25 p-25 wrapper">
            <h1 class="t-3">Encontros</h1>
            <ul class="lista-encontros fx fx-col g-10">
            <?php while ( have_rows( 'encontros' ) ) : the_row(); ?>
                <li class="encontro-container">

                    <div class="encontro-title bb-preto i-seta-dir fx fx-row fx-aic fx-jcsb">
                        <h2>Encontro <?php echo $count; $count++;?></h2>
                    </div>

                    <div class="unidade-encontro-content p-25">
                        
                        <h2 class=" t-3"><?php echo get_sub_field( 'titulo' ); ?></h2>  
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_sub_field( 'codigo_youtube' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
            
                        <section class="fx fx-col g-10 p-25">
                            <h2 class="t-3">Objetivos de Aprendizagem</h2>
                            <div class="t-4 t-wys"><?php echo get_sub_field( 'objetivos' ); ?></div>
                        </section>
                        
                        <div class=""><?php echo get_sub_field( 'materiais_e_ferramentas' ); ?></div>


                        <section class="fx fx-col g-10 p-25">
                            <h2 class="t-3">Principais Etapas</h2>
                            <div class=""><?php echo get_sub_field( 'principais_etapas' ); ?></div>
                        </section>

                    </div>
                </li>
            <?php endwhile; ?>
            </ul>
        </section>
    <?php endif; ?>
    
<?php

get_footer();