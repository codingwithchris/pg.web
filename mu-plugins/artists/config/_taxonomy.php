<?php
namespace Playground\Artists;

return [

	'taxonomy' => [

		/**
		 * Season Taxonomy
		 */
		'positions' => [

			'names' => [

				'name' 		=> 'positions',
			    'singular' 	=> 'Position',
			    'plural' 	=> 'Positions',
			    'slug' 		=> 'position',

			],

			'options' => [

				'hierarchical'		=> true,
				'query_var'			=> true,
				'rewrite'			=>[

				 	'slug' 			=> 'position',
				 	'with_front'	=> false

				 ],
				 'show_admin_column'	=> true,
				 'show_ui'				=> true

			],

			'labels' => [

				'edit_item'			=>  'Edit Position',
				'add_new_item'		=>  'Add New Position',
				'new_item_name'		=>  'New Position Name',

			],

			'filters' => [



			],

			'columns' => [



			]

		],

		
	]

];