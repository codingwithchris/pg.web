<?php
/**
 * Load up Whoops
 *
 * @package     DevTools\Support
 * @since       1.0.2
 * @author      CreativeFuse
 * @link        https://creativefuse.org
 * @license     GPL-2.0+
 */

namespace DevTools\Support;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

/**
 * Setup the Whoops container.
 *
 * @since 1.0.2
 *
 * @return void
 */
function setup_whoops() {
	$whoops     = new Run();
	$error_page = new PrettyPageHandler();

	$error_page->setEditor( 'sublime' );
	$whoops->pushHandler( $error_page );
	$whoops->register();
}

setup_whoops();