<!-- image post format -->

<div class="image-post-format">
    <div class="post-area">
        <div class="post-image"><?php the_post_thumbnail('large'); ?></div>
        <h3 class="post-title"><?php the_title(); ?></h3>
        <small class="when">Posted on: <?php the_time('F j, V'); ?> at <?php the_time('g:i a'); ?> </small>
        <br><p class="blog-content"><?php the_content(); ?></p>
    </div>
</div>

