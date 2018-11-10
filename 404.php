<?php

 get_header();

  ?>

	 <header class="bizmasthead" style="background-image: url('<?php echo esc_url( get_theme_mod('image1')); ?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php _e("Man must explore, and this is exploration at its greatest", "bizteh"); ?></h1>
              <h2 class="subheading"><?php _e("Problems look mighty small from 150 miles up", "bizteh"); ?></h2>
              
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
             <div class="found"> 
                 <h1><?php _e("404", "bizteh"); ?></h1>

             </div>

          </div>
        </div>
      </div>
    </article>

    
<?php get_footer(); ?>