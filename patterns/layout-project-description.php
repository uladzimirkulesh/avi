<?php
/**
 * Title: Project description layout
 * Slug: avi/layout-project-description
 * Categories: portfolio, avi-theme
 * Keywords: project, project, description
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"project__description","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide project__description" style="margin-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"layout":{"selfStretch":"fixed","flexSize":"40%"}},"textColor":"contrast","fontSize":"xx-large"} -->
			<p class="has-contrast-color has-text-color has-link-color has-xx-large-font-size"><?php echo esc_html_x( 'Ex vitae optio et voluptatem aperiam eum totam voluptas. Aut ullam sequi est cumque soluta.', 'Project description large text', 'avi' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"60%"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'Eos consequatur officiis sed laboriosam temporibus cum sint voluptatem ut magni consequuntur et labore neque quo sapiente libero. 33 iste ipsa et quia corrupti ea molestiae quidem. Ad voluptas rerum et aspernatur explicabo aut eius quia aut debitis necessitatibus aut quaerat dolor et fugiat sunt ea consequuntur consectetur.', 'Project description text', 'avi' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html_x( 'Sit accusantium facilis eos totam dolore est vero amet qui molestiae voluptas aut repudiandae animi nam quia cupiditate. Qui consequatur quaerat et veritatis quod ex similique modi ut eius Quis vel explicabo deserunt et impedit perspiciatis. Vel blanditiis adipisci qui nihil asperiores aut quibusdam illo vel praesentium rerum non soluta debitis.', 'Project description text', 'avi' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
