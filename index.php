<div id="journal">
 
    <div class="flexmain">
      <div class="journal-head">JOURNAL</div>
      
      <div class="logo2">MICHAEL MACK</div>
      </div>
      
      <?php 

/*
    Template Name: Page Blog Post Layout
*/

get_header(); ?>    
</div>




      
   <?php 
   
      if( have_posts() ):
   
        while( have_posts() ): the_post(); ?>
        
          <h1><?php the_title(); ?></h1>
         <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
          <p><?php the_content(); ?></p>
          
          <hr>
     
        <?php endwhile;

      endif;

   ?>
  
   <?php get_footer(); ?>


