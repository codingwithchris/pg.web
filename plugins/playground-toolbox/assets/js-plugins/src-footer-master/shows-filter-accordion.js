//Listens for clicks on a FAQ Section in the DOM
jQuery( '.js-show-filter' ).bind('click touchstart', function (e) {

    e.stopPropagation();
    e.preventDefault();

    if(e.handled !== true) {

          //Toggle the faq-row and display the FAQ Accordions
	    jQuery( '#beautiful-taxonomy-filters-shows' ).slideToggle( 'fast' );

	    // Add a class to the expanded section
	    jQuery( '#beautiful-taxonomy-filters-shows' ).toggleClass( 'is-visible' );

            e.handled = true;

        } else {

            return false;

        }

});