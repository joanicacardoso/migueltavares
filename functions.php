
<?php
 // Adds dynamic title
function migueltavares_theme_support(){
add_theme_support('title-tag');

}

add_action('after_setup_theme', 'migueltavares_theme_support');


function news_widgets_init() {
    register_sidebar( array(
        'name' => __( 'News', 'news' ),
        'id' => 'header-news',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
}
add_action( 'widgets_init', 'news_widgets_init' );

function migueltavares_menus(){
    $locations = array(
'primary'=> "Desktop Primary Menu",
 'side-menu' => "Side Menu",
 'cat-menu' => "Categories Menu"
    );

    register_nav_menus ($locations);
}

add_action('init', 'migueltavares_menus');


//Adds CSS and Bootstrap
function migueltavares_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('migueltavares-style', get_template_directory_uri() . "/style.css", array('migueltavares-bootstrap'), $version, 'all');
    wp_enqueue_style('migueltavares-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css", array(), '4.5.3', 'all');

}

add_action('wp_enqueue_scripts','migueltavares_register_styles');

?>


<?php
//Metabox
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
    $meta_boxes[] = [
        'title'  => 'Projects',
        'fields' => [
             [
                'id'               => 'image',
    'name'             => 'Image Advanced',
    'type'             => 'image_advanced',

    // Delete image from Media Library when remove it from post meta?
    // Note: it might affect other posts if you use same image for multiple posts
    'force_delete'     => false,

    // Maximum image uploads.
    'max_file_uploads' => 2,

    // Do not show how many images uploaded/remaining.
    'max_status'       => 'false',

    // Image size that displays in the edit page. Possible sizes small,medium,large,original
    'image_size'       => 'thumbnail',
            ],
            [
                'id'   => 'title',
                'name' => 'Title',
            ],
            [
                'id'   => 'info',
                'name' => 'Extra Info',
            ],
            [
                'id'   => 'sinopsis',
                'name' => 'Sinopsis',
                'type'    => 'wysiwyg',
            ],
             [
                'id'   => 'techdetails',
                'name' => 'Technical details',
                'type'    => 'wysiwyg',
            ],
             [
                'id'   => 'screenings',
                'name' => 'Screenings',
                'type'    => 'wysiwyg',
            ],
            [
               
                'id'   => 'trailer',
                'name' => 'Trailer',
                'type' => 'url',

            ],
           
        ],
    ];
    return $meta_boxes;
});
?>



<?php
//Filter by category
function migueltavares_register_scripts(){
wp_enqueue_script( 'js-file', get_template_directory_uri() . '/scripts.js');

}

add_action('wp_enqueue_scripts','migueltavares_register_scripts');
?>


require_once('/inc/scripts.php');
require_once('inc/ajax/example.php');

