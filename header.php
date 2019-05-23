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
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="site-branding">
							<?php
							the_custom_logo();
							?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-sm-6 col-md-9">
						<nav id="site-navigation" class="main-navigation">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
							?>
						</nav><!-- #site-navigation -->				
					</div>
				</div>
			</div>
		</div>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
