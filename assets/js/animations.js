( function( $ ) {

	"use strict";

	/*-------------------------------------------------------
	Page transitions when page loading and leaving
	-------------------------------------------------------*/

	// First page load
	function firstPageLoad() {
		$( ".loading-screen" ).animate( { top: '-100vh' }, 600 );
	}

	// Page load
	function pageLoad() {
		$( ".loading-screen" ).animate( { top: '-100vh' }, 600 );
	}

	// Page leave
	function pageLeave( linkTarget ) {
		$( ".loading-screen" ).animate( { top: '100vh' }, 0 ).animate( { top: '0' }, 600, function() {
			window.location = linkTarget;
		} );
	}

	// Page transitions
	function pageTransitions() {
		// When page loading
		const previousURL = document.referrer;
		const pageTransitionIn = () => {
			if ( ( ! previousURL.includes( window.location.hostname ) ) ) {
				// First page load
				firstPageLoad();
			} else {
				// Page load
				pageLoad();
			}
		};

		pageTransitionIn();

		// When leaving the page
		const siteURL = window.location.host;
		const pageTransitionOut = () => {
			const pageLinks = document.querySelectorAll( 'a' );

			pageLinks.forEach( link => {
				const linkAttr = link.getAttribute( 'href' );

				if ( linkAttr.includes( siteURL ) && ! linkAttr.includes( '?' ) && ! linkAttr.includes( '#' ) && ! linkAttr.includes( 'wp-content/uploads' ) ) {
					link.addEventListener( 'click', e => {
						e.preventDefault();
						const linkTarget = link.getAttribute( 'href' );

						if ( link.hasAttribute( 'target' ) && ( link.getAttribute( 'target' ) == "_blank" ) ) {
							window.open( linkTarget, "_blank" );
						} else {
							// Page leave
							pageLeave( linkTarget );
						}
					} );
				}
			} );
		};

		pageTransitionOut();

		// Hide overlay when click the "Back" button in the browser
		window.addEventListener( "pageshow", function ( event ) {
			var historyTraversal = event.persisted || ( typeof window.performance != "undefined" && window.performance.navigation.type === 2 );

			if ( historyTraversal ) {
				// Page load
				pageLoad();
			}
		} );
	}

	/*-------------------------------------------------------
	Fire on window load
	-------------------------------------------------------*/

	$( window ).on( 'load.avi', function() {
		pageTransitions();
	} );

} )( jQuery );
