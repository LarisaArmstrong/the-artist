<?php
/**
*Template Name: Portfolio Page Layout
*   
*@package WordPress
*@subpackage basquiat
*@since basquiat 1.0
**/
?>

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
