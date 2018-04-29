<?php
/**
 * MU Plugin Loader
 *
 * @package         Wordpress
 * @license         GPL-2.0+
 *
 * Plugin Name:     Must Use Plugin Loader
 * Description:     Loads all of our Must Use Plugins
 *
 * Version:         1.0.0
 * Author:          Christopher Hahn
 * Text Domain:     pg
 * Requires WP:     4.8
 * Requires PHP:    7.1.4
 */

namespace App;
use function App\config as app;

/**
 * The very first thing we are going to do is require our project
 * config class. This MUST be the first thing loaded as it provides
 * information and configuration to the entire project.
 *
 * @since  1.0.0
 */
require_once( __DIR__ . '/__config/class.config.php' );

/**
 * Load in our dev tools if they exist
 */
file_exists( __DIR__ . '/__tracer/init.php' )
	? require_once( __DIR__ .'/__tracer/init.php' )
	: null;

/**
 * Load in _Reactor! This contains core & functionality to use for our entire project
 */
require_once( __DIR__ . '/_Reactor/init.php' );

/**
 * Begin loading additional modules if our module factory exists
 */
if( class_exists( 'Reactor\Factory\ModuleFactory' ) ){

	// If we defined modules to load
	if( app()->config('modules') ){

		foreach ( app()->config('modules') as $module_name ){

			include_once( $module_name . '/' . 'module.php' );

		}

	}
}



/**
 * Load our legacy files
 */

include_once( __DIR__ . '/zzz-pg-legacy/bootstrap.php' );