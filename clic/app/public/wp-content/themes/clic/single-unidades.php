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

<h1 class="t-1 t-verde"><?php the_title();?></h1>

<?php if(get_field('descricao')):?>
    <h2 class="t-2 t-vermelho"><?php echo get_field('descricao'); ?></h2>
<?php endif;?>

<h2 class="t-2 t-vermelho"><?php echo get_field('anos'); ?></h2>`
<h2 class="t-2 t-vermelho"><?php echo get_field('habilidades_bncc'); ?></h2>

<?php 
$image = get_field('imagem_hero');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

<?php 
$image = get_field('mapa_da_unidade');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_field('codigo_youtube_video_curto'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_field('codigo_youtube_video_longo'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <?php 
$link = get_field('cartao_de_atividades');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>

<?php 

$link = get_field('apresentacao_google_slides');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>

<?php

get_footer();