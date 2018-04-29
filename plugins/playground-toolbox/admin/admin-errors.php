<?php
/**
 * This file holds the functions for
 * custom admin error messages used throughout the
 * cc-toolbox plugin
 *
 * @package    cc-toolbox
 * @call	   cc-toolbox.php
 * @since      1.0.0
 * @author     Christopher Hahn - Catapult Creative
 *
 * Copyright © 2015 Catapult Creative LLC
 *
 */

/* DO NOT LOAD DIRECTLY - DO NOT REMOVE
-------------------------------------------------------------------*/
defined( 'ABSPATH' ) or die( '<h1>NOT THIS TIME</h1>');

/**
 * Version notice Error
 *
 */
function version_error(){
	 	?>
	 	<div class="error notice">
	 	<p><?php esc_html_e( 'Wordpress Version 4.1 or higher is required for all functionality to work properly.  Please Upgrade Now!', 'my_plugin_textdomain'); ?></p>
	  	</div>

	  <?php
 }


/**
* create_acf_missing
*
* Class 'acf' is not found
*
* @since 1.0.0
*
*/

function acf_class_missing(){
	?>

	<div class="error notice">
      <p><?php esc_html_e( ' ACF is either not activated or there is a problem.  The required class "acf" was not found.  Our CC Toolbox plugin will not work without ACF.  Better fix this!', 'my_plugin_textdomain' ); ?></p>
	 </div>
	<?php
}


/**
* acf_missing_func
*
* The specified function was not found
*
* @since  1.0.0
*
*/

function acf_missing_func(){
	?>

	<div class="error notice">
      <p><?php esc_html_e( 'ACF is set up, but it is missing an essential function.  Make sure it is up to date and functioning properly', 'my_plugin_textdomain'); ?></p>
	 </div>
	<?php
}


/**
* missing_cc_custom_acf_setup
*
* cc-acf-custom-seup.php not found
*
* @since  1.0.0
*
*/

function missing_cc_custom_acf_setup(){ ?>

	<div class="error notice">
      <p><?php esc_html_e( 'ACF exists, but the custom file we use to set it up, acf-custom-seup.php, could not be found.', 'my_plugin_textdomain'); ?></p>
	 </div>

	<?php

}


/**
* missing_cc_custom_acf_setup
*
* cc-acf-custom-seup.php not found
*
* @since  1.0.0
*
*/

function missing_admin_functions(){ ?>

	<div class="error notice">
      <p><?php esc_html_e( 'admin-functions.php could not be found at the specified location.', 'my_plugin_textdomain'); ?></p>
	 </div>

	<?php

}



/*
*  missing_load_includes
*
* cc-load-includes.php is missing
*
*  @since	1.0.0
*
*/

function missing_load_includes(){
	?>
	<div class="error notice">
		<p><?php esc_html_e( 'load-includes.php was not found in the specified directory', 'my_plugin_textdomain'); ?></p>
	</div>

<?php
}


/*
*  missing_constant_error
*
*  js-constants.php is missing
*
*  @since	1.0.0
*
*/

function missing_assets_constant_error(){
	?>
	<div class="error notice">
		<p><?php esc_html_e( 'assets-constants.php ( assets/assets-constants.php) is either missing or an incorrect path was specified. No Enqueues will work without this', 'my_plugin_textdomain'); ?></p>
	</div>

<?php
}



function create_missing_vc(){
?>

<div class="error notice">
	<p><?php esc_html_e( 'You have elected to include custom Visual Composer files from your toolbox, but either Visual Composer is not installed or it is not properly configured.', 'my_plugin_textdomain'); ?></p>
</div>
<?php
}