<?php
/**
 * Theme Functions.
 * 
 * @package STATE
 */
//@include 'lib/speed-optimizer.php';
//@include 'lib/speed-optimizer.php';


//Load Stylesheets and Javascript
function state_enqueue_scripts()
{
        // Register Styles
        wp_register_style('style-css', get_template_directory_uri() . '/assets/css/style.min.css', array(), false, 'all');
        // Enqueue Styles
        wp_enqueue_style('style-css');

        wp_register_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css', array(), false, 'all');
        // Enqueue Styles
        wp_enqueue_style('custom-css');
                
        //Register Scripts
        wp_register_script('index-js', get_template_directory_uri() . '/assets/js/index.js', array('jquery'),false , true);
        // Enqueue Scripts
        wp_enqueue_script('index-js');

}
add_action('wp_enqueue_scripts', 'state_enqueue_scripts');



//Theme Options
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
add_theme_support('widgets');

//Menus
register_nav_menus(
	array(
		'top-desktop-menu' => 'Top Desktop Menu Location',
		'top-mobile-menu' => 'Top Mobile Menu Location'
	)
);



//Custom Image Sizes
add_image_size('blog-large',600,600,true);
add_image_size('blog-related',850,885,true);
add_image_size('blog-small',300,200,true);


// Register Sidebars
function my_sidebars(){
        register_sidebar(
                array(
                        'name' => 'Page Sidebar',
                        'id'  =>  'page-sidebar',
                        'before_title' => '<h4 class="widget-title">',
                        'after_title' => '</h4>'
                )
        );

        register_sidebar(
                array(
                        'name' => 'Blog Sidebar',
                        'id'  =>  'blog-sidebar',
                        'before_title' => '<h4 class="widget-title">',
                        'after_title' => '</h4>'
                )
        );

        register_sidebar(
                array(
                        'name' => 'Casas Sidebar',
                        'id'  =>  'casas-sidebar',
                        'before_title' => '<h4 class="widget-title">',
                        'after_title' => '</h4>'
                )
        );
}
add_action('widgets_init','my_sidebars');



function houses_post_type(){

        $args = array(
                'labels' => array(
                        'name' => 'Casas',
                        'singular_name' => 'Casa'
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-admin-multisite',
                'supports' => array('title','editor','thumbnail','custom-fields'),
                'rewrite' => array('slug' => 'casas'),


        );

        register_post_type('casas',$args);
}
add_action('init', 'houses_post_type');


function my_first_taxonomy(){
        $args = array(
                'labels' => array(
                        'name' => 'Colonias',
                        'singular_name' => 'Colonia'
                ),
                'public' => true,
                'hierarchical' => false,
                'rewrite' => array('slug' => 'colonias'),
        );
        register_taxonomy('colonias' , array('casas'),$args);


}
add_action('init','my_first_taxonomy');


//Bootstrap Navwalker
function register_navwalker(){
	require_once get_template_directory() . '/lib/wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


//Custom Fields
	
//@include 'lib/custom-fields.php';