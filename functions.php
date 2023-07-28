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

add_action('wp_enqueue_scripts','emon_css_js_file_calling');

// Theme Function
function emon_customizing_register($wp_customize){
    $wp_customize->add_section('emon_header_area', array(
        'title' => __('Header Area', 'abdulalimemon'),
        'description' => 'update header area'
    ));

    $wp_customize->add_setting('emon_logo', array(
        'default' => get_bloginfo('template_directory').'/img/emon.png', 
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'emon_logo', array(
        'label' => 'Logo Upload',
        'setting' => 'emon_logo',
        'section' => 'emon_header_area'
    )));
};

add_action('customize_register', 'emon_customizing_register');




















?>