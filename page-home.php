<!-- home page -->

<div class="home-page">
    <?php 
    
        if( have_posts() ):
    
            while( have_posts() ): the_post(); ?>
            
            <p><?php the_content(); ?></p>
        
            <?php endwhile;

        endif;

    ?>

    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="header-logo" />

    <?php get_header(); ?>
</div>
