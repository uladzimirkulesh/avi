<?php
/**
 * Title: List of posts, 4 columns
 * Slug: avi/posts-4-col
 * Categories: query, avi-theme
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"className":"alignwide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":4}} -->
		<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"className":"tall"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"1rem","margin":{"bottom":"0.5rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:0.5rem">
			<!-- wp:post-terms {"term":"category"} /-->
			<!-- wp:post-date {"format":"M j, Y","isLink":true} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-large"} /-->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:pattern {"slug":"avi/hidden-no-results"} /-->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
