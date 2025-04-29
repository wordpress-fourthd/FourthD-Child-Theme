<?php
/**
 * Theme functions and definitions
 *
 * @package FourthdTheme
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function fourthd_theme_enqueue_scripts() {
	wp_enqueue_style(
		'fourthd-theme-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'fourthd_theme_enqueue_scripts', 20 );
