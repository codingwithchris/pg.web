<?php
// =============================================================================
// FRAMEWORK/VIEWS/HEADERS/HEADER-ARCHVIE-ARTIST.PHP
// ----------------------------------------------------------------------------
//
// The header used for the Artist Archive Pages
//
// @uses wolf_get_featured_image() fround in framework/functions/helpers.php
// to get the featured image with a dynamic CDN URL and look for a fallback via ACF
// if needed
//
// @calledFrom framework/functions/controls/header-controls.php.
//
// @since 1.0.5
// @todo - Link with ACF
// @todo - set a unique fallback image for artist archive pages
// =============================================================================
?>

<div id="archive-artist-headerr" class="page-header -archive -blog _bgCover" style="background-image: url( <?php wolf_get_featured_image(); ?> );">

</div>