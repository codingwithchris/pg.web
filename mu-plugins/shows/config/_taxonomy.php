<?php
namespace Playground\Shows;

return [

	'taxonomy' => [

		/**
		 * Season Taxonomy
		 */
		'season' => [

			'names' => [

				'name' 		=> 'season',
			    'singular' 	=> 'Season',
			    'plural' 	=> 'Seasons',
			    'slug' 		=> 'seasons',

			],

			'options' => [

				'hierarchical'		=> true,
				'query_var'			=> true,
				'rewrite'			=>[

				 	'slug' 			=> 'season',
				 	'with_front'	=> false

				 ],
				 'show_admin_column'	=> true,
				 'show_ui'				=> true

			],

			'labels' => [

				'edit_item'			=>  'Edit Season',
				'add_new_item'		=>  'Add New Season',
				'new_item_name'		=>  'New Season Name',

			],

			'filters' => [



			],

			'columns' => [



			]

		],
		
		/**
		 * Series Taxonomy
		 */
		'series' => [

			'names' => [

				'name' 		=> 'series',
			    'singular' 	=> 'series',
			    'plural' 	=> 'Series',
			    'slug' 		=> 'series',

			],

			'options' => [

				'hierarchical'		=> true,
				'query_var'			=> true,
				'rewrite'			=>[

				 	'slug' 			=> 'series',
				 	'with_front'	=> false

				 ],
				 'show_admin_column'	=> true,
				 'show_ui'				=> true


			],

			'labels' => [

				'edit_item'			=>  'Edit Series',
				'add_new_item'		=>  'Add New Series',
				'new_item_name'		=>  'New Series',

			],

			'filters' => [



			],

			'columns' => [



			]

		]

		
	]

];