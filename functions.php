<?php
/**
*	functions and definitions
*
*	@package blankspace
*	@since blankspace 1.0
*/

/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 640; /* pixels */
 
if ( ! function_exists( 'themename_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function themename_setup() {




 
    /**
     * Make theme available for translation
     * Translations can be filed in the /languages/ directory
     */
    load_theme_textdomain( 'blankspace', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for Post Thumbnails
     */
    add_theme_support( 'post-thumbnails' );
 
 
    /**
     * Enable support for Custom Headers
     */
    $args = array(
	    'flex-width'    => true,
	    'width'         => 980,
	    'flex-height'    => true,
	    'height'        => 200,
	    'default-image' => get_template_directory_uri() . '/img/banner.png',
	);
	add_theme_support( 'custom-header', $args );

 
    /**
     * Enable support for the Post Formats aside, gallery, quote and video
     */
   // add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'video' ) );

        /* woocommerce support */
        add_theme_support( 'woocommerce' );

        /**
         * Customizer additions.
         */

        require get_template_directory() . '/inc/customizer.php';
        // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
}
endif; // ThemeName setup
add_action( 'after_setup_theme', 'themename_setup' );
 
/**
 * Setup the WordPress core custom background feature.
 *
 * We must be careful to setup backwards compatibility here for WP versions before 3.4
 * If this is not required, you may delete the second half of this function
 *
 * Hooks into the after_setup_theme action.
 */
function themename_register_custom_background() {
    global $wp_version;
    $args = array(
        'default-color' => 'ffffff',
        'default-image' =>  ' '
    );
 
        if ( version_compare( $wp_version, '3.4', '>=' ) ) {
                add_theme_support( 'custom-background', $args );
        } else {
            //    add_custom_background();
        }
}
    add_action( 'after_setup_theme', 'themename_register_custom_background' );
 
/**
 * Setup WordPress custom headers
 * Custom headers will be available to users in the Appearance section of the admin panel
 *
 * We must be careful to set-up backwards compatibility here
 * If this is not required, you may delete the second half of this function
 *
 * Hooks into the after_setup_theme action.
 */
 
function themename_custom_header_setup() {
    global $wp_version;
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
        );
        if ( version_compare( $wp_version, '3.4', '>=' ) ) {
                add_theme_support( 'custom-header', $args );
        } else {
                define( 'HEADER_TEXTCOLOR',    $args['default-text-color'] );
                define( 'HEADER_IMAGE',        $args['default-image'] );
                define( 'HEADER_IMAGE_WIDTH',  $args['width'] );
                define( 'HEADER_IMAGE_HEIGHT', $args['height'] );
               // add_theme_support( 'custom-header', $args );
               // add_custom_image_header( $wp_head_callback, $admin_head_callback );
        }
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );
 
/**
 * Register widgetized area and update sidebar with default widgets
 * We will be setting up two widgetized sidebars here
 */
function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '</pre><aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside><pre>',
        'before_title'  => '</pre><h1 class="widget-title">',
        'after_title'   => '</h1><pre>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Secondary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-2',
        'before_widget' => '</pre><ul><limgid="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul><pre>',
        'before_title'  => '</pre><h3 class="widget title">',
        'after_title'   => '</h3><pre>',
    ) );
}
add_action( 'widgets_init', 'themename_widgets_init' );
 
/**
 * Add a custom stylesheet for the TinyMCE editor
 */
function themename_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action ( 'init', 'themename_add_editor_styles' );



 
/**
 * Enqueue scripts and styles
 */
function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );

function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );




function themename_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
 
    wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css',false,'1.1','all' );
 
 
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
}
add_action( 'wp_enqueue_scripts', 'themename_scripts' );


		function new_excerpt_more($more){
			global $post;
			return '...'
			.'<br><br>'
            .'<div class="excerpt-link">'
            .'<a href="'.get_permalink($post->ID).'">'
			.'Read More'
			.'</a>'
            .'</div>';
		}

		add_filter('excerpt_more', 'new_excerpt_more');


?>