<?php
// Build the output for show artists

function wolf_display_show_artists( $type ){

// Array of artist info
$artist = array(

	'headshot_small' => wolf_get_artist_small_headshot_url(),
	'headshot_full'	=>	wolf_get_artist_full_headshot_url(),
	'alt'			=> wolf_get_artist_headshot_alt(),
	'name'			=> get_the_title(),
	'lc_name'		=> strtolower( str_replace(  array(' ', '_', '.'), '-', get_the_title() ) ),
	'role'			=> get_sub_field( 'show_'. $type .'_role' ),
	'bio'			=> get_sub_field( 'show_'. $type .'_bio', false, false )

);


?>
	<div class="flex-card-outer -half -<?php echo $type; ?>">

		<div class="flex-card-inner _bg-white">

			<div class="flex-card-content-container">

				<div class="flex-card-media">
					<div class="badge">
						<img class="badge-img -circle" width="100" height="100" src="<?php echo $artist['headshot_small']; ?>" alt="<?php echo $artist['headshot_alt']; ?>"/>
					</div>
				</div>

				<div class="flex-card-info">
					<h6 class="artist-name _green _mbn"><?php esc_html_e( $artist['name'] ); ?></h6>
					<h6 class="artist-role _gray -x-small"><?php echo esc_html_e( $artist['role'] ); ?></h6>
				</div>


				<?php

				// Handle displaying the bio if we have one
				if( $artist['bio'] ){ ?>

					<div class="flex-card-bio _r-txt">
						<a class="" href="#<?php esc_attr_e( $artist['lc_name'] ); ?>" data-rel="lightcase::<?php echo $type; ?>">
							<h6 class="_gray -x-small _mbn"><i class="fa fa-eye" style="margin-right: 5px;"></i>Read Bio</h6>
						</a>
					</div>

					<div class="artist-lighbox" id="<?php esc_attr_e( $artist['lc_name'] ); ?>" data-lc-type="inline" style="display:none">

							<div class="artist-lightbox-header _c-txt">
								<img class="artist-lightbox-image _pbs" src="<?php echo $artist['headshot_full']; ?>" alt="<?php echo $artist['headshot_alt']; ?>">
								<h2 class="artist-lightbox-name _l-green _mbn"><?php esc_html_e( $artist['name'] ); ?></h2>
								<h5 class="artist-lightbox-role _pbs _l-gray"><?php esc_html_e( $artist['role'] ); ?></h5>
							</div>

							<div class="artist-lightbox-bio-wrapper">

								<h2 class="artist-lightbox-bio-title _l-gray">Bio</h2>
								<p class="artist-lightbox-bio _white"><?php echo wp_kses_post( $artist['bio'] ); ?></p>

							</div>

						</div>

				<?php } ?>

			</div>
		</div>
	</div>

<?php } ?>