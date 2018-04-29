<?php
/**
 * The plugin bootstrap file
 * @since 1.0.0
 * @package Playground\Module\Sponsors
 * 
 * Plugin Name: Playground • Modules
 * Plugin Description: Hand-crafted, bolt-on modules built for The Playground.
 * Author: Christopher Hahn - The Playground Theatre
 * 
 * Version:           1.0.0
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace Playground\Module\Sponsors;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die( 'You cannot access this file!' );
}


define( 'SPONSORS_TEXT_DOMAIN', PG_MU_TEXT_DOMAIN );
define( 'SPONSORS_MODULE_DIR', trailingslashit( __DIR__ ) );

add_filter( 'add_custom_post_type_config', __NAMESPACE__ . '\register_configs' );
add_filter( 'add_custom_taxonomy_config', __NAMESPACE__ . '\register_configs' );


function autoload() {

	$files = array(
		'src/shortcode.php',
	);

	foreach ( $files AS $file ) {
		include( __DIR__ . '/' . $file );
	}

}

add_action( 'plugins_loaded', __NAMESPACE__ . '\setup_module' );

function setup_module() {

	\Playground\Module\Helpers\register_shortcode( SPONSORS_MODULE_DIR . 'config/shortcode.php' );

}


autoload();


/**
 * Register CPT and Custom Taxonomy config files
 *
 * @param array $configs
 *
 * @return array
 */
function register_configs( array $configs ) {

	$doing_post_type = current_filter() == 'add_custom_post_type_config';

	$config_file = $doing_post_type
		? 'post-type'
		: 'taxonomy';

	$runtime_config = (array) require( trailingslashit( __DIR__ ) . 'config/' . $config_file . '.php' );

	if ( empty( $runtime_config ) ) {
		return $configs;
	}

	$key = $doing_post_type
		? $runtime_config['post_type']
		: $runtime_config['taxonomy'];

	$configs[ $key ] = $runtime_config;

	return $configs;

}