<?php

/**
 * Load theme styles.
 * 
 * @return void
 */
function webj_load_theme_styles()
{
    // load theme main style.css.
    wp_enqueue_style( '_theme-css', get_stylesheet_directory_uri() . '/style.css', [], false, 'all' );
}

add_action( 'wp_enqueue_scripts', 'webj_load_theme_styles' );