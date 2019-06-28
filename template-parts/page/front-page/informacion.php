<?php

/**
 * Displays content for informacion in front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
// Shortcode to output informacion
function informacion_shortcode($atts)
{
	function informacion()
	{ ?>
		<div class="contenedor-galeria">
			<div class="contenedor-info informacion">
				<img src="<?php get_stylesheet_directory_uri() ?>/images/informacion-icon-big.png" class="emblema img-fluid" alt="Responsive image">
				<br>
				<div class="manzanasDisponibles" id="accordion" role="tablist" aria-multiselectable="true">
				</div>
			</div>
			<?php echo do_shortcode('[mukava-implantacion]'); ?>



		</div>
	<?php };
	return informacion();
}
add_shortcode('informacion-sc', 'informacion_shortcode');
?>