<?php

namespace Playground\Module\Artists;

return array(

	'taxonomy'   => 'position',


	'labels'     => array(
		'custom_type'       => 'position',
		'singular_label'    => 'Position',
		'plural_label'      => 'Positions',
		'in_sentence_label' => 'Positions',
		'text_domain'       => ARTISTS_TEXT_DOMAIN,
	),

	'args'       => array(
		'label'             => __( 'Positions', ARTISTS_TEXT_DOMAIN ),
		'labels'            => '', // automatically generate the labels.
		'hierarchical'      => true,
		'show_admin_column' => true,
		'public'            => true,
		'rewrite'			=> array(
			'with_front'	=> false
		),

	),

	'post_types' => array( 'artist' ),

);