<?php
/**
 * Plugin Name: Playground: Analytics
 * Description: This custom plugin loads the Google Tag Manager script right after the opening body tag.  To stop scripts from loading, simply deactivate the plugin.
 * Author: Christopher Hahn
 * Version: 1.0.0
 *
 * @note - Google Tag manager handles all of our analytics scripts as well as loading in other services
 * such as hotjar etc.
 */

//Die if accessed Directly
if ( ! defined( 'ABSPATH' ) ) {
	die('No scripts kiddies please');
}

/**
* Define Constant Directories
* @note used for requires and includes
*/

if ( ! defined('WOLF_ANALYTICS_DIR') ){
  define( 'WOLF_ANALYTICS_DIR', plugin_dir_path(__FILE__) );
}

if ( ! defined('WOLF_ANALYTICS_INC_DIR') ){
  define( 'WOLF_ANALYTICS_INC_DIR', WOLF_ANALYTICS_DIR . '/includes' );
}


/**
 * Set up the class main for the plugin
 * @since 1.0.0
 */

if ( ! class_exists( 'WOLF_Analytics_Stack' ) ){

	class WOLF_Analytics_Stack{


		function __construct() {

			$this->load();

		}


		/**
		 * Load Analytics into appropriate Hook
		 *
		 */
		function load(){

			add_action( 'wp_head', array( $this, 'load_hotjar' ), 1 );
 			add_action( 'wolf_before_site_begin', array( $this, 'load_google_analytics' ), 1 );
 			add_action( 'wolf_before_site_begin', array( $this, 'load_fb_pixel' ), 2 );

		}

		/**
		 * Include Facebook Pixel
		 *
		 */
		function load_fb_pixel(){

			include_once ( WOLF_ANALYTICS_INC_DIR . '/fb-pixel.php' );

		}

		/**
		 * Include Google Analytics
		 *
		 */
		function load_google_analytics(){

			require_once ( WOLF_ANALYTICS_INC_DIR . '/google-analytics.php' );

		}

		/**
		 * Include Hotjar
		 *
		 */
		function load_hotjar(){

			require_once ( WOLF_ANALYTICS_INC_DIR . '/hotjar.php' );

		}

	}//End WOLF_Analytics_Stack


	// initialize the entire class
	new WOLF_Analytics_Stack;


}//end if class exists check