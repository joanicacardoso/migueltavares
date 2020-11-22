<?php
get_header()
?>

    <div class="wrapper">
      <div class="row">
        <div class="col-3 left">

<!-- Filter by categories -->

<div class="categories">
<ul>
<li class="js-filter-item"><a href="<?= home_url();?>">All</a></li>
<?php
$cat_args = array(
  'exclude' => array (1),
  'option_all' => 'All'
);

$categories = get_categories($cat_args);

foreach($categories as $cat) : ?>
  <li class="js-filter-item"><a data-category="<?= $cat->term_id; ?>" href="<?= get_category_link($cat->term_id); ?>"> 
  <?= $cat->name; ?></a></li>
<?php endforeach; ?>

</ul>
</div>


<div class="js-filter">
<?php

$args = array(
  'post_type' => 'post',
  'posts_per_page' => -1
);

$query = new WP_Query($args);

if($query->have_posts()) :
  while($query->have_posts()) : $query->the_post();
        echo '<ul class="items"><li><a href=' . get_permalink() . '>' . get_the_title() . '</a></li></ul>';
endwhile;
endif;
wp_reset_postdata(); ?>
</div>



<!-- ignore this one, it's the same post list -->

<?php
wp_nav_menu( array( 
    'theme_location' => 'side-menu', 
    'container_class' => 'side-menu-class',
    'items_wrap'=> '<ul id=" " class="items">%3$s</ul>', ) ); 
?>


        </div>
         <div class="col-9 right">

<h1> Hello World </h1>

         </div>
      </div>
    </div>

    <?php
 
get_footer()
?>


