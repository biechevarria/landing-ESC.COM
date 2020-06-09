<!-----ACTIVACION DE IMAGEN DESTACADA O THUMNAILS ----->
<?php
add_theme_support( 'post-thumbnails' ); 

//-------------tAMAÑOS DE IMAGEN DESTACADA------------->
the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('mediano');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('mediano alargado');    // Medium Large resolution (default 768px x 0px max)
the_post_thumbnail('larga');           // Large resolution (default 1024px x 1024px max)
the_post_thumbnail('Tamaño original');            // Original image resolution (unmodified)

//TAMAÑOS DE IMAGEN DESTACADA PERSONALIZADOS
add_theme_support( 'esc-featured-image', 2000, 1200, true );
add_theme_support( 'esc-thumbnail-avatar', 100, 100, true );

//----------HABILITAR MENUS DINAMICOS------------->

register_nav_menus( array(
    'top' => __('Top Menu', 'esc'),
    'footer' => __('Footer Menu', 'esc'),

) );

/*---------------AGREGAR CLASES AL MENU PRINCIPAL------------------*/
/*function esc_menu_classes($classes, $item, $args){
    if($args ->theme_location == 'top'){
        $classes[] = 'ml-auto';
    }
    return $classes;
}
add_filter( 'nav_menu_css-class','esc_menu_classes', 1, 3 );*/


