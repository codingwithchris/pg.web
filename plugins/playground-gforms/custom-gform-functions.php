<?php
/**
 * Changes the default Gravity Forms AJAX spinner.
 *
 * @since 1.0.0
 *
 * @param string $src  The default spinner URL.
 * @return string $src The new spinner URL.
 */

add_filter( 'gform_ajax_spinner_url', 'wolf_gf_custom_ajax_spinner', 1);

function wolf_gf_custom_ajax_spinner( $src ) {

	$src = WOLF_GFORMS_URL . '/assets/svg/gforms-submit.svg';

    return $src;
}


/**
 * Change The Default Gravity Forms Notifications
 * and connects them with Sweet Alert
 *
 */
add_filter("gform_validation_message", "change_message", 10, 2);

function change_message($message, $form){

	return '<div class="validation_error">Hmmmm..something wasn\'t quite right! Check below for details.</div>';

}

/**
 *Prevent Severe Page Jump on Ajax Submission or Ajax Multi-Step Form Click-Through
 *
 */
 // Main Contact for ( ID=2 )
//add_filter("gform_confirmation_anchor_2", create_function("","return false;"));

 // Season General Audition Form for ( ID=3 )
//add_filter("gform_confirmation_anchor_3", create_function("","return false;"));

 // Header Subscribe Form for ( ID=5 )
//add_filter("gform_confirmation_anchor_5", create_function("","return false;"));
