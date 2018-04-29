<?php

# ========================================================================================== #
/** 05. **/
# ========================================================================================== #


add_action( 'init', 'playground_location_cpt' );

	function playground_location_cpt() {

		register_post_type( 'locations', array(
			  'labels' => array(
			  'name' => 'Location',
			  'singular_name' => 'Location',
			   'edit_item'	  => 'Edit Location',
			   'menu_name'			=>  'Locations',
			   'add_new_item' => 'Add a New Location',
			   'new_item_name'  => 'New Location',

			),
			'description'  => 'Show and Event Locations at The Playground Theatre',
			'public' => true,
			'publicly_queryable' => true,
			'menu_position' => 10,
			'show_ui' => true,
			'query_var' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'locations'),
			'has_archive' => true,
			'capability_type' => 'post',
			'menu_icon'			=> 'dashicons-location-alt',
			'supports'  => array( 'title', 'editor', 'thumbnail', 'excerpt')
		));
}
