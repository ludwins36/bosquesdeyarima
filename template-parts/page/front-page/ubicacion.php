
<?php
/**
 * Displays content for ubicacion in front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
// Shortcode to output ubicacion
	function ubicacion_shortcode( $atts ) {
		function ubicacion(){ ?>
			<div class="contenedor-galeria"> 
			    <div class="contenedor-info">   
			        <img src="http://mammutmedia.net/mukava-del-valle/wp-content/themes/MammutInteractivo/images/ubicacion-icon-big.png" class="emblema img-fluid" alt="Responsive image">
			        <br>
			        <div class="manzanasDisponibles" id="accordion" role="tablist" aria-multiselectable="true">
			            <?php $marker = array();
					    $loop = new WP_Query( array( 'post_type' => 'ubicacion', 'posts_per_page' => -1 ) );
					    if($loop->have_posts()): 
					    	while ( $loop->have_posts() ) : $loop->the_post();
						    $filters = "";
						    $count=0;
						    $mapcat_id="";
						    $categories = get_the_terms( get_the_ID(), 'ubicacioncategories' );
						    foreach( $categories as $category ) {
						        $filters .= $category->slug;
						        $mapcat_id=get_field('map_icon', $category);
						    }
						    $marker[] = array(
				                    "id" => get_the_ID(),
	                    			"name"=> get_the_title(),
				                    "lat"=> get_field('latitude'),
				                    "lng"=> get_field('longitude'),
				                    "filter" => $filters,
				                    "icon"=>$mapcat_id
				            ); ?>
<script>
	/* <![CDATA[ */
	var object_name = {"ajaxurl":"http:\/\/mammutmedia.net\/mukava-del-valle\/wp-admin\/admin-ajax.php"};
/* ]]> */
    var marker_global = {};
    var mapa_principal = null;
    var personData =<?php echo json_encode($marker);?>;
    var myMap = function(){
		var	options = {
			center: new google.maps.LatLng(4.81062,-75.774733,3),
	        zoom: 2,
	        minZoom: 2,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
	        scrollwheel: false,
	        styles: [{
	                    "featureType":"landscape.natural",
	                    "elementType":"geometry.fill",
	                    "stylers":[
	                               {"visibility":"on"},
	                               {"color":"#a0bb2e"}
	                              ]
	                },
	                {
	                    "featureType":"poi",
	                    "elementType":"geometry.fill",
	                    "stylers":[
	                               {"visibility":"on"},
	                               {"hue":"#1900ff"},
	                               {"color":"#c0e8e8"}
	                              ]
	                },
	                {
                        "featureType":"road",
                        "elementType":"geometry",
                        "stylers":[
                                   {"lightness":100},
                                   {"visibility":"simplified"}
                                  ]
	                },
	                {
                        "featureType":"road",
                        "elementType":"labels",
                        "stylers":[
                                   {"visibility":"on"}
                                  ]
	                },
	                {
                		"featureType":"transit.line",
                        "elementType":"geometry",
                        "stylers":[
                                   {"visibility":"on"},
                                   {"lightness":700}
                                  ]
	                },
	                {
                        "featureType":"water",
                        "elementType":"all",
                        "stylers":[
                                   {"color":"#ffffff"}
                                  ]
	                },
	                {
						"featureType": "administrative",
						"elementType": "geometry.fill",
						"stylers": [
									{ "visibility": "off" }
								   ]
					}
					]
			}
		/*
			Load the map then markers
			@param object settings (configuration options for map)
			@return undefined
		*/
		function init(settings) {
			map = new google.maps.Map(document.getElementById( settings.idSelector ), options);
      		mapa_principal = map;
			markerLocation = settings.markerLocation;
			loadMarkers();
		}
		/*======= MARKERS ======= 	*/
		markers = {};
		markerList = [];
		/*
			Load markers onto the Google Map from a provided array or demo personData (data.js)
			@param array personList [optional] (list of people to load)
			@return undefined
		*/
		var filtro = [];
		function loadMarkers(personList) {
			// optional argument of person
			var people = ( typeof personList !== 'undefined' ) ? personList : personData;
			var j = 1; // for lorempixel
			for( i=0; i < people.length; i++ ) {
				var person = people[i];
				// if its already on the map, dont put it there again
				if( markerList.indexOf(person.id) !== -1 ) continue;
				var lat = person.lat,
					lng = person.lng,
	                filter = person.filter,
					markerId = person.id;

				var infoWindow = new google.maps.InfoWindow({
						maxWidth: 400
				});
				var marker = new google.maps.Marker({
						position: new google.maps.LatLng( lat, lng ),
						title: person.name,
						markerId: markerId,
		                filter : filter,
						icon: person.icon,
						map: map
				});
				filtro = marker.filter;
				markers[markerId] = marker;
				markerList.push(person.id);
				if( j > 10 ) j = 1; // for lorempixel, the thumbnail image
				var content = ['<div class="iw">', '', +person.id,
					'</strong><br> ', , '<br> ', ,
					'<br>: ', , '</div></div>'].join('');

				j++; // lorempixel
				google.maps.event.addListener(marker, 'click', (function (marker, content) {
					return function() {
			    /////////////////////////////////////  Firing Ajax with post ID  /////////////////////////////////////////////
						var data = {
								  'action':'getInfo',
								  'id': marker.markerId,
		                          //'cat': marker.filter
								    };
						jQuery.ajax({
							url: object_name.ajaxurl,
							dataType: 'text',
							type: 'post',
							data:data,
							success: function( data, textStatus, jQxhr ){
							////////////////////////////////////////  Making Pop Up 
							                        var html='<div id="datos" class="datosMapa popup" data-popup="popup-'+marker.markerId+'"><div class="popup-inner"><div class="datos" id="'+marker.markerId+'-'+marker.title+'"><p class="data"> <h4 class="text-color-green">'+marker.title+'</h4><h2><span class="verde1 italic">'+marker.name+'</span></h2><br> <span style="font-weight: bolder;" class="bold gris-oscuro">Company: </span>'+marker.name+'<br><br><span class="bold gris-oscuro">Contact: </span>'+marker.name+'<br><br><center><a class="set_4_button4 raised hoverable more" onclick="showFormMap()"><div class="anim"></div><span>CONTACTAR</span></a></center></p>  </div><br><br><a onclick="closeDatosMap()" class="popup-close" data-popup-close="popup-'+marker.markerId+'" >x</a></div></div>';
							                        jQuery("#popContainer").html(html);
													jQuery(".datosMapa").fadeIn(350);
							////////////////////////////////////////////////////////////////////////////////////////////////////////////
							},
							error: function( jqXhr, textStatus, errorThrown ){
							}
					    });
					}
				})(marker, content));
			}
		}
    //guardar marcadores globales
    marker_global = markers;
		return {
			init: init,
		};
	}();
</script>
								<div class="card <?php the_ID(); ?>">
									<div class="card-header" role="tab" id="heading<?php the_ID(); ?>">
									  <h5 class="mb-0">
									    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse<?php the_ID(); ?>" class="collapsed" id="<?php echo $animacionMz ?>" ><h2><?php the_title(); ?></h2></a>
									  </h5>
									</div>
									<div id="collapse<?php the_ID(); ?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php the_ID(); ?>">
										<div class="card-block">
											<ul class="casas-disponibles"> 
							                	<?php while( have_rows('casa') ): the_row();
								                    $numero = get_sub_field('numero');
								                    $ubicacion = get_sub_field('ubicacion');
								                    $animacion = get_sub_field('id');
								                    if( $ubicacion =='Disponible'){?>       
														<li class="<?php echo $ubicacion ?>">
									                        <span id="<?php echo $animacion ?>">Casa <?php echo $numero; ?></span>
									                    </li>
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
			    <div class="map-container contenedor-varios" id="mapa" style="float:left;">
						<div id="map-canvas"></div>
			    </div>    
			</div>   
		<?php };
	    return ubicacion();
	}
	add_shortcode( 'ubicacion-map', 'ubicacion_shortcode');
?>    
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyB6f6NhqQZzhOikkwwKB4cy2ZhysMq9O_A"></script>
