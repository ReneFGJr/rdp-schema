<?php
/**
 *  The template for displaying Single.
 *
 *  @package lawyeria-lite
 */
get_header();
?>
<div class="container" style="margin-top: 100px;">
    <div class="row" class="border">
        <div class="col-md-9 border">
            <div id="posts">
                <h2><?php the_title(); ?></h2>
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                   $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            ?>            
            <!------------------- POST ------------->
            <div class="posted">
                <div class="post-meta">
                    <div class="row">                    
                    <!------------------- AUTHOR ------------->
                    <div class="col-md-6">
                        <span class="post_author">
                            <?php _e('Postado por:', ''); ?> <?php the_author_posts_link(); ?>
                        </span>
                        <br>
                        <!------------------- DATA ------------->   
                        <span class="post_data">
                        Em: <?php echo get_the_date(); ?>
                        </span>
                                             
                     </div>
                     
                     <!------------------- CATEGORY ------------->
                     <div class="col-md-6 text-right">                      
                     <?php _e('Na categoria:', 'lawyeria-lite'); ?> <?php the_category(', '); ?> - <a href="#comments-template" title="<?php comments_number(__('No responses', 'lawyeria-lite'), __('One comment', 'lawyeria-lite'), __('% comments', 'lawyeria-lite')); ?>"><?php comments_number('No responses', 'One comment', '% comments'); ?></a>
                     </span><!--/span-->
                     </div>
                </div><!--/div .post-meta-->
            </div>
            <hr class="post_hr">
                <div class="post">
                <?php
                if ( $feat_image != NULL ) { ?>
                [<img src="<?php echo $feat_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />]
                <?php } ?>
                
                <?php the_content(); ?>
                </div><!--/div .post-excerpt-->

                <?php
                wp_link_pages(array('before' => '<div class="post-links"><span class="post-links-title">' . __('Pages:', 'lawyeria-lite') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>', ));
                ?>
 
                <div class="post-tags">
                <?php the_tags('<span>Tags:</span> '); ?>
                </div><!--/div .post-tags-->
 
                <div class="single-navigation cf">
                <?php next_post_link('%link', 'Próximo Post >', true); ?>
                <?php previous_post_link('%link', '<< Post Anterior', true); ?>
                </div><!--/div .single-navigation .cf-->
                
                <!------------------------- comment ------------->
                <a name="comments-template"></a>                
                <div class="post_comments">
                    <?php comments_template(); ?>
                </div>
            </div><!--/div .post-->
            
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.', 'lawyeria-lite'); ?></p>
            <?php endif; ?>
        </div><!--/div #posts-->
                
    </div><!--/div .wrapper-->
    <div class="col-md-3 border sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>