<?php
/**
 * Template Name: Home
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

<div class="home-container">

    <div class="home-box">
        <div class="home-titulo">
            <!-- <h1 class="t-1 t-azul"><?php the_title();?></h1> -->
            <!-- <h1><a href="<?php bloginfo('url')?>" class="ir logo-home" >CLIC</a></h1> -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-clic.svg" alt="SVG Image" />

        </div>

            <!-- Parágrafo Curto------------------------------------------->
        <?php if(get_field('paragrafo_sobre_o_projeto')):?>
            <h2 class="t-3 t-preto home-paragrafo"><?php echo get_field('paragrafo_sobre_o_projeto'); ?></h2>
        <?php endif;?>
    </div>


    <!-- Video aprensentando o projeto -->
    <div class="video-container">
        <iframe width="500" height="315" src="https://www.youtube.com/embed/<?php echo get_field('codigo_youtube_video_apresentacao'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
        
</div>

<?php
get_footer();
