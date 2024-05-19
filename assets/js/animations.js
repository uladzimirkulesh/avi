( function( $ ) {

	"use strict";

	// Register GSAP ScrollTrigger plugin
	gsap.registerPlugin( ScrollTrigger );

	/*-------------------------------------------------------
	Lenis smooth scroll
	-------------------------------------------------------*/

	function initLenis() {
		$( '.wp-block-navigation__responsive-container' ).attr( 'data-lenis-prevent', '' );

		const lenis = new Lenis();

		lenis.on('scroll', ScrollTrigger.update);

		// GSAP ScrollTrigger integration
		gsap.ticker.add( ( time ) => {
		 	lenis.raf( time * 1000 );
		} );

		gsap.ticker.lagSmoothing( 0 );
	}

	/*-------------------------------------------------------
	Parallax for hero image
	-------------------------------------------------------*/

	function heroImgParallax() {
		const parallaxElements = gsap.utils.toArray( '.js-animation--hero-img-parallax' );

		parallaxElements.forEach( ( parallaxElement ) => {
			var parallaxImg = parallaxElement.querySelector( 'img' );
			let tl = gsap.timeline();

			tl.set( parallaxImg, {
				scale: 1.1,
				y: '0'
			} );

			tl.to( parallaxImg, {
				scale: 1,
				duration: 1.2,
				delay: 0.2,
				ease: Power4.easeOut
			} );

			tl.to( parallaxImg, {
				y: '25%',
				ease: Linear.easeNone,
				scrollTrigger: {
					trigger: parallaxElement,
					start: 'top top',
					end: 'bottom top',
					scrub: true
				}
			} );
		} );
	}

	/*-------------------------------------------------------
	Page transitions when page loading and leaving
	-------------------------------------------------------*/

	// First page load
	function firstPageLoad() {
		let tl = gsap.timeline();

		tl.set( '.loading-screen', {
			top: 0
		} );

		tl.to( '.loading-screen', {
			duration: 0.8,
			top: '-100vh',
			ease: Power4.easeInOut,
			delay: 0.4,
			onStart: () => {
				heroImgParallax();
			}
		} );
	}

	// Page load
	function pageLoad() {
		let tl = gsap.timeline();

		tl.set( '.loading-screen', {
			top: 0
		} );

		tl.to( '.loading-screen', {
			duration: 0.8,
			top: '-100vh',
			ease: Power4.easeInOut,
			delay: 0.4,
			onStart: () => {
				heroImgParallax();
			}
		} );
	}

	// Page leave
	function pageLeave( linkTarget ) {
		let tl = gsap.timeline();

		tl.set( '.loading-screen', {
			top: '100vh'
		} );

		tl.to( '.loading-screen', {
			duration: 0.8,
			top: 0,
			ease: Power4.easeIn,
			onComplete: () => {
				window.location.href = linkTarget;
			}
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
	Highlighted Text
	-------------------------------------------------------*/

	function highlightedText() {
		const highlightedTexts = gsap.utils.toArray( '.js-animation--highlighted-text' );

		highlightedTexts.forEach( function( highlightedText ) {
			var mask = highlightedText.querySelectorAll( 'span' );

			gsap.to( mask, {
				backgroundSize: '200% 100%',
				stagger: 0.5,
				ease: Linear.easeNone,
				scrollTrigger: {
					trigger: highlightedText,
					start: 'top 66.66667%',
					end: () => `+=${ highlightedText.offsetHeight * 3 }`,
					scrub: 1
				}
			} );
		} );
	}

	/*-------------------------------------------------------
	Fire on document ready
	-------------------------------------------------------*/

	$( document ).ready( function() {
		initLenis();
	} );

	/*-------------------------------------------------------
	Fire on window load
	-------------------------------------------------------*/

	$( window ).on( 'load.avi', function() {
		pageTransitions();
		highlightedText();
	} );

	/*-------------------------------------------------------
	Fire on window resize
	-------------------------------------------------------*/

	$( window ).on( 'resize.avi', function() {
		highlightedText();
	} );

} )( jQuery );
