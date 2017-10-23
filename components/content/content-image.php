<!-- image post format -->

<div class="post">
    <div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
    <small class="time">Posted on: <?php the_time('F j, V'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
    <h3><?php the_title(); ?></h3>
    <p class="post-content"><?php the_content(); ?></p>
    <hr class="post-line">
</div>

