<?php
/**
 * Front page template.
 * 
 * @package STATE
 **/
?>
<?php get_header(); ?>

        <!-- start page title -->
        <section class="parallax" data-parallax-background-ratio="0.5" style="background-image:url('https://via.placeholder.com/1920x1100');">
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
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- start filter navigation -->
                        <ul class="portfolio-filter grid-filter nav nav-tabs justify-content-center border-0 text-uppercase font-weight-500 alt-font padding-6-rem-bottom md-padding-4-half-rem-bottom sm-padding-2-rem-bottom">
                            <li class="nav active"><a data-filter="*" href="#">All</a></li>
                            <li class="nav"><a data-filter=".branding" href="#">Branding</a></li>
                            <li class="nav"><a data-filter=".graphics" href="#">Graphics</a></li>
                            <li class="nav"><a data-filter=".logos" href="#">Logos</a></li>
                            <li class="nav"><a data-filter=".photography" href="#">Photography</a></li>
                        </ul>
                        <!-- end filter navigation -->
                    </div>
                </div>
            </div>



            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 filter-content">
                        <ul class="portfolio-classic portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>

                            <?php get_template_part('template-parts/section', 'propiedadescard'); ?>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

<?php get_footer(); ?>