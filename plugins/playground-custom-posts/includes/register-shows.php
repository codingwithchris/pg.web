<?php
# ========================================================================================== #
/** 02. **/
# ========================================================================================== #


//
// Register the Custom Taxonomy: Seasons
//

add_action( 'init', 'create_show_tax' );

function create_show_tax(){
	$labels = array(
		'name'				=>  'Seasons',
		'singular_name'  	=>  'Season',
		'edit_item'			=>  'Edit Season',
		'add_new_item'		=>  'Add New Season',
		'new_item_name'		=>  'New Season Name',
		'menu_name'			=>  'All Seasons',
	);

	$args = array(
		'hierarchical'		=> true,
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_admin_column'	=> true,
		'query_var'			=> true,
		'rewrite'			=> array(
		 'slug' 			=> 'season' ,
		 'with_front'		=> false
		 ),

	);

	register_taxonomy( 'season', array( 'shows' ), $args );

}


//
// Register the Shos Post Type
//

add_action( 'init', 'playground_shows_cpt' );

function playground_shows_cpt() {

	register_post_type( 'shows', array(
		  'labels' => array(
		  'name' => 'Shows',
		  'singular_name' => 'Show',
		   'edit_item'	  => 'Edit Show',
		   'add_new_item' => 'Add a new Show',
		   'new_item_name'  => 'New Show Name',
		),
		'description'  => 'Shows at the Playground Theatre.',
		'public' => true,
		'publicly_queryable' => true,
		'menu_position' => 10,
		'show_ui' => true,
		'query_var' => true,
		'hierarchical' => true,
		'rewrite'			=> array(
		 'slug' 			=> 'shows' ,
		 'with_front'		=> false
		 ),
		'has_archive' => true,
		'capability_type' => 'post',
		'menu_icon'			=> WOLF_POSTS_URL . '/assets/img/shows-cpt-icon.png',
		'supports'  => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes')
	));
}
