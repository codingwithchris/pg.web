<?php 

namespace Playground\Module\Sponsors;


return array(

	'taxonomy'   => 'sponsor_type',


	'labels'     => array(
		'custom_type'       => 'sponsor type',
		'singular_label'    => 'Sponsor Type',
		'plural_label'      => 'Sponsor Types',
		'in_sentence_label' => 'Sponsor types',
		'text_domain'       => SPONSORS_TEXT_DOMAIN,
	),

	'args'       => array(
		'label'             => __( 'Sponsor Types', SPONSORS_TEXT_DOMAIN ),
		'labels'            => '', // automatically generate the labels.
		'hierarchical'      => true,
		'show_admin_column' => true,
		'public'            => true,
	),

	'post_types' => array( 'sponsors' ),

);