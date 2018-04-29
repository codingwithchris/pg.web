<?php
/**
 * Sponsors Shortcode Handler
 *
 * @package     Playground\Module\Sponsors
 * @since       0.0.1
 * @author      nvwd
 * @license     GNU-2.0+
 */
namespace Playground\Module\Sponsors;

function process_shortcode( array $config, array $attributes, $content, $shortcode_name ) {

	ob_start();

	render( $attributes, $config );

	return ob_get_clean();
}

function render( $attributes, $config ) {

	if( have_rows( 'show_sponsors' ) ){

		include( $config['view'] );
		
	}


}