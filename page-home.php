<!-- home page -->

<div class="home-page">
    <?php 
    
        if( have_posts() ):
    
            while( have_posts() ): the_post(); ?>
            
            <p><?php the_content(); ?></p>
        
            <?php endwhile;

        endif;

    ?>

<div class="home-section">
<?php dynamic_sidebar('Home Page'); ?>   
</div> 

    <?php get_header(); ?>
</div>
