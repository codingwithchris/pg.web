<?php
# ========================================================================================== #
/** 05. **/
# ========================================================================================== #


add_action( 'init', 'playground_audition_cpt' );

	function playground_audition_cpt() {

		register_post_type( 'auditions', array(
			  'labels' => array(
			  'name' => 'Audition',
			  'singular_name' => 'Audition',
			   'edit_item'	  => 'Edit Audition',
			   'menu_name'			=>  'Auditions',
			   'add_new_item' => 'Add a New Audition',
			   'new_item_name'  => 'New Audition',

			),
			'description'  => 'Auditions for The Playground Theatre',
			'public' => true,
			'publicly_queryable' => true,
			'menu_position' => 10,
			'show_ui' => true,
			'query_var' => true,
			'hierarchical' => true,
			'rewrite' => array( 'slug' => 'auditions'),
			'has_archive' => false,
			'capability_type' => 'post',
			'menu_icon'			=> 'dashicons-megaphone',
			'supports'  => array( 'title', 'editor', 'thumbnail', 'excerpt')
		));
}

add_action( 'init', 'create_audition_tax' );

	function create_audition_tax(){
		//REGISTER ACTOR TAXONOMY
		$labels = array(
			'name'				=>  'Steps',
			'singular_name'  	=>  'Step',
			'menu_name'			=>  'Steps',
			'edit_item'			=>  'Edit Audition Step',
			'add_new_item'		=>  'Add a new Audition Step',
		);

		$args = array(
			'hierarchical'		=> true,
			'labels'			=> $labels,
			'show_ui'			=> true,
			'show_admin_column'	=> true,
			'query_var'			=> true,
			'rewrite'			=> array( 'slug' => 'step' ),

		);
register_taxonomy( 'step', array( 'auditions' ), $args );

}
