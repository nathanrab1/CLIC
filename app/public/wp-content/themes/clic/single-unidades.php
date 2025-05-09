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


    <section class="fx fx-col fx-d-row destaque g-30 pb-25 fx-d-jcsb pt-d-25">
        <!-- Vídeo Geral --------------------------------------------->
        <iframe class="col-d-45" src="https://www.youtube.com/embed/<?php echo get_field('codigo_youtube_video_curto'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
        <div class="wrapper fx fx-col col-d-45 g-30">
            <!-- Título------->
            <?php if(get_field('titulo')):?>
                <h1 class="t-1 t-regular t-neue"><?php echo get_field('titulo'); ?></h1>
            <?php endif;?>
        
            <div class="fx fx-col g-20">
                <!-- Parágrafo Curto------------------------------------------->
                <?php if(get_field('paragrafo_curto')):?>
                    <p class="t-4"><?php echo get_field('paragrafo_curto'); ?></p>
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


      
        <section class="fx fx-col fx-d-row g-25 p-25 wrapper fx-jcsb">
        <!-- Compreensões Centrais----------------------------------->
            <h1 class="t-3 t-bold col-d-25 pt-10 ">Compreensões Centrais</h1>
            <div class="t-4 t-wys col-d-66"><?php echo get_field('ideias_centrais'); ?></div>
        </section>
        
        <section class="fx fx-col fx-d-row g-25 p-25 wrapper fx-jcsb">
        <!-- Habilidades BNCC----------------------------------->
            <h1 class="t-3 t-bold col-d-25 pt-10 ">Habilidades BNCC</h1>
            <div class="t-4 t-wys col-d-66"><?php echo get_field('habilidades_bncc'); ?></div>
        </section>

        <section class="fx fx-col fx-d-row g-25 p-25 wrapper fx-jcsb">
        <!-- Evidências de Aprendizagem----------------------------------->
            <h1 class="t-3   t-bold col-d-25 pt-10 ">Evidências de Aprendizagem</h1>
            <div class="t-4 t-wys col-d-66"><?php echo get_field('evidencias_de_aprendizagem'); ?></div>   
        </section>
  

   
    <!-- Encontros ------------------------------->
    <?php if ( have_rows( 'encontros' ) ) :
        $count = 1; 
    ?>
        <section class="fx fx-col g-25 pt-25 pb-55 wrapper">
            <h1 class="t-2 t-bold">Encontros</h1>
            <ul class="fx fx-col g-10">
            <?php while ( have_rows( 'encontros' ) ) : the_row(); ?>
                <li class="encontro-container">

                    <div class="encontro-title bb-preto i-seta-dir fx fx-row fx-aic fx-jcsb">
                        <h2 class="t-3">Encontro <?php echo $count; $count++;?></h2>
                    </div>

                    <div class="unidade-encontro-content p-15 wrapper-sanfona">
                        
                        <section class="fx-d fx-d-row fx-jcsb p-d-15">
                            <h2 class=" t-2 pb-8 col-d-25 t-regular t-neue"><?php echo get_sub_field( 'titulo' ); ?></h2>  
                            <iframe class="col-d-50"  src="https://www.youtube.com/embed/<?php echo get_sub_field( 'codigo_youtube' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
                        </section>

                         <div class="fx-d fx-d-row fx-jcsb">      
                            <section class="fx fx-col g-10 p-25 col-d-45">
                                <h2 class="t-3 t-bold">Objetivos de Aprendizagem</h2>
                                <div class="t-4 t-wys"><?php echo get_sub_field( 'objetivos' ); ?></div>
                            </section>
                            
                            <section class="fx fx-col g-10 p-25 col-d-45">
                                <h2 class="t-3 t-bold ">Materiais e Ferramentas</h2>
                                <div class="t-4 t-wys"><?php echo get_sub_field( 'materiais_e_ferramentas' ); ?></div>
                            </section>
                        </div>
                        
                        <section class="fx fx-col g-10 p-25">
                            <h2 class="t-3 t-bold">Principais Etapas</h2>
                            <div class="t-4 t-wys fx fx-col g-20"><?php echo get_sub_field( 'principais_etapas' ); ?></div>
                        </section>

                    </div>
                </li>
            <?php endwhile; ?>
            </ul>
        </section>
    <?php endif; ?>
    
<?php

get_footer();