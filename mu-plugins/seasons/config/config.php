<?php
namespace Playground\Seasons;


// Merge all config files into a single config object
// to be loaded into our theme
return array_merge(

	[

		'settings' => [

			'name'			=>	'seasons',
			'version'		=>	'1.0.0',
			'description'	=>	'Handles all seasons related functionality',

		],


		'files'	=> [

			'src/class.season.php'

		],

    ],

	include_once( __DIR__ . '/_assets.php' )

);