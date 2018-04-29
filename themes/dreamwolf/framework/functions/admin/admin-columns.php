<?php
/**
 * ADMIN-COLUMNS.PHP
 *
 * We are using a custom plugin called Jigsaw (  on github...not in wordpress repo ),
 * to build out custom admin colmns we need and remove columns we don't want.
 *
 * @package Admin
 * @since 1.3.0
 *
 * @link https://github.com/Upstatement/jigsaw Link to Jigsaw Plugin on Github
 */

// Make sure the Jigsaw Plugin is activated
// ================================

if( class_exists ( 'Jigsaw' ) ){

	/**
	 * Remove the Date Added Column
	 * for SHOWS and PAGES
	 *
	 * @uses Jigsaw to modify columns
	 * @since 1.3.0
	 * @author Christopher Hahn <chris@codewolfseven.com>
	 */
	Jigsaw::remove_column( 'shows' , 'date' );
	Jigsaw::remove_column( 'pages' , 'date' );


	/**
	 * Add in Admin Columns to indicate if a topbar notice is active,
	 * and if it is displaying the global default or a custom topbar notice.
	 *
	 *  Currently supports PAGES and SHOWS
	 *
	 * @uses Jigsaw to modify columns
	 * @since 1.3.0
	 * @author Christopher Hahn <chris@codewolfseven.com>
	 */

	Jigsaw::add_column('shows', 'Topbar Notice', 'admin_columns_topbar_notice_status' , 5);
	Jigsaw::add_column('page', 'Topbar Notice', 'admin_columns_topbar_notice_status' , 5);

	function admin_columns_topbar_notice_status(){

		// Set output for default topbar state
		$display = 'off';
		$custom = '';

		// Is the topbar being displayed?
		if( get_field( 'global_notice_display', 'options' ) && get_field( 'page_notice_display' ) ){

			// Set new output that indicates that the topbar is being shows
			$display = 'display';
			$custom = ' / default';

			// Is the topbar set to dispaly custom text?
			if( get_field( 'page_notice_custom' ) ){

				// Indicate that we are using a custom topbar
				$custom = ' / custom';

			}


		}

		// escape and echo the results
		echo esc_html( $display.$custom );

	}


	/**
	 * Add in Admin Columns to indicate if the Call to Action is showing default
	 * or modified text and display what type of call to action was chosen.
	 *
	 *  Currently supports PAGES and SHOWS
	 *
	 * @uses Jigsaw to modify columns
	 * @since 1.3.0
	 * @author Christopher Hahn <chris@codewolfseven.com>
	 */

	Jigsaw::add_column('shows', 'Footer CTA', 'admin_columns_lower_cta_status' , 6);
	Jigsaw::add_column('page', 'Footer CTA', 'admin_columns_lower_cta_status' , 6);

	function admin_columns_lower_cta_status(){

		// Set output for the default Call to Action scenario
		$display = 'default';
		$type = ' / subscribe';

		// Is the call to action text being changed?
		if( get_field( 'cta_footer_change' ) ){

			// Indicate we are using custom text
			$display = 'custom text';

		}

		// Is the Call to Action type changing?
		if( get_field( 'cta_footer_choose' ) ){

			// Indicate what type of CTA was chosen
			$type = ' / ' . get_field( 'cta_footer_choose' );

		}

		// escape and echo the results
		echo esc_html( $display.$type );

	}

} // End if Class Exits check