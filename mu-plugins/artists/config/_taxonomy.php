<?php
namespace Playground\Artists;

return [

	'taxonomy' => [

		/**
		 * Positions Taxonomy
		 */
		'positions' => [

			'names' => [

				'name' 		=> 'position',
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

		/**
		 * Group Taxonomy
		 */
		'groups' => [

			'names' => [

				'name' 		=> 'group',
			    'singular' 	=> 'Group',
			    'plural' 	=> 'Groups',
			    'slug' 		=> 'group',

			],

			'options' => [

				'hierarchical'		=> true,
				'query_var'			=> true,
				'rewrite'			=>[

				 	'slug' 			=> 'group',
				 	'with_front'	=> false

				 ],
				 'show_admin_column'	=> true,
				 'show_ui'				=> true

			],

			'labels' => [

				'edit_item'			=>  'Edit Group',
				'add_new_item'		=>  'Add New Group',
				'new_item_name'		=>  'New Group Name',

			],

			'filters' => [



			],

			'columns' => [



			]

		],

		
	]

];