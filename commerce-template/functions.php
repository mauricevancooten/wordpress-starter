<?php

// Disable default stylesheet.

define('WOOCOMMERCE_USE_CSS', false);

// Theme support for Woocommerce

add_theme_support( 'woocommerce' );

// WooCommerce hooks

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

function my_theme_wrapper_start() {
	echo '<div class="main">';
}

add_action( 'woocommerce_before_main_content', 'my_theme_wrapper_start', 10);

function my_theme_wrapper_end() {
	echo '</div>';
}

add_action( 'woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

// Homepage hook

function cover() {
	if( is_shop() ) { ?> 
		 
		 <h2>Do Something</h2>

	<?php }
}

 add_action('woocommerce_before_main_content', 'cover');

// Remove sidebar hook

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// Register aside sidebar

$aside_sidebar = array(
    'name'          => 'Aside',
    'id'            => 'aside',
    'description'   => 'Widgets placed here will go on the right hand side bar',
    'class'         => '',
    'before_widget' => '<div>',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h3>',
    'after_title'   => "</h3>\n",
);

register_sidebar( $aside_sidebar );