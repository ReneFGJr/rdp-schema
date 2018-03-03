<nav id="topmenu" class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div>
          <div style="float: left;">
              <img src="<?php echo home_url(); ?>/wp-content/themes/rdp-schema/img/logos_brasil_blue.png" style="height: 42px;">
          </div>
          <div style="float: left;">      
              <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('wp_title');?></a>
          </div>
      </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php wp_nav_menu( array( 'menu' => 'TopMenu', 'menu_class' => 'nav navbar-nav' ) ); ?>      
      <ul class="nav navbar-nav navbar-right">
        <li><?php get_search_form( $echo = true ); ?></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
