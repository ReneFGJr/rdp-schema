<?php
/**
 * The RDP Theme Site
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://www.ufrgs.br/redd/
 * @package RDP-schema
 * @version 0.18.03.13
 */
$cr = chr(13) . chr(10);
/********************** styles and javascript **********************************************************/
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', false, '3.3.7', 'all');
wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css', false, '0.17.08.09', 'all');
wp_enqueue_script('jquery', get_template_directory_uri() . '/js/query.js', false, '3.2.1', true);
wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', false, '3.3.7', true);
wp_enqueue_script('rdp-schema', get_template_directory_uri() . '/js/rdp-schema.js', false, '1.0.0', true);

plugins_url('myscript.js', __FILE__);

/************************************************************** html ************************************/
echo '<!DOCTYPE html>' . $cr;

echo '
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99096257-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());

  gtag(\'config\', \'UA-99096257-2\');
</script>
';

echo '<html ';
language_attributes();
echo '>' . $cr;

/* head */
echo '<head>' . $cr;

/* title */
echo '<title>';
bloginfo('wp_title');
echo '</title>' . $cr;

/* meta */
echo '<meta charset="';
bloginfo('charset');
echo '">' . $cr;

/* viewport */
echo '<meta name="viewport" content="width=device-width, initial-scale=1">' . $cr;

/* links */
echo '<link rel="stylesheet" href="';
bloginfo('stylesheet_url');
echo '">' . $cr;

echo '<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Titillium+Web" rel="stylesheet">' . $cr;

wp_head();

echo '</head>' . $cr;

/* body */
echo '<body '; body_class(); echo '>' . $cr;

/* TOP MENU */
require ('view/menu_top.php');


?>