<?php

function laiguanaResources(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js", false, null);
    wp_enqueue_script('jquery');

    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/bower_components/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/bower_components/bootstrap/dist/js/bootstrap.min.js');

    wp_enqueue_script( 'plugins', get_stylesheet_directory_uri() . '/assets/js/plugins.js');
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js');

    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/styles/main.css');
    wp_enqueue_style( 'fa', get_stylesheet_directory_uri() . '/assets/bower_components/font-awesome/css/font-awesome.min.css');

    wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/bower_components/owl.carousel/dist/assets/owl.carousel.min.css');
    wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/bower_components/owl.carousel/dist/owl.carousel.min.js');
}

add_action( 'wp_enqueue_scripts', laiguanaResources );


// Theme setup
function laiguana_setup() {
	
	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('destacado', 1070, 441, true);
	add_image_size('square-thumbnail', 80, 80, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));
	
	// Add post type support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'laiguana_setup');