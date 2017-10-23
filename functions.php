<?php

function artist_script_enqueue (){
    // wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/artist.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/artist.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'artist_script_enqueue');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

function artist_setup() {
	add_theme_support( 'custom-logo', array(
        'flex-width' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
	) );

    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action( 'init', 'artist_setup' );

// if ( function_exists( 'the_custom_logo' ) ) {
//     the_custom_logo();
// }

add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'gallery'));



// sidebar and widgets function
// ---------------------

function artist_widget_setup() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'class' => 'custom',
        'description' => 'Standard Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}

add_action('widgets_init','artist_widget_setup');
