<?php
/**
 * Title: Latest projects section
 * Slug: avi/section-latest-projects
 * Categories: query, portfolio, avi-theme
 * Block Types: core/query
 */
?>

<!-- wp:group {"tagName":"section","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|70"}}},"className":"section section--latest-projects","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--latest-projects" id="section-latest-projects" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"tagName":"header","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"className":"section__header","layout":{"type":"default"}} -->
	<header class="wp-block-group alignwide section__header" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"contrast","className":"has-heading-font","fontSize":"small"} -->
		<p class="has-heading-font has-contrast-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500"><span class="has-brackets"><?php echo esc_html_x( 'My work', 'Latest projects section small title', 'avi' ); ?></span></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"xxxxxx-large"} -->
		<h2 class="wp-block-heading alignwide has-xxxxxx-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php echo wp_kses_post( _x( '<em>Recent</em> <br>Projects', 'Latest projects section title', 'avi' ) ); ?></h2>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"className":"section__content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group section__content">
		<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"uk-project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"uk-portfolio__query"} -->
		<div class="wp-block-query alignwide uk-portfolio__query">
			<!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"normal"} /-->

					<!-- wp:post-date {"format":"M, Y","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"className":"section__footer","layout":{"type":"default"}} -->
	<div class="wp-block-group section__footer" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"has-icon is-style-outline"} -->
			<div class="wp-block-button has-icon is-style-outline">
				<a class="wp-block-button__link wp-element-button" href="portfolio"><span class="button__text"><?php echo esc_html_x( 'Browse all', 'Latest projects section button text', 'avi' ); ?></span><span class="button__icon"><?php echo esc_html_x( '↗', 'Latest projects section button icon', 'avi' ); ?></span></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
