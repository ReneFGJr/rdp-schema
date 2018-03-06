<?php
/**
 *  The template for displaying 404.
 */
?>
<div class="content-fluid full_banner">
    <div class="row">
        <div class="col-md-1 col-md-offset-1" style="border-right: 1px solid #fff;">
            <h1 style="font-size: 400%;">&nbsp;</h1>
        </div>
        <div class="col-md-10">
            <a href="<?php the_permalink(); ?>" style="color: white;"><h1><?php the_title(); ?></h1></a>
            	<span class="post_author">
                   <?php _e('Postado por:', ''); ?> <?php the_author_posts_link(); ?>
                   <?php _e('Postado por:', ''); ?> <?php the_author_posts_link(); ?>
                </span>
                </br>
                <!------------------- DATA ------------->   
                <span class="post_data">
                Em: <?php echo get_the_date(); ?>
                </span>            
        </div>        
    </div>
</div>

