<?php
/**
 * Loads in all the core JS and Jquery scripts used in the Playground Site
 * @note -  it is considered core if another plugin or piece of code requires it to function
 * @example: our donate code requires the lightcase jquery to be running, so lightcase is core
 * @call	   playground-toolbox.php
 * @depend     ACF
 * @since      1.0.0
 * @author     Christopher Hahn
 */

 /**
  * Load in Core JS Minified File
  *
  */
 if( ! function_exists( 'wolf_load_core_scripts' ) ){

	 add_action( 'wp_enqueue_scripts', 'wolf_load_core_scripts', 1);

	 function wolf_load_core_scripts(){

		wp_register_script( 'playground-main-footer-js', PG_TOOLBOX_URL . 'assets/js-plugins/footer-dist/playground-footer.min.js', array( 'jquery' ), '1.1.0', true );
		wp_enqueue_script( 'playground-main-footer-js' );

	 }

 }