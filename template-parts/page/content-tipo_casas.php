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
<article id="post-<?php the_ID(); ?>" <?php post_class('twentyseventeen-panel'); ?>>
	<div class="panel-content">
		<div class="container-fluid">
			<div class="entry-content">
				<div class="titulo">
					<h1>
						<span><?php the_title(); ?></span>
						<br>
						<span class="linea_2"><?php if ($dimension) : echo $dimension;
												else : ?><?php endif; ?> M2</span>
					</h1>
				</div>
				<div class="escoge-tu-casa contenido-tipo-casa">
					<div class="row justify-content-md-center">
						<div class="col-md-9 contenedor-info">
							<div class="" id="accordion" role="tablist" aria-multiselectable="true">
								<?php if ($isometria) : ?>
									<div class="card">
										<div class="card-header" role="tab" id="heading">
											<span id="isometria">ISOMETRIA</span>
										</div>
										<img id="isometria" style="width: 80vw;" src="<?php echo $isometria; ?>" />
									</div>
								<?php endif; ?>

							</div>
						</div>
					</div>
					<div class="row justify-content-md-center">
						<div class="col-md-9">
							<?php if ($planta) : ?>
								<div class="card ">
									<div class="card-header" role="tab" id="heading">
										<span id="planta">PLANTA</span>
									</div>
									<img id="planta" style="width: 80vw;" src="<?php echo $planta; ?>" />
								</div>
							<?php endif; ?>

						</div>
					</div>
					<div class="row justify-content-md-center">
						<div class="col-md-9">
							<?php if ($fachada_frontal) : ?>
								<div class="card">
									<div class="card-header" role="tab" id="heading">
										<span id="fachada_frontal">FACHADA FRONTAL</span>
									</div>
									<img id="fachada_frontal" style="width: 80vw;" src="<?php echo $fachada_frontal; ?>" />

								</div>
							<?php endif; ?>

						</div>
					</div>
					<div class="row justify-content-md-center">
						<div class="col-md-9">
							<?php if ($fachada_posterior) : ?>
								<div class="card">
									<div class="card-header" role="tab" id="heading">
										<span id="fachada_posterior">FACHADA POSTERIOR</span>
									</div>
									<img id="fachada_posterior" style="width: 80vw;" src="<?php echo $fachada_posterior; ?>" />
								</div>
							<?php endif; ?>

						</div>
					</div>
					<div class="row justify-content-md-center">
						<div class="col-md-6">
							<?php if ($areas) : ?>
								<div class="card ">
									<div class="card-header" role="tab" id="heading">
										<span id="caracteristicas">CARACTERISTICAS</span>
									</div>
									<img src="<?php echo $caracteristicas; ?>">
									<!-- <div id="collapse" class="" role="tabpanel" aria-labelledby="heading">
											<div class="card-block">

											</div>
										</div> -->
								</div>
							<?php endif; ?>
						</div>
					</div>

					<?php
					the_post_navigation(
						array(
							'prev_text' => '<span class="screen-reader-text">' . __('Previous Post', 'twentyseventeen') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Previous', 'twentyseventeen') . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg(array('icon' => 'arrow-left')) . '</span>%title</span>',
							'next_text' => '<span class="screen-reader-text">' . __('Next Post', 'twentyseventeen') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Next', 'twentyseventeen') . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg(array('icon' => 'arrow-right')) . '</span></span>',
						)
					);
					?>
				</div>
			</div><!-- .entry-content -->
		</div><!-- .wrap -->
	</div><!-- .panel-content -->
</article><!-- #post-## -->