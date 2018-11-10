   <div class="post-preview">
            <a href="<?php the_permalink(); ?>">
              <h2 class="post-title">
               <?php the_title(); ?>
              </h2>
              </a>
              <blockquote class="blockquote">
<?php the_content(); ?>
</blockquote>
            
            <p class="post-meta"><?php _e("Posted by","bizteh"); ?>
               <?php the_author(); ?>
              <?php _e("on ","bizteh");  echo esc_html( get_the_date()); ?></p>
               </div>
        