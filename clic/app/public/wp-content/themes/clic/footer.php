<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CLIC
 */

?>

</main>

<footer class="bg-branco wrapper">
<?php if ( have_rows( 'footer__logos', 'option' ) ) : ?>
	<ul>
        <?php while ( have_rows( 'footer__logos', 'option' ) ) : the_row(); ?>
            <?php $logo = get_sub_field( 'logo' ); ?>
            <?php if ( $logo ) : ?>
                <li>
                    <a href="<?php the_sub_field( 'link' ); ?>" target="_blank">
                        <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                    </a>
                </li>
            <?php endif; ?>
        <?php endwhile; ?>
    </ul>
    <?php else : ?>
    
	<?php // No rows found ?>
<?php endif; ?>

</footer>


<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url')?>/assets/js/main.js"></script>



</body>
</html>
