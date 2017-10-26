<?php
/**
*Template Name: Contact Page Layout
*   
*@package WordPress
*@subpackage basquiat
*@since basquiat 1.0
**/
?>

<div class="flexmain">
    <div class="page-head"><?php dynamic_sidebar('Contact Page Heading'); ?></div> 
    <div class="logo-small"><?php dynamic_sidebar('Page Logo'); ?></div>
  </div> 

<div class="contact-form"><?php dynamic_sidebar('Contact Form'); ?></div>

<?php 
   
      if( have_posts() ):
   
        while( have_posts() ): the_post(); ?>

          <p><?php the_content(); ?></p>
          
     
        <?php endwhile;

      endif;

   ?>

<?php 

get_header(); ?>

<?php get_footer(); ?> 


