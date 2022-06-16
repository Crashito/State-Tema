<?php
/**
 * Pagina base de publicaciones 
 **/

?>
<?php get_header();?>


<div class="container">
	<div class="row">
		


		<?php 
			global $wp_query;

			$big = 999999999;
			echo paginate_links(array(
				'base' => str_replace($big, '%#%',esc_url(get_pagenum_link($big))),
				'format'=> '?paged=%#%',
				'current' => max(1,get_query_var('paged')),
				'total' => $wp_query->max_num_pages
			));
		?>
	</div>
</div>




        <!-- start section --> 
        <section class="padding-eleven-lr pt-0 xl-padding-two-lr xs-no-padding-lr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 blog-content sm-no-padding-lr">
                        <ul class="blog-classic blog-wrapper grid grid-loading grid-5col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large">
                            <li class="grid-sizer"></li>



							<?php get_template_part('template-parts/section', 'archive'); ?>
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-01.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-01.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">The best way to predict the future is to create it</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-01.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-02.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-02.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Creativity is nothing but a mind set free</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-02.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-03.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-03.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Simplicity is the ultimate sophistication</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-03.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-04.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-04.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom"> A company is only as good as the people it keeps</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-04.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.8s">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-05.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-05.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Reason and judgment are the qualities of leader</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-05.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-01.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-01.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Business is combination of war and sport</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-01.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-02.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-02.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Look at usual things with unusual for eyes</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-02.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-03.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-03.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">People ignore design that ignores people</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-03.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-04.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-04.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Good work for people good design is a language</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-04.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.8s">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-05.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-05.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Creativity is only obscure your reference</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-05.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-01.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-01.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">All progress takes place for outside comfort zone</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-01.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-02.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-02.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Everything is designed for things are designed</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-02.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-03.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-03.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Fashion and interior design are one and the same</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-03.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-04.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-04.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">The best comfort food will always be greens</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-04.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.8s">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="blog-post-layout-05.html"><img src="https://via.placeholder.com/800x560" alt=""/></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="blog-post-layout-05.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Get in over your head as often an possible</a>
                                        <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p>
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="blog-post-layout-05.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-gradient-light-purple-light-orange">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                        </ul>
                        <!-- start pagination -->
                        <div class="col-12 d-flex justify-content-center margin-7-half-rem-top lg-margin-4-rem-top sm-margin-5-rem-top wow animate__fadeIn">
                            <ul class="pagination pagination-style-01 text-small font-weight-500 align-items-center">
                                <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left icon-extra-small d-xs-none"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">01</a></li>
                                <li class="page-item active"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#">04</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right icon-extra-small  d-xs-none"></i></a></li>
                            </ul>
                        </div>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->  


<?php get_footer();?>