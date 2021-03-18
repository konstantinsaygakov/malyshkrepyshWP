<?php
add_action('wp_enqueue_scripts', 'malyshkrepysh_scripts');

function malyshkrepysh_scripts () {
    wp_enqueue_style( 'malyshkrepysh-style', get_stylesheet_uri() );
    /* wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/styles/main.min.css' );
    wp_enqueue_style( 'animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.compat.min.css'); */
    /* wp_enqueue_script('jquery'); */
    wp_enqueue_script( 'malyshkrepyshjquery-scripts', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), null, true );
    wp_enqueue_script( 'malyshkrepysh-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );

    wp_enqueue_script( 'malyshkrepyshslick-scripts', get_template_directory_uri() . '/assets/js/slick.min.js', array(), null, true );

    

};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'main') {
        $atts['class'] = 'header__link';

        if ($item->current) {
            $atts['class'] .= ' header__link-active';
        }
        if( $item->ID === 281 && ( in_category( 'swing' ) || in_category( 'egrowing_color' || in_category('growing_lacquer') || in_category('growing_chair') ))) {
            $atts['class'] .= ' header__link-active';
        }
    };

    /* print_r($item); */

    return $atts;
};




?>