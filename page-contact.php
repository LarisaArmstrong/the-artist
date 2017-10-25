<?php
/**
*Template Name: Contact Page Layout
*   
*@package WordPress
*@subpackage basquiat
*@since basquiat 1.0
**/
?>


<div class="contact-section">
<?php dynamic_sidebar('Footer'); ?>   
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