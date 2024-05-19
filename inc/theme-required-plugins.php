<?php
/**
 * Register the required plugins.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @version    2.6.1 for parent theme Avi
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'avi_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 */
function avi_register_required_plugins() {
	$plugins = array(
		array(
			'name'     => esc_html__( 'UK Portfolio', 'avi' ),
			'slug'     => 'uk-portfolio',
			'required' => false,
		)
	);

	tgmpa( $plugins );
}
