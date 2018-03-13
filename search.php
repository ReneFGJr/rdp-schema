        <?php
        /**
         *  The template for displaying Search.
         *
         *  @package lawyeria-lite
         */
        get_header();
    ?>

<?php
require ("view/banner.php");
?>
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-9" style="border: 1px solid #000000;">        
             <h3>
                <?php 'Resultado para: ' . the_search_query(); ?>
             </h3><!--/h3-->
             
             <div id="posts">
                    <?php
                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                        $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                    ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                        <h3 class="post-title">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a><!--/a-->
                        </h3><!--/h3 .post-title-->
                        <div class="post-meta">
                            <span>
                                <i><?php echo get_the_date(); ?> - <?php _e('Posted by:', 'lawyeria-lite'); ?> <?php the_author_posts_link(); ?> - <?php _e('In category:', 'lawyeria-lite'); ?> <?php the_category(', '); ?> - <a href="<?php the_permalink(); ?>#comments-template" title="<?php comments_number(__('No responses', 'lawyeria-lite'), __('One comment', 'lawyeria-lite'), __('% comments', 'lawyeria-lite')); ?>"><?php comments_number(__('No responses', 'lawyeria-lite'), __('One comment', 'lawyeria-lite'), __('% comments', 'lawyeria-lite')); ?></a></i>
                            </span><!--/span-->
                        </div><!--/div .post-meta-->
                        <?php
                            if ( $feat_image != NULL ) { ?>
                                <div class="post-image">
                                    <img src="<?php echo $feat_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                </div><!--/.post-image-->
                            <?php } ?>
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div><!--/div .post-excerpt-->
                        
                        <a href="<?php the_permalink(); ?>" title="Read More" class="read-more">
                            <span><?php _e('Read More', 'lawyeria-lite'); ?></span>
                        </a><!--/a .read-more-->
                    </div><!--/div .post-->
                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.', 'lawyeria-lite'); ?></p>
                    <?php endif; ?>
                </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>            
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
        <?php get_footer(); ?>