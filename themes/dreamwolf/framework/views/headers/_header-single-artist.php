<?php
// =============================================================================
// FRAMEWORK/VIEWS/HEADERS/HEADER-SINGLE-ARTIST.PHP
// ----------------------------------------------------------------------------
//
// The header used for a Single Artist Post Page
//
// @uses wolf_get_featured_image() fround in framework/functions/helpers.php
// to get the featured image with a dynamic CDN URL and look for a fallback via ACF
// if needed
//
// @calledFrom frameowrk/functions/controls/header-controls.php.
//
// @since 1.0.5
// @todo - Link with ACF
// =============================================================================
?>


<div id="single-artist-header" class="page-header -single -artist _bgCover" style="background-image: url( <?php echo wolf_featured_image_url(); ?> );">

</div>