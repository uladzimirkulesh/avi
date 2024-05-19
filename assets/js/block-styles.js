wp.domReady( () => {

	// Unregister default button styles
	wp.blocks.unregisterBlockStyle( 'core/button', 'fill' );
	wp.blocks.unregisterBlockStyle( 'core/button', 'outline' );

	// Register group block with global padding
	wp.blocks.registerBlockStyle( 'core/group', {
		name: 'has-global-padding',
		label: 'Has global padding'
	} );

	// Styles variation for post terms
	wp.blocks.registerBlockStyle( 'core/post-terms', {
		name: 'pill',
		label: 'Pill'
	} );

} );
