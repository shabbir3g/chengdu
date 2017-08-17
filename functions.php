<?php
/**
 * chengdu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package chengdu
 */

if ( ! function_exists( 'chengdu_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function chengdu_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on chengdu, use a find and replace
	 * to change 'chengdu' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'chengdu', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'main-menu' => esc_html__( 'Main Menu', 'chengdu' ),
		'case-menu' => esc_html__( 'Case Menu', 'chengdu' ),
		'mold-menu' => esc_html__( 'Mold Menu', 'chengdu' ),
		'bottle-menu' => esc_html__( 'Bottle Menu', 'chengdu' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'chengdu_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
	
	function default_menu(){
		
		echo "<ul>";
		echo "<li><a href=".home_url().">Home</a></li>";
		echo "</ul>";
	}
}
endif;
add_action( 'after_setup_theme', 'chengdu_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function chengdu_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'chengdu_content_width', 640 );
}
add_action( 'after_setup_theme', 'chengdu_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
 
 
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyeleven_header_image_width', 1920 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyeleven_header_image_height', 330 ) );

	set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );
 
function chengdu_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget', 'chengdu' ),
		'id'            => 'footer-widget',
		'description'   => esc_html__( 'Add Footer widgets here.', 'chengdu' ),
		'before_widget' => '<ul>',
		'after_widget'  => '</ul>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Contact Sidebar', 'chengdu' ),
		'id'            => 'contact-sidebar',
		'description'   => esc_html__( 'Add Contact Sidebar here.', 'chengdu' ),
		'before_widget' => '<div class="contact_left_info">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'chengdu_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function chengdu_scripts() {
	wp_enqueue_style( 'chengdu-style', get_stylesheet_uri() );
	
	wp_enqueue_style('ch-index-style',get_template_directory_uri().'/css/index.css');
	wp_enqueue_style('ch-reset-style',get_template_directory_uri().'/css/reset.css');
	
	wp_enqueue_script('chj-custom-js',get_template_directory_uri().'/js/main.js',array('jquery'),'',true);
	
	
	if(is_page(26)){
		
		
	wp_enqueue_script('chj-api-js','http://api.map.baidu.com/api?key=&amp;v=1.1&amp;services=true',array('jquery'),'',true);
	
	wp_enqueue_script('chj-map-js',get_template_directory_uri().'/js/map.js',array('jquery'),'',true);

		
	}
	
	
	wp_enqueue_script( 'chengdu-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'chengdu-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'chengdu_scripts' );

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
require get_template_directory() . '/inc/jetpack.php';

/**
 * Nav Walker
 */
require get_template_directory() . '/nav-menu.php';

/**
 * Visual composer element development
 */
require get_template_directory() . '/inc/page-builder-vc.php';

/**
 * custom widget development
 */
require get_template_directory() . '/inc/custom-widget-development.php';

/**
 * Reduxframwork link 
 */
require get_template_directory() . '/lib/ReduxCore/framework.php';

require get_template_directory() . '/lib/sample/config.php';



require get_template_directory() . '/inc/vc/vcmap.php';
