<?php
/**
 * Theme Functions.
 * 
 * @package STATE
 */
@include 'lib/speed-optimizer.php';

function state_enqueue_scripts()
{
        // Register Styles
        wp_register_style('style-css', get_template_directory_uri() . '/assets/css/style.min.css', '', false, 'all');
        // Enqueue Styles
        wp_enqueue_style('style-css');

        //Register Scripts
        wp_register_script('modernizr-js', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', '', null, true);
        // Enqueue Scripts
        wp_enqueue_script('modernizr-js');
                
        //Register Scripts
        wp_register_script('index-js-defer', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), null, true);
        // Enqueue Scripts
        wp_enqueue_script('index-js-defer');

}
add_action('wp_enqueue_scripts', 'state_enqueue_scripts');


add_theme_support('menus');
//Menus
register_nav_menus(
    array(
        'top-desktop-menu' => 'Top Desktop Menu Location',
        'top-mobile-menu'  => 'Top Mobile Menu Location',
    )
);

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

  function add_menu_list_item_class($classes, $item, $args) {
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);