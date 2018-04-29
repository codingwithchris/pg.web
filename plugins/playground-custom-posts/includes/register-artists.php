<?php
# ========================================================================================== #
/** 03. **/
# ========================================================================================== #


add_action( 'init', 'playground_artists_cpt' );

	function playground_artists_cpt() {

		register_post_type( 'artist', array(
			  'labels' => array(
			  'name' => 'Artists',
			  'singular_name' => 'Artist',
			    'edit_item'	  => 'Edit Artist',
			   'add_new_item' => 'Add a New Artist',
			   'new_item_name'  => 'New Artist Name',

			),
			'description'  => 'Actors, Directors, and Designers at the Playground Theatre.',
			'public' => true,
			'publicly_queryable' => true,
			'menu_position' => 10,
			'show_ui' => true,
			'query_var' => true,
			'hierarchical' => false,
			'rewrite' => array( 'slug' => 'artists'),
			'has_archive' => true,
			'capability_type' => 'post',
			'menu_icon'			=> WOLF_POSTS_URL . 'assets/img/actors-cpt-icon.png',
			'supports'  => array( 'title', 'editor', 'thumbnail')
		));
}

add_action( 'init', 'create_artist_tax' );

	function create_artist_tax(){
		//REGISTER ACTOR TAXONOMY
		$labels = array(
			'name'				=>  'Positions',
			'singular_name'  	=>  'Position',
			'menu_name'			=>  'Positions',
			'edit_item'			=>  'Edit Position',
			'add_new_item'		=>  'Add a new Position',
		);

		$args = array(
			'hierarchical'		=> true,
			'labels'			=> $labels,
			'show_ui'			=> true,
			'show_admin_column'	=> true,
			'query_var'			=> true,
			'rewrite'			=> array( 'slug' => 'position' ),

		);
register_taxonomy( 'position', array( 'artist' ), $args );

}
