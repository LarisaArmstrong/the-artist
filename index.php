<!-- index - blog post page -->

  <div class="journal-page">
  
  <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="header-logo" />

      <div class="flex-head">
        <div class="journal-head">JOURNAL</div>
        <div class="logo-small2">MICHAEL MACK</div>
      </div>

    <?php get_header(); ?>    

  </div>
    

  <!-- print only featured posts -->

  <div class="feature-posts">

    <div class="cat-section">
      <hr class="cat-line">
      <div class="cat-name"><?php echo get_cat_name(15); ?></div>
    </div>
      
    <?php 

        $lastBlog = new WP_Query('type=post&posts_per_page=3&category_name=featured');
        
        if( $lastBlog->have_posts() ):
          
          while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
            
        <?php get_template_part('components/content/content',get_post_format()); ?>
        
        <?php endwhile;
        
      endif;
      
      wp_reset_postdata();
          
    ?>

  </div>

    <!-- print only latest posts -->

  <div class="latest-posts">

    <div class="cat-section">
      <hr class="cat-line">
      <div class="cat-name"><?php echo get_cat_name(14); ?></div>
    </div>

    <?php
        
        $lastBlog = new WP_Query('type=post&posts_per_page=2&category_name=latest');
        
        if( $lastBlog->have_posts() ):
          
          while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
            
        <?php get_template_part('components/content/content',get_post_format()); ?>
        
        <?php endwhile;
        
      endif;
      
      wp_reset_postdata();
          
    ?>

  </div>

  <!-- print only news posts -->

  <div class="news-posts">

  <div class="cat-section">
      <hr class="cat-line">
      <div class="cat-name"><?php echo get_cat_name(1); ?></div>
    </div>

    <?php
        
        $lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=news');
        
        if( $lastBlog->have_posts() ):
          
          while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
            
        <?php get_template_part('components/content/content',get_post_format()); ?>
        
        <?php endwhile;
        
      endif;
      

      wp_reset_postdata();
          
    ?>

  </div>


   <?php get_footer(); ?>


