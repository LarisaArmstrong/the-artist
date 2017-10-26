<?php
/**
*Template Name: About Page Layout
*   
*@package WordPress
*@subpackage basquiat
*@since basquiat 1.0
**/
?>

<div class="bio-page">
  <div class="flexmain">
    <div class="page-head"><?php dynamic_sidebar('About Page Heading'); ?></div>
    <div class="logo-small"><?php dynamic_sidebar('Page Logo'); ?></div>
  </div> 
  <p class="about-text"><?php dynamic_sidebar('About Page Text'); ?></p>
</div>

   <?php 
   
      if( have_posts() ):
   
        while( have_posts() ): the_post(); ?>

          <p><?php the_content(); ?></p>
          
     
        <?php endwhile;

      endif;

   ?>

<?php 

get_header(); ?>
  
  