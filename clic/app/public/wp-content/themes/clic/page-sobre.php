<?php
/**
 *
 *   *Template Name: Sobre
 * 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CLIC
 */

get_header();
?>

    <h1 class="t-1 wrapper pt-25">Sobre o CLIC</h1>
    
    <section class="fx-d fx-d-row destaque-sobre wrapper-d pt-25 fx-jcsb">
        <h2 class="t-3 col-d-33 wrapper-m pb-25 "><?php echo get_field('texto_sobre_1'); ?></h2>
        <iframe class="col-d-58" src="https://www.youtube.com/embed/<?php echo get_field('codigo_video_youtube_sobre'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </section>

    <p class="t-3 wrapper p-25"><?php echo get_field('texto_sobre_2'); ?></p>
    <p class="t-3 wrapper pb-25"><?php echo get_field('texto_sobre_3'); ?></p>

    <section class="fx fx-col fx-d-row g-25 p-25 wrapper fx-jcsb">
        <h2 class="t-3 t-bold col-d-25">O que fazemos?</h2>
        <h3 class="t-3 t-wys col-d-66"><?php echo get_field('texto_sobre_4'); ?></h3>
    </section>

    <section class="fx fx-col fx-d-row g-25 p-25 wrapper fx-jcsb">
        <h2 class="t-3 t-bold col-d-25"><?php echo get_field('texto_sobre_5'); ?></h2>
        <div class="t-3 t-wys col-d-66"><?php echo get_field('sobre_bullet_points'); ?></div>
    </section>

    <p class="t-3 wrapper pb-45"><?php echo get_field('texto_sobre_6'); ?></p>
     
    


<?php
get_footer();
