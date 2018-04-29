<?php
// =============================================================================
//
// DONATE PAGE
//
// FRAMEWORK/PAGES/PAGE/PAGE-AUDITION.PHP
// ------------------------------------------------------------------------------------------
// This file is displayed using our wolf_page_loader helper function.
//
// @uses wolf_get_view() to get template parts to build the output
//
// @since 1.1
// =============================================================================

// Why Give
wolf_get_page_view( 'donate', '_why', 'give' );

// Donate Form
wolf_get_page_view( 'donate', '_donate', 'form' );