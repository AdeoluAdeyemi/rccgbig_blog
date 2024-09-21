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

<body <?php body_class(); ?> class="blog theme-avantage bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-js btHeadingStyle_default btMenuRightEnabled btStickyEnabled btLightSkin btBelowMenu btNoDashInSidebar noBodyPreloader btHardRoundedButtons btTransparentDarkHeader btWithSidebar btSidebarRight btShopSaleTagDesignRound btMenuRight btMenuHorizontal btMenuInitFinished btRemovePreloader btStickyHeaderActive btStickyHeaderOpen">
<?php wp_body_open(); ?>
<div class="rccg-blog">
	<div id="top" class="page">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rccgbig_blog' ); ?></a>

		<header id="masthead" class="mainHeader">
			<div class="mainHeaderInner site-branding">
				<div class="btLogoArea menuHolder">
					<div class="port">
						<div class="btHorizontalMenuTrigger">

						</div>
						<div class="logo">
							<span>
								<?php the_custom_logo(); ?>
							</span>
						</div>
						<div class="menuPort">
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
						</div>
					</div>
				</div>
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$rccgbig_blog_description = get_bloginfo( 'description', 'display' );
				if ( $rccgbig_blog_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $rccgbig_blog_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->


		</header><!-- #masthead -->
		