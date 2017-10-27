<!-- standard post format -->

<?php the_title(sprintf('<h3 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
<div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
<small>Posted on: <?php the_time('F j, V'); ?> at <?php the_time('g:i a'); ?></small>
<p><?php the_excerpt(); ?></p>

