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

<div class="unidade-container">

    <!-- Título------->
    <?php if(get_field('titulo')):?>
        <h2 class="unidade-título"><?php echo get_field('titulo'); ?></h2>
    <?php endif;?>

    <!-- Parágrafo Curto------------------------------------------->
    <?php if(get_field('paragrafo_curto')):?>
        <h2 class="t-4 t-preto unidade-paragrafo"><?php echo get_field('paragrafo_curto'); ?></h2>
    <?php endif;?>

    <!-- Vídeo Curto --------------------------------------------->
    <div class="video-container">
        <iframe width="500" height="315" src="https://www.youtube.com/embed/<?php echo get_field('codigo_youtube_video_curto'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <!-- Anos----------------------------------------------------->
    <div class="unidade-anos">
        <h2 class="t-3">Anos</h2>
        <p class="t-3"><?php echo get_field('anos'); ?></p>
    </div>

    <!-- Habilidades BNCC----------------------------------->
    <div class="unidade-habilidades">
        <h2 class="t-3">Habilidades BNCC</h2>
        <p class="t-4"><?php echo get_field('habilidades_bncc'); ?></p>
    </div>    

    <!-- Ideias Centrais----------------------------------->
    <div class="ideias-centrais">
        <h2 class="t-3 t-verde">Ideias Centrais</h2>
        <h3 class="t-4 t-preto"><?php echo get_field('ideias_centrais'); ?></h3>
    </div>

    <!-- Encontros ------------------------------->
    <?php if ( have_rows( 'encontros' ) ) :
        $count = 1; 
    ?>
        <ul class="lista-encontros">
        <?php while ( have_rows( 'encontros' ) ) : the_row(); ?>
            <li class="encontro-container">
                <div class="encontro-title">
                    <h1>Encontro <?php echo $count; $count++;?></h1>
                </div>
                <div class="unidade-encontro-content">
                    
                    <h2><?php echo get_sub_field( 'titulo' ); ?></h2>  
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_sub_field( 'codigo_youtube' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
                    <div class="encontro-objetivo"><?php echo get_sub_field( 'objetivos' ); ?></div>
                    <div class="encontro-etapa"><?php echo get_sub_field( 'principais_etapas' ); ?></div>
                    <div class="encontro-materiais"><?php echo get_sub_field( 'materiais_e_ferramentas' ); ?></div>

                </div>
            </li>
        <?php endwhile; ?>
        </ul>
    <?php else : ?>
	    <?php // No rows found ?>
    <?php endif; ?>

</div>
<?php

get_footer();