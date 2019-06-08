<?php
/**
 * Displays content for single tipo de casa
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
$texto_1 = get_field('linea_1');
$texto_2 = get_field('linea_2');
$dimension = get_field('area_construida');
$isometria = get_field('isometria');
$planta = get_field('planta');
$fachada_frontal = get_field('fachada_frontal');
$fachada_posterior = get_field('fachada_posterior');
$areas = get_field('areas');
$caracteristicas = get_field('caracteristicas');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('twentyseventeen-panel '); ?>>
	<div class="panel-content">
		<div class="container-fluid">
			<div class="entry-content">
				<div class="titulo">
					<h1>
						hola
						<span><?php the_title(); ?></span>
						<br>
						<span class="linea_2"><?php if ($dimension) : echo $dimension;
												else : ?><?php endif; ?> M2</span>
					</h1>
				</div>
				<div class="escoge-tu-casa contenido-tipo-casa">
					<div class="contenedor-galeria row">
						<div class="col-md-3 contenedor-info">
							<div class="" id="accordion" role="tablist" aria-multiselectable="true">
								<?php if ($isometria) : ?>
									<div class="card">
										<div class="card-header active" role="tab" id="heading">
											<span id="isometria" url="<?php echo $isometria; ?>">ISOMETRIA</span>
										</div>
									</div>
								<?php endif; ?>
								<?php if ($planta) : ?>
									<div class="card ">
										<div class="card-header" role="tab" id="heading">
											<span id="planta" url="<?php echo $planta; ?>">PLANTA</span>
										</div>
									</div>
								<?php endif; ?>
								<?php if ($fachada_frontal) : ?>
									<div class="card ">
										<div class="card-header" role="tab" id="heading">
											<span id="fachada_frontal" url="<?php echo $fachada_frontal; ?>">FACHADA FRONTAL</span>
										</div>
									</div>
								<?php endif; ?>
								<?php if ($fachada_posterior) : ?>
									<div class="card ">
										<div class="card-header" role="tab" id="heading">
											<span id="fachada_posterior" url="<?php echo $fachada_posterior; ?>">FACHADA POSTERIOR</span>
										</div>
									</div>
								<?php endif; ?>
								<?php if ($areas) : ?>
									<div class="card ">
										<div class="card-header" role="tab" id="heading">
											<span id="caracteristicas">CARACTERISTICAS</span>
										</div>
										<div id="collapse" class="" role="tabpanel" aria-labelledby="heading">
											<div class="card-block">
												<img src="<?php echo $caracteristicas; ?>">

											</div>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-9 contenedor-varios changeImage">
							<div class="contenedor" <?php if (has_post_thumbnail()) { ?> style="background-image: url('<?php the_post_thumbnail_url(); ?>') ;" <?php } else { ?> style="background-image: url('<?php bloginfo('template_url'); ?>/images/imagen_generica.jpg')  ; " <?php } ?>>

							</div>

						</div>
					</div>
					<?php
					// the_post_navigation(
					// 	array(
					// 		'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
					// 		'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
					// 	)
					// );
					?>
				</div>
			</div><!-- .entry-content -->
		</div><!-- .wrap -->
	</div><!-- .panel-content -->
</article><!-- #post-## -->