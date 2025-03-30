<?php
/**
 *Template Name: Equipe 
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
        
        <h2 class="wrapper t-1 p-35">Equipe</h2>
        <section class="wrapper fx fx-row g-30 pb-35">
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
                    
                    <div class="card-pessoa">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium'); // Adjust size as needed
                        } ?>
                        <h2 class="t-3"><?php the_title(); ?></h2>
                    </div>

                <?php endwhile;
            else : ?>
                <p>No participants found.</p>
            <?php endif;

            // Reset post data
            wp_reset_postdata();
            ?>
        </section>



<?php
get_footer();
