<?php
/**
 * Title: About me section
 * Slug: avi/section-about-me
 * Categories: text, avi-theme
 * Keywords: text, about
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section About Me"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|70"}}},"className":"section section--about-me","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--about-me" id="section-about-me" style="margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"Section header"},"className":"section__header grid","layout":{"type":"default"}} -->
	<div class="wp-block-group section__header grid">
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading"><?php echo esc_html_x( 'Armed with my knowledge of product and brand, I am adept at problem-solving, storytelling, and delivering immersive experiences.', 'About me section title', 'avi' ); ?></h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Section content"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"section__content grid","layout":{"type":"constrained"}} -->
	<div class="wp-block-group section__content grid">
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'I am David Gearhart, a Digital Designer based in New York, USA. I\'ve been in the industry for 10+ years, creating designs for both digital and print projects for clients such as Sony, Mitsubishi, General Electric, and Louis Vuitton. Currently working at IBM as a Digital Art Director.', 'About me section text', 'avi' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:gallery {"align":"wide"} -->
		<figure class="wp-block-gallery alignwide has-nested-images columns-default is-cropped">
			<!-- wp:image {"sizeSlug":"large","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
			<figure class="wp-block-image size-large"><img alt=""/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"large","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
			<figure class="wp-block-image size-large"><img alt=""/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"large","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
			<figure class="wp-block-image size-large"><img alt=""/></figure>
			<!-- /wp:image -->
		</figure>
		<!-- /wp:gallery -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
