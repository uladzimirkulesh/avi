<?php
/**
 * Avi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Avi
 * @since Avi 1.0.0
 */

if ( ! function_exists( 'avi_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Avi 1.0.0
	 *
	 * @return void
	 */
	function avi_support() {

		// Enqueue editor styles.
		add_editor_style( array(
			'style.css',
			'assets/css/grid.css',
			'assets/css/patterns.css',
			'assets/css/animations.css',
			'assets/css/uk-portfolio.css'
		) );

	}

endif;

add_action( 'after_setup_theme', 'avi_support' );

if ( ! function_exists( 'avi_scripts' ) ) :

	/**
	 * Enqueue styles and scripts.
	 *
	 * @since Avi 1.0.0
	 *
	 * @return void
	 */
	function avi_scripts() {

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register main stylesheet.
		wp_register_style(
			'avi-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue main stylesheet.
		wp_enqueue_style( 'avi-style' );

		// Register other stylesheets.
		wp_register_style(
			'avi-grid',
			get_template_directory_uri() . '/assets/css/grid.css',
			array( 'avi-style' ),
			$version_string
		);

		wp_register_style(
			'avi-patterns',
			get_template_directory_uri() . '/assets/css/patterns.css',
			array( 'avi-style' ),
			$version_string
		);

		wp_register_style(
			'avi-animations',
			get_template_directory_uri() . '/assets/css/animations.css',
			array( 'avi-style' ),
			$version_string
		);

		// Enqueue other stylesheets.
		wp_enqueue_style( 'avi-grid' );
		wp_enqueue_style( 'avi-patterns' );
		wp_enqueue_style( 'avi-animations' );

		// Register plugins stylesheets.
		wp_register_style(
			'uk-portfolio',
			get_template_directory_uri() . '/assets/css/uk-portfolio.css',
			array( 'avi-style' ),
			$version_string
		);

		// Enqueue plugins stylesheets.
		wp_enqueue_style( 'uk-portfolio' );

		// Register global scripts.
		wp_register_script(
			'avi-global',
			get_template_directory_uri() . '/assets/js/global.js',
			array( 'jquery' ),
			$version_string,
			array(
				'strategy' => 'defer',
				'in_footer' => true
			)
		);

		// Register animations scripts.
		wp_register_script(
			'avi-animations',
			get_template_directory_uri() . '/assets/js/animations.js',
			array( 'avi-global' ),
			$version_string,
			array(
				'strategy' => 'defer',
				'in_footer' => true
			)
		);

		// Enqueue animations scripts.
		wp_enqueue_script( 'avi-animations' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'avi_scripts' );

if ( ! function_exists( 'avi_block_styles' ) ) :

	/**
	 * Enqueue block style scripts.
	 *
	 * @since Avi 1.0.0
	 *
	 * @return void
	 */
	function avi_block_styles() {

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_enqueue_script(
			'avi-block-styles',
			get_theme_file_uri( '/assets/js/block-styles.js' ),
			array(
				'wp-blocks',
				'wp-dom-ready',
				'wp-edit-post',
				'wp-i18n'
			),
			$version_string,
			true
		);

		wp_set_script_translations( 'avi-block-styles', 'avi' );

	}

endif;

add_action( 'enqueue_block_editor_assets', 'avi_block_styles' );

if ( ! function_exists( 'avi_block_stylesheets' ) ) :

	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Avi 1.0.0
	 *
	 * @return void
	 */
	function avi_block_stylesheets() {

		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */

		$theme_version  = wp_get_theme( get_template() )->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_enqueue_block_style(
			'core/code',
			array(
				'handle' => 'avi-code',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/code.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/code.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/comment-content',
			array(
				'handle' => 'avi-comment-content',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/comment-content.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/comment-content.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/comments-pagination',
			array(
				'handle' => 'avi-comments-pagination',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/comments-pagination.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/comments-pagination.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/gallery',
			array(
				'handle' => 'avi-gallery',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/gallery.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/gallery.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/group',
			array(
				'handle' => 'avi-group',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/group.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/group.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/heading',
			array(
				'handle' => 'avi-heading',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/heading.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/heading.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/image',
			array(
				'handle' => 'avi-image',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/image.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/image.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/navigation',
			array(
				'handle' => 'avi-navigation',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/navigation.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/navigation.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/post-comments-form',
			array(
				'handle' => 'avi-post-comments-form',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/post-comments-form.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/post-comments-form.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/post-date',
			array(
				'handle' => 'avi-post-date',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/post-date.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/post-date.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/post-terms',
			array(
				'handle' => 'avi-post-terms',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/post-terms.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/post-terms.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/pullquote',
			array(
				'handle' => 'avi-pullquote',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/pullquote.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/pullquote.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/query-pagination',
			array(
				'handle' => 'avi-query-pagination',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/query-pagination.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/query-pagination.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/query',
			array(
				'handle' => 'avi-query',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/query.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/query.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/quote',
			array(
				'handle' => 'avi-quote',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/quote.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/quote.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/search',
			array(
				'handle' => 'avi-search',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/search.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/search.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/separator',
			array(
				'handle' => 'avi-separator',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/separator.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/separator.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/table',
			array(
				'handle' => 'avi-table',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/table.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/table.css' ),
			)
		);

	}

endif;

add_action( 'init', 'avi_block_stylesheets' );

if ( ! function_exists( 'avi_register_block_pattern_categories' ) ) :

	/**
	 * Registers block pattern categories.
	 *
	 * @since Avi 1.0.0
	 *
	 * @return void
	 */
	function avi_register_block_pattern_categories() {

		$block_pattern_categories = array(
			'avi-theme' => array( 'label' => esc_html__( 'Avi Theme', 'avi' ) ),
			'portfolio' => array( 'label' => esc_html__( 'Portfolio', 'avi' ) ),
			'page'      => array( 'label' => esc_html__( 'Pages', 'avi' ) )
		);

		/**
		 * Filters the theme block pattern categories.
		 *
		 * @since Avi 1.0.0
		 *
		 * @param array[] $block_pattern_categories {
		 *     An associative array of block pattern categories, keyed by category name.
		 *
		 *     @type array[] $properties {
		 *         An array of block category properties.
		 *
		 *         @type string $label A human-readable label for the pattern category.
		 *     }
		 * }
		 */
		$block_pattern_categories = apply_filters( 'avi_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

	}

endif;

add_action( 'init', 'avi_register_block_pattern_categories', 9 );

if ( ! function_exists( 'avi_head_meta_tags' ) ) :

	/**
	 * Adds meta tags to head section.
	 *
	 * @since Avi 1.0.0
	 *
	 * @return html
	 */
	function avi_head_meta_tags() {
		echo '<meta name="theme-color" content="rgb(21, 21, 23)" />';
	}

endif;

add_action( 'wp_head', 'avi_head_meta_tags' );

if ( ! function_exists( 'avi_loading_screen' ) ) :

	/**
	 * Adds loading screen HTML in the top of the body tag.
	 *
	 * @since Avi 1.0.0
	 *
	 * @return html
	 */
	function avi_loading_screen() {
		block_template_part( 'loading-screen' );
	}

endif;

add_action( 'wp_body_open', 'avi_loading_screen' );

// Load theme admin page file.
require get_template_directory() . '/inc/theme.php';

// Load TGM Plugin Activation file.
require get_template_directory() . '/inc/theme-required-plugins.php';
