<?php 

namespace Playground\Module\Sponsors;


return array(

	'post_type' => 'sponsors',


	'labels'    => array(
		'custom_type'       => 'sponsors',
		'singular_label'    => 'Sponsor',
		'plural_label'      => 'Sponsors',
		'in_sentence_label' => 'sponsors',
		'text_domain'       => SPONSORS_TEXT_DOMAIN,
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

		'description' => 'Companies and people that sponsor The Playground',
		'label'       => __( 'Sponsors', SPONSORS_TEXT_DOMAIN ),
		'labels'      => '', // automatically generate the labels.
		'public'      => true,
		'supports'    => '', // automatically generate the support features.
		'menu_icon'   => 'dashicons-smiley',
		'menu_position' 	=> 15,
		'has_archive' => false,
		'rewrite' => array(
			'with_front' => false,
			'slug'		 => 'sponsor',
		)

	),

);