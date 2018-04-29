<?php
/**
 * FUNCTIONS/CONTROLS/POST-SORT-ORDER.PHP
 *
 * Handles the modiifcation of post sort ordering on an as-needed basis
 *
 * @since 1.1
 * @author Christopher Allen Hahn <chris@codewolfseven.com>
 * @package Controls
 */

/**
 * Change the sorting of Shows and Seasons to menu_order so we can control how they appear
 * @link http://www.billerickson.net/customize-the-wordpress-query/ code reference
 * @link http://www.amaslo.com/2013/07/control-post-sequence-in-wordpress.html another code reference
 */

add_action( 'pre_get_posts', 'wolf_sort_shows_seasons_by_menu_order' );

function wolf_sort_shows_seasons_by_menu_order( $query_var ) {

	   // If we have a post type of shows or a taxonomy of seasons
	   if( $query_var->is_main_query() && ( $query_var->get('post_type') == 'shows' ) || $query_var->is_tax( 'season' ) ) {

	      $query_var->set( 'orderby', 'menu_order' );
	      $query_var->set( 'order', 'ASC' );

	      // A bonus, we can control the post count as well if we want eventually
	      //$q->set( 'posts_per_page', 27);

	   }
}