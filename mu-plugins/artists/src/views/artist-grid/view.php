<?php
namespace Playground\Shows;
use Reactor\Helpers;

// start the loop
while ( $artists->have_posts() ) {

	// Tap into the story post
	$artists->the_post();

	// Get a terms list of positions this artists takes on within Playground
	$positions = get_the_term_list( $post->id, 'position', '', ', ', '' ) ?? '';
	$positions = strip_tags( $positions );

	// Full Image Settings
	$image_url =  Helpers\get_img_meta( $artists->post, 'post', 'url', '', '', $size = 'full' );
	$image_alt = Helpers\get_img_meta( $artists->post, 'post', 'alt' );


	?>
		<div class="c-artist-grid__item c-card--stacked --light">
			
			<div class="c-card--stacked__upper">

				<img class="c-card--stacked__media" src="<?= esc_url( $image_url ); ?>" alt="<?= esc_html( $image_alt ); ?>" width="350" height="350">

			</div>


			<div class="c-card--stacked__lower">

				<div class="c-title-group">
					
					<h6 class="c-card--stacked__title _mbn _d-gray -larger">
						<?php esc_html_e( get_the_title() ); ?>
					</h6>

					<p class="c-card--stacked__sub _gray _mbn">
						<?php esc_html_e( $positions ); ?>
					</p>

				</div>

			</div>
				
		</div>

<?php }