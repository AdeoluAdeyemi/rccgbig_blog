<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rccgbig_blog
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
<?php wp_body_open(); ?>
<div class="rccg-blog">
	<div id="top" class="page">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rccgbig_blog' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="container pt-2 pb-2">
				<div class="row">
					<div class="col site-header__logo">
						<?php the_custom_logo(); ?>
					</div>
					<div class="col-md-5">
						search
					</div>
				</div>
			</div>







			<nav id="site-navigation" class="main-nav stick-fixed wow-menubar wch-unset js-transparent fadeInDown animated transparent">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rccgbig_blog' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
					<div class="main-nav-sub container">
						<div class="nav-logo-wrap position-static local-scroll">

						</div>
						<div class="mobile-nav" role="button" tabidenx="0" aria-expanded="false">

						</div>
						<div class="inner-nav desktop-nav">

						</div>
					</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
		