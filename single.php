<?php get_header(); ?>


<?php while(have_posts()): 
  the_post();
  $blogthumbnail = get_the_post_thumbnail_url(get_the_ID(), "large");
?>
   <header class="bizmasthead" style="background-image: url('<?php echo esc_url( $blogthumbnail); ?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="post-heading">
              <h1><?php the_title(); ?></h1>
              <span class="meta"><?php _e("Posted by","bizteh"); ?>
                <a href="#"><?php the_author(); ?></a>
                <?php _e("on ","bizteh");   echo esc_html( get_the_date()); ?></span>
                <?php echo get_the_tag_list('<ul class="list-unstyled"><li>','</li><li>','</li></ul>');?>
            </div>
          </div>
        </div>
      </div>
    </header>
   
    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
             <p class="bizsinglecon">
                <?php the_content(); ?>          
            </p>
          </div>
        </div>
      </div>
    </article>
    <?php if(comments_open()): ?>
                <div class="col-lg-8 col-md-10 mx-auto">
                    <?php comments_template(); ?>
                </div>
                <?php endif; ?>
<?php endwhile; ?>
    
<?php get_footer(); ?>