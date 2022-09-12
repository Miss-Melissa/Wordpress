<?php
add_action('wp_enqueue_scripts', 'devsneakers_enqueue');

function devsneakers_enqueue()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_theme_support('post-thumbnails');


function wpb_custom_new_menu()
{
    register_nav_menu('my-custom-menu', __('My Custom Menu'));
}

add_action('init', 'wpb_custom_new_menu');
