<?php
/**
 * Template part for displaying page content in interactivos.php
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
			<div class="grid-sizer grid-item-50"></div>
			<?php $query = new WP_Query( array( 'post_type' => 'page','category_name' => 'interactivos','posts_per_page' =>4, 'order'   => 'ASC', ));
			if ( $query->have_posts() ) : 
				while ( $query->have_posts() ) : $query->the_post(); ?> 
					<div class="grid-item grid-item-50">
						<div class="img"><?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?></div>
						<div class="top overlay d-flex align-items-end">
								<div class="overlayContent">
									<a href="<?php the_permalink(); ?>">
										<h2 class="title"><?php the_field('titulo1') ?></h2>
									</a>
									<a href="<?php the_permalink(); ?>">
										<h3 class="subtitle"><?php the_title(); ?></h3>
									</a>	
									<p class="excerpt"><?php echo descripcion_more(19); ?></p>							
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