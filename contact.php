<?php


 get_header(); 

while(have_posts()):

the_post();
$bizcontpage = get_the_post_thumbnail_url(get_the_ID(), "large");
 ?>

	 <!-- Page Header -->
    <header class="bizmasthead" style="background-image: url('<?php echo esc_url( $bizcontpage); ?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1><?php the_title(); ?></h1>
              <span class="subheading"><?php _e("Have questions? I have answers.","bizteh"); ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p><?php _e("Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!", "bizteh"); ?></p>
         
          
            <?php the_content();  ?>
          
       
        </div>
      </div>
    </div>
       
<?php endwhile; ?>

<?php get_footer(); ?>