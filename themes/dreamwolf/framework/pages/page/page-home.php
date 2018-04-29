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

// Do you think theatre is...
wolf_get_page_view( 'home', '_icon', 'row' );

// We get it and the playground wants to change that
wolf_get_page_view( 'home', '_we', 'get-it' );

// We bring a fresh perspective
wolf_get_page_view( 'home', '_fresh', 'perspective' );