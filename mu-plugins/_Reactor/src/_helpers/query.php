<?php
namespace Reactor\Helpers\Query;

/**
 * An incredibly useful function for getting posts grouped by their taxonomy terms.
 * 
 * 1. Get all terms in a taxonomy
 * 2. Query posts in each of those terms.
 * 3. Return a custom array with the term and post data we need to be able to 
 * display grouped posts.
 * 
 * @param array $custom_settings the settings for our query 
 * 
 * @return array $grouped_results a grouped array of the resulting term and post data from our query
 */

function get_posts_grouped_by_term( array $custom_settings ){


    /**
     * Set our query defaults & merge with
     * passed in $settings params
     */

    $settings = array_merge(

        // Our defaults
        array(
            
            // The post type we are querying
            'post_type'         => '',

            // The taxonomy terms we want to use to group the posts by
            'group_by_taxonomy'  => '',
            
            // An additional taxonomy we want to query
            'additional_query_taxonomy'        => null,
            'additional_query_taxonomy_field'  => null,
            'additional_query_taxonomy_terms'  => null,

            // Term Specific
            'term_orderby'      => 'menu_order',
            'term_order'        => 'ASC',

            // Posts Specific
            'posts_orderby'      => 'menu_order',
            'posts_order'       => 'ASC',
            'posts_per_page'    => '-1'
            
        ),

        // The settings we are passing in
        $custom_settings

    );
    
    // Get the terms from the taxonomy to be used for grouping
    $terms = get_terms( array(

        'taxonomy'      => $settings['group_by_taxonomy'],
        'hide_empty'    => true,
        'orderby'       => $settings['term_orderby'],
        'order'         => $settings['term_order']

    ));

    // Init our Array to hold our grouped results data
    $grouped_results = [];

    // Init our counter used for grouping posts and terms.
    $i = 1;

    /**
     * Begin building our taxonomy query array
     */
    $tax_query = [ 'relation' => 'AND' ];

    // Core "grouping" tax query will always be present
    $tax_query[] = [

        'taxonomy'  => $settings['group_by_taxonomy'],
        'field'     => 'id',

        // We cannot set the terms until we are in our terms loop, so we leave this blank for now
        'terms'     => '',
        'operator'  => 'IN'

    ];

    // If we are running an additional taxonomy query
    if( isset( $settings['additional_query_taxonomy'] ) ){

        // Add it to our taxonomy query array
        $tax_query[] = [

            'taxonomy'  => $settings['additional_query_taxonomy'],
            'field'     => $settings['additional_query_taxonomy_field'],
            'terms'     => $settings['additional_query_taxonomy_terms'],
            'operator'  => 'IN'

        ];    

    }

    /**
     * Loop over each of the taxonomy terms
     * we want to group our posts by
     */
    foreach( $terms as $term ){
        
        // Reset the query
        wp_reset_query();

        /**
         * Set the term ID for our core taxonomy grouping query
         * now that we are in the loop
         */
        $tax_query[0]['terms'] = $term->term_id;

        // Build our query args from our settings
        $args = array(
            
            'post_type'         => $settings['post_type'],
            'posts_per_page'    => $settings['posts_per_page'],
            'orderby'           => $settings['posts_orderby'],
            'order'             => $settings['posts_order'],

            // Use our custom tax query
            'tax_query' => $tax_query

        );
        
        // Get the results from our query
        $query_results = new \WP_Query( $args );

        // If the currently iterated term has posts
        if( $query_results->have_posts() ){

            // Add the query results to our array using only the data we need
            $grouped_results["group_{$i}"] = [

                // Get basic data associated with our term

                'term_id' => $term->term_id,
                'term_title' => $term->name,
                'term_description' => $term->description,

                // Get the array of posts returned from our query ( not entire Post Objects )
                'term_posts' => $query_results->posts
                
            ];
            
            // Iterate our counter to prep for the next loop
            $i++;
        
        }

    }

    // Reset the query
    wp_reset_query();

    // Return our results
    return $grouped_results;

}