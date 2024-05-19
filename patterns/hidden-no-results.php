<?php
/**
 * Title: Hidden no results content
 * Slug: avi/hidden-no-results
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'avi' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'Label', 'avi' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search...', 'Placeholder for search field', 'avi' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'avi' ); ?>"} /-->
</div>
<!-- /wp:group -->
