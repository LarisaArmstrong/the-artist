<!-- image post format -->

<div class="image-post-format">
    <?php the_post_thumbnail('large'); ?>
    <h3><?php the_title(); ?></h3>
    <small>Posted on: <?php the_time('F j, V'); ?> at <?php the_time('g:i a'); ?> </small>
    <p><?php the_content(); ?></p>
</div>

