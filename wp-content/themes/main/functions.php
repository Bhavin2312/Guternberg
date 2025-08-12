<?php
// Main theme functions

function main_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'main_theme_setup');

function main_theme_scripts()
{

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('main-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'main_theme_scripts');