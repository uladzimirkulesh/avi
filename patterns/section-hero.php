<?php
/**
 * Title: Hero section
 * Slug: avi/section-hero
 * Categories: text, avi-theme
 * Keywords: text, hero
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section Hero"},"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"className":"section section\u002d\u002dhero has-global-padding-top is-style-has-global-padding","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"bottom"}} -->
<section class="wp-block-group alignfull section section--hero has-global-padding-top is-style-has-global-padding" id="section-hero" style="padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"metadata":{"name":"Section content"},"align":"wide","className":"section__content","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:group {"metadata":{"name":"Wrapper"},"className":"wrapper grid","layout":{"type":"default"}} -->
		<div class="wp-block-group wrapper grid">
			<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"0.9"}},"className":"hero-title","fontSize":"xxxxxxx-large"} -->
			<h1 class="wp-block-heading hero-title has-xxxxxxx-large-font-size" style="line-height:0.9"><?php echo wp_kses_post( _x( 'Digital<br>Designer', 'Hero section title', 'avi' ) ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:group {"metadata":{"name":"Hero subtitle"},"style":{"spacing":{"margin":{"top":"0"}}},"className":"hero-subtitle","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group hero-subtitle" style="margin-top:0">
				<!-- wp:paragraph {"fontSize":"large"} -->
				<p class="has-large-font-size"><?php echo esc_html_x( 'Skilled in Web Design, UX/UI, Webflow and Front End Development.', 'Hero section subtitle', 'avi' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
