<?php
/**
 * Displays content for casa tipo 1 in front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
// Shortcode to output disponibilidad
	function casa_tipo_1_shortcode( $atts ) {
		function casa_tipo_1(){ 
            $argsM=array(
                'post_type' => 'tipo_casas',
                'posts_per_page' => 1, 
                'orderby' => 'title',
                'order' => 'ASC',
                'post_status'   => 'publish', 
                'category_name' => 'casa-tipo-1',
			); ?>
			<div class="contenedor-galeria"> 
			    <div class="contenedor-info">   
			        <img src="http://mammutmedia.net/mukava-del-valle/wp-content/themes/MammutInteractivo/images/casa-tipo-1-icon-big.png" class="emblema img-fluid" alt="Responsive image">
			        <br>
					<div class="characteristics tipo1" id="accordionT1" role="tablist" aria-multiselectable="true">
			            <div class="card informacionT1">
							<div class="card-header" role="tab" id="headingInformacionT1">
							  <h5 class="mb-0">
							    <a data-toggle="collapse" data-parent="#accordionT1" href="#collapseInformacionT1" aria-expanded="false" aria-controls="collapseInformacionT1" class="collapsed"><h2>Información</h2></a>
							  </h5>
							</div>
							<div id="collapseInformacionT1" class="collapse " role="tabpanel" aria-labelledby="headingInformacionT1">
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
			            <div class="card planosT1">
							<div class="card-header" role="tab" id="headingplanosT1">
							  <h5 class="mb-0">
							    <a data-toggle="collapse" data-parent="#accordionT1" href="#collapseplanosT1" aria-expanded="false" aria-controls="collapseplanosT1" class="collapsed"><h2>Planos</h2></a>
							  </h5>
							</div>
							<div id="collapseplanosT1" class="collapse " role="tabpanel" aria-labelledby="headingplanosT1">
								<div class="card-block">
									<ul class="ch"> 
										<li id="planoCasaT1P1"><span>Piso 1</span></li>
                    					<li id="planoCasaT1P2"><span>Piso 2</span></li>
					                </ul>
								</div>
							</div>
						</div>
						<div class="card isometriaT1">
							<div class="card-header" role="tab" id="headingIsometriaT1">
							  <h5 class="mb-0">
							    <a data-toggle="collapse" data-parent="#accordionT1" href="#collapseIsometriaT1" aria-expanded="false" aria-controls="collapseIsometriaT1" class="collapsed"><h2>Isometria</h2></a>
							  </h5>
							</div>
							<div id="collapseIsometriaT1" class="collapse " role="tabpanel" aria-labelledby="headingIsometriaT1">
								<div class="card-block">
									<ul class="ch"> 
										<li id="casaT1P1"><span>Piso 1</span></li>
                    					<li id="casaT1P2"><span>Piso 2</span></li>
					                </ul>
								</div>
							</div>
						</div>
						<div class="card imagenesT1">
							<div class="card-header" role="tab" id="headingImagenesT1">
							  <h5 class="mb-0">
							    <a data-toggle="collapse" data-parent="#accordionT1" href="#collapseImagenesT1" aria-expanded="false" aria-controls="collapseImagenesT1" class="collapsed"><h2>Imagenes</h2></a>
							  </h5>
							</div>
							<div id="collapseImagenesT1" class="collapse " role="tabpanel" aria-labelledby="headingImagenesT1">
								<div class="card-block">
									<ul class="ch"> 
										<li id="cocinaT1"><span>Cocina</span></li>
					                    <li id="comedorT1"><span>Comedor</span></li>
					                    <li id="habitacionT1"><span>Habitación</span></li>
					                    <li id="salaExtT1"><span>Sala Exterior</span></li>
					                    <li id="salaT1"><span>Sala</span></li>
					                </ul>
								</div>
							</div>
						</div>
						<div class="card tour360T1">
							<div class="card-header" role="tab" id="headingTour360T1">
							  <h5 class="mb-0">
							    <a data-toggle="collapse" data-parent="#accordionT1" href="#collapseTour360T1" aria-expanded="false" aria-controls="collapseTour360T1" class="collapsed"><h2>Tour 360°</h2></a>
							  </h5>
							</div>
							<div id="collapseTour360T1" class="collapse " role="tabpanel" aria-labelledby="headingTour360T1">
								<div class="card-block">
									<ul class="ch"> 
										<li id="OpenTourT1"><span>Iniciar Tour</span></li>
					                </ul>
								</div>
							</div>
						</div>
						<div class="card videoT1">
							<div class="card-header" role="tab" id="headingVideoT1">
							  <h5 class="mb-0">
							    <a data-toggle="collapse" data-parent="#accordionT1" href="#collapseVideoT1" aria-expanded="false" aria-controls="collapseVideoT1" class="collapsed"><h2>Video</h2></a>
							  </h5>
							</div>
							<div id="collapseVideoT1" class="collapse " role="tabpanel" aria-labelledby="headingVideoT1">
								<div class="card-block">
									<ul class="ch"> 
										<li id="OpenVideoT1"><span>Recorrido Interior</span></li>
					                </ul>
								</div>
							</div>
						</div>
			        </div>
			    </div>
			    <?php $queryM = new WP_Query( $argsM );
		            if ( $queryM->have_posts() ) :
		                while ( $queryM->have_posts() ) : $queryM->the_post(); ?>
						    <div class="contenedor-varios casa-tipo-1-image-map casa-tipo-1" id="image-map-pro-858" style="float:left; background: url(<?php  the_post_thumbnail_url() ?>);">
						    </div>
						    <script type="text/javascript">
					    		start1 = "<?php the_post_thumbnail_url(); ?>";
					    	</script>
			    		<?php endwhile;
			        endif;?>    
			</div>   
		<?php };
	    return casa_tipo_1();
	}
	add_shortcode( 'casa_tipo_1-ch', 'casa_tipo_1_shortcode');
?>    

<!-- Modal Tour-->
<div class="modal fullscreen-modal fade" id="tourT1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <iframe src="http://www.mammutmedia.net/tour360/mukava-tipo1/index.html" width="600" height="400" id="iframe" frameborder="0" allowtransparency="true"></iframe>
      </div>
    </div>
  </div>
</div>
<!-- Modal Video-->
<div class="modal video fullscreen-modal fade" id="videoT1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <iframe id="iframe" class="" width="640" height="360" src="https://www.youtube.com/embed/TVGAL6IMaOc?rel=0&amp;autoplay=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>