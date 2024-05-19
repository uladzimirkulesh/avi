<?php
/**
 * Title: About me page
 * Slug: avi/page-about-me
 * Categories: page, avi-theme
 * Keywords: about
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>

<!-- wp:heading {"level":1,"align":"wide","fontSize":"xxxxxxx-large"} -->
<h1 class="wp-block-heading alignwide has-xxxxxxx-large-font-size"><em><?php echo esc_html_x( 'About me', 'About me page title', 'avi' ); ?></em></h1>
<!-- /wp:heading -->

<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide" style="margin-bottom:var(--wp--preset--spacing--50)"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","className":"content--about-me grid","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide content--about-me grid">
	<!-- wp:group {"className":"grid__block grid__block--left","layout":{"type":"constrained"}} -->
	<div class="wp-block-group grid__block grid__block--left"><!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Hello, I’m Uladzimir. I’m web designer and developer.', 'About me page text', 'avi' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'I am developing themes for WordPress and have more than 10 years of development experience. Since 2016, I have been an author on Themeforest.', 'About me page text', 'avi' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"grid__block grid__block--right","layout":{"type":"constrained"}} -->
	<div class="wp-block-group grid__block grid__block--right">
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'I took a short break in 2020 because my wife and I decided to move to another country. Now we live and work in the Czech Republic and I decided to return to my favorite pastime – developing website design.', 'About me page text', 'avi' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Here on the site I write about web development, my life in the Czech Republic and traveling around Europe.', 'About me page text', 'avi' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Welcome!', 'About me page text', 'avi' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"className":"grid__block grid__block--bottom","layout":{"type":"constrained"}} -->
	<div class="wp-block-group grid__block grid__block--bottom" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","style":{"border":{"radius":"0.375rem"}}} -->
		<figure class="wp-block-image size-full has-custom-border">
			<img alt="" style="border-radius:0.375rem;aspect-ratio:3/4;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:buttons {"layout":{"type":"flex"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"width":100,"className":"has-icon is-style-outline"} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100 has-icon is-style-outline">
				<a class="wp-block-button__link wp-element-button" href="/contact"><span class="button__text"><?php echo esc_html_x( 'Contact me', 'About me page button text', 'avi' ); ?></span><span class="button__icon"><?php echo esc_html_x( '↗', 'About me page button icon', 'avi' ); ?></span></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
