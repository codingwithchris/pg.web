<?php
// FRAMEWORK / FUNCTIONS / ENQUEUE / ASYNC.PHP
// Async load Various Scripts across the site!
// ========================================

//
// Font Awesome
//
function add_async_attribute($tag, $handle) {
    if ( 'font-awesome' !== $handle )
        return $tag;
    return str_replace( ' src', ' async="async" src', $tag );
}
add_filter('script_loader_tag', 'add_async_attribute', 10, 2);

//
// mailchimp Premium
//
function wolf_async_mailchimp_api($tag, $handle) {
    if ( 'mc4wp-forms-api' !== $handle )
        return $tag;
    return str_replace( ' src', ' async="async" src', $tag );
}
add_filter('script_loader_tag', 'wolf_async_mailchimp_api', 10, 2);

//
// Mailchimp Premium
//
function wolf_async_mailchimp_ajax($tag, $handle) {
    if ( 'mc4wp-ajax-forms' !== $handle )
        return $tag;
    return str_replace( ' src', ' async="async" src', $tag );
}
add_filter('script_loader_tag', 'wolf_async_mailchimp_ajax', 10, 2);


//
// Main Playground Javascript FIle
//
function wolf_async_playground_main($tag, $handle) {
    if ( 'playground-footer-main-js' !== $handle )
        return $tag;
    return str_replace( ' src', ' async="async" src', $tag );
}
add_filter('script_loader_tag', 'wolf_async_playground_main', 10, 2);

//
// Wp Embed
//
function wolf_async_wp_embed($tag, $handle) {
    if ( 'wp-embed' !== $handle )
        return $tag;
    return str_replace( ' src', ' async="async" src', $tag );
}
add_filter('script_loader_tag', 'wolf_async_wp_embed', 10, 2);