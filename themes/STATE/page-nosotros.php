<?php
/**
 * Template Name: Nosotros
 * 
 * @package STATE
 **/
?>
<?php get_header(); ?>

        <!-- start page title -->
        <section class="parallax" data-parallax-background-ratio="0.5" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/nosotros-hero.png');">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 position-relative page-title-extra-small text-center d-flex align-items-center justify-content-center flex-column">
                        <h1 class="alt-font text-white opacity-6 margin-20px-bottom">NOSOTROS</h1>
                        <h2 class="text-white alt-font font-weight-500 w-55 md-w-65 sm-w-80 center-col xs-w-100 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Estudio Arquitectónico STATE</h2>
                    </div>
                    <div class="down-section text-center"><a href="#about" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section id="about" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 pe-lg-0 d-flex md-margin-30px-bottom">
                        <div class="w-100 md-h-700px sm-h-550px xs-h-450px cover-background" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/nosotros-primera-imagen.png');"></div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 ps-lg-0 d-flex sm-margin-30px-bottom">
                        <div class="justify-content-center w-100 d-flex flex-column bg-state padding-5-half-rem-lr lg-padding-3-rem-lr md-padding-4-rem-all">
                            <span class="text-extra-large alt-font font-weight-500 text-white margin-20px-bottom d-block">Comenzamos esta empresa con el deseo de diseñar y construir cosas asombrosas.</span>
                            <p class="text-white opacity-7">Diseñamos y ejecutamos proyectos de vivienda enfocando nuestros esfuerzos en el seguimiento y atención personalizada.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/seguimiento-segunda-imagen.png');" alt="" />
                        <div class="bg-white padding-3-half-rem-lr padding-3-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-all sm-padding-4-rem-all last-paragraph-no-margin">
                            <span class="alt-font text-extra-dark-gray font-weight-500 margin-10px-bottom d-block">Te asistimos en todo momento.</span>
                            <p>Nunca te dejaremos solo, estamos aquí para llevarte paso a paso en tu proyecto de vivienda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="bg-slate-blue overlap-height xs-no-padding wow animate__fadeIn">
            <div class="container xs-no-padding">
                <div class="row align-items-center overlap-gap-section no-margin-lr">
                    <div class="col-12 col-lg-6 align-self-lg-stretch p-0 cover-background md-h-400px wow animate__fadeIn" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/tercera-imagen.png');');"></div>
                    <div class="col-12 col-lg-6 p-0 text-center wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="bg-state padding-6-rem-lr padding-7-rem-tb lg-padding-4-rem-lr lg-padding-5-rem-tb md-padding-5-rem-all">
                            <span class="text-extra-medium alt-font margin-20px-bottom d-block text-white opacity-7">Construcción con estética inolvidable.</span>
                            <h5 class="alt-font text-white font-weight-500 margin-40px-bottom xs-margin-20px-bottom">Te ayudamos a diseñar tu hogar de forma atemporal y construir la vivienda perfecta para ti.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="wow animate__fadeIn">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-xl-7 col-md-8 col-sm-10 text-center text-md-start sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                        <h6 class="alt-font text-extra-dark-gray font-weight-500 mb-0 md-w-90 sm-w-100">Pensadores creativos y constructores confiables, comencemos tu proyecto hoy mismo.</h6>
                    </div>
                    <div class="col-12 col-xl-5 col-md-4 text-center text-md-end wow animate__fadeIn" data-wow-delay="0.2s">
                        <a href="contact-us-classic.html" class="btn btn-large btn-round-edge btn-state btn-slide-right-bg">Contáctanos</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

<?php get_footer(); ?>