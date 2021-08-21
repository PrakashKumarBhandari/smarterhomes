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



 
function clean_custom_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
 
        $menu_list  = '<nav>' ."\n";
        $menu_list .= '<ul class="main-nav">' ."\n";
 
        $count = 0;
        $submenu = false;
         
        foreach( $menu_items as $menu_item ) {
             
            $link = $menu_item->url;
            $title = $menu_item->title;
             
            if ( !$menu_item->menu_item_parent ) {
                $parent_id = $menu_item->ID;
                 
                $menu_list .= '<li class="item">' ."\n";
                $menu_list .= '<a href="'.$link.'" class="title">'.$title.'</a>' ."\n";
            }
 
            if ( $parent_id == $menu_item->menu_item_parent ) {
 
                if ( !$submenu ) {
                    $submenu = true;
                    $menu_list .= '<ul class="sub-menu">' ."\n";
                }
 
                $menu_list .= '<li class="item">' ."\n";
                $menu_list .= '<a href="'.$link.'" class="title">'.$title.'</a>' ."\n";
                $menu_list .= '</li>' ."\n";
                     
 
                if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
                    $menu_list .= '</ul>' ."\n";
                    $submenu = false;
                }
 
            }
 
            if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) { 
                $menu_list .= '</li>' ."\n";      
                $submenu = false;
            }
 
            $count++;
        }
         
        $menu_list .= '</ul>' ."\n";
        $menu_list .= '</nav>' ."\n";
 
    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }
    echo $menu_list;
}

