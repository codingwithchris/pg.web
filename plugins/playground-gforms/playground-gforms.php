<?php
/**
 *
 * Plugin Name: Playground: Gravity Forms
 * Description: A special plugin to make our Gravity Forms WAY More awesome!!
 *  @note http://cornel.bopp-art.com/lightcase/documentation/
 *
 * Version: 1.0
 * Author: Christopher Hahn
 *
 * @package wordpress
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
define ( 'WOLF_GFORMS_PATH', plugin_dir_path( __FILE__ ) );

/**
 *  Define the ROOT URL FOR this plugin
 *
 * @note - used for registers and enqueues
 * @since 1.0
 *
 */
define ( 'WOLF_GFORMS_URL', plugin_dir_url( __FILE__ ) );

/**
 *  Define the ASSET URL FOR this plugin
 *
 * @note - used for registers and enqueues
 * @since 1.0
 *
 */
define( 'WOLF_GFORMS_ASSET_URL', WOLF_GFORMS_URL . '/assets');


if ( ! class_exists( 'GF_Common' ) ){

	class WOLF_GForms{

		function __construct() {

			$this->custom_functions();

		}

		public function custom_functions(){

			require_once( 'custom-gform-functions.php' );

		}

	} //End Class

	new WOLF_GForms;

}// End Class Exists Check