<?php

// Enqueue Scripts and Assets
function thedd_enqueue_assets()
{
    wp_enqueue_style('default-styles', get_stylesheet_directory_uri() . '/style.css', [], filemtime(get_stylesheet_directory() . '/style.css'));
    wp_enqueue_script('main-scripts', get_stylesheet_directory_uri() . '/public/assets/js/main-scripts.js', ['jquery'], filemtime(get_stylesheet_directory() . '/public/assets/js/main-scripts.js'), ['strategy' => 'defer', 'in_footer' => true]);
    
}
add_action('wp_enqueue_scripts', 'thedd_enqueue_assets');

/* 
* Include any additonal functions other than enqueueing files in additional-functions.php.
* Nothing below here.
*/

// include additional functions
include_once( 'includes/additional-functions.php' );