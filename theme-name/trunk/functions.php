<?php

define('THEME_URL', get_stylesheet_directory_uri());

function add_theme_scripts()
{

    // Shared
    wp_enqueue_style('header', THEME_URL . '/shared/css/header.css', array(), '1.1.0', 'all');
    wp_enqueue_style('footer', THEME_URL . '/shared/css/footer.css', array(), '1.1.0', 'all');
    wp_enqueue_style('common-css', THEME_URL . '/shared/css/common.css', array(), '1.1.0', 'all');
    wp_enqueue_style('theme-custom-css', THEME_URL . '/shared/css/custom.css', array(), '1.1.0', 'all');
    wp_enqueue_script('commonjs', THEME_URL . '/shared/js/index.js', array('jquery'));

    //Bootstrap
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '1.1.0', 'all');

    // Slick
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1', 'all');
    wp_enqueue_script('slickjs', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.8.1', 'all');
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
