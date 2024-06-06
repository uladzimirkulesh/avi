<?php
/**
 * Title: List of projects, 2 columns
 * Slug: avi/projects-2-col
 * Categories: query, portfolio, avi-theme
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"uk-project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"align":"wide","className":"uk-portfolio__query"} -->
<div class="wp-block-query alignwide uk-portfolio__query">
	<!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->

		<!-- wp:group {"metadata":{"name":"Meta"},"className":"entry-meta","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group entry-meta">
			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"normal"} /-->

			<!-- wp:post-date {"format":"M, Y","fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
