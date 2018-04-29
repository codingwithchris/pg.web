<?php
// DEPRECATED as of Dec 10, 2016 - removed and opted for logo instead
// =============================================================================
// FRAMEWORK/VIEWS/GLOBAL/_NAVBAR-SOCIAL.PHP
// -----------------------------------------------------------------------------
// Output our social info in the site navigation
// @uses ACF
// =============================================================================

//Check if the ACF Fields have data
if ( have_rows( 'social_profiles', 'options' ) ): ?>
	<div class="social-bar _bg-m-green">
		<div class="container -max -width">
			<ul class="social-footer-icons">
				<?php
					//While there is data, loop through it
					while ( have_rows( 'social_profiles', 'options' ) ):
						the_row();

							//Set ACF Vars for each social profile
							$platform = esc_attr( get_sub_field('social_platform', 'options') );
							$link =esc_url(  get_sub_field('social_link', 'options') );

							$new_window = '';

							if( get_sub_field( 'social_new_window', 'options' ) ){
								$new_window = esc_attr( 'target="_blank" ' );
							}

							 ?>

							<li class="icon -<?php echo $platform; ?>"><a href="<?php echo $link; ?>" <?php echo $new_window; ?>><i class="fa fa-<?php echo $platform; ?> site-social-icon"></i></a></li>

					<?php endwhile; ?>
			</ul>
		</div>
	</div>
<?php endif; ?>