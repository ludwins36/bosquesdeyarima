<?php
/**
 * Template part for displaying page content in grafico.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div class="grid">
			<div class="grid-sizer"></div>
			<?php $query = new WP_Query( array( 'post_type' => 'proyects','category_name' => 'grafico','posts_per_page' =>-1, ));                
			if ( $query->have_posts() ) : 
				while ( $query->have_posts() ) : $query->the_post(); ?> 
					<div class="grid-item">
						<div class="img"><?php the_post_thumbnail( 'full' );?></div>
						<div class="top overlay d-flex align-items-end">
							<div class="overlayContent">
									<h2 class="title"><?php the_field('titulo1') ?></h2>
									<h3 class="subtitle"><?php the_title(); ?></h3>
								<div class="excerpt"><?php echo show_modal(19); ?></div>							
							</div>
						</div>
						<!-- Modal -->
						<div class="modal fullscreen-modal fade" id="myModal<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModal<?php the_ID(); ?>" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
								<div id="ninja-slider-jp" style="float:left; " >
									<div class="slider-inner">
										<?php if( have_rows('galeria') ): ?>
											<ul>                         
												<?php while( have_rows('galeria') ): the_row(); 
													$imagen = get_sub_field('imagen'); ?>
													<li style="background: url('<?php the_post_thumbnail_url(); ?>');">
														<a class="ns-img" href="<?php echo $imagen; ?>"></a>
													</li>
												<?php endwhile;?>
											</ul>
										<?php endif; ?>
									</div>
								</div>
						      </div>
						    </div>
						  </div>
						</div>							
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
				<!-- show pagination here -->
			<?php else : ?>
			<!-- show 404 error here -->
			<?php endif; ?>
		</div>
		<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<script type="text/javascript">
    jQuery(function () {
       var $grid = jQuery('.grid').masonry({
		  itemSelector: '.grid-item',
		  percentPosition: true,
		  columnWidth: '.grid-sizer'
		});
		// layout Masonry after each image loads
		$grid.imagesLoaded().progress( function() {
		  $grid.masonry();
		});  
    });
</script>