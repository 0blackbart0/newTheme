<?php

/**
 * Adding Styles and loading bootstrap
 */
function addStyleSheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'blog', get_template_directory_uri()."/blog.css", false );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js' );
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js' );
}
add_action( 'wp_enqueue_scripts', 'addStyleSheets');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


register_nav_menus( array(
    'primary' => __( 'Primary Menu'),
    'footer' => __( 'Footer Menu'),
) );