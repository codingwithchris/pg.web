<?php
/**
 * MU Plugin Loader
 *
 * @package         Wordpress
 * @license         GPL-2.0+
 *
 * Plugin Name:     Wordpress Dev Tools Plugin Loader
 * Description:     Loads all of our Dev Tools for Local Dev
 *
 * Version:         1.0.0
 * Author:          Christopher Hahn
 * Text Domain:     devtools
 * Requires WP:     4.8
 * Requires PHP:    7.1.4
 */

 /**
 * Load in our dev tools if they exist
 */
file_exists( __DIR__ . '/__devtools/init.php' )
	? require_once( __DIR__ .'/__devtools/init.php' )
	: null;