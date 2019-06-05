<?php
/**
 * Template part for displaying Proyects
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<div class="row">
		<div class="col-12">
		</div>	
		<div class="col-md-8 col-lg-9">
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
					<div class="fs-icon" title="Abrir/Cerrar"></div>
				</div>
			</div>	
		</div>

		<div class="col flex-md-last">
			<div id="thumbnail-slider-horizontal" style="float:left;">
				<div class="inner">
					<div class="slider-inner">
						<?php if( have_rows('galeria') ): ?>
							<ul>                         
								<?php 
								while( have_rows('galeria') ): the_row(); 
								$imagen = get_sub_field('imagen');?>
									<li style="background: url('<?php the_post_thumbnail_url(); ?>');">
										<a class="thumb" href="<?php echo $imagen; ?>"></a>
									</li>
								<?php endwhile;?>
							</ul>
						<?php endif; ?>
					<div class="fs-icon" title="Expandir/Cerrar"></div>
					</div>
				</div>
	        </div>
		</div>

		<div class="col-md-4 col-lg-3">
			<div class="entry-content">
				<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
					get_the_title()
				) );
				wp_link_pages( array(
					'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'       => '</div>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
				) );
				?>
			</div><!-- .entry-content -->
			<div class="text-center logo_proyecto" >
				<img src="<?php the_field('logo') ?>">
			</div>			
		</div>	


	</div>

</article><!-- #post-## -->