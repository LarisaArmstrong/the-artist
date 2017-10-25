<?php

function artist_script_enqueue (){
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/artist.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'artist_script_enqueue');

// theme support
//------------- 

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
};

add_action( 'init', 'artist_setup' );

// blog post formats
//-------------------- 

function artist_post_formats_setup(){
    add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'gallery'));
}

add_action( 'after_setup_theme', 'artist_post_formats_setup' );


// sidebar and widgets function
// --------------------------

// gallery widgets

function artist_widget_setup() {
    register_sidebar(array(
        'name' => 'Portfolio',
        'id' => 'gallery-1',
        'class' => 'custom',
        'description' => 'Gallery display of portfolio/work',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'Footer',
        'id' => 'footer-1',
        'class' => 'custom',
        'description' => 'Site footer section',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'Home Page',
        'id' => 'logo-1',
        'class' => 'custom',
        'description' => 'Main logo/title and tagline of website/person that displays on home page',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'About Page Heading',
        'id' => 'bio-1',
        'class' => 'custom',
        'description' => 'Widget area for about page heading and logo',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'About Page Text',
        'id' => 'about-1',
        'class' => 'custom',
        'description' => 'Widget area for about page TEXT',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'Page Logo',
        'id' => 'small-logo-1',
        'class' => 'custom',
        'description' => 'Widget area for page logo',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}


add_action('widgets_init','artist_widget_setup');

