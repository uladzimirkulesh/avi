<?php
/**
 * Title: Default footer
 * Slug: avi/footer-default
 * Categories: footer, avi-theme
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|contrast"}},"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","className":"footer__container","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"small"} -->
	<div class="wp-block-group alignwide footer__container has-contrast-2-color has-text-color has-link-color has-small-font-size" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( '© 2023 all rights reserved', 'Copyright text', 'avi' ); ?></p>
		<!-- /wp:paragraph -->

		<?php
		if ( function_exists( 'the_privacy_policy_link' ) ) {
			the_privacy_policy_link( '<!-- wp:paragraph {"style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|contrast"}}}}}} -->
			<p>', '</p><!-- /wp:paragraph -->' );
		}
		?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
