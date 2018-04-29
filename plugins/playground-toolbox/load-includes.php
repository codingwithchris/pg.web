<?php
/**
 * This page is responsible for including and requiring
 * any files we need to use or pull in.  It also has a
 * special function for visual composer
 *
 *
 * @author Christopher Hahn - Catapult Creative
 * @since: 1.1
 * @call cc-toolbox.php
 *
 */


/* DO NOT LOAD DIRECTLY - DO NOT REMOVE
-------------------------------------------------------------------*/
defined( 'ABSPATH' ) or die( 'NOT THIS TIME');


//Functions
require_once( PG_TOOLBOX_INCLUDES_PATH. '/remove-functions.php' ); //Any function that removes something
require_once( PG_TOOLBOX_INCLUDES_PATH. '/add-functions.php' ); //Any function that removes something
require_once( PG_TOOLBOX_INCLUDES_PATH. '/plugin-control.php' ); // Controls Plugin load on the Site

//Enqueue Scripts and Styles
require_once( PG_TOOLBOX_INCLUDES_PATH. '/enqueues/load-scripts-styles.php' );