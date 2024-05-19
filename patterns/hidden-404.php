<?php
/**
 * Title: Hidden 404
 * Slug: avi/hidden-404
 * Inserter: no
 */
?>

<!-- wp:group {"className":"error404-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group error404-content">
	<!-- wp:heading {"textAlign":"center","level":1,"className":"has-heading-serif-font","fontSize":"xxxxxx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-heading-serif-font has-xxxxxx-large-font-size"><?php echo esc_html_x( 'Error 404', 'Error code for a webpage that is not found.', 'avi' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"textColor":"contrast-2"} -->
	<p class="has-text-align-center has-contrast-2-color has-text-color" style="margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'The page you are looking for cannot be found.', 'Message to convey that a webpage could not be found', 'avi' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline">
			<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( 'Back to Home', 'avi' ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
