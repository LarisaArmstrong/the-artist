<?php get_header(); ?>

		
<?php 

if( have_posts() ):
    
    while( have_posts() ): the_post(); ?>
        
        
        <?php the_title('<h1 class="entry-title">','</h1>' ); ?>

        <?php if( has_post_thumbnail() ): ?>
            
            <?php the_post_thumbnail('large'); ?>

        <?php endif; ?>

        <small><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>

        <?php the_content(); ?>

        <hr>

        <?php 
            if( comments_open() ){ 
                comments_template(); 
            } else {
                echo '<h5 class="text-center">Sorry, Comments are closed!</h5>';
            }
            
            ?>


    <?php endwhile;
    
endif;
        
?>

<?php get_footer(); ?>