<?php
/**
 * Displays content for casa tipo 2 in front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
// Shortcode to output disponibilidad
	function casa_tipo_2_shortcode( $atts ) {
		function casa_tipo_2(){ 
            $argsM=array(
                'post_type' => 'tipo_casas',
                'posts_per_page' => 1, 
                'orderby' => 'title',
                'order' => 'ASC',
                'post_status'   => 'publish', 
                'category_name' => 'casa-tipo-2',
			); ?>
			<div class="contenedor-galeria"> 
			    <div class="contenedor-info">   
			        <img src="http://mammutmedia.net/mukava-del-valle/wp-content/themes/MammutInteractivo/images/casa-tipo-2-icon-big.png" class="emblema img-fluid" alt="Responsive image">
			        <br>
					<div class="characteristics tipo2" id="accordionT2" role="tablist" aria-multiselectable="true">
			            <div class="card informacionT2">
							<div class="card-header" role="tab" id="headingInformacionT2">
							  <h5 class="mb-0">
							    <a data-toggle="collapse" data-parent="#accordionT2" href="#collapseInformacionT2" aria-expanded="false" aria-controls="collapseInformacionT2" class="collapsed"><h2>Información</h2></a>
							  </h5>
							</div>
							<div id="collapseInformacionT2" class="collapse " role="tabpanel" aria-labelledby="headingInformacionT2">
								<div class="card-block">
									<ul class="ch"> 
										<li id=""><span>3 Baños</span></li>
										<li id=""><span>3 Habitacione</span></li>
                    					<li id=""><span>Sala</span></li>
                    					<li id=""><span>Comedor</span></li>
                    					<li id=""><span>Parqueadero</span></li>
					                </ul>
								</div>
							</div>
						</div>
			            <div class="card planosT2">
							<div class="card-header" role="tab" id="headingplanosT2">
							  <h5 class="mb-0">
							    <a data-toggle="collapse" data-parent="#accordionT2" href="#collapseplanosT2" aria-expanded="false" aria-controls="collapseplanosT2" class="collapsed"><h2>Planos</h2></a>
							  </h5>
							</div>
							<div id="collapseplanosT2" class="collapse " role="tabpanel" aria-labelledby="headingplanosT2">
								<div class="card-block">
									<ul class="ch"> 
										<li id="planoCasaT2P1"><span>Piso 1</span></li>
                    					<li id="planoCasaT2P2"><span>Piso 2</span></li>
					                </ul>
								</div>
							</div>
						</div>						
			            <div class="card isometriaT2">
							<div class="card-header" role="tab" id="headingIsometriaT2">
							  <h5 class="mb-0">
							    <a data-toggle="collapse" data-parent="#accordionT2" href="#collapseIsometriaT2" aria-expanded="false" aria-controls="collapseIsometriaT2" class="collapsed"><h2>Isometria</h2></a>
							  </h5>
							</div>
							<div id="collapseIsometriaT2" class="collapse " role="tabpanel" aria-labelledby="headingIsometriaT2">
								<div class="card-block">
									<ul class="ch"> 
										<li id="casaT2P1"><span>Piso 1</span></li>
                    					<li id="casaT2P2"><span>Piso 2</span></li>
					                </ul>
								</div>
							</div>
						</div>						
						<div class="card imagenesT2">
							<div class="card-header" role="tab" id="headingImagenesT2">
							  <h5 class="mb-0">
							    <a data-toggle="collapse" data-parent="#accordionT2" href="#collapseImagenesT2" aria-expanded="false" aria-controls="collapseImagenesT2" class="collapsed"><h2>Imagenes</h2></a>
							  </h5>
							</div>
							<div id="collapseImagenesT2" class="collapse " role="tabpanel" aria-labelledby="headingImagenesT2">
								<div class="card-block">
									<ul class="ch"> 
					                    <li id="comedorT2"><span>Comedor</span></li>
					                    <li id="habitacionT2"><span>Habitación</span></li>
					                    <li id="jardinT2"><span>Jardín</span></li>
					                    <li id="salaT2"><span>Sala</span></li>
					                </ul>
								</div>
							</div>
						</div>
						<div class="card tour360T2">
							<div class="card-header" role="tab" id="headingTour360T2">
							  <h5 class="mb-0">
							    <a data-toggle="collapse" data-parent="#accordionT2" href="#collapseTour360T2" aria-expanded="false" aria-controls="collapseTour360T2" class="collapsed"><h2>Tour 360°</h2></a>
							  </h5>
							</div>
							<div id="collapseTour360T2" class="collapse " role="tabpanel" aria-labelledby="headingTour360T2">
								<div class="card-block">
									<ul class="ch"> 
										<li id="OpenTourT2"><span>Iniciar Tour</span></li>
					                </ul>
								</div>
							</div>
						</div>
						<div style="display: none" class="card videoT2">
							<div class="card-header" role="tab" id="headingVideoT2">
							  <h5 class="mb-0">
							    <a data-toggle="collapse" data-parent="#accordionT2" href="#collapseVideoT2" aria-expanded="false" aria-controls="collapseVideoT2" class="collapsed"><h2>Video</h2></a>
							  </h5>
							</div>
							<div id="collapseVideoT2" class="collapse " role="tabpanel" aria-labelledby="headingVideoT2">
								<div class="card-block">
									<ul class="ch"> 
										<li><span>Recorrido Interior</span></li>
					                </ul>
								</div>
							</div>
						</div>
			        </div>
			    </div>
			    <?php $queryM = new WP_Query( $argsM );
		            if ( $queryM->have_posts() ) :
		                while ( $queryM->have_posts() ) : $queryM->the_post();
		                	//$fondo = the_post_thumbnail( 'full' ); ?>
						    <div class="contenedor-varios casa-tipo-2-image-map casa-tipo-2" id="image-map-pro-858" style="float:left; background: url(<?php   the_post_thumbnail_url() ?>);">
						    </div>
						    <script type="text/javascript">
					    		start2 = "<?php the_post_thumbnail_url(); ?>";
					    	</script>
			    		<?php endwhile;
			        endif;?>     
			</div>   
		<?php };
	    return casa_tipo_2();
	}
	add_shortcode( 'casa_tipo_2-ch', 'casa_tipo_2_shortcode');
?>    

<!-- Modal -->
<div class="modal fullscreen-modal fade" id="tourT2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <iframe src="http://www.mammutmedia.net/tour360/mukava-tipo2/index.html" width="600" height="400" id="iframe" frameborder="0" allowtransparency="true"></iframe>
      </div>
    </div>
  </div>
</div>