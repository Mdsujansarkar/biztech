  <div class="post-preview">
            <a href="<?php the_permalink(); ?>" target="_blank">
              <h2 class="post-title">
                <?php the_content(); ?>
              </h2>  
            </a>
            <p class="post-meta"><?php _e("Posted by","bizteh"); ?>
               <?php the_author(); ?>
              <?php _e("on ","bizteh");  echo esc_html( get_the_date()); ?></p>
          </div>