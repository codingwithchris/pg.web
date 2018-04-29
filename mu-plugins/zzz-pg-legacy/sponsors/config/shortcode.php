<?php
/**
 * Sponsors Shortcode Config
 *
 * @package     Playground\Module\Sponsors;
 * @since       0.0.1
 * @author      nvwd
 * @license     GNU-2.0+
 */

namespace Playground\Module\Sponsors;

return array(

	'shortcode_name'              => 'show_sponsors',

	'do_shortcode_within_content' => false,

	'processing_function'         => __NAMESPACE__ . '\process_shortcode',

	'view'                        => SPONSORS_MODULE_DIR . '/src/views/show-sponsors.php',

	'defaults'                    => array(

	),

);