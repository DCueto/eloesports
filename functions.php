<?php 	

define('TEMPPATH', get_bloginfo('stylesheet_directory'));
define('IMAGES', TEMPPATH. "/img");
add_theme_support('nav-menus');
if(function_exists ('register_nav_menus')){
  register_nav_menus(
      array('main' => 'Main Nav')
    );
}

add_action('add_meta_boxes', 'gima_metabox_cb');
function gima_metabox_cb(){
    add_meta_box('my-meta-box-3', 'Datos adicionales del libro', 'gima_metabox_cb', 'libro', 'normal');

}


?>