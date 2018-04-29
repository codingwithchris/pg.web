<?php
// =============================================================================
// FRAMEWORK/VIEWS/GLOBAL/_MENU-PRIMARY.PHP
// -----------------------------------------------------------------------------
// This file contains the function to output Playground's Primary Menu
// Note that this file isn't used for the output.
// It is called in the navbar-main file after a has_nav check is run
// =============================================================================

wp_nav_menu( array( 'theme-location' => 'primary', 'menu_id' => 'primary-menu' , 'container' => false ) );?>