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

	$taxonomy_settings['positions']['names'],
	$taxonomy_settings['positions']['options'],
	$taxonomy_settings['positions']['labels']

);

/**
 * Instantiate Our Group Taxonomy
 *
 * @since  1.0.0
 */
$group = new Taxonomy(

	$taxonomy_settings['groups']['names'],
	$taxonomy_settings['groups']['options'],
	$taxonomy_settings['groups']['labels']

);


// Register Taxonomies
$positions->register();
$group->register();
