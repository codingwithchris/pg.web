<?php
namespace Playground\Shows;


// Merge all config files into a single config object
// to be loaded into our theme
return array_merge(

	[

		'settings' => [

			'name'			=>	'shows',
			'version'		=>	'1.0.0',
			'description'	=>	'Handles all show related functionality',

		],


		'files'	=> [

			'src/custom/taxonomy.php',
			'src/custom/post-type.php'

		],

	],

	include_once( __DIR__ . '/_post-type.php' ),
	include_once( __DIR__ . '/_taxonomy.php' ),
	include_once( __DIR__ . '/_shortcodes.php' ),
	include_once( __DIR__ . '/_assets.php' )
	
);