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
<h1 class="t-1 t-verde"><?php the_title();?></h1>
<div class="wrapper">
    <section class="destaque">
        <?php $destaque_imagem = get_field( 'destaque_imagem' ); ?>
        <?php if ( $destaque_imagem ) : ?>
            <img style="width: initial;" src="<?php echo esc_url( $destaque_imagem['url'] ); ?>" alt="<?php echo esc_attr( $destaque_imagem['alt'] ); ?>" />
        <?php endif; ?>
        
        <?php the_field( 'texto_destaque' ); ?>

       
            <a href="<?php bloginfo('url')?>/teste">Pagina teste</a>

    </section>
</div>


<?php
get_footer();
