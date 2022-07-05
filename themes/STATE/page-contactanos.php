<?php
/**
 * Template Name: Contactanos
 * 
 * @package STATE
 **/
?>
<?php get_header(); ?>

        <!-- start page title -->
        <section class="parallax" data-parallax-background-ratio="0.5" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/contacto-hero.png');">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 position-relative page-title-extra-small text-center d-flex align-items-center justify-content-center flex-column">
                        <h2 class="text-white alt-font font-weight-500 w-55 md-w-65 sm-w-80 center-col xs-w-100 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Contáctanos</h2>
                    </div>
                    <div class="down-section text-center"><a href="#about" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section>
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-sm-2">
                    <!-- start feature box item -->
                    <div class="col md-margin-50px-bottom sm-margin-30px-bottom">
                        <div class="feature-box text-center">
                            <div class="feature-box-icon">
                                <i class="line-icon-Headset icon-extra-medium text-state margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">Marcanos</span>
                                <p>Phone: 1-800-222-000<br>Fax: 1-800-222-002</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col xs-margin-30px-bottom">
                        <div class="feature-box text-center">
                            <div class="feature-box-icon">
                                <i class="line-icon-Mail-Read icon-extra-medium text-state margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">Mandanos un Email</span>
                                <p><a href="mailto:info@yourdomain.com" class="text-sky-blue-hover">info@yourdomain.com</a><br><a href="mailto:hr@yourdomain.com" class="text-light-blue text-sky-blue-hover">hr@yourdomain.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- end section -->

<?php get_footer(); ?>