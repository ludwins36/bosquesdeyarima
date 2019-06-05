<?php
/**
 * Displays content for list all saled houses in  bata base page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

// Shortcode to output gallery
	function data_base_shortcode( $atts ) {
		function html(){ ?>



			
			<div class="data_base">
				<div class="row">
					<?php $args=array(
		                'post_type' => 'etapas',
		                'posts_per_page' => -1, 
		                'orderby' => 'title',
		                'order' => 'ASC',
		                'category_name' => 'disponible',
		                'post_status'   => 'publish'
		            );
		            $query = new WP_Query( $args );
		            if ( $query->have_posts() ) :
		                while ( $query->have_posts() ) : $query->the_post(); ?>
							<div class="col clearfix">
								<div class="<?php the_title(); ?>">
									<div class="card">										
										<h5 class="card-header"><span class="left"><?php the_title(); ?></span></h5>
										<div class="dataTables_wrapper dt-jqueryui table-responsive">
			                                <table class="table table-striped row-border display  dataTable table-hover " id="data_base">
			                                    <thead>
			                                        <tr>
			                                            <th>Lote</th>
			                                            <th>Tipo de Casa</th>
			                                            <th>Disponibilidad</th>
			                                            <th>Cliente</th>
			                                            <th>Cedula</th>
			                                            <th>Email</th>
			                                            <th>Telefono</th>
			                                            <th>C.Inicial</th>
			                                            <th>Vendedor</th>
			                                        </tr>
			                                    </thead>
			                                    <tbody id="body_data_base">
			                                    <?php while( have_rows('Lote') ): the_row(); 
			                                    	$numero = get_sub_field('numero');
								                    $m2 = get_sub_field('m2');
								                    $tipo_casa = get_sub_field('tipo_casa');
								                    $disponibilidad = get_sub_field('disponibilidad');
								                    $nombre = get_sub_field('nombre');
								                    $cedula = get_sub_field('cedula');
								                    $email = get_sub_field('email');
								                    $telefono = get_sub_field('telefono');
								                    $cuota_inicial = get_sub_field('cuota_inicial');
								                    $vendedor = get_sub_field('vendedor');
								                ?>
			                                          <tr class="<?php echo $class ?> gradeX">
			                                            <td># <?php echo $numero ?></td>
			                                            <td>
				                                            <?php foreach( $tipo_casa as $item ): ?>
																<?php echo $item; ?>
															<?php endforeach; ?>
														</td>
			                                            <td><?php echo $disponibilidad ?></td>
			                                            <td><?php echo $nombre ?></td>
			                                            <td><?php echo $cedula ?></td>
			                                            <td><?php echo $email ?></td>
			                                            <td><?php echo $telefono ?></td>
			                                            <td><?php echo $cuota_inicial ?></td>
			                                            <td><?php echo $vendedor->display_name ?></td>
			                                          </tr>
			                                    <?php endwhile; ?>
			                                    </tbody>                               
			                                </table>
			                            </div>	
									</div>	
																
								</div>

							</div>
		                <?php endwhile;
		            endif; ?>	
				</div>
			</div>
		<?php };
	    return html();
	}
	add_shortcode( 'data_base', 'data_base_shortcode');
?>