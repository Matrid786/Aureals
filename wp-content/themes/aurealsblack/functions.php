<?php
/**
 * aurealsblack functions and definitions
 *
 * @package Aureals Black
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1000; /* pixels */
}

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'aurealsblack_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aurealsblack_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on aurealsblack, use a find and replace
	 * to change 'aurealsblack' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'aurealsblack', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'large', 1200, 9999 ); //1200 pixels wide (and unlimited height)
	add_image_size( 'small', 588, 9999 ); //588 pixels wide (and unlimited height)

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'aurealsblack' ),
		'secondary' => __( 'Secondary Menu', 'aurealsblack' )

	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

}
endif; // aurealsblack_setup
add_action( 'after_setup_theme', 'aurealsblack_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function aurealsblack_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'aurealsblack' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

 	register_sidebar( array(
	    'name' 			=> __( 'Social', 'aurealsblack' ),
	    'id' 			=> 'social',
	    'description' 	=> '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	 register_sidebar( array(
	    'name' 			=> __( 'Footer', 'aurealsblack' ),
	    'id' 			=> 'footer',
	    'description' 	=> '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'aurealsblack_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aurealsblack_scripts() {
	wp_enqueue_style( 'aurealsblack-style', get_stylesheet_uri() );

	wp_enqueue_script( 'aurealsblack-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '20130115', true );
	
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aurealsblack_scripts' );




/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


// Replaces the excerpt "more" text by a link

function new_excerpt_more($more) {
       global $post;
	return '<br><a class="moretag" href="'. get_permalink($post->ID) . '"> read full article >> </a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Modify Excerpt length

function new_excerpt_length($length) {
    return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');



/**
 * Enqueue Backstretch script
 */
add_action( 'wp_enqueue_scripts', 'enqueue_backstretch' );
function enqueue_backstretch() {
 
//* Load scripts only on single Posts, static Pages and other single pages and only if featured image is present
if ( is_singular() && has_post_thumbnail() )
 
wp_enqueue_script( 'backstretch', get_bloginfo( 'stylesheet_directory' ) . '/js/jquery.backstretch.min.js', array( 'jquery' ), '1.0.0' );
wp_enqueue_script( 'backstretch-set', get_bloginfo('stylesheet_directory').'/js/backstretch-set.js' , array( 'jquery', 'backstretch' ), '1.0.0' );
 
wp_localize_script( 'backstretch-set', 'BackStretchImg', array( 'src' => wp_get_attachment_url( get_post_thumbnail_id() ) ) );
}