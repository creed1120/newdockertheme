<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

 

 /**
 * Registers a stylesheet.
 */
function gtp_register_styles() {

    $theme_dir = get_stylesheet_directory_uri();

    wp_register_style( 'gtp-bootstrap', $theme_dir . '/assets/dist/css/main.css' );
    wp_register_script( 'gtp-bootstrap-js', $theme_dir . '/assets/dist/js/main.js' );

    wp_enqueue_style( 'gtp-bootstrap' );
    wp_enqueue_script( 'gtp-bootstrap-js' );
	
}
// Register style sheet.
add_action( 'wp_enqueue_scripts', 'gtp_register_styles' );