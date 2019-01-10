<?php
add_theme_support('post-thumbnails');
add_image_size( 'featuredImageCropped', 1024, 768, true );
function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' ); 
    wp_register_style( 'animate', get_template_directory_uri() . '/css/animate.css' ); 
    wp_register_style( 'events', get_template_directory_uri() . '/css/events.css' ); 
    wp_register_style( 'header', get_template_directory_uri() . '/css/header.css' ); 
    wp_register_style( 'aos', get_template_directory_uri() . '/css/aos.css' ); 
    
    wp_register_script( 'aaa', get_stylesheet_directory_uri() . '/js/header2.js', array(), '', false );
    wp_register_script( 'bbb', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '', false );
    
    wp_enqueue_script( 'aaa' );
    wp_enqueue_script( 'bbb' );
}

add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

?>
