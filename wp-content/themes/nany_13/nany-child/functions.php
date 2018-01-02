<?php
/**
 * Enqueues child theme stylesheet, loading first the parent theme stylesheet.
 */
function nany_custom_enqueue_child_theme_styles() {
	wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'theme-child-style', get_stylesheet_uri(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'nany_custom_enqueue_child_theme_styles', 11 );