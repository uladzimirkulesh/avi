<?php
/**
 * Title: Latest posts section
 * Slug: avi/section-latest-posts
 * Categories: query, avi-theme
 * Block Types: core/query
 */
?>

<!-- wp:group {"tagName":"section","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|70"}}},"className":"section section--latest-posts","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--latest-posts" id="section-latest-posts" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"tagName":"header","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"className":"section__header","layout":{"type":"default"}} -->
	<header class="wp-block-group alignwide section__header" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"contrast","className":"has-heading-font","fontSize":"small"} -->
		<p class="has-heading-font has-contrast-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500"><span class="has-brackets"><?php echo esc_html_x( 'My blog', 'Latest posts section small title', 'avi' ); ?></span></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"xxxxxx-large"} -->
		<h2 class="wp-block-heading alignwide has-xxxxxx-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php echo wp_kses_post( _x( '<em>Latest</em> <br>Articles', 'Latest posts section title', 'avi' ) ); ?></h2>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"className":"section__content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group section__content">
		<!-- wp:query {"query":{"perPage":"8","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
				<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"className":"tall"} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"1rem","margin":{"bottom":"0.5rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-bottom:0.5rem">
					<!-- wp:post-terms {"term":"category"} /-->
					<!-- wp:post-date {"format":"M j, Y","isLink":true} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-large"} /-->
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
				<a class="wp-block-button__link wp-element-button" href="blog"><span class="button__text"><?php echo esc_html_x( 'Read all', 'Latest projects section button text', 'avi' ); ?></span><span class="button__icon"><?php echo esc_html_x( '↗', 'Latest projects section button icon', 'avi' ); ?></span></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
