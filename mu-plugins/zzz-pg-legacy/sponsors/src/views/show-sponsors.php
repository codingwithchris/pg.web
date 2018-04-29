<?php

$sponsors = get_field( 'show_sponsors' );
$sponsor_count = count( $sponsors );


$title = $sponsor_count > 1
	
	? 'The Sponsors'
	: 'The Sponsor';

$sub_title = $sponsor_count > 1

	? 'A big shout out to the following local businesses for their contributions and support on this production:'
	: 'A big shout out to this show\'s sponsor for their support and contribution:';

?>


	<div class="-fill">

		<div class="sponsor-row-title-group _pbm">

			<h2 class="_gray _mbn">
				<?php esc_html_e( $title ); ?>		
			</h2>

			<p class="_gray">
				<?php esc_html_e( $sub_title ); ?>		
			</p>

		</div>

	</div>

<?php

while( have_rows( 'show_sponsors' ) ):
	
	the_row();


	//Show Sponsor Settings specific to this show
	$show_sponsor = array(

		'object' 		 => get_sub_field( 'sponsor' ),
		'contribution'	 => get_sub_field( 'contribution' ),

	);


	// Get the post Object for the current sponsor
	$post_object = $show_sponsor['object'];


	if( $post_object ){


		//bring in post
		global $post;

			// override $post
			$post = $post_object;

			// Set up the data we need!!
			setup_postdata( $post );


				// Sponsor Settings
				$sponsor = array(

					'name' 			=> get_the_title(),
					'content'		=> get_field( 'sponsor_content', false, false ),
					'link'			=> get_field('sponsor_link', get_the_id() ),
					'logo'			=> get_the_post_thumbnail_url( get_the_id() ,'full'),
					'logo_alt'		=> get_post_meta(get_post_thumbnail_id( get_the_id() ), '_wp_attachment_image_alt', true),

				); ?>

				<div class="twelve show-sponsor-item">

					<div class="six -logo">

						<a class="show-sponsor-link "href="<?php echo esc_url( $sponsor['link'] ); ?>" title="Visit the <?php esc_attr_e( $sponsor['name'] ); ?> website" target="_blank">
							<h3 class="_visually-hidden"><?php esc_html_e( $sponsor['name'] )?></h3>
							<img class="logo" src="<?php echo esc_url( $sponsor['logo'] );?>" alt="<?php esc_html_e( $sponsor['logo_alt'] ); ?>">
						</a>

					</div>

					<div class="six -info _plm">
							
						<div class="show-sponsor-content">

							<?php if( $show_sponsor['contribution'] ){ ?>

								<h5 class="_gray"><?php echo wp_kses_post( $show_sponsor['contribution'] ); ?></h5>

							<?php } ?>

							<p class="_d-gray"><?php echo wp_kses_post( $sponsor['content'] ); ?></p>

						</div>

					</div>


				</div>

			
			<?php

			wp_reset_postdata();

	}


endwhile;

wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>