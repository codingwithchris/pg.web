<?php
/*
 * Plugin Name: Playground: Maintenance Mode
 * Description: Displays a maintenance mode page for anyone who's not logged in.
 * Version: 1.0
 * Author: Christopher Hahn
 * License: GPL2
 *
 * @package playground-maintenance-mode
 * @copyright Copyright (c) 2015, Christopher Hahn
 * @license GPL2+
*/

/**
 * Maintenance Page
 *
 * Displays the coming soon page for anyone who's not logged in.
 * The login page gets excluded so that you can login if necessary.
 *
 * @return void
 */
function wolf_maintenance_mode() {

	global $pagenow;

	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {

		header('HTTP/1.1 503 Service Temporarily Unavailable');
		header('Status: 503 Service Temporarily Unavailable');
		header( 'Content-Type: text/html; charset=utf-8' );

		if ( file_exists( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' ) ) {

			require_once( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' );

		}

		die();

	}

}

add_action( 'wp_loaded', 'wolf_maintenance_mode' );