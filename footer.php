  <!-- Footer -->
    <footer class="dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4"> 

         <?php  if(is_active_sidebar('footer-1')){
                 dynamic_sidebar( 'footer-1' );
               }
                ?>
        </div>
          <div class="col-lg-4 col-md-4"> 
       <?php  if(is_active_sidebar('footer-2')){
                 dynamic_sidebar( 'footer-2' );
               }
                ?>
           </div>
          <div class="col-lg-4 col-md-4"> 
           <?php  if(is_active_sidebar('footer-3')){
                 dynamic_sidebar( 'footer-3' );
               }
                ?>
          </div>
        </div>
        <hr />
        <div class="col-md-12 col-md-10"> 
               <p class="copyright text-muted"><?php _e("Copyright &copy; Your Website 2018", "bizteh"); ?></p>
        </div>
      </div>

    </footer>


  <?php wp_footer(); ?>
</body>
</html>
