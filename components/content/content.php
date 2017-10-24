<!-- standard post format -->

<h3><?php the_title(); ?></h3>
<div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
<small>Posted on: <?php the_time('F j, V'); ?> at <?php the_time('g:i a'); ?></small>
<p><?php the_content(); ?></p>
<hr>
