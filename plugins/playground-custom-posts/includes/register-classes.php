<?php
# ========================================================================================== #
/** 02. **/
# ========================================================================================== #

//
// Register the Classes Post Type
//

add_action( 'init', 'playground_classes_cpt' );

function playground_classes_cpt() {

	register_post_type( 'classes', array(
		  'labels' => array(
		  'name' => 'Classes',
		  'singular_name' => 'Class',
		   'edit_item'	  => 'Edit Class',
		   'add_new_item' => 'Add a new Class',
		   'new_item_name'  => 'New Class Name',
		),
		'description'  => 'Classes at the Playground Theatre.',
		'public' => true,
		'publicly_queryable' => true,
		'menu_position' => 10,
		'show_ui' => true,
		'query_var' => true,
		'hierarchical' => true,
		'rewrite'			=> array(
		 'slug' 			=> 'classes' ,
		 'with_front'		=> false
		 ),
		'has_archive' => false,
		'capability_type' => 'post',
		'menu_icon'			=> 'dashicons-book-alt',
		'supports'  => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes')
	));
}
