<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

 $theme_dir = get_template_directory();
 
 /* enqueue scripts and style from parent theme */
 add_action( 'wp_enqueue_scripts', 'gtp_theme_enqueue_styles' );
 function gtp_theme_enqueue_styles() {
     wp_enqueue_style( 'child-style',
         get_stylesheet_uri(),
         array( 'generatepress' ),
         wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
     );
 }