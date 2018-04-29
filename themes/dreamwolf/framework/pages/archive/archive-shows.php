<?php
// =============================================================================
// FRAMEWORK/PAGES/ARCHIVE/ARCHIVE-SHOWS.PHP
// ------------------------------------------------------------------------------------------
// This file is displayed using our wolf_page_loader helper function.
// At tis point we are already in the loop, so everything in this file will
// be repeated for every single SHOW
//
// @uses wolf_get_post_view() to get template parts to build the output
//
// =============================================================================

// Set ACF Variables for this show item
// ============================

$status = esc_attr( wolf_get_show_status() );
$link = get_the_permalink();

?>

<div id="show-<?php the_id(); ?>" <?php post_class( "pg-post-item -$status _before"); ?>>

		<div class="post-header">
			<?php wolf_get_post_view( 'shows', '_archive-status' ); ?>
			<?php wolf_get_post_view( 'shows', '_archive-title' ); ?>
			<?php wolf_get_post_view( 'shows', '_archive-author' ); ?>
			<?php wolf_get_post_view( 'shows', '_archive-dates' ); ?>
		</div>

		<a class="featured-wrapper _before" href="<?php echo esc_url( $link ); ?>" ?>
			<?php wolf_get_post_view( 'shows', '_archive-feed-image' ); ?>
		</a>

		<div class="post-content">
			<?php wolf_get_post_view( 'shows', '_archive-social-share' ); ?>
			<?php wolf_get_post_view( 'shows', '_archive-facebook-event-link' ); ?>
			<?php wolf_get_post_view( 'shows', '_archive-synopsis' ); ?>

			<?php wolf_get_post_view( 'shows', '_archive-more-info' ); ?>

		</div>

		<div class="post-footer">
			<?php wolf_get_post_view( 'shows', '_archive-footer' ); ?>
		</div>

</div>