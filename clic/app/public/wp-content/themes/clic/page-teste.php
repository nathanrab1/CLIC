<?php
/**
 *Template Name: Teste 
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
        // WP Query to fetch participants
		$args = array(
			'post_type' => 'participante', // Your custom post type
			'posts_per_page' => -1, // Get all participants
			'tax_query' => array(
				array(
					'taxonomy' => 'papel', // Your custom taxonomy
					'field'    => 'slug', // Use 'slug' to filter by slug
					'terms'    => 'professores', // The slug for 'Professores'
				),
			),
		);
        $participants = new WP_Query($args);

        if ($participants->have_posts()) :
            while ($participants->have_posts()) : $participants->the_post(); ?>
                <div class="grid-item">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium'); // Adjust size as needed
                    } ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile;
        else : ?>
            <p>No participants found.</p>
        <?php endif;

        // Reset post data
        wp_reset_postdata();
        ?>
    </div>
</div>

<div class="participants-grid">
    <h1>Sobral</h1>
    <div class="grid-container">
        <?php
        // WP Query to fetch participants
		$args = array(
			'post_type' => 'participante', // Your custom post type
			'posts_per_page' => -1, // Get all participants
			'tax_query' => array(
				array(
					'taxonomy' => 'papel', // Your custom taxonomy
					'field'    => 'slug', // Use 'slug' to filter by slug
					'terms'    => 'tltl', // The slug for 'Professores'
				),
			),
		);
        $participants = new WP_Query($args);

        if ($participants->have_posts()) :
            while ($participants->have_posts()) : $participants->the_post(); ?>
                <div class="grid-item">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium'); // Adjust size as needed
                    } ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile;
        else : ?>
            <p>No participants found.</p>
        <?php endif;

        // Reset post data
        wp_reset_postdata();
        ?>
    </div>
</div>

<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* 4 columns */
        gap: 20px; /* Adjust spacing between items */
    }
    .grid-item {
        border: 1px solid #ccc; /* Optional styling */
        padding: 10px; /* Optional styling */
        text-align: center; /* Center text */
    }
</style>

<?php
get_footer();
