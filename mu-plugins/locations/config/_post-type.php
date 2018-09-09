<?php
namespace Playground\Locations;

return [

	/**
	 * Register Our Locations Custom Post Type
	 */

	'post_type' => [

		'names' => [

			'name' 		=> 'locations',
		    'singular' 	=> 'Location',
		    'plural' 	=> 'Locations',
		    'slug' 		=> 'locations'

		],

		'options' => [

			'description'  => 'Locations of Playground Events',
			'public' => true,
			'publicly_queryable' => true,
			'menu_position' => 10,
			'show_ui' => true,
			'query_var' => true,
			'hierarchical' => true,
			'has_archive' => false,
			'capability_type' => 'post',

			'supports'  => [
				'title',
				'editor',
				'thumbnail',
				'page-attributes'
			],

			'rewrite'	=> [
		 		'slug' 			=> 'locations',
			 	'with_front'	=> false
			 ],

		],

		'labels' => [

			'edit_item'	  => 'Edit Location',
			'add_new_item' => 'Add a new Location',
			'new_item_name'  => 'New Location Name',
			'description'  => 'Locations of Playground Events.',

		],

		'filters' => [


		],

		'columns' => [



		]

	]

];