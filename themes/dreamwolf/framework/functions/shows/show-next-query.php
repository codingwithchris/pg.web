<?php
// Query the Database and return the next show
// using menu order
// @params - $type - string - The type of next show to display ( small or full )
// @return - 1 post
// =====================================

add_action( 'init', 'wolf_get_next_show' );

function wolf_get_next_show( $show_component = null ){

	if ( ! is_archive( 'show' ) && ! is_single( 'show' ) ){

		// WP_Query arguments
		$args = array (
			'post_type'              	=> array( 'shows' ),
			'order'					=> 'ASC',
			'orderby'                	=> 'menu_order',
			'posts_per_page'		=> 1,
			'cache_results'          => true,
			'update_post_meta_cache' => true,
			'update_post_term_cache' => true,
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();

				switch ( $show_component ){

					case 'full':

						wolf_get_view( 'modules', '_next-show', 'full' );
						break;

					case 'card':

						wolf_get_view( 'modules', '_next-show', 'card' );
						break;

					case 'small':

						wolf_get_view( 'modules', '_next-show', 'small' );
						break;

					case 'text':

						wolf_get_view( 'modules', '_next-show', 'text' );
						break;
				}

			}

		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata();

	}

}