<?php
/**
 * Title: Landing page hero section
 * Slug: avi/section-landing-hero
 * Categories: text, avi-theme
 * Keywords: text, hero
 */
?>

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|30"}}},"className":"section section--landing-hero js-animation--hero-bg-parallax","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"bottom"}} -->
<section class="wp-block-group alignfull section section--landing-hero js-animation--hero-bg-parallax" id="section-landing-hero" style="margin-bottom:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"backgroundColor":"base","className":"section__bg-image","layout":{"type":"constrained"}} -->
	<div class="wp-block-group section__bg-image has-base-background-color has-background">
		<!-- wp:image {"align":"full","sizeSlug":"full","className":"js-animation--hero-img-parallax"} -->
		<figure class="wp-block-image alignfull size-full js-animation--hero-img-parallax">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/landing-hero-img.webp" alt=""/>
		</figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"section__content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group section__content">
		<!-- wp:group {"align":"wide","className":"section__block grid","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide section__block grid">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"contrast","className":"has-heading-font","fontSize":"small"} -->
			<p class="has-heading-font has-contrast-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500"><span class="has-brackets"><?php echo esc_html_x( 'Who I am', 'Hero section small title', 'avi' ); ?></span></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"contrast","className":"has-heading-font","fontSize":"xx-large"} -->
			<p class="has-heading-font has-contrast-color has-text-color has-link-color has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php echo wp_kses_post( _x( 'Web designer and <br>developer', 'Hero section small text', 'avi' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"xxxxxxx-large"} -->
			<h1 class="wp-block-heading alignwide has-xxxxxxx-large-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php echo wp_kses_post( _x( '<em>Uladzimir</em> <br>Kulesh', 'Hero section title', 'avi' ) ); ?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
