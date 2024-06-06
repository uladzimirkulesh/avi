<?php
/**
 * Title: Contact section
 * Slug: avi/section-contact
 * Categories: text, avi-theme
 * Keywords: text, contact
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section Contact"},"align":"wide","className":"section section--contact","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--contact" id="section-contact">
	<!-- wp:group {"metadata":{"name":"Section content"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"section__content grid","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content grid">
		<!-- wp:image {"width":"144px","height":"144px","scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"is-style-rounded"} -->
		<figure class="wp-block-image size-medium is-resized is-style-rounded"><img alt="" style="object-fit:cover;width:144px;height:144px"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"fontSize":"xxxx-large"} -->
		<p class="has-xxxx-large-font-size"><?php echo esc_html_x( 'Have a project in mind? Or you want to say hello, get in touch with me.', 'Contact section text', 'avi' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html_x( 'Contact Me', 'Contact section button text', 'avi' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
