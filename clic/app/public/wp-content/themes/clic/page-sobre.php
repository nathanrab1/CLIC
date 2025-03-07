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

<div class="sobre-container">
    
    <div class="unidade-titulo-div">
        <h1 class="unidade-título">Sobre o CLIC</h1>
    </div>

    
    <div class="wrapper-sobre-texto">
        <p class=""><?php echo get_field('texto_sobre'); ?></p> 
    </div>

</div>

<?php
get_footer();
