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
	$image_url = $image_url ?? 'https://placehold.it/350x350';

	$image_alt = Helpers\get_img_meta( $artists->post, 'post', 'alt' );
	$image_alt = $image_alt ?? 'A Playground Resident Artist';



	?>
		<div class="c-artist-grid__item c-card--stacked --light">
			
			<div class="c-card--stacked__upper">

				<img class="c-card--stacked__media" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>" width="350" height="350">

			</div>


			<div class="c-card--stacked__lower">

				<div class="c-title-group">
					
					<p class="c-card--stacked__title _mbn _d-gray -larger">
						<strong><?php esc_html_e( get_the_title() ); ?></strong>
					</p>

					<p class="c-card--stacked__sub _gray _mbn">
						<?php esc_html_e( $positions ); ?>
					</p>

				</div>

			</div>
				
		</div>

<?php }