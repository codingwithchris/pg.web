<?php
/**
 * The plugin bootstrap file
 * @since 1.0.0
 * @package Playground\Module
 * 
 * Plugin Name: Playground • Module Helpers
 * Plugin Description: Hand-crafted, bolt-on modules built for The Playground.
 * Author: Christopher Hahn - The Playground Theatre
 * 
 * Version:           1.0.0
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace Playground\Module\Helpers;


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die( 'You cannot access this file!' );
}


function autoload() {


	// array of relative file names to be loaded
	$files = array(
		'label-generator.php',
		'post-type.php',
		'taxonomy.php',
		'shortcode.php'
	);


	foreach ( $files AS $file ) {

		require_once plugin_dir_path( __FILE__ ) . '/src/' . $file ;

	}


}

autoload();