<?php the_title(); ?>
	
	<?php if( has_post_thumbnail() ): ?>
		
		<div class="pull-left"><?php the_post_thumbnail('thumbnail'); ?></div>

	<?php endif; ?>
	
	<small><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>
	
<?php the_excerpt(); ?>