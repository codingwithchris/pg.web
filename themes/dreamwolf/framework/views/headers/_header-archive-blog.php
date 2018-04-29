<?php
// =============================================================================
// FRAMEWORK/VIEWS/HEADERS/HEADER-ARCHIVE-BLOG.PHP
// ----------------------------------------------------------------------------
//
// The header used for the Blog Archive Pages
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

<div id="archive-blog-header" class="page-header -archive -blog _bgCover" style="background-image: url( <?php wolf_get_featured_image(); ?> );">

</div>