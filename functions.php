<?php

function laiguanaResources(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js", false, null);
    wp_enqueue_script('jquery');

    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/bower_components/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/bower_components/bootstrap/dist/js/bootstrap.min.js');

    wp_enqueue_script( 'plugins', get_stylesheet_directory_uri() . '/assets/js/plugins.js');
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js');

    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/styles/main.css');
    wp_enqueue_style( 'fa', get_stylesheet_directory_uri() . '/assets/bower_components/font-awesome/css/font-awesome.min.css');

    wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/bower_components/owl.carousel/dist/assets/owl.carousel.min.css');
    wp_enqueue_style( 'owl-carousel-theme', get_stylesheet_directory_uri() . '/assets/bower_components/owl.carousel/dist/assets/owl.theme.default.css');
    wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/bower_components/owl.carousel/dist/owl.carousel.min.js');
}

add_action( 'wp_enqueue_scripts', laiguanaResources );


// Theme setup
function laiguana_setup() {
	
	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('destacado', 1070, 441, true);
	add_image_size('home_thumbnail_medium', 325, 244, true);
	add_image_size('home_thumbnail_small', 259, 106, true);
	add_image_size('iguanazos', 728, 421, true);
	add_image_size('iguanazos_anteriores', 203, 130, true);
	add_image_size('lo_mas_jot', 278, 80, true);
	add_image_size('noticias_anteriores', 328, 135, true);
    
	// Add post type support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'laiguana_setup');


//  from http://www.wpbeginner.com/wp-tutorials/how-to-track-popular-posts-by-views-in-wordpress-without-a-plugin/
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 Vistas";
    }
    return $count.' Vistas';
}

function the_post_video($post_id=NULL) {
   global $post;
   $target_post = $post;
   if($post_id !== NULL)
       $target_post = get_post($post_id);

   $matches = null;
   if(preg_match('/<iframe(.*?)\\/?>(<\\/iframe>)?/s', $post->content, $matches)) {
      return $matches[0];
   }
   return ''; // return empty if no iframe found.
}

function remove_head_scripts(){
    remove_action( 'wp_head', 'wp_print_scripts' );
    remove_action( 'wp_head', 'wp_print_head_scripts', 9);
    remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );

    add_action( 'wp_footer', 'wp_print_scripts', 5 );
    add_action( 'wp_footer', 'wp_print_head_scripts', 5 );
    add_action( 'wp_footer', 'wp_enqueue_scripts', 5 );
}

add_action('wp_enqueue_scripts', 'remove_head_scripts');