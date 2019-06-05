<?php
/**
 * Template part for displaying page content in tour_360.php
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
		<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
		<div class="iframe-container">
			<iframe src="http://www.bosquesdeyarima.com/tour360/<?php the_field('carpeta') ?>/index<?php the_field('index') ?>.html"  width="560" height="315" id="iframe" class="img-fluid" frameborder="0" allowtransparency="true"></iframe>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
