<?php
// Add Additional Function to The Playground Theatre
// @notes https://wordpress.org/plugins/beautiful-taxonomy-filters/other_notes/
// ===================================================================


// Order The Taxonomies in the Beautiful filter dropdown
if( class_exists( 'Beautiful_Taxonomy_Filters_Activator' ) ){

	function modify_dropdown_order( $order, $taxonomy) {

	    return __('DESC', '__wolf__');
	}

	add_filter( 'beautiful_filters_dropdown_order', 'modify_dropdown_order', 10, 2 );

}

// Modify the Dropdown Label if the
// Beautiful Taxonomy Filter Plugin
// ======================

function modify_labels($label){

    return __('Sort By Season', '__wolf__');

}

add_filter('beautiful_filters_taxonomy_label', 'modify_labels', 10, 1);



// Remove Query Strings From Static Resources
// ====================================
function ewp_remove_script_version( $src ){

	// Do not remove Query Strings in the admin
	if( ! is_admin() ){

		return remove_query_arg( 'ver', $src );

	} else {

	    return $src;

    }

}

//add_filter( 'script_loader_src', 'ewp_remove_script_version', 15, 1 );
//add_filter( 'style_loader_src', 'ewp_remove_script_version', 15, 1 );