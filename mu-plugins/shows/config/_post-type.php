<?php
namespace Playground\Shows;

return [

	/**
	 * Register Our Shows Custom Post Type
	 */

	'post_type' => [

		'names' => [

			'name' 		=> 'shows',
		    'singular' 	=> 'Show',
		    'plural' 	=> 'Shows',
		    'slug' 		=> 'shows'

		],

		'options' => [

			'description'  => 'Shows at the Playground Theatre.',
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
		 		'slug' 			=> 'shows',
			 	'with_front'	=> false
			 ],

		],

		'labels' => [

			'edit_item'	  => 'Edit Show',
			'add_new_item' => 'Add a new Show',
			'new_item_name'  => 'New Show Name',
			'description'  => 'Shows at the Playground Theatre.',

		],

		'filters' => [

			'season',
			'series',
			
		],

		'columns' => [



		]

	]

];