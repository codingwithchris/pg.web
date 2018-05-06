<?php
namespace Playground\Artists;

return [

	/**
	 * Register Our Artists Custom Post Type
	 */

	'post_type' => [

		'names' => [

			'name' 		=> 'Artists',
		    'singular' 	=> 'Artist',
		    'plural' 	=> 'Artists',
		    'slug' 		=> 'artists'

		],

		'options' => [

			'description'  => 'Artists at the Playground Theatre.',
			'public' => true,
			'publicly_queryable' => true,
			'menu_position' => 10,
			'show_ui' => true,
			'query_var' => true,
			'hierarchical' => true,
			'has_archive' => true,
			'capability_type' => 'post',

			'supports'  => [
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'page-attributes'
			],

			'rewrite'	=> [
		 		'slug' 			=> 'artist',
			 	'with_front'	=> false
			 ],

		],

		'labels' => [

			'edit_item'	  => 'Edit Artist',
			'add_new_item' => 'Add a new Artist',
			'new_item_name'  => 'New Artist Name',
			'description'  => 'Artists at the Playground Theatre.',

		],

		'filters' => [

			'positions',
			
		],

		'columns' => [



		]

	]

];