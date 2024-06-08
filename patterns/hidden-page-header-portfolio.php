<?php
/**
 * Title: Portfolio Page Header
 * Slug: avi/hidden-page-header-portfolio
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"header","metadata":{"name":"Page header"},"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"className":"page-header grid","layout":{"type":"default"}} -->
<header class="wp-block-group alignwide page-header grid" style="margin-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading"><?php echo esc_html_x( 'Portfolio', 'Portfolio page header title', 'avi' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( 'My passion lies in crafting interfaces that not only work seamlessly, but also evoke emotions and establish a strong bond between your brand and your users.', 'Portfolio page header text', 'avi' ); ?></p>
	<!-- /wp:paragraph -->
</header>
<!-- /wp:group -->
