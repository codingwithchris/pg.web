<?php
/**
 * Artist Grid Shortcode Config
 *
 * @package     Playground\Artists;
 * @since       0.0.1
 * @author      nvwd
 * @license     GNU-2.0+
 */

namespace Playground\Artists;

return array(

	'shortcode_name'              => 'artist_grid',

	'do_shortcode_within_content' => true,

	'processing_function'         => __NAMESPACE__ . '\process_shortcode',

	'views'					=> [

		'artist-grid'	=> module()->config('views') . 'artist-grid/view.php',

	],

	'defaults'                    => array(
		
		'group'		=> '',
		'class'			=> '',

	),


);