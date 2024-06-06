<?php
/**
 * Title: Latest articles section
 * Slug: avi/section-latest-articles
 * Categories: query, avi-theme
 * Block Types: core/query
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section Latest Articles"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|70"}}},"className":"section section--latest-articles","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--latest-articles" id="section-latest-articles" style="margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"tagName":"header","metadata":{"name":"Section header"},"className":"section__header","layout":{"type":"default"}} -->
	<header class="wp-block-group section__header">
		<!-- wp:heading {"fontSize":"xxxxx-large"} -->
		<h2 class="wp-block-heading has-xxxxx-large-font-size"><?php echo esc_html_x( 'Latest Articles', 'Latest articles section title', 'avi' ); ?></h2>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Section content"},"className":"section__content grid","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content grid">
		<!-- wp:query {"query":{"perPage":"7","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"layout":{"type":"default"}} -->
		<div class="wp-block-query">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
				<!-- wp:columns {"verticalAlignment":"center","style":{"border":{"bottom":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}},"spacing":{"blockGap":{"top":"0.5rem","left":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
				<div class="wp-block-columns are-vertically-aligned-center" style="border-bottom-color:var(--wp--preset--color--contrast-4);border-bottom-style:solid;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%">
						<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.33333"}},"fontSize":"x-large"} /-->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%">
						<!-- wp:post-date {"format":"M j, Y","style":{"typography":{"fontSize":"0.9375rem"}}} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/blog/"><?php echo esc_html_x( 'Read All', 'Latest articles section button text', 'avi' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
