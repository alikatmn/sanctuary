<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sanctuary
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			
		
		<div class="headertop">
			<div class="logo"><img src="http://localhost:8888/wp-content/themes/sanctuary/images/logo.png"></div>
			
			<div class="transbar">
			<nav class="main-nav">
				<ul class="mainnav">
				<!--	<a href="#"><li>Studio Cabins</a>
						<ul class="subnav">
						<a href="#"><li>hillside painter’s cabin</li>
						<a href="#"><li>orchard painter’s cabin</li>
						<a href="#"><li>prarie ceramics cabin</li>
						<a href="#"><li>woodland ceramics cabin</li>
						<a href="#"><li>woodworkers cabin</li>
						<a href="#"><li>woodland writers cabin</li>
						<a href="#"><li>hillside wrtiers cabin</li>
						<a href="#"><li>musicians cabins</li>
						<a href="#"><li>valley drawing cabin</li>
						</ul>
					</li>-->
					<a href="#"><li>Studio Cabins</li></a>
					
					<a href="#"><li>Apply</li></a>
					<a href="#"><li>Meals</li></a>
					<a href="#"><li>Events</li></a>
					<a href="#"><li>Location</li></a>
					<a href="#"><li>About</li></a>
				</ul>
			</nav>
			</div>
		</div>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'sanctuary' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sanctuary' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


	<div id="content" class="site-content">
