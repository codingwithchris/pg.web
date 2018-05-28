<?php
# ========================================================================================== #
/** 01. **/
# ========================================================================================== #

add_action( 'init', 'playground_blog_cpt' );

	function playground_blog_cpt() {

		register_post_type( 'blog', array(
			  'labels' => array(
			  'name' => 'Blogs',
			  'singular_name' => 'Blog',
			   'edit_item'	  => 'Edit Blog',
			   'add_new_item' => 'Make a new blog entry',
			   'new_item_name'  => 'New Blog name',
			),
			'description'  => 'The Playground Theatre Blog.',
			'public' => true,
			'publicly_queryable' => true,
			'menu_position' => 10,
			'show_ui' => true,
			'query_var' => true,
			'hierarchical' => false,
			'rewrite' => array('slug' => 'blog'),
			'capability_type' => 'post',
			'has_archive'     => true,
			'menu_icon'			=> 'dashicons-edit',
			'supports'  => array( 'title', 'editor', 'thumbnail', 'post-formats', 'author', 'excerpt')
		));
}

	add_action( 'init', 'create_blog_tax' );

	function create_blog_tax(){
		$labels = array(
			'name'				=>  'Topics',
			'singular_name'  	=>  'Topic',
			'edit_item'			=>  'Edit Topic',
			'add_new_item'		=>  'Add New Topic',
			'new_item_name'		=>  'New Topic Name',
			'menu_name'			=>  'Topics',
		);

		$args = array(
			'hierarchical'		=> true,
			'labels'			=> $labels,
			'show_ui'			=> true,
			'show_admin_column'	=> true,
			'query_var'			=> true,
			'rewrite'			=> array( 'slug' => 'topic' ),

		);

register_taxonomy( 'topic', array( 'blog' ), $args );

			$labels = array(
			'name'				=>  'Tags',
			'singular_name'  	=>  'Tag',
			'edit_item'			=>  'Edit Tag',
			'add_new_item'		=>  'Add New Tag',
			'new_item_name'		=>  'New Tag Name',
			'menu_name'			=>  'Tags',
		);

		$args = array(
			'hierarchical'		=> false,
			'labels'			=> $labels,
			'show_ui'			=> true,
			'show_admin_column'	=> true,
			'query_var'			=> true,
			'rewrite'			=> array( 'slug' => 'tag' ),

		);

register_taxonomy( 'tag', array( 'blog' ), $args );

}
