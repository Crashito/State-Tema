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
        wp_register_style('style-css', get_template_directory_uri() . '/assets/css/style.min.css', array(), false, 'all');
        // Enqueue Styles
        wp_enqueue_style('style-css');

        //Register Scripts
        wp_register_script('modernizr-js', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), false, true);
        // Enqueue Scripts
        wp_enqueue_script('modernizr-js');
                
        //Register Scripts
        wp_register_script('index-js-defer', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), false, true);
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


  function propiedades() {

	$labels = array(
		'name'                  => _x( 'Propiedades', 'Post Type General Name', 'propiedades' ),
		'singular_name'         => _x( 'Propiedad', 'Post Type Singular Name', 'propiedades' ),
		'menu_name'             => __( 'Propiedades', 'propiedades' ),
		'name_admin_bar'        => __( 'Propiedades', 'propiedades' ),
		'archives'              => __( 'Archivo', 'propiedades' ),
		'attributes'            => __( 'Attributos', 'propiedades' ),
		'parent_item_colon'     => __( 'Item padre', 'propiedades' ),
		'all_items'             => __( 'Todos los items', 'propiedades' ),
		'add_new_item'          => __( 'Agregar nueva propiedad', 'propiedades' ),
		'add_new'               => __( 'Agregar nueva', 'propiedades' ),
		'new_item'              => __( 'Nueva propiedad', 'propiedades' ),
		'edit_item'             => __( 'Editar propiedad', 'propiedades' ),
		'update_item'           => __( 'Actualizar propiedad', 'propiedades' ),
		'view_item'             => __( 'Ver propiedad', 'propiedades' ),
		'view_items'            => __( 'Ver propiedades', 'propiedades' ),
		'search_items'          => __( 'Buscar propiedad', 'propiedades' ),
		'not_found'             => __( 'No encontrado', 'propiedades' ),
		'not_found_in_trash'    => __( 'No encontrado en la basura', 'propiedades' ),
		'featured_image'        => __( 'Imagen principal', 'propiedades' ),
		'set_featured_image'    => __( 'Colocar imagen principal', 'propiedades' ),
		'remove_featured_image' => __( 'Remover imagen principal', 'propiedades' ),
		'use_featured_image'    => __( 'Usar como imagen principal', 'propiedades' ),
		'insert_into_item'      => __( 'Insertar dentro de una propiedad', 'propiedades' ),
		'uploaded_to_this_item' => __( 'Subir a este item', 'propiedades' ),
		'items_list'            => __( 'Lista de items', 'propiedades' ),
		'items_list_navigation' => __( 'Lista de items para navigacion', 'propiedades' ),
		'filter_items_list'     => __( 'Lista para filtrar items', 'propiedades' ),
	);
	$args = array(
		'label'                 => __( 'Propiedad', 'propiedades' ),
		'description'           => __( 'Propiedades', 'propiedades' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 3,
		'menu_icon'             => 'dashicons-admin-home',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'propiedades', $args );

}
add_action( 'init', 'propiedades', 0 );

add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
    } else {
    $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
  }
  //Custom Imate Sizes
  add_image_size('blog-extra-large', 1920, 400, true);
  add_image_size('blog-main-lg', 940, 940, true);
  add_image_size('blog-main-md', 800, 800, true);
  add_image_size('blog-blog-small', 800, 650, true);


  function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );