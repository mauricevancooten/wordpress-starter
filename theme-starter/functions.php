<?php

// Enqueue stylesheet

function minus_enqueue_style() {
    wp_enqueue_style( 'minus-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'minus_enqueue_style' );

// Register menu

register_nav_menu('main-menu','Main Menu');

// Register aside sidebar

$aside_sidebar = array(
    'name'          => 'Aside',
    'id'            => 'aside',
    'description'   => 'Widgets placed here will go on the right hand side bar'
);

register_sidebar( $aside_sidebar );

// Thumbnails

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 240, 240, true );