<?php
/**
 * Displays content for galery in front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

// Shortcode to output gallery
	function galeria_shortcode( $atts ) {
		function html(){ ?>
			<div class="contenedor-galeria" id="ninja-slider"> 
			    <div class="slider-inner img-fluid img-inicio informacion imagenes-generales-image-map imagenes-generales" id="">




	                <ul>
	                	<?php $i=0; while( have_rows('galeria') ): the_row();
	                      $imagen = get_sub_field('imagen'); $i++; ?>
		                	<li id="img<?php echo $i; ?>" >
		                		<a class="ns-img" href="<?php echo $imagen ?>" style="background-image: url(<?php echo $imagen ?>);"></a>
		                	</li>
	                	<?php endwhile; ?>
	                </ul>
	            	<div id="ninja-slider-prev" class=""><div>6 ∕ 12</div></div><div id="ninja-slider-next" class=""><div>6 ∕ 12</div></div><div id="ninja-slider-pause-play"></div>




			</div>
			<!-- <div id="thumbnail-slider" class="original" >
	            <div class="inner">
	                <ul> 
	                	<?php //$i=0; while( have_rows('galeria') ): the_row();
	                      //$imagen = get_sub_field('imagen'); $i++; ?>	                    
						<!-- <li id="img<?php //echo $i; ?>" imgUrl="<?php //echo $imagen ?>">
	                        <a class="thumb" href="<?php //echo $imagen ?>"></a>
	                    </li>
	                    
	                  <?php //endwhile; ?>
					</ul>
	
	            </div>
	        </div>  -->
		<?php };
	    return html();
	}
	add_shortcode( 'galeria-slider', 'galeria_shortcode');
?>