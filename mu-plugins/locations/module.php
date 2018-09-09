<?php
/**
 * @since 1.0.0
 * @package Playground\Locations
 * @author  Christopher Hahn - The Playground Theatre
 *
 * Module Name: Locations
 * Module Description: This Module handles all Location related functionality.
 *
 */

namespace Playground\Locations;
use Reactor\Factory\ModuleFactory;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die( 'You cannot access this file!' );
}

class LocationsLoader extends ModuleFactory{

	/**
	 * This is where the magic happens. We define the basic
	 * configs for our module and we officially register it
	 */

	public function init_module(){

		$config		= include_once( 'config/config.php' );
		$module_dir = __DIR__;
		$module_url	= plugin_dir_url( __FILE__ );

		$this->register( $config, $module_dir, $module_url );

	}

}

/**
 * Instantiate & return the one true instance of our module.
 * We never want to instantiate a module twice! Insantiating
 * in this way also gives us access to the module anywhere we
 * need access to it...and we don't even have to declare a global!
 * We can just use it as a function!
 *
 * @return OBJECT $module
 *
 */
function module(){

    global $locations;

    if( ! isset( $locations ) ){

        $locations = new LocationsLoader;
        $locations->init_module();

    }

    return $locations;
}

module();