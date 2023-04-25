<?php

// Registrar menú de navegación
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'boxcss' ),
) );

// Thumbnail Support
add_theme_support( 'post-thumbnails' );
//Default WordPress
the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)
the_post_thumbnail( 'medium' );        // Medium resolution (300 x 300 max height 300px)
the_post_thumbnail( 'medium_large' );  // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
the_post_thumbnail( 'large' );         // Large resolution (1024 x 1024 max height 1024px)
the_post_thumbnail( 'full' );          // Full resolution (original size uploaded)

//With WooCommerce
the_post_thumbnail( 'shop_thumbnail' ); // Shop thumbnail (180 x 180 hard cropped)
the_post_thumbnail( 'shop_catalog' );   // Shop catalog (300 x 300 hard cropped)
the_post_thumbnail( 'shop_single' );    // Shop single (600 x 600 hard cropped)

// Styles
function agregar_recursos() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//code.jquery.com/jquery-latest.min.js', false, null, true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_style( 'boxcss-style', get_stylesheet_uri() );
    wp_enqueue_script( 'boxcss-script', get_template_directory_uri() . '/js/box.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'agregar_recursos' );


add_filter('nav_menu_css_class', 'discard_menu_classes', 10, 2, 9);
function discard_menu_classes($classes, $item) {
    $classes = array_filter( 
        $classes, 
        create_function( '$class', 
                 'return in_array( $class, 
                      array( "current-menu-item", "current-menu-parent" ) );' )
        );
    return array_merge(
        $classes,
        (array)get_post_meta( $item->ID, '_menu_item_classes', true )
        );
    }

    /*Custom Widgets*/

    function smartslider_widgets_init() {
        register_sidebar(array(
            'name'          => 'sidebar #1',
            'id'            => 'sidebar-widget-1',
            'before_widget' => '<div class="sidebar-widget margin-top margin-bottom">',
            'after_widget'  => '</div>'
        ));
        register_sidebar(array(
            'name'          => 'Sidebar #2',
            'id'            => 'sidebar-widget-2',
            'before_widget' => '<div class="sidebar-widget margin-top margin-bottom">',
            'after_widget'  => '</div>'
        ));
        register_sidebar(array(
            'name'          => 'sidebar #3',
            'id'            => 'sidebar-widget-3',
            'before_widget' => '<div class="sidebar-widget margin-top margin-bottom">',
            'after_widget'  => '</div>'
        ));
    }
    add_action( 'widgets_init', 'smartslider_widgets_init' );
    

?>
