<?php

function load_stylesheets() {

    wp_register_style('style', get_template_directory_uri() .'/style.css', array(), false, 'all' );
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function custom_new_menu() {
    register_nav_menus(array(
        'navbar-menu' => __('navbar'),
        'footer-menu' => __('footer'),
        'social-menu' => __('social')
    ));
} 

add_action('init', 'custom_new_menu');

?>