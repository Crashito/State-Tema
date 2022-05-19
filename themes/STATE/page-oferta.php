<?php
/**
 * Front page template.
 * 
 * @package STATE
 **/
?>
<?php get_header(); ?>

        <!-- start page title -->
        <section class="half-section bg-light-gray parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/portfolio-bg2.jpg');">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Portfolio classic four column</h1>
                        <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Portfolio classic</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="padding-four-lr bg-light-gray no-padding-top lg-padding-two-lr sm-no-padding-lr">
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
                            <!-- start portfolio item -->
                            <li class="grid-item photography wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="https://via.placeholder.com/800x650" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                                <a href="single-project-page-01.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a href="single-project-page-01.html"><span class="alt-font text-extra-dark-gray font-weight-500">Magazine Cover</span></a>
                                        <span class="text-medium d-block margin-one-bottom">Photography</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item logos wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="https://via.placeholder.com/800x650" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                                <a href="single-project-page-02.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a href="single-project-page-02.html"><span class="alt-font text-extra-dark-gray font-weight-500">Biolator Series</span></a>
                                        <span class="text-medium d-block margin-one-bottom">Identity</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item branding logos wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="https://via.placeholder.com/800x650" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                                <a href="single-project-page-03.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a href="single-project-page-03.html"><span class="alt-font text-extra-dark-gray font-weight-500">Potato Oslands</span></a>
                                        <span class="text-medium d-block margin-one-bottom">Branding</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item photography branding wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="https://via.placeholder.com/800x650" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                                <a href="single-project-page-04.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a href="single-project-page-04.html"><span class="alt-font text-extra-dark-gray font-weight-500">Daimler Financial</span></a>
                                        <span class="text-medium d-block margin-one-bottom">Branding</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item branding wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="https://via.placeholder.com/800x650" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                                <a href="single-project-page-05.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a href="single-project-page-05.html"><span class="alt-font text-extra-dark-gray font-weight-500">Skoda Corporate</span></a>
                                        <span class="text-medium d-block margin-one-bottom">Photography</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item photography logos wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="https://via.placeholder.com/800x650" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                                <a href="single-project-page-01.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a href="single-project-page-01.html"><span class="alt-font text-extra-dark-gray font-weight-500">Jeremy Dupont</span></a>
                                        <span class="text-medium d-block margin-one-bottom">Brochure</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item graphics wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="https://via.placeholder.com/800x650" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                                <a href="single-project-page-02.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a href="single-project-page-02.html"><span class="alt-font text-extra-dark-gray font-weight-500">Bill Gardner</span></a>
                                        <span class="text-medium d-block margin-one-bottom">Branding</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow logos animate__fadeIn" data-wow-delay="0.6s">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="https://via.placeholder.com/800x650" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                                <a href="single-project-page-03.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a href="single-project-page-03.html"><span class="alt-font text-extra-dark-gray font-weight-500">The Aparthotel</span></a>
                                        <span class="text-medium d-block margin-one-bottom">Development</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item wow animate__fadeIn">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="https://via.placeholder.com/800x650" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                                <a href="single-project-page-04.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a href="single-project-page-04.html"><span class="alt-font text-extra-dark-gray font-weight-500">Armchair Mojo</span></a>
                                        <span class="text-medium d-block margin-one-bottom">E-commerce</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item photography branding graphics wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="https://via.placeholder.com/800x650" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                                <a href="single-project-page-05.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a href="single-project-page-05.html"><span class="alt-font text-extra-dark-gray font-weight-500">Truenorth Web</span></a>
                                        <span class="text-medium d-block margin-one-bottom">Photography</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item graphics wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="https://via.placeholder.com/800x650" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                                <a href="single-project-page-01.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a href="single-project-page-01.html"><span class="alt-font text-extra-dark-gray font-weight-500">Mass Productions</span></a>
                                        <span class="text-medium d-block margin-one-bottom">Branding</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item graphics photography wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="https://via.placeholder.com/800x650" alt="" />
                                        <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                            <div class="portfolio-icon">
                                                <a href="https://via.placeholder.com/800x650" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a> 
                                                <a href="single-project-page-02.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                        <a href="single-project-page-02.html"><span class="alt-font text-extra-dark-gray font-weight-500">Cortifiel Look</span></a>
                                        <span class="text-medium d-block margin-one-bottom">Photography</span>
                                    </div>
                                </div>
                            </li>
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

<?php get_footer(); ?>