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

<h1 class="t-1 t-verde"><?php the_title();?></h1>
<h2 class="t-3 t-vermelho"><?php the_content();?></h2>

<?php

get_footer();
