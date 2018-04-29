<?php
/**
 *
 * Plugin Name: Playground: Notices
 * Description: Add custom, closeable notices with ACF and JQuery.
 *
 * Version: 1.0
 * Author: Christopher Hahn
 *
 * @package wordpress
 * @depends ACF
 *
 * @note - the site will still load if ACF is not present, but anything that
 * makes use of ACF will not work or display.
 *
 */

//DO NOT LOAD DIRECTLY - DO NOT REMOVE
defined( 'ABSPATH' ) or die( 'NOT THIS TIME' );

/**
 *  Define the ROOT PATH FOR this plugin
 *
 * @note - used for includes and requires
 * @since 1.0
 *
 */
define ( 'WOLF_NOTICES_PATH', plugin_dir_path( __FILE__ ) );

/**
 *  Define the ROOT URL FOR this plugin
 *
 * @note - used for registers and enqueues
 * @since 1.0
 *
 */
define ( 'WOLF_NOTICES_URL', plugin_dir_url( __FILE__ ) );

/**
 *  Define the ASSET URL FOR this plugin
 *
 * @note - used for registers and enqueues
 * @since 1.0
 *
 */
define( 'WOLF_NOTICES_ASSET_URL', WOLF_NOTICES_URL . 'assets');


if ( ! class_exists( 'WOLF_Notices' ) ){

	class WOLF_Notices{

		function __construct() {

			$this->admin();
			$this->notice();

		}

		public function admin(){

			require_once( WOLF_NOTICES_PATH . '/includes/admin-acf-options-page.php' );

		}

		public function notice(){

			require_once( WOLF_NOTICES_PATH . '/includes/public-get-notice.php' );

		}


	} //End Class

	new WOLF_Notices;

}// End Class Exists Check