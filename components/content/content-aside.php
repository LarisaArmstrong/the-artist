<!-- aside post format -->

<div class="aside">
    <?php the_title(sprintf('<h3 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>  
    <small class="when"><?php the_time('F j'); ?> / <?php the_time('g:i a'); ?></small>
    <p><?php the_excerpt(); ?></p>
</div>