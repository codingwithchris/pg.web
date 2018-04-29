<?php

/*
	After Reviewing all plugins and the effects of JS load on the site, here are my thoughts:
	1. I will be the only one working with this code and as such, I can take more liberties
	2. I am going to move all JS Scripts and Plugins for the entire site Into the Playground Toolbox Plugin
	3. ANY Code that I need to always remain will be conatenated and minified into one JS FIle
	4. ALL JS will be footer loaded with ASYNC and DEFER as per the code below
	5. ALL JS will be minified
	@ref for ASYNC	http://matthewhorne.me/add-defer-async-attributes-to-wordpress-scripts/#toggle_comments
*/

/*
function add_async_attribute($tag, $handle) {

   $scripts_to_async = array('donately-form', 'playground-main-js');

  foreach($scripts_to_async as $async_script) {
      if ($async_script !== $handle) return $tag;
      return str_replace(' src', ' async="async" src', $tag);
   }
   return $tag;

}

add_filter('script_loader_tag', 'add_async_attribute', 10, 2);
*/


// add async and defer to ALL javascripts
function wcs_defer_javascripts ( $url ) {

    if ( FALSE === strpos( $url, '.js' ) ) return $url;

    if ( strpos( $url, 'jquery.js' ) ) return $url;

    return "$url' async='async";
} //add_filter( 'clean_url', 'wcs_defer_javascripts', 11, 1 );