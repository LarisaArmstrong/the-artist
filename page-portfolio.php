<?php
/**
*Template Name: Portfolio Page Layout
*   
*@package WordPress
*@subpackage basquiat
*@since basquiat 1.0
**/
?>


  <div class="flexmain">
    <div class="page-head"><?php dynamic_sidebar('Portfolio Page Heading'); ?></div> 
    <div class="logo-small"><?php dynamic_sidebar('Page Logo'); ?></div>
  </div> 

<div class="portfolio-section">   
  <?php dynamic_sidebar('Portfolio'); ?>   
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
