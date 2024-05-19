<?php
/**
 * Title: About me section
 * Slug: avi/section-about-me
 * Categories: text, avi-theme
 * Keywords: text, about
 */
?>

<!-- wp:group {"tagName":"section","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|70"}}},"className":"section section--about-me","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--about-me" id="section-about-me" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","className":"section__content grid","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide section__content grid">
		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"contrast","className":"has-heading-font","fontSize":"small"} -->
		<p class="has-heading-font has-contrast-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500"><span class="has-brackets"><?php echo esc_html_x( 'What I do', 'About me section small title', 'avi' ); ?></span></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"textColor":"contrast","className":"has-heading-font js-animation--highlighted-text","fontSize":"xxxx-large"} -->
		<p class="has-heading-font js-animation--highlighted-text has-contrast-color has-text-color has-link-color has-xxxx-large-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--50)"><span><?php echo wp_kses_post( _x( 'I am <em>developing</em> stylish and technological WordPress <em>themes</em> focusing on digital storytelling and product approach. Writing about <em>web development, live </em>and<em> travel</em>.', 'About me section text', 'avi' ) ); ?></span></p>
		<!-- /wp:paragraph -->

		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"0.375rem"}}} -->
		<figure class="wp-block-image size-large has-custom-border">
			<img alt="" style="border-radius:0.375rem;aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:buttons {"layout":{"type":"flex"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"width":100,"className":"has-icon is-style-outline"} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100 has-icon is-style-outline">
				<a class="wp-block-button__link wp-element-button" href="/about"><span class="button__text"><?php echo esc_html_x( 'About me', 'About me section button text', 'avi' ); ?></span><span class="button__icon"><?php echo esc_html_x( '↗', 'About me section button icon', 'avi' ); ?></span></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
