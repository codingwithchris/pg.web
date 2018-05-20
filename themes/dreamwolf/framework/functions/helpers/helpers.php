<?php
/**
 * Core Helper functions for various important tasks across the site
 *
 * @since 1.0.0
 * @author Christopher Hahn <chris@codewolfseven.com>
 * @package Helpers
 */


/**
 * Set the timezone of the server to EST
 */
if ( ! function_exists( 'wolf_set_timezone_to_est' ) ){

	add_action('init', 'wolf_set_timezone_to_est', 1);

	function wolf_set_timezone_to_est() {

		date_default_timezone_set('America/New_York');

	}

}

/**
 * Define the base location of the views folder
 *
 * @since 1.0.0
 */
define( 'WOLF_VIEW_BASE', '/framework/views/' );


/**
 * A core function for dynamically getting core, global, and header view components
 *
 * @uses get_template_part and customizes it to our liking
 *
 * @param string $view 			the folder to look in
 * @param string $base 			the first component of the file name
 * @param string $extension 	the second component of the file name
 *
 * @since 1.0
 */

if ( ! function_exists( 'wolf_get_view' ) ) {

  function wolf_get_view( $view, $base, $extension = '' ) {

    get_template_part( WOLF_VIEW_BASE . $view . '/' . $base, $extension );

  }

}


/**
 * A core function for dynamically getting PAGE specific views
 *
 * @uses get_template_part and customizes it to our liking
 *
 * @param string $page 			the page folder to look in
 * @param string $base 			the first component of the file name
 * @param string $extension 	the second component of the file name
 *
 * @since 1.0
 */

if ( ! function_exists( 'wolf_get_page_view' ) ) {

  function wolf_get_page_view( $page, $base, $extension = '' ) {

    get_template_part( WOLF_VIEW_BASE . 'pages/' . $page . '/' . $base, $extension );

  }

}

/**
 * A core function for dynamically getting POST specific views
 *
 * @uses get_template_part and customizes it to our liking
 *
 * @param string $post 			the post folder to look in
 * @param string $base 			the first component of the file name
 * @param string $extension 	the second component of the file name
 *
 * @since 1.0
 */

if ( ! function_exists( 'wolf_get_post_view' ) ) {

  function wolf_get_post_view( $post_type, $base, $extension = '' ) {

    get_template_part( WOLF_VIEW_BASE . 'posts/' . $post_type . '/' . $base, $extension );

  }

}

/**
 * Get featured Image URL
 *
 * @param string $size	the size of the image to get
 *
 * @var string $featured_image 			the id of the posts featured image
 * @var string $featured_image_url 		the url of the posts featured image
 *
 * @return string		the url of the featured image
 * @since 1.0
 */

if ( ! function_exists( 'wolf_get_featured_image_url' ) ) {

  function wolf_prep_featured_image_url( $size = 'full' ) {

    $featured_image     	= wp_get_attachment_image_src( get_post_thumbnail_id(), $size );
    $featured_image_url = $featured_image[0];

    return $featured_image_url;

  }

}


/**
 * A function to set the featured image or use a fallback image if no featured image is found.
 * After the proper image is set, it loads that iamge via CDN automatically.
 *
 * @uses wolf_cdn_url() to force the image to load over CDN
 * @uses wolf_prep_featured_image_url() to fetch the url of the featured image
 *
 * @param string $size	the size of the image to get
 *
 * @var string $featured_image_		url	the url of the featured image
 * @var string $fallback_show_image 	the ACF image to get as a fallback for shows if no header image is found
 * @var string $fallback_page_image 	the ACF image to get as a fallback for pages if no featured image is found
 * @var string $image_url				the url of the image to be sanatized and output

 * @returns string $image_url 	fully sanitized featured image url
 *
 * @since 1.0
 */

if ( ! function_exists( 'wolf_get_featured_image' ) ) :

  function wolf_get_featured_image( $size = 'full' ) {

    $featured_image_url        = 	wolf_prep_featured_image_url( $size );
    $fallback_show_image	 = 	get_field( 'global_fallback_show_feed_image', 'options' );
    $fallback_page_image       = 	get_field( 'global_fallback_page_header_image', 'options' );

    if ( $featured_image_url != NULL ) {

      $image_url = $featured_image_url;

    // If we are on an archive page and the current post type  is a show
    } elseif( ( is_archive() ) && ( wolf_get_current_post_type() == 'shows' ) ) {

      $image_url = $fallback_show_image['url'];

    } elseif( is_page() ){

	 $image_url = $fallback_page_image['url'];

    }

    return esc_url( wolf_cdn_url ( $image_url ) );

  }
endif;


/**
 * Return the Alt Text of the Featured Image
 */

if ( ! function_exists('wolf_get_featured_alt' ) ){

	function wolf_get_featured_alt(){

		$thumb_id = get_post_thumbnail_id(get_the_ID());
		$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

		return $alt;

	}

}


// Get the current page class and return it as a css variant
// @since 1.0
// =============================================================================
function wolf_page_class(){

	$current_page_title = strtolower ( get_the_title() );
	$current_page_class = '-' . $current_page_title ;

	echo esc_attr ( $current_page_class );

}

// Get the current page title and return it as a lowercase title
// @since 1.0
// =============================================================================
function wolf_page_title(){

	$current_page_title = strtolower ( get_the_title() );

	return $current_page_title;

}


// Get the Current Post Type from the post object as a variable
// Pass the variable through a string replace to replace underscores with hyphens
// This will match our template naming structure and grab the appropriate template
// @return		string 		lower case name of post type with space separated by hyphens
// @since 1.0
// ==================================================================
function wolf_get_current_post_type(){
	global $post;

	$current_post_type = $post->post_type;
	$replace = '_';
	$with = '-';
	$post_template_part = str_replace( $replace, $with, $current_post_type );

	return $post_template_part;
}

// Load the correct page template
// @uses wolf_get_current_post_type
// @uses wolf_page_title
// @since 1.0
// ================================================================
function wolf_load_current_page(){

	if( is_404() ){
		$folder = $page;
		$extension = '-404';

	} elseif( is_page() ){

		$folder = 'page';
		$extension = str_replace( array( ' ', '_' ), '-', wolf_page_title() );

	} elseif( is_archive() ){

		$folder = 'archive';
		$extension = wolf_get_current_post_type();

	} elseif( is_single() ){

		$folder = 'single';
		$extension = wolf_get_current_post_type();

	}

	get_template_part( 'framework/pages/'.$folder.'/'.$folder.'', $extension );

}


// Forces the url passed through the function
// to use the CDN Domain defined in wp-config.
// This is useful for setting background images with a returned URL ( from ACF for example )
// because backgrounds do not automatically load from the CDN like normal WP images
// @param string - $url of the image to be returned
// @author Christopher Hahn
// @since 1.0.0
// ==================================================

function wolf_cdn_url( $url ){

	// Only if the cdn is defined
	if( defined( 'WP_STACK_CDN_DOMAIN' ) ){

		// Replace regular site domain path with CDN domain path
		$cdn_url = str_replace( PG_LIVE_SITE_PATH , WP_STACK_CDN_DOMAIN, $url );

		$url = $cdn_url;

	} else{}

	return $url;
}

/**
 * Build the footer Copyright Output
 *
 */

 /*
 * Automatic Copyight Function
 *
 * @author CSS Tricks
 * @since 1.1.0
 */
function wolf_auto_copyright_year($year = 'auto'){

	if(intval($year) == 'auto'){

		$year = date('Y');

	}

    if(intval($year) == date('Y')){

	    $copy_year = intval($year);

    }

	if(intval($year) < date('Y')){

	   $copy_year =  intval($year) . ' - ' . date('Y');

	}

    if(intval($year) > date('Y')){

	   $copy_year = date('Y');

    }

    return esc_html__( $copy_year, '__wolf__');

}


/**
 * Output the Footer Copyright
 *
 * If we are on the front page we want a rel attribute
 * but if we are not, we want the rel attribute
 * to be nofollow so Google does not see it
 * as spam
 *
 * @todo link designer and company statements using ACF
 * @todo must do an if function exists check
 * @todo must comment more fully
 * @uses cc_auto_copyright_year();
 * @since 1.0.0
 */

 add_action( 'wolf_footer_copyright', 'wolf_footer_copyright_output' );

 function wolf_footer_copyright_output(){

	 //Footer vars
	 $copyright_before = get_field( 'footer_copyright_before_year', 'options' );
	 $copyright_after = get_field ( 'footer_copyright_after_year', 'options' );
	 $agency = get_field( 'footer_copyright_agency', 'options' );

	 //Output the full copyright

	$copyright = '<span class="copyright-inner _l-gray">';
		$copyright .= '<span class="before">'. esc_html__( $copyright_before, '__wolf__') .' &copy; </span>';
		$copyright .= ' <span class="year">'.  wolf_auto_copyright_year() .' </span>';
		$copyright .= ' <span class="after"> '. esc_html__ ( $copyright_after, '__wolf__') .' </span>';
		$copyright .= ' <a class="designer _l-green _under-green" href="https://linkedin.com/in/christopher-a-hahn
" target="_blank">'. esc_html__( $agency, '__wolf__') .'</a>';
	$copyright .= '</span>';


	echo $copyright;

}