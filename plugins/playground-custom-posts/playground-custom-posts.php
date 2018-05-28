<?php
/**
 *
 * Plugin Name: Playground: Custom Post Types and Relationships
 * Description: A custom plugin for Playground that creates custom post types and builds relationships between them.
 *
 * Version: 1.0
 * Author: Christopher Hahn
 *
 * @package wordpress
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
define ( 'WOLF_POSTS_PATH', plugin_dir_path( __FILE__ ) );

/**
 *  Define the ROOT URL FOR this plugin
 *
 * @note - used for registers and enqueues
 * @since 1.0
 *
 */
define ( 'WOLF_POSTS_URL', plugin_dir_url( __FILE__ ) );

/**
 *  Define the ASSET URL FOR this plugin
 *
 * @note - used for registers and enqueues
 * @since 1.0
 *
 */
define( 'WOLF_POSTS_ASSET_URL', WOLF_POSTS_URL . 'assets');


if ( ! class_exists( 'WOLF_Custom_Posts' ) ){

	class WOLF_Custom_Posts{

		function __construct() {

			$this->register_custom_post_types();
			register_activation_hook( __FILE__, array( $this, 'playground_flush_rewrites' ) );
			register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );

		}

		public function register_custom_post_types(){

			//require_once( WOLF_POSTS_PATH . '/includes/register-artists.php' );
			//require_once( WOLF_POSTS_PATH . '/includes/register-auditions.php' );
			//require_once( WOLF_POSTS_PATH . '/includes/register-blogs.php' );
			require_once( WOLF_POSTS_PATH . '/includes/register-classes.php' );
			//require_once( WOLF_POSTS_PATH . '/includes/register-locations.php' );
			//require_once( WOLF_POSTS_PATH . '/includes/register-publicity.php' );
			require_once( WOLF_POSTS_PATH . '/includes/register-shows.php' );

		}

		public function playground_flush_rewrites(){

			if ( function_exists( 'playground_artists_cpt' ) ){
				playground_artists_cpt();
			}

			if ( function_exists( 'playground_audition_cpt' ) ){
				playground_audition_cpt();
			}

			if ( function_exists( '' ) ){
				playground_blog_cpt();
			}

			if ( function_exists( 'playground_location_cpt' ) ){
				playground_location_cpt();
			}

			if ( function_exists( 'playground_publicity_cpt' ) ){
				playground_publicity_cpt();
			}

			if ( function_exists( 'playground_shows_cpt' ) ){
				playground_shows_cpt();
			}

			flush_rewrite_rules();

		}





	} //End Class

	new WOLF_Custom_Posts;

}// End Class Exists Check