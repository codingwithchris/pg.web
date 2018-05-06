<?php
namespace Playground\Shows;
use Reactor\Helpers;

// start the loop
while ( $artists->have_posts() ) {

	// Tap into the story post
	$artists->the_post();

	// Start Settings up ACF Data
	//$artist = get_field( 'artist' );

	$terms = get_the_terms( $post->id, 'position' );

	$artist_positions = $terms
		? $terms[0]->slug
		: 'default';

	// Full Image Settings
	$image_url =  'https://picsum.photos/300/300?random'; //Helpers\get_img_meta( $artists->post, 'post', 'url', '', '', $size = 'full' ) ?? ;
	$image_alt = Helpers\get_img_meta( $artists->post, 'post', 'alt' ) ?? 'A Playground Resident Artist';

	?>
		<div class="c-artist-grid__artist">
			
			<img class="artist__img" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>">

			<div class="c-title-group">
				
				<h5 class="m-story__title _mbn">
					<?php echo get_the_title(); ?>
				</h5>

				<p><?php echo strip_tags( get_the_term_list( $post->id, 'position', '', ', ', '' ) ); ?></p>

			</div>
				
		</div>

<?php }