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
	function tipo_de_casas_shortcode( $atts ) {
		function html(){ ?>
			<div class="escoge-tu-casa">
				<div class="row">
					<?php $args=array(
			                'post_type' => 'tipo_casas',
			                'posts_per_page' => -1, 
			                'orderby' => 'title',
			                'order' => 'ASC',
			                'post_status'   => 'publish'
			            );
			            $query = new WP_Query( $args );
			            if ( $query->have_posts() ) :
			                while ( $query->have_posts() ) : $query->the_post(); 
			                	$dimension = get_field('area_construida'); ?>
								<div class="col-md-6">
									<a href="<?php the_permalink(); ?>">
										<div class="card">										
											<h5 class="card-header"><span class="left"><?php the_title(); ?></span><span class="right"><?php echo $dimension; ?> M2</span></h5>
											<div class="card-body" <?php if ( has_post_thumbnail() ) { ?> style="background: url('<?php the_post_thumbnail_url(); ?>') center; background-size: cover;"  <?php } else { ?> style="background: url('<?php bloginfo('template_url'); ?>/images/imagen_generica.jpg') center; background-size: cover;" <?php } ?> >
											</div>										
										</div>
									</a>				
								</div>
			                <?php endwhile;
			            endif; ?>	
				</div>
			</div>
		<?php };
	    return html();
	}
	add_shortcode( 'tipo_de_casas', 'tipo_de_casas_shortcode');
?>