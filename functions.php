<?php 	

define('TEMPPATH', get_bloginfo('stylesheet_directory'));
define('IMAGES', TEMPPATH. "/img");

//Activa opción de miniaturas

add_theme_support('post-thumbnails');

add_image_size('my-size', 720, 388, true);


add_theme_support('nav-menus');
if(function_exists ('register_nav_menus')){
  register_nav_menus(
      array('menu-header' => 'Menú del header')
    );
}

// METABOX FRASE


add_filter( 'rwmb_meta_boxes', 'elo_register_meta_boxes' );
function elo_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'frase',
        'title'      => __( 'Frase destacada', 'textdomain' ),
        'post_types' => array( 'post', 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => __( 'Frase destacada', 'textdomain' ),
                'desc'  => 'Introduce la frase destacada del post',
                'id'    => $prefix . 'frased',
                'type'  => 'textarea',
                //'std'   => 'Frase destacada',
                'class' => 'custom-class',
            ),
        )
    );
    return $meta_boxes;
}

?>