<?php
/**
 * Title: Process section
 * Slug: avi/section-process
 * Categories: text, avi-theme
 * Keywords: text, process
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Section Process"},"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"className":"section section--process","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--process" id="section-process" style="margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"Section header"},"className":"section__header","layout":{"type":"default"}} -->
	<div class="wp-block-group section__header">
		<!-- wp:heading {"fontSize":"xxxxx-large"} -->
		<h2 class="wp-block-heading has-xxxxx-large-font-size"><?php echo esc_html_x( 'Working Process', 'Process section title', 'avi' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Section content"},"style":{"spacing":{"blockGap":"0"}},"className":"section__content grid","layout":{"type":"default"}} -->
	<div class="wp-block-group section__content grid">
		<!-- wp:group {"metadata":{"name":"Process item"},"style":{"spacing":{"padding":{"left":"var:preset|spacing|30"}},"border":{"left":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}}},"className":"process__item","layout":{"type":"default"}} -->
		<div class="wp-block-group process__item" style="border-left-color:var(--wp--preset--color--contrast-4);border-left-style:solid;border-left-width:1px;padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php echo esc_html_x( '01. Strategy', 'Process section item title', 'avi' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'By identifying and embracing your brand\'s core values, we will create an authentic and consistent brand image that will resonate with consumers and set you apart from competitors. Let these values guide your organization to success.', 'Process section item text', 'avi' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Process item"},"style":{"spacing":{"padding":{"left":"var:preset|spacing|30"}},"border":{"left":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}}},"className":"process__item","layout":{"type":"default"}} -->
		<div class="wp-block-group process__item" style="border-left-color:var(--wp--preset--color--contrast-4);border-left-style:solid;border-left-width:1px;padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php echo esc_html_x( '02. Execution', 'Process section item title', 'avi' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'After conducting thorough research, we will explore various strategic design solutions. We will present multiple routes and further develop the selected option. This will involve creating wireframes, animations and interactions.', 'Process section item text', 'avi' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Process item"},"style":{"spacing":{"padding":{"left":"var:preset|spacing|30"}},"border":{"left":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}}},"className":"process__item","layout":{"type":"default"}} -->
		<div class="wp-block-group process__item" style="border-left-color:var(--wp--preset--color--contrast-4);border-left-style:solid;border-left-width:1px;padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php echo esc_html_x( '03. Launch', 'Process section item title', 'avi' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'This is the phase were we craft a launch communication plan that outlines key messages and personalizes them for the specific audience. Keeping the future of the brand in mind by following brand guidelines.', 'Process section item text', 'avi' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
