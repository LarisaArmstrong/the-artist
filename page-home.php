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
        <h3 class="tagline"><?php dynamic_sidebar('Home Page Tagline'); ?></h3>  
    <h2 class="main-logo"><?php dynamic_sidebar('Home Page Logo/Title'); ?></h2>   
</div> 

    <?php get_header(); ?>
</div>
