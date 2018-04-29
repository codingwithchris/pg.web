<?php
if (function_exists('acf_add_options_page') && function_exists('acf_add_options_sub_page')){

   /**
	* Create an options page
	* for allsite notices
	*
	*/

	acf_add_options_page([
		'page_title' => 'Site Notices',
		'menu_title' => 'Site Notices',
		'menu_slug' => 'site-notices',
		'capability' => 'edit_posts',
		'redirect' => false,
		'icon_url' => 'dashicons-format-status', // Add this line and replace the second inverted commas with class of the icon you like
		//'position' => 2,
	]);

}