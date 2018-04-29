<?php
/**
 * Controller for the helpers
 *
 * @package        Playground\Module\Helpers
 * @since        0.0.1
 * @author        Christopher Hahn
 * @license        GNU-2.0+
 */

namespace Playground\Module\Helpers;


add_action( 'init', __NAMESPACE__ . '\register_custom_taxonomies' );

function register_custom_taxonomies() {

	$tax_configs = array();

	$tax_configs = (array) apply_filters( 'add_custom_taxonomy_config', $tax_configs );

	foreach ( $tax_configs AS $taxonomy => $config ) {

		register_custom_taxonomy( $taxonomy, $config );

	}

}


function register_custom_taxonomy( $taxonomy, array $config ) {

	$args = $config['args'];

	if ( empty( $args['labels'] ) ) {

		$args['labels'] = generate_custom_labels( $config['labels'], 'taxonomy' );

	}


	register_taxonomy( $taxonomy, $config['post_types'], $args );
	
}