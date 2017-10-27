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
add_theme_support('html5', array('search-form'));

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


function custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/*      
   ==============================================
    Replace the excerpt "Read More" text by a link
    ==============================================
*/
function new_excerpt_more($more) {
      global $post;
    return '... <br><br><a class="moretag" href="'. get_permalink($post->ID) . '">Read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');






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
        'name' => 'Home Page Logo/Title',
        'id' => 'logo-1',
        'class' => 'custom',
        'description' => 'Main logo/title of website/person that displays on home page',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'Home Page Tagline',
        'id' => 'tag-1',
        'class' => 'custom',
        'description' => 'Main tagline of website/person that displays on home page',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'About Page Heading',
        'id' => 'bio-1',
        'class' => 'custom',
        'description' => 'Widget area for about page heading',
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

    register_sidebar(array(
        'name' => 'Portfolio Page Heading',
        'id' => 'heading-1',
        'class' => 'custom',
        'description' => 'Widget area for portfolio page heading',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'Footer Logo',
        'id' => 'small-logo-2',
        'class' => 'custom',
        'description' => 'Widget area for footer logo',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'Footer Contact Info',
        'id' => 'contact',
        'class' => 'custom',
        'description' => 'Widget area for footer contact information',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'Footer Social Icons',
        'id' => 'social',
        'class' => 'custom',
        'description' => 'Widget area for footer social media icons',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'Footer Copyright',
        'id' => 'copy',
        'class' => 'custom',
        'description' => 'Widget area for copyright of person/business',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'Contact Page Heading',
        'id' => 'contact-head',
        'class' => 'custom',
        'description' => 'Widget area for contact page heading',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'Contact Form',
        'id' => 'contact-form',
        'class' => 'custom',
        'description' => 'Widget area for contact form',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'Blog Page Heading',
        'id' => 'blog',
        'class' => 'custom',
        'description' => 'Widget area for blog page heading',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'Blog Page Header Background',
        'id' => 'blog-header',
        'class' => 'custom',
        'description' => 'Widget area for blog page header, full height background image/color',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => 'Search Bar Area',
        'id' => 'search',
        'class' => 'custom',
        'description' => 'Widget area for search bar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));


}


add_action('widgets_init','artist_widget_setup');

