<?php
/**
 * Title: Contact page
 * Slug: avi/page-contact
 * Categories: page, avi-theme
 * Keywords: contact
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>

<!-- wp:group {"metadata":{"name":"Page contact"},"align":"wide","style":{"spacing":{"blockGap":"0"}},"className":"page-contact grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide page-contact grid">
	<!-- wp:group {"metadata":{"name":"Contact info"},"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"className":"contact-info","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
	<div class="wp-block-group contact-info">
		<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
		<h1 class="wp-block-heading has-contrast-color has-text-color has-link-color"><?php echo esc_html_x( 'Whether it\'s a conversation about all things design or thinking about a potential project or opportunity, get in touch.', 'Contact page pattern text', 'avi' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:group {"metadata":{"name":"Contact blok"},"style":{"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|10"}}},"className":"contact-block","layout":{"type":"default"}} -->
		<div class="wp-block-group contact-block" style="padding-bottom:var(--wp--preset--spacing--10)">
			<!-- wp:group {"metadata":{"name":"Contact block item"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}}},"className":"contact-block__item","layout":{"type":"default"}} -->
			<div class="wp-block-group contact-block__item" style="border-top-color:var(--wp--preset--color--contrast-4);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":6,"fontSize":"x-large"} -->
				<h6 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Contacts', 'Contact us page pattern contacts block title', 'avi' ); ?></h6>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
				<p style="margin-top:var(--wp--preset--spacing--10)"><?php echo wp_kses_post( _x( '<a href="mailto:#">hello@davegearhart.com</a>', 'Contact page pattern contacts block text', 'avi' ) ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
				<p style="margin-top:0"><?php echo wp_kses_post( _x( '<a href="tel:#">+44 209 555 014</a>', 'Contact page pattern contacts block text', 'avi' ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Contact block item"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}}},"className":"contact-block__item","layout":{"type":"default"}} -->
			<div class="wp-block-group contact-block__item" style="border-top-color:var(--wp--preset--color--contrast-4);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":6,"fontSize":"x-large"} -->
				<h6 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Adress', 'Contact page pattern adress block title', 'avi' ); ?></h6>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
				<p style="margin-top:var(--wp--preset--spacing--10)"><?php echo wp_kses_post( _x( '2118 Thornridge Cir. Syracuse,<br>Connecticut 35624', 'Contact page pattern adress block text', 'avi' ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"Contact block item"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}}},"className":"contact-block__item","layout":{"type":"default"}} -->
			<div class="wp-block-group contact-block__item" style="border-top-color:var(--wp--preset--color--contrast-4);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":6,"fontSize":"x-large"} -->
				<h6 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Socials', 'Contact page pattern socials block title', 'avi' ); ?></h6>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
				<p style="margin-top:var(--wp--preset--spacing--10)"><?php echo wp_kses_post( _x( '<a href="#" target="_blank" rel="noreferrer noopener">Instagram</a>', 'Contact page pattern socials block link', 'avi' ) ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
				<p style="margin-top:0"><?php echo wp_kses_post( _x( '<a href="#" target="_blank" rel="noreferrer noopener">Telegram</a>', 'Contact page pattern socials block link', 'avi' ) ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
				<p style="margin-top:0"><?php echo wp_kses_post( _x( '<a href="#" target="_blank" rel="noreferrer noopener">GitHub</a>', 'Contact page pattern socials block link', 'avi' ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Contact image"},"style":{"spacing":{"blockGap":"0"}},"className":"contact-image","layout":{"type":"default"}} -->
	<div class="wp-block-group contact-image">
		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full"} -->
		<figure class="wp-block-image size-full"><img alt="" style="aspect-ratio:3/4;object-fit:cover"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
