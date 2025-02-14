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
				<iframe   src="https://www.youtube.com/embed/<?php the_field( 'codigo_youtube_video_curto' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
				<p><span>Disciplina:</span> <?php the_field( 'disciplina' ); ?></p>
				<p><span>Ferramenta principal:</span> <?php the_field( 'ferramenta_principal' ); ?></p>
				<p><span>Anos:</span> <?php echo get_field('anos'); ?></p>
				<a href=<?php the_permalink(); ?>>Link para a unidade</a>
				
			</div>
		<?php endwhile;
	else : ?>
		<p>Nenhum resultado para a sua busca.</p>
	<?php endif; ?>
</div>
<div style="height: 20px;"></div>




<?php
get_footer();
