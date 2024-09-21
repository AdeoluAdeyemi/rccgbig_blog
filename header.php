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

		<header id="masthead" class="site-header p-3 mb-3 border-bottom">
			<div class="container">
				<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
					<div class="site-header__logo d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
						<?php the_custom_logo(); ?>
					</div>
					<div class="main-nav nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
					</div>

					<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
						<input type="search" class="form-control" placeholder="Search..." aria-label="Search">
					</form>

				</div>
			</div>
		</header>

