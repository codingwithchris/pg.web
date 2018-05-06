<?php
namespace Playground\Artists;
use PostTypes\Taxonomy;


/**
 * Get Config Settings
 */

$taxonomy_settings = module()->config( 'taxonomy' );

/**
 * Instantiate Our Positions Taxonomy
 *
 * @since  1.0.0
 */
$positions = new Taxonomy(

	$taxonomy_settings['season']['names'],
	$taxonomy_settings['season']['options'],
	$taxonomy_settings['season']['labels']

);

// Register Taxonomies
$positions->register();
