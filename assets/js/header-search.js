/**
 * Header Search JS
 *
 * @package GT Drive
 */

( function( $ ) {

	$( document ).ready( function() {
		var searchToggle = $( '#masthead .header-main .header-search button.header-search-icon' );
		var searchForm = $( '.site .header-search-dropdown' );

		function closeSearchForm() {
			searchForm.removeClass( 'active' );
			searchToggle.attr( 'aria-expanded', searchForm.hasClass( 'active' ) );
		}

		// Add an initial value for the attribute.
		searchToggle.attr( 'aria-expanded', 'false' );

		/* Display Search Form when search icon is clicked */
		searchToggle.on( 'click', function() {
			searchForm.toggleClass( 'active' ).find( '.search-form .search-field' ).focus();
			$( this ).attr( 'aria-expanded', searchForm.hasClass( 'active' ) );
		});

		/* Close search form if close button is clicked */
		searchForm.find( '.header-search-close' ).click( function() {
			closeSearchForm();
		});

		/* Close search form if Escape key is pressed */
		$( document ).keyup(function(e) {
			if ( e.which == 27 ) {
				closeSearchForm();
			}
		});
	} );

} )( jQuery );
