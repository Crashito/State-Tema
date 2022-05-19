<?php
/**
 * Theme Functions.
 * 
 * @package STATE
 */

function state_enqueue_scripts()
{
        // Register Styles
        wp_register_style('style-css', get_template_directory_uri() . '/assets/css/style.min.css', '', false, 'all');
        // Enqueue Styles
        wp_enqueue_style('style-css');

        //Register Scripts
        wp_register_script('modernizr-js', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', '', false, true);
        // Enqueue Scripts
        wp_enqueue_script('modernizr-js');
                
        //Register Scripts
        wp_register_script('index-js-defer', get_template_directory_uri() . '/assets/js/index.js', '', false, true);
        // Enqueue Scripts
        wp_enqueue_script('index-js-defer');

}
add_action('wp_enqueue_scripts', 'state_enqueue_scripts');
