<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Bootstrap -->
<!-- Theme CSS -->
<?php
wp_head();
?>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
  </head>
  <body>
    <header>

   <a class="site-title" href="index.html">
       <?php echo get_bloginfo('name');?>
   </a>


   
      <div class="nav-bar">
       <?php
   wp_nav_menu(
array(
    'menu'=>'primary',
    'container' =>'',
    'theme_location' => 'primary',
    'items_wrap'=> '<ul id=" " class="list-menu list-inline">%3$s</ul>',
    ))
   ?>
   
   </div>
    <div class="wrapper">
    <div class="row">
        <div class="col-3 labels">

 <?php
wp_nav_menu( array( 
    'theme_location' => 'cat-menu', 
    'container_class' => 'cat-menu-class',
    'items_wrap'=> '<ul id=" " class="label list-inline">%3$s</ul>', ) ); 
?>

        </div>
        <div class="col-9 news">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-news') ) : 
 
endif; ?>
                </div>
        </div>  
    </header>
