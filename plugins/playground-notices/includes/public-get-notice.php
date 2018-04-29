<?php


// Go through all the possibilities for notices - doing global notices first and then giving the oportunity to override with per page
add_action( 'wolf_display_topbar_notice', 'wolf_get_site_notice' );

function wolf_get_site_notice(){

	// Check to we of we will display the notice bar
	if( ( get_field( 'global_notice_display', 'options' ) && get_field( 'page_notice_display' ) ) || ( get_field( 'global_notice_display', 'options' ) && is_archive() ) ){

		// Set our Variables to dynamically grab global notices first,
		// and then grab page notices to over-tride if available :)

		if( get_field( 'global_notice_display', 'options') ){
			$field_type = 'options';
			$location = 'global';
		}

		if( get_field( 'page_notice_custom' ) ){
			$field_type = '';
			$location = 'page';
		}

		//Set the field type - which will dictate the notice style
		$type = get_field( ''.$location.'_notice_type', $field_type );

		// The Topbar itself is a link - select where it will go
		$link = get_field( ''.$location.'_notice_link', $field_type );

		// Set a custom background image if we have one!
		$background_image = '';
		if( get_field( ''.$location.'_notice_background', $field_type ) ){
			$background_image = get_field( ''.$location.'_notice_background', $field_type );
			$background_image = 'style ="background-image:url( '.$background_image['url'].' )"';
		}

		// Font Awesome icon Check
		$icon = '';
		if( get_field( ''.$location.'_notice_icon', $field_type ) ){
			$icon = get_field( ''.$location.'_notice_icon', $field_type );
			$icon = '<i class="fa '.$icon.'"></i>';
		}


		// Notice Title
		$title = get_field( ''.$location.'_notice_title', $field_type );

		// The notice message
		$message = get_field( ''.$location.'_notice_message', $field_type, false, false );

		// The notice Button Text
		$btn_txt = get_field( ''.$location.'_notice_button_text', $field_type );

		$url_external = '';
		if( get_field( ''.$location.'_notice_external_url', $field_type ) ){
			$url_external = 'target="_blank"';
		}

				// The function to build the actual global notice
				$notice = '<a class="topbar-notice -'.$type.'" href="'.$link.'" '.$url_external.' '.$background_image.'>';
					$notice .= '<div class="container -max -width">';

						$notice .= '<p class="attention-getter">';
							$notice .= $icon;
							$notice .= $title;
						$notice .= '</p>';

						$notice .= '<p class="message">';
							$notice .= $message;
						$notice .= '</p>';

						$notice .= '<span class="btn -notice _bring-to-front">'.$btn_txt.'</span>';

					$notice .= '</div>';
				$notice .= '</a>';

				echo $notice;

		}



	}