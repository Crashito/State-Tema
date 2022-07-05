<?php
/**
 * Template Name: Oferta
 * 
 * @package STATE
 **/
?>
<?php get_header(); ?>

        <!-- start page title -->
        <section class="parallax" data-parallax-background-ratio="0.5" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/desarrollos-hero.png');">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 position-relative page-title-extra-small text-center d-flex align-items-center justify-content-center flex-column">
                        <h1 class="alt-font text-white opacity-6 margin-20px-bottom">OFERTA</h1>
                        <h2 class="text-white alt-font font-weight-500 w-55 md-w-65 sm-w-80 center-col xs-w-100 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Nuestras Construcciónes</h2>
                    </div>
                    <div class="down-section text-center"><a href="#about" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="padding-four-lr bg-light-gray lg-padding-two-lr sm-no-padding-lr">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 filter-content">
                        
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-4">
                            <?php get_template_part('template-parts/section', 'construccion'); ?>
                        </div>

                        
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

<?php get_footer(); ?>