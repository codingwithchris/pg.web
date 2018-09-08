<?php
// =============================================================================
// FRAMEWORK/PAGES/ARCHIVE/ARCHIVE-ARTISTS.PHP
// ------------------------------------------------------------------------------------------
// This file is displayed using our wolf_page_loader helper function.
// At tis point we are already in the loop, so everything in this file will
// be repeated for every single Artist
//
// @uses wolf_get_post_view() to get template parts to build the output
//
// @since 1.0.5
// =============================================================================
?>
<div id="show-<?php the_id(); ?>"  class="pg-post-item -<?php echo wolf_get_current_post_type(); ?> container -small -width">
		<?php wolf_get_post_view( 'artist', '_archive-output' ); ?>
</div>