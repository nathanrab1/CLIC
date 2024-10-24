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

<h1 class="t-1 t-verde"><?php the_title();?></h1>
<h2 class="t-3 t-vermelho"><?php the_content();?></h2>	

<div class="participants-grid">
    
    <h1>TLT Lab</h1>
	<div class="grid-container">
		<?php
		// WP Query to fetch unidades
		$args = array(
			'post_type' => 'unidades', // Your custom post type
			'posts_per_page' => -1, // Get all unidades
		);
		$unidades = new WP_Query($args);

		if ($unidades->have_posts()) :
			while ($unidades->have_posts()) : $unidades->the_post(); ?>
				<div class="grid-item">
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail('medium'); // Adjust size as needed
					} ?>
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
					<a href=<?php the_permalink(); ?>>Overview</a>
				</div>
			<?php endwhile;
		else : ?>
			<p>No unidades found.</p>
		<?php endif; ?>
	</div>
</div>



<?php
get_footer();
