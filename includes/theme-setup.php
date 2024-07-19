<?php

// Register Theme Support

function thdd_theme_support()
{
    // Output HTML5 code
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'navigation-widgets',
        'search-form',
        'script',
        'style',
    ]);
    // Needed to add title to head of document - do not manually add title tag
    add_theme_support('title-tag');
    // Feed Links
    add_theme_support('automatic-feed-links');
    // Featured Images
    add_theme_support('post-thumbnails');
    // Refresh Widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Custom Background

    /*
    $thedd_bg_args = [
        'default-image'          => '',
        'default-preset'         => 'default',
        'default-size'           => 'cover',
        'default-repeat'         => 'no-repeat',
        //'default-attachment'     => 'scroll',
    ];
    add_theme_support( 'custom-background', $thedd_bg_args );
    */

    // Custom Header

    /*
    $thedd_header_args = [
        'default-image'          => '',
        'width'                  => '##',
        'height'                 => '##',
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
    ];
    add_theme_support( 'custom-header', $thedd_header_args );
    */

    // Custom Logo

    /*
    $thedd_logo_args = [
        'height'      => '##',
        'width'       => '##',
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ];
    add_theme_support('custom-logo', $thedd_logo_args);
    */
}
add_action('after_setup_theme', 'thdd_theme_support');

// Register Nav Menu Locations

register_nav_menus([
    'top-menu' => esc_html( 'Top Header Menu', 'thedd' ),
    'footer-menu' => esc_html( 'Footer Menu', 'thedd' ),
]);

// Register Widget Areas

function thedd_widget_init() {
    register_sidebar([
        'name' => esc_html__(' First Sidebar ', 'thedd'),
        'id' => 'first-sidebar',
        'description' => esc_html__('Add first sidebar widgets here','thedd'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);
    register_sidebar([
        'name' => esc_html__(' Second Sidebar ', 'thedd'),
        'id' => 'second-sidebar',
        'description' => esc_html__('Add second sidebar widgets here','thedd'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);
}
add_action( 'widgets_init', 'thedd_widget_init' );