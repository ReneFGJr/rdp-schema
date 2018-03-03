<?php
if (function_exists('register_sidebar')) {
    register_sidebar(array('name' => __('NOME PARA A SUA SIDEBAR'), 'id' => 'sidebar-1', 'description' => __('Breve descrição sobre esta SIDEBAR.'), 'before_title' => '<h1>', 'after_title' => '</h1>', ));
}

/********login************/
function my_login_logo() { 
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo_RDP-5.svg);
            height:130px;
            width:480px;
            margin-left: -120px;
            background-size: 620px 130px;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
    <?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


/******************************** Initialize the update checker.**************************/
require 'theme-updates/theme-update-checker.php';
$example_update_checker = new ThemeUpdateChecker(
    'example-theme',                                            //Theme folder name, AKA "slug". 
    'http://w-shadow.com/files/example-theme-updates/info.json' //URL of the metadata file.
);
?>