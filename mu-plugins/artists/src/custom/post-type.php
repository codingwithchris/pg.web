<?php
namespace Playground\Artists;
use PostTypes\PostType;

/**
 * Get Config Settings
 */
$post_type_settings = module()->config( 'post_type' );
$taxonomy_settings = module()->config( 'taxonomy' );

/**
 * Instantiate Our Artists Post Type
 *
 * @since  1.0.0
 */
$artists = new PostType(

	$post_type_settings['names'],
	$post_type_settings['options'],
	$post_type_settings['labels']

);


// Register Post Type
$artists->register();


/**
 * Give Post Type Our Taxonomies
 */
$artists->taxonomy( $taxonomy_settings['positions']['names']['name'] );
$artists->taxonomy( $taxonomy_settings['groups']['names']['name'] );


/**
 * Set Up Filters for our post type
 */
$artists->filters( $post_type_settings['filters'] );


/**
 * Set Admin Icon
 */
$artists->icon( module()->get_url() . '/assets/img/admin-icon.png' );
