<?php
/**
 * The header for our theme
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
  	<meta name="mobile-web-app-capable" content="yes">
  	<meta name="apple-mobile-web-app-capable" content="yes">
  	<link rel="manifest" href="js/manifest.json">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 col-4 ">
					<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
				</div>
				<div class="offset-2 col-8">
					<?php if ( has_nav_menu( 'top' ) ) : ?>
						<div class="navigation-top">
							<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
						</div><!-- .navigation-top -->
					<?php endif; ?>
				</div>
			</div>			
		</div>
	</header><!-- #masthead -->	
	<div class="site-content-contain">
		<div id="content" class="site-content">