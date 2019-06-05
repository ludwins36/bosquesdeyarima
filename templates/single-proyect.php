<?php
/**
 * Template Name: Projecto
 * Template Post Type: proyects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ninja-slider.css?ver=4.8.3" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/thumbnail-slider-horizontal.css?ver=4.8.3" type="text/css" media="all">
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/ninja-slider.js?ver=4.8.3"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/thumbnail-slider-horizontal.js?ver=4.8.3"></script>

<header class="container-fluid general-header">
	<?php
	if ( 'post' === get_post_type() ) {
		echo '<div class="entry-meta">';
			if ( is_single() ) {
				twentyseventeen_posted_on();
			} else {
				echo twentyseventeen_time_link();
				twentyseventeen_edit_link();
			};
		echo '</div><!-- .entry-meta -->';
	};
	if ( is_single() ) {
		the_title( '<h1 class="container titulo">', '</h1>' );
	} elseif ( is_front_page() && is_home() ) {
		the_title( '<h1 class="container titulo"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
	} else {
		the_title( '<h1 class="container titulo"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
	}
	?>
</header><!-- .entry-header -->
<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				//get_template_part( 'template-parts/post/content', get_post_format() );
				get_template_part( 'template-parts/page/post/content', 'proyect' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				the_post_navigation( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
				) );
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php get_footer();
