<?php
/**
 *  The template for displaying 404.
 *
 *  @package lawyeria-lite
 */
get_header();
?>
<div class="content-fluid full_banner">
    <div class="row">
        <div class="col-md-1 col-md-offset-1" style="border-right: 1px solid #fff;">
            <h1 style="font-size: 400%;">&nbsp;</h1>
        </div>
        <div class="col-md-10">
            <a href="<?php the_permalink(); ?>" style="color: white;"><h1><?php the_title(); ?></h1></a>
        </div>        
    </div>
</div>

