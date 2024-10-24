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
<!-- Título------->
<?php if(get_field('titulo')):?>
    <h2 class="t-2 t-vermelho"><?php echo get_field('titulo'); ?></h2>
<?php endif;?>>

<!-- Parágrafo Curto------------------------------------------->
<?php if(get_field('paragrafo_curto')):?>
    <h2 class="t-2 t-vermelho"><?php echo get_field('paragrafo_curto'); ?></h2>
<?php endif;?>

<!-- Vídeo Curto ----------------------------------------------------------->
<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_field('codigo_youtube_video_curto'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

<!-- Mapa da unidade------------------------------------>
<?php 
$image = get_field('mapa_da_unidade');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

<!-- Anos----------------------------------------------------->
<h2 class="t-2 t-vermelho"><?php echo get_field('anos'); ?></h2>`

<!-- Habilidades BNCC----------------------------------->
<h2 class="t-2 t-vermelho"><?php echo get_field('habilidades_bncc'); ?></h2>

<!-- Encontros ------------------------------->

<div class="grid-container">

    <!-- Encontro 1-------------------------------------------------------->
    <?php if ( get_field( 'check_encontro_1' ) == 1 ) : ?>
        <div class="grid-item">
            <h2>Encontro 1</h2>
            
            <!-- Vídeo Encontro 1--------->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_field('codigo_youtube_video_encontro_1'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
            <!-- Objetivos Encontro 1--------->
            <h3><?php the_field( 'objetivos_encontro_1' ); ?></h3>
            
            <!-- Cartão de Atividades Encontro 1--------->
            <?php 
            $link = get_field('cartao_de_atividades_encontro_1');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>

            <!-- Cartão de Recursos Encontro 1--------->
            <?php 
            $link = get_field('cartao_de_recursos_encontro_1');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>

            <!-- Guia de Preparação do Encontro 1--------->
            <?php 
            $link = get_field('guia_de_preparacao_do_encontro_1');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <!-- Encontro 2-------------------------------------------------------->
    <?php if ( get_field( 'check_encontro_1' ) == 1 ) : ?>
        <div class="grid-item">
            <h2>Encontro 2</h2>
            
            <!-- Vídeo Encontro 1--------->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_field('codigo_youtube_video_encontro_2'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
            <!-- Objetivos Encontro 1--------->
            <h3><?php the_field( 'objetivos_encontro_2' ); ?></h3>
            
            <!-- Cartão de Atividades Encontro 1--------->
            <?php 
            $link = get_field('cartao_de_atividades_encontro_2');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>

            <!-- Cartão de Recursos Encontro 1--------->
            <?php 
            $link = get_field('cartao_de_recursos_encontro_2');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>

            <!-- Guia de Preparação do Encontro 1--------->
            <?php 
            $link = get_field('guia_de_preparacao_do_encontro_2');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <!-- Encontro 3-------------------------------------------------------->
    <?php if ( get_field( 'check_encontro_3' ) == 1 ) : ?>
        <div class="grid-item">
            <h2>Encontro 3</h2>
            
            <!-- Vídeo Encontro 1--------->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_field('codigo_youtube_video_encontro_3'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
            <!-- Objetivos Encontro 1--------->
            <h3><?php the_field( 'objetivos_encontro_3' ); ?></h3>
            
            <!-- Cartão de Atividades Encontro 1--------->
            <?php 
            $link = get_field('cartao_de_atividades_encontro_3');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>

            <!-- Cartão de Recursos Encontro 1--------->
            <?php 
            $link = get_field('cartao_de_recursos_encontro_3');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>

            <!-- Guia de Preparação do Encontro 1--------->
            <?php 
            $link = get_field('guia_de_preparacao_do_encontro_3');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    





</div>
<?php

get_footer();