<?php
/**
 * Britt-hello-2023 Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package britt-hello-2023
 */

add_action( 'wp_enqueue_scripts', 'hello_elementor_parent_theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'child_theme_styles', 11 );

/**
 * Enqueue scripts and styles.
 */
function hello_elementor_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'hello-elementor-style', get_template_directory_uri() . '/style.css' );
}

function child_theme_styles() {
	wp_enqueue_style( 'britt-hello-2023-style', get_stylesheet_uri());
}
