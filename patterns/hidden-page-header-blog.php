<?php
/**
 * Title: Blog Page Header
 * Slug: avi/hidden-page-header-blog
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"header","metadata":{"name":"Page header"},"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"className":"page-header grid","layout":{"type":"default"}} -->
<header class="wp-block-group alignwide page-header grid" style="margin-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading"><?php echo esc_html_x( 'Blog', 'Blog page header title', 'avi' ); ?></h1>
	<!-- /wp:heading -->
</header>
<!-- /wp:group -->
