<?php
namespace Playground\Shows;
use PostTypes\Taxonomy;


/**
 * Get Config Settings
 */

$taxonomy_settings = module()->config( 'taxonomy' );

/**
 * Instantiate Our Seasons Taxonomy
 *
 * @since  1.0.0
 */
$seasons = new Taxonomy(

	$taxonomy_settings['season']['names'],
	$taxonomy_settings['season']['options'],
	$taxonomy_settings['season']['labels']

);


/**
 * Instantiate Our Series Taxonomy
 *
 * @since  1.0.0
 */
$series = new Taxonomy(

	$taxonomy_settings['series']['names'],
	$taxonomy_settings['series']['options'],
	$taxonomy_settings['series']['labels']

);

// Register Taxonomies
$seasons->register();
$series->register();