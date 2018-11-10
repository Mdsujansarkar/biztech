<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="Free Blog theme">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Biztechub">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        
         <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
      <?php if(has_custom_logo()): 
       the_custom_logo();
       else:
       echo  "<a class='navbar-brand' href='".home_url("/")."'>".get_bloginfo('name')."</a>";
      ?>

       
  
      <?php endif; ?>
      
       <div class="main-menu">

       <?php

        wp_nav_menu(array(
       'theme_location' => 'menu-1'
      
       )); ?> 

        </div>
      </div>
    </nav>
    