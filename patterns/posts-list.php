<?php
/**
 * Title: List of posts
 * Slug: avi/posts-list
 * Categories: query, avi-theme
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[]},"align":"wide","className":"grid","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide grid">
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

	<!-- wp:query-pagination -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:pattern {"slug":"avi/hidden-no-results"} /-->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
