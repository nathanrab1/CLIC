<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CLIC
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/scss/main.css?v=0.1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>

	<div class="header-container">

		<div class="topo-menu">
			<button class="bt-menu">Menu</button>
			<h1><a href="<?php bloginfo('url')?>" class="ir logo-header" >Freire</a></h1>
		</div>

		<nav>	
			<ul>
				<li><a href="<?php bloginfo('url')?>">Home</a></li>
				<li><a href="<?php bloginfo('url')?>/mapa-mental">Mapa Mental</a></li>
				<li class="sub" ><a href="<?php bloginfo('url')?>/quem-somos">Quem Somos</a>
					<!-- <ul class="sub-menu">
						<li><a href="<?php bloginfo('url')?>/unidades/regionalizacao-das-americas/">Unidade 1</a></li>
						<li><a href="<?php bloginfo('url')?>/unidades/regionalizacao-da-europa/">Unidade 2</a></li>
					</ul> -->
				</li>
				<li><a href="<?php bloginfo('url')?>/pesquisas-e-projetos">Pesquisas e Projetos</a></li>
				<li><a href="<?php bloginfo('url')?>/eventos">Eventos</a></li>
			</ul>
		</nav>

	</div>
	
</header>
<main>