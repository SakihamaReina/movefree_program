<?php

/**
 * My Portfolio Theme Child Functions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package My_Portfolio_Theme_Child
 */

function my_child_theme_enqueue_styles()
{
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'),
        microtime()
    );
}
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');

function my_child_theme_enqueue_scripts()
{
    wp_enqueue_script(
        'my-custom-script',
        get_stylesheet_directory_uri() . '/js/custom.js',
        array('jquery'),
        microtime(),
        true
    );
}
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_scripts');
add_theme_support('title-tag');
