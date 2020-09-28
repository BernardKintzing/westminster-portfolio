<?php

/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage UHLC
 * @since 1.0.0
 */

get_header();
?>


<main id="site-content" role="main">
	<div id="wrapper">
		<div id="inner">
			<?php

			if (have_posts()) {

				while (have_posts()) {
					the_post();

					get_template_part('template-parts/content', get_post_type());
				}
			}

			?>
		</div>
		<?php get_footer(); ?>
	</div>
</main><!-- #site-content -->