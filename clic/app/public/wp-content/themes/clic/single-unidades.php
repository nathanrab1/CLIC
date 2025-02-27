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

<div class="unidade-container">

    <!-- Título------->
    <div class="unidade-titulo-div">
        <?php if(get_field('titulo')):?>
            <h2 class="unidade-título"><?php echo get_field('titulo'); ?></h2>
        <?php endif;?>
    </div>


    <div class="wrapper-video-paragrafo">
        <!-- Vídeo Curto --------------------------------------------->
        <div class="video-container">
            <iframe width="500" height="315" src="https://www.youtube.com/embed/<?php echo get_field('codigo_youtube_video_curto'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <!-- Parágrafo Curto------------------------------------------->
        <?php if(get_field('paragrafo_curto')):?>
            <h2 class="unidade-paragrafo"><?php echo get_field('paragrafo_curto'); ?></h2>
        <?php endif;?>
    </div>

    <!-- Compreensões Centrais----------------------------------->
    <div class="wrapper-unidades-conteudo">
        <h2 class="compreensoes-titulo">Compreensões Centrais</h2>
        <h3 class="compreensoes-texto"><?php echo get_field('ideias_centrais'); ?></h3>
    </div>

    <!-- Habilidades BNCC----------------------------------->
    <div class="wrapper-unidades-conteudo">
        <h2 class="compreensoes-titulo">Habilidades BNCC</h2>
        <h3 class="compreensoes-texto"><?php echo get_field('habilidades_bncc'); ?></h3>
    </div> 

    <!-- Evidências de Aprendizagem----------------------------------->
    <div class="wrapper-unidades-conteudo">
        <h2 class="compreensoes-titulo">Evidências de Aprendizagem</h2>
        <h3 class="compreensoes-texto"><?php echo get_field('evidencias_de_aprendizagem'); ?></h3>
    </div>
   
    <!-- Anos----------------------------------------------------->
    <div class="unidade-anos">
        <h2 class="t-3">Ano Escolar Sugerido</h2>
        <p class="t-3"><?php echo get_field('anos'); ?></p>
    </div>   

    <!-- Duração----------------------------------------------------->
    <div class="">
        <h2 class="t-3">Duração</h2>
        <p class="t-3"><?php echo get_field('duracao'); ?></p>
    </div>  

  

    <!-- Encontros ------------------------------->
    <?php if ( have_rows( 'encontros' ) ) :
        $count = 1; 
    ?>
        <ul class="lista-encontros">
        <?php while ( have_rows( 'encontros' ) ) : the_row(); ?>
            <li class="encontro-container">
                <div class="encontro-title">
                    <h1>Encontro <?php echo $count; $count++;?> <span>(saiba mais)</span></h1>
                </div>
                <div class="unidade-encontro-content">
                    
                    <h2><?php echo get_sub_field( 'titulo' ); ?></h2>  
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_sub_field( 'codigo_youtube' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
                    <div class="encontro-objetivo"><?php echo get_sub_field( 'objetivos' ); ?></div>
                    <div class="encontro-etapa"><?php echo get_sub_field( 'principais_etapas' ); ?></div>
                    <div class="encontro-materiais"><?php echo get_sub_field( 'materiais_e_ferramentas' ); ?></div>

                </div>
            </li>
        <?php endwhile; ?>
        </ul>
    <?php else : ?>
	    <?php // No rows found ?>
    <?php endif; ?>

</div>
<div style="height: 20px;"></div>
<?php

get_footer();