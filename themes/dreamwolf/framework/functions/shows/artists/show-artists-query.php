<?php

function wolf_get_show_artists( $type = null ){


	$artist_repeater_field = 'show_' . $type . '_repeater';
	$artist_post_object = 'show_' . $type;

	if( have_rows( $artist_repeater_field ) ): ?>

		<div class="flex-cards-container">

			<?php while ( have_rows( $artist_repeater_field ) ) : the_row(); ?>

				<?php

					// Get the post Object for the current artist
					$post_object = get_sub_field( $artist_post_object );

					if( $post_object ):

							//bring in post
							global $post;

							// override $post
							$post = $post_object;

							setup_postdata( $post );

								wolf_display_show_artists( $type );

							wp_reset_postdata();

					endif;

			endwhile; ?>

		</div>

	<?php endif;

}