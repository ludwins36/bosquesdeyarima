<?php
/**
 * The header for our theme Asul Interactive
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage MammutInteractivo
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#000000" />
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Interactivo Mammut Media">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="msapplication-TileImage" content="images/icons/icon-144x144.png">
  	<meta name="msapplication-TileColor" content="#2F3BA2">
  	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/asul.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site asul">
	<div class="blue1Line"></div>
	<div class="blue2Line"></div>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-10 col-sm-4 col-md-3">
					<div class="custom-header">
							<div class="site-branding">
								<a href="http://asul.com.co" class="custom-logo-link" rel="home" itemprop="url"><img src="http://www.mammutmedia.net/wp-content/uploads/2017/11/asul.png" class="custom-logo img-responsive" alt="Mammut Media" itemprop="logo" srcset="http://www.mammutmedia.net/wp-content/uploads/2017/11/asul.png 1216w, http://www.mammutmedia.net/wp-content/uploads/2017/11/asul-300x62.png 300w, http://www.mammutmedia.net/wp-content/uploads/2017/11/asul-768x158.png 768w, http://www.mammutmedia.net/wp-content/uploads/2017/11/asul-1024x211.png 1024w" sizes="100vw" height="250" width="1216"></a>
							</div><!-- .site-branding -->		
					</div><!-- .custom-header -->
				</div>
				<div class="col-12">
					<div class="site-branding subBranding">
						<a class="custom-logo-link" rel="home" itemprop="url"><img src="http://www.mammutmedia.net/wp-content/uploads/2017/11/mukava.png" class="custom-logo img-responsive" alt="Mammut Media" itemprop="logo" srcset="http://www.mammutmedia.net/wp-content/uploads/2017/11/mukava.png 1216w, http://www.mammutmedia.net/wp-content/uploads/2017/11/mukava-300x62.png 300w, http://www.mammutmedia.net/wp-content/uploads/2017/11/mukava-768x158.png 768w, http://www.mammutmedia.net/wp-content/uploads/2017/11/mukava-1024x211.png 1024w" sizes="100vw" height="250" width="1216"></a>
					</div><!-- .site-branding -->							
				</div>
			</div>			
		</div>
	</header><!-- #masthead -->
	<?php
	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	/*if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;*/
	?>
	<div class="site-content-contain">
		<div id="content" class="site-content">