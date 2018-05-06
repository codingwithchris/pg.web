<?php
namespace App;

return array(

	'project'	=> array(

		'name'					=> 'playground',
		'version' 				=> '0.0.1',
		'text_domain'			=> 'pg',
		'timezone'				=> 'America/New_York',

	),

	'author'	=> array(

		'name'	=> 'Christopher Hahn',
		'email'	=> 'chris@theplaygroundtheatre.org',

	),

	'env' => array(

		// An array of potential dev environments
		'dev'	=> array( 
			'.local',
			'.dev',
			'localhost:3000',
		),
		
	),

	'modules'	=> array(

		//'analytics',
		'artists',
		//'classes',
		'shows'
		//'sponsors',
		
	)

);