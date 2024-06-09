<?php
/**
 * Builds theme admin page.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define('AVI_THEME_URI','https://uladzimirkulesh.com/portfolio/avi');
define('AVI_THEME_LIVE_URI','https://avi.uladzimirkulesh.com');

if ( ! function_exists( 'avi_admin_page_styles' ) ) {

	/**
	 * Enqueue theme admin page styles.
	 *
	 * @since Avi 1.0.0
	 *
	 * @return void
	 */
	function avi_admin_page_styles( $hook ){

		if ( 'appearance_page_avi-theme' != $hook ) {
			return;
		}

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register admin stylesheets.
		wp_register_style(
			'avi-theme-admin-page',
			get_template_directory_uri() . '/assets/css/admin.css',
			array(),
			$version_string
		);

		// Enqueue admin stylesheets.
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
		<div class="wrap avi__wrap">
			<h1><?php echo esc_html_x( 'Avi Theme', 'Theme admin page title', 'avi' ); ?></h1>

			<p class="avi__theme-description"><?php echo esc_html_x( 'Introducing Avi - the ultimate WordPress theme for digital designers looking to showcase their portfolio in style!', 'Theme admin page text', 'avi' ); ?></p>

			<p class="avi__theme-description"><?php echo esc_html_x( 'With its sleek and modern design, Avi is the perfect platform to showcase your creative work and impress potential clients. Whether you\'re a graphic designer, web developer, or photographer, Avi has got you covered.', 'Theme admin page text', 'avi' ); ?></p>

			<p class="avi__theme-description"><?php echo esc_html_x( 'Featuring a fully customizable layout, Avi allows you to effortlessly create a stunning portfolio that truly reflects your unique style and brand. Choose from a variety of pre-designed templates or create your own from scratch - the possibilities are endless!', 'Theme admin page text', 'avi' ); ?></p>

			<p class="avi__theme-description"><?php echo esc_html_x( 'So why settle for a generic portfolio when you can have Avi - the ultimate WordPress theme for digital designers. Get ready to showcase your talent and elevate your brand with Avi. Try it now!', 'Theme admin page text', 'avi' ); ?></p>

			<p class="submit">
				<a href="<?php echo esc_url( AVI_THEME_URI ); ?>" class="button button-primary" target="_blank"><?php echo esc_html_x( 'Theme Homepage', 'Theme admin page button text', 'avi' ); ?></a>

				<a href="<?php echo esc_url( AVI_THEME_LIVE_URI ); ?>" class="button button-primary" target="_blank"><?php echo esc_html_x( 'Live Preview', 'Theme admin page button text', 'avi' ); ?></a>
			</p>

			<div class="clear"></div>
		</div>
		<?php
	}

}
