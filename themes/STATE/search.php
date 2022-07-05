<?php
/**
 * Search template file.
 * @package PPSTECH
 **/

$recent_posts = wp_get_recent_posts(array(
    'numberposts' => 5,
    'post_status' => 'publish'
));

$url= get_site_url();
?>
<?php get_header();?>

<!-- start page title -->
<section class="half-section parallax" data-parallax-background-ratio="0.5" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/background-fondo-3.webp');">
    <div class="container">
        <div class="row align-items-stretch justify-content-center extra-small-screen">
            <div class="col-12 col-xl-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                <h1 class="alt-font text-white margin-15px-bottom d-inline-block">Tecnologia para Empresas</h1>
                <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom text-capitalize">
                    Resultados de busqueda                         
                </h2>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section --> 
<section class="blog-right-side-bar pt-0 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">

                <?php get_template_part('template-parts/section', 'blogpost'); ?>

                <!-- start pagination -->
                <div class="col-12 d-flex justify-content-center margin-7-half-rem-top lg-margin-5-rem-top xs-margin-4-rem-top wow animate__fadeIn">
                    <ul class="pagination pagination-style-01 text-small font-weight-500 align-items-center">
                        <li class="page-item"><?php previous_posts_link();?></li>
                        <li class="page-item"><?php next_posts_link();?></li>
                    </ul>
                </div>
                <!-- end pagination -->
            </div>
            <!-- start sidebar -->
            <aside class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-md-7 blog-sidebar lg-padding-4-rem-left md-padding-15px-left">
                <div class="d-inline-block w-100 margin-5-rem-bottom">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-25px-bottom">Buscar publicación</span>
                    <form id="search-form" role="search" method="get" action="">
                        <div class="position-relative">
                            <input class="search-input medium-input border-color-medium-gray border-radius-4px mb-0" placeholder="Ingresa tu consulta..." name="s" value="" type="text" autocomplete="off" />
                            <button type="submit" class="bg-transparent btn text-fast-blue position-absolute right-5px top-8px text-medium md-top-8px sm-top-10px search-button"><i class="feather icon-feather-search ms-0"></i></button>
                        </div> 
                    </form>
                </div>
                <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Categorias</span>
                    <ul class="list-style-07 list-unstyled">
                        <?php 
                            $categories = get_categories();
                            foreach($categories as $category) {
                               echo '<li class="text-capitalize"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a><span class="item-qty">'.$category->count.'</span></li>';
                            }
                        ?>
                    </ul>
                </div>
                <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Publicaciones Recientes</span>
                    <ul class="latest-post-sidebar position-relative">

                        <?php get_template_part('template-parts/section', 'blog-ultimos-post'); ?>
                            
                    </ul>
                <!-- start pagination -->
                <div class="col-12 d-flex justify-content-center margin-7-half-rem-top lg-margin-4-rem-top sm-margin-5-rem-top wow animate__fadeIn">
                    <ul class="pagination pagination-style-01 text-small font-weight-500 align-items-center">
                        <li class="page-item"><?php previous_posts_link();?></li>
                        <li class="page-item"><?php next_posts_link();?></li>
                    </ul>
                </div>
                <!-- end pagination -->
                </div>
            </aside>
            <!-- end sidebar -->
        </div>
    </div>
</section>
<!-- end section -->  

<?php get_footer();?>