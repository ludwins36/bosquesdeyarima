<?php
/**
 * Displays content for grid in front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

// Shortcode to output gallery
	function home_grid_shortcode( $atts ) {
		function html(){ ?>
			<div class="row home_grid">
				<div class="col-lg-3">
					<img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/palmas.jpg">
				</div>
				<div class="col-lg-3 texto_grid">
					<?php $texto_1 = get_field('texto_grid_1');	$texto_2 = get_field('texto_grid_2'); ?>
					<h3>
						<span><?php if( $texto_1 ): echo $texto_1; else: ?>EN EL TIGRE<?php endif; ?></span>
						<br>
						<strong> <?php if( $texto_2 ): echo $texto_2; else: ?>HAY  VIDA<?php endif; ?></strong>
					</h3>				
				</div>					
				<div class="col-lg-3">
					<img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/pajaro.jpg">
				</div>
				<div class="col-lg-3">
					<img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/guaduas.jpg">
				</div>
			</div>
			<div class="row home_grid">
				<div class="col-lg-3">
					<img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/ardilla.jpg">
				</div>
				<div class="col-lg-3">
					<img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/siembra.jpg">
				</div>
				<div class="col-lg-3">
					<img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/piña.jpg">
				</div>
				<div class="col-lg-3">
					<img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/iguana.jpg">
				</div>	
			</div>
		<?php };
	    return html();
	}
	add_shortcode( 'home_grid', 'home_grid_shortcode');
?>