<?php
/**
 * Builds theme admin page.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define('ANOKA_THEME_URI','https://uladzimirkulesh.com/portfolio/avi');
define('ANOKA_THEME_LIVE_URI','https://avi.uladzimirkulesh.com');

if ( ! function_exists( 'avi_admin_page_styles' ) ) {

	/**
	 * Enqueue theme admin page styles.
	 *
	 * @since Avi 1.0.0
	 *
	 * @return void
	 */
	function avi_admin_page_styles( $hook ){

		if ( 'appearance_page_avi' != $hook ) {
			return;
		}

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register plugins stylesheets.
		wp_register_style(
			'avi-theme-admin-page',
			get_template_directory_uri() . '/assets/css/admin.css',
			array( 'avi-style' ),
			$version_string
		);

		// Enqueue plugins stylesheets.
		wp_enqueue_style( 'avi-theme-admin-page' );

	}

}

add_action( 'admin_enqueue_scripts', 'avi_admin_page_styles');

if ( ! function_exists( 'avi_create_admin_menu_item' ) ) {

	/**
	 * Adds theme admin menu item.
	 *
	 * @since Avi 1.0.0
	 *
	 * @return void
	 */
	function avi_create_admin_menu_item() {
		add_theme_page( 'Avi Theme', 'Avi Theme', 'edit_theme_options', 'avi-theme', 'avi_theme_admin_page' );
	}

}

add_action( 'admin_menu', 'avi_create_admin_menu_item' );

if ( ! function_exists( 'avi_theme_admin_page' ) ) {

	/**
	 * Adds theme admin page.
	 *
	 * @since Avi 1.0.0
	 *
	 * @return html
	 */
	function avi_theme_admin_page() {
		?>
		<div class="wrap">
			<h1><?php esc_html_e( 'Avi Theme', 'avi' ); ?></h1>

			<p><?php esc_html_e( 'Thank You for using Avi!', 'avi' ); ?></p>

			<p class="submit">
				<a href="<?php echo esc_url( ANOKA_THEME_URI ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Theme Homepage', 'avi' ); ?></a>

				<a href="<?php echo esc_url( ANOKA_THEME_LIVE_URI ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Live Preview', 'avi' ); ?></a>
			</p>

			<div class="clear"></div>
		</div>
		<?php
	}

}
