<?php
/**
 * INDEX.PHP
 *
 * The Main file for WP to use to display content
 * Leave this as is!
 * @since 1.0.0
 * @uses wolf_load_current_page() to determine the proper view to load
 *
 * @package wordpress
 */


get_header();


// Being the Wordpress Loop
if( have_posts() ){ ?>

	<?php
		 /**
		 * Use this action hook to output anything you want
		 * before the content element opens.
	       */
	?>

	<?php do_action( 'wolf_before_post' ); ?>

	<div id="#content" class="<?php echo wolf_get_current_post_type(); ?>-inner-wrapper">

		<?php

		while( have_posts() ):

			the_post();

				/**
				 * The Main Function for determining which files to load
				 *  for the current page.  We are not using the_content();
				 * @location FRAMEWORK/FUNCTIONS/HELPERS/HELPERS.PHP
				 */

				wolf_load_current_page();

		endwhile;

		?>

		<?php
		 /**
		 * Use this action hook to output anything you want
		 * after the content element id done with its output.
	       */
		?>

		<?php do_action( 'wolf_after_post' ); ?>

	</div>

<?php } else {

/**
 * If no post content is found, we are going to load
 * our 404 page template
 */
	if( is_404() ){

		get_template_part( 'framework/pages/page/page', '404' );

	} else{

		// If no content is found and we are not 404

	}

}

get_footer();