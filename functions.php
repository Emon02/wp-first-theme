<?php
/**
 * My Theme Functions
 */

//  Theme Title
add_theme_support('title-tag');


// Theme CSS and JS
function emon_css_js_file_calling(){
    // style.css file linking
    wp_enqueue_style('emon-style', get_stylesheet_uri());
    // Register external style files
    // Bootstrap CSS File
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.2.3', 'all');
    wp_enqueue_style('bootstrap');
    // Custom CSS File
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom');

    // Jquery calling
    wp_enqueue_script('jquery');
    // JS calling
    // Bootstrap Js file
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.2.3', 'true');
    // Custom Js file
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');
};

add_action('wp_enqueue_scripts','emon_css_js_file_calling')






















?>