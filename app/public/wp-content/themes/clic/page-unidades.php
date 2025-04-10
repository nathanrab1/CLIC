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


<h1 class="t-1 wrapper p-25"><?php the_title();?></h1>

<section class="wrapper">
	<?php
	// WP Query to fetch unidades
	$args = array(
		'post_type' => 'unidades', // Your custom post type
		'posts_per_page' => -1, // Get all unidades
	);
	$unidades = new WP_Query($args); ?>


	<div class="pb-25 t-4">
<!-- dropdown -->
<?php
if ($unidades->have_posts()) :
    $disciplinas_exibidas = array(); // array para armazenar disciplinas únicas
    ?>
    <select name="" class="filtro-categoria">
        <option value="todos">Todas as disciplinas</option>
        <?php
        while ($unidades->have_posts()) : $unidades->the_post();
            $disciplina = get_field('disciplina');
            if (!in_array($disciplina, $disciplinas_exibidas)) {
                $disciplinas_exibidas[] = $disciplina; // adiciona ao array para evitar repetições
                ?>
                <option value="<?php echo esc_attr($disciplina); ?>"><?php echo esc_html($disciplina); ?></option>
                <?php
            }
        endwhile;
        ?>
    </select>
<?php endif; ?>
<!-- dropdown -->
	</div>

    
	<div class="fx fx-row g-30 pb-35">	
		<?php
		if ($unidades->have_posts()) :
			while ($unidades->have_posts()) : $unidades->the_post(); ?>
				
				<article class="item-filtro" disciplina="<?php echo get_field('disciplina'); ?>">
					
					<?php $imagem_de_capa = get_field( 'imagem_de_capa' ); ?>
					<?php if ( $imagem_de_capa ) : ?>
						<img class="p-10" src="<?php echo esc_url( $imagem_de_capa['url'] ); ?>" alt="<?php echo esc_attr( $imagem_de_capa['alt'] ); ?>" />
					<?php endif; ?>

					<ul class="card-wrapper fx fx-row g-10 p-10">
						<!-- Disciplina----------------------------------------------------->
						<li class="t-6 t-branco tag bg-azul"><?php echo get_field('disciplina'); ?></li>

						<!-- Anos----------------------------------------------------->
						<li class="t-6 t-branco tag bg-verde"><?php echo get_field('anos'); ?></li>
				
						<!-- Duração----------------------------------------------------->
						<li class="t-6 t-branco tag bg-vermelho"><?php echo get_field('duracao'); ?></li>
					</ul>

					<h2 class="card-wrapper t-3 t-azul p-10" ><?php the_title(); ?></h2>
					
					<h3 class="card-wrapper t-4 p-10"><?php echo get_field( 'paragrafo_curto' ); ?></h3>
					
					<div class="card-wrapper pt-10 pb-25"><a class="t-preto bg-roxo-claro" href=<?php the_permalink(); ?>>Conheça a unidade</a></div>
					
				</article>
			<?php endwhile;
		else : ?>
			<p>Nenhum resultado para a sua busca.</p>
		<?php endif; ?>
	</div>
</section>




<?php
get_footer();
