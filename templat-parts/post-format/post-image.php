<div class="post-preview">
           <a href="<?php the_permalink(); ?>">
              <h2 class="post-title">
                <?php the_title(); ?>
              </h2>
              <h3 class="post-subtitle">
                <?php the_excerpt(); ?>
              </h3>
</a>
    <p class="post-meta"><?php _e("Posted by","bizteh"); ?>
       <?php the_author(); ?>
          <?php _e("on ","bizteh");   echo esc_html( get_the_date()); ?></p>

</div>
