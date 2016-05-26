<?php

// Enqueue stylesheet

function wp_articles_enqueue_style() {
    wp_enqueue_style( 'wp-articles-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'wp_articles_enqueue_style' );

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

// Replaces the excerpt "more" text by a link

function new_excerpt_more($more) {
       global $post;
    return '<a class="moretag" title="'. get_the_title($post->ID) . '" href="'. get_permalink($post->ID) . '"> Read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');