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

<?php require("view/banner.php");
?>
<div class="container" style="margin-top: 30px;">
	<div class="row">
		<div class="col-md-9">
			<main id="main" class="site-main" role="main">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 <?php the_content(); ?>
            <?php endwhile; endif; ?>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>            
			</main><!-- .site-main -->
		</div>
		<?php get_sidebar(); ?>
		<div class="col-md-3"></div>
	</div>
</div>

<?php
get_footer();
