<?php
/**
 * Template Name: Grafico
 * The template for displaying the Grafico page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/imagesloaded.js?ver=4.8.3"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/masonry-3.1.4.js?ver=4.8.3"></script>
<header class="container-fluid category-header">
	<?php the_title( '<h1 class="container titulo">', '</h1>' ); ?>
	<?php twentyseventeen_edit_link( get_the_ID() ); ?>
</header><!-- .entry-header -->
<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/category/content', 'grafico' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
