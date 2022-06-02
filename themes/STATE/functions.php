<?php
/**
 * Theme Functions.
 * 
 * @package STATE
 */
//@include 'lib/speed-optimizer.php';


//Load Stylesheets and Javascript
function state_enqueue_scripts()
{
        // Register Styles
        wp_register_style('style-css', get_template_directory_uri() . '/assets/css/style.min.css', array(), false, 'all');
        // Enqueue Styles
        wp_enqueue_style('style-css');
                
        //Register Scripts
        wp_register_script('index-js', get_template_directory_uri() . '/assets/js/index.js', array('jquery'),false , true);
        // Enqueue Scripts
        wp_enqueue_script('index-js');

}
add_action('wp_enqueue_scripts', 'state_enqueue_scripts');



//Theme Options
add_theme_support('menus');
//Menus
register_nav_menus(
	array(
		'top-desktop-menu' => 'Top Desktop Menu Location',
		'top-mobile-menu' => 'Top Mobile Menu Location'
	)
);


add_theme_support( 'post-thumbnails' );
//Custom Image Sizes
add_image_size('blog-large',600,600,true);
add_image_size('blog-related',850,885,true);
add_image_size('blog-small',300,200,true);
