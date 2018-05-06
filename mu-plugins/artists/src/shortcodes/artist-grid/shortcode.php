<?php
namespace Playground\Artists;
use Reactor\Factory\ShortcodeFactory;

// Fire off registration
add_action( 'init', __NAMESPACE__ . '\register_shortcode');

function register_shortcode(){

	// Register new Shortcode
	$config = include_once( __DIR__ . '/config.php' );
	$homefeed = new ShortcodeFactory( $config );

}


// Processing Function
function process_shortcode(  $config, $attributes, $content, $shortcode_name ){

	// Start Output Buffer
	ob_start();
		
		// Query Our Stories
		$artists = query_artists( $attributes ); ?>
		
		<div class="c-artist-grid">

			<?php 

			// If we have stories that match the query
			if ( $artists->have_posts() ) {


					// Render our shortcode and pass all available variables
					render_shortcode( $artists, $config, $attributes, $content, $shortcode_name );
		

				// If we don't reset, this loop will hijack everything and nothing else will display
				// on any page where we use our shortcode.
				
				wp_reset_postdata();

			} else {

				echo "No stories found matching that query";

			}

		?></div><?php

	return ob_get_clean();

}


function render_shortcode( $artists, $config, $attributes, $content, $shortcode_name ){

	// Set the appropriate view.	
	include( $config[ 'views']['artist-grid']  );

}


function query_artists( $attributes ){

	// Tax Query is null by default
	$tax_query = null;

	// If we define groups to query from
	if( $attributes['group'] ){

		$tax_query = array(

			'taxonomy' 	=> 'group',
			'terms' 	=> array( $attributes['group'] ),
			'field' 	=> 'slug',
			'operator'	=> 'IN'

		);

	}


	// Default WP_Query arguments
	$args = array(

		'post_type'              => array( 'artist' ),
		'post_status'            => array( 'publish' ),
		'order'                  => 'ASC',
		'orderby'                => 'name',
		'posts_per_page'		 => -1,
		'tax_query'				 => array( $tax_query )

	);

	// The Query
	$artists = new \WP_Query( $args );

	return $artists;

}