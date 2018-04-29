<?php
namespace Playground\Shows;
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
$shows = new PostType(

	$post_type_settings['names'],
	$post_type_settings['options'],
	$post_type_settings['labels']

);

// Register Post Type
$shows->register();

/**
 * Give Post Type Our Taxonomies
 */
$shows->taxonomy( $taxonomy_settings['season']['names']['name'] );
$shows->taxonomy( $taxonomy_settings['series']['names']['name'] );

/**
 * Set Up Filters for our post type
 */
$shows->filters( $post_type_settings['filters'] );