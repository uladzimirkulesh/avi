<?php
/**
 * Title: Services section
 * Slug: avi/section-services
 * Categories: text, avi-theme
 * Keywords: text, services
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section Services"},"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"className":"section section--services","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--services" id="section-services" style="margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"Section header"},"className":"section__header","layout":{"type":"default"}} -->
	<div class="wp-block-group section__header">
		<!-- wp:heading {"fontSize":"xxxxx-large"} -->
		<h2 class="wp-block-heading has-xxxxx-large-font-size"><?php echo esc_html_x( 'I can help you with...', 'Services section title', 'avi' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Section content"},"style":{"spacing":{"blockGap":"0"}},"className":"section__content grid","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content grid">
		<!-- wp:group {"metadata":{"name":"Services item"},"style":{"border":{"left":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|30"}}},"className":"services__item","layout":{"type":"default"}} -->
		<div class="wp-block-group services__item" style="border-left-color:var(--wp--preset--color--contrast-4);border-left-style:solid;border-left-width:1px;padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}},"typography":{"lineHeight":"1"}},"textColor":"contrast-3","fontSize":"xxxxx-large"} -->
			<p class="has-contrast-3-color has-text-color has-link-color has-xxxxx-large-font-size" style="line-height:1"><?php echo esc_html_x( '01', 'Services section item number', 'avi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php echo esc_html_x( 'Design', 'Services section item title', 'avi' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'Elevate your brand with custom web designs that captivate your audience and deliver the perfect user experience.', 'Services section item text', 'avi' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Services item"},"style":{"border":{"left":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|30"}}},"className":"services__item","layout":{"type":"default"}} -->
		<div class="wp-block-group services__item" style="border-left-color:var(--wp--preset--color--contrast-4);border-left-style:solid;border-left-width:1px;padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}},"typography":{"lineHeight":"1"}},"textColor":"contrast-3","fontSize":"xxxxx-large"} -->
			<p class="has-contrast-3-color has-text-color has-link-color has-xxxxx-large-font-size" style="line-height:1"><?php echo esc_html_x( '02', 'Services section item number', 'avi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php echo esc_html_x( 'Development', 'Services section item title', 'avi' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'I craft tailor-made websites that flawlessly blend with your design, from start to finish.', 'Services section item text', 'avi' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Services item"},"style":{"border":{"left":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}},"spacing":{"padding":{"left":"var:preset|spacing|30"}}},"className":"services__item","layout":{"type":"default"}} -->
		<div class="wp-block-group services__item" style="border-left-color:var(--wp--preset--color--contrast-4);border-left-style:solid;border-left-width:1px;padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}},"typography":{"lineHeight":"1"}},"textColor":"contrast-3","fontSize":"xxxxx-large"} -->
			<p class="has-contrast-3-color has-text-color has-link-color has-xxxxx-large-font-size" style="line-height:1"><?php echo esc_html_x( '03', 'Services section item number', 'avi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php echo esc_html_x( 'The full package', 'Services section item title', 'avi' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'Unleash the full potential of your website with a winning combination of brand identity and functional features.', 'Services section item text', 'avi' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
