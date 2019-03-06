<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nefateema
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet" type="text/css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="nav-menu-mobile" aria-expanded="false">
				<i class="fas fa-bars fa-3x"></i>
			</button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				/* mobile menu, re-enable if needed */
				/*
				wp_nav_menu( array(
					'theme_location' => 'mobile-menu',
					'menu_id'        => 'nav-menu-mobile',
					'menu_class' 	 => 'nav-menu-mobile',
				) );*/
			?>
		</nav><!-- #site-navigation -->

	<div class="header-img-container">
			<?php the_header_image_tag(); ?>
		</div>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
    		$logo_id = get_theme_mod( 'custom_logo' );
    		$logo_image = wp_get_attachment_image_src( $logo_id, 'full' );                  

   			if ( ! empty( $logo_image ) ) : ?>
        		<span class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $logo_image[0] ); ?>" alt="<?php bloginfo( 'name' ); ?>"/></a></span>
    		<?php else : ?>
        		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    		<?php
    		endif; ?>
		</div><!-- .site-branding -->
	<!-- this is where the navbar used to be -->
	<!-- this is where the header img used to be -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="breadcrumb"
			<?php if(function_exists('bcn_display'))
				{
    			bcn_display();
			}?>
		</div>
