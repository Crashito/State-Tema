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
                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">
                    <!-- start feature box item -->
                    <div class="col md-margin-50px-bottom sm-margin-30px-bottom">
                        <div class="feature-box text-center">
                            <div class="feature-box-icon">
                                <i class="line-icon-Geo2-Love icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">Litho Design</span>
                                <p class="d-inline-block w-70 lg-w-90 md-w-60 sm-w-80 xs-w-100">401 Broadway, 24th Floor New York, NY 10013</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col md-margin-50px-bottom sm-margin-30px-bottom">
                        <div class="feature-box text-center">
                            <div class="feature-box-icon">
                                <i class="line-icon-Headset icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">Let's Talk</span>
                                <p>Phone: 1-800-222-000<br>Fax: 1-800-222-002</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col xs-margin-30px-bottom">
                        <div class="feature-box text-center">
                            <div class="feature-box-icon">
                                <i class="line-icon-Mail-Read icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">E-mail Us</span>
                                <p><a href="mailto:info@yourdomain.com" class="text-sky-blue-hover">info@yourdomain.com</a><br><a href="mailto:hr@yourdomain.com" class="text-light-blue text-sky-blue-hover">hr@yourdomain.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="big-section fix-background overlap-height" style="background-image: url('https://via.placeholder.com/1920x1099');">
            <div class="opacity-full bg-gradient-fast-blue-purple"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-4 text-center margin-35px-top overlap-gap-section sm-no-margin-top">
                        <a href="https://www.youtube.com/watch?v=g0f_BRYJLJE" class="popup-youtube video-icon-box video-icon-large text-center position-relative">
                            <span>
                                <span class="video-icon bg-white margin-15px-bottom">
                                    <i class="icon-simple-line-control-play text-gradient-fast-blue-purple"></i>
                                    <span class="video-icon-sonar">
                                        <span class="video-icon-sonar-bfr bg-white opacity-7"></span>
                                        <span class="video-icon-sonar-afr bg-white"></span>
                                    </span>
                                </span>
                                <span class="video-icon-text w-100 alt-font font-weight-500 text-extra-medium d-block text-uppercase text-white margin-20px-top">Be information</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="bg-light-gray overflow-visible pt-md-0">
            <div class="container">
                <div class="z-index-6 position-relative overlap-section-three-fourth bg-white box-shadow-large padding-8-rem-all md-padding-5-rem-all xs-padding-4-rem-tb xs-padding-2-rem-lr wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                            <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Fill out the form and we'll be in touch soon!</span>
                            <h4 class="alt-font font-weight-600 text-extra-dark-gray">How we can help you?</h4>
                        </div>
                        <div class="col-12">
                            <!-- start contact form -->
                            <form action="email-templates/contact-form.php" method="post" novalidate="">
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                        <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Your name">
                                        <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Your email address">
                                        <input class="medium-input bg-white mb-0" type="tel" name="phone" placeholder="Your mobile">
                                    </div>
                                    <div class="col margin-4-rem-bottom sm-margin-20px-bottom">
                                        <textarea class="medium-textarea bg-white h-200px" rows="6" name="comment" placeholder="Your message"></textarea>
                                    </div>
                                    <div class="col text-start sm-margin-25px-bottom">
                                        <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                        <label for="terms_condition" class="text-small d-inline-block align-top w-85 md-w-90 xs-w-85">I accept the terms & conditions and I understand that my data will be hold securely in accordance with the <a href="privacy.html" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                                    </div>
                                    <div class="col text-center text-md-end">
                                        <button id="project-contact-us-button" class="btn btn-medium btn-gradient-light-purple-light-orange mb-0 submit" type="submit">Send Message</button>
                                    </div>
                                </div>
                                <div class="form-results d-none"></div>
                            </form>
                            <!-- end contact form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

<?php get_footer(); ?>