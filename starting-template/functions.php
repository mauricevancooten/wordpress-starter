<?php

// Enqueue stylesheet

function wp_articles_enqueue_style() {
    wp_enqueue_style( 'wp-articles-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'wp_articles_enqueue_style' );