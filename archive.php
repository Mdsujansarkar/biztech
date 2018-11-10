<?php get_header(); ?>
    <!-- Page Header -->
    <header class="bizmasthead" style="background-image: url('<?php echo esc_url( get_theme_mod('image1')); ?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="bizsite-heading">
              <h1><?php the_archive_title(); ?></h1>
              <span class="subheading"><?php echo the_archive_description(); ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php 
             if( ! have_posts()): ?>
              <h5><?php _e("There is no archive","bizteh"); ?></h5>
              <?php endif;
          ?>
          <?php while(have_posts()): 
            the_post();
           ?>
            <?php get_template_part("templat-parts/post-format/post", get_post_format());  ?>
          <hr>
        <?php endwhile; ?>
        
          <!-- Pager -->
          <div class="clearfix">
           
             <?php 
                 the_posts_pagination(array(
                  'screen_reader_text' =>' ',
                  'mid_size' => 3,
                  'prev_text' => __( 'New', 'bizteh' ),
                  'next_text' => __( 'Old', 'bizteh' ),
                 ));
                ?>
          </div>
        </div>
      </div>
    </div>



  <?php get_footer(); ?>