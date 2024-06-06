<?php
/**
 * Title: Recent projects section
 * Slug: avi/section-recent-projects
 * Categories: query, portfolio, avi-theme
 * Block Types: core/query
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section Recent Projects"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|70"}}},"className":"section section--recent-projects","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--recent-projects" id="section-recent-projects" style="margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"tagName":"header","metadata":{"name":"Section header"},"className":"section__header","layout":{"type":"default"}} -->
	<header class="wp-block-group section__header">
		<!-- wp:heading {"fontSize":"xxxxx-large"} -->
		<h2 class="wp-block-heading has-xxxxx-large-font-size"><?php echo esc_html_x( 'Recent Projects', 'Recent projects section title', 'avi' ); ?></h2>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Section content"},"className":"section__content","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content">
		<!-- wp:query {"query":{"perPage":"4","pages":0,"offset":0,"postType":"uk-project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide","className":"uk-portfolio__query"} -->
		<div class="wp-block-query alignwide uk-portfolio__query">
			<!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->

				<!-- wp:group {"metadata":{"name":"Meta"},"className":"entry-meta","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group entry-meta">
					<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"medium"} /-->

					<!-- wp:post-date {"format":"M, Y","style":{"typography":{"fontSize":"0.9375rem"}}} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"footer","metadata":{"name":"Section footer"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"className":"section__footer","layout":{"type":"default"}} -->
	<footer class="wp-block-group section__footer" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/portfolio/"><?php echo esc_html_x( 'Browse All', 'Recent projects section button text', 'avi' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</footer>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
