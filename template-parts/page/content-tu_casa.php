<?php
/**
 * Displays content for tu casa page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
	include 'front-page/tu-casa.php';
	$texto_1 = get_field('linea_1');	
	$texto_2 = get_field('linea_2'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >
	<div class="panel-content">
		<div class="container-fluid">
			<div class="entry-content">
				<div class="titulo">
					<h1>						
						<span><?php if( $texto_1 ): echo $texto_1; else: ?><?php endif; ?></span>
						<br>
						<span class="linea_2"><?php if( $texto_2 ): echo $texto_2; else: ?><?php the_title(); ?><?php endif; ?></span>
					</h1>					
				</div>
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
						get_the_title()
					) );
				?>
			</div><!-- .entry-content -->
		</div><!-- .wrap -->
	</div><!-- .panel-content -->
</article><!-- #post-## -->