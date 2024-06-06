( function( $ ) {

	"use strict";

	/*-------------------------------------------------------
	Set current-menu-item class to menu link
	-------------------------------------------------------*/

	function setCurrentMenuItemClass() {
		const menuItems = document.querySelectorAll( '.wp-block-navigation-item' );

		if ( ! menuItems.length ) {
			return;
		}

		// Check for .current-menu-item class on any item and stop if found.
		for ( let i = 0; i < menuItems.length; i++ ) {
			if ( menuItems[ i ].classList.contains( 'current-menu-item' ) ) {
				return;
			}
		}

		// Add trailing slash to path if missing.
		const url = window.location.href.endsWith( '/' )
			? window.location.href
			: `${ window.location.href }/`;

		// Check for matching URL path on any child link of menuItems.
		for ( let i = 0; i < menuItems.length; i++ ) {
			const link = menuItems[ i ].querySelector( 'a' );
			const linkURL = link.href.endsWith( '/' )
				? link.href
				: `${ link.href }/`;

			// Note: link.href returns full URL, even if it's a relative link.
			if ( linkURL === url ) {
				menuItems[ i ].classList.add( 'current-menu-item' );
			}
		}
	}

	/*-------------------------------------------------------
	Geting the header height
	-------------------------------------------------------*/

	function headerHeight() {
		var headerHeight = $( '.header' ).height();
		document.documentElement.style.setProperty( '--header-height', headerHeight + 'px' );
	}

	/*-------------------------------------------------------
	Geting the footer height
	-------------------------------------------------------*/

	function footerHeight() {
		var footerHeight = $( '.footer' ).height();
		document.documentElement.style.setProperty( '--footer-height', footerHeight + 'px' );
	}

	/*-------------------------------------------------------
	Fire on document ready
	-------------------------------------------------------*/

	$( document ).ready( function() {
		setCurrentMenuItemClass();
	} );

	/*-------------------------------------------------------
	Fire on window load
	-------------------------------------------------------*/

	$( window ).on( 'load.avi', function() {
		headerHeight();
		footerHeight();
	} );

	/*-------------------------------------------------------
	Fire on window resize
	-------------------------------------------------------*/

	$( window ).on( 'resize.avi', function() {
		headerHeight();
		footerHeight();
	} );

} )( jQuery );
