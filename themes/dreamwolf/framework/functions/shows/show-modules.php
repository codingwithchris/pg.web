<?php
use Playground\Locations;

// Module Helpers
// ============

// Get Icon
// @param - string - font awesome icon class
function wolf_get_icon( $fa_class = null){

	$link_icon = '';

		if( $fa_class != null ){
			$link_icon = "<i class='fa $fa_class' style='margin-right:5px;' aria-hidden='true'></i>";
		}

	return $link_icon;

}

// Sanatize Module
function wolf_sanatize_show_module( $module ){

	$allowed =  array(

		'a' => array(
			'href' => true,
			'title' => true,
			'class' => true,
			'target' => true
		),

		'i' => array(
			'class' => true,
			'style' => true,
			'aria-hidden' => true
		),

		'div' => array(
			'class' => true
		),

		'span' => array(
			'class' => true
		)

	);


	wp_kses( $module, $allowed );

	return $module;

}


// Ticket Module
// @param - string - $ticket_text_mod - ticket text
// @param - string - $fa_class - font awesome icon class ( null by default, meaning no icon will be displayed )
// @param - string - $class_mod - class modifier
// ============================================================================
function wolf_get_show_ticket_module( $ticket_text_mod = null, $fa_class = null, $class_mod = null ){

	$ticket_module = '';

	if( wolf_get_show_ticket_url() ){

		$ticket_module = '<a href="'.wolf_get_show_ticket_url().'" target="_blank" class="'.$class_mod.'">';
			$ticket_module .=  wolf_get_icon( $fa_class );
			$ticket_module .= wolf_get_show_ticket_text( $ticket_text_mod );
		$ticket_module .= '</a>';

		$ticket_module = wolf_sanatize_show_module( $ticket_module );

		return $ticket_module;

	}

}

// Directions Module
// @param - string $separator - type of separator between start and end date
// ===========================================================
function wolf_get_show_directions_module( $show_id, $dir_text = null, $fa_class = null, $class_mod = null ){

	$dir_module = '';

	if( wolf_get_show_directions() ){

		$dir_module = '<a href="'.wolf_get_show_directions().'" target="_blank" class="'.$class_mod.'">';
			$dir_module .=  wolf_get_icon( $fa_class );
			$dir_module .=  $dir_text;
		$dir_module .= '</a>';

		$dir_module =  wolf_sanatize_show_module( $dir_module );

	}

	return $dir_module;

}


// FB Event Module
// @param - string $separator - type of separator between start and end date
// ===========================================================
function wolf_get_show_fbevent_module( $fb_text = null, $fa_class = null, $class_mod = null ){

	$fb_module = '';

	if( wolf_get_show_fb_link() ){

		$fb_module = '<a href="'.wolf_get_show_fb_link().'" target="_blank" class="'.$class_mod.'">';
			$fb_module .=  wolf_get_icon( $fa_class );
			$fb_module .=  $fb_text;
		$fb_module .= '</a>';

		$fb_module = wolf_sanatize_show_module ( $fb_module );

	}

	return $fb_module;

}

// FB Review Module
// @param - string $separator - type of separator between start and end date
// ===========================================================
function wolf_get_show_fbreview_module( $fb_text = null, $fa_class = null, $class_mod = null ){

	$fb_module = '<a href="https://www.facebook.com/playgroundDYT/reviews/" target="_blank" class="'.$class_mod.'">';
		$fb_module .=  wolf_get_icon( $fa_class );
		$fb_module .=  $fb_text;
	$fb_module .= '</a>';

	$fb_module = wolf_sanatize_show_module ( $fb_module );

	return $fb_module;

}




// Date Range Module
// @param - string $separator - type of separator between start and end date
// ===========================================================
function wolf_get_show_date_module( $fa_class = null, $class = null, $text_type = 'p', $separator = '-' ){

	$date_range = '<div class="date-range '.$class.'">';

		$date_range .= wolf_get_icon( $fa_class );

		// Start Date
		$date_range .= '<'.$text_type.' class="start-date _gray _mbn">';
			$date_range.= wolf_get_show_start_date();
		$date_range .= '</'.$text_type.'> ';
		//End Date
		$date_range .= '<'.$text_type.' class="end-date _gray _mbn">';
			// Separator
			$date_range .= '<span class="date-sep">';
			$date_range .= $separator;
			$date_range .= '</span> ';
			$date_range.= wolf_get_show_end_date();
		$date_range .= '</'.$text_type.'>';

	$date_range .= '</div>';

	wolf_sanatize_show_module ( $date_range );

	return $date_range;
}

// Show Status Tag Module
// ===================

function wolf_get_show_status_module( $type ){



}


// Show More Info Module
// ===================

function wolf_get_show_more_module( $type ){



}