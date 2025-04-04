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
<section class="wrapper fx fx-d-row fx-col fx-jcc fx-aife g-30">
    <div>
        <img class="home-image-logo" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo-clic.svg" alt="Logo">
        <h1 class="t-1">Transforme o currículo a partir da computação</h1>  
    </div>
    <h2 class="t-3 home-paragrafo"><?php echo get_field( 'paragrafo_home' ); ?></h2>
</section>



<section class="wrapper-home home-imagem fx fx-row g-20 fx-jcc">
    <div class="fx-d fx-row col-d-40 g-30 fx-aic">
        <img class="col-d-30" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/home_icon_1.svg" alt="icon 1">
        <div class="col-d-60">
            <h2 class="t-4 t-bold p-10"><?php echo get_field( 'titulo_paragrafo_icone_1' ); ?></h2>
            <h3 class="t-4"><?php echo get_field( 'paragrafo_icone_1' ); ?></h3>
        </div>
    </div>
    <div class="fx-d fx-row col-d-40 g-30 fx-aic">
        <img class="col-d-30" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/home_icon_2.svg" alt="icon 2">
        <div class="col-d-60">
            <h2 class="t-4 t-bold p-10"><?php echo get_field( 'titulo_paragrafo_icone_2' ); ?></h2>
            <h3 class="t-4"><?php echo get_field( 'paragrafo_icone_2' ); ?></h3>
        </div>
    </div>
    <div class="fx-d fx-row col-d-40 g-30 fx-aic">
        <img class="col-d-30" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/home_icon_3.svg" alt="icon 3">
        <div class="col-d-60">
            <h2 class="t-4 t-bold p-10"><?php echo get_field( 'titulo_paragrafo_icone_3' ); ?></h2>
            <h3 class="t-4"><?php echo get_field( 'paragrafo_icone_3' ); ?></h3>
        </div>
    </div>
    <div class="fx-d fx-row col-d-40 g-30 fx-aic">
        <img class="col-d-30" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/home_icon_4.svg" alt="icon 4">
        <div class="col-d-60">
            <h2 class="t-4 t-bold p-10"><?php echo get_field( 'titulo_paragrafo_icone_4' ); ?></h2>
            <h3 class="t-4"><?php echo get_field( 'paragrafo_icone_4' ); ?></h3>
        </div>
    </div>
</section>

<?php
get_footer();
