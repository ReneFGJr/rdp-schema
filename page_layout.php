<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header();
?>
<div class="container" style="margin-top: 30px;">
	<div class="row">
		<div class="col-md-9">
			<main id="main" class="site-main" role="main">
				<?php
				// Start the loop.
				while (have_posts()) : the_post();

					// Include the page content template.
					get_template_part('template-parts/content', 'page');

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) {
						comments_template();
					}

					// End of the loop.
				endwhile;
				?>
				xxxxxxxxxxxxx
				<br>
				xxxxxxxxxxxxx
				<br>
				xxxxxxxxxxxxx
				<br>
				xxxxxxxxxxxxx
				<br>
				x PAGE xxxxxx
				<br>
				xxxxxxxxxxxxx
				<br>

			</main><!-- .site-main -->
		</div>
		<?php get_sidebar(); ?>
		<div class="col-md-3"></div>
	</div>
</div>

<?php
get_footer();
