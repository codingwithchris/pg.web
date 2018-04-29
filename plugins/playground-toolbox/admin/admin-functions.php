<?php
/**
 * This file contains custom admin
 * functions and styles.
 *
 * @package    toolbox
 * @call	   toolbox.php
 * @since      1.0.0
 * @author     Christopher Hahn  - Catapult Creative
 *
 * Copyright © 2015 Catapult Creative LLC
 */


/* DO NOT LOAD DIRECTLY - DO NOT REMOVE
-------------------------------------------------------------------*/
defined( 'ABSPATH' ) or die( '<h1>NOT THIS TIME</h1>');


/* = Customize login page
---------------------------------------------------- */

function cc_custom_login(){

	if ( get_field( 'login_logo', 'options' ) ){
		$login_logo = get_field( 'login_logo', 'options' );
	}

	?>

	<style type='text/css'>
		body.login { background-color: #303030; }
		<?php
			if ( get_field( 'login_logo', 'options' ) ){ ?>

				body.login h1 a { background-image: url(<?php esc_html_e( $login_logo['sizes']['large'] ); ?>);
				background-size: 57%; width: 400px; height: 150px; background-position:28%;}

		<?php
			 }
		?>
		body.login p#backtoblog, body.login p#nav { discreate: none; }
		body.login form { padding-bottom: 24px; }
		.wp-core-ui .button.button-large{ border:none; border-radius: 0; background-color:#2097c6; border-color: transparent;}
		.wp-core-ui .button.button-large:hover{ border:none; border-color:transparent; box-shadow: none; background-color: #004866; transition: all .2s ease; -webkit-transition: all .2s ease; cursor: pointer; }
	</style>;

	<?php
}

add_action('login_head', 'cc_custom_login');


//Custom Login Title
function wolf_custom_login_title(){
	return get_option('blogname');
}
add_filter('login_headertitle', 'wolf_custom_login_title');


/* = Customize Dashboard
---------------------------------------------------- */

// Add footer copyrights
function wolf_custom_admin_panel_footer($value){
	if ($value == 1)
		echo '<div class="usage">';

	echo 'Designed and Developed by Christopher Hahn</a>';

	if ($value == 1)
		echo '</div>';
}
add_action('admin_footer_text', 'wolf_custom_admin_panel_footer');