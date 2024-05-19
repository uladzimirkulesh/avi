<?php
/**
 * Title: Contact me page
 * Slug: avi/page-contact-me
 * Categories: page, avi-theme
 * Keywords: contact
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>

<!-- wp:group {"align":"wide","className":"content--contact-me grid","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide content--contact-me grid">
	<!-- wp:heading {"level":1,"align":"wide","fontSize":"xxxxxxx-large"} -->
	<h1 class="wp-block-heading alignwide has-xxxxxxx-large-font-size"><em><?php echo esc_html_x( 'Contact me', 'Contact me page title', 'avi' ); ?></em></h1>
	<!-- /wp:heading -->

	<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide" style="margin-bottom:var(--wp--preset--spacing--50)"/>
	<!-- /wp:separator -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"className":"grid__block","layout":{"type":"default"}} -->
	<div class="wp-block-group grid__block" style="margin-top:0">
		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","className":"has-heading-font","fontSize":"x-large"} -->
		<p class="has-heading-font has-contrast-color has-text-color has-link-color has-x-large-font-size"><?php echo wp_kses_post( _x( 'If you have any questions or just want to talk to me, I would love to hear from you. Just send me a message: say <a href="mailto:hello@uladzimirkulesh.com" target="_blank">hello@uladzimirkulesh.com</a>.', 'Contact me page text', 'avi' ) ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"xxxx-large"} -->
		<h5 class="wp-block-heading has-xxxx-large-font-size" style="margin-top:var(--wp--preset--spacing--50)"><em><?php echo esc_html_x( 'Or follow me', 'Contact me page subtitle', 'avi' ); ?></em></h5>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|contrast"}}}},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"contrast"} -->
		<p class="has-contrast-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20)"><?php echo wp_kses_post( _x( '<a href="https://www.instagram.com/uladzimir.kulesh/" target="_blank" rel="noreferrer noopener">Instagram</a>', 'Contact me page social links', 'avi' ) ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|contrast"}}}},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"textColor":"contrast"} -->
		<p class="has-contrast-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--10)"><?php echo wp_kses_post( _x( '<a href="https://t.me/uladzimir_kulesh" target="_blank" rel="noreferrer noopener">Telegram</a>', 'Contact me page social links', 'avi' ) ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|contrast"}}}},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"textColor":"contrast"} -->
		<p class="has-contrast-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--10)"><?php echo wp_kses_post( _x( '<a href="https://github.com/uladzimirkulesh" target="_blank" rel="noreferrer noopener">GitHub</a>', 'Contact me page social links', 'avi' ) ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
