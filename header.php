<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/artist.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    



    <?php wp_head() ?>
  </head>

  <?php

    if( is_front_page() ):
        $artist_classes = array( 'artist-class', 'my-class' );
else:
        $artist_classes = array( 'no-artist-class');  
    endif;
  ?>

  <body <?php body_class( $artist_classes ); ?>>

    <?php wp_nav_menu(array(
    'theme_location' => 'primary',
    )); ?>

    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />


