<?php
/**
 *
 * Plugin Name: Playground: WP Toolbox
 * Description: This is a custom functions and utility plugin for The Playground Theatre.  It handles Registering Post Types & Connection, Removes un-needed functions, and more!
 *
 * Version: 1.1
 * Author: Christopher Hahn
 *
 * @package wordpress
 * @depends ACF
 *
 * @note - the site will still load if ACF is not present, but anything that
 * makes use of ACF will not work or display.
 *
 * @note - all admin errors are loaded via includes/admin/admin-errors.php
 */


//DO NOT LOAD DIRECTLY - DO NOT REMOVE
defined( 'ABSPATH' ) or die( 'NOT THIS TIME' );

/**
 *  Define the ROOT PATH for this plugin
 *
 * @note - used for includes and requires
 * @since 1.1
 *
 */
define ( 'PG_TOOLBOX_PATH', plugin_dir_path( __FILE__ ) );

/**
 *  Define the ROOT URL FOR this plugin
 *
 * @note - used for registers and enqueues
 * @since 1.1
 *
 */
define ( 'PG_TOOLBOX_URL', plugin_dir_url( __FILE__ ) );

/**
 * Define the ACF LOCAL CACHE location
 *
 * @since 1.1
 *
 */
 define ( 'ACF_LOCAL_CACHE', PG_TOOLBOX_PATH . '/acf-local-cache' );

/**
 * Define the  INCLUDES folder PATH location
 *
 * @note - used for includes and requires
 * @since 1.1
 *
 */
define ( 'PG_TOOLBOX_INCLUDES_PATH', plugin_dir_path( __FILE__ ) . '/includes' );

/**
 * Define the  INCLUDES folder URL location
 *
 * @note - used for registers and enqueues
 * @since 1.1
 *
 */
define ( 'PG_TOOLBOX_INCLUDES_URL', plugin_dir_url( __FILE__ ) . '/includes' );

/**
*
* Create a custom class to build
* the groundwork for the tools we
* need for all of our custom
* functionality.
*
* @since 1.0.0
*
*/


	if( ! class_exists('PG_Toolbox') ) :

		class PG_Toolbox{

			/*
			*  __construct
			*
			*  A dummy constructor to ensure Loader is only initialized once
			*

			*  @since	1.0.0
			*

			*/

			function __construct() {

				/* Do nothing here */

			}


			/*
			*  initialize
			*
			*  The real constructor to initialize cc_toolbox
			*
			*  @since	1.0.0
			*
			*/

			function initialize() {

				/*
				*  cc admin errors
				*
				*  Admin Errors file  that serves as a mini-debugger on the
				*  admin side of things when required things are not found.  It hopefully
				* gives some clues as to why things aren't working!
				*
				*  @since	1.0.0
				*
				*/

				if (file_exists(PG_TOOLBOX_PATH . '/admin/admin-errors.php')){

					include ( PG_TOOLBOX_PATH . '/admin/admin-errors.php' );

				} else {

					/**
					 * Give an Admin Error that no admin-arrors.php was found
					 * ...OH THE IRONY
					 *
					 * @ note The function is included
					 * below  for this error,
					 * but all subsequent error functions
					 * will be found in admin-errors.php
					 *
					 * @since 1.0
					 *
					 */

					 //Give an error message in the admin area
					 add_action('admin_notices', 'missing_admin_errors' );

				 	function missing_admin_errors(){  ?>

					 	<div class="error notice">
					 		<p><?php _e( 'admin-errors.php was not found in the specified location.', 'my_plugin_textdomain'); ?></p>
					  	</div>

					 <?php }

				}

				/*
				*  cc_admin_functions
				*
				*  Any function relating to the admin area or admin area functionality
				*
				*  @since	1.0.0
				*
				*/

				if (file_exists(PG_TOOLBOX_PATH . '/admin/admin-functions.php')){

					include ( PG_TOOLBOX_PATH . '/admin/admin-functions.php' );

				} else {

					//Give an error message in the admin area
					 add_action('admin_notices', 'missing_admin_functions');

				}


				/**
				 *	The rest of this plugin will be heavily dependent on
				 *  ACF for everything to work properly.  As Such, we are only
				 *  going to continue through if ACF existis.
				 *
				 *	@since 1.0.0
				 *
				 */

				if ( class_exists('acf') ) {

					/**
					 *
					 * Loads our custom Catapult ACF Setup File
					 *
					 * - Adds Options Pages
					 * - Redefines local json cache
					 *
					 *
					 * @since 1.0.0
					 *
					 */

					if (file_exists(PG_TOOLBOX_INCLUDES_PATH . '/acf-custom-setup.php')){

						include ( PG_TOOLBOX_INCLUDES_PATH . '/acf-custom-setup.php' );// ACF Setup

					} else{

						//Give an error message in the admin area
				 	  	add_action('admin_notices', 'missing_cc_custom_acf_setup');

					}

					/**
					 * Anything found in the includes folder
					 * including enqueues will be
					 * loaded from this file.
					 *
					 *
					 * @since 1.1
					 *
					 */

					if (file_exists(PG_TOOLBOX_PATH . '/load-includes.php')){

						require( PG_TOOLBOX_PATH . '/load-includes.php' );

					} else {

						//Give an error message in the admin area
				 		add_action('admin_notices', 'missing_load_includes');

					}

				//IF ACF ISN'T FOUND
				} else {

					//Give an error message in the admin area
					add_action('admin_notices', 'acf_class_missing');

				} // END ACF CLASS CHECK

		} // END Initialize function

	} // END cc_toolbox class


	/*
	*  cc_toolbox INIT
	*
	*  This main function responsible for returning the one true cc_toolbox Instance to functions everywhere.
	*  Use this function like you would a global variable, except without needing to declare the global.
	*
	*  @type	function
	*  @since	1.0.0
	*
	*/

	function pg_toolbox_plugin() {

		global $pg_toolbox;

		if( ! isset( $pg_toolbox ) ) {

			$pg_toolbox = new pg_toolbox();

			$pg_toolbox->initialize();
		}

		return $pg_toolbox;
	}

	// initialize the entire class
	pg_toolbox_plugin();

endif;// End if class_exists wrapper