<?php
get_header()
?>

    <div class="wrapper">
      <div class="row">
        <div class="col-3 left">

        <?php
wp_nav_menu( array( 
    'theme_location' => 'side-menu', 
    'container_class' => 'side-menu-class',
    'items_wrap'=> '<ul id=" " class="items">%3$s</ul>', ) ); 
?>

        </div>
         <div class="col-9 right">
        <h1>PAGE NOT FOUND</h1>
         </div>
      </div>
    </div>

    <?php
get_footer()
?>
