<?php

namespace Playground\Module\Artists;


return array(

	'post_type' => 'artist',


	'labels'    => array(
		'custom_type'       => 'artist',
		'singular_label'    => 'Artist',
		'plural_label'      => 'Artists',
		'in_sentence_label' => 'artists',
		'text_domain'       => ARTISTS_TEXT_DOMAIN,
	),


	'features'  => array(

		'base_post_type' => 'post',

		'exclude'        => array(
			'excerpt',
			'comments',
			'trackbacks',
			'custom-fields',
			'post-formats',
		),

		'additional'     => array(
			'page-attributes',
		),

	),


	'args'      => array(

		'description' => 'Artists that have worked with The Playground',
		'label'       => __( 'Artists', ARTISTS_TEXT_DOMAIN ),
		'labels'      => '', // automatically generate the labels.
		'public'      => true,
		'supports'    => '', // automatically generate the support features.
		'menu_icon'   => ARTISTS_MODULE_URL . 'assets/' . 'artists-cpt-icon.png',
		'menu_position' 	=> 10,
		'has_archive' => false,
		'rewrite'	=> array(

			'slug'			=> 'artist',
			'with_front'	=> false,

		)

	),

);