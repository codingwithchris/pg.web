<?php
/**
 * All Shows Shortcode Config
 *
 * @package     Playground\Shows;
 * @since       0.0.1
 * @author      nvwd
 * @license     GNU-2.0+
 */

namespace Playground\Shows;

return array(

	'shortcode_name'              => 'all_shows',

	'do_shortcode_within_content' => true,

	'processing_function'         => __NAMESPACE__ . '\process_shortcode',

	'views'					=> [


	],

	'defaults'                    => array(
		
		'count'			=> 1,
		'layout'		=> '',
		'group'			=> '',
		'location'		=> '',
		'class'			=> '',

	),


);