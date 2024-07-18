<?php

// Prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/* Disable Block Editor - return CLASSIC EDITOR */
add_filter('use_block_editor_for_post', '__return_false', 10);

/* Disable Widget Block editor - return CLASSIC WIDGETS */

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
// Disables the block editor from managing widgets.
add_filter('use_widgets_block_editor', '__return_false');