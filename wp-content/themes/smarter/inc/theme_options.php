<?php
/**
 * Create A Simple Theme Options Panel
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Start Class
if ( ! class_exists( 'WPEX_Theme_Options' ) ) {

	class WPEX_Theme_Options {

		/**
		 * Start things up
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			// We only need to register the admin panel on the back-end
			if ( is_admin() ) {
				add_action( 'admin_menu', array( 'WPEX_Theme_Options', 'add_admin_menu' ) );
				add_action( 'admin_init', array( 'WPEX_Theme_Options', 'register_settings' ) );
			}

		}

		/**
		 * Returns all theme options
		 *
		 * @since 1.0.0
		 */
		public static function get_theme_options() {
			return get_option( 'theme_options' );
		}

		/**
		 * Returns single theme option
		 *
		 * @since 1.0.0
		 */
		public static function get_theme_option( $id ) {
			$options = self::get_theme_options();
			if ( isset( $options[$id] ) ) {
				return $options[$id];
			}
		}

		/**
		 * Add sub menu page
		 *
		 * @since 1.0.0
		 */
		public static function add_admin_menu() {
			add_menu_page(
				esc_html__( 'Theme Settings', 'text-domain' ),
				esc_html__( 'Theme Settings', 'text-domain' ),
				'manage_options',
				'theme-settings',
				array( 'WPEX_Theme_Options', 'create_admin_page' )
			);
		}

		/**
		 * Register a setting and its sanitization callback.
		 *
		 * We are only registering 1 setting so we can store all options in a single option as
		 * an array. You could, however, register a new setting for each option
		 *
		 * @since 1.0.0
		 */
		public static function register_settings() {
			register_setting( 'theme_options', 'theme_options', array( 'WPEX_Theme_Options', 'sanitize' ) );
		}

		/**
		 * Sanitization callback
		 *
		 * @since 1.0.0
		 */
		public static function sanitize( $options ) {

			// If we have options lets sanitize them
			if ( $options ) {

				// Checkbox
				if ( ! empty( $options['checkbox_example'] ) ) {
					$options['checkbox_example'] = 'on';
				} else {
					unset( $options['checkbox_example'] ); // Remove from options if not checked
				}

				// Input
				if ( ! empty( $options['input_location'] ) ) {
					$options['input_location'] = sanitize_text_field( $options['input_location'] );
				} else {
					unset( $options['input_location'] ); // Remove from options if empty
				}

				if ( ! empty( $options['input_phone'] ) ) {
					$options['input_phone'] = sanitize_text_field( $options['input_phone'] );
				} else {
					unset( $options['input_phone'] ); // Remove from options if empty
				}

				if ( ! empty( $options['input_email'] ) ) {
					$options['input_email'] = sanitize_text_field( $options['input_email'] );
				} else {
					unset( $options['input_email'] ); // Remove from options if empty
				}

				if ( ! empty( $options['input_day_heading'] ) ) {
					$options['input_day_heading'] = sanitize_text_field( $options['input_day_heading'] );
				} else {
					unset( $options['input_day_heading'] ); // Remove from options if empty
				}

				if ( ! empty( $options['input_day_closed'] ) ) {
					$options['input_day_closed'] = sanitize_text_field( $options['input_day_closed'] );
				} else {
					unset( $options['input_day_closed'] ); // Remove from options if empty
				}

				if ( ! empty( $options['input_fb_link'] ) ) {
					$options['input_fb_link'] = sanitize_text_field( $options['input_fb_link'] );
				} else {
					unset( $options['input_fb_link'] ); // Remove from options if empty
				}

				if ( ! empty( $options['input_twitter_link'] ) ) {
					$options['input_twitter_link'] = sanitize_text_field( $options['input_twitter_link'] );
				} else {
					unset( $options['input_twitter_link'] ); // Remove from options if empty
				}


				// Select
				if ( ! empty( $options['select_example'] ) ) {
					$options['select_example'] = sanitize_text_field( $options['select_example'] );
				}

			}

			// Return sanitized options
			return $options;

		}

		/**
		 * Settings page output
		 *
		 * @since 1.0.0
		 */
		public static function create_admin_page() { ?>

			<div class="wrap">

				<h1><?php esc_html_e( 'Theme Options', 'text-domain' ); ?></h1>

				<form method="post" action="options.php">

					<?php settings_fields( 'theme_options' ); ?>

					<table class="form-table wpex-custom-admin-login-table">
					
						<tr valign="top">
							<th scope="row"><?php esc_html_e( 'Location', 'text-domain' ); ?></th>
							<td>
								<?php $value1 = self::get_theme_option( 'input_location' ); ?>
								<input type="text" name="theme_options[input_location]" value="<?php echo esc_attr( $value1 ); ?>">
							</td>
						</tr>						
						<tr valign="top">
							<th scope="row"><?php esc_html_e( 'Phone', 'text-domain' ); ?></th>
							<td>
								<?php $value2 = self::get_theme_option( 'input_phone' ); ?>
								<input type="text" name="theme_options[input_phone]" value="<?php echo esc_attr( $value2 ); ?>">
							</td>
						</tr>
						<tr valign="top">
							<th scope="row"><?php esc_html_e( 'Email Address', 'text-domain' ); ?></th>
							<td>
								<?php $value3 = self::get_theme_option( 'input_email' ); ?>
								<input type="text" name="theme_options[input_email]" value="<?php echo esc_attr( $value3 ); ?>">
							</td>
						</tr>
						<tr valign="top">
							<th scope="row"><?php esc_html_e( 'Day Heading', 'text-domain' ); ?></th>
							<td>
								<?php $value4 = self::get_theme_option( 'input_day_heading' ); ?>
								<input type="text" name="theme_options[input_day_heading]" value="<?php echo esc_attr( $value4 ); ?>">
							</td>
						</tr>
						<tr valign="top">
							<th scope="row"><?php esc_html_e( 'Day Closed', 'text-domain' ); ?></th>
							<td>
								<?php $value5 = self::get_theme_option( 'input_day_closed' ); ?>
								<input type="text" name="theme_options[input_day_closed]" value="<?php echo esc_attr( $value5 ); ?>">
							</td>
						</tr>
						<tr valign="top">
							<th scope="row"><?php esc_html_e( 'Facebook Link', 'text-domain' ); ?></th>
							<td>
								<?php $value6 = self::get_theme_option( 'input_fb_link' ); ?>
								<input type="text" name="theme_options[input_fb_link]" value="<?php echo esc_attr( $value6 ); ?>">
							</td>
						</tr>
						<tr valign="top">
							<th scope="row"><?php esc_html_e( 'Twitter Link', 'text-domain' ); ?></th>
							<td>
								<?php $value7 = self::get_theme_option( 'input_twitter_link' ); ?>
								<input type="text" name="theme_options[input_twitter_link]" value="<?php echo esc_attr( $value7 ); ?>">
							</td>
						</tr>
					</table>

					<?php submit_button(); ?>

				</form>

			</div><!-- .wrap -->
		<?php }

	}
}
new WPEX_Theme_Options();

// Helper function to use in your theme to return a theme option value
function myprefix_get_theme_option( $id = '' ) {
	return WPEX_Theme_Options::get_theme_option( $id );
}