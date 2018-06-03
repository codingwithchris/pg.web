<?php
// =============================================================================
//
// SINGLE SHOWS
//
// FRAMEWORK/PAGES/SINGLE/SINGLE-SHOWS.PHP
// ------------------------------------------------------------------------------------------
// This file is displayed using our wolf_get_post_view helper function.
//
//
// @uses wolf_get_post_view() to build the output
// @since 1.0.5
// =============================================================================



//
// Show Status
//
$status = esc_attr( wolf_get_show_status() );
?>

<div id="show-<?php the_id(); ?>" <?php post_class( "pg-show-content -$status"); ?>>

	<?php wolf_get_post_view( 'shows', '_single', 'synopsis' ); ?>

	<?php if( get_field('show_callout_title') && get_field('show_callout_info') ): ?>
	<?php wolf_get_post_view( 'shows', '_single', 'callout' ); ?>
	<?php endif; ?>

	<?php // only load if actors or crew members have been added ?>
	<?php if( wolf_show_actors_exist() || wolf_show_artists_exist() ): ?>
		<?php wolf_get_post_view( 'shows', '_single', 'artist-feed' ); ?>
	<?php endif; ?>

	<?php // only load if we have a trailer ?>
	<?php if( wolf_show_trailer_exists() ): ?>
		<?php wolf_get_post_view( 'shows', '_single', 'trailer' ); ?>
	<?php endif; ?>

	<?php // only load if we have a spotify playlist ?>
	<?php if( wolf_show_gallery_exists() ): ?>
		<?php wolf_get_post_view( 'shows', '_single', 'gallery' ); ?>
	<?php endif; ?>

	<?php // only load if we have a spotify playlist ?>
	<?php if( wolf_show_spotify_exists() ): ?>
		<?php wolf_get_post_view( 'shows', '_single', 'spotify' ); ?>
	<?php endif; ?>

	<?php // load only if there is a sponsor name ?>
	<?php if( have_rows( 'show_sponsors' ) ): ?>
		<?php wolf_get_post_view( 'shows', '_single', 'sponsor' ); ?>
	<?php endif; ?>

</div>
