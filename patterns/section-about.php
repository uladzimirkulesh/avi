<?php
/**
 * Title: About section
 * Slug: avi/section-about
 * Categories: text, avi-theme
 * Keywords: text, about
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section About"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"className":"section section--about","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--about" id="section-about" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"Section content"},"className":"section__content grid","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content grid">
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'With a love for clean designs, beautiful typographies, and interactive development, I work as a freelancer for agencies, start-ups, and individuals. My expertise in web development and my passion for live events and travel make for a unique combination in my work.', 'About section text', 'avi' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
