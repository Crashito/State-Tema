<?php
/**
 * Header template. 
 * 
 * @package STATE
 **/

?>

<!doctype html>
<html <?php language_attributes() ?>>
<head class="no-js">

    <meta charset="utf-8">

    <meta name="author" content="César Rodrigo Villegas Lozano">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo(' charset '); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=5" />
    <!-- favicon icon -->     
    <link rel="shortcut icon" href="<?php get_template_directory_uri() ?>assets/images/favicon.webp">
    <link rel="apple-touch-icon" href="<?php get_template_directory_uri() ?>/assets/images/apple-touch-icon-57x57.webp">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php get_template_directory_uri() ?>/assets/images/apple-touch-icon-72x72.webp">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php get_template_directory_uri() ?>/assets/images/apple-touch-icon-114x114.webp">
    <?php wp_head(); ?>  
</head>
<body data-mobile-nav-style="classic">

   <?php get_template_part('template-parts/section', 'nav'); ?>