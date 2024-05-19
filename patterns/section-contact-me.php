<?php
/**
 * Title: Contact me section
 * Slug: avi/section-contact-me
 * Categories: text, avi-theme
 * Keywords: text, contact
 */
?>

<!-- wp:group {"tagName":"section","align":"wide","className":"section section--contact-me","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--contact-me" id="section-contact-me">
	<!-- wp:group {"align":"wide","className":"section__content grid","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide section__content grid">
		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"contrast","className":"has-heading-font","fontSize":"small"} -->
		<p class="has-heading-font has-contrast-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500"><span class="has-brackets"><?php echo esc_html_x( 'Write me', 'Contact me section small title', 'avi' ); ?></span></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|30"}}},"textColor":"contrast","className":"has-heading-font","fontSize":"xxxx-large"} -->
		<p class="has-heading-font has-contrast-color has-text-color has-link-color has-xxxx-large-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--30)"><?php echo wp_kses_post( _x( 'If you have <em>any questions</em> or just want to <em>talk to me</em>, I would love to hear from you.', 'Contact me section text', 'avi' ) ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"has-icon is-style-outline"} -->
			<div class="wp-block-button has-icon is-style-outline">
				<a class="wp-block-button__link wp-element-button" href="/contact"><span class="button__text"><?php echo esc_html_x( 'Contact me', 'About me section button text', 'avi' ); ?></span><span class="button__icon"><?php echo esc_html_x( '↗', 'About me section button icon', 'avi' ); ?></span></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
