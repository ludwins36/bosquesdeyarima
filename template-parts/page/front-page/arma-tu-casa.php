<?php
/**
 * Displays content for arma tu casa page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

// Shortcode to output arma tu casa
	function arma_tu_casa_shortcode( $atts ) {
		function html(){
			$cocinaTa 	= get_field('cocina_tipo_a');
			$cocinaTb = get_field('cocina_tipo_b');
			$pisoTa = get_field('piso_tipo_a');
			$pisoTb = get_field('piso_tipo_b');
		?>

			<div class="escoge-tu-casa contenido-tipo-casa">
				<div class="contenedor-galeria row"> 
				    <div class="col-md-3 contenedor-info">   
				        <div class="" id="accordion" role="tablist" aria-multiselectable="true">
				        	<?php if($cocinaTa) : ?>
									<div class="card">
										<div class="card-header active" role="tab" id="heading">
										  	<span id="cocinaTa" url="<?php echo $cocinaTa; ?>">COCINA TIPO A</span>
										</div>
									</div>	
							<?php endif; ?>
							<?php if($cocinaTb) : ?>
									<div class="card ">
										<div class="card-header" role="tab" id="heading">
										  	<span id="cocinaTb" url="<?php echo $cocinaTb; ?>">COCINA TIPO B</span>
										</div>
									</div>	
							<?php endif; ?>
							<?php if($pisoTa) : ?>
									<div class="card ">
										<div class="card-header" role="tab" id="heading">
										  	<span id="pisoTa" url="<?php echo $pisoTa; ?>">PISO TIPO A</span>
										</div>
									</div>	
							<?php endif; ?>
							<?php if($pisoTb) : ?>
									<div class="card ">
										<div class="card-header" role="tab" id="heading">
										  	<span id="pisoTb" url="<?php echo $pisoTb; ?>">PISO TIPO B</span>
										</div>
									</div>	
							<?php endif; ?>
				        </div>
				    </div>
				    <div class="col-md-9 contenedor-varios changeImage">
				    	<div class="contenedor">
				    		<img class="img-fluid featured-img" src="<?php the_post_thumbnail_url(); ?>">
				    	</div>
				    	
				    </div>    
				</div>
			</div>
		<?php };
	    return html();
	}
	add_shortcode( 'arma_tu_casa', 'arma_tu_casa_shortcode');
?>