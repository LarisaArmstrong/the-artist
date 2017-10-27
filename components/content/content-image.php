<!-- image post format -->

<div class="image-post-format">
    <div class="post-area">
        <div class="post-image"><?php the_post_thumbnail('medium'); ?></div>
        <small class="when"><?php the_time('F j'); ?> / <?php the_time('g:i a'); ?> </small>
        <hr class="post-line">
        <?php the_title(sprintf('<h3 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
        <hr class="post-line">
        <p class="blog-content"><?php the_excerpt(); ?></p>
    </div>
</div>

