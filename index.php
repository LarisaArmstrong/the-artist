<!-- <div class="journal-page">


<div id="journal">
 
    <div class="flexmain">
      <div class="journal-head">JOURNAL</div>
      
      <div class="logo2">MICHAEL MACK</div>
      </div> -->
      

      <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="header-logo" />
      
      <?php 


get_header(); ?>    

  
   <?php 
   
      if( have_posts() ):
   
        while( have_posts() ): the_post(); ?>
        
        <?php get_template_part('components/content/content', get_post_format()) ;?>

        <?php endwhile;

      endif;

   ?>
  

    
   <?php get_footer(); ?>


