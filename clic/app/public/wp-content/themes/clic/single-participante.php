<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CLIC
 */

get_header();
?>

<figure>
	
	<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('custom-size'); // 'thumbnail' pode ser substituído por outro tamanho, como 'medium' ou 'large'
		}
	?>
</figure>
<h1 class="t-1 t-verde"><?php the_title();?></h1>
<h2 class="t-3 t-vermelho"><?php the_content();?></h2>

<?php
get_footer();
