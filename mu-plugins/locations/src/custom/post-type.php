<?php
namespace Playground\Locations;
use PostTypes\PostType;

/**
 * Get Config Settings
 */
$post_type_settings = module()->config( 'post_type' );

/**
 * Instantiate Our Shows Post Type
 *
 * @since  1.0.0
 */
$locations = new PostType(

	$post_type_settings['names'],
	$post_type_settings['options'],
	$post_type_settings['labels']

);

// Register Post Type
$locations->register();

/**
 * Set Up Filters for our post type
 */
$locations->filters( $post_type_settings['filters'] );


/**
 * Set Admin Icon
 */

$locations->icon( 'dashicons-location' );
