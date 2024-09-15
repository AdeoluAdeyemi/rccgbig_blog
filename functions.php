<?php
/**
 * rccgbig_blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rccgbig_blog
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rccgbig_blog_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on rccgbig_blog, use a find and replace
		* to change 'rccgbig_blog' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'rccgbig_blog', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'rccgbig_blog' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'rccgbig_blog_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'rccgbig_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rccgbig_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rccgbig_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'rccgbig_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rccgbig_blog_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rccgbig_blog' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rccgbig_blog' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rccgbig_blog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rccgbig_blog_scripts() {
	wp_enqueue_style( 'rccgbig_blog-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'rccgbig_blog-main', get_template_directory_uri() .'/css/main.min.css');
	wp_enqueue_style( 'rccgbig_blog-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
	wp_enqueue_style( 'rccgbig_blog-blog', get_template_directory_uri() .'/css/blog.min.css');

	wp_style_add_data( 'rccgbig_blog-style', 'rtl', 'replace' );

	wp_enqueue_script( 'rccgbig_blog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rccgbig_blog_scripts' );


/**
 * Custom Fonts.
 * font-family: "DM Sans", sans-serif;
 * font-family: "Roboto", sans-serif;
 * font-family: "Epilogue", sans-serif;
 * font-family: "Inter", sans-serif;
 * font-family: "Plus Jakarta Sans", sans-serif;
 */
function enqueue_custom_fonts() {
	if(!is_admin()){
		wp_register_style('dm-sans', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap');
		wp_register_style('roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,400;1,500&amp;display=swap');
		wp_register_style('epilogue', 'https://fonts.googleapis.com/css2?family=Epilogue:wght@400;500&amp;family=Poppins&amp;display=swap');
		wp_register_style('inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap');
		wp_register_style('plus-jakarta-sans', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&amp;display=swap');
		
		wp_enqueue_style('dm-sans');
		wp_enqueue_style('roboto');
		wp_enqueue_style('epilogue');
		wp_enqueue_style('inter');
		wp_enqueue_style('plus-jakarta-sans');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

