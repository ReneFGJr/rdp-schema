</div><!-- #page -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			&nbsp;
		</div>
		<div class="col-md-12">
			&nbsp;
		</div>
	</div>
</div>

<div class="container-footer full_footer">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<img class="img-responsive" src="<?php echo get_site_url(); ?>/wp-content/themes/rdp-schema/img/logos/logo_rdp.png">
			</div>
			<div class="col-md-2">
				<img class="img-responsive" src="<?php echo get_site_url(); ?>/wp-content/themes/rdp-schema/img/logos/logo_rnp.png" height="100">
			</div>
			<div class="col-md-2">
				<img class="img-responsive" src="<?php echo get_site_url(); ?>/wp-content/themes/rdp-schema/img/logos/logo_ibict.png" height="100">
			</div>

			<div class="col-md-2 col-md-offset-2">
				<h4>Sobre</h4>
				<?php wp_nav_menu(array('menu' => 'FootAbout')); ?>
            </div>

            <div class="col-md-2">
				<h4>Grupos</h4>
				<?php wp_nav_menu(array('menu' => 'FootGroups')); ?>
            </div>
		</div>

		<?php wp_footer(); ?>
		</body>
		</html>
