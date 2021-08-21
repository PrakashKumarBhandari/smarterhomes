<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package smarter-homes
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function smarter_homes_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'smarter_homes_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function smarter_homes_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'smarter_homes_pingback_header' );



/**  
 *  Add Advance Custom Fields plugin feature in 
 *  Custom Wordpress theme by including in theme 
 * 
 */
define( 'DS_THEME_PATH', trailingslashit( get_template_directory() ) );
define( 'DS_IMAGE_URI', trailingslashit( get_stylesheet_directory_uri() . '/assets/image/' ) );
define( 'DS_ACF_PATH', trailingslashit( dirname( __FILE__ ) ) . 'lib/advanced-custom-fields-pro' );
define( 'DS_ACF_URL', trailingslashit( get_stylesheet_directory_uri() ) . '/inc/lib/advanced-custom-fields-pro' );


add_filter( 'acf/settings/url', 'ds_acf_settings_url');                 // Customize ACF url setting to fix incorrect asset URLs.
add_filter( 'acf/settings/path', 'ds_acf_settings_path' );              // Customize ACF path
add_filter( 'acf/settings/show_admin', 'ds_acf_settings_show_admin' );  // Hide ACF field group menu item

include_once trailingslashit( DS_ACF_PATH ) . 'acf.php'; // Include ACF

function ds_acf_settings_url( $url ) {
	$url = trailingslashit( DS_ACF_URL );
	return $url;
}
function ds_acf_settings_path( $path ) {
	$path = trailingslashit( DS_ACF_PATH ); // update path
	return $path;
}
function ds_acf_settings_show_admin( $show_admin ) {
	return true;
}

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	//if (!current_user_can('administrator') && !is_admin()) {
		 show_admin_bar(false);
	//}
}

function strlimit($str,$limit=10,$add='...'){
	$str = substr($str, 0,$limit).$add;
	return $str;
}




 /*
* Add Image sizes
*/
if ( !function_exists('smarter_add_image_sizes') ){

	function smarter_add_image_sizes() {
        
        // Add your own image sizes
        // add_image_size( 'small_icon', 40, 40);
        // add_image_size( 'mid_icon', 80, 80);
        // add_image_size( 'press_image', 600, 270);
        // add_image_size( 'press_image_center', 600, 270, array( 'center', 'center' ) );       
        // add_image_size( 'banner_small_height', 1920,240,true);
        add_image_size( 'banner_image', 1920,970,true);       
    }
}
add_action( 'after_setup_theme', 'smarter_add_image_sizes' );


