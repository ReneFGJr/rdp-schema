<style>
    .custom-logo {
        width: 100%;
        max-width: 100%;
    }
</style>
<br><br><br>
<div class="container-fluid full_header" style="margin-bottom: 30px;">
	<div class="row">
		<div class="col-md-1 col-md-offset-2">
		    <?php
            twentysixteen_the_custom_logo();
		    ?>
	    </div>
		<div class="col-md-7">   
		            <?php if ( is_front_page() && is_home() ) : ?>
                       <span class="full_header_h"><?php bloginfo('name'); ?></span>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                    <?php
                    endif;
                    $description = get_bloginfo( 'description', 'display' );
                    ?> 
			         <p><?php echo $description; ?></p>
		</div>
	</div>
</div>
