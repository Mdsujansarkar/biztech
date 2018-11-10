<?php get_header(); ?>
<?php while(have_posts()): the_post();
 $bizphumbnail = get_the_post_thumbnail_url(get_the_ID(), "large");
 ?>
    <header class="bizmasthead" style="background-image: url('<?php echo esc_url( $bizphumbnail); ?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p class="bizsinglecon">
           <?php the_content(); ?>
         </p>
         <?php
        wp_link_pages( array(
          'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bizteh' ) . '</span>',
          'after'       => '</div>',
          'link_before' => '<span>',
          'link_after'  => '</span>',
          'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'bizteh' ) . ' </span>%',
          'separator'   => '<span class="screen-reader-text">, </span>',
        ) );
      ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>

    <?php get_footer(); ?>