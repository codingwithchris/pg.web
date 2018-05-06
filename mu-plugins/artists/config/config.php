<?php
namespace Playground\Artists;

// Merge all config files into a single config object
// to be loaded into our theme
return array_merge(

	[

		'settings' => [

			'name'			=>	'artists',
			'version'		=>	'1.0.0',
			'description'	=>	'Handles all artist related functionality',

		],


		'files'	=> [


			// Custom Post Types
			'src/custom/taxonomy.php',
			'src/custom/post-type.php',

			// Shortcodes
			'src/shortcodes/artist-grid/shortcode.php'


		],

		// Our Views directory for Shortcodes
		'views' => dirname( __FILE__, 2 ) . '/src/views/',

	],

	include_once( __DIR__ . '/_post-type.php' ),
	include_once( __DIR__ . '/_taxonomy.php' ),
	include_once( __DIR__ . '/_assets.php' )

);