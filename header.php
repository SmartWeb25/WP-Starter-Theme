<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Smart__Foundation
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-nav">
			<div class="container">
				<div class="row nav-row">
					<div class="col-sm-12 col-md-3">
						<div class="site-branding">
							<?php
							the_custom_logo();
							?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-sm-12 col-md-9 header-right">
						<nav id="site-navigation" class="main-navigation">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
							?>
						</nav><!-- #site-navigation -->				
						<div class="search-wrp">
							<a href="javascript:;" title="Search">
								<img src="<?php echo get_template_directory_uri() . '/images/SVG/search.svg' ?>" alt="Search">
							</a>
							<div class="search-form-wrp">
								<?php get_search_form(); ?>	
							</div>
							
						</div>
						<div class="social-links">
							<a href="<?php echo get_field("linkedin_link", "options"); ?>" title="LinkedIn">
								<img src="<?php echo get_template_directory_uri() . '/images/SVG/linkedin.svg' ?>" alt="LinkedIn">
							</a>
							<a href="<?php echo get_field("twitter_link", "options"); ?>" title="Twitter">
								<img src="<?php echo get_template_directory_uri() . '/images/SVG/twitter.svg' ?>" alt="Twitter">
							</a>
						</div>
					</div>
					<button class="mobile-trigger hamburger hamburger--slider" type="button">
					  <span class="hamburger-box">
					    <span class="hamburger-inner"></span>
					  </span>
					</button>
					<div class="mobile-menu-sidebar">
						<nav id="site-navigation" class="main-navigation">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
							?>
						</nav><!-- #site-navigation -->				
						<div class="search-wrp">
							<?php get_search_form(); ?>	
						</div>
						<div class="social-links">
							<a href="<?php echo get_field("linkedin_link", "options"); ?>" title="LinkedIn">
								<img src="<?php echo get_template_directory_uri() . '/images/SVG/linkedin.svg' ?>" alt="LinkedIn">
							</a>
							<a href="<?php echo get_field("twitter_link", "options"); ?>" title="Twitter">
								<img src="<?php echo get_template_directory_uri() . '/images/SVG/twitter.svg' ?>" alt="Twitter">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
