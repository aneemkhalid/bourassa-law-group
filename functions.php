<?php
/**
 * bourassa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bourassa
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
function bourassa_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on bourassa, use a find and replace
		* to change 'bourassa' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'bourassa', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary', 'bourassa' ),
			'secondary' => esc_html__( 'Secondary', 'bourassa' ),

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
			'bourassa_custom_background_args',
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
add_action( 'after_setup_theme', 'bourassa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bourassa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bourassa_content_width', 640 );
}
add_action( 'after_setup_theme', 'bourassa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bourassa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bourassa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bourassa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bourassa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bourassa_scripts() {
	// wp_enqueue_style( 'bourassa-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'bourassa-style', 'rtl', 'replace' );
	$style_saved_css_version = filemtime( get_stylesheet_directory().'/style.min.css' );

	//Fonts
    wp_enqueue_style( 'Teko-Font', 'https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap');
	wp_enqueue_style( 'Inter-Font', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

    // wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/node_modules/slick-carousel/slick/slick.css');
    wp_enqueue_style( 'our-styles-min', get_stylesheet_directory_uri() . '/style.min.css', false, ''.$style_saved_css_version.'', 'all' );
	
	wp_enqueue_script( 'bourassa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bourassa-jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bourassa-bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bourassa-slick', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bourassa-index', get_template_directory_uri() . '/js/index.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bourassa_scripts' );

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

/**
 * Functions for Acf Blocks.
 */
require get_template_directory() . '/inc/functions-acfblocks.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/bourassa_ajax.php';

/**
 * CTA
 */
function cta_function($atts)
{
    return "Dealing with the grief and trauma of a loved one being severely hurt or killed in an accident is painful. You may not be aware that it is possible to hold the responsible person accountable. Bourassa Law Group can help you get the medical treatment, financial compensation, and justice you need after being involved in a serious accident. Call (303) 331-6186 for a free consultation with one of our Denver injury lawyers.<br><br><strong>Note:</strong> Bourassa Law Group has extensive experience representing victims of a variety of accidents. Even with experience, it is never easy to take in the impact the kinds of accidents we blog about have on victims and their families. Our posts are compiled from local news sources, which often don't convey the full picture. When more details emerge, some of our posts may contain incomplete information. If information in this post is out of date or untrue, please contact us so that we may update our post.<br><br><strong>Disclaimer:</strong> This blog covers an array of sensitive cases. Our aim in publishing these posts is to display how commonly such tragic accidents occur as well as how damaging they can be. Readers, hopefully, can be armed with information they can use to avoid being involved in an accident. Content within these postings should not be construed as legal advice.";
}
add_shortcode('cta', 'cta_function');

