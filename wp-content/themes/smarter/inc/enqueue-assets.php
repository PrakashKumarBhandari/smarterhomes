<?php
/**
 * Enqueue scripts and styles.
 */
function smarter_homes_scripts() {
	wp_enqueue_style( 'bootstrap-loc', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'fullpage-css', get_template_directory_uri() . '/assets/css/fullpage.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'slick-slider', get_template_directory_uri() . '/assets/css/slick.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'slick-themes', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'hover', get_template_directory_uri() . '/assets/css/hover.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'style-main', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION, 'all' );

	wp_enqueue_script( 'smarter-jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(),_S_VERSION, true );
	wp_enqueue_script( 'smarter-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'aos','https://unpkg.com/aos@2.3.1/dist/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'smarter-fullpage-scroll', get_template_directory_uri() . '/assets/js/fullpage.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'smarter-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		// wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'smarter_homes_scripts' );


// function smarter_admin_assets() {
// 	wp_enqueue_style( 'admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), _S_VERSION, 'all' );
// 	wp_enqueue_script( 'admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), _S_VERSION, true );
// }
// add_action( 'admin_enqueue_scripts', 'smarter_admin_assets' );


// function smarter_customize_preview_js() {
// 	wp_enqueue_script( 'customize-preview', get_template_directory_uri() . '/dist/assets/js/customize-preview.js', array( 'customize-preview', 'jquery' ), _S_VERSION, true );
// }
// add_action( 'customize_preview_init', 'smarter_customize_preview_js' );
