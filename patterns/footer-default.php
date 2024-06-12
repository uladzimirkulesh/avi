<?php
/**
 * Title: Default footer
 * Slug: avi/footer-default
 * Categories: footer, avi-theme
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"metadata":{"name":"Footer container"},"className":"footer-container is-style-has-global-padding","layout":{"type":"default"}} -->
<div class="wp-block-group footer-container is-style-has-global-padding">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"small"} -->
	<div class="wp-block-group has-small-font-size" style="border-top-color:var(--wp--preset--color--contrast-4);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
		<!-- wp:navigation {"overlayMenu":"never","className":"footer-navigation","style":{"spacing":{"blockGap":"1rem"}}} /-->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|contrast"}}}}},"textColor":"contrast","className":"footer__code-by"} -->
		<p class="footer__code-by has-contrast-color has-text-color has-link-color"><?php
		printf(
			/* translators: "Code by" text. */
			esc_html__( 'Code by %s', 'avi' ),
			'<a href="' . esc_url( __( 'https://uladzimirkulesh.com', 'avi' ) ) . '">Uladzimir</a>' )
		?></p>
		<!-- /wp:paragraph -->

		<?php
		if ( function_exists( 'the_privacy_policy_link' ) ) {
			the_privacy_policy_link( '<!-- wp:paragraph {"metadata":{"name":"Privacy"},"style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|contrast"}},"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","className":"footer-privacy"} --><p class="footer-privacy has-contrast-color has-text-color has-link-color">', '</p><!-- /wp:paragraph -->' );
		}
		?>

		<!-- wp:paragraph {"metadata":{"name":"Copyright"},"className":"footer-copyright"} -->
		<p class="footer-copyright"><?php echo esc_html_x( '© 2024 all rights reserved', 'Copyright text', 'avi' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
