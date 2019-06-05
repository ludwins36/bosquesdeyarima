<?php
/**
 * Displays content for disponibilidad in front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
// Shortcode to output disponibilidad
	function disponibilidad_shortcode( $atts ) {
		function disponibilidad(){ 
            $argsM=array(
                'post_type' => 'urbanismo',
                'posts_per_page' => -1, 
                'orderby' => 'title',
                'order' => 'ASC',
                'post_status'   => 'publish', 
                'category_name' => 'disponible', // categoria atada a la manzana para poder mostrarla cuando todas las casas estan disponible o almenos una
			); ?>
			<div class="contenedor-galeria"> 
			    <div class="contenedor-info disponibilidad">   
			        <div class="manzanasDisponibles" id="accordion" role="tablist" aria-multiselectable="true">
			            <?php $queryM = new WP_Query( $argsM );
			            if ( $queryM->have_posts() ) :
			                while ( $queryM->have_posts() ) : $queryM->the_post();
			                	$animacionMz = get_field('idmz'); ?>
								<div class="card <?php the_ID(); ?>">
									<div class="card-header" role="tab" id="heading<?php the_ID(); ?>">
									  	<?php
											if ( wp_is_mobile() ) { ?>
											  <h5 class="mb-0">
											    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse<?php the_ID(); ?>" class="collapsed" id="" ><h2><?php the_title(); ?></h2></a>
											  </h5>
											<?php }
											else{ ?>
											  <h5 class="mb-0">
											    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse<?php the_ID(); ?>" class="collapsed" id="<?php echo $animacionMz ?>" ><h2><?php the_title(); ?></h2></a>
											  </h5>
											  <script>
											  	// RESALTAR NOMBRE DE MANZANA
												  (function($, window, document, undefined) {
												    // Add an event listener to all of our buttons
												    $('.card-header a').mouseover(function() {
												        if ($(this).attr('id') == '<?php echo $animacionMz ?>') {
												        // Highlight our shape corresponding to the button and show tooltip
												        $.imageMapProHighlightShape('urbanismo', '<?php echo $animacionMz ?>');
												        $.imageMapProOpenTooltip('urbanismo', '<?php echo $animacionMz ?>');
												      }
												    }).mouseout(function() {
												         if ($(this).attr('id') == '<?php echo $animacionMz ?>') {
												        // Unhighlight our shape corresponding to the button and hide tooltip
												        $.imageMapProUnhighlightShape('urbanismo', '<?php echo $animacionMz ?>');
												        $.imageMapProHideTooltip('urbanismo', '<?php echo $animacionMz ?>');
												      }
												    });
												  })(jQuery, window, document); 
											  </script>
											<?php }
										?>										

									</div>
									<div id="collapse<?php the_ID(); ?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php the_ID(); ?>">
										<div class="card-block">
											<ul class="casas-disponibles"> 
							                	<?php while( have_rows('casa') ): the_row();
								                    $numero = get_sub_field('numero');
								                    $disponibilidad = get_sub_field('disponibilidad');
								                    $animacion = get_sub_field('id');
								                    if( $disponibilidad =='Disponible'){?>  

													  	<?php
															if ( wp_is_mobile() ) { ?>
																<li class="<?php echo $disponibilidad ?>">
											                        <span id="<?php echo $animacion ?>">Casa <?php echo $numero; ?></span>
											                    </li>
											                    <script >
																	(function($, window, document, undefined) {
																		// Add an event listener to all of our buttons
																		$('ul.casas-disponibles li span').mouseover(function() {
																		    if ($(this).attr('id') == '<?php echo $animacion ?>') {
																				// Highlight our shape corresponding to the button and show tooltip
																				$.imageMapProHighlightShape('urbanismo', '<?php echo $animacion ?>');
																				//$.imageMapProOpenTooltip('urbanismo', '<?php echo $animacion ?>');
																			}
																		}).mouseout(function() {
																		     if ($(this).attr('id') == '<?php echo $animacion ?>') {
																				// Unhighlight our shape corresponding to the button and hide tooltip
																				$.imageMapProUnhighlightShape('urbanismo', '<?php echo $animacion ?>');
																				//$.imageMapProHideTooltip('urbanismo', '<?php //echo $animacion ?>');
																			}
																		});
																	})(jQuery, window, document);												
																</script>
															<?php }
															else{ ?>
																<li class="<?php echo $disponibilidad ?>">
											                        <span id="<?php echo $animacion ?>">Casa <?php echo $numero; ?></span>
											                    </li>
											                    <script >
																	(function($, window, document, undefined) {
																		// Add an event listener to all of our buttons
																		$('ul.casas-disponibles li span').mouseover(function() {
																		    if ($(this).attr('id') == '<?php echo $animacion ?>') {
																				// Highlight our shape corresponding to the button and show tooltip
																				$.imageMapProHighlightShape('urbanismo', '<?php echo $animacion ?>');
																				$.imageMapProOpenTooltip('urbanismo', '<?php echo $animacion ?>');
																			}
																		}).mouseout(function() {
																		     if ($(this).attr('id') == '<?php echo $animacion ?>') {
																				// Unhighlight our shape corresponding to the button and hide tooltip
																				$.imageMapProUnhighlightShape('urbanismo', '<?php echo $animacion ?>');
																				$.imageMapProHideTooltip('urbanismo', '<?php echo $animacion ?>');
																			}
																		});
																	})(jQuery, window, document);												
																</script>																
															<?php }
														?>






							                  		<?php }  
							                  	endwhile; ?>

											</ul>

										</div>
									</div>
								</div>
							<?php endwhile;
			            endif;?>			        	
			        </div>
			    </div>
			    <div class="contenedor-varios urbanismo-image-map" id="image-map-pro-1300" style="float:left;">
			    	
			    </div>    
			</div>   
		<?php };
	    return disponibilidad();
	}
	add_shortcode( 'disponibilidad-casas', 'disponibilidad_shortcode');
?>    