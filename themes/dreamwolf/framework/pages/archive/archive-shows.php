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
?>

<?php wolf_get_post_view( 'shows', '_archive-show-card' ); ?>