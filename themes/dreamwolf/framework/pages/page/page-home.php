<?php
// =============================================================================
//
// HOME PAGE
//
// FRAMEWORK/PAGES/PAGE/PAGE-HOME.PHP
// ------------------------------------------------------------------------------------------
// This file is displayed using our wolf_page_loader helper function.
//
// @uses wolf_get_page_view() to get template parts to build the output
// @since 1.0
// =============================================================================

// About Us
wolf_get_page_view( 'home', '_about', 'us' );

// Explore Shows
wolf_get_page_view( 'home', '_explore', 'shows' );

// Long Description
wolf_get_page_view( 'home', '_long', 'description' );

// Image Separator
wolf_get_page_view( 'home', '_img', 'separator' );

// Featured Quote
wolf_get_page_view( 'home', '_featured', 'quote' );