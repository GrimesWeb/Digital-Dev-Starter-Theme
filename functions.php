<?php

// Enqueue Scripts and Assets
function thedd_enqueue_assets()
{
    wp_enqueue_script('main-scripts', get_stylesheet_directory_uri() . '/assets/js/main-scripts.js', ['jquery'], filemtime(get_stylesheet_directory() . '/assets/js/main-scripts.js'), ['strategy' => 'defer', 'in_footer' => true]);
    wp_enqueue_style('default-styles', get_stylesheet_directory_uri() . '/style.css', [], filemtime(get_stylesheet_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'thedd_enqueue_assets');

/* Disable Block Editor - return CLASSIC EDITOR */
add_filter('use_block_editor_for_post', '__return_false', 10);

/* Disable Widget Block editor - return CLASSIC WIDGETS */

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
// Disables the block editor from managing widgets.
add_filter('use_widgets_block_editor', '__return_false');
