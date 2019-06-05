<?php
/**
 * Template part for displaying page content in portafolio.php
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
	<!-- <header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php //twentyseventeen_edit_link( get_the_ID() ); ?>
	</header> --><!-- .entry-header -->
	<div class="entry-content">
		<div class="d-flex justify-content-around itemsPortafolio">
			<a href="<?php echo home_url(); ?>/portafolio/3d/" class="col-sm-3 tresD">
				<div class=" yellowBg">
					<div class="texto"></div>
				</div>				
			</a>
			<a href="<?php echo home_url(); ?>/portafolio/grafico/" class="col-sm-3 grafico">
				<div class=" yellowBg">
					<div class="texto"></div>
				</div>				
			</a>
			<a href="<?php echo home_url(); ?>/portafolio/video-y-fotografia/" class="col-sm-3 video">
				<div class=" yellowBg">
					<div class="texto"></div>
				</div>				
			</a>
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