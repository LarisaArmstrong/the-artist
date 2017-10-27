

<?php get_header(); ?>


<?php 

if( have_posts() ):
    
    while( have_posts() ): the_post(); ?>
        
        
        <div class="single-title"><?php the_title(); ?></div>

        <?php if( has_post_thumbnail() ): ?>
            
            <div class="single-image"><?php the_post_thumbnail('large'); ?></div>

        <?php endif; ?>

        <div class="blog-links"><?php the_category(' '); ?> || <?php edit_post_link(); ?></div>

        <div class="single-content"><?php the_content(); ?></div>


    <?php endwhile;
    
endif;
        
?>

<?php get_footer(); ?>