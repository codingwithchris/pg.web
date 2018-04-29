<?php
/**
 * The plugin bootstrap file
 * @since 1.0.0
 * @package Playground\Module
 * 
 * Plugin Name: Playground • Modules
 * Plugin Description: Hand-crafted, bolt-on modules built for The Playground.
 * Author: Christopher Hahn - The Playground Theatre
 * 
 * Version:           1.0.0
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace Playground\Module;


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die( 'You cannot access this file!' );
}


function autoload() {


	// array of relative file names to be loaded
	$modules = array(
		'helpers',
		'sponsors',
		'artists',
	);


	foreach ( $modules AS $module ) {

		require_once plugin_dir_path( __FILE__ ) . '/' . $module . '/module.php';

	}


}

autoload();