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

	],



	],

	include_once( __DIR__ . '/_post-type.php' ),
	include_once( __DIR__ . '/_taxonomy.php' ),
	include_once( __DIR__ . '/_assets.php' )

);