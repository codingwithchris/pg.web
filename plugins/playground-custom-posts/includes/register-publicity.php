<?php
# ========================================================================================== #
/** 04. **/
# ========================================================================================== #


add_action( 'init', 'playground_publicity_cpt' );

	function playground_publicity_cpt() {

		register_post_type( 'publicity', array(
			  'labels' => array(
			  'name' => 'Publicity',
			  'singular_name' => 'Publicity',
			    'edit_item'	  => 'Edit Publicity',
			   'add_new_item' => 'Add a New Piece of Publicity',
			   'new_item_name'  => 'New Publicity Name',

			),
			'description'  => 'Publicity relating to The Playground Theatre',
			'public' => true,
			'publicly_queryable' => true,
			'menu_position' => 10,
			'show_ui' => true,
			'query_var' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'publicity'),
			'has_archive' => true,
			'capability_type' => 'post',
			'menu_icon'			=> 'dashicons-awards',
			'supports'  => array( 'title', 'editor', 'thumbnail', 'excerpt')
		));
}

add_action( 'init', 'create_publicity_tax' );

	function create_publicity_tax(){
		//REGISTER ACTOR TAXONOMY
		$labels = array(
			'name'				=>  'Types',
			'singular_name'  	=>  'Type',
			'menu_name'			=>  'Types',
			'edit_item'			=>  'Edit Publicity Type',
			'add_new_item'		=>  'Add a new Publicity Type',
		);

		$args = array(
			'hierarchical'		=> true,
			'labels'			=> $labels,
			'show_ui'			=> true,
			'show_admin_column'	=> true,
			'query_var'			=> true,
			'rewrite'			=> array( 'slug' => 'type' ),

		);
register_taxonomy( 'type', array( 'publicity' ), $args );

}
