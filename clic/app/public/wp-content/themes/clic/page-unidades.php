<?php
/**
 *
 *  *Template Name: Unidades
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


<h1 class="page-unidades-title t-1 t-azul"><?php the_title();?></h1>

<div class="page-unidades-grid-container">
	<?php
	// WP Query to fetch unidades
	$args = array(
		'post_type' => 'unidades', // Your custom post type
		'posts_per_page' => -1, // Get all unidades
	);
	$unidades = new WP_Query($args);

	if ($unidades->have_posts()) :
		while ($unidades->have_posts()) : $unidades->the_post(); ?>
			<div class="page-unidades-grid-item">
				
				<h2 class="t-3 t-laranja" ><?php the_title(); ?></h2>
				
				<?php $imagem_de_capa = get_field( 'imagem_de_capa' ); ?>
				<?php if ( $imagem_de_capa ) : ?>
					<img src="<?php echo esc_url( $imagem_de_capa['url'] ); ?>" alt="<?php echo esc_attr( $imagem_de_capa['alt'] ); ?>" />
				<?php endif; ?>

				<p><span>Disciplina:</span> <?php the_field( 'disciplina' ); ?></p>
				<p><span>Ferramenta principal:</span> <?php the_field( 'ferramenta_principal' ); ?></p>
				<p><span>Anos:</span> <?php echo get_field('anos'); ?></p>
				<div style="padding-top: 8px;"><a href=<?php the_permalink(); ?>>Conheça a unidade</a></div>
				
			</div>
		<?php endwhile;
	else : ?>
		<p>Nenhum resultado para a sua busca.</p>
	<?php endif; ?>
</div>
<div style="height: 20px;"></div>




<?php
get_footer();
